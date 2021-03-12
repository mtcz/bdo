<?php
/**
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1SearchKeoForwardedResponse
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
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1SearchKeoForwardedResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1SearchKeoForwardedResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Responses.WasteRegister.WasteRecordCard.V1.SearchKeoForwardedResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country_waste_mass' => 'double',
        'abroad_waste_mass' => 'double',
        'keo_dto' => '\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoDto',
        'forwarded_forwarded_keos' => '\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1PaginatedPageKeoForwardedListItem'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'country_waste_mass' => 'double',
        'abroad_waste_mass' => 'double',
        'keo_dto' => null,
        'forwarded_forwarded_keos' => null
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
        'country_waste_mass' => 'countryWasteMass',
        'abroad_waste_mass' => 'abroadWasteMass',
        'keo_dto' => 'keoDto',
        'forwarded_forwarded_keos' => 'forwardedForwardedKeos'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country_waste_mass' => 'setCountryWasteMass',
        'abroad_waste_mass' => 'setAbroadWasteMass',
        'keo_dto' => 'setKeoDto',
        'forwarded_forwarded_keos' => 'setForwardedForwardedKeos'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country_waste_mass' => 'getCountryWasteMass',
        'abroad_waste_mass' => 'getAbroadWasteMass',
        'keo_dto' => 'getKeoDto',
        'forwarded_forwarded_keos' => 'getForwardedForwardedKeos'
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
        $this->container['country_waste_mass'] = isset($data['country_waste_mass']) ? $data['country_waste_mass'] : null;
        $this->container['abroad_waste_mass'] = isset($data['abroad_waste_mass']) ? $data['abroad_waste_mass'] : null;
        $this->container['keo_dto'] = isset($data['keo_dto']) ? $data['keo_dto'] : null;
        $this->container['forwarded_forwarded_keos'] = isset($data['forwarded_forwarded_keos']) ? $data['forwarded_forwarded_keos'] : null;
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
     * Gets country_waste_mass
     *
     * @return double
     */
    public function getCountryWasteMass()
    {
        return $this->container['country_waste_mass'];
    }

    /**
     * Sets country_waste_mass
     *
     * @param double $country_waste_mass Łączna masa przekazanych odpadów w kraju [Mg]
     *
     * @return $this
     */
    public function setCountryWasteMass($country_waste_mass)
    {
        $this->container['country_waste_mass'] = $country_waste_mass;

        return $this;
    }

    /**
     * Gets abroad_waste_mass
     *
     * @return double
     */
    public function getAbroadWasteMass()
    {
        return $this->container['abroad_waste_mass'];
    }

    /**
     * Sets abroad_waste_mass
     *
     * @param double $abroad_waste_mass Łączna masa przekazanych odpadów poza granice RP. [Mg]
     *
     * @return $this
     */
    public function setAbroadWasteMass($abroad_waste_mass)
    {
        $this->container['abroad_waste_mass'] = $abroad_waste_mass;

        return $this;
    }

    /**
     * Gets keo_dto
     *
     * @return \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoDto
     */
    public function getKeoDto()
    {
        return $this->container['keo_dto'];
    }

    /**
     * Sets keo_dto
     *
     * @param \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoDto $keo_dto Karta keo
     *
     * @return $this
     */
    public function setKeoDto($keo_dto)
    {
        $this->container['keo_dto'] = $keo_dto;

        return $this;
    }

    /**
     * Gets forwarded_forwarded_keos
     *
     * @return \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1PaginatedPageKeoForwardedListItem
     */
    public function getForwardedForwardedKeos()
    {
        return $this->container['forwarded_forwarded_keos'];
    }

    /**
     * Sets forwarded_forwarded_keos
     *
     * @param \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1PaginatedPageKeoForwardedListItem $forwarded_forwarded_keos 
     *
     * @return $this
     */
    public function setForwardedForwardedKeos($forwarded_forwarded_keos)
    {
        $this->container['forwarded_forwarded_keos'] = $forwarded_forwarded_keos;

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


