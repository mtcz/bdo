<?php
/**
 * WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1SearchKezsRequest
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
 * WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1SearchKezsRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1SearchKezsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Requests.WasteRegister.ElectronicWasteRecordCard.V1.SearchKezsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pagination_parameters' => '\Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginationParameters',
        'eup_id' => 'string',
        'card_number' => 'string',
        'waste_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pagination_parameters' => null,
        'eup_id' => 'uuid',
        'card_number' => null,
        'waste_code' => null
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
        'pagination_parameters' => 'paginationParameters',
        'eup_id' => 'eupId',
        'card_number' => 'cardNumber',
        'waste_code' => 'wasteCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pagination_parameters' => 'setPaginationParameters',
        'eup_id' => 'setEupId',
        'card_number' => 'setCardNumber',
        'waste_code' => 'setWasteCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pagination_parameters' => 'getPaginationParameters',
        'eup_id' => 'getEupId',
        'card_number' => 'getCardNumber',
        'waste_code' => 'getWasteCode'
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
        $this->container['pagination_parameters'] = isset($data['pagination_parameters']) ? $data['pagination_parameters'] : null;
        $this->container['eup_id'] = isset($data['eup_id']) ? $data['eup_id'] : null;
        $this->container['card_number'] = isset($data['card_number']) ? $data['card_number'] : null;
        $this->container['waste_code'] = isset($data['waste_code']) ? $data['waste_code'] : null;
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
     * Gets pagination_parameters
     *
     * @return \Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginationParameters
     */
    public function getPaginationParameters()
    {
        return $this->container['pagination_parameters'];
    }

    /**
     * Sets pagination_parameters
     *
     * @param \Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginationParameters $pagination_parameters Parametry paginacji
     *
     * @return $this
     */
    public function setPaginationParameters($pagination_parameters)
    {
        $this->container['pagination_parameters'] = $pagination_parameters;

        return $this;
    }

    /**
     * Gets eup_id
     *
     * @return string
     */
    public function getEupId()
    {
        return $this->container['eup_id'];
    }

    /**
     * Sets eup_id
     *
     * @param string $eup_id Id miejsca prowadzenia dzia??alno??ci
     *
     * @return $this
     */
    public function setEupId($eup_id)
    {
        $this->container['eup_id'] = $eup_id;

        return $this;
    }

    /**
     * Gets card_number
     *
     * @return string
     */
    public function getCardNumber()
    {
        return $this->container['card_number'];
    }

    /**
     * Sets card_number
     *
     * @param string $card_number Numer karty
     *
     * @return $this
     */
    public function setCardNumber($card_number)
    {
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets waste_code
     *
     * @return string
     */
    public function getWasteCode()
    {
        return $this->container['waste_code'];
    }

    /**
     * Sets waste_code
     *
     * @param string $waste_code Kod odpadu
     *
     * @return $this
     */
    public function setWasteCode($waste_code)
    {
        $this->container['waste_code'] = $waste_code;

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


