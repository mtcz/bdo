<?php
/**
 * WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1NewKekosLandSurfaceRulerDto
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
 * WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1NewKekosLandSurfaceRulerDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1NewKekosLandSurfaceRulerDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Requests.WasteRegister.MunicipalSewageSludgeCard.V1.NewKekosLandSurfaceRulerDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_foreigner' => 'bool',
        'name' => 'string',
        'teryt_pk' => 'string',
        'locality' => 'string',
        'street' => 'string',
        'building_number' => 'string',
        'has_no_building_number' => 'bool',
        'local_number' => 'string',
        'postal_code' => 'string',
        'country_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_foreigner' => null,
        'name' => null,
        'teryt_pk' => null,
        'locality' => null,
        'street' => null,
        'building_number' => null,
        'has_no_building_number' => null,
        'local_number' => null,
        'postal_code' => null,
        'country_id' => 'int32'
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
        'is_foreigner' => 'isForeigner',
        'name' => 'name',
        'teryt_pk' => 'terytPk',
        'locality' => 'locality',
        'street' => 'street',
        'building_number' => 'buildingNumber',
        'has_no_building_number' => 'hasNoBuildingNumber',
        'local_number' => 'localNumber',
        'postal_code' => 'postalCode',
        'country_id' => 'countryId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_foreigner' => 'setIsForeigner',
        'name' => 'setName',
        'teryt_pk' => 'setTerytPk',
        'locality' => 'setLocality',
        'street' => 'setStreet',
        'building_number' => 'setBuildingNumber',
        'has_no_building_number' => 'setHasNoBuildingNumber',
        'local_number' => 'setLocalNumber',
        'postal_code' => 'setPostalCode',
        'country_id' => 'setCountryId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_foreigner' => 'getIsForeigner',
        'name' => 'getName',
        'teryt_pk' => 'getTerytPk',
        'locality' => 'getLocality',
        'street' => 'getStreet',
        'building_number' => 'getBuildingNumber',
        'has_no_building_number' => 'getHasNoBuildingNumber',
        'local_number' => 'getLocalNumber',
        'postal_code' => 'getPostalCode',
        'country_id' => 'getCountryId'
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
        $this->container['is_foreigner'] = isset($data['is_foreigner']) ? $data['is_foreigner'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['teryt_pk'] = isset($data['teryt_pk']) ? $data['teryt_pk'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['building_number'] = isset($data['building_number']) ? $data['building_number'] : null;
        $this->container['has_no_building_number'] = isset($data['has_no_building_number']) ? $data['has_no_building_number'] : null;
        $this->container['local_number'] = isset($data['local_number']) ? $data['local_number'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['country_id'] = isset($data['country_id']) ? $data['country_id'] : null;
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
     * Gets is_foreigner
     *
     * @return bool
     */
    public function getIsForeigner()
    {
        return $this->container['is_foreigner'];
    }

    /**
     * Sets is_foreigner
     *
     * @param bool $is_foreigner Podmiot zagraniczny władający powierzchnią ziemi
     *
     * @return $this
     */
    public function setIsForeigner($is_foreigner)
    {
        $this->container['is_foreigner'] = $is_foreigner;

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
     * @param string $name Imię i nazwisko lub nazwa władającego powierzchnią ziemi
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets teryt_pk
     *
     * @return string
     */
    public function getTerytPk()
    {
        return $this->container['teryt_pk'];
    }

    /**
     * Sets teryt_pk
     *
     * @param string $teryt_pk Numer TERYT
     *
     * @return $this
     */
    public function setTerytPk($teryt_pk)
    {
        $this->container['teryt_pk'] = $teryt_pk;

        return $this;
    }

    /**
     * Gets locality
     *
     * @return string
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     *
     * @param string $locality Miejscowość
     *
     * @return $this
     */
    public function setLocality($locality)
    {
        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street Ulica
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

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
     * Gets has_no_building_number
     *
     * @return bool
     */
    public function getHasNoBuildingNumber()
    {
        return $this->container['has_no_building_number'];
    }

    /**
     * Sets has_no_building_number
     *
     * @param bool $has_no_building_number Nie podano numeru budynku
     *
     * @return $this
     */
    public function setHasNoBuildingNumber($has_no_building_number)
    {
        $this->container['has_no_building_number'] = $has_no_building_number;

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
     * Gets country_id
     *
     * @return int
     */
    public function getCountryId()
    {
        return $this->container['country_id'];
    }

    /**
     * Sets country_id
     *
     * @param int $country_id Id kraju
     *
     * @return $this
     */
    public function setCountryId($country_id)
    {
        $this->container['country_id'] = $country_id;

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

