<?php
/**
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1KeokTransferredListItem
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
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1KeokTransferredListItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1KeokTransferredListItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Responses.WasteRegister.MuncipalWasteRecordCard.V1.KeokTransferredListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'keok_transferred_id' => 'string',
        'transfer_date' => '\DateTime',
        'waste_mass' => 'double',
        'kpok_card_number' => 'string',
        'created_by_user' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'keok_transferred_id' => 'uuid',
        'transfer_date' => 'date-time',
        'waste_mass' => 'double',
        'kpok_card_number' => null,
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
        'keok_transferred_id' => 'keokTransferredId',
        'transfer_date' => 'transferDate',
        'waste_mass' => 'wasteMass',
        'kpok_card_number' => 'kpokCardNumber',
        'created_by_user' => 'createdByUser'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'keok_transferred_id' => 'setKeokTransferredId',
        'transfer_date' => 'setTransferDate',
        'waste_mass' => 'setWasteMass',
        'kpok_card_number' => 'setKpokCardNumber',
        'created_by_user' => 'setCreatedByUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'keok_transferred_id' => 'getKeokTransferredId',
        'transfer_date' => 'getTransferDate',
        'waste_mass' => 'getWasteMass',
        'kpok_card_number' => 'getKpokCardNumber',
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
        $this->container['keok_transferred_id'] = isset($data['keok_transferred_id']) ? $data['keok_transferred_id'] : null;
        $this->container['transfer_date'] = isset($data['transfer_date']) ? $data['transfer_date'] : null;
        $this->container['waste_mass'] = isset($data['waste_mass']) ? $data['waste_mass'] : null;
        $this->container['kpok_card_number'] = isset($data['kpok_card_number']) ? $data['kpok_card_number'] : null;
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
     * Gets keok_transferred_id
     *
     * @return string
     */
    public function getKeokTransferredId()
    {
        return $this->container['keok_transferred_id'];
    }

    /**
     * Sets keok_transferred_id
     *
     * @param string $keok_transferred_id 
     *
     * @return $this
     */
    public function setKeokTransferredId($keok_transferred_id)
    {
        $this->container['keok_transferred_id'] = $keok_transferred_id;

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
     * Gets waste_mass
     *
     * @return double
     */
    public function getWasteMass()
    {
        return $this->container['waste_mass'];
    }

    /**
     * Sets waste_mass
     *
     * @param double $waste_mass Masa odpadów
     *
     * @return $this
     */
    public function setWasteMass($waste_mass)
    {
        $this->container['waste_mass'] = $waste_mass;

        return $this;
    }

    /**
     * Gets kpok_card_number
     *
     * @return string
     */
    public function getKpokCardNumber()
    {
        return $this->container['kpok_card_number'];
    }

    /**
     * Sets kpok_card_number
     *
     * @param string $kpok_card_number 
     *
     * @return $this
     */
    public function setKpokCardNumber($kpok_card_number)
    {
        $this->container['kpok_card_number'] = $kpok_card_number;

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

