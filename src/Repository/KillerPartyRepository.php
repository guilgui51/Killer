<?php

namespace App\Repository;

use App\Entity\KillerParty;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KillerParty|null find($id, $lockMode = null, $lockVersion = null)
 * @method KillerParty|null findOneBy(array $criteria, array $orderBy = null)
 * @method KillerParty[]    findAll()
 * @method KillerParty[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KillerPartyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KillerParty::class);
    }

//    /**
//     * @return KillerParty[] Returns an array of KillerParty objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('k.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?KillerParty
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
