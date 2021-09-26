<?php

namespace App\Repository;

use App\Entity\Superheroes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Superheroes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Superheroes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Superheroes[]    findAll()
 * @method Superheroes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuperheroesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Superheroes::class);
    }

    // /**
    //  * @return Superheroes[] Returns an array of Superheroes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Superheroes
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
