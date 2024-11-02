<?php

namespace App\Model;

use App\Entity\ServiceResponse;
use App\Entity\ServiceResponseError;
use App\Entity\TicketOrderInterface;
use App\Repository\ApprovalOrdersRepositoryInterface;
use App\Repository\ReservationOrderRepositoryInterface;
use App\Repository\StackTemporaryBarcodesRepository;
use App\Repository\TicketOrderRepositoryInterface;

class TicketOrderModel implements TicketOrderModelInterface
{
    public function __construct(
        private readonly BarcodeGeneratorInterface        $barcodeGenerator,
        private readonly TicketOrderRepositoryInterface   $repo,
        private readonly StackTemporaryBarcodesRepository $repoBarcode,
        private readonly ReservationOrderRepositoryInterface $repoReservation,
        private readonly ApprovalOrdersRepositoryInterface $repoApprovalOrder
    )
    {

    }

    /**
     * @throws \Exception
     */
    public function addOrderAndBook(TicketOrderInterface $order): ?TicketOrderInterface
    {
        $salt = $order->getEventId();
        do {
            do {
                $barcode = $this->generateBarcode($salt);
            } while ($this->checkBarcode($barcode));
            $order->setBarcode($barcode);
            $check_reserved = $this->reserveAnOrder($order);
        } while (!$check_reserved);
        $approvalResponse = $this->approveOrder($barcode);
        $savedOrder = null;
        if ($approvalResponse instanceof ServiceResponse) {
            $savedOrder = $this->addOrder($order);
        } else if ($approvalResponse instanceof ServiceResponseError) {
            // реализовать собственное исключение для перехвата.
            throw new \Exception ($approvalResponse->error);
        }
        return $savedOrder;
    }

    private function generateBarcode(string|int $salt): string
    {
        $this->barcodeGenerator->generateCode($salt);
    }

    private function checkBarcode(string $barcode): bool
    {
        $check = $this->repo->hasOrderByBarcode($barcode);
        if (!$check) {
            $check = $this->repoBarcode->hasTempBarcode($barcode);
        }
        return $check;
    }

    private function reserveAnOrder(TicketOrderInterface $order): bool
    {
        $answer=$this->repoReservation->createReservation($order);
        if($answer instanceof ServiceResponse){
            return true;
        }
        return false;
    }

    private function approveOrder(string $barcode): ServiceResponse|ServiceResponseError
    {
        return $this->repoApprovalOrder->requestApprovalOrder($barcode);
    }

    private function addOrder(TicketOrderInterface $order): ?TicketOrderInterface
    {
        return $this->repo->addOrder($order);
    }
}