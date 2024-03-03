<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Loan;
use App\Form\LoanType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\LoanRepository;

use Symfony\Bundle\SecurityBundle\Security;

class LoansController extends AbstractController
{
    #[Route('/loans/list', name: 'app_loans_list')]
    public function list(LoanRepository $repo): Response
    {
        $loans=$repo->findAll();

        return $this->render('loans/findLoan.html.twig', [
            'controller_name' => 'LoansListController',
            'loanskey'=>$loans,
        ]);
    }

    #[Route('/loans/create', name: 'app_loans_create')]
    public function new(Request $request,LoanRepository $loanRepo , Security $security): Response
    {
        $id = $request->query->get('id');

        if (  ctype_digit($id) ) {
            $loan=$loanRepo->find($id);
        }
        else {
            $loan = new Loan();
            # set current user
            $currentUser = $security->getUser();
            $loan->setBorrower($currentUser);
        }

        $form = $this->createForm(LoanType::class, $loan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $loan = $form->getData();
            $loanRepo->save($loan);
            return $this->redirectToRoute('app_loans_mine');
        }

        return $this->render('loans/createLoan.html.twig', [
            'form' => $form
        ]);

    }

    #[Route('/loans/{id}/delete', name: 'app_loans_delete')]
    public function delete (Loan $loan,LoanRepository $repository){
        $repository->delete($loan);
        return $this->redirectToRoute('app_loans_list');
    }

    #[Route('/loans/mine', name: 'app_loans_mine')]
    public function myLoans(LoanRepository $repo, Security $security): Response
    {
        # set current user
        $userId = $security->getUser()->getId();
        $loans=$repo->findBy(['borrower' => $userId]);

        return $this->render('loans/myLoans.html.twig', [
            'controller_name' => 'LoansListController',
            'loans'=>$loans,
        ]);
    }
}
