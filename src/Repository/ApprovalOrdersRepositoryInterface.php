<?php

namespace App\Repository;

use App\EntryLocal\ServiceResponse;
use App\EntryLocal\ServiceResponseError;

/**
 * Repository for connecting to the approval service
 */
interface ApprovalOrdersRepositoryInterface
{
    /**
     * Makes a request to a third party service and requests order approval
     * Requests order confirmation
     * @param string $barcode
     * @return \App\EntryLocal\ServiceResponse|\App\EntryLocal\ServiceResponseError
     */
    public function requestApprovalOrder(string $barcode): ServiceResponse|ServiceResponseError;
}