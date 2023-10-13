<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FilterColumn.cs">
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

class FilterColumn implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FilterColumn';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'field_index' => 'int',
        'filter_type' => 'string',
        'multiple_filters' => '\Aspose\Cells\Cloud\Model\MultipleFilters',
        'color_filter' => '\Aspose\Cells\Cloud\Model\ColorFilter',
        'custom_filters' => '\Aspose\Cells\Cloud\Model\CustomFilter[]',
        'dynamic_filter' => '\Aspose\Cells\Cloud\Model\DynamicFilter',
        'icon_filter' => '\Aspose\Cells\Cloud\Model\IconFilter',
        'top10_filter' => '\Aspose\Cells\Cloud\Model\Top10Filter',
        'visibledropdown' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'field_index' => null  ,
        'filter_type' => null  ,
        'multiple_filters' => null  ,
        'color_filter' => null  ,
        'custom_filters' => null  ,
        'dynamic_filter' => null  ,
        'icon_filter' => null  ,
        'top10_filter' => null  ,
        'visibledropdown' => null  
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
         'filter_type' => 'FilterType' ,
         'multiple_filters' => 'MultipleFilters' ,
         'color_filter' => 'ColorFilter' ,
         'custom_filters' => 'CustomFilters' ,
         'dynamic_filter' => 'DynamicFilter' ,
         'icon_filter' => 'IconFilter' ,
         'top10_filter' => 'Top10Filter' ,
         'visibledropdown' => 'Visibledropdown' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'field_index' => 'setFieldIndex' ,
        'filter_type' => 'setFilterType' ,
        'multiple_filters' => 'setMultipleFilters' ,
        'color_filter' => 'setColorFilter' ,
        'custom_filters' => 'setCustomFilters' ,
        'dynamic_filter' => 'setDynamicFilter' ,
        'icon_filter' => 'setIconFilter' ,
        'top10_filter' => 'setTop10Filter' ,
        'visibledropdown' => 'setVisibledropdown' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'field_index' => 'getFieldIndex' ,
        'filter_type' => 'getFilterType' ,
        'multiple_filters' => 'getMultipleFilters' ,
        'color_filter' => 'getColorFilter' ,
        'custom_filters' => 'getCustomFilters' ,
        'dynamic_filter' => 'getDynamicFilter' ,
        'icon_filter' => 'getIconFilter' ,
        'top10_filter' => 'getTop10Filter' ,
        'visibledropdown' => 'getVisibledropdown' 
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
        $this->container['filter_type'] = isset($data['filter_type']) ? $data['filter_type'] : null;
        $this->container['multiple_filters'] = isset($data['multiple_filters']) ? $data['multiple_filters'] : null;
        $this->container['color_filter'] = isset($data['color_filter']) ? $data['color_filter'] : null;
        $this->container['custom_filters'] = isset($data['custom_filters']) ? $data['custom_filters'] : null;
        $this->container['dynamic_filter'] = isset($data['dynamic_filter']) ? $data['dynamic_filter'] : null;
        $this->container['icon_filter'] = isset($data['icon_filter']) ? $data['icon_filter'] : null;
        $this->container['top10_filter'] = isset($data['top10_filter']) ? $data['top10_filter'] : null;
        $this->container['visibledropdown'] = isset($data['visibledropdown']) ? $data['visibledropdown'] : null;
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
        if ($this->container['filter_type'] === null) {
            $invalidProperties[] = "'filter_type' can't be null";
        }
        if ($this->container['multiple_filters'] === null) {
            $invalidProperties[] = "'multiple_filters' can't be null";
        }
        if ($this->container['color_filter'] === null) {
            $invalidProperties[] = "'color_filter' can't be null";
        }
        if ($this->container['custom_filters'] === null) {
            $invalidProperties[] = "'custom_filters' can't be null";
        }
        if ($this->container['dynamic_filter'] === null) {
            $invalidProperties[] = "'dynamic_filter' can't be null";
        }
        if ($this->container['icon_filter'] === null) {
            $invalidProperties[] = "'icon_filter' can't be null";
        }
        if ($this->container['top10_filter'] === null) {
            $invalidProperties[] = "'top10_filter' can't be null";
        }
        if ($this->container['visibledropdown'] === null) {
            $invalidProperties[] = "'visibledropdown' can't be null";
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
        if ($this->container['filter_type'] === null) {
                    return false;
                }
        if ($this->container['multiple_filters'] === null) {
                    return false;
                }
        if ($this->container['color_filter'] === null) {
                    return false;
                }
        if ($this->container['custom_filters'] === null) {
                    return false;
                }
        if ($this->container['dynamic_filter'] === null) {
                    return false;
                }
        if ($this->container['icon_filter'] === null) {
                    return false;
                }
        if ($this->container['top10_filter'] === null) {
                    return false;
                }
        if ($this->container['visibledropdown'] === null) {
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
     *  Gets and sets the column offset in the range. 
     *
     * @return $this
     */
    public function setFieldIndex($field_index)
    {
        $this->container['field_index'] = $field_index;

        return $this;
    }
   /**
     * Gets filter_type
     *
     * @return string
     */
    public function getFilterType()
    {
        return $this->container['filter_type'];
    }

    /**
     * Sets filter_type
     *
     *  Gets and sets the type fo filtering data. 
     *
     * @return $this
     */
    public function setFilterType($filter_type)
    {
        $this->container['filter_type'] = $filter_type;

        return $this;
    }
   /**
     * Gets multiple_filters
     *
     * @return \Aspose\Cells\Cloud\Model\MultipleFilters
     */
    public function getMultipleFilters()
    {
        return $this->container['multiple_filters'];
    }

    /**
     * Sets multiple_filters
     *
     *  
     *
     * @return $this
     */
    public function setMultipleFilters($multiple_filters)
    {
        $this->container['multiple_filters'] = $multiple_filters;

        return $this;
    }
   /**
     * Gets color_filter
     *
     * @return \Aspose\Cells\Cloud\Model\ColorFilter
     */
    public function getColorFilter()
    {
        return $this->container['color_filter'];
    }

    /**
     * Sets color_filter
     *
     *  
     *
     * @return $this
     */
    public function setColorFilter($color_filter)
    {
        $this->container['color_filter'] = $color_filter;

        return $this;
    }
   /**
     * Gets custom_filters
     *
     * @return \Aspose\Cells\Cloud\Model\CustomFilter[]
     */
    public function getCustomFilters()
    {
        return $this->container['custom_filters'];
    }

    /**
     * Sets custom_filters
     *
     *  
     *
     * @return $this
     */
    public function setCustomFilters($custom_filters)
    {
        $this->container['custom_filters'] = $custom_filters;

        return $this;
    }
   /**
     * Gets dynamic_filter
     *
     * @return \Aspose\Cells\Cloud\Model\DynamicFilter
     */
    public function getDynamicFilter()
    {
        return $this->container['dynamic_filter'];
    }

    /**
     * Sets dynamic_filter
     *
     *  
     *
     * @return $this
     */
    public function setDynamicFilter($dynamic_filter)
    {
        $this->container['dynamic_filter'] = $dynamic_filter;

        return $this;
    }
   /**
     * Gets icon_filter
     *
     * @return \Aspose\Cells\Cloud\Model\IconFilter
     */
    public function getIconFilter()
    {
        return $this->container['icon_filter'];
    }

    /**
     * Sets icon_filter
     *
     *  
     *
     * @return $this
     */
    public function setIconFilter($icon_filter)
    {
        $this->container['icon_filter'] = $icon_filter;

        return $this;
    }
   /**
     * Gets top10_filter
     *
     * @return \Aspose\Cells\Cloud\Model\Top10Filter
     */
    public function getTop10Filter()
    {
        return $this->container['top10_filter'];
    }

    /**
     * Sets top10_filter
     *
     *  
     *
     * @return $this
     */
    public function setTop10Filter($top10_filter)
    {
        $this->container['top10_filter'] = $top10_filter;

        return $this;
    }
   /**
     * Gets visibledropdown
     *
     * @return string
     */
    public function getVisibledropdown()
    {
        return $this->container['visibledropdown'];
    }

    /**
     * Sets visibledropdown
     *
     *  Indicates whether the AutoFilter button for this column is visible. 
     *
     * @return $this
     */
    public function setVisibledropdown($visibledropdown)
    {
        $this->container['visibledropdown'] = $visibledropdown;

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
