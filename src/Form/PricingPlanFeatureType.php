<?php

namespace App\Form;

use App\Entity\PricingPlanFeature;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PricingPlanFeatureType extends AbstractType
{
    // La méthode buildForm pour la création des éléments du formulaire - buildForm მეთოდი ფორმის ელემენტების შექმნისთვის
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Ajout du champ 'name' dans le formulaire - 'name' ველის დამატება ფორმაში
            ->add('name')
        ;
    }

    // La méthode configureOptions pour la configuration du formulaire - configureOptions მეთოდი ფორმის კონფიგურაციისთვის
    public function configureOptions(OptionsResolver $resolver): void
    {
        // Nous convenons que le formulaire est lié à l'entité PricingPlanFeature - ვთანხმდებით, რომ ფორმა დაკავშირებულია PricingPlanFeature Entity-სთან
        $resolver->setDefaults([
            'data_class' => PricingPlanFeature::class,
        ]);
    }
}
