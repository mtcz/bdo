<?php
/**
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1PlannedReceiveKpokDto
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
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1PlannedReceiveKpokDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1PlannedReceiveKpokDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Responses.WasteRegister.MuncipalWasteTransferCard.V1.PlannedReceiveKpokDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'kpok_id' => 'string',
        'year' => 'int',
        'card_status_id' => 'int',
        'sender_company_id' => 'string',
        'sender_eup_id' => 'string',
        'carrier_company_id' => 'string',
        'receiver_company_id' => 'string',
        'receiver_eup_id' => 'string',
        'commune_id' => 'string',
        'commune_area' => 'string',
        'waste_code_id' => 'int',
        'vehicle_reg_number' => 'string',
        'planned_transport_time' => '\DateTime',
        'waste_code_extended' => 'bool',
        'waste_code_extended_description' => 'string',
        'hazardous_waste_reclassification' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'kpok_id' => 'uuid',
        'year' => 'int32',
        'card_status_id' => 'int32',
        'sender_company_id' => 'uuid',
        'sender_eup_id' => 'uuid',
        'carrier_company_id' => 'uuid',
        'receiver_company_id' => 'uuid',
        'receiver_eup_id' => 'uuid',
        'commune_id' => null,
        'commune_area' => null,
        'waste_code_id' => 'int32',
        'vehicle_reg_number' => null,
        'planned_transport_time' => 'date-time',
        'waste_code_extended' => null,
        'waste_code_extended_description' => null,
        'hazardous_waste_reclassification' => null
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
        'year' => 'year',
        'card_status_id' => 'cardStatusId',
        'sender_company_id' => 'senderCompanyId',
        'sender_eup_id' => 'senderEupId',
        'carrier_company_id' => 'carrierCompanyId',
        'receiver_company_id' => 'receiverCompanyId',
        'receiver_eup_id' => 'receiverEupId',
        'commune_id' => 'communeId',
        'commune_area' => 'communeArea',
        'waste_code_id' => 'wasteCodeId',
        'vehicle_reg_number' => 'vehicleRegNumber',
        'planned_transport_time' => 'plannedTransportTime',
        'waste_code_extended' => 'wasteCodeExtended',
        'waste_code_extended_description' => 'wasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'hazardousWasteReclassification'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'kpok_id' => 'setKpokId',
        'year' => 'setYear',
        'card_status_id' => 'setCardStatusId',
        'sender_company_id' => 'setSenderCompanyId',
        'sender_eup_id' => 'setSenderEupId',
        'carrier_company_id' => 'setCarrierCompanyId',
        'receiver_company_id' => 'setReceiverCompanyId',
        'receiver_eup_id' => 'setReceiverEupId',
        'commune_id' => 'setCommuneId',
        'commune_area' => 'setCommuneArea',
        'waste_code_id' => 'setWasteCodeId',
        'vehicle_reg_number' => 'setVehicleRegNumber',
        'planned_transport_time' => 'setPlannedTransportTime',
        'waste_code_extended' => 'setWasteCodeExtended',
        'waste_code_extended_description' => 'setWasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'setHazardousWasteReclassification'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'kpok_id' => 'getKpokId',
        'year' => 'getYear',
        'card_status_id' => 'getCardStatusId',
        'sender_company_id' => 'getSenderCompanyId',
        'sender_eup_id' => 'getSenderEupId',
        'carrier_company_id' => 'getCarrierCompanyId',
        'receiver_company_id' => 'getReceiverCompanyId',
        'receiver_eup_id' => 'getReceiverEupId',
        'commune_id' => 'getCommuneId',
        'commune_area' => 'getCommuneArea',
        'waste_code_id' => 'getWasteCodeId',
        'vehicle_reg_number' => 'getVehicleRegNumber',
        'planned_transport_time' => 'getPlannedTransportTime',
        'waste_code_extended' => 'getWasteCodeExtended',
        'waste_code_extended_description' => 'getWasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'getHazardousWasteReclassification'
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
        $this->container['year'] = isset($data['year']) ? $data['year'] : null;
        $this->container['card_status_id'] = isset($data['card_status_id']) ? $data['card_status_id'] : null;
        $this->container['sender_company_id'] = isset($data['sender_company_id']) ? $data['sender_company_id'] : null;
        $this->container['sender_eup_id'] = isset($data['sender_eup_id']) ? $data['sender_eup_id'] : null;
        $this->container['carrier_company_id'] = isset($data['carrier_company_id']) ? $data['carrier_company_id'] : null;
        $this->container['receiver_company_id'] = isset($data['receiver_company_id']) ? $data['receiver_company_id'] : null;
        $this->container['receiver_eup_id'] = isset($data['receiver_eup_id']) ? $data['receiver_eup_id'] : null;
        $this->container['commune_id'] = isset($data['commune_id']) ? $data['commune_id'] : null;
        $this->container['commune_area'] = isset($data['commune_area']) ? $data['commune_area'] : null;
        $this->container['waste_code_id'] = isset($data['waste_code_id']) ? $data['waste_code_id'] : null;
        $this->container['vehicle_reg_number'] = isset($data['vehicle_reg_number']) ? $data['vehicle_reg_number'] : null;
        $this->container['planned_transport_time'] = isset($data['planned_transport_time']) ? $data['planned_transport_time'] : null;
        $this->container['waste_code_extended'] = isset($data['waste_code_extended']) ? $data['waste_code_extended'] : null;
        $this->container['waste_code_extended_description'] = isset($data['waste_code_extended_description']) ? $data['waste_code_extended_description'] : null;
        $this->container['hazardous_waste_reclassification'] = isset($data['hazardous_waste_reclassification']) ? $data['hazardous_waste_reclassification'] : null;
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
     * Gets card_status_id
     *
     * @return int
     */
    public function getCardStatusId()
    {
        return $this->container['card_status_id'];
    }

    /**
     * Sets card_status_id
     *
     * @param int $card_status_id Id statusu karty
     *
     * @return $this
     */
    public function setCardStatusId($card_status_id)
    {
        $this->container['card_status_id'] = $card_status_id;

        return $this;
    }

    /**
     * Gets sender_company_id
     *
     * @return string
     */
    public function getSenderCompanyId()
    {
        return $this->container['sender_company_id'];
    }

    /**
     * Sets sender_company_id
     *
     * @param string $sender_company_id Id przekazuj??cego odpady
     *
     * @return $this
     */
    public function setSenderCompanyId($sender_company_id)
    {
        $this->container['sender_company_id'] = $sender_company_id;

        return $this;
    }

    /**
     * Gets sender_eup_id
     *
     * @return string
     */
    public function getSenderEupId()
    {
        return $this->container['sender_eup_id'];
    }

    /**
     * Sets sender_eup_id
     *
     * @param string $sender_eup_id Id miejsca prowadzenia dzia??alno??ci przekazuj??cego
     *
     * @return $this
     */
    public function setSenderEupId($sender_eup_id)
    {
        $this->container['sender_eup_id'] = $sender_eup_id;

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


