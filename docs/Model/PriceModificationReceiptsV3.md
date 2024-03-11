# # PriceModificationReceiptsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lineNumber** | **int** | Number of line item in which the information is printed on the pdf document of the receipt. &lt;/br&gt;On the pdf documents increases and decreases do not necessarily have to be shown on the same line. If there is a discrepancy, it is visible by different line numbers of this object and the parent line item object &lt;/br&gt;This information is not reliably provided for older receipts | [optional]
**priceModificationType** | **string** | This type describes the special increases or decreases in detail and how to deal with it.  The following priceModificationTypes are possible:  * **PARTNER_DISCOUNT** - Partner-financed immediate discount granted to the customer at the time of purchase. Reduction of parent object item position applicable on receipts of type PURCHASE and REFUND * **DEFECT_COMPENSATION / REFUND_COMPLAINT_ITEM** - Partial refund already refunded by a partial refund receipt to compensate a defect. * **REFUND_PAYPAL_DISPUTE** - Partial or full amount of item price was refunded due to a dispute in Paypal payment. Reduction of parent object item position on receipts of type REFUND |
**details** | [**\OpenAPI\Client\Otto\Model\DetailsReceiptsV3**](DetailsReceiptsV3.md) |  |
**priceModificationAmount** | [**\OpenAPI\Client\Otto\Model\PriceReceiptsV3**](PriceReceiptsV3.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
