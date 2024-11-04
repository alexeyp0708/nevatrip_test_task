<?php

namespace App\Repository;


use  App\Entity\TicketOrderInterface;

/**
 * The repository is responsible for managing ticket order data.
 */
interface TicketOrderRepositoryInterface
{
    /**
     * Add Ticket Order in DB
     * @param \App\Entity\TicketOrderInterface $order
     */
    public function saveOrder(TicketOrderInterface $order): void;

    /**
     * Checks the presence of an order using a barcode
     * 
     * @param string $barcode
     * @return bool
     */
    public function hasOrderByBarcode(string $barcode): bool;
}

