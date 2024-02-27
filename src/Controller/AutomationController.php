<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\BidRepository;
use App\Entity\AutomationRule;
use App\Form\AutomationRuleType;
use App\Entity\Automation;
use App\Form\AutomationType;

use App\Entity\AutomationRuleAttribute;
use App\Entity\AutomationRuleOperator;

class AutomationController extends AbstractController
{
    #[Route('/bids/automations/create', name: 'app_bids_automations_create')]
    public function new(Request $request): Response
    {
        $automation = new Automation();

        $rule = new AutomationRule();
        /*
        $rule->setAttribute(AutomationRuleAttribute::Amount);
        $rule->setOperator(AutomationRuleOperator::Equals);
        $rule->setValue(1000);
        $automation->addRule($rule);
        */

        $form = $this->createForm(AutomationType::class, $automation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $automation = $form->getData();
            //$loanRepo->save($loan);
            return $this->redirectToRoute('app_bids_automations_mine');
        }

        return $this->render('bids/createAutomation.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/bids/automations/mine', name: 'app_bids_automations_mine')]
    public function myBidsAutomation(Request $request): Response
    {

        return $this->render('bids/myAutomations.html.twig', [

        ]);
    }

}
