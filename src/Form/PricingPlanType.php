<?php

namespace App\Form;

use App\Entity\PricingPlan;
use App\Entity\PricingPlanFeature;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PricingPlanType extends AbstractType
{
    // La méthode buildForm pour la création des éléments du formulaire - buildForm მეთოდი ფორმის ელემენტების შესაქმნელად
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Ajout du champ 'name - 'name' ველის დამატება
            ->add('name')
            // Ajout du champ 'price' - 'price' ველის დამატება
            ->add('price')
            // Ajout du champ 'features', qui est lié à l'entité PricingPlanFeature - 'features' ველის დამატება, რომელიც დაკავშირებულია PricingPlanFeature Entity-სთან
            ->add('features', EntityType::class, [
                'class' => PricingPlanFeature::class, // ვადგენთ, რომ 'features' PricingPlanFeature Entity-ს ელემენტებს გამოყოფს
                'choice_label' => 'id', // 'id' sera affiché comme choix“ - 'id' იქნება გამოსახული, როგორც არჩევანი
                'multiple' => true, // Nous permettons de faire plusieurs choix - საშუალებას ვაძლევთ რამდენიმე არჩევანის გაკეთებას
            ])
        ;
    }

    // La méthode configureOptions pour la configuration du formulaire - configureOptions მეთოდი ფორმის კონფიგურაციისთვის
    public function configureOptions(OptionsResolver $resolver): void
    {
        // Nous convenons que le formulaire est lié à l'entité PricingPlan - ვთანხმდებით, რომ ფორმა დაკავშირებულია PricingPlan Entity-სთან
        $resolver->setDefaults([
            'data_class' => PricingPlan::class,
        ]);
    }
}
