<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Top10Filter.cs">
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

class Top10Filter
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Top10Filter';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'field_index' => 'int',
        'criteria' => 'string',
        'is_percent' => 'bool',
        'is_top' => 'bool',
        'items' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'field_index' => null  ,
        'criteria' => null  ,
        'is_percent' => null  ,
        'is_top' => null  ,
        'items' => null  
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
         'field_index' => 'FieldIndex' ,
         'criteria' => 'Criteria' ,
         'is_percent' => 'IsPercent' ,
         'is_top' => 'IsTop' ,
         'items' => 'Items' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'field_index' => 'setFieldIndex' ,
        'criteria' => 'setCriteria' ,
        'is_percent' => 'setIsPercent' ,
        'is_top' => 'setIsTop' ,
        'items' => 'setItems' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'field_index' => 'getFieldIndex' ,
        'criteria' => 'getCriteria' ,
        'is_percent' => 'getIsPercent' ,
        'is_top' => 'getIsTop' ,
        'items' => 'getItems' 
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
        $this->container['field_index'] = isset($data['field_index']) ? $data['field_index'] : null;
        $this->container['criteria'] = isset($data['criteria']) ? $data['criteria'] : null;
        $this->container['is_percent'] = isset($data['is_percent']) ? $data['is_percent'] : null;
        $this->container['is_top'] = isset($data['is_top']) ? $data['is_top'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['field_index'] === null) {
            $invalidProperties[] = "'field_index' can't be null";
        }
        if ($this->container['criteria'] === null) {
            $invalidProperties[] = "'criteria' can't be null";
        }
        if ($this->container['is_percent'] === null) {
            $invalidProperties[] = "'is_percent' can't be null";
        }
        if ($this->container['is_top'] === null) {
            $invalidProperties[] = "'is_top' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
        if ($this->container['field_index'] === null) {
                    return false;
                }
        if ($this->container['criteria'] === null) {
                    return false;
                }
        if ($this->container['is_percent'] === null) {
                    return false;
                }
        if ($this->container['is_top'] === null) {
                    return false;
                }
        if ($this->container['items'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets field_index
     *
     * @return int
     */
    public function getFieldIndex()
    {
        return $this->container['field_index'];
    }

    /**
     * Sets field_index
     *
     *  
     *
     * @return $this
     */
    public function setFieldIndex($field_index)
    {
        $this->container['field_index'] = $field_index;

        return $this;
    }
   /**
     * Gets criteria
     *
     * @return string
     */
    public function getCriteria()
    {
        return $this->container['criteria'];
    }

    /**
     * Sets criteria
     *
     *   
     *
     * @return $this
     */
    public function setCriteria($criteria)
    {
        $this->container['criteria'] = $criteria;

        return $this;
    }
   /**
     * Gets is_percent
     *
     * @return bool
     */
    public function getIsPercent()
    {
        return $this->container['is_percent'];
    }

    /**
     * Sets is_percent
     *
     *  Indicates whether the items is percent. 
     *
     * @return $this
     */
    public function setIsPercent($is_percent)
    {
        $this->container['is_percent'] = $is_percent;

        return $this;
    }
   /**
     * Gets is_top
     *
     * @return bool
     */
    public function getIsTop()
    {
        return $this->container['is_top'];
    }

    /**
     * Sets is_top
     *
     *  Indicates whether it's top filter. 
     *
     * @return $this
     */
    public function setIsTop($is_top)
    {
        $this->container['is_top'] = $is_top;

        return $this;
    }
   /**
     * Gets items
     *
     * @return int
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     *  Gets and sets the items of the filter. 
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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
