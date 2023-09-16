<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Service;
use DateTimeImmutable;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ServiceFixtures extends Fixture
{
    // ====================================================== //
    // ===================== PROPRIETES ===================== //
    // ====================================================== //
    public const SYSTEMES_GESTION_9001 = "ISO9001";
    public const SYSTEMES_GESTION_14001 = "ISO14001";
    public const SYSTEMES_GESTION_45001 = "ISO45001";
    public const SYSTEMES_GESTION_26000 = "ISO26000";
    public const AUDITS_INTERNES = "internes";
    public const AUDITS_SYSTEMES = "systemes";
    public const APPLICATIONS_WEB = "applications";

    // ====================================================== //
    // ===================== METHODES ===================== //
    // ====================================================== //
    
    public function load(ObjectManager $manager): void
    {
        $service = new Service();
        $service->setName("systemes gestion ISO 9001");
        $service->setSlug("systemes-gestion-ISO-9001");
        $service->setTerm("ISO 9001 définit les critères applicables à un système de management de la qualité.");
        $service->setAvailability(new DateTime());
        $service->setImageName("ISO9001.jpg");
        $service->setRankOrder(1);
        $service->setUpdatedAt(new DateTimeImmutable());
        $service->setIsActive(true);
        $service->setPrice("Consulter nos meilleurs prix.");
        $manager->persist($service);
        $manager->flush();
        // On crée une référence pour la catégorie "systemes gestion 9001" que l'on pourra utiliser dans d'autres fixtures et la catégorie est associée à la constante SYSTEMES_GESTION_9001
        $this->addReference(self::SYSTEMES_GESTION_9001, $service);

        $service = new Service();
        $service->setName("systemes gestion ISO 14001");
        $service->setSlug("systemes-gestion-ISO-14001");
        $service->setTerm("ISO 14001:2015 spécifie les exigences relatives à un système de management environnemental pouvant être utilisé par un organisme pour améliorer sa performance environnementale.");
        $service->setAvailability(new DateTime());
        $service->setImageName("ISO14001.jpg");
        $service->setRankOrder(2);
        $service->setUpdatedAt(new DateTimeImmutable());
        $service->setIsActive(true);
        $service->setPrice("Consulter nos meilleurs prix.");
        $manager->persist($service);
        $manager->flush();
        // référence pour la catégorie "systemes gestion 14001" et la catégorie est associée à la constante SYSTEMES_GESTION_14001
        $this->addReference(self::SYSTEMES_GESTION_14001, $service);

        $service = new Service();
        $service->setName("systemes gestion ISO 45001");
        $service->setSlug("systemes-gestion-ISO-45001");
        $service->setTerm("ISO 45001 est la norme élaborée visant améliorer la sécurité de leurs employés, de réduire les risques sur le lieu de travail et de créer des conditions de travail meilleures et plus sûres.");
        $service->setAvailability(new DateTime());
        $service->setImageName("ISO45001.jpg");
        $service->setRankOrder(3);
        $service->setUpdatedAt(new DateTimeImmutable());
        $service->setIsActive(true);
        $service->setPrice("Consulter nos meilleurs prix.");
        $manager->persist($service);
        $manager->flush();
        // référence pour la catégorie "systemes gestion 45001" et la catégorie est associée à la constante SYSTEMES_GESTION_45001
        $this->addReference(self::SYSTEMES_GESTION_45001, $service);

        $service = new Service();
        $service->setName("systemes gestion ISO 26000");
        $service->setSlug("systemes-gestion-ISO-26000");
        $service->setTerm("ISO 26000, ce sont des lignes directrices pour tous ceux qui ont conscience qu’un comportement socialement responsable et respectueux de l’environnement est un facteur clé de la réussite.");
        $service->setAvailability(new DateTime());
        $service->setImageName("ISO26000.jpg");
        $service->setRankOrder(4);
        $service->setUpdatedAt(new DateTimeImmutable());
        $service->setIsActive(true);
        $service->setPrice("Consulter nos meilleurs prix.");
        $manager->persist($service);
        // référence pour la catégorie "systemes gestion 26000" et la catégorie est associée à la constante SYSTEMES_GESTION_26000
        $this->addReference(self::SYSTEMES_GESTION_26000, $service);

        $service = new Service();
        $service->setName("Audits internes");
        $service->setSlug("audits-internes");
        $service->setTerm("Selon ISO 19011, L'audit est un processus méthodique, cette activité indépendante et documentée permettant d'obtenir des preuves d'audit et de les évaluer de manière objective pour déterminer dans quelle mesure les critères d'audit sont satisfaits.");
        $service->setAvailability(new DateTime());
        $service->setImageName("internes.jpg");
        $service->setRankOrder(5);
        $service->setUpdatedAt(new DateTimeImmutable());
        $service->setIsActive(true);
        $service->setPrice("Consulter nos meilleurs prix.");
        $manager->persist($service);
        $manager->flush();
        // référence pour la catégorie "audits internes" et la catégorie est associée à la constante AUDITS_INTERNES
        $this->addReference(self::AUDITS_INTERNES, $service);

        $service = new Service();
        $service->setName("Audits systemes");
        $service->setSlug("audits-systemes");
        $service->setTerm("Les audits de systèmes de management sont des processus permettant de s’assurer de la bonne mise en œuvre des systèmes de management au sein de l'entreprise.");
        $service->setAvailability(new DateTime());
        $service->setImageName("system.jpg");
        $service->setRankOrder(6);
        $service->setUpdatedAt(new DateTimeImmutable());
        $service->setIsActive(true);
        $service->setPrice("Consulter nos meilleurs prix.");
        $manager->persist($service);
        $manager->flush();
        // référence pour la catégorie "audits systemes" et la catégorie est associée à la constante AUDITS SYSTEMES
        $this->addReference(self::AUDITS_SYSTEMES, $service);

        $service = new Service();
        $service->setName("Applications web");
        $service->setSlug("applications-web");
        $service->setTerm("Contrairement aux applications natives qu'il faut mettre à jour manuellement, les applications web ont l'avantage d'être toujours à jour pour tout le monde et permet aux entreprises d'actualiser leurs parties intéréessées sur la mise à jour des contenus.");
        $service->setAvailability(new DateTime());
        $service->setImageName("appweb.jpg");
        $service->setRankOrder(7);
        $service->setUpdatedAt(new DateTimeImmutable());
        $service->setIsActive(true);
        $service->setPrice("Consulter nos meilleurs prix.");
        $manager->persist($service);
        $manager->flush();
        // référence pour la catégorie "applications web" et la catégorie est associée à la constante APPLICATIONS WEB
        $this->addReference(self::APPLICATIONS_WEB, $service);

    }
}
