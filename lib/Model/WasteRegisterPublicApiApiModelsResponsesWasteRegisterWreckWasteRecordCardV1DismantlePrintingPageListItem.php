<?php
/**
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1DismantlePrintingPageListItem
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
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1DismantlePrintingPageListItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1DismantlePrintingPageListItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Responses.WasteRegister.WreckWasteRecordCard.V1.DismantlePrintingPageListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date' => '\DateTime',
        'created_by_user_full_name' => 'string',
        'received_from_dismantle_station_vehicles_mass' => 'double',
        'received_from_dismantle_station_vehicles_count' => 'int',
        'received_kpo_card_number' => 'string',
        'received_vehicles_mass' => 'double',
        'received_vehicles_count' => 'int',
        'produced_waste_code_with_description' => 'string',
        'produced_waste_mass' => 'double',
        'produced_reusable_parts_mass' => 'double',
        'processed_recycled_waste_mass' => 'double',
        'processed_energy_recovery_waste_mass' => 'double',
        'processed_other_than_recycling_waste_mass' => 'double',
        'transferred_recycled_waste_mass' => 'double',
        'transferred_energy_recovery_waste_mass' => 'double',
        'transferred_other_than_recycled_waste_mass' => 'double',
        'transferred_shredded_waste_mass' => 'double',
        'transferred_disposed_waste_mass' => 'double',
        'transferred_abroad_waste_mass' => 'double',
        'transferred_kpo_card_number' => 'string',
        'waste_code_extended' => 'bool',
        'waste_code_extended_description' => 'string',
        'hazardous_waste_reclassification' => 'bool',
        'hazardous_waste_reclassification_description' => 'string',
        'reusable_equipment_and_parts_mass' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date' => 'date-time',
        'created_by_user_full_name' => null,
        'received_from_dismantle_station_vehicles_mass' => 'double',
        'received_from_dismantle_station_vehicles_count' => 'int32',
        'received_kpo_card_number' => null,
        'received_vehicles_mass' => 'double',
        'received_vehicles_count' => 'int32',
        'produced_waste_code_with_description' => null,
        'produced_waste_mass' => 'double',
        'produced_reusable_parts_mass' => 'double',
        'processed_recycled_waste_mass' => 'double',
        'processed_energy_recovery_waste_mass' => 'double',
        'processed_other_than_recycling_waste_mass' => 'double',
        'transferred_recycled_waste_mass' => 'double',
        'transferred_energy_recovery_waste_mass' => 'double',
        'transferred_other_than_recycled_waste_mass' => 'double',
        'transferred_shredded_waste_mass' => 'double',
        'transferred_disposed_waste_mass' => 'double',
        'transferred_abroad_waste_mass' => 'double',
        'transferred_kpo_card_number' => null,
        'waste_code_extended' => null,
        'waste_code_extended_description' => null,
        'hazardous_waste_reclassification' => null,
        'hazardous_waste_reclassification_description' => null,
        'reusable_equipment_and_parts_mass' => 'double'
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
        'date' => 'date',
        'created_by_user_full_name' => 'createdByUserFullName',
        'received_from_dismantle_station_vehicles_mass' => 'receivedFromDismantleStationVehiclesMass',
        'received_from_dismantle_station_vehicles_count' => 'receivedFromDismantleStationVehiclesCount',
        'received_kpo_card_number' => 'receivedKpoCardNumber',
        'received_vehicles_mass' => 'receivedVehiclesMass',
        'received_vehicles_count' => 'receivedVehiclesCount',
        'produced_waste_code_with_description' => 'producedWasteCodeWithDescription',
        'produced_waste_mass' => 'producedWasteMass',
        'produced_reusable_parts_mass' => 'producedReusablePartsMass',
        'processed_recycled_waste_mass' => 'processedRecycledWasteMass',
        'processed_energy_recovery_waste_mass' => 'processedEnergyRecoveryWasteMass',
        'processed_other_than_recycling_waste_mass' => 'processedOtherThanRecyclingWasteMass',
        'transferred_recycled_waste_mass' => 'transferredRecycledWasteMass',
        'transferred_energy_recovery_waste_mass' => 'transferredEnergyRecoveryWasteMass',
        'transferred_other_than_recycled_waste_mass' => 'transferredOtherThanRecycledWasteMass',
        'transferred_shredded_waste_mass' => 'transferredShreddedWasteMass',
        'transferred_disposed_waste_mass' => 'transferredDisposedWasteMass',
        'transferred_abroad_waste_mass' => 'transferredAbroadWasteMass',
        'transferred_kpo_card_number' => 'transferredKpoCardNumber',
        'waste_code_extended' => 'wasteCodeExtended',
        'waste_code_extended_description' => 'wasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'hazardousWasteReclassification',
        'hazardous_waste_reclassification_description' => 'hazardousWasteReclassificationDescription',
        'reusable_equipment_and_parts_mass' => 'reusableEquipmentAndPartsMass'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'created_by_user_full_name' => 'setCreatedByUserFullName',
        'received_from_dismantle_station_vehicles_mass' => 'setReceivedFromDismantleStationVehiclesMass',
        'received_from_dismantle_station_vehicles_count' => 'setReceivedFromDismantleStationVehiclesCount',
        'received_kpo_card_number' => 'setReceivedKpoCardNumber',
        'received_vehicles_mass' => 'setReceivedVehiclesMass',
        'received_vehicles_count' => 'setReceivedVehiclesCount',
        'produced_waste_code_with_description' => 'setProducedWasteCodeWithDescription',
        'produced_waste_mass' => 'setProducedWasteMass',
        'produced_reusable_parts_mass' => 'setProducedReusablePartsMass',
        'processed_recycled_waste_mass' => 'setProcessedRecycledWasteMass',
        'processed_energy_recovery_waste_mass' => 'setProcessedEnergyRecoveryWasteMass',
        'processed_other_than_recycling_waste_mass' => 'setProcessedOtherThanRecyclingWasteMass',
        'transferred_recycled_waste_mass' => 'setTransferredRecycledWasteMass',
        'transferred_energy_recovery_waste_mass' => 'setTransferredEnergyRecoveryWasteMass',
        'transferred_other_than_recycled_waste_mass' => 'setTransferredOtherThanRecycledWasteMass',
        'transferred_shredded_waste_mass' => 'setTransferredShreddedWasteMass',
        'transferred_disposed_waste_mass' => 'setTransferredDisposedWasteMass',
        'transferred_abroad_waste_mass' => 'setTransferredAbroadWasteMass',
        'transferred_kpo_card_number' => 'setTransferredKpoCardNumber',
        'waste_code_extended' => 'setWasteCodeExtended',
        'waste_code_extended_description' => 'setWasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'setHazardousWasteReclassification',
        'hazardous_waste_reclassification_description' => 'setHazardousWasteReclassificationDescription',
        'reusable_equipment_and_parts_mass' => 'setReusableEquipmentAndPartsMass'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'created_by_user_full_name' => 'getCreatedByUserFullName',
        'received_from_dismantle_station_vehicles_mass' => 'getReceivedFromDismantleStationVehiclesMass',
        'received_from_dismantle_station_vehicles_count' => 'getReceivedFromDismantleStationVehiclesCount',
        'received_kpo_card_number' => 'getReceivedKpoCardNumber',
        'received_vehicles_mass' => 'getReceivedVehiclesMass',
        'received_vehicles_count' => 'getReceivedVehiclesCount',
        'produced_waste_code_with_description' => 'getProducedWasteCodeWithDescription',
        'produced_waste_mass' => 'getProducedWasteMass',
        'produced_reusable_parts_mass' => 'getProducedReusablePartsMass',
        'processed_recycled_waste_mass' => 'getProcessedRecycledWasteMass',
        'processed_energy_recovery_waste_mass' => 'getProcessedEnergyRecoveryWasteMass',
        'processed_other_than_recycling_waste_mass' => 'getProcessedOtherThanRecyclingWasteMass',
        'transferred_recycled_waste_mass' => 'getTransferredRecycledWasteMass',
        'transferred_energy_recovery_waste_mass' => 'getTransferredEnergyRecoveryWasteMass',
        'transferred_other_than_recycled_waste_mass' => 'getTransferredOtherThanRecycledWasteMass',
        'transferred_shredded_waste_mass' => 'getTransferredShreddedWasteMass',
        'transferred_disposed_waste_mass' => 'getTransferredDisposedWasteMass',
        'transferred_abroad_waste_mass' => 'getTransferredAbroadWasteMass',
        'transferred_kpo_card_number' => 'getTransferredKpoCardNumber',
        'waste_code_extended' => 'getWasteCodeExtended',
        'waste_code_extended_description' => 'getWasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'getHazardousWasteReclassification',
        'hazardous_waste_reclassification_description' => 'getHazardousWasteReclassificationDescription',
        'reusable_equipment_and_parts_mass' => 'getReusableEquipmentAndPartsMass'
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['created_by_user_full_name'] = isset($data['created_by_user_full_name']) ? $data['created_by_user_full_name'] : null;
        $this->container['received_from_dismantle_station_vehicles_mass'] = isset($data['received_from_dismantle_station_vehicles_mass']) ? $data['received_from_dismantle_station_vehicles_mass'] : null;
        $this->container['received_from_dismantle_station_vehicles_count'] = isset($data['received_from_dismantle_station_vehicles_count']) ? $data['received_from_dismantle_station_vehicles_count'] : null;
        $this->container['received_kpo_card_number'] = isset($data['received_kpo_card_number']) ? $data['received_kpo_card_number'] : null;
        $this->container['received_vehicles_mass'] = isset($data['received_vehicles_mass']) ? $data['received_vehicles_mass'] : null;
        $this->container['received_vehicles_count'] = isset($data['received_vehicles_count']) ? $data['received_vehicles_count'] : null;
        $this->container['produced_waste_code_with_description'] = isset($data['produced_waste_code_with_description']) ? $data['produced_waste_code_with_description'] : null;
        $this->container['produced_waste_mass'] = isset($data['produced_waste_mass']) ? $data['produced_waste_mass'] : null;
        $this->container['produced_reusable_parts_mass'] = isset($data['produced_reusable_parts_mass']) ? $data['produced_reusable_parts_mass'] : null;
        $this->container['processed_recycled_waste_mass'] = isset($data['processed_recycled_waste_mass']) ? $data['processed_recycled_waste_mass'] : null;
        $this->container['processed_energy_recovery_waste_mass'] = isset($data['processed_energy_recovery_waste_mass']) ? $data['processed_energy_recovery_waste_mass'] : null;
        $this->container['processed_other_than_recycling_waste_mass'] = isset($data['processed_other_than_recycling_waste_mass']) ? $data['processed_other_than_recycling_waste_mass'] : null;
        $this->container['transferred_recycled_waste_mass'] = isset($data['transferred_recycled_waste_mass']) ? $data['transferred_recycled_waste_mass'] : null;
        $this->container['transferred_energy_recovery_waste_mass'] = isset($data['transferred_energy_recovery_waste_mass']) ? $data['transferred_energy_recovery_waste_mass'] : null;
        $this->container['transferred_other_than_recycled_waste_mass'] = isset($data['transferred_other_than_recycled_waste_mass']) ? $data['transferred_other_than_recycled_waste_mass'] : null;
        $this->container['transferred_shredded_waste_mass'] = isset($data['transferred_shredded_waste_mass']) ? $data['transferred_shredded_waste_mass'] : null;
        $this->container['transferred_disposed_waste_mass'] = isset($data['transferred_disposed_waste_mass']) ? $data['transferred_disposed_waste_mass'] : null;
        $this->container['transferred_abroad_waste_mass'] = isset($data['transferred_abroad_waste_mass']) ? $data['transferred_abroad_waste_mass'] : null;
        $this->container['transferred_kpo_card_number'] = isset($data['transferred_kpo_card_number']) ? $data['transferred_kpo_card_number'] : null;
        $this->container['waste_code_extended'] = isset($data['waste_code_extended']) ? $data['waste_code_extended'] : null;
        $this->container['waste_code_extended_description'] = isset($data['waste_code_extended_description']) ? $data['waste_code_extended_description'] : null;
        $this->container['hazardous_waste_reclassification'] = isset($data['hazardous_waste_reclassification']) ? $data['hazardous_waste_reclassification'] : null;
        $this->container['hazardous_waste_reclassification_description'] = isset($data['hazardous_waste_reclassification_description']) ? $data['hazardous_waste_reclassification_description'] : null;
        $this->container['reusable_equipment_and_parts_mass'] = isset($data['reusable_equipment_and_parts_mass']) ? $data['reusable_equipment_and_parts_mass'] : null;
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
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date Data
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets created_by_user_full_name
     *
     * @return string
     */
    public function getCreatedByUserFullName()
    {
        return $this->container['created_by_user_full_name'];
    }

    /**
     * Sets created_by_user_full_name
     *
     * @param string $created_by_user_full_name Imię i nazwisko osoby sporządzającej
     *
     * @return $this
     */
    public function setCreatedByUserFullName($created_by_user_full_name)
    {
        $this->container['created_by_user_full_name'] = $created_by_user_full_name;

        return $this;
    }

    /**
     * Gets received_from_dismantle_station_vehicles_mass
     *
     * @return double
     */
    public function getReceivedFromDismantleStationVehiclesMass()
    {
        return $this->container['received_from_dismantle_station_vehicles_mass'];
    }

    /**
     * Sets received_from_dismantle_station_vehicles_mass
     *
     * @param double $received_from_dismantle_station_vehicles_mass 
     *
     * @return $this
     */
    public function setReceivedFromDismantleStationVehiclesMass($received_from_dismantle_station_vehicles_mass)
    {
        $this->container['received_from_dismantle_station_vehicles_mass'] = $received_from_dismantle_station_vehicles_mass;

        return $this;
    }

    /**
     * Gets received_from_dismantle_station_vehicles_count
     *
     * @return int
     */
    public function getReceivedFromDismantleStationVehiclesCount()
    {
        return $this->container['received_from_dismantle_station_vehicles_count'];
    }

    /**
     * Sets received_from_dismantle_station_vehicles_count
     *
     * @param int $received_from_dismantle_station_vehicles_count 
     *
     * @return $this
     */
    public function setReceivedFromDismantleStationVehiclesCount($received_from_dismantle_station_vehicles_count)
    {
        $this->container['received_from_dismantle_station_vehicles_count'] = $received_from_dismantle_station_vehicles_count;

        return $this;
    }

    /**
     * Gets received_kpo_card_number
     *
     * @return string
     */
    public function getReceivedKpoCardNumber()
    {
        return $this->container['received_kpo_card_number'];
    }

    /**
     * Sets received_kpo_card_number
     *
     * @param string $received_kpo_card_number 
     *
     * @return $this
     */
    public function setReceivedKpoCardNumber($received_kpo_card_number)
    {
        $this->container['received_kpo_card_number'] = $received_kpo_card_number;

        return $this;
    }

    /**
     * Gets received_vehicles_mass
     *
     * @return double
     */
    public function getReceivedVehiclesMass()
    {
        return $this->container['received_vehicles_mass'];
    }

    /**
     * Sets received_vehicles_mass
     *
     * @param double $received_vehicles_mass 
     *
     * @return $this
     */
    public function setReceivedVehiclesMass($received_vehicles_mass)
    {
        $this->container['received_vehicles_mass'] = $received_vehicles_mass;

        return $this;
    }

    /**
     * Gets received_vehicles_count
     *
     * @return int
     */
    public function getReceivedVehiclesCount()
    {
        return $this->container['received_vehicles_count'];
    }

    /**
     * Sets received_vehicles_count
     *
     * @param int $received_vehicles_count Liczba przyjętych pojazdów [szt.]
     *
     * @return $this
     */
    public function setReceivedVehiclesCount($received_vehicles_count)
    {
        $this->container['received_vehicles_count'] = $received_vehicles_count;

        return $this;
    }

    /**
     * Gets produced_waste_code_with_description
     *
     * @return string
     */
    public function getProducedWasteCodeWithDescription()
    {
        return $this->container['produced_waste_code_with_description'];
    }

    /**
     * Sets produced_waste_code_with_description
     *
     * @param string $produced_waste_code_with_description 
     *
     * @return $this
     */
    public function setProducedWasteCodeWithDescription($produced_waste_code_with_description)
    {
        $this->container['produced_waste_code_with_description'] = $produced_waste_code_with_description;

        return $this;
    }

    /**
     * Gets produced_waste_mass
     *
     * @return double
     */
    public function getProducedWasteMass()
    {
        return $this->container['produced_waste_mass'];
    }

    /**
     * Sets produced_waste_mass
     *
     * @param double $produced_waste_mass 
     *
     * @return $this
     */
    public function setProducedWasteMass($produced_waste_mass)
    {
        $this->container['produced_waste_mass'] = $produced_waste_mass;

        return $this;
    }

    /**
     * Gets produced_reusable_parts_mass
     *
     * @return double
     */
    public function getProducedReusablePartsMass()
    {
        return $this->container['produced_reusable_parts_mass'];
    }

    /**
     * Sets produced_reusable_parts_mass
     *
     * @param double $produced_reusable_parts_mass 
     *
     * @return $this
     */
    public function setProducedReusablePartsMass($produced_reusable_parts_mass)
    {
        $this->container['produced_reusable_parts_mass'] = $produced_reusable_parts_mass;

        return $this;
    }

    /**
     * Gets processed_recycled_waste_mass
     *
     * @return double
     */
    public function getProcessedRecycledWasteMass()
    {
        return $this->container['processed_recycled_waste_mass'];
    }

    /**
     * Sets processed_recycled_waste_mass
     *
     * @param double $processed_recycled_waste_mass 
     *
     * @return $this
     */
    public function setProcessedRecycledWasteMass($processed_recycled_waste_mass)
    {
        $this->container['processed_recycled_waste_mass'] = $processed_recycled_waste_mass;

        return $this;
    }

    /**
     * Gets processed_energy_recovery_waste_mass
     *
     * @return double
     */
    public function getProcessedEnergyRecoveryWasteMass()
    {
        return $this->container['processed_energy_recovery_waste_mass'];
    }

    /**
     * Sets processed_energy_recovery_waste_mass
     *
     * @param double $processed_energy_recovery_waste_mass 
     *
     * @return $this
     */
    public function setProcessedEnergyRecoveryWasteMass($processed_energy_recovery_waste_mass)
    {
        $this->container['processed_energy_recovery_waste_mass'] = $processed_energy_recovery_waste_mass;

        return $this;
    }

    /**
     * Gets processed_other_than_recycling_waste_mass
     *
     * @return double
     */
    public function getProcessedOtherThanRecyclingWasteMass()
    {
        return $this->container['processed_other_than_recycling_waste_mass'];
    }

    /**
     * Sets processed_other_than_recycling_waste_mass
     *
     * @param double $processed_other_than_recycling_waste_mass 
     *
     * @return $this
     */
    public function setProcessedOtherThanRecyclingWasteMass($processed_other_than_recycling_waste_mass)
    {
        $this->container['processed_other_than_recycling_waste_mass'] = $processed_other_than_recycling_waste_mass;

        return $this;
    }

    /**
     * Gets transferred_recycled_waste_mass
     *
     * @return double
     */
    public function getTransferredRecycledWasteMass()
    {
        return $this->container['transferred_recycled_waste_mass'];
    }

    /**
     * Sets transferred_recycled_waste_mass
     *
     * @param double $transferred_recycled_waste_mass 
     *
     * @return $this
     */
    public function setTransferredRecycledWasteMass($transferred_recycled_waste_mass)
    {
        $this->container['transferred_recycled_waste_mass'] = $transferred_recycled_waste_mass;

        return $this;
    }

    /**
     * Gets transferred_energy_recovery_waste_mass
     *
     * @return double
     */
    public function getTransferredEnergyRecoveryWasteMass()
    {
        return $this->container['transferred_energy_recovery_waste_mass'];
    }

    /**
     * Sets transferred_energy_recovery_waste_mass
     *
     * @param double $transferred_energy_recovery_waste_mass 
     *
     * @return $this
     */
    public function setTransferredEnergyRecoveryWasteMass($transferred_energy_recovery_waste_mass)
    {
        $this->container['transferred_energy_recovery_waste_mass'] = $transferred_energy_recovery_waste_mass;

        return $this;
    }

    /**
     * Gets transferred_other_than_recycled_waste_mass
     *
     * @return double
     */
    public function getTransferredOtherThanRecycledWasteMass()
    {
        return $this->container['transferred_other_than_recycled_waste_mass'];
    }

    /**
     * Sets transferred_other_than_recycled_waste_mass
     *
     * @param double $transferred_other_than_recycled_waste_mass 
     *
     * @return $this
     */
    public function setTransferredOtherThanRecycledWasteMass($transferred_other_than_recycled_waste_mass)
    {
        $this->container['transferred_other_than_recycled_waste_mass'] = $transferred_other_than_recycled_waste_mass;

        return $this;
    }

    /**
     * Gets transferred_shredded_waste_mass
     *
     * @return double
     */
    public function getTransferredShreddedWasteMass()
    {
        return $this->container['transferred_shredded_waste_mass'];
    }

    /**
     * Sets transferred_shredded_waste_mass
     *
     * @param double $transferred_shredded_waste_mass 
     *
     * @return $this
     */
    public function setTransferredShreddedWasteMass($transferred_shredded_waste_mass)
    {
        $this->container['transferred_shredded_waste_mass'] = $transferred_shredded_waste_mass;

        return $this;
    }

    /**
     * Gets transferred_disposed_waste_mass
     *
     * @return double
     */
    public function getTransferredDisposedWasteMass()
    {
        return $this->container['transferred_disposed_waste_mass'];
    }

    /**
     * Sets transferred_disposed_waste_mass
     *
     * @param double $transferred_disposed_waste_mass 
     *
     * @return $this
     */
    public function setTransferredDisposedWasteMass($transferred_disposed_waste_mass)
    {
        $this->container['transferred_disposed_waste_mass'] = $transferred_disposed_waste_mass;

        return $this;
    }

    /**
     * Gets transferred_abroad_waste_mass
     *
     * @return double
     */
    public function getTransferredAbroadWasteMass()
    {
        return $this->container['transferred_abroad_waste_mass'];
    }

    /**
     * Sets transferred_abroad_waste_mass
     *
     * @param double $transferred_abroad_waste_mass Masa odpadów przekazanych do innego kraju [Mg]
     *
     * @return $this
     */
    public function setTransferredAbroadWasteMass($transferred_abroad_waste_mass)
    {
        $this->container['transferred_abroad_waste_mass'] = $transferred_abroad_waste_mass;

        return $this;
    }

    /**
     * Gets transferred_kpo_card_number
     *
     * @return string
     */
    public function getTransferredKpoCardNumber()
    {
        return $this->container['transferred_kpo_card_number'];
    }

    /**
     * Sets transferred_kpo_card_number
     *
     * @param string $transferred_kpo_card_number 
     *
     * @return $this
     */
    public function setTransferredKpoCardNumber($transferred_kpo_card_number)
    {
        $this->container['transferred_kpo_card_number'] = $transferred_kpo_card_number;

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
     * Gets reusable_equipment_and_parts_mass
     *
     * @return double
     */
    public function getReusableEquipmentAndPartsMass()
    {
        return $this->container['reusable_equipment_and_parts_mass'];
    }

    /**
     * Sets reusable_equipment_and_parts_mass
     *
     * @param double $reusable_equipment_and_parts_mass reusable_equipment_and_parts_mass
     *
     * @return $this
     */
    public function setReusableEquipmentAndPartsMass($reusable_equipment_and_parts_mass)
    {
        $this->container['reusable_equipment_and_parts_mass'] = $reusable_equipment_and_parts_mass;

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

