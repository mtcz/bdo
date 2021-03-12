<?php
/**
 * WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1AssignReceiveConfirmationToKpoRequest
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
 * WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1AssignReceiveConfirmationToKpoRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1AssignReceiveConfirmationToKpoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Requests.WasteRegister.WasteTransferCard.V1.AssignReceiveConfirmationToKpoRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'kpo_id' => 'string',
        'corrected_waste_mass' => 'double',
        'remarks' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'kpo_id' => 'uuid',
        'corrected_waste_mass' => 'double',
        'remarks' => null
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
        'kpo_id' => 'kpoId',
        'corrected_waste_mass' => 'correctedWasteMass',
        'remarks' => 'remarks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'kpo_id' => 'setKpoId',
        'corrected_waste_mass' => 'setCorrectedWasteMass',
        'remarks' => 'setRemarks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'kpo_id' => 'getKpoId',
        'corrected_waste_mass' => 'getCorrectedWasteMass',
        'remarks' => 'getRemarks'
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
        $this->container['kpo_id'] = isset($data['kpo_id']) ? $data['kpo_id'] : null;
        $this->container['corrected_waste_mass'] = isset($data['corrected_waste_mass']) ? $data['corrected_waste_mass'] : null;
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
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
     * Gets corrected_waste_mass
     *
     * @return double
     */
    public function getCorrectedWasteMass()
    {
        return $this->container['corrected_waste_mass'];
    }

    /**
     * Sets corrected_waste_mass
     *
     * @param double $corrected_waste_mass Skorygowana masa odpadów
     *
     * @return $this
     */
    public function setCorrectedWasteMass($corrected_waste_mass)
    {
        $this->container['corrected_waste_mass'] = $corrected_waste_mass;

        return $this;
    }

    /**
     * Gets remarks
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
     * Sets remarks
     *
     * @param string $remarks Uwagi
     *
     * @return $this
     */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;

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

