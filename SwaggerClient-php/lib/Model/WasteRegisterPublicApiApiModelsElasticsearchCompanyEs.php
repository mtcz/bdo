<?php
/**
 * WasteRegisterPublicApiApiModelsElasticsearchCompanyEs
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * v1 Waste Register public Api
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * WasteRegisterPublicApiApiModelsElasticsearchCompanyEs Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsElasticsearchCompanyEs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Elasticsearch.CompanyEs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_id' => 'string',
        'registration_number' => 'string',
        'name' => 'string',
        'nip' => 'string',
        'nip_eu' => 'string',
        'pesel' => 'string',
        'country' => 'string',
        'address' => 'string',
        'building_number' => 'string',
        'local_number' => 'string',
        'postal_code' => 'string',
        'teryt' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'company_id' => null,
        'registration_number' => null,
        'name' => null,
        'nip' => null,
        'nip_eu' => null,
        'pesel' => null,
        'country' => null,
        'address' => null,
        'building_number' => null,
        'local_number' => null,
        'postal_code' => null,
        'teryt' => null
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
        'company_id' => 'companyId',
        'registration_number' => 'registrationNumber',
        'name' => 'name',
        'nip' => 'nip',
        'nip_eu' => 'nipEu',
        'pesel' => 'pesel',
        'country' => 'country',
        'address' => 'address',
        'building_number' => 'buildingNumber',
        'local_number' => 'localNumber',
        'postal_code' => 'postalCode',
        'teryt' => 'teryt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_id' => 'setCompanyId',
        'registration_number' => 'setRegistrationNumber',
        'name' => 'setName',
        'nip' => 'setNip',
        'nip_eu' => 'setNipEu',
        'pesel' => 'setPesel',
        'country' => 'setCountry',
        'address' => 'setAddress',
        'building_number' => 'setBuildingNumber',
        'local_number' => 'setLocalNumber',
        'postal_code' => 'setPostalCode',
        'teryt' => 'setTeryt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_id' => 'getCompanyId',
        'registration_number' => 'getRegistrationNumber',
        'name' => 'getName',
        'nip' => 'getNip',
        'nip_eu' => 'getNipEu',
        'pesel' => 'getPesel',
        'country' => 'getCountry',
        'address' => 'getAddress',
        'building_number' => 'getBuildingNumber',
        'local_number' => 'getLocalNumber',
        'postal_code' => 'getPostalCode',
        'teryt' => 'getTeryt'
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
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['registration_number'] = isset($data['registration_number']) ? $data['registration_number'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nip'] = isset($data['nip']) ? $data['nip'] : null;
        $this->container['nip_eu'] = isset($data['nip_eu']) ? $data['nip_eu'] : null;
        $this->container['pesel'] = isset($data['pesel']) ? $data['pesel'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['building_number'] = isset($data['building_number']) ? $data['building_number'] : null;
        $this->container['local_number'] = isset($data['local_number']) ? $data['local_number'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['teryt'] = isset($data['teryt']) ? $data['teryt'] : null;
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
     * Gets company_id
     *
     * @return string
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param string $company_id Id podmiotu
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets registration_number
     *
     * @return string
     */
    public function getRegistrationNumber()
    {
        return $this->container['registration_number'];
    }

    /**
     * Sets registration_number
     *
     * @param string $registration_number Numer rejestrowy podmiotu
     *
     * @return $this
     */
    public function setRegistrationNumber($registration_number)
    {
        $this->container['registration_number'] = $registration_number;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Nazwa podmiotu
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets nip
     *
     * @return string
     */
    public function getNip()
    {
        return $this->container['nip'];
    }

    /**
     * Sets nip
     *
     * @param string $nip NIP podmiotu
     *
     * @return $this
     */
    public function setNip($nip)
    {
        $this->container['nip'] = $nip;

        return $this;
    }

    /**
     * Gets nip_eu
     *
     * @return string
     */
    public function getNipEu()
    {
        return $this->container['nip_eu'];
    }

    /**
     * Sets nip_eu
     *
     * @param string $nip_eu Europejski NIP podmiotu
     *
     * @return $this
     */
    public function setNipEu($nip_eu)
    {
        $this->container['nip_eu'] = $nip_eu;

        return $this;
    }

    /**
     * Gets pesel
     *
     * @return string
     */
    public function getPesel()
    {
        return $this->container['pesel'];
    }

    /**
     * Sets pesel
     *
     * @param string $pesel PESEL, jeśli podmiot nie posiada NIP
     *
     * @return $this
     */
    public function setPesel($pesel)
    {
        $this->container['pesel'] = $pesel;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country Kraj
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address Adres
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets building_number
     *
     * @return string
     */
    public function getBuildingNumber()
    {
        return $this->container['building_number'];
    }

    /**
     * Sets building_number
     *
     * @param string $building_number Numer budynku
     *
     * @return $this
     */
    public function setBuildingNumber($building_number)
    {
        $this->container['building_number'] = $building_number;

        return $this;
    }

    /**
     * Gets local_number
     *
     * @return string
     */
    public function getLocalNumber()
    {
        return $this->container['local_number'];
    }

    /**
     * Sets local_number
     *
     * @param string $local_number Numer lokalu
     *
     * @return $this
     */
    public function setLocalNumber($local_number)
    {
        $this->container['local_number'] = $local_number;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code Kod pocztowy
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets teryt
     *
     * @return string
     */
    public function getTeryt()
    {
        return $this->container['teryt'];
    }

    /**
     * Sets teryt
     *
     * @param string $teryt Teryt
     *
     * @return $this
     */
    public function setTeryt($teryt)
    {
        $this->container['teryt'] = $teryt;

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


