<?php
/**
 * ServicePartialRefundPositionReceiptsV3
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
 * ServicePartialRefundPositionReceiptsV3 Class Doc Comment
 *
 * @category Class
 * @description List of billed partial refunds of services.
 * @package  OpenAPI\Client\Otto
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ServicePartialRefundPositionReceiptsV3 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ServicePartialRefundPosition__Receipts-V3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'lineNumber' => 'int',
        'serviceType' => 'string',
        'serviceName' => 'string',
        'servicePositionItemIds' => 'string[]',
        'partialRefundAmount' => '\OpenAPI\Client\Otto\Model\PriceReceiptsV3',
        'insurancePeriod' => 'int'
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
        'serviceType' => null,
        'serviceName' => null,
        'servicePositionItemIds' => null,
        'partialRefundAmount' => null,
        'insurancePeriod' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'lineNumber' => false,
        'serviceType' => false,
        'serviceName' => false,
        'servicePositionItemIds' => false,
        'partialRefundAmount' => false,
        'insurancePeriod' => false
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
        'serviceType' => 'serviceType',
        'serviceName' => 'serviceName',
        'servicePositionItemIds' => 'servicePositionItemIds',
        'partialRefundAmount' => 'partialRefundAmount',
        'insurancePeriod' => 'insurancePeriod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lineNumber' => 'setLineNumber',
        'serviceType' => 'setServiceType',
        'serviceName' => 'setServiceName',
        'servicePositionItemIds' => 'setServicePositionItemIds',
        'partialRefundAmount' => 'setPartialRefundAmount',
        'insurancePeriod' => 'setInsurancePeriod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lineNumber' => 'getLineNumber',
        'serviceType' => 'getServiceType',
        'serviceName' => 'getServiceName',
        'servicePositionItemIds' => 'getServicePositionItemIds',
        'partialRefundAmount' => 'getPartialRefundAmount',
        'insurancePeriod' => 'getInsurancePeriod'
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

    public const SERVICE_TYPE_DISPOSAL = 'DISPOSAL';
    public const SERVICE_TYPE_INSURANCE = 'INSURANCE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getServiceTypeAllowableValues()
    {
        return [
            self::SERVICE_TYPE_DISPOSAL,
            self::SERVICE_TYPE_INSURANCE,
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
        $this->setIfExists('serviceType', $data ?? [], null);
        $this->setIfExists('serviceName', $data ?? [], null);
        $this->setIfExists('servicePositionItemIds', $data ?? [], null);
        $this->setIfExists('partialRefundAmount', $data ?? [], null);
        $this->setIfExists('insurancePeriod', $data ?? [], null);
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

        $allowedValues = $this->getServiceTypeAllowableValues();
        if (!is_null($this->container['serviceType']) && !in_array($this->container['serviceType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'serviceType', must be one of '%s'",
                $this->container['serviceType'],
                implode("', '", $allowedValues)
            );
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
     * Gets serviceType
     *
     * @return string|null
     */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
     * Sets serviceType
     *
     * @param string|null $serviceType Categorization that classifies services according to their main characteristics. Services of the same type are often treated in the same way. Currently, the processing of the following types are possible: * **DISPOSAL** - Free take away of old technical devices required by law * **INSURANCE** - Product insurance
     *
     * @return self
     */
    public function setServiceType($serviceType)
    {
        if (is_null($serviceType)) {
            throw new \InvalidArgumentException('non-nullable serviceType cannot be null');
        }
        $allowedValues = $this->getServiceTypeAllowableValues();
        if (!in_array($serviceType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'serviceType', must be one of '%s'",
                    $serviceType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['serviceType'] = $serviceType;

        return $this;
    }

    /**
     * Gets serviceName
     *
     * @return string|null
     */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
     * Sets serviceName
     *
     * @param string|null $serviceName Service name of a special specification of a service type that the customer has seen in the ordering process.
     *
     * @return self
     */
    public function setServiceName($serviceName)
    {
        if (is_null($serviceName)) {
            throw new \InvalidArgumentException('non-nullable serviceName cannot be null');
        }
        $this->container['serviceName'] = $serviceName;

        return $this;
    }

    /**
     * Gets servicePositionItemIds
     *
     * @return string[]|null
     */
    public function getServicePositionItemIds()
    {
        return $this->container['servicePositionItemIds'];
    }

    /**
     * Sets servicePositionItemIds
     *
     * @param string[]|null $servicePositionItemIds List of unique identifiers of specific instances of services. A servicePositionItem is the smallest unit of a service that can be ordered. If quantity of this object is bigger than one the list contains more than one entry.
     *
     * @return self
     */
    public function setServicePositionItemIds($servicePositionItemIds)
    {
        if (is_null($servicePositionItemIds)) {
            throw new \InvalidArgumentException('non-nullable servicePositionItemIds cannot be null');
        }
        $this->container['servicePositionItemIds'] = $servicePositionItemIds;

        return $this;
    }

    /**
     * Gets partialRefundAmount
     *
     * @return \OpenAPI\Client\Otto\Model\PriceReceiptsV3|null
     */
    public function getPartialRefundAmount()
    {
        return $this->container['partialRefundAmount'];
    }

    /**
     * Sets partialRefundAmount
     *
     * @param \OpenAPI\Client\Otto\Model\PriceReceiptsV3|null $partialRefundAmount partialRefundAmount
     *
     * @return self
     */
    public function setPartialRefundAmount($partialRefundAmount)
    {
        if (is_null($partialRefundAmount)) {
            throw new \InvalidArgumentException('non-nullable partialRefundAmount cannot be null');
        }
        $this->container['partialRefundAmount'] = $partialRefundAmount;

        return $this;
    }

    /**
     * Gets insurancePeriod
     *
     * @return int|null
     */
    public function getInsurancePeriod()
    {
        return $this->container['insurancePeriod'];
    }

    /**
     * Sets insurancePeriod
     *
     * @param int|null $insurancePeriod Services of serviceType WARRANTY or INSURANCE could be offered with different durations. This field will show the duration as month.
     *
     * @return self
     */
    public function setInsurancePeriod($insurancePeriod)
    {
        if (is_null($insurancePeriod)) {
            throw new \InvalidArgumentException('non-nullable insurancePeriod cannot be null');
        }
        $this->container['insurancePeriod'] = $insurancePeriod;

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


