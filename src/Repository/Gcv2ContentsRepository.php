<?php

namespace App\Repository;

use App\Entity\Gcv2Contents;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Gcv2Contents|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gcv2Contents|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gcv2Contents[]    findAll()
 * @method Gcv2Contents[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Gcv2ContentsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Gcv2Contents::class);
    }

//    /**
//     * @return Gcv2Contents[] Returns an array of Gcv2Contents objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Gcv2Contents
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
