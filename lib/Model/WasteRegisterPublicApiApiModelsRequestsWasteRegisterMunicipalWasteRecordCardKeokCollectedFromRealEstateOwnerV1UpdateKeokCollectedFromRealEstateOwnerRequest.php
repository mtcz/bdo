<?php
/**
 * WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokCollectedFromRealEstateOwnerV1UpdateKeokCollectedFromRealEstateOwnerRequest
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
 * WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokCollectedFromRealEstateOwnerV1UpdateKeokCollectedFromRealEstateOwnerRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokCollectedFromRealEstateOwnerV1UpdateKeokCollectedFromRealEstateOwnerRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Requests.WasteRegister.MunicipalWasteRecordCard.KeokCollectedFromRealEstateOwner.V1.UpdateKeokCollectedFromRealEstateOwnerRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'keok_collected_from_real_estate_owner_id' => 'string',
        'kpok_id' => 'string',
        'additional_info' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'keok_collected_from_real_estate_owner_id' => 'uuid',
        'kpok_id' => 'uuid',
        'additional_info' => null
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
        'keok_collected_from_real_estate_owner_id' => 'keokCollectedFromRealEstateOwnerId',
        'kpok_id' => 'kpokId',
        'additional_info' => 'additionalInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'keok_collected_from_real_estate_owner_id' => 'setKeokCollectedFromRealEstateOwnerId',
        'kpok_id' => 'setKpokId',
        'additional_info' => 'setAdditionalInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'keok_collected_from_real_estate_owner_id' => 'getKeokCollectedFromRealEstateOwnerId',
        'kpok_id' => 'getKpokId',
        'additional_info' => 'getAdditionalInfo'
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
        $this->container['keok_collected_from_real_estate_owner_id'] = isset($data['keok_collected_from_real_estate_owner_id']) ? $data['keok_collected_from_real_estate_owner_id'] : null;
        $this->container['kpok_id'] = isset($data['kpok_id']) ? $data['kpok_id'] : null;
        $this->container['additional_info'] = isset($data['additional_info']) ? $data['additional_info'] : null;
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
     * Gets keok_collected_from_real_estate_owner_id
     *
     * @return string
     */
    public function getKeokCollectedFromRealEstateOwnerId()
    {
        return $this->container['keok_collected_from_real_estate_owner_id'];
    }

    /**
     * Sets keok_collected_from_real_estate_owner_id
     *
     * @param string $keok_collected_from_real_estate_owner_id 
     *
     * @return $this
     */
    public function setKeokCollectedFromRealEstateOwnerId($keok_collected_from_real_estate_owner_id)
    {
        $this->container['keok_collected_from_real_estate_owner_id'] = $keok_collected_from_real_estate_owner_id;

        return $this;
    }

    /**
     * Gets kpok_id
     *
     * @return string
     */
    public function getKpokId()
    {
        return $this->container['kpok_id'];
    }

    /**
     * Sets kpok_id
     *
     * @param string $kpok_id Id Karty Przekazania Odpadów Komunalnych
     *
     * @return $this
     */
    public function setKpokId($kpok_id)
    {
        $this->container['kpok_id'] = $kpok_id;

        return $this;
    }

    /**
     * Gets additional_info
     *
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->container['additional_info'];
    }

    /**
     * Sets additional_info
     *
     * @param string $additional_info Informacje dodatkowe
     *
     * @return $this
     */
    public function setAdditionalInfo($additional_info)
    {
        $this->container['additional_info'] = $additional_info;

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


