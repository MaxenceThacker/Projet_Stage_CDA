<?php

namespace App\Form;

use App\Entity\Centres;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class CentresType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomCentre', TextType::class, ['label' => 'Nom du centre'])
            ->add('adresseCentre', TextareaType::class, ['label' => 'Adresse du centre'])
            ->add('compltAdresseCentre', TextareaType::class, ['label' => 'Complément d\'adresse du centre'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Centres::class,
        ]);
    }
}
