<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\SendMailType;
use App\Repository\UserRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;


#[Route('/admin')]
class AdminController extends AbstractController
{
    private $entityManager;
    private $userRepository;

    public function __construct(EntityManagerInterface $entityManager, UserRepository $userRepository)
    {
        $this->entityManager = $entityManager;
        $this->userRepository = $userRepository;
    }

    #[Route('/', name: 'admin_dashboard')]
    public function index(): Response
    {
        $user_activer = $this->userRepository->countUtilisateurByetat("activer");
        $user_desactiver = $this->userRepository->countUtilisateurByetat("desactiver");

        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable([
            ['users', 'etat'],
            ['active users', $user_activer],
            ['unactive users', $user_desactiver],
        ]);
        $pieChart->getOptions()->setHeight(300);
        $pieChart->getOptions()->setWidth(300);
        $pieChart->getOptions()->setColors(['#009900', '#990000', '#FF8C00']);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        $users = $this->userRepository->findAll();
        $count = count($users);

        return $this->render('admin/index.html.twig', [
            'users' => $count,
            'pieChart' => $pieChart,
        ]);
    }

    #[Route('/afficheAll', name: 'afficheall')]
    public function afficher(EntityManagerInterface $em, PaginatorInterface $paginator, Request $request): Response
    {
        $dql   = "SELECT u FROM App\Entity\User u";
        $query = $em->createQuery($dql);
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            5 /*limit per page*/
        );
        return $this->render('admin/affiche_tous_utilisateurs.html.twig', ['pagination' => $pagination]);
    }

    #[Route('/activer/{id}', name: 'activerUser', methods: ['GET', 'POST'])]
    public function activerUser($id): Response
    {
        $user = $this->userRepository->find($id);
        $user->setEtat("activer");

        $this->entityManager->flush();

        return $this->redirectToRoute('afficheall');
    }

    #[Route('/desactiver/{id}', name: 'desactiverUser', methods: ['GET', 'POST'])]
    public function desactiverUser($id): Response
    {
        $user = $this->userRepository->find($id);
        $user->setEtat("desactiver");

        $this->entityManager->flush();

        return $this->redirectToRoute('afficheall');
    }

    #[Route('/email/{email_use}', name: 'sendMailToUser')]
    public function sendEmail(MailerInterface $mailer, Request $request, $email_use): Response
    {
        $form = $this->createForm(SendMailType::class, null);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $message = $form->get('message')->getData();
            $subject = $form->get('subject')->getData();
            $email = (new Email())
                ->from('example@example.com') // Use a valid sender address
                ->to($email_use)
                ->subject($subject)
                ->text('Sending emails is fun again!')
                ->html("<p>$message</p>");

            $mailer->send($email);

            $this->addFlash('success', 'Votre email a été bien envoyé');
            return $this->redirectToRoute('afficheall');
        }

        return $this->render('admin/sendMail.html.twig', [
            'form' => $form->createView(),
            'user_email' => $email_use,
        ]);
    }
    /**
     * @Route("/pdf/espace/download", name="user_pdf")
     */
    public function packPdf(UserRepository $UserRepository): Response
    {
        // configuration
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->set('isHtml5ParserEnabled', true);
        $pdfOptions->set('isRemoteEnabled', true);

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('admin/pdf.html.twig', [
            'user' => $UserRepository->findAll(),
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A3', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        return new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="example.pdf"',
        ]);
    }
    /**
     * @Route("/search", name="search", methods={"POST"})
     */
    public function search(Request $request, UserRepository $userRepository)
    {
        // Retrieve the search query from the request
        $query = $request->request->get('query');

        // Perform the search operation using your repository
        $results = $userRepository->searchUsers($query); // Implement your search method in UserRepository

        // Prepare the data to be returned as JSON
        $jsonData = [];
        foreach ($results as $user) {
            $jsonData[] = [
                'nom' => $user->getNom(),
                'prenom' => $user->getPrenom(),
                'numTlph' => $user->getNumTlph(),
                'adresse' => $user->getAdresse(),
                'dateDeNaissance' => $user->getDateDeNaissance()->format('Y-m-d'),
                'etat' => $user->getEtat(),
                'email' => $user->getEmail(),
                // Add more fields if needed
            ];
        }

        // Return the results as JSON response
        return new JsonResponse($jsonData);
    }


}