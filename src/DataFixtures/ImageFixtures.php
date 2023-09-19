<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Image;
use App\DataFixtures\TypeFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ImageFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $image = new Image();
        $image->setImageName("sgiso9001.jpg");
        $image->setRankOrder(1);
        $image->setUpdatedAt(new DateTime());
        $image->setType($this->getReference(TypeFixtures::SG_9001));
        $image->setHome($this->getReference(HomeFixtures::HOME1));
        $image->setCarousel($this->getReference(CarouselFixtures::CAROUSEL));
        $image->setTag("SG9001");
        $manager->persist($image);

        $image = new Image();
        $image->setImageName("sgiso14001.jpg");
        $image->setRankOrder(2);
        $image->setUpdatedAt(new DateTime());
        $image->setType($this->getReference(TypeFixtures::SG_14001));
        $image->setHome($this->getReference(HomeFixtures::HOME1));
        $image->setCarousel($this->getReference(CarouselFixtures::CAROUSEL));
        $image->setTag("SG14001");
        $manager->persist($image);

        $image = new Image();
        $image->setImageName("sgiso45001.jpg");
        $image->setRankOrder(3);
        $image->setUpdatedAt(new DateTime());
        $image->setType($this->getReference(TypeFixtures::SG_45001));
        $image->setHome($this->getReference(HomeFixtures::HOME1));
        $image->setCarousel($this->getReference(CarouselFixtures::CAROUSEL));
        $image->setTag("SG45001");
        $manager->persist($image);

        $image = new Image();
        $image->setImageName("sgiso26000.jpg");
        $image->setRankOrder(4);
        $image->setUpdatedAt(new DateTime());
        $image->setType($this->getReference(TypeFixtures::SG_26000));
        $image->setHome($this->getReference(HomeFixtures::HOME1));
        $image->setCarousel($this->getReference(CarouselFixtures::CAROUSEL));
        $image->setTag("SG26000");
        $manager->persist($image);

        $image = new Image();
        $image->setImageName("audits.jpg");
        $image->setRankOrder(5);
        $image->setUpdatedAt(new DateTime());
        $image->setType($this->getReference(TypeFixtures::AUDITS));
        $image->setHome($this->getReference(HomeFixtures::HOME1));
        $image->setCarousel($this->getReference(CarouselFixtures::CAROUSEL));
        $image->setTag("Interne");
        $manager->persist($image);

        $image = new Image();
        $image->setImageName("auditsystem.jpg");
        $image->setRankOrder(6);
        $image->setUpdatedAt(new DateTime());
        $image->setType($this->getReference(TypeFixtures::CERTIFICATION));
        $image->setHome($this->getReference(HomeFixtures::HOME1));
        $image->setCarousel($this->getReference(CarouselFixtures::CAROUSEL));
        $image->setTag("Certification");
        $manager->persist($image);

        $image = new Image();
        $image->setImageName("appweb.jpg");
        $image->setRankOrder(7);
        $image->setUpdatedAt(new DateTime());
        $image->setType($this->getReference(TypeFixtures::APPLICATIONS));
        $image->setHome($this->getReference(HomeFixtures::HOME1));
        $image->setCarousel($this->getReference(CarouselFixtures::CAROUSEL));
        $image->setTag("Web");
        $manager->persist($image);

        $manager->flush();
    }
    public function getDependencies():array
    {
        return[
            TypeFixtures::class,
        ];
    }
}

