<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TickLabels.cs">
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

class TickLabels
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TickLabels';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_scale_font' => 'bool',
        'background_mode' => 'string',
        'font' => '\Aspose\Cells\Cloud\Model\Font',
        'number' => 'int',
        'number_format' => 'string',
        'number_format_linked' => 'bool',
        'offset' => 'int',
        'rotation_angle' => 'int',
        'text_direction' => 'string',
        'reading_order' => 'string',
        'direction_type' => 'string',
        'link' => '\Aspose\Cells\Cloud\Model\Link'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auto_scale_font' => null  ,
        'background_mode' => null  ,
        'font' => null  ,
        'number' => null  ,
        'number_format' => null  ,
        'number_format_linked' => null  ,
        'offset' => null  ,
        'rotation_angle' => null  ,
        'text_direction' => null  ,
        'reading_order' => null  ,
        'direction_type' => null  ,
        'link' => null  
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
         'auto_scale_font' => 'AutoScaleFont' ,
         'background_mode' => 'BackgroundMode' ,
         'font' => 'Font' ,
         'number' => 'Number' ,
         'number_format' => 'NumberFormat' ,
         'number_format_linked' => 'NumberFormatLinked' ,
         'offset' => 'Offset' ,
         'rotation_angle' => 'RotationAngle' ,
         'text_direction' => 'TextDirection' ,
         'reading_order' => 'ReadingOrder' ,
         'direction_type' => 'DirectionType' ,
         'link' => 'link' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_scale_font' => 'setAutoScaleFont' ,
        'background_mode' => 'setBackgroundMode' ,
        'font' => 'setFont' ,
        'number' => 'setNumber' ,
        'number_format' => 'setNumberFormat' ,
        'number_format_linked' => 'setNumberFormatLinked' ,
        'offset' => 'setOffset' ,
        'rotation_angle' => 'setRotationAngle' ,
        'text_direction' => 'setTextDirection' ,
        'reading_order' => 'setReadingOrder' ,
        'direction_type' => 'setDirectionType' ,
        'link' => 'setlink' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_scale_font' => 'getAutoScaleFont' ,
        'background_mode' => 'getBackgroundMode' ,
        'font' => 'getFont' ,
        'number' => 'getNumber' ,
        'number_format' => 'getNumberFormat' ,
        'number_format_linked' => 'getNumberFormatLinked' ,
        'offset' => 'getOffset' ,
        'rotation_angle' => 'getRotationAngle' ,
        'text_direction' => 'getTextDirection' ,
        'reading_order' => 'getReadingOrder' ,
        'direction_type' => 'getDirectionType' ,
        'link' => 'getlink' 
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
        $this->container['auto_scale_font'] = isset($data['auto_scale_font']) ? $data['auto_scale_font'] : null;
        $this->container['background_mode'] = isset($data['background_mode']) ? $data['background_mode'] : null;
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['number_format'] = isset($data['number_format']) ? $data['number_format'] : null;
        $this->container['number_format_linked'] = isset($data['number_format_linked']) ? $data['number_format_linked'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['rotation_angle'] = isset($data['rotation_angle']) ? $data['rotation_angle'] : null;
        $this->container['text_direction'] = isset($data['text_direction']) ? $data['text_direction'] : null;
        $this->container['reading_order'] = isset($data['reading_order']) ? $data['reading_order'] : null;
        $this->container['direction_type'] = isset($data['direction_type']) ? $data['direction_type'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['auto_scale_font'] === null) {
            $invalidProperties[] = "'auto_scale_font' can't be null";
        }
        if ($this->container['background_mode'] === null) {
            $invalidProperties[] = "'background_mode' can't be null";
        }
        if ($this->container['font'] === null) {
            $invalidProperties[] = "'font' can't be null";
        }
        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ($this->container['number_format'] === null) {
            $invalidProperties[] = "'number_format' can't be null";
        }
        if ($this->container['number_format_linked'] === null) {
            $invalidProperties[] = "'number_format_linked' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
        if ($this->container['rotation_angle'] === null) {
            $invalidProperties[] = "'rotation_angle' can't be null";
        }
        if ($this->container['text_direction'] === null) {
            $invalidProperties[] = "'text_direction' can't be null";
        }
        if ($this->container['reading_order'] === null) {
            $invalidProperties[] = "'reading_order' can't be null";
        }
        if ($this->container['direction_type'] === null) {
            $invalidProperties[] = "'direction_type' can't be null";
        }
        if ($this->container['link'] === null) {
            $invalidProperties[] = "'link' can't be null";
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
        if ($this->container['auto_scale_font'] === null) {
                    return false;
                }
        if ($this->container['background_mode'] === null) {
                    return false;
                }
        if ($this->container['font'] === null) {
                    return false;
                }
        if ($this->container['number'] === null) {
                    return false;
                }
        if ($this->container['number_format'] === null) {
                    return false;
                }
        if ($this->container['number_format_linked'] === null) {
                    return false;
                }
        if ($this->container['offset'] === null) {
                    return false;
                }
        if ($this->container['rotation_angle'] === null) {
                    return false;
                }
        if ($this->container['text_direction'] === null) {
                    return false;
                }
        if ($this->container['reading_order'] === null) {
                    return false;
                }
        if ($this->container['direction_type'] === null) {
                    return false;
                }
        if ($this->container['link'] === null) {
                    return false;
                }
        return true;
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
     *  True if the text in the object changes font size when the object size changes. The default value is True.
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
     *  Gets and sets the display mode of the background
     *
     * @return $this
     */
    public function setBackgroundMode($background_mode)
    {
        $this->container['background_mode'] = $background_mode;

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
     *  Returns a  object that represents the font of the specified TickLabels object.
     *
     * @return $this
     */
    public function setFont($font)
    {
        $this->container['font'] = $font;

        return $this;
    }
   /**
     * Gets number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     *  Represents the format number for the TickLabels object.
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }
   /**
     * Gets number_format
     *
     * @return string
     */
    public function getNumberFormat()
    {
        return $this->container['number_format'];
    }

    /**
     * Sets number_format
     *
     *  Represents the format string for the TickLabels object.
     *
     * @return $this
     */
    public function setNumberFormat($number_format)
    {
        $this->container['number_format'] = $number_format;

        return $this;
    }
   /**
     * Gets number_format_linked
     *
     * @return bool
     */
    public function getNumberFormatLinked()
    {
        return $this->container['number_format_linked'];
    }

    /**
     * Sets number_format_linked
     *
     *  True if the number format is linked to the cells                         (so that the number format changes in the labels when it changes in the cells).
     *
     * @return $this
     */
    public function setNumberFormatLinked($number_format_linked)
    {
        $this->container['number_format_linked'] = $number_format_linked;

        return $this;
    }
   /**
     * Gets offset
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     *  Gets and sets the distance of labels from the axis.
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

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
     *  Represents text rotation angle in clockwise.
     *
     * @return $this
     */
    public function setRotationAngle($rotation_angle)
    {
        $this->container['rotation_angle'] = $rotation_angle;

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
     *  Represents text reading order.
     *
     * @return $this
     */
    public function setTextDirection($text_direction)
    {
        $this->container['text_direction'] = $text_direction;

        return $this;
    }
   /**
     * Gets reading_order
     *
     * @return string
     */
    public function getReadingOrder()
    {
        return $this->container['reading_order'];
    }

    /**
     * Sets reading_order
     *
     *  Represents text reading order.
     *
     * @return $this
     */
    public function setReadingOrder($reading_order)
    {
        $this->container['reading_order'] = $reading_order;

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
     *  Gets and sets the direction of text.
     *
     * @return $this
     */
    public function setDirectionType($direction_type)
    {
        $this->container['direction_type'] = $direction_type;

        return $this;
    }
   /**
     * Gets link
     *
     * @return \Aspose\Cells\Cloud\Model\Link
     */
    public function getlink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     *  
     *
     * @return $this
     */
    public function setlink($link)
    {
        $this->container['link'] = $link;

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
