<?php

namespace App\Controller;

use App\Entity\Dons;
use App\Form\DonsType;
use App\Repository\DonsRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Doctrine\ORM\EntityManagerInterface;

class DonsController extends AbstractController
{
    #[Route('/dons', name: 'app_dons')]
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'DonsController',
        ]);
    }
    #[Route('/add_Dons', name: 'add_Dons')]

    public function Add(MailerInterface $mailer,Request  $request , ManagerRegistry $doctrine ) : Response {
        $Dons =  new Dons() ;
        $form =  $this->createForm(DonsType::class,$Dons) ;
        $form->add('Ajouter' , SubmitType::class) ;
        $form->handleRequest($request) ;
        $emaill = 'thecomputerscientist1@gmail.com';
        if($form->isSubmitted()&& $form->isValid()){
            $Dons = $form->getData();
            $em= $doctrine->getManager() ;
            $em->persist($Dons);
            $em->flush();
            $this->sendEmail($mailer);
            return $this ->redirectToRoute('afficher_dons') ;
        }
        return $this->render('dons/frontadd.html.twig' , [
            'form' => $form->createView()
        ]) ;
    }

    
public function sendEmail(MailerInterface $mailer ): Response
{
    $email = (new TemplatedEmail())
        ->from(new Address('notifications.safe.spot@gmail.com', 'SafeSpot'))
        ->to('yassinzagrouba10@gmail.com')
        ->subject('Donnations')
        ->htmlTemplate('emails/donemail.html.twig') // Replace with the actual template path
        ->context(["hsy"]);

    $mailer->send($email);

    // Additional logic or response handling here
    return new Response("Email sent successfully!");
}


    #[Route('/afficher_dons', name: 'afficher_dons')]
    public function AfficheDons (DonsRepository $repo ,Request $request    ): Response
    {
        //$repo=$this ->getDoctrine()->getRepository(Dons::class) ;
        $Dons=$repo->findAll() ;
        return $this->render('dons/index.html.twig' , [
            'Dons' => $Dons ,
            'ajoutA' => $Dons
        ]) ;
    }

    #[Route('/delete_dons/{id}', name: 'delete_dons')]
    public function Delete($id,DonsRepository $repository , ManagerRegistry $doctrine) : Response {
        $Dons=$repository->find($id) ;
        $em=$doctrine->getManager() ;
        $em->remove($Dons);
        $em->flush();
        return $this->redirectToRoute("afficher_dons") ;

    }
    #[Route('/update_dons/{id}', name: 'update_dons')]
    function update(DonsRepository $repo,$id,Request $request , ManagerRegistry $doctrine){
        $Dons = $repo->find($id) ;
        $form=$this->createForm(DonsType::class,$Dons) ;
        $form->add('update' , SubmitType::class) ;
        $form->handleRequest($request) ;
        if($form->isSubmitted()&& $form->isValid()){

            $Dons = $form->getData();
            $em=$doctrine->getManager() ;
            $em->flush();
            return $this ->redirectToRoute('afficher_dons') ;
        }
        return $this->render('dons/update.html.twig' , [
            'form' => $form->createView()
        ]) ;

    }
    #[Route('/valide/{id}', name: 'valide_dons')]
    function validate(DonsRepository $repo,$id,Request $request , EntityManagerInterface $entityManager){
        $Dons = $repo->find($id) ;
        $Dons->setEtat(1);
        $entityManager->flush();
            return $this ->redirectToRoute('afficher_dons') ;
       

    }
    #[Route('/disvalide/{id}', name: 'disvalide_dons')]
    function disvalidate(DonsRepository $repo,$id,Request $request , EntityManagerInterface $entityManager){
        $Dons = $repo->find($id) ;
        $Dons->setEtat(0);
        $entityManager->flush();
            return $this ->redirectToRoute('afficher_dons') ;
       

    }
}
