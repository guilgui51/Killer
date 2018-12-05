<?php

namespace App\Repository;

use App\Entity\Jeudesociete;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Jeudesociete|null find($id, $lockMode = null, $lockVersion = null)
 * @method Jeudesociete|null findOneBy(array $criteria, array $orderBy = null)
 * @method Jeudesociete[]    findAll()
 * @method Jeudesociete[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JeudesocieteRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Jeudesociete::class);
    }

//    /**
//     * @return Jeudesociete[] Returns an array of Jeudesociete objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Jeudesociete
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
