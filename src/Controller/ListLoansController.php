<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\LoanRepository;

# Imports for create loan
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Loan;
use App\Form\LoanType;
use App\Repository\UserRepository;

use Psr\Log\LoggerInterface;

class ListLoansController extends AbstractController
{
    #[Route('/loans/list', name: 'app_list_loans')]
    public function index(
        LoanRepository $repository
    ): Response
    {
        # TODO add progress toward ACTIVE
        $loans = $repository->findAll();

        return $this->render('list_loans/index.html.twig', [
            'controller_name' => 'ListLoansController',
            'loans' => $loans,
        ]);
    }

    #[Route('/loans/create', name: 'app_create_loans')]
    public function new(
        Request $request,
        LoanRepository $repository,
        LoggerInterface $log,
        UserRepository $userRepo # TODO remove
    ): Response
        {
            $loan = null;
            $id = $request->query->get('id');
            $log->info($id);
            $log->info(is_int($id) || ctype_digit($id));

            if (is_int($id) || ctype_digit($id)) {
                $log->info("IS INT");
                $loan = $repository->find($id);
            }else
                $log->info("IS N0T INT");
            // just set up a fresh $loan object
            //if ($loan == null)
                //$loan = new Loan();

            $form = $this->createForm(LoanType::class, $loan);

            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                // $form->getData() holds the submitted values
                // but, the original `$loan` variable has also been updated
                $loan = $form->getData();
                # TODO set borrowerId to current user
                $loan->setBorrower($userRepo->find(1));
                $repository->save($loan);
                return $this->redirectToRoute('app_list_loans');
            }

            return $this->render('list_loans/create-loan.html.twig', [
                'form' => $form,
            ]);
        }
}
