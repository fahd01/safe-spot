<?php

namespace App\Entity;

use App\Repository\RecResponseRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: RecResponseRepository::class)]
class RecResponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(inversedBy: 'recResponse', cascade: ['persist', 'remove'])]
    private ?Reclamation $reclamation = null;

    #[ORM\Column(length: 500)]
    #[Assert\Length(
        min: 8,
        max: 500,
        minMessage: "The response must be at least {{ limit }} characters long.",
        maxMessage: "The response cannot be longer than {{ limit }} characters."
    )]
    #[Assert\NotBlank(message:"reponse not blank")]
    private ?string $reponse = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReclamation(): ?Reclamation
    {
        return $this->reclamation;
    }

    public function setReclamation(?Reclamation $reclamation): static
    {
        $this->reclamation = $reclamation;

        return $this;
    }

    public function getReponse(): ?string
    {
        return $this->reponse;
    }

    public function setReponse(string $reponse): static
    {
        $this->reponse = $reponse;

        return $this;
    }
}
