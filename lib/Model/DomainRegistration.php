<?php
/**
 * DomainRegistration
 *
 * PHP version 5
 *
 * @category Class
 * @package  Mittwald\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Public API
 *
 * Schnittstellen für Mittwald-Kunden
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Mittwald\Api\Model;

use \ArrayAccess;
use \Mittwald\Api\ObjectSerializer;

/**
 * DomainRegistration Class Doc Comment
 *
 * @category Class
 * @package  Mittwald\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DomainRegistration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DomainRegistration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'handles' => '\Mittwald\Api\Model\Handles',
        'sld' => 'string',
        'tld' => 'string',
        'domain_name_transfer' => '\Mittwald\Api\Model\DomainNameTransfer',
        'external' => 'bool',
        'target' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'handles' => null,
        'sld' => null,
        'tld' => null,
        'domain_name_transfer' => null,
        'external' => null,
        'target' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'handles' => 'handles',
        'sld' => 'sld',
        'tld' => 'tld',
        'domain_name_transfer' => 'domainNameTransfer',
        'external' => 'external',
        'target' => 'target'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'handles' => 'setHandles',
        'sld' => 'setSld',
        'tld' => 'setTld',
        'domain_name_transfer' => 'setDomainNameTransfer',
        'external' => 'setExternal',
        'target' => 'setTarget'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'handles' => 'getHandles',
        'sld' => 'getSld',
        'tld' => 'getTld',
        'domain_name_transfer' => 'getDomainNameTransfer',
        'external' => 'getExternal',
        'target' => 'getTarget'
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
        return self::$swaggerModelName;
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['handles'] = isset($data['handles']) ? $data['handles'] : null;
        $this->container['sld'] = isset($data['sld']) ? $data['sld'] : null;
        $this->container['tld'] = isset($data['tld']) ? $data['tld'] : null;
        $this->container['domain_name_transfer'] = isset($data['domain_name_transfer']) ? $data['domain_name_transfer'] : null;
        $this->container['external'] = isset($data['external']) ? $data['external'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sld'] === null) {
            $invalidProperties[] = "'sld' can't be null";
        }
        if ($this->container['tld'] === null) {
            $invalidProperties[] = "'tld' can't be null";
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

        if ($this->container['sld'] === null) {
            return false;
        }
        if ($this->container['tld'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets handles
     *
     * @return \Mittwald\Api\Model\Handles
     */
    public function getHandles()
    {
        return $this->container['handles'];
    }

    /**
     * Sets handles
     *
     * @param \Mittwald\Api\Model\Handles $handles handles
     *
     * @return $this
     */
    public function setHandles($handles)
    {
        $this->container['handles'] = $handles;

        return $this;
    }

    /**
     * Gets sld
     *
     * @return string
     */
    public function getSld()
    {
        return $this->container['sld'];
    }

    /**
     * Sets sld
     *
     * @param string $sld sld
     *
     * @return $this
     */
    public function setSld($sld)
    {
        $this->container['sld'] = $sld;

        return $this;
    }

    /**
     * Gets tld
     *
     * @return string
     */
    public function getTld()
    {
        return $this->container['tld'];
    }

    /**
     * Sets tld
     *
     * @param string $tld tld
     *
     * @return $this
     */
    public function setTld($tld)
    {
        $this->container['tld'] = $tld;

        return $this;
    }

    /**
     * Gets domain_name_transfer
     *
     * @return \Mittwald\Api\Model\DomainNameTransfer
     */
    public function getDomainNameTransfer()
    {
        return $this->container['domain_name_transfer'];
    }

    /**
     * Sets domain_name_transfer
     *
     * @param \Mittwald\Api\Model\DomainNameTransfer $domain_name_transfer domain_name_transfer
     *
     * @return $this
     */
    public function setDomainNameTransfer($domain_name_transfer)
    {
        $this->container['domain_name_transfer'] = $domain_name_transfer;

        return $this;
    }

    /**
     * Gets external
     *
     * @return bool
     */
    public function getExternal()
    {
        return $this->container['external'];
    }

    /**
     * Sets external
     *
     * @param bool $external Gesetzt, wenn es sich um einen Virtual Host Eintrag handeln soll
     *
     * @return $this
     */
    public function setExternal($external)
    {
        $this->container['external'] = $external;

        return $this;
    }

    /**
     * Gets target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     *
     * @param string $target Bei Virtual Host Einträgen kann direkt das Zielverzeichnis mit angegeben werden
     *
     * @return $this
     */
    public function setTarget($target)
    {
        $this->container['target'] = $target;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

