<?php
/**
 * AttributeDefinitionProductsV3
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
 * AttributeDefinitionProductsV3 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client\Otto
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AttributeDefinitionProductsV3 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AttributeDefinition__Products-V3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'attributeGroup' => 'string',
        'type' => 'string',
        'multiValue' => 'bool',
        'unit' => 'string',
        'unitDisplayName' => 'string',
        'allowedValues' => 'string[]',
        'featureRelevance' => 'string[]',
        'relatedMediaAssets' => 'string[]',
        'relevance' => 'string',
        'description' => 'string',
        'exampleValues' => 'string[]',
        'recommendedValues' => 'string[]',
        'reference' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'attributeGroup' => null,
        'type' => null,
        'multiValue' => null,
        'unit' => null,
        'unitDisplayName' => null,
        'allowedValues' => null,
        'featureRelevance' => null,
        'relatedMediaAssets' => null,
        'relevance' => null,
        'description' => null,
        'exampleValues' => null,
        'recommendedValues' => null,
        'reference' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'attributeGroup' => false,
        'type' => false,
        'multiValue' => false,
        'unit' => false,
        'unitDisplayName' => false,
        'allowedValues' => false,
        'featureRelevance' => false,
        'relatedMediaAssets' => false,
        'relevance' => false,
        'description' => false,
        'exampleValues' => false,
        'recommendedValues' => false,
        'reference' => false
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
        'name' => 'name',
        'attributeGroup' => 'attributeGroup',
        'type' => 'type',
        'multiValue' => 'multiValue',
        'unit' => 'unit',
        'unitDisplayName' => 'unitDisplayName',
        'allowedValues' => 'allowedValues',
        'featureRelevance' => 'featureRelevance',
        'relatedMediaAssets' => 'relatedMediaAssets',
        'relevance' => 'relevance',
        'description' => 'description',
        'exampleValues' => 'exampleValues',
        'recommendedValues' => 'recommendedValues',
        'reference' => 'reference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'attributeGroup' => 'setAttributeGroup',
        'type' => 'setType',
        'multiValue' => 'setMultiValue',
        'unit' => 'setUnit',
        'unitDisplayName' => 'setUnitDisplayName',
        'allowedValues' => 'setAllowedValues',
        'featureRelevance' => 'setFeatureRelevance',
        'relatedMediaAssets' => 'setRelatedMediaAssets',
        'relevance' => 'setRelevance',
        'description' => 'setDescription',
        'exampleValues' => 'setExampleValues',
        'recommendedValues' => 'setRecommendedValues',
        'reference' => 'setReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'attributeGroup' => 'getAttributeGroup',
        'type' => 'getType',
        'multiValue' => 'getMultiValue',
        'unit' => 'getUnit',
        'unitDisplayName' => 'getUnitDisplayName',
        'allowedValues' => 'getAllowedValues',
        'featureRelevance' => 'getFeatureRelevance',
        'relatedMediaAssets' => 'getRelatedMediaAssets',
        'relevance' => 'getRelevance',
        'description' => 'getDescription',
        'exampleValues' => 'getExampleValues',
        'recommendedValues' => 'getRecommendedValues',
        'reference' => 'getReference'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('attributeGroup', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('multiValue', $data ?? [], null);
        $this->setIfExists('unit', $data ?? [], null);
        $this->setIfExists('unitDisplayName', $data ?? [], null);
        $this->setIfExists('allowedValues', $data ?? [], null);
        $this->setIfExists('featureRelevance', $data ?? [], null);
        $this->setIfExists('relatedMediaAssets', $data ?? [], null);
        $this->setIfExists('relevance', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('exampleValues', $data ?? [], null);
        $this->setIfExists('recommendedValues', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name the name of the attribute. This attribute name has to be used within the product description.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets attributeGroup
     *
     * @return string|null
     */
    public function getAttributeGroup()
    {
        return $this->container['attributeGroup'];
    }

    /**
     * Sets attributeGroup
     *
     * @param string|null $attributeGroup title of the attributes displayed in the product details in the shop.
     *
     * @return self
     */
    public function setAttributeGroup($attributeGroup)
    {
        if (is_null($attributeGroup)) {
            throw new \InvalidArgumentException('non-nullable attributeGroup cannot be null');
        }
        $this->container['attributeGroup'] = $attributeGroup;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type defines the format of the attribute value, such as string, integer, etc.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets multiValue
     *
     * @return bool|null
     */
    public function getMultiValue()
    {
        return $this->container['multiValue'];
    }

    /**
     * Sets multiValue
     *
     * @param bool|null $multiValue if the value is true, several values can be transferred to this attribute (polyvalence attribute); otherwise, only a single value may be transferred to this attribute.
     *
     * @return self
     */
    public function setMultiValue($multiValue)
    {
        if (is_null($multiValue)) {
            throw new \InvalidArgumentException('non-nullable multiValue cannot be null');
        }
        $this->container['multiValue'] = $multiValue;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string|null
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string|null $unit the values must be transferred in the specified unit.
     *
     * @return self
     */
    public function setUnit($unit)
    {
        if (is_null($unit)) {
            throw new \InvalidArgumentException('non-nullable unit cannot be null');
        }
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets unitDisplayName
     *
     * @return string|null
     */
    public function getUnitDisplayName()
    {
        return $this->container['unitDisplayName'];
    }

    /**
     * Sets unitDisplayName
     *
     * @param string|null $unitDisplayName the value gets displayed with this unit in the shop.
     *
     * @return self
     */
    public function setUnitDisplayName($unitDisplayName)
    {
        if (is_null($unitDisplayName)) {
            throw new \InvalidArgumentException('non-nullable unitDisplayName cannot be null');
        }
        $this->container['unitDisplayName'] = $unitDisplayName;

        return $this;
    }

    /**
     * Gets allowedValues
     *
     * @return string[]|null
     */
    public function getAllowedValues()
    {
        return $this->container['allowedValues'];
    }

    /**
     * Sets allowedValues
     *
     * @param string[]|null $allowedValues only the listed values are permitted for the attribute.
     *
     * @return self
     */
    public function setAllowedValues($allowedValues)
    {
        if (is_null($allowedValues)) {
            throw new \InvalidArgumentException('non-nullable allowedValues cannot be null');
        }
        $this->container['allowedValues'] = $allowedValues;

        return $this;
    }

    /**
     * Gets featureRelevance
     *
     * @return string[]|null
     */
    public function getFeatureRelevance()
    {
        return $this->container['featureRelevance'];
    }

    /**
     * Sets featureRelevance
     *
     * @param string[]|null $featureRelevance describes what the attribute can be used for and where it gets displayed in the shop.
     *
     * @return self
     */
    public function setFeatureRelevance($featureRelevance)
    {
        if (is_null($featureRelevance)) {
            throw new \InvalidArgumentException('non-nullable featureRelevance cannot be null');
        }
        $this->container['featureRelevance'] = $featureRelevance;

        return $this;
    }

    /**
     * Gets relatedMediaAssets
     *
     * @return string[]|null
     */
    public function getRelatedMediaAssets()
    {
        return $this->container['relatedMediaAssets'];
    }

    /**
     * Sets relatedMediaAssets
     *
     * @param string[]|null $relatedMediaAssets mandatory media assets for the category
     *
     * @return self
     */
    public function setRelatedMediaAssets($relatedMediaAssets)
    {
        if (is_null($relatedMediaAssets)) {
            throw new \InvalidArgumentException('non-nullable relatedMediaAssets cannot be null');
        }
        $this->container['relatedMediaAssets'] = $relatedMediaAssets;

        return $this;
    }

    /**
     * Gets relevance
     *
     * @return string|null
     */
    public function getRelevance()
    {
        return $this->container['relevance'];
    }

    /**
     * Sets relevance
     *
     * @param string|null $relevance the relevance of the attribute.
     *
     * @return self
     */
    public function setRelevance($relevance)
    {
        if (is_null($relevance)) {
            throw new \InvalidArgumentException('non-nullable relevance cannot be null');
        }
        $this->container['relevance'] = $relevance;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description additional information for the attribute.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets exampleValues
     *
     * @return string[]|null
     */
    public function getExampleValues()
    {
        return $this->container['exampleValues'];
    }

    /**
     * Sets exampleValues
     *
     * @param string[]|null $exampleValues example values for the attribute.
     *
     * @return self
     */
    public function setExampleValues($exampleValues)
    {
        if (is_null($exampleValues)) {
            throw new \InvalidArgumentException('non-nullable exampleValues cannot be null');
        }
        $this->container['exampleValues'] = $exampleValues;

        return $this;
    }

    /**
     * Gets recommendedValues
     *
     * @return string[]|null
     */
    public function getRecommendedValues()
    {
        return $this->container['recommendedValues'];
    }

    /**
     * Sets recommendedValues
     *
     * @param string[]|null $recommendedValues use the listed values to get full navigation and filter features on otto.de. If no suitable value exists, then enter your own value.
     *
     * @return self
     */
    public function setRecommendedValues($recommendedValues)
    {
        if (is_null($recommendedValues)) {
            throw new \InvalidArgumentException('non-nullable recommendedValues cannot be null');
        }
        $this->container['recommendedValues'] = $recommendedValues;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference reference to further documentation.
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (is_null($reference)) {
            throw new \InvalidArgumentException('non-nullable reference cannot be null');
        }
        $this->container['reference'] = $reference;

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


