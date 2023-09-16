<?php

namespace App\Repository;

use App\Entity\PaymentTerm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PaymentTerm>
 *
 * @method PaymentTerm|null find($id, $lockMode = null, $lockVersion = null)
 * @method PaymentTerm|null findOneBy(array $criteria, array $orderBy = null)
 * @method PaymentTerm[]    findAll()
 * @method PaymentTerm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaymentTermRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PaymentTerm::class);
    }

//    /**
//     * @return PaymentTerm[] Returns an array of PaymentTerm objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PaymentTerm
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
