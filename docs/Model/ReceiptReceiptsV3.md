# # ReceiptReceiptsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**receiptType** | **string** | Categorisation that classifies the receipts according to the main characteristics  ATTENTION: In previous version the information was called type |
**isRealReceipt** | **bool** | Counterpart to the sentence \&quot;Dies ist kein Beleg/keine Rechnung im Sinne des Umsatzsteuergesetzes und berechtigt nicht zum Vorsteuerabzug.\&quot; on pdf document.    * Set to **true** since real customer invoices/refunds for shipments to locations in domestic tax territory are created.    * Set to **false** for technical receipts not visible to customer or on receipts with delivery addresses on Helgoland or in Büsingen |
**receiptNumber** | **string** | Human readable identifier of a receipt known by customer. &lt;/br&gt; Guaranteed to be unique per partner |
**creationDate** | **\DateTime** | Date when receipt is created by system (UTC in ISO-8601 format) |
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
**refundType** | **string** | Describes the business case of a refund. Has an impact on the business flow and the PDF texts. &lt;/br&gt;Only available on receipts of receiptType REFUND and not reliable provided on older partial refunds receipts.  The following refundTypes are possible: * **RETURN** - Refund due to a return * **CANCELLATION** - Refund of delivery fees due to a cancellation | [optional]
**partialRefundType** | **string** | Business case of partial refund chosen by partner. Has an impact on the business flow and the PDF. &lt;/br&gt;Only available on receipts of receiptType PARTIAL_REFUND and not reliable provides on older partial refunds receipts.  Possible values:  * **REFUND_COMPLAINT_ITEM** - Refund because of justified customer complaint on item. Will replace first partial refund business case DEFECT_COMPENSATION, that was introduced without having a partialRefundType at all. * **REFUND_PAYPAL_DISPUTE** - Partial or full amount of item price was refunded due to a dispute in Paypal payment. | [optional]
**amountDue** | [**\OpenAPI\Client\Otto\Model\ReceiptReceiptsV3AmountDue**](ReceiptReceiptsV3AmountDue.md) |  |
**totalsGrossAmount** | [**\OpenAPI\Client\Otto\Model\ReceiptReceiptsV3TotalsGrossAmount**](ReceiptReceiptsV3TotalsGrossAmount.md) |  | [optional]
**totalsReductions** | **object[]** | Reduction amounts on total value of receipts | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
