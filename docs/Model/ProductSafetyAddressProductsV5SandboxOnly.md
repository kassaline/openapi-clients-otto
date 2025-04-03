# # ProductSafetyAddressProductsV5SandboxOnly

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The company name of the manufacturer or the distributor placing the product into the European Economic Area (EEA). Maximum length: 100 characters. |
**address** | **string** | The complete address including street, postal code, city, country. Without any formatting, comma separation, no line breaks. Maximum length: 200 characters. |
**regionCode** | **string** | Allowed values are the country codes of the European Economic Area (EEA) members in ISO-3166 Alpha-2 format. Important for validation of the address. |
**email** | **string** | A valid and complete email address. Maximum length: 100 characters. **Mandatory** if no URL is specified. | [optional]
**url** | **string** | Valid URL to the contact information of the manufacturer or distributor (see http://www.ietf.org/rfc/rfc2396.txt and http://www.ietf.org/rfc/rfc2732.txt). Maximum length: 200 characters. **Mandatory** if no email is specified. | [optional]
**phone** | **string** | A valid phone number. Maximum length: 20 characters. | [optional]
**roles** | [**\OpenAPI\Client\Otto\Model\ProductSafetyAddressRoleProductsV5SandboxOnly[]**](ProductSafetyAddressRoleProductsV5SandboxOnly.md) | The role(s) of the economic agent to which the address belongs. Allowed values are &#39;MANUFACTURER&#39; and &#39;DISTRIBUTOR&#39;. |
**components** | **string[]** | Can be used in the case of set products for the correct assignment of addresses to set components, e.g. use components “mouse” and “keyboard” when selling a set of both. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
