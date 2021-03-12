<?php
/**
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoDto
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
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Responses.WasteRegister.WasteRecordCard.V1.KeoDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'keo_id' => 'string',
        'waste_code_id' => 'int',
        'card_number' => 'string',
        'created_by_user_id' => 'string',
        'is_waste_generating' => 'bool',
        'is_waste_collecting' => 'bool',
        'is_salvage' => 'bool',
        'is_neutralization' => 'bool',
        'year' => 'int',
        'waste_mass' => 'double',
        'can_be_deleted' => 'bool',
        'waste_code_extended' => 'bool',
        'waste_code_extended_description' => 'string',
        'hazardous_waste_reclassification' => 'bool',
        'hazardous_waste_reclassification_description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'keo_id' => 'uuid',
        'waste_code_id' => 'int32',
        'card_number' => null,
        'created_by_user_id' => 'uuid',
        'is_waste_generating' => null,
        'is_waste_collecting' => null,
        'is_salvage' => null,
        'is_neutralization' => null,
        'year' => 'int32',
        'waste_mass' => 'double',
        'can_be_deleted' => null,
        'waste_code_extended' => null,
        'waste_code_extended_description' => null,
        'hazardous_waste_reclassification' => null,
        'hazardous_waste_reclassification_description' => null
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
        'keo_id' => 'keoId',
        'waste_code_id' => 'wasteCodeId',
        'card_number' => 'cardNumber',
        'created_by_user_id' => 'createdByUserId',
        'is_waste_generating' => 'isWasteGenerating',
        'is_waste_collecting' => 'isWasteCollecting',
        'is_salvage' => 'isSalvage',
        'is_neutralization' => 'isNeutralization',
        'year' => 'year',
        'waste_mass' => 'wasteMass',
        'can_be_deleted' => 'canBeDeleted',
        'waste_code_extended' => 'wasteCodeExtended',
        'waste_code_extended_description' => 'wasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'hazardousWasteReclassification',
        'hazardous_waste_reclassification_description' => 'hazardousWasteReclassificationDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'keo_id' => 'setKeoId',
        'waste_code_id' => 'setWasteCodeId',
        'card_number' => 'setCardNumber',
        'created_by_user_id' => 'setCreatedByUserId',
        'is_waste_generating' => 'setIsWasteGenerating',
        'is_waste_collecting' => 'setIsWasteCollecting',
        'is_salvage' => 'setIsSalvage',
        'is_neutralization' => 'setIsNeutralization',
        'year' => 'setYear',
        'waste_mass' => 'setWasteMass',
        'can_be_deleted' => 'setCanBeDeleted',
        'waste_code_extended' => 'setWasteCodeExtended',
        'waste_code_extended_description' => 'setWasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'setHazardousWasteReclassification',
        'hazardous_waste_reclassification_description' => 'setHazardousWasteReclassificationDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'keo_id' => 'getKeoId',
        'waste_code_id' => 'getWasteCodeId',
        'card_number' => 'getCardNumber',
        'created_by_user_id' => 'getCreatedByUserId',
        'is_waste_generating' => 'getIsWasteGenerating',
        'is_waste_collecting' => 'getIsWasteCollecting',
        'is_salvage' => 'getIsSalvage',
        'is_neutralization' => 'getIsNeutralization',
        'year' => 'getYear',
        'waste_mass' => 'getWasteMass',
        'can_be_deleted' => 'getCanBeDeleted',
        'waste_code_extended' => 'getWasteCodeExtended',
        'waste_code_extended_description' => 'getWasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'getHazardousWasteReclassification',
        'hazardous_waste_reclassification_description' => 'getHazardousWasteReclassificationDescription'
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
        $this->container['keo_id'] = isset($data['keo_id']) ? $data['keo_id'] : null;
        $this->container['waste_code_id'] = isset($data['waste_code_id']) ? $data['waste_code_id'] : null;
        $this->container['card_number'] = isset($data['card_number']) ? $data['card_number'] : null;
        $this->container['created_by_user_id'] = isset($data['created_by_user_id']) ? $data['created_by_user_id'] : null;
        $this->container['is_waste_generating'] = isset($data['is_waste_generating']) ? $data['is_waste_generating'] : null;
        $this->container['is_waste_collecting'] = isset($data['is_waste_collecting']) ? $data['is_waste_collecting'] : null;
        $this->container['is_salvage'] = isset($data['is_salvage']) ? $data['is_salvage'] : null;
        $this->container['is_neutralization'] = isset($data['is_neutralization']) ? $data['is_neutralization'] : null;
        $this->container['year'] = isset($data['year']) ? $data['year'] : null;
        $this->container['waste_mass'] = isset($data['waste_mass']) ? $data['waste_mass'] : null;
        $this->container['can_be_deleted'] = isset($data['can_be_deleted']) ? $data['can_be_deleted'] : null;
        $this->container['waste_code_extended'] = isset($data['waste_code_extended']) ? $data['waste_code_extended'] : null;
        $this->container['waste_code_extended_description'] = isset($data['waste_code_extended_description']) ? $data['waste_code_extended_description'] : null;
        $this->container['hazardous_waste_reclassification'] = isset($data['hazardous_waste_reclassification']) ? $data['hazardous_waste_reclassification'] : null;
        $this->container['hazardous_waste_reclassification_description'] = isset($data['hazardous_waste_reclassification_description']) ? $data['hazardous_waste_reclassification_description'] : null;
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
     * Gets keo_id
     *
     * @return string
     */
    public function getKeoId()
    {
        return $this->container['keo_id'];
    }

    /**
     * Sets keo_id
     *
     * @param string $keo_id Id karty ewidencji odpadów
     *
     * @return $this
     */
    public function setKeoId($keo_id)
    {
        $this->container['keo_id'] = $keo_id;

        return $this;
    }

    /**
     * Gets waste_code_id
     *
     * @return int
     */
    public function getWasteCodeId()
    {
        return $this->container['waste_code_id'];
    }

    /**
     * Sets waste_code_id
     *
     * @param int $waste_code_id Id kodu odpadu
     *
     * @return $this
     */
    public function setWasteCodeId($waste_code_id)
    {
        $this->container['waste_code_id'] = $waste_code_id;

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
     * @param string $card_number Numer karty
     *
     * @return $this
     */
    public function setCardNumber($card_number)
    {
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets created_by_user_id
     *
     * @return string
     */
    public function getCreatedByUserId()
    {
        return $this->container['created_by_user_id'];
    }

    /**
     * Sets created_by_user_id
     *
     * @param string $created_by_user_id Id użytkownika sporządzającego
     *
     * @return $this
     */
    public function setCreatedByUserId($created_by_user_id)
    {
        $this->container['created_by_user_id'] = $created_by_user_id;

        return $this;
    }

    /**
     * Gets is_waste_generating
     *
     * @return bool
     */
    public function getIsWasteGenerating()
    {
        return $this->container['is_waste_generating'];
    }

    /**
     * Sets is_waste_generating
     *
     * @param bool $is_waste_generating W - wytwarzanie odpadów
     *
     * @return $this
     */
    public function setIsWasteGenerating($is_waste_generating)
    {
        $this->container['is_waste_generating'] = $is_waste_generating;

        return $this;
    }

    /**
     * Gets is_waste_collecting
     *
     * @return bool
     */
    public function getIsWasteCollecting()
    {
        return $this->container['is_waste_collecting'];
    }

    /**
     * Sets is_waste_collecting
     *
     * @param bool $is_waste_collecting Zb - zbieranie odpadów
     *
     * @return $this
     */
    public function setIsWasteCollecting($is_waste_collecting)
    {
        $this->container['is_waste_collecting'] = $is_waste_collecting;

        return $this;
    }

    /**
     * Gets is_salvage
     *
     * @return bool
     */
    public function getIsSalvage()
    {
        return $this->container['is_salvage'];
    }

    /**
     * Sets is_salvage
     *
     * @param bool $is_salvage Od - odzysk
     *
     * @return $this
     */
    public function setIsSalvage($is_salvage)
    {
        $this->container['is_salvage'] = $is_salvage;

        return $this;
    }

    /**
     * Gets is_neutralization
     *
     * @return bool
     */
    public function getIsNeutralization()
    {
        return $this->container['is_neutralization'];
    }

    /**
     * Sets is_neutralization
     *
     * @param bool $is_neutralization Un - unieszkodliwianie
     *
     * @return $this
     */
    public function setIsNeutralization($is_neutralization)
    {
        $this->container['is_neutralization'] = $is_neutralization;

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
     * @param int $year Rok kalendarzowy
     *
     * @return $this
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

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
     * Gets can_be_deleted
     *
     * @return bool
     */
    public function getCanBeDeleted()
    {
        return $this->container['can_be_deleted'];
    }

    /**
     * Sets can_be_deleted
     *
     * @param bool $can_be_deleted Czy może być usunięta
     *
     * @return $this
     */
    public function setCanBeDeleted($can_be_deleted)
    {
        $this->container['can_be_deleted'] = $can_be_deleted;

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
     * @param bool $waste_code_extended Kod ex
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
     * @param string $waste_code_extended_description Rodzaj odpadu ex
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
     * @param bool $hazardous_waste_reclassification Zmiana statusu odpadów niebezpiecznych na odpady inne niż niebezpieczne
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
     * @param string $hazardous_waste_reclassification_description Rodzaj odpadu
     *
     * @return $this
     */
    public function setHazardousWasteReclassificationDescription($hazardous_waste_reclassification_description)
    {
        $this->container['hazardous_waste_reclassification_description'] = $hazardous_waste_reclassification_description;

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


