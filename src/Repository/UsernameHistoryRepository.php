<?php

namespace App\Repository;

use App\Entity\UsernameHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UsernameHistory>
 *
 * @method UsernameHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsernameHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsernameHistory[]    findAll()
 * @method UsernameHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsernameHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UsernameHistory::class);
    }

//    /**
//     * @return UsernameHistory[] Returns an array of UsernameHistory objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?UsernameHistory
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
