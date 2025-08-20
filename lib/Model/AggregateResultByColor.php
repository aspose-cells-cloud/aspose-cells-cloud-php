<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AggregateResultByColor.cs">
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

class AggregateResultByColor
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AggregateResultByColor';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'aggregate_operation' => 'string',
        'color_name' => 'string',
        'count' => 'int',
        'sum' => 'double',
        'max_value' => 'double',
        'min_value' => 'double',
        'average_value' => 'double',
        'value' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'aggregate_operation' => null  ,
        'color_name' => null  ,
        'count' => null  ,
        'sum' => null  ,
        'max_value' => null  ,
        'min_value' => null  ,
        'average_value' => null  ,
        'value' => null  
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
         'aggregate_operation' => 'AggregateOperation' ,
         'color_name' => 'ColorName' ,
         'count' => 'Count' ,
         'sum' => 'Sum' ,
         'max_value' => 'MaxValue' ,
         'min_value' => 'MinValue' ,
         'average_value' => 'AverageValue' ,
         'value' => 'Value' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aggregate_operation' => 'setAggregateOperation' ,
        'color_name' => 'setColorName' ,
        'count' => 'setCount' ,
        'sum' => 'setSum' ,
        'max_value' => 'setMaxValue' ,
        'min_value' => 'setMinValue' ,
        'average_value' => 'setAverageValue' ,
        'value' => 'setValue' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aggregate_operation' => 'getAggregateOperation' ,
        'color_name' => 'getColorName' ,
        'count' => 'getCount' ,
        'sum' => 'getSum' ,
        'max_value' => 'getMaxValue' ,
        'min_value' => 'getMinValue' ,
        'average_value' => 'getAverageValue' ,
        'value' => 'getValue' 
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
        $this->container['aggregate_operation'] = isset($data['aggregate_operation']) ? $data['aggregate_operation'] : null;
        $this->container['color_name'] = isset($data['color_name']) ? $data['color_name'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['sum'] = isset($data['sum']) ? $data['sum'] : null;
        $this->container['max_value'] = isset($data['max_value']) ? $data['max_value'] : null;
        $this->container['min_value'] = isset($data['min_value']) ? $data['min_value'] : null;
        $this->container['average_value'] = isset($data['average_value']) ? $data['average_value'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['aggregate_operation'] === null) {
            $invalidProperties[] = "'aggregate_operation' can't be null";
        }
        if ($this->container['color_name'] === null) {
            $invalidProperties[] = "'color_name' can't be null";
        }
        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
        if ($this->container['sum'] === null) {
            $invalidProperties[] = "'sum' can't be null";
        }
        if ($this->container['max_value'] === null) {
            $invalidProperties[] = "'max_value' can't be null";
        }
        if ($this->container['min_value'] === null) {
            $invalidProperties[] = "'min_value' can't be null";
        }
        if ($this->container['average_value'] === null) {
            $invalidProperties[] = "'average_value' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
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
        if ($this->container['aggregate_operation'] === null) {
                    return false;
                }
        if ($this->container['color_name'] === null) {
                    return false;
                }
        if ($this->container['count'] === null) {
                    return false;
                }
        if ($this->container['sum'] === null) {
                    return false;
                }
        if ($this->container['max_value'] === null) {
                    return false;
                }
        if ($this->container['min_value'] === null) {
                    return false;
                }
        if ($this->container['average_value'] === null) {
                    return false;
                }
        if ($this->container['value'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets aggregate_operation
     *
     * @return string
     */
    public function getAggregateOperation()
    {
        return $this->container['aggregate_operation'];
    }

    /**
     * Sets aggregate_operation
     *
     *  
     *
     * @return $this
     */
    public function setAggregateOperation($aggregate_operation)
    {
        $this->container['aggregate_operation'] = $aggregate_operation;

        return $this;
    }
   /**
     * Gets color_name
     *
     * @return string
     */
    public function getColorName()
    {
        return $this->container['color_name'];
    }

    /**
     * Sets color_name
     *
     *  
     *
     * @return $this
     */
    public function setColorName($color_name)
    {
        $this->container['color_name'] = $color_name;

        return $this;
    }
   /**
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     *  
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }
   /**
     * Gets sum
     *
     * @return double
     */
    public function getSum()
    {
        return $this->container['sum'];
    }

    /**
     * Sets sum
     *
     *  
     *
     * @return $this
     */
    public function setSum($sum)
    {
        $this->container['sum'] = $sum;

        return $this;
    }
   /**
     * Gets max_value
     *
     * @return double
     */
    public function getMaxValue()
    {
        return $this->container['max_value'];
    }

    /**
     * Sets max_value
     *
     *  
     *
     * @return $this
     */
    public function setMaxValue($max_value)
    {
        $this->container['max_value'] = $max_value;

        return $this;
    }
   /**
     * Gets min_value
     *
     * @return double
     */
    public function getMinValue()
    {
        return $this->container['min_value'];
    }

    /**
     * Sets min_value
     *
     *  
     *
     * @return $this
     */
    public function setMinValue($min_value)
    {
        $this->container['min_value'] = $min_value;

        return $this;
    }
   /**
     * Gets average_value
     *
     * @return double
     */
    public function getAverageValue()
    {
        return $this->container['average_value'];
    }

    /**
     * Sets average_value
     *
     *  
     *
     * @return $this
     */
    public function setAverageValue($average_value)
    {
        $this->container['average_value'] = $average_value;

        return $this;
    }
   /**
     * Gets value
     *
     * @return double
     */
    public function getValue()
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
    public function setValue($value)
    {
        $this->container['value'] = $value;

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
