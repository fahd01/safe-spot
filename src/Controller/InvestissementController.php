<?php

namespace App\Controller;

use App\Entity\Investissement;
use App\Form\InvestissementType;
use App\Repository\InvestissementRepository;
use App\Repository\JeuxRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\String\Slugger\SluggerInterface;


class InvestissementController extends AbstractController
{
    #[Route('/investissement', name: 'app_investissement')]
    public function index(): Response
    {
        return $this->render('admin.html.twig', [
            'controller_name' => 'InvestissementController',
        ]);
    }
    #[Route('/add_investissement', name: 'add_investissement')]

    public function Add(Request  $request , ManagerRegistry $doctrine ,SluggerInterface $slugger) : Response {

        $Investissement =  new Investissement() ;
        $form =  $this->createForm(InvestissementType::class,$Investissement) ;
        $form->add('Ajouter' , SubmitType::class) ;
        $form->handleRequest($request) ;
        if($form->isSubmitted()&& $form->isValid()){
            $brochureFile = $form->get('image')->getData();
            //$file =$Investissement->getImage();
            $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
            //$uploads_directory = $this->getParameter('upload_directory');
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();
            //$fileName = md5(uniqid()).'.'.$file->guessExtension();
            $brochureFile->move(
                $this->getParameter('upload_directory'),
                $newFilename
            );
            $Investissement->setImage(($newFilename));
            $Investissement = $form->getData();
            $em= $doctrine->getManager() ;
            $em->persist($Investissement);
            $em->flush();
            return $this ->redirectToRoute('add_investissement') ;
        }
        return $this->render('investissement/addinvestissements.html.twig' , [
            'form' => $form->createView()
        ]) ;
    }

    #[Route('/afficher_inv', name: 'afficher_inv')]
    public function AfficheInvestissement (InvestissementRepository $repo ,PaginatorInterface $paginator ,Request $request   ): Response
    {
        //$repo=$this ->getDoctrine()->getRepository(Investissement::class) ;
        $Investissement=$repo->findAll() ;
        $pagination = $paginator->paginate(
            $Investissement,
            $request->query->getInt('page', 1),
            3  , 
            [
                'reversePagination' => true, 
            ]// items per page
        );
        return $this->render('investissement/index.html.twig' , [
            'Investissement' => $pagination ,
            'ajoutA' => $Investissement
        ]) ;
    }

    #[Route('/delete_inv/{id}', name: 'delete_inv')]
    public function Delete($id,InvestissementRepository $repository , ManagerRegistry $doctrine) : Response {
        $Investissement=$repository->find($id) ;
        $em=$doctrine->getManager() ;
        $em->remove($Investissement);
        $em->flush();
        return $this->redirectToRoute("afficher_inv") ;

    }
    #[Route('/update_inv/{id}', name: 'update_inv')]
    function update(InvestissementRepository $repo,$id,Request $request , ManagerRegistry $doctrine){
        $Investissement = $repo->find($id) ;
        $form=$this->createForm(InvestissementType::class,$Investissement) ;
        $form->add('update' , SubmitType::class) ;
        $form->handleRequest($request) ;
        if($form->isSubmitted()&& $form->isValid()){

            $Investissement = $form->getData();
            $em=$doctrine->getManager() ;
            $em->flush();
            return $this ->redirectToRoute('afficher_inv') ;
        }
        return $this->render('investissement/updateinvestissements.html.twig' , [
            'form' => $form->createView()
        ]) ;

    }

    #[Route('/statsabonn', name: 'statsabonn')]
    public function statistiques(InvestissementRepository $abonnrepo){
        // On va chercher toutes les catégories
        $abonn = $abonnrepo->findAll();

        $abonnName = [];
        $abonnColor = [];
        $abonnCount = [];

        // On "démonte" les données pour les séparer tel qu'attendu par ChartJS
        foreach($abonn as $abon){
            $abonnName[] = $abon->getName();
            $abonnColor[] = $abon->getColor();
            $abonnCount[] = count($abon->getDonss());
        }

        // On va chercher le nombre d'annonces publiées par date

        return $this->render('stat/stats.html.twig', [
            'abonnName' => json_encode($abonnName),
            'abonnColor' => json_encode($abonnColor),
            'abonnCount' => json_encode($abonnCount),
        ]);
    }
}
