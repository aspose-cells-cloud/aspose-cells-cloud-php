<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Line.cs">
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

class Line
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Line';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'begin_arrow_length' => 'string',
        'begin_arrow_width' => 'string',
        'begin_type' => 'string',
        'cap_type' => 'string',
        'color' => '\Aspose\Cells\Cloud\Model\Color',
        'compound_type' => 'string',
        'dash_type' => 'string',
        'end_arrow_length' => 'string',
        'end_arrow_width' => 'string',
        'end_type' => 'string',
        'gradient_fill' => '\Aspose\Cells\Cloud\Model\GradientFill',
        'is_auto' => 'bool',
        'is_automatic_color' => 'bool',
        'is_visible' => 'bool',
        'join_type' => 'string',
        'style' => 'string',
        'transparency' => 'double',
        'weight' => 'string',
        'weight_pt' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'begin_arrow_length' => null  ,
        'begin_arrow_width' => null  ,
        'begin_type' => null  ,
        'cap_type' => null  ,
        'color' => null  ,
        'compound_type' => null  ,
        'dash_type' => null  ,
        'end_arrow_length' => null  ,
        'end_arrow_width' => null  ,
        'end_type' => null  ,
        'gradient_fill' => null  ,
        'is_auto' => null  ,
        'is_automatic_color' => null  ,
        'is_visible' => null  ,
        'join_type' => null  ,
        'style' => null  ,
        'transparency' => null  ,
        'weight' => null  ,
        'weight_pt' => null  
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
         'begin_arrow_length' => 'BeginArrowLength' ,
         'begin_arrow_width' => 'BeginArrowWidth' ,
         'begin_type' => 'BeginType' ,
         'cap_type' => 'CapType' ,
         'color' => 'Color' ,
         'compound_type' => 'CompoundType' ,
         'dash_type' => 'DashType' ,
         'end_arrow_length' => 'EndArrowLength' ,
         'end_arrow_width' => 'EndArrowWidth' ,
         'end_type' => 'EndType' ,
         'gradient_fill' => 'GradientFill' ,
         'is_auto' => 'IsAuto' ,
         'is_automatic_color' => 'IsAutomaticColor' ,
         'is_visible' => 'IsVisible' ,
         'join_type' => 'JoinType' ,
         'style' => 'Style' ,
         'transparency' => 'Transparency' ,
         'weight' => 'Weight' ,
         'weight_pt' => 'WeightPt' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'begin_arrow_length' => 'setBeginArrowLength' ,
        'begin_arrow_width' => 'setBeginArrowWidth' ,
        'begin_type' => 'setBeginType' ,
        'cap_type' => 'setCapType' ,
        'color' => 'setColor' ,
        'compound_type' => 'setCompoundType' ,
        'dash_type' => 'setDashType' ,
        'end_arrow_length' => 'setEndArrowLength' ,
        'end_arrow_width' => 'setEndArrowWidth' ,
        'end_type' => 'setEndType' ,
        'gradient_fill' => 'setGradientFill' ,
        'is_auto' => 'setIsAuto' ,
        'is_automatic_color' => 'setIsAutomaticColor' ,
        'is_visible' => 'setIsVisible' ,
        'join_type' => 'setJoinType' ,
        'style' => 'setStyle' ,
        'transparency' => 'setTransparency' ,
        'weight' => 'setWeight' ,
        'weight_pt' => 'setWeightPt' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'begin_arrow_length' => 'getBeginArrowLength' ,
        'begin_arrow_width' => 'getBeginArrowWidth' ,
        'begin_type' => 'getBeginType' ,
        'cap_type' => 'getCapType' ,
        'color' => 'getColor' ,
        'compound_type' => 'getCompoundType' ,
        'dash_type' => 'getDashType' ,
        'end_arrow_length' => 'getEndArrowLength' ,
        'end_arrow_width' => 'getEndArrowWidth' ,
        'end_type' => 'getEndType' ,
        'gradient_fill' => 'getGradientFill' ,
        'is_auto' => 'getIsAuto' ,
        'is_automatic_color' => 'getIsAutomaticColor' ,
        'is_visible' => 'getIsVisible' ,
        'join_type' => 'getJoinType' ,
        'style' => 'getStyle' ,
        'transparency' => 'getTransparency' ,
        'weight' => 'getWeight' ,
        'weight_pt' => 'getWeightPt' 
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
        $this->container['begin_arrow_length'] = isset($data['begin_arrow_length']) ? $data['begin_arrow_length'] : null;
        $this->container['begin_arrow_width'] = isset($data['begin_arrow_width']) ? $data['begin_arrow_width'] : null;
        $this->container['begin_type'] = isset($data['begin_type']) ? $data['begin_type'] : null;
        $this->container['cap_type'] = isset($data['cap_type']) ? $data['cap_type'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['compound_type'] = isset($data['compound_type']) ? $data['compound_type'] : null;
        $this->container['dash_type'] = isset($data['dash_type']) ? $data['dash_type'] : null;
        $this->container['end_arrow_length'] = isset($data['end_arrow_length']) ? $data['end_arrow_length'] : null;
        $this->container['end_arrow_width'] = isset($data['end_arrow_width']) ? $data['end_arrow_width'] : null;
        $this->container['end_type'] = isset($data['end_type']) ? $data['end_type'] : null;
        $this->container['gradient_fill'] = isset($data['gradient_fill']) ? $data['gradient_fill'] : null;
        $this->container['is_auto'] = isset($data['is_auto']) ? $data['is_auto'] : null;
        $this->container['is_automatic_color'] = isset($data['is_automatic_color']) ? $data['is_automatic_color'] : null;
        $this->container['is_visible'] = isset($data['is_visible']) ? $data['is_visible'] : null;
        $this->container['join_type'] = isset($data['join_type']) ? $data['join_type'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
        $this->container['transparency'] = isset($data['transparency']) ? $data['transparency'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['weight_pt'] = isset($data['weight_pt']) ? $data['weight_pt'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['begin_arrow_length'] === null) {
            $invalidProperties[] = "'begin_arrow_length' can't be null";
        }
        if ($this->container['begin_arrow_width'] === null) {
            $invalidProperties[] = "'begin_arrow_width' can't be null";
        }
        if ($this->container['begin_type'] === null) {
            $invalidProperties[] = "'begin_type' can't be null";
        }
        if ($this->container['cap_type'] === null) {
            $invalidProperties[] = "'cap_type' can't be null";
        }
        if ($this->container['color'] === null) {
            $invalidProperties[] = "'color' can't be null";
        }
        if ($this->container['compound_type'] === null) {
            $invalidProperties[] = "'compound_type' can't be null";
        }
        if ($this->container['dash_type'] === null) {
            $invalidProperties[] = "'dash_type' can't be null";
        }
        if ($this->container['end_arrow_length'] === null) {
            $invalidProperties[] = "'end_arrow_length' can't be null";
        }
        if ($this->container['end_arrow_width'] === null) {
            $invalidProperties[] = "'end_arrow_width' can't be null";
        }
        if ($this->container['end_type'] === null) {
            $invalidProperties[] = "'end_type' can't be null";
        }
        if ($this->container['gradient_fill'] === null) {
            $invalidProperties[] = "'gradient_fill' can't be null";
        }
        if ($this->container['is_auto'] === null) {
            $invalidProperties[] = "'is_auto' can't be null";
        }
        if ($this->container['is_automatic_color'] === null) {
            $invalidProperties[] = "'is_automatic_color' can't be null";
        }
        if ($this->container['is_visible'] === null) {
            $invalidProperties[] = "'is_visible' can't be null";
        }
        if ($this->container['join_type'] === null) {
            $invalidProperties[] = "'join_type' can't be null";
        }
        if ($this->container['style'] === null) {
            $invalidProperties[] = "'style' can't be null";
        }
        if ($this->container['transparency'] === null) {
            $invalidProperties[] = "'transparency' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
        if ($this->container['weight_pt'] === null) {
            $invalidProperties[] = "'weight_pt' can't be null";
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
        if ($this->container['begin_arrow_length'] === null) {
                    return false;
                }
        if ($this->container['begin_arrow_width'] === null) {
                    return false;
                }
        if ($this->container['begin_type'] === null) {
                    return false;
                }
        if ($this->container['cap_type'] === null) {
                    return false;
                }
        if ($this->container['color'] === null) {
                    return false;
                }
        if ($this->container['compound_type'] === null) {
                    return false;
                }
        if ($this->container['dash_type'] === null) {
                    return false;
                }
        if ($this->container['end_arrow_length'] === null) {
                    return false;
                }
        if ($this->container['end_arrow_width'] === null) {
                    return false;
                }
        if ($this->container['end_type'] === null) {
                    return false;
                }
        if ($this->container['gradient_fill'] === null) {
                    return false;
                }
        if ($this->container['is_auto'] === null) {
                    return false;
                }
        if ($this->container['is_automatic_color'] === null) {
                    return false;
                }
        if ($this->container['is_visible'] === null) {
                    return false;
                }
        if ($this->container['join_type'] === null) {
                    return false;
                }
        if ($this->container['style'] === null) {
                    return false;
                }
        if ($this->container['transparency'] === null) {
                    return false;
                }
        if ($this->container['weight'] === null) {
                    return false;
                }
        if ($this->container['weight_pt'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets begin_arrow_length
     *
     * @return string
     */
    public function getBeginArrowLength()
    {
        return $this->container['begin_arrow_length'];
    }

    /**
     * Sets begin_arrow_length
     *
     *  Specifies the length of the arrowhead for the begin of a line. 
     *
     * @return $this
     */
    public function setBeginArrowLength($begin_arrow_length)
    {
        $this->container['begin_arrow_length'] = $begin_arrow_length;

        return $this;
    }
   /**
     * Gets begin_arrow_width
     *
     * @return string
     */
    public function getBeginArrowWidth()
    {
        return $this->container['begin_arrow_width'];
    }

    /**
     * Sets begin_arrow_width
     *
     *  Specifies the width of the arrowhead for the begin of a line. 
     *
     * @return $this
     */
    public function setBeginArrowWidth($begin_arrow_width)
    {
        $this->container['begin_arrow_width'] = $begin_arrow_width;

        return $this;
    }
   /**
     * Gets begin_type
     *
     * @return string
     */
    public function getBeginType()
    {
        return $this->container['begin_type'];
    }

    /**
     * Sets begin_type
     *
     *  Specifies an arrowhead for the begin of a line. 
     *
     * @return $this
     */
    public function setBeginType($begin_type)
    {
        $this->container['begin_type'] = $begin_type;

        return $this;
    }
   /**
     * Gets cap_type
     *
     * @return string
     */
    public function getCapType()
    {
        return $this->container['cap_type'];
    }

    /**
     * Sets cap_type
     *
     *  Specifies the ending caps. 
     *
     * @return $this
     */
    public function setCapType($cap_type)
    {
        $this->container['cap_type'] = $cap_type;

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
     *  Represents the  of the line. 
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }
   /**
     * Gets compound_type
     *
     * @return string
     */
    public function getCompoundType()
    {
        return $this->container['compound_type'];
    }

    /**
     * Sets compound_type
     *
     *  Specifies the compound line type 
     *
     * @return $this
     */
    public function setCompoundType($compound_type)
    {
        $this->container['compound_type'] = $compound_type;

        return $this;
    }
   /**
     * Gets dash_type
     *
     * @return string
     */
    public function getDashType()
    {
        return $this->container['dash_type'];
    }

    /**
     * Sets dash_type
     *
     *  Specifies the dash line type 
     *
     * @return $this
     */
    public function setDashType($dash_type)
    {
        $this->container['dash_type'] = $dash_type;

        return $this;
    }
   /**
     * Gets end_arrow_length
     *
     * @return string
     */
    public function getEndArrowLength()
    {
        return $this->container['end_arrow_length'];
    }

    /**
     * Sets end_arrow_length
     *
     *  Specifies the length of the arrowhead for the end of a line. 
     *
     * @return $this
     */
    public function setEndArrowLength($end_arrow_length)
    {
        $this->container['end_arrow_length'] = $end_arrow_length;

        return $this;
    }
   /**
     * Gets end_arrow_width
     *
     * @return string
     */
    public function getEndArrowWidth()
    {
        return $this->container['end_arrow_width'];
    }

    /**
     * Sets end_arrow_width
     *
     *  Specifies the width of the arrowhead for the end of a line. 
     *
     * @return $this
     */
    public function setEndArrowWidth($end_arrow_width)
    {
        $this->container['end_arrow_width'] = $end_arrow_width;

        return $this;
    }
   /**
     * Gets end_type
     *
     * @return string
     */
    public function getEndType()
    {
        return $this->container['end_type'];
    }

    /**
     * Sets end_type
     *
     *  Specifies an arrowhead for the end of a line. 
     *
     * @return $this
     */
    public function setEndType($end_type)
    {
        $this->container['end_type'] = $end_type;

        return $this;
    }
   /**
     * Gets gradient_fill
     *
     * @return \Aspose\Cells\Cloud\Model\GradientFill
     */
    public function getGradientFill()
    {
        return $this->container['gradient_fill'];
    }

    /**
     * Sets gradient_fill
     *
     *  Represents gradient fill. 
     *
     * @return $this
     */
    public function setGradientFill($gradient_fill)
    {
        $this->container['gradient_fill'] = $gradient_fill;

        return $this;
    }
   /**
     * Gets is_auto
     *
     * @return bool
     */
    public function getIsAuto()
    {
        return $this->container['is_auto'];
    }

    /**
     * Sets is_auto
     *
     *  Indicates whether this line style is auto assigned. 
     *
     * @return $this
     */
    public function setIsAuto($is_auto)
    {
        $this->container['is_auto'] = $is_auto;

        return $this;
    }
   /**
     * Gets is_automatic_color
     *
     * @return bool
     */
    public function getIsAutomaticColor()
    {
        return $this->container['is_automatic_color'];
    }

    /**
     * Sets is_automatic_color
     *
     *  Indicates whether the color of line is automatic assigned. 
     *
     * @return $this
     */
    public function setIsAutomaticColor($is_automatic_color)
    {
        $this->container['is_automatic_color'] = $is_automatic_color;

        return $this;
    }
   /**
     * Gets is_visible
     *
     * @return bool
     */
    public function getIsVisible()
    {
        return $this->container['is_visible'];
    }

    /**
     * Sets is_visible
     *
     *  Represents whether the line is visible. 
     *
     * @return $this
     */
    public function setIsVisible($is_visible)
    {
        $this->container['is_visible'] = $is_visible;

        return $this;
    }
   /**
     * Gets join_type
     *
     * @return string
     */
    public function getJoinType()
    {
        return $this->container['join_type'];
    }

    /**
     * Sets join_type
     *
     *  Specifies the joining caps. 
     *
     * @return $this
     */
    public function setJoinType($join_type)
    {
        $this->container['join_type'] = $join_type;

        return $this;
    }
   /**
     * Gets style
     *
     * @return string
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style
     *
     *  Represents the style of the line. 
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $this->container['style'] = $style;

        return $this;
    }
   /**
     * Gets transparency
     *
     * @return double
     */
    public function getTransparency()
    {
        return $this->container['transparency'];
    }

    /**
     * Sets transparency
     *
     *  Returns or sets the degree of transparency of the line as a value from 0.0 (opaque) through 1.0 (clear). 
     *
     * @return $this
     */
    public function setTransparency($transparency)
    {
        $this->container['transparency'] = $transparency;

        return $this;
    }
   /**
     * Gets weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     *  Gets or sets the  of the line. 
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }
   /**
     * Gets weight_pt
     *
     * @return double
     */
    public function getWeightPt()
    {
        return $this->container['weight_pt'];
    }

    /**
     * Sets weight_pt
     *
     *  Gets or sets the weight of the line in unit of points. 
     *
     * @return $this
     */
    public function setWeightPt($weight_pt)
    {
        $this->container['weight_pt'] = $weight_pt;

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
