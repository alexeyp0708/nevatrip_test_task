***

# TicketOrder





* Full name: `\App\Entity\TicketOrder`
* This class implements:
[`\App\Entity\TicketOrderInterface`](./TicketOrderInterface.md)



## Properties


### id



```php
private ?int $id
```






***

### event_id



```php
private ?int $event_id
```






***

### event_date



```php
private ?\DateTimeInterface $event_date
```






***

### ticket_adult_price



```php
private ?int $ticket_adult_price
```






***

### ticket_adult_quantity



```php
private ?int $ticket_adult_quantity
```






***

### ticket_kid_price



```php
private ?int $ticket_kid_price
```






***

### ticket_kid_quantity



```php
private ?int $ticket_kid_quantity
```






***

### barcode



```php
private ?string $barcode
```






***

### equal_price



```php
private ?int $equal_price
```






***

### created



```php
private ?\DateTimeInterface $created
```






***

## Methods


### getId



```php
public getId(): ?int
```












***

### getEventId



```php
public getEventId(): ?int
```












***

### setEventId



```php
public setEventId(int $event_id): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event_id` | **int** |  |





***

### getEventDate



```php
public getEventDate(): ?\DateTimeInterface
```












***

### setEventDate



```php
public setEventDate(\DateTimeInterface $event_date): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event_date` | **\DateTimeInterface** |  |





***

### getTicketAdultPrice



```php
public getTicketAdultPrice(): ?int
```












***

### setTicketAdultPrice



```php
public setTicketAdultPrice(int $ticket_adult_price): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ticket_adult_price` | **int** |  |





***

### getTicketAdultQuantity



```php
public getTicketAdultQuantity(): ?int
```












***

### setTicketAdultQuantity



```php
public setTicketAdultQuantity(int $ticket_adult_quantity): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ticket_adult_quantity` | **int** |  |





***

### getTicketKidPrice



```php
public getTicketKidPrice(): ?int
```












***

### setTicketKidPrice



```php
public setTicketKidPrice(int $ticket_kid_price): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ticket_kid_price` | **int** |  |





***

### getTicketKidQuantity



```php
public getTicketKidQuantity(): ?int
```












***

### setTicketKidQuantity



```php
public setTicketKidQuantity(int $ticket_kid_quantity): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ticket_kid_quantity` | **int** |  |





***

### getBarcode



```php
public getBarcode(): ?string
```












***

### setBarcode



```php
public setBarcode(string $barcode): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$barcode` | **string** |  |





***

### getEqualPrice



```php
public getEqualPrice(): ?int
```












***

### setEqualPrice



```php
public setEqualPrice(int $equal_price): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$equal_price` | **int** |  |





***

### getCreated



```php
public getCreated(): ?\DateTimeInterface
```












***

### setCreated



```php
public setCreated(\DateTimeInterface $created): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$created` | **\DateTimeInterface** |  |





***


***
> Automatically generated on 2024-11-04
