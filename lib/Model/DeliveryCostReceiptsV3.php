<?php
/**
 * DeliveryCostReceiptsV3
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
 * DeliveryCostReceiptsV3 Class Doc Comment
 *
 * @category Class
 * @description List of billed logistic costs, if exists for this receipt. &lt;/br&gt;This list is only used in context of receiptType PURCHASE or REFUND. &lt;/br&gt;If there are no entries the lists is displayed as empty
 * @package  OpenAPI\Client\Otto
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DeliveryCostReceiptsV3 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DeliveryCost__Receipts-V3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'lineNumber' => 'int',
        'deliveryCostType' => 'string',
        'unitPrice' => '\OpenAPI\Client\Otto\Model\PriceReceiptsV3',
        'positionSum' => '\OpenAPI\Client\Otto\Model\PriceReceiptsV3',
        'priceModifications' => '\OpenAPI\Client\Otto\Model\PriceModificationReceiptsV3[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'lineNumber' => 'int32',
        'deliveryCostType' => null,
        'unitPrice' => null,
        'positionSum' => null,
        'priceModifications' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'lineNumber' => false,
        'deliveryCostType' => false,
        'unitPrice' => false,
        'positionSum' => false,
        'priceModifications' => false
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
        'lineNumber' => 'lineNumber',
        'deliveryCostType' => 'deliveryCostType',
        'unitPrice' => 'unitPrice',
        'positionSum' => 'positionSum',
        'priceModifications' => 'priceModifications'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lineNumber' => 'setLineNumber',
        'deliveryCostType' => 'setDeliveryCostType',
        'unitPrice' => 'setUnitPrice',
        'positionSum' => 'setPositionSum',
        'priceModifications' => 'setPriceModifications'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lineNumber' => 'getLineNumber',
        'deliveryCostType' => 'getDeliveryCostType',
        'unitPrice' => 'getUnitPrice',
        'positionSum' => 'getPositionSum',
        'priceModifications' => 'getPriceModifications'
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

    public const DELIVERY_COST_TYPE_DELIVERY_FEE_STANDARD = 'DELIVERY_FEE_STANDARD';
    public const DELIVERY_COST_TYPE_DELIVERY_FEE_FREIGHT_SURCHARGE = 'DELIVERY_FEE_FREIGHT_SURCHARGE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeliveryCostTypeAllowableValues()
    {
        return [
            self::DELIVERY_COST_TYPE_DELIVERY_FEE_STANDARD,
            self::DELIVERY_COST_TYPE_DELIVERY_FEE_FREIGHT_SURCHARGE,
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
        $this->setIfExists('lineNumber', $data ?? [], null);
        $this->setIfExists('deliveryCostType', $data ?? [], null);
        $this->setIfExists('unitPrice', $data ?? [], null);
        $this->setIfExists('positionSum', $data ?? [], null);
        $this->setIfExists('priceModifications', $data ?? [], null);
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

        if ($this->container['deliveryCostType'] === null) {
            $invalidProperties[] = "'deliveryCostType' can't be null";
        }
        $allowedValues = $this->getDeliveryCostTypeAllowableValues();
        if (!is_null($this->container['deliveryCostType']) && !in_array($this->container['deliveryCostType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'deliveryCostType', must be one of '%s'",
                $this->container['deliveryCostType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['unitPrice'] === null) {
            $invalidProperties[] = "'unitPrice' can't be null";
        }
        if ($this->container['positionSum'] === null) {
            $invalidProperties[] = "'positionSum' can't be null";
        }
        if ($this->container['priceModifications'] === null) {
            $invalidProperties[] = "'priceModifications' can't be null";
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
     * Gets lineNumber
     *
     * @return int|null
     */
    public function getLineNumber()
    {
        return $this->container['lineNumber'];
    }

    /**
     * Sets lineNumber
     *
     * @param int|null $lineNumber Number of line item in which the information is printed on the pdf document of the receipt. </br>This information is not reliably provided for older receipts
     *
     * @return self
     */
    public function setLineNumber($lineNumber)
    {
        if (is_null($lineNumber)) {
            throw new \InvalidArgumentException('non-nullable lineNumber cannot be null');
        }
        $this->container['lineNumber'] = $lineNumber;

        return $this;
    }

    /**
     * Gets deliveryCostType
     *
     * @return string
     */
    public function getDeliveryCostType()
    {
        return $this->container['deliveryCostType'];
    }

    /**
     * Sets deliveryCostType
     *
     * @param string $deliveryCostType Type of delivery costs for the shipment of physical goods. </br> Possible values: * **DELIVERY_FEE_STANDARD** - basic shipping costs * **DELIVERY_FEE_FREIGHT_SURCHARGE** - additional freight surcharge for bulky goods
     *
     * @return self
     */
    public function setDeliveryCostType($deliveryCostType)
    {
        if (is_null($deliveryCostType)) {
            throw new \InvalidArgumentException('non-nullable deliveryCostType cannot be null');
        }
        $allowedValues = $this->getDeliveryCostTypeAllowableValues();
        if (!in_array($deliveryCostType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'deliveryCostType', must be one of '%s'",
                    $deliveryCostType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['deliveryCostType'] = $deliveryCostType;

        return $this;
    }

    /**
     * Gets unitPrice
     *
     * @return \OpenAPI\Client\Otto\Model\PriceReceiptsV3
     */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice
     *
     * @param \OpenAPI\Client\Otto\Model\PriceReceiptsV3 $unitPrice unitPrice
     *
     * @return self
     */
    public function setUnitPrice($unitPrice)
    {
        if (is_null($unitPrice)) {
            throw new \InvalidArgumentException('non-nullable unitPrice cannot be null');
        }
        $this->container['unitPrice'] = $unitPrice;

        return $this;
    }

    /**
     * Gets positionSum
     *
     * @return \OpenAPI\Client\Otto\Model\PriceReceiptsV3
     */
    public function getPositionSum()
    {
        return $this->container['positionSum'];
    }

    /**
     * Sets positionSum
     *
     * @param \OpenAPI\Client\Otto\Model\PriceReceiptsV3 $positionSum positionSum
     *
     * @return self
     */
    public function setPositionSum($positionSum)
    {
        if (is_null($positionSum)) {
            throw new \InvalidArgumentException('non-nullable positionSum cannot be null');
        }
        $this->container['positionSum'] = $positionSum;

        return $this;
    }

    /**
     * Gets priceModifications
     *
     * @return \OpenAPI\Client\Otto\Model\PriceModificationReceiptsV3[]
     */
    public function getPriceModifications()
    {
        return $this->container['priceModifications'];
    }

    /**
     * Sets priceModifications
     *
     * @param \OpenAPI\Client\Otto\Model\PriceModificationReceiptsV3[] $priceModifications List of additional fees and reductions represented as price modifications. </br>If there are no price modifications, an empty list is displayed
     *
     * @return self
     */
    public function setPriceModifications($priceModifications)
    {
        if (is_null($priceModifications)) {
            throw new \InvalidArgumentException('non-nullable priceModifications cannot be null');
        }
        $this->container['priceModifications'] = $priceModifications;

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


