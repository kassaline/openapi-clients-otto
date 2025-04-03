# # ReceiptReceiptsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**receiptType** | **string** | Categorisation that classifies the receipts according to the main characteristics  ATTENTION: In previous version the information was called type |
**isRealReceipt** | **bool** | Counterpart to the sentence \&quot;Dies ist kein Beleg/keine Rechnung im Sinne des Umsatzsteuergesetzes und berechtigt nicht zum Vorsteuerabzug.\&quot; on pdf document.    * Set to **true** since real customer invoices/refunds for shipments to locations in domestic tax territory are created.    * Set to **false** for technical receipts not visible to customer or on receipts with delivery addresses on Helgoland or in Büsingen |
**receiptNumber** | **string** | Human readable identifier of a receipt known by customer. &lt;/br&gt; Guaranteed to be unique per partner |
**creationDate** | **\DateTime** | Date when receipt is created by system (UTC in ISO-8601 format) |
**fulfillmentDate** | **\DateTime** | Date when service fulfilled. | [optional]
**salesOrderId** | **string** | Technical identifier of corresponding sales order |
**orderNumber** | **string** | Order number of corresponding sales order |
**orderDate** | **\DateTime** | Order date of corresponding sales order (UTC in ISO-8601 format) |
**shipmentDate** | **\DateTime** | Date when physical items of this receipt were handed over to the carrier to be delivered to the customer (UTC in ISO-8601 format).&lt;/br&gt;Only available on receipts of receiptType PURCHASE. | [optional]
**shipment** | [**\OpenAPI\Client\Otto\Model\ShipmentReceiptsV3**](ShipmentReceiptsV3.md) |  | [optional]
**linkedReceiptNumber** | **string** | Human-readable identifier of linked receipt.&lt;/br&gt; In case of receiptType PARTIAL_REFUND or REFUND it is the receiptINumber of purchase receipt.  ATTENTION: In previous version the information was called originalReceiptNumber | [optional]
**linkedCreationDate** | **\DateTime** | Creation date of linked receipt (UTC in ISO-8601 format).&lt;/br&gt;Only available if there is a linked receipt.  ATTENTION: In previous version the information was called originalCreatedDate | [optional]
**payment** | [**\OpenAPI\Client\Otto\Model\PaymentReceiptsV3**](PaymentReceiptsV3.md) |  |
**partner** | [**\OpenAPI\Client\Otto\Model\PartnerReceiptsV3**](PartnerReceiptsV3.md) |  |
**customer** | [**\OpenAPI\Client\Otto\Model\CustomerReceiptsV3**](CustomerReceiptsV3.md) |  |
**deliveryAddress** | [**\OpenAPI\Client\Otto\Model\AddressReceiptsV3**](AddressReceiptsV3.md) |  | [optional]
**lineItems** | [**\OpenAPI\Client\Otto\Model\LineItemsReceiptsV3**](LineItemsReceiptsV3.md) |  |
**totals** | [**\OpenAPI\Client\Otto\Model\PriceReceiptsV3[]**](PriceReceiptsV3.md) | Total amounts of receipt per tax type and tax rate |
**refundType** | **string** | Field describes the business case of a refund in more detail.    &lt;br/&gt;Only available on receipts of receiptType REFUND and not reliable provided on older partial refund receipts.    The following refundTypes are possible:   * **RETURN** - Refund due to a return of an item   * **CANCELLATION** - Refund of delivery fees due to a cancellation   * **SERVICE_FULL_REFUND_CANCELLED_BY_SDU** - Refund of a service without item   * **SERVICE_FULL_REFUND_PRODUCT_RETURNED** - Refund a service parallel to an item return | [optional]
**partialRefundType** | **string** | Business case of partial refund chosen by partner. Has an impact on the business flow and the PDF.                                                                                              &lt;/br&gt;Only available on receipts of receiptType PARTIAL_REFUND and not reliable provides on older partial refunds receipts.  Possible values: * **REFUND_COMPLAINT_ITEM** - Refund because of justified customer complaint on item * **REFUND_PAYPAL_DISPUTE** - Partial or full amount of item price was refunded due to a dispute in Paypal payment * **REFUND_ESCALATION** - Partial amount of item price was refunded due to an escalation * **REFUND_PARTIAL_AMOUNT_AFTER_SERVICE_CANCELLATION** - Lowering of service price after service was not fulfilled completely * **REFUND_CREDIT_CARD_DISPUTE** - Partial or full amount of item price was refunded due to a dispute in CREDIT_CARD payment | [optional]
**amountDue** | [**\OpenAPI\Client\Otto\Model\ReceiptReceiptsV3AmountDue**](ReceiptReceiptsV3AmountDue.md) |  |
**totalsGrossAmount** | [**\OpenAPI\Client\Otto\Model\ReceiptReceiptsV3TotalsGrossAmount**](ReceiptReceiptsV3TotalsGrossAmount.md) |  | [optional]
**totalsReductions** | [**\OpenAPI\Client\Otto\Model\TotalsReductionReceiptsV3[]**](TotalsReductionReceiptsV3.md) | Reduction amounts on total value of receipts (currently it includes voucher reduction) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
