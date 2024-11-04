***

# TicketOrderController

Manages the order for tickets



* Full name: `\App\Controller\TicketOrderController`
* Parent class: [`AbstractController`](../../Symfony/Bundle/FrameworkBundle/Controller/AbstractController.md)




## Methods


### new

Creates a new order for an event.

```php
public new(\Symfony\Component\HttpFoundation\Request $request, \App\Model\TicketOrderModelInterface $model): \Symfony\Component\HttpFoundation\Response
```

- Route : `POST : /order`
- Body : `event_id(int),event_date(datetime),ticket_adult_price(int),ticket_adult_quantity(int)
,ticket_kid_price(int),ticket_kid_quantity(int)`
- Answer :
200 `{"message" : "Success!"}`
400 `{"error" : "Bad request!"}`
403 `{"error" : "Order not created!"}`
403 `{"error" : "event cancelled"}`
403 `{"error" : "no tickets"}`
403 `{"error" : "no seats"}`
403 `{"error" : "fan removed"}`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\Symfony\Component\HttpFoundation\Request** |  |
| `$model` | **\App\Model\TicketOrderModelInterface** |  |




**Throws:**

- [`DateMalformedStringException`](../../DateMalformedStringException.md)



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
