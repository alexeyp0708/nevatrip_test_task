<?php

namespace App\Model;

use App\Entity\TicketOrderInterface;

/**
 * Business logic for ticket order data.
 */
interface TicketOrderModelInterface
{
    /**
     * Adds a new order and books tickets
     * 
     * @param \App\Entity\TicketOrderInterface $order
     * @return \App\Entity\TicketOrderInterface|null
     * @throws \App\Exceptions\ApprovalRequestExceptionInterface
     */
    public function addOrderAndBook(TicketOrderInterface $order): ?TicketOrderInterface;
}