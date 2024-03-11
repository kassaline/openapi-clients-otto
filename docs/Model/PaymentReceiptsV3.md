# # PaymentReceiptsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paymentProvider** | **string** | Payment Provider chosen for the order. &lt;/br&gt; Possible values: * **PLAZA** -  Ratepay * **OTTOPAYMENT** - OTTO Payments |
**paymentMethod** | **string** | Payment method chosen by the customer to pay for this order |
**installmentCount** | **int** | For payment methods with installments, this attribute indicates how many installments the customer has chosen when placing the order. &lt;/br&gt;Only available on receipts of receiptType PURCHASE. &lt;/br&gt;This information is not reliably provided for older receipts | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
