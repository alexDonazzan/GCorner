<?php

namespace App\Repository;

use App\Entity\Gcv2ContentsI18n;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Gcv2ContentsI18n|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gcv2ContentsI18n|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gcv2ContentsI18n[]    findAll()
 * @method Gcv2ContentsI18n[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Gcv2ContentsI18nRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Gcv2ContentsI18n::class);
    }

//    /**
//     * @return Gcv2ContentsI18n[] Returns an array of Gcv2ContentsI18n objects
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
    public function findOneBySomeField($value): ?Gcv2ContentsI18n
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
