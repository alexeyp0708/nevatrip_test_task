***

# BarcodeGenerator





* Full name: `\App\Model\BarcodeGenerator`
* This class implements:
[`\App\Model\BarcodeGeneratorInterface`](./BarcodeGeneratorInterface.md)




## Methods


### generateCode

Barcode generation method

```php
public generateCode(int|string $salt): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$salt` | **int&#124;string** | Data on the basis of which the barcode will be generated. |


**Return Value:**

Generated barcode




***

### convertHexSymbolsToNumber



```php
private convertHexSymbolsToNumber(string $hex): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hex` | **string** |  |





***


***
> Automatically generated on 2024-11-04
