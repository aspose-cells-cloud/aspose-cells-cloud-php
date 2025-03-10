<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ImportXMLRequest.cs">
 *   Copyright (c) 2025 Aspose.Cells Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 *--------------------------------------------------------------------------------------------------------------------
*/

namespace Aspose\Cells\Cloud\Model;


use \Aspose\Cells\Cloud\ObjectSerializer;

class ImportXMLRequest
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImportXMLRequest';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'xml_file_source' => '\Aspose\Cells\Cloud\Model\DataSource',
        'import_position' => '\Aspose\Cells\Cloud\Model\ImportPosition',
        'xml_content' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'xml_file_source' => null  ,
        'import_position' => null  ,
        'xml_content' => null  
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
         'xml_file_source' => 'XMLFileSource' ,
         'import_position' => 'ImportPosition' ,
         'xml_content' => 'XMLContent' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'xml_file_source' => 'setXMLFileSource' ,
        'import_position' => 'setImportPosition' ,
        'xml_content' => 'setXMLContent' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'xml_file_source' => 'getXMLFileSource' ,
        'import_position' => 'getImportPosition' ,
        'xml_content' => 'getXMLContent' 
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
        $this->container['xml_file_source'] = isset($data['xml_file_source']) ? $data['xml_file_source'] : null;
        $this->container['import_position'] = isset($data['import_position']) ? $data['import_position'] : null;
        $this->container['xml_content'] = isset($data['xml_content']) ? $data['xml_content'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['xml_file_source'] === null) {
            $invalidProperties[] = "'xml_file_source' can't be null";
        }
        if ($this->container['import_position'] === null) {
            $invalidProperties[] = "'import_position' can't be null";
        }
        if ($this->container['xml_content'] === null) {
            $invalidProperties[] = "'xml_content' can't be null";
        }
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
        if ($this->container['xml_file_source'] === null) {
                    return false;
                }
        if ($this->container['import_position'] === null) {
                    return false;
                }
        if ($this->container['xml_content'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets xml_file_source
     *
     * @return \Aspose\Cells\Cloud\Model\DataSource
     */
    public function getXMLFileSource()
    {
        return $this->container['xml_file_source'];
    }

    /**
     * Sets xml_file_source
     *
     *  XML file source
     *
     * @return $this
     */
    public function setXMLFileSource($xml_file_source)
    {
        $this->container['xml_file_source'] = $xml_file_source;

        return $this;
    }
   /**
     * Gets import_position
     *
     * @return \Aspose\Cells\Cloud\Model\ImportPosition
     */
    public function getImportPosition()
    {
        return $this->container['import_position'];
    }

    /**
     * Sets import_position
     *
     *  Import position description.
     *
     * @return $this
     */
    public function setImportPosition($import_position)
    {
        $this->container['import_position'] = $import_position;

        return $this;
    }
   /**
     * Gets xml_content
     *
     * @return string
     */
    public function getXMLContent()
    {
        return $this->container['xml_content'];
    }

    /**
     * Sets xml_content
     *
     *  Base64String default is null
     *
     * @return $this
     */
    public function setXMLContent($xml_content)
    {
        $this->container['xml_content'] = $xml_content;

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
