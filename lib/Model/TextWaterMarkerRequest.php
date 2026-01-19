<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TextWaterMarkerRequest.cs">
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

class TextWaterMarkerRequest
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TextWaterMarkerRequest';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'text' => 'string',
        'font_name' => 'string',
        'font_size' => 'int',
        'height' => 'int',
        'width' => 'int',
        'image_adapt_option' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'text' => null  ,
        'font_name' => null  ,
        'font_size' => null  ,
        'height' => null  ,
        'width' => null  ,
        'image_adapt_option' => null  
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
         'text' => 'Text' ,
         'font_name' => 'FontName' ,
         'font_size' => 'FontSize' ,
         'height' => 'Height' ,
         'width' => 'Width' ,
         'image_adapt_option' => 'ImageAdaptOption' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text' => 'setText' ,
        'font_name' => 'setFontName' ,
        'font_size' => 'setFontSize' ,
        'height' => 'setHeight' ,
        'width' => 'setWidth' ,
        'image_adapt_option' => 'setImageAdaptOption' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text' => 'getText' ,
        'font_name' => 'getFontName' ,
        'font_size' => 'getFontSize' ,
        'height' => 'getHeight' ,
        'width' => 'getWidth' ,
        'image_adapt_option' => 'getImageAdaptOption' 
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
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['font_name'] = isset($data['font_name']) ? $data['font_name'] : null;
        $this->container['font_size'] = isset($data['font_size']) ? $data['font_size'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['image_adapt_option'] = isset($data['image_adapt_option']) ? $data['image_adapt_option'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }
        if ($this->container['font_name'] === null) {
            $invalidProperties[] = "'font_name' can't be null";
        }
        if ($this->container['font_size'] === null) {
            $invalidProperties[] = "'font_size' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if ($this->container['image_adapt_option'] === null) {
            $invalidProperties[] = "'image_adapt_option' can't be null";
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
        if ($this->container['text'] === null) {
                    return false;
                }
        if ($this->container['font_name'] === null) {
                    return false;
                }
        if ($this->container['font_size'] === null) {
                    return false;
                }
        if ($this->container['height'] === null) {
                    return false;
                }
        if ($this->container['width'] === null) {
                    return false;
                }
        if ($this->container['image_adapt_option'] === null) {
                    return false;
                }
        return true;
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
     *  A property named Text of type string that can be accessed and modified.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }
   /**
     * Gets font_name
     *
     * @return string
     */
    public function getFontName()
    {
        return $this->container['font_name'];
    }

    /**
     * Sets font_name
     *
     *  Indicates font name.
     *
     * @return $this
     */
    public function setFontName($font_name)
    {
        $this->container['font_name'] = $font_name;

        return $this;
    }
   /**
     * Gets font_size
     *
     * @return int
     */
    public function getFontSize()
    {
        return $this->container['font_size'];
    }

    /**
     * Sets font_size
     *
     *  Indicates font size.
     *
     * @return $this
     */
    public function setFontSize($font_size)
    {
        $this->container['font_size'] = $font_size;

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
     *  Indicates image height.
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
     *  Indicates image width.
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }
   /**
     * Gets image_adapt_option
     *
     * @return string
     */
    public function getImageAdaptOption()
    {
        return $this->container['image_adapt_option'];
    }

    /**
     * Sets image_adapt_option
     *
     *  
     *
     * @return $this
     */
    public function setImageAdaptOption($image_adapt_option)
    {
        $this->container['image_adapt_option'] = $image_adapt_option;

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
