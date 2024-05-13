<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Service\QrCodeService;
use Symfony\Component\Routing\RouterInterface;

#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    private PaginatorInterface $paginator;

    public function __construct(PaginatorInterface $paginator)
    {
        $this->paginator = $paginator;
    }

    #[Route('/s/searchT', name:'searchT', methods: ['POST'])]
    public function searchArticles(Request $request, ReclamationRepository $repository): JsonResponse
    {
        $requestString = $request->get('searchValue');
        $reclamations = $repository->findBySearchTerm($requestString);

        $responseArray = array_map(function ($reclamation) {
            return [
                'id' => $reclamation->getId(),
                'sujet' => $reclamation->getSujet(),
                'Description' => $reclamation->getDescription(),
                'dt' => $reclamation->getDt() ? $reclamation->getDt()->format('Y-m-d H:i:s T') : '',
                'verified' => $reclamation->getVerified(),
            ];
        }, $reclamations);

        return new JsonResponse($responseArray);
    }

    #[Route('/qr/{id}', name: 'qr', methods: ['GET'])]
    public function qr(int $id, ReclamationRepository $repository, QrCodeService $qrcodeService, RouterInterface $router): Response
    {
        $reclamation = $repository->find($id);

        if (!$reclamation) {
            throw $this->createNotFoundException('No reclamation found for id ' . $id);
        }

        $url = $router->generate('app_reclamation_show', ['id' => $id], RouterInterface::ABSOLUTE_URL);

        $details = 'Sujet: ' . $reclamation->getSujet() .
               ' | Description: ' . $reclamation->getDescription() .
               ' | Date: ' . ($reclamation->getDt() ? $reclamation->getDt()->format('Y-m-d H:i:s') : 'N/A') .
               ' | Verified: ' . ($reclamation->isVerified() ? 'Yes' : 'No');

        $qrCode = $qrcodeService->qrcode($url, $details);

        return $this->render('reclamation/qr.html.twig', [
            'qrCode' => $qrCode,
        ]);
    }

    #[Route('/pdf', name: 'app_reclamation_pdf', methods: ['GET'])]
public function exportPdf(Request $request, ReclamationRepository $reclamationRepository): Response
{
    $reclamations = $reclamationRepository->findAll();

    // Create an instance of the Dompdf class
    $dompdf = new Dompdf();

    // Load HTML content from the template
    $html = $this->renderView('reclamation/pdf.html.twig', ['reclamations' => $reclamations]);

    // Load HTML to Dompdf
    $dompdf->loadHtml($html);

    // Set paper size (A4) and orientation (portrait)
    $dompdf->setPaper('A4', 'portrait');

    // Render PDF (first pass to get total pages)
    $dompdf->render();

    // Stream the file
    $dompdf->stream("reclamations.pdf", [
        "Attachment" => true
    ]);

    return new Response();
}
    #[Route('/', name: 'app_reclamation_index', methods: ['GET'])]
    public function index(Request $request, ReclamationRepository $reclamationRepository): Response
    {
        $query = $reclamationRepository->findAllQuery();

        $pagination = $this->paginator->paginate(
            $query, // Query to paginate
            $request->query->getInt('page', 1), // Current page number, default is 1
            3 // Number of items per page
        );

        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $pagination,
        ]);
    }

    #[Route('/new', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reclamation);
            $entityManager->flush();

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }
}
