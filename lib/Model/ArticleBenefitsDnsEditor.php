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
