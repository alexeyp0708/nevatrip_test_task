<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

/**
 * Controller  as stub route for order approval.
 */
class ApprovalOrdersController extends AbstractController
{

    use ValidateRequestTrait;

    /**
     * Request Stub GET : /approve  
     * 
     * - Route: `GET  /approve`
     * - Query parameters: `barcode`
     * - Answer randomly:  
     * 200 `{"message" : "order successfully approved"}`
     * 403 `{"error" : "event cancelled"}`  
     * 403 `{"error" : "no tickets"}` 
     * 403 `{"error" : "no seats"}` 
     * 403 `{"error" : "fan removed"}`
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    #[Route('/approve', name: 'app_approval_orders')]
    public function approve(Request $request): Response
    {
        if (
            !$this->checkRequestKeys($request->query->keys(), [
                'barcode'
            ])
        ) {
            return new JsonResponse(['error' => 'Bad request!'], 400);
            //throw new BadRequestHttpException('Message',null,400);
        }
        $answers = [
            ['message' => 'order successfully approved'],
            ['error' => 'event cancelled'],
            ['error' => 'no tickets'],
            ['error' => 'no seats'],
            ['error' => 'fan removed']
        ];
        $random_number = mt_rand(0, 4);
        //return new JsonResponse($answers[0]);
        $code=array_key_exists('error',$answers[$random_number])?403:200;
        return new JsonResponse($answers[$random_number],$code);
    }
}