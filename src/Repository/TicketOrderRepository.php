<?php

namespace App\Repository;

use App\Entity\TicketOrder;
use App\Entity\TicketOrderInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TicketOrder>
 */
class TicketOrderRepository extends ServiceEntityRepository implements TicketOrderRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TicketOrder::class);
    }

    public function addOrder(TicketOrderInterface $order): ?TicketOrderInterface
    {
        // TODO: Implement addOrder() method.
    }
    
    public function hasOrderByBarcode(string $barcode): bool
    {
        // TODO: Implement getOrderByBarcode() method.
    }


    //    /**
    //     * @return TicketOrder[] Returns an array of TicketOrder objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('t.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?TicketOrder
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
