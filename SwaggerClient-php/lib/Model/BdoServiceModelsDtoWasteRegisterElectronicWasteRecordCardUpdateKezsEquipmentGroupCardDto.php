<?php
/**
 * BdoServiceModelsDtoWasteRegisterElectronicWasteRecordCardUpdateKezsEquipmentGroupCardDto
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
 * BdoServiceModelsDtoWasteRegisterElectronicWasteRecordCardUpdateKezsEquipmentGroupCardDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BdoServiceModelsDtoWasteRegisterElectronicWasteRecordCardUpdateKezsEquipmentGroupCardDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BdoService.Models.Dto.WasteRegister.ElectronicWasteRecordCard.UpdateKezsEquipmentGroupCardDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'kezs_equipment_group_card_id' => 'string',
        'kezs_equipment_group_code_name' => 'string',
        'stock_mass' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'kezs_equipment_group_card_id' => 'uuid',
        'kezs_equipment_group_code_name' => null,
        'stock_mass' => 'double'
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
        'kezs_equipment_group_code_name' => 'kezsEquipmentGroupCodeName',
        'stock_mass' => 'stockMass'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'kezs_equipment_group_card_id' => 'setKezsEquipmentGroupCardId',
        'kezs_equipment_group_code_name' => 'setKezsEquipmentGroupCodeName',
        'stock_mass' => 'setStockMass'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'kezs_equipment_group_card_id' => 'getKezsEquipmentGroupCardId',
        'kezs_equipment_group_code_name' => 'getKezsEquipmentGroupCodeName',
        'stock_mass' => 'getStockMass'
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
        $this->container['kezs_equipment_group_code_name'] = isset($data['kezs_equipment_group_code_name']) ? $data['kezs_equipment_group_code_name'] : null;
        $this->container['stock_mass'] = isset($data['stock_mass']) ? $data['stock_mass'] : null;
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
     * @param string $kezs_equipment_group_card_id kezs_equipment_group_card_id
     *
     * @return $this
     */
    public function setKezsEquipmentGroupCardId($kezs_equipment_group_card_id)
    {
        $this->container['kezs_equipment_group_card_id'] = $kezs_equipment_group_card_id;

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
     * @param double $stock_mass stock_mass
     *
     * @return $this
     */
    public function setStockMass($stock_mass)
    {
        $this->container['stock_mass'] = $stock_mass;

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


