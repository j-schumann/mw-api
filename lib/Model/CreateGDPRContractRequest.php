<?php
/**
 * CreateGDPRContractRequest
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
 * CreateGDPRContractRequest Class Doc Comment
 *
 * @category Class
 * @package  Mittwald\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateGDPRContractRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateGDPRContractRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'html' => 'string',
        'tom' => 'string',
        'client' => 'string',
        'recipient' => 'string',
        'is_partner_contract' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'html' => null,
        'tom' => null,
        'client' => null,
        'recipient' => null,
        'is_partner_contract' => null
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
        'html' => 'html',
        'tom' => 'tom',
        'client' => 'client',
        'recipient' => 'recipient',
        'is_partner_contract' => 'isPartnerContract'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'html' => 'setHtml',
        'tom' => 'setTom',
        'client' => 'setClient',
        'recipient' => 'setRecipient',
        'is_partner_contract' => 'setIsPartnerContract'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'html' => 'getHtml',
        'tom' => 'getTom',
        'client' => 'getClient',
        'recipient' => 'getRecipient',
        'is_partner_contract' => 'getIsPartnerContract'
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
        $this->container['html'] = isset($data['html']) ? $data['html'] : null;
        $this->container['tom'] = isset($data['tom']) ? $data['tom'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['recipient'] = isset($data['recipient']) ? $data['recipient'] : null;
        $this->container['is_partner_contract'] = isset($data['is_partner_contract']) ? $data['is_partner_contract'] : false;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['html'] === null) {
            $invalidProperties[] = "'html' can't be null";
        }
        if ($this->container['tom'] === null) {
            $invalidProperties[] = "'tom' can't be null";
        }
        if ($this->container['client'] === null) {
            $invalidProperties[] = "'client' can't be null";
        }
        if ($this->container['recipient'] === null) {
            $invalidProperties[] = "'recipient' can't be null";
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

        if ($this->container['html'] === null) {
            return false;
        }
        if ($this->container['tom'] === null) {
            return false;
        }
        if ($this->container['client'] === null) {
            return false;
        }
        if ($this->container['recipient'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets html
     *
     * @return string
     */
    public function getHtml()
    {
        return $this->container['html'];
    }

    /**
     * Sets html
     *
     * @param string $html html
     *
     * @return $this
     */
    public function setHtml($html)
    {
        $this->container['html'] = $html;

        return $this;
    }

    /**
     * Gets tom
     *
     * @return string
     */
    public function getTom()
    {
        return $this->container['tom'];
    }

    /**
     * Sets tom
     *
     * @param string $tom Die ID des verwendeten TOMs
     *
     * @return $this
     */
    public function setTom($tom)
    {
        $this->container['tom'] = $tom;

        return $this;
    }

    /**
     * Gets client
     *
     * @return string
     */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     *
     * @param string $client Der Auftraggeber des Vertrags in Form einer ID eines bereits angelegten DSGVO Adressdatensatzes
     *
     * @return $this
     */
    public function setClient($client)
    {
        $this->container['client'] = $client;

        return $this;
    }

    /**
     * Gets recipient
     *
     * @return string
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param string $recipient Der Auftragnehmer des Vertrags in Form einer ID eines bereits angelegten DSGVO Adressdatensatzes
     *
     * @return $this
     */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;

        return $this;
    }

    /**
     * Gets is_partner_contract
     *
     * @return bool
     */
    public function getIsPartnerContract()
    {
        return $this->container['is_partner_contract'];
    }

    /**
     * Sets is_partner_contract
     *
     * @param bool $is_partner_contract is_partner_contract
     *
     * @return $this
     */
    public function setIsPartnerContract($is_partner_contract)
    {
        $this->container['is_partner_contract'] = $is_partner_contract;

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

