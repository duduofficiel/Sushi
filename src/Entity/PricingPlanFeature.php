<?php

namespace App\Entity;

// La classe PricingPlanFeatureRepository, qui sert à l'interaction avec la base de données - PricingPlanFeatureRepository კლასი, რომელიც ემსახურება მონაცემთა ბაზასთან ურთიერთობას
use App\Repository\PricingPlanFeatureRepository;
use Doctrine\ORM\Mapping as ORM; // Annotations ORM qui lient les classes et les champs à la base de données - ORM ანოტაციები, რომლებიც კლასებს და ველებს მონაცემთა ბაზასთან აკავშირებს

#[ORM\Entity(repositoryClass: PricingPlanFeatureRepository::class)] // Indique que cette classe est une entité et inclut le PricingPlanFeatureRepository - აღნიშნავს, რომ ეს კლასი არის Entity და მოიცავს PricingPlanFeatureRepository-ს
class PricingPlanFeature
{
    #[ORM\Id] // Indique que ce champ est la clé primaire (ID) - აღნიშნავს ამ ველს, როგორც პრაიმარი საკლასო ქაღალდი (ID)
    #[ORM\GeneratedValue] // Indique que la valeur de l'ID est générée automatiquement - აღნიშნავს, რომ ID-ს მნიშვნელობა ავტომატურად გენერირდება
    #[ORM\Column] // Indique que ce champ est une colonne dans la base de données - აღნიშნავს, რომ ეს ველი არის სვეტი მონაცემთა ბაზაში
    private ?int $id = null; // Le champ id, qui contient la valeur de la clé primaire - id ველი, რომელიც შეიცავს პრაიმარი საკლასო მნიშვნელობას

    #[ORM\Column(length: 50)] // Indique que ce champ doit avoir une longueur maximale de 50 caractères - აღნიშნავს, რომ ამ ველს უნდა ჰქონდეს სვეტის მაქსიმალური სიგრძე 50 სიმბოლო
    private ?string $name = null; // Le champ name, qui contient le nom de l'élément - name ველი, რომელიც შეიცავს ელემენტის სახელს

    // Méthode getter pour obtenir la valeur de l'ID - Getter მეთოდი ID-ს მისაღებად
    public function getId(): ?int
    {
        return $this->id; // La valeur de l'ID - ID-ს მნიშვნელობა
    }

    // Méthode getter pour obtenir la valeur de name - Getter მეთოდი name-ს მისაღებად
    public function getName(): ?string
    {
        return $this->name; // La valeur de name - name-ს მნიშვნელობა
    }

    // Méthode setter pour configurer name - Setter მეთოდი name-ს დასაკონფიგურირებლად
    public function setName(string $name): static
    {
        $this->name = $name; // Mettre à jour la valeur de name - name-ს მნიშვნელობის განახლება

        return $this; // Modifie l'objet courant - ცვლის current ობიექტს
    }
}
