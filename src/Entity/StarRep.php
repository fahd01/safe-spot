<?php

namespace App\Entity;

use App\Repository\StarRepRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StarRepRepository::class)]
class StarRep
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_user = null;

    #[ORM\ManyToOne(inversedBy: 'starReps')]
    private ?RecResponse $starReps = null;

    #[ORM\Column]
    private ?int $nbstar = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user): static
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getStarReps(): ?RecResponse
    {
        return $this->starReps;
    }

    public function setStarReps(?RecResponse $starReps): static
    {
        $this->starReps = $starReps;

        return $this;
    }

    public function getNbstar(): ?int
    {
        return $this->nbstar;
    }

    public function setNbstar(int $nbstar): static
    {
        $this->nbstar = $nbstar;

        return $this;
    }
}
