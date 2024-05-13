<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ActualiteRepository;
use App\Entity\Actualite;
use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface; 
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormError;


class LandingPageController extends AbstractController
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
    #[Route('/', name: 'app_landing_page')]
    public function index(ActualiteRepository $actualiteRepository, Request $request, EntityManagerInterface $entityManager,MailerInterface $mailer): Response
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
            $this->sendEmail($mailer);
            // Redirect after successful processing
            return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
        }
    }
        return $this->render('index.html.twig', [
            'controller_name' => 'LandingPageController',
            'actualites' => $actualiteRepository->findAll(),
        'reclamation' => $reclamation,
        'form' => $form,
        ]);
    }

    
public function sendEmail(MailerInterface $mailer): Response
{
    $email = (new TemplatedEmail())
        ->from(new Address('notifications.safe.spot@gmail.com', 'SafeSpot'))
        ->to('yassinzagrouba10@gmail.com')
        ->subject('Reclamation')
        ->htmlTemplate('emails/email.html.twig') // Replace with the actual template path
        ->context(["hsy"]);

    $mailer->send($email);

    // Additional logic or response handling here
    return new Response("Email sent successfully!");
}
}