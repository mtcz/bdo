<?php
/**
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoForwardedListItem
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
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoForwardedListItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoForwardedListItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Responses.WasteRegister.WasteRecordCard.V1.KeoForwardedListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'keo_forwarded_id' => 'string',
        'waste_collection_date' => '\DateTime',
        'waste_mass' => 'double',
        'card_number_kpo' => 'string',
        'based_on_kpo' => 'bool',
        'transfer_abroad' => 'bool',
        'transfer_to_natural_persons' => 'bool',
        'owner_exempt_from_records' => 'bool',
        'transport_date' => '\DateTime',
        'created_by_user' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'keo_forwarded_id' => 'uuid',
        'waste_collection_date' => 'date-time',
        'waste_mass' => 'double',
        'card_number_kpo' => null,
        'based_on_kpo' => null,
        'transfer_abroad' => null,
        'transfer_to_natural_persons' => null,
        'owner_exempt_from_records' => null,
        'transport_date' => 'date-time',
        'created_by_user' => null
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
        'keo_forwarded_id' => 'keoForwardedId',
        'waste_collection_date' => 'wasteCollectionDate',
        'waste_mass' => 'wasteMass',
        'card_number_kpo' => 'cardNumberKpo',
        'based_on_kpo' => 'basedOnKpo',
        'transfer_abroad' => 'transferAbroad',
        'transfer_to_natural_persons' => 'transferToNaturalPersons',
        'owner_exempt_from_records' => 'ownerExemptFromRecords',
        'transport_date' => 'transportDate',
        'created_by_user' => 'createdByUser'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'keo_forwarded_id' => 'setKeoForwardedId',
        'waste_collection_date' => 'setWasteCollectionDate',
        'waste_mass' => 'setWasteMass',
        'card_number_kpo' => 'setCardNumberKpo',
        'based_on_kpo' => 'setBasedOnKpo',
        'transfer_abroad' => 'setTransferAbroad',
        'transfer_to_natural_persons' => 'setTransferToNaturalPersons',
        'owner_exempt_from_records' => 'setOwnerExemptFromRecords',
        'transport_date' => 'setTransportDate',
        'created_by_user' => 'setCreatedByUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'keo_forwarded_id' => 'getKeoForwardedId',
        'waste_collection_date' => 'getWasteCollectionDate',
        'waste_mass' => 'getWasteMass',
        'card_number_kpo' => 'getCardNumberKpo',
        'based_on_kpo' => 'getBasedOnKpo',
        'transfer_abroad' => 'getTransferAbroad',
        'transfer_to_natural_persons' => 'getTransferToNaturalPersons',
        'owner_exempt_from_records' => 'getOwnerExemptFromRecords',
        'transport_date' => 'getTransportDate',
        'created_by_user' => 'getCreatedByUser'
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
        $this->container['keo_forwarded_id'] = isset($data['keo_forwarded_id']) ? $data['keo_forwarded_id'] : null;
        $this->container['waste_collection_date'] = isset($data['waste_collection_date']) ? $data['waste_collection_date'] : null;
        $this->container['waste_mass'] = isset($data['waste_mass']) ? $data['waste_mass'] : null;
        $this->container['card_number_kpo'] = isset($data['card_number_kpo']) ? $data['card_number_kpo'] : null;
        $this->container['based_on_kpo'] = isset($data['based_on_kpo']) ? $data['based_on_kpo'] : null;
        $this->container['transfer_abroad'] = isset($data['transfer_abroad']) ? $data['transfer_abroad'] : null;
        $this->container['transfer_to_natural_persons'] = isset($data['transfer_to_natural_persons']) ? $data['transfer_to_natural_persons'] : null;
        $this->container['owner_exempt_from_records'] = isset($data['owner_exempt_from_records']) ? $data['owner_exempt_from_records'] : null;
        $this->container['transport_date'] = isset($data['transport_date']) ? $data['transport_date'] : null;
        $this->container['created_by_user'] = isset($data['created_by_user']) ? $data['created_by_user'] : null;
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
     * Gets keo_forwarded_id
     *
     * @return string
     */
    public function getKeoForwardedId()
    {
        return $this->container['keo_forwarded_id'];
    }

    /**
     * Sets keo_forwarded_id
     *
     * @param string $keo_forwarded_id Id wpisu Przekazane odpady
     *
     * @return $this
     */
    public function setKeoForwardedId($keo_forwarded_id)
    {
        $this->container['keo_forwarded_id'] = $keo_forwarded_id;

        return $this;
    }

    /**
     * Gets waste_collection_date
     *
     * @return \DateTime
     */
    public function getWasteCollectionDate()
    {
        return $this->container['waste_collection_date'];
    }

    /**
     * Sets waste_collection_date
     *
     * @param \DateTime $waste_collection_date 
     *
     * @return $this
     */
    public function setWasteCollectionDate($waste_collection_date)
    {
        $this->container['waste_collection_date'] = $waste_collection_date;

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
     * Gets card_number_kpo
     *
     * @return string
     */
    public function getCardNumberKpo()
    {
        return $this->container['card_number_kpo'];
    }

    /**
     * Sets card_number_kpo
     *
     * @param string $card_number_kpo Numer karty kpo
     *
     * @return $this
     */
    public function setCardNumberKpo($card_number_kpo)
    {
        $this->container['card_number_kpo'] = $card_number_kpo;

        return $this;
    }

    /**
     * Gets based_on_kpo
     *
     * @return bool
     */
    public function getBasedOnKpo()
    {
        return $this->container['based_on_kpo'];
    }

    /**
     * Sets based_on_kpo
     *
     * @param bool $based_on_kpo Wpis dokonywany na podstawie karty przekazania odpadów
     *
     * @return $this
     */
    public function setBasedOnKpo($based_on_kpo)
    {
        $this->container['based_on_kpo'] = $based_on_kpo;

        return $this;
    }

    /**
     * Gets transfer_abroad
     *
     * @return bool
     */
    public function getTransferAbroad()
    {
        return $this->container['transfer_abroad'];
    }

    /**
     * Sets transfer_abroad
     *
     * @param bool $transfer_abroad Wywóz poza RP
     *
     * @return $this
     */
    public function setTransferAbroad($transfer_abroad)
    {
        $this->container['transfer_abroad'] = $transfer_abroad;

        return $this;
    }

    /**
     * Gets transfer_to_natural_persons
     *
     * @return bool
     */
    public function getTransferToNaturalPersons()
    {
        return $this->container['transfer_to_natural_persons'];
    }

    /**
     * Sets transfer_to_natural_persons
     *
     * @param bool $transfer_to_natural_persons Przekazane osobom fizycznym lub innym jednostkom organizacyjnym niebędącym przedsiębiorcami
     *
     * @return $this
     */
    public function setTransferToNaturalPersons($transfer_to_natural_persons)
    {
        $this->container['transfer_to_natural_persons'] = $transfer_to_natural_persons;

        return $this;
    }

    /**
     * Gets owner_exempt_from_records
     *
     * @return bool
     */
    public function getOwnerExemptFromRecords()
    {
        return $this->container['owner_exempt_from_records'];
    }

    /**
     * Sets owner_exempt_from_records
     *
     * @param bool $owner_exempt_from_records Posiadacz odpadów zwolniony z obowiązku prowadzenia ewidencji odpadów
     *
     * @return $this
     */
    public function setOwnerExemptFromRecords($owner_exempt_from_records)
    {
        $this->container['owner_exempt_from_records'] = $owner_exempt_from_records;

        return $this;
    }

    /**
     * Gets transport_date
     *
     * @return \DateTime
     */
    public function getTransportDate()
    {
        return $this->container['transport_date'];
    }

    /**
     * Sets transport_date
     *
     * @param \DateTime $transport_date 
     *
     * @return $this
     */
    public function setTransportDate($transport_date)
    {
        $this->container['transport_date'] = $transport_date;

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


