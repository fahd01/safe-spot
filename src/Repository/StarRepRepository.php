<?php

namespace App\Repository;

use App\Entity\StarRep;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<StarRep>
 *
 * @method StarRep|null find($id, $lockMode = null, $lockVersion = null)
 * @method StarRep|null findOneBy(array $criteria, array $orderBy = null)
 * @method StarRep[]    findAll()
 * @method StarRep[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StarRepRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StarRep::class);
    }

//    /**
//     * @return StarRep[] Returns an array of StarRep objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?StarRep
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
