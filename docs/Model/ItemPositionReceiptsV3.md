# # ItemPositionReceiptsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lineNumber** | **int** | Number of line item in which the information is printed on the pdf document. &lt;/br&gt;This information is not reliably provided for older receipts | [optional]
**sku** | **string** | Stock keeping unit of item. Unique item identifier on partner side. &lt;/br&gt;This information is not reliably provided for older receipts | [optional]
**expectedPerformancePeriod** | **string** | Vague performance date. As the exact date is not known when generating the receipt, this information gives an indication when the item will be shipped | [optional]
**articleNumber** | **string** | Unique Identifier of item the customer knows from order process.  ATTENTION: Different from the previous version, the field also contains the promotion. In last version the promotion was provided separately |
**productTitle** | **string** | Product description of item the customer knows from the order process |
**variationAttributes** | **string** | Additional attributes for unique description of an item, if different variants of the item are possible. (String of comma seperated dimensions)  ATTENTION: In previous version the information was called dimensions | [optional]
**positionItemIds** | **string[]** | List of unique identifiers of specific instances of ordered items. A (salesOrder)PositionItem is the smallest unit of an item that can be ordered. &lt;/br&gt;If quantity of the specific LineItem object is bigger than one the list contains more than one entry |
**quantity** | **int** | Quantity |
**unitPrice** | [**\OpenAPI\Client\Otto\Model\PriceReceiptsV3**](PriceReceiptsV3.md) |  |
**priceToPayPerPositionItems** | [**\OpenAPI\Client\Otto\Model\PriceToPayPerPositionItemReceiptsV3[]**](PriceToPayPerPositionItemReceiptsV3.md) | Price of each unit of the item i.e., price of each positionItemId.&lt;/br&gt;It will be available only for PURCHASE receipt | [optional]
**positionSum** | [**\OpenAPI\Client\Otto\Model\PriceReceiptsV3**](PriceReceiptsV3.md) |  |
**priceModifications** | [**\OpenAPI\Client\Otto\Model\PriceModificationReceiptsV3[]**](PriceModificationReceiptsV3.md) | List of additional fees and reductions represented as price modifications. &lt;/br&gt;Currently we only know reductions. &lt;/br&gt;If there are no entries the list is displayed as empty |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
