<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CellValue.cs">
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

class CellValue implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CellValue';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'row_index' => 'int',
        'column_index' => 'int',
        'type' => 'string',
        'value' => 'string',
        'formula' => 'string',
        'style' => '\Aspose\Cells\Cloud\Model\Style'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'row_index' => null  ,
        'column_index' => null  ,
        'type' => null  ,
        'value' => null  ,
        'formula' => null  ,
        'style' => null  
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
         'row_index' => 'rowIndex' ,
         'column_index' => 'columnIndex' ,
         'type' => 'type' ,
         'value' => 'value' ,
         'formula' => 'formula' ,
         'style' => 'style' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'row_index' => 'setrowIndex' ,
        'column_index' => 'setcolumnIndex' ,
        'type' => 'settype' ,
        'value' => 'setvalue' ,
        'formula' => 'setformula' ,
        'style' => 'setstyle' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'row_index' => 'getrowIndex' ,
        'column_index' => 'getcolumnIndex' ,
        'type' => 'gettype' ,
        'value' => 'getvalue' ,
        'formula' => 'getformula' ,
        'style' => 'getstyle' 
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
        $this->container['row_index'] = isset($data['row_index']) ? $data['row_index'] : null;
        $this->container['column_index'] = isset($data['column_index']) ? $data['column_index'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['formula'] = isset($data['formula']) ? $data['formula'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['row_index'] === null) {
            $invalidProperties[] = "'row_index' can't be null";
        }
        if ($this->container['column_index'] === null) {
            $invalidProperties[] = "'column_index' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['formula'] === null) {
            $invalidProperties[] = "'formula' can't be null";
        }
        if ($this->container['style'] === null) {
            $invalidProperties[] = "'style' can't be null";
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
        if ($this->container['row_index'] === null) {
                    return false;
                }
        if ($this->container['column_index'] === null) {
                    return false;
                }
        if ($this->container['type'] === null) {
                    return false;
                }
        if ($this->container['value'] === null) {
                    return false;
                }
        if ($this->container['formula'] === null) {
                    return false;
                }
        if ($this->container['style'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets row_index
     *
     * @return int
     */
    public function getrowIndex()
    {
        return $this->container['row_index'];
    }

    /**
     * Sets row_index
     *
     *  
     *
     * @return $this
     */
    public function setrowIndex($row_index)
    {
        $this->container['row_index'] = $row_index;

        return $this;
    }
   /**
     * Gets column_index
     *
     * @return int
     */
    public function getcolumnIndex()
    {
        return $this->container['column_index'];
    }

    /**
     * Sets column_index
     *
     *  
     *
     * @return $this
     */
    public function setcolumnIndex($column_index)
    {
        $this->container['column_index'] = $column_index;

        return $this;
    }
   /**
     * Gets type
     *
     * @return string
     */
    public function gettype()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     *  
     *
     * @return $this
     */
    public function settype($type)
    {
        $this->container['type'] = $type;

        return $this;
    }
   /**
     * Gets value
     *
     * @return string
     */
    public function getvalue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     *  
     *
     * @return $this
     */
    public function setvalue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }
   /**
     * Gets formula
     *
     * @return string
     */
    public function getformula()
    {
        return $this->container['formula'];
    }

    /**
     * Sets formula
     *
     *  
     *
     * @return $this
     */
    public function setformula($formula)
    {
        $this->container['formula'] = $formula;

        return $this;
    }
   /**
     * Gets style
     *
     * @return \Aspose\Cells\Cloud\Model\Style
     */
    public function getstyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style
     *
     *  
     *
     * @return $this
     */
    public function setstyle($style)
    {
        $this->container['style'] = $style;

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
