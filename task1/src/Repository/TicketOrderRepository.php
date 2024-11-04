<?php

namespace App\Repository;

use App\Entity\TicketOrder;
use App\Entity\TicketOrderInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @inheritDoc
 * @extends ServiceEntityRepository<TicketOrder>
 */
class TicketOrderRepository extends ServiceEntityRepository implements TicketOrderRepositoryInterface
{
    public function __construct(
        ManagerRegistry                         $registry,
        private readonly EntityManagerInterface $entityManager
    )
    {
        parent::__construct($registry, TicketOrder::class);
    }

    /**
     * @inheritDoc
     */
    public function saveOrder(TicketOrderInterface $order): void
    {
        $this->entityManager->persist($order);
        $this->entityManager->flush();
    }

    /**
     * @inheritDoc
     */
    public function hasOrderByBarcode(string $barcode): bool
    {
        // TODO: Implement getOrderByBarcode() method.
        $order = $this->entityManager->getRepository(TicketOrder::class)->findOneBy(['barcode' => $barcode]);
        return !is_null($order);
    }
}
