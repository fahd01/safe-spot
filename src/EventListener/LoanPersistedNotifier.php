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
                $this->sendAutomaticBidEmail($automation, $bid, $loan, $currentUser);
            }
        }
    }

    public function sendAutomaticBidEmail(Automation $automation, Bid $bid, Loan $loan, User $user): void {
            $email = (new Email())
                ->from('notifications.safe.spot@gmail.com')
                ->to($user->getEmail())
                ->subject('Automated Bid Placed')
                ->text('Sending emails is fun again!')
                ->html('
                <p>A newly created loan did match one of your bid automations
                (<a href="http://localhost:8080/bids/automations/create?id=' . $automation->getId() . '">' .$automation->getName() . '</a>),
                therefore a <b> bid of ' . $bid->getAmount() . ' TND was automatically placed</b>.</p>
                    <table>
                        <tr>
                            <td><b>Bid : </b></td>
                            <td>' . $bid->getAmount() . ' TND</td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td><b>Automation : </b></td>
                            <td><a href="http://localhost:8080/bids/automations/create?id=' . $automation->getId() . '">' .$automation->getName() . '</a></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td><b>Details of the Loan: </b></td>
                        </tr>
                        <tr>
                            <td>
                                <table>
                                    <tbody style="text-indent:20px;">
                                        <tr>
                                            <td>Amount: </td>
                                            <td>' . $loan->getAmount() . ' TND</td>
                                        </tr>
                                        <tr>
                                            <td>Interest: </td>
                                            <td>' . $loan->getInterest() . ' % </td>
                                        </tr>
                                        <tr>
                                            <td>Term: </td>
                                            <td>' . $loan->getTerm() . ' months </td>
                                        </tr>
                                        <tr>
                                            <td>Purpose: </td>
                                            <td>' . $loan->getPurpose() . '</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </table>
                ');

            $this->mailer->send($email);
    }

}
