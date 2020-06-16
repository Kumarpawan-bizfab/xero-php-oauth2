<?php
/**
 * Attachment
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
 * Attachment Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Attachment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Attachment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attachment_id' => 'string',
        'file_name' => 'string',
        'url' => 'string',
        'mime_type' => 'string',
        'content_length' => 'float',
        'include_online' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'attachment_id' => 'uuid',
        'file_name' => null,
        'url' => null,
        'mime_type' => null,
        'content_length' => null,
        'include_online' => null
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
        'attachment_id' => 'AttachmentID',
        'file_name' => 'FileName',
        'url' => 'Url',
        'mime_type' => 'MimeType',
        'content_length' => 'ContentLength',
        'include_online' => 'IncludeOnline'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attachment_id' => 'setAttachmentId',
        'file_name' => 'setFileName',
        'url' => 'setUrl',
        'mime_type' => 'setMimeType',
        'content_length' => 'setContentLength',
        'include_online' => 'setIncludeOnline'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attachment_id' => 'getAttachmentId',
        'file_name' => 'getFileName',
        'url' => 'getUrl',
        'mime_type' => 'getMimeType',
        'content_length' => 'getContentLength',
        'include_online' => 'getIncludeOnline'
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
        $this->container['attachment_id'] = isset($data['attachment_id']) ? $data['attachment_id'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['mime_type'] = isset($data['mime_type']) ? $data['mime_type'] : null;
        $this->container['content_length'] = isset($data['content_length']) ? $data['content_length'] : null;
        $this->container['include_online'] = isset($data['include_online']) ? $data['include_online'] : null;
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
     * Gets attachment_id
     *
     * @return string|null
     */
    public function getAttachmentId()
    {
        return $this->container['attachment_id'];
    }

    /**
     * Sets attachment_id
     *
     * @param string|null $attachment_id Unique ID for the file
     *
     * @return $this
     */
    public function setAttachmentId($attachment_id)
    {

        $this->container['attachment_id'] = $attachment_id;

        return $this;
    }



    /**
     * Gets file_name
     *
     * @return string|null
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string|null $file_name Name of the file
     *
     * @return $this
     */
    public function setFileName($file_name)
    {

        $this->container['file_name'] = $file_name;

        return $this;
    }



    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url URL to the file on xero.com
     *
     * @return $this
     */
    public function setUrl($url)
    {

        $this->container['url'] = $url;

        return $this;
    }



    /**
     * Gets mime_type
     *
     * @return string|null
     */
    public function getMimeType()
    {
        return $this->container['mime_type'];
    }

    /**
     * Sets mime_type
     *
     * @param string|null $mime_type Type of file
     *
     * @return $this
     */
    public function setMimeType($mime_type)
    {

        $this->container['mime_type'] = $mime_type;

        return $this;
    }



    /**
     * Gets content_length
     *
     * @return float|null
     */
    public function getContentLength()
    {
        return $this->container['content_length'];
    }

    /**
     * Sets content_length
     *
     * @param float|null $content_length Length of the file content
     *
     * @return $this
     */
    public function setContentLength($content_length)
    {

        $this->container['content_length'] = $content_length;

        return $this;
    }



    /**
     * Gets include_online
     *
     * @return bool|null
     */
    public function getIncludeOnline()
    {
        return $this->container['include_online'];
    }

    /**
     * Sets include_online
     *
     * @param bool|null $include_online Include the file with the online invoice
     *
     * @return $this
     */
    public function setIncludeOnline($include_online)
    {

        $this->container['include_online'] = $include_online;

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


