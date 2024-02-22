<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CreatePivotTableRequest.cs">
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

class CreatePivotTableRequest
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreatePivotTableRequest';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'source_data' => 'string',
        'dest_cell_name' => 'string',
        'use_same_source' => 'bool',
        'pivot_field_rows' => 'int[]',
        'pivot_field_columns' => 'int[]',
        'pivot_field_data' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null  ,
        'source_data' => null  ,
        'dest_cell_name' => null  ,
        'use_same_source' => null  ,
        'pivot_field_rows' => null  ,
        'pivot_field_columns' => null  ,
        'pivot_field_data' => null  
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
         'name' => 'Name' ,
         'source_data' => 'SourceData' ,
         'dest_cell_name' => 'DestCellName' ,
         'use_same_source' => 'UseSameSource' ,
         'pivot_field_rows' => 'PivotFieldRows' ,
         'pivot_field_columns' => 'PivotFieldColumns' ,
         'pivot_field_data' => 'PivotFieldData' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName' ,
        'source_data' => 'setSourceData' ,
        'dest_cell_name' => 'setDestCellName' ,
        'use_same_source' => 'setUseSameSource' ,
        'pivot_field_rows' => 'setPivotFieldRows' ,
        'pivot_field_columns' => 'setPivotFieldColumns' ,
        'pivot_field_data' => 'setPivotFieldData' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName' ,
        'source_data' => 'getSourceData' ,
        'dest_cell_name' => 'getDestCellName' ,
        'use_same_source' => 'getUseSameSource' ,
        'pivot_field_rows' => 'getPivotFieldRows' ,
        'pivot_field_columns' => 'getPivotFieldColumns' ,
        'pivot_field_data' => 'getPivotFieldData' 
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['source_data'] = isset($data['source_data']) ? $data['source_data'] : null;
        $this->container['dest_cell_name'] = isset($data['dest_cell_name']) ? $data['dest_cell_name'] : null;
        $this->container['use_same_source'] = isset($data['use_same_source']) ? $data['use_same_source'] : null;
        $this->container['pivot_field_rows'] = isset($data['pivot_field_rows']) ? $data['pivot_field_rows'] : null;
        $this->container['pivot_field_columns'] = isset($data['pivot_field_columns']) ? $data['pivot_field_columns'] : null;
        $this->container['pivot_field_data'] = isset($data['pivot_field_data']) ? $data['pivot_field_data'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['source_data'] === null) {
            $invalidProperties[] = "'source_data' can't be null";
        }
        if ($this->container['dest_cell_name'] === null) {
            $invalidProperties[] = "'dest_cell_name' can't be null";
        }
        if ($this->container['use_same_source'] === null) {
            $invalidProperties[] = "'use_same_source' can't be null";
        }
        if ($this->container['pivot_field_rows'] === null) {
            $invalidProperties[] = "'pivot_field_rows' can't be null";
        }
        if ($this->container['pivot_field_columns'] === null) {
            $invalidProperties[] = "'pivot_field_columns' can't be null";
        }
        if ($this->container['pivot_field_data'] === null) {
            $invalidProperties[] = "'pivot_field_data' can't be null";
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
        if ($this->container['name'] === null) {
                    return false;
                }
        if ($this->container['source_data'] === null) {
                    return false;
                }
        if ($this->container['dest_cell_name'] === null) {
                    return false;
                }
        if ($this->container['use_same_source'] === null) {
                    return false;
                }
        if ($this->container['pivot_field_rows'] === null) {
                    return false;
                }
        if ($this->container['pivot_field_columns'] === null) {
                    return false;
                }
        if ($this->container['pivot_field_data'] === null) {
                    return false;
                }
        return true;
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
     *  Pivot table name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }
   /**
     * Gets source_data
     *
     * @return string
     */
    public function getSourceData()
    {
        return $this->container['source_data'];
    }

    /**
     * Sets source_data
     *
     *  The data for the new PivotTable cache.
     *
     * @return $this
     */
    public function setSourceData($source_data)
    {
        $this->container['source_data'] = $source_data;

        return $this;
    }
   /**
     * Gets dest_cell_name
     *
     * @return string
     */
    public function getDestCellName()
    {
        return $this->container['dest_cell_name'];
    }

    /**
     * Sets dest_cell_name
     *
     *  The cell in the upper-left corner of the PivotTable report's destination range.
     *
     * @return $this
     */
    public function setDestCellName($dest_cell_name)
    {
        $this->container['dest_cell_name'] = $dest_cell_name;

        return $this;
    }
   /**
     * Gets use_same_source
     *
     * @return bool
     */
    public function getUseSameSource()
    {
        return $this->container['use_same_source'];
    }

    /**
     * Sets use_same_source
     *
     *  Indicates whether using same data source when another existing pivot table has used this data source.If the property is true, it will save memory.
     *
     * @return $this
     */
    public function setUseSameSource($use_same_source)
    {
        $this->container['use_same_source'] = $use_same_source;

        return $this;
    }
   /**
     * Gets pivot_field_rows
     *
     * @return int[]
     */
    public function getPivotFieldRows()
    {
        return $this->container['pivot_field_rows'];
    }

    /**
     * Sets pivot_field_rows
     *
     *  Represents row fields in a PivotTable report.
     *
     * @return $this
     */
    public function setPivotFieldRows($pivot_field_rows)
    {
        $this->container['pivot_field_rows'] = $pivot_field_rows;

        return $this;
    }
   /**
     * Gets pivot_field_columns
     *
     * @return int[]
     */
    public function getPivotFieldColumns()
    {
        return $this->container['pivot_field_columns'];
    }

    /**
     * Sets pivot_field_columns
     *
     *  Represents column fields in a PivotTable report.
     *
     * @return $this
     */
    public function setPivotFieldColumns($pivot_field_columns)
    {
        $this->container['pivot_field_columns'] = $pivot_field_columns;

        return $this;
    }
   /**
     * Gets pivot_field_data
     *
     * @return int[]
     */
    public function getPivotFieldData()
    {
        return $this->container['pivot_field_data'];
    }

    /**
     * Sets pivot_field_data
     *
     *  Represents data fields in a PivotTable report.
     *
     * @return $this
     */
    public function setPivotFieldData($pivot_field_data)
    {
        $this->container['pivot_field_data'] = $pivot_field_data;

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
