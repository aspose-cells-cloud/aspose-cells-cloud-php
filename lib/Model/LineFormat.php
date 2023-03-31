<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="LineFormat.cs">
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

class LineFormat implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LineFormat';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'begin_arrowhead_length' => 'string',
        'begin_arrowhead_style' => 'string',
        'begin_arrowhead_width' => 'string',
        'cap_type' => 'string',
        'compound_type' => 'string',
        'dash_style' => 'string',
        'end_arrowhead_length' => 'string',
        'end_arrowhead_style' => 'string',
        'end_arrowhead_width' => 'string',
        'join_type' => 'string',
        'weight' => 'double',
        'type' => 'string',
        'solid_fill' => '\Aspose\Cells\Cloud\Model\SolidFill',
        'pattern_fill' => '\Aspose\Cells\Cloud\Model\PatternFill',
        'texture_fill' => '\Aspose\Cells\Cloud\Model\TextureFill',
        'gradient_fill' => '\Aspose\Cells\Cloud\Model\GradientFill',
        'image_data' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'begin_arrowhead_length' => null  ,
        'begin_arrowhead_style' => null  ,
        'begin_arrowhead_width' => null  ,
        'cap_type' => null  ,
        'compound_type' => null  ,
        'dash_style' => null  ,
        'end_arrowhead_length' => null  ,
        'end_arrowhead_style' => null  ,
        'end_arrowhead_width' => null  ,
        'join_type' => null  ,
        'weight' => null  ,
        'type' => null  ,
        'solid_fill' => null  ,
        'pattern_fill' => null  ,
        'texture_fill' => null  ,
        'gradient_fill' => null  ,
        'image_data' => null  
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
         'begin_arrowhead_length' => 'BeginArrowheadLength' ,
         'begin_arrowhead_style' => 'BeginArrowheadStyle' ,
         'begin_arrowhead_width' => 'BeginArrowheadWidth' ,
         'cap_type' => 'CapType' ,
         'compound_type' => 'CompoundType' ,
         'dash_style' => 'DashStyle' ,
         'end_arrowhead_length' => 'EndArrowheadLength' ,
         'end_arrowhead_style' => 'EndArrowheadStyle' ,
         'end_arrowhead_width' => 'EndArrowheadWidth' ,
         'join_type' => 'JoinType' ,
         'weight' => 'Weight' ,
         'type' => 'Type' ,
         'solid_fill' => 'SolidFill' ,
         'pattern_fill' => 'PatternFill' ,
         'texture_fill' => 'TextureFill' ,
         'gradient_fill' => 'GradientFill' ,
         'image_data' => 'ImageData' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'begin_arrowhead_length' => 'setBeginArrowheadLength' ,
        'begin_arrowhead_style' => 'setBeginArrowheadStyle' ,
        'begin_arrowhead_width' => 'setBeginArrowheadWidth' ,
        'cap_type' => 'setCapType' ,
        'compound_type' => 'setCompoundType' ,
        'dash_style' => 'setDashStyle' ,
        'end_arrowhead_length' => 'setEndArrowheadLength' ,
        'end_arrowhead_style' => 'setEndArrowheadStyle' ,
        'end_arrowhead_width' => 'setEndArrowheadWidth' ,
        'join_type' => 'setJoinType' ,
        'weight' => 'setWeight' ,
        'type' => 'setType' ,
        'solid_fill' => 'setSolidFill' ,
        'pattern_fill' => 'setPatternFill' ,
        'texture_fill' => 'setTextureFill' ,
        'gradient_fill' => 'setGradientFill' ,
        'image_data' => 'setImageData' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'begin_arrowhead_length' => 'getBeginArrowheadLength' ,
        'begin_arrowhead_style' => 'getBeginArrowheadStyle' ,
        'begin_arrowhead_width' => 'getBeginArrowheadWidth' ,
        'cap_type' => 'getCapType' ,
        'compound_type' => 'getCompoundType' ,
        'dash_style' => 'getDashStyle' ,
        'end_arrowhead_length' => 'getEndArrowheadLength' ,
        'end_arrowhead_style' => 'getEndArrowheadStyle' ,
        'end_arrowhead_width' => 'getEndArrowheadWidth' ,
        'join_type' => 'getJoinType' ,
        'weight' => 'getWeight' ,
        'type' => 'getType' ,
        'solid_fill' => 'getSolidFill' ,
        'pattern_fill' => 'getPatternFill' ,
        'texture_fill' => 'getTextureFill' ,
        'gradient_fill' => 'getGradientFill' ,
        'image_data' => 'getImageData' 
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
        $this->container['begin_arrowhead_length'] = isset($data['begin_arrowhead_length']) ? $data['begin_arrowhead_length'] : null;
        $this->container['begin_arrowhead_style'] = isset($data['begin_arrowhead_style']) ? $data['begin_arrowhead_style'] : null;
        $this->container['begin_arrowhead_width'] = isset($data['begin_arrowhead_width']) ? $data['begin_arrowhead_width'] : null;
        $this->container['cap_type'] = isset($data['cap_type']) ? $data['cap_type'] : null;
        $this->container['compound_type'] = isset($data['compound_type']) ? $data['compound_type'] : null;
        $this->container['dash_style'] = isset($data['dash_style']) ? $data['dash_style'] : null;
        $this->container['end_arrowhead_length'] = isset($data['end_arrowhead_length']) ? $data['end_arrowhead_length'] : null;
        $this->container['end_arrowhead_style'] = isset($data['end_arrowhead_style']) ? $data['end_arrowhead_style'] : null;
        $this->container['end_arrowhead_width'] = isset($data['end_arrowhead_width']) ? $data['end_arrowhead_width'] : null;
        $this->container['join_type'] = isset($data['join_type']) ? $data['join_type'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['solid_fill'] = isset($data['solid_fill']) ? $data['solid_fill'] : null;
        $this->container['pattern_fill'] = isset($data['pattern_fill']) ? $data['pattern_fill'] : null;
        $this->container['texture_fill'] = isset($data['texture_fill']) ? $data['texture_fill'] : null;
        $this->container['gradient_fill'] = isset($data['gradient_fill']) ? $data['gradient_fill'] : null;
        $this->container['image_data'] = isset($data['image_data']) ? $data['image_data'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['begin_arrowhead_length'] === null) {
            $invalidProperties[] = "'begin_arrowhead_length' can't be null";
        }
        if ($this->container['begin_arrowhead_style'] === null) {
            $invalidProperties[] = "'begin_arrowhead_style' can't be null";
        }
        if ($this->container['begin_arrowhead_width'] === null) {
            $invalidProperties[] = "'begin_arrowhead_width' can't be null";
        }
        if ($this->container['cap_type'] === null) {
            $invalidProperties[] = "'cap_type' can't be null";
        }
        if ($this->container['compound_type'] === null) {
            $invalidProperties[] = "'compound_type' can't be null";
        }
        if ($this->container['dash_style'] === null) {
            $invalidProperties[] = "'dash_style' can't be null";
        }
        if ($this->container['end_arrowhead_length'] === null) {
            $invalidProperties[] = "'end_arrowhead_length' can't be null";
        }
        if ($this->container['end_arrowhead_style'] === null) {
            $invalidProperties[] = "'end_arrowhead_style' can't be null";
        }
        if ($this->container['end_arrowhead_width'] === null) {
            $invalidProperties[] = "'end_arrowhead_width' can't be null";
        }
        if ($this->container['join_type'] === null) {
            $invalidProperties[] = "'join_type' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['solid_fill'] === null) {
            $invalidProperties[] = "'solid_fill' can't be null";
        }
        if ($this->container['pattern_fill'] === null) {
            $invalidProperties[] = "'pattern_fill' can't be null";
        }
        if ($this->container['texture_fill'] === null) {
            $invalidProperties[] = "'texture_fill' can't be null";
        }
        if ($this->container['gradient_fill'] === null) {
            $invalidProperties[] = "'gradient_fill' can't be null";
        }
        if ($this->container['image_data'] === null) {
            $invalidProperties[] = "'image_data' can't be null";
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
        if ($this->container['begin_arrowhead_length'] === null) {
                    return false;
                }
        if ($this->container['begin_arrowhead_style'] === null) {
                    return false;
                }
        if ($this->container['begin_arrowhead_width'] === null) {
                    return false;
                }
        if ($this->container['cap_type'] === null) {
                    return false;
                }
        if ($this->container['compound_type'] === null) {
                    return false;
                }
        if ($this->container['dash_style'] === null) {
                    return false;
                }
        if ($this->container['end_arrowhead_length'] === null) {
                    return false;
                }
        if ($this->container['end_arrowhead_style'] === null) {
                    return false;
                }
        if ($this->container['end_arrowhead_width'] === null) {
                    return false;
                }
        if ($this->container['join_type'] === null) {
                    return false;
                }
        if ($this->container['weight'] === null) {
                    return false;
                }
        if ($this->container['type'] === null) {
                    return false;
                }
        if ($this->container['solid_fill'] === null) {
                    return false;
                }
        if ($this->container['pattern_fill'] === null) {
                    return false;
                }
        if ($this->container['texture_fill'] === null) {
                    return false;
                }
        if ($this->container['gradient_fill'] === null) {
                    return false;
                }
        if ($this->container['image_data'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets begin_arrowhead_length
     *
     * @return string
     */
    public function getBeginArrowheadLength()
    {
        return $this->container['begin_arrowhead_length'];
    }

    /**
     * Sets begin_arrowhead_length
     *
     *  
     *
     * @return $this
     */
    public function setBeginArrowheadLength($begin_arrowhead_length)
    {
        $this->container['begin_arrowhead_length'] = $begin_arrowhead_length;

        return $this;
    }
   /**
     * Gets begin_arrowhead_style
     *
     * @return string
     */
    public function getBeginArrowheadStyle()
    {
        return $this->container['begin_arrowhead_style'];
    }

    /**
     * Sets begin_arrowhead_style
     *
     *  
     *
     * @return $this
     */
    public function setBeginArrowheadStyle($begin_arrowhead_style)
    {
        $this->container['begin_arrowhead_style'] = $begin_arrowhead_style;

        return $this;
    }
   /**
     * Gets begin_arrowhead_width
     *
     * @return string
     */
    public function getBeginArrowheadWidth()
    {
        return $this->container['begin_arrowhead_width'];
    }

    /**
     * Sets begin_arrowhead_width
     *
     *  
     *
     * @return $this
     */
    public function setBeginArrowheadWidth($begin_arrowhead_width)
    {
        $this->container['begin_arrowhead_width'] = $begin_arrowhead_width;

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
     *  
     *
     * @return $this
     */
    public function setCapType($cap_type)
    {
        $this->container['cap_type'] = $cap_type;

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
     *  
     *
     * @return $this
     */
    public function setCompoundType($compound_type)
    {
        $this->container['compound_type'] = $compound_type;

        return $this;
    }
   /**
     * Gets dash_style
     *
     * @return string
     */
    public function getDashStyle()
    {
        return $this->container['dash_style'];
    }

    /**
     * Sets dash_style
     *
     *  
     *
     * @return $this
     */
    public function setDashStyle($dash_style)
    {
        $this->container['dash_style'] = $dash_style;

        return $this;
    }
   /**
     * Gets end_arrowhead_length
     *
     * @return string
     */
    public function getEndArrowheadLength()
    {
        return $this->container['end_arrowhead_length'];
    }

    /**
     * Sets end_arrowhead_length
     *
     *  
     *
     * @return $this
     */
    public function setEndArrowheadLength($end_arrowhead_length)
    {
        $this->container['end_arrowhead_length'] = $end_arrowhead_length;

        return $this;
    }
   /**
     * Gets end_arrowhead_style
     *
     * @return string
     */
    public function getEndArrowheadStyle()
    {
        return $this->container['end_arrowhead_style'];
    }

    /**
     * Sets end_arrowhead_style
     *
     *  
     *
     * @return $this
     */
    public function setEndArrowheadStyle($end_arrowhead_style)
    {
        $this->container['end_arrowhead_style'] = $end_arrowhead_style;

        return $this;
    }
   /**
     * Gets end_arrowhead_width
     *
     * @return string
     */
    public function getEndArrowheadWidth()
    {
        return $this->container['end_arrowhead_width'];
    }

    /**
     * Sets end_arrowhead_width
     *
     *  
     *
     * @return $this
     */
    public function setEndArrowheadWidth($end_arrowhead_width)
    {
        $this->container['end_arrowhead_width'] = $end_arrowhead_width;

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
     *  
     *
     * @return $this
     */
    public function setJoinType($join_type)
    {
        $this->container['join_type'] = $join_type;

        return $this;
    }
   /**
     * Gets weight
     *
     * @return double
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     *  
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

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
     * Gets solid_fill
     *
     * @return \Aspose\Cells\Cloud\Model\SolidFill
     */
    public function getSolidFill()
    {
        return $this->container['solid_fill'];
    }

    /**
     * Sets solid_fill
     *
     *  
     *
     * @return $this
     */
    public function setSolidFill($solid_fill)
    {
        $this->container['solid_fill'] = $solid_fill;

        return $this;
    }
   /**
     * Gets pattern_fill
     *
     * @return \Aspose\Cells\Cloud\Model\PatternFill
     */
    public function getPatternFill()
    {
        return $this->container['pattern_fill'];
    }

    /**
     * Sets pattern_fill
     *
     *  
     *
     * @return $this
     */
    public function setPatternFill($pattern_fill)
    {
        $this->container['pattern_fill'] = $pattern_fill;

        return $this;
    }
   /**
     * Gets texture_fill
     *
     * @return \Aspose\Cells\Cloud\Model\TextureFill
     */
    public function getTextureFill()
    {
        return $this->container['texture_fill'];
    }

    /**
     * Sets texture_fill
     *
     *  
     *
     * @return $this
     */
    public function setTextureFill($texture_fill)
    {
        $this->container['texture_fill'] = $texture_fill;

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
     *  
     *
     * @return $this
     */
    public function setGradientFill($gradient_fill)
    {
        $this->container['gradient_fill'] = $gradient_fill;

        return $this;
    }
   /**
     * Gets image_data
     *
     * @return string
     */
    public function getImageData()
    {
        return $this->container['image_data'];
    }

    /**
     * Sets image_data
     *
     *  
     *
     * @return $this
     */
    public function setImageData($image_data)
    {
        $this->container['image_data'] = $image_data;

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
