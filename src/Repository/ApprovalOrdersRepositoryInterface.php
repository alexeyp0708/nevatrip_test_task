<?php

namespace App\Repository;

use App\Entity\ServiceResponse;
use App\Entity\ServiceResponseError;

/**
 * Makes a request to a third party service
 * Requests order approval
 */
interface ApprovalOrdersRepositoryInterface
{
    /**
     * Requests order confirmation
     * @param string $barcode
     * @return \App\Entity\ServiceResponse|\App\Entity\ServiceResponseError
     */
    public function requestApprovalOrder(string $barcode):ServiceResponse|ServiceResponseError;
}