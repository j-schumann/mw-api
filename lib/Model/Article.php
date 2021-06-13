<?php
/**
 * Article
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
 * Article Class Doc Comment
 *
 * @category Class
 * @package  Mittwald\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Article implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Article';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'article_number' => 'int',
        'is_orderable' => 'bool',
        'price' => '\Mittwald\Api\Model\ArticlePrice',
        'description' => '\Mittwald\Api\Model\ArticleDescription',
        'contract' => '\Mittwald\Api\Model\ArticleContract',
        'billing' => '\Mittwald\Api\Model\ArticleBilling',
        'commission' => '\Mittwald\Api\Model\ArticlePrice',
        'article_groups' => '\Mittwald\Api\Model\ArticleGroup[]',
        'benefits' => '\Mittwald\Api\Model\ArticleBenefits',
        'configuration_data' => '\Mittwald\Api\Model\ArticleConfigurationData',
        'article_options' => '\Mittwald\Api\Model\ArticleArticleOptions',
        'cross_selling_articles' => '\Mittwald\Api\Model\CrossSellingOption[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'article_number' => null,
        'is_orderable' => null,
        'price' => null,
        'description' => null,
        'contract' => null,
        'billing' => null,
        'commission' => null,
        'article_groups' => null,
        'benefits' => null,
        'configuration_data' => null,
        'article_options' => null,
        'cross_selling_articles' => null
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
        'article_number' => 'articleNumber',
        'is_orderable' => 'isOrderable',
        'price' => 'price',
        'description' => 'description',
        'contract' => 'contract',
        'billing' => 'billing',
        'commission' => 'commission',
        'article_groups' => 'articleGroups',
        'benefits' => 'benefits',
        'configuration_data' => 'configurationData',
        'article_options' => 'articleOptions',
        'cross_selling_articles' => 'crossSellingArticles'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'article_number' => 'setArticleNumber',
        'is_orderable' => 'setIsOrderable',
        'price' => 'setPrice',
        'description' => 'setDescription',
        'contract' => 'setContract',
        'billing' => 'setBilling',
        'commission' => 'setCommission',
        'article_groups' => 'setArticleGroups',
        'benefits' => 'setBenefits',
        'configuration_data' => 'setConfigurationData',
        'article_options' => 'setArticleOptions',
        'cross_selling_articles' => 'setCrossSellingArticles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'article_number' => 'getArticleNumber',
        'is_orderable' => 'getIsOrderable',
        'price' => 'getPrice',
        'description' => 'getDescription',
        'contract' => 'getContract',
        'billing' => 'getBilling',
        'commission' => 'getCommission',
        'article_groups' => 'getArticleGroups',
        'benefits' => 'getBenefits',
        'configuration_data' => 'getConfigurationData',
        'article_options' => 'getArticleOptions',
        'cross_selling_articles' => 'getCrossSellingArticles'
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
        $this->container['article_number'] = isset($data['article_number']) ? $data['article_number'] : null;
        $this->container['is_orderable'] = isset($data['is_orderable']) ? $data['is_orderable'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['commission'] = isset($data['commission']) ? $data['commission'] : null;
        $this->container['article_groups'] = isset($data['article_groups']) ? $data['article_groups'] : null;
        $this->container['benefits'] = isset($data['benefits']) ? $data['benefits'] : null;
        $this->container['configuration_data'] = isset($data['configuration_data']) ? $data['configuration_data'] : null;
        $this->container['article_options'] = isset($data['article_options']) ? $data['article_options'] : null;
        $this->container['cross_selling_articles'] = isset($data['cross_selling_articles']) ? $data['cross_selling_articles'] : null;
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
     * Gets article_number
     *
     * @return int
     */
    public function getArticleNumber()
    {
        return $this->container['article_number'];
    }

    /**
     * Sets article_number
     *
     * @param int $article_number article_number
     *
     * @return $this
     */
    public function setArticleNumber($article_number)
    {
        $this->container['article_number'] = $article_number;

        return $this;
    }

    /**
     * Gets is_orderable
     *
     * @return bool
     */
    public function getIsOrderable()
    {
        return $this->container['is_orderable'];
    }

    /**
     * Sets is_orderable
     *
     * @param bool $is_orderable is_orderable
     *
     * @return $this
     */
    public function setIsOrderable($is_orderable)
    {
        $this->container['is_orderable'] = $is_orderable;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \Mittwald\Api\Model\ArticlePrice
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Mittwald\Api\Model\ArticlePrice $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \Mittwald\Api\Model\ArticleDescription
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \Mittwald\Api\Model\ArticleDescription $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets contract
     *
     * @return \Mittwald\Api\Model\ArticleContract
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param \Mittwald\Api\Model\ArticleContract $contract contract
     *
     * @return $this
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets billing
     *
     * @return \Mittwald\Api\Model\ArticleBilling
     */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
     * Sets billing
     *
     * @param \Mittwald\Api\Model\ArticleBilling $billing billing
     *
     * @return $this
     */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;

        return $this;
    }

    /**
     * Gets commission
     *
     * @return \Mittwald\Api\Model\ArticlePrice
     */
    public function getCommission()
    {
        return $this->container['commission'];
    }

    /**
     * Sets commission
     *
     * @param \Mittwald\Api\Model\ArticlePrice $commission commission
     *
     * @return $this
     */
    public function setCommission($commission)
    {
        $this->container['commission'] = $commission;

        return $this;
    }

    /**
     * Gets article_groups
     *
     * @return \Mittwald\Api\Model\ArticleGroup[]
     */
    public function getArticleGroups()
    {
        return $this->container['article_groups'];
    }

    /**
     * Sets article_groups
     *
     * @param \Mittwald\Api\Model\ArticleGroup[] $article_groups article_groups
     *
     * @return $this
     */
    public function setArticleGroups($article_groups)
    {
        $this->container['article_groups'] = $article_groups;

        return $this;
    }

    /**
     * Gets benefits
     *
     * @return \Mittwald\Api\Model\ArticleBenefits
     */
    public function getBenefits()
    {
        return $this->container['benefits'];
    }

    /**
     * Sets benefits
     *
     * @param \Mittwald\Api\Model\ArticleBenefits $benefits benefits
     *
     * @return $this
     */
    public function setBenefits($benefits)
    {
        $this->container['benefits'] = $benefits;

        return $this;
    }

    /**
     * Gets configuration_data
     *
     * @return \Mittwald\Api\Model\ArticleConfigurationData
     */
    public function getConfigurationData()
    {
        return $this->container['configuration_data'];
    }

    /**
     * Sets configuration_data
     *
     * @param \Mittwald\Api\Model\ArticleConfigurationData $configuration_data configuration_data
     *
     * @return $this
     */
    public function setConfigurationData($configuration_data)
    {
        $this->container['configuration_data'] = $configuration_data;

        return $this;
    }

    /**
     * Gets article_options
     *
     * @return \Mittwald\Api\Model\ArticleArticleOptions
     */
    public function getArticleOptions()
    {
        return $this->container['article_options'];
    }

    /**
     * Sets article_options
     *
     * @param \Mittwald\Api\Model\ArticleArticleOptions $article_options article_options
     *
     * @return $this
     */
    public function setArticleOptions($article_options)
    {
        $this->container['article_options'] = $article_options;

        return $this;
    }

    /**
     * Gets cross_selling_articles
     *
     * @return \Mittwald\Api\Model\CrossSellingOption[]
     */
    public function getCrossSellingArticles()
    {
        return $this->container['cross_selling_articles'];
    }

    /**
     * Sets cross_selling_articles
     *
     * @param \Mittwald\Api\Model\CrossSellingOption[] $cross_selling_articles cross_selling_articles
     *
     * @return $this
     */
    public function setCrossSellingArticles($cross_selling_articles)
    {
        $this->container['cross_selling_articles'] = $cross_selling_articles;

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


