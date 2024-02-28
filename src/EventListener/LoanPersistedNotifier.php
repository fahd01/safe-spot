<?php
namespace App\EventListener;

use App\Entity\Loan;
use App\Entity\Bid;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsEntityListener;
use Doctrine\ORM\Event\PostPersistEventArgs;
use Doctrine\ORM\Events;

use App\Repository\AutomationRepository;
use App\Repository\LoanRepository;
use App\Repository\BidRepository;
use App\Repository\UserRepository;

use Psr\Log\LoggerInterface;

class LoanPersistedNotifier {

    private $automationRepository;
    private $loanRepository;
    private $bidRepository;
    private $userRepository;

    private $logger;

    public function __construct(
        AutomationRepository $automationRepository,
        LoanRepository $loanRepository,
        BidRepository $bidRepository,
        UserRepository $userRepository,
        LoggerInterface $logger,
    ) {
        $this->automationRepository = $automationRepository;
        $this->loanRepository = $loanRepository;
        $this->bidRepository = $bidRepository;
        $this->userRepository = $userRepository;

        $this->logger = $logger;
    }

    public function onLoanPersisted(Loan $loan, PostPersistEventArgs $event): void {
        $auotmations = $this->automationRepository->findBy(['disabled' => false]);
        foreach($auotmations as $key => $automation ) {
            $evalRules = array();
            foreach($automation->getRules() as $keyRule => $rule) {
                array_push($evalRules, $loan->{$rule->getAttribute()->value}() . $rule->getOperator()->value . $rule->getValue() );
            }
            $evalExpression = "return " . join(" && ", $evalRules) . ";";
            $this->logger->info("### " . $evalExpression);
            $isMatch = eval($evalExpression);
            if(!$isMatch)
                return;
            $bid = new Bid();
            $bid->setLoan($loan);
            # TODO inject and use current user as bidder
            $userId = 1;
            $currentUser = $this->userRepository->find($userId);
            $bid->setBidder($currentUser);
            $bid->setAmount($automation->getBidAmount());
            $bid->setAutomation($automation);
            $this->bidRepository->save($bid);
        }
    }
}