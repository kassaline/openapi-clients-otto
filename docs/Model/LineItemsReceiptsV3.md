# # LineItemsReceiptsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**itemPositions** | [**\OpenAPI\Client\Otto\Model\ItemPositionReceiptsV3[]**](ItemPositionReceiptsV3.md) | List of billed items, if exists. &lt;/br&gt;This list is only used in context of receiptType PURCHASE or REFUND. &lt;/br&gt;If there are no entries the lists is displayed as empty |
**itemPartialRefundPositions** | [**\OpenAPI\Client\Otto\Model\ItemPartialRefundPositionReceiptsV3[]**](ItemPartialRefundPositionReceiptsV3.md) | List of billed partial refunds of items. &lt;/br&gt;This list is only used in context of receiptType PARTIAL_REFUND. &lt;/br&gt;If there are no entries the lists is displayed as empty |
**servicePositions** | [**\OpenAPI\Client\Otto\Model\ServicePositionReceiptsV3[]**](ServicePositionReceiptsV3.md) | List of billed B2C services, if exists for this receipt. &lt;/br&gt;This list is only used in context of receiptType PURCHASE or REFUND. &lt;/br&gt;If there are no entries the lists is displayed as empty |
**servicePartialRefundPositions** | **object[]** | This information is currently not available, will be an empty array. |
**deliveryCosts** | [**\OpenAPI\Client\Otto\Model\DeliveryCostReceiptsV3[]**](DeliveryCostReceiptsV3.md) | List of billed logistic costs, if exists for this receipt. &lt;/br&gt;This list is only used in context of receiptType PURCHASE or REFUND. &lt;/br&gt;If there are no entries the lists is displayed as empty |
**deliveryFeePartialRefundPositions** | **object[]** | This information is currently not available, will be an empty array. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
