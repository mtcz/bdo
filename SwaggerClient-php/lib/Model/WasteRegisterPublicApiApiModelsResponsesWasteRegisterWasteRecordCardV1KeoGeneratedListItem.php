<?php
/**
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoGeneratedListItem
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
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoGeneratedListItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoGeneratedListItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Responses.WasteRegister.WasteRecordCard.V1.KeoGeneratedListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'keo_generated_id' => 'string',
        'installation_name' => 'string',
        'waste_mass_installation' => 'double',
        'waste_mass_excluding_installation' => 'double',
        'waste_from_services' => 'bool',
        'created_by_user' => 'string',
        'manufacture_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'keo_generated_id' => 'uuid',
        'installation_name' => null,
        'waste_mass_installation' => 'double',
        'waste_mass_excluding_installation' => 'double',
        'waste_from_services' => null,
        'created_by_user' => null,
        'manufacture_date' => 'date-time'
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
        'keo_generated_id' => 'keoGeneratedId',
        'installation_name' => 'installationName',
        'waste_mass_installation' => 'wasteMassInstallation',
        'waste_mass_excluding_installation' => 'wasteMassExcludingInstallation',
        'waste_from_services' => 'wasteFromServices',
        'created_by_user' => 'createdByUser',
        'manufacture_date' => 'manufactureDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'keo_generated_id' => 'setKeoGeneratedId',
        'installation_name' => 'setInstallationName',
        'waste_mass_installation' => 'setWasteMassInstallation',
        'waste_mass_excluding_installation' => 'setWasteMassExcludingInstallation',
        'waste_from_services' => 'setWasteFromServices',
        'created_by_user' => 'setCreatedByUser',
        'manufacture_date' => 'setManufactureDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'keo_generated_id' => 'getKeoGeneratedId',
        'installation_name' => 'getInstallationName',
        'waste_mass_installation' => 'getWasteMassInstallation',
        'waste_mass_excluding_installation' => 'getWasteMassExcludingInstallation',
        'waste_from_services' => 'getWasteFromServices',
        'created_by_user' => 'getCreatedByUser',
        'manufacture_date' => 'getManufactureDate'
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
        $this->container['keo_generated_id'] = isset($data['keo_generated_id']) ? $data['keo_generated_id'] : null;
        $this->container['installation_name'] = isset($data['installation_name']) ? $data['installation_name'] : null;
        $this->container['waste_mass_installation'] = isset($data['waste_mass_installation']) ? $data['waste_mass_installation'] : null;
        $this->container['waste_mass_excluding_installation'] = isset($data['waste_mass_excluding_installation']) ? $data['waste_mass_excluding_installation'] : null;
        $this->container['waste_from_services'] = isset($data['waste_from_services']) ? $data['waste_from_services'] : null;
        $this->container['created_by_user'] = isset($data['created_by_user']) ? $data['created_by_user'] : null;
        $this->container['manufacture_date'] = isset($data['manufacture_date']) ? $data['manufacture_date'] : null;
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
     * Gets keo_generated_id
     *
     * @return string
     */
    public function getKeoGeneratedId()
    {
        return $this->container['keo_generated_id'];
    }

    /**
     * Sets keo_generated_id
     *
     * @param string $keo_generated_id Id wpisu Wytworzone odpady
     *
     * @return $this
     */
    public function setKeoGeneratedId($keo_generated_id)
    {
        $this->container['keo_generated_id'] = $keo_generated_id;

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
     * Gets waste_mass_installation
     *
     * @return double
     */
    public function getWasteMassInstallation()
    {
        return $this->container['waste_mass_installation'];
    }

    /**
     * Sets waste_mass_installation
     *
     * @param double $waste_mass_installation Masa wytworzonych odpadów: w związku z eksploatacją instalacji [Mg]
     *
     * @return $this
     */
    public function setWasteMassInstallation($waste_mass_installation)
    {
        $this->container['waste_mass_installation'] = $waste_mass_installation;

        return $this;
    }

    /**
     * Gets waste_mass_excluding_installation
     *
     * @return double
     */
    public function getWasteMassExcludingInstallation()
    {
        return $this->container['waste_mass_excluding_installation'];
    }

    /**
     * Sets waste_mass_excluding_installation
     *
     * @param double $waste_mass_excluding_installation Masa wytworzonych odpadów: poza instalacją
     *
     * @return $this
     */
    public function setWasteMassExcludingInstallation($waste_mass_excluding_installation)
    {
        $this->container['waste_mass_excluding_installation'] = $waste_mass_excluding_installation;

        return $this;
    }

    /**
     * Gets waste_from_services
     *
     * @return bool
     */
    public function getWasteFromServices()
    {
        return $this->container['waste_from_services'];
    }

    /**
     * Sets waste_from_services
     *
     * @param bool $waste_from_services wytwarzanie odpadów - w wyniku świadczenia usług (w rozumieniu art. 3 ust. 1 pkt 32 ustawy o odpadach) i/lub działalności w zakresie obiektów liniowych (w rozumieniu art. 3 pkt 3a ustawy - Prawo budowlane)
     *
     * @return $this
     */
    public function setWasteFromServices($waste_from_services)
    {
        $this->container['waste_from_services'] = $waste_from_services;

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
     * Gets manufacture_date
     *
     * @return \DateTime
     */
    public function getManufactureDate()
    {
        return $this->container['manufacture_date'];
    }

    /**
     * Sets manufacture_date
     *
     * @param \DateTime $manufacture_date Data wytworzenia
     *
     * @return $this
     */
    public function setManufactureDate($manufacture_date)
    {
        $this->container['manufacture_date'] = $manufacture_date;

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

