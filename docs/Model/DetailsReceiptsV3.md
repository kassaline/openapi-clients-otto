# # DetailsReceiptsV3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Additional info often printed on the pdf for a PriceModification object (on German receipts always in German)&lt;/br&gt; If PriceModification object is of type: * **PARTNER_DISCOUNT** - discount name, provided with sales order event as part of positionGroupPrice: (What we print on the pdf ): e.g.  \&quot;1 € Rabatt\&quot; * **DEFECT_COMPENSATION** - ( German translation of defect compensation)  \&quot;**Mängelausgleich**\&quot; * **REFUND_COMPLAINT_ITEM** - hard coded \&quot;Preisnachlass Reklamation Artikel\&quot; |
**id** | **string** | Discount code applied to the order to get a reduction. Available when reduction is of type PARTNER_DISCOUNT | [optional]
**linkedReceiptNumber** | **string** | Allows to link an earlier purchase or (partial)refund receipt by human-readable identifier. &lt;/br&gt;If PriceModification object is of type: * **DEFECT_COMPENSATION**: In case of previous (partial) refunds this field contains the human-readable identifier of the partial refund with which the previous refund was made | [optional]
**linkedReceiptCreationDate** | **\DateTime** | Allows to show creation date of linked earlier purchase or (partial)refund receipt. &lt;/br&gt;If PriceModification object is of type: * **DEFECT_COMPENSATION**: In case of previous (partial) refunds this field contains the creation date of linked receipt with which the previous refund was made. (ISO-8601 format) | [optional]
**type** | **string** | The specific types of discounts provided for Marketplace. This field is only applicable when the priceModificationType for the item is PARTNER_DISCOUNT &lt;/br&gt;Possible values: * **PARTNER_DISCOUNT** - a Partner Discount provided because of a booked service \&quot;Rabattaktion\&quot; by the partner * **PLATFORM_DISCOUNT** - a Discount for a platform frame provided because of a booked service \&quot;Marktplatz Rabattaktion\&quot; by the partner | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
