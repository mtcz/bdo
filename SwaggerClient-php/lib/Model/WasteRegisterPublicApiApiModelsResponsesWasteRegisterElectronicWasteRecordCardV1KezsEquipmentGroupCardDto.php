<?php
/**
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentGroupCardDto
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
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentGroupCardDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentGroupCardDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Responses.WasteRegister.ElectronicWasteRecordCard.V1.KezsEquipmentGroupCardDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'kezs_equipment_group_card_id' => 'string',
        'kezs_equipment_group_id' => 'int',
        'kezs_id' => 'string',
        'stock_mass' => 'double',
        'kezs_equipment_group' => '\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentGroupDto',
        'kezs_stock_waste_mass_group' => '\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsStockWasteMassGroupDto[]',
        'kezs_equipment_collecting_entry' => '\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentCollectingEntryDto[]',
        'kezs_equipment_management' => '\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentManagementDto[]',
        'kezs_waste_management_handed_over' => '\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementHandedOverDto[]',
        'kezs_waste_management_on_ones_own' => '\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementOnOnesOwnDto[]',
        'kezs_used_equipment_waste_generation' => '\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsUsedEquipmentWasteGenerationDto[]',
        'kezs_equipment_group_code_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'kezs_equipment_group_card_id' => 'uuid',
        'kezs_equipment_group_id' => 'int32',
        'kezs_id' => 'uuid',
        'stock_mass' => 'double',
        'kezs_equipment_group' => null,
        'kezs_stock_waste_mass_group' => null,
        'kezs_equipment_collecting_entry' => null,
        'kezs_equipment_management' => null,
        'kezs_waste_management_handed_over' => null,
        'kezs_waste_management_on_ones_own' => null,
        'kezs_used_equipment_waste_generation' => null,
        'kezs_equipment_group_code_name' => null
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
        'kezs_equipment_group_card_id' => 'kezsEquipmentGroupCardId',
        'kezs_equipment_group_id' => 'kezsEquipmentGroupId',
        'kezs_id' => 'kezsId',
        'stock_mass' => 'stockMass',
        'kezs_equipment_group' => 'kezsEquipmentGroup',
        'kezs_stock_waste_mass_group' => 'kezsStockWasteMassGroup',
        'kezs_equipment_collecting_entry' => 'kezsEquipmentCollectingEntry',
        'kezs_equipment_management' => 'kezsEquipmentManagement',
        'kezs_waste_management_handed_over' => 'kezsWasteManagementHandedOver',
        'kezs_waste_management_on_ones_own' => 'kezsWasteManagementOnOnesOwn',
        'kezs_used_equipment_waste_generation' => 'kezsUsedEquipmentWasteGeneration',
        'kezs_equipment_group_code_name' => 'kezsEquipmentGroupCodeName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'kezs_equipment_group_card_id' => 'setKezsEquipmentGroupCardId',
        'kezs_equipment_group_id' => 'setKezsEquipmentGroupId',
        'kezs_id' => 'setKezsId',
        'stock_mass' => 'setStockMass',
        'kezs_equipment_group' => 'setKezsEquipmentGroup',
        'kezs_stock_waste_mass_group' => 'setKezsStockWasteMassGroup',
        'kezs_equipment_collecting_entry' => 'setKezsEquipmentCollectingEntry',
        'kezs_equipment_management' => 'setKezsEquipmentManagement',
        'kezs_waste_management_handed_over' => 'setKezsWasteManagementHandedOver',
        'kezs_waste_management_on_ones_own' => 'setKezsWasteManagementOnOnesOwn',
        'kezs_used_equipment_waste_generation' => 'setKezsUsedEquipmentWasteGeneration',
        'kezs_equipment_group_code_name' => 'setKezsEquipmentGroupCodeName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'kezs_equipment_group_card_id' => 'getKezsEquipmentGroupCardId',
        'kezs_equipment_group_id' => 'getKezsEquipmentGroupId',
        'kezs_id' => 'getKezsId',
        'stock_mass' => 'getStockMass',
        'kezs_equipment_group' => 'getKezsEquipmentGroup',
        'kezs_stock_waste_mass_group' => 'getKezsStockWasteMassGroup',
        'kezs_equipment_collecting_entry' => 'getKezsEquipmentCollectingEntry',
        'kezs_equipment_management' => 'getKezsEquipmentManagement',
        'kezs_waste_management_handed_over' => 'getKezsWasteManagementHandedOver',
        'kezs_waste_management_on_ones_own' => 'getKezsWasteManagementOnOnesOwn',
        'kezs_used_equipment_waste_generation' => 'getKezsUsedEquipmentWasteGeneration',
        'kezs_equipment_group_code_name' => 'getKezsEquipmentGroupCodeName'
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
        $this->container['kezs_equipment_group_card_id'] = isset($data['kezs_equipment_group_card_id']) ? $data['kezs_equipment_group_card_id'] : null;
        $this->container['kezs_equipment_group_id'] = isset($data['kezs_equipment_group_id']) ? $data['kezs_equipment_group_id'] : null;
        $this->container['kezs_id'] = isset($data['kezs_id']) ? $data['kezs_id'] : null;
        $this->container['stock_mass'] = isset($data['stock_mass']) ? $data['stock_mass'] : null;
        $this->container['kezs_equipment_group'] = isset($data['kezs_equipment_group']) ? $data['kezs_equipment_group'] : null;
        $this->container['kezs_stock_waste_mass_group'] = isset($data['kezs_stock_waste_mass_group']) ? $data['kezs_stock_waste_mass_group'] : null;
        $this->container['kezs_equipment_collecting_entry'] = isset($data['kezs_equipment_collecting_entry']) ? $data['kezs_equipment_collecting_entry'] : null;
        $this->container['kezs_equipment_management'] = isset($data['kezs_equipment_management']) ? $data['kezs_equipment_management'] : null;
        $this->container['kezs_waste_management_handed_over'] = isset($data['kezs_waste_management_handed_over']) ? $data['kezs_waste_management_handed_over'] : null;
        $this->container['kezs_waste_management_on_ones_own'] = isset($data['kezs_waste_management_on_ones_own']) ? $data['kezs_waste_management_on_ones_own'] : null;
        $this->container['kezs_used_equipment_waste_generation'] = isset($data['kezs_used_equipment_waste_generation']) ? $data['kezs_used_equipment_waste_generation'] : null;
        $this->container['kezs_equipment_group_code_name'] = isset($data['kezs_equipment_group_code_name']) ? $data['kezs_equipment_group_code_name'] : null;
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
     * Gets kezs_equipment_group_card_id
     *
     * @return string
     */
    public function getKezsEquipmentGroupCardId()
    {
        return $this->container['kezs_equipment_group_card_id'];
    }

    /**
     * Sets kezs_equipment_group_card_id
     *
     * @param string $kezs_equipment_group_card_id Id grupy zebranego sprz??tu
     *
     * @return $this
     */
    public function setKezsEquipmentGroupCardId($kezs_equipment_group_card_id)
    {
        $this->container['kezs_equipment_group_card_id'] = $kezs_equipment_group_card_id;

        return $this;
    }

    /**
     * Gets kezs_equipment_group_id
     *
     * @return int
     */
    public function getKezsEquipmentGroupId()
    {
        return $this->container['kezs_equipment_group_id'];
    }

    /**
     * Sets kezs_equipment_group_id
     *
     * @param int $kezs_equipment_group_id 
     *
     * @return $this
     */
    public function setKezsEquipmentGroupId($kezs_equipment_group_id)
    {
        $this->container['kezs_equipment_group_id'] = $kezs_equipment_group_id;

        return $this;
    }

    /**
     * Gets kezs_id
     *
     * @return string
     */
    public function getKezsId()
    {
        return $this->container['kezs_id'];
    }

    /**
     * Sets kezs_id
     *
     * @param string $kezs_id Id karty ewidencji zu??ytego sprz??tu elektrycznego i elektronicznego
     *
     * @return $this
     */
    public function setKezsId($kezs_id)
    {
        $this->container['kezs_id'] = $kezs_id;

        return $this;
    }

    /**
     * Gets stock_mass
     *
     * @return double
     */
    public function getStockMass()
    {
        return $this->container['stock_mass'];
    }

    /**
     * Sets stock_mass
     *
     * @param double $stock_mass Masa grupy zebranego sprz??tu
     *
     * @return $this
     */
    public function setStockMass($stock_mass)
    {
        $this->container['stock_mass'] = $stock_mass;

        return $this;
    }

    /**
     * Gets kezs_equipment_group
     *
     * @return \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentGroupDto
     */
    public function getKezsEquipmentGroup()
    {
        return $this->container['kezs_equipment_group'];
    }

    /**
     * Sets kezs_equipment_group
     *
     * @param \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentGroupDto $kezs_equipment_group 
     *
     * @return $this
     */
    public function setKezsEquipmentGroup($kezs_equipment_group)
    {
        $this->container['kezs_equipment_group'] = $kezs_equipment_group;

        return $this;
    }

    /**
     * Gets kezs_stock_waste_mass_group
     *
     * @return \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsStockWasteMassGroupDto[]
     */
    public function getKezsStockWasteMassGroup()
    {
        return $this->container['kezs_stock_waste_mass_group'];
    }

    /**
     * Sets kezs_stock_waste_mass_group
     *
     * @param \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsStockWasteMassGroupDto[] $kezs_stock_waste_mass_group 
     *
     * @return $this
     */
    public function setKezsStockWasteMassGroup($kezs_stock_waste_mass_group)
    {
        $this->container['kezs_stock_waste_mass_group'] = $kezs_stock_waste_mass_group;

        return $this;
    }

    /**
     * Gets kezs_equipment_collecting_entry
     *
     * @return \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentCollectingEntryDto[]
     */
    public function getKezsEquipmentCollectingEntry()
    {
        return $this->container['kezs_equipment_collecting_entry'];
    }

    /**
     * Sets kezs_equipment_collecting_entry
     *
     * @param \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentCollectingEntryDto[] $kezs_equipment_collecting_entry 
     *
     * @return $this
     */
    public function setKezsEquipmentCollectingEntry($kezs_equipment_collecting_entry)
    {
        $this->container['kezs_equipment_collecting_entry'] = $kezs_equipment_collecting_entry;

        return $this;
    }

    /**
     * Gets kezs_equipment_management
     *
     * @return \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentManagementDto[]
     */
    public function getKezsEquipmentManagement()
    {
        return $this->container['kezs_equipment_management'];
    }

    /**
     * Sets kezs_equipment_management
     *
     * @param \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentManagementDto[] $kezs_equipment_management 
     *
     * @return $this
     */
    public function setKezsEquipmentManagement($kezs_equipment_management)
    {
        $this->container['kezs_equipment_management'] = $kezs_equipment_management;

        return $this;
    }

    /**
     * Gets kezs_waste_management_handed_over
     *
     * @return \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementHandedOverDto[]
     */
    public function getKezsWasteManagementHandedOver()
    {
        return $this->container['kezs_waste_management_handed_over'];
    }

    /**
     * Sets kezs_waste_management_handed_over
     *
     * @param \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementHandedOverDto[] $kezs_waste_management_handed_over 
     *
     * @return $this
     */
    public function setKezsWasteManagementHandedOver($kezs_waste_management_handed_over)
    {
        $this->container['kezs_waste_management_handed_over'] = $kezs_waste_management_handed_over;

        return $this;
    }

    /**
     * Gets kezs_waste_management_on_ones_own
     *
     * @return \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementOnOnesOwnDto[]
     */
    public function getKezsWasteManagementOnOnesOwn()
    {
        return $this->container['kezs_waste_management_on_ones_own'];
    }

    /**
     * Sets kezs_waste_management_on_ones_own
     *
     * @param \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementOnOnesOwnDto[] $kezs_waste_management_on_ones_own 
     *
     * @return $this
     */
    public function setKezsWasteManagementOnOnesOwn($kezs_waste_management_on_ones_own)
    {
        $this->container['kezs_waste_management_on_ones_own'] = $kezs_waste_management_on_ones_own;

        return $this;
    }

    /**
     * Gets kezs_used_equipment_waste_generation
     *
     * @return \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsUsedEquipmentWasteGenerationDto[]
     */
    public function getKezsUsedEquipmentWasteGeneration()
    {
        return $this->container['kezs_used_equipment_waste_generation'];
    }

    /**
     * Sets kezs_used_equipment_waste_generation
     *
     * @param \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsUsedEquipmentWasteGenerationDto[] $kezs_used_equipment_waste_generation 
     *
     * @return $this
     */
    public function setKezsUsedEquipmentWasteGeneration($kezs_used_equipment_waste_generation)
    {
        $this->container['kezs_used_equipment_waste_generation'] = $kezs_used_equipment_waste_generation;

        return $this;
    }

    /**
     * Gets kezs_equipment_group_code_name
     *
     * @return string
     */
    public function getKezsEquipmentGroupCodeName()
    {
        return $this->container['kezs_equipment_group_code_name'];
    }

    /**
     * Sets kezs_equipment_group_code_name
     *
     * @param string $kezs_equipment_group_code_name kezs_equipment_group_code_name
     *
     * @return $this
     */
    public function setKezsEquipmentGroupCodeName($kezs_equipment_group_code_name)
    {
        $this->container['kezs_equipment_group_code_name'] = $kezs_equipment_group_code_name;

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


