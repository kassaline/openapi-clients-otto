# # CreateShippingProfileRequestShippingProfilesV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shippingProfileName** | **string** | ShippingProfileName allows the partner to assign a descriptive and unique name  for a shipping profile |
**workingDays** | **string[]** | WorkingDays describe the specific days of the week on which the partner is available to process orders |
**orderCutoff** | **string** | OrderCutoff specifies the time for orders to be placed, so the ProcessingTime starts within the same day. &lt;br&gt; This must be in half hour duration in (HH:MM) 24 hours format. The cut-off time must be specified in CET time. |
**deliveryType** | **string** | DeliveryType describes how the product is being shipped. At the moment we support the enums shown above |
**defaultProcessingTime** | **int** | DefaultProcessingTime describes the time the partner needs to prepare the order for a shipment. Must be between 1 to 99. &lt;br&gt; If more than 72 days are transmitted in the DefaultProcessingTime, the product is marked as sold out on otto.de and cannot be ordered. &lt;br&gt; This is also the case if the DefaultProcessingTime and TransportTime add up to a value greater than 72. \&quot;1\&quot; day is considered as same-day shipping (0 days) until the cut-off time is reached. |
**transportTime** | **int** | TransportTime describes the time the carrier needs from collecting the order from partners warehouse until the first delivery attempt. Must be between 1 to 99. &lt;br&gt; If more than 72 days are transmitted in the TransportTime, the product is marked as sold out on otto.de and cannot be ordered. &lt;br&gt; This is also the case if the DefaultProcessingTime and TransportTime add up to a value greater than 72. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
