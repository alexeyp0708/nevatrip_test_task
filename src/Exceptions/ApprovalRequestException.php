<?php

namespace App\Exceptions;

/**
 * Exception if errors are returned when requesting approval for a ticket order
 */
class ApprovalRequestException extends \Exception implements ApprovalRequestExceptionInterface
{

}