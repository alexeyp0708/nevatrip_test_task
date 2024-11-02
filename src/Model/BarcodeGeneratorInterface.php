<?php

namespace App\Model;

interface BarcodeGeneratorInterface
{
    public  function generateCode(string|int $salt):string;
}