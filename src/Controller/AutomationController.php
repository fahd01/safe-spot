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
use Symfony\Bundle\SecurityBundle\Security;

class AutomationController extends AbstractController {

    #[Route('/bids/automations/create', name: 'app_bids_automations_create')]
    public function new(Request $request, AutomationRepository $repo, UserRepository $userRepo, Security $security): Response {
        $id = $request->query->get('id');
        $detailsView = false;
        if ( ctype_digit($id) ) { $automation=$repo->find($id); $detailsView=true;}
        else {
            $automation = new Automation();
            # set current user
            $currentUser = $security->getUser();
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
    public function myBidsAutomation(Request $request, AutomationRepository $repo, Security $security): Response {
        # set current user
        $userId = $security->getUser()->getId();
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

    #[Route('/bids/automations/stats', name: 'app_automations_stats')]
    public function stats (AutomationRepository $repo, Security $security){
        # set current user
        $userId = $security->getUser()->getId();
        $automations=$repo->findBy(['owner' => $userId]);
        return $this->render('bids/automationStats.html.twig', [
            'automations' => $automations,
        ]);
    }
}
