<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Title.cs">
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

class Title
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Title';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_visible' => 'bool',
        'linked_source' => 'string',
        'rotation_angle' => 'int',
        'text' => 'string',
        'text_direction' => 'string',
        'text_horizontal_alignment' => 'string',
        'text_vertical_alignment' => 'string',
        'area' => '\Aspose\Cells\Cloud\Model\Area',
        'auto_scale_font' => 'bool',
        'background_mode' => 'string',
        'border' => '\Aspose\Cells\Cloud\Model\Line',
        'font' => '\Aspose\Cells\Cloud\Model\Font',
        'is_automatic_size' => 'bool',
        'is_inner_mode' => 'bool',
        'shadow' => 'bool',
        'width' => 'int',
        'height' => 'int',
        'x' => 'int',
        'y' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_visible' => null  ,
        'linked_source' => null  ,
        'rotation_angle' => null  ,
        'text' => null  ,
        'text_direction' => null  ,
        'text_horizontal_alignment' => null  ,
        'text_vertical_alignment' => null  ,
        'area' => null  ,
        'auto_scale_font' => null  ,
        'background_mode' => null  ,
        'border' => null  ,
        'font' => null  ,
        'is_automatic_size' => null  ,
        'is_inner_mode' => null  ,
        'shadow' => null  ,
        'width' => null  ,
        'height' => null  ,
        'x' => null  ,
        'y' => null  
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
         'is_visible' => 'IsVisible' ,
         'linked_source' => 'LinkedSource' ,
         'rotation_angle' => 'RotationAngle' ,
         'text' => 'Text' ,
         'text_direction' => 'TextDirection' ,
         'text_horizontal_alignment' => 'TextHorizontalAlignment' ,
         'text_vertical_alignment' => 'TextVerticalAlignment' ,
         'area' => 'Area' ,
         'auto_scale_font' => 'AutoScaleFont' ,
         'background_mode' => 'BackgroundMode' ,
         'border' => 'Border' ,
         'font' => 'Font' ,
         'is_automatic_size' => 'IsAutomaticSize' ,
         'is_inner_mode' => 'IsInnerMode' ,
         'shadow' => 'Shadow' ,
         'width' => 'Width' ,
         'height' => 'Height' ,
         'x' => 'X' ,
         'y' => 'Y' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_visible' => 'setIsVisible' ,
        'linked_source' => 'setLinkedSource' ,
        'rotation_angle' => 'setRotationAngle' ,
        'text' => 'setText' ,
        'text_direction' => 'setTextDirection' ,
        'text_horizontal_alignment' => 'setTextHorizontalAlignment' ,
        'text_vertical_alignment' => 'setTextVerticalAlignment' ,
        'area' => 'setArea' ,
        'auto_scale_font' => 'setAutoScaleFont' ,
        'background_mode' => 'setBackgroundMode' ,
        'border' => 'setBorder' ,
        'font' => 'setFont' ,
        'is_automatic_size' => 'setIsAutomaticSize' ,
        'is_inner_mode' => 'setIsInnerMode' ,
        'shadow' => 'setShadow' ,
        'width' => 'setWidth' ,
        'height' => 'setHeight' ,
        'x' => 'setX' ,
        'y' => 'setY' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_visible' => 'getIsVisible' ,
        'linked_source' => 'getLinkedSource' ,
        'rotation_angle' => 'getRotationAngle' ,
        'text' => 'getText' ,
        'text_direction' => 'getTextDirection' ,
        'text_horizontal_alignment' => 'getTextHorizontalAlignment' ,
        'text_vertical_alignment' => 'getTextVerticalAlignment' ,
        'area' => 'getArea' ,
        'auto_scale_font' => 'getAutoScaleFont' ,
        'background_mode' => 'getBackgroundMode' ,
        'border' => 'getBorder' ,
        'font' => 'getFont' ,
        'is_automatic_size' => 'getIsAutomaticSize' ,
        'is_inner_mode' => 'getIsInnerMode' ,
        'shadow' => 'getShadow' ,
        'width' => 'getWidth' ,
        'height' => 'getHeight' ,
        'x' => 'getX' ,
        'y' => 'getY' 
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
        $this->container['is_visible'] = isset($data['is_visible']) ? $data['is_visible'] : null;
        $this->container['linked_source'] = isset($data['linked_source']) ? $data['linked_source'] : null;
        $this->container['rotation_angle'] = isset($data['rotation_angle']) ? $data['rotation_angle'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['text_direction'] = isset($data['text_direction']) ? $data['text_direction'] : null;
        $this->container['text_horizontal_alignment'] = isset($data['text_horizontal_alignment']) ? $data['text_horizontal_alignment'] : null;
        $this->container['text_vertical_alignment'] = isset($data['text_vertical_alignment']) ? $data['text_vertical_alignment'] : null;
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['auto_scale_font'] = isset($data['auto_scale_font']) ? $data['auto_scale_font'] : null;
        $this->container['background_mode'] = isset($data['background_mode']) ? $data['background_mode'] : null;
        $this->container['border'] = isset($data['border']) ? $data['border'] : null;
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
        $this->container['is_automatic_size'] = isset($data['is_automatic_size']) ? $data['is_automatic_size'] : null;
        $this->container['is_inner_mode'] = isset($data['is_inner_mode']) ? $data['is_inner_mode'] : null;
        $this->container['shadow'] = isset($data['shadow']) ? $data['shadow'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['x'] = isset($data['x']) ? $data['x'] : null;
        $this->container['y'] = isset($data['y']) ? $data['y'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['is_visible'] === null) {
            $invalidProperties[] = "'is_visible' can't be null";
        }
        if ($this->container['linked_source'] === null) {
            $invalidProperties[] = "'linked_source' can't be null";
        }
        if ($this->container['rotation_angle'] === null) {
            $invalidProperties[] = "'rotation_angle' can't be null";
        }
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }
        if ($this->container['text_direction'] === null) {
            $invalidProperties[] = "'text_direction' can't be null";
        }
        if ($this->container['text_horizontal_alignment'] === null) {
            $invalidProperties[] = "'text_horizontal_alignment' can't be null";
        }
        if ($this->container['text_vertical_alignment'] === null) {
            $invalidProperties[] = "'text_vertical_alignment' can't be null";
        }
        if ($this->container['area'] === null) {
            $invalidProperties[] = "'area' can't be null";
        }
        if ($this->container['auto_scale_font'] === null) {
            $invalidProperties[] = "'auto_scale_font' can't be null";
        }
        if ($this->container['background_mode'] === null) {
            $invalidProperties[] = "'background_mode' can't be null";
        }
        if ($this->container['border'] === null) {
            $invalidProperties[] = "'border' can't be null";
        }
        if ($this->container['font'] === null) {
            $invalidProperties[] = "'font' can't be null";
        }
        if ($this->container['is_automatic_size'] === null) {
            $invalidProperties[] = "'is_automatic_size' can't be null";
        }
        if ($this->container['is_inner_mode'] === null) {
            $invalidProperties[] = "'is_inner_mode' can't be null";
        }
        if ($this->container['shadow'] === null) {
            $invalidProperties[] = "'shadow' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['x'] === null) {
            $invalidProperties[] = "'x' can't be null";
        }
        if ($this->container['y'] === null) {
            $invalidProperties[] = "'y' can't be null";
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
        if ($this->container['is_visible'] === null) {
                    return false;
                }
        if ($this->container['linked_source'] === null) {
                    return false;
                }
        if ($this->container['rotation_angle'] === null) {
                    return false;
                }
        if ($this->container['text'] === null) {
                    return false;
                }
        if ($this->container['text_direction'] === null) {
                    return false;
                }
        if ($this->container['text_horizontal_alignment'] === null) {
                    return false;
                }
        if ($this->container['text_vertical_alignment'] === null) {
                    return false;
                }
        if ($this->container['area'] === null) {
                    return false;
                }
        if ($this->container['auto_scale_font'] === null) {
                    return false;
                }
        if ($this->container['background_mode'] === null) {
                    return false;
                }
        if ($this->container['border'] === null) {
                    return false;
                }
        if ($this->container['font'] === null) {
                    return false;
                }
        if ($this->container['is_automatic_size'] === null) {
                    return false;
                }
        if ($this->container['is_inner_mode'] === null) {
                    return false;
                }
        if ($this->container['shadow'] === null) {
                    return false;
                }
        if ($this->container['width'] === null) {
                    return false;
                }
        if ($this->container['height'] === null) {
                    return false;
                }
        if ($this->container['x'] === null) {
                    return false;
                }
        if ($this->container['y'] === null) {
                    return false;
                }
        return true;
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
     *  Represents whether the title is visible.
     *
     * @return $this
     */
    public function setIsVisible($is_visible)
    {
        $this->container['is_visible'] = $is_visible;

        return $this;
    }
   /**
     * Gets linked_source
     *
     * @return string
     */
    public function getLinkedSource()
    {
        return $this->container['linked_source'];
    }

    /**
     * Sets linked_source
     *
     *  A property named LinkedSource with both set and get accessors is defined.
     *
     * @return $this
     */
    public function setLinkedSource($linked_source)
    {
        $this->container['linked_source'] = $linked_source;

        return $this;
    }
   /**
     * Gets rotation_angle
     *
     * @return int
     */
    public function getRotationAngle()
    {
        return $this->container['rotation_angle'];
    }

    /**
     * Sets rotation_angle
     *
     *  
     *
     * @return $this
     */
    public function setRotationAngle($rotation_angle)
    {
        $this->container['rotation_angle'] = $rotation_angle;

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
     *  Gets or sets the text of display unit label.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }
   /**
     * Gets text_direction
     *
     * @return string
     */
    public function getTextDirection()
    {
        return $this->container['text_direction'];
    }

    /**
     * Sets text_direction
     *
     *  
     *
     * @return $this
     */
    public function setTextDirection($text_direction)
    {
        $this->container['text_direction'] = $text_direction;

        return $this;
    }
   /**
     * Gets text_horizontal_alignment
     *
     * @return string
     */
    public function getTextHorizontalAlignment()
    {
        return $this->container['text_horizontal_alignment'];
    }

    /**
     * Sets text_horizontal_alignment
     *
     *  
     *
     * @return $this
     */
    public function setTextHorizontalAlignment($text_horizontal_alignment)
    {
        $this->container['text_horizontal_alignment'] = $text_horizontal_alignment;

        return $this;
    }
   /**
     * Gets text_vertical_alignment
     *
     * @return string
     */
    public function getTextVerticalAlignment()
    {
        return $this->container['text_vertical_alignment'];
    }

    /**
     * Sets text_vertical_alignment
     *
     *  
     *
     * @return $this
     */
    public function setTextVerticalAlignment($text_vertical_alignment)
    {
        $this->container['text_vertical_alignment'] = $text_vertical_alignment;

        return $this;
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
     *  
     *
     * @return $this
     */
    public function setArea($area)
    {
        $this->container['area'] = $area;

        return $this;
    }
   /**
     * Gets auto_scale_font
     *
     * @return bool
     */
    public function getAutoScaleFont()
    {
        return $this->container['auto_scale_font'];
    }

    /**
     * Sets auto_scale_font
     *
     *  
     *
     * @return $this
     */
    public function setAutoScaleFont($auto_scale_font)
    {
        $this->container['auto_scale_font'] = $auto_scale_font;

        return $this;
    }
   /**
     * Gets background_mode
     *
     * @return string
     */
    public function getBackgroundMode()
    {
        return $this->container['background_mode'];
    }

    /**
     * Sets background_mode
     *
     *  
     *
     * @return $this
     */
    public function setBackgroundMode($background_mode)
    {
        $this->container['background_mode'] = $background_mode;

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
     *  
     *
     * @return $this
     */
    public function setBorder($border)
    {
        $this->container['border'] = $border;

        return $this;
    }
   /**
     * Gets font
     *
     * @return \Aspose\Cells\Cloud\Model\Font
     */
    public function getFont()
    {
        return $this->container['font'];
    }

    /**
     * Sets font
     *
     *  
     *
     * @return $this
     */
    public function setFont($font)
    {
        $this->container['font'] = $font;

        return $this;
    }
   /**
     * Gets is_automatic_size
     *
     * @return bool
     */
    public function getIsAutomaticSize()
    {
        return $this->container['is_automatic_size'];
    }

    /**
     * Sets is_automatic_size
     *
     *  
     *
     * @return $this
     */
    public function setIsAutomaticSize($is_automatic_size)
    {
        $this->container['is_automatic_size'] = $is_automatic_size;

        return $this;
    }
   /**
     * Gets is_inner_mode
     *
     * @return bool
     */
    public function getIsInnerMode()
    {
        return $this->container['is_inner_mode'];
    }

    /**
     * Sets is_inner_mode
     *
     *  
     *
     * @return $this
     */
    public function setIsInnerMode($is_inner_mode)
    {
        $this->container['is_inner_mode'] = $is_inner_mode;

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
     *  
     *
     * @return $this
     */
    public function setShadow($shadow)
    {
        $this->container['shadow'] = $shadow;

        return $this;
    }
   /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     *  
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }
   /**
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     *  
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }
   /**
     * Gets x
     *
     * @return int
     */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
     * Sets x
     *
     *  
     *
     * @return $this
     */
    public function setX($x)
    {
        $this->container['x'] = $x;

        return $this;
    }
   /**
     * Gets y
     *
     * @return int
     */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
     * Sets y
     *
     *  
     *
     * @return $this
     */
    public function setY($y)
    {
        $this->container['y'] = $y;

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
