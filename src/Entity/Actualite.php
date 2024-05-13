<?php

namespace App\Entity;

use App\Repository\ActualiteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;

#[ORM\Entity(repositoryClass: ActualiteRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Actualite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

     



    #[Assert\File(maxSize:"5M",mimeTypes:"image/png")]
    private $imageFile;

    #[ORM\Column(length: 255)]
    #[Assert\Length(
        min: 5,
        max: 50,
        minMessage: "The title must be at least {{ limit }} characters long.",
        maxMessage: "The title cannot be longer than {{ limit }} characters."
    )]
    private ?string $title = null;

    #[ORM\Column(length: 500)]
    #[Assert\Length(
        min: 8,
        max: 500,
        minMessage: "The description must be at least {{ limit }} characters long.",
        maxMessage: "The description cannot be longer than {{ limit }} characters."
    )]
    private ?string $description = null;
    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $dt = null;

    #[ORM\Column(length: 255)]
    private ?string $img = null;

    #[ORM\OneToMany(targetEntity: Likenews::class, mappedBy: 'new')]
    private Collection $likenews;

    public function __construct()
    {
        $this->likenews = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDt(): ?\DateTimeInterface
    {
        return $this->dt;
    }

    public function setDt(\DateTimeInterface $dt): static
    {
        $this->dt = $dt;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): static
    {
        $this->img = $img;

        return $this;
    }
    #[ORM\PrePersist]
    public function setDtValueOnPrePersist(): void
    {
        if ($this->dt === null) {
            $this->dt = new \DateTime();
        }
    }

    /**
     * @return Collection<int, Likenews>
     */
    public function getLikenews(): Collection
    {
        return $this->likenews;
    }

    public function addLikenews(Likenews $likenews): static
    {
        if (!$this->likenews->contains($likenews)) {
            $this->likenews->add($likenews);
            $likenews->setNew($this);
        }

        return $this;
    }

    public function removeLikenews(Likenews $likenews): static
    {
        if ($this->likenews->removeElement($likenews)) {
            // set the owning side to null (unless already changed)
            if ($likenews->getNew() === $this) {
                $likenews->setNew(null);
            }
        }

        return $this;
    }
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageFile(?File $imageFile): void
    {
        $this->imageFile = $imageFile;

        if ($imageFile) {
            // It's important to set this property since it will be used in the listener
            $this->updatedAt = new \DateTimeImmutable();
        }
    }
}
