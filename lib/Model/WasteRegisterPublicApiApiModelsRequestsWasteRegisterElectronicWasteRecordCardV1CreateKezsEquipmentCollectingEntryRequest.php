<?php
/**
 * WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsEquipmentCollectingEntryRequest
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
 * WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsEquipmentCollectingEntryRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsEquipmentCollectingEntryRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Requests.WasteRegister.ElectronicWasteRecordCard.V1.CreateKezsEquipmentCollectingEntryRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'kezs_equipment_group_card_id' => 'string',
        'kpo_id' => 'string',
        'kpok_id' => 'string',
        'received_from_user' => 'bool',
        'is_equipment_owner_exempt_from_record' => 'bool',
        'is_import_to_rp' => 'bool',
        'is_entry_based_on_kpo' => 'bool',
        'is_entry_based_on_kpok' => 'bool',
        'received_date' => '\DateTime',
        'received_equipment_mass' => 'double',
        'country_id' => 'int',
        'locality' => 'string',
        'street' => 'string',
        'postal_code' => 'string',
        'building_number' => 'string',
        'local_number' => 'string',
        'additional_information' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'kezs_equipment_group_card_id' => 'uuid',
        'kpo_id' => 'uuid',
        'kpok_id' => 'uuid',
        'received_from_user' => null,
        'is_equipment_owner_exempt_from_record' => null,
        'is_import_to_rp' => null,
        'is_entry_based_on_kpo' => null,
        'is_entry_based_on_kpok' => null,
        'received_date' => 'date-time',
        'received_equipment_mass' => 'double',
        'country_id' => 'int32',
        'locality' => null,
        'street' => null,
        'postal_code' => null,
        'building_number' => null,
        'local_number' => null,
        'additional_information' => null
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
        'kpo_id' => 'kpoId',
        'kpok_id' => 'kpokId',
        'received_from_user' => 'receivedFromUser',
        'is_equipment_owner_exempt_from_record' => 'isEquipmentOwnerExemptFromRecord',
        'is_import_to_rp' => 'isImportToRp',
        'is_entry_based_on_kpo' => 'isEntryBasedOnKpo',
        'is_entry_based_on_kpok' => 'isEntryBasedOnKpok',
        'received_date' => 'receivedDate',
        'received_equipment_mass' => 'receivedEquipmentMass',
        'country_id' => 'countryId',
        'locality' => 'locality',
        'street' => 'street',
        'postal_code' => 'postalCode',
        'building_number' => 'buildingNumber',
        'local_number' => 'localNumber',
        'additional_information' => 'additionalInformation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'kezs_equipment_group_card_id' => 'setKezsEquipmentGroupCardId',
        'kpo_id' => 'setKpoId',
        'kpok_id' => 'setKpokId',
        'received_from_user' => 'setReceivedFromUser',
        'is_equipment_owner_exempt_from_record' => 'setIsEquipmentOwnerExemptFromRecord',
        'is_import_to_rp' => 'setIsImportToRp',
        'is_entry_based_on_kpo' => 'setIsEntryBasedOnKpo',
        'is_entry_based_on_kpok' => 'setIsEntryBasedOnKpok',
        'received_date' => 'setReceivedDate',
        'received_equipment_mass' => 'setReceivedEquipmentMass',
        'country_id' => 'setCountryId',
        'locality' => 'setLocality',
        'street' => 'setStreet',
        'postal_code' => 'setPostalCode',
        'building_number' => 'setBuildingNumber',
        'local_number' => 'setLocalNumber',
        'additional_information' => 'setAdditionalInformation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'kezs_equipment_group_card_id' => 'getKezsEquipmentGroupCardId',
        'kpo_id' => 'getKpoId',
        'kpok_id' => 'getKpokId',
        'received_from_user' => 'getReceivedFromUser',
        'is_equipment_owner_exempt_from_record' => 'getIsEquipmentOwnerExemptFromRecord',
        'is_import_to_rp' => 'getIsImportToRp',
        'is_entry_based_on_kpo' => 'getIsEntryBasedOnKpo',
        'is_entry_based_on_kpok' => 'getIsEntryBasedOnKpok',
        'received_date' => 'getReceivedDate',
        'received_equipment_mass' => 'getReceivedEquipmentMass',
        'country_id' => 'getCountryId',
        'locality' => 'getLocality',
        'street' => 'getStreet',
        'postal_code' => 'getPostalCode',
        'building_number' => 'getBuildingNumber',
        'local_number' => 'getLocalNumber',
        'additional_information' => 'getAdditionalInformation'
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
        $this->container['kpo_id'] = isset($data['kpo_id']) ? $data['kpo_id'] : null;
        $this->container['kpok_id'] = isset($data['kpok_id']) ? $data['kpok_id'] : null;
        $this->container['received_from_user'] = isset($data['received_from_user']) ? $data['received_from_user'] : null;
        $this->container['is_equipment_owner_exempt_from_record'] = isset($data['is_equipment_owner_exempt_from_record']) ? $data['is_equipment_owner_exempt_from_record'] : null;
        $this->container['is_import_to_rp'] = isset($data['is_import_to_rp']) ? $data['is_import_to_rp'] : null;
        $this->container['is_entry_based_on_kpo'] = isset($data['is_entry_based_on_kpo']) ? $data['is_entry_based_on_kpo'] : null;
        $this->container['is_entry_based_on_kpok'] = isset($data['is_entry_based_on_kpok']) ? $data['is_entry_based_on_kpok'] : null;
        $this->container['received_date'] = isset($data['received_date']) ? $data['received_date'] : null;
        $this->container['received_equipment_mass'] = isset($data['received_equipment_mass']) ? $data['received_equipment_mass'] : null;
        $this->container['country_id'] = isset($data['country_id']) ? $data['country_id'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['building_number'] = isset($data['building_number']) ? $data['building_number'] : null;
        $this->container['local_number'] = isset($data['local_number']) ? $data['local_number'] : null;
        $this->container['additional_information'] = isset($data['additional_information']) ? $data['additional_information'] : null;
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
     * Gets kpok_id
     *
     * @return string
     */
    public function getKpokId()
    {
        return $this->container['kpok_id'];
    }

    /**
     * Sets kpok_id
     *
     * @param string $kpok_id Id Karty Przekazania Odpadów Komunalnych
     *
     * @return $this
     */
    public function setKpokId($kpok_id)
    {
        $this->container['kpok_id'] = $kpok_id;

        return $this;
    }

    /**
     * Gets received_from_user
     *
     * @return bool
     */
    public function getReceivedFromUser()
    {
        return $this->container['received_from_user'];
    }

    /**
     * Sets received_from_user
     *
     * @param bool $received_from_user Imię i nazwisko użytkownika przekazującego
     *
     * @return $this
     */
    public function setReceivedFromUser($received_from_user)
    {
        $this->container['received_from_user'] = $received_from_user;

        return $this;
    }

    /**
     * Gets is_equipment_owner_exempt_from_record
     *
     * @return bool
     */
    public function getIsEquipmentOwnerExemptFromRecord()
    {
        return $this->container['is_equipment_owner_exempt_from_record'];
    }

    /**
     * Sets is_equipment_owner_exempt_from_record
     *
     * @param bool $is_equipment_owner_exempt_from_record Posiadacz odpadów zwolniony z obowiązku prowadzenia ewidencji odpadów
     *
     * @return $this
     */
    public function setIsEquipmentOwnerExemptFromRecord($is_equipment_owner_exempt_from_record)
    {
        $this->container['is_equipment_owner_exempt_from_record'] = $is_equipment_owner_exempt_from_record;

        return $this;
    }

    /**
     * Gets is_import_to_rp
     *
     * @return bool
     */
    public function getIsImportToRp()
    {
        return $this->container['is_import_to_rp'];
    }

    /**
     * Sets is_import_to_rp
     *
     * @param bool $is_import_to_rp Przywóz do RP
     *
     * @return $this
     */
    public function setIsImportToRp($is_import_to_rp)
    {
        $this->container['is_import_to_rp'] = $is_import_to_rp;

        return $this;
    }

    /**
     * Gets is_entry_based_on_kpo
     *
     * @return bool
     */
    public function getIsEntryBasedOnKpo()
    {
        return $this->container['is_entry_based_on_kpo'];
    }

    /**
     * Sets is_entry_based_on_kpo
     *
     * @param bool $is_entry_based_on_kpo Wpis dokonywany na podstawie karty przekazania odpadów
     *
     * @return $this
     */
    public function setIsEntryBasedOnKpo($is_entry_based_on_kpo)
    {
        $this->container['is_entry_based_on_kpo'] = $is_entry_based_on_kpo;

        return $this;
    }

    /**
     * Gets is_entry_based_on_kpok
     *
     * @return bool
     */
    public function getIsEntryBasedOnKpok()
    {
        return $this->container['is_entry_based_on_kpok'];
    }

    /**
     * Sets is_entry_based_on_kpok
     *
     * @param bool $is_entry_based_on_kpok Wpis dokonywany na podstawie karty przekazania odpadów komunalnych
     *
     * @return $this
     */
    public function setIsEntryBasedOnKpok($is_entry_based_on_kpok)
    {
        $this->container['is_entry_based_on_kpok'] = $is_entry_based_on_kpok;

        return $this;
    }

    /**
     * Gets received_date
     *
     * @return \DateTime
     */
    public function getReceivedDate()
    {
        return $this->container['received_date'];
    }

    /**
     * Sets received_date
     *
     * @param \DateTime $received_date Data przyjęcia
     *
     * @return $this
     */
    public function setReceivedDate($received_date)
    {
        $this->container['received_date'] = $received_date;

        return $this;
    }

    /**
     * Gets received_equipment_mass
     *
     * @return double
     */
    public function getReceivedEquipmentMass()
    {
        return $this->container['received_equipment_mass'];
    }

    /**
     * Sets received_equipment_mass
     *
     * @param double $received_equipment_mass Masa przyjętego sprzętu
     *
     * @return $this
     */
    public function setReceivedEquipmentMass($received_equipment_mass)
    {
        $this->container['received_equipment_mass'] = $received_equipment_mass;

        return $this;
    }

    /**
     * Gets country_id
     *
     * @return int
     */
    public function getCountryId()
    {
        return $this->container['country_id'];
    }

    /**
     * Sets country_id
     *
     * @param int $country_id Id kraju
     *
     * @return $this
     */
    public function setCountryId($country_id)
    {
        $this->container['country_id'] = $country_id;

        return $this;
    }

    /**
     * Gets locality
     *
     * @return string
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     *
     * @param string $locality Miejscowość
     *
     * @return $this
     */
    public function setLocality($locality)
    {
        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street Ulica
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code Kod pocztowy
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets building_number
     *
     * @return string
     */
    public function getBuildingNumber()
    {
        return $this->container['building_number'];
    }

    /**
     * Sets building_number
     *
     * @param string $building_number Numer budynku
     *
     * @return $this
     */
    public function setBuildingNumber($building_number)
    {
        $this->container['building_number'] = $building_number;

        return $this;
    }

    /**
     * Gets local_number
     *
     * @return string
     */
    public function getLocalNumber()
    {
        return $this->container['local_number'];
    }

    /**
     * Sets local_number
     *
     * @param string $local_number Numer lokalu
     *
     * @return $this
     */
    public function setLocalNumber($local_number)
    {
        $this->container['local_number'] = $local_number;

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

