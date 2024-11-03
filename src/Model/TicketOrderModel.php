<?php

namespace App\Model;

use App\Entity\ServiceResponse;
use App\Entity\ServiceResponseError;
use App\Entity\TicketOrder;
use App\Entity\TicketOrderInterface;
use App\Exceptions\ApprovalRequestException;
use App\Repository\ApprovalOrdersRepositoryInterface;
use App\Repository\ReservationOrderRepositoryInterface;
use App\Repository\BarcodeMemoryRepositoryInterface;
use App\Repository\TicketOrderRepositoryInterface;
use Symfony\Component\HttpClient\Exception\ServerException;

class TicketOrderModel implements TicketOrderModelInterface
{
    public function __construct(
        private readonly BarcodeGeneratorInterface           $barcodeGenerator,
        private readonly TicketOrderRepositoryInterface      $repo,
        private readonly BarcodeMemoryRepositoryInterface    $repoBarcode,
        private readonly ReservationOrderRepositoryInterface $repoReservation,
        private readonly ApprovalOrdersRepositoryInterface   $repoApprovalOrder
    )
    {

    }

    /**
     * @throws ApprovalRequestException
     */
    public function addOrderAndBook(TicketOrderInterface $order): ?TicketOrderInterface
    {
        $this->initOrderReservation($order);
        return $this->initOrder($order);
    }
    
    private function initOrderReservation(TicketOrderInterface $order):void
    {
        do {
            do {
                $barcode = $this->generateBarcode($order,mt_rand(10000, 99999));
            } while ($this->checkBarcode($barcode));
            try {
                $order->setBarcode($barcode);
                $this->saveBarcodeInMemory($barcode);
                $check_reserved = $this->reserveAnOrder($order);
            } catch(\Throwable $e) {
                $this->removeBarcodeInMemory($barcode);
                throw $e;
            }
            if(!$check_reserved) $this->removeBarcodeInMemory($barcode);
        } while (!$check_reserved);        
    }

    private function initOrder(TicketOrderInterface $order):?TicketOrderInterface
    {
        $barcode=$order->getBarcode();
        try {
            $approvalResponse = $this->approveOrder($barcode);
        } catch (\Throwable $e) {
            $this->removeBarcodeInMemory($barcode);
            throw $e;
        }
        $savedOrder = null;
        if ($approvalResponse instanceof ServiceResponse) {
            try{
                $total=$order->getTicketKidPrice()*$order->getTicketKidQuantity()+
                    $order->getTicketAdultPrice()*$order->getTicketAdultQuantity();
                $order->setEqualPrice($total);
                $order->setCreated(new \DateTime());
                $savedOrder = $this->saveOrder($order);
            } finally {
                $this->removeBarcodeInMemory($barcode);
            }
        } else {
            $this->removeBarcodeInMemory($barcode);
            $error= 'No reservation.';
            if ($approvalResponse instanceof ServiceResponseError) {
                $error=$approvalResponse->error;
            }
            throw new ApprovalRequestException ($error);
        }
        return $savedOrder;
    }
    private function generateBarcode(TicketOrder $order,string $space=''): string
    {
        $salt=$this->generateSalt($order,$space);

        return $this->barcodeGenerator->generateCode($salt);
    }
    
    private function generateSalt(TicketOrderInterface $order,string $space=''):string
    {
        return $space.'_'.$order->getEventId().'_'.$order->getEventDate()->getTimestamp().'_'.microtime();
    }

    private function checkBarcode(string $barcode): bool
    {
        $check = $this->repo->hasOrderByBarcode($barcode);
        if (!$check) {
            $check = $this->repoBarcode->hasBarcode($barcode);
        }
        return $check;
    }
    
    private function saveBarcodeInMemory(string $barcode):void
    {
        $this->repoBarcode->saveBarcode($barcode);
    }

    private function removeBarcodeInMemory(string $barcode):void
    {
        $this->repoBarcode->removeBarcode($barcode);
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

    private function saveOrder(TicketOrderInterface $order): ?TicketOrderInterface
    {
        $this->repo->saveOrder($order);
        return $order->getId()!==null?$order:null;
    }
}