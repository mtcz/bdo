<?php
/**
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoCollectedDto
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
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoCollectedDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoCollectedDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Responses.WasteRegister.WasteRecordCard.V1.KeoCollectedDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'keo_collected_id' => 'string',
        'keo_id' => 'string',
        'kpo_id' => 'string',
        'collected_date' => '\DateTime',
        'collected_mass' => 'double',
        'is_entry_based_on_kpo' => 'bool',
        'is_import_to_rp' => 'bool',
        'is_equipment_owner_exempt_from_record' => 'bool',
        'country_id' => 'int',
        'locality' => 'string',
        'street' => 'string',
        'building_number' => 'string',
        'local_number' => 'string',
        'postal_code' => 'string',
        'additional_info' => 'string',
        'installation_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'keo_collected_id' => 'uuid',
        'keo_id' => 'uuid',
        'kpo_id' => 'uuid',
        'collected_date' => 'date-time',
        'collected_mass' => 'double',
        'is_entry_based_on_kpo' => null,
        'is_import_to_rp' => null,
        'is_equipment_owner_exempt_from_record' => null,
        'country_id' => 'int32',
        'locality' => null,
        'street' => null,
        'building_number' => null,
        'local_number' => null,
        'postal_code' => null,
        'additional_info' => null,
        'installation_name' => null
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
        'keo_collected_id' => 'keoCollectedId',
        'keo_id' => 'keoId',
        'kpo_id' => 'kpoId',
        'collected_date' => 'collectedDate',
        'collected_mass' => 'collectedMass',
        'is_entry_based_on_kpo' => 'isEntryBasedOnKpo',
        'is_import_to_rp' => 'isImportToRp',
        'is_equipment_owner_exempt_from_record' => 'isEquipmentOwnerExemptFromRecord',
        'country_id' => 'countryId',
        'locality' => 'locality',
        'street' => 'street',
        'building_number' => 'buildingNumber',
        'local_number' => 'localNumber',
        'postal_code' => 'postalCode',
        'additional_info' => 'additionalInfo',
        'installation_name' => 'installationName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'keo_collected_id' => 'setKeoCollectedId',
        'keo_id' => 'setKeoId',
        'kpo_id' => 'setKpoId',
        'collected_date' => 'setCollectedDate',
        'collected_mass' => 'setCollectedMass',
        'is_entry_based_on_kpo' => 'setIsEntryBasedOnKpo',
        'is_import_to_rp' => 'setIsImportToRp',
        'is_equipment_owner_exempt_from_record' => 'setIsEquipmentOwnerExemptFromRecord',
        'country_id' => 'setCountryId',
        'locality' => 'setLocality',
        'street' => 'setStreet',
        'building_number' => 'setBuildingNumber',
        'local_number' => 'setLocalNumber',
        'postal_code' => 'setPostalCode',
        'additional_info' => 'setAdditionalInfo',
        'installation_name' => 'setInstallationName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'keo_collected_id' => 'getKeoCollectedId',
        'keo_id' => 'getKeoId',
        'kpo_id' => 'getKpoId',
        'collected_date' => 'getCollectedDate',
        'collected_mass' => 'getCollectedMass',
        'is_entry_based_on_kpo' => 'getIsEntryBasedOnKpo',
        'is_import_to_rp' => 'getIsImportToRp',
        'is_equipment_owner_exempt_from_record' => 'getIsEquipmentOwnerExemptFromRecord',
        'country_id' => 'getCountryId',
        'locality' => 'getLocality',
        'street' => 'getStreet',
        'building_number' => 'getBuildingNumber',
        'local_number' => 'getLocalNumber',
        'postal_code' => 'getPostalCode',
        'additional_info' => 'getAdditionalInfo',
        'installation_name' => 'getInstallationName'
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
        $this->container['keo_collected_id'] = isset($data['keo_collected_id']) ? $data['keo_collected_id'] : null;
        $this->container['keo_id'] = isset($data['keo_id']) ? $data['keo_id'] : null;
        $this->container['kpo_id'] = isset($data['kpo_id']) ? $data['kpo_id'] : null;
        $this->container['collected_date'] = isset($data['collected_date']) ? $data['collected_date'] : null;
        $this->container['collected_mass'] = isset($data['collected_mass']) ? $data['collected_mass'] : null;
        $this->container['is_entry_based_on_kpo'] = isset($data['is_entry_based_on_kpo']) ? $data['is_entry_based_on_kpo'] : null;
        $this->container['is_import_to_rp'] = isset($data['is_import_to_rp']) ? $data['is_import_to_rp'] : null;
        $this->container['is_equipment_owner_exempt_from_record'] = isset($data['is_equipment_owner_exempt_from_record']) ? $data['is_equipment_owner_exempt_from_record'] : null;
        $this->container['country_id'] = isset($data['country_id']) ? $data['country_id'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['building_number'] = isset($data['building_number']) ? $data['building_number'] : null;
        $this->container['local_number'] = isset($data['local_number']) ? $data['local_number'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['additional_info'] = isset($data['additional_info']) ? $data['additional_info'] : null;
        $this->container['installation_name'] = isset($data['installation_name']) ? $data['installation_name'] : null;
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
     * Gets keo_collected_id
     *
     * @return string
     */
    public function getKeoCollectedId()
    {
        return $this->container['keo_collected_id'];
    }

    /**
     * Sets keo_collected_id
     *
     * @param string $keo_collected_id Id wpisu Przyjęte odpady
     *
     * @return $this
     */
    public function setKeoCollectedId($keo_collected_id)
    {
        $this->container['keo_collected_id'] = $keo_collected_id;

        return $this;
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
     * Gets collected_date
     *
     * @return \DateTime
     */
    public function getCollectedDate()
    {
        return $this->container['collected_date'];
    }

    /**
     * Sets collected_date
     *
     * @param \DateTime $collected_date Data przejęcia odpadów
     *
     * @return $this
     */
    public function setCollectedDate($collected_date)
    {
        $this->container['collected_date'] = $collected_date;

        return $this;
    }

    /**
     * Gets collected_mass
     *
     * @return double
     */
    public function getCollectedMass()
    {
        return $this->container['collected_mass'];
    }

    /**
     * Sets collected_mass
     *
     * @param double $collected_mass Masa przejętych odpadów [Mg]
     *
     * @return $this
     */
    public function setCollectedMass($collected_mass)
    {
        $this->container['collected_mass'] = $collected_mass;

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
     * Gets additional_info
     *
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->container['additional_info'];
    }

    /**
     * Sets additional_info
     *
     * @param string $additional_info Informacje dodatkowe
     *
     * @return $this
     */
    public function setAdditionalInfo($additional_info)
    {
        $this->container['additional_info'] = $additional_info;

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


