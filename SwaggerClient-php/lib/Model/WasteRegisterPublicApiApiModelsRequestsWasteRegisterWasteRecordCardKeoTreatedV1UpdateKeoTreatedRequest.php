<?php
/**
 * WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoTreatedV1UpdateKeoTreatedRequest
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
 * WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoTreatedV1UpdateKeoTreatedRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoTreatedV1UpdateKeoTreatedRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Requests.WasteRegister.WasteRecordCard.KeoTreated.V1.UpdateKeoTreatedRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'keo_treated_id' => 'string',
        'treated_waste_mass' => 'double',
        'pcb_content' => 'double',
        'process_r' => 'bool',
        'process_d' => 'bool',
        'waste_process_id' => 'int',
        'is_recycle' => 'bool',
        'is_filling_up_disadvantaged_areas' => 'bool',
        'is_preparation_for_re_use' => 'bool',
        'is_another_recovery_process' => 'bool',
        'is_neutralization' => 'bool',
        'installation_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'keo_treated_id' => 'uuid',
        'treated_waste_mass' => 'double',
        'pcb_content' => 'double',
        'process_r' => null,
        'process_d' => null,
        'waste_process_id' => 'int32',
        'is_recycle' => null,
        'is_filling_up_disadvantaged_areas' => null,
        'is_preparation_for_re_use' => null,
        'is_another_recovery_process' => null,
        'is_neutralization' => null,
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
        'keo_treated_id' => 'keoTreatedId',
        'treated_waste_mass' => 'treatedWasteMass',
        'pcb_content' => 'pcbContent',
        'process_r' => 'processR',
        'process_d' => 'processD',
        'waste_process_id' => 'wasteProcessId',
        'is_recycle' => 'isRecycle',
        'is_filling_up_disadvantaged_areas' => 'isFillingUpDisadvantagedAreas',
        'is_preparation_for_re_use' => 'isPreparationForReUse',
        'is_another_recovery_process' => 'isAnotherRecoveryProcess',
        'is_neutralization' => 'isNeutralization',
        'installation_name' => 'installationName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'keo_treated_id' => 'setKeoTreatedId',
        'treated_waste_mass' => 'setTreatedWasteMass',
        'pcb_content' => 'setPcbContent',
        'process_r' => 'setProcessR',
        'process_d' => 'setProcessD',
        'waste_process_id' => 'setWasteProcessId',
        'is_recycle' => 'setIsRecycle',
        'is_filling_up_disadvantaged_areas' => 'setIsFillingUpDisadvantagedAreas',
        'is_preparation_for_re_use' => 'setIsPreparationForReUse',
        'is_another_recovery_process' => 'setIsAnotherRecoveryProcess',
        'is_neutralization' => 'setIsNeutralization',
        'installation_name' => 'setInstallationName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'keo_treated_id' => 'getKeoTreatedId',
        'treated_waste_mass' => 'getTreatedWasteMass',
        'pcb_content' => 'getPcbContent',
        'process_r' => 'getProcessR',
        'process_d' => 'getProcessD',
        'waste_process_id' => 'getWasteProcessId',
        'is_recycle' => 'getIsRecycle',
        'is_filling_up_disadvantaged_areas' => 'getIsFillingUpDisadvantagedAreas',
        'is_preparation_for_re_use' => 'getIsPreparationForReUse',
        'is_another_recovery_process' => 'getIsAnotherRecoveryProcess',
        'is_neutralization' => 'getIsNeutralization',
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
        $this->container['keo_treated_id'] = isset($data['keo_treated_id']) ? $data['keo_treated_id'] : null;
        $this->container['treated_waste_mass'] = isset($data['treated_waste_mass']) ? $data['treated_waste_mass'] : null;
        $this->container['pcb_content'] = isset($data['pcb_content']) ? $data['pcb_content'] : null;
        $this->container['process_r'] = isset($data['process_r']) ? $data['process_r'] : null;
        $this->container['process_d'] = isset($data['process_d']) ? $data['process_d'] : null;
        $this->container['waste_process_id'] = isset($data['waste_process_id']) ? $data['waste_process_id'] : null;
        $this->container['is_recycle'] = isset($data['is_recycle']) ? $data['is_recycle'] : null;
        $this->container['is_filling_up_disadvantaged_areas'] = isset($data['is_filling_up_disadvantaged_areas']) ? $data['is_filling_up_disadvantaged_areas'] : null;
        $this->container['is_preparation_for_re_use'] = isset($data['is_preparation_for_re_use']) ? $data['is_preparation_for_re_use'] : null;
        $this->container['is_another_recovery_process'] = isset($data['is_another_recovery_process']) ? $data['is_another_recovery_process'] : null;
        $this->container['is_neutralization'] = isset($data['is_neutralization']) ? $data['is_neutralization'] : null;
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
     * Gets keo_treated_id
     *
     * @return string
     */
    public function getKeoTreatedId()
    {
        return $this->container['keo_treated_id'];
    }

    /**
     * Sets keo_treated_id
     *
     * @param string $keo_treated_id Id wpisu Przetwarzane odpady
     *
     * @return $this
     */
    public function setKeoTreatedId($keo_treated_id)
    {
        $this->container['keo_treated_id'] = $keo_treated_id;

        return $this;
    }

    /**
     * Gets treated_waste_mass
     *
     * @return double
     */
    public function getTreatedWasteMass()
    {
        return $this->container['treated_waste_mass'];
    }

    /**
     * Sets treated_waste_mass
     *
     * @param double $treated_waste_mass Masa przetworzonych odpadów
     *
     * @return $this
     */
    public function setTreatedWasteMass($treated_waste_mass)
    {
        $this->container['treated_waste_mass'] = $treated_waste_mass;

        return $this;
    }

    /**
     * Gets pcb_content
     *
     * @return double
     */
    public function getPcbContent()
    {
        return $this->container['pcb_content'];
    }

    /**
     * Sets pcb_content
     *
     * @param double $pcb_content Zawartość PCB [%]
     *
     * @return $this
     */
    public function setPcbContent($pcb_content)
    {
        $this->container['pcb_content'] = $pcb_content;

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
     * Gets is_filling_up_disadvantaged_areas
     *
     * @return bool
     */
    public function getIsFillingUpDisadvantagedAreas()
    {
        return $this->container['is_filling_up_disadvantaged_areas'];
    }

    /**
     * Sets is_filling_up_disadvantaged_areas
     *
     * @param bool $is_filling_up_disadvantaged_areas Wypełnianie terenów niekorzystnie przekształconych
     *
     * @return $this
     */
    public function setIsFillingUpDisadvantagedAreas($is_filling_up_disadvantaged_areas)
    {
        $this->container['is_filling_up_disadvantaged_areas'] = $is_filling_up_disadvantaged_areas;

        return $this;
    }

    /**
     * Gets is_preparation_for_re_use
     *
     * @return bool
     */
    public function getIsPreparationForReUse()
    {
        return $this->container['is_preparation_for_re_use'];
    }

    /**
     * Sets is_preparation_for_re_use
     *
     * @param bool $is_preparation_for_re_use Przygotowanie do ponownego uzycia
     *
     * @return $this
     */
    public function setIsPreparationForReUse($is_preparation_for_re_use)
    {
        $this->container['is_preparation_for_re_use'] = $is_preparation_for_re_use;

        return $this;
    }

    /**
     * Gets is_another_recovery_process
     *
     * @return bool
     */
    public function getIsAnotherRecoveryProcess()
    {
        return $this->container['is_another_recovery_process'];
    }

    /**
     * Sets is_another_recovery_process
     *
     * @param bool $is_another_recovery_process Inny proces odzysku
     *
     * @return $this
     */
    public function setIsAnotherRecoveryProcess($is_another_recovery_process)
    {
        $this->container['is_another_recovery_process'] = $is_another_recovery_process;

        return $this;
    }

    /**
     * Gets is_neutralization
     *
     * @return bool
     */
    public function getIsNeutralization()
    {
        return $this->container['is_neutralization'];
    }

    /**
     * Sets is_neutralization
     *
     * @param bool $is_neutralization Un - unieszkodliwianie
     *
     * @return $this
     */
    public function setIsNeutralization($is_neutralization)
    {
        $this->container['is_neutralization'] = $is_neutralization;

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


