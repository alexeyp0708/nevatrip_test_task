<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ApprovalOrdersController extends AbstractController
{

    use ValidateRequest;
    
    #[Route('/approve', name: 'app_approval_orders')]
    public function approve(Request $request): Response
    {
        if (
            !$this->checkRequestKeys($request->query->keys(), [
                'barcode'
            ])
        ) {
            return new JsonResponse(['error'=>'Bad request!'],400);
            //throw new BadRequestHttpException('Message',null,400);
        }
        $answers=[
            ['message' => 'order successfully approved'],
            ['error' => 'event cancelled'],
            ['error' => 'no tickets'],
            ['error'=>'no seats'],
            ['error'=>'fan removed']
        ];
        $random_number=mt_rand(0,4);
        //return new JsonResponse($answers[0]);
        return new JsonResponse($answers[$random_number]);
    }
}