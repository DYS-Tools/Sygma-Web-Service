<?php

namespace App\Repository;

use App\Entity\AdminVar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AdminVar|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdminVar|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdminVar[]    findAll()
 * @method AdminVar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminVarRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AdminVar::class);
    }

    // /**
    //  * @return AdminVar[] Returns an array of AdminVar objects
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
    public function findOneBySomeField($value): ?AdminVar
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