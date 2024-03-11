# OpenAPI\Client\Otto\OrdersV4Api

All URIs are relative to https://api.otto.market, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ordersV4CancelPartnerOrderPositionItems()**](OrdersV4Api.md#ordersV4CancelPartnerOrderPositionItems) | **POST** /v4/orders/{salesOrderId}/positionItems/{positionItemIds}/cancellation | Cancel specific position items of an order |
| [**ordersV4CancelPartnerOrders()**](OrdersV4Api.md#ordersV4CancelPartnerOrders) | **POST** /v4/orders/{salesOrderId}/cancellation | Cancel all position items of an order |
| [**ordersV4FindPartnerOrders()**](OrdersV4Api.md#ordersV4FindPartnerOrders) | **GET** /v4/orders | List of orders filtered by fulfillment state |
| [**ordersV4GetPartnerOrderByOrderNumber()**](OrdersV4Api.md#ordersV4GetPartnerOrderByOrderNumber) | **GET** /v4/orders/{orderNumber} | Get an order via order number |
| [**ordersV4GetPartnerOrderBySalesOrderId()**](OrdersV4Api.md#ordersV4GetPartnerOrderBySalesOrderId) | **GET** /v4/orders/{salesOrderId} | Get an order via sales order id |


## `ordersV4CancelPartnerOrderPositionItems()`

```php
ordersV4CancelPartnerOrderPositionItems($salesOrderId, $positionItemIds)
```

Cancel specific position items of an order

Allows to cancel specific position items of an order by salesOrderId and positionItemIds.<br>Note: Only position items in state PROCESSABLE can be cancelled. Position items in state CANCELLED_BY_PARTNER will be ignored. If any position item is in a different state the operation will leave the whole order unchanged and respond with a conflict error message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\OrdersV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$salesOrderId = 'salesOrderId_example'; // string | The salesOrderId of the order
$positionItemIds = array('positionItemIds_example'); // string[] | The positionItemIds of the order to cancel

try {
    $apiInstance->ordersV4CancelPartnerOrderPositionItems($salesOrderId, $positionItemIds);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV4Api->ordersV4CancelPartnerOrderPositionItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **salesOrderId** | **string**| The salesOrderId of the order | |
| **positionItemIds** | [**string[]**](../Model/string.md)| The positionItemIds of the order to cancel | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersV4CancelPartnerOrders()`

```php
ordersV4CancelPartnerOrders($salesOrderId)
```

Cancel all position items of an order

Allows to cancel all position items of one or more orders by salesOrderId.<br>Note: Only position items in state PROCESSABLE can be cancelled. Position items in different states will be ignored. If no position item can be cancelled the operation will respond with a conflict error message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\OrdersV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$salesOrderId = array('salesOrderId_example'); // string[] | The salesOrderIds of the orders to cancel

try {
    $apiInstance->ordersV4CancelPartnerOrders($salesOrderId);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV4Api->ordersV4CancelPartnerOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **salesOrderId** | [**string[]**](../Model/string.md)| The salesOrderIds of the orders to cancel | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersV4FindPartnerOrders()`

```php
ordersV4FindPartnerOrders($fromDate, $fromOrderDate, $toOrderDate, $fulfillmentStatus, $limit, $orderDirection, $orderColumnType, $mode, $nextcursor): \OpenAPI\Client\Otto\Model\PartnerOrderListOrdersV4
```

List of orders filtered by fulfillment state

Retrieve orders sorted by order date from oldest to newest. The number of returned orders is limited to 128; cursor based pagination is supported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\OrdersV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = 2019-08-01T01:00:00+02:00; // string | Defines earliest change date (ISO 8601) the returned orders should have
$fromOrderDate = 2020-07-01T00:00:00+02:00; // string | Only orders newer than the date specified (ISO 8601) will be returned
$toOrderDate = 2020-07-01T23:59:59+02:00; // string | Only orders older than the date specified (ISO 8601) will be returned
$fulfillmentStatus = PROCESSABLE&fulfillmentStatus=CANCELLED_BY_MARKETPLACE; // string | <br>ANNOUNCED: Orders with at least one position item in state ANNOUNCED<br>PROCESSABLE: Orders with at least one position item in state PROCESSABLE and none in ANNOUNCED<br>SENT: Orders with at least one position item in state SENT and none in either ANNOUNCED or PROCESSABLE<br>RETURNED: Orders with at least one position item in state RETURNED and none in either ANNOUNCED, PROCESSABLE, or SENT<br>CANCELLED_BY_PARTNER: Orders with at least one position item in state CANCELLED_BY_PARTNER<br>CANCELLED_BY_MARKETPLACE: Orders with at least one position item in state CANCELLED_BY_MARKETPLACE<br><br>If no state is provided, orders in all possible states are returned.<br>Several values can be passed; it will return a combination of these states without duplicates.<br>Also see parameter 'mode'.
$limit = 128; // int | The maximum amount of orders to return
$orderDirection = 'ASC'; // string | Sort result by 'orderColumnType' in ASCending or DESCending order
$orderColumnType = 'ORDER_LIFECYCLE_DATE'; // string | The column on which to apply 'orderDirection' parameter
$mode = 'BUCKET'; // string | In search mode AT_LEAST_ONE orders with at least one  position item in given 'fulfillmentStatus' will always be returned
$nextcursor = eyJmZiI6MTU5NDg5NDQ3MTA1OCwicGlmIjoiNDcxM; // string | Cursor for paging requests. If a next cursor is provided, the only other request parameter being considered is 'limit'<br><br>Note: Only the cursor string is required - not the whole link

try {
    $result = $apiInstance->ordersV4FindPartnerOrders($fromDate, $fromOrderDate, $toOrderDate, $fulfillmentStatus, $limit, $orderDirection, $orderColumnType, $mode, $nextcursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV4Api->ordersV4FindPartnerOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **string**| Defines earliest change date (ISO 8601) the returned orders should have | [optional] |
| **fromOrderDate** | **string**| Only orders newer than the date specified (ISO 8601) will be returned | [optional] |
| **toOrderDate** | **string**| Only orders older than the date specified (ISO 8601) will be returned | [optional] |
| **fulfillmentStatus** | **string**| &lt;br&gt;ANNOUNCED: Orders with at least one position item in state ANNOUNCED&lt;br&gt;PROCESSABLE: Orders with at least one position item in state PROCESSABLE and none in ANNOUNCED&lt;br&gt;SENT: Orders with at least one position item in state SENT and none in either ANNOUNCED or PROCESSABLE&lt;br&gt;RETURNED: Orders with at least one position item in state RETURNED and none in either ANNOUNCED, PROCESSABLE, or SENT&lt;br&gt;CANCELLED_BY_PARTNER: Orders with at least one position item in state CANCELLED_BY_PARTNER&lt;br&gt;CANCELLED_BY_MARKETPLACE: Orders with at least one position item in state CANCELLED_BY_MARKETPLACE&lt;br&gt;&lt;br&gt;If no state is provided, orders in all possible states are returned.&lt;br&gt;Several values can be passed; it will return a combination of these states without duplicates.&lt;br&gt;Also see parameter &#39;mode&#39;. | [optional] |
| **limit** | **int**| The maximum amount of orders to return | [optional] [default to 128] |
| **orderDirection** | **string**| Sort result by &#39;orderColumnType&#39; in ASCending or DESCending order | [optional] [default to &#39;ASC&#39;] |
| **orderColumnType** | **string**| The column on which to apply &#39;orderDirection&#39; parameter | [optional] [default to &#39;ORDER_LIFECYCLE_DATE&#39;] |
| **mode** | **string**| In search mode AT_LEAST_ONE orders with at least one  position item in given &#39;fulfillmentStatus&#39; will always be returned | [optional] [default to &#39;BUCKET&#39;] |
| **nextcursor** | **string**| Cursor for paging requests. If a next cursor is provided, the only other request parameter being considered is &#39;limit&#39;&lt;br&gt;&lt;br&gt;Note: Only the cursor string is required - not the whole link | [optional] |

### Return type

[**\OpenAPI\Client\Otto\Model\PartnerOrderListOrdersV4**](../Model/PartnerOrderListOrdersV4.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersV4GetPartnerOrderByOrderNumber()`

```php
ordersV4GetPartnerOrderByOrderNumber($orderNumber): \OpenAPI\Client\Otto\Model\PartnerOrderOrdersV4
```

Get an order via order number

Fetch a single order by its unique order number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\OrdersV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderNumber = 'orderNumber_example'; // string

try {
    $result = $apiInstance->ordersV4GetPartnerOrderByOrderNumber($orderNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV4Api->ordersV4GetPartnerOrderByOrderNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderNumber** | **string**|  | |

### Return type

[**\OpenAPI\Client\Otto\Model\PartnerOrderOrdersV4**](../Model/PartnerOrderOrdersV4.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersV4GetPartnerOrderBySalesOrderId()`

```php
ordersV4GetPartnerOrderBySalesOrderId($salesOrderId): \OpenAPI\Client\Otto\Model\PartnerOrderOrdersV4
```

Get an order via sales order id

Fetch a single order by its unique sales order id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\OrdersV4Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$salesOrderId = 'salesOrderId_example'; // string

try {
    $result = $apiInstance->ordersV4GetPartnerOrderBySalesOrderId($salesOrderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV4Api->ordersV4GetPartnerOrderBySalesOrderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **salesOrderId** | **string**|  | |

### Return type

[**\OpenAPI\Client\Otto\Model\PartnerOrderOrdersV4**](../Model/PartnerOrderOrdersV4.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
