<?php

namespace App\Controller;

use App\Entity\Loan;
use App\Entity\Bid;
use App\Entity\Automation;
use App\Entity\User;
use App\Repository\AutomationRepository;
use App\Repository\LoanRepository;
use App\Repository\BidRepository;
use App\Repository\UserRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LendingStatsController extends AbstractController {

    private $automationRepository;
    private $loanRepository;
    private $bidRepository;
    private $userRepository;

    public function __construct(
        AutomationRepository $automationRepository,
        LoanRepository $loanRepository,
        BidRepository $bidRepository,
        UserRepository $userRepository,
    ) {
        $this->automationRepository = $automationRepository;
        $this->loanRepository = $loanRepository;
        $this->bidRepository = $bidRepository;
        $this->userRepository = $userRepository;
    }

    #[Route('/admin/loans/stats', name: 'app_admin_loans_stats')]
    public function adminStats(): Response
    {
        $loans=$this->loanRepository->findAll();

        return $this->render('loans/admin/stats.html.twig', [
            'controller_name' => 'LoansListController',
            'loanskey'=>$loans,
        ]);
    }

}
