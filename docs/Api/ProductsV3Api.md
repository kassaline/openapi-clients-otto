# OpenAPI\Client\Otto\ProductsV3Api

All URIs are relative to https://api.otto.market, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productsV3CreateOrUpdateProductVariations()**](ProductsV3Api.md#productsV3CreateOrUpdateProductVariations) | **POST** /v3/products | Create or update product variations |
| [**productsV3FailedByProcessId()**](ProductsV3Api.md#productsV3FailedByProcessId) | **GET** /v3/products/update-tasks/{processUuid}/failed | List failed products of a product data delivery |
| [**productsV3GetActiveStatus()**](ProductsV3Api.md#productsV3GetActiveStatus) | **GET** /v3/products/active-status | Read active status |
| [**productsV3GetBrands()**](ProductsV3Api.md#productsV3GetBrands) | **GET** /v3/products/brands | List of allowed brands |
| [**productsV3GetCategoryGroups()**](ProductsV3Api.md#productsV3GetCategoryGroups) | **GET** /v3/products/categories | Read product categories |
| [**productsV3GetContentChanges()**](ProductsV3Api.md#productsV3GetContentChanges) | **GET** /v3/products/{sku}/content-changes | Read content changes for a single product variation |
| [**productsV3GetContentChanges2()**](ProductsV3Api.md#productsV3GetContentChanges2) | **GET** /v3/products/content-changes | Read content changes within time period |
| [**productsV3GetMarketPlaceStatus()**](ProductsV3Api.md#productsV3GetMarketPlaceStatus) | **GET** /v3/products/{sku}/marketplace-status | Read marketplace status for a single product variation |
| [**productsV3GetMarketPlaceStatusList()**](ProductsV3Api.md#productsV3GetMarketPlaceStatusList) | **GET** /v3/products/marketplace-status | Read marketplace status of product variations |
| [**productsV3GetPartnerProducts()**](ProductsV3Api.md#productsV3GetPartnerProducts) | **GET** /v3/products | Read product variations |
| [**productsV3GetProductVariation()**](ProductsV3Api.md#productsV3GetProductVariation) | **GET** /v3/products/{sku} | Read a single product variation |
| [**productsV3GetProductVariationPrice()**](ProductsV3Api.md#productsV3GetProductVariationPrice) | **GET** /v3/products/{sku}/prices | Read a single product variation price |
| [**productsV3GetProductVariationPrices()**](ProductsV3Api.md#productsV3GetProductVariationPrices) | **GET** /v3/products/prices | Read product variations prices |
| [**productsV3GetVariationActiveStatus()**](ProductsV3Api.md#productsV3GetVariationActiveStatus) | **GET** /v3/products/{sku}/active-status | Read the active status of a single product variation |
| [**productsV3ProgressByProcessId()**](ProductsV3Api.md#productsV3ProgressByProcessId) | **GET** /v3/products/update-tasks/{processUuid} | Request the results of a product data delivery |
| [**productsV3SucceededByProcessId()**](ProductsV3Api.md#productsV3SucceededByProcessId) | **GET** /v3/products/update-tasks/{processUuid}/succeeded | List succeeded products of a product data delivery |
| [**productsV3UnchangedByProcessId()**](ProductsV3Api.md#productsV3UnchangedByProcessId) | **GET** /v3/products/update-tasks/{processUuid}/unchanged | List unchanged products of a product data delivery |
| [**productsV3UpdateActiveStatus()**](ProductsV3Api.md#productsV3UpdateActiveStatus) | **POST** /v3/products/active-status | Update active status |
| [**productsV3UpdateProductVariationPrices()**](ProductsV3Api.md#productsV3UpdateProductVariationPrices) | **POST** /v3/products/prices | Update product variation prices |


## `productsV3CreateOrUpdateProductVariations()`

```php
productsV3CreateOrUpdateProductVariations($xRequestTimestamp, $productVariationProductsV3): \OpenAPI\Client\Otto\Model\ProductProcessProgressProductsV3
```

Create or update product variations

Returns a process-id to query results. The limit for the number of product variations in one request is 500.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xRequestTimestamp = 2000-10-31T01:30:10.000-05:00; // string | Holds the optional client side update request timestamp, in ISO DateTime format
$productVariationProductsV3 = array(new \OpenAPI\Client\Otto\Model\ProductVariationProductsV3()); // \OpenAPI\Client\Otto\Model\ProductVariationProductsV3[]

try {
    $result = $apiInstance->productsV3CreateOrUpdateProductVariations($xRequestTimestamp, $productVariationProductsV3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV3Api->productsV3CreateOrUpdateProductVariations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xRequestTimestamp** | **string**| Holds the optional client side update request timestamp, in ISO DateTime format | [optional] |
| **productVariationProductsV3** | [**\OpenAPI\Client\Otto\Model\ProductVariationProductsV3[]**](../Model/ProductVariationProductsV3.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Otto\Model\ProductProcessProgressProductsV3**](../Model/ProductProcessProgressProductsV3.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV3FailedByProcessId()`

```php
productsV3FailedByProcessId($processUuid): \OpenAPI\Client\Otto\Model\ProductProcessResultProductsV3
```

List failed products of a product data delivery

Request the failed products of the product data delivery with the linked processUuid. The response will contain a list of failed products with associated error details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processUuid = 'processUuid_example'; // string | search for the failed products of a product data delivery identified by its processUuid.

try {
    $result = $apiInstance->productsV3FailedByProcessId($processUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV3Api->productsV3FailedByProcessId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **processUuid** | **string**| search for the failed products of a product data delivery identified by its processUuid. | |

### Return type

[**\OpenAPI\Client\Otto\Model\ProductProcessResultProductsV3**](../Model/ProductProcessResultProductsV3.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV3GetActiveStatus()`

```php
productsV3GetActiveStatus($sku, $productReference, $category, $brandId, $page, $limit): \OpenAPI\Client\Otto\Model\ActiveStatusListResponseProductsV3
```

Read active status

The total number of results could be limited by specifying query parameters. Generally the resulting active status values will be paginated. The default page length is 100 active status entries per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for product variations by their sku value. Use this if your sku values contain slash ('/') or dot ('.') characters.
$productReference = 'productReference_example'; // string | search for product variations by their productReference value
$category = 'category_example'; // string | search for product variations by their category value
$brandId = 'brandId_example'; // string | search for product variations by their brand ID value
$page = 56; // int
$limit = 56; // int | proposed limit for the number of active status values per response page (at most 100)

try {
    $result = $apiInstance->productsV3GetActiveStatus($sku, $productReference, $category, $brandId, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV3Api->productsV3GetActiveStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for product variations by their sku value. Use this if your sku values contain slash (&#39;/&#39;) or dot (&#39;.&#39;) characters. | [optional] |
| **productReference** | **string**| search for product variations by their productReference value | [optional] |
| **category** | **string**| search for product variations by their category value | [optional] |
| **brandId** | **string**| search for product variations by their brand ID value | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**| proposed limit for the number of active status values per response page (at most 100) | [optional] |

### Return type

[**\OpenAPI\Client\Otto\Model\ActiveStatusListResponseProductsV3**](../Model/ActiveStatusListResponseProductsV3.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV3GetBrands()`

```php
productsV3GetBrands($ifMatch, $ifNoneMatch, $ifModifiedSince, $ifUnmodifiedSince, $page, $limit): \OpenAPI\Client\Otto\Model\BrandListResponseProductsV3
```

List of allowed brands

Read the list of brands that are known on the Otto market place. The list of brands will be paginated. Brands consist of a name, a brand Id, a (link to a) logo and a boolean useable that lets you know wheter you are allowed to set up variants with this brand on the Otto Marketplace. The default page length is 100 entries per response, the page size upper limit is 1000. The links specified in the result can be used to page through the total result space. Note that there will be no prev link on the first page and no next link on the last page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ifMatch = 7da7a728f910; // string | The RFC7232 If-Match header field in a request requires the server to only operate on the resource that matches at least one of the provided entity-tags. This allows clients express a precondition that prevent the method from being applied if there have been any changes to the resource (see [RFC 7232 Section 3.1](https://tools.ietf.org/html/rfc7232#section-3.1).
$ifNoneMatch = 7da7a728f910; // string | The RFC7232 If-None-Match header field in a request requires the server to only operate on the resource if it does not match any of the provided entity-tags. If the provided entity-tag is `*`, it is required that the resource does not exist at all (see [RFC 7232 Section 3.2](https://tools.ietf.org/html/rfc7232#section-3.2)
$ifModifiedSince = Sat, 29 Oct 1994 19:43:31 GMT; // string | The RFC7232 If-Modified-Since header field makes a GET or HEAD request method conditional on the selected representation's modification date being more recent than the date provided in the field-value. Transfer of the selected representation's data is avoided if that data has not changed.
$ifUnmodifiedSince = Sat, 29 Oct 1994 19:43:31 GMT; // string | The RFC7232 If-Unmodified-Since header field makes the request method conditional on the selected representation's last modification date being earlier than or equal to the date provided in the field-value. This field accomplishes the same purpose as If-Match for cases where the user agent does not have an entity-tag for the representation.
$page = 56; // int
$limit = 56; // int

try {
    $result = $apiInstance->productsV3GetBrands($ifMatch, $ifNoneMatch, $ifModifiedSince, $ifUnmodifiedSince, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV3Api->productsV3GetBrands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ifMatch** | **string**| The RFC7232 If-Match header field in a request requires the server to only operate on the resource that matches at least one of the provided entity-tags. This allows clients express a precondition that prevent the method from being applied if there have been any changes to the resource (see [RFC 7232 Section 3.1](https://tools.ietf.org/html/rfc7232#section-3.1). | [optional] |
| **ifNoneMatch** | **string**| The RFC7232 If-None-Match header field in a request requires the server to only operate on the resource if it does not match any of the provided entity-tags. If the provided entity-tag is &#x60;*&#x60;, it is required that the resource does not exist at all (see [RFC 7232 Section 3.2](https://tools.ietf.org/html/rfc7232#section-3.2) | [optional] |
| **ifModifiedSince** | **string**| The RFC7232 If-Modified-Since header field makes a GET or HEAD request method conditional on the selected representation&#39;s modification date being more recent than the date provided in the field-value. Transfer of the selected representation&#39;s data is avoided if that data has not changed. | [optional] |
| **ifUnmodifiedSince** | **string**| The RFC7232 If-Unmodified-Since header field makes the request method conditional on the selected representation&#39;s last modification date being earlier than or equal to the date provided in the field-value. This field accomplishes the same purpose as If-Match for cases where the user agent does not have an entity-tag for the representation. | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Otto\Model\BrandListResponseProductsV3**](../Model/BrandListResponseProductsV3.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV3GetCategoryGroups()`

```php
productsV3GetCategoryGroups($page, $limit, $category): \OpenAPI\Client\Otto\Model\CategoryGroupsProductsV3
```

Read product categories

Returns product categories and associated attributes of the OTTO market place. The total number of results could be limited by specifying query parameters. Generally the resulting product categories values will be paginated. The default page length is 100 product categories per response, the page size limit is 2000. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | the number (starting with 0) of the page, that should be delivered.
$limit = 56; // int | proposed limit for the number of product categories per response page  (at most 2000)
$category = 'category_example'; // string | read a single category

try {
    $result = $apiInstance->productsV3GetCategoryGroups($page, $limit, $category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV3Api->productsV3GetCategoryGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| the number (starting with 0) of the page, that should be delivered. | [optional] |
| **limit** | **int**| proposed limit for the number of product categories per response page  (at most 2000) | [optional] |
| **category** | **string**| read a single category | [optional] |

### Return type

[**\OpenAPI\Client\Otto\Model\CategoryGroupsProductsV3**](../Model/CategoryGroupsProductsV3.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV3GetContentChanges()`

```php
productsV3GetContentChanges($sku, $fromDate, $page, $limit): \OpenAPI\Client\Otto\Model\ContentChangesApiResultProductsV3
```

Read content changes for a single product variation

Returns the content changes info for a single product variation within a specific time period. The resulting content changes will be paginated. The default page length is 100 entries per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for a product variation by its SKU value
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | search for content changes from this ISO8601 date on. The maxmimum and default value is 28 days before now. Future values can be specified, but lead to an empty result.
$page = 56; // int
$limit = 56; // int | proposed limit for the number of entries per response page (at most 100)

try {
    $result = $apiInstance->productsV3GetContentChanges($sku, $fromDate, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV3Api->productsV3GetContentChanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for a product variation by its SKU value | |
| **fromDate** | **\DateTime**| search for content changes from this ISO8601 date on. The maxmimum and default value is 28 days before now. Future values can be specified, but lead to an empty result. | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**| proposed limit for the number of entries per response page (at most 100) | [optional] |

### Return type

[**\OpenAPI\Client\Otto\Model\ContentChangesApiResultProductsV3**](../Model/ContentChangesApiResultProductsV3.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV3GetContentChanges2()`

```php
productsV3GetContentChanges2($sku, $fromDate, $page, $limit): \OpenAPI\Client\Otto\Model\ContentChangesApiResultProductsV3
```

Read content changes within time period

Read the content changes for all your product variations within a specific time period. You can also use this endpoint to read the content changes for more than one variation or if the sku value contains slash ('/') or dot ('.') characters, so that you cannot use the other endpoint with one dedicated sku value in the path. The resulting content changes will be paginated. The default page length is 100 entries per response, which also is the page size upper limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = array('sku_example'); // string[] | search for product variations by their sku value. Use this to query for multiple variations or if your sku values contain slash ('/') or dot ('.') characters. You may separate multiple sku values by comma or state each one with a &sku= in front of the value. Please note that if you like to query for a single variation whose value contains a comma you have to add one empty &sku= at the end of the query string or use the other endpoint.
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | search for content changes from this time on. The maxmimum and default value is 28 days before now. Future values can be specified, but lead to an empty result.
$page = 56; // int
$limit = 56; // int | proposed limit for the number of content changes per response page (at most 100)

try {
    $result = $apiInstance->productsV3GetContentChanges2($sku, $fromDate, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV3Api->productsV3GetContentChanges2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | [**string[]**](../Model/string.md)| search for product variations by their sku value. Use this to query for multiple variations or if your sku values contain slash (&#39;/&#39;) or dot (&#39;.&#39;) characters. You may separate multiple sku values by comma or state each one with a &amp;sku&#x3D; in front of the value. Please note that if you like to query for a single variation whose value contains a comma you have to add one empty &amp;sku&#x3D; at the end of the query string or use the other endpoint. | [optional] |
| **fromDate** | **\DateTime**| search for content changes from this time on. The maxmimum and default value is 28 days before now. Future values can be specified, but lead to an empty result. | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**| proposed limit for the number of content changes per response page (at most 100) | [optional] |

### Return type

[**\OpenAPI\Client\Otto\Model\ContentChangesApiResultProductsV3**](../Model/ContentChangesApiResultProductsV3.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV3GetMarketPlaceStatus()`

```php
productsV3GetMarketPlaceStatus($sku): \OpenAPI\Client\Otto\Model\MarketPlaceStatusProductsV3
```

Read marketplace status for a single product variation

Returns marketplace status for a single product variation by SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for a marketplace status by its SKU value

try {
    $result = $apiInstance->productsV3GetMarketPlaceStatus($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV3Api->productsV3GetMarketPlaceStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for a marketplace status by its SKU value | |

### Return type

[**\OpenAPI\Client\Otto\Model\MarketPlaceStatusProductsV3**](../Model/MarketPlaceStatusProductsV3.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV3GetMarketPlaceStatusList()`

```php
productsV3GetMarketPlaceStatusList($sku, $productReference, $category, $brandId, $fromDate, $page, $limit, $marketPlaceStatus, $sortOrder): \OpenAPI\Client\Otto\Model\MarketPlaceStatusApiResultProductsV3
```

Read marketplace status of product variations

The total number of results could be limited by specifying query parameters. Generally the resulting marketplace status will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for product variations by their sku value. Use this if your sku values contain slash ('/') or dot ('.') characters.
$productReference = 'productReference_example'; // string | search marketplace status by the productReference value of the related product variations
$category = 'category_example'; // string | search marketplace status by the category value of the related product variations
$brandId = 'brandId_example'; // string | search marketplace status by the brand ID value of the related product variations
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | search marketplace status for a time range starting with the given date (in ISO8601, like '2021-10-09T07:52:19.820Z' or '2021-10-09T07:52:19.820+01:00')
$page = 56; // int | page to load
$limit = 56; // int | proposed limit for the number of marketplace status per response page (at most 1000)
$marketPlaceStatus = array('marketPlaceStatus_example'); // string[] | only include items that match any of the provided status
$sortOrder = 'sortOrder_example'; // string | Define the sort order of the resulting entries. Available values are 'desc' for 'newest lastModified first' and 'asc' for 'oldest lastModified first' - default is 'desc'

try {
    $result = $apiInstance->productsV3GetMarketPlaceStatusList($sku, $productReference, $category, $brandId, $fromDate, $page, $limit, $marketPlaceStatus, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV3Api->productsV3GetMarketPlaceStatusList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for product variations by their sku value. Use this if your sku values contain slash (&#39;/&#39;) or dot (&#39;.&#39;) characters. | [optional] |
| **productReference** | **string**| search marketplace status by the productReference value of the related product variations | [optional] |
| **category** | **string**| search marketplace status by the category value of the related product variations | [optional] |
| **brandId** | **string**| search marketplace status by the brand ID value of the related product variations | [optional] |
| **fromDate** | **\DateTime**| search marketplace status for a time range starting with the given date (in ISO8601, like &#39;2021-10-09T07:52:19.820Z&#39; or &#39;2021-10-09T07:52:19.820+01:00&#39;) | [optional] |
| **page** | **int**| page to load | [optional] |
| **limit** | **int**| proposed limit for the number of marketplace status per response page (at most 1000) | [optional] |
| **marketPlaceStatus** | [**string[]**](../Model/string.md)| only include items that match any of the provided status | [optional] |
| **sortOrder** | **string**| Define the sort order of the resulting entries. Available values are &#39;desc&#39; for &#39;newest lastModified first&#39; and &#39;asc&#39; for &#39;oldest lastModified first&#39; - default is &#39;desc&#39; | [optional] |

### Return type

[**\OpenAPI\Client\Otto\Model\MarketPlaceStatusApiResultProductsV3**](../Model/MarketPlaceStatusApiResultProductsV3.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV3GetPartnerProducts()`

```php
productsV3GetPartnerProducts($sku, $productReference, $category, $brandId, $page, $limit): \OpenAPI\Client\Otto\Model\ProductVariationApiResultProductsV3
```

Read product variations

The total number of results could be limited by specifying query parameters. Generally the resulting product variations will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for product variations by their sku value. Use this if your sku values contain slash ('/') or dot ('.') characters.
$productReference = 'productReference_example'; // string | search for product variations by their productReference value
$category = 'category_example'; // string | search for product variations by their category value
$brandId = 'brandId_example'; // string | search for product variations by their brandId value
$page = 56; // int
$limit = 56; // int | proposed limit for the number of products per response page (at most 100)

try {
    $result = $apiInstance->productsV3GetPartnerProducts($sku, $productReference, $category, $brandId, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV3Api->productsV3GetPartnerProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for product variations by their sku value. Use this if your sku values contain slash (&#39;/&#39;) or dot (&#39;.&#39;) characters. | [optional] |
| **productReference** | **string**| search for product variations by their productReference value | [optional] |
| **category** | **string**| search for product variations by their category value | [optional] |
| **brandId** | **string**| search for product variations by their brandId value | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**| proposed limit for the number of products per response page (at most 100) | [optional] |

### Return type

[**\OpenAPI\Client\Otto\Model\ProductVariationApiResultProductsV3**](../Model/ProductVariationApiResultProductsV3.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV3GetProductVariation()`

```php
productsV3GetProductVariation($sku): \OpenAPI\Client\Otto\Model\ProductVariationProductsV3
```

Read a single product variation

Returns a single product variation by SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for a product variation by its SKU value

try {
    $result = $apiInstance->productsV3GetProductVariation($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV3Api->productsV3GetProductVariation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for a product variation by its SKU value | |

### Return type

[**\OpenAPI\Client\Otto\Model\ProductVariationProductsV3**](../Model/ProductVariationProductsV3.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV3GetProductVariationPrice()`

```php
productsV3GetProductVariationPrice($sku): \OpenAPI\Client\Otto\Model\SkuPricingProductsV3
```

Read a single product variation price

Read the price data of a single product variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for a product variation by its SKU value

try {
    $result = $apiInstance->productsV3GetProductVariationPrice($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV3Api->productsV3GetProductVariationPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for a product variation by its SKU value | |

### Return type

[**\OpenAPI\Client\Otto\Model\SkuPricingProductsV3**](../Model/SkuPricingProductsV3.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV3GetProductVariationPrices()`

```php
productsV3GetProductVariationPrices($sku, $productReference, $category, $brandId, $page, $limit): \OpenAPI\Client\Otto\Model\PriceApiResultProductsV3
```

Read product variations prices

Read your product variations prices. The total number of results could be limited by specifying query parameters. Generally the resulting product variations will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for product variations by their sku value. Use this if your sku values contain slash ('/') or dot ('.') characters.
$productReference = 'productReference_example'; // string | search for product variations by their productReference value
$category = 'category_example'; // string | search for product variations by their category value
$brandId = 'brandId_example'; // string | search for product variations by their ID value
$page = 56; // int
$limit = 56; // int | proposed limit for the number of products per response page (at most 100)

try {
    $result = $apiInstance->productsV3GetProductVariationPrices($sku, $productReference, $category, $brandId, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV3Api->productsV3GetProductVariationPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for product variations by their sku value. Use this if your sku values contain slash (&#39;/&#39;) or dot (&#39;.&#39;) characters. | [optional] |
| **productReference** | **string**| search for product variations by their productReference value | [optional] |
| **category** | **string**| search for product variations by their category value | [optional] |
| **brandId** | **string**| search for product variations by their ID value | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**| proposed limit for the number of products per response page (at most 100) | [optional] |

### Return type

[**\OpenAPI\Client\Otto\Model\PriceApiResultProductsV3**](../Model/PriceApiResultProductsV3.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV3GetVariationActiveStatus()`

```php
productsV3GetVariationActiveStatus($sku): \OpenAPI\Client\Otto\Model\ActiveStatusProductsV3
```

Read the active status of a single product variation

Returns active status of the requested product variation by SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for a product variation by its SKU value

try {
    $result = $apiInstance->productsV3GetVariationActiveStatus($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV3Api->productsV3GetVariationActiveStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for a product variation by its SKU value | |

### Return type

[**\OpenAPI\Client\Otto\Model\ActiveStatusProductsV3**](../Model/ActiveStatusProductsV3.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV3ProgressByProcessId()`

```php
productsV3ProgressByProcessId($processUuid): \OpenAPI\Client\Otto\Model\ProductProcessProgressProductsV3
```

Request the results of a product data delivery

The response will contain the links for the different parts of the result: products successfully created or updated, products with failures, products which did not contain any changes compared to the last sent version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processUuid = 'processUuid_example'; // string | search for a product data delivery result by its processUuid.

try {
    $result = $apiInstance->productsV3ProgressByProcessId($processUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV3Api->productsV3ProgressByProcessId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **processUuid** | **string**| search for a product data delivery result by its processUuid. | |

### Return type

[**\OpenAPI\Client\Otto\Model\ProductProcessProgressProductsV3**](../Model/ProductProcessProgressProductsV3.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV3SucceededByProcessId()`

```php
productsV3SucceededByProcessId($processUuid): \OpenAPI\Client\Otto\Model\ProductProcessResultProductsV3
```

List succeeded products of a product data delivery

Request the succeeded products of the product data delivery with the linked processUuid. The response will contain a list of successfully delivered products.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processUuid = 'processUuid_example'; // string | search for the succeeded products of a product data delivery identified by its processUuid.

try {
    $result = $apiInstance->productsV3SucceededByProcessId($processUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV3Api->productsV3SucceededByProcessId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **processUuid** | **string**| search for the succeeded products of a product data delivery identified by its processUuid. | |

### Return type

[**\OpenAPI\Client\Otto\Model\ProductProcessResultProductsV3**](../Model/ProductProcessResultProductsV3.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV3UnchangedByProcessId()`

```php
productsV3UnchangedByProcessId($processUuid): \OpenAPI\Client\Otto\Model\ProductProcessResultProductsV3
```

List unchanged products of a product data delivery

Request the unchanged products of the product data delivery with the linked processUuid. The response will contain a list of unchanged products.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processUuid = 'processUuid_example'; // string | search for the unchanged products of a product data delivery identified by its processUuid.

try {
    $result = $apiInstance->productsV3UnchangedByProcessId($processUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV3Api->productsV3UnchangedByProcessId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **processUuid** | **string**| search for the unchanged products of a product data delivery identified by its processUuid. | |

### Return type

[**\OpenAPI\Client\Otto\Model\ProductProcessResultProductsV3**](../Model/ProductProcessResultProductsV3.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV3UpdateActiveStatus()`

```php
productsV3UpdateActiveStatus($xRequestTimestamp, $activeStatusListRequestProductsV3): \OpenAPI\Client\Otto\Model\ProductProcessProgressProductsV3
```

Update active status

Returns a process-id to query results. The limit for the number of product active statuses in one request is 500.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xRequestTimestamp = 2000-10-31T01:30:10.000-05:00; // string | Holds the optional client side update request timestamp, in ISO DateTime format
$activeStatusListRequestProductsV3 = new \OpenAPI\Client\Otto\Model\ActiveStatusListRequestProductsV3(); // \OpenAPI\Client\Otto\Model\ActiveStatusListRequestProductsV3

try {
    $result = $apiInstance->productsV3UpdateActiveStatus($xRequestTimestamp, $activeStatusListRequestProductsV3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV3Api->productsV3UpdateActiveStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xRequestTimestamp** | **string**| Holds the optional client side update request timestamp, in ISO DateTime format | [optional] |
| **activeStatusListRequestProductsV3** | [**\OpenAPI\Client\Otto\Model\ActiveStatusListRequestProductsV3**](../Model/ActiveStatusListRequestProductsV3.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Otto\Model\ProductProcessProgressProductsV3**](../Model/ProductProcessProgressProductsV3.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV3UpdateProductVariationPrices()`

```php
productsV3UpdateProductVariationPrices($xRequestTimestamp, $skuPricingProductsV3): \OpenAPI\Client\Otto\Model\ProductProcessProgressProductsV3
```

Update product variation prices

Update your product variation prices and get a process-id to query results. The limit for the number of product variation prices in one request is 500.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xRequestTimestamp = 2000-10-31T01:30:10.000-05:00; // string | Holds the optional client side update request timestamp, in ISO DateTime format
$skuPricingProductsV3 = array(new \OpenAPI\Client\Otto\Model\SkuPricingProductsV3()); // \OpenAPI\Client\Otto\Model\SkuPricingProductsV3[]

try {
    $result = $apiInstance->productsV3UpdateProductVariationPrices($xRequestTimestamp, $skuPricingProductsV3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV3Api->productsV3UpdateProductVariationPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xRequestTimestamp** | **string**| Holds the optional client side update request timestamp, in ISO DateTime format | [optional] |
| **skuPricingProductsV3** | [**\OpenAPI\Client\Otto\Model\SkuPricingProductsV3[]**](../Model/SkuPricingProductsV3.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Otto\Model\ProductProcessProgressProductsV3**](../Model/ProductProcessProgressProductsV3.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
