# # PositionItemOrdersV4

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cancellationDate** | **\DateTime** | Date the position item was cancelled | [optional]
**cancellationReason** | **string** | Reason why a position was cancelled | [optional]
**expectedDeliveryDate** | **\DateTime** | The date the position item should be delivered | [optional]
**fulfillmentStatus** | **string** | The fulfillment status of the position item |
**itemValueDiscount** | [**\OpenAPI\Client\Otto\Model\AmountOrdersV4**](AmountOrdersV4.md) |  | [optional]
**itemValueGrossPrice** | [**\OpenAPI\Client\Otto\Model\AmountOrdersV4**](AmountOrdersV4.md) |  |
**itemValueReducedGrossPrice** | [**\OpenAPI\Client\Otto\Model\AmountOrdersV4**](AmountOrdersV4.md) |  | [optional]
**positionItemId** | **string** | The unique id of the position item |
**processableDate** | **\DateTime** | Date the position item has reached PROCESSABLE fulfillment status | [optional]
**product** | [**\OpenAPI\Client\Otto\Model\ProductOrdersV4**](ProductOrdersV4.md) |  |
**returnedDate** | **\DateTime** | Date the position item was returned | [optional]
**sentDate** | **\DateTime** | Date the position item was sent | [optional]
**trackingInfo** | [**\OpenAPI\Client\Otto\Model\TrackingInfoOrdersV4**](TrackingInfoOrdersV4.md) |  | [optional]
**weeePickup** | **bool** | Position item has electrical and electronic equipment disposal service (WEEE) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
