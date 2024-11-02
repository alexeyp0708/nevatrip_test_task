<?php

namespace App\Repository;

use App\Entity\ServiceResponse;
use App\Entity\ServiceResponseError;
use App\Model\ResponseFormat;
use App\Repository\ApprovalOrdersRepositoryInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ApprovalOrdersRepository implements ApprovalOrdersRepositoryInterface
{

    public function __construct(
        readonly private HttpClientInterface $client,
        readonly private ContainerBagInterface $config,
        readonly private ResponseFormat $responseFormat
    )
    {

    }
    /**
     * @inheritDoc
     */
    public function requestApprovalOrder(string $barcode): ServiceResponse|ServiceResponseError
    {
        $uri=$this->config->get('app.route_approval_request');

        $response=$this->client->request(
            'GET',
            $uri, [
                'query'=>[
                    'barcode' =>$barcode,
                ]
            ]
        );
        $data = $response->toArray();
        return $this->responseFormat->convertArrayToObject($data);
    }
}