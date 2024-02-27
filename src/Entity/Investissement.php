<?php

namespace App\Entity;

use App\Repository\InvestissementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\DBAL\Types\Types as DBALTypes;
use Symfony\Component\Validator\Constraints as ValidationAssert;

#[ORM\Entity(repositoryClass: InvestissementRepository::class)]
class Investissement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("post:read")]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
#[Assert\NotNull(message: "Il faut remplir ce champ")]
#[Assert\GreaterThanOrEqual("today", message: "La date doit être aujourd'hui ou après aujourd'hui")]
#[Groups("post:read")]
private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    #[Assert\NotNull (message: "Il faut remplire ce chemp")]
    #[Groups("post:read")]
    private ?float $duree = null;

    #[ORM\Column]
    #[Assert\NotNull (message: "Il faut remplire ce chemp")]
    #[Groups("post:read")]
    private ?int $prixA = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotNull (message: "Il faut remplire ce chemp")]
    #[Groups("post:read")]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'investissements', targetEntity: Dons::class, orphanRemoval: true)]
    #[Groups("post:read")]
    private Collection $donss;

    #[ORM\Column(length: 255)]
    #[Assert\NotNull (message: "Il faut remplire ce chemp")]
    #[Groups("post:read")]
    private ?string $Name = null;

    #[ORM\Column(length: 255)]
    #[Groups("post:read")]
    private ?string $image = null;

    #[ORM\Column(length: 255)]
    private ?string $color = null;

    public function __construct()
    {
        $this->donss = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDuree(): ?float
    {
        return $this->duree;
    }

    public function setDuree(float $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getPrixA(): ?int
    {
        return $this->prixA;
    }

    public function setPrixA(int $prixA): self
    {
        $this->prixA = $prixA;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, Dons>
     */
    public function getDonss(): Collection
    {
        return $this->donss;
    }

    public function addDons(Dons $dons): self
    {
        if (!$this->donss->contains($dons)) {
            $this->donss->add($dons);
            $dons->setInvestissements($this);
        }

        return $this;
    }

    public function removeDons(Dons $dons): self
    {
        if ($this->donss->removeElement($dons)) {
            // set the owning side to null (unless already changed)
            if ($dons->getInvestissements() === $this) {
                $dons->setInvestissements(null);
            }
        }

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }
}
