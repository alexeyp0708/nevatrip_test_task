<?php

namespace App\Repository;

use App\Entity\BarcodeMemory;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

/**
 * @inheritDoc
 */
class BarcodeMemoryRepository extends EntityRepository implements BarcodeMemoryRepositoryInterface
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager
    )
    {
        parent::__construct($entityManager, $entityManager->getClassMetadata(BarcodeMemory::class));
    }

    /**
     * @inheritDoc
     */
    public function hasBarcode(string|BarcodeMemory $barcode): bool
    {
        $barcode = $this->getEntity($barcode);
        $barcode = $this->entityManager->getRepository(BarcodeMemory::class)->findOneBy(['barcode' => $barcode->getBarcode()]);
        return !empty($barcode);
    }

    /**
     * @inheritDoc
     */
    public function saveBarcode(string|BarcodeMemory $barcode): void
    {
        $barcode = $this->getEntity($barcode);
        $this->entityManager->persist($barcode);
        $this->entityManager->flush();
    }

    /**
     * @inheritDoc
     */
    public function removeBarcode(string|BarcodeMemory $barcode): void
    {
        $barcode = $this->getEntity($barcode);
        $barcode = $this->entityManager->getRepository(BarcodeMemory::class)->findOneBy(['barcode' => $barcode->getBarcode()]);
        if (!empty($barcode)) {
            $this->entityManager->remove($barcode);
            $this->entityManager->flush();
        }
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