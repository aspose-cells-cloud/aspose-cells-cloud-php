<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="QueryTable.cs">
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

class QueryTable implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'QueryTable';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'connection_id' => 'int',
        'name' => 'string',
        'result_range' => '\Aspose\Cells\Cloud\Model\Range',
        'preserve_formatting' => 'bool',
        'adjust_column_width' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'connection_id' => null  ,
        'name' => null  ,
        'result_range' => null  ,
        'preserve_formatting' => null  ,
        'adjust_column_width' => null  
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
         'connection_id' => 'ConnectionId' ,
         'name' => 'Name' ,
         'result_range' => 'ResultRange' ,
         'preserve_formatting' => 'PreserveFormatting' ,
         'adjust_column_width' => 'AdjustColumnWidth' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'connection_id' => 'setConnectionId' ,
        'name' => 'setName' ,
        'result_range' => 'setResultRange' ,
        'preserve_formatting' => 'setPreserveFormatting' ,
        'adjust_column_width' => 'setAdjustColumnWidth' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'connection_id' => 'getConnectionId' ,
        'name' => 'getName' ,
        'result_range' => 'getResultRange' ,
        'preserve_formatting' => 'getPreserveFormatting' ,
        'adjust_column_width' => 'getAdjustColumnWidth' 
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
        $this->container['connection_id'] = isset($data['connection_id']) ? $data['connection_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['result_range'] = isset($data['result_range']) ? $data['result_range'] : null;
        $this->container['preserve_formatting'] = isset($data['preserve_formatting']) ? $data['preserve_formatting'] : null;
        $this->container['adjust_column_width'] = isset($data['adjust_column_width']) ? $data['adjust_column_width'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['connection_id'] === null) {
            $invalidProperties[] = "'connection_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['result_range'] === null) {
            $invalidProperties[] = "'result_range' can't be null";
        }
        if ($this->container['preserve_formatting'] === null) {
            $invalidProperties[] = "'preserve_formatting' can't be null";
        }
        if ($this->container['adjust_column_width'] === null) {
            $invalidProperties[] = "'adjust_column_width' can't be null";
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
        if ($this->container['connection_id'] === null) {
                    return false;
                }
        if ($this->container['name'] === null) {
                    return false;
                }
        if ($this->container['result_range'] === null) {
                    return false;
                }
        if ($this->container['preserve_formatting'] === null) {
                    return false;
                }
        if ($this->container['adjust_column_width'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets connection_id
     *
     * @return int
     */
    public function getConnectionId()
    {
        return $this->container['connection_id'];
    }

    /**
     * Sets connection_id
     *
     *  
     *
     * @return $this
     */
    public function setConnectionId($connection_id)
    {
        $this->container['connection_id'] = $connection_id;

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
     *  
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }
   /**
     * Gets result_range
     *
     * @return \Aspose\Cells\Cloud\Model\Range
     */
    public function getResultRange()
    {
        return $this->container['result_range'];
    }

    /**
     * Sets result_range
     *
     *  
     *
     * @return $this
     */
    public function setResultRange($result_range)
    {
        $this->container['result_range'] = $result_range;

        return $this;
    }
   /**
     * Gets preserve_formatting
     *
     * @return bool
     */
    public function getPreserveFormatting()
    {
        return $this->container['preserve_formatting'];
    }

    /**
     * Sets preserve_formatting
     *
     *  
     *
     * @return $this
     */
    public function setPreserveFormatting($preserve_formatting)
    {
        $this->container['preserve_formatting'] = $preserve_formatting;

        return $this;
    }
   /**
     * Gets adjust_column_width
     *
     * @return bool
     */
    public function getAdjustColumnWidth()
    {
        return $this->container['adjust_column_width'];
    }

    /**
     * Sets adjust_column_width
     *
     *  
     *
     * @return $this
     */
    public function setAdjustColumnWidth($adjust_column_width)
    {
        $this->container['adjust_column_width'] = $adjust_column_width;

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
