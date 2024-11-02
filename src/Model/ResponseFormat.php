<?php

namespace App\Model;

use App\Entity\ServiceResponse;
use App\Entity\ServiceResponseError;

class ResponseFormat
{
    public function convertArrayToObject(array $array) : object
    {
        if (array_key_exists('message', $array)) return new ServiceResponse($array['message']);
        if (array_key_exists('error', $array)) return new ServiceResponseError($array['error']);
        return (object)$array;
    }
}