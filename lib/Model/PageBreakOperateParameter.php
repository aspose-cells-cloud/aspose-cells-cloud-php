<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PageBreakOperateParameter.cs">
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

use \ArrayAccess;
use \Aspose\Cells\Cloud\ObjectSerializer;

class PageBreakOperateParameter implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PageBreakOperateParameter';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'page_break_type' => 'string',
        'index' => 'int',
        'row' => 'int',
        'column' => 'int',
        'start_index' => 'int',
        'end_index' => 'int',
        'operate_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'page_break_type' => null  ,
        'index' => null  ,
        'row' => null  ,
        'column' => null  ,
        'start_index' => null  ,
        'end_index' => null  ,
        'operate_type' => null  
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
         'page_break_type' => 'PageBreakType' ,
         'index' => 'Index' ,
         'row' => 'Row' ,
         'column' => 'Column' ,
         'start_index' => 'StartIndex' ,
         'end_index' => 'EndIndex' ,
         'operate_type' => 'OperateType' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'page_break_type' => 'setPageBreakType' ,
        'index' => 'setIndex' ,
        'row' => 'setRow' ,
        'column' => 'setColumn' ,
        'start_index' => 'setStartIndex' ,
        'end_index' => 'setEndIndex' ,
        'operate_type' => 'setOperateType' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'page_break_type' => 'getPageBreakType' ,
        'index' => 'getIndex' ,
        'row' => 'getRow' ,
        'column' => 'getColumn' ,
        'start_index' => 'getStartIndex' ,
        'end_index' => 'getEndIndex' ,
        'operate_type' => 'getOperateType' 
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
        $this->container['page_break_type'] = isset($data['page_break_type']) ? $data['page_break_type'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['row'] = isset($data['row']) ? $data['row'] : null;
        $this->container['column'] = isset($data['column']) ? $data['column'] : null;
        $this->container['start_index'] = isset($data['start_index']) ? $data['start_index'] : null;
        $this->container['end_index'] = isset($data['end_index']) ? $data['end_index'] : null;
        $this->container['operate_type'] = isset($data['operate_type']) ? $data['operate_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['page_break_type'] === null) {
            $invalidProperties[] = "'page_break_type' can't be null";
        }
        if ($this->container['index'] === null) {
            $invalidProperties[] = "'index' can't be null";
        }
        if ($this->container['row'] === null) {
            $invalidProperties[] = "'row' can't be null";
        }
        if ($this->container['column'] === null) {
            $invalidProperties[] = "'column' can't be null";
        }
        if ($this->container['start_index'] === null) {
            $invalidProperties[] = "'start_index' can't be null";
        }
        if ($this->container['end_index'] === null) {
            $invalidProperties[] = "'end_index' can't be null";
        }
        if ($this->container['operate_type'] === null) {
            $invalidProperties[] = "'operate_type' can't be null";
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
        if ($this->container['page_break_type'] === null) {
                    return false;
                }
        if ($this->container['index'] === null) {
                    return false;
                }
        if ($this->container['row'] === null) {
                    return false;
                }
        if ($this->container['column'] === null) {
                    return false;
                }
        if ($this->container['start_index'] === null) {
                    return false;
                }
        if ($this->container['end_index'] === null) {
                    return false;
                }
        if ($this->container['operate_type'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets page_break_type
     *
     * @return string
     */
    public function getPageBreakType()
    {
        return $this->container['page_break_type'];
    }

    /**
     * Sets page_break_type
     *
     *  
     *
     * @return $this
     */
    public function setPageBreakType($page_break_type)
    {
        $this->container['page_break_type'] = $page_break_type;

        return $this;
    }
   /**
     * Gets index
     *
     * @return int
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     *  
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }
   /**
     * Gets row
     *
     * @return int
     */
    public function getRow()
    {
        return $this->container['row'];
    }

    /**
     * Sets row
     *
     *  
     *
     * @return $this
     */
    public function setRow($row)
    {
        $this->container['row'] = $row;

        return $this;
    }
   /**
     * Gets column
     *
     * @return int
     */
    public function getColumn()
    {
        return $this->container['column'];
    }

    /**
     * Sets column
     *
     *  
     *
     * @return $this
     */
    public function setColumn($column)
    {
        $this->container['column'] = $column;

        return $this;
    }
   /**
     * Gets start_index
     *
     * @return int
     */
    public function getStartIndex()
    {
        return $this->container['start_index'];
    }

    /**
     * Sets start_index
     *
     *  
     *
     * @return $this
     */
    public function setStartIndex($start_index)
    {
        $this->container['start_index'] = $start_index;

        return $this;
    }
   /**
     * Gets end_index
     *
     * @return int
     */
    public function getEndIndex()
    {
        return $this->container['end_index'];
    }

    /**
     * Sets end_index
     *
     *  
     *
     * @return $this
     */
    public function setEndIndex($end_index)
    {
        $this->container['end_index'] = $end_index;

        return $this;
    }
   /**
     * Gets operate_type
     *
     * @return string
     */
    public function getOperateType()
    {
        return $this->container['operate_type'];
    }

    /**
     * Sets operate_type
     *
     *  
     *
     * @return $this
     */
    public function setOperateType($operate_type)
    {
        $this->container['operate_type'] = $operate_type;

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
