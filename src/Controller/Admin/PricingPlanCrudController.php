<?php

namespace App\Controller\Admin;

use App\Entity\PricingPlan;
use App\Form\PricingPlanBenefitType; // PricingPlanBenefitType ფორმის კლასის "use"
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PricingPlanCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PricingPlan::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name', 'Name'), // 'propertyName' შეცვლილია 'name'-ით
            IntegerField::new('price', 'Price'), // 'propertyName' შეცვლილია 'price'-ით
            CollectionField::new('benefits', 'Benefits') // 'propertyName' შეცვლილია 'benefits'-ით
                ->setEntryType(PricingPlanBenefitType::class) // ფორმის ტიპის მითითება
                ->onlyOnForms(), // მხოლოდ ფორმაზე გამოჩენა
        ];
    }
}
