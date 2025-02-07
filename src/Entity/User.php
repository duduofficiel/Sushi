<?php

namespace App\Entity;

// La classe UserRepository, qui sert à interagir avec la base de données - UserRepository კლასი, რომელიც ემსახურება მონაცემთა ბაზასთან ურთიერთობას
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM; // ORM ანოტაციები, რომლებიც კლასებსა და ველებს მონაცემთა ბაზასთან აკავშირებს
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface; // ინსტერფეისი, რომელიც უზრუნველყოფს მომხმარებლის პაროლის გადამოწმებას
use Symfony\Component\Security\Core\User\UserInterface; // UserInterface, რომელიც განსაზღვრავს მომხმარებლის მონაცემებს
use App\Entity\MessengerMessage; // შეიძლება გამოიყენოს შეტყობინებების მენეჯმენტისთვის
use Doctrine\ORM\EntityManagerInterface; // EntityManager, რომელიც უზრუნველყოფს მონაცემთა ბაზასთან ურთიერთობას

#[ORM\Entity(repositoryClass: UserRepository::class)] // Indique que cette classe est une entité et inclut UserRepository - აღნიშნავს, რომ ეს კლასი არის Entity და მოიცავს UserRepository-ს
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])] // აღნიშნავს, რომ email უნდა იყოს უნიკალური მონაცემთა ბაზაში.
class User implements UserInterface, PasswordAuthenticatedUserInterface // User კლასი implements UserInterface და PasswordAuthenticatedUserInterface
{
    #[ORM\Id] // Indique que le champ id est la clé primaire (ID) - აღნიშნავს, რომ id ველი არის პრაიმარი საკლასო (ID)
    #[ORM\GeneratedValue] // La valeur de l'ID est générée automatiquement - ID-ს მნიშვნელობა ავტომატურად გენერირდება
    #[ORM\Column] // Indique que ce champ est une colonne dans la base de données - აღნიშნავს, რომ ეს ველი არის სვეტი მონაცემთა ბაზაში
    private ?int $id = null; // Le champ id, qui contient la valeur de la clé primaire - id ველი, რომელიც შეიცავს პრაიმარი საკლასო მნიშვნელობას

    #[ORM\Column(length: 180)] // Le champ email, dont la longueur ne doit pas dépasser 180 caractères - email ველი, რომლის სიგრძე არ უნდა აღემატებოდეს 180 სიმბოლოს
    private ?string $email = null; // Le champ email, qui contient l'adresse email de l'utilisateur - email ველი, რომელიც შეიცავს მომხმარებლის ელექტრონულ ფოსტის მისამართს

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column] // Le champ des rôles, qui distingue les rôles de l'utilisateur - როლის ველი, რომელიც განასხვავებს მომხმარებლის როლებს
    private array $roles = []; // Les rôles de l'utilisateur (par exemple : ROLE_USER) - მომხმარებლის როლები (მაგ: ROLE_USER)

    /**
     * @var string The hashed password
     */
    #[ORM\Column] // Le champ du mot de passe, qui contient la valeur hachée du mot de passe - პაროლის ველი, რომელიც შეიცავს პაროლის ჰეშირებულ მნიშვნელობას
    private ?string $password = null; // hashed პაროლი.

    // Méthode getter pour obtenir l'ID - Getter მეთოდი ID-ს მისაღებად
    public function getId(): ?int
    {
        return $this->id; // Retour de l'ID - ID-ს გადმოცემა
    }

    // Méthode getter pour obtenir l'email - Getter მეთოდი email-ს მისაღებად
    public function getEmail(): ?string
    {
        return $this->email; // Retour de l'email - email-ს გადმოცემა
    }

    // Méthode setter pour définir l'email - Setter მეთოდი email-ს დასაყენებლად
    public function setEmail(string $email): static
    {
        $this->email = $email; // Mise à jour de la valeur de l'email - email-ის მნიშვნელობის განახლება

        return $this; // Retour de l'objet courant - current ობიექტის დაბრუნება
    }

    /**
     * A visual identifier that represents this user
     *
     * @see UserInterface
     */
    // Méthode qui fournit l'identifiant unique de l'utilisateur (c'est l'email) - მეთოდი, რომელიც უზრუნველყოფს მომხმარებლის უნიკალურ იდენტიფიკატორს (ეს არის email)
    public function getUserIdentifier(): string
    {
        return (string) $this->email; // Retour de l'email en tant qu'identifiant de l'utilisateur - email გადმოსვლა როგორც მომხმარებლის იდენტიფიკატორი
    }

    /**
     * @see UserInterface
     *
     * @return list<string>
     */
    // Méthode pour obtenir les rôles - მეთოდი როლების  მიღება
    public function getRoles(): array
    {
        $roles = $this->roles; // La liste des rôles - როლების ჩამონათვალი
        $roles[] = 'ROLE_USER'; // De plus, chaque utilisateur a au moins 'ROLE_USER - დამატებით ყველა მომხმარებელს აქვს მინიმუმ 'ROLE_USER'

        return array_unique($roles); // Retour de la liste des rôles uniques - დაბრუნება უნიკალური როლების სიის
    }

    /**
     * @param list<string> $roles
     */
    // Méthode setter pour définir les rôles - Setter მეთოდი როლების დასაყენებლად
    public function setRoles(array $roles): static
    {
        $this->roles = $roles; // Mise à jour de la liste des rôles - როლების სიაში განახლება

        return $this; // Retour de l'objet courant - current ობიექტის დაბრუნება
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    // Méthode getter pour obtenir le mot de passe - Getter მეთოდი password-ს მისაღებად
    public function getPassword(): ?string
    {
        return $this->password; // Retour du mot de passe - password-ის გადმოცემა
    }

    // Méthode setter pour définir le mot de passe - Setter მეთოდი password-ს დასაყენებლად
    public function setPassword(string $password): static
    {
        $this->password = $password; // Mettre à jour la valeur du mot de passe - password-ის მნიშვნელობის განახლება

        return $this; // Retour de l'objet courant - current ობიექტის დაბრუნება
    }

    /**
     * @see UserInterface
     */
    // La méthode eraseCredentials, qui définit comment effacer les données sensibles - eraseCredentials მეთოდი, რომელიც განსაზღვრავს, როგორ გავწმინდოთ მგრძნობიარე მონაცემები
    public function eraseCredentials(): void
    {
        // Si des données temporaires et sensibles sont stockées sur l'utilisateur, elles doivent être effacées ici  
        // თუ რაიმე დროებითი და მგრძნობიარე მონაცემები ინახება მომხმარებელზე, ისინი აქ უნდა განიმარტოს
        // $this->plainPassword = null;
    }
}
