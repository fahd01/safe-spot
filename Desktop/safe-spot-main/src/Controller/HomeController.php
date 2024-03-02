<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ActualiteRepository;
use App\Entity\Actualite;
use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;    

use Symfony\Component\Form\FormError;

class HomeController extends AbstractController
{
    public $list = array('test', 'hey', 'khayebbbbbbb');

    public function checkf(String $chain, Array $words) {
        for ($i = 0; $i < count($words); $i++) {
            $position = strpos($chain, $words[$i]);
            
            if ($position !== false) {
                // If strpos() returns an integer, it means the needle was found
                return 0;
            } 
        }
        return 1;
    }
    #[Route('/home', name: 'app_home', methods: ['GET', 'POST'])]
public function index(ActualiteRepository $actualiteRepository, Request $request, EntityManagerInterface $entityManager): Response
{
    $reclamation = new Reclamation();
    $form = $this->createForm(ReclamationType::class, $reclamation);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        if ($this->checkf($reclamation->getSujet(), $this->list) == 0 || $this->checkf($reclamation->getDescription(), $this->list) == 0) {
            $errorMessage = new FormError("Your submission contains klem mouch behy.");
            $form->addError($errorMessage);
            // Do not redirect here, just let it proceed to render the form with the error
        } else {
            $entityManager->persist($reclamation);
            $entityManager->flush();
    
            // Redirect after successful processing
            return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
        }
    }

    return $this->render('home/index.html.twig', [
        'controller_name' => 'HomeController',
        'actualites' => $actualiteRepository->findAll(),
        'reclamation' => $reclamation,
        'form' => $form,
    ]);
}

}
