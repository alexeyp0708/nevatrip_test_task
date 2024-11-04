***

# TicketOrderModel





* Full name: `\App\Model\TicketOrderModel`
* This class implements:
[`\App\Model\TicketOrderModelInterface`](./TicketOrderModelInterface.md)



## Properties


### barcodeGenerator



```php
private \App\Model\BarcodeGeneratorInterface $barcodeGenerator
```






***

### repo



```php
private \App\Repository\TicketOrderRepositoryInterface $repo
```






***

### repoBarcode



```php
private \App\Repository\BarcodeMemoryRepositoryInterface $repoBarcode
```






***

### repoReservation



```php
private \App\Repository\ReservationOrderRepositoryInterface $repoReservation
```






***

### repoApprovalOrder



```php
private \App\Repository\ApprovalOrdersRepositoryInterface $repoApprovalOrder
```






***

## Methods


### __construct



```php
public __construct(\App\Model\BarcodeGeneratorInterface $barcodeGenerator, \App\Repository\TicketOrderRepositoryInterface $repo, \App\Repository\BarcodeMemoryRepositoryInterface $repoBarcode, \App\Repository\ReservationOrderRepositoryInterface $repoReservation, \App\Repository\ApprovalOrdersRepositoryInterface $repoApprovalOrder): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$barcodeGenerator` | **\App\Model\BarcodeGeneratorInterface** |  |
| `$repo` | **\App\Repository\TicketOrderRepositoryInterface** |  |
| `$repoBarcode` | **\App\Repository\BarcodeMemoryRepositoryInterface** |  |
| `$repoReservation` | **\App\Repository\ReservationOrderRepositoryInterface** |  |
| `$repoApprovalOrder` | **\App\Repository\ApprovalOrdersRepositoryInterface** |  |





***

### addOrderAndBook

Adds a new order and books tickets

```php
public addOrderAndBook(\App\Entity\TicketOrderInterface $order): \App\Entity\TicketOrderInterface|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$order` | **\App\Entity\TicketOrderInterface** |  |





***

### initOrderReservation



```php
private initOrderReservation(\App\Entity\TicketOrderInterface $order): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$order` | **\App\Entity\TicketOrderInterface** |  |





***

### initOrder



```php
private initOrder(\App\Entity\TicketOrderInterface $order): ?\App\Entity\TicketOrderInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$order` | **\App\Entity\TicketOrderInterface** |  |





***

### generateBarcode



```php
private generateBarcode(\App\Entity\TicketOrder $order, string $space = &#039;&#039;): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$order` | **\App\Entity\TicketOrder** |  |
| `$space` | **string** |  |





***

### generateSalt



```php
private generateSalt(\App\Entity\TicketOrderInterface $order, string $space = &#039;&#039;): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$order` | **\App\Entity\TicketOrderInterface** |  |
| `$space` | **string** |  |





***

### checkBarcode



```php
private checkBarcode(string $barcode): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$barcode` | **string** |  |





***

### saveBarcodeInMemory



```php
private saveBarcodeInMemory(string $barcode): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$barcode` | **string** |  |





***

### removeBarcodeInMemory



```php
private removeBarcodeInMemory(string $barcode): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$barcode` | **string** |  |





***

### reserveAnOrder



```php
private reserveAnOrder(\App\Entity\TicketOrderInterface $order): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$order` | **\App\Entity\TicketOrderInterface** |  |





***

### approveOrder



```php
private approveOrder(string $barcode): \App\EntryLocal\ServiceResponse|\App\EntryLocal\ServiceResponseError
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$barcode` | **string** |  |





***

### saveOrder



```php
private saveOrder(\App\Entity\TicketOrderInterface $order): ?\App\Entity\TicketOrderInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$order` | **\App\Entity\TicketOrderInterface** |  |





***


***
> Automatically generated on 2024-11-04
