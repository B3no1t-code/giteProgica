<?php

namespace App\Form;

use App\Entity\Equipement;
use App\Entity\Gite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class GiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'required' => false,
                'label' => 'Nom du gite',
                'attr' => [
                    'placeholder' => 'Entrer le nom du gite'
                ]
            ])
            ->add('description', TextareaType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Entrer la description du gite'
                ]
            ])
            ->add('surface', NumberType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Entrer la surface'
                ]
            ])
            ->add('bedrooms', NumberType::class, [
                'required' => false,
                'label' => 'Nombre de chambre',
                'attr' => [
                    'placeholder' => 'Entrer le nombre de chambre'
                ]
            ])
            ->add('address', TextType::class, [
                'required' => false,
                'label' => 'Adresse',
                'attr' => [
                    'placeholder' => 'Entrer une adresse'
                ]
            ])
            ->add('city', TextType::class, [
                'required' => false,
                'label' => 'Ville',
                'attr' => [
                    'placeholder' => 'Entrer une ville'
                ]
            ])
            ->add('postal_code', TextType::class, [
                'required' => false,
                'label' => 'Code postale',
                'attr' => [
                    'placeholder' => 'Entrer un code postal'
                ]
            ])
            ->add('animals', CheckboxType::class, [
                'required' => false
            ])
            ->add('equipements', EntityType::class, [
                'class' => Equipement::class,
                'choice_label' => 'name',
                'multiple' => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Gite::class,
        ]);
    }
}
