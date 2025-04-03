# # ServicePositionReceiptsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lineNumber** | **int** | Number of line item in which the information is printed on the pdf document of the receipt. &lt;/br&gt;This information is not reliably provided for older receipts | [optional]
**serviceType** | **string** | Categorization that classifies services according to their main characteristics. Services of the same type are often treated in the same way. Currently, the processing of the following types are possible: * **DISPOSAL** - Free take away of old technical devices required by law * **INSURANCE** - Product insurance | [optional]
**expectedPerformancePeriod** | **string** | Vague performance date. &lt;/br&gt;As the exact date is not known when generating the receipt, this information gives an indication when the service is expected to be fulfilled | [optional]
**serviceName** | **string** | Service name  the customer knows from the order process |
**servicePositionItemIds** | **string[]** | List of unique identifiers of specific instances of services. &lt;/br&gt;A servicePositionItem is the smallest unit of a service that can be ordered. &lt;/br&gt;If quantity of this object is bigger than one, the list contains more than one entry |
**linkedItemDetails** | [**\OpenAPI\Client\Otto\Model\LinkedItemDetailsReceiptsV3**](LinkedItemDetailsReceiptsV3.md) |  | [optional]
**quantity** | **int** | Quantity |
**unitPrice** | [**\OpenAPI\Client\Otto\Model\PriceReceiptsV3**](PriceReceiptsV3.md) |  |
**positionSum** | [**\OpenAPI\Client\Otto\Model\PriceReceiptsV3**](PriceReceiptsV3.md) |  |
**priceModifications** | [**\OpenAPI\Client\Otto\Model\PriceModificationReceiptsV3[]**](PriceModificationReceiptsV3.md) | List of additional fees and reductions represented as price modifications. &lt;/br&gt;Currently we only know reductions. &lt;/br&gt;If there are no entries the list is displayed as empty |
**insurancePeriod** | **int** | Services of serviceType WARRANTY or INSURANCE could be offered with different durations. This field will show the duration as month. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
