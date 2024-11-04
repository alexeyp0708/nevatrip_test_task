***

# ReservationOrderRepository





* Full name: `\App\Repository\ReservationOrderRepository`
* This class implements:
[`\App\Repository\ReservationOrderRepositoryInterface`](./ReservationOrderRepositoryInterface.md)



## Properties


### client



```php
private \Symfony\Contracts\HttpClient\HttpClientInterface $client
```






***

### config



```php
private \Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface $config
```






***

### responseFormat



```php
private \App\Model\ResponseFormat $responseFormat
```






***

## Methods


### __construct



```php
public __construct(\Symfony\Contracts\HttpClient\HttpClientInterface $client, \Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface $config, \App\Model\ResponseFormat $responseFormat): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **\Symfony\Contracts\HttpClient\HttpClientInterface** |  |
| `$config` | **\Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface** |  |
| `$responseFormat` | **\App\Model\ResponseFormat** |  |





***

### createReservation

Creates an order reservation

```php
public createReservation(\App\Entity\TicketOrder $order): \App\EntryLocal\ServiceResponse|\App\EntryLocal\ServiceResponseError
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$order` | **\App\Entity\TicketOrder** |  |





***


***
> Automatically generated on 2024-11-04
