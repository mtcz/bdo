<?php
/**
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1DismantleReceivedVehicleListItem
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
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1DismantleReceivedVehicleListItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1DismantleReceivedVehicleListItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Responses.WasteRegister.WreckWasteRecordCard.V1.DismantleReceivedVehicleListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dismantle_received_vehicle_id' => 'string',
        'receive_date' => '\DateTime',
        'kpo_card_number' => 'string',
        'received_with_kpo' => 'bool',
        'received_from_abroad' => 'bool',
        'owner_not_registered' => 'bool',
        'received_from_dismantle_station' => 'bool',
        'vehicles_mass' => 'double',
        'vehicles_count' => 'int',
        'created_by_user' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dismantle_received_vehicle_id' => 'uuid',
        'receive_date' => 'date-time',
        'kpo_card_number' => null,
        'received_with_kpo' => null,
        'received_from_abroad' => null,
        'owner_not_registered' => null,
        'received_from_dismantle_station' => null,
        'vehicles_mass' => 'double',
        'vehicles_count' => 'int32',
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
        'dismantle_received_vehicle_id' => 'dismantleReceivedVehicleId',
        'receive_date' => 'receiveDate',
        'kpo_card_number' => 'kpoCardNumber',
        'received_with_kpo' => 'receivedWithKpo',
        'received_from_abroad' => 'receivedFromAbroad',
        'owner_not_registered' => 'ownerNotRegistered',
        'received_from_dismantle_station' => 'receivedFromDismantleStation',
        'vehicles_mass' => 'vehiclesMass',
        'vehicles_count' => 'vehiclesCount',
        'created_by_user' => 'createdByUser'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dismantle_received_vehicle_id' => 'setDismantleReceivedVehicleId',
        'receive_date' => 'setReceiveDate',
        'kpo_card_number' => 'setKpoCardNumber',
        'received_with_kpo' => 'setReceivedWithKpo',
        'received_from_abroad' => 'setReceivedFromAbroad',
        'owner_not_registered' => 'setOwnerNotRegistered',
        'received_from_dismantle_station' => 'setReceivedFromDismantleStation',
        'vehicles_mass' => 'setVehiclesMass',
        'vehicles_count' => 'setVehiclesCount',
        'created_by_user' => 'setCreatedByUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dismantle_received_vehicle_id' => 'getDismantleReceivedVehicleId',
        'receive_date' => 'getReceiveDate',
        'kpo_card_number' => 'getKpoCardNumber',
        'received_with_kpo' => 'getReceivedWithKpo',
        'received_from_abroad' => 'getReceivedFromAbroad',
        'owner_not_registered' => 'getOwnerNotRegistered',
        'received_from_dismantle_station' => 'getReceivedFromDismantleStation',
        'vehicles_mass' => 'getVehiclesMass',
        'vehicles_count' => 'getVehiclesCount',
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
        $this->container['dismantle_received_vehicle_id'] = isset($data['dismantle_received_vehicle_id']) ? $data['dismantle_received_vehicle_id'] : null;
        $this->container['receive_date'] = isset($data['receive_date']) ? $data['receive_date'] : null;
        $this->container['kpo_card_number'] = isset($data['kpo_card_number']) ? $data['kpo_card_number'] : null;
        $this->container['received_with_kpo'] = isset($data['received_with_kpo']) ? $data['received_with_kpo'] : null;
        $this->container['received_from_abroad'] = isset($data['received_from_abroad']) ? $data['received_from_abroad'] : null;
        $this->container['owner_not_registered'] = isset($data['owner_not_registered']) ? $data['owner_not_registered'] : null;
        $this->container['received_from_dismantle_station'] = isset($data['received_from_dismantle_station']) ? $data['received_from_dismantle_station'] : null;
        $this->container['vehicles_mass'] = isset($data['vehicles_mass']) ? $data['vehicles_mass'] : null;
        $this->container['vehicles_count'] = isset($data['vehicles_count']) ? $data['vehicles_count'] : null;
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
     * Gets dismantle_received_vehicle_id
     *
     * @return string
     */
    public function getDismantleReceivedVehicleId()
    {
        return $this->container['dismantle_received_vehicle_id'];
    }

    /**
     * Sets dismantle_received_vehicle_id
     *
     * @param string $dismantle_received_vehicle_id Prowadzący stację demontażu - Przyjęte odpady
     *
     * @return $this
     */
    public function setDismantleReceivedVehicleId($dismantle_received_vehicle_id)
    {
        $this->container['dismantle_received_vehicle_id'] = $dismantle_received_vehicle_id;

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
     * Gets received_from_abroad
     *
     * @return bool
     */
    public function getReceivedFromAbroad()
    {
        return $this->container['received_from_abroad'];
    }

    /**
     * Sets received_from_abroad
     *
     * @param bool $received_from_abroad Przywóz do RP
     *
     * @return $this
     */
    public function setReceivedFromAbroad($received_from_abroad)
    {
        $this->container['received_from_abroad'] = $received_from_abroad;

        return $this;
    }

    /**
     * Gets owner_not_registered
     *
     * @return bool
     */
    public function getOwnerNotRegistered()
    {
        return $this->container['owner_not_registered'];
    }

    /**
     * Sets owner_not_registered
     *
     * @param bool $owner_not_registered Posiadacz odpadów zwolniony z obowiązku prowadzenia ewidencji odpadów
     *
     * @return $this
     */
    public function setOwnerNotRegistered($owner_not_registered)
    {
        $this->container['owner_not_registered'] = $owner_not_registered;

        return $this;
    }

    /**
     * Gets received_from_dismantle_station
     *
     * @return bool
     */
    public function getReceivedFromDismantleStation()
    {
        return $this->container['received_from_dismantle_station'];
    }

    /**
     * Sets received_from_dismantle_station
     *
     * @param bool $received_from_dismantle_station Przyjęte do stacji demontażu od punktu zbierania pojazdów
     *
     * @return $this
     */
    public function setReceivedFromDismantleStation($received_from_dismantle_station)
    {
        $this->container['received_from_dismantle_station'] = $received_from_dismantle_station;

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
     * @param string $created_by_user Utworzone przez użytkownika
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


