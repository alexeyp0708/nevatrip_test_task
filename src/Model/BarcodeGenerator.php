<?php

namespace App\Model;

use App\Model\BarcodeGeneratorInterface;

class BarcodeGenerator implements BarcodeGeneratorInterface
{

    public function generateCode(int|string $salt): string
    {
        // TODO: Implement generateCode() method.
        $hash=hash("sha256",$salt);
        return (string)hexdec($hash);
    }
}