<?php
/**
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosResearchCardsResponse
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
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosResearchCardsResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosResearchCardsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Responses.WasteRegister.MunicipalSewageSludgeCard.V1.GetKekosResearchCardsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'kekos_id' => 'string',
        'kekos_batch_of_generated_sediment_id' => 'string',
        'kekos_batch_number' => 'string',
        'kekos_research_cards' => '\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1KekosResearchCardListItemDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'kekos_id' => 'uuid',
        'kekos_batch_of_generated_sediment_id' => 'uuid',
        'kekos_batch_number' => null,
        'kekos_research_cards' => null
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
        'kekos_id' => 'kekosId',
        'kekos_batch_of_generated_sediment_id' => 'kekosBatchOfGeneratedSedimentId',
        'kekos_batch_number' => 'kekosBatchNumber',
        'kekos_research_cards' => 'kekosResearchCards'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'kekos_id' => 'setKekosId',
        'kekos_batch_of_generated_sediment_id' => 'setKekosBatchOfGeneratedSedimentId',
        'kekos_batch_number' => 'setKekosBatchNumber',
        'kekos_research_cards' => 'setKekosResearchCards'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'kekos_id' => 'getKekosId',
        'kekos_batch_of_generated_sediment_id' => 'getKekosBatchOfGeneratedSedimentId',
        'kekos_batch_number' => 'getKekosBatchNumber',
        'kekos_research_cards' => 'getKekosResearchCards'
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
        $this->container['kekos_id'] = isset($data['kekos_id']) ? $data['kekos_id'] : null;
        $this->container['kekos_batch_of_generated_sediment_id'] = isset($data['kekos_batch_of_generated_sediment_id']) ? $data['kekos_batch_of_generated_sediment_id'] : null;
        $this->container['kekos_batch_number'] = isset($data['kekos_batch_number']) ? $data['kekos_batch_number'] : null;
        $this->container['kekos_research_cards'] = isset($data['kekos_research_cards']) ? $data['kekos_research_cards'] : null;
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
     * Gets kekos_batch_number
     *
     * @return string
     */
    public function getKekosBatchNumber()
    {
        return $this->container['kekos_batch_number'];
    }

    /**
     * Sets kekos_batch_number
     *
     * @param string $kekos_batch_number 
     *
     * @return $this
     */
    public function setKekosBatchNumber($kekos_batch_number)
    {
        $this->container['kekos_batch_number'] = $kekos_batch_number;

        return $this;
    }

    /**
     * Gets kekos_research_cards
     *
     * @return \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1KekosResearchCardListItemDto[]
     */
    public function getKekosResearchCards()
    {
        return $this->container['kekos_research_cards'];
    }

    /**
     * Sets kekos_research_cards
     *
     * @param \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1KekosResearchCardListItemDto[] $kekos_research_cards 
     *
     * @return $this
     */
    public function setKekosResearchCards($kekos_research_cards)
    {
        $this->container['kekos_research_cards'] = $kekos_research_cards;

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


