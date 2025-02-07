<?php

namespace App\Entity;

// Classe Repository utilisée pour les opérations de base de données de l'entité PricingPlanBenefit
// Repository კლასი, რომელიც გამოიყენება PricingPlanBenefit Entity-ს მონაცემთა ბაზის ოპერაციებისთვის
use App\Repository\PricingPlanBenefitRepository;
// Les classes de mapping nécessaires de Doctrine ORM - Doctrine ORM-ის საჭირო mapping კლასები
use Doctrine\ORM\Mapping as ORM;

// Définition de la classe ORM Entity, qui est liée à la table PricingPlanBenefit dans la base de données 
// ORM Entity კლასის განმარტვა, რომელიც დაკავშირებულია PricingPlanBenefit მონაცემთა ბაზის ცხრილთან
#[ORM\Entity(repositoryClass: PricingPlanBenefitRepository::class)]
class PricingPlanBenefit
{
    // Le champ ID, qui représente une entité unique dans la base de données - ID ველი, რომელიც წარმოადგენს უნიკალურ ერთეულს მონაცემთა ბაზაში
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Le champ du nom, dont la longueur est de 50 caractères - სახელის ველი, რომლის სიგრძეც არის 50 სიმბოლო
    #[ORM\Column(length: 50)]
    private ?string $name = null;

    // Association ManyToOne avec l'entité PricingPlan, indiquant que cet avantage est lié au plan tarifaire 
    // ManyToOne ასოციაცია PricingPlan Entity-სთან, რომელიც აღნიშნავს რომ ამ მისარგებლობის პრიაისინგ პლანთან არის დაკავშირებული
    #[ORM\ManyToOne(inversedBy: 'benefits')]
    #[ORM\JoinColumn(nullable: false)]  // Cela signifie que le champ pricingPlan ne peut pas être null - ეს ნიშნავს, რომ pricingPlan ველი არ შეიძლება იყოს null
    private ?PricingPlan $pricingPlan = null;

    // Obtenir l'ID - ID-ის მიღება
    public function getId(): ?int
    {
        return $this->id;
    }

    // Obtenir le nom - სახელის მიღება
    public function getName(): ?string
    {
        return $this->name;
    }

    // Définir le nom - სახელის დაყენება
    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    // Obtenir le pricingPlan - pricingPlan-ის მიღება
    public function getPricingPlan(): ?PricingPlan
    {
        return $this->pricingPlan;
    }

    // Définir le pricingPlan - pricingPlan-ის დაყენება
    public function setPricingPlan(?PricingPlan $pricingPlan): static
    {
        $this->pricingPlan = $pricingPlan;

        return $this;
    }

    // Méthode toString qui retourne le nom du bénéfice lorsque ces classes sont utilisées dans des modèles _toString მეთოდი, რომელიც აბრუნებს benefits-ის სახელს, როცა ეს კლასები შაბლონებში გამოიყენება
    public function _toString(): string 
    {
        return $this->name;
    }
}
