<?php

namespace App\Repository;

use App\Entity\AutomationRule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AutomationRule>
 *
 * @method AutomationRule|null find($id, $lockMode = null, $lockVersion = null)
 * @method AutomationRule|null findOneBy(array $criteria, array $orderBy = null)
 * @method AutomationRule[]    findAll()
 * @method AutomationRule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AutomationRuleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AutomationRule::class);
    }

//    /**
//     * @return AutomationRule[] Returns an array of AutomationRule objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?AutomationRule
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
