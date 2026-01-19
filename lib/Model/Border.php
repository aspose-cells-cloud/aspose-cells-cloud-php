<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Border.cs">
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

class Border
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Border';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'line_style' => 'string',
        'color' => '\Aspose\Cells\Cloud\Model\Color',
        'border_type' => 'string',
        'theme_color' => '\Aspose\Cells\Cloud\Model\ThemeColor',
        'argb_color' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'line_style' => null  ,
        'color' => null  ,
        'border_type' => null  ,
        'theme_color' => null  ,
        'argb_color' => null  
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
         'line_style' => 'LineStyle' ,
         'color' => 'Color' ,
         'border_type' => 'BorderType' ,
         'theme_color' => 'ThemeColor' ,
         'argb_color' => 'ArgbColor' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'line_style' => 'setLineStyle' ,
        'color' => 'setColor' ,
        'border_type' => 'setBorderType' ,
        'theme_color' => 'setThemeColor' ,
        'argb_color' => 'setArgbColor' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'line_style' => 'getLineStyle' ,
        'color' => 'getColor' ,
        'border_type' => 'getBorderType' ,
        'theme_color' => 'getThemeColor' ,
        'argb_color' => 'getArgbColor' 
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
        $this->container['line_style'] = isset($data['line_style']) ? $data['line_style'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['border_type'] = isset($data['border_type']) ? $data['border_type'] : null;
        $this->container['theme_color'] = isset($data['theme_color']) ? $data['theme_color'] : null;
        $this->container['argb_color'] = isset($data['argb_color']) ? $data['argb_color'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['line_style'] === null) {
            $invalidProperties[] = "'line_style' can't be null";
        }
        if ($this->container['color'] === null) {
            $invalidProperties[] = "'color' can't be null";
        }
        if ($this->container['border_type'] === null) {
            $invalidProperties[] = "'border_type' can't be null";
        }
        if ($this->container['theme_color'] === null) {
            $invalidProperties[] = "'theme_color' can't be null";
        }
        if ($this->container['argb_color'] === null) {
            $invalidProperties[] = "'argb_color' can't be null";
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
        if ($this->container['line_style'] === null) {
                    return false;
                }
        if ($this->container['color'] === null) {
                    return false;
                }
        if ($this->container['border_type'] === null) {
                    return false;
                }
        if ($this->container['theme_color'] === null) {
                    return false;
                }
        if ($this->container['argb_color'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets line_style
     *
     * @return string
     */
    public function getLineStyle()
    {
        return $this->container['line_style'];
    }

    /**
     * Sets line_style
     *
     *  Gets or sets the cell border type. 
     *
     * @return $this
     */
    public function setLineStyle($line_style)
    {
        $this->container['line_style'] = $line_style;

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
     *  Gets or sets the  of the border. 
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }
   /**
     * Gets border_type
     *
     * @return string
     */
    public function getBorderType()
    {
        return $this->container['border_type'];
    }

    /**
     * Sets border_type
     *
     *  This class has a property called "BorderType" of type string that can be both get and set.
     *
     * @return $this
     */
    public function setBorderType($border_type)
    {
        $this->container['border_type'] = $border_type;

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
     *  Gets and sets the theme color of the border. 
     *
     * @return $this
     */
    public function setThemeColor($theme_color)
    {
        $this->container['theme_color'] = $theme_color;

        return $this;
    }
   /**
     * Gets argb_color
     *
     * @return int
     */
    public function getArgbColor()
    {
        return $this->container['argb_color'];
    }

    /**
     * Sets argb_color
     *
     *  Gets and sets the color with a 32-bit ARGB value. 
     *
     * @return $this
     */
    public function setArgbColor($argb_color)
    {
        $this->container['argb_color'] = $argb_color;

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
