<?php

namespace App\Controller;

use App\Entity\RecResponse;
use App\Form\RecResponseType;
use App\Repository\RecResponseRepository;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/rec/response')]
class RecResponseController extends AbstractController
{
    #[Route('/', name: 'app_rec_response_index', methods: ['GET'])]
    public function index(RecResponseRepository $recResponseRepository): Response
    {
        return $this->render('rec_response/index.html.twig', [
            'rec_responses' => $recResponseRepository->findAll(),
        ]);
    }

    #[Route('/{id}/new', name: 'app_rec_response_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, ReclamationRepository $reprec, int $id): Response
    {
        // Now, $id will be properly defined, coming from the route parameter.
        $rec = $reprec->find($id); // Assuming you want to find a single record by its ID
        
        $recResponse = new RecResponse();
        if ($rec) {
            $recResponse->setReclamation($rec);
        } else {
            // Handle the case where the reclamation is not found, perhaps redirect or show an error.
        }
    
        $form = $this->createForm(RecResponseType::class, $recResponse);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($recResponse);
            $rec->setverified(1);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_rec_response_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->render('rec_response/new.html.twig', [
            'rec_response' => $recResponse,
            'form' => $form,
        ]);
    }
    

    #[Route('/{id}', name: 'app_rec_response_show', methods: ['GET'])]
    public function show(RecResponse $recResponse): Response
    {
        return $this->render('rec_response/show.html.twig', [
            'rec_response' => $recResponse,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_rec_response_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, RecResponse $recResponse, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RecResponseType::class, $recResponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_rec_response_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('rec_response/edit.html.twig', [
            'rec_response' => $recResponse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_rec_response_delete', methods: ['POST'])]
    public function delete(Request $request, RecResponse $recResponse, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$recResponse->getId(), $request->request->get('_token'))) {
            $entityManager->remove($recResponse);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_rec_response_index', [], Response::HTTP_SEE_OTHER);
    }
}
