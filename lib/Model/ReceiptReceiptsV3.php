<?php
/**
 * ReceiptReceiptsV3
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client\Otto
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OTTO Market API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Otto\Model;

use \ArrayAccess;
use \OpenAPI\Client\Otto\ObjectSerializer;

/**
 * ReceiptReceiptsV3 Class Doc Comment
 *
 * @category Class
 * @description Collection of all details of a receipt
 * @package  OpenAPI\Client\Otto
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReceiptReceiptsV3 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Receipt__Receipts-V3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'receiptType' => 'string',
        'isRealReceipt' => 'bool',
        'receiptNumber' => 'string',
        'creationDate' => '\DateTime',
        'fulfillmentDate' => '\DateTime',
        'salesOrderId' => 'string',
        'orderNumber' => 'string',
        'orderDate' => '\DateTime',
        'shipmentDate' => '\DateTime',
        'shipment' => '\OpenAPI\Client\Otto\Model\ShipmentReceiptsV3',
        'linkedReceiptNumber' => 'string',
        'linkedCreationDate' => '\DateTime',
        'payment' => '\OpenAPI\Client\Otto\Model\PaymentReceiptsV3',
        'partner' => '\OpenAPI\Client\Otto\Model\PartnerReceiptsV3',
        'customer' => '\OpenAPI\Client\Otto\Model\CustomerReceiptsV3',
        'deliveryAddress' => '\OpenAPI\Client\Otto\Model\AddressReceiptsV3',
        'lineItems' => '\OpenAPI\Client\Otto\Model\LineItemsReceiptsV3',
        'totals' => '\OpenAPI\Client\Otto\Model\PriceReceiptsV3[]',
        'refundType' => 'string',
        'partialRefundType' => 'string',
        'amountDue' => '\OpenAPI\Client\Otto\Model\ReceiptReceiptsV3AmountDue',
        'totalsGrossAmount' => '\OpenAPI\Client\Otto\Model\ReceiptReceiptsV3TotalsGrossAmount',
        'totalsReductions' => '\OpenAPI\Client\Otto\Model\TotalsReductionReceiptsV3[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'receiptType' => null,
        'isRealReceipt' => null,
        'receiptNumber' => null,
        'creationDate' => 'date-time',
        'fulfillmentDate' => 'date-time',
        'salesOrderId' => null,
        'orderNumber' => null,
        'orderDate' => 'date-time',
        'shipmentDate' => 'date-time',
        'shipment' => null,
        'linkedReceiptNumber' => null,
        'linkedCreationDate' => 'date-time',
        'payment' => null,
        'partner' => null,
        'customer' => null,
        'deliveryAddress' => null,
        'lineItems' => null,
        'totals' => null,
        'refundType' => null,
        'partialRefundType' => null,
        'amountDue' => null,
        'totalsGrossAmount' => null,
        'totalsReductions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'receiptType' => false,
        'isRealReceipt' => false,
        'receiptNumber' => false,
        'creationDate' => false,
        'fulfillmentDate' => false,
        'salesOrderId' => false,
        'orderNumber' => false,
        'orderDate' => false,
        'shipmentDate' => false,
        'shipment' => false,
        'linkedReceiptNumber' => false,
        'linkedCreationDate' => false,
        'payment' => false,
        'partner' => false,
        'customer' => false,
        'deliveryAddress' => false,
        'lineItems' => false,
        'totals' => false,
        'refundType' => false,
        'partialRefundType' => false,
        'amountDue' => false,
        'totalsGrossAmount' => false,
        'totalsReductions' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'receiptType' => 'receiptType',
        'isRealReceipt' => 'isRealReceipt',
        'receiptNumber' => 'receiptNumber',
        'creationDate' => 'creationDate',
        'fulfillmentDate' => 'fulfillmentDate',
        'salesOrderId' => 'salesOrderId',
        'orderNumber' => 'orderNumber',
        'orderDate' => 'orderDate',
        'shipmentDate' => 'shipmentDate',
        'shipment' => 'shipment',
        'linkedReceiptNumber' => 'linkedReceiptNumber',
        'linkedCreationDate' => 'linkedCreationDate',
        'payment' => 'payment',
        'partner' => 'partner',
        'customer' => 'customer',
        'deliveryAddress' => 'deliveryAddress',
        'lineItems' => 'lineItems',
        'totals' => 'totals',
        'refundType' => 'refundType',
        'partialRefundType' => 'partialRefundType',
        'amountDue' => 'amountDue',
        'totalsGrossAmount' => 'totalsGrossAmount',
        'totalsReductions' => 'totalsReductions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'receiptType' => 'setReceiptType',
        'isRealReceipt' => 'setIsRealReceipt',
        'receiptNumber' => 'setReceiptNumber',
        'creationDate' => 'setCreationDate',
        'fulfillmentDate' => 'setFulfillmentDate',
        'salesOrderId' => 'setSalesOrderId',
        'orderNumber' => 'setOrderNumber',
        'orderDate' => 'setOrderDate',
        'shipmentDate' => 'setShipmentDate',
        'shipment' => 'setShipment',
        'linkedReceiptNumber' => 'setLinkedReceiptNumber',
        'linkedCreationDate' => 'setLinkedCreationDate',
        'payment' => 'setPayment',
        'partner' => 'setPartner',
        'customer' => 'setCustomer',
        'deliveryAddress' => 'setDeliveryAddress',
        'lineItems' => 'setLineItems',
        'totals' => 'setTotals',
        'refundType' => 'setRefundType',
        'partialRefundType' => 'setPartialRefundType',
        'amountDue' => 'setAmountDue',
        'totalsGrossAmount' => 'setTotalsGrossAmount',
        'totalsReductions' => 'setTotalsReductions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'receiptType' => 'getReceiptType',
        'isRealReceipt' => 'getIsRealReceipt',
        'receiptNumber' => 'getReceiptNumber',
        'creationDate' => 'getCreationDate',
        'fulfillmentDate' => 'getFulfillmentDate',
        'salesOrderId' => 'getSalesOrderId',
        'orderNumber' => 'getOrderNumber',
        'orderDate' => 'getOrderDate',
        'shipmentDate' => 'getShipmentDate',
        'shipment' => 'getShipment',
        'linkedReceiptNumber' => 'getLinkedReceiptNumber',
        'linkedCreationDate' => 'getLinkedCreationDate',
        'payment' => 'getPayment',
        'partner' => 'getPartner',
        'customer' => 'getCustomer',
        'deliveryAddress' => 'getDeliveryAddress',
        'lineItems' => 'getLineItems',
        'totals' => 'getTotals',
        'refundType' => 'getRefundType',
        'partialRefundType' => 'getPartialRefundType',
        'amountDue' => 'getAmountDue',
        'totalsGrossAmount' => 'getTotalsGrossAmount',
        'totalsReductions' => 'getTotalsReductions'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const RECEIPT_TYPE_PURCHASE = 'PURCHASE';
    public const RECEIPT_TYPE_REFUND = 'REFUND';
    public const RECEIPT_TYPE_PARTIAL_REFUND = 'PARTIAL_REFUND';
    public const REFUND_TYPE__RETURN = 'RETURN';
    public const REFUND_TYPE_CANCELLATION = 'CANCELLATION';
    public const REFUND_TYPE_SERVICE_FULL_REFUND_CANCELLED_BY_SDU = 'SERVICE_FULL_REFUND_CANCELLED_BY_SDU';
    public const REFUND_TYPE_SERVICE_FULL_REFUND_PRODUCT_RETURNED = 'SERVICE_FULL_REFUND_PRODUCT_RETURNED';
    public const PARTIAL_REFUND_TYPE_REFUND_COMPLAINT_ITEM = 'REFUND_COMPLAINT_ITEM';
    public const PARTIAL_REFUND_TYPE_REFUND_PAYPAL_DISPUTE = 'REFUND_PAYPAL_DISPUTE';
    public const PARTIAL_REFUND_TYPE_REFUND_ESCALATION = 'REFUND_ESCALATION';
    public const PARTIAL_REFUND_TYPE_REFUND_PARTIAL_AMOUNT_AFTER_SERVICE_CANCELLATION = 'REFUND_PARTIAL_AMOUNT_AFTER_SERVICE_CANCELLATION';
    public const PARTIAL_REFUND_TYPE_REFUND_CREDIT_CARD_DISPUTE = 'REFUND_CREDIT_CARD_DISPUTE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReceiptTypeAllowableValues()
    {
        return [
            self::RECEIPT_TYPE_PURCHASE,
            self::RECEIPT_TYPE_REFUND,
            self::RECEIPT_TYPE_PARTIAL_REFUND,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRefundTypeAllowableValues()
    {
        return [
            self::REFUND_TYPE__RETURN,
            self::REFUND_TYPE_CANCELLATION,
            self::REFUND_TYPE_SERVICE_FULL_REFUND_CANCELLED_BY_SDU,
            self::REFUND_TYPE_SERVICE_FULL_REFUND_PRODUCT_RETURNED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPartialRefundTypeAllowableValues()
    {
        return [
            self::PARTIAL_REFUND_TYPE_REFUND_COMPLAINT_ITEM,
            self::PARTIAL_REFUND_TYPE_REFUND_PAYPAL_DISPUTE,
            self::PARTIAL_REFUND_TYPE_REFUND_ESCALATION,
            self::PARTIAL_REFUND_TYPE_REFUND_PARTIAL_AMOUNT_AFTER_SERVICE_CANCELLATION,
            self::PARTIAL_REFUND_TYPE_REFUND_CREDIT_CARD_DISPUTE,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('receiptType', $data ?? [], null);
        $this->setIfExists('isRealReceipt', $data ?? [], null);
        $this->setIfExists('receiptNumber', $data ?? [], null);
        $this->setIfExists('creationDate', $data ?? [], null);
        $this->setIfExists('fulfillmentDate', $data ?? [], null);
        $this->setIfExists('salesOrderId', $data ?? [], null);
        $this->setIfExists('orderNumber', $data ?? [], null);
        $this->setIfExists('orderDate', $data ?? [], null);
        $this->setIfExists('shipmentDate', $data ?? [], null);
        $this->setIfExists('shipment', $data ?? [], null);
        $this->setIfExists('linkedReceiptNumber', $data ?? [], null);
        $this->setIfExists('linkedCreationDate', $data ?? [], null);
        $this->setIfExists('payment', $data ?? [], null);
        $this->setIfExists('partner', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('deliveryAddress', $data ?? [], null);
        $this->setIfExists('lineItems', $data ?? [], null);
        $this->setIfExists('totals', $data ?? [], null);
        $this->setIfExists('refundType', $data ?? [], null);
        $this->setIfExists('partialRefundType', $data ?? [], null);
        $this->setIfExists('amountDue', $data ?? [], null);
        $this->setIfExists('totalsGrossAmount', $data ?? [], null);
        $this->setIfExists('totalsReductions', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['receiptType'] === null) {
            $invalidProperties[] = "'receiptType' can't be null";
        }
        $allowedValues = $this->getReceiptTypeAllowableValues();
        if (!is_null($this->container['receiptType']) && !in_array($this->container['receiptType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'receiptType', must be one of '%s'",
                $this->container['receiptType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['isRealReceipt'] === null) {
            $invalidProperties[] = "'isRealReceipt' can't be null";
        }
        if ($this->container['receiptNumber'] === null) {
            $invalidProperties[] = "'receiptNumber' can't be null";
        }
        if ($this->container['creationDate'] === null) {
            $invalidProperties[] = "'creationDate' can't be null";
        }
        if ($this->container['salesOrderId'] === null) {
            $invalidProperties[] = "'salesOrderId' can't be null";
        }
        if ($this->container['orderNumber'] === null) {
            $invalidProperties[] = "'orderNumber' can't be null";
        }
        if ($this->container['orderDate'] === null) {
            $invalidProperties[] = "'orderDate' can't be null";
        }
        if ($this->container['payment'] === null) {
            $invalidProperties[] = "'payment' can't be null";
        }
        if ($this->container['partner'] === null) {
            $invalidProperties[] = "'partner' can't be null";
        }
        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
        }
        if ($this->container['lineItems'] === null) {
            $invalidProperties[] = "'lineItems' can't be null";
        }
        if ($this->container['totals'] === null) {
            $invalidProperties[] = "'totals' can't be null";
        }
        $allowedValues = $this->getRefundTypeAllowableValues();
        if (!is_null($this->container['refundType']) && !in_array($this->container['refundType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'refundType', must be one of '%s'",
                $this->container['refundType'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPartialRefundTypeAllowableValues();
        if (!is_null($this->container['partialRefundType']) && !in_array($this->container['partialRefundType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'partialRefundType', must be one of '%s'",
                $this->container['partialRefundType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['amountDue'] === null) {
            $invalidProperties[] = "'amountDue' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets receiptType
     *
     * @return string
     */
    public function getReceiptType()
    {
        return $this->container['receiptType'];
    }

    /**
     * Sets receiptType
     *
     * @param string $receiptType Categorisation that classifies the receipts according to the main characteristics  ATTENTION: In previous version the information was called type
     *
     * @return self
     */
    public function setReceiptType($receiptType)
    {
        if (is_null($receiptType)) {
            throw new \InvalidArgumentException('non-nullable receiptType cannot be null');
        }
        $allowedValues = $this->getReceiptTypeAllowableValues();
        if (!in_array($receiptType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'receiptType', must be one of '%s'",
                    $receiptType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['receiptType'] = $receiptType;

        return $this;
    }

    /**
     * Gets isRealReceipt
     *
     * @return bool
     */
    public function getIsRealReceipt()
    {
        return $this->container['isRealReceipt'];
    }

    /**
     * Sets isRealReceipt
     *
     * @param bool $isRealReceipt Counterpart to the sentence \"Dies ist kein Beleg/keine Rechnung im Sinne des Umsatzsteuergesetzes und berechtigt nicht zum Vorsteuerabzug.\" on pdf document.    * Set to **true** since real customer invoices/refunds for shipments to locations in domestic tax territory are created.    * Set to **false** for technical receipts not visible to customer or on receipts with delivery addresses on Helgoland or in Büsingen
     *
     * @return self
     */
    public function setIsRealReceipt($isRealReceipt)
    {
        if (is_null($isRealReceipt)) {
            throw new \InvalidArgumentException('non-nullable isRealReceipt cannot be null');
        }
        $this->container['isRealReceipt'] = $isRealReceipt;

        return $this;
    }

    /**
     * Gets receiptNumber
     *
     * @return string
     */
    public function getReceiptNumber()
    {
        return $this->container['receiptNumber'];
    }

    /**
     * Sets receiptNumber
     *
     * @param string $receiptNumber Human readable identifier of a receipt known by customer. </br> Guaranteed to be unique per partner
     *
     * @return self
     */
    public function setReceiptNumber($receiptNumber)
    {
        if (is_null($receiptNumber)) {
            throw new \InvalidArgumentException('non-nullable receiptNumber cannot be null');
        }
        $this->container['receiptNumber'] = $receiptNumber;

        return $this;
    }

    /**
     * Gets creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
     * Sets creationDate
     *
     * @param \DateTime $creationDate Date when receipt is created by system (UTC in ISO-8601 format)
     *
     * @return self
     */
    public function setCreationDate($creationDate)
    {
        if (is_null($creationDate)) {
            throw new \InvalidArgumentException('non-nullable creationDate cannot be null');
        }
        $this->container['creationDate'] = $creationDate;

        return $this;
    }

    /**
     * Gets fulfillmentDate
     *
     * @return \DateTime|null
     */
    public function getFulfillmentDate()
    {
        return $this->container['fulfillmentDate'];
    }

    /**
     * Sets fulfillmentDate
     *
     * @param \DateTime|null $fulfillmentDate Date when service fulfilled.
     *
     * @return self
     */
    public function setFulfillmentDate($fulfillmentDate)
    {
        if (is_null($fulfillmentDate)) {
            throw new \InvalidArgumentException('non-nullable fulfillmentDate cannot be null');
        }
        $this->container['fulfillmentDate'] = $fulfillmentDate;

        return $this;
    }

    /**
     * Gets salesOrderId
     *
     * @return string
     */
    public function getSalesOrderId()
    {
        return $this->container['salesOrderId'];
    }

    /**
     * Sets salesOrderId
     *
     * @param string $salesOrderId Technical identifier of corresponding sales order
     *
     * @return self
     */
    public function setSalesOrderId($salesOrderId)
    {
        if (is_null($salesOrderId)) {
            throw new \InvalidArgumentException('non-nullable salesOrderId cannot be null');
        }
        $this->container['salesOrderId'] = $salesOrderId;

        return $this;
    }

    /**
     * Gets orderNumber
     *
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->container['orderNumber'];
    }

    /**
     * Sets orderNumber
     *
     * @param string $orderNumber Order number of corresponding sales order
     *
     * @return self
     */
    public function setOrderNumber($orderNumber)
    {
        if (is_null($orderNumber)) {
            throw new \InvalidArgumentException('non-nullable orderNumber cannot be null');
        }
        $this->container['orderNumber'] = $orderNumber;

        return $this;
    }

    /**
     * Gets orderDate
     *
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->container['orderDate'];
    }

    /**
     * Sets orderDate
     *
     * @param \DateTime $orderDate Order date of corresponding sales order (UTC in ISO-8601 format)
     *
     * @return self
     */
    public function setOrderDate($orderDate)
    {
        if (is_null($orderDate)) {
            throw new \InvalidArgumentException('non-nullable orderDate cannot be null');
        }
        $this->container['orderDate'] = $orderDate;

        return $this;
    }

    /**
     * Gets shipmentDate
     *
     * @return \DateTime|null
     */
    public function getShipmentDate()
    {
        return $this->container['shipmentDate'];
    }

    /**
     * Sets shipmentDate
     *
     * @param \DateTime|null $shipmentDate Date when physical items of this receipt were handed over to the carrier to be delivered to the customer (UTC in ISO-8601 format).</br>Only available on receipts of receiptType PURCHASE.
     *
     * @return self
     */
    public function setShipmentDate($shipmentDate)
    {
        if (is_null($shipmentDate)) {
            throw new \InvalidArgumentException('non-nullable shipmentDate cannot be null');
        }
        $this->container['shipmentDate'] = $shipmentDate;

        return $this;
    }

    /**
     * Gets shipment
     *
     * @return \OpenAPI\Client\Otto\Model\ShipmentReceiptsV3|null
     */
    public function getShipment()
    {
        return $this->container['shipment'];
    }

    /**
     * Sets shipment
     *
     * @param \OpenAPI\Client\Otto\Model\ShipmentReceiptsV3|null $shipment shipment
     *
     * @return self
     */
    public function setShipment($shipment)
    {
        if (is_null($shipment)) {
            throw new \InvalidArgumentException('non-nullable shipment cannot be null');
        }
        $this->container['shipment'] = $shipment;

        return $this;
    }

    /**
     * Gets linkedReceiptNumber
     *
     * @return string|null
     */
    public function getLinkedReceiptNumber()
    {
        return $this->container['linkedReceiptNumber'];
    }

    /**
     * Sets linkedReceiptNumber
     *
     * @param string|null $linkedReceiptNumber Human-readable identifier of linked receipt.</br> In case of receiptType PARTIAL_REFUND or REFUND it is the receiptINumber of purchase receipt.  ATTENTION: In previous version the information was called originalReceiptNumber
     *
     * @return self
     */
    public function setLinkedReceiptNumber($linkedReceiptNumber)
    {
        if (is_null($linkedReceiptNumber)) {
            throw new \InvalidArgumentException('non-nullable linkedReceiptNumber cannot be null');
        }
        $this->container['linkedReceiptNumber'] = $linkedReceiptNumber;

        return $this;
    }

    /**
     * Gets linkedCreationDate
     *
     * @return \DateTime|null
     */
    public function getLinkedCreationDate()
    {
        return $this->container['linkedCreationDate'];
    }

    /**
     * Sets linkedCreationDate
     *
     * @param \DateTime|null $linkedCreationDate Creation date of linked receipt (UTC in ISO-8601 format).</br>Only available if there is a linked receipt.  ATTENTION: In previous version the information was called originalCreatedDate
     *
     * @return self
     */
    public function setLinkedCreationDate($linkedCreationDate)
    {
        if (is_null($linkedCreationDate)) {
            throw new \InvalidArgumentException('non-nullable linkedCreationDate cannot be null');
        }
        $this->container['linkedCreationDate'] = $linkedCreationDate;

        return $this;
    }

    /**
     * Gets payment
     *
     * @return \OpenAPI\Client\Otto\Model\PaymentReceiptsV3
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \OpenAPI\Client\Otto\Model\PaymentReceiptsV3 $payment payment
     *
     * @return self
     */
    public function setPayment($payment)
    {
        if (is_null($payment)) {
            throw new \InvalidArgumentException('non-nullable payment cannot be null');
        }
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets partner
     *
     * @return \OpenAPI\Client\Otto\Model\PartnerReceiptsV3
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     *
     * @param \OpenAPI\Client\Otto\Model\PartnerReceiptsV3 $partner partner
     *
     * @return self
     */
    public function setPartner($partner)
    {
        if (is_null($partner)) {
            throw new \InvalidArgumentException('non-nullable partner cannot be null');
        }
        $this->container['partner'] = $partner;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \OpenAPI\Client\Otto\Model\CustomerReceiptsV3
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \OpenAPI\Client\Otto\Model\CustomerReceiptsV3 $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        if (is_null($customer)) {
            throw new \InvalidArgumentException('non-nullable customer cannot be null');
        }
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets deliveryAddress
     *
     * @return \OpenAPI\Client\Otto\Model\AddressReceiptsV3|null
     */
    public function getDeliveryAddress()
    {
        return $this->container['deliveryAddress'];
    }

    /**
     * Sets deliveryAddress
     *
     * @param \OpenAPI\Client\Otto\Model\AddressReceiptsV3|null $deliveryAddress deliveryAddress
     *
     * @return self
     */
    public function setDeliveryAddress($deliveryAddress)
    {
        if (is_null($deliveryAddress)) {
            throw new \InvalidArgumentException('non-nullable deliveryAddress cannot be null');
        }
        $this->container['deliveryAddress'] = $deliveryAddress;

        return $this;
    }

    /**
     * Gets lineItems
     *
     * @return \OpenAPI\Client\Otto\Model\LineItemsReceiptsV3
     */
    public function getLineItems()
    {
        return $this->container['lineItems'];
    }

    /**
     * Sets lineItems
     *
     * @param \OpenAPI\Client\Otto\Model\LineItemsReceiptsV3 $lineItems lineItems
     *
     * @return self
     */
    public function setLineItems($lineItems)
    {
        if (is_null($lineItems)) {
            throw new \InvalidArgumentException('non-nullable lineItems cannot be null');
        }
        $this->container['lineItems'] = $lineItems;

        return $this;
    }

    /**
     * Gets totals
     *
     * @return \OpenAPI\Client\Otto\Model\PriceReceiptsV3[]
     */
    public function getTotals()
    {
        return $this->container['totals'];
    }

    /**
     * Sets totals
     *
     * @param \OpenAPI\Client\Otto\Model\PriceReceiptsV3[] $totals Total amounts of receipt per tax type and tax rate
     *
     * @return self
     */
    public function setTotals($totals)
    {
        if (is_null($totals)) {
            throw new \InvalidArgumentException('non-nullable totals cannot be null');
        }
        $this->container['totals'] = $totals;

        return $this;
    }

    /**
     * Gets refundType
     *
     * @return string|null
     */
    public function getRefundType()
    {
        return $this->container['refundType'];
    }

    /**
     * Sets refundType
     *
     * @param string|null $refundType Field describes the business case of a refund in more detail.    <br/>Only available on receipts of receiptType REFUND and not reliable provided on older partial refund receipts.    The following refundTypes are possible:   * **RETURN** - Refund due to a return of an item   * **CANCELLATION** - Refund of delivery fees due to a cancellation   * **SERVICE_FULL_REFUND_CANCELLED_BY_SDU** - Refund of a service without item   * **SERVICE_FULL_REFUND_PRODUCT_RETURNED** - Refund a service parallel to an item return
     *
     * @return self
     */
    public function setRefundType($refundType)
    {
        if (is_null($refundType)) {
            throw new \InvalidArgumentException('non-nullable refundType cannot be null');
        }
        $allowedValues = $this->getRefundTypeAllowableValues();
        if (!in_array($refundType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'refundType', must be one of '%s'",
                    $refundType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['refundType'] = $refundType;

        return $this;
    }

    /**
     * Gets partialRefundType
     *
     * @return string|null
     */
    public function getPartialRefundType()
    {
        return $this->container['partialRefundType'];
    }

    /**
     * Sets partialRefundType
     *
     * @param string|null $partialRefundType Business case of partial refund chosen by partner. Has an impact on the business flow and the PDF.                                                                                              </br>Only available on receipts of receiptType PARTIAL_REFUND and not reliable provides on older partial refunds receipts.  Possible values: * **REFUND_COMPLAINT_ITEM** - Refund because of justified customer complaint on item * **REFUND_PAYPAL_DISPUTE** - Partial or full amount of item price was refunded due to a dispute in Paypal payment * **REFUND_ESCALATION** - Partial amount of item price was refunded due to an escalation * **REFUND_PARTIAL_AMOUNT_AFTER_SERVICE_CANCELLATION** - Lowering of service price after service was not fulfilled completely * **REFUND_CREDIT_CARD_DISPUTE** - Partial or full amount of item price was refunded due to a dispute in CREDIT_CARD payment
     *
     * @return self
     */
    public function setPartialRefundType($partialRefundType)
    {
        if (is_null($partialRefundType)) {
            throw new \InvalidArgumentException('non-nullable partialRefundType cannot be null');
        }
        $allowedValues = $this->getPartialRefundTypeAllowableValues();
        if (!in_array($partialRefundType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'partialRefundType', must be one of '%s'",
                    $partialRefundType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['partialRefundType'] = $partialRefundType;

        return $this;
    }

    /**
     * Gets amountDue
     *
     * @return \OpenAPI\Client\Otto\Model\ReceiptReceiptsV3AmountDue
     */
    public function getAmountDue()
    {
        return $this->container['amountDue'];
    }

    /**
     * Sets amountDue
     *
     * @param \OpenAPI\Client\Otto\Model\ReceiptReceiptsV3AmountDue $amountDue amountDue
     *
     * @return self
     */
    public function setAmountDue($amountDue)
    {
        if (is_null($amountDue)) {
            throw new \InvalidArgumentException('non-nullable amountDue cannot be null');
        }
        $this->container['amountDue'] = $amountDue;

        return $this;
    }

    /**
     * Gets totalsGrossAmount
     *
     * @return \OpenAPI\Client\Otto\Model\ReceiptReceiptsV3TotalsGrossAmount|null
     */
    public function getTotalsGrossAmount()
    {
        return $this->container['totalsGrossAmount'];
    }

    /**
     * Sets totalsGrossAmount
     *
     * @param \OpenAPI\Client\Otto\Model\ReceiptReceiptsV3TotalsGrossAmount|null $totalsGrossAmount totalsGrossAmount
     *
     * @return self
     */
    public function setTotalsGrossAmount($totalsGrossAmount)
    {
        if (is_null($totalsGrossAmount)) {
            throw new \InvalidArgumentException('non-nullable totalsGrossAmount cannot be null');
        }
        $this->container['totalsGrossAmount'] = $totalsGrossAmount;

        return $this;
    }

    /**
     * Gets totalsReductions
     *
     * @return \OpenAPI\Client\Otto\Model\TotalsReductionReceiptsV3[]|null
     */
    public function getTotalsReductions()
    {
        return $this->container['totalsReductions'];
    }

    /**
     * Sets totalsReductions
     *
     * @param \OpenAPI\Client\Otto\Model\TotalsReductionReceiptsV3[]|null $totalsReductions Reduction amounts on total value of receipts (currently it includes voucher reduction)
     *
     * @return self
     */
    public function setTotalsReductions($totalsReductions)
    {
        if (is_null($totalsReductions)) {
            throw new \InvalidArgumentException('non-nullable totalsReductions cannot be null');
        }
        $this->container['totalsReductions'] = $totalsReductions;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


