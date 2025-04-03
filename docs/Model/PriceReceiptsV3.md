# # PriceReceiptsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**taxType** | **string** | The fields indicates what kind of tax the price object includes.&lt;/br&gt; Currently prices of the following taxTypes are possible. * **VAT** - vat rate * **INSURANCE** - insurance tax |
**taxRate** | **string** | Applied tax rate, if there is any.&lt;/br&gt; Currently the entry can only be a decimal number. |
**gross** | [**\OpenAPI\Client\Otto\Model\PriceReceiptsV3Gross**](PriceReceiptsV3Gross.md) |  |
**net** | [**\OpenAPI\Client\Otto\Model\PriceReceiptsV3Net**](PriceReceiptsV3Net.md) |  | [optional]
**tax** | [**\OpenAPI\Client\Otto\Model\PriceReceiptsV3Tax**](PriceReceiptsV3Tax.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
