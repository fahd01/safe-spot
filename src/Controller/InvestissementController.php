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
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Dompdf\Dompdf;
use Dompdf\Options;

use Knp\Snappy\Pdf;

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

    public function Add(Request  $request , ManagerRegistry $doctrine ,SluggerInterface $slugger, MailerInterface $mailer) : Response {

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
            $email = (new Email())
    ->from($_ENV['MAILER_FROM'])

    ->to('Mohamed.mallek@esprit.tn')

    ->subject('Confirmation d\'ajout d\'investissement')
    ->text('Bonjour, votre investissement a bien été ajouté.')
    ->html('<p>Bonjour,</p><p>Votre investissement a bien été ajouté.</p>');


$mailer->send($email);
$url = 'https://mail.google.com/mail/u/4/?tab=cm&pli=1#inbox?compose=GTvVlcSGKZZzXQktXzRvGxbwrKSnhbptGBWCTDQgLcwWZmmhBPdcrSWKsgHQtCpsSsDWcQZmzVhhL';
        return new RedirectResponse($url);


           
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
            10  , 
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
public function statistiques(InvestissementRepository $recrepo)
{
    // Récupérer toutes les réclamations
    $rec = $recrepo->findAll();

    // Initialiser des tableaux pour stocker les données
    $recColor = [];
    $recCount = [];

    // Compter le nombre de réclamations pour chaque couleur
    foreach ($rec as $investissement) {
        $color = $investissement->getColor();

        // Si la couleur n'est pas déjà présente dans le tableau, l'ajouter
        if (!isset($recColor[$color])) {
            $recColor[$color] = $color;
            $recCount[$color] = 0;
        }

        // Incrémenter le nombre de réclamations pour cette couleur
        $recCount[$color]++;
    }

    // Convertir les données en format JSON pour le modèle Twig
    $recColor = array_values($recColor); // Réordonner les clés du tableau
    $recCount = array_values($recCount);

    // Rendre la vue Twig avec les données des statistiques
    return $this->render('stat/stats.html.twig', [
        'recColor' => json_encode($recColor),
        'recCount' => json_encode($recCount),
    ]);
}

    public function generatePdf(): Response
{
    // Récupérez les données à afficher dans votre PDF, par exemple à partir de votre repository
    $investissements = $this->getDoctrine()->getRepository(Investissement::class)->findAll();

    // Générez le contenu HTML de votre PDF
    $html = $this->renderView('investissement/pdf_template.html.twig', [
        'investissements' => $investissements,
    ]);

    // Configurez Dompdf
    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isRemoteEnabled', true);

    // Créez une instance de Dompdf
    $dompdf = new Dompdf($options);

    // Chargez le contenu HTML dans Dompdf
    $dompdf->loadHtml($html);

    // Générez le PDF
    $dompdf->render();

    // Retournez le PDF en tant que réponse
    return new Response($dompdf->output(), 200, [
        'Content-Type' => 'application/pdf',
    ]);

   


}
public function index(): Response
{
    return $this->render('home/index.html.twig', [
        'controller_name' => 'HomeController',
    ]);
}
}