# # ItemPartialRefundPositionReceiptsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**partialRefundDetails** | [**\OpenAPI\Client\Otto\Model\PartialRefundDetailsReceiptsV3**](PartialRefundDetailsReceiptsV3.md) |  | [optional]
**lineNumber** | **int** | Number of line item in which the information is printed on the pdf document of the receipt. &lt;/br&gt;This information is not reliably provided for older receipts | [optional]
**sku** | **string** | Stock keeping unit of  item. Unique item identifier on partner side | [optional]
**articleNumber** | **string** | Unique Identifier of item the customer knows from order process |
**productTitle** | **string** | Product description of item the customer knows from the order process |
**variationAttributes** | **string** | Additional attributes for unique description of  item, if different variants of the item are possible. (String of comma seperated dimensions)  ATTENTION: In previous version, the information exists as dimensions | [optional]
**positionItemIds** | **string[]** | List of unique identifiers of specific instances of ordered items. &lt;/br&gt;A (salesOrder)PositionItem is the smallest unit of an item that can be ordered |
**partialRefundAmount** | [**\OpenAPI\Client\Otto\Model\PriceReceiptsV3**](PriceReceiptsV3.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
