<?php

namespace App\Repository;


use  App\Entity\TicketOrderInterface;

interface TicketOrderRepositoryInterface
{
    /**
     * Add Ticket Order in DB
     * @param \App\Entity\TicketOrderInterface $order
     * @return \App\Entity\TicketOrderInterface
     */
    public function addOrder(TicketOrderInterface $order): ?TicketOrderInterface;

    public function hasOrderByBarcode(string $barcode): bool;
}

