<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="StyleFormatCondition.cs">
 *   Copyright (c) 2026 Aspose.Cells Cloud
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

class StyleFormatCondition
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StyleFormatCondition';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'priority' => 'int',
        'type' => 'string',
        'stop_if_true' => 'bool',
        'above_average' => '\Aspose\Cells\Cloud\Model\AboveAverage',
        'color_scale' => '\Aspose\Cells\Cloud\Model\ColorScale',
        'data_bar' => '\Aspose\Cells\Cloud\Model\DataBar',
        'formula1' => 'string',
        'formula2' => 'string',
        'icon_set' => '\Aspose\Cells\Cloud\Model\IconSet',
        'operator' => 'string',
        'style' => '\Aspose\Cells\Cloud\Model\Style',
        'text' => 'string',
        'time_period' => 'string',
        'top10' => '\Aspose\Cells\Cloud\Model\Top10',
        'link' => '\Aspose\Cells\Cloud\Model\Link'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'priority' => null  ,
        'type' => null  ,
        'stop_if_true' => null  ,
        'above_average' => null  ,
        'color_scale' => null  ,
        'data_bar' => null  ,
        'formula1' => null  ,
        'formula2' => null  ,
        'icon_set' => null  ,
        'operator' => null  ,
        'style' => null  ,
        'text' => null  ,
        'time_period' => null  ,
        'top10' => null  ,
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
         'priority' => 'Priority' ,
         'type' => 'Type' ,
         'stop_if_true' => 'StopIfTrue' ,
         'above_average' => 'AboveAverage' ,
         'color_scale' => 'ColorScale' ,
         'data_bar' => 'DataBar' ,
         'formula1' => 'Formula1' ,
         'formula2' => 'Formula2' ,
         'icon_set' => 'IconSet' ,
         'operator' => 'Operator' ,
         'style' => 'Style' ,
         'text' => 'Text' ,
         'time_period' => 'TimePeriod' ,
         'top10' => 'Top10' ,
         'link' => 'link' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'priority' => 'setPriority' ,
        'type' => 'setType' ,
        'stop_if_true' => 'setStopIfTrue' ,
        'above_average' => 'setAboveAverage' ,
        'color_scale' => 'setColorScale' ,
        'data_bar' => 'setDataBar' ,
        'formula1' => 'setFormula1' ,
        'formula2' => 'setFormula2' ,
        'icon_set' => 'setIconSet' ,
        'operator' => 'setOperator' ,
        'style' => 'setStyle' ,
        'text' => 'setText' ,
        'time_period' => 'setTimePeriod' ,
        'top10' => 'setTop10' ,
        'link' => 'setlink' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'priority' => 'getPriority' ,
        'type' => 'getType' ,
        'stop_if_true' => 'getStopIfTrue' ,
        'above_average' => 'getAboveAverage' ,
        'color_scale' => 'getColorScale' ,
        'data_bar' => 'getDataBar' ,
        'formula1' => 'getFormula1' ,
        'formula2' => 'getFormula2' ,
        'icon_set' => 'getIconSet' ,
        'operator' => 'getOperator' ,
        'style' => 'getStyle' ,
        'text' => 'getText' ,
        'time_period' => 'getTimePeriod' ,
        'top10' => 'getTop10' ,
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
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['stop_if_true'] = isset($data['stop_if_true']) ? $data['stop_if_true'] : null;
        $this->container['above_average'] = isset($data['above_average']) ? $data['above_average'] : null;
        $this->container['color_scale'] = isset($data['color_scale']) ? $data['color_scale'] : null;
        $this->container['data_bar'] = isset($data['data_bar']) ? $data['data_bar'] : null;
        $this->container['formula1'] = isset($data['formula1']) ? $data['formula1'] : null;
        $this->container['formula2'] = isset($data['formula2']) ? $data['formula2'] : null;
        $this->container['icon_set'] = isset($data['icon_set']) ? $data['icon_set'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['time_period'] = isset($data['time_period']) ? $data['time_period'] : null;
        $this->container['top10'] = isset($data['top10']) ? $data['top10'] : null;
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
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['stop_if_true'] === null) {
            $invalidProperties[] = "'stop_if_true' can't be null";
        }
        if ($this->container['above_average'] === null) {
            $invalidProperties[] = "'above_average' can't be null";
        }
        if ($this->container['color_scale'] === null) {
            $invalidProperties[] = "'color_scale' can't be null";
        }
        if ($this->container['data_bar'] === null) {
            $invalidProperties[] = "'data_bar' can't be null";
        }
        if ($this->container['formula1'] === null) {
            $invalidProperties[] = "'formula1' can't be null";
        }
        if ($this->container['formula2'] === null) {
            $invalidProperties[] = "'formula2' can't be null";
        }
        if ($this->container['icon_set'] === null) {
            $invalidProperties[] = "'icon_set' can't be null";
        }
        if ($this->container['operator'] === null) {
            $invalidProperties[] = "'operator' can't be null";
        }
        if ($this->container['style'] === null) {
            $invalidProperties[] = "'style' can't be null";
        }
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }
        if ($this->container['time_period'] === null) {
            $invalidProperties[] = "'time_period' can't be null";
        }
        if ($this->container['top10'] === null) {
            $invalidProperties[] = "'top10' can't be null";
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
        if ($this->container['priority'] === null) {
                    return false;
                }
        if ($this->container['type'] === null) {
                    return false;
                }
        if ($this->container['stop_if_true'] === null) {
                    return false;
                }
        if ($this->container['above_average'] === null) {
                    return false;
                }
        if ($this->container['color_scale'] === null) {
                    return false;
                }
        if ($this->container['data_bar'] === null) {
                    return false;
                }
        if ($this->container['formula1'] === null) {
                    return false;
                }
        if ($this->container['formula2'] === null) {
                    return false;
                }
        if ($this->container['icon_set'] === null) {
                    return false;
                }
        if ($this->container['operator'] === null) {
                    return false;
                }
        if ($this->container['style'] === null) {
                    return false;
                }
        if ($this->container['text'] === null) {
                    return false;
                }
        if ($this->container['time_period'] === null) {
                    return false;
                }
        if ($this->container['top10'] === null) {
                    return false;
                }
        if ($this->container['link'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     *  
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }
   /**
     * Gets type
     *
     * @return string
     */
    public function getType()
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
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }
   /**
     * Gets stop_if_true
     *
     * @return bool
     */
    public function getStopIfTrue()
    {
        return $this->container['stop_if_true'];
    }

    /**
     * Sets stop_if_true
     *
     *  
     *
     * @return $this
     */
    public function setStopIfTrue($stop_if_true)
    {
        $this->container['stop_if_true'] = $stop_if_true;

        return $this;
    }
   /**
     * Gets above_average
     *
     * @return \Aspose\Cells\Cloud\Model\AboveAverage
     */
    public function getAboveAverage()
    {
        return $this->container['above_average'];
    }

    /**
     * Sets above_average
     *
     *  
     *
     * @return $this
     */
    public function setAboveAverage($above_average)
    {
        $this->container['above_average'] = $above_average;

        return $this;
    }
   /**
     * Gets color_scale
     *
     * @return \Aspose\Cells\Cloud\Model\ColorScale
     */
    public function getColorScale()
    {
        return $this->container['color_scale'];
    }

    /**
     * Sets color_scale
     *
     *  
     *
     * @return $this
     */
    public function setColorScale($color_scale)
    {
        $this->container['color_scale'] = $color_scale;

        return $this;
    }
   /**
     * Gets data_bar
     *
     * @return \Aspose\Cells\Cloud\Model\DataBar
     */
    public function getDataBar()
    {
        return $this->container['data_bar'];
    }

    /**
     * Sets data_bar
     *
     *  
     *
     * @return $this
     */
    public function setDataBar($data_bar)
    {
        $this->container['data_bar'] = $data_bar;

        return $this;
    }
   /**
     * Gets formula1
     *
     * @return string
     */
    public function getFormula1()
    {
        return $this->container['formula1'];
    }

    /**
     * Sets formula1
     *
     *  
     *
     * @return $this
     */
    public function setFormula1($formula1)
    {
        $this->container['formula1'] = $formula1;

        return $this;
    }
   /**
     * Gets formula2
     *
     * @return string
     */
    public function getFormula2()
    {
        return $this->container['formula2'];
    }

    /**
     * Sets formula2
     *
     *  
     *
     * @return $this
     */
    public function setFormula2($formula2)
    {
        $this->container['formula2'] = $formula2;

        return $this;
    }
   /**
     * Gets icon_set
     *
     * @return \Aspose\Cells\Cloud\Model\IconSet
     */
    public function getIconSet()
    {
        return $this->container['icon_set'];
    }

    /**
     * Sets icon_set
     *
     *  
     *
     * @return $this
     */
    public function setIconSet($icon_set)
    {
        $this->container['icon_set'] = $icon_set;

        return $this;
    }
   /**
     * Gets operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     *  
     *
     * @return $this
     */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;

        return $this;
    }
   /**
     * Gets style
     *
     * @return \Aspose\Cells\Cloud\Model\Style
     */
    public function getStyle()
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
    public function setStyle($style)
    {
        $this->container['style'] = $style;

        return $this;
    }
   /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     *  
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }
   /**
     * Gets time_period
     *
     * @return string
     */
    public function getTimePeriod()
    {
        return $this->container['time_period'];
    }

    /**
     * Sets time_period
     *
     *  
     *
     * @return $this
     */
    public function setTimePeriod($time_period)
    {
        $this->container['time_period'] = $time_period;

        return $this;
    }
   /**
     * Gets top10
     *
     * @return \Aspose\Cells\Cloud\Model\Top10
     */
    public function getTop10()
    {
        return $this->container['top10'];
    }

    /**
     * Sets top10
     *
     *  
     *
     * @return $this
     */
    public function setTop10($top10)
    {
        $this->container['top10'] = $top10;

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
