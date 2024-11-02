<?php

namespace App\Repository;

use App\Entity\BarcodeMemory;

interface BarcodeMemoryRepositoryInterface
{
    public function hasBarcode(string|BarcodeMemory  $barcode): bool;

    public function saveBarcode(string|BarcodeMemory $barcode): void;

    public function removeBarcode(string|BarcodeMemory  $barcode): void;
}