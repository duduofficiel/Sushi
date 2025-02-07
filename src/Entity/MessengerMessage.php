<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

// L'entité qui représente le type de données 'MessengerMessage - Entity-ი, რომელიც წარმოადგენს "MessengerMessage" მონაცემთა ტიპს
#[ORM\Entity]
class MessengerMessage
{
    // Le champ id, qui est unique et généré automatiquement - id-ს ველი, რომელიც არის უნიკალური და ავტომატურად გენერირებული
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id;

    // Le champ body, qui contient le texte du message - body-ს ველი, რომელიც შეიცავს შეტყობინების ტექსტს
    #[ORM\Column(type: 'text')]
    private string $body;

    // Le champ headers, qui est au format JSON et contient des données supplémentaires - headers ველი, რომელიც არის JSON ფორმატში და შეიცავს დამატებით მონაცემებს
    #[ORM\Column(type: 'json')]
    private array $headers = [];

    // Méthode getter de l'id - id-ს getter მეთოდი
    public function getId(): ?int
    {
        return $this->id;
    }

    // Méthode getter du body - body-ს getter მეთოდი
    public function getBody(): ?string
    {
        return $this->body;
    }

    // Méthode setter du body - body-ს setter მეთოდი
    public function setBody(string $body): self
    {
        $this->body = $body;
        return $this;
    }

    // Méthode getter des headers - headers-ის getter მეთოდი
    public function getHeaders(): array
    {
        return $this->headers;
    }

    // Méthode setter des headers - headers-ის setter მეთოდი
    public function setHeaders(array $headers): self
    {
        $this->headers = $headers;
        return $this;
    }
}
