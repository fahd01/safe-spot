<?php

namespace App\Form;

use App\Entity\Investissement;
use Karser\Recaptcha3Bundle\Form\Recaptcha3Type;
use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3 as Recaptcha3Constraint;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

// Now you can refer to Recaptcha3FormType instead of Recaptcha3Type
use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3;

class InvestissementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('date')
            ->add('duree')
            ->add('prixA')
            ->add('description')
            ->add('email')
            ->add('image' , FileType::class, array('data_class' => null , 'label'=>"image") )
            ->add('color', ColorType::class)
            
            

        ;
        
          
            

        

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Investissement::class,
        ]);
    }
}