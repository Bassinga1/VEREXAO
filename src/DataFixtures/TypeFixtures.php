<?php

namespace App\DataFixtures;

use App\Entity\Type;
use DateTimeImmutable;
use App\DataFixtures\ServiceFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class TypeFixtures extends Fixture implements DependentFixtureInterface
{
    // ====================================================== //
    // ===================== PROPRIETES ===================== //
    // ====================================================== //
    public const SG_9001 = "system-gestion-9001";
    public const SG_14001 = "system-gestion-14001";
    public const SG_45001 = "system-gestion-45001";
    public const SG_26000 = "system-gestion-26000";
    public const AUDITS = "realisation-audit";
    public const CERTIFICATION = "audit-certification";
    public const APPLICATIONS = "developpement-web";

    // ====================================================== //
    // ===================== METHODES ===================== //
    // ====================================================== //
    public function load(ObjectManager $manager): void
    {
        $type = new Type();
        $type->setName("systemes gestion ISO 9001");
        $type->setSlug("systemes-gestion-ISO-9001");
        $type->setTerm("VEREX assure une implenentation efficiente suivant les exigences de l'ISO 9001 tout utilisant les outils les plus adaptés aux bessoins du client.");
        $type->setIsActive(true);
        $type->setUpdatedAt(new DateTimeImmutable());
        $type->setImageName("sgiso9001.jpg");
        $type->setRankOrder(1);
        $type->setService($this->getReference(ServiceFixtures::SYSTEMES_GESTION_9001));
        $manager->persist($type);
        // On crée une référence pour le type "systemes gestion 9001" que l'on pourra utiliser dans d'autres fixtures et la catégorie est associée à la constante SYSTEMES_GESTION_9001
        $this->addReference(self::SG_9001, $type);

        $type = new Type();
        $type->setName("systemes gestion ISO 14001");
        $type->setSlug("systemes-gestion-ISO-14001");
        $type->setTerm("VEREX assure une implenentation efficiente suivant les exigences de l'ISO 14001 tout utilisant les outils les plus adaptés aux bessoins du client.");
        $type->setIsActive(true);
        $type->setUpdatedAt(new DateTimeImmutable());
        $type->setImageName("sgiso14001.jpg");
        $type->setRankOrder(2);
        $type->setService($this->getReference(ServiceFixtures::SYSTEMES_GESTION_14001));
        $manager->persist($type);
        // le type "systemes gestion 14001" que l'on pourra utiliser dans d'autres fixtures et le type est associée à la constante SG_14001
        $this->addReference(self::SG_14001, $type);

        $type = new Type();
        $type->setName("systemes gestion ISO 45001");
        $type->setSlug("systemes-gestion-ISO-45001");
        $type->setTerm("VEREX assure une implenentation efficiente suivant les exigences de l'ISO 45001 tout utilisant les outils les plus adaptés aux bessoins du client.");
        $type->setIsActive(true);
        $type->setUpdatedAt(new DateTimeImmutable());
        $type->setImageName("sgiso45001.jpg");
        $type->setRankOrder(3);
        $type->setService($this->getReference(ServiceFixtures::SYSTEMES_GESTION_45001));
        $manager->persist($type);
        // le type "systemes gestion 45001" que l'on pourra utiliser dans d'autres fixtures et le type est associée à la constante SG_45001
        $this->addReference(self::SG_45001, $type);

        $type = new Type();
        $type->setName("systemes gestion ISO 26000");
        $type->setSlug("systemes-gestion-ISO-26000");
        $type->setTerm("VEREX assure une implenentation efficiente suivant les exigences de l'ISO 26000 tout utilisant les outils les plus adaptés aux bessoins du client.");
        $type->setIsActive(true);
        $type->setUpdatedAt(new DateTimeImmutable());
        $type->setImageName("sgiso26000.jpg");
        $type->setRankOrder(4);
        $type->setService($this->getReference(ServiceFixtures::SYSTEMES_GESTION_26000));
        $manager->persist($type);
        // le type "systemes gestion 26000" que l'on pourra utiliser dans d'autres fixtures et le type est associée à la constante SG_26000
        $this->addReference(self::SG_26000, $type);

        $type = new Type();
        $type->setName("Realisation audit");
        $type->setSlug("realisation-audit");
        $type->setTerm("VEREX assure la programmation et la réalisation des audits internes suivant les exigences de l'ISO 19011 tout en utilisant les outils les plus adaptés aux bessoins du client.");
        $type->setIsActive(true);
        $type->setUpdatedAt(new DateTimeImmutable());
        $type->setImageName("audits.jpg");
        $type->setRankOrder(5);
        $type->setService($this->getReference(ServiceFixtures::AUDITS_INTERNES));
        $manager->persist($type);
        // le type "realisation audits internes" que l'on pourra utiliser dans d'autres fixtures et la le type est associée à la constante AUDITS
        $this->addReference(self::AUDITS, $type);

        $type = new Type();
        $type->setName("Audit certification");
        $type->setSlug("audit-certification");
        $type->setTerm("VEREX assure la programmation et la réalisation des audits systemes suivant les exigences de l'ISO 37002 tout en utilisant les outils les plus adaptés aux bessoins du client suivant un accord avec un Organisme Certificateur.");
        $type->setIsActive(true);
        $type->setUpdatedAt(new DateTimeImmutable());
        $type->setImageName("auditsystem.jpg");
        $type->setRankOrder(6);
        $type->setService($this->getReference(ServiceFixtures::AUDITS_SYSTEMES));
        $manager->persist($type);
        // le type "realisation audits certification" que l'on pourra utiliser dans d'autres fixtures et la le type est associée à la constante CERTIFICATION
        $this->addReference(self::CERTIFICATION, $type);

        $type = new Type();
        $type->setName("Developpement web");
        $type->setSlug("developpement-web");
        $type->setTerm("VEREX assure le développement et la programmation des applications web et web mobile suivant les exigences définies et comprises tout en utilisant les outils les plus adaptés aux bessoins du client.");
        $type->setIsActive(true);
        $type->setUpdatedAt(new DateTimeImmutable());
        $type->setImageName("applicationsweb.jpg");
        $type->setRankOrder(7);
        $type->setService($this->getReference(ServiceFixtures::APPLICATIONS_WEB));
        $manager->persist($type);
        // le type "realisation audits certification" que l'on pourra utiliser dans d'autres fixtures et la le type est associée à la constante CERTIFICATION
        $this->addReference(self::APPLICATIONS, $type);


        $manager->flush();
        
    }
    public function getDependencies():array
    {
        return[
            ServiceFixtures::class
        ];
    }
}

