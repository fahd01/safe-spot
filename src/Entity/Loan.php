<?php

namespace App\Entity;

use App\Repository\LoanRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

use Psr\Log\LoggerInterface;

#[ORM\Entity(repositoryClass: LoanRepository::class)]
class Loan
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;



    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $amount = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $interest = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $term = null;

    #[ORM\Column(length: 255)]
    private ?string $purpose = null;

    #[ORM\Column(type: Types::STRING, enumType: LoanStatus::class)]
    private LoanStatus $status = LoanStatus::InBidding;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $borrower = null;

    #[ORM\OneToMany(targetEntity: Bid::class, mappedBy: 'loan', cascade: ['remove'], orphanRemoval: true)]
    private Collection $bids;

    public function __construct()
    {
        $this->bids = new ArrayCollection();
    }

    public function getStatus():LoanStatus
    {
        return $this->status;
    }

    public function setStatus(LoanStatus $status): void
    {
        $this->status = $status;
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    public function getInterest(): ?string
    {
        return $this->interest;
    }

    public function setInterest(string $interest): static
    {
        $this->interest = $interest;

        return $this;
    }

    public function getTerm(): ?int
    {
        return $this->term;
    }

    public function setTerm(int $term): static
    {
        $this->term = $term;

        return $this;
    }

    public function getPurpose(): ?string
    {
        return $this->purpose;
    }

    public function setPurpose(string $purpose): static
    {
        $this->purpose = $purpose;

        return $this;
    }

    public function getBorrower(): ?User
    {
        return $this->borrower;
    }

    public function setBorrower(?User $borrower): static
    {
        $this->borrower = $borrower;

        return $this;
    }

    /**
     * @return Collection<int, Bid>
     */
    public function getBids(): Collection
    {
        return $this->bids;
    }

    public function addBid(Bid $bid): static
    {
        if (!$this->bids->contains($bid)) {
            $this->bids->add($bid);
            $bid->setLoan($this);
        }

        return $this;
    }

    public function removeBid(Bid $bid): static
    {
        if ($this->bids->removeElement($bid)) {
            // set the owning side to null (unless already changed)
            if ($bid->getLoan() === $this) {
                $bid->setLoan(null);
            }
        }

        return $this;
    }

    public function collectedBids(): int {
        $bidsAmount = $this->bids
            ->filter( function($bid) { return in_array($bid->getStatus(), [BidStatus::Approved, BidStatus::Active, BidStatus::Paid]) ;} )
            ->map( function($bid) { return $bid->getAmount();} )
            ->reduce(function(int $accumulator, int $bidAmount): int { return $accumulator + $bidAmount;}, 0);
        return $bidsAmount;
    }

    public function bidsProgress(): int {
        return ($this->collectedBids() / $this->amount) * 100;
    }

    # Set the loan and all its approved bids to active status
    # use this method when loan amount is reached via approved bids
    public function setToActive(): void {
        $this->setStatus(LoanStatus::Active);
        foreach (
            $this->bids->filter( fn($bid) => $bid->getStatus() == BidStatus::Approved )
            as $key => $bid
        ) {
            $bid->setStatus(BidStatus::Active);
        }
    }
}
