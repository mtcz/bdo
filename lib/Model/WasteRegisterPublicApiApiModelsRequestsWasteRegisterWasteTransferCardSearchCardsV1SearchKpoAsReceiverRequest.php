<?php
/**
 * WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardSearchCardsV1SearchKpoAsReceiverRequest
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
 * WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardSearchCardsV1SearchKpoAsReceiverRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardSearchCardsV1SearchKpoAsReceiverRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Requests.WasteRegister.WasteTransferCard.SearchCards.V1.SearchKpoAsReceiverRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pagination_parameters' => '\Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginationParameters',
        'search_in_carriers' => 'bool',
        'search_in_senders' => 'bool',
        'name' => 'string',
        'locality' => 'string',
        'street' => 'string',
        'nip' => 'string',
        'identification_number' => 'string',
        'waste_code_and_description' => 'string',
        'card_number' => 'string',
        'card_status_code_names' => 'string',
        'transport_time' => '\DateTime',
        'receive_confirmation_time' => '\DateTime',
        'sender_first_name_and_last_name' => 'string',
        'receiver_first_name_and_last_name' => 'string',
        'vehicle_reg_number' => 'string',
        'transport_date_range' => 'bool',
        'transport_date_from' => '\DateTime',
        'transport_date_to' => '\DateTime',
        'receive_confirmation_date_range' => 'bool',
        'receive_confirmation_date_from' => '\DateTime',
        'receive_confirmation_date_to' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pagination_parameters' => null,
        'search_in_carriers' => null,
        'search_in_senders' => null,
        'name' => null,
        'locality' => null,
        'street' => null,
        'nip' => null,
        'identification_number' => null,
        'waste_code_and_description' => null,
        'card_number' => null,
        'card_status_code_names' => null,
        'transport_time' => 'date-time',
        'receive_confirmation_time' => 'date-time',
        'sender_first_name_and_last_name' => null,
        'receiver_first_name_and_last_name' => null,
        'vehicle_reg_number' => null,
        'transport_date_range' => null,
        'transport_date_from' => 'date-time',
        'transport_date_to' => 'date-time',
        'receive_confirmation_date_range' => null,
        'receive_confirmation_date_from' => 'date-time',
        'receive_confirmation_date_to' => 'date-time'
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
        'pagination_parameters' => 'paginationParameters',
        'search_in_carriers' => 'searchInCarriers',
        'search_in_senders' => 'searchInSenders',
        'name' => 'name',
        'locality' => 'locality',
        'street' => 'street',
        'nip' => 'nip',
        'identification_number' => 'identificationNumber',
        'waste_code_and_description' => 'wasteCodeAndDescription',
        'card_number' => 'cardNumber',
        'card_status_code_names' => 'cardStatusCodeNames',
        'transport_time' => 'transportTime',
        'receive_confirmation_time' => 'receiveConfirmationTime',
        'sender_first_name_and_last_name' => 'senderFirstNameAndLastName',
        'receiver_first_name_and_last_name' => 'receiverFirstNameAndLastName',
        'vehicle_reg_number' => 'vehicleRegNumber',
        'transport_date_range' => 'transportDateRange',
        'transport_date_from' => 'transportDateFrom',
        'transport_date_to' => 'transportDateTo',
        'receive_confirmation_date_range' => 'receiveConfirmationDateRange',
        'receive_confirmation_date_from' => 'receiveConfirmationDateFrom',
        'receive_confirmation_date_to' => 'receiveConfirmationDateTo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pagination_parameters' => 'setPaginationParameters',
        'search_in_carriers' => 'setSearchInCarriers',
        'search_in_senders' => 'setSearchInSenders',
        'name' => 'setName',
        'locality' => 'setLocality',
        'street' => 'setStreet',
        'nip' => 'setNip',
        'identification_number' => 'setIdentificationNumber',
        'waste_code_and_description' => 'setWasteCodeAndDescription',
        'card_number' => 'setCardNumber',
        'card_status_code_names' => 'setCardStatusCodeNames',
        'transport_time' => 'setTransportTime',
        'receive_confirmation_time' => 'setReceiveConfirmationTime',
        'sender_first_name_and_last_name' => 'setSenderFirstNameAndLastName',
        'receiver_first_name_and_last_name' => 'setReceiverFirstNameAndLastName',
        'vehicle_reg_number' => 'setVehicleRegNumber',
        'transport_date_range' => 'setTransportDateRange',
        'transport_date_from' => 'setTransportDateFrom',
        'transport_date_to' => 'setTransportDateTo',
        'receive_confirmation_date_range' => 'setReceiveConfirmationDateRange',
        'receive_confirmation_date_from' => 'setReceiveConfirmationDateFrom',
        'receive_confirmation_date_to' => 'setReceiveConfirmationDateTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pagination_parameters' => 'getPaginationParameters',
        'search_in_carriers' => 'getSearchInCarriers',
        'search_in_senders' => 'getSearchInSenders',
        'name' => 'getName',
        'locality' => 'getLocality',
        'street' => 'getStreet',
        'nip' => 'getNip',
        'identification_number' => 'getIdentificationNumber',
        'waste_code_and_description' => 'getWasteCodeAndDescription',
        'card_number' => 'getCardNumber',
        'card_status_code_names' => 'getCardStatusCodeNames',
        'transport_time' => 'getTransportTime',
        'receive_confirmation_time' => 'getReceiveConfirmationTime',
        'sender_first_name_and_last_name' => 'getSenderFirstNameAndLastName',
        'receiver_first_name_and_last_name' => 'getReceiverFirstNameAndLastName',
        'vehicle_reg_number' => 'getVehicleRegNumber',
        'transport_date_range' => 'getTransportDateRange',
        'transport_date_from' => 'getTransportDateFrom',
        'transport_date_to' => 'getTransportDateTo',
        'receive_confirmation_date_range' => 'getReceiveConfirmationDateRange',
        'receive_confirmation_date_from' => 'getReceiveConfirmationDateFrom',
        'receive_confirmation_date_to' => 'getReceiveConfirmationDateTo'
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
        $this->container['pagination_parameters'] = isset($data['pagination_parameters']) ? $data['pagination_parameters'] : null;
        $this->container['search_in_carriers'] = isset($data['search_in_carriers']) ? $data['search_in_carriers'] : null;
        $this->container['search_in_senders'] = isset($data['search_in_senders']) ? $data['search_in_senders'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['nip'] = isset($data['nip']) ? $data['nip'] : null;
        $this->container['identification_number'] = isset($data['identification_number']) ? $data['identification_number'] : null;
        $this->container['waste_code_and_description'] = isset($data['waste_code_and_description']) ? $data['waste_code_and_description'] : null;
        $this->container['card_number'] = isset($data['card_number']) ? $data['card_number'] : null;
        $this->container['card_status_code_names'] = isset($data['card_status_code_names']) ? $data['card_status_code_names'] : null;
        $this->container['transport_time'] = isset($data['transport_time']) ? $data['transport_time'] : null;
        $this->container['receive_confirmation_time'] = isset($data['receive_confirmation_time']) ? $data['receive_confirmation_time'] : null;
        $this->container['sender_first_name_and_last_name'] = isset($data['sender_first_name_and_last_name']) ? $data['sender_first_name_and_last_name'] : null;
        $this->container['receiver_first_name_and_last_name'] = isset($data['receiver_first_name_and_last_name']) ? $data['receiver_first_name_and_last_name'] : null;
        $this->container['vehicle_reg_number'] = isset($data['vehicle_reg_number']) ? $data['vehicle_reg_number'] : null;
        $this->container['transport_date_range'] = isset($data['transport_date_range']) ? $data['transport_date_range'] : null;
        $this->container['transport_date_from'] = isset($data['transport_date_from']) ? $data['transport_date_from'] : null;
        $this->container['transport_date_to'] = isset($data['transport_date_to']) ? $data['transport_date_to'] : null;
        $this->container['receive_confirmation_date_range'] = isset($data['receive_confirmation_date_range']) ? $data['receive_confirmation_date_range'] : null;
        $this->container['receive_confirmation_date_from'] = isset($data['receive_confirmation_date_from']) ? $data['receive_confirmation_date_from'] : null;
        $this->container['receive_confirmation_date_to'] = isset($data['receive_confirmation_date_to']) ? $data['receive_confirmation_date_to'] : null;
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
     * Gets pagination_parameters
     *
     * @return \Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginationParameters
     */
    public function getPaginationParameters()
    {
        return $this->container['pagination_parameters'];
    }

    /**
     * Sets pagination_parameters
     *
     * @param \Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginationParameters $pagination_parameters Parametry paginacji
     *
     * @return $this
     */
    public function setPaginationParameters($pagination_parameters)
    {
        $this->container['pagination_parameters'] = $pagination_parameters;

        return $this;
    }

    /**
     * Gets search_in_carriers
     *
     * @return bool
     */
    public function getSearchInCarriers()
    {
        return $this->container['search_in_carriers'];
    }

    /**
     * Sets search_in_carriers
     *
     * @param bool $search_in_carriers Flaga ustawiana na true, jeśli wyszukiwanie ma się odbyć w kontekście transportującego
     *
     * @return $this
     */
    public function setSearchInCarriers($search_in_carriers)
    {
        $this->container['search_in_carriers'] = $search_in_carriers;

        return $this;
    }

    /**
     * Gets search_in_senders
     *
     * @return bool
     */
    public function getSearchInSenders()
    {
        return $this->container['search_in_senders'];
    }

    /**
     * Sets search_in_senders
     *
     * @param bool $search_in_senders Flaga ustawiana na true, jeśli wyszukiwanie ma się odbyć w kontekście przekazującego
     *
     * @return $this
     */
    public function setSearchInSenders($search_in_senders)
    {
        $this->container['search_in_senders'] = $search_in_senders;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Nazwa podmiotu
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets locality
     *
     * @return string
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     *
     * @param string $locality Miejscowość
     *
     * @return $this
     */
    public function setLocality($locality)
    {
        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street Ulica
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets nip
     *
     * @return string
     */
    public function getNip()
    {
        return $this->container['nip'];
    }

    /**
     * Sets nip
     *
     * @param string $nip NIP
     *
     * @return $this
     */
    public function setNip($nip)
    {
        $this->container['nip'] = $nip;

        return $this;
    }

    /**
     * Gets identification_number
     *
     * @return string
     */
    public function getIdentificationNumber()
    {
        return $this->container['identification_number'];
    }

    /**
     * Sets identification_number
     *
     * @param string $identification_number Numer identyfikacyjny podmiotu
     *
     * @return $this
     */
    public function setIdentificationNumber($identification_number)
    {
        $this->container['identification_number'] = $identification_number;

        return $this;
    }

    /**
     * Gets waste_code_and_description
     *
     * @return string
     */
    public function getWasteCodeAndDescription()
    {
        return $this->container['waste_code_and_description'];
    }

    /**
     * Sets waste_code_and_description
     *
     * @param string $waste_code_and_description Kod odpadu
     *
     * @return $this
     */
    public function setWasteCodeAndDescription($waste_code_and_description)
    {
        $this->container['waste_code_and_description'] = $waste_code_and_description;

        return $this;
    }

    /**
     * Gets card_number
     *
     * @return string
     */
    public function getCardNumber()
    {
        return $this->container['card_number'];
    }

    /**
     * Sets card_number
     *
     * @param string $card_number Numer karty
     *
     * @return $this
     */
    public function setCardNumber($card_number)
    {
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets card_status_code_names
     *
     * @return string
     */
    public function getCardStatusCodeNames()
    {
        return $this->container['card_status_code_names'];
    }

    /**
     * Sets card_status_code_names
     *
     * @param string $card_status_code_names Codename statusu karty
     *
     * @return $this
     */
    public function setCardStatusCodeNames($card_status_code_names)
    {
        $this->container['card_status_code_names'] = $card_status_code_names;

        return $this;
    }

    /**
     * Gets transport_time
     *
     * @return \DateTime
     */
    public function getTransportTime()
    {
        return $this->container['transport_time'];
    }

    /**
     * Sets transport_time
     *
     * @param \DateTime $transport_time Data rozpoczęcia transportu
     *
     * @return $this
     */
    public function setTransportTime($transport_time)
    {
        $this->container['transport_time'] = $transport_time;

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
     * @param \DateTime $receive_confirmation_time Data przejęcia
     *
     * @return $this
     */
    public function setReceiveConfirmationTime($receive_confirmation_time)
    {
        $this->container['receive_confirmation_time'] = $receive_confirmation_time;

        return $this;
    }

    /**
     * Gets sender_first_name_and_last_name
     *
     * @return string
     */
    public function getSenderFirstNameAndLastName()
    {
        return $this->container['sender_first_name_and_last_name'];
    }

    /**
     * Sets sender_first_name_and_last_name
     *
     * @param string $sender_first_name_and_last_name Imię i nazwisko wystawiającego
     *
     * @return $this
     */
    public function setSenderFirstNameAndLastName($sender_first_name_and_last_name)
    {
        $this->container['sender_first_name_and_last_name'] = $sender_first_name_and_last_name;

        return $this;
    }

    /**
     * Gets receiver_first_name_and_last_name
     *
     * @return string
     */
    public function getReceiverFirstNameAndLastName()
    {
        return $this->container['receiver_first_name_and_last_name'];
    }

    /**
     * Sets receiver_first_name_and_last_name
     *
     * @param string $receiver_first_name_and_last_name Imię i nazwisko przejmującego
     *
     * @return $this
     */
    public function setReceiverFirstNameAndLastName($receiver_first_name_and_last_name)
    {
        $this->container['receiver_first_name_and_last_name'] = $receiver_first_name_and_last_name;

        return $this;
    }

    /**
     * Gets vehicle_reg_number
     *
     * @return string
     */
    public function getVehicleRegNumber()
    {
        return $this->container['vehicle_reg_number'];
    }

    /**
     * Sets vehicle_reg_number
     *
     * @param string $vehicle_reg_number Numer rejestracyjny środka transportu
     *
     * @return $this
     */
    public function setVehicleRegNumber($vehicle_reg_number)
    {
        $this->container['vehicle_reg_number'] = $vehicle_reg_number;

        return $this;
    }

    /**
     * Gets transport_date_range
     *
     * @return bool
     */
    public function getTransportDateRange()
    {
        return $this->container['transport_date_range'];
    }

    /**
     * Sets transport_date_range
     *
     * @param bool $transport_date_range 
     *
     * @return $this
     */
    public function setTransportDateRange($transport_date_range)
    {
        $this->container['transport_date_range'] = $transport_date_range;

        return $this;
    }

    /**
     * Gets transport_date_from
     *
     * @return \DateTime
     */
    public function getTransportDateFrom()
    {
        return $this->container['transport_date_from'];
    }

    /**
     * Sets transport_date_from
     *
     * @param \DateTime $transport_date_from 
     *
     * @return $this
     */
    public function setTransportDateFrom($transport_date_from)
    {
        $this->container['transport_date_from'] = $transport_date_from;

        return $this;
    }

    /**
     * Gets transport_date_to
     *
     * @return \DateTime
     */
    public function getTransportDateTo()
    {
        return $this->container['transport_date_to'];
    }

    /**
     * Sets transport_date_to
     *
     * @param \DateTime $transport_date_to 
     *
     * @return $this
     */
    public function setTransportDateTo($transport_date_to)
    {
        $this->container['transport_date_to'] = $transport_date_to;

        return $this;
    }

    /**
     * Gets receive_confirmation_date_range
     *
     * @return bool
     */
    public function getReceiveConfirmationDateRange()
    {
        return $this->container['receive_confirmation_date_range'];
    }

    /**
     * Sets receive_confirmation_date_range
     *
     * @param bool $receive_confirmation_date_range 
     *
     * @return $this
     */
    public function setReceiveConfirmationDateRange($receive_confirmation_date_range)
    {
        $this->container['receive_confirmation_date_range'] = $receive_confirmation_date_range;

        return $this;
    }

    /**
     * Gets receive_confirmation_date_from
     *
     * @return \DateTime
     */
    public function getReceiveConfirmationDateFrom()
    {
        return $this->container['receive_confirmation_date_from'];
    }

    /**
     * Sets receive_confirmation_date_from
     *
     * @param \DateTime $receive_confirmation_date_from 
     *
     * @return $this
     */
    public function setReceiveConfirmationDateFrom($receive_confirmation_date_from)
    {
        $this->container['receive_confirmation_date_from'] = $receive_confirmation_date_from;

        return $this;
    }

    /**
     * Gets receive_confirmation_date_to
     *
     * @return \DateTime
     */
    public function getReceiveConfirmationDateTo()
    {
        return $this->container['receive_confirmation_date_to'];
    }

    /**
     * Sets receive_confirmation_date_to
     *
     * @param \DateTime $receive_confirmation_date_to 
     *
     * @return $this
     */
    public function setReceiveConfirmationDateTo($receive_confirmation_date_to)
    {
        $this->container['receive_confirmation_date_to'] = $receive_confirmation_date_to;

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


