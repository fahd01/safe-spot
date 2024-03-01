<?php
namespace App\EventListener;

use App\Entity\Loan;
use App\Entity\Bid;
use App\Entity\Automation;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsEntityListener;
use Doctrine\ORM\Event\PostPersistEventArgs;
use Doctrine\ORM\Events;

use App\Repository\AutomationRepository;
use App\Repository\LoanRepository;
use App\Repository\BidRepository;
use App\Repository\UserRepository;

use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;

use Psr\Log\LoggerInterface;

class LoanPersistedNotifier {

    private $automationRepository;
    private $loanRepository;
    private $bidRepository;
    private $userRepository;
    private $mailer;

    private $logger;

    public function __construct(
        AutomationRepository $automationRepository,
        LoanRepository $loanRepository,
        BidRepository $bidRepository,
        UserRepository $userRepository,
        MailerInterface $mailer,
        LoggerInterface $logger,
    ) {
        $this->automationRepository = $automationRepository;
        $this->loanRepository = $loanRepository;
        $this->bidRepository = $bidRepository;
        $this->userRepository = $userRepository;
        $this->mailer = $mailer;

        $this->logger = $logger;
    }

    public function onLoanPersisted(Loan $loan, PostPersistEventArgs $event): void {
        $automations = $this->automationRepository->findBy(['disabled' => false]);
        foreach($automations as $key => $automation ) {
            $evalRules = array();
            foreach($automation->getRules() as $keyRule => $rule) {
                array_push($evalRules, $loan->{$rule->getAttribute()->value}() . $rule->getOperator()->value . $rule->getValue() );
            }
            $evalExpression = "return " . join(" && ", $evalRules) . ";";
            $this->logger->info("### " . $evalExpression);
            $isMatch = eval($evalExpression);
            if($isMatch) {
                $bid = new Bid();
                $bid->setLoan($loan);
                # TODO inject and use current user as bidder
                $userId = 1;
                $currentUser = $this->userRepository->find($userId);
                $bid->setBidder($currentUser);
                $bid->setAmount($automation->getBidAmount());
                $bid->setAutomation($automation);
                $this->bidRepository->save($bid);
                $this->sendAutomaticBidEmail($automation, $bid, $currentUser);
            }
        }
    }

    public function sendAutomaticBidEmail(Automation $automation, Bid $bid, User $user): void {
            $email = (new Email())
                ->from('notifications.safe.spot@gmail.com')
                ->to($user->getEmail())
                ->subject('Automated Bid Placed')
                ->text('Sending emails is fun again!')
                ->html('<p>A loan newly created did match one of your bid automations
                (<a href="http://localhost:8080/bids/automations/create?id=' . $automation->getId() . '">' .$automation->getName() . '</a>),
                therefore a bid of ' . $bid->getAmount() . ' TND was automatically placed.</p>');

            $this->mailer->send($email);
    }

}
