<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\AutomationRule;
use App\Form\AutomationRuleType;
use App\Entity\Automation;
use App\Form\AutomationType;

use App\Entity\AutomationRuleAttribute;
use App\Entity\AutomationRuleOperator;

use App\Repository\AutomationRepository;
use App\Repository\UserRepository;

class AutomationController extends AbstractController {

    ## TODO editing automation rules, the new added rule overrides the last rule in rules array

    #[Route('/bids/automations/create', name: 'app_bids_automations_create')]
    public function new(Request $request, AutomationRepository $repo, UserRepository $userRepo): Response {
        $id = $request->query->get('id');
        $detailsView = false;
        if ( ctype_digit($id) ) { $automation=$repo->find($id); $detailsView=true;}
        else {
            $automation = new Automation();
            # TODO inject and use current user instead
            $currentUser = $userRepo->find(1);
            $automation->setOwner($currentUser);
        }

        $form = $this->createForm(AutomationType::class, $automation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $automation = $form->getData();
            $repo->save($automation);
            return $this->redirectToRoute('app_bids_automations_mine');
        }

        return $this->render('bids/createAutomation.html.twig', [
            'form' => $form,
            'detailsView' => $detailsView,
        ]);
    }

    #[Route('/bids/automations/mine', name: 'app_bids_automations_mine')]
    public function myBidsAutomation(Request $request, AutomationRepository $repo): Response {
        # TODO inject and use current user
        $userId = 1;
        $automations=$repo->findBy(['owner' => $userId]);
        return $this->render('bids/myAutomations.html.twig', [
            'automations' => $automations,
        ]);
    }

    #[Route('/bids/automations/{id}/delete', name: 'app_automations_delete')]
    public function delete (Automation $automation, AutomationRepository $repo){
        $repo->delete($automation);
        return $this->redirectToRoute('app_bids_automations_mine');
    }

    #[Route('/bids/automations/{id}/disableToggle', name: 'app_automations_disable')]
    public function disableToggle (Automation $automation, AutomationRepository $repo){
        $automation->setDisabled(!$automation->isDisabled());
        $repo->save($automation);
        return $this->redirectToRoute('app_bids_automations_mine');
    }
}
