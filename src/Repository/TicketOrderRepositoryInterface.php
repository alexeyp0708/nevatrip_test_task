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
    public function saveOrder(TicketOrderInterface $order): void;

    public function hasOrderByBarcode(string $barcode): bool;
}

