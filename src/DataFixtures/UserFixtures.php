<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        // Créez un nouvel objet User - შექმენი ახალი User ობიექტი
        $user = new User();
        $user->setEmail('SatoshiNakamoto@email.com');
        $user->setRoles(['ROLE_ADMIN']);  
        
        // Hachage du mot de passe - პაროლის ჰაშირება
        $hashedPassword = $this->passwordHasher->hashPassword($user, 'your_plain_password_here');
        $user->setPassword($this->passwordHasher->hashPassword($user, 'my_secret_password'));

        // Utilisateur persistant - მუდმივი მომხმარებელი
        $manager->persist($user);

        // Enregistrement des données - მონაცემების შენახვა
        $manager->flush();
    }
}
