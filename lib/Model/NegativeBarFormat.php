<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="NegativeBarFormat.cs">
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

use \ArrayAccess;
use \Aspose\Cells\Cloud\ObjectSerializer;

class NegativeBarFormat implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NegativeBarFormat';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'border_color' => '\Aspose\Cells\Cloud\Model\Color',
        'border_color_type' => 'string',
        'color' => '\Aspose\Cells\Cloud\Model\Color',
        'color_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'border_color' => null  ,
        'border_color_type' => null  ,
        'color' => null  ,
        'color_type' => null  
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
         'border_color' => 'BorderColor' ,
         'border_color_type' => 'BorderColorType' ,
         'color' => 'Color' ,
         'color_type' => 'ColorType' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'border_color' => 'setBorderColor' ,
        'border_color_type' => 'setBorderColorType' ,
        'color' => 'setColor' ,
        'color_type' => 'setColorType' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'border_color' => 'getBorderColor' ,
        'border_color_type' => 'getBorderColorType' ,
        'color' => 'getColor' ,
        'color_type' => 'getColorType' 
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
        $this->container['border_color'] = isset($data['border_color']) ? $data['border_color'] : null;
        $this->container['border_color_type'] = isset($data['border_color_type']) ? $data['border_color_type'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['color_type'] = isset($data['color_type']) ? $data['color_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['border_color'] === null) {
            $invalidProperties[] = "'border_color' can't be null";
        }
        if ($this->container['border_color_type'] === null) {
            $invalidProperties[] = "'border_color_type' can't be null";
        }
        if ($this->container['color'] === null) {
            $invalidProperties[] = "'color' can't be null";
        }
        if ($this->container['color_type'] === null) {
            $invalidProperties[] = "'color_type' can't be null";
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
        if ($this->container['border_color'] === null) {
                    return false;
                }
        if ($this->container['border_color_type'] === null) {
                    return false;
                }
        if ($this->container['color'] === null) {
                    return false;
                }
        if ($this->container['color_type'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets border_color
     *
     * @return \Aspose\Cells\Cloud\Model\Color
     */
    public function getBorderColor()
    {
        return $this->container['border_color'];
    }

    /**
     * Sets border_color
     *
     *  Gets or sets a FormatColor object that you can use to specify the border color for negative data bars. 
     *
     * @return $this
     */
    public function setBorderColor($border_color)
    {
        $this->container['border_color'] = $border_color;

        return $this;
    }
   /**
     * Gets border_color_type
     *
     * @return string
     */
    public function getBorderColorType()
    {
        return $this->container['border_color_type'];
    }

    /**
     * Sets border_color_type
     *
     *  Gets whether to use the same border color as positive data bars. 
     *
     * @return $this
     */
    public function setBorderColorType($border_color_type)
    {
        $this->container['border_color_type'] = $border_color_type;

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
     *  Gets or sets a FormatColor object that you can use to specify the fill color for negative data bars. 
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }
   /**
     * Gets color_type
     *
     * @return string
     */
    public function getColorType()
    {
        return $this->container['color_type'];
    }

    /**
     * Sets color_type
     *
     *  Gets or sets whether to use the same fill color as positive data bars. 
     *
     * @return $this
     */
    public function setColorType($color_type)
    {
        $this->container['color_type'] = $color_type;

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
