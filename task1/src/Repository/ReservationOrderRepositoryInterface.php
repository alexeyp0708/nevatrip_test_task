<?php

namespace App\Repository;

use App\Entity\TicketOrder;
use App\EntryLocal\ServiceResponse;
use App\EntryLocal\ServiceResponseError;

/**
 * Repository for connecting to the reservation service
 */
interface ReservationOrderRepositoryInterface
{
    /**
     * Creates an order reservation
     * @param \App\Entity\TicketOrder $order
     * @return \App\EntryLocal\ServiceResponse|\App\EntryLocal\ServiceResponseError
     */
    public function createReservation(TicketOrder $order): ServiceResponse|ServiceResponseError;
}