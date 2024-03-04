<?php
/**
 * Cart
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
 * Cart Class Doc Comment
 *
 * @category Class
 * @package  Mittwald\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Cart implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Cart';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_id' => 'string',
        'items' => '\Mittwald\Api\Model\Article[]',
        'jwt' => 'string',
        'promotion_code' => 'string',
        'newsletter' => 'bool',
        'offer' => 'float',
        'software' => 'string',
        'os' => 'string',
        'note' => 'string',
        'mysql_version' => 'string',
        'database_partition_percentage' => 'float',
        'source_account' => 'string',
        'source_reseller' => 'string',
        'agency_server' => 'float',
        'stay_on_hardware' => 'bool',
        'testing' => 'bool',
        'billing_period' => 'float',
        'customer_billing_period' => 'float',
        'commission' => 'string',
        'is_commission_locked' => 'bool',
        'due_date' => 'float',
        'project_name' => 'string',
        'project_password' => 'string',
        'contract_partner' => '\Mittwald\Api\Model\Contact',
        'contact_person' => '\Mittwald\Api\Model\Contact',
        'billing_address' => '\Mittwald\Api\Model\Contact',
        'payment_settings' => '\Mittwald\Api\Model\PaymentSettings'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_id' => null,
        'items' => null,
        'jwt' => null,
        'promotion_code' => null,
        'newsletter' => null,
        'offer' => null,
        'software' => null,
        'os' => null,
        'note' => null,
        'mysql_version' => null,
        'database_partition_percentage' => null,
        'source_account' => null,
        'source_reseller' => null,
        'agency_server' => null,
        'stay_on_hardware' => null,
        'testing' => null,
        'billing_period' => null,
        'customer_billing_period' => null,
        'commission' => null,
        'is_commission_locked' => null,
        'due_date' => null,
        'project_name' => null,
        'project_password' => null,
        'contract_partner' => null,
        'contact_person' => null,
        'billing_address' => null,
        'payment_settings' => null
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
        '_id' => '_id',
        'items' => 'items',
        'jwt' => 'jwt',
        'promotion_code' => 'promotionCode',
        'newsletter' => 'newsletter',
        'offer' => 'offer',
        'software' => 'software',
        'os' => 'os',
        'note' => 'note',
        'mysql_version' => 'mysqlVersion',
        'database_partition_percentage' => 'databasePartitionPercentage',
        'source_account' => 'sourceAccount',
        'source_reseller' => 'sourceReseller',
        'agency_server' => 'agencyServer',
        'stay_on_hardware' => 'stayOnHardware',
        'testing' => 'testing',
        'billing_period' => 'billingPeriod',
        'customer_billing_period' => 'customerBillingPeriod',
        'commission' => 'commission',
        'is_commission_locked' => 'isCommissionLocked',
        'due_date' => 'dueDate',
        'project_name' => 'projectName',
        'project_password' => 'projectPassword',
        'contract_partner' => 'contractPartner',
        'contact_person' => 'contactPerson',
        'billing_address' => 'billingAddress',
        'payment_settings' => 'paymentSettings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'setId',
        'items' => 'setItems',
        'jwt' => 'setJwt',
        'promotion_code' => 'setPromotionCode',
        'newsletter' => 'setNewsletter',
        'offer' => 'setOffer',
        'software' => 'setSoftware',
        'os' => 'setOs',
        'note' => 'setNote',
        'mysql_version' => 'setMysqlVersion',
        'database_partition_percentage' => 'setDatabasePartitionPercentage',
        'source_account' => 'setSourceAccount',
        'source_reseller' => 'setSourceReseller',
        'agency_server' => 'setAgencyServer',
        'stay_on_hardware' => 'setStayOnHardware',
        'testing' => 'setTesting',
        'billing_period' => 'setBillingPeriod',
        'customer_billing_period' => 'setCustomerBillingPeriod',
        'commission' => 'setCommission',
        'is_commission_locked' => 'setIsCommissionLocked',
        'due_date' => 'setDueDate',
        'project_name' => 'setProjectName',
        'project_password' => 'setProjectPassword',
        'contract_partner' => 'setContractPartner',
        'contact_person' => 'setContactPerson',
        'billing_address' => 'setBillingAddress',
        'payment_settings' => 'setPaymentSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'getId',
        'items' => 'getItems',
        'jwt' => 'getJwt',
        'promotion_code' => 'getPromotionCode',
        'newsletter' => 'getNewsletter',
        'offer' => 'getOffer',
        'software' => 'getSoftware',
        'os' => 'getOs',
        'note' => 'getNote',
        'mysql_version' => 'getMysqlVersion',
        'database_partition_percentage' => 'getDatabasePartitionPercentage',
        'source_account' => 'getSourceAccount',
        'source_reseller' => 'getSourceReseller',
        'agency_server' => 'getAgencyServer',
        'stay_on_hardware' => 'getStayOnHardware',
        'testing' => 'getTesting',
        'billing_period' => 'getBillingPeriod',
        'customer_billing_period' => 'getCustomerBillingPeriod',
        'commission' => 'getCommission',
        'is_commission_locked' => 'getIsCommissionLocked',
        'due_date' => 'getDueDate',
        'project_name' => 'getProjectName',
        'project_password' => 'getProjectPassword',
        'contract_partner' => 'getContractPartner',
        'contact_person' => 'getContactPerson',
        'billing_address' => 'getBillingAddress',
        'payment_settings' => 'getPaymentSettings'
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
        $this->container['_id'] = isset($data['_id']) ? $data['_id'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['jwt'] = isset($data['jwt']) ? $data['jwt'] : null;
        $this->container['promotion_code'] = isset($data['promotion_code']) ? $data['promotion_code'] : null;
        $this->container['newsletter'] = isset($data['newsletter']) ? $data['newsletter'] : null;
        $this->container['offer'] = isset($data['offer']) ? $data['offer'] : null;
        $this->container['software'] = isset($data['software']) ? $data['software'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['mysql_version'] = isset($data['mysql_version']) ? $data['mysql_version'] : null;
        $this->container['database_partition_percentage'] = isset($data['database_partition_percentage']) ? $data['database_partition_percentage'] : null;
        $this->container['source_account'] = isset($data['source_account']) ? $data['source_account'] : null;
        $this->container['source_reseller'] = isset($data['source_reseller']) ? $data['source_reseller'] : null;
        $this->container['agency_server'] = isset($data['agency_server']) ? $data['agency_server'] : null;
        $this->container['stay_on_hardware'] = isset($data['stay_on_hardware']) ? $data['stay_on_hardware'] : null;
        $this->container['testing'] = isset($data['testing']) ? $data['testing'] : null;
        $this->container['billing_period'] = isset($data['billing_period']) ? $data['billing_period'] : null;
        $this->container['customer_billing_period'] = isset($data['customer_billing_period']) ? $data['customer_billing_period'] : null;
        $this->container['commission'] = isset($data['commission']) ? $data['commission'] : null;
        $this->container['is_commission_locked'] = isset($data['is_commission_locked']) ? $data['is_commission_locked'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['project_name'] = isset($data['project_name']) ? $data['project_name'] : null;
        $this->container['project_password'] = isset($data['project_password']) ? $data['project_password'] : null;
        $this->container['contract_partner'] = isset($data['contract_partner']) ? $data['contract_partner'] : null;
        $this->container['contact_person'] = isset($data['contact_person']) ? $data['contact_person'] : null;
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
        $this->container['payment_settings'] = isset($data['payment_settings']) ? $data['payment_settings'] : null;
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
     * Gets _id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['_id'];
    }

    /**
     * Sets _id
     *
     * @param string $_id _id
     *
     * @return $this
     */
    public function setId($_id)
    {
        $this->container['_id'] = $_id;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Mittwald\Api\Model\Article[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Mittwald\Api\Model\Article[] $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets jwt
     *
     * @return string
     */
    public function getJwt()
    {
        return $this->container['jwt'];
    }

    /**
     * Sets jwt
     *
     * @param string $jwt Set a new jwt for this cart.
     *
     * @return $this
     */
    public function setJwt($jwt)
    {
        $this->container['jwt'] = $jwt;

        return $this;
    }

    /**
     * Gets promotion_code
     *
     * @return string
     */
    public function getPromotionCode()
    {
        return $this->container['promotion_code'];
    }

    /**
     * Sets promotion_code
     *
     * @param string $promotion_code promotion_code
     *
     * @return $this
     */
    public function setPromotionCode($promotion_code)
    {
        $this->container['promotion_code'] = $promotion_code;

        return $this;
    }

    /**
     * Gets newsletter
     *
     * @return bool
     */
    public function getNewsletter()
    {
        return $this->container['newsletter'];
    }

    /**
     * Sets newsletter
     *
     * @param bool $newsletter newsletter
     *
     * @return $this
     */
    public function setNewsletter($newsletter)
    {
        $this->container['newsletter'] = $newsletter;

        return $this;
    }

    /**
     * Gets offer
     *
     * @return float
     */
    public function getOffer()
    {
        return $this->container['offer'];
    }

    /**
     * Sets offer
     *
     * @param float $offer offer
     *
     * @return $this
     */
    public function setOffer($offer)
    {
        $this->container['offer'] = $offer;

        return $this;
    }

    /**
     * Gets software
     *
     * @return string
     */
    public function getSoftware()
    {
        return $this->container['software'];
    }

    /**
     * Sets software
     *
     * @param string $software The software to install for the order.
     *
     * @return $this
     */
    public function setSoftware($software)
    {
        $this->container['software'] = $software;

        return $this;
    }

    /**
     * Gets os
     *
     * @return string
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     *
     * @param string $os The operating system to install for the order.
     *
     * @return $this
     */
    public function setOs($os)
    {
        $this->container['os'] = $os;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note Store a customer note for the order.
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets mysql_version
     *
     * @return string
     */
    public function getMysqlVersion()
    {
        return $this->container['mysql_version'];
    }

    /**
     * Sets mysql_version
     *
     * @param string $mysql_version The MySQL-Version to use for the order.
     *
     * @return $this
     */
    public function setMysqlVersion($mysql_version)
    {
        $this->container['mysql_version'] = $mysql_version;

        return $this;
    }

    /**
     * Gets database_partition_percentage
     *
     * @return float
     */
    public function getDatabasePartitionPercentage()
    {
        return $this->container['database_partition_percentage'];
    }

    /**
     * Sets database_partition_percentage
     *
     * @param float $database_partition_percentage The database partition ratio. Must be between 20 & 80 %.
     *
     * @return $this
     */
    public function setDatabasePartitionPercentage($database_partition_percentage)
    {
        $this->container['database_partition_percentage'] = $database_partition_percentage;

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
     * @param string $source_account Only for upgrades/extract: The UID or name of the source account.
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
     * @param string $source_reseller Only for upgrades/extract: The UID or name of the source reseller.
     *
     * @return $this
     */
    public function setSourceReseller($source_reseller)
    {
        $this->container['source_reseller'] = $source_reseller;

        return $this;
    }

    /**
     * Gets agency_server
     *
     * @return float
     */
    public function getAgencyServer()
    {
        return $this->container['agency_server'];
    }

    /**
     * Sets agency_server
     *
     * @param float $agency_server The UID of the target agency server.
     *
     * @return $this
     */
    public function setAgencyServer($agency_server)
    {
        $this->container['agency_server'] = $agency_server;

        return $this;
    }

    /**
     * Gets stay_on_hardware
     *
     * @return bool
     */
    public function getStayOnHardware()
    {
        return $this->container['stay_on_hardware'];
    }

    /**
     * Sets stay_on_hardware
     *
     * @param bool $stay_on_hardware Keep your existing hardware
     *
     * @return $this
     */
    public function setStayOnHardware($stay_on_hardware)
    {
        $this->container['stay_on_hardware'] = $stay_on_hardware;

        return $this;
    }

    /**
     * Gets testing
     *
     * @return bool
     */
    public function getTesting()
    {
        return $this->container['testing'];
    }

    /**
     * Sets testing
     *
     * @param bool $testing Is order an testaccount?
     *
     * @return $this
     */
    public function setTesting($testing)
    {
        $this->container['testing'] = $testing;

        return $this;
    }

    /**
     * Gets billing_period
     *
     * @return float
     */
    public function getBillingPeriod()
    {
        return $this->container['billing_period'];
    }

    /**
     * Sets billing_period
     *
     * @param float $billing_period Billing period for main order item
     *
     * @return $this
     */
    public function setBillingPeriod($billing_period)
    {
        $this->container['billing_period'] = $billing_period;

        return $this;
    }

    /**
     * Gets customer_billing_period
     *
     * @return float
     */
    public function getCustomerBillingPeriod()
    {
        return $this->container['customer_billing_period'];
    }

    /**
     * Sets customer_billing_period
     *
     * @param float $customer_billing_period Billing period for whole customer
     *
     * @return $this
     */
    public function setCustomerBillingPeriod($customer_billing_period)
    {
        $this->container['customer_billing_period'] = $customer_billing_period;

        return $this;
    }

    /**
     * Gets commission
     *
     * @return string
     */
    public function getCommission()
    {
        return $this->container['commission'];
    }

    /**
     * Sets commission
     *
     * @param string $commission The code from the partnerprogram
     *
     * @return $this
     */
    public function setCommission($commission)
    {
        $this->container['commission'] = $commission;

        return $this;
    }

    /**
     * Gets is_commission_locked
     *
     * @return bool
     */
    public function getIsCommissionLocked()
    {
        return $this->container['is_commission_locked'];
    }

    /**
     * Sets is_commission_locked
     *
     * @param bool $is_commission_locked If enabled, nobody can remove/change the commission code. Default=false
     *
     * @return $this
     */
    public function setIsCommissionLocked($is_commission_locked)
    {
        $this->container['is_commission_locked'] = $is_commission_locked;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return float
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param float $due_date Unix timestamp of the due date of the order (wish order execution date).
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets project_name
     *
     * @return string
     */
    public function getProjectName()
    {
        return $this->container['project_name'];
    }

    /**
     * Sets project_name
     *
     * @param string $project_name Your description for the account.
     *
     * @return $this
     */
    public function setProjectName($project_name)
    {
        $this->container['project_name'] = $project_name;

        return $this;
    }

    /**
     * Gets project_password
     *
     * @return string
     */
    public function getProjectPassword()
    {
        return $this->container['project_password'];
    }

    /**
     * Sets project_password
     *
     * @param string $project_password Your password for the account. Will be encrypted after setting this value.
     *
     * @return $this
     */
    public function setProjectPassword($project_password)
    {
        $this->container['project_password'] = $project_password;

        return $this;
    }

    /**
     * Gets contract_partner
     *
     * @return \Mittwald\Api\Model\Contact
     */
    public function getContractPartner()
    {
        return $this->container['contract_partner'];
    }

    /**
     * Sets contract_partner
     *
     * @param \Mittwald\Api\Model\Contact $contract_partner contract_partner
     *
     * @return $this
     */
    public function setContractPartner($contract_partner)
    {
        $this->container['contract_partner'] = $contract_partner;

        return $this;
    }

    /**
     * Gets contact_person
     *
     * @return \Mittwald\Api\Model\Contact
     */
    public function getContactPerson()
    {
        return $this->container['contact_person'];
    }

    /**
     * Sets contact_person
     *
     * @param \Mittwald\Api\Model\Contact $contact_person contact_person
     *
     * @return $this
     */
    public function setContactPerson($contact_person)
    {
        $this->container['contact_person'] = $contact_person;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \Mittwald\Api\Model\Contact
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \Mittwald\Api\Model\Contact $billing_address billing_address
     *
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets payment_settings
     *
     * @return \Mittwald\Api\Model\PaymentSettings
     */
    public function getPaymentSettings()
    {
        return $this->container['payment_settings'];
    }

    /**
     * Sets payment_settings
     *
     * @param \Mittwald\Api\Model\PaymentSettings $payment_settings payment_settings
     *
     * @return $this
     */
    public function setPaymentSettings($payment_settings)
    {
        $this->container['payment_settings'] = $payment_settings;

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
