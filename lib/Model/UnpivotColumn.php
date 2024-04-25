<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="UnpivotColumn.cs">
 *   Copyright (c) 2024 Aspose.Cells Cloud
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

class UnpivotColumn
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UnpivotColumn';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'unpivot_column_names' => 'string[]',
        'column_map_name' => 'string',
        'value_map_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'unpivot_column_names' => null  ,
        'column_map_name' => null  ,
        'value_map_name' => null  
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
         'unpivot_column_names' => 'UnpivotColumnNames' ,
         'column_map_name' => 'ColumnMapName' ,
         'value_map_name' => 'ValueMapName' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'unpivot_column_names' => 'setUnpivotColumnNames' ,
        'column_map_name' => 'setColumnMapName' ,
        'value_map_name' => 'setValueMapName' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'unpivot_column_names' => 'getUnpivotColumnNames' ,
        'column_map_name' => 'getColumnMapName' ,
        'value_map_name' => 'getValueMapName' 
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
        $this->container['unpivot_column_names'] = isset($data['unpivot_column_names']) ? $data['unpivot_column_names'] : null;
        $this->container['column_map_name'] = isset($data['column_map_name']) ? $data['column_map_name'] : null;
        $this->container['value_map_name'] = isset($data['value_map_name']) ? $data['value_map_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['unpivot_column_names'] === null) {
            $invalidProperties[] = "'unpivot_column_names' can't be null";
        }
        if ($this->container['column_map_name'] === null) {
            $invalidProperties[] = "'column_map_name' can't be null";
        }
        if ($this->container['value_map_name'] === null) {
            $invalidProperties[] = "'value_map_name' can't be null";
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
        if ($this->container['unpivot_column_names'] === null) {
                    return false;
                }
        if ($this->container['column_map_name'] === null) {
                    return false;
                }
        if ($this->container['value_map_name'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets unpivot_column_names
     *
     * @return string[]
     */
    public function getUnpivotColumnNames()
    {
        return $this->container['unpivot_column_names'];
    }

    /**
     * Sets unpivot_column_names
     *
     *  
     *
     * @return $this
     */
    public function setUnpivotColumnNames($unpivot_column_names)
    {
        $this->container['unpivot_column_names'] = $unpivot_column_names;

        return $this;
    }
   /**
     * Gets column_map_name
     *
     * @return string
     */
    public function getColumnMapName()
    {
        return $this->container['column_map_name'];
    }

    /**
     * Sets column_map_name
     *
     *  
     *
     * @return $this
     */
    public function setColumnMapName($column_map_name)
    {
        $this->container['column_map_name'] = $column_map_name;

        return $this;
    }
   /**
     * Gets value_map_name
     *
     * @return string
     */
    public function getValueMapName()
    {
        return $this->container['value_map_name'];
    }

    /**
     * Sets value_map_name
     *
     *  
     *
     * @return $this
     */
    public function setValueMapName($value_map_name)
    {
        $this->container['value_map_name'] = $value_map_name;

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
