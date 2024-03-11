# OpenAPI\Client\Otto\ShipmentsV1Api

All URIs are relative to https://api.otto.market, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**shipmentsV1AppendPositionItemsByCarrierAndTrackingNumberUsingPOST()**](ShipmentsV1Api.md#shipmentsV1AppendPositionItemsByCarrierAndTrackingNumberUsingPOST) | **POST** /v1/shipments/carriers/{carrier}/trackingnumbers/{trackingNumber}/positionitems | Correct an existing shipment (add sent items) by carrier and tracking number. |
| [**shipmentsV1AppendPositionItemsUsingPOST()**](ShipmentsV1Api.md#shipmentsV1AppendPositionItemsUsingPOST) | **POST** /v1/shipments/{shipmentId}/positionitems | Correct an existing shipment (add sent items) by shipment ID. |
| [**shipmentsV1CreatedAndSentMultiparcelShipmentUsingPOST()**](ShipmentsV1Api.md#shipmentsV1CreatedAndSentMultiparcelShipmentUsingPOST) | **POST** /v1/multiparcel-shipments | Create a multiparcel shipment and mark the position items as sent. |
| [**shipmentsV1CreatedAndSentShipmentUsingPOST()**](ShipmentsV1Api.md#shipmentsV1CreatedAndSentShipmentUsingPOST) | **POST** /v1/shipments | Create a shipment and mark the position items as sent. |
| [**shipmentsV1ListShipmentsUsingGET()**](ShipmentsV1Api.md#shipmentsV1ListShipmentsUsingGET) | **GET** /v1/shipments | Retrieve shipments. |
| [**shipmentsV1ShipmentByCarrierAndTrackingNumberUsingGET()**](ShipmentsV1Api.md#shipmentsV1ShipmentByCarrierAndTrackingNumberUsingGET) | **GET** /v1/shipments/carriers/{carrier}/trackingnumbers/{trackingNumber} | Retrieve shipment by carrier and tracking number. |
| [**shipmentsV1ShipmentUsingGET()**](ShipmentsV1Api.md#shipmentsV1ShipmentUsingGET) | **GET** /v1/shipments/{shipmentId} | Retrieve shipment by shipment ID. |


## `shipmentsV1AppendPositionItemsByCarrierAndTrackingNumberUsingPOST()`

```php
shipmentsV1AppendPositionItemsByCarrierAndTrackingNumberUsingPOST($carrier, $trackingNumber, $positionItemShipmentsV1)
```

Correct an existing shipment (add sent items) by carrier and tracking number.

This endpoint allows to update an existing shipment with new position items. Note that this is just a correction process for shipments where position items are missing. A separate purchase receipt will be generated for the newly added position items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ShipmentsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier = 'carrier_example'; // string | The carrier of the shipment.
$trackingNumber = 'trackingNumber_example'; // string | The tracking number of the shipment assigned by the carrier.
$positionItemShipmentsV1 = array(new \OpenAPI\Client\Otto\Model\PositionItemShipmentsV1()); // \OpenAPI\Client\Otto\Model\PositionItemShipmentsV1[] | The position items included in shipment.

try {
    $apiInstance->shipmentsV1AppendPositionItemsByCarrierAndTrackingNumberUsingPOST($carrier, $trackingNumber, $positionItemShipmentsV1);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsV1Api->shipmentsV1AppendPositionItemsByCarrierAndTrackingNumberUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **carrier** | **string**| The carrier of the shipment. | |
| **trackingNumber** | **string**| The tracking number of the shipment assigned by the carrier. | |
| **positionItemShipmentsV1** | [**\OpenAPI\Client\Otto\Model\PositionItemShipmentsV1[]**](../Model/PositionItemShipmentsV1.md)| The position items included in shipment. | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipmentsV1AppendPositionItemsUsingPOST()`

```php
shipmentsV1AppendPositionItemsUsingPOST($shipmentId, $positionItemShipmentsV1)
```

Correct an existing shipment (add sent items) by shipment ID.

This endpoint allows to update an existing shipment with new position items. Note that this is just a correction process for shipments where position items are missing. A separate purchase receipt will be generated for the newly added position items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ShipmentsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipmentId = 'shipmentId_example'; // string | Internal shipment identifier assigned by OTTO Market.
$positionItemShipmentsV1 = array(new \OpenAPI\Client\Otto\Model\PositionItemShipmentsV1()); // \OpenAPI\Client\Otto\Model\PositionItemShipmentsV1[] | positionItems

try {
    $apiInstance->shipmentsV1AppendPositionItemsUsingPOST($shipmentId, $positionItemShipmentsV1);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsV1Api->shipmentsV1AppendPositionItemsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipmentId** | **string**| Internal shipment identifier assigned by OTTO Market. | |
| **positionItemShipmentsV1** | [**\OpenAPI\Client\Otto\Model\PositionItemShipmentsV1[]**](../Model/PositionItemShipmentsV1.md)| positionItems | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipmentsV1CreatedAndSentMultiparcelShipmentUsingPOST()`

```php
shipmentsV1CreatedAndSentMultiparcelShipmentUsingPOST($createShipmentRequestShipmentsV1): \OpenAPI\Client\Otto\Model\CreateMultiparcelShipmentResponseShipmentsV1
```

Create a multiparcel shipment and mark the position items as sent.

This endpoint should be used to create a multiparcel shipment with a list of parcels for one position item. A shipment is a \"multiparcel shipment\" if one article (position item) is sent in several different shipments. Each shipment has its own tracking key. It confirms that the position item in the list has been handed over to the carrier for final delivery to the customer. At this point, the position item is marked with the state ''SENT'' in OTTO Market. This is the trigger for the generation of a purchase receipt.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ShipmentsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createShipmentRequestShipmentsV1 = array(new \OpenAPI\Client\Otto\Model\CreateShipmentRequestShipmentsV1()); // \OpenAPI\Client\Otto\Model\CreateShipmentRequestShipmentsV1[] | request

try {
    $result = $apiInstance->shipmentsV1CreatedAndSentMultiparcelShipmentUsingPOST($createShipmentRequestShipmentsV1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsV1Api->shipmentsV1CreatedAndSentMultiparcelShipmentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createShipmentRequestShipmentsV1** | [**\OpenAPI\Client\Otto\Model\CreateShipmentRequestShipmentsV1[]**](../Model/CreateShipmentRequestShipmentsV1.md)| request | |

### Return type

[**\OpenAPI\Client\Otto\Model\CreateMultiparcelShipmentResponseShipmentsV1**](../Model/CreateMultiparcelShipmentResponseShipmentsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipmentsV1CreatedAndSentShipmentUsingPOST()`

```php
shipmentsV1CreatedAndSentShipmentUsingPOST($createShipmentRequestShipmentsV1): \OpenAPI\Client\Otto\Model\CreateShipmentResponseShipmentsV1
```

Create a shipment and mark the position items as sent.

This endpoint should be used to create a shipment with a list of position items. It confirms that the position items in the list have been handed over to the carrier for final delivery to the customer. At this point, the position items are marked with the state ''SENT'' in OTTO Market. This is the trigger for the generation of a purchase receipt.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ShipmentsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createShipmentRequestShipmentsV1 = new \OpenAPI\Client\Otto\Model\CreateShipmentRequestShipmentsV1(); // \OpenAPI\Client\Otto\Model\CreateShipmentRequestShipmentsV1 | request

try {
    $result = $apiInstance->shipmentsV1CreatedAndSentShipmentUsingPOST($createShipmentRequestShipmentsV1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsV1Api->shipmentsV1CreatedAndSentShipmentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createShipmentRequestShipmentsV1** | [**\OpenAPI\Client\Otto\Model\CreateShipmentRequestShipmentsV1**](../Model/CreateShipmentRequestShipmentsV1.md)| request | |

### Return type

[**\OpenAPI\Client\Otto\Model\CreateShipmentResponseShipmentsV1**](../Model/CreateShipmentResponseShipmentsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipmentsV1ListShipmentsUsingGET()`

```php
shipmentsV1ListShipmentsUsingGET($datefrom, $limit, $next): \OpenAPI\Client\Otto\Model\ShipmentListShipmentsV1
```

Retrieve shipments.

This endpoint can be used to retrieve the shipments for a given authorized partner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ShipmentsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datefrom = 'datefrom_example'; // string | Shipments created from this date onwards for the given authorized partner will be returned. Can be specified as either an ISO date (`YYYY-MM-DD`), which will be inferred to be in UTC time, or an ISO date time (`YYYY-MM-DD'T'HH:mm:ss.SSSXXX`).  For example, `2024-01-10` would be interpreted the same as `2024-01-10T00:00:00Z`.
$limit = 25; // int | The maximum number of shipments to be returned in each response.
$next = 'next_example'; // string | The cursor which points to the next shipment that should be queried. It is used to paginate the results.

try {
    $result = $apiInstance->shipmentsV1ListShipmentsUsingGET($datefrom, $limit, $next);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsV1Api->shipmentsV1ListShipmentsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **datefrom** | **string**| Shipments created from this date onwards for the given authorized partner will be returned. Can be specified as either an ISO date (&#x60;YYYY-MM-DD&#x60;), which will be inferred to be in UTC time, or an ISO date time (&#x60;YYYY-MM-DD&#39;T&#39;HH:mm:ss.SSSXXX&#x60;).  For example, &#x60;2024-01-10&#x60; would be interpreted the same as &#x60;2024-01-10T00:00:00Z&#x60;. | |
| **limit** | **int**| The maximum number of shipments to be returned in each response. | [optional] [default to 25] |
| **next** | **string**| The cursor which points to the next shipment that should be queried. It is used to paginate the results. | [optional] |

### Return type

[**\OpenAPI\Client\Otto\Model\ShipmentListShipmentsV1**](../Model/ShipmentListShipmentsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipmentsV1ShipmentByCarrierAndTrackingNumberUsingGET()`

```php
shipmentsV1ShipmentByCarrierAndTrackingNumberUsingGET($carrier, $trackingNumber): \OpenAPI\Client\Otto\Model\ShipmentShipmentsV1
```

Retrieve shipment by carrier and tracking number.

This endpoint can be used to retrieve a shipment by carrier and tracking number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ShipmentsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrier = 'carrier_example'; // string | The carrier of the shipment.
$trackingNumber = 'trackingNumber_example'; // string | The tracking number of the shipment assigned by the carrier.

try {
    $result = $apiInstance->shipmentsV1ShipmentByCarrierAndTrackingNumberUsingGET($carrier, $trackingNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsV1Api->shipmentsV1ShipmentByCarrierAndTrackingNumberUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **carrier** | **string**| The carrier of the shipment. | |
| **trackingNumber** | **string**| The tracking number of the shipment assigned by the carrier. | |

### Return type

[**\OpenAPI\Client\Otto\Model\ShipmentShipmentsV1**](../Model/ShipmentShipmentsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipmentsV1ShipmentUsingGET()`

```php
shipmentsV1ShipmentUsingGET($shipmentId): \OpenAPI\Client\Otto\Model\ShipmentShipmentsV1
```

Retrieve shipment by shipment ID.

This endpoint can be used to retrieve a shipment by OTTO internal shipment ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Otto\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Otto\Api\ShipmentsV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipmentId = 'shipmentId_example'; // string | Internal shipment identifier assigned by OTTO Market.

try {
    $result = $apiInstance->shipmentsV1ShipmentUsingGET($shipmentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsV1Api->shipmentsV1ShipmentUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipmentId** | **string**| Internal shipment identifier assigned by OTTO Market. | |

### Return type

[**\OpenAPI\Client\Otto\Model\ShipmentShipmentsV1**](../Model/ShipmentShipmentsV1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
