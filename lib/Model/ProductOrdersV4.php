<?php
/**
 * ProductOrdersV4
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
 * ProductOrdersV4 Class Doc Comment
 *
 * @category Class
 * @description Product
 * @package  OpenAPI\Client\Otto
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProductOrdersV4 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Product__Orders-V4';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'articleNumber' => 'string',
        'dimensions' => '\OpenAPI\Client\Otto\Model\DimensionOrdersV4[]',
        'ean' => 'string',
        'productTitle' => 'string',
        'shopUrl' => 'string',
        'sku' => 'string',
        'vatRate' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'articleNumber' => null,
        'dimensions' => null,
        'ean' => null,
        'productTitle' => null,
        'shopUrl' => null,
        'sku' => null,
        'vatRate' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'articleNumber' => false,
        'dimensions' => false,
        'ean' => false,
        'productTitle' => false,
        'shopUrl' => false,
        'sku' => false,
        'vatRate' => false
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
        'articleNumber' => 'articleNumber',
        'dimensions' => 'dimensions',
        'ean' => 'ean',
        'productTitle' => 'productTitle',
        'shopUrl' => 'shopUrl',
        'sku' => 'sku',
        'vatRate' => 'vatRate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'articleNumber' => 'setArticleNumber',
        'dimensions' => 'setDimensions',
        'ean' => 'setEan',
        'productTitle' => 'setProductTitle',
        'shopUrl' => 'setShopUrl',
        'sku' => 'setSku',
        'vatRate' => 'setVatRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'articleNumber' => 'getArticleNumber',
        'dimensions' => 'getDimensions',
        'ean' => 'getEan',
        'productTitle' => 'getProductTitle',
        'shopUrl' => 'getShopUrl',
        'sku' => 'getSku',
        'vatRate' => 'getVatRate'
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
        $this->setIfExists('articleNumber', $data ?? [], null);
        $this->setIfExists('dimensions', $data ?? [], null);
        $this->setIfExists('ean', $data ?? [], null);
        $this->setIfExists('productTitle', $data ?? [], null);
        $this->setIfExists('shopUrl', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('vatRate', $data ?? [], null);
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

        if ($this->container['articleNumber'] === null) {
            $invalidProperties[] = "'articleNumber' can't be null";
        }
        if ($this->container['productTitle'] === null) {
            $invalidProperties[] = "'productTitle' can't be null";
        }
        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ($this->container['vatRate'] === null) {
            $invalidProperties[] = "'vatRate' can't be null";
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
     * Gets articleNumber
     *
     * @return string
     */
    public function getArticleNumber()
    {
        return $this->container['articleNumber'];
    }

    /**
     * Sets articleNumber
     *
     * @param string $articleNumber The external identifier of the product, it is shown as \"article number\" on the product detail page of otto.de to the customer.
     *
     * @return self
     */
    public function setArticleNumber($articleNumber)
    {
        if (is_null($articleNumber)) {
            throw new \InvalidArgumentException('non-nullable articleNumber cannot be null');
        }
        $this->container['articleNumber'] = $articleNumber;

        return $this;
    }

    /**
     * Gets dimensions
     *
     * @return \OpenAPI\Client\Otto\Model\DimensionOrdersV4[]|null
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \OpenAPI\Client\Otto\Model\DimensionOrdersV4[]|null $dimensions List of dimensions that are individual for each product type
     *
     * @return self
     */
    public function setDimensions($dimensions)
    {
        if (is_null($dimensions)) {
            throw new \InvalidArgumentException('non-nullable dimensions cannot be null');
        }
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets ean
     *
     * @return string|null
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string|null $ean EAN number of this product
     *
     * @return self
     */
    public function setEan($ean)
    {
        if (is_null($ean)) {
            throw new \InvalidArgumentException('non-nullable ean cannot be null');
        }
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets productTitle
     *
     * @return string
     */
    public function getProductTitle()
    {
        return $this->container['productTitle'];
    }

    /**
     * Sets productTitle
     *
     * @param string $productTitle The title of this product
     *
     * @return self
     */
    public function setProductTitle($productTitle)
    {
        if (is_null($productTitle)) {
            throw new \InvalidArgumentException('non-nullable productTitle cannot be null');
        }
        $this->container['productTitle'] = $productTitle;

        return $this;
    }

    /**
     * Gets shopUrl
     *
     * @return string|null
     */
    public function getShopUrl()
    {
        return $this->container['shopUrl'];
    }

    /**
     * Sets shopUrl
     *
     * @param string|null $shopUrl Shop link for the product
     *
     * @return self
     */
    public function setShopUrl($shopUrl)
    {
        if (is_null($shopUrl)) {
            throw new \InvalidArgumentException('non-nullable shopUrl cannot be null');
        }
        $this->container['shopUrl'] = $shopUrl;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku The external identifier of the variation, uniquely identifies a variation in partner cataloq
     *
     * @return self
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets vatRate
     *
     * @return float
     */
    public function getVatRate()
    {
        return $this->container['vatRate'];
    }

    /**
     * Sets vatRate
     *
     * @param float $vatRate The VAT rate for ordered products and shipping costs
     *
     * @return self
     */
    public function setVatRate($vatRate)
    {
        if (is_null($vatRate)) {
            throw new \InvalidArgumentException('non-nullable vatRate cannot be null');
        }
        $this->container['vatRate'] = $vatRate;

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


