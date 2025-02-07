<?php

namespace App\Form;

use App\Entity\PricingPlanBenefit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PricingPlanBenefitType extends AbstractType
{
    // La méthode buildForm pour la création des éléments du formulaire - buildForm მეთოდი ფორმის ელემენტების შექმნისთვის
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // Ajout du champ 'name' dans le formulaire - 'name' ველის დამატება ფორმაში
            ->add('name')
        ;
    }

    // La méthode configureOptions pour la configuration du formulaire - configureOptions მეთოდი ფორმის კონფიგურაციისთვის
    public function configureOptions(OptionsResolver $resolver)
    {
        // Nous convenons que le formulaire est lié à l'entité PricingPlanBenefit - ვთანხმდებით, რომ ფორმა დაკავშირებულია PricingPlanBenefit Entity-სთან
        $resolver->setDefaults([
            'data_class' => PricingPlanBenefit::class,
        ]);
    }
}
