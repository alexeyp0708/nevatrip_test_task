<?php

namespace App\Model;

use App\Model\BarcodeGeneratorInterface;

/**
 * @inheritDoc
 */
class BarcodeGenerator implements BarcodeGeneratorInterface
{

    /**
     * @inheritDoc
     */
    public function generateCode(int|string $salt): string
    {
        $hash = hash("sha1", $salt);
        return $this->convertHexSymbolsToNumber($hash);
    }

    private function convertHexSymbolsToNumber(string $hex): string
    {
        $answer = '';
        $symbols = [
            '0' => '00',
            '1' => '01',
            '2' => '02',
            '3' => '03',
            '4' => '04',
            '5' => '05',
            '6' => '06',
            '7' => '07',
            '8' => '08',
            '9' => '09',
            'A' => '10',
            'B' => '11',
            'C' => '12',
            'D' => '13',
            'E' => '14',
            'F' => '15'
        ];
        foreach (str_split($hex) as $value) {
            $answer .= $symbols[mb_strtoupper($value)];
        }
        return $answer;
    }
}