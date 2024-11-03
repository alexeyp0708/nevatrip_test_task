<?php

namespace App\Controller;

trait ValidateRequest
{
    private function checkRequestKeys(array $keys, array $checkKeys, bool $use_strict = true): bool
    {
        if ($use_strict && count($keys) !== count($checkKeys)) {
            return false;
        }
        foreach ($checkKeys as $value) {
            if (!in_array($value, $keys)) {
                return false;
            }
        }
        return true;
    }
}