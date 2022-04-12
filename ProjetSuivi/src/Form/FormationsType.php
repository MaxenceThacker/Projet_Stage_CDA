<?php

namespace App\Form;

use App\Entity\Formations;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class FormationsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('SigleFormation', TextType::class, ['label' => 'Sigle'])
            ->add('intituleFormation', TextType::class, ['label' => 'Intitule'])
            ->add('codeTitreFormation', TextType::class, ['label' => 'Code Titre'])
            ->add('millesimeFormation', DateType::class, ['label' => 'Millesime'])
            ->add('dateParutionFormation', DateType::class, ['label' => 'Date de parution'])
            ->add('nsfFormation', TextType::class, ['label' => 'Nomenclature des spécialités'])
            ->add('romeFormation', TextType::class, ['label' => 'Code ROME'])
            ->add('dateFinValdteAggrmtFormation',  DateType::class, ['label' => 'Date de Fin de Validité Aggrement'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Formations::class,
        ]);
    }
}
