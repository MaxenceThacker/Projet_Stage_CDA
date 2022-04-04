<?php

namespace App\Form;

use App\Entity\Formations;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormationsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('sigleFormation')
            ->add('intituleFormation')
            ->add('codeTitreFormation')
            ->add('millesimeFormation')
            ->add('dateParutionFormation')
            ->add('nsfFormation')
            ->add('romeFormation')
            ->add('dateFinValdteAggrmentFormation')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Formations::class,
        ]);
    }
}
