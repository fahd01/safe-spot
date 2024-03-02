<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(
        min: 8,
        max: 255,
        minMessage: "The subject must be at least {{ limit }} characters long.",
        maxMessage: "The subject cannot be longer than {{ limit }} characters."
    )]
    #[Assert\NotBlank(message:"sujet not blank")]
    private ?string $Sujet = null;

    #[ORM\Column(length: 500)]
    #[Assert\Length(
        min: 8,
        max: 500,
        minMessage: "The description must be at least {{ limit }} characters long.",
        maxMessage: "The description cannot be longer than {{ limit }} characters."
    )]
    #[Assert\NotBlank(message:"description not blank")]
    private ?string $Description = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $dt = null;

    #[ORM\Column(type: 'boolean')]
    private bool $verified = false;

    #[ORM\OneToOne(mappedBy: 'reclamation', cascade: ['persist', 'remove'])]
    private ?RecResponse $recResponse = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSujet(): ?string
    {
        return $this->Sujet;
    }

    public function setSujet(string $Sujet): static
    {
        $this->Sujet = $Sujet;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getDt(): ?\DateTimeInterface
    {
        return $this->dt;
    }

    public function setDt(?\DateTimeInterface $dt): static
    {
        $this->dt = $dt;

        return $this;
    }

    public function isVerified(): bool
    {
        return $this->verified;
    }

    public function setVerified(bool $verified): static
    {
        $this->verified = $verified;

        return $this;
    }

    public function getRecResponse(): ?RecResponse
    {
        return $this->recResponse;
    }

    public function setRecResponse(?RecResponse $recResponse): static
    {
        // unset the owning side of the relation if necessary
        if ($recResponse === null && $this->recResponse !== null) {
            $this->recResponse->setReclamation(null);
        }

        // set the owning side of the relation if necessary
        if ($recResponse !== null && $recResponse->getReclamation() !== $this) {
            $recResponse->setReclamation($this);
        }

        $this->recResponse = $recResponse;

        return $this;
    }

    #[ORM\PrePersist]
    public function setDtValueOnPrePersist(): void
    {
        if ($this->dt === null) {
            $this->dt = new \DateTime();
        }
    }
}
