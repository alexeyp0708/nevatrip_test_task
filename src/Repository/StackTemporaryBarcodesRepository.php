<?php

namespace App\Repository;

interface StackTemporaryBarcodesRepository
{
    public function hasTempBarcode(string $barcode):bool;
}