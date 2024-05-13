<?php

namespace App\Controller;
use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use App\Entity\Actualite;
use App\Entity\Likenews;
use App\Form\ActualiteType;
use App\Repository\ActualiteRepository;
use App\Repository\LikenewsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/actualite')]
class ActualiteController extends AbstractController
{
    #[Route('/', name: 'app_actualite_index', methods: ['GET'])]
    public function index(ActualiteRepository $actualiteRepository): Response
    {
        return $this->render('actualite/index.html.twig', [
            'actualites' => $actualiteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_actualite_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $actualite = new Actualite();
        $form = $this->createForm(ActualiteType::class, $actualite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
             // Handle file upload
        /** @var UploadedFile $file */
        $file = $actualite->getImageFile();

        if ($file) {
            $uploadsDirectory = $this->getParameter('uploads_directory');
            $filename = md5(uniqid()) . '.' . $file->guessExtension();

            $file->move($uploadsDirectory, $filename);

            // Update the imagePath property
            $actualite->setImg($filename);
        }
            $entityManager->persist($actualite);
            $entityManager->flush();

            return $this->redirectToRoute('app_actualite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('actualite/new.html.twig', [
            'actualite' => $actualite,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_actualite_show', methods: ['GET'])]
    public function show(Actualite $actualite, LikenewsRepository $rep, Request $request): Response
    {
        $countlikes = 0;
        $id_user = 3; // You'll probably want to replace this with the actual user ID, e.g., from the security token
    
        // Check if the user has already liked the news
        $existingLike = $rep->findOneBy(['new' => $actualite, 'id_user' => $id_user]);
    
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $countlikes = $rep->countLikesForActualite($actualite);

        return $this->render('actualite/show.html.twig', [
            'actualite' => $actualite,
            'form' => $form->createView(),
            'existingLike' => $existingLike,'numberLike' => $countlikes,
        ]);
    }
    #[Route('/{id}/like', name: 'app_actualite_like', methods: ['POST'])]
public function like(Actualite $actualite, LikenewsRepository $rep, EntityManagerInterface $entityManager): Response
{
    $id_user = 3; // Replace with the actual user ID
    
    // Check if the user has already liked the news
    $existingLike = $rep->findOneBy(['new' => $actualite, 'id_user' => $id_user]);
    
    if ($existingLike) {
        // User has already liked, so remove the like
        $entityManager->remove($existingLike);
    } else {
        // User hasn't liked, so add a new like
        $like = new Likenews();
        $like->setNew($actualite);
        $like->setIdUser($id_user);
        $entityManager->persist($like);
    }
    
    $entityManager->flush();
    
    return $this->redirectToRoute('app_actualite_show', ['id' => $actualite->getId()]);
}
    
    #[Route('/{id}/edit', name: 'app_actualite_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Actualite $actualite, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ActualiteType::class, $actualite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_actualite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('actualite/edit.html.twig', [
            'actualite' => $actualite,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_actualite_delete', methods: ['POST'])]
    public function delete(Request $request, Actualite $actualite, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$actualite->getId(), $request->request->get('_token'))) {
            $entityManager->remove($actualite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_actualite_index', [], Response::HTTP_SEE_OTHER);
    }
}
