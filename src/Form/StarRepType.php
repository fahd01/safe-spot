<?php
namespace App\Form;

use App\Entity\RecResponse;
use App\Entity\StarRep;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StarRepType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('nbstar', ChoiceType::class, [
            'label' => 'Star Rating',
            'required' => false,
            'expanded' => true,
            'multiple' => false,
            'choices' => [
                '5 stars' => 5,
                '4 stars' => 4,
                '3 stars' => 3,
                '2 stars' => 2,
                '1 star' => 1,
            ],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => StarRep::class,
        ]);
    }
}
