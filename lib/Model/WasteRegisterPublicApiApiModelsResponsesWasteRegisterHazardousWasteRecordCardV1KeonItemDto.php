<?php
/**
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1KeonItemDto
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
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1KeonItemDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1KeonItemDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Responses.WasteRegister.HazardousWasteRecordCard.V1.KeonItemDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'keon_item_id' => 'string',
        'keon_id' => 'string',
        'company_id' => 'string',
        'receive_confirmation_time' => '\DateTime',
        'document_number' => 'string',
        'waste_mass' => 'double',
        'sender_company_id' => 'string',
        'receiver_company_id' => 'string',
        'created_by_user' => 'string',
        'is_dealer' => 'bool',
        'is_broker' => 'bool',
        'is_kpo' => 'bool',
        'is_kpok' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'keon_item_id' => 'uuid',
        'keon_id' => 'uuid',
        'company_id' => 'uuid',
        'receive_confirmation_time' => 'date-time',
        'document_number' => null,
        'waste_mass' => 'double',
        'sender_company_id' => 'uuid',
        'receiver_company_id' => 'uuid',
        'created_by_user' => null,
        'is_dealer' => null,
        'is_broker' => null,
        'is_kpo' => null,
        'is_kpok' => null
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
        'keon_item_id' => 'keonItemId',
        'keon_id' => 'keonId',
        'company_id' => 'companyId',
        'receive_confirmation_time' => 'receiveConfirmationTime',
        'document_number' => 'documentNumber',
        'waste_mass' => 'wasteMass',
        'sender_company_id' => 'senderCompanyId',
        'receiver_company_id' => 'receiverCompanyId',
        'created_by_user' => 'createdByUser',
        'is_dealer' => 'isDealer',
        'is_broker' => 'isBroker',
        'is_kpo' => 'isKpo',
        'is_kpok' => 'isKpok'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'keon_item_id' => 'setKeonItemId',
        'keon_id' => 'setKeonId',
        'company_id' => 'setCompanyId',
        'receive_confirmation_time' => 'setReceiveConfirmationTime',
        'document_number' => 'setDocumentNumber',
        'waste_mass' => 'setWasteMass',
        'sender_company_id' => 'setSenderCompanyId',
        'receiver_company_id' => 'setReceiverCompanyId',
        'created_by_user' => 'setCreatedByUser',
        'is_dealer' => 'setIsDealer',
        'is_broker' => 'setIsBroker',
        'is_kpo' => 'setIsKpo',
        'is_kpok' => 'setIsKpok'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'keon_item_id' => 'getKeonItemId',
        'keon_id' => 'getKeonId',
        'company_id' => 'getCompanyId',
        'receive_confirmation_time' => 'getReceiveConfirmationTime',
        'document_number' => 'getDocumentNumber',
        'waste_mass' => 'getWasteMass',
        'sender_company_id' => 'getSenderCompanyId',
        'receiver_company_id' => 'getReceiverCompanyId',
        'created_by_user' => 'getCreatedByUser',
        'is_dealer' => 'getIsDealer',
        'is_broker' => 'getIsBroker',
        'is_kpo' => 'getIsKpo',
        'is_kpok' => 'getIsKpok'
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
        $this->container['keon_item_id'] = isset($data['keon_item_id']) ? $data['keon_item_id'] : null;
        $this->container['keon_id'] = isset($data['keon_id']) ? $data['keon_id'] : null;
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['receive_confirmation_time'] = isset($data['receive_confirmation_time']) ? $data['receive_confirmation_time'] : null;
        $this->container['document_number'] = isset($data['document_number']) ? $data['document_number'] : null;
        $this->container['waste_mass'] = isset($data['waste_mass']) ? $data['waste_mass'] : null;
        $this->container['sender_company_id'] = isset($data['sender_company_id']) ? $data['sender_company_id'] : null;
        $this->container['receiver_company_id'] = isset($data['receiver_company_id']) ? $data['receiver_company_id'] : null;
        $this->container['created_by_user'] = isset($data['created_by_user']) ? $data['created_by_user'] : null;
        $this->container['is_dealer'] = isset($data['is_dealer']) ? $data['is_dealer'] : null;
        $this->container['is_broker'] = isset($data['is_broker']) ? $data['is_broker'] : null;
        $this->container['is_kpo'] = isset($data['is_kpo']) ? $data['is_kpo'] : null;
        $this->container['is_kpok'] = isset($data['is_kpok']) ? $data['is_kpok'] : null;
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
     * Gets keon_item_id
     *
     * @return string
     */
    public function getKeonItemId()
    {
        return $this->container['keon_item_id'];
    }

    /**
     * Sets keon_item_id
     *
     * @param string $keon_item_id Id wpisu keon
     *
     * @return $this
     */
    public function setKeonItemId($keon_item_id)
    {
        $this->container['keon_item_id'] = $keon_item_id;

        return $this;
    }

    /**
     * Gets keon_id
     *
     * @return string
     */
    public function getKeonId()
    {
        return $this->container['keon_id'];
    }

    /**
     * Sets keon_id
     *
     * @param string $keon_id Id karty ewidencji odpadów niebezpiecznych
     *
     * @return $this
     */
    public function setKeonId($keon_id)
    {
        $this->container['keon_id'] = $keon_id;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return string
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param string $company_id Id podmiotu
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets receive_confirmation_time
     *
     * @return \DateTime
     */
    public function getReceiveConfirmationTime()
    {
        return $this->container['receive_confirmation_time'];
    }

    /**
     * Sets receive_confirmation_time
     *
     * @param \DateTime $receive_confirmation_time Data otrzymania potwierdzenia
     *
     * @return $this
     */
    public function setReceiveConfirmationTime($receive_confirmation_time)
    {
        $this->container['receive_confirmation_time'] = $receive_confirmation_time;

        return $this;
    }

    /**
     * Gets document_number
     *
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->container['document_number'];
    }

    /**
     * Sets document_number
     *
     * @param string $document_number Numer dokumentu
     *
     * @return $this
     */
    public function setDocumentNumber($document_number)
    {
        $this->container['document_number'] = $document_number;

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
     * Gets is_dealer
     *
     * @return bool
     */
    public function getIsDealer()
    {
        return $this->container['is_dealer'];
    }

    /**
     * Sets is_dealer
     *
     * @param bool $is_dealer Działalność jako sprzedawca odpadów
     *
     * @return $this
     */
    public function setIsDealer($is_dealer)
    {
        $this->container['is_dealer'] = $is_dealer;

        return $this;
    }

    /**
     * Gets is_broker
     *
     * @return bool
     */
    public function getIsBroker()
    {
        return $this->container['is_broker'];
    }

    /**
     * Sets is_broker
     *
     * @param bool $is_broker Działalność jako pośrednik w obrocie odpadami
     *
     * @return $this
     */
    public function setIsBroker($is_broker)
    {
        $this->container['is_broker'] = $is_broker;

        return $this;
    }

    /**
     * Gets is_kpo
     *
     * @return bool
     */
    public function getIsKpo()
    {
        return $this->container['is_kpo'];
    }

    /**
     * Sets is_kpo
     *
     * @param bool $is_kpo Rodzaj dokumentu karta przekazania odpadów
     *
     * @return $this
     */
    public function setIsKpo($is_kpo)
    {
        $this->container['is_kpo'] = $is_kpo;

        return $this;
    }

    /**
     * Gets is_kpok
     *
     * @return bool
     */
    public function getIsKpok()
    {
        return $this->container['is_kpok'];
    }

    /**
     * Sets is_kpok
     *
     * @param bool $is_kpok Rodzaj dokumentu karta przekazania odpadów komunalnych
     *
     * @return $this
     */
    public function setIsKpok($is_kpok)
    {
        $this->container['is_kpok'] = $is_kpok;

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


