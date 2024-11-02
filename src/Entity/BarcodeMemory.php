<?php

namespace App\Entity;

use App\Repository\BarcodeMemoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BarcodeMemoryRepository::class)]
class BarcodeMemory
{
    
    #[ORM\Column(length: 120)]
    private ?string $barcode = null;
    
    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    public function setBarcode(string $barcode): static
    {
        $this->barcode = $barcode;

        return $this;
    }
}
