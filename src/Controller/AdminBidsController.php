<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\BidRepository;
use App\Entity\Bid;
use App\Entity\Loan;
use App\Form\BidType;
use App\Entity\BidStatus;
use App\Entity\LoanStatus;
use App\Repository\LoanRepository;

class BidController extends AbstractController
{
    #[Route('/bids/mine', name: 'app_my_bids')]
    public function index(BidRepository $repo): Response
    {
        # TODO inject and use current user
        $userId = 1;
        $bids=$repo->findBy(['bidder' => $userId]);;

        return $this->render('bids/myBids.html.twig', [
            'controller_name' => 'BidController',
            'bids' => $bids
        ]);
    }

    #[Route('/loans/{id}/bids/create', name: 'app_bids_create')]
    public function new(Request $request, Loan $loan, BidRepository $repo ): Response
    {
        $id = $request->query->get('id');

        if (  ctype_digit($id) ) {
            $bid=$repo->find($id);
        }
        else {
            $bid = new Bid();
            $bid->setLoan($loan);
            # TODO inject and use current user as bidder
            #$bid->setBidder($currentUser)
        }

        $form = $this->createForm(BidType::class, $bid);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $bid = $form->getData();
            $repo->save($bid);
            return $this->redirectToRoute('app_my_bids');
        }

        return $this->render('bids/placeBid.html.twig', [
            'form' => $form
        ]);

    }

    #[Route('/bids/{id}/delete', name: 'app_delete_bid')]
    public function delete (Bid $bid,BidRepository $repo){
        $repo->delete($bid);
        return $this->redirectToRoute('app_my_bids');
    }



    #[Route('/bids/{id}/approve', name: 'app_approve_bid')]
    public function approve (Bid $bid, BidRepository $bidRepo, LoanRepository $loanRepo){
        # TODO check if loan is still in bidding and how much is remaining
        $loan = $bid->getLoan();
        $remainingAmount = $loan->getAmount() - $loan->collectedBids();
        if ($remainingAmount < $bid->getAmount())
            return $this->redirectToRoute('app_loans_mine');

        $bid->setStatus(BidStatus::Approved);
        $bidRepo->save($bid);

        # TODO use event ??
        if ($remainingAmount == $bid->getAmount()) {
            $loan->setToActive();
            $loanRepo->save($loan);
        }
        return $this->redirectToRoute('app_loans_mine');
    }

    #[Route('/bids/{id}/reject', name: 'app_reject_bid')]
    public function reject (Bid $bid,BidRepository $repo){
        $bid->setStatus(BidStatus::Rejected);
        $repo->save($bid);
        return $this->redirectToRoute('app_loans_mine');
    }
}
