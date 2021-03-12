<?php
/**
 * WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingReceivedVehicleV1CreateCollectingReceivedVehicleRequest
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
 * WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingReceivedVehicleV1CreateCollectingReceivedVehicleRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingReceivedVehicleV1CreateCollectingReceivedVehicleRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Requests.WasteRegister.WreckWasteRecordCard.CollectingReceivedVehicle.V1.CreateCollectingReceivedVehicleRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'kepw_id' => 'string',
        'received_with_kpo' => 'bool',
        'kpo_id' => 'string',
        'receive_date' => '\DateTime',
        'vehicles_mass' => 'double',
        'vehicles_count' => 'int',
        'additional_info' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'kepw_id' => 'uuid',
        'received_with_kpo' => null,
        'kpo_id' => 'uuid',
        'receive_date' => 'date-time',
        'vehicles_mass' => 'double',
        'vehicles_count' => 'int32',
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
        'kepw_id' => 'kepwId',
        'received_with_kpo' => 'receivedWithKpo',
        'kpo_id' => 'kpoId',
        'receive_date' => 'receiveDate',
        'vehicles_mass' => 'vehiclesMass',
        'vehicles_count' => 'vehiclesCount',
        'additional_info' => 'additionalInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'kepw_id' => 'setKepwId',
        'received_with_kpo' => 'setReceivedWithKpo',
        'kpo_id' => 'setKpoId',
        'receive_date' => 'setReceiveDate',
        'vehicles_mass' => 'setVehiclesMass',
        'vehicles_count' => 'setVehiclesCount',
        'additional_info' => 'setAdditionalInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'kepw_id' => 'getKepwId',
        'received_with_kpo' => 'getReceivedWithKpo',
        'kpo_id' => 'getKpoId',
        'receive_date' => 'getReceiveDate',
        'vehicles_mass' => 'getVehiclesMass',
        'vehicles_count' => 'getVehiclesCount',
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
        $this->container['kepw_id'] = isset($data['kepw_id']) ? $data['kepw_id'] : null;
        $this->container['received_with_kpo'] = isset($data['received_with_kpo']) ? $data['received_with_kpo'] : null;
        $this->container['kpo_id'] = isset($data['kpo_id']) ? $data['kpo_id'] : null;
        $this->container['receive_date'] = isset($data['receive_date']) ? $data['receive_date'] : null;
        $this->container['vehicles_mass'] = isset($data['vehicles_mass']) ? $data['vehicles_mass'] : null;
        $this->container['vehicles_count'] = isset($data['vehicles_count']) ? $data['vehicles_count'] : null;
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
     * Gets kepw_id
     *
     * @return string
     */
    public function getKepwId()
    {
        return $this->container['kepw_id'];
    }

    /**
     * Sets kepw_id
     *
     * @param string $kepw_id Id karty ewidencji pojazdów wycofanych z eksploatacji
     *
     * @return $this
     */
    public function setKepwId($kepw_id)
    {
        $this->container['kepw_id'] = $kepw_id;

        return $this;
    }

    /**
     * Gets received_with_kpo
     *
     * @return bool
     */
    public function getReceivedWithKpo()
    {
        return $this->container['received_with_kpo'];
    }

    /**
     * Sets received_with_kpo
     *
     * @param bool $received_with_kpo Na podstawie karty przekazania odpadów
     *
     * @return $this
     */
    public function setReceivedWithKpo($received_with_kpo)
    {
        $this->container['received_with_kpo'] = $received_with_kpo;

        return $this;
    }

    /**
     * Gets kpo_id
     *
     * @return string
     */
    public function getKpoId()
    {
        return $this->container['kpo_id'];
    }

    /**
     * Sets kpo_id
     *
     * @param string $kpo_id Id karty przekazania odpadów
     *
     * @return $this
     */
    public function setKpoId($kpo_id)
    {
        $this->container['kpo_id'] = $kpo_id;

        return $this;
    }

    /**
     * Gets receive_date
     *
     * @return \DateTime
     */
    public function getReceiveDate()
    {
        return $this->container['receive_date'];
    }

    /**
     * Sets receive_date
     *
     * @param \DateTime $receive_date Data przyjęcia
     *
     * @return $this
     */
    public function setReceiveDate($receive_date)
    {
        $this->container['receive_date'] = $receive_date;

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


