<?php

namespace App\Repository;

use App\Entity\BarcodeMemory;
use Doctrine\ORM\EntityManagerInterface;

class BarcodeMemoryRepository implements BarcodeMemoryRepositoryInterface
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager
    )
    {

    }

    public function hasBarcode(string|BarcodeMemory $barcode): bool
    {
        $barcode=$this->getEntity($barcode);
        $barcode=$this->entityManager->getRepository(BarcodeMemory::class)->findOneBy(['barcode'=>$barcode->getBarcode()]);
        return !is_null($barcode);
    }

    public function saveBarcode(string|BarcodeMemory $barcode): void
    {
        $barcode=$this->getEntity($barcode);
        $this->entityManager->persist($barcode);
        $this->entityManager->flush();
    }

    public function removeBarcode(string|BarcodeMemory $barcode): void
    {
        $barcode=$this->getEntity($barcode);
        $this->entityManager->remove($barcode);
        $this->entityManager->flush();
    }

    private function getEntity(string|BarcodeMemory $barcode): BarcodeMemory
    {
        $barcodeEntity = $barcode;
        if (is_string($barcode)) {
            $barcodeEntity = new BarcodeMemory();
            $barcodeEntity->setBarcode($barcode);
        }
        return $barcodeEntity;
    }
}