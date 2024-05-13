<?php

namespace App\Controller;

use App\Entity\Loan;
use App\Entity\Bid;
use App\Entity\Automation;
use App\Entity\User;
use App\Repository\AutomationRepository;
use App\Repository\LoanRepository;
use App\Repository\BidRepository;
use App\Repository\UserRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Entity\LoanStatus;
use App\Entity\BidStatus;
use App\Repository\ActualiteRepository;
use App\Entity\Actualite;
use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface; 

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;

class WelcomePageController extends AbstractController {

    #[Route('/', name: 'app_welcome_page')]
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
            'controller_name' => 'HomeController',
            'actualites' => $actualiteRepository->findAll(),
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }
    
    
    
    public function sendEmail(MailerInterface $mailer): Response
    {
        $email = (new TemplatedEmail())
            ->from(new Address('yossri.melki@esprit.tn', 'Yossri'))
            ->to('thecomputerscientist1@gmail.com')
            ->subject('Reclamation')
            ->htmlTemplate('emails/email.html.twig') // Replace with the actual template path
            ->context(["hsy"]);
    
        $mailer->send($email);
    
        // Additional logic or response handling here
        return new Response("Email sent successfully!");
    }
    

}
