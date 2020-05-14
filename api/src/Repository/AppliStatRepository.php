<?php

namespace App\Repository;

use App\Entity\AppliStat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AppliStat|null find($id, $lockMode = null, $lockVersion = null)
 * @method AppliStat|null findOneBy(array $criteria, array $orderBy = null)
 * @method AppliStat[]    findAll()
 * @method AppliStat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppliStatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AppliStat::class);
    }

    // /**
    //  * @return AppliStat[] Returns an array of AppliStat objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AppliStat
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
