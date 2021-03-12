<?php
/**
 * WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1KpokAsSenderSearchResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull
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
 * WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1KpokAsSenderSearchResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1KpokAsSenderSearchResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Collections.PaginatedPage&#x60;1[[WasteRegisterPublic.Api.ApiModels.Responses.WasteRegister.MuncipalWasteTransferCard.V1.KpokAsSenderSearchResultDto, WasteRegisterPublic.Api, Version&#x3D;1.0.0.0, Culture&#x3D;neutral, PublicKeyToken&#x3D;null]]';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'page_size' => 'int',
        'page_number' => 'int',
        'total_pages_number' => 'int',
        'total_result_number' => 'int',
        'has_previous_page' => 'bool',
        'has_next_page' => 'bool',
        'items' => '\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1KpokAsSenderSearchResultDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'page_size' => 'int64',
        'page_number' => 'int64',
        'total_pages_number' => 'int64',
        'total_result_number' => 'int64',
        'has_previous_page' => null,
        'has_next_page' => null,
        'items' => null
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
        'page_size' => 'pageSize',
        'page_number' => 'pageNumber',
        'total_pages_number' => 'totalPagesNumber',
        'total_result_number' => 'totalResultNumber',
        'has_previous_page' => 'hasPreviousPage',
        'has_next_page' => 'hasNextPage',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'page_size' => 'setPageSize',
        'page_number' => 'setPageNumber',
        'total_pages_number' => 'setTotalPagesNumber',
        'total_result_number' => 'setTotalResultNumber',
        'has_previous_page' => 'setHasPreviousPage',
        'has_next_page' => 'setHasNextPage',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'page_size' => 'getPageSize',
        'page_number' => 'getPageNumber',
        'total_pages_number' => 'getTotalPagesNumber',
        'total_result_number' => 'getTotalResultNumber',
        'has_previous_page' => 'getHasPreviousPage',
        'has_next_page' => 'getHasNextPage',
        'items' => 'getItems'
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
        $this->container['page_size'] = isset($data['page_size']) ? $data['page_size'] : null;
        $this->container['page_number'] = isset($data['page_number']) ? $data['page_number'] : null;
        $this->container['total_pages_number'] = isset($data['total_pages_number']) ? $data['total_pages_number'] : null;
        $this->container['total_result_number'] = isset($data['total_result_number']) ? $data['total_result_number'] : null;
        $this->container['has_previous_page'] = isset($data['has_previous_page']) ? $data['has_previous_page'] : null;
        $this->container['has_next_page'] = isset($data['has_next_page']) ? $data['has_next_page'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
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
     * Gets page_size
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int $page_size Maksymalna liczba wyników na stronie
     *
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets page_number
     *
     * @return int
     */
    public function getPageNumber()
    {
        return $this->container['page_number'];
    }

    /**
     * Sets page_number
     *
     * @param int $page_number Numer strony
     *
     * @return $this
     */
    public function setPageNumber($page_number)
    {
        $this->container['page_number'] = $page_number;

        return $this;
    }

    /**
     * Gets total_pages_number
     *
     * @return int
     */
    public function getTotalPagesNumber()
    {
        return $this->container['total_pages_number'];
    }

    /**
     * Sets total_pages_number
     *
     * @param int $total_pages_number Całkowita liczba stron
     *
     * @return $this
     */
    public function setTotalPagesNumber($total_pages_number)
    {
        $this->container['total_pages_number'] = $total_pages_number;

        return $this;
    }

    /**
     * Gets total_result_number
     *
     * @return int
     */
    public function getTotalResultNumber()
    {
        return $this->container['total_result_number'];
    }

    /**
     * Sets total_result_number
     *
     * @param int $total_result_number Całkowita liczba rekordów
     *
     * @return $this
     */
    public function setTotalResultNumber($total_result_number)
    {
        $this->container['total_result_number'] = $total_result_number;

        return $this;
    }

    /**
     * Gets has_previous_page
     *
     * @return bool
     */
    public function getHasPreviousPage()
    {
        return $this->container['has_previous_page'];
    }

    /**
     * Sets has_previous_page
     *
     * @param bool $has_previous_page Flaga ustawiana na true, jeśli istnieje strona o numerze niższym niż bieżąca, false w przeciwnym wypadku
     *
     * @return $this
     */
    public function setHasPreviousPage($has_previous_page)
    {
        $this->container['has_previous_page'] = $has_previous_page;

        return $this;
    }

    /**
     * Gets has_next_page
     *
     * @return bool
     */
    public function getHasNextPage()
    {
        return $this->container['has_next_page'];
    }

    /**
     * Sets has_next_page
     *
     * @param bool $has_next_page Flaga ustawiana na true, jeśli istnieje strona o numerze wyższym niż bieżąca, false w przeciwnym wypadku
     *
     * @return $this
     */
    public function setHasNextPage($has_next_page)
    {
        $this->container['has_next_page'] = $has_next_page;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1KpokAsSenderSearchResultDto[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1KpokAsSenderSearchResultDto[] $items Lista wyników
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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


