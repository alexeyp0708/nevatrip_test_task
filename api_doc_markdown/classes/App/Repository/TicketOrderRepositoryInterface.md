***

# TicketOrderRepositoryInterface

The repository is responsible for managing ticket order data.



* Full name: `\App\Repository\TicketOrderRepositoryInterface`



## Methods


### saveOrder

Add Ticket Order in DB

```php
public saveOrder(\App\Entity\TicketOrderInterface $order): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$order` | **\App\Entity\TicketOrderInterface** |  |





***

### hasOrderByBarcode

Checks the presence of an order using a barcode

```php
public hasOrderByBarcode(string $barcode): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$barcode` | **string** |  |





***


***
> Automatically generated on 2024-11-04
