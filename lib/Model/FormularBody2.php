<?php
/**
 * FormularBody2
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
 * Swagger Codegen version: 2.4.20
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
 * FormularBody2 Class Doc Comment
 *
 * @category Class
 * @package  Mittwald\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FormularBody2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FormularBody_2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pin_code' => 'float',
        'source_account' => 'string',
        'source_reseller' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pin_code' => null,
        'source_account' => null,
        'source_reseller' => null
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
        'pin_code' => 'pinCode',
        'source_account' => 'sourceAccount',
        'source_reseller' => 'sourceReseller'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pin_code' => 'setPinCode',
        'source_account' => 'setSourceAccount',
        'source_reseller' => 'setSourceReseller'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pin_code' => 'getPinCode',
        'source_account' => 'getSourceAccount',
        'source_reseller' => 'getSourceReseller'
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
        $this->container['pin_code'] = isset($data['pin_code']) ? $data['pin_code'] : null;
        $this->container['source_account'] = isset($data['source_account']) ? $data['source_account'] : null;
        $this->container['source_reseller'] = isset($data['source_reseller']) ? $data['source_reseller'] : null;
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
     * Gets pin_code
     *
     * @return float
     */
    public function getPinCode()
    {
        return $this->container['pin_code'];
    }

    /**
     * Sets pin_code
     *
     * @param float $pin_code Der 6-stellige Pin-Code
     *
     * @return $this
     */
    public function setPinCode($pin_code)
    {
        $this->container['pin_code'] = $pin_code;

        return $this;
    }

    /**
     * Gets source_account
     *
     * @return string
     */
    public function getSourceAccount()
    {
        return $this->container['source_account'];
    }

    /**
     * Sets source_account
     *
     * @param string $source_account Name des Projektes
     *
     * @return $this
     */
    public function setSourceAccount($source_account)
    {
        $this->container['source_account'] = $source_account;

        return $this;
    }

    /**
     * Gets source_reseller
     *
     * @return string
     */
    public function getSourceReseller()
    {
        return $this->container['source_reseller'];
    }

    /**
     * Sets source_reseller
     *
     * @param string $source_reseller Name des Resellers
     *
     * @return $this
     */
    public function setSourceReseller($source_reseller)
    {
        $this->container['source_reseller'] = $source_reseller;

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

