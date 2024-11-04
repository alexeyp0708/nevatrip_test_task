<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Routing\Attribute\Route;

/**
 * Controller  as stub route for order reservation.
 */
class ReservationOrderController extends AbstractController
{

    use ValidateRequestTrait;

    /**
     * Request Stub GET : /book
     * 
     * - Route: `POST  /book`
     * - Body:  `event_id(int),event_date(datetime),ticket_adult_price(int),ticket_adult_quantity(int),
     * ticket_kid_price(int),ticket_kid_price(int),ticket_kid_quantity(int),barcode(string)`
     * - Answer randomly:
     * `{ "message" : "order successfully booked"}`
     * `{ "error" : "barcode already exists"}`
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[Route('/book', name: 'app_reservation_order', methods: ['POST'])]
    public function new(Request $request): Response
    {
        if (
            !$this->checkRequestKeys($request->request->keys(), [
                'event_id',
                'event_date',
                'ticket_adult_price',
                'ticket_adult_quantity',
                'ticket_kid_price',
                'ticket_kid_quantity',
                'barcode'
            ])
        ) {
            return new JsonResponse(['error' => 'Bad request!'], 400);
            //throw new BadRequestHttpException('Message',null,400);
        }
        $answers = [
            ['message' => 'order successfully booked'],
            ['error' => 'barcode already exists']
        ];
        $random_number = mt_rand(0, 1);
        //return new JsonResponse($answers[0]);
        $code=array_key_exists('error',$answers[$random_number])?403:200;
        return new JsonResponse($answers[$random_number]);
    }
}
