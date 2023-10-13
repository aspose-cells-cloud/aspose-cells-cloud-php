<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DataBar.cs">
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

class DataBar implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DataBar';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'axis_color' => '\Aspose\Cells\Cloud\Model\Color',
        'axis_position' => 'string',
        'bar_border' => '\Aspose\Cells\Cloud\Model\DataBarBorder',
        'bar_fill_type' => 'string',
        'color' => '\Aspose\Cells\Cloud\Model\Color',
        'direction' => 'string',
        'max_cfvo' => '\Aspose\Cells\Cloud\Model\ConditionalFormattingValue',
        'max_length' => 'int',
        'min_cfvo' => '\Aspose\Cells\Cloud\Model\ConditionalFormattingValue',
        'min_length' => 'int',
        'negative_bar_format' => '\Aspose\Cells\Cloud\Model\NegativeBarFormat',
        'show_value' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'axis_color' => null  ,
        'axis_position' => null  ,
        'bar_border' => null  ,
        'bar_fill_type' => null  ,
        'color' => null  ,
        'direction' => null  ,
        'max_cfvo' => null  ,
        'max_length' => null  ,
        'min_cfvo' => null  ,
        'min_length' => null  ,
        'negative_bar_format' => null  ,
        'show_value' => null  
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
         'axis_color' => 'AxisColor' ,
         'axis_position' => 'AxisPosition' ,
         'bar_border' => 'BarBorder' ,
         'bar_fill_type' => 'BarFillType' ,
         'color' => 'Color' ,
         'direction' => 'Direction' ,
         'max_cfvo' => 'MaxCfvo' ,
         'max_length' => 'MaxLength' ,
         'min_cfvo' => 'MinCfvo' ,
         'min_length' => 'MinLength' ,
         'negative_bar_format' => 'NegativeBarFormat' ,
         'show_value' => 'ShowValue' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'axis_color' => 'setAxisColor' ,
        'axis_position' => 'setAxisPosition' ,
        'bar_border' => 'setBarBorder' ,
        'bar_fill_type' => 'setBarFillType' ,
        'color' => 'setColor' ,
        'direction' => 'setDirection' ,
        'max_cfvo' => 'setMaxCfvo' ,
        'max_length' => 'setMaxLength' ,
        'min_cfvo' => 'setMinCfvo' ,
        'min_length' => 'setMinLength' ,
        'negative_bar_format' => 'setNegativeBarFormat' ,
        'show_value' => 'setShowValue' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'axis_color' => 'getAxisColor' ,
        'axis_position' => 'getAxisPosition' ,
        'bar_border' => 'getBarBorder' ,
        'bar_fill_type' => 'getBarFillType' ,
        'color' => 'getColor' ,
        'direction' => 'getDirection' ,
        'max_cfvo' => 'getMaxCfvo' ,
        'max_length' => 'getMaxLength' ,
        'min_cfvo' => 'getMinCfvo' ,
        'min_length' => 'getMinLength' ,
        'negative_bar_format' => 'getNegativeBarFormat' ,
        'show_value' => 'getShowValue' 
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
        $this->container['axis_color'] = isset($data['axis_color']) ? $data['axis_color'] : null;
        $this->container['axis_position'] = isset($data['axis_position']) ? $data['axis_position'] : null;
        $this->container['bar_border'] = isset($data['bar_border']) ? $data['bar_border'] : null;
        $this->container['bar_fill_type'] = isset($data['bar_fill_type']) ? $data['bar_fill_type'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['max_cfvo'] = isset($data['max_cfvo']) ? $data['max_cfvo'] : null;
        $this->container['max_length'] = isset($data['max_length']) ? $data['max_length'] : null;
        $this->container['min_cfvo'] = isset($data['min_cfvo']) ? $data['min_cfvo'] : null;
        $this->container['min_length'] = isset($data['min_length']) ? $data['min_length'] : null;
        $this->container['negative_bar_format'] = isset($data['negative_bar_format']) ? $data['negative_bar_format'] : null;
        $this->container['show_value'] = isset($data['show_value']) ? $data['show_value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['axis_color'] === null) {
            $invalidProperties[] = "'axis_color' can't be null";
        }
        if ($this->container['axis_position'] === null) {
            $invalidProperties[] = "'axis_position' can't be null";
        }
        if ($this->container['bar_border'] === null) {
            $invalidProperties[] = "'bar_border' can't be null";
        }
        if ($this->container['bar_fill_type'] === null) {
            $invalidProperties[] = "'bar_fill_type' can't be null";
        }
        if ($this->container['color'] === null) {
            $invalidProperties[] = "'color' can't be null";
        }
        if ($this->container['direction'] === null) {
            $invalidProperties[] = "'direction' can't be null";
        }
        if ($this->container['max_cfvo'] === null) {
            $invalidProperties[] = "'max_cfvo' can't be null";
        }
        if ($this->container['max_length'] === null) {
            $invalidProperties[] = "'max_length' can't be null";
        }
        if ($this->container['min_cfvo'] === null) {
            $invalidProperties[] = "'min_cfvo' can't be null";
        }
        if ($this->container['min_length'] === null) {
            $invalidProperties[] = "'min_length' can't be null";
        }
        if ($this->container['negative_bar_format'] === null) {
            $invalidProperties[] = "'negative_bar_format' can't be null";
        }
        if ($this->container['show_value'] === null) {
            $invalidProperties[] = "'show_value' can't be null";
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
        if ($this->container['axis_color'] === null) {
                    return false;
                }
        if ($this->container['axis_position'] === null) {
                    return false;
                }
        if ($this->container['bar_border'] === null) {
                    return false;
                }
        if ($this->container['bar_fill_type'] === null) {
                    return false;
                }
        if ($this->container['color'] === null) {
                    return false;
                }
        if ($this->container['direction'] === null) {
                    return false;
                }
        if ($this->container['max_cfvo'] === null) {
                    return false;
                }
        if ($this->container['max_length'] === null) {
                    return false;
                }
        if ($this->container['min_cfvo'] === null) {
                    return false;
                }
        if ($this->container['min_length'] === null) {
                    return false;
                }
        if ($this->container['negative_bar_format'] === null) {
                    return false;
                }
        if ($this->container['show_value'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets axis_color
     *
     * @return \Aspose\Cells\Cloud\Model\Color
     */
    public function getAxisColor()
    {
        return $this->container['axis_color'];
    }

    /**
     * Sets axis_color
     *
     *  Gets the color of the axis for cells with conditional formatting as data bars. 
     *
     * @return $this
     */
    public function setAxisColor($axis_color)
    {
        $this->container['axis_color'] = $axis_color;

        return $this;
    }
   /**
     * Gets axis_position
     *
     * @return string
     */
    public function getAxisPosition()
    {
        return $this->container['axis_position'];
    }

    /**
     * Sets axis_position
     *
     *  Gets or sets the position of the axis of the data bars specified by a conditional formatting rule. 
     *
     * @return $this
     */
    public function setAxisPosition($axis_position)
    {
        $this->container['axis_position'] = $axis_position;

        return $this;
    }
   /**
     * Gets bar_border
     *
     * @return \Aspose\Cells\Cloud\Model\DataBarBorder
     */
    public function getBarBorder()
    {
        return $this->container['bar_border'];
    }

    /**
     * Sets bar_border
     *
     *  Gets an object that specifies the border of a data bar. 
     *
     * @return $this
     */
    public function setBarBorder($bar_border)
    {
        $this->container['bar_border'] = $bar_border;

        return $this;
    }
   /**
     * Gets bar_fill_type
     *
     * @return string
     */
    public function getBarFillType()
    {
        return $this->container['bar_fill_type'];
    }

    /**
     * Sets bar_fill_type
     *
     *  Gets or sets how a data bar is filled with color. 
     *
     * @return $this
     */
    public function setBarFillType($bar_fill_type)
    {
        $this->container['bar_fill_type'] = $bar_fill_type;

        return $this;
    }
   /**
     * Gets color
     *
     * @return \Aspose\Cells\Cloud\Model\Color
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     *  Get or set this DataBar's Color. 
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }
   /**
     * Gets direction
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     *  Gets or sets the direction the databar is displayed. 
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;

        return $this;
    }
   /**
     * Gets max_cfvo
     *
     * @return \Aspose\Cells\Cloud\Model\ConditionalFormattingValue
     */
    public function getMaxCfvo()
    {
        return $this->container['max_cfvo'];
    }

    /**
     * Sets max_cfvo
     *
     *  Get or set this DataBar's max value object.            Cannot set null or CFValueObject with type FormatConditionValueType.Min to it. 
     *
     * @return $this
     */
    public function setMaxCfvo($max_cfvo)
    {
        $this->container['max_cfvo'] = $max_cfvo;

        return $this;
    }
   /**
     * Gets max_length
     *
     * @return int
     */
    public function getMaxLength()
    {
        return $this->container['max_length'];
    }

    /**
     * Sets max_length
     *
     *  Represents the max length of data bar . 
     *
     * @return $this
     */
    public function setMaxLength($max_length)
    {
        $this->container['max_length'] = $max_length;

        return $this;
    }
   /**
     * Gets min_cfvo
     *
     * @return \Aspose\Cells\Cloud\Model\ConditionalFormattingValue
     */
    public function getMinCfvo()
    {
        return $this->container['min_cfvo'];
    }

    /**
     * Sets min_cfvo
     *
     *  Get or set this DataBar's min value object.            Cannot set null or CFValueObject with type FormatConditionValueType.Max to it. 
     *
     * @return $this
     */
    public function setMinCfvo($min_cfvo)
    {
        $this->container['min_cfvo'] = $min_cfvo;

        return $this;
    }
   /**
     * Gets min_length
     *
     * @return int
     */
    public function getMinLength()
    {
        return $this->container['min_length'];
    }

    /**
     * Sets min_length
     *
     *  Represents the min length of data bar . 
     *
     * @return $this
     */
    public function setMinLength($min_length)
    {
        $this->container['min_length'] = $min_length;

        return $this;
    }
   /**
     * Gets negative_bar_format
     *
     * @return \Aspose\Cells\Cloud\Model\NegativeBarFormat
     */
    public function getNegativeBarFormat()
    {
        return $this->container['negative_bar_format'];
    }

    /**
     * Sets negative_bar_format
     *
     *  Gets the NegativeBarFormat object associated with a data bar conditional formatting rule. 
     *
     * @return $this
     */
    public function setNegativeBarFormat($negative_bar_format)
    {
        $this->container['negative_bar_format'] = $negative_bar_format;

        return $this;
    }
   /**
     * Gets show_value
     *
     * @return bool
     */
    public function getShowValue()
    {
        return $this->container['show_value'];
    }

    /**
     * Sets show_value
     *
     *  Get or set the flag indicating whether to show the values of the cells on which this data bar is applied.            Default value is true. 
     *
     * @return $this
     */
    public function setShowValue($show_value)
    {
        $this->container['show_value'] = $show_value;

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
