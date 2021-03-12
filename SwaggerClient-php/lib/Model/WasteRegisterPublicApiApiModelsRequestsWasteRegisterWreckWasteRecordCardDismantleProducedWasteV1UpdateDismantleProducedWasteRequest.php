<?php
/**
 * WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProducedWasteV1UpdateDismantleProducedWasteRequest
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
 * WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProducedWasteV1UpdateDismantleProducedWasteRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProducedWasteV1UpdateDismantleProducedWasteRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Requests.WasteRegister.WreckWasteRecordCard.DismantleProducedWaste.V1.UpdateDismantleProducedWasteRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dismantle_produced_waste_id' => 'string',
        'waste_code_id' => 'int',
        'production_date' => '\DateTime',
        'waste_mass' => 'double',
        'reusable_parts_mass' => 'double',
        'waste_code_extended' => 'bool',
        'waste_code_extended_description' => 'string',
        'hazardous_waste_reclassification' => 'bool',
        'hazardous_waste_reclassification_description' => 'string',
        'installation_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dismantle_produced_waste_id' => 'uuid',
        'waste_code_id' => 'int32',
        'production_date' => 'date-time',
        'waste_mass' => 'double',
        'reusable_parts_mass' => 'double',
        'waste_code_extended' => null,
        'waste_code_extended_description' => null,
        'hazardous_waste_reclassification' => null,
        'hazardous_waste_reclassification_description' => null,
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
        'dismantle_produced_waste_id' => 'dismantleProducedWasteId',
        'waste_code_id' => 'wasteCodeId',
        'production_date' => 'productionDate',
        'waste_mass' => 'wasteMass',
        'reusable_parts_mass' => 'reusablePartsMass',
        'waste_code_extended' => 'wasteCodeExtended',
        'waste_code_extended_description' => 'wasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'hazardousWasteReclassification',
        'hazardous_waste_reclassification_description' => 'hazardousWasteReclassificationDescription',
        'installation_name' => 'installationName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dismantle_produced_waste_id' => 'setDismantleProducedWasteId',
        'waste_code_id' => 'setWasteCodeId',
        'production_date' => 'setProductionDate',
        'waste_mass' => 'setWasteMass',
        'reusable_parts_mass' => 'setReusablePartsMass',
        'waste_code_extended' => 'setWasteCodeExtended',
        'waste_code_extended_description' => 'setWasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'setHazardousWasteReclassification',
        'hazardous_waste_reclassification_description' => 'setHazardousWasteReclassificationDescription',
        'installation_name' => 'setInstallationName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dismantle_produced_waste_id' => 'getDismantleProducedWasteId',
        'waste_code_id' => 'getWasteCodeId',
        'production_date' => 'getProductionDate',
        'waste_mass' => 'getWasteMass',
        'reusable_parts_mass' => 'getReusablePartsMass',
        'waste_code_extended' => 'getWasteCodeExtended',
        'waste_code_extended_description' => 'getWasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'getHazardousWasteReclassification',
        'hazardous_waste_reclassification_description' => 'getHazardousWasteReclassificationDescription',
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
        $this->container['dismantle_produced_waste_id'] = isset($data['dismantle_produced_waste_id']) ? $data['dismantle_produced_waste_id'] : null;
        $this->container['waste_code_id'] = isset($data['waste_code_id']) ? $data['waste_code_id'] : null;
        $this->container['production_date'] = isset($data['production_date']) ? $data['production_date'] : null;
        $this->container['waste_mass'] = isset($data['waste_mass']) ? $data['waste_mass'] : null;
        $this->container['reusable_parts_mass'] = isset($data['reusable_parts_mass']) ? $data['reusable_parts_mass'] : null;
        $this->container['waste_code_extended'] = isset($data['waste_code_extended']) ? $data['waste_code_extended'] : null;
        $this->container['waste_code_extended_description'] = isset($data['waste_code_extended_description']) ? $data['waste_code_extended_description'] : null;
        $this->container['hazardous_waste_reclassification'] = isset($data['hazardous_waste_reclassification']) ? $data['hazardous_waste_reclassification'] : null;
        $this->container['hazardous_waste_reclassification_description'] = isset($data['hazardous_waste_reclassification_description']) ? $data['hazardous_waste_reclassification_description'] : null;
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
     * Gets dismantle_produced_waste_id
     *
     * @return string
     */
    public function getDismantleProducedWasteId()
    {
        return $this->container['dismantle_produced_waste_id'];
    }

    /**
     * Sets dismantle_produced_waste_id
     *
     * @param string $dismantle_produced_waste_id Prowadzący stację demontażu - Wytwarzane odpady
     *
     * @return $this
     */
    public function setDismantleProducedWasteId($dismantle_produced_waste_id)
    {
        $this->container['dismantle_produced_waste_id'] = $dismantle_produced_waste_id;

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
     * Gets production_date
     *
     * @return \DateTime
     */
    public function getProductionDate()
    {
        return $this->container['production_date'];
    }

    /**
     * Sets production_date
     *
     * @param \DateTime $production_date Data wytworzenia
     *
     * @return $this
     */
    public function setProductionDate($production_date)
    {
        $this->container['production_date'] = $production_date;

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
     * Gets reusable_parts_mass
     *
     * @return double
     */
    public function getReusablePartsMass()
    {
        return $this->container['reusable_parts_mass'];
    }

    /**
     * Sets reusable_parts_mass
     *
     * @param double $reusable_parts_mass Masa przedmiotów wyposażenia i części przeznaczonych do ponownego użycia [Mg]
     *
     * @return $this
     */
    public function setReusablePartsMass($reusable_parts_mass)
    {
        $this->container['reusable_parts_mass'] = $reusable_parts_mass;

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


