***

# TicketOrderRepository





* Full name: `\App\Repository\TicketOrderRepository`
* Parent class: [`ServiceEntityRepository`](../../Doctrine/Bundle/DoctrineBundle/Repository/ServiceEntityRepository.md)
* This class implements:
[`\App\Repository\TicketOrderRepositoryInterface`](./TicketOrderRepositoryInterface.md)



## Properties


### entityManager



```php
private \Doctrine\ORM\EntityManagerInterface $entityManager
```






***

## Methods


### __construct



```php
public __construct(\Doctrine\Persistence\ManagerRegistry $registry, \Doctrine\ORM\EntityManagerInterface $entityManager): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$registry` | **\Doctrine\Persistence\ManagerRegistry** |  |
| `$entityManager` | **\Doctrine\ORM\EntityManagerInterface** |  |





***

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
