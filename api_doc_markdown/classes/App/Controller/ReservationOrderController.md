***

# ReservationOrderController

Controller  as stub route for order reservation.



* Full name: `\App\Controller\ReservationOrderController`
* Parent class: [`AbstractController`](../../Symfony/Bundle/FrameworkBundle/Controller/AbstractController.md)




## Methods


### new

Request Stub GET : /book

```php
public new(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
```

- Route: `POST  /book`
- Body:  `event_id(int),event_date(datetime),ticket_adult_price(int),ticket_adult_quantity(int),
ticket_kid_price(int),ticket_kid_price(int),ticket_kid_quantity(int),barcode(string)`
- Answer randomly:
`{ "message" : "order successfully booked"}`
`{ "error" : "barcode already exists"}`






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
