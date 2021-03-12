<?php
/**
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosAppliedSedimentResponse
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
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosAppliedSedimentResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosAppliedSedimentResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Responses.WasteRegister.MunicipalSewageSludgeCard.V1.GetKekosAppliedSedimentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'kekos_applied_sediment_id' => 'string',
        'kekos_research_card_id' => 'string',
        'research_number' => 'string',
        'kekos_id' => 'string',
        'kpo_id' => 'string',
        'kpo_card_number' => 'string',
        'applied_sludge_mass' => 'double',
        'applied_sludge_dry_matter_mass' => 'double',
        'sludge_application_date' => '\DateTime',
        'sludge_application_place_teryt_pk' => 'string',
        'sludge_application_place_address_html' => 'string',
        'sludge_application_surface' => 'double',
        'recording_user_id' => 'string',
        'recording_user' => 'string',
        'kekos_batch_of_generated_sediment_id' => 'string',
        'batch_number' => 'string',
        'created_at' => '\DateTime',
        'is_application_purpose_crops' => 'bool',
        'is_application_purpose_plants' => 'bool',
        'is_application_purpose_inedible_plants' => 'bool',
        'is_application_purpose_reclamation' => 'bool',
        'is_application_purpose_land_adjustment' => 'bool',
        'is_soil_group_light' => 'bool',
        'is_soil_group_medium' => 'bool',
        'is_soil_group_heavy' => 'bool',
        'lot_precincts' => '\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1LotPrecinctDto[]',
        'land_surface_rulers' => '\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1LandSurfaceRulerDto[]',
        'land_surface_ruler' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'kekos_applied_sediment_id' => 'uuid',
        'kekos_research_card_id' => 'uuid',
        'research_number' => null,
        'kekos_id' => 'uuid',
        'kpo_id' => 'uuid',
        'kpo_card_number' => null,
        'applied_sludge_mass' => 'double',
        'applied_sludge_dry_matter_mass' => 'double',
        'sludge_application_date' => 'date-time',
        'sludge_application_place_teryt_pk' => null,
        'sludge_application_place_address_html' => null,
        'sludge_application_surface' => 'double',
        'recording_user_id' => 'uuid',
        'recording_user' => null,
        'kekos_batch_of_generated_sediment_id' => 'uuid',
        'batch_number' => null,
        'created_at' => 'date-time',
        'is_application_purpose_crops' => null,
        'is_application_purpose_plants' => null,
        'is_application_purpose_inedible_plants' => null,
        'is_application_purpose_reclamation' => null,
        'is_application_purpose_land_adjustment' => null,
        'is_soil_group_light' => null,
        'is_soil_group_medium' => null,
        'is_soil_group_heavy' => null,
        'lot_precincts' => null,
        'land_surface_rulers' => null,
        'land_surface_ruler' => null
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
        'kekos_applied_sediment_id' => 'kekosAppliedSedimentId',
        'kekos_research_card_id' => 'kekosResearchCardId',
        'research_number' => 'researchNumber',
        'kekos_id' => 'kekosId',
        'kpo_id' => 'kpoId',
        'kpo_card_number' => 'kpoCardNumber',
        'applied_sludge_mass' => 'appliedSludgeMass',
        'applied_sludge_dry_matter_mass' => 'appliedSludgeDryMatterMass',
        'sludge_application_date' => 'sludgeApplicationDate',
        'sludge_application_place_teryt_pk' => 'sludgeApplicationPlaceTerytPk',
        'sludge_application_place_address_html' => 'sludgeApplicationPlaceAddressHtml',
        'sludge_application_surface' => 'sludgeApplicationSurface',
        'recording_user_id' => 'recordingUserId',
        'recording_user' => 'recordingUser',
        'kekos_batch_of_generated_sediment_id' => 'kekosBatchOfGeneratedSedimentId',
        'batch_number' => 'batchNumber',
        'created_at' => 'createdAt',
        'is_application_purpose_crops' => 'isApplicationPurposeCrops',
        'is_application_purpose_plants' => 'isApplicationPurposePlants',
        'is_application_purpose_inedible_plants' => 'isApplicationPurposeInediblePlants',
        'is_application_purpose_reclamation' => 'isApplicationPurposeReclamation',
        'is_application_purpose_land_adjustment' => 'isApplicationPurposeLandAdjustment',
        'is_soil_group_light' => 'isSoilGroupLight',
        'is_soil_group_medium' => 'isSoilGroupMedium',
        'is_soil_group_heavy' => 'isSoilGroupHeavy',
        'lot_precincts' => 'lotPrecincts',
        'land_surface_rulers' => 'landSurfaceRulers',
        'land_surface_ruler' => 'landSurfaceRuler'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'kekos_applied_sediment_id' => 'setKekosAppliedSedimentId',
        'kekos_research_card_id' => 'setKekosResearchCardId',
        'research_number' => 'setResearchNumber',
        'kekos_id' => 'setKekosId',
        'kpo_id' => 'setKpoId',
        'kpo_card_number' => 'setKpoCardNumber',
        'applied_sludge_mass' => 'setAppliedSludgeMass',
        'applied_sludge_dry_matter_mass' => 'setAppliedSludgeDryMatterMass',
        'sludge_application_date' => 'setSludgeApplicationDate',
        'sludge_application_place_teryt_pk' => 'setSludgeApplicationPlaceTerytPk',
        'sludge_application_place_address_html' => 'setSludgeApplicationPlaceAddressHtml',
        'sludge_application_surface' => 'setSludgeApplicationSurface',
        'recording_user_id' => 'setRecordingUserId',
        'recording_user' => 'setRecordingUser',
        'kekos_batch_of_generated_sediment_id' => 'setKekosBatchOfGeneratedSedimentId',
        'batch_number' => 'setBatchNumber',
        'created_at' => 'setCreatedAt',
        'is_application_purpose_crops' => 'setIsApplicationPurposeCrops',
        'is_application_purpose_plants' => 'setIsApplicationPurposePlants',
        'is_application_purpose_inedible_plants' => 'setIsApplicationPurposeInediblePlants',
        'is_application_purpose_reclamation' => 'setIsApplicationPurposeReclamation',
        'is_application_purpose_land_adjustment' => 'setIsApplicationPurposeLandAdjustment',
        'is_soil_group_light' => 'setIsSoilGroupLight',
        'is_soil_group_medium' => 'setIsSoilGroupMedium',
        'is_soil_group_heavy' => 'setIsSoilGroupHeavy',
        'lot_precincts' => 'setLotPrecincts',
        'land_surface_rulers' => 'setLandSurfaceRulers',
        'land_surface_ruler' => 'setLandSurfaceRuler'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'kekos_applied_sediment_id' => 'getKekosAppliedSedimentId',
        'kekos_research_card_id' => 'getKekosResearchCardId',
        'research_number' => 'getResearchNumber',
        'kekos_id' => 'getKekosId',
        'kpo_id' => 'getKpoId',
        'kpo_card_number' => 'getKpoCardNumber',
        'applied_sludge_mass' => 'getAppliedSludgeMass',
        'applied_sludge_dry_matter_mass' => 'getAppliedSludgeDryMatterMass',
        'sludge_application_date' => 'getSludgeApplicationDate',
        'sludge_application_place_teryt_pk' => 'getSludgeApplicationPlaceTerytPk',
        'sludge_application_place_address_html' => 'getSludgeApplicationPlaceAddressHtml',
        'sludge_application_surface' => 'getSludgeApplicationSurface',
        'recording_user_id' => 'getRecordingUserId',
        'recording_user' => 'getRecordingUser',
        'kekos_batch_of_generated_sediment_id' => 'getKekosBatchOfGeneratedSedimentId',
        'batch_number' => 'getBatchNumber',
        'created_at' => 'getCreatedAt',
        'is_application_purpose_crops' => 'getIsApplicationPurposeCrops',
        'is_application_purpose_plants' => 'getIsApplicationPurposePlants',
        'is_application_purpose_inedible_plants' => 'getIsApplicationPurposeInediblePlants',
        'is_application_purpose_reclamation' => 'getIsApplicationPurposeReclamation',
        'is_application_purpose_land_adjustment' => 'getIsApplicationPurposeLandAdjustment',
        'is_soil_group_light' => 'getIsSoilGroupLight',
        'is_soil_group_medium' => 'getIsSoilGroupMedium',
        'is_soil_group_heavy' => 'getIsSoilGroupHeavy',
        'lot_precincts' => 'getLotPrecincts',
        'land_surface_rulers' => 'getLandSurfaceRulers',
        'land_surface_ruler' => 'getLandSurfaceRuler'
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
        $this->container['kekos_applied_sediment_id'] = isset($data['kekos_applied_sediment_id']) ? $data['kekos_applied_sediment_id'] : null;
        $this->container['kekos_research_card_id'] = isset($data['kekos_research_card_id']) ? $data['kekos_research_card_id'] : null;
        $this->container['research_number'] = isset($data['research_number']) ? $data['research_number'] : null;
        $this->container['kekos_id'] = isset($data['kekos_id']) ? $data['kekos_id'] : null;
        $this->container['kpo_id'] = isset($data['kpo_id']) ? $data['kpo_id'] : null;
        $this->container['kpo_card_number'] = isset($data['kpo_card_number']) ? $data['kpo_card_number'] : null;
        $this->container['applied_sludge_mass'] = isset($data['applied_sludge_mass']) ? $data['applied_sludge_mass'] : null;
        $this->container['applied_sludge_dry_matter_mass'] = isset($data['applied_sludge_dry_matter_mass']) ? $data['applied_sludge_dry_matter_mass'] : null;
        $this->container['sludge_application_date'] = isset($data['sludge_application_date']) ? $data['sludge_application_date'] : null;
        $this->container['sludge_application_place_teryt_pk'] = isset($data['sludge_application_place_teryt_pk']) ? $data['sludge_application_place_teryt_pk'] : null;
        $this->container['sludge_application_place_address_html'] = isset($data['sludge_application_place_address_html']) ? $data['sludge_application_place_address_html'] : null;
        $this->container['sludge_application_surface'] = isset($data['sludge_application_surface']) ? $data['sludge_application_surface'] : null;
        $this->container['recording_user_id'] = isset($data['recording_user_id']) ? $data['recording_user_id'] : null;
        $this->container['recording_user'] = isset($data['recording_user']) ? $data['recording_user'] : null;
        $this->container['kekos_batch_of_generated_sediment_id'] = isset($data['kekos_batch_of_generated_sediment_id']) ? $data['kekos_batch_of_generated_sediment_id'] : null;
        $this->container['batch_number'] = isset($data['batch_number']) ? $data['batch_number'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['is_application_purpose_crops'] = isset($data['is_application_purpose_crops']) ? $data['is_application_purpose_crops'] : null;
        $this->container['is_application_purpose_plants'] = isset($data['is_application_purpose_plants']) ? $data['is_application_purpose_plants'] : null;
        $this->container['is_application_purpose_inedible_plants'] = isset($data['is_application_purpose_inedible_plants']) ? $data['is_application_purpose_inedible_plants'] : null;
        $this->container['is_application_purpose_reclamation'] = isset($data['is_application_purpose_reclamation']) ? $data['is_application_purpose_reclamation'] : null;
        $this->container['is_application_purpose_land_adjustment'] = isset($data['is_application_purpose_land_adjustment']) ? $data['is_application_purpose_land_adjustment'] : null;
        $this->container['is_soil_group_light'] = isset($data['is_soil_group_light']) ? $data['is_soil_group_light'] : null;
        $this->container['is_soil_group_medium'] = isset($data['is_soil_group_medium']) ? $data['is_soil_group_medium'] : null;
        $this->container['is_soil_group_heavy'] = isset($data['is_soil_group_heavy']) ? $data['is_soil_group_heavy'] : null;
        $this->container['lot_precincts'] = isset($data['lot_precincts']) ? $data['lot_precincts'] : null;
        $this->container['land_surface_rulers'] = isset($data['land_surface_rulers']) ? $data['land_surface_rulers'] : null;
        $this->container['land_surface_ruler'] = isset($data['land_surface_ruler']) ? $data['land_surface_ruler'] : null;
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
     * Gets kekos_applied_sediment_id
     *
     * @return string
     */
    public function getKekosAppliedSedimentId()
    {
        return $this->container['kekos_applied_sediment_id'];
    }

    /**
     * Sets kekos_applied_sediment_id
     *
     * @param string $kekos_applied_sediment_id Id wpisu Zastosowane osady
     *
     * @return $this
     */
    public function setKekosAppliedSedimentId($kekos_applied_sediment_id)
    {
        $this->container['kekos_applied_sediment_id'] = $kekos_applied_sediment_id;

        return $this;
    }

    /**
     * Gets kekos_research_card_id
     *
     * @return string
     */
    public function getKekosResearchCardId()
    {
        return $this->container['kekos_research_card_id'];
    }

    /**
     * Sets kekos_research_card_id
     *
     * @param string $kekos_research_card_id Id karty badań
     *
     * @return $this
     */
    public function setKekosResearchCardId($kekos_research_card_id)
    {
        $this->container['kekos_research_card_id'] = $kekos_research_card_id;

        return $this;
    }

    /**
     * Gets research_number
     *
     * @return string
     */
    public function getResearchNumber()
    {
        return $this->container['research_number'];
    }

    /**
     * Sets research_number
     *
     * @param string $research_number Numer badania
     *
     * @return $this
     */
    public function setResearchNumber($research_number)
    {
        $this->container['research_number'] = $research_number;

        return $this;
    }

    /**
     * Gets kekos_id
     *
     * @return string
     */
    public function getKekosId()
    {
        return $this->container['kekos_id'];
    }

    /**
     * Sets kekos_id
     *
     * @param string $kekos_id Id karty ewidencji komunalnych osadów ściekowych
     *
     * @return $this
     */
    public function setKekosId($kekos_id)
    {
        $this->container['kekos_id'] = $kekos_id;

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
     * Gets kpo_card_number
     *
     * @return string
     */
    public function getKpoCardNumber()
    {
        return $this->container['kpo_card_number'];
    }

    /**
     * Sets kpo_card_number
     *
     * @param string $kpo_card_number Numer karty kpo
     *
     * @return $this
     */
    public function setKpoCardNumber($kpo_card_number)
    {
        $this->container['kpo_card_number'] = $kpo_card_number;

        return $this;
    }

    /**
     * Gets applied_sludge_mass
     *
     * @return double
     */
    public function getAppliedSludgeMass()
    {
        return $this->container['applied_sludge_mass'];
    }

    /**
     * Sets applied_sludge_mass
     *
     * @param double $applied_sludge_mass Masa zastosowanych komunalnych osadów ściekowych
     *
     * @return $this
     */
    public function setAppliedSludgeMass($applied_sludge_mass)
    {
        $this->container['applied_sludge_mass'] = $applied_sludge_mass;

        return $this;
    }

    /**
     * Gets applied_sludge_dry_matter_mass
     *
     * @return double
     */
    public function getAppliedSludgeDryMatterMass()
    {
        return $this->container['applied_sludge_dry_matter_mass'];
    }

    /**
     * Sets applied_sludge_dry_matter_mass
     *
     * @param double $applied_sludge_dry_matter_mass Sucha masa zastosowanych komunalnych osadów ściekowych
     *
     * @return $this
     */
    public function setAppliedSludgeDryMatterMass($applied_sludge_dry_matter_mass)
    {
        $this->container['applied_sludge_dry_matter_mass'] = $applied_sludge_dry_matter_mass;

        return $this;
    }

    /**
     * Gets sludge_application_date
     *
     * @return \DateTime
     */
    public function getSludgeApplicationDate()
    {
        return $this->container['sludge_application_date'];
    }

    /**
     * Sets sludge_application_date
     *
     * @param \DateTime $sludge_application_date Data zastosowania komunalnych osadów ściekowych
     *
     * @return $this
     */
    public function setSludgeApplicationDate($sludge_application_date)
    {
        $this->container['sludge_application_date'] = $sludge_application_date;

        return $this;
    }

    /**
     * Gets sludge_application_place_teryt_pk
     *
     * @return string
     */
    public function getSludgeApplicationPlaceTerytPk()
    {
        return $this->container['sludge_application_place_teryt_pk'];
    }

    /**
     * Sets sludge_application_place_teryt_pk
     *
     * @param string $sludge_application_place_teryt_pk Miejsce stosowania komunalnych osadów ściekowych
     *
     * @return $this
     */
    public function setSludgeApplicationPlaceTerytPk($sludge_application_place_teryt_pk)
    {
        $this->container['sludge_application_place_teryt_pk'] = $sludge_application_place_teryt_pk;

        return $this;
    }

    /**
     * Gets sludge_application_place_address_html
     *
     * @return string
     */
    public function getSludgeApplicationPlaceAddressHtml()
    {
        return $this->container['sludge_application_place_address_html'];
    }

    /**
     * Sets sludge_application_place_address_html
     *
     * @param string $sludge_application_place_address_html 
     *
     * @return $this
     */
    public function setSludgeApplicationPlaceAddressHtml($sludge_application_place_address_html)
    {
        $this->container['sludge_application_place_address_html'] = $sludge_application_place_address_html;

        return $this;
    }

    /**
     * Gets sludge_application_surface
     *
     * @return double
     */
    public function getSludgeApplicationSurface()
    {
        return $this->container['sludge_application_surface'];
    }

    /**
     * Sets sludge_application_surface
     *
     * @param double $sludge_application_surface Powierzchnia zastosowania komunalnych osadów ściekowych [ha]
     *
     * @return $this
     */
    public function setSludgeApplicationSurface($sludge_application_surface)
    {
        $this->container['sludge_application_surface'] = $sludge_application_surface;

        return $this;
    }

    /**
     * Gets recording_user_id
     *
     * @return string
     */
    public function getRecordingUserId()
    {
        return $this->container['recording_user_id'];
    }

    /**
     * Sets recording_user_id
     *
     * @param string $recording_user_id 
     *
     * @return $this
     */
    public function setRecordingUserId($recording_user_id)
    {
        $this->container['recording_user_id'] = $recording_user_id;

        return $this;
    }

    /**
     * Gets recording_user
     *
     * @return string
     */
    public function getRecordingUser()
    {
        return $this->container['recording_user'];
    }

    /**
     * Sets recording_user
     *
     * @param string $recording_user 
     *
     * @return $this
     */
    public function setRecordingUser($recording_user)
    {
        $this->container['recording_user'] = $recording_user;

        return $this;
    }

    /**
     * Gets kekos_batch_of_generated_sediment_id
     *
     * @return string
     */
    public function getKekosBatchOfGeneratedSedimentId()
    {
        return $this->container['kekos_batch_of_generated_sediment_id'];
    }

    /**
     * Sets kekos_batch_of_generated_sediment_id
     *
     * @param string $kekos_batch_of_generated_sediment_id Id wpisu Wytworzone osady
     *
     * @return $this
     */
    public function setKekosBatchOfGeneratedSedimentId($kekos_batch_of_generated_sediment_id)
    {
        $this->container['kekos_batch_of_generated_sediment_id'] = $kekos_batch_of_generated_sediment_id;

        return $this;
    }

    /**
     * Gets batch_number
     *
     * @return string
     */
    public function getBatchNumber()
    {
        return $this->container['batch_number'];
    }

    /**
     * Sets batch_number
     *
     * @param string $batch_number 
     *
     * @return $this
     */
    public function setBatchNumber($batch_number)
    {
        $this->container['batch_number'] = $batch_number;

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
     * Gets is_application_purpose_crops
     *
     * @return bool
     */
    public function getIsApplicationPurposeCrops()
    {
        return $this->container['is_application_purpose_crops'];
    }

    /**
     * Sets is_application_purpose_crops
     *
     * @param bool $is_application_purpose_crops Cel: w rolnictwie
     *
     * @return $this
     */
    public function setIsApplicationPurposeCrops($is_application_purpose_crops)
    {
        $this->container['is_application_purpose_crops'] = $is_application_purpose_crops;

        return $this;
    }

    /**
     * Gets is_application_purpose_plants
     *
     * @return bool
     */
    public function getIsApplicationPurposePlants()
    {
        return $this->container['is_application_purpose_plants'];
    }

    /**
     * Sets is_application_purpose_plants
     *
     * @param bool $is_application_purpose_plants Cel: do uprawy roślin przeznaczonych do produkcji kompostu
     *
     * @return $this
     */
    public function setIsApplicationPurposePlants($is_application_purpose_plants)
    {
        $this->container['is_application_purpose_plants'] = $is_application_purpose_plants;

        return $this;
    }

    /**
     * Gets is_application_purpose_inedible_plants
     *
     * @return bool
     */
    public function getIsApplicationPurposeInediblePlants()
    {
        return $this->container['is_application_purpose_inedible_plants'];
    }

    /**
     * Sets is_application_purpose_inedible_plants
     *
     * @param bool $is_application_purpose_inedible_plants Cel: do uprawy roślin nieprzeznaczonych do spożycia i produkcji pasz
     *
     * @return $this
     */
    public function setIsApplicationPurposeInediblePlants($is_application_purpose_inedible_plants)
    {
        $this->container['is_application_purpose_inedible_plants'] = $is_application_purpose_inedible_plants;

        return $this;
    }

    /**
     * Gets is_application_purpose_reclamation
     *
     * @return bool
     */
    public function getIsApplicationPurposeReclamation()
    {
        return $this->container['is_application_purpose_reclamation'];
    }

    /**
     * Sets is_application_purpose_reclamation
     *
     * @param bool $is_application_purpose_reclamation Cel: do rekultywacji terenów w tym gruntów na cele rolne
     *
     * @return $this
     */
    public function setIsApplicationPurposeReclamation($is_application_purpose_reclamation)
    {
        $this->container['is_application_purpose_reclamation'] = $is_application_purpose_reclamation;

        return $this;
    }

    /**
     * Gets is_application_purpose_land_adjustment
     *
     * @return bool
     */
    public function getIsApplicationPurposeLandAdjustment()
    {
        return $this->container['is_application_purpose_land_adjustment'];
    }

    /**
     * Sets is_application_purpose_land_adjustment
     *
     * @param bool $is_application_purpose_land_adjustment Cel: przy dostosowywaniu gruntów do określonych potrzeb wynikających z planów gospodarki odpadami(..)
     *
     * @return $this
     */
    public function setIsApplicationPurposeLandAdjustment($is_application_purpose_land_adjustment)
    {
        $this->container['is_application_purpose_land_adjustment'] = $is_application_purpose_land_adjustment;

        return $this;
    }

    /**
     * Gets is_soil_group_light
     *
     * @return bool
     */
    public function getIsSoilGroupLight()
    {
        return $this->container['is_soil_group_light'];
    }

    /**
     * Sets is_soil_group_light
     *
     * @param bool $is_soil_group_light Grupa glepy: lekka
     *
     * @return $this
     */
    public function setIsSoilGroupLight($is_soil_group_light)
    {
        $this->container['is_soil_group_light'] = $is_soil_group_light;

        return $this;
    }

    /**
     * Gets is_soil_group_medium
     *
     * @return bool
     */
    public function getIsSoilGroupMedium()
    {
        return $this->container['is_soil_group_medium'];
    }

    /**
     * Sets is_soil_group_medium
     *
     * @param bool $is_soil_group_medium Grupa glepy: średnia
     *
     * @return $this
     */
    public function setIsSoilGroupMedium($is_soil_group_medium)
    {
        $this->container['is_soil_group_medium'] = $is_soil_group_medium;

        return $this;
    }

    /**
     * Gets is_soil_group_heavy
     *
     * @return bool
     */
    public function getIsSoilGroupHeavy()
    {
        return $this->container['is_soil_group_heavy'];
    }

    /**
     * Sets is_soil_group_heavy
     *
     * @param bool $is_soil_group_heavy Grupa glepy: ciężka
     *
     * @return $this
     */
    public function setIsSoilGroupHeavy($is_soil_group_heavy)
    {
        $this->container['is_soil_group_heavy'] = $is_soil_group_heavy;

        return $this;
    }

    /**
     * Gets lot_precincts
     *
     * @return \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1LotPrecinctDto[]
     */
    public function getLotPrecincts()
    {
        return $this->container['lot_precincts'];
    }

    /**
     * Sets lot_precincts
     *
     * @param \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1LotPrecinctDto[] $lot_precincts Lista numerów działek i obrębów geodezyjnych
     *
     * @return $this
     */
    public function setLotPrecincts($lot_precincts)
    {
        $this->container['lot_precincts'] = $lot_precincts;

        return $this;
    }

    /**
     * Gets land_surface_rulers
     *
     * @return \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1LandSurfaceRulerDto[]
     */
    public function getLandSurfaceRulers()
    {
        return $this->container['land_surface_rulers'];
    }

    /**
     * Sets land_surface_rulers
     *
     * @param \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1LandSurfaceRulerDto[] $land_surface_rulers Informacje o miejscu stosowania osadów
     *
     * @return $this
     */
    public function setLandSurfaceRulers($land_surface_rulers)
    {
        $this->container['land_surface_rulers'] = $land_surface_rulers;

        return $this;
    }

    /**
     * Gets land_surface_ruler
     *
     * @return string
     */
    public function getLandSurfaceRuler()
    {
        return $this->container['land_surface_ruler'];
    }

    /**
     * Sets land_surface_ruler
     *
     * @param string $land_surface_ruler land_surface_ruler
     *
     * @return $this
     */
    public function setLandSurfaceRuler($land_surface_ruler)
    {
        $this->container['land_surface_ruler'] = $land_surface_ruler;

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


