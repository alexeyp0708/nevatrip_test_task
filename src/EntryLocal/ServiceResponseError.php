<?php

namespace App\EntryLocal;

/**
 * Error response properties class
 */
class ServiceResponseError
{
    public function __construct(public string $error)
    {

    }
}