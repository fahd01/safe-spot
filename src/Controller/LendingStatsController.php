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

use App\Entity\LoanStatus;
use App\Entity\BidStatus;

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
        $inBiddingLoans=$this->loanRepository->count(['status' => LoanStatus::InBidding->value]);
        $activeLoans=$this->loanRepository->count(['status' => LoanStatus::Active->value]);
        $paidLoans=$this->loanRepository->count(['status' => LoanStatus::Paid->value]);

        $pendingBids=$this->bidRepository->count(['status' => BidStatus::Pending->value]);
        $approvedBids=$this->bidRepository->count(['status' => BidStatus::Approved->value]);
        $rejectedBids=$this->bidRepository->count(['status' => BidStatus::Rejected->value]);
        $activeBids=$this->bidRepository->count(['status' => BidStatus::Active->value]);
        $paidBids=$this->bidRepository->count(['status' => BidStatus::Paid->value]);

        return $this->render('loans/admin/stats.html.twig', [
            'loanStatusesData'=> [$inBiddingLoans, $activeLoans, $paidLoans],
            'bidStatusesData'=> [$pendingBids, $approvedBids, $rejectedBids, $activeBids, $paidBids],
        ]);
    }

}
