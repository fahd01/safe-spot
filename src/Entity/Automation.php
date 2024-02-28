<?php

namespace App\Entity;

use App\Repository\AutomationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AutomationRepository::class)]
class Automation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(targetEntity: AutomationRule::class, mappedBy: 'automation', cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $rules;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $bidAmount = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $owner = null;

    #[ORM\Column]
    private ?bool $disabled = false;

    public function __construct()
    {
        $this->rules = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, AutomationRule>
     */
    public function getRules(): Collection
    {
        return $this->rules;
    }

    public function addRule(AutomationRule $rule): static
    {
        if (!$this->rules->contains($rule)) {
            $this->rules->add($rule);
            $rule->setAutomation($this);
        }

        return $this;
    }

    public function removeRule(AutomationRule $rule): static
    {
        if ($this->rules->removeElement($rule)) {
            // set the owning side to null (unless already changed)
            if ($rule->getAutomation() === $this) {
                $rule->setAutomation(null);
            }
        }

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getBidAmount(): ?string
    {
        return $this->bidAmount;
    }

    public function setBidAmount(string $bidAmount): static
    {
        $this->bidAmount = $bidAmount;

        return $this;
    }

    public function getOwner(): ?User
    {
        return $this->owner;
    }

    public function setOwner(?User $owner): static
    {
        $this->owner = $owner;

        return $this;
    }

    public function isDisabled(): ?bool
    {
        return $this->disabled;
    }

    public function setDisabled(bool $disabled): static
    {
        $this->disabled = $disabled;

        return $this;
    }
}
