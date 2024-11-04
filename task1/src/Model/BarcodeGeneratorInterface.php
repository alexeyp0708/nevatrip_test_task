<?php

namespace App\Model;

/**
 * Generates a barcode
 */
interface BarcodeGeneratorInterface
{
    /**
     * Barcode generation method
     * 
     * @param string|int $salt  Data on the basis of which the barcode will be generated.
     * @return string Generated barcode
     */
    public function generateCode(string|int $salt): string;
}