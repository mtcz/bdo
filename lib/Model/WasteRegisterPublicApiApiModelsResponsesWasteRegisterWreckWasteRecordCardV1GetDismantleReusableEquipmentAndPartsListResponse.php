<?php
/**
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleReusableEquipmentAndPartsListResponse
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
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleReusableEquipmentAndPartsListResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleReusableEquipmentAndPartsListResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Responses.WasteRegister.WreckWasteRecordCard.V1.GetDismantleReusableEquipmentAndPartsListResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'initial_vehicles_mass' => 'double',
        'initial_vehicles_count' => 'int',
        'card_number' => 'string',
        'waste_code' => 'string',
        'year' => 'int',
        'dismantle_reusable_equipment_and_parts_mass' => 'double',
        'waste_code_extended' => 'bool',
        'waste_code_extended_description' => 'string',
        'hazardous_waste_reclassification' => 'bool',
        'hazardous_waste_reclassification_description' => 'string',
        'dismantle_reusable_equipment_and_parts' => '\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1PaginatedPageDismantleReusableEquipmentAndPartsListItem'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'initial_vehicles_mass' => 'double',
        'initial_vehicles_count' => 'int32',
        'card_number' => null,
        'waste_code' => null,
        'year' => 'int32',
        'dismantle_reusable_equipment_and_parts_mass' => 'double',
        'waste_code_extended' => null,
        'waste_code_extended_description' => null,
        'hazardous_waste_reclassification' => null,
        'hazardous_waste_reclassification_description' => null,
        'dismantle_reusable_equipment_and_parts' => null
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
        'initial_vehicles_mass' => 'initialVehiclesMass',
        'initial_vehicles_count' => 'initialVehiclesCount',
        'card_number' => 'cardNumber',
        'waste_code' => 'wasteCode',
        'year' => 'year',
        'dismantle_reusable_equipment_and_parts_mass' => 'dismantleReusableEquipmentAndPartsMass',
        'waste_code_extended' => 'wasteCodeExtended',
        'waste_code_extended_description' => 'wasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'hazardousWasteReclassification',
        'hazardous_waste_reclassification_description' => 'hazardousWasteReclassificationDescription',
        'dismantle_reusable_equipment_and_parts' => 'dismantleReusableEquipmentAndParts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'initial_vehicles_mass' => 'setInitialVehiclesMass',
        'initial_vehicles_count' => 'setInitialVehiclesCount',
        'card_number' => 'setCardNumber',
        'waste_code' => 'setWasteCode',
        'year' => 'setYear',
        'dismantle_reusable_equipment_and_parts_mass' => 'setDismantleReusableEquipmentAndPartsMass',
        'waste_code_extended' => 'setWasteCodeExtended',
        'waste_code_extended_description' => 'setWasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'setHazardousWasteReclassification',
        'hazardous_waste_reclassification_description' => 'setHazardousWasteReclassificationDescription',
        'dismantle_reusable_equipment_and_parts' => 'setDismantleReusableEquipmentAndParts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'initial_vehicles_mass' => 'getInitialVehiclesMass',
        'initial_vehicles_count' => 'getInitialVehiclesCount',
        'card_number' => 'getCardNumber',
        'waste_code' => 'getWasteCode',
        'year' => 'getYear',
        'dismantle_reusable_equipment_and_parts_mass' => 'getDismantleReusableEquipmentAndPartsMass',
        'waste_code_extended' => 'getWasteCodeExtended',
        'waste_code_extended_description' => 'getWasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'getHazardousWasteReclassification',
        'hazardous_waste_reclassification_description' => 'getHazardousWasteReclassificationDescription',
        'dismantle_reusable_equipment_and_parts' => 'getDismantleReusableEquipmentAndParts'
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
        $this->container['initial_vehicles_mass'] = isset($data['initial_vehicles_mass']) ? $data['initial_vehicles_mass'] : null;
        $this->container['initial_vehicles_count'] = isset($data['initial_vehicles_count']) ? $data['initial_vehicles_count'] : null;
        $this->container['card_number'] = isset($data['card_number']) ? $data['card_number'] : null;
        $this->container['waste_code'] = isset($data['waste_code']) ? $data['waste_code'] : null;
        $this->container['year'] = isset($data['year']) ? $data['year'] : null;
        $this->container['dismantle_reusable_equipment_and_parts_mass'] = isset($data['dismantle_reusable_equipment_and_parts_mass']) ? $data['dismantle_reusable_equipment_and_parts_mass'] : null;
        $this->container['waste_code_extended'] = isset($data['waste_code_extended']) ? $data['waste_code_extended'] : null;
        $this->container['waste_code_extended_description'] = isset($data['waste_code_extended_description']) ? $data['waste_code_extended_description'] : null;
        $this->container['hazardous_waste_reclassification'] = isset($data['hazardous_waste_reclassification']) ? $data['hazardous_waste_reclassification'] : null;
        $this->container['hazardous_waste_reclassification_description'] = isset($data['hazardous_waste_reclassification_description']) ? $data['hazardous_waste_reclassification_description'] : null;
        $this->container['dismantle_reusable_equipment_and_parts'] = isset($data['dismantle_reusable_equipment_and_parts']) ? $data['dismantle_reusable_equipment_and_parts'] : null;
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
     * Gets initial_vehicles_mass
     *
     * @return double
     */
    public function getInitialVehiclesMass()
    {
        return $this->container['initial_vehicles_mass'];
    }

    /**
     * Sets initial_vehicles_mass
     *
     * @param double $initial_vehicles_mass 
     *
     * @return $this
     */
    public function setInitialVehiclesMass($initial_vehicles_mass)
    {
        $this->container['initial_vehicles_mass'] = $initial_vehicles_mass;

        return $this;
    }

    /**
     * Gets initial_vehicles_count
     *
     * @return int
     */
    public function getInitialVehiclesCount()
    {
        return $this->container['initial_vehicles_count'];
    }

    /**
     * Sets initial_vehicles_count
     *
     * @param int $initial_vehicles_count 
     *
     * @return $this
     */
    public function setInitialVehiclesCount($initial_vehicles_count)
    {
        $this->container['initial_vehicles_count'] = $initial_vehicles_count;

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
     * @param string $card_number 
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
     * @param string $waste_code 
     *
     * @return $this
     */
    public function setWasteCode($waste_code)
    {
        $this->container['waste_code'] = $waste_code;

        return $this;
    }

    /**
     * Gets year
     *
     * @return int
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param int $year 
     *
     * @return $this
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

        return $this;
    }

    /**
     * Gets dismantle_reusable_equipment_and_parts_mass
     *
     * @return double
     */
    public function getDismantleReusableEquipmentAndPartsMass()
    {
        return $this->container['dismantle_reusable_equipment_and_parts_mass'];
    }

    /**
     * Sets dismantle_reusable_equipment_and_parts_mass
     *
     * @param double $dismantle_reusable_equipment_and_parts_mass 
     *
     * @return $this
     */
    public function setDismantleReusableEquipmentAndPartsMass($dismantle_reusable_equipment_and_parts_mass)
    {
        $this->container['dismantle_reusable_equipment_and_parts_mass'] = $dismantle_reusable_equipment_and_parts_mass;

        return $this;
    }

    /**
     * Gets waste_code_extended
     *
     * @return bool
     */
    public function getWasteCodeExtended()
    {
        return $this->container['waste_code_extended'];
    }

    /**
     * Sets waste_code_extended
     *
     * @param bool $waste_code_extended 
     *
     * @return $this
     */
    public function setWasteCodeExtended($waste_code_extended)
    {
        $this->container['waste_code_extended'] = $waste_code_extended;

        return $this;
    }

    /**
     * Gets waste_code_extended_description
     *
     * @return string
     */
    public function getWasteCodeExtendedDescription()
    {
        return $this->container['waste_code_extended_description'];
    }

    /**
     * Sets waste_code_extended_description
     *
     * @param string $waste_code_extended_description 
     *
     * @return $this
     */
    public function setWasteCodeExtendedDescription($waste_code_extended_description)
    {
        $this->container['waste_code_extended_description'] = $waste_code_extended_description;

        return $this;
    }

    /**
     * Gets hazardous_waste_reclassification
     *
     * @return bool
     */
    public function getHazardousWasteReclassification()
    {
        return $this->container['hazardous_waste_reclassification'];
    }

    /**
     * Sets hazardous_waste_reclassification
     *
     * @param bool $hazardous_waste_reclassification 
     *
     * @return $this
     */
    public function setHazardousWasteReclassification($hazardous_waste_reclassification)
    {
        $this->container['hazardous_waste_reclassification'] = $hazardous_waste_reclassification;

        return $this;
    }

    /**
     * Gets hazardous_waste_reclassification_description
     *
     * @return string
     */
    public function getHazardousWasteReclassificationDescription()
    {
        return $this->container['hazardous_waste_reclassification_description'];
    }

    /**
     * Sets hazardous_waste_reclassification_description
     *
     * @param string $hazardous_waste_reclassification_description 
     *
     * @return $this
     */
    public function setHazardousWasteReclassificationDescription($hazardous_waste_reclassification_description)
    {
        $this->container['hazardous_waste_reclassification_description'] = $hazardous_waste_reclassification_description;

        return $this;
    }

    /**
     * Gets dismantle_reusable_equipment_and_parts
     *
     * @return \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1PaginatedPageDismantleReusableEquipmentAndPartsListItem
     */
    public function getDismantleReusableEquipmentAndParts()
    {
        return $this->container['dismantle_reusable_equipment_and_parts'];
    }

    /**
     * Sets dismantle_reusable_equipment_and_parts
     *
     * @param \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1PaginatedPageDismantleReusableEquipmentAndPartsListItem $dismantle_reusable_equipment_and_parts 
     *
     * @return $this
     */
    public function setDismantleReusableEquipmentAndParts($dismantle_reusable_equipment_and_parts)
    {
        $this->container['dismantle_reusable_equipment_and_parts'] = $dismantle_reusable_equipment_and_parts;

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


