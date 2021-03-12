<?php
/**
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1DismantleTransferredWasteListItem
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
 * WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1DismantleTransferredWasteListItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1DismantleTransferredWasteListItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WasteRegisterPublic.Api.ApiModels.Responses.WasteRegister.WreckWasteRecordCard.V1.DismantleTransferredWasteListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dismantle_transferred_waste_id' => 'string',
        'created_at' => '\DateTime',
        'waste_code' => 'string',
        'recycled_waste_mass' => 'double',
        'energy_recovery_waste_mass' => 'double',
        'other_than_recycled_waste_mass' => 'double',
        'shredded_waste_mass' => 'double',
        'disposed_waste_mass' => 'double',
        'transferred_abroad_waste_mass' => 'double',
        'transferred_abroad' => 'bool',
        'transferred_abroad_transfer_date' => '\DateTime',
        'receive_confirmation_date' => '\DateTime',
        'created_by_user' => 'string',
        'waste_code_extended' => 'bool',
        'waste_code_extended_description' => 'string',
        'hazardous_waste_reclassification' => 'bool',
        'hazardous_waste_reclassification_description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dismantle_transferred_waste_id' => 'uuid',
        'created_at' => 'date-time',
        'waste_code' => null,
        'recycled_waste_mass' => 'double',
        'energy_recovery_waste_mass' => 'double',
        'other_than_recycled_waste_mass' => 'double',
        'shredded_waste_mass' => 'double',
        'disposed_waste_mass' => 'double',
        'transferred_abroad_waste_mass' => 'double',
        'transferred_abroad' => null,
        'transferred_abroad_transfer_date' => 'date-time',
        'receive_confirmation_date' => 'date-time',
        'created_by_user' => null,
        'waste_code_extended' => null,
        'waste_code_extended_description' => null,
        'hazardous_waste_reclassification' => null,
        'hazardous_waste_reclassification_description' => null
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
        'dismantle_transferred_waste_id' => 'dismantleTransferredWasteId',
        'created_at' => 'createdAt',
        'waste_code' => 'wasteCode',
        'recycled_waste_mass' => 'recycledWasteMass',
        'energy_recovery_waste_mass' => 'energyRecoveryWasteMass',
        'other_than_recycled_waste_mass' => 'otherThanRecycledWasteMass',
        'shredded_waste_mass' => 'shreddedWasteMass',
        'disposed_waste_mass' => 'disposedWasteMass',
        'transferred_abroad_waste_mass' => 'transferredAbroadWasteMass',
        'transferred_abroad' => 'transferredAbroad',
        'transferred_abroad_transfer_date' => 'transferredAbroadTransferDate',
        'receive_confirmation_date' => 'receiveConfirmationDate',
        'created_by_user' => 'createdByUser',
        'waste_code_extended' => 'wasteCodeExtended',
        'waste_code_extended_description' => 'wasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'hazardousWasteReclassification',
        'hazardous_waste_reclassification_description' => 'hazardousWasteReclassificationDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dismantle_transferred_waste_id' => 'setDismantleTransferredWasteId',
        'created_at' => 'setCreatedAt',
        'waste_code' => 'setWasteCode',
        'recycled_waste_mass' => 'setRecycledWasteMass',
        'energy_recovery_waste_mass' => 'setEnergyRecoveryWasteMass',
        'other_than_recycled_waste_mass' => 'setOtherThanRecycledWasteMass',
        'shredded_waste_mass' => 'setShreddedWasteMass',
        'disposed_waste_mass' => 'setDisposedWasteMass',
        'transferred_abroad_waste_mass' => 'setTransferredAbroadWasteMass',
        'transferred_abroad' => 'setTransferredAbroad',
        'transferred_abroad_transfer_date' => 'setTransferredAbroadTransferDate',
        'receive_confirmation_date' => 'setReceiveConfirmationDate',
        'created_by_user' => 'setCreatedByUser',
        'waste_code_extended' => 'setWasteCodeExtended',
        'waste_code_extended_description' => 'setWasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'setHazardousWasteReclassification',
        'hazardous_waste_reclassification_description' => 'setHazardousWasteReclassificationDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dismantle_transferred_waste_id' => 'getDismantleTransferredWasteId',
        'created_at' => 'getCreatedAt',
        'waste_code' => 'getWasteCode',
        'recycled_waste_mass' => 'getRecycledWasteMass',
        'energy_recovery_waste_mass' => 'getEnergyRecoveryWasteMass',
        'other_than_recycled_waste_mass' => 'getOtherThanRecycledWasteMass',
        'shredded_waste_mass' => 'getShreddedWasteMass',
        'disposed_waste_mass' => 'getDisposedWasteMass',
        'transferred_abroad_waste_mass' => 'getTransferredAbroadWasteMass',
        'transferred_abroad' => 'getTransferredAbroad',
        'transferred_abroad_transfer_date' => 'getTransferredAbroadTransferDate',
        'receive_confirmation_date' => 'getReceiveConfirmationDate',
        'created_by_user' => 'getCreatedByUser',
        'waste_code_extended' => 'getWasteCodeExtended',
        'waste_code_extended_description' => 'getWasteCodeExtendedDescription',
        'hazardous_waste_reclassification' => 'getHazardousWasteReclassification',
        'hazardous_waste_reclassification_description' => 'getHazardousWasteReclassificationDescription'
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
        $this->container['dismantle_transferred_waste_id'] = isset($data['dismantle_transferred_waste_id']) ? $data['dismantle_transferred_waste_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['waste_code'] = isset($data['waste_code']) ? $data['waste_code'] : null;
        $this->container['recycled_waste_mass'] = isset($data['recycled_waste_mass']) ? $data['recycled_waste_mass'] : null;
        $this->container['energy_recovery_waste_mass'] = isset($data['energy_recovery_waste_mass']) ? $data['energy_recovery_waste_mass'] : null;
        $this->container['other_than_recycled_waste_mass'] = isset($data['other_than_recycled_waste_mass']) ? $data['other_than_recycled_waste_mass'] : null;
        $this->container['shredded_waste_mass'] = isset($data['shredded_waste_mass']) ? $data['shredded_waste_mass'] : null;
        $this->container['disposed_waste_mass'] = isset($data['disposed_waste_mass']) ? $data['disposed_waste_mass'] : null;
        $this->container['transferred_abroad_waste_mass'] = isset($data['transferred_abroad_waste_mass']) ? $data['transferred_abroad_waste_mass'] : null;
        $this->container['transferred_abroad'] = isset($data['transferred_abroad']) ? $data['transferred_abroad'] : null;
        $this->container['transferred_abroad_transfer_date'] = isset($data['transferred_abroad_transfer_date']) ? $data['transferred_abroad_transfer_date'] : null;
        $this->container['receive_confirmation_date'] = isset($data['receive_confirmation_date']) ? $data['receive_confirmation_date'] : null;
        $this->container['created_by_user'] = isset($data['created_by_user']) ? $data['created_by_user'] : null;
        $this->container['waste_code_extended'] = isset($data['waste_code_extended']) ? $data['waste_code_extended'] : null;
        $this->container['waste_code_extended_description'] = isset($data['waste_code_extended_description']) ? $data['waste_code_extended_description'] : null;
        $this->container['hazardous_waste_reclassification'] = isset($data['hazardous_waste_reclassification']) ? $data['hazardous_waste_reclassification'] : null;
        $this->container['hazardous_waste_reclassification_description'] = isset($data['hazardous_waste_reclassification_description']) ? $data['hazardous_waste_reclassification_description'] : null;
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
     * Gets dismantle_transferred_waste_id
     *
     * @return string
     */
    public function getDismantleTransferredWasteId()
    {
        return $this->container['dismantle_transferred_waste_id'];
    }

    /**
     * Sets dismantle_transferred_waste_id
     *
     * @param string $dismantle_transferred_waste_id Prowadzący stację demontażu - Przekazane odpady
     *
     * @return $this
     */
    public function setDismantleTransferredWasteId($dismantle_transferred_waste_id)
    {
        $this->container['dismantle_transferred_waste_id'] = $dismantle_transferred_waste_id;

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
     * Gets waste_code
     *
     * @return string
     */
    public function getWasteCode()
    {
        return $this->container['waste_code'];
    }

    /**
     * Sets waste_code
     *
     * @param string $waste_code Kod odpadu
     *
     * @return $this
     */
    public function setWasteCode($waste_code)
    {
        $this->container['waste_code'] = $waste_code;

        return $this;
    }

    /**
     * Gets recycled_waste_mass
     *
     * @return double
     */
    public function getRecycledWasteMass()
    {
        return $this->container['recycled_waste_mass'];
    }

    /**
     * Sets recycled_waste_mass
     *
     * @param double $recycled_waste_mass Masa odpadów przekazanych w kraju do recyklingu [Mg]
     *
     * @return $this
     */
    public function setRecycledWasteMass($recycled_waste_mass)
    {
        $this->container['recycled_waste_mass'] = $recycled_waste_mass;

        return $this;
    }

    /**
     * Gets energy_recovery_waste_mass
     *
     * @return double
     */
    public function getEnergyRecoveryWasteMass()
    {
        return $this->container['energy_recovery_waste_mass'];
    }

    /**
     * Sets energy_recovery_waste_mass
     *
     * @param double $energy_recovery_waste_mass Masa odpadów przekazanych w kraju do odzysku energii [Mg]
     *
     * @return $this
     */
    public function setEnergyRecoveryWasteMass($energy_recovery_waste_mass)
    {
        $this->container['energy_recovery_waste_mass'] = $energy_recovery_waste_mass;

        return $this;
    }

    /**
     * Gets other_than_recycled_waste_mass
     *
     * @return double
     */
    public function getOtherThanRecycledWasteMass()
    {
        return $this->container['other_than_recycled_waste_mass'];
    }

    /**
     * Sets other_than_recycled_waste_mass
     *
     * @param double $other_than_recycled_waste_mass Masa odpadów przekazanych w kraju innemu procesowi odzysku [Mg]
     *
     * @return $this
     */
    public function setOtherThanRecycledWasteMass($other_than_recycled_waste_mass)
    {
        $this->container['other_than_recycled_waste_mass'] = $other_than_recycled_waste_mass;

        return $this;
    }

    /**
     * Gets shredded_waste_mass
     *
     * @return double
     */
    public function getShreddedWasteMass()
    {
        return $this->container['shredded_waste_mass'];
    }

    /**
     * Sets shredded_waste_mass
     *
     * @param double $shredded_waste_mass Masa odpadów przekazanych w kraju do rozdrobnienia w strzępiarce [Mg]
     *
     * @return $this
     */
    public function setShreddedWasteMass($shredded_waste_mass)
    {
        $this->container['shredded_waste_mass'] = $shredded_waste_mass;

        return $this;
    }

    /**
     * Gets disposed_waste_mass
     *
     * @return double
     */
    public function getDisposedWasteMass()
    {
        return $this->container['disposed_waste_mass'];
    }

    /**
     * Sets disposed_waste_mass
     *
     * @param double $disposed_waste_mass Masa odpadów przekazanych w kraju do unieszkodliwienia [Mg]
     *
     * @return $this
     */
    public function setDisposedWasteMass($disposed_waste_mass)
    {
        $this->container['disposed_waste_mass'] = $disposed_waste_mass;

        return $this;
    }

    /**
     * Gets transferred_abroad_waste_mass
     *
     * @return double
     */
    public function getTransferredAbroadWasteMass()
    {
        return $this->container['transferred_abroad_waste_mass'];
    }

    /**
     * Sets transferred_abroad_waste_mass
     *
     * @param double $transferred_abroad_waste_mass Masa odpadów przekazanych do innego kraju [Mg]
     *
     * @return $this
     */
    public function setTransferredAbroadWasteMass($transferred_abroad_waste_mass)
    {
        $this->container['transferred_abroad_waste_mass'] = $transferred_abroad_waste_mass;

        return $this;
    }

    /**
     * Gets transferred_abroad
     *
     * @return bool
     */
    public function getTransferredAbroad()
    {
        return $this->container['transferred_abroad'];
    }

    /**
     * Sets transferred_abroad
     *
     * @param bool $transferred_abroad Odpady przekazane do innego kraju
     *
     * @return $this
     */
    public function setTransferredAbroad($transferred_abroad)
    {
        $this->container['transferred_abroad'] = $transferred_abroad;

        return $this;
    }

    /**
     * Gets transferred_abroad_transfer_date
     *
     * @return \DateTime
     */
    public function getTransferredAbroadTransferDate()
    {
        return $this->container['transferred_abroad_transfer_date'];
    }

    /**
     * Sets transferred_abroad_transfer_date
     *
     * @param \DateTime $transferred_abroad_transfer_date Data rozpoczęcia transportu
     *
     * @return $this
     */
    public function setTransferredAbroadTransferDate($transferred_abroad_transfer_date)
    {
        $this->container['transferred_abroad_transfer_date'] = $transferred_abroad_transfer_date;

        return $this;
    }

    /**
     * Gets receive_confirmation_date
     *
     * @return \DateTime
     */
    public function getReceiveConfirmationDate()
    {
        return $this->container['receive_confirmation_date'];
    }

    /**
     * Sets receive_confirmation_date
     *
     * @param \DateTime $receive_confirmation_date Data otrzymania potwierdzenia
     *
     * @return $this
     */
    public function setReceiveConfirmationDate($receive_confirmation_date)
    {
        $this->container['receive_confirmation_date'] = $receive_confirmation_date;

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


