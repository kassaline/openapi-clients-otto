# # CategoryGroupProductsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**categoryGroup** | **string** | a category group defines a list of categories and the market place attributes for these categories. | [optional]
**categories** | **string[]** | the list of the categories for this category group. | [optional]
**variationThemes** | **string[]** | overview of all attributes that can be used to create variantions. | [optional]
**title** | **string** | shows how our product title is built | [optional]
**attributes** | [**\OpenAPI\Client\Otto\Model\AttributeDefinitionProductsV3[]**](AttributeDefinitionProductsV3.md) | list of the market place attributes for the categories of this group. | [optional]
**createdAt** | **\DateTime** | ISO8601 creation date of the category. | [optional]
**lastModified** | **\DateTime** | ISO8601 last modification date of the category. | [optional]
**additionalRequirements** | [**\OpenAPI\Client\Otto\Model\AdditionalRequirementProductsV3[]**](AdditionalRequirementProductsV3.md) | a list of general requirements for certain product attributes that apply to all categories in the category group | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
