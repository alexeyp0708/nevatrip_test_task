<?php

namespace App\Repository;

use App\Entity\TicketOrder;
use App\EntryLocal\ServiceResponse;
use App\EntryLocal\ServiceResponseError;
use App\Model\ResponseFormat;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * @inheritDoc
 */
class ReservationOrderRepository implements ReservationOrderRepositoryInterface
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
    public function createReservation(TicketOrder $order): ServiceResponse|ServiceResponseError
    {
        $uri = $this->config->get('app.route_create_reservation');
        $response = $this->client->request(
            'POST',
            $uri, [
                'body' => [
                    'event_id' => $order->getEventId(),
                    'event_date' => $order->getEventDate()->getTimestamp(),
                    'ticket_adult_price' => $order->getTicketAdultPrice(),
                    'ticket_adult_quantity' => $order->getTicketAdultPrice(),
                    'ticket_kid_price' => $order->getTicketKidPrice(),
                    'ticket_kid_quantity' => $order->getTicketKidQuantity(),
                    'barcode' => $order->getBarcode()
                ]
            ]
        );
        $data = $response->toArray(false);

        return $this->responseFormat->convertArrayToObject($data);
    }
}