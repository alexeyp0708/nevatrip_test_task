<?php

namespace App\Model;

use App\Entity\TicketOrderInterface;

interface TicketOrderModelInterface
{
    public function addOrderAndBook(TicketOrderInterface $order): ?TicketOrderInterface;
}