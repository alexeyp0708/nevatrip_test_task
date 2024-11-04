***

# ApprovalOrdersRepository





* Full name: `\App\Repository\ApprovalOrdersRepository`
* This class implements:
[`\App\Repository\ApprovalOrdersRepositoryInterface`](./ApprovalOrdersRepositoryInterface.md)



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

### requestApprovalOrder

Makes a request to a third party service and requests order approval
Requests order confirmation

```php
public requestApprovalOrder(string $barcode): \App\EntryLocal\ServiceResponse|\App\EntryLocal\ServiceResponseError
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$barcode` | **string** |  |





***


***
> Automatically generated on 2024-11-04
