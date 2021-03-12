<?php
/**
 * WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoForwardedV1UpdateKeoForwardedRequest
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
 * WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoForwardedV1UpdateKeoForwardedRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoForwardedV1UpdateKeoForwardedRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Requests.WasteRegister.WasteRecordCard.KeoForwarded.V1.UpdateKeoForwardedRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'keo_forwarded_id' => 'string',
        'based_on_kpo' => 'bool',
        'transfer_abroad' => 'bool',
        'transfer_to_natural_persons' => 'bool',
        'owner_exempt_from_records' => 'bool',
        'kpo_id' => 'string',
        'waste_collection_date' => '\DateTime',
        'waste_mass' => 'double',
        'country_id' => 'int',
        'locality' => 'string',
        'street' => 'string',
        'building_number' => 'string',
        'local_number' => 'string',
        'postal_code' => 'string',
        'transport_date' => '\DateTime',
        'is_road_transport' => 'bool',
        'is_railway_transport' => 'bool',
        'is_maritime_transport' => 'bool',
        'is_air_transport' => 'bool',
        'is_inland_water_transport' => 'bool',
        'process_r' => 'bool',
        'process_d' => 'bool',
        'waste_process_id' => 'int',
        'is_recycle' => 'bool',
        'additional_info' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'keo_forwarded_id' => 'uuid',
        'based_on_kpo' => null,
        'transfer_abroad' => null,
        'transfer_to_natural_persons' => null,
        'owner_exempt_from_records' => null,
        'kpo_id' => 'uuid',
        'waste_collection_date' => 'date-time',
        'waste_mass' => 'double',
        'country_id' => 'int32',
        'locality' => null,
        'street' => null,
        'building_number' => null,
        'local_number' => null,
        'postal_code' => null,
        'transport_date' => 'date-time',
        'is_road_transport' => null,
        'is_railway_transport' => null,
        'is_maritime_transport' => null,
        'is_air_transport' => null,
        'is_inland_water_transport' => null,
        'process_r' => null,
        'process_d' => null,
        'waste_process_id' => 'int32',
        'is_recycle' => null,
        'additional_info' => null
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
        'keo_forwarded_id' => 'keoForwardedId',
        'based_on_kpo' => 'basedOnKpo',
        'transfer_abroad' => 'transferAbroad',
        'transfer_to_natural_persons' => 'transferToNaturalPersons',
        'owner_exempt_from_records' => 'ownerExemptFromRecords',
        'kpo_id' => 'kpoId',
        'waste_collection_date' => 'wasteCollectionDate',
        'waste_mass' => 'wasteMass',
        'country_id' => 'countryId',
        'locality' => 'locality',
        'street' => 'street',
        'building_number' => 'buildingNumber',
        'local_number' => 'localNumber',
        'postal_code' => 'postalCode',
        'transport_date' => 'transportDate',
        'is_road_transport' => 'isRoadTransport',
        'is_railway_transport' => 'isRailwayTransport',
        'is_maritime_transport' => 'isMaritimeTransport',
        'is_air_transport' => 'isAirTransport',
        'is_inland_water_transport' => 'isInlandWaterTransport',
        'process_r' => 'processR',
        'process_d' => 'processD',
        'waste_process_id' => 'wasteProcessId',
        'is_recycle' => 'isRecycle',
        'additional_info' => 'additionalInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'keo_forwarded_id' => 'setKeoForwardedId',
        'based_on_kpo' => 'setBasedOnKpo',
        'transfer_abroad' => 'setTransferAbroad',
        'transfer_to_natural_persons' => 'setTransferToNaturalPersons',
        'owner_exempt_from_records' => 'setOwnerExemptFromRecords',
        'kpo_id' => 'setKpoId',
        'waste_collection_date' => 'setWasteCollectionDate',
        'waste_mass' => 'setWasteMass',
        'country_id' => 'setCountryId',
        'locality' => 'setLocality',
        'street' => 'setStreet',
        'building_number' => 'setBuildingNumber',
        'local_number' => 'setLocalNumber',
        'postal_code' => 'setPostalCode',
        'transport_date' => 'setTransportDate',
        'is_road_transport' => 'setIsRoadTransport',
        'is_railway_transport' => 'setIsRailwayTransport',
        'is_maritime_transport' => 'setIsMaritimeTransport',
        'is_air_transport' => 'setIsAirTransport',
        'is_inland_water_transport' => 'setIsInlandWaterTransport',
        'process_r' => 'setProcessR',
        'process_d' => 'setProcessD',
        'waste_process_id' => 'setWasteProcessId',
        'is_recycle' => 'setIsRecycle',
        'additional_info' => 'setAdditionalInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'keo_forwarded_id' => 'getKeoForwardedId',
        'based_on_kpo' => 'getBasedOnKpo',
        'transfer_abroad' => 'getTransferAbroad',
        'transfer_to_natural_persons' => 'getTransferToNaturalPersons',
        'owner_exempt_from_records' => 'getOwnerExemptFromRecords',
        'kpo_id' => 'getKpoId',
        'waste_collection_date' => 'getWasteCollectionDate',
        'waste_mass' => 'getWasteMass',
        'country_id' => 'getCountryId',
        'locality' => 'getLocality',
        'street' => 'getStreet',
        'building_number' => 'getBuildingNumber',
        'local_number' => 'getLocalNumber',
        'postal_code' => 'getPostalCode',
        'transport_date' => 'getTransportDate',
        'is_road_transport' => 'getIsRoadTransport',
        'is_railway_transport' => 'getIsRailwayTransport',
        'is_maritime_transport' => 'getIsMaritimeTransport',
        'is_air_transport' => 'getIsAirTransport',
        'is_inland_water_transport' => 'getIsInlandWaterTransport',
        'process_r' => 'getProcessR',
        'process_d' => 'getProcessD',
        'waste_process_id' => 'getWasteProcessId',
        'is_recycle' => 'getIsRecycle',
        'additional_info' => 'getAdditionalInfo'
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
        $this->container['keo_forwarded_id'] = isset($data['keo_forwarded_id']) ? $data['keo_forwarded_id'] : null;
        $this->container['based_on_kpo'] = isset($data['based_on_kpo']) ? $data['based_on_kpo'] : null;
        $this->container['transfer_abroad'] = isset($data['transfer_abroad']) ? $data['transfer_abroad'] : null;
        $this->container['transfer_to_natural_persons'] = isset($data['transfer_to_natural_persons']) ? $data['transfer_to_natural_persons'] : null;
        $this->container['owner_exempt_from_records'] = isset($data['owner_exempt_from_records']) ? $data['owner_exempt_from_records'] : null;
        $this->container['kpo_id'] = isset($data['kpo_id']) ? $data['kpo_id'] : null;
        $this->container['waste_collection_date'] = isset($data['waste_collection_date']) ? $data['waste_collection_date'] : null;
        $this->container['waste_mass'] = isset($data['waste_mass']) ? $data['waste_mass'] : null;
        $this->container['country_id'] = isset($data['country_id']) ? $data['country_id'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['building_number'] = isset($data['building_number']) ? $data['building_number'] : null;
        $this->container['local_number'] = isset($data['local_number']) ? $data['local_number'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['transport_date'] = isset($data['transport_date']) ? $data['transport_date'] : null;
        $this->container['is_road_transport'] = isset($data['is_road_transport']) ? $data['is_road_transport'] : null;
        $this->container['is_railway_transport'] = isset($data['is_railway_transport']) ? $data['is_railway_transport'] : null;
        $this->container['is_maritime_transport'] = isset($data['is_maritime_transport']) ? $data['is_maritime_transport'] : null;
        $this->container['is_air_transport'] = isset($data['is_air_transport']) ? $data['is_air_transport'] : null;
        $this->container['is_inland_water_transport'] = isset($data['is_inland_water_transport']) ? $data['is_inland_water_transport'] : null;
        $this->container['process_r'] = isset($data['process_r']) ? $data['process_r'] : null;
        $this->container['process_d'] = isset($data['process_d']) ? $data['process_d'] : null;
        $this->container['waste_process_id'] = isset($data['waste_process_id']) ? $data['waste_process_id'] : null;
        $this->container['is_recycle'] = isset($data['is_recycle']) ? $data['is_recycle'] : null;
        $this->container['additional_info'] = isset($data['additional_info']) ? $data['additional_info'] : null;
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
     * Gets keo_forwarded_id
     *
     * @return string
     */
    public function getKeoForwardedId()
    {
        return $this->container['keo_forwarded_id'];
    }

    /**
     * Sets keo_forwarded_id
     *
     * @param string $keo_forwarded_id Id wpisu Przekazane odpady
     *
     * @return $this
     */
    public function setKeoForwardedId($keo_forwarded_id)
    {
        $this->container['keo_forwarded_id'] = $keo_forwarded_id;

        return $this;
    }

    /**
     * Gets based_on_kpo
     *
     * @return bool
     */
    public function getBasedOnKpo()
    {
        return $this->container['based_on_kpo'];
    }

    /**
     * Sets based_on_kpo
     *
     * @param bool $based_on_kpo Wpis dokonywany na podstawie karty przekazania odpadów
     *
     * @return $this
     */
    public function setBasedOnKpo($based_on_kpo)
    {
        $this->container['based_on_kpo'] = $based_on_kpo;

        return $this;
    }

    /**
     * Gets transfer_abroad
     *
     * @return bool
     */
    public function getTransferAbroad()
    {
        return $this->container['transfer_abroad'];
    }

    /**
     * Sets transfer_abroad
     *
     * @param bool $transfer_abroad Wywóz poza RP
     *
     * @return $this
     */
    public function setTransferAbroad($transfer_abroad)
    {
        $this->container['transfer_abroad'] = $transfer_abroad;

        return $this;
    }

    /**
     * Gets transfer_to_natural_persons
     *
     * @return bool
     */
    public function getTransferToNaturalPersons()
    {
        return $this->container['transfer_to_natural_persons'];
    }

    /**
     * Sets transfer_to_natural_persons
     *
     * @param bool $transfer_to_natural_persons Przekazane osobom fizycznym lub innym jednostkom organizacyjnym niebędącym przedsiębiorcami
     *
     * @return $this
     */
    public function setTransferToNaturalPersons($transfer_to_natural_persons)
    {
        $this->container['transfer_to_natural_persons'] = $transfer_to_natural_persons;

        return $this;
    }

    /**
     * Gets owner_exempt_from_records
     *
     * @return bool
     */
    public function getOwnerExemptFromRecords()
    {
        return $this->container['owner_exempt_from_records'];
    }

    /**
     * Sets owner_exempt_from_records
     *
     * @param bool $owner_exempt_from_records Posiadacz odpadów zwolniony z obowiązku prowadzenia ewidencji odpadów
     *
     * @return $this
     */
    public function setOwnerExemptFromRecords($owner_exempt_from_records)
    {
        $this->container['owner_exempt_from_records'] = $owner_exempt_from_records;

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
     * Gets waste_collection_date
     *
     * @return \DateTime
     */
    public function getWasteCollectionDate()
    {
        return $this->container['waste_collection_date'];
    }

    /**
     * Sets waste_collection_date
     *
     * @param \DateTime $waste_collection_date 
     *
     * @return $this
     */
    public function setWasteCollectionDate($waste_collection_date)
    {
        $this->container['waste_collection_date'] = $waste_collection_date;

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
     * Gets transport_date
     *
     * @return \DateTime
     */
    public function getTransportDate()
    {
        return $this->container['transport_date'];
    }

    /**
     * Sets transport_date
     *
     * @param \DateTime $transport_date 
     *
     * @return $this
     */
    public function setTransportDate($transport_date)
    {
        $this->container['transport_date'] = $transport_date;

        return $this;
    }

    /**
     * Gets is_road_transport
     *
     * @return bool
     */
    public function getIsRoadTransport()
    {
        return $this->container['is_road_transport'];
    }

    /**
     * Sets is_road_transport
     *
     * @param bool $is_road_transport Rodzaj środka transportu: drogowy
     *
     * @return $this
     */
    public function setIsRoadTransport($is_road_transport)
    {
        $this->container['is_road_transport'] = $is_road_transport;

        return $this;
    }

    /**
     * Gets is_railway_transport
     *
     * @return bool
     */
    public function getIsRailwayTransport()
    {
        return $this->container['is_railway_transport'];
    }

    /**
     * Sets is_railway_transport
     *
     * @param bool $is_railway_transport Rodzaj środka transportu: kolejowy
     *
     * @return $this
     */
    public function setIsRailwayTransport($is_railway_transport)
    {
        $this->container['is_railway_transport'] = $is_railway_transport;

        return $this;
    }

    /**
     * Gets is_maritime_transport
     *
     * @return bool
     */
    public function getIsMaritimeTransport()
    {
        return $this->container['is_maritime_transport'];
    }

    /**
     * Sets is_maritime_transport
     *
     * @param bool $is_maritime_transport Rodzaj środka transportu: morski
     *
     * @return $this
     */
    public function setIsMaritimeTransport($is_maritime_transport)
    {
        $this->container['is_maritime_transport'] = $is_maritime_transport;

        return $this;
    }

    /**
     * Gets is_air_transport
     *
     * @return bool
     */
    public function getIsAirTransport()
    {
        return $this->container['is_air_transport'];
    }

    /**
     * Sets is_air_transport
     *
     * @param bool $is_air_transport Rodzaj środka transportu: powietrzny
     *
     * @return $this
     */
    public function setIsAirTransport($is_air_transport)
    {
        $this->container['is_air_transport'] = $is_air_transport;

        return $this;
    }

    /**
     * Gets is_inland_water_transport
     *
     * @return bool
     */
    public function getIsInlandWaterTransport()
    {
        return $this->container['is_inland_water_transport'];
    }

    /**
     * Sets is_inland_water_transport
     *
     * @param bool $is_inland_water_transport Rodzaj środka transportu: wodny-śródlądowy
     *
     * @return $this
     */
    public function setIsInlandWaterTransport($is_inland_water_transport)
    {
        $this->container['is_inland_water_transport'] = $is_inland_water_transport;

        return $this;
    }

    /**
     * Gets process_r
     *
     * @return bool
     */
    public function getProcessR()
    {
        return $this->container['process_r'];
    }

    /**
     * Sets process_r
     *
     * @param bool $process_r Odpady objęte procesem: R - odzysku
     *
     * @return $this
     */
    public function setProcessR($process_r)
    {
        $this->container['process_r'] = $process_r;

        return $this;
    }

    /**
     * Gets process_d
     *
     * @return bool
     */
    public function getProcessD()
    {
        return $this->container['process_d'];
    }

    /**
     * Sets process_d
     *
     * @param bool $process_d Odpady objęte procesem: D - unieszkodliwiania
     *
     * @return $this
     */
    public function setProcessD($process_d)
    {
        $this->container['process_d'] = $process_d;

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
     * Gets is_recycle
     *
     * @return bool
     */
    public function getIsRecycle()
    {
        return $this->container['is_recycle'];
    }

    /**
     * Sets is_recycle
     *
     * @param bool $is_recycle Recykling
     *
     * @return $this
     */
    public function setIsRecycle($is_recycle)
    {
        $this->container['is_recycle'] = $is_recycle;

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


