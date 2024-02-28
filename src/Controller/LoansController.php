<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Loan;
use App\Form\LoanType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\LoanRepository;

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
    public function new(Request $request,LoanRepository $loanRepo ): Response
    {
        $id = $request->query->get('id');

        if (  ctype_digit($id) ) {
            $loan=$loanRepo->find($id);
        }
        else {
            $loan = new Loan();
        }

        $form = $this->createForm(LoanType::class, $loan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $loan = $form->getData();
            $loanRepo->save($loan);
            return $this->redirectToRoute('app_loans_list');
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
    public function myLoans(LoanRepository $repo): Response
    {
        # TODO inject and use current user
        $userId = 1;
        $loans=$repo->findBy(['borrower' => $userId]);

        return $this->render('loans/myLoans.html.twig', [
            'controller_name' => 'LoansListController',
            'loans'=>$loans,
        ]);
    }

    #[Route('/admin/loans/list', name: 'app_admin_loans_list')]
    public function adminList(LoanRepository $repo): Response
    {
        $loans=$repo->findAll();

        return $this->render('loans/admin/listLoans.html.twig', [
            'controller_name' => 'LoansListController',
            'loanskey'=>$loans,
        ]);
    }

    #[Route('/admin/loans/stats', name: 'app_admin_loans_stats')]
    public function adminStats(LoanRepository $repo): Response
    {
        $loans=$repo->findAll();

        return $this->render('loans/admin/stats.html.twig', [
            'controller_name' => 'LoansListController',
            'loanskey'=>$loans,
        ]);
    }
}
