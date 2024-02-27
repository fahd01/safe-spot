<?php

namespace App\Form;

use App\Entity\AutomationRule;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\AutomationRuleAttribute;
use App\Entity\AutomationRuleOperator;
use Symfony\Component\Form\Extension\Core\Type\EnumType;

class AutomationRuleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('attribute', EnumType::class, ['class' => AutomationRuleAttribute::class])
            ->add('operator', EnumType::class, ['class' => AutomationRuleOperator::class])
            ->add('value');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AutomationRule::class,
        ]);
    }
}
