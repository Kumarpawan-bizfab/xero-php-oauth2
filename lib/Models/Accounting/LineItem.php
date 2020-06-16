<?php
/**
 * LineItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: 2.2.2
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Accounting;

use \ArrayAccess;
use \XeroAPI\XeroPHP\AccountingObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * LineItem Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LineItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'line_item_id' => 'string',
        'description' => 'string',
        'quantity' => 'double',
        'unit_amount' => 'double',
        'item_code' => 'string',
        'account_code' => 'string',
        'tax_type' => 'string',
        'tax_amount' => 'double',
        'line_amount' => 'double',
        'tracking' => '\XeroAPI\XeroPHP\Models\Accounting\LineItemTracking[]',
        'discount_rate' => 'double',
        'discount_amount' => 'double',
        'repeating_invoice_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'line_item_id' => 'uuid',
        'description' => null,
        'quantity' => 'double',
        'unit_amount' => 'double',
        'item_code' => null,
        'account_code' => null,
        'tax_type' => null,
        'tax_amount' => 'double',
        'line_amount' => 'double',
        'tracking' => null,
        'discount_rate' => 'double',
        'discount_amount' => 'double',
        'repeating_invoice_id' => 'uuid'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'line_item_id' => 'LineItemID',
        'description' => 'Description',
        'quantity' => 'Quantity',
        'unit_amount' => 'UnitAmount',
        'item_code' => 'ItemCode',
        'account_code' => 'AccountCode',
        'tax_type' => 'TaxType',
        'tax_amount' => 'TaxAmount',
        'line_amount' => 'LineAmount',
        'tracking' => 'Tracking',
        'discount_rate' => 'DiscountRate',
        'discount_amount' => 'DiscountAmount',
        'repeating_invoice_id' => 'RepeatingInvoiceID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'line_item_id' => 'setLineItemId',
        'description' => 'setDescription',
        'quantity' => 'setQuantity',
        'unit_amount' => 'setUnitAmount',
        'item_code' => 'setItemCode',
        'account_code' => 'setAccountCode',
        'tax_type' => 'setTaxType',
        'tax_amount' => 'setTaxAmount',
        'line_amount' => 'setLineAmount',
        'tracking' => 'setTracking',
        'discount_rate' => 'setDiscountRate',
        'discount_amount' => 'setDiscountAmount',
        'repeating_invoice_id' => 'setRepeatingInvoiceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'line_item_id' => 'getLineItemId',
        'description' => 'getDescription',
        'quantity' => 'getQuantity',
        'unit_amount' => 'getUnitAmount',
        'item_code' => 'getItemCode',
        'account_code' => 'getAccountCode',
        'tax_type' => 'getTaxType',
        'tax_amount' => 'getTaxAmount',
        'line_amount' => 'getLineAmount',
        'tracking' => 'getTracking',
        'discount_rate' => 'getDiscountRate',
        'discount_amount' => 'getDiscountAmount',
        'repeating_invoice_id' => 'getRepeatingInvoiceId'
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
        return self::$openAPIModelName;
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
        $this->container['line_item_id'] = isset($data['line_item_id']) ? $data['line_item_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['unit_amount'] = isset($data['unit_amount']) ? $data['unit_amount'] : null;
        $this->container['item_code'] = isset($data['item_code']) ? $data['item_code'] : null;
        $this->container['account_code'] = isset($data['account_code']) ? $data['account_code'] : null;
        $this->container['tax_type'] = isset($data['tax_type']) ? $data['tax_type'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['line_amount'] = isset($data['line_amount']) ? $data['line_amount'] : null;
        $this->container['tracking'] = isset($data['tracking']) ? $data['tracking'] : null;
        $this->container['discount_rate'] = isset($data['discount_rate']) ? $data['discount_rate'] : null;
        $this->container['discount_amount'] = isset($data['discount_amount']) ? $data['discount_amount'] : null;
        $this->container['repeating_invoice_id'] = isset($data['repeating_invoice_id']) ? $data['repeating_invoice_id'] : null;
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
     * Gets line_item_id
     *
     * @return string|null
     */
    public function getLineItemId()
    {
        return $this->container['line_item_id'];
    }

    /**
     * Sets line_item_id
     *
     * @param string|null $line_item_id LineItem unique ID
     *
     * @return $this
     */
    public function setLineItemId($line_item_id)
    {

        $this->container['line_item_id'] = $line_item_id;

        return $this;
    }



    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description needs to be at least 1 char long. A line item with just a description (i.e no unit amount or quantity) can be created by specifying just a <Description> element that contains at least 1 character
     *
     * @return $this
     */
    public function setDescription($description)
    {

        $this->container['description'] = $description;

        return $this;
    }



    /**
     * Gets quantity
     *
     * @return double|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param double|null $quantity LineItem Quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {

        $this->container['quantity'] = $quantity;

        return $this;
    }



    /**
     * Gets unit_amount
     *
     * @return double|null
     */
    public function getUnitAmount()
    {
        return $this->container['unit_amount'];
    }

    /**
     * Sets unit_amount
     *
     * @param double|null $unit_amount LineItem Unit Amount
     *
     * @return $this
     */
    public function setUnitAmount($unit_amount)
    {

        $this->container['unit_amount'] = $unit_amount;

        return $this;
    }



    /**
     * Gets item_code
     *
     * @return string|null
     */
    public function getItemCode()
    {
        return $this->container['item_code'];
    }

    /**
     * Sets item_code
     *
     * @param string|null $item_code See Items
     *
     * @return $this
     */
    public function setItemCode($item_code)
    {

        $this->container['item_code'] = $item_code;

        return $this;
    }



    /**
     * Gets account_code
     *
     * @return string|null
     */
    public function getAccountCode()
    {
        return $this->container['account_code'];
    }

    /**
     * Sets account_code
     *
     * @param string|null $account_code See Accounts
     *
     * @return $this
     */
    public function setAccountCode($account_code)
    {

        $this->container['account_code'] = $account_code;

        return $this;
    }



    /**
     * Gets tax_type
     *
     * @return string|null
     */
    public function getTaxType()
    {
        return $this->container['tax_type'];
    }

    /**
     * Sets tax_type
     *
     * @param string|null $tax_type The tax type from TaxRates
     *
     * @return $this
     */
    public function setTaxType($tax_type)
    {

        $this->container['tax_type'] = $tax_type;

        return $this;
    }



    /**
     * Gets tax_amount
     *
     * @return double|null
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param double|null $tax_amount The tax amount is auto calculated as a percentage of the line amount (see below) based on the tax rate. This value can be overriden if the calculated <TaxAmount> is not correct.
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {

        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }



    /**
     * Gets line_amount
     *
     * @return double|null
     */
    public function getLineAmount()
    {
        return $this->container['line_amount'];
    }

    /**
     * Sets line_amount
     *
     * @param double|null $line_amount If you wish to omit either of the <Quantity> or <UnitAmount> you can provide a LineAmount and Xero will calculate the missing amount for you. The line amount reflects the discounted price if a DiscountRate has been used . i.e LineAmount = Quantity * Unit Amount * ((100 – DiscountRate)/100)
     *
     * @return $this
     */
    public function setLineAmount($line_amount)
    {

        $this->container['line_amount'] = $line_amount;

        return $this;
    }



    /**
     * Gets tracking
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\LineItemTracking[]|null
     */
    public function getTracking()
    {
        return $this->container['tracking'];
    }

    /**
     * Sets tracking
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\LineItemTracking[]|null $tracking Optional Tracking Category – see Tracking.  Any LineItem can have a  maximum of 2 <TrackingCategory> elements.
     *
     * @return $this
     */
    public function setTracking($tracking)
    {

        $this->container['tracking'] = $tracking;

        return $this;
    }



    /**
     * Gets discount_rate
     *
     * @return double|null
     */
    public function getDiscountRate()
    {
        return $this->container['discount_rate'];
    }

    /**
     * Sets discount_rate
     *
     * @param double|null $discount_rate Percentage discount being applied to a line item (only supported on  ACCREC invoices – ACC PAY invoices and credit notes in Xero do not support discounts
     *
     * @return $this
     */
    public function setDiscountRate($discount_rate)
    {

        $this->container['discount_rate'] = $discount_rate;

        return $this;
    }



    /**
     * Gets discount_amount
     *
     * @return double|null
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param double|null $discount_amount Discount amount being applied to a line item. Only supported on ACCREC invoices - ACCPAY invoices and credit notes in Xero do not support discounts.
     *
     * @return $this
     */
    public function setDiscountAmount($discount_amount)
    {

        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }



    /**
     * Gets repeating_invoice_id
     *
     * @return string|null
     */
    public function getRepeatingInvoiceId()
    {
        return $this->container['repeating_invoice_id'];
    }

    /**
     * Sets repeating_invoice_id
     *
     * @param string|null $repeating_invoice_id The Xero identifier for a Repeating Invoice
     *
     * @return $this
     */
    public function setRepeatingInvoiceId($repeating_invoice_id)
    {

        $this->container['repeating_invoice_id'] = $repeating_invoice_id;

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
        return json_encode(
            AccountingObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


