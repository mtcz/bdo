<?php
/**
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleReusableEquipmentAndPartsResponse
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
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleReusableEquipmentAndPartsResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleReusableEquipmentAndPartsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Responses.WasteRegister.WreckWasteRecordCard.V1.GetDismantleReusableEquipmentAndPartsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'kepw_dismantle_reusable_equipment_and_parts_id' => 'string',
        'kepw_id' => 'string',
        'reusable_parts_mass' => 'double',
        'waste_process' => 'string',
        'waste_process_id' => 'int',
        'is_recycling' => 'bool',
        'production_date' => '\DateTime',
        'additional_info' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'kepw_dismantle_reusable_equipment_and_parts_id' => 'uuid',
        'kepw_id' => 'uuid',
        'reusable_parts_mass' => 'double',
        'waste_process' => null,
        'waste_process_id' => 'int32',
        'is_recycling' => null,
        'production_date' => 'date-time',
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
        'kepw_dismantle_reusable_equipment_and_parts_id' => 'kepwDismantleReusableEquipmentAndPartsId',
        'kepw_id' => 'kepwId',
        'reusable_parts_mass' => 'reusablePartsMass',
        'waste_process' => 'wasteProcess',
        'waste_process_id' => 'wasteProcessId',
        'is_recycling' => 'isRecycling',
        'production_date' => 'productionDate',
        'additional_info' => 'additionalInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'kepw_dismantle_reusable_equipment_and_parts_id' => 'setKepwDismantleReusableEquipmentAndPartsId',
        'kepw_id' => 'setKepwId',
        'reusable_parts_mass' => 'setReusablePartsMass',
        'waste_process' => 'setWasteProcess',
        'waste_process_id' => 'setWasteProcessId',
        'is_recycling' => 'setIsRecycling',
        'production_date' => 'setProductionDate',
        'additional_info' => 'setAdditionalInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'kepw_dismantle_reusable_equipment_and_parts_id' => 'getKepwDismantleReusableEquipmentAndPartsId',
        'kepw_id' => 'getKepwId',
        'reusable_parts_mass' => 'getReusablePartsMass',
        'waste_process' => 'getWasteProcess',
        'waste_process_id' => 'getWasteProcessId',
        'is_recycling' => 'getIsRecycling',
        'production_date' => 'getProductionDate',
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
        $this->container['kepw_dismantle_reusable_equipment_and_parts_id'] = isset($data['kepw_dismantle_reusable_equipment_and_parts_id']) ? $data['kepw_dismantle_reusable_equipment_and_parts_id'] : null;
        $this->container['kepw_id'] = isset($data['kepw_id']) ? $data['kepw_id'] : null;
        $this->container['reusable_parts_mass'] = isset($data['reusable_parts_mass']) ? $data['reusable_parts_mass'] : null;
        $this->container['waste_process'] = isset($data['waste_process']) ? $data['waste_process'] : null;
        $this->container['waste_process_id'] = isset($data['waste_process_id']) ? $data['waste_process_id'] : null;
        $this->container['is_recycling'] = isset($data['is_recycling']) ? $data['is_recycling'] : null;
        $this->container['production_date'] = isset($data['production_date']) ? $data['production_date'] : null;
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
     * Gets kepw_dismantle_reusable_equipment_and_parts_id
     *
     * @return string
     */
    public function getKepwDismantleReusableEquipmentAndPartsId()
    {
        return $this->container['kepw_dismantle_reusable_equipment_and_parts_id'];
    }

    /**
     * Sets kepw_dismantle_reusable_equipment_and_parts_id
     *
     * @param string $kepw_dismantle_reusable_equipment_and_parts_id 
     *
     * @return $this
     */
    public function setKepwDismantleReusableEquipmentAndPartsId($kepw_dismantle_reusable_equipment_and_parts_id)
    {
        $this->container['kepw_dismantle_reusable_equipment_and_parts_id'] = $kepw_dismantle_reusable_equipment_and_parts_id;

        return $this;
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
     * @param string $kepw_id 
     *
     * @return $this
     */
    public function setKepwId($kepw_id)
    {
        $this->container['kepw_id'] = $kepw_id;

        return $this;
    }

    /**
     * Gets reusable_parts_mass
     *
     * @return double
     */
    public function getReusablePartsMass()
    {
        return $this->container['reusable_parts_mass'];
    }

    /**
     * Sets reusable_parts_mass
     *
     * @param double $reusable_parts_mass 
     *
     * @return $this
     */
    public function setReusablePartsMass($reusable_parts_mass)
    {
        $this->container['reusable_parts_mass'] = $reusable_parts_mass;

        return $this;
    }

    /**
     * Gets waste_process
     *
     * @return string
     */
    public function getWasteProcess()
    {
        return $this->container['waste_process'];
    }

    /**
     * Sets waste_process
     *
     * @param string $waste_process 
     *
     * @return $this
     */
    public function setWasteProcess($waste_process)
    {
        $this->container['waste_process'] = $waste_process;

        return $this;
    }

    /**
     * Gets waste_process_id
     *
     * @return int
     */
    public function getWasteProcessId()
    {
        return $this->container['waste_process_id'];
    }

    /**
     * Sets waste_process_id
     *
     * @param int $waste_process_id 
     *
     * @return $this
     */
    public function setWasteProcessId($waste_process_id)
    {
        $this->container['waste_process_id'] = $waste_process_id;

        return $this;
    }

    /**
     * Gets is_recycling
     *
     * @return bool
     */
    public function getIsRecycling()
    {
        return $this->container['is_recycling'];
    }

    /**
     * Sets is_recycling
     *
     * @param bool $is_recycling 
     *
     * @return $this
     */
    public function setIsRecycling($is_recycling)
    {
        $this->container['is_recycling'] = $is_recycling;

        return $this;
    }

    /**
     * Gets production_date
     *
     * @return \DateTime
     */
    public function getProductionDate()
    {
        return $this->container['production_date'];
    }

    /**
     * Sets production_date
     *
     * @param \DateTime $production_date 
     *
     * @return $this
     */
    public function setProductionDate($production_date)
    {
        $this->container['production_date'] = $production_date;

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
     * @param string $additional_info 
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


