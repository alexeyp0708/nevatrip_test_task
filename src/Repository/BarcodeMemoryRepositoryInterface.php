<?php

namespace App\Repository;

use App\Entity\BarcodeMemory;

/**
 * Intended as a buffer for a barcode to determine between requests that a name is temporarily reserved.
 */
interface BarcodeMemoryRepositoryInterface
{
    /**
     * Checks whether a barcode is in memory (игааук)
     * 
     * @param string|\App\Entity\BarcodeMemory $barcode
     * @return bool
     */
    public function hasBarcode(string|BarcodeMemory $barcode): bool;

    /**
     * Saves the barcode to memory (buffer)
     * 
     * @param string|\App\Entity\BarcodeMemory $barcode
     * @return void
     */
    public function saveBarcode(string|BarcodeMemory $barcode): void;

    /**
     * Deletes a barcode from memory (buffer)
     * 
     * @param string|\App\Entity\BarcodeMemory $barcode
     * @return void
     */
    public function removeBarcode(string|BarcodeMemory $barcode): void;
}