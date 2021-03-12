<?php
/**
 * WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProcessedWasteV1DeleteDismantleProcessedWasteRequest
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
 * WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProcessedWasteV1DeleteDismantleProcessedWasteRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProcessedWasteV1DeleteDismantleProcessedWasteRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Requests.WasteRegister.WreckWasteRecordCard.DismantleProcessedWaste.V1.DeleteDismantleProcessedWasteRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dismantle_processed_wasteid' => 'string',
        'dismantle_processed_waste_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dismantle_processed_wasteid' => 'uuid',
        'dismantle_processed_waste_id' => 'uuid'
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
        'dismantle_processed_wasteid' => 'dismantleProcessedWasteid',
        'dismantle_processed_waste_id' => 'dismantleProcessedWasteId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dismantle_processed_wasteid' => 'setDismantleProcessedWasteid',
        'dismantle_processed_waste_id' => 'setDismantleProcessedWasteId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dismantle_processed_wasteid' => 'getDismantleProcessedWasteid',
        'dismantle_processed_waste_id' => 'getDismantleProcessedWasteId'
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
        $this->container['dismantle_processed_wasteid'] = isset($data['dismantle_processed_wasteid']) ? $data['dismantle_processed_wasteid'] : null;
        $this->container['dismantle_processed_waste_id'] = isset($data['dismantle_processed_waste_id']) ? $data['dismantle_processed_waste_id'] : null;
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
     * Gets dismantle_processed_wasteid
     *
     * @return string
     */
    public function getDismantleProcessedWasteid()
    {
        return $this->container['dismantle_processed_wasteid'];
    }

    /**
     * Sets dismantle_processed_wasteid
     *
     * @param string $dismantle_processed_wasteid Prowadzący stację demontażu - Przetwarzne odpady
     *
     * @return $this
     */
    public function setDismantleProcessedWasteid($dismantle_processed_wasteid)
    {
        $this->container['dismantle_processed_wasteid'] = $dismantle_processed_wasteid;

        return $this;
    }

    /**
     * Gets dismantle_processed_waste_id
     *
     * @return string
     */
    public function getDismantleProcessedWasteId()
    {
        return $this->container['dismantle_processed_waste_id'];
    }

    /**
     * Sets dismantle_processed_waste_id
     *
     * @param string $dismantle_processed_waste_id dismantle_processed_waste_id
     *
     * @return $this
     */
    public function setDismantleProcessedWasteId($dismantle_processed_waste_id)
    {
        $this->container['dismantle_processed_waste_id'] = $dismantle_processed_waste_id;

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

