<?php
/**
 * WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1UpdatePlannedReceiveKpokRequest
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
 * WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1UpdatePlannedReceiveKpokRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1UpdatePlannedReceiveKpokRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Requests.WasteRegister.MunicipalWasteTransferCard.V1.UpdatePlannedReceiveKpokRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'kpok_id' => 'string',
        'carrier_company_id' => 'string',
        'receiver_company_id' => 'string',
        'receiver_eup_id' => 'string',
        'commune_id' => 'string',
        'commune_area' => 'string',
        'waste_code_id' => 'int',
        'vehicle_reg_number' => 'string',
        'planned_transport_time' => '\DateTime',
        'additional_info' => 'string',
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
        'kpok_id' => 'uuid',
        'carrier_company_id' => 'uuid',
        'receiver_company_id' => 'uuid',
        'receiver_eup_id' => 'uuid',
        'commune_id' => null,
        'commune_area' => null,
        'waste_code_id' => 'int32',
        'vehicle_reg_number' => null,
        'planned_transport_time' => 'date-time',
        'additional_info' => null,
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
        'kpok_id' => 'kpokId',
        'carrier_company_id' => 'carrierCompanyId',
        'receiver_company_id' => 'receiverCompanyId',
        'receiver_eup_id' => 'receiverEupId',
        'commune_id' => 'communeId',
        'commune_area' => 'communeArea',
        'waste_code_id' => 'wasteCodeId',
        'vehicle_reg_number' => 'vehicleRegNumber',
        'planned_transport_time' => 'plannedTransportTime',
        'additional_info' => 'additionalInfo',
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
        'kpok_id' => 'setKpokId',
        'carrier_company_id' => 'setCarrierCompanyId',
        'receiver_company_id' => 'setReceiverCompanyId',
        'receiver_eup_id' => 'setReceiverEupId',
        'commune_id' => 'setCommuneId',
        'commune_area' => 'setCommuneArea',
        'waste_code_id' => 'setWasteCodeId',
        'vehicle_reg_number' => 'setVehicleRegNumber',
        'planned_transport_time' => 'setPlannedTransportTime',
        'additional_info' => 'setAdditionalInfo',
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
        'kpok_id' => 'getKpokId',
        'carrier_company_id' => 'getCarrierCompanyId',
        'receiver_company_id' => 'getReceiverCompanyId',
        'receiver_eup_id' => 'getReceiverEupId',
        'commune_id' => 'getCommuneId',
        'commune_area' => 'getCommuneArea',
        'waste_code_id' => 'getWasteCodeId',
        'vehicle_reg_number' => 'getVehicleRegNumber',
        'planned_transport_time' => 'getPlannedTransportTime',
        'additional_info' => 'getAdditionalInfo',
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
        $this->container['kpok_id'] = isset($data['kpok_id']) ? $data['kpok_id'] : null;
        $this->container['carrier_company_id'] = isset($data['carrier_company_id']) ? $data['carrier_company_id'] : null;
        $this->container['receiver_company_id'] = isset($data['receiver_company_id']) ? $data['receiver_company_id'] : null;
        $this->container['receiver_eup_id'] = isset($data['receiver_eup_id']) ? $data['receiver_eup_id'] : null;
        $this->container['commune_id'] = isset($data['commune_id']) ? $data['commune_id'] : null;
        $this->container['commune_area'] = isset($data['commune_area']) ? $data['commune_area'] : null;
        $this->container['waste_code_id'] = isset($data['waste_code_id']) ? $data['waste_code_id'] : null;
        $this->container['vehicle_reg_number'] = isset($data['vehicle_reg_number']) ? $data['vehicle_reg_number'] : null;
        $this->container['planned_transport_time'] = isset($data['planned_transport_time']) ? $data['planned_transport_time'] : null;
        $this->container['additional_info'] = isset($data['additional_info']) ? $data['additional_info'] : null;
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
     * @param string $kpok_id Id Karty Przekazania Odpad??w Komunalnych
     *
     * @return $this
     */
    public function setKpokId($kpok_id)
    {
        $this->container['kpok_id'] = $kpok_id;

        return $this;
    }

    /**
     * Gets carrier_company_id
     *
     * @return string
     */
    public function getCarrierCompanyId()
    {
        return $this->container['carrier_company_id'];
    }

    /**
     * Sets carrier_company_id
     *
     * @param string $carrier_company_id Id transportuj??cego odpady
     *
     * @return $this
     */
    public function setCarrierCompanyId($carrier_company_id)
    {
        $this->container['carrier_company_id'] = $carrier_company_id;

        return $this;
    }

    /**
     * Gets receiver_company_id
     *
     * @return string
     */
    public function getReceiverCompanyId()
    {
        return $this->container['receiver_company_id'];
    }

    /**
     * Sets receiver_company_id
     *
     * @param string $receiver_company_id Id przejmuj??cego odpady
     *
     * @return $this
     */
    public function setReceiverCompanyId($receiver_company_id)
    {
        $this->container['receiver_company_id'] = $receiver_company_id;

        return $this;
    }

    /**
     * Gets receiver_eup_id
     *
     * @return string
     */
    public function getReceiverEupId()
    {
        return $this->container['receiver_eup_id'];
    }

    /**
     * Sets receiver_eup_id
     *
     * @param string $receiver_eup_id Id miejsca prowadzenia dzia??alno??ci przejmuj??cego
     *
     * @return $this
     */
    public function setReceiverEupId($receiver_eup_id)
    {
        $this->container['receiver_eup_id'] = $receiver_eup_id;

        return $this;
    }

    /**
     * Gets commune_id
     *
     * @return string
     */
    public function getCommuneId()
    {
        return $this->container['commune_id'];
    }

    /**
     * Sets commune_id
     *
     * @param string $commune_id Id gminy
     *
     * @return $this
     */
    public function setCommuneId($commune_id)
    {
        $this->container['commune_id'] = $commune_id;

        return $this;
    }

    /**
     * Gets commune_area
     *
     * @return string
     */
    public function getCommuneArea()
    {
        return $this->container['commune_area'];
    }

    /**
     * Sets commune_area
     *
     * @param string $commune_area Obszar gminy
     *
     * @return $this
     */
    public function setCommuneArea($commune_area)
    {
        $this->container['commune_area'] = $commune_area;

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
     * Gets vehicle_reg_number
     *
     * @return string
     */
    public function getVehicleRegNumber()
    {
        return $this->container['vehicle_reg_number'];
    }

    /**
     * Sets vehicle_reg_number
     *
     * @param string $vehicle_reg_number Numer rejestracyjny ??rodka transportu
     *
     * @return $this
     */
    public function setVehicleRegNumber($vehicle_reg_number)
    {
        $this->container['vehicle_reg_number'] = $vehicle_reg_number;

        return $this;
    }

    /**
     * Gets planned_transport_time
     *
     * @return \DateTime
     */
    public function getPlannedTransportTime()
    {
        return $this->container['planned_transport_time'];
    }

    /**
     * Sets planned_transport_time
     *
     * @param \DateTime $planned_transport_time Planowana data rozpocz??cia transportu
     *
     * @return $this
     */
    public function setPlannedTransportTime($planned_transport_time)
    {
        $this->container['planned_transport_time'] = $planned_transport_time;

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
     * @param bool $hazardous_waste_reclassification Zmiana statusu odpad??w niebezpiecznych na odpady inne ni?? niebezpieczne
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


