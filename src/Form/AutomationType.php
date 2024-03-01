<?php

namespace App\Form;

use App\Entity\Automation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Validator\Constraints as Assert;

class AutomationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void {

        $builder
            ->add('name')
            ->add('bidAmount')
            ->add('rules', CollectionType::class, [
                'entry_type' => AutomationRuleType::class,
                'allow_add' => true,
                'by_reference' => false,
                'allow_delete' => true,
                'label' => false,
                'constraints' => [
                    new Assert\Count([
                      'min' => 1,
                      'minMessage' => 'Must have at least one Automation Rule',
                    ]),
                ],
            ])
            ->add('submit', SubmitType::class, ['label' => 'Save Automation']);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Automation::class,
        ]);
    }
}
