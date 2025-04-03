# # GetShippingProfileResponseShippingProfilesV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shippingProfileId** | **string** | Unique identifier for each shipping profile |
**shippingProfileName** | **string** | The name of the shipping profile |
**workingDays** | **string[]** | The days of the week on which the partner is available to process orders |
**orderCutoff** | **string** | OrderCutoff specifies the time for orders to be placed, so the ProcessingTime starts within the same day. &lt;br&gt; This must be in half hour duration in (HH:MM) 24 hours format and in CET time. |
**deliveryType** | **string** | DeliveryType describes how the product is being shipped. At the moment we support the enums shown above |
**defaultProcessingTime** | **int** | DefaultProcessingTime describes the time the partner needs to prepare the order for a shipment. |
**transportTime** | **int** | The time the carrier needs from collecting the order from partners warehouse till the first delivery attempt. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
