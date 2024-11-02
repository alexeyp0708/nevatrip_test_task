<?php

namespace App\Repository;

use App\Entity\ServiceResponse;
use App\Entity\ServiceResponseError;
use App\Entity\TicketOrder;

interface ReservationOrderRepositoryInterface
{
    /**
     * Creates an order reservation
     * @param \App\Entity\TicketOrder $order
     * @return \App\Entity\ServiceResponse|\App\Entity\ServiceResponseError
     */
    public function createReservation(TicketOrder $order): ServiceResponse|ServiceResponseError;
}