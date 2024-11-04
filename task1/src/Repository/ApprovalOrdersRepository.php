<?php

namespace App\Repository;

use App\EntryLocal\ServiceResponse;
use App\EntryLocal\ServiceResponseError;
use App\Model\ResponseFormat;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/** 
 * @inheritDoc 
 */
class ApprovalOrdersRepository implements ApprovalOrdersRepositoryInterface
{

    public function __construct(
        readonly private HttpClientInterface   $client,
        readonly private ContainerBagInterface $config,
        readonly private ResponseFormat        $responseFormat
    )
    {

    }

    /**
     * @inheritDoc
     */
    public function requestApprovalOrder(string $barcode): ServiceResponse|ServiceResponseError
    {
        $uri = $this->config->get('app.route_approval_request');

        $response = $this->client->request(
            'GET',
            $uri, [
                'query' => [
                    'barcode' => $barcode,
                ]
            ]
        );
        $data = $response->toArray(false);
        return $this->responseFormat->convertArrayToObject($data);
    }
}