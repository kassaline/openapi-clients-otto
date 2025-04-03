# # ServicePartialRefundPositionReceiptsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lineNumber** | **int** | Number of line item in which the information is printed on the pdf document of the receipt. &lt;/br&gt;This information is not reliably provided for older receipts | [optional]
**serviceType** | **string** | Categorization that classifies services according to their main characteristics. Services of the same type are often treated in the same way. Currently, the processing of the following types are possible: * **DISPOSAL** - Free take away of old technical devices required by law * **INSURANCE** - Product insurance | [optional]
**serviceName** | **string** | Service name of a special specification of a service type that the customer has seen in the ordering process. | [optional]
**servicePositionItemIds** | **string[]** | List of unique identifiers of specific instances of services. A servicePositionItem is the smallest unit of a service that can be ordered. If quantity of this object is bigger than one the list contains more than one entry. | [optional]
**partialRefundAmount** | [**\OpenAPI\Client\Otto\Model\PriceReceiptsV3**](PriceReceiptsV3.md) |  | [optional]
**insurancePeriod** | **int** | Services of serviceType WARRANTY or INSURANCE could be offered with different durations. This field will show the duration as month. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
