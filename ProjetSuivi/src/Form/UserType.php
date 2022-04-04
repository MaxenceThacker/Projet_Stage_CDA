<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('emailUser')
            ->add('roles')
            ->add('password')
            ->add('isVerified')
            ->add('nomUser')
            ->add('prenomUser')
            ->add('ddnUser')
            ->add('adresseUser')
            ->add('compltAdresseUser')
            ->add('numTelUser')
            ->add('formateurs')
            ->add('tuteurs')
            ->add('responsablesLegaux')
            ->add('alternants')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
