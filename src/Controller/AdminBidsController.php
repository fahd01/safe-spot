<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\BidRepository;
use App\Entity\Bid;
use App\Entity\Loan;
use App\Form\AdminBidType;
use App\Entity\BidStatus;
use App\Entity\LoanStatus;
use App\Repository\LoanRepository;

class AdminBidsController extends AbstractController
{
    #[Route('/admin/bids/list', name: 'app_admin_bids_list')]
    public function index(BidRepository $repo): Response
    {
        $bids=$repo->findAll();

        return $this->render('bids/admin/listBids.html.twig', [
            'bids' => $bids
        ]);
    }

    #[Route('/admin/bids/create', name: 'app_admin_bids_edit')]
    public function new(Request $request, BidRepository $repo ): Response
    {
        $id = $request->query->get('id');

        if (  ctype_digit($id) ) {
            $bid=$repo->find($id);
        }
        else {
            $bid = new Bid();
        }

        $form = $this->createForm(AdminBidType::class, $bid);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $bid = $form->getData();
            $repo->save($bid);
            return $this->redirectToRoute('app_admin_bids_list');
        }

        return $this->render('bids/admin/editBid.html.twig', [
            'form' => $form
        ]);

    }

    #[Route('/admin/bids/{id}/delete', name: 'app_admin_bids_delete')]
    public function delete (Bid $bid,BidRepository $repo){
        $repo->delete($bid);
        return $this->redirectToRoute('app_admin_bids_list');
    }

}
