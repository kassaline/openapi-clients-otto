# OpenAPI\Client\Otto\ProductsV5Api

All URIs are relative to https://api.otto.market, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productsV5SandboxOnlyCreateOrUpdateProductVariations()**](ProductsV5Api.md#productsV5SandboxOnlyCreateOrUpdateProductVariations) | **POST** /v5/products | Create or update product variations |
| [**productsV5SandboxOnlyFailedByProcessId()**](ProductsV5Api.md#productsV5SandboxOnlyFailedByProcessId) | **GET** /v5/products/update-tasks/{processUuid}/failed | List failed products of a product data delivery |
| [**productsV5SandboxOnlyGetActiveStatus()**](ProductsV5Api.md#productsV5SandboxOnlyGetActiveStatus) | **GET** /v5/products/active-status | Read active status |
| [**productsV5SandboxOnlyGetBrands()**](ProductsV5Api.md#productsV5SandboxOnlyGetBrands) | **GET** /v5/products/brands | List of allowed brands |
| [**productsV5SandboxOnlyGetCategoryGroups()**](ProductsV5Api.md#productsV5SandboxOnlyGetCategoryGroups) | **GET** /v5/products/categories | Read product categories |
| [**productsV5SandboxOnlyGetContentChanges()**](ProductsV5Api.md#productsV5SandboxOnlyGetContentChanges) | **GET** /v5/products/{sku}/content-changes | Read content changes for a single product variation |
| [**productsV5SandboxOnlyGetContentChanges2()**](ProductsV5Api.md#productsV5SandboxOnlyGetContentChanges2) | **GET** /v5/products/content-changes | Read content changes within time period |
| [**productsV5SandboxOnlyGetMarketPlaceStatus()**](ProductsV5Api.md#productsV5SandboxOnlyGetMarketPlaceStatus) | **GET** /v5/products/{sku}/marketplace-status | Read marketplace status for a single product variation |
| [**productsV5SandboxOnlyGetMarketPlaceStatusList()**](ProductsV5Api.md#productsV5SandboxOnlyGetMarketPlaceStatusList) | **GET** /v5/products/marketplace-status | Read marketplace status of product variations |
| [**productsV5SandboxOnlyGetPartnerProducts()**](ProductsV5Api.md#productsV5SandboxOnlyGetPartnerProducts) | **GET** /v5/products | Read product variations |
| [**productsV5SandboxOnlyGetProductVariation()**](ProductsV5Api.md#productsV5SandboxOnlyGetProductVariation) | **GET** /v5/products/{sku} | Read a single product variation |
| [**productsV5SandboxOnlyGetProductVariationPrice()**](ProductsV5Api.md#productsV5SandboxOnlyGetProductVariationPrice) | **GET** /v5/products/{sku}/prices | Read a single product variation price |
| [**productsV5SandboxOnlyGetProductVariationPrices()**](ProductsV5Api.md#productsV5SandboxOnlyGetProductVariationPrices) | **GET** /v5/products/prices | Read product variations prices |
| [**productsV5SandboxOnlyGetVariationActiveStatus()**](ProductsV5Api.md#productsV5SandboxOnlyGetVariationActiveStatus) | **GET** /v5/products/{sku}/active-status | Read the active status of a single product variation |
| [**productsV5SandboxOnlyProgressByProcessId()**](ProductsV5Api.md#productsV5SandboxOnlyProgressByProcessId) | **GET** /v5/products/update-tasks/{processUuid} | Request the results of a product data delivery |
| [**productsV5SandboxOnlySucceededByProcessId()**](ProductsV5Api.md#productsV5SandboxOnlySucceededByProcessId) | **GET** /v5/products/update-tasks/{processUuid}/succeeded | List succeeded products of a product data delivery |
| [**productsV5SandboxOnlyUnchangedByProcessId()**](ProductsV5Api.md#productsV5SandboxOnlyUnchangedByProcessId) | **GET** /v5/products/update-tasks/{processUuid}/unchanged | List unchanged products of a product data delivery |
| [**productsV5SandboxOnlyUpdateActiveStatus()**](ProductsV5Api.md#productsV5SandboxOnlyUpdateActiveStatus) | **POST** /v5/products/active-status | Update active status |
| [**productsV5SandboxOnlyUpdateProductVariationPrices()**](ProductsV5Api.md#productsV5SandboxOnlyUpdateProductVariationPrices) | **POST** /v5/products/prices | Update product variation prices |


## `productsV5SandboxOnlyCreateOrUpdateProductVariations()`

```php
productsV5SandboxOnlyCreateOrUpdateProductVariations($xRequestTimestamp, $productVariationProductsV5SandboxOnly): \OpenAPI\Client\Otto\Model\ProductProcessProgressProductsV5SandboxOnly
```

Create or update product variations

Returns a process-id to query results. The limit for the number of product variations in one request is 500.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xRequestTimestamp = 2000-10-31T01:30:10.000-05:00; // string | Holds the optional client side update request timestamp, in ISO DateTime format
$productVariationProductsV5SandboxOnly = array(new \OpenAPI\Client\Otto\Model\ProductVariationProductsV5SandboxOnly()); // \OpenAPI\Client\Otto\Model\ProductVariationProductsV5SandboxOnly[]

try {
    $result = $apiInstance->productsV5SandboxOnlyCreateOrUpdateProductVariations($xRequestTimestamp, $productVariationProductsV5SandboxOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5SandboxOnlyCreateOrUpdateProductVariations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xRequestTimestamp** | **string**| Holds the optional client side update request timestamp, in ISO DateTime format | [optional] |
| **productVariationProductsV5SandboxOnly** | [**\OpenAPI\Client\Otto\Model\ProductVariationProductsV5SandboxOnly[]**](../Model/ProductVariationProductsV5SandboxOnly.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Otto\Model\ProductProcessProgressProductsV5SandboxOnly**](../Model/ProductProcessProgressProductsV5SandboxOnly.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5SandboxOnlyFailedByProcessId()`

```php
productsV5SandboxOnlyFailedByProcessId($processUuid): \OpenAPI\Client\Otto\Model\ProductProcessResultProductsV5SandboxOnly
```

List failed products of a product data delivery

Request the failed products of the product data delivery with the linked processUuid. The response will contain a list of failed products with associated error details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processUuid = 'processUuid_example'; // string | search for the failed products of a product data delivery identified by its processUuid.

try {
    $result = $apiInstance->productsV5SandboxOnlyFailedByProcessId($processUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5SandboxOnlyFailedByProcessId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **processUuid** | **string**| search for the failed products of a product data delivery identified by its processUuid. | |

### Return type

[**\OpenAPI\Client\Otto\Model\ProductProcessResultProductsV5SandboxOnly**](../Model/ProductProcessResultProductsV5SandboxOnly.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5SandboxOnlyGetActiveStatus()`

```php
productsV5SandboxOnlyGetActiveStatus($sku, $productReference, $category, $brandId, $page, $limit): \OpenAPI\Client\Otto\Model\ActiveStatusListResponseProductsV5SandboxOnly
```

Read active status

The total number of results could be limited by specifying query parameters. Generally the resulting active status values will be paginated. The default page length is 100 active status entries per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV5Api(
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
    $result = $apiInstance->productsV5SandboxOnlyGetActiveStatus($sku, $productReference, $category, $brandId, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5SandboxOnlyGetActiveStatus: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Otto\Model\ActiveStatusListResponseProductsV5SandboxOnly**](../Model/ActiveStatusListResponseProductsV5SandboxOnly.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5SandboxOnlyGetBrands()`

```php
productsV5SandboxOnlyGetBrands($ifMatch, $ifNoneMatch, $ifModifiedSince, $ifUnmodifiedSince, $page, $limit): \OpenAPI\Client\Otto\Model\BrandListResponseProductsV5SandboxOnly
```

List of allowed brands

Read the list of brands that are known on the Otto market place. The list of brands will be paginated. Brands consist of a name, a brand Id, a (link to a) logo and a boolean useable that lets you know wheter you are allowed to set up variants with this brand on the Otto Marketplace. The default page length is 100 entries per response, the page size upper limit is 1000. The links specified in the result can be used to page through the total result space. Note that there will be no prev link on the first page and no next link on the last page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV5Api(
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
    $result = $apiInstance->productsV5SandboxOnlyGetBrands($ifMatch, $ifNoneMatch, $ifModifiedSince, $ifUnmodifiedSince, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5SandboxOnlyGetBrands: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Otto\Model\BrandListResponseProductsV5SandboxOnly**](../Model/BrandListResponseProductsV5SandboxOnly.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5SandboxOnlyGetCategoryGroups()`

```php
productsV5SandboxOnlyGetCategoryGroups($page, $limit, $category): \OpenAPI\Client\Otto\Model\CategoryGroupsProductsV5SandboxOnly
```

Read product categories

Returns product categories and associated attributes of the OTTO market place. The total number of results could be limited by specifying query parameters. Generally the resulting product categories values will be paginated. The default page length is 100 product categories per response, the page size limit is 2000. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | the number (starting with 0) of the page, that should be delivered.
$limit = 56; // int | proposed limit for the number of product categories per response page  (at most 2000)
$category = 'category_example'; // string | read a single category

try {
    $result = $apiInstance->productsV5SandboxOnlyGetCategoryGroups($page, $limit, $category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5SandboxOnlyGetCategoryGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| the number (starting with 0) of the page, that should be delivered. | [optional] |
| **limit** | **int**| proposed limit for the number of product categories per response page  (at most 2000) | [optional] |
| **category** | **string**| read a single category | [optional] |

### Return type

[**\OpenAPI\Client\Otto\Model\CategoryGroupsProductsV5SandboxOnly**](../Model/CategoryGroupsProductsV5SandboxOnly.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5SandboxOnlyGetContentChanges()`

```php
productsV5SandboxOnlyGetContentChanges($sku, $fromDate, $page, $limit): \OpenAPI\Client\Otto\Model\ContentChangesApiResultProductsV5SandboxOnly
```

Read content changes for a single product variation

Returns the content changes info for a single product variation within a specific time period. The resulting content changes will be paginated. The default page length is 100 entries per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV5Api(
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
    $result = $apiInstance->productsV5SandboxOnlyGetContentChanges($sku, $fromDate, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5SandboxOnlyGetContentChanges: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Otto\Model\ContentChangesApiResultProductsV5SandboxOnly**](../Model/ContentChangesApiResultProductsV5SandboxOnly.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5SandboxOnlyGetContentChanges2()`

```php
productsV5SandboxOnlyGetContentChanges2($sku, $fromDate, $page, $limit): \OpenAPI\Client\Otto\Model\ContentChangesApiResultProductsV5SandboxOnly
```

Read content changes within time period

Read the content changes for all your product variations within a specific time period. You can also use this endpoint to read the content changes for more than one variation or if the sku value contains slash ('/') or dot ('.') characters, so that you cannot use the other endpoint with one dedicated sku value in the path. The resulting content changes will be paginated. The default page length is 100 entries per response, which also is the page size upper limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV5Api(
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
    $result = $apiInstance->productsV5SandboxOnlyGetContentChanges2($sku, $fromDate, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5SandboxOnlyGetContentChanges2: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Otto\Model\ContentChangesApiResultProductsV5SandboxOnly**](../Model/ContentChangesApiResultProductsV5SandboxOnly.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5SandboxOnlyGetMarketPlaceStatus()`

```php
productsV5SandboxOnlyGetMarketPlaceStatus($sku): \OpenAPI\Client\Otto\Model\MarketPlaceStatusProductsV5SandboxOnly
```

Read marketplace status for a single product variation

Returns marketplace status for a single product variation by SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for a marketplace status by its SKU value

try {
    $result = $apiInstance->productsV5SandboxOnlyGetMarketPlaceStatus($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5SandboxOnlyGetMarketPlaceStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for a marketplace status by its SKU value | |

### Return type

[**\OpenAPI\Client\Otto\Model\MarketPlaceStatusProductsV5SandboxOnly**](../Model/MarketPlaceStatusProductsV5SandboxOnly.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5SandboxOnlyGetMarketPlaceStatusList()`

```php
productsV5SandboxOnlyGetMarketPlaceStatusList($sku, $productReference, $category, $brandId, $fromDate, $page, $limit, $marketPlaceStatus, $sortOrder): \OpenAPI\Client\Otto\Model\MarketPlaceStatusApiResultProductsV5SandboxOnly
```

Read marketplace status of product variations

The total number of results could be limited by specifying query parameters. Generally the resulting marketplace status will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV5Api(
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
    $result = $apiInstance->productsV5SandboxOnlyGetMarketPlaceStatusList($sku, $productReference, $category, $brandId, $fromDate, $page, $limit, $marketPlaceStatus, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5SandboxOnlyGetMarketPlaceStatusList: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Otto\Model\MarketPlaceStatusApiResultProductsV5SandboxOnly**](../Model/MarketPlaceStatusApiResultProductsV5SandboxOnly.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5SandboxOnlyGetPartnerProducts()`

```php
productsV5SandboxOnlyGetPartnerProducts($sku, $productReference, $category, $brandId, $page, $limit): \OpenAPI\Client\Otto\Model\ProductVariationApiResultProductsV5SandboxOnly
```

Read product variations

The total number of results could be limited by specifying query parameters. Generally the resulting product variations will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV5Api(
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
    $result = $apiInstance->productsV5SandboxOnlyGetPartnerProducts($sku, $productReference, $category, $brandId, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5SandboxOnlyGetPartnerProducts: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Otto\Model\ProductVariationApiResultProductsV5SandboxOnly**](../Model/ProductVariationApiResultProductsV5SandboxOnly.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5SandboxOnlyGetProductVariation()`

```php
productsV5SandboxOnlyGetProductVariation($sku): \OpenAPI\Client\Otto\Model\ProductVariationProductsV5SandboxOnly
```

Read a single product variation

Returns a single product variation by SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for a product variation by its SKU value

try {
    $result = $apiInstance->productsV5SandboxOnlyGetProductVariation($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5SandboxOnlyGetProductVariation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for a product variation by its SKU value | |

### Return type

[**\OpenAPI\Client\Otto\Model\ProductVariationProductsV5SandboxOnly**](../Model/ProductVariationProductsV5SandboxOnly.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5SandboxOnlyGetProductVariationPrice()`

```php
productsV5SandboxOnlyGetProductVariationPrice($sku): \OpenAPI\Client\Otto\Model\SkuPricingProductsV5SandboxOnly
```

Read a single product variation price

Read the price data of a single product variation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for a product variation by its SKU value

try {
    $result = $apiInstance->productsV5SandboxOnlyGetProductVariationPrice($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5SandboxOnlyGetProductVariationPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for a product variation by its SKU value | |

### Return type

[**\OpenAPI\Client\Otto\Model\SkuPricingProductsV5SandboxOnly**](../Model/SkuPricingProductsV5SandboxOnly.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5SandboxOnlyGetProductVariationPrices()`

```php
productsV5SandboxOnlyGetProductVariationPrices($sku, $productReference, $category, $brandId, $page, $limit): \OpenAPI\Client\Otto\Model\PriceApiResultProductsV5SandboxOnly
```

Read product variations prices

Read your product variations prices. The total number of results could be limited by specifying query parameters. Generally the resulting product variations will be paginated. The default page length is 100 product variations per response, also the page size limit. The links specified in the result can be used to page through the total result space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV5Api(
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
    $result = $apiInstance->productsV5SandboxOnlyGetProductVariationPrices($sku, $productReference, $category, $brandId, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5SandboxOnlyGetProductVariationPrices: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Otto\Model\PriceApiResultProductsV5SandboxOnly**](../Model/PriceApiResultProductsV5SandboxOnly.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5SandboxOnlyGetVariationActiveStatus()`

```php
productsV5SandboxOnlyGetVariationActiveStatus($sku): \OpenAPI\Client\Otto\Model\ActiveStatusProductsV5SandboxOnly
```

Read the active status of a single product variation

Returns active status of the requested product variation by SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = 'sku_example'; // string | search for a product variation by its SKU value

try {
    $result = $apiInstance->productsV5SandboxOnlyGetVariationActiveStatus($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5SandboxOnlyGetVariationActiveStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku** | **string**| search for a product variation by its SKU value | |

### Return type

[**\OpenAPI\Client\Otto\Model\ActiveStatusProductsV5SandboxOnly**](../Model/ActiveStatusProductsV5SandboxOnly.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5SandboxOnlyProgressByProcessId()`

```php
productsV5SandboxOnlyProgressByProcessId($processUuid): \OpenAPI\Client\Otto\Model\ProductProcessProgressProductsV5SandboxOnly
```

Request the results of a product data delivery

The response will contain the links for the different parts of the result: products successfully created or updated, products with failures, products which did not contain any changes compared to the last sent version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processUuid = 'processUuid_example'; // string | search for a product data delivery result by its processUuid.

try {
    $result = $apiInstance->productsV5SandboxOnlyProgressByProcessId($processUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5SandboxOnlyProgressByProcessId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **processUuid** | **string**| search for a product data delivery result by its processUuid. | |

### Return type

[**\OpenAPI\Client\Otto\Model\ProductProcessProgressProductsV5SandboxOnly**](../Model/ProductProcessProgressProductsV5SandboxOnly.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5SandboxOnlySucceededByProcessId()`

```php
productsV5SandboxOnlySucceededByProcessId($processUuid): \OpenAPI\Client\Otto\Model\ProductProcessResultProductsV5SandboxOnly
```

List succeeded products of a product data delivery

Request the succeeded products of the product data delivery with the linked processUuid. The response will contain a list of successfully delivered products.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processUuid = 'processUuid_example'; // string | search for the succeeded products of a product data delivery identified by its processUuid.

try {
    $result = $apiInstance->productsV5SandboxOnlySucceededByProcessId($processUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5SandboxOnlySucceededByProcessId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **processUuid** | **string**| search for the succeeded products of a product data delivery identified by its processUuid. | |

### Return type

[**\OpenAPI\Client\Otto\Model\ProductProcessResultProductsV5SandboxOnly**](../Model/ProductProcessResultProductsV5SandboxOnly.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5SandboxOnlyUnchangedByProcessId()`

```php
productsV5SandboxOnlyUnchangedByProcessId($processUuid): \OpenAPI\Client\Otto\Model\ProductProcessResultProductsV5SandboxOnly
```

List unchanged products of a product data delivery

Request the unchanged products of the product data delivery with the linked processUuid. The response will contain a list of unchanged products.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processUuid = 'processUuid_example'; // string | search for the unchanged products of a product data delivery identified by its processUuid.

try {
    $result = $apiInstance->productsV5SandboxOnlyUnchangedByProcessId($processUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5SandboxOnlyUnchangedByProcessId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **processUuid** | **string**| search for the unchanged products of a product data delivery identified by its processUuid. | |

### Return type

[**\OpenAPI\Client\Otto\Model\ProductProcessResultProductsV5SandboxOnly**](../Model/ProductProcessResultProductsV5SandboxOnly.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5SandboxOnlyUpdateActiveStatus()`

```php
productsV5SandboxOnlyUpdateActiveStatus($xRequestTimestamp, $activeStatusListRequestProductsV5SandboxOnly): \OpenAPI\Client\Otto\Model\ProductProcessProgressProductsV5SandboxOnly
```

Update active status

Returns a process-id to query results. The limit for the number of product active statuses in one request is 500.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xRequestTimestamp = 2000-10-31T01:30:10.000-05:00; // string | Holds the optional client side update request timestamp, in ISO DateTime format
$activeStatusListRequestProductsV5SandboxOnly = new \OpenAPI\Client\Otto\Model\ActiveStatusListRequestProductsV5SandboxOnly(); // \OpenAPI\Client\Otto\Model\ActiveStatusListRequestProductsV5SandboxOnly

try {
    $result = $apiInstance->productsV5SandboxOnlyUpdateActiveStatus($xRequestTimestamp, $activeStatusListRequestProductsV5SandboxOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5SandboxOnlyUpdateActiveStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xRequestTimestamp** | **string**| Holds the optional client side update request timestamp, in ISO DateTime format | [optional] |
| **activeStatusListRequestProductsV5SandboxOnly** | [**\OpenAPI\Client\Otto\Model\ActiveStatusListRequestProductsV5SandboxOnly**](../Model/ActiveStatusListRequestProductsV5SandboxOnly.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Otto\Model\ProductProcessProgressProductsV5SandboxOnly**](../Model/ProductProcessProgressProductsV5SandboxOnly.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsV5SandboxOnlyUpdateProductVariationPrices()`

```php
productsV5SandboxOnlyUpdateProductVariationPrices($xRequestTimestamp, $skuPricingProductsV5SandboxOnly): \OpenAPI\Client\Otto\Model\ProductProcessProgressProductsV5SandboxOnly
```

Update product variation prices

Update your product variation prices and get a process-id to query results. The limit for the number of product variation prices in one request is 500.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ProductsV5Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xRequestTimestamp = 2000-10-31T01:30:10.000-05:00; // string | Holds the optional client side update request timestamp, in ISO DateTime format
$skuPricingProductsV5SandboxOnly = array(new \OpenAPI\Client\Otto\Model\SkuPricingProductsV5SandboxOnly()); // \OpenAPI\Client\Otto\Model\SkuPricingProductsV5SandboxOnly[]

try {
    $result = $apiInstance->productsV5SandboxOnlyUpdateProductVariationPrices($xRequestTimestamp, $skuPricingProductsV5SandboxOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsV5Api->productsV5SandboxOnlyUpdateProductVariationPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **xRequestTimestamp** | **string**| Holds the optional client side update request timestamp, in ISO DateTime format | [optional] |
| **skuPricingProductsV5SandboxOnly** | [**\OpenAPI\Client\Otto\Model\SkuPricingProductsV5SandboxOnly[]**](../Model/SkuPricingProductsV5SandboxOnly.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Otto\Model\ProductProcessProgressProductsV5SandboxOnly**](../Model/ProductProcessProgressProductsV5SandboxOnly.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
