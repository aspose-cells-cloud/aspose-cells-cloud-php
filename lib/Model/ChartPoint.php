<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ChartPoint.cs">
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

class ChartPoint
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChartPoint';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'area' => '\Aspose\Cells\Cloud\Model\Area',
        'border' => '\Aspose\Cells\Cloud\Model\Line',
        'data_labels' => '\Aspose\Cells\Cloud\Model\DataLabels',
        'explosion' => 'int',
        'marker' => '\Aspose\Cells\Cloud\Model\Marker',
        'shadow' => 'bool',
        'x_value' => 'string',
        'y_value' => 'string',
        'is_in_secondary_plot' => 'bool',
        'link' => '\Aspose\Cells\Cloud\Model\Link'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'area' => null  ,
        'border' => null  ,
        'data_labels' => null  ,
        'explosion' => null  ,
        'marker' => null  ,
        'shadow' => null  ,
        'x_value' => null  ,
        'y_value' => null  ,
        'is_in_secondary_plot' => null  ,
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
         'area' => 'Area' ,
         'border' => 'Border' ,
         'data_labels' => 'DataLabels' ,
         'explosion' => 'Explosion' ,
         'marker' => 'Marker' ,
         'shadow' => 'Shadow' ,
         'x_value' => 'XValue' ,
         'y_value' => 'YValue' ,
         'is_in_secondary_plot' => 'IsInSecondaryPlot' ,
         'link' => 'link' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'area' => 'setArea' ,
        'border' => 'setBorder' ,
        'data_labels' => 'setDataLabels' ,
        'explosion' => 'setExplosion' ,
        'marker' => 'setMarker' ,
        'shadow' => 'setShadow' ,
        'x_value' => 'setXValue' ,
        'y_value' => 'setYValue' ,
        'is_in_secondary_plot' => 'setIsInSecondaryPlot' ,
        'link' => 'setlink' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'area' => 'getArea' ,
        'border' => 'getBorder' ,
        'data_labels' => 'getDataLabels' ,
        'explosion' => 'getExplosion' ,
        'marker' => 'getMarker' ,
        'shadow' => 'getShadow' ,
        'x_value' => 'getXValue' ,
        'y_value' => 'getYValue' ,
        'is_in_secondary_plot' => 'getIsInSecondaryPlot' ,
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
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['border'] = isset($data['border']) ? $data['border'] : null;
        $this->container['data_labels'] = isset($data['data_labels']) ? $data['data_labels'] : null;
        $this->container['explosion'] = isset($data['explosion']) ? $data['explosion'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['shadow'] = isset($data['shadow']) ? $data['shadow'] : null;
        $this->container['x_value'] = isset($data['x_value']) ? $data['x_value'] : null;
        $this->container['y_value'] = isset($data['y_value']) ? $data['y_value'] : null;
        $this->container['is_in_secondary_plot'] = isset($data['is_in_secondary_plot']) ? $data['is_in_secondary_plot'] : null;
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
        if ($this->container['area'] === null) {
            $invalidProperties[] = "'area' can't be null";
        }
        if ($this->container['border'] === null) {
            $invalidProperties[] = "'border' can't be null";
        }
        if ($this->container['data_labels'] === null) {
            $invalidProperties[] = "'data_labels' can't be null";
        }
        if ($this->container['explosion'] === null) {
            $invalidProperties[] = "'explosion' can't be null";
        }
        if ($this->container['marker'] === null) {
            $invalidProperties[] = "'marker' can't be null";
        }
        if ($this->container['shadow'] === null) {
            $invalidProperties[] = "'shadow' can't be null";
        }
        if ($this->container['x_value'] === null) {
            $invalidProperties[] = "'x_value' can't be null";
        }
        if ($this->container['y_value'] === null) {
            $invalidProperties[] = "'y_value' can't be null";
        }
        if ($this->container['is_in_secondary_plot'] === null) {
            $invalidProperties[] = "'is_in_secondary_plot' can't be null";
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
        if ($this->container['area'] === null) {
                    return false;
                }
        if ($this->container['border'] === null) {
                    return false;
                }
        if ($this->container['data_labels'] === null) {
                    return false;
                }
        if ($this->container['explosion'] === null) {
                    return false;
                }
        if ($this->container['marker'] === null) {
                    return false;
                }
        if ($this->container['shadow'] === null) {
                    return false;
                }
        if ($this->container['x_value'] === null) {
                    return false;
                }
        if ($this->container['y_value'] === null) {
                    return false;
                }
        if ($this->container['is_in_secondary_plot'] === null) {
                    return false;
                }
        if ($this->container['link'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets area
     *
     * @return \Aspose\Cells\Cloud\Model\Area
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area
     *
     *  Gets the area.
     *
     * @return $this
     */
    public function setArea($area)
    {
        $this->container['area'] = $area;

        return $this;
    }
   /**
     * Gets border
     *
     * @return \Aspose\Cells\Cloud\Model\Line
     */
    public function getBorder()
    {
        return $this->container['border'];
    }

    /**
     * Sets border
     *
     *  Gets the border.
     *
     * @return $this
     */
    public function setBorder($border)
    {
        $this->container['border'] = $border;

        return $this;
    }
   /**
     * Gets data_labels
     *
     * @return \Aspose\Cells\Cloud\Model\DataLabels
     */
    public function getDataLabels()
    {
        return $this->container['data_labels'];
    }

    /**
     * Sets data_labels
     *
     *  Returns a DataLabels object that represents the data label associated with the point.
     *
     * @return $this
     */
    public function setDataLabels($data_labels)
    {
        $this->container['data_labels'] = $data_labels;

        return $this;
    }
   /**
     * Gets explosion
     *
     * @return int
     */
    public function getExplosion()
    {
        return $this->container['explosion'];
    }

    /**
     * Sets explosion
     *
     *  The distance of an open pie slice from the center of the pie chart is expressed as a percentage of the pie diameter.
     *
     * @return $this
     */
    public function setExplosion($explosion)
    {
        $this->container['explosion'] = $explosion;

        return $this;
    }
   /**
     * Gets marker
     *
     * @return \Aspose\Cells\Cloud\Model\Marker
     */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
     * Sets marker
     *
     *  Gets the marker.
     *
     * @return $this
     */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;

        return $this;
    }
   /**
     * Gets shadow
     *
     * @return bool
     */
    public function getShadow()
    {
        return $this->container['shadow'];
    }

    /**
     * Sets shadow
     *
     *  True if the chartpoint has a shadow.
     *
     * @return $this
     */
    public function setShadow($shadow)
    {
        $this->container['shadow'] = $shadow;

        return $this;
    }
   /**
     * Gets x_value
     *
     * @return string
     */
    public function getXValue()
    {
        return $this->container['x_value'];
    }

    /**
     * Sets x_value
     *
     *  Gets or sets the X value of the chart point.
     *
     * @return $this
     */
    public function setXValue($x_value)
    {
        $this->container['x_value'] = $x_value;

        return $this;
    }
   /**
     * Gets y_value
     *
     * @return string
     */
    public function getYValue()
    {
        return $this->container['y_value'];
    }

    /**
     * Sets y_value
     *
     *  Gets or sets the Y value of the chart point.
     *
     * @return $this
     */
    public function setYValue($y_value)
    {
        $this->container['y_value'] = $y_value;

        return $this;
    }
   /**
     * Gets is_in_secondary_plot
     *
     * @return bool
     */
    public function getIsInSecondaryPlot()
    {
        return $this->container['is_in_secondary_plot'];
    }

    /**
     * Sets is_in_secondary_plot
     *
     *  Gets or sets a value indicates whether this data points is in the second pie or bar on a pie of pie or bar of pie chart.
     *
     * @return $this
     */
    public function setIsInSecondaryPlot($is_in_secondary_plot)
    {
        $this->container['is_in_secondary_plot'] = $is_in_secondary_plot;

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
