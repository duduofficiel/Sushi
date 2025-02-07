<?php

namespace App\Entity;

// Classe Repository, utilisée pour interagir avec la base de données - Repository კლასი, რომელიც გამოიყენება მონაცემთა ბაზასთან სამუშაოდ
use App\Repository\PricingPlanRepository;
// Classes et collections utilisées pour travailler avec Doctrine ORM - კლასები და კოლექციები, რომლებიც გამოიყენება Doctrine ORM-თან მუშაობისთვის
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

// Classe d'entité ORM, qui correspond à une table de base de données - ORM Entity კლასი, რომელიც შესაბამისია მონაცემთა ბაზის ცხრილს
#[ORM\Entity(repositoryClass: PricingPlanRepository::class)]
class PricingPlan
{
    // Définition du identifiant (ID) dans la base de données - მონაცემთა ბაზაში პირადობის ნიშნულის (ID) განსაზღვრა
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // modifie le nom, qui préservera 50 caractères - ცვლის სახელი, რომელიც დაიცავს 50 სიმბოლოს
    #[ORM\Column(length: 50)]
    private ?string $name = null;

    // modifie le prix, qui conserve un nombre entier - ცვლის ფასი, რომელიც ინახავს მთელ რიცხვს
    #[ORM\Column]
    private ?int $price = null;

    /**
     * @var Collection<int, PricingPlanBenefit>
     * @ORM\OneToMany relation qui s'associe avec PricingPlanBenefit - @ORM\OneToMany შეხება, რომელიც ასოცირდება PricingPlanBenefit-თან 
     * Il va trier l'ordre et également supprimer les enregistrements orphelins (qui sont seuls - და დაარჩევს თანმიმდევრობას, აგრეთვე მოხსნის orphan (მარტო დარჩენილი) ჩანაწერებს
     */
    #[ORM\OneToMany(mappedBy: 'pricingPlan', targetEntity: PricingPlanBenefit::class, cascade: ['persist'], orphanRemoval: true)]
    private Collection $benefits;

    /**
     * @var Collection<int, PricingPlanFeature>
     * @ORM\ManyToMany relation qui s'associe avec PricingPlanFeature - @ORM\ManyToMany შეხება, რომელიც ასოცირდება PricingPlanFeature-თან
     */
    #[ORM\ManyToMany(targetEntity: PricingPlanFeature::class)]
    private Collection $features;

    // Constructeur qui initialise les collections de bénéfices et de fonctionnalités - კონსტრუქტორი, რომელიც იწყებს benefits და features კოლექციებს
    public function __construct()
    {
        $this->benefits = new ArrayCollection();
        $this->features = new ArrayCollection();
    }

    // Recevoir un ID - ID-ს მიღება
    public function getId(): ?int
    {
        return $this->id;
    }

    // Recevoir un nom - სახელის მიღება
    public function getName(): ?string
    {
        return $this->name;
    }

    // Attribuer un nom - სახელის დაყენება
    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    // Recevoir le prix - ფასი მიღება
    public function getPrice(): ?int
    {
        return $this->price;
    }

    // Fixer le prix - ფასი დაყენება
    public function setPrice(int $price): static
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return Collection<int, PricingPlanBenefit>
     * Retour de la collection de bénéfices - benefits კოლექციის დაბრუნება
     */
    public function getBenefits(): Collection
    {
        return $this->benefits;
    }

    // Ajout d'un nouveau bénéfice - new benefit-ის დამატება
    public function addBenefit(PricingPlanBenefit $benefit): static
    {
        if (!$this->benefits->contains($benefit)) {
            $this->benefits->add($benefit);
            $benefit->setPricingPlan($this);
        }

        return $this;
    }

    // Suppression du bénéfice - benefit-ის მოცილება
    public function removeBenefit(PricingPlanBenefit $benefit): static
    {
        if ($this->benefits->removeElement($benefit)) {
            // Si le pricingPlan a déjà été modifié, alors définissez-le sur null - თუ pricingPlan უკვე შეიცვალა, მაშინ null დაინიშნოს
            if ($benefit->getPricingPlan() === $this) {
                $benefit->setPricingPlan(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, PricingPlanFeature>
     * Retour de la collection des fonctionnalités - features კოლექციის დაბრუნება
     */
    public function getFeatures(): Collection
    {
        return $this->features;
    }

    // Ajout d'une nouvelle fonctionnalité - ახალი feature-ის დამატება
    public function addFeature(PricingPlanFeature $feature): static
    {
        if (!$this->features->contains($feature)) {
            $this->features->add($feature);
        }

        return $this;
    }

    // Suppression de la fonctionnalité - feature-ის მოცილება
    public function removeFeature(PricingPlanFeature $feature): static
    {
        $this->features->removeElement($feature);

        return $this;
    }

    // Vérification si la fonctionnalité existe déjà - შემოწმება, თუ feature უკვე არსებობს
    public function hasFeature(PricingPlanFeature $feature): bool
    {
        return $this->features->contains($feature);
    }
}
