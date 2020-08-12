<?php

namespace App\Repository;

use App\Entity\Clientparticulier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Clientparticulier|null find($id, $lockMode = null, $lockVersion = null)
 * @method Clientparticulier|null findOneBy(array $criteria, array $orderBy = null)
 * @method Clientparticulier[]    findAll()
 * @method Clientparticulier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientparticulierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Clientparticulier::class);
    }

    // /**
    //  * @return Clientparticulier[] Returns an array of Clientparticulier objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Clientparticulier
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
