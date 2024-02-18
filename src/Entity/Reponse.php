<?php

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReponseRepository::class)]
class Reponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $repo = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateRepo = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Reclamation $idReclamation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRepo(): ?string
    {
        return $this->repo;
    }

    public function setRepo(string $repo): static
    {
        $this->repo = $repo;

        return $this;
    }

    public function getDateRepo(): ?\DateTimeInterface
    {
        return $this->dateRepo;
    }

    public function setDateRepo(\DateTimeInterface $dateRepo): static
    {
        $this->dateRepo = $dateRepo;

        return $this;
    }

    public function getIdReclamation(): ?Reclamation
    {
        return $this->idReclamation;
    }

    public function setIdReclamation(Reclamation $idReclamation): static
    {
        $this->idReclamation = $idReclamation;

        return $this;
    }
}
