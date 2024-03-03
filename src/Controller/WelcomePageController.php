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

class WelcomePageController extends AbstractController {

    #[Route('/', name: 'app_welcome_page')]
    public function index(): Response {
        return $this->render('index.html.twig');
    }

}
