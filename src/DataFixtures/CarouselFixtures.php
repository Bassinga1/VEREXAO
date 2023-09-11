<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Carousel;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CarouselFixtures extends Fixture
{
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

        $carousel = new Carousel();
        $carousel->setIsActive(true);
        $carousel->setRankOrder(2);
        $carousel->setImageName("carousel2.webp");
        $carousel->setTexte("");
        $carousel->setUpdatedAt(new DateTime());
        $carousel->setTag("home");
        $manager->persist($carousel);

        $carousel = new Carousel();
        $carousel->setIsActive(true);
        $carousel->setRankOrder(3);
        $carousel->setImageName("carousel4.webp");
        $carousel->setTexte("");
        $carousel->setUpdatedAt(new DateTime());
        $carousel->setTag("home");
        $manager->persist($carousel);

        $manager->flush();
    }
}
