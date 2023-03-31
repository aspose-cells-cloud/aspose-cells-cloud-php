<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Walls.cs">
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

class Walls implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Walls';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'center_x' => 'int',
        'center_y' => 'int',
        'depth' => 'int',
        'height' => 'int',
        'width' => 'int',
        'border' => '\Aspose\Cells\Cloud\Model\Line',
        'background_color' => '\Aspose\Cells\Cloud\Model\Color',
        'fill_format' => '\Aspose\Cells\Cloud\Model\FillFormat',
        'foreground_color' => '\Aspose\Cells\Cloud\Model\Color',
        'format' => 'string',
        'invert_if_negative' => 'bool',
        'transparency' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'center_x' => null  ,
        'center_y' => null  ,
        'depth' => null  ,
        'height' => null  ,
        'width' => null  ,
        'border' => null  ,
        'background_color' => null  ,
        'fill_format' => null  ,
        'foreground_color' => null  ,
        'format' => null  ,
        'invert_if_negative' => null  ,
        'transparency' => null  
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
         'center_x' => 'CenterX' ,
         'center_y' => 'CenterY' ,
         'depth' => 'Depth' ,
         'height' => 'Height' ,
         'width' => 'Width' ,
         'border' => 'Border' ,
         'background_color' => 'BackgroundColor' ,
         'fill_format' => 'FillFormat' ,
         'foreground_color' => 'ForegroundColor' ,
         'format' => 'Format' ,
         'invert_if_negative' => 'InvertIfNegative' ,
         'transparency' => 'Transparency' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'center_x' => 'setCenterX' ,
        'center_y' => 'setCenterY' ,
        'depth' => 'setDepth' ,
        'height' => 'setHeight' ,
        'width' => 'setWidth' ,
        'border' => 'setBorder' ,
        'background_color' => 'setBackgroundColor' ,
        'fill_format' => 'setFillFormat' ,
        'foreground_color' => 'setForegroundColor' ,
        'format' => 'setFormat' ,
        'invert_if_negative' => 'setInvertIfNegative' ,
        'transparency' => 'setTransparency' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'center_x' => 'getCenterX' ,
        'center_y' => 'getCenterY' ,
        'depth' => 'getDepth' ,
        'height' => 'getHeight' ,
        'width' => 'getWidth' ,
        'border' => 'getBorder' ,
        'background_color' => 'getBackgroundColor' ,
        'fill_format' => 'getFillFormat' ,
        'foreground_color' => 'getForegroundColor' ,
        'format' => 'getFormat' ,
        'invert_if_negative' => 'getInvertIfNegative' ,
        'transparency' => 'getTransparency' 
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
        $this->container['center_x'] = isset($data['center_x']) ? $data['center_x'] : null;
        $this->container['center_y'] = isset($data['center_y']) ? $data['center_y'] : null;
        $this->container['depth'] = isset($data['depth']) ? $data['depth'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['border'] = isset($data['border']) ? $data['border'] : null;
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
        $this->container['fill_format'] = isset($data['fill_format']) ? $data['fill_format'] : null;
        $this->container['foreground_color'] = isset($data['foreground_color']) ? $data['foreground_color'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['invert_if_negative'] = isset($data['invert_if_negative']) ? $data['invert_if_negative'] : null;
        $this->container['transparency'] = isset($data['transparency']) ? $data['transparency'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['center_x'] === null) {
            $invalidProperties[] = "'center_x' can't be null";
        }
        if ($this->container['center_y'] === null) {
            $invalidProperties[] = "'center_y' can't be null";
        }
        if ($this->container['depth'] === null) {
            $invalidProperties[] = "'depth' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if ($this->container['border'] === null) {
            $invalidProperties[] = "'border' can't be null";
        }
        if ($this->container['background_color'] === null) {
            $invalidProperties[] = "'background_color' can't be null";
        }
        if ($this->container['fill_format'] === null) {
            $invalidProperties[] = "'fill_format' can't be null";
        }
        if ($this->container['foreground_color'] === null) {
            $invalidProperties[] = "'foreground_color' can't be null";
        }
        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
        if ($this->container['invert_if_negative'] === null) {
            $invalidProperties[] = "'invert_if_negative' can't be null";
        }
        if ($this->container['transparency'] === null) {
            $invalidProperties[] = "'transparency' can't be null";
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
        if ($this->container['center_x'] === null) {
                    return false;
                }
        if ($this->container['center_y'] === null) {
                    return false;
                }
        if ($this->container['depth'] === null) {
                    return false;
                }
        if ($this->container['height'] === null) {
                    return false;
                }
        if ($this->container['width'] === null) {
                    return false;
                }
        if ($this->container['border'] === null) {
                    return false;
                }
        if ($this->container['background_color'] === null) {
                    return false;
                }
        if ($this->container['fill_format'] === null) {
                    return false;
                }
        if ($this->container['foreground_color'] === null) {
                    return false;
                }
        if ($this->container['format'] === null) {
                    return false;
                }
        if ($this->container['invert_if_negative'] === null) {
                    return false;
                }
        if ($this->container['transparency'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets center_x
     *
     * @return int
     */
    public function getCenterX()
    {
        return $this->container['center_x'];
    }

    /**
     * Sets center_x
     *
     *  
     *
     * @return $this
     */
    public function setCenterX($center_x)
    {
        $this->container['center_x'] = $center_x;

        return $this;
    }
   /**
     * Gets center_y
     *
     * @return int
     */
    public function getCenterY()
    {
        return $this->container['center_y'];
    }

    /**
     * Sets center_y
     *
     *  
     *
     * @return $this
     */
    public function setCenterY($center_y)
    {
        $this->container['center_y'] = $center_y;

        return $this;
    }
   /**
     * Gets depth
     *
     * @return int
     */
    public function getDepth()
    {
        return $this->container['depth'];
    }

    /**
     * Sets depth
     *
     *  
     *
     * @return $this
     */
    public function setDepth($depth)
    {
        $this->container['depth'] = $depth;

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
     * Gets background_color
     *
     * @return \Aspose\Cells\Cloud\Model\Color
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /**
     * Sets background_color
     *
     *  
     *
     * @return $this
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;

        return $this;
    }
   /**
     * Gets fill_format
     *
     * @return \Aspose\Cells\Cloud\Model\FillFormat
     */
    public function getFillFormat()
    {
        return $this->container['fill_format'];
    }

    /**
     * Sets fill_format
     *
     *  
     *
     * @return $this
     */
    public function setFillFormat($fill_format)
    {
        $this->container['fill_format'] = $fill_format;

        return $this;
    }
   /**
     * Gets foreground_color
     *
     * @return \Aspose\Cells\Cloud\Model\Color
     */
    public function getForegroundColor()
    {
        return $this->container['foreground_color'];
    }

    /**
     * Sets foreground_color
     *
     *  
     *
     * @return $this
     */
    public function setForegroundColor($foreground_color)
    {
        $this->container['foreground_color'] = $foreground_color;

        return $this;
    }
   /**
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     *  
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }
   /**
     * Gets invert_if_negative
     *
     * @return bool
     */
    public function getInvertIfNegative()
    {
        return $this->container['invert_if_negative'];
    }

    /**
     * Sets invert_if_negative
     *
     *  
     *
     * @return $this
     */
    public function setInvertIfNegative($invert_if_negative)
    {
        $this->container['invert_if_negative'] = $invert_if_negative;

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
     *  
     *
     * @return $this
     */
    public function setTransparency($transparency)
    {
        $this->container['transparency'] = $transparency;

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
