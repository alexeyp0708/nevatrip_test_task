<?php

namespace App\Controller;

/**
 * Validation helper methods
 */
trait ValidateRequestTrait
{
    /**
     * Checks the presence of the required parameters
     * @param array $keys
     * @param array $checkKeys
     * @param bool $use_strict
     * @return bool
     */
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