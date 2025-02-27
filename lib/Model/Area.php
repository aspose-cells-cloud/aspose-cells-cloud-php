<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Area.cs">
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

class Area
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Area';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
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
     *  Gets or sets the background  of the . 
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
     *  Represents a  object that contains fill formatting properties for the specified chart or shape. 
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
     *  Gets or sets the foreground . 
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
     *  This class has a property named "Format" of type string with both getter and setter methods.
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
     *  If the property is true and the value of chart point is a negative number,            the foreground color and background color will be exchanged. 
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
     *  Returns or sets the degree of transparency of the area as a value from 0.0 (opaque) through 1.0 (clear). 
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
