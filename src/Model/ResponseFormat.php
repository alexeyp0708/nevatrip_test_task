<?php

namespace App\Model;

use App\EntryLocal\ServiceResponse;
use App\EntryLocal\ServiceResponseError;

/**
 * Defines the format of returned messages
 */
class ResponseFormat
{
    /**
     * Generates a suitable object based on the received message data
     * 
     * @param array $array
     * @return object|ServiceResponse|ServiceResponseError
     */
    public function convertArrayToObject(array $array): object
    {
        if (array_key_exists('message', $array)) return new ServiceResponse($array['message']);
        if (array_key_exists('error', $array)) return new ServiceResponseError($array['error']);
        return (object)$array;
    }
}