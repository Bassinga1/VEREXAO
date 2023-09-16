<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Home;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class HomeFixtures extends Fixture
{
    // ====================================================== //
    // ===================== PROPRIETES ===================== //
    // ====================================================== //
    public const HOME1 = "home1";
    // public const HOME2 = "home2";

    // ====================================================== //
    // ===================== METHODES ===================== //
    // ====================================================== //

    public function load(ObjectManager $manager): void
    {
        $home = new Home();
        $home->setTitre('Bienvenue et merci de votre visite !');
        $home->setTexte('Contribuer au développement des petites et moyennes entreprises');
        $home->getSignature('Equipe VEREX');
        $home->setIsActive(true);
        $home->setUpdatedAt(new DateTime());
        $home->setImageName("bghome.webp");
        $manager->persist($home);
        $manager->flush();
        // référence pour la home "home1" associée à la constante HOME1
        $this->addReference(self::HOME1, $home);

        $home = new Home();
        $home->setTitre('Bienvenue et merci de votre visite !');
        $home->setTexte('Contribuer à la maintenance des systèmes de gestion des entreprises');
        $home->getSignature('Equipe VEREX');
        $home->setIsActive(false);
        $home->setUpdatedAt(new DateTime());
        $home->setImageName("bgvrx1.webp");
        $manager->persist($home);
        $manager->flush();
        // // référence pour la home "home2" associée à la constante HOME2
        // $this->addReference(self::HOME2, $home);
    }
}
