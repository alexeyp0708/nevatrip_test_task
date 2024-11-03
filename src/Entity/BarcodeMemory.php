<?php

namespace App\Entity;

use App\Repository\BarcodeMemoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BarcodeMemoryRepository::class)]
#[ORM\Table(options:["engine"=>"MEMORY"])]
class BarcodeMemory
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
    
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
