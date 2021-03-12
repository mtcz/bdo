<?php
/**
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementOnOnesOwnDto
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
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementOnOnesOwnDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementOnOnesOwnDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Responses.WasteRegister.ElectronicWasteRecordCard.V1.KezsWasteManagementOnOnesOwnDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'kezs_waste_management_on_ones_own_id' => 'string',
        'kezs_equipment_group_card_id' => 'string',
        'waste_code_id' => 'int',
        'waste_process_id' => 'int',
        'created_by_user_id' => 'string',
        'created_at' => '\DateTime',
        'recycled_waste_mass' => 'double',
        'is_recycling' => 'bool',
        'additional_information' => 'string',
        'installation_name' => 'string',
        'waste_code_extended' => 'bool',
        'waste_code_extended_description' => 'string',
        'hazardous_waste_reclassification' => 'bool',
        'hazardous_waste_reclassification_description' => 'string',
        'created_by_user' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'kezs_waste_management_on_ones_own_id' => 'uuid',
        'kezs_equipment_group_card_id' => 'uuid',
        'waste_code_id' => 'int32',
        'waste_process_id' => 'int32',
        'created_by_user_id' => 'uuid',
        'created_at' => 'date-time',
        'recycled_waste_mass' => 'double',
        'is_recycling' => null,
        'additional_information' => null,
        'installation_name' => null,
        'waste_code_extended' => null,
        'waste_code_extended_description' => null,
        'hazardous_waste_reclassification' => null,
        'hazardous_waste_reclassification_description' => null,
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
        'kezs_waste_management_on_ones_own_id' => 'kezsWasteManagementOnOnesOwnId',
        'kezs_equipment_group_card_id' => 'kezsEquipmentGroupCardId',
        'waste_code_id' => 'wasteCodeId',
        'waste_process_id' => 'wasteProcessId',
        'created_by_user_id' => 'createdByUserId',
        'created_at' => 'createdAt',
        'recycled_waste_mass' => 'recycledWasteMass',
        'is_recycling' => 'isRecycling',
        'additional_information' => 'additionalInformation',
        'installation_name' => 'installationName',
        'waste_code_extended' => 'wasteCodeExtended',
        'waste_code_extended_description' => 'wasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'hazardousWasteReclassification',
        'hazardous_waste_reclassification_description' => 'hazardousWasteReclassificationDescription',
        'created_by_user' => 'createdByUser'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'kezs_waste_management_on_ones_own_id' => 'setKezsWasteManagementOnOnesOwnId',
        'kezs_equipment_group_card_id' => 'setKezsEquipmentGroupCardId',
        'waste_code_id' => 'setWasteCodeId',
        'waste_process_id' => 'setWasteProcessId',
        'created_by_user_id' => 'setCreatedByUserId',
        'created_at' => 'setCreatedAt',
        'recycled_waste_mass' => 'setRecycledWasteMass',
        'is_recycling' => 'setIsRecycling',
        'additional_information' => 'setAdditionalInformation',
        'installation_name' => 'setInstallationName',
        'waste_code_extended' => 'setWasteCodeExtended',
        'waste_code_extended_description' => 'setWasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'setHazardousWasteReclassification',
        'hazardous_waste_reclassification_description' => 'setHazardousWasteReclassificationDescription',
        'created_by_user' => 'setCreatedByUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'kezs_waste_management_on_ones_own_id' => 'getKezsWasteManagementOnOnesOwnId',
        'kezs_equipment_group_card_id' => 'getKezsEquipmentGroupCardId',
        'waste_code_id' => 'getWasteCodeId',
        'waste_process_id' => 'getWasteProcessId',
        'created_by_user_id' => 'getCreatedByUserId',
        'created_at' => 'getCreatedAt',
        'recycled_waste_mass' => 'getRecycledWasteMass',
        'is_recycling' => 'getIsRecycling',
        'additional_information' => 'getAdditionalInformation',
        'installation_name' => 'getInstallationName',
        'waste_code_extended' => 'getWasteCodeExtended',
        'waste_code_extended_description' => 'getWasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'getHazardousWasteReclassification',
        'hazardous_waste_reclassification_description' => 'getHazardousWasteReclassificationDescription',
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
        $this->container['kezs_waste_management_on_ones_own_id'] = isset($data['kezs_waste_management_on_ones_own_id']) ? $data['kezs_waste_management_on_ones_own_id'] : null;
        $this->container['kezs_equipment_group_card_id'] = isset($data['kezs_equipment_group_card_id']) ? $data['kezs_equipment_group_card_id'] : null;
        $this->container['waste_code_id'] = isset($data['waste_code_id']) ? $data['waste_code_id'] : null;
        $this->container['waste_process_id'] = isset($data['waste_process_id']) ? $data['waste_process_id'] : null;
        $this->container['created_by_user_id'] = isset($data['created_by_user_id']) ? $data['created_by_user_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['recycled_waste_mass'] = isset($data['recycled_waste_mass']) ? $data['recycled_waste_mass'] : null;
        $this->container['is_recycling'] = isset($data['is_recycling']) ? $data['is_recycling'] : null;
        $this->container['additional_information'] = isset($data['additional_information']) ? $data['additional_information'] : null;
        $this->container['installation_name'] = isset($data['installation_name']) ? $data['installation_name'] : null;
        $this->container['waste_code_extended'] = isset($data['waste_code_extended']) ? $data['waste_code_extended'] : null;
        $this->container['waste_code_extended_description'] = isset($data['waste_code_extended_description']) ? $data['waste_code_extended_description'] : null;
        $this->container['hazardous_waste_reclassification'] = isset($data['hazardous_waste_reclassification']) ? $data['hazardous_waste_reclassification'] : null;
        $this->container['hazardous_waste_reclassification_description'] = isset($data['hazardous_waste_reclassification_description']) ? $data['hazardous_waste_reclassification_description'] : null;
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
     * Gets kezs_waste_management_on_ones_own_id
     *
     * @return string
     */
    public function getKezsWasteManagementOnOnesOwnId()
    {
        return $this->container['kezs_waste_management_on_ones_own_id'];
    }

    /**
     * Sets kezs_waste_management_on_ones_own_id
     *
     * @param string $kezs_waste_management_on_ones_own_id Id wpisu Gospodarowanie odpadami we własnym zakresie
     *
     * @return $this
     */
    public function setKezsWasteManagementOnOnesOwnId($kezs_waste_management_on_ones_own_id)
    {
        $this->container['kezs_waste_management_on_ones_own_id'] = $kezs_waste_management_on_ones_own_id;

        return $this;
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
     * @param string $kezs_equipment_group_card_id Id grupy zebranego sprzętu
     *
     * @return $this
     */
    public function setKezsEquipmentGroupCardId($kezs_equipment_group_card_id)
    {
        $this->container['kezs_equipment_group_card_id'] = $kezs_equipment_group_card_id;

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
     * @param int $waste_process_id Id procesu przetwarzania odpadów
     *
     * @return $this
     */
    public function setWasteProcessId($waste_process_id)
    {
        $this->container['waste_process_id'] = $waste_process_id;

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
     * Gets recycled_waste_mass
     *
     * @return double
     */
    public function getRecycledWasteMass()
    {
        return $this->container['recycled_waste_mass'];
    }

    /**
     * Sets recycled_waste_mass
     *
     * @param double $recycled_waste_mass Masa sprzętu do ponownego użycia
     *
     * @return $this
     */
    public function setRecycledWasteMass($recycled_waste_mass)
    {
        $this->container['recycled_waste_mass'] = $recycled_waste_mass;

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
     * @param bool $is_recycling Recykling
     *
     * @return $this
     */
    public function setIsRecycling($is_recycling)
    {
        $this->container['is_recycling'] = $is_recycling;

        return $this;
    }

    /**
     * Gets additional_information
     *
     * @return string
     */
    public function getAdditionalInformation()
    {
        return $this->container['additional_information'];
    }

    /**
     * Sets additional_information
     *
     * @param string $additional_information Informacje dodatkowe
     *
     * @return $this
     */
    public function setAdditionalInformation($additional_information)
    {
        $this->container['additional_information'] = $additional_information;

        return $this;
    }

    /**
     * Gets installation_name
     *
     * @return string
     */
    public function getInstallationName()
    {
        return $this->container['installation_name'];
    }

    /**
     * Sets installation_name
     *
     * @param string $installation_name Nazwa instalacji
     *
     * @return $this
     */
    public function setInstallationName($installation_name)
    {
        $this->container['installation_name'] = $installation_name;

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

