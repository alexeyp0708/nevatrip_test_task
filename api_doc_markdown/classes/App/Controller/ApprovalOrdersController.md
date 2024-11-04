***

# ApprovalOrdersController

Controller  as stub route for order approval.



* Full name: `\App\Controller\ApprovalOrdersController`
* Parent class: [`AbstractController`](../../Symfony/Bundle/FrameworkBundle/Controller/AbstractController.md)




## Methods


### approve

Request Stub GET : /approve

```php
public approve(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
```

- Route: `GET  /approve`
- Query parameters: `barcode`
- Answer randomly:
200 `{"message" : "order successfully approved"}`
403 `{"error" : "event cancelled"}`
403 `{"error" : "no tickets"}`
403 `{"error" : "no seats"}`
403 `{"error" : "fan removed"}`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Symfony\Component\HttpFoundation\Request** |  |





***


## Inherited methods


### checkRequestKeys



```php
private checkRequestKeys(array $keys, array $checkKeys, bool $use_strict = true): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keys` | **array** |  |
| `$checkKeys` | **array** |  |
| `$use_strict` | **bool** |  |





***


***
> Automatically generated on 2024-11-04
