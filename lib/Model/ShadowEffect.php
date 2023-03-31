<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ShadowEffect.cs">
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

class ShadowEffect implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShadowEffect';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'angle' => 'double',
        'blur' => 'double',
        'color' => '\Aspose\Cells\Cloud\Model\CellsColor',
        'distance' => 'double',
        'preset_type' => 'string',
        'size' => 'double',
        'transparency' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'angle' => null  ,
        'blur' => null  ,
        'color' => null  ,
        'distance' => null  ,
        'preset_type' => null  ,
        'size' => null  ,
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
         'angle' => 'Angle' ,
         'blur' => 'Blur' ,
         'color' => 'Color' ,
         'distance' => 'Distance' ,
         'preset_type' => 'PresetType' ,
         'size' => 'Size' ,
         'transparency' => 'Transparency' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'angle' => 'setAngle' ,
        'blur' => 'setBlur' ,
        'color' => 'setColor' ,
        'distance' => 'setDistance' ,
        'preset_type' => 'setPresetType' ,
        'size' => 'setSize' ,
        'transparency' => 'setTransparency' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'angle' => 'getAngle' ,
        'blur' => 'getBlur' ,
        'color' => 'getColor' ,
        'distance' => 'getDistance' ,
        'preset_type' => 'getPresetType' ,
        'size' => 'getSize' ,
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
        $this->container['angle'] = isset($data['angle']) ? $data['angle'] : null;
        $this->container['blur'] = isset($data['blur']) ? $data['blur'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['distance'] = isset($data['distance']) ? $data['distance'] : null;
        $this->container['preset_type'] = isset($data['preset_type']) ? $data['preset_type'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
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
        if ($this->container['angle'] === null) {
            $invalidProperties[] = "'angle' can't be null";
        }
        if ($this->container['blur'] === null) {
            $invalidProperties[] = "'blur' can't be null";
        }
        if ($this->container['color'] === null) {
            $invalidProperties[] = "'color' can't be null";
        }
        if ($this->container['distance'] === null) {
            $invalidProperties[] = "'distance' can't be null";
        }
        if ($this->container['preset_type'] === null) {
            $invalidProperties[] = "'preset_type' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
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
        if ($this->container['angle'] === null) {
                    return false;
                }
        if ($this->container['blur'] === null) {
                    return false;
                }
        if ($this->container['color'] === null) {
                    return false;
                }
        if ($this->container['distance'] === null) {
                    return false;
                }
        if ($this->container['preset_type'] === null) {
                    return false;
                }
        if ($this->container['size'] === null) {
                    return false;
                }
        if ($this->container['transparency'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets angle
     *
     * @return double
     */
    public function getAngle()
    {
        return $this->container['angle'];
    }

    /**
     * Sets angle
     *
     *  
     *
     * @return $this
     */
    public function setAngle($angle)
    {
        $this->container['angle'] = $angle;

        return $this;
    }
   /**
     * Gets blur
     *
     * @return double
     */
    public function getBlur()
    {
        return $this->container['blur'];
    }

    /**
     * Sets blur
     *
     *  
     *
     * @return $this
     */
    public function setBlur($blur)
    {
        $this->container['blur'] = $blur;

        return $this;
    }
   /**
     * Gets color
     *
     * @return \Aspose\Cells\Cloud\Model\CellsColor
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     *  
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }
   /**
     * Gets distance
     *
     * @return double
     */
    public function getDistance()
    {
        return $this->container['distance'];
    }

    /**
     * Sets distance
     *
     *  
     *
     * @return $this
     */
    public function setDistance($distance)
    {
        $this->container['distance'] = $distance;

        return $this;
    }
   /**
     * Gets preset_type
     *
     * @return string
     */
    public function getPresetType()
    {
        return $this->container['preset_type'];
    }

    /**
     * Sets preset_type
     *
     *  
     *
     * @return $this
     */
    public function setPresetType($preset_type)
    {
        $this->container['preset_type'] = $preset_type;

        return $this;
    }
   /**
     * Gets size
     *
     * @return double
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     *  
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

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
