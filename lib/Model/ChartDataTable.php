<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ChartDataTable.cs">
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

class ChartDataTable implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChartDataTable';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_scale_font' => 'bool',
        'background_mode' => 'string',
        'border' => '\Aspose\Cells\Cloud\Model\Line',
        'font' => '\Aspose\Cells\Cloud\Model\Font',
        'has_border_horizontal' => 'bool',
        'has_border_outline' => 'bool',
        'has_border_vertical' => 'bool',
        'show_legend_key' => 'bool',
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
        'border' => null  ,
        'font' => null  ,
        'has_border_horizontal' => null  ,
        'has_border_outline' => null  ,
        'has_border_vertical' => null  ,
        'show_legend_key' => null  ,
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
         'border' => 'Border' ,
         'font' => 'Font' ,
         'has_border_horizontal' => 'HasBorderHorizontal' ,
         'has_border_outline' => 'HasBorderOutline' ,
         'has_border_vertical' => 'HasBorderVertical' ,
         'show_legend_key' => 'ShowLegendKey' ,
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
        'border' => 'setBorder' ,
        'font' => 'setFont' ,
        'has_border_horizontal' => 'setHasBorderHorizontal' ,
        'has_border_outline' => 'setHasBorderOutline' ,
        'has_border_vertical' => 'setHasBorderVertical' ,
        'show_legend_key' => 'setShowLegendKey' ,
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
        'border' => 'getBorder' ,
        'font' => 'getFont' ,
        'has_border_horizontal' => 'getHasBorderHorizontal' ,
        'has_border_outline' => 'getHasBorderOutline' ,
        'has_border_vertical' => 'getHasBorderVertical' ,
        'show_legend_key' => 'getShowLegendKey' ,
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
        $this->container['border'] = isset($data['border']) ? $data['border'] : null;
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
        $this->container['has_border_horizontal'] = isset($data['has_border_horizontal']) ? $data['has_border_horizontal'] : null;
        $this->container['has_border_outline'] = isset($data['has_border_outline']) ? $data['has_border_outline'] : null;
        $this->container['has_border_vertical'] = isset($data['has_border_vertical']) ? $data['has_border_vertical'] : null;
        $this->container['show_legend_key'] = isset($data['show_legend_key']) ? $data['show_legend_key'] : null;
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
        if ($this->container['border'] === null) {
            $invalidProperties[] = "'border' can't be null";
        }
        if ($this->container['font'] === null) {
            $invalidProperties[] = "'font' can't be null";
        }
        if ($this->container['has_border_horizontal'] === null) {
            $invalidProperties[] = "'has_border_horizontal' can't be null";
        }
        if ($this->container['has_border_outline'] === null) {
            $invalidProperties[] = "'has_border_outline' can't be null";
        }
        if ($this->container['has_border_vertical'] === null) {
            $invalidProperties[] = "'has_border_vertical' can't be null";
        }
        if ($this->container['show_legend_key'] === null) {
            $invalidProperties[] = "'show_legend_key' can't be null";
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
        if ($this->container['border'] === null) {
                    return false;
                }
        if ($this->container['font'] === null) {
                    return false;
                }
        if ($this->container['has_border_horizontal'] === null) {
                    return false;
                }
        if ($this->container['has_border_outline'] === null) {
                    return false;
                }
        if ($this->container['has_border_vertical'] === null) {
                    return false;
                }
        if ($this->container['show_legend_key'] === null) {
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
     *  
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
     *  
     *
     * @return $this
     */
    public function setBackgroundMode($background_mode)
    {
        $this->container['background_mode'] = $background_mode;

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
     *  
     *
     * @return $this
     */
    public function setFont($font)
    {
        $this->container['font'] = $font;

        return $this;
    }
   /**
     * Gets has_border_horizontal
     *
     * @return bool
     */
    public function getHasBorderHorizontal()
    {
        return $this->container['has_border_horizontal'];
    }

    /**
     * Sets has_border_horizontal
     *
     *  
     *
     * @return $this
     */
    public function setHasBorderHorizontal($has_border_horizontal)
    {
        $this->container['has_border_horizontal'] = $has_border_horizontal;

        return $this;
    }
   /**
     * Gets has_border_outline
     *
     * @return bool
     */
    public function getHasBorderOutline()
    {
        return $this->container['has_border_outline'];
    }

    /**
     * Sets has_border_outline
     *
     *  
     *
     * @return $this
     */
    public function setHasBorderOutline($has_border_outline)
    {
        $this->container['has_border_outline'] = $has_border_outline;

        return $this;
    }
   /**
     * Gets has_border_vertical
     *
     * @return bool
     */
    public function getHasBorderVertical()
    {
        return $this->container['has_border_vertical'];
    }

    /**
     * Sets has_border_vertical
     *
     *  
     *
     * @return $this
     */
    public function setHasBorderVertical($has_border_vertical)
    {
        $this->container['has_border_vertical'] = $has_border_vertical;

        return $this;
    }
   /**
     * Gets show_legend_key
     *
     * @return bool
     */
    public function getShowLegendKey()
    {
        return $this->container['show_legend_key'];
    }

    /**
     * Sets show_legend_key
     *
     *  
     *
     * @return $this
     */
    public function setShowLegendKey($show_legend_key)
    {
        $this->container['show_legend_key'] = $show_legend_key;

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
