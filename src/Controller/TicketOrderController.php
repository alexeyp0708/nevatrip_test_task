<?php

namespace App\Controller;

use App\Entity\TicketOrder;
use App\Exceptions\ApprovalRequestException;
use App\Model\TicketOrderModelInterface;
use App\Repository\TicketOrderRepositoryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TicketOrderController extends AbstractController
{

    use ValidateRequest;
    

    #[Route('/order', name: 'app_ticket_order', methods: ['POST'])]
    public function new(
        Request $request,
        TicketOrderModelInterface $model
    ): Response
    {
        if (
            !$this->checkRequestKeys($request->request->keys(), [
                'event_id',
                'event_date',
                'ticket_adult_price',
                'ticket_adult_quantity',
                'ticket_kid_price',
                'ticket_kid_quantity'
            ])
        ) {
            return new JsonResponse(['error'=>'Bad request!'],400);
            //throw new BadRequestHttpException('Message',null,400);
        }
        $data=(object)$request->request->all();
        $order=new TicketOrder();
        $order->setEventId($data->event_id);
        $order->setEventDate(new \DateTime($data->event_date));
        $order->setTicketAdultPrice($data->ticket_adult_price);
        $order->setTicketAdultQuantity($data->ticket_adult_quantity);
        $order->setTicketKidPrice($data->ticket_kid_price);
        $order->setTicketKidQuantity($data->ticket_kid_quantity);
        try {
            $order=$model->addOrderAndBook($order);
        } catch (ApprovalRequestException $e){
            return new JsonResponse (['error'=>$e->getMessage()],403);
        }
        if ($order!==null) {
            return new JsonResponse (['message'=>'Success!']);
        }
        else {
            return new JsonResponse (['error'=>'Order not created!'],403);
        }
    }
}
