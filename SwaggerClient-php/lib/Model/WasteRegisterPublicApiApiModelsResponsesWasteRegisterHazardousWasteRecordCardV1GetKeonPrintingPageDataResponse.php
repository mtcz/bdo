<?php
/**
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1GetKeonPrintingPageDataResponse
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
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1GetKeonPrintingPageDataResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1GetKeonPrintingPageDataResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Responses.WasteRegister.HazardousWasteRecordCard.V1.GetKeonPrintingPageDataResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'card_number' => 'string',
        'calendar_year' => 'string',
        'waste_code_and_description' => 'string',
        'waste_code_extended' => 'bool',
        'waste_code_extended_description' => 'string',
        'hazardous_waste_reclassification' => 'bool',
        'hazardous_waste_reclassification_description' => 'string',
        'company_name' => 'string',
        'identification_number' => 'string',
        'nip' => 'string',
        'nip_eu' => 'string',
        'address' => 'string',
        'total_dealer_waste_mass' => 'string',
        'total_broker_waste_mass' => 'string',
        'keon_printing_page_dealer_items' => '\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1KeonPrintingPageRowDto[]',
        'keon_printing_page_broker_items' => '\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1KeonPrintingPageRowDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'card_number' => null,
        'calendar_year' => null,
        'waste_code_and_description' => null,
        'waste_code_extended' => null,
        'waste_code_extended_description' => null,
        'hazardous_waste_reclassification' => null,
        'hazardous_waste_reclassification_description' => null,
        'company_name' => null,
        'identification_number' => null,
        'nip' => null,
        'nip_eu' => null,
        'address' => null,
        'total_dealer_waste_mass' => null,
        'total_broker_waste_mass' => null,
        'keon_printing_page_dealer_items' => null,
        'keon_printing_page_broker_items' => null
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
        'card_number' => 'cardNumber',
        'calendar_year' => 'calendarYear',
        'waste_code_and_description' => 'wasteCodeAndDescription',
        'waste_code_extended' => 'wasteCodeExtended',
        'waste_code_extended_description' => 'wasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'hazardousWasteReclassification',
        'hazardous_waste_reclassification_description' => 'hazardousWasteReclassificationDescription',
        'company_name' => 'companyName',
        'identification_number' => 'identificationNumber',
        'nip' => 'nip',
        'nip_eu' => 'nipEu',
        'address' => 'address',
        'total_dealer_waste_mass' => 'totalDealerWasteMass',
        'total_broker_waste_mass' => 'totalBrokerWasteMass',
        'keon_printing_page_dealer_items' => 'keonPrintingPageDealerItems',
        'keon_printing_page_broker_items' => 'keonPrintingPageBrokerItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'card_number' => 'setCardNumber',
        'calendar_year' => 'setCalendarYear',
        'waste_code_and_description' => 'setWasteCodeAndDescription',
        'waste_code_extended' => 'setWasteCodeExtended',
        'waste_code_extended_description' => 'setWasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'setHazardousWasteReclassification',
        'hazardous_waste_reclassification_description' => 'setHazardousWasteReclassificationDescription',
        'company_name' => 'setCompanyName',
        'identification_number' => 'setIdentificationNumber',
        'nip' => 'setNip',
        'nip_eu' => 'setNipEu',
        'address' => 'setAddress',
        'total_dealer_waste_mass' => 'setTotalDealerWasteMass',
        'total_broker_waste_mass' => 'setTotalBrokerWasteMass',
        'keon_printing_page_dealer_items' => 'setKeonPrintingPageDealerItems',
        'keon_printing_page_broker_items' => 'setKeonPrintingPageBrokerItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'card_number' => 'getCardNumber',
        'calendar_year' => 'getCalendarYear',
        'waste_code_and_description' => 'getWasteCodeAndDescription',
        'waste_code_extended' => 'getWasteCodeExtended',
        'waste_code_extended_description' => 'getWasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'getHazardousWasteReclassification',
        'hazardous_waste_reclassification_description' => 'getHazardousWasteReclassificationDescription',
        'company_name' => 'getCompanyName',
        'identification_number' => 'getIdentificationNumber',
        'nip' => 'getNip',
        'nip_eu' => 'getNipEu',
        'address' => 'getAddress',
        'total_dealer_waste_mass' => 'getTotalDealerWasteMass',
        'total_broker_waste_mass' => 'getTotalBrokerWasteMass',
        'keon_printing_page_dealer_items' => 'getKeonPrintingPageDealerItems',
        'keon_printing_page_broker_items' => 'getKeonPrintingPageBrokerItems'
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
        $this->container['card_number'] = isset($data['card_number']) ? $data['card_number'] : null;
        $this->container['calendar_year'] = isset($data['calendar_year']) ? $data['calendar_year'] : null;
        $this->container['waste_code_and_description'] = isset($data['waste_code_and_description']) ? $data['waste_code_and_description'] : null;
        $this->container['waste_code_extended'] = isset($data['waste_code_extended']) ? $data['waste_code_extended'] : null;
        $this->container['waste_code_extended_description'] = isset($data['waste_code_extended_description']) ? $data['waste_code_extended_description'] : null;
        $this->container['hazardous_waste_reclassification'] = isset($data['hazardous_waste_reclassification']) ? $data['hazardous_waste_reclassification'] : null;
        $this->container['hazardous_waste_reclassification_description'] = isset($data['hazardous_waste_reclassification_description']) ? $data['hazardous_waste_reclassification_description'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['identification_number'] = isset($data['identification_number']) ? $data['identification_number'] : null;
        $this->container['nip'] = isset($data['nip']) ? $data['nip'] : null;
        $this->container['nip_eu'] = isset($data['nip_eu']) ? $data['nip_eu'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['total_dealer_waste_mass'] = isset($data['total_dealer_waste_mass']) ? $data['total_dealer_waste_mass'] : null;
        $this->container['total_broker_waste_mass'] = isset($data['total_broker_waste_mass']) ? $data['total_broker_waste_mass'] : null;
        $this->container['keon_printing_page_dealer_items'] = isset($data['keon_printing_page_dealer_items']) ? $data['keon_printing_page_dealer_items'] : null;
        $this->container['keon_printing_page_broker_items'] = isset($data['keon_printing_page_broker_items']) ? $data['keon_printing_page_broker_items'] : null;
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
     * Gets calendar_year
     *
     * @return string
     */
    public function getCalendarYear()
    {
        return $this->container['calendar_year'];
    }

    /**
     * Sets calendar_year
     *
     * @param string $calendar_year Rok kalendarzowy
     *
     * @return $this
     */
    public function setCalendarYear($calendar_year)
    {
        $this->container['calendar_year'] = $calendar_year;

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
     * @param string $waste_code_and_description Kod i opis odpadu
     *
     * @return $this
     */
    public function setWasteCodeAndDescription($waste_code_and_description)
    {
        $this->container['waste_code_and_description'] = $waste_code_and_description;

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
     * @param bool $hazardous_waste_reclassification Zmiana statusu odpad??w niebezpiecznych na odpady inne ni?? niebezpieczne
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
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name Nazwa lub imi?? i nazwisko
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

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
     * @param string $identification_number Numer rejestrowy
     *
     * @return $this
     */
    public function setIdentificationNumber($identification_number)
    {
        $this->container['identification_number'] = $identification_number;

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
     * Gets nip_eu
     *
     * @return string
     */
    public function getNipEu()
    {
        return $this->container['nip_eu'];
    }

    /**
     * Sets nip_eu
     *
     * @param string $nip_eu 
     *
     * @return $this
     */
    public function setNipEu($nip_eu)
    {
        $this->container['nip_eu'] = $nip_eu;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address 
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets total_dealer_waste_mass
     *
     * @return string
     */
    public function getTotalDealerWasteMass()
    {
        return $this->container['total_dealer_waste_mass'];
    }

    /**
     * Sets total_dealer_waste_mass
     *
     * @param string $total_dealer_waste_mass 
     *
     * @return $this
     */
    public function setTotalDealerWasteMass($total_dealer_waste_mass)
    {
        $this->container['total_dealer_waste_mass'] = $total_dealer_waste_mass;

        return $this;
    }

    /**
     * Gets total_broker_waste_mass
     *
     * @return string
     */
    public function getTotalBrokerWasteMass()
    {
        return $this->container['total_broker_waste_mass'];
    }

    /**
     * Sets total_broker_waste_mass
     *
     * @param string $total_broker_waste_mass 
     *
     * @return $this
     */
    public function setTotalBrokerWasteMass($total_broker_waste_mass)
    {
        $this->container['total_broker_waste_mass'] = $total_broker_waste_mass;

        return $this;
    }

    /**
     * Gets keon_printing_page_dealer_items
     *
     * @return \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1KeonPrintingPageRowDto[]
     */
    public function getKeonPrintingPageDealerItems()
    {
        return $this->container['keon_printing_page_dealer_items'];
    }

    /**
     * Sets keon_printing_page_dealer_items
     *
     * @param \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1KeonPrintingPageRowDto[] $keon_printing_page_dealer_items 
     *
     * @return $this
     */
    public function setKeonPrintingPageDealerItems($keon_printing_page_dealer_items)
    {
        $this->container['keon_printing_page_dealer_items'] = $keon_printing_page_dealer_items;

        return $this;
    }

    /**
     * Gets keon_printing_page_broker_items
     *
     * @return \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1KeonPrintingPageRowDto[]
     */
    public function getKeonPrintingPageBrokerItems()
    {
        return $this->container['keon_printing_page_broker_items'];
    }

    /**
     * Sets keon_printing_page_broker_items
     *
     * @param \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1KeonPrintingPageRowDto[] $keon_printing_page_broker_items 
     *
     * @return $this
     */
    public function setKeonPrintingPageBrokerItems($keon_printing_page_broker_items)
    {
        $this->container['keon_printing_page_broker_items'] = $keon_printing_page_broker_items;

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


