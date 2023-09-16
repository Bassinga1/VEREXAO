<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Carousel;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CarouselFixtures extends Fixture
{
    // ====================================================== //
    // ===================== PROPRIETES ===================== //
    // ====================================================== //
    public const CAROUSEL = "carousel";
    public const CAROUSEL1 = "carousel1";
    public const CAROUSEL2 = "carousel2";

    // ====================================================== //
    // ===================== METHODES ===================== //
    // ====================================================== //
    public function load(ObjectManager $manager): void
    {
        $carousel = new Carousel();
        $carousel->setIsActive(true);
        $carousel->setRankOrder(1);
        $carousel->setImageName("carousel1.webp");
        $carousel->setTexte("");
        $carousel->setUpdatedAt(new DateTime());
        $carousel->setTag("home");
        $manager->persist($carousel);
        $manager->flush();
        // référence pour le carousel "carousel" associée à la constante CAROUSEL
        $this->addReference(self::CAROUSEL, $carousel);

        $carousel = new Carousel();
        $carousel->setIsActive(true);
        $carousel->setRankOrder(2);
        $carousel->setImageName("carousel2.webp");
        $carousel->setTexte("");
        $carousel->setUpdatedAt(new DateTime());
        $carousel->setTag("home");
        $manager->persist($carousel);
        $manager->flush();
        // référence pour le carousel "carousel" associée à la constante CAROUSEL
        $this->addReference(self::CAROUSEL1, $carousel);

        $carousel = new Carousel();
        $carousel->setIsActive(true);
        $carousel->setRankOrder(3);
        $carousel->setImageName("carousel4.webp");
        $carousel->setTexte("");
        $carousel->setUpdatedAt(new DateTime());
        $carousel->setTag("home");
        $manager->persist($carousel);
        $manager->flush();
        // référence pour le carousel "carousel" associée à la constante CAROUSEL
        $this->addReference(self::CAROUSEL2, $carousel);

    }
}
