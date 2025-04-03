<?php
/**
 * NormPriceInfoProductsV5SandboxOnly
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
 * NormPriceInfoProductsV5SandboxOnly Class Doc Comment
 *
 * @category Class
 * @description The information about normed prices, must be provided completely, or not at all. The representation of the normprice has to contain the following values for normAmount and normUnit: 1 pcs,1 sqm,1 kg,1 l,1 m,100 ml,100 g,1 g,1000 g,1 pair,1 RM,1 dm3.
 * @package  OpenAPI\Client\Otto
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NormPriceInfoProductsV5SandboxOnly implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NormPriceInfo__Products-V5 (sandbox only)';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'normAmount' => 'int',
        'normUnit' => 'string',
        'salesAmount' => 'float',
        'salesUnit' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'normAmount' => 'int32',
        'normUnit' => null,
        'salesAmount' => null,
        'salesUnit' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'normAmount' => false,
        'normUnit' => false,
        'salesAmount' => false,
        'salesUnit' => false
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
        'normAmount' => 'normAmount',
        'normUnit' => 'normUnit',
        'salesAmount' => 'salesAmount',
        'salesUnit' => 'salesUnit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'normAmount' => 'setNormAmount',
        'normUnit' => 'setNormUnit',
        'salesAmount' => 'setSalesAmount',
        'salesUnit' => 'setSalesUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'normAmount' => 'getNormAmount',
        'normUnit' => 'getNormUnit',
        'salesAmount' => 'getSalesAmount',
        'salesUnit' => 'getSalesUnit'
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

    public const NORM_AMOUNT_NUMBER_1 = 1;
    public const NORM_AMOUNT_NUMBER_100 = 100;
    public const NORM_AMOUNT_NUMBER_1000 = 1000;
    public const NORM_UNIT_STK = 'Stk';
    public const NORM_UNIT_QM = 'qm';
    public const NORM_UNIT_KG = 'kg';
    public const NORM_UNIT_L = 'l';
    public const NORM_UNIT_M = 'm';
    public const NORM_UNIT_ML = 'ml';
    public const NORM_UNIT_G = 'g';
    public const NORM_UNIT_PAAR = 'Paar';
    public const NORM_UNIT_RM = 'RM';
    public const NORM_UNIT_DM3 = 'dm3';
    public const SALES_UNIT_STK = 'Stk';
    public const SALES_UNIT_QM = 'qm';
    public const SALES_UNIT_KG = 'kg';
    public const SALES_UNIT_L = 'l';
    public const SALES_UNIT_M = 'm';
    public const SALES_UNIT_ML = 'ml';
    public const SALES_UNIT_G = 'g';
    public const SALES_UNIT_PAAR = 'Paar';
    public const SALES_UNIT_RM = 'RM';
    public const SALES_UNIT_DM3 = 'dm3';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNormAmountAllowableValues()
    {
        return [
            self::NORM_AMOUNT_NUMBER_1,
            self::NORM_AMOUNT_NUMBER_100,
            self::NORM_AMOUNT_NUMBER_1000,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNormUnitAllowableValues()
    {
        return [
            self::NORM_UNIT_STK,
            self::NORM_UNIT_QM,
            self::NORM_UNIT_KG,
            self::NORM_UNIT_L,
            self::NORM_UNIT_M,
            self::NORM_UNIT_ML,
            self::NORM_UNIT_G,
            self::NORM_UNIT_PAAR,
            self::NORM_UNIT_RM,
            self::NORM_UNIT_DM3,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSalesUnitAllowableValues()
    {
        return [
            self::SALES_UNIT_STK,
            self::SALES_UNIT_QM,
            self::SALES_UNIT_KG,
            self::SALES_UNIT_L,
            self::SALES_UNIT_M,
            self::SALES_UNIT_ML,
            self::SALES_UNIT_G,
            self::SALES_UNIT_PAAR,
            self::SALES_UNIT_RM,
            self::SALES_UNIT_DM3,
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
        $this->setIfExists('normAmount', $data ?? [], null);
        $this->setIfExists('normUnit', $data ?? [], null);
        $this->setIfExists('salesAmount', $data ?? [], null);
        $this->setIfExists('salesUnit', $data ?? [], null);
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

        $allowedValues = $this->getNormAmountAllowableValues();
        if (!is_null($this->container['normAmount']) && !in_array($this->container['normAmount'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'normAmount', must be one of '%s'",
                $this->container['normAmount'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getNormUnitAllowableValues();
        if (!is_null($this->container['normUnit']) && !in_array($this->container['normUnit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'normUnit', must be one of '%s'",
                $this->container['normUnit'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSalesUnitAllowableValues();
        if (!is_null($this->container['salesUnit']) && !in_array($this->container['salesUnit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'salesUnit', must be one of '%s'",
                $this->container['salesUnit'],
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
     * Gets normAmount
     *
     * @return int|null
     */
    public function getNormAmount()
    {
        return $this->container['normAmount'];
    }

    /**
     * Sets normAmount
     *
     * @param int|null $normAmount The norm packaging size.
     *
     * @return self
     */
    public function setNormAmount($normAmount)
    {
        if (is_null($normAmount)) {
            throw new \InvalidArgumentException('non-nullable normAmount cannot be null');
        }
        $allowedValues = $this->getNormAmountAllowableValues();
        if (!in_array($normAmount, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'normAmount', must be one of '%s'",
                    $normAmount,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['normAmount'] = $normAmount;

        return $this;
    }

    /**
     * Gets normUnit
     *
     * @return string|null
     */
    public function getNormUnit()
    {
        return $this->container['normUnit'];
    }

    /**
     * Sets normUnit
     *
     * @param string|null $normUnit The name of the unit the norm price is based on.
     *
     * @return self
     */
    public function setNormUnit($normUnit)
    {
        if (is_null($normUnit)) {
            throw new \InvalidArgumentException('non-nullable normUnit cannot be null');
        }
        $allowedValues = $this->getNormUnitAllowableValues();
        if (!in_array($normUnit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'normUnit', must be one of '%s'",
                    $normUnit,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['normUnit'] = $normUnit;

        return $this;
    }

    /**
     * Gets salesAmount
     *
     * @return float|null
     */
    public function getSalesAmount()
    {
        return $this->container['salesAmount'];
    }

    /**
     * Sets salesAmount
     *
     * @param float|null $salesAmount The packaging size of the sales unit.
     *
     * @return self
     */
    public function setSalesAmount($salesAmount)
    {
        if (is_null($salesAmount)) {
            throw new \InvalidArgumentException('non-nullable salesAmount cannot be null');
        }
        $this->container['salesAmount'] = $salesAmount;

        return $this;
    }

    /**
     * Gets salesUnit
     *
     * @return string|null
     */
    public function getSalesUnit()
    {
        return $this->container['salesUnit'];
    }

    /**
     * Sets salesUnit
     *
     * @param string|null $salesUnit The name of the unit the sales price is based on.
     *
     * @return self
     */
    public function setSalesUnit($salesUnit)
    {
        if (is_null($salesUnit)) {
            throw new \InvalidArgumentException('non-nullable salesUnit cannot be null');
        }
        $allowedValues = $this->getSalesUnitAllowableValues();
        if (!in_array($salesUnit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'salesUnit', must be one of '%s'",
                    $salesUnit,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['salesUnit'] = $salesUnit;

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


