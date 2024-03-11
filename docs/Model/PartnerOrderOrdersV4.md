# # PartnerOrderOrdersV4

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deliveryAddress** | [**\OpenAPI\Client\Otto\Model\AddressOrdersV4**](AddressOrdersV4.md) |  | [optional]
**initialDeliveryFees** | [**\OpenAPI\Client\Otto\Model\InitialDeliveryFeeOrdersV4[]**](InitialDeliveryFeeOrdersV4.md) | The delivery fees on customer checkout | [optional]
**initialDiscounts** | [**\OpenAPI\Client\Otto\Model\InitialDiscountOrdersV4[]**](InitialDiscountOrdersV4.md) | The initial discounts on customer checkout | [optional]
**invoiceAddress** | [**\OpenAPI\Client\Otto\Model\AddressOrdersV4**](AddressOrdersV4.md) |  | [optional]
**lastModifiedDate** | **\DateTime** | Last order update date | [optional]
**links** | [**\OpenAPI\Client\Otto\Model\LinkOrdersV4[]**](LinkOrdersV4.md) | Order related links like the link to fetch the single partner order | [optional]
**orderDate** | **\DateTime** | The date, when this order has been placed |
**orderLifecycleInformation** | [**\OpenAPI\Client\Otto\Model\OrderLifecycleInformationOrdersV4**](OrderLifecycleInformationOrdersV4.md) |  |
**orderNumber** | **string** | The order number. An unique human readable 10 character(alphanumeric) identifier referring to this order |
**payment** | [**\OpenAPI\Client\Otto\Model\PaymentOrdersV4**](PaymentOrdersV4.md) |  | [optional]
**positionItems** | [**\OpenAPI\Client\Otto\Model\PositionItemOrdersV4[]**](PositionItemOrdersV4.md) | The physical position items of this order. Multiple position item can refer to the same product |
**salesOrderId** | **string** | The id of the corresponding sales order. For one partner the sales order id is unique |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
