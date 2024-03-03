<?php

namespace App\Entity;

use App\Repository\DonsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: DonsRepository::class)]
class Dons
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotNull (message: "Il faut remplire ce chemp")]
    private ?string $fullname = null;

    #[ORM\ManyToOne(inversedBy: 'donss')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Investissement $investissements = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFullname(): ?string
    {
        return $this->fullname;
    }

    public function setFullname(string $fullname): self
    {
        $this->fullname = $fullname;

        return $this;
    }

    public function getInvestissements(): ?investissement
    {
        return $this->investissements;
    }

    public function setInvestissements(?investissement $investissements): self
    {
        $this->investissements = $investissements;

        return $this;
    }
}
