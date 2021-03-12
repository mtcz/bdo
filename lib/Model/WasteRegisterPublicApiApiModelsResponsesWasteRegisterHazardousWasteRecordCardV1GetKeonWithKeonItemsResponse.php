<?php
/**
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1GetKeonWithKeonItemsResponse
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
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1GetKeonWithKeonItemsResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1GetKeonWithKeonItemsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Responses.WasteRegister.HazardousWasteRecordCard.V1.GetKeonWithKeonItemsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'keon_id' => 'string',
        'card_number' => 'string',
        'waste_code_id' => 'int',
        'waste_code_extended' => 'bool',
        'waste_code_extended_description' => 'string',
        'hazardous_waste_reclassification' => 'bool',
        'hazardous_waste_reclassification_description' => 'string',
        'company_id' => 'string',
        'created_at' => '\DateTime',
        'created_by_user' => 'string',
        'year' => 'int',
        'can_be_deleted' => 'bool',
        'keon_items' => '\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1PaginatedPageKeonItemWithCompanyDto'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'keon_id' => 'uuid',
        'card_number' => null,
        'waste_code_id' => 'int32',
        'waste_code_extended' => null,
        'waste_code_extended_description' => null,
        'hazardous_waste_reclassification' => null,
        'hazardous_waste_reclassification_description' => null,
        'company_id' => 'uuid',
        'created_at' => 'date-time',
        'created_by_user' => null,
        'year' => 'int32',
        'can_be_deleted' => null,
        'keon_items' => null
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
        'keon_id' => 'keonId',
        'card_number' => 'cardNumber',
        'waste_code_id' => 'wasteCodeId',
        'waste_code_extended' => 'wasteCodeExtended',
        'waste_code_extended_description' => 'wasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'hazardousWasteReclassification',
        'hazardous_waste_reclassification_description' => 'hazardousWasteReclassificationDescription',
        'company_id' => 'companyId',
        'created_at' => 'createdAt',
        'created_by_user' => 'createdByUser',
        'year' => 'year',
        'can_be_deleted' => 'canBeDeleted',
        'keon_items' => 'keonItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'keon_id' => 'setKeonId',
        'card_number' => 'setCardNumber',
        'waste_code_id' => 'setWasteCodeId',
        'waste_code_extended' => 'setWasteCodeExtended',
        'waste_code_extended_description' => 'setWasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'setHazardousWasteReclassification',
        'hazardous_waste_reclassification_description' => 'setHazardousWasteReclassificationDescription',
        'company_id' => 'setCompanyId',
        'created_at' => 'setCreatedAt',
        'created_by_user' => 'setCreatedByUser',
        'year' => 'setYear',
        'can_be_deleted' => 'setCanBeDeleted',
        'keon_items' => 'setKeonItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'keon_id' => 'getKeonId',
        'card_number' => 'getCardNumber',
        'waste_code_id' => 'getWasteCodeId',
        'waste_code_extended' => 'getWasteCodeExtended',
        'waste_code_extended_description' => 'getWasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'getHazardousWasteReclassification',
        'hazardous_waste_reclassification_description' => 'getHazardousWasteReclassificationDescription',
        'company_id' => 'getCompanyId',
        'created_at' => 'getCreatedAt',
        'created_by_user' => 'getCreatedByUser',
        'year' => 'getYear',
        'can_be_deleted' => 'getCanBeDeleted',
        'keon_items' => 'getKeonItems'
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
        $this->container['keon_id'] = isset($data['keon_id']) ? $data['keon_id'] : null;
        $this->container['card_number'] = isset($data['card_number']) ? $data['card_number'] : null;
        $this->container['waste_code_id'] = isset($data['waste_code_id']) ? $data['waste_code_id'] : null;
        $this->container['waste_code_extended'] = isset($data['waste_code_extended']) ? $data['waste_code_extended'] : null;
        $this->container['waste_code_extended_description'] = isset($data['waste_code_extended_description']) ? $data['waste_code_extended_description'] : null;
        $this->container['hazardous_waste_reclassification'] = isset($data['hazardous_waste_reclassification']) ? $data['hazardous_waste_reclassification'] : null;
        $this->container['hazardous_waste_reclassification_description'] = isset($data['hazardous_waste_reclassification_description']) ? $data['hazardous_waste_reclassification_description'] : null;
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['created_by_user'] = isset($data['created_by_user']) ? $data['created_by_user'] : null;
        $this->container['year'] = isset($data['year']) ? $data['year'] : null;
        $this->container['can_be_deleted'] = isset($data['can_be_deleted']) ? $data['can_be_deleted'] : null;
        $this->container['keon_items'] = isset($data['keon_items']) ? $data['keon_items'] : null;
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
     * Gets keon_id
     *
     * @return string
     */
    public function getKeonId()
    {
        return $this->container['keon_id'];
    }

    /**
     * Sets keon_id
     *
     * @param string $keon_id Id karty ewidencji odpadów niebezpiecznych
     *
     * @return $this
     */
    public function setKeonId($keon_id)
    {
        $this->container['keon_id'] = $keon_id;

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
     * Gets company_id
     *
     * @return string
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param string $company_id Id podmiotu
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Data utworzenia
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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
     * Gets keon_items
     *
     * @return \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1PaginatedPageKeonItemWithCompanyDto
     */
    public function getKeonItems()
    {
        return $this->container['keon_items'];
    }

    /**
     * Sets keon_items
     *
     * @param \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1PaginatedPageKeonItemWithCompanyDto $keon_items 
     *
     * @return $this
     */
    public function setKeonItems($keon_items)
    {
        $this->container['keon_items'] = $keon_items;

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


