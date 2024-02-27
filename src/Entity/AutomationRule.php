<?php

namespace App\Entity;

use App\Repository\AutomationRuleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\AutomationRuleOperator;
use App\Entity\AutomationRuleAttribute;

#[ORM\Entity(repositoryClass: AutomationRuleRepository::class)]
class AutomationRule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $value = null;

    #[ORM\Column(type: Types::STRING, enumType: AutomationRuleAttribute::class)]
    private ?AutomationRuleAttribute $attribute = null;

    #[ORM\Column(type: Types::STRING, enumType: AutomationRuleOperator::class)]
    private ?AutomationRuleOperator $operator = null;

    #[ORM\ManyToOne(inversedBy: 'rules')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Automation $automation = null;

    public function getId(): ?int {
        return $this->id;
    }

    public function getValue(): ?string {
        return $this->value;
    }

    public function setValue(string $value): static {
        $this->value = $value;
        return $this;
    }

    public function getAttribute(): ?AutomationRuleAttribute {
        return $this->attribute;
    }

    public function setAttribute(AutomationRuleAttribute $attribute): static {
        $this->attribute = $attribute;
        return $this;
    }

    public function getOperator(): ?AutomationRuleOperator {
        return $this->operator;
    }

    public function setOperator(AutomationRuleOperator $operator): static {
        $this->operator = $operator;
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
