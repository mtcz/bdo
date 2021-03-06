<?php
/**
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CollectingTransferredVehicleListItem
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
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CollectingTransferredVehicleListItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CollectingTransferredVehicleListItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Responses.WasteRegister.WreckWasteRecordCard.V1.CollectingTransferredVehicleListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'collecting_transferred_vehicles_id' => 'string',
        'transfer_date' => '\DateTime',
        'vehicles_mass' => 'double',
        'vehicles_count' => 'int',
        'kpo_card_number' => 'string',
        'created_by_user' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'collecting_transferred_vehicles_id' => 'uuid',
        'transfer_date' => 'date-time',
        'vehicles_mass' => 'double',
        'vehicles_count' => 'int32',
        'kpo_card_number' => null,
        'created_by_user' => null
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
        'collecting_transferred_vehicles_id' => 'collectingTransferredVehiclesId',
        'transfer_date' => 'transferDate',
        'vehicles_mass' => 'vehiclesMass',
        'vehicles_count' => 'vehiclesCount',
        'kpo_card_number' => 'kpoCardNumber',
        'created_by_user' => 'createdByUser'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'collecting_transferred_vehicles_id' => 'setCollectingTransferredVehiclesId',
        'transfer_date' => 'setTransferDate',
        'vehicles_mass' => 'setVehiclesMass',
        'vehicles_count' => 'setVehiclesCount',
        'kpo_card_number' => 'setKpoCardNumber',
        'created_by_user' => 'setCreatedByUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'collecting_transferred_vehicles_id' => 'getCollectingTransferredVehiclesId',
        'transfer_date' => 'getTransferDate',
        'vehicles_mass' => 'getVehiclesMass',
        'vehicles_count' => 'getVehiclesCount',
        'kpo_card_number' => 'getKpoCardNumber',
        'created_by_user' => 'getCreatedByUser'
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
        $this->container['collecting_transferred_vehicles_id'] = isset($data['collecting_transferred_vehicles_id']) ? $data['collecting_transferred_vehicles_id'] : null;
        $this->container['transfer_date'] = isset($data['transfer_date']) ? $data['transfer_date'] : null;
        $this->container['vehicles_mass'] = isset($data['vehicles_mass']) ? $data['vehicles_mass'] : null;
        $this->container['vehicles_count'] = isset($data['vehicles_count']) ? $data['vehicles_count'] : null;
        $this->container['kpo_card_number'] = isset($data['kpo_card_number']) ? $data['kpo_card_number'] : null;
        $this->container['created_by_user'] = isset($data['created_by_user']) ? $data['created_by_user'] : null;
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
     * Gets collecting_transferred_vehicles_id
     *
     * @return string
     */
    public function getCollectingTransferredVehiclesId()
    {
        return $this->container['collecting_transferred_vehicles_id'];
    }

    /**
     * Sets collecting_transferred_vehicles_id
     *
     * @param string $collecting_transferred_vehicles_id Id wpisu Prowadz??cy punkt zbierania pojazd??w - Przekazane
     *
     * @return $this
     */
    public function setCollectingTransferredVehiclesId($collecting_transferred_vehicles_id)
    {
        $this->container['collecting_transferred_vehicles_id'] = $collecting_transferred_vehicles_id;

        return $this;
    }

    /**
     * Gets transfer_date
     *
     * @return \DateTime
     */
    public function getTransferDate()
    {
        return $this->container['transfer_date'];
    }

    /**
     * Sets transfer_date
     *
     * @param \DateTime $transfer_date Data przekazania
     *
     * @return $this
     */
    public function setTransferDate($transfer_date)
    {
        $this->container['transfer_date'] = $transfer_date;

        return $this;
    }

    /**
     * Gets vehicles_mass
     *
     * @return double
     */
    public function getVehiclesMass()
    {
        return $this->container['vehicles_mass'];
    }

    /**
     * Sets vehicles_mass
     *
     * @param double $vehicles_mass Masa [Mg]
     *
     * @return $this
     */
    public function setVehiclesMass($vehicles_mass)
    {
        $this->container['vehicles_mass'] = $vehicles_mass;

        return $this;
    }

    /**
     * Gets vehicles_count
     *
     * @return int
     */
    public function getVehiclesCount()
    {
        return $this->container['vehicles_count'];
    }

    /**
     * Sets vehicles_count
     *
     * @param int $vehicles_count Liczba [szt.]
     *
     * @return $this
     */
    public function setVehiclesCount($vehicles_count)
    {
        $this->container['vehicles_count'] = $vehicles_count;

        return $this;
    }

    /**
     * Gets kpo_card_number
     *
     * @return string
     */
    public function getKpoCardNumber()
    {
        return $this->container['kpo_card_number'];
    }

    /**
     * Sets kpo_card_number
     *
     * @param string $kpo_card_number Numer karty kpo
     *
     * @return $this
     */
    public function setKpoCardNumber($kpo_card_number)
    {
        $this->container['kpo_card_number'] = $kpo_card_number;

        return $this;
    }

    /**
     * Gets created_by_user
     *
     * @return string
     */
    public function getCreatedByUser()
    {
        return $this->container['created_by_user'];
    }

    /**
     * Sets created_by_user
     *
     * @param string $created_by_user Utworzone przez u??ytkownika
     *
     * @return $this
     */
    public function setCreatedByUser($created_by_user)
    {
        $this->container['created_by_user'] = $created_by_user;

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


