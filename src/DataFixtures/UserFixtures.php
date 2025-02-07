<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use App\Entity\MessengerMessage;
use App\Entity\PricingPlan;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use ReflectionProperty;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        include 'sushi.php';

        // ✅ 1. შენახული მომხმარებლის დამატება
        $user = new User();
        $user->setEmail('SatoshiNakamoto@email.com');
        $user->setRoles(['ROLE_ADMIN']);

        // პაროლის დაშიფვრა (შეცვალე 'my_secret_password' საჭირო მნიშვნელობით)
        $hashedPassword = $this->passwordHasher->hashPassword($user, 'my_secret_password');
        $user->setPassword($hashedPassword);

        $manager->persist($user);

        // ✅ 2. მომხმარებლების დამატება ბაზიდან
        foreach ($user as $u) {
            // გამოტოვება, თუ მომხმარებელი უკვე არსებობს
            if ($u['email'] === 'SatoshiNakamoto@email.com') {
                continue;
            }

            $userEntity = new User();

            // ID-ს ხელით დაყენება
            $reflection = new ReflectionProperty(User::class, 'id');
            $reflection->setAccessible(true);
            $reflection->setValue($userEntity, (int) $u['id']);

            $userEntity
                ->setEmail($u['email'])
                ->setRoles(json_decode($u['roles'], true))
                ->setPassword($u['password']); // პაროლი უკვე დაშიფრულია ბაზაში

            $manager->persist($userEntity);
        }

        // ✅ 3. შეტყობინებების დამატება
        foreach ($messenger_message as $msg) {
            $messageEntity = new MessengerMessage();

            $reflection = new ReflectionProperty(MessengerMessage::class, 'id');
            $reflection->setAccessible(true);
            $reflection->setValue($messageEntity, (int) $msg['id']);

            $messageEntity
                ->setBody($msg['body'])
                ->setHeaders($msg['headers']);

            $manager->persist($messageEntity);
        }

        // ✅ 4. ტარიფების დამატება
        foreach ($pricing_plan as $plan) {
            $planEntity = new PricingPlan();

            $reflection = new ReflectionProperty(PricingPlan::class, 'id');
            $reflection->setAccessible(true);
            $reflection->setValue($planEntity, (int) $plan['id']);

            $planEntity
                ->setName($plan['name'])
                ->setPrice((float) $plan['price']);

            $manager->persist($planEntity);
        }

        $manager->flush(); // 💾 მონაცემების შენახვა ბაზაში
    }
}
