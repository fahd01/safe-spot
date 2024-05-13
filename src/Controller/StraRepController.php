<?php

namespace App\Controller;

use App\Entity\StarRep;
use App\Form\StarRepType;
use App\Repository\StarRepRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/stra/rep')]
class StraRepController extends AbstractController
{
    #[Route('/', name: 'app_stra_rep_index', methods: ['GET'])]
    public function index(StarRepRepository $starRepRepository): Response
    {
        return $this->render('stra_rep/index.html.twig', [
            'star_reps' => $starRepRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_stra_rep_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $starRep = new StarRep();
        $form = $this->createForm(StarRepType::class, $starRep);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($starRep);
            $entityManager->flush();

            return $this->redirectToRoute('app_stra_rep_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('stra_rep/new.html.twig', [
            'star_rep' => $starRep,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_stra_rep_show', methods: ['GET'])]
    public function show(StarRep $starRep): Response
    {
        return $this->render('stra_rep/show.html.twig', [
            'star_rep' => $starRep,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_stra_rep_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, StarRep $starRep, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(StarRepType::class, $starRep);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_stra_rep_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('stra_rep/edit.html.twig', [
            'star_rep' => $starRep,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_stra_rep_delete', methods: ['POST'])]
    public function delete(Request $request, StarRep $starRep, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$starRep->getId(), $request->request->get('_token'))) {
            $entityManager->remove($starRep);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_stra_rep_index', [], Response::HTTP_SEE_OTHER);
    }
}
