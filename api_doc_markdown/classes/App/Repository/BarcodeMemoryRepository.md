***

# BarcodeMemoryRepository





* Full name: `\App\Repository\BarcodeMemoryRepository`
* Parent class: [`EntityRepository`](../../Doctrine/ORM/EntityRepository.md)
* This class implements:
[`\App\Repository\BarcodeMemoryRepositoryInterface`](./BarcodeMemoryRepositoryInterface.md)



## Properties


### entityManager



```php
private \Doctrine\ORM\EntityManagerInterface $entityManager
```






***

## Methods


### __construct



```php
public __construct(\Doctrine\ORM\EntityManagerInterface $entityManager): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$entityManager` | **\Doctrine\ORM\EntityManagerInterface** |  |





***

### hasBarcode

Checks whether a barcode is in memory (игааук)

```php
public hasBarcode(string|\App\Entity\BarcodeMemory $barcode): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$barcode` | **string&#124;\App\Entity\BarcodeMemory** |  |





***

### saveBarcode

Saves the barcode to memory (buffer)

```php
public saveBarcode(string|\App\Entity\BarcodeMemory $barcode): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$barcode` | **string&#124;\App\Entity\BarcodeMemory** |  |





***

### removeBarcode

Deletes a barcode from memory (buffer)

```php
public removeBarcode(string|\App\Entity\BarcodeMemory $barcode): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$barcode` | **string&#124;\App\Entity\BarcodeMemory** |  |





***

### getEntity



```php
private getEntity(string|\App\Entity\BarcodeMemory $barcode): \App\Entity\BarcodeMemory
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$barcode` | **string&#124;\App\Entity\BarcodeMemory** |  |





***


***
> Automatically generated on 2024-11-04
