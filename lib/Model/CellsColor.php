<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CellsColor.cs">
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

class CellsColor
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CellsColor';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'color' => '\Aspose\Cells\Cloud\Model\Color',
        'color_index' => 'int',
        'is_shape_color' => 'bool',
        'tint' => 'double',
        'argb' => 'int',
        'theme_color' => '\Aspose\Cells\Cloud\Model\ThemeColor',
        'type' => 'string',
        'transparency' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'color' => null  ,
        'color_index' => null  ,
        'is_shape_color' => null  ,
        'tint' => null  ,
        'argb' => null  ,
        'theme_color' => null  ,
        'type' => null  ,
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
         'color' => 'Color' ,
         'color_index' => 'ColorIndex' ,
         'is_shape_color' => 'IsShapeColor' ,
         'tint' => 'tint' ,
         'argb' => 'Argb' ,
         'theme_color' => 'ThemeColor' ,
         'type' => 'Type' ,
         'transparency' => 'Transparency' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'color' => 'setColor' ,
        'color_index' => 'setColorIndex' ,
        'is_shape_color' => 'setIsShapeColor' ,
        'tint' => 'settint' ,
        'argb' => 'setArgb' ,
        'theme_color' => 'setThemeColor' ,
        'type' => 'setType' ,
        'transparency' => 'setTransparency' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'color' => 'getColor' ,
        'color_index' => 'getColorIndex' ,
        'is_shape_color' => 'getIsShapeColor' ,
        'tint' => 'gettint' ,
        'argb' => 'getArgb' ,
        'theme_color' => 'getThemeColor' ,
        'type' => 'getType' ,
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
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['color_index'] = isset($data['color_index']) ? $data['color_index'] : null;
        $this->container['is_shape_color'] = isset($data['is_shape_color']) ? $data['is_shape_color'] : null;
        $this->container['tint'] = isset($data['tint']) ? $data['tint'] : null;
        $this->container['argb'] = isset($data['argb']) ? $data['argb'] : null;
        $this->container['theme_color'] = isset($data['theme_color']) ? $data['theme_color'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
        if ($this->container['color'] === null) {
            $invalidProperties[] = "'color' can't be null";
        }
        if ($this->container['color_index'] === null) {
            $invalidProperties[] = "'color_index' can't be null";
        }
        if ($this->container['is_shape_color'] === null) {
            $invalidProperties[] = "'is_shape_color' can't be null";
        }
        if ($this->container['tint'] === null) {
            $invalidProperties[] = "'tint' can't be null";
        }
        if ($this->container['argb'] === null) {
            $invalidProperties[] = "'argb' can't be null";
        }
        if ($this->container['theme_color'] === null) {
            $invalidProperties[] = "'theme_color' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
        if ($this->container['color'] === null) {
                    return false;
                }
        if ($this->container['color_index'] === null) {
                    return false;
                }
        if ($this->container['is_shape_color'] === null) {
                    return false;
                }
        if ($this->container['tint'] === null) {
                    return false;
                }
        if ($this->container['argb'] === null) {
                    return false;
                }
        if ($this->container['theme_color'] === null) {
                    return false;
                }
        if ($this->container['type'] === null) {
                    return false;
                }
        if ($this->container['transparency'] === null) {
                    return false;
                }
        return true;
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
     *  Gets and sets the RGB color. 
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }
   /**
     * Gets color_index
     *
     * @return int
     */
    public function getColorIndex()
    {
        return $this->container['color_index'];
    }

    /**
     * Sets color_index
     *
     *  Gets and sets the color index in the color palette. Only applies of indexed color. 
     *
     * @return $this
     */
    public function setColorIndex($color_index)
    {
        $this->container['color_index'] = $color_index;

        return $this;
    }
   /**
     * Gets is_shape_color
     *
     * @return bool
     */
    public function getIsShapeColor()
    {
        return $this->container['is_shape_color'];
    }

    /**
     * Sets is_shape_color
     *
     *  Gets and set the color which should apply to cell or shape. 
     *
     * @return $this
     */
    public function setIsShapeColor($is_shape_color)
    {
        $this->container['is_shape_color'] = $is_shape_color;

        return $this;
    }
   /**
     * Gets tint
     *
     * @return double
     */
    public function gettint()
    {
        return $this->container['tint'];
    }

    /**
     * Sets tint
     *
     *  Set the tint of the shape color
     *
     * @return $this
     */
    public function settint($tint)
    {
        $this->container['tint'] = $tint;

        return $this;
    }
   /**
     * Gets argb
     *
     * @return int
     */
    public function getArgb()
    {
        return $this->container['argb'];
    }

    /**
     * Sets argb
     *
     *  Gets and sets the color from a 32-bit ARGB value. 
     *
     * @return $this
     */
    public function setArgb($argb)
    {
        $this->container['argb'] = $argb;

        return $this;
    }
   /**
     * Gets theme_color
     *
     * @return \Aspose\Cells\Cloud\Model\ThemeColor
     */
    public function getThemeColor()
    {
        return $this->container['theme_color'];
    }

    /**
     * Sets theme_color
     *
     *  Gets the theme color. Only applies for theme color type. 
     *
     * @return $this
     */
    public function setThemeColor($theme_color)
    {
        $this->container['theme_color'] = $theme_color;

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
     *  The color type. 
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     *  Gets and sets transparency as a value from 0.0 (opaque) through 1.0 (clear). 
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
