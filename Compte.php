<?php

namespace App\Entity;

use App\Repository\CompteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: CompteRepository::class)]
#[Broadcast]
class Compte
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $idcompte = null;

    #[ORM\Column(nullable: true)]
    private ?int $n_tel = null;

    #[ORM\Column(length: 150, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(length: 105, nullable: true)]
    private ?string $prenom = null;

    #[ORM\Column(type: Types::SIMPLE_ARRAY, nullable: true)]
    private ?array $prets = null;

    #[ORM\Column(type: Types::SIMPLE_ARRAY, nullable: true)]
    private ?array $investissements = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdcompte(): ?string
    {
        return $this->idcompte;
    }

    public function setIdcompte(?string $idcompte): static
    {
        $this->idcompte = $idcompte;

        return $this;
    }

    public function getNTel(): ?int
    {
        return $this->n_tel;
    }

    public function setNTel(?int $n_tel): static
    {
        $this->n_tel = $n_tel;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getPrets(): ?array
    {
        return $this->prets;
    }

    public function setPrets(?array $prets): static
    {
        $this->prets = $prets;

        return $this;
    }

    public function getInvestissements(): ?array
    {
        return $this->investissements;
    }

    public function setInvestissements(?array $investissements): static
    {
        $this->investissements = $investissements;

        return $this;
    }
    // ...

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $solde;

    // ...

    public function getSolde(): ?float
    {
        return $this->solde;
    }

    public function setSolde(?float $solde): self
    {
        $this->solde = $solde;

        return $this;
    }
    
}
