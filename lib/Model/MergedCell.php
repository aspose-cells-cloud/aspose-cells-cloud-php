<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MergedCell.cs">
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

class MergedCell implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MergedCell';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'end_column' => 'int',
        'end_row' => 'int',
        'start_column' => 'int',
        'start_row' => 'int',
        'link' => '\Aspose\Cells\Cloud\Model\Link'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'end_column' => null  ,
        'end_row' => null  ,
        'start_column' => null  ,
        'start_row' => null  ,
        'link' => null  
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
         'end_column' => 'EndColumn' ,
         'end_row' => 'EndRow' ,
         'start_column' => 'StartColumn' ,
         'start_row' => 'StartRow' ,
         'link' => 'link' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'end_column' => 'setEndColumn' ,
        'end_row' => 'setEndRow' ,
        'start_column' => 'setStartColumn' ,
        'start_row' => 'setStartRow' ,
        'link' => 'setlink' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'end_column' => 'getEndColumn' ,
        'end_row' => 'getEndRow' ,
        'start_column' => 'getStartColumn' ,
        'start_row' => 'getStartRow' ,
        'link' => 'getlink' 
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
        $this->container['end_column'] = isset($data['end_column']) ? $data['end_column'] : null;
        $this->container['end_row'] = isset($data['end_row']) ? $data['end_row'] : null;
        $this->container['start_column'] = isset($data['start_column']) ? $data['start_column'] : null;
        $this->container['start_row'] = isset($data['start_row']) ? $data['start_row'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['end_column'] === null) {
            $invalidProperties[] = "'end_column' can't be null";
        }
        if ($this->container['end_row'] === null) {
            $invalidProperties[] = "'end_row' can't be null";
        }
        if ($this->container['start_column'] === null) {
            $invalidProperties[] = "'start_column' can't be null";
        }
        if ($this->container['start_row'] === null) {
            $invalidProperties[] = "'start_row' can't be null";
        }
        if ($this->container['link'] === null) {
            $invalidProperties[] = "'link' can't be null";
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
        if ($this->container['end_column'] === null) {
                    return false;
                }
        if ($this->container['end_row'] === null) {
                    return false;
                }
        if ($this->container['start_column'] === null) {
                    return false;
                }
        if ($this->container['start_row'] === null) {
                    return false;
                }
        if ($this->container['link'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets end_column
     *
     * @return int
     */
    public function getEndColumn()
    {
        return $this->container['end_column'];
    }

    /**
     * Sets end_column
     *
     *  
     *
     * @return $this
     */
    public function setEndColumn($end_column)
    {
        $this->container['end_column'] = $end_column;

        return $this;
    }
   /**
     * Gets end_row
     *
     * @return int
     */
    public function getEndRow()
    {
        return $this->container['end_row'];
    }

    /**
     * Sets end_row
     *
     *  
     *
     * @return $this
     */
    public function setEndRow($end_row)
    {
        $this->container['end_row'] = $end_row;

        return $this;
    }
   /**
     * Gets start_column
     *
     * @return int
     */
    public function getStartColumn()
    {
        return $this->container['start_column'];
    }

    /**
     * Sets start_column
     *
     *  
     *
     * @return $this
     */
    public function setStartColumn($start_column)
    {
        $this->container['start_column'] = $start_column;

        return $this;
    }
   /**
     * Gets start_row
     *
     * @return int
     */
    public function getStartRow()
    {
        return $this->container['start_row'];
    }

    /**
     * Sets start_row
     *
     *  
     *
     * @return $this
     */
    public function setStartRow($start_row)
    {
        $this->container['start_row'] = $start_row;

        return $this;
    }
   /**
     * Gets link
     *
     * @return \Aspose\Cells\Cloud\Model\Link
     */
    public function getlink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     *  
     *
     * @return $this
     */
    public function setlink($link)
    {
        $this->container['link'] = $link;

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
