<?php

namespace App\Form;

use App\Entity\Investissement;
use App\Entity\Dons;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DonsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fullname')
            ->add('investissements', EntityType::class, [
                'class' => Investissement::class,
                'choice_label' => 'name',
            ])
            ->add('taux', IntegerType::class, [
                'required' => false,
                'attr' => ['min' => 0],
                'label' => 'Taux (%)'
            ])
            ->add('montant', MoneyType::class, [
                'currency' => 'USD',
                'label' => 'Montant'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Dons::class,
        ]);
    }
}
