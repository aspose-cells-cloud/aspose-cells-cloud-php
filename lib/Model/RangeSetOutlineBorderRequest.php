<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RangeSetOutlineBorderRequest.cs">
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

class RangeSetOutlineBorderRequest
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RangeSetOutlineBorderRequest';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'range' => '\Aspose\Cells\Cloud\Model\Range',
        'border_edge' => 'string',
        'border_style' => 'string',
        'border_color' => '\Aspose\Cells\Cloud\Model\Color'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'range' => null  ,
        'border_edge' => null  ,
        'border_style' => null  ,
        'border_color' => null  
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
         'range' => 'Range' ,
         'border_edge' => 'borderEdge' ,
         'border_style' => 'borderStyle' ,
         'border_color' => 'borderColor' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'range' => 'setRange' ,
        'border_edge' => 'setborderEdge' ,
        'border_style' => 'setborderStyle' ,
        'border_color' => 'setborderColor' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'range' => 'getRange' ,
        'border_edge' => 'getborderEdge' ,
        'border_style' => 'getborderStyle' ,
        'border_color' => 'getborderColor' 
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
        $this->container['range'] = isset($data['range']) ? $data['range'] : null;
        $this->container['border_edge'] = isset($data['border_edge']) ? $data['border_edge'] : null;
        $this->container['border_style'] = isset($data['border_style']) ? $data['border_style'] : null;
        $this->container['border_color'] = isset($data['border_color']) ? $data['border_color'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['range'] === null) {
            $invalidProperties[] = "'range' can't be null";
        }
        if ($this->container['border_edge'] === null) {
            $invalidProperties[] = "'border_edge' can't be null";
        }
        if ($this->container['border_style'] === null) {
            $invalidProperties[] = "'border_style' can't be null";
        }
        if ($this->container['border_color'] === null) {
            $invalidProperties[] = "'border_color' can't be null";
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
        if ($this->container['range'] === null) {
                    return false;
                }
        if ($this->container['border_edge'] === null) {
                    return false;
                }
        if ($this->container['border_style'] === null) {
                    return false;
                }
        if ($this->container['border_color'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets range
     *
     * @return \Aspose\Cells\Cloud\Model\Range
     */
    public function getRange()
    {
        return $this->container['range'];
    }

    /**
     * Sets range
     *
     *  Encapsulates the object that represents a range of cells within a spreadsheet.
     *
     * @return $this
     */
    public function setRange($range)
    {
        $this->container['range'] = $range;

        return $this;
    }
   /**
     * Gets border_edge
     *
     * @return string
     */
    public function getborderEdge()
    {
        return $this->container['border_edge'];
    }

    /**
     * Sets border_edge
     *
     *  LeftBorder, RightBorder, TopBorder, BottomBorder, DiagonalDown, DiagonalUp, Vertical and Horizontal.
     *
     * @return $this
     */
    public function setborderEdge($border_edge)
    {
        $this->container['border_edge'] = $border_edge;

        return $this;
    }
   /**
     * Gets border_style
     *
     * @return string
     */
    public function getborderStyle()
    {
        return $this->container['border_style'];
    }

    /**
     * Sets border_style
     *
     *  None, Thin, Medium, Dashed, Dotted, Thick, Double, Hair, MediumDashed, DashDot, MediumDashDot, DashDotDot, MediumDashDotDot and SlantedDashDot.
     *
     * @return $this
     */
    public function setborderStyle($border_style)
    {
        $this->container['border_style'] = $border_style;

        return $this;
    }
   /**
     * Gets border_color
     *
     * @return \Aspose\Cells\Cloud\Model\Color
     */
    public function getborderColor()
    {
        return $this->container['border_color'];
    }

    /**
     * Sets border_color
     *
     *  Border color.
     *
     * @return $this
     */
    public function setborderColor($border_color)
    {
        $this->container['border_color'] = $border_color;

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
