<?php

namespace App\Form;

use App\Entity\ResponsablesLegaux;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\TelType;



class ResponsablesLegauxType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomUser', TextType::class, ['label' => 'Nom'])
            ->add('prenomUser', TextType::class, ['label' => 'Prénom'])
            ->add('ddnUser', BirthdayType::class, ['label' => 'Date de naissance'])
            ->add('adresseUser', TextareaType::class, ['label' => 'Adresse'])
            ->add('compltAdresseUser', TextareaType::class, ['label' => 'Complément d\'adresse'])
            ->add('numTelUser', TelType::class, ['label' => 'Numéro de téléphone'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ResponsablesLegaux::class,
        ]);
    }
}
