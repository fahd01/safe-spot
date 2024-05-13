<?php

namespace App\Repository;

use App\Entity\Likenews;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Actualite;

/**
 * @extends ServiceEntityRepository<Likenews>
 *
 * @method Likenews|null find($id, $lockMode = null, $lockVersion = null)
 * @method Likenews|null findOneBy(array $criteria, array $orderBy = null)
 * @method Likenews[]    findAll()
 * @method Likenews[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LikenewsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Likenews::class);
    }
    public function countLikesForActualite(Actualite $actualite): int
    {
        return $this->createQueryBuilder('l')
            ->select('COUNT(l.id)')
            ->andWhere('l.new = :actualite')
            ->setParameter('actualite', $actualite)
            ->getQuery()
            ->getSingleScalarResult();
    }

//    /**
//     * @return Likenews[] Returns an array of Likenews objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Likenews
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
