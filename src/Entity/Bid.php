<?php

namespace App\Entity;

use App\Repository\BidRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BidRepository::class)]
class Bid
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $amount = null;

    #[ORM\Column(type: Types::STRING, enumType: BidStatus::class)]
    private BidStatus $status = BidStatus::Pending;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $bidder = null;

    #[ORM\ManyToOne(inversedBy: 'bids')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Loan $loan = null;

    #[ORM\ManyToOne]
    private ?Automation $automation = null;

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

    public function getStatus(): BidStatus
    {
        return $this->status;
    }

    public function setStatus(BidStatus $status): void
    {
        $this->status = $status;
    }
    public function getBidder(): ?User
    {
        return $this->bidder;
    }

    public function setBidder(?User $bidder): static
    {
        $this->bidder = $bidder;

        return $this;
    }

    public function getLoan(): ?Loan
    {
        return $this->loan;
    }

    public function setLoan(?Loan $loan): static
    {
        $this->loan = $loan;

        return $this;
    }

    public function getAutomation(): ?Automation
    {
        return $this->automation;
    }

    public function setAutomation(?Automation $automation): static
    {
        $this->automation = $automation;

        return $this;
    }
}
