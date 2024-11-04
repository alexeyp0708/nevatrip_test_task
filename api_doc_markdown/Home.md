
***

# Documentation



This is an automatically generated documentation for **Documentation**.


## Namespaces


### \App

#### Classes

| Class | Description |
|-------|-------------|
| [`Kernel`](./classes/App/Kernel.md) | |




### \App\Controller

#### Classes

| Class | Description |
|-------|-------------|
| [`ApprovalOrdersController`](./classes/App/Controller/ApprovalOrdersController.md) | Controller  as stub route for order approval.|
| [`ReservationOrderController`](./classes/App/Controller/ReservationOrderController.md) | Controller  as stub route for order reservation.|
| [`TicketOrderController`](./classes/App/Controller/TicketOrderController.md) | Manages the order for tickets|


#### Traits

| Trait | Description |
|-------|-------------|
| [`ValidateRequestTrait`](./classes/App/Controller/ValidateRequestTrait.md) | Validation helper methods|




### \App\Entity

#### Classes

| Class | Description |
|-------|-------------|
| [`BarcodeMemory`](./classes/App/Entity/BarcodeMemory.md) | The entity of the barcodes buffer|
| [`TicketOrder`](./classes/App/Entity/TicketOrder.md) | |



#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`TicketOrderInterface`](./classes/App/Entity/TicketOrderInterface.md) | The entity of the ticket  orders  stack|



### \App\EntryLocal

#### Classes

| Class | Description |
|-------|-------------|
| [`ServiceResponse`](./classes/App/EntryLocal/ServiceResponse.md) | Successful response properties class|
| [`ServiceResponseError`](./classes/App/EntryLocal/ServiceResponseError.md) | Error response properties class|




### \App\Exceptions

#### Classes

| Class | Description |
|-------|-------------|
| [`ApprovalRequestException`](./classes/App/Exceptions/ApprovalRequestException.md) | Exception if errors are returned when requesting approval for a ticket order|



#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ApprovalRequestExceptionInterface`](./classes/App/Exceptions/ApprovalRequestExceptionInterface.md) | |



### \App\Model

#### Classes

| Class | Description |
|-------|-------------|
| [`BarcodeGenerator`](./classes/App/Model/BarcodeGenerator.md) | |
| [`ResponseFormat`](./classes/App/Model/ResponseFormat.md) | Defines the format of returned messages|
| [`TicketOrderModel`](./classes/App/Model/TicketOrderModel.md) | |



#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`BarcodeGeneratorInterface`](./classes/App/Model/BarcodeGeneratorInterface.md) | Generates a barcode|
| [`TicketOrderModelInterface`](./classes/App/Model/TicketOrderModelInterface.md) | Business logic for ticket order data.|



### \App\Repository

#### Classes

| Class | Description |
|-------|-------------|
| [`ApprovalOrdersRepository`](./classes/App/Repository/ApprovalOrdersRepository.md) | |
| [`BarcodeMemoryRepository`](./classes/App/Repository/BarcodeMemoryRepository.md) | |
| [`ReservationOrderRepository`](./classes/App/Repository/ReservationOrderRepository.md) | |
| [`TicketOrderRepository`](./classes/App/Repository/TicketOrderRepository.md) | |



#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`ApprovalOrdersRepositoryInterface`](./classes/App/Repository/ApprovalOrdersRepositoryInterface.md) | Repository for connecting to the approval service|
| [`BarcodeMemoryRepositoryInterface`](./classes/App/Repository/BarcodeMemoryRepositoryInterface.md) | Intended as a buffer for a barcode to determine between requests that a name is temporarily reserved.|
| [`ReservationOrderRepositoryInterface`](./classes/App/Repository/ReservationOrderRepositoryInterface.md) | Repository for connecting to the reservation service|
| [`TicketOrderRepositoryInterface`](./classes/App/Repository/TicketOrderRepositoryInterface.md) | The repository is responsible for managing ticket order data.|



***
> Automatically generated on 2024-11-04
