<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GradientFill.cs">
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

class GradientFill
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GradientFill';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fill_type' => 'string',
        'direction_type' => 'string',
        'angle' => 'double',
        'gradient_stops' => '\Aspose\Cells\Cloud\Model\GradientFillStop[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fill_type' => null  ,
        'direction_type' => null  ,
        'angle' => null  ,
        'gradient_stops' => null  
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
         'fill_type' => 'FillType' ,
         'direction_type' => 'DirectionType' ,
         'angle' => 'Angle' ,
         'gradient_stops' => 'GradientStops' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fill_type' => 'setFillType' ,
        'direction_type' => 'setDirectionType' ,
        'angle' => 'setAngle' ,
        'gradient_stops' => 'setGradientStops' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fill_type' => 'getFillType' ,
        'direction_type' => 'getDirectionType' ,
        'angle' => 'getAngle' ,
        'gradient_stops' => 'getGradientStops' 
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
        $this->container['fill_type'] = isset($data['fill_type']) ? $data['fill_type'] : null;
        $this->container['direction_type'] = isset($data['direction_type']) ? $data['direction_type'] : null;
        $this->container['angle'] = isset($data['angle']) ? $data['angle'] : null;
        $this->container['gradient_stops'] = isset($data['gradient_stops']) ? $data['gradient_stops'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['fill_type'] === null) {
            $invalidProperties[] = "'fill_type' can't be null";
        }
        if ($this->container['direction_type'] === null) {
            $invalidProperties[] = "'direction_type' can't be null";
        }
        if ($this->container['angle'] === null) {
            $invalidProperties[] = "'angle' can't be null";
        }
        if ($this->container['gradient_stops'] === null) {
            $invalidProperties[] = "'gradient_stops' can't be null";
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
        if ($this->container['fill_type'] === null) {
                    return false;
                }
        if ($this->container['direction_type'] === null) {
                    return false;
                }
        if ($this->container['angle'] === null) {
                    return false;
                }
        if ($this->container['gradient_stops'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets fill_type
     *
     * @return string
     */
    public function getFillType()
    {
        return $this->container['fill_type'];
    }

    /**
     * Sets fill_type
     *
     *  Gets the gradient fill type. 
     *
     * @return $this
     */
    public function setFillType($fill_type)
    {
        $this->container['fill_type'] = $fill_type;

        return $this;
    }
   /**
     * Gets direction_type
     *
     * @return string
     */
    public function getDirectionType()
    {
        return $this->container['direction_type'];
    }

    /**
     * Sets direction_type
     *
     *  Gets the gradient direction type. 
     *
     * @return $this
     */
    public function setDirectionType($direction_type)
    {
        $this->container['direction_type'] = $direction_type;

        return $this;
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
     *  The angle of linear fill. 
     *
     * @return $this
     */
    public function setAngle($angle)
    {
        $this->container['angle'] = $angle;

        return $this;
    }
   /**
     * Gets gradient_stops
     *
     * @return \Aspose\Cells\Cloud\Model\GradientFillStop[]
     */
    public function getGradientStops()
    {
        return $this->container['gradient_stops'];
    }

    /**
     * Sets gradient_stops
     *
     *  Represents the gradient stop collection. 
     *
     * @return $this
     */
    public function setGradientStops($gradient_stops)
    {
        $this->container['gradient_stops'] = $gradient_stops;

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
