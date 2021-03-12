<?php
/**
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1WithdrawnKpokDto
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
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1WithdrawnKpokDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1WithdrawnKpokDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Responses.WasteRegister.MuncipalWasteTransferCard.V1.WithdrawnKpokDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'kpok_id' => 'string',
        'year' => 'int',
        'card_status_id' => 'int',
        'card_status' => 'string',
        'previous_status_code_name' => 'string',
        'sender_company_id' => 'string',
        'sender_eup_id' => 'string',
        'carrier_company_id' => 'string',
        'receiver_company_id' => 'string',
        'receiver_eup_id' => 'string',
        'commune_id' => 'string',
        'commune_area' => 'string',
        'remarks' => 'string',
        'waste_code_id' => 'int',
        'vehicle_reg_number' => 'string',
        'waste_mass' => 'double',
        'planned_transport_time' => '\DateTime',
        'card_subtype' => 'string',
        'real_transport_time' => '\DateTime',
        'approval_user' => 'string',
        'card_approval_time' => '\DateTime',
        'withdrawn_by_user' => 'string',
        'card_withdrawal_time' => '\DateTime',
        'generating_confirmation_user' => 'string',
        'generating_confirmation_time' => '\DateTime',
        'card_status_code_name' => 'string',
        'card_number' => 'string',
        'waste_code_extended' => 'bool',
        'waste_code_extended_description' => 'string',
        'hazardous_waste_reclassification' => 'bool',
        'additional_info' => 'string',
        'hazardous_waste_reclassification_description' => 'string'
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
        'card_status' => null,
        'previous_status_code_name' => null,
        'sender_company_id' => 'uuid',
        'sender_eup_id' => 'uuid',
        'carrier_company_id' => 'uuid',
        'receiver_company_id' => 'uuid',
        'receiver_eup_id' => 'uuid',
        'commune_id' => null,
        'commune_area' => null,
        'remarks' => null,
        'waste_code_id' => 'int32',
        'vehicle_reg_number' => null,
        'waste_mass' => 'double',
        'planned_transport_time' => 'date-time',
        'card_subtype' => null,
        'real_transport_time' => 'date-time',
        'approval_user' => null,
        'card_approval_time' => 'date-time',
        'withdrawn_by_user' => null,
        'card_withdrawal_time' => 'date-time',
        'generating_confirmation_user' => null,
        'generating_confirmation_time' => 'date-time',
        'card_status_code_name' => null,
        'card_number' => null,
        'waste_code_extended' => null,
        'waste_code_extended_description' => null,
        'hazardous_waste_reclassification' => null,
        'additional_info' => null,
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
        'year' => 'year',
        'card_status_id' => 'cardStatusId',
        'card_status' => 'cardStatus',
        'previous_status_code_name' => 'previousStatusCodeName',
        'sender_company_id' => 'senderCompanyId',
        'sender_eup_id' => 'senderEupId',
        'carrier_company_id' => 'carrierCompanyId',
        'receiver_company_id' => 'receiverCompanyId',
        'receiver_eup_id' => 'receiverEupId',
        'commune_id' => 'communeId',
        'commune_area' => 'communeArea',
        'remarks' => 'remarks',
        'waste_code_id' => 'wasteCodeId',
        'vehicle_reg_number' => 'vehicleRegNumber',
        'waste_mass' => 'wasteMass',
        'planned_transport_time' => 'plannedTransportTime',
        'card_subtype' => 'cardSubtype',
        'real_transport_time' => 'realTransportTime',
        'approval_user' => 'approvalUser',
        'card_approval_time' => 'cardApprovalTime',
        'withdrawn_by_user' => 'withdrawnByUser',
        'card_withdrawal_time' => 'cardWithdrawalTime',
        'generating_confirmation_user' => 'generatingConfirmationUser',
        'generating_confirmation_time' => 'generatingConfirmationTime',
        'card_status_code_name' => 'cardStatusCodeName',
        'card_number' => 'cardNumber',
        'waste_code_extended' => 'wasteCodeExtended',
        'waste_code_extended_description' => 'wasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'hazardousWasteReclassification',
        'additional_info' => 'additionalInfo',
        'hazardous_waste_reclassification_description' => 'hazardousWasteReclassificationDescription'
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
        'card_status' => 'setCardStatus',
        'previous_status_code_name' => 'setPreviousStatusCodeName',
        'sender_company_id' => 'setSenderCompanyId',
        'sender_eup_id' => 'setSenderEupId',
        'carrier_company_id' => 'setCarrierCompanyId',
        'receiver_company_id' => 'setReceiverCompanyId',
        'receiver_eup_id' => 'setReceiverEupId',
        'commune_id' => 'setCommuneId',
        'commune_area' => 'setCommuneArea',
        'remarks' => 'setRemarks',
        'waste_code_id' => 'setWasteCodeId',
        'vehicle_reg_number' => 'setVehicleRegNumber',
        'waste_mass' => 'setWasteMass',
        'planned_transport_time' => 'setPlannedTransportTime',
        'card_subtype' => 'setCardSubtype',
        'real_transport_time' => 'setRealTransportTime',
        'approval_user' => 'setApprovalUser',
        'card_approval_time' => 'setCardApprovalTime',
        'withdrawn_by_user' => 'setWithdrawnByUser',
        'card_withdrawal_time' => 'setCardWithdrawalTime',
        'generating_confirmation_user' => 'setGeneratingConfirmationUser',
        'generating_confirmation_time' => 'setGeneratingConfirmationTime',
        'card_status_code_name' => 'setCardStatusCodeName',
        'card_number' => 'setCardNumber',
        'waste_code_extended' => 'setWasteCodeExtended',
        'waste_code_extended_description' => 'setWasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'setHazardousWasteReclassification',
        'additional_info' => 'setAdditionalInfo',
        'hazardous_waste_reclassification_description' => 'setHazardousWasteReclassificationDescription'
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
        'card_status' => 'getCardStatus',
        'previous_status_code_name' => 'getPreviousStatusCodeName',
        'sender_company_id' => 'getSenderCompanyId',
        'sender_eup_id' => 'getSenderEupId',
        'carrier_company_id' => 'getCarrierCompanyId',
        'receiver_company_id' => 'getReceiverCompanyId',
        'receiver_eup_id' => 'getReceiverEupId',
        'commune_id' => 'getCommuneId',
        'commune_area' => 'getCommuneArea',
        'remarks' => 'getRemarks',
        'waste_code_id' => 'getWasteCodeId',
        'vehicle_reg_number' => 'getVehicleRegNumber',
        'waste_mass' => 'getWasteMass',
        'planned_transport_time' => 'getPlannedTransportTime',
        'card_subtype' => 'getCardSubtype',
        'real_transport_time' => 'getRealTransportTime',
        'approval_user' => 'getApprovalUser',
        'card_approval_time' => 'getCardApprovalTime',
        'withdrawn_by_user' => 'getWithdrawnByUser',
        'card_withdrawal_time' => 'getCardWithdrawalTime',
        'generating_confirmation_user' => 'getGeneratingConfirmationUser',
        'generating_confirmation_time' => 'getGeneratingConfirmationTime',
        'card_status_code_name' => 'getCardStatusCodeName',
        'card_number' => 'getCardNumber',
        'waste_code_extended' => 'getWasteCodeExtended',
        'waste_code_extended_description' => 'getWasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'getHazardousWasteReclassification',
        'additional_info' => 'getAdditionalInfo',
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
        $this->container['year'] = isset($data['year']) ? $data['year'] : null;
        $this->container['card_status_id'] = isset($data['card_status_id']) ? $data['card_status_id'] : null;
        $this->container['card_status'] = isset($data['card_status']) ? $data['card_status'] : null;
        $this->container['previous_status_code_name'] = isset($data['previous_status_code_name']) ? $data['previous_status_code_name'] : null;
        $this->container['sender_company_id'] = isset($data['sender_company_id']) ? $data['sender_company_id'] : null;
        $this->container['sender_eup_id'] = isset($data['sender_eup_id']) ? $data['sender_eup_id'] : null;
        $this->container['carrier_company_id'] = isset($data['carrier_company_id']) ? $data['carrier_company_id'] : null;
        $this->container['receiver_company_id'] = isset($data['receiver_company_id']) ? $data['receiver_company_id'] : null;
        $this->container['receiver_eup_id'] = isset($data['receiver_eup_id']) ? $data['receiver_eup_id'] : null;
        $this->container['commune_id'] = isset($data['commune_id']) ? $data['commune_id'] : null;
        $this->container['commune_area'] = isset($data['commune_area']) ? $data['commune_area'] : null;
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
        $this->container['waste_code_id'] = isset($data['waste_code_id']) ? $data['waste_code_id'] : null;
        $this->container['vehicle_reg_number'] = isset($data['vehicle_reg_number']) ? $data['vehicle_reg_number'] : null;
        $this->container['waste_mass'] = isset($data['waste_mass']) ? $data['waste_mass'] : null;
        $this->container['planned_transport_time'] = isset($data['planned_transport_time']) ? $data['planned_transport_time'] : null;
        $this->container['card_subtype'] = isset($data['card_subtype']) ? $data['card_subtype'] : null;
        $this->container['real_transport_time'] = isset($data['real_transport_time']) ? $data['real_transport_time'] : null;
        $this->container['approval_user'] = isset($data['approval_user']) ? $data['approval_user'] : null;
        $this->container['card_approval_time'] = isset($data['card_approval_time']) ? $data['card_approval_time'] : null;
        $this->container['withdrawn_by_user'] = isset($data['withdrawn_by_user']) ? $data['withdrawn_by_user'] : null;
        $this->container['card_withdrawal_time'] = isset($data['card_withdrawal_time']) ? $data['card_withdrawal_time'] : null;
        $this->container['generating_confirmation_user'] = isset($data['generating_confirmation_user']) ? $data['generating_confirmation_user'] : null;
        $this->container['generating_confirmation_time'] = isset($data['generating_confirmation_time']) ? $data['generating_confirmation_time'] : null;
        $this->container['card_status_code_name'] = isset($data['card_status_code_name']) ? $data['card_status_code_name'] : null;
        $this->container['card_number'] = isset($data['card_number']) ? $data['card_number'] : null;
        $this->container['waste_code_extended'] = isset($data['waste_code_extended']) ? $data['waste_code_extended'] : null;
        $this->container['waste_code_extended_description'] = isset($data['waste_code_extended_description']) ? $data['waste_code_extended_description'] : null;
        $this->container['hazardous_waste_reclassification'] = isset($data['hazardous_waste_reclassification']) ? $data['hazardous_waste_reclassification'] : null;
        $this->container['additional_info'] = isset($data['additional_info']) ? $data['additional_info'] : null;
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
     * Gets card_status
     *
     * @return string
     */
    public function getCardStatus()
    {
        return $this->container['card_status'];
    }

    /**
     * Sets card_status
     *
     * @param string $card_status Status karty
     *
     * @return $this
     */
    public function setCardStatus($card_status)
    {
        $this->container['card_status'] = $card_status;

        return $this;
    }

    /**
     * Gets previous_status_code_name
     *
     * @return string
     */
    public function getPreviousStatusCodeName()
    {
        return $this->container['previous_status_code_name'];
    }

    /**
     * Sets previous_status_code_name
     *
     * @param string $previous_status_code_name Poprzedni kod statusu
     *
     * @return $this
     */
    public function setPreviousStatusCodeName($previous_status_code_name)
    {
        $this->container['previous_status_code_name'] = $previous_status_code_name;

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
     * @param string $sender_company_id Id przekazującego odpady
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
     * @param string $sender_eup_id Id miejsca prowadzenia działalności przekazującego
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
     * @param string $carrier_company_id Id transportującego odpady
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
     * @param string $receiver_company_id Id przejmującego odpady
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
     * @param string $receiver_eup_id Id miejsca prowadzenia działalności przejmującego
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
     * @param string $vehicle_reg_number Numer rejestracyjny środka transportu
     *
     * @return $this
     */
    public function setVehicleRegNumber($vehicle_reg_number)
    {
        $this->container['vehicle_reg_number'] = $vehicle_reg_number;

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
     * @param \DateTime $planned_transport_time Planowana data rozpoczęcia transportu
     *
     * @return $this
     */
    public function setPlannedTransportTime($planned_transport_time)
    {
        $this->container['planned_transport_time'] = $planned_transport_time;

        return $this;
    }

    /**
     * Gets card_subtype
     *
     * @return string
     */
    public function getCardSubtype()
    {
        return $this->container['card_subtype'];
    }

    /**
     * Sets card_subtype
     *
     * @param string $card_subtype Podtyp karty
     *
     * @return $this
     */
    public function setCardSubtype($card_subtype)
    {
        $this->container['card_subtype'] = $card_subtype;

        return $this;
    }

    /**
     * Gets real_transport_time
     *
     * @return \DateTime
     */
    public function getRealTransportTime()
    {
        return $this->container['real_transport_time'];
    }

    /**
     * Sets real_transport_time
     *
     * @param \DateTime $real_transport_time Data rozpoczęcia transportu
     *
     * @return $this
     */
    public function setRealTransportTime($real_transport_time)
    {
        $this->container['real_transport_time'] = $real_transport_time;

        return $this;
    }

    /**
     * Gets approval_user
     *
     * @return string
     */
    public function getApprovalUser()
    {
        return $this->container['approval_user'];
    }

    /**
     * Sets approval_user
     *
     * @param string $approval_user Użytkownik zatwierdzający kartę
     *
     * @return $this
     */
    public function setApprovalUser($approval_user)
    {
        $this->container['approval_user'] = $approval_user;

        return $this;
    }

    /**
     * Gets card_approval_time
     *
     * @return \DateTime
     */
    public function getCardApprovalTime()
    {
        return $this->container['card_approval_time'];
    }

    /**
     * Sets card_approval_time
     *
     * @param \DateTime $card_approval_time Data zatwierdzenia karty
     *
     * @return $this
     */
    public function setCardApprovalTime($card_approval_time)
    {
        $this->container['card_approval_time'] = $card_approval_time;

        return $this;
    }

    /**
     * Gets withdrawn_by_user
     *
     * @return string
     */
    public function getWithdrawnByUser()
    {
        return $this->container['withdrawn_by_user'];
    }

    /**
     * Sets withdrawn_by_user
     *
     * @param string $withdrawn_by_user 
     *
     * @return $this
     */
    public function setWithdrawnByUser($withdrawn_by_user)
    {
        $this->container['withdrawn_by_user'] = $withdrawn_by_user;

        return $this;
    }

    /**
     * Gets card_withdrawal_time
     *
     * @return \DateTime
     */
    public function getCardWithdrawalTime()
    {
        return $this->container['card_withdrawal_time'];
    }

    /**
     * Sets card_withdrawal_time
     *
     * @param \DateTime $card_withdrawal_time Data wycofania karty
     *
     * @return $this
     */
    public function setCardWithdrawalTime($card_withdrawal_time)
    {
        $this->container['card_withdrawal_time'] = $card_withdrawal_time;

        return $this;
    }

    /**
     * Gets generating_confirmation_user
     *
     * @return string
     */
    public function getGeneratingConfirmationUser()
    {
        return $this->container['generating_confirmation_user'];
    }

    /**
     * Sets generating_confirmation_user
     *
     * @param string $generating_confirmation_user Użytkownik generujący potwierdzenie
     *
     * @return $this
     */
    public function setGeneratingConfirmationUser($generating_confirmation_user)
    {
        $this->container['generating_confirmation_user'] = $generating_confirmation_user;

        return $this;
    }

    /**
     * Gets generating_confirmation_time
     *
     * @return \DateTime
     */
    public function getGeneratingConfirmationTime()
    {
        return $this->container['generating_confirmation_time'];
    }

    /**
     * Sets generating_confirmation_time
     *
     * @param \DateTime $generating_confirmation_time Data wygenerowania potwierdzenia
     *
     * @return $this
     */
    public function setGeneratingConfirmationTime($generating_confirmation_time)
    {
        $this->container['generating_confirmation_time'] = $generating_confirmation_time;

        return $this;
    }

    /**
     * Gets card_status_code_name
     *
     * @return string
     */
    public function getCardStatusCodeName()
    {
        return $this->container['card_status_code_name'];
    }

    /**
     * Sets card_status_code_name
     *
     * @param string $card_status_code_name Kod statusu karty
     *
     * @return $this
     */
    public function setCardStatusCodeName($card_status_code_name)
    {
        $this->container['card_status_code_name'] = $card_status_code_name;

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

