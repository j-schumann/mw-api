<?php
/**
 * VisitorStatisticsLimit
 *
 * PHP version 5
 *
 * @category Class
 * @package  Mittwald\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Schnittstellen für Mittwald-Kunden
 *
 * >**Für die öffentliche API, alle Bestandteile und diese Dokumentation bieten wir keinen Support. Wir behalten uns vor, Änderungen jederzeit und ohne Ankündigung oder Dokumentation durchzuführen.**  Authentifizierung -----------------  ### Mit Nutzername & Passwort  Zur Authentifizierung wird ein zuvor ausgestelltes API-Token benötigt. Bei Requests kann dieses Token innerhalb eines `Authorization`-Headers übergeben werden:  ```http GET /v1/customers/123456 HTTP/1.1 Host: api.mittwald.de Authorization: Bearer {TOKEN-HIER-EINFÜGEN} ```  Alternativ dazu kann das Token auch in Form des Query-Parameters `access_token` übergeben werden:      GET /v1/customers/123456?access_token={TOKEN-HIER-EINFÜGEN} HTTP/1.1     Host: api.mittwald.de  Um ein Token zu beziehen, kann der `/authenticate`-Endpunkt genutzt werden. Hier erfolgt eine Authentifzierung über die Zugangsdaten des Mittwald-Kundencenters.      POST /v1/authenticate HTTP/1.1     Host: api.mittwald.de     Content-Type: application/json     Accept: application/jwt      {         \"username\": \"r1234\",         \"password\": \"{PASSWORT-HIER-EINFÜGEN}\"     }  Rückgabewert dieses Aufrufs ist ein API-Token. Dieses hat eine begrenzte Gültigkeitsdauer.  **Wichtig**: Client-Applikationen sollten das API-Token für seine Gültigkeitsdauer cachen, und erst *anschließend* ein neues Token über die API anfordern.  ### Mit Access-Token  Für Anwendungen, die dauerhaft Zugriff auf die Mittwald-API benötigen, wird nicht empfohlen, Nutzername und Passwort dauerhaft in der jeweiligen Anwendung zu speichern. Stattdessen empfehlen wir den Einsatz eines Access Tokens, welches nach einem (initialen) Login mit Nutzername und Passwort erstellt und im Anschluss anstelle dessen genutzt werden kann.  Hierzu wird zunächst ein reguläres API-Token benötigt, das per Nutzername und Passwort bezogen werden kann. Weder Nutzername+Passwort noch das damit bezogene API-Token müssen dauerhaft gespeichert werden. Sie dienen lediglich dazu, ein Access Token zu erstellen, welches im Anschluss dauerhaft in der Applikation gespeichert werden kann:  ``` POST /v1/authentication/tokens HTTP/1.1 Host: api.mittwald.de Content-Type: application/json  {   \"description\": \"Meine Anwendung\" } ```  In der Antwort auf obige Anfrage ist das eigentliche Access Token und dessen ID enthalten (mit Beispiel-Daten):  ``` HTTP/1.1 201 Created Content-Type: application/json  {   \"uuid\": \"2a91ce52-2058-404b-9959-ac7d2fbbbfbc\",   \"token\": \"MW_aEQyz5j9YmTaamTq2N9X3d2sBDACLUoz\",   \"crdate\": \"2021-08-23T14:06:17.580Z\",   \"description\": \"Meine Anwendung\" } ```  `uuid` und `token` dieser Antwort können bei nachfolgenden Authentifzierungs-Vorgängen als Nutzername und Passwort genutzt werden.  Rate Limiting -------------  Zur Sicherstellung der Systemstabilität sind einige API-Endpunkte in der Anzahl der durchführbaren Anfragen beschränkt. Die Limitierung bezieht sich dabei stets auf ein Zeitfenster von 15 Minuten.  Bei auf diese Weise zugriffsbeschränkten API-Endpunkten enthalten die HTTP-Antworten stets einen `X-RateLimit`-Header, welcher die maximale Anzahl der ausführbaren Anfragen enthält. Außerdem enthält jede Antwort einen `X-RateLimit-Remaining`-Header, welcher die aktuell noch verfügbaren Anfragen enthält:      HTTP/1.1 200 OK     Content-Type: application/json;charset=utf8     Content-Length: 1234     X-RateLimit: 1000     X-RateLimit-Remaining: 712  Caching -------  Einige Anfragen an die API können zwecks besserer Performance aus einem serverseitigen Cache beantwortet werden. Wurde eine Anfrage aus dem Cache beantwortet, enthält die Antwort einen `X-Cache: HIT`-Header.  Der Cache einer Ressource wird dann geleert, wenn ein `POST`-, `PUT`- oder `DELETE`-Request an dieselbe URI gesendet wird, oder bei einem `GET`-Request ein `Cache-Control: no-cache`-Header gesendet wird.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.54
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
 * VisitorStatisticsLimit Class Doc Comment
 *
 * @category Class
 * @package  Mittwald\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VisitorStatisticsLimit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VisitorStatistics_limit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'article' => '\Mittwald\Api\Model\VisitorStatisticsLimitArticle',
        'maximum' => 'float',
        'maximum_updated_at' => '\DateTime',
        'usage' => 'float',
        'usage_absolute' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'article' => null,
        'maximum' => null,
        'maximum_updated_at' => 'date-time',
        'usage' => null,
        'usage_absolute' => 'integer'
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
        'article' => 'article',
        'maximum' => 'maximum',
        'maximum_updated_at' => 'maximum_updated_at',
        'usage' => 'usage',
        'usage_absolute' => 'usage_absolute'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'article' => 'setArticle',
        'maximum' => 'setMaximum',
        'maximum_updated_at' => 'setMaximumUpdatedAt',
        'usage' => 'setUsage',
        'usage_absolute' => 'setUsageAbsolute'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'article' => 'getArticle',
        'maximum' => 'getMaximum',
        'maximum_updated_at' => 'getMaximumUpdatedAt',
        'usage' => 'getUsage',
        'usage_absolute' => 'getUsageAbsolute'
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
        $this->container['article'] = isset($data['article']) ? $data['article'] : null;
        $this->container['maximum'] = isset($data['maximum']) ? $data['maximum'] : null;
        $this->container['maximum_updated_at'] = isset($data['maximum_updated_at']) ? $data['maximum_updated_at'] : null;
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
        $this->container['usage_absolute'] = isset($data['usage_absolute']) ? $data['usage_absolute'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['article'] === null) {
            $invalidProperties[] = "'article' can't be null";
        }
        if ($this->container['maximum'] === null) {
            $invalidProperties[] = "'maximum' can't be null";
        }
        if ($this->container['usage'] === null) {
            $invalidProperties[] = "'usage' can't be null";
        }
        if ($this->container['usage_absolute'] === null) {
            $invalidProperties[] = "'usage_absolute' can't be null";
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
     * Gets article
     *
     * @return \Mittwald\Api\Model\VisitorStatisticsLimitArticle
     */
    public function getArticle()
    {
        return $this->container['article'];
    }

    /**
     * Sets article
     *
     * @param \Mittwald\Api\Model\VisitorStatisticsLimitArticle $article article
     *
     * @return $this
     */
    public function setArticle($article)
    {
        $this->container['article'] = $article;

        return $this;
    }

    /**
     * Gets maximum
     *
     * @return float
     */
    public function getMaximum()
    {
        return $this->container['maximum'];
    }

    /**
     * Sets maximum
     *
     * @param float $maximum Vorgesehene monatliche Besucherzahl
     *
     * @return $this
     */
    public function setMaximum($maximum)
    {
        $this->container['maximum'] = $maximum;

        return $this;
    }

    /**
     * Gets maximum_updated_at
     *
     * @return \DateTime
     */
    public function getMaximumUpdatedAt()
    {
        return $this->container['maximum_updated_at'];
    }

    /**
     * Sets maximum_updated_at
     *
     * @param \DateTime $maximum_updated_at Zeitpunkt der letzten Veränderung der monatlichen Besucherzahl
     *
     * @return $this
     */
    public function setMaximumUpdatedAt($maximum_updated_at)
    {
        $this->container['maximum_updated_at'] = $maximum_updated_at;

        return $this;
    }

    /**
     * Gets usage
     *
     * @return float
     */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
     * Sets usage
     *
     * @param float $usage Relative Auslastung (0 bis 1) der vorgesehen monatlichen Besucherzahl
     *
     * @return $this
     */
    public function setUsage($usage)
    {
        $this->container['usage'] = $usage;

        return $this;
    }

    /**
     * Gets usage_absolute
     *
     * @return float
     */
    public function getUsageAbsolute()
    {
        return $this->container['usage_absolute'];
    }

    /**
     * Sets usage_absolute
     *
     * @param float $usage_absolute Absolute Anzahl der bisherigen monatlichen Besucher
     *
     * @return $this
     */
    public function setUsageAbsolute($usage_absolute)
    {
        $this->container['usage_absolute'] = $usage_absolute;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
