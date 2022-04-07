<?php

namespace App\Form;

use App\Entity\Alternants;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AlternantsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomUser')
            ->add('prenomUser')
            ->add('ddnUser')
            ->add('adresseUser')
            ->add('compltAdresseUser')
            ->add('numTelUser')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Alternants::class,
        ]);
    }
}
