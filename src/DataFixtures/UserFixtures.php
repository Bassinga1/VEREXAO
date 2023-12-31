<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture implements FixtureGroupInterface
{
    
        // ====================================================== //
        // ===================== PROPRIETES ===================== //
        // ====================================================== /
        private $encoder; // pour le hashage du mot de passe
        // ====================================================== //
        // =================== CONSTRUCTORS ================== //
        // ====================================================== //
        public function __construct(UserPasswordHasherInterface $encoder)
        {
            $this->encoder = $encoder;
        }
        // ====================================================== //
        // =================== METHODS ================== //
        // ====================================================== //
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setNom("Bassinga");
        $user->setPrenom("Prince");
        $user->setEmail("prince.bass02@gmail.com");
        $user->setRoles(["ROLE_USER", "ROLE_ADMIN"]);
        $user->setPassword($this->encoder->hashPassword($user, "pass"));
        $user->setIsVerified(true);
        $manager->persist($user);

        $user = new User();
        $user->setNom("Ben");
        $user->setPrenom("Priben");
        $user->setEmail("pribenis@gmail.com");
        $user->setRoles(["ROLE_USER"]);
        $user->setPassword($this->encoder->hashPassword($user, "pass"));
        $user->setIsVerified(true);
        $manager->persist($user);

        $manager->flush();
    }
    public static function getGroups(): array
    {
        return ['user'];
    }
}
