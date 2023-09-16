<?php

namespace App\DataFixtures;

use App\Entity\PaymentTerm;
use App\DataFixtures\ProduitFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class PaymentTermFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $paymentTerm  = new PaymentTerm ();
        $paymentTerm->setTerm("Les conditions de paiement régissent le paiement que les clients doivent effectuer à VEREX pour une livraison ou un service. Les clients disposent d’une grande liberté dans le delais de 35 jours à compter de la date de recéption de la facture de réunir leurs conditions de paiement. Il est toutefois judicieux de s’en tenir à des formulations communes afin d’éviter des malentendus.");
        $paymentTerm->setMethod(true);
        $paymentTerm->setService($this->getReference(ServiceFixtures::SYSTEMES_GESTION_9001));
        $manager->persist($paymentTerm );

        $paymentTerm  = new PaymentTerm ();
        $paymentTerm->setTerm("Les conditions de paiement régissent le paiement que les clients doivent effectuer à VEREX pour une livraison ou un service. Les clients disposent d’une grande liberté dans le delais de 35 jours à compter de la date de recéption de la facture de réunir leurs conditions de paiement. Il est toutefois judicieux de s’en tenir à des formulations communes afin d’éviter des malentendus.");
        $paymentTerm->setMethod(true);
        $paymentTerm->setService($this->getReference(ServiceFixtures::SYSTEMES_GESTION_14001));
        $manager->persist($paymentTerm );

        $paymentTerm  = new PaymentTerm ();
        $paymentTerm->setTerm("Les conditions de paiement régissent le paiement que les clients doivent effectuer à VEREX pour une livraison ou un service. Les clients disposent d’une grande liberté dans le delais de 35 jours à compter de la date de recéption de la facture de réunir leurs conditions de paiement. Il est toutefois judicieux de s’en tenir à des formulations communes afin d’éviter des malentendus.");
        $paymentTerm->setMethod(true);
        $paymentTerm->setService($this->getReference(ServiceFixtures::SYSTEMES_GESTION_45001));
        $manager->persist($paymentTerm );

        $paymentTerm  = new PaymentTerm ();
        $paymentTerm->setTerm("Les conditions de paiement régissent le paiement que les clients doivent effectuer à VEREX pour une livraison ou un service. Les clients disposent d’une grande liberté dans le delais de 35 jours à compter de la date de recéption de la facture de réunir leurs conditions de paiement. Il est toutefois judicieux de s’en tenir à des formulations communes afin d’éviter des malentendus.");
        $paymentTerm->setMethod(true);
        $paymentTerm->setService($this->getReference(ServiceFixtures::SYSTEMES_GESTION_26000));
        $manager->persist($paymentTerm );

        $paymentTerm  = new PaymentTerm ();
        $paymentTerm->setTerm("Les conditions de paiement régissent le paiement que les clients doivent effectuer à VEREX pour une livraison ou un service. Les clients disposent d’une grande liberté dans le delais de 35 jours à compter de la date de recéption de la facture de réunir leurs conditions de paiement. Il est toutefois judicieux de s’en tenir à des formulations communes afin d’éviter des malentendus.");
        $paymentTerm->setMethod(true);
        $paymentTerm->setService($this->getReference(ServiceFixtures::AUDITS_INTERNES));
        $manager->persist($paymentTerm );

        $paymentTerm  = new PaymentTerm ();
        $paymentTerm->setTerm("Les conditions de paiement régissent le paiement que les clients doivent effectuer à VEREX pour une livraison ou un service. Les clients disposent d’une grande liberté dans le delais de 35 jours à compter de la date de recéption de la facture de réunir leurs conditions de paiement. Il est toutefois judicieux de s’en tenir à des formulations communes afin d’éviter des malentendus.");
        $paymentTerm->setMethod(true);
        $paymentTerm->setService($this->getReference(ServiceFixtures::AUDITS_SYSTEMES));
        $manager->persist($paymentTerm );

        $paymentTerm  = new PaymentTerm ();
        $paymentTerm->setTerm("Les conditions de paiement régissent le paiement que les clients doivent effectuer à VEREX pour une livraison ou un service. Les clients disposent d’une grande liberté dans le delais de 35 jours à compter de la date de recéption de la facture de réunir leurs conditions de paiement. Il est toutefois judicieux de s’en tenir à des formulations communes afin d’éviter des malentendus.");
        $paymentTerm->setMethod(true);
        $paymentTerm->setService($this->getReference(ServiceFixtures::APPLICATIONS_WEB));
        $manager->persist($paymentTerm );

        $manager->flush();
    }
    public function getDependencies():array
    {
        return[
            ServiceFixtures::class,
            ProduitFixtures::class
        ];
    }
}
