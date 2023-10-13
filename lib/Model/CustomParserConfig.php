<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CustomParserConfig.cs">
 *   Copyright (c) 2023 Aspose.Cells Cloud
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

use \ArrayAccess;
use \Aspose\Cells\Cloud\ObjectSerializer;

class CustomParserConfig implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomParserConfig';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'column_index' => 'int',
        'parse_method' => 'string',
        'custom_style' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'column_index' => null  ,
        'parse_method' => null  ,
        'custom_style' => null  
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
         'column_index' => 'ColumnIndex' ,
         'parse_method' => 'ParseMethod' ,
         'custom_style' => 'CustomStyle' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'column_index' => 'setColumnIndex' ,
        'parse_method' => 'setParseMethod' ,
        'custom_style' => 'setCustomStyle' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'column_index' => 'getColumnIndex' ,
        'parse_method' => 'getParseMethod' ,
        'custom_style' => 'getCustomStyle' 
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
        $this->container['column_index'] = isset($data['column_index']) ? $data['column_index'] : null;
        $this->container['parse_method'] = isset($data['parse_method']) ? $data['parse_method'] : null;
        $this->container['custom_style'] = isset($data['custom_style']) ? $data['custom_style'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['column_index'] === null) {
            $invalidProperties[] = "'column_index' can't be null";
        }
        if ($this->container['parse_method'] === null) {
            $invalidProperties[] = "'parse_method' can't be null";
        }
        if ($this->container['custom_style'] === null) {
            $invalidProperties[] = "'custom_style' can't be null";
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
        if ($this->container['column_index'] === null) {
                    return false;
                }
        if ($this->container['parse_method'] === null) {
                    return false;
                }
        if ($this->container['custom_style'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets column_index
     *
     * @return int
     */
    public function getColumnIndex()
    {
        return $this->container['column_index'];
    }

    /**
     * Sets column_index
     *
     *  Point Column
     *
     * @return $this
     */
    public function setColumnIndex($column_index)
    {
        $this->container['column_index'] = $column_index;

        return $this;
    }
   /**
     * Gets parse_method
     *
     * @return string
     */
    public function getParseMethod()
    {
        return $this->container['parse_method'];
    }

    /**
     * Sets parse_method
     *
     *  data parser method.             ToDateTime            ToString
     *
     * @return $this
     */
    public function setParseMethod($parse_method)
    {
        $this->container['parse_method'] = $parse_method;

        return $this;
    }
   /**
     * Gets custom_style
     *
     * @return string
     */
    public function getCustomStyle()
    {
        return $this->container['custom_style'];
    }

    /**
     * Sets custom_style
     *
     *  
     *
     * @return $this
     */
    public function setCustomStyle($custom_style)
    {
        $this->container['custom_style'] = $custom_style;

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
