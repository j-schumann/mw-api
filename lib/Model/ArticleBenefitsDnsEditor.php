<?php
/**
 * ArticleBenefitsDnsEditor
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
 * Swagger Codegen version: 2.4.9
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
 * ArticleBenefitsDnsEditor Class Doc Comment
 *
 * @category Class
 * @package  Mittwald\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ArticleBenefitsDnsEditor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Article_benefits_dnsEditor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'active' => 'bool',
        'editor_a' => 'bool',
        'editor_cname' => 'bool',
        'editor_mx' => 'bool',
        'editor_srv' => 'bool',
        'editor_txt' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'active' => null,
        'editor_a' => null,
        'editor_cname' => null,
        'editor_mx' => null,
        'editor_srv' => null,
        'editor_txt' => null
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
        'active' => 'active',
        'editor_a' => 'editorA',
        'editor_cname' => 'editorCNAME',
        'editor_mx' => 'editorMX',
        'editor_srv' => 'editorSRV',
        'editor_txt' => 'editorTXT'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'editor_a' => 'setEditorA',
        'editor_cname' => 'setEditorCname',
        'editor_mx' => 'setEditorMx',
        'editor_srv' => 'setEditorSrv',
        'editor_txt' => 'setEditorTxt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'editor_a' => 'getEditorA',
        'editor_cname' => 'getEditorCname',
        'editor_mx' => 'getEditorMx',
        'editor_srv' => 'getEditorSrv',
        'editor_txt' => 'getEditorTxt'
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
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['editor_a'] = isset($data['editor_a']) ? $data['editor_a'] : null;
        $this->container['editor_cname'] = isset($data['editor_cname']) ? $data['editor_cname'] : null;
        $this->container['editor_mx'] = isset($data['editor_mx']) ? $data['editor_mx'] : null;
        $this->container['editor_srv'] = isset($data['editor_srv']) ? $data['editor_srv'] : null;
        $this->container['editor_txt'] = isset($data['editor_txt']) ? $data['editor_txt'] : null;
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
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets editor_a
     *
     * @return bool
     */
    public function getEditorA()
    {
        return $this->container['editor_a'];
    }

    /**
     * Sets editor_a
     *
     * @param bool $editor_a editor_a
     *
     * @return $this
     */
    public function setEditorA($editor_a)
    {
        $this->container['editor_a'] = $editor_a;

        return $this;
    }

    /**
     * Gets editor_cname
     *
     * @return bool
     */
    public function getEditorCname()
    {
        return $this->container['editor_cname'];
    }

    /**
     * Sets editor_cname
     *
     * @param bool $editor_cname editor_cname
     *
     * @return $this
     */
    public function setEditorCname($editor_cname)
    {
        $this->container['editor_cname'] = $editor_cname;

        return $this;
    }

    /**
     * Gets editor_mx
     *
     * @return bool
     */
    public function getEditorMx()
    {
        return $this->container['editor_mx'];
    }

    /**
     * Sets editor_mx
     *
     * @param bool $editor_mx editor_mx
     *
     * @return $this
     */
    public function setEditorMx($editor_mx)
    {
        $this->container['editor_mx'] = $editor_mx;

        return $this;
    }

    /**
     * Gets editor_srv
     *
     * @return bool
     */
    public function getEditorSrv()
    {
        return $this->container['editor_srv'];
    }

    /**
     * Sets editor_srv
     *
     * @param bool $editor_srv editor_srv
     *
     * @return $this
     */
    public function setEditorSrv($editor_srv)
    {
        $this->container['editor_srv'] = $editor_srv;

        return $this;
    }

    /**
     * Gets editor_txt
     *
     * @return bool
     */
    public function getEditorTxt()
    {
        return $this->container['editor_txt'];
    }

    /**
     * Sets editor_txt
     *
     * @param bool $editor_txt editor_txt
     *
     * @return $this
     */
    public function setEditorTxt($editor_txt)
    {
        $this->container['editor_txt'] = $editor_txt;

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


