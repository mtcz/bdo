<?php
/**
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1SearchKeonItemResultDto
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
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1SearchKeonItemResultDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1SearchKeonItemResultDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Responses.WasteRegister.HazardousWasteRecordCard.V1.SearchKeonItemResultDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'keon_item_id' => 'string',
        'receive_confirmation_time' => '\DateTime',
        'document_number' => 'string',
        'waste_mass' => 'double',
        'is_dealer' => 'bool',
        'is_broker' => 'bool',
        'created_at' => '\DateTime',
        'created_by_user_first_name_and_last_name' => 'string',
        'sender_company_name' => 'string',
        'sender_company_identification_number' => 'string',
        'sender_company_address' => 'string',
        'receiver_company_identification_number' => 'string',
        'receiver_company_address' => 'string',
        'receiver_company_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'keon_item_id' => 'uuid',
        'receive_confirmation_time' => 'date-time',
        'document_number' => null,
        'waste_mass' => 'double',
        'is_dealer' => null,
        'is_broker' => null,
        'created_at' => 'date-time',
        'created_by_user_first_name_and_last_name' => null,
        'sender_company_name' => null,
        'sender_company_identification_number' => null,
        'sender_company_address' => null,
        'receiver_company_identification_number' => null,
        'receiver_company_address' => null,
        'receiver_company_name' => null
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
        'receive_confirmation_time' => 'receiveConfirmationTime',
        'document_number' => 'documentNumber',
        'waste_mass' => 'wasteMass',
        'is_dealer' => 'isDealer',
        'is_broker' => 'isBroker',
        'created_at' => 'createdAt',
        'created_by_user_first_name_and_last_name' => 'createdByUserFirstNameAndLastName',
        'sender_company_name' => 'senderCompanyName',
        'sender_company_identification_number' => 'senderCompanyIdentificationNumber',
        'sender_company_address' => 'senderCompanyAddress',
        'receiver_company_identification_number' => 'receiverCompanyIdentificationNumber',
        'receiver_company_address' => 'receiverCompanyAddress',
        'receiver_company_name' => 'receiverCompanyName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'keon_item_id' => 'setKeonItemId',
        'receive_confirmation_time' => 'setReceiveConfirmationTime',
        'document_number' => 'setDocumentNumber',
        'waste_mass' => 'setWasteMass',
        'is_dealer' => 'setIsDealer',
        'is_broker' => 'setIsBroker',
        'created_at' => 'setCreatedAt',
        'created_by_user_first_name_and_last_name' => 'setCreatedByUserFirstNameAndLastName',
        'sender_company_name' => 'setSenderCompanyName',
        'sender_company_identification_number' => 'setSenderCompanyIdentificationNumber',
        'sender_company_address' => 'setSenderCompanyAddress',
        'receiver_company_identification_number' => 'setReceiverCompanyIdentificationNumber',
        'receiver_company_address' => 'setReceiverCompanyAddress',
        'receiver_company_name' => 'setReceiverCompanyName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'keon_item_id' => 'getKeonItemId',
        'receive_confirmation_time' => 'getReceiveConfirmationTime',
        'document_number' => 'getDocumentNumber',
        'waste_mass' => 'getWasteMass',
        'is_dealer' => 'getIsDealer',
        'is_broker' => 'getIsBroker',
        'created_at' => 'getCreatedAt',
        'created_by_user_first_name_and_last_name' => 'getCreatedByUserFirstNameAndLastName',
        'sender_company_name' => 'getSenderCompanyName',
        'sender_company_identification_number' => 'getSenderCompanyIdentificationNumber',
        'sender_company_address' => 'getSenderCompanyAddress',
        'receiver_company_identification_number' => 'getReceiverCompanyIdentificationNumber',
        'receiver_company_address' => 'getReceiverCompanyAddress',
        'receiver_company_name' => 'getReceiverCompanyName'
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
        $this->container['receive_confirmation_time'] = isset($data['receive_confirmation_time']) ? $data['receive_confirmation_time'] : null;
        $this->container['document_number'] = isset($data['document_number']) ? $data['document_number'] : null;
        $this->container['waste_mass'] = isset($data['waste_mass']) ? $data['waste_mass'] : null;
        $this->container['is_dealer'] = isset($data['is_dealer']) ? $data['is_dealer'] : null;
        $this->container['is_broker'] = isset($data['is_broker']) ? $data['is_broker'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['created_by_user_first_name_and_last_name'] = isset($data['created_by_user_first_name_and_last_name']) ? $data['created_by_user_first_name_and_last_name'] : null;
        $this->container['sender_company_name'] = isset($data['sender_company_name']) ? $data['sender_company_name'] : null;
        $this->container['sender_company_identification_number'] = isset($data['sender_company_identification_number']) ? $data['sender_company_identification_number'] : null;
        $this->container['sender_company_address'] = isset($data['sender_company_address']) ? $data['sender_company_address'] : null;
        $this->container['receiver_company_identification_number'] = isset($data['receiver_company_identification_number']) ? $data['receiver_company_identification_number'] : null;
        $this->container['receiver_company_address'] = isset($data['receiver_company_address']) ? $data['receiver_company_address'] : null;
        $this->container['receiver_company_name'] = isset($data['receiver_company_name']) ? $data['receiver_company_name'] : null;
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
     * @param double $waste_mass Masa odpad??w
     *
     * @return $this
     */
    public function setWasteMass($waste_mass)
    {
        $this->container['waste_mass'] = $waste_mass;

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
     * @param bool $is_dealer Dzia??alno???? jako sprzedawca odpad??w
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
     * @param bool $is_broker Dzia??alno???? jako po??rednik w obrocie odpadami
     *
     * @return $this
     */
    public function setIsBroker($is_broker)
    {
        $this->container['is_broker'] = $is_broker;

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
     * Gets created_by_user_first_name_and_last_name
     *
     * @return string
     */
    public function getCreatedByUserFirstNameAndLastName()
    {
        return $this->container['created_by_user_first_name_and_last_name'];
    }

    /**
     * Sets created_by_user_first_name_and_last_name
     *
     * @param string $created_by_user_first_name_and_last_name Imi?? i nazwisko u??ytkownika tworz??cego kart??
     *
     * @return $this
     */
    public function setCreatedByUserFirstNameAndLastName($created_by_user_first_name_and_last_name)
    {
        $this->container['created_by_user_first_name_and_last_name'] = $created_by_user_first_name_and_last_name;

        return $this;
    }

    /**
     * Gets sender_company_name
     *
     * @return string
     */
    public function getSenderCompanyName()
    {
        return $this->container['sender_company_name'];
    }

    /**
     * Sets sender_company_name
     *
     * @param string $sender_company_name Nazwa podmiotu przekazuj??cego
     *
     * @return $this
     */
    public function setSenderCompanyName($sender_company_name)
    {
        $this->container['sender_company_name'] = $sender_company_name;

        return $this;
    }

    /**
     * Gets sender_company_identification_number
     *
     * @return string
     */
    public function getSenderCompanyIdentificationNumber()
    {
        return $this->container['sender_company_identification_number'];
    }

    /**
     * Sets sender_company_identification_number
     *
     * @param string $sender_company_identification_number 
     *
     * @return $this
     */
    public function setSenderCompanyIdentificationNumber($sender_company_identification_number)
    {
        $this->container['sender_company_identification_number'] = $sender_company_identification_number;

        return $this;
    }

    /**
     * Gets sender_company_address
     *
     * @return string
     */
    public function getSenderCompanyAddress()
    {
        return $this->container['sender_company_address'];
    }

    /**
     * Sets sender_company_address
     *
     * @param string $sender_company_address 
     *
     * @return $this
     */
    public function setSenderCompanyAddress($sender_company_address)
    {
        $this->container['sender_company_address'] = $sender_company_address;

        return $this;
    }

    /**
     * Gets receiver_company_identification_number
     *
     * @return string
     */
    public function getReceiverCompanyIdentificationNumber()
    {
        return $this->container['receiver_company_identification_number'];
    }

    /**
     * Sets receiver_company_identification_number
     *
     * @param string $receiver_company_identification_number 
     *
     * @return $this
     */
    public function setReceiverCompanyIdentificationNumber($receiver_company_identification_number)
    {
        $this->container['receiver_company_identification_number'] = $receiver_company_identification_number;

        return $this;
    }

    /**
     * Gets receiver_company_address
     *
     * @return string
     */
    public function getReceiverCompanyAddress()
    {
        return $this->container['receiver_company_address'];
    }

    /**
     * Sets receiver_company_address
     *
     * @param string $receiver_company_address 
     *
     * @return $this
     */
    public function setReceiverCompanyAddress($receiver_company_address)
    {
        $this->container['receiver_company_address'] = $receiver_company_address;

        return $this;
    }

    /**
     * Gets receiver_company_name
     *
     * @return string
     */
    public function getReceiverCompanyName()
    {
        return $this->container['receiver_company_name'];
    }

    /**
     * Sets receiver_company_name
     *
     * @param string $receiver_company_name Nazwa podmiotu przejmuj??cego
     *
     * @return $this
     */
    public function setReceiverCompanyName($receiver_company_name)
    {
        $this->container['receiver_company_name'] = $receiver_company_name;

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


