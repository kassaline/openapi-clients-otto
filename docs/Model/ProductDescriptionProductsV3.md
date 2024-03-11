# # ProductDescriptionProductsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | **string** | Denotes the assortment type of the product, like &#39;bag&#39; or &#39;shirt&#39;. Mandatory. Must be identical for all variants of a product. Must be present in the Category service offered via Category endpoint |
**brandId** | **string** | Denotes the brand ID of a product. Brands and the mapping of their names to brand Ids should be done using the brand endpoint. Must be present in the Brand service offered via Brand endpoint. Must be identical for all variants of a product. |
**productLine** | **string** | Denotes the proper name of a product, like &#39;501&#39;. May contain a maximum of 70 characters. If provided, it must be identical for all variants of a product. | [optional]
**manufacturer** | **string** | Denotes the manufacturer of a product. If provided, it must be identical for all variants of a product. | [optional]
**productionDate** | **\DateTime** | Denotes the date of manufacture of a product variant. | [optional]
**multiPack** | **bool** | If the product variant is part of a set: &#39;true&#39;; otherwise &#39;false&#39; | [optional]
**bundle** | **bool** | If the product variant is part of a bundle: &#39;true&#39;; otherwise &#39;false&#39; | [optional]
**fscCertified** | **bool** | If the product variant is certified by the Forest Stewardship Council: &#39;true&#39;; otherwise &#39;false&#39; | [optional]
**disposal** | **bool** | If true, otto.de will present information about the disposal of the product (or parts of it). | [optional]
**productUrl** | **string** | Refers to a representation of the product variant in a shop of the partner. Should be a valid URL. | [optional]
**description** | **string** | Represents a textual description of a product variant. May contain HTML elements. Should contain less than 2000 characters. Relevant for SEO. | [optional]
**bulletPoints** | **string[]** | May contain a minimum of 3 and a maximum of 180 characters. | [optional]
**attributes** | [**\OpenAPI\Client\Otto\Model\AttributeProductsV3[]**](AttributeProductsV3.md) | Lists all the descriptive information about a product variant a partner can provide. Must be provided in the form of a key values pair. Will be validated against the AttributeDefinitions from Category endpoint provided by Otto market. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
