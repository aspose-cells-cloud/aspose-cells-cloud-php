<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Row.cs">
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

class Row
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Row';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'group_level' => 'int',
        'height' => 'double',
        'index' => 'int',
        'is_blank' => 'bool',
        'is_height_matched' => 'bool',
        'is_hidden' => 'bool',
        'style' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'link' => '\Aspose\Cells\Cloud\Model\Link'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'group_level' => null  ,
        'height' => null  ,
        'index' => null  ,
        'is_blank' => null  ,
        'is_height_matched' => null  ,
        'is_hidden' => null  ,
        'style' => null  ,
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
         'group_level' => 'GroupLevel' ,
         'height' => 'Height' ,
         'index' => 'Index' ,
         'is_blank' => 'IsBlank' ,
         'is_height_matched' => 'IsHeightMatched' ,
         'is_hidden' => 'IsHidden' ,
         'style' => 'Style' ,
         'link' => 'link' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'group_level' => 'setGroupLevel' ,
        'height' => 'setHeight' ,
        'index' => 'setIndex' ,
        'is_blank' => 'setIsBlank' ,
        'is_height_matched' => 'setIsHeightMatched' ,
        'is_hidden' => 'setIsHidden' ,
        'style' => 'setStyle' ,
        'link' => 'setlink' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'group_level' => 'getGroupLevel' ,
        'height' => 'getHeight' ,
        'index' => 'getIndex' ,
        'is_blank' => 'getIsBlank' ,
        'is_height_matched' => 'getIsHeightMatched' ,
        'is_hidden' => 'getIsHidden' ,
        'style' => 'getStyle' ,
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
        $this->container['group_level'] = isset($data['group_level']) ? $data['group_level'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['is_blank'] = isset($data['is_blank']) ? $data['is_blank'] : null;
        $this->container['is_height_matched'] = isset($data['is_height_matched']) ? $data['is_height_matched'] : null;
        $this->container['is_hidden'] = isset($data['is_hidden']) ? $data['is_hidden'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
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
        if ($this->container['group_level'] === null) {
            $invalidProperties[] = "'group_level' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['index'] === null) {
            $invalidProperties[] = "'index' can't be null";
        }
        if ($this->container['is_blank'] === null) {
            $invalidProperties[] = "'is_blank' can't be null";
        }
        if ($this->container['is_height_matched'] === null) {
            $invalidProperties[] = "'is_height_matched' can't be null";
        }
        if ($this->container['is_hidden'] === null) {
            $invalidProperties[] = "'is_hidden' can't be null";
        }
        if ($this->container['style'] === null) {
            $invalidProperties[] = "'style' can't be null";
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
        if ($this->container['group_level'] === null) {
                    return false;
                }
        if ($this->container['height'] === null) {
                    return false;
                }
        if ($this->container['index'] === null) {
                    return false;
                }
        if ($this->container['is_blank'] === null) {
                    return false;
                }
        if ($this->container['is_height_matched'] === null) {
                    return false;
                }
        if ($this->container['is_hidden'] === null) {
                    return false;
                }
        if ($this->container['style'] === null) {
                    return false;
                }
        if ($this->container['link'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets group_level
     *
     * @return int
     */
    public function getGroupLevel()
    {
        return $this->container['group_level'];
    }

    /**
     * Sets group_level
     *
     *  Gets the group level of the row.
     *
     * @return $this
     */
    public function setGroupLevel($group_level)
    {
        $this->container['group_level'] = $group_level;

        return $this;
    }
   /**
     * Gets height
     *
     * @return double
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     *  Gets and sets the row height in unit of Points.
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }
   /**
     * Gets index
     *
     * @return int
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     *  Gets the index of this row.
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }
   /**
     * Gets is_blank
     *
     * @return bool
     */
    public function getIsBlank()
    {
        return $this->container['is_blank'];
    }

    /**
     * Sets is_blank
     *
     *  Indicates whether the row contains any data
     *
     * @return $this
     */
    public function setIsBlank($is_blank)
    {
        $this->container['is_blank'] = $is_blank;

        return $this;
    }
   /**
     * Gets is_height_matched
     *
     * @return bool
     */
    public function getIsHeightMatched()
    {
        return $this->container['is_height_matched'];
    }

    /**
     * Sets is_height_matched
     *
     *  Indicates that row height and default font height matches.
     *
     * @return $this
     */
    public function setIsHeightMatched($is_height_matched)
    {
        $this->container['is_height_matched'] = $is_height_matched;

        return $this;
    }
   /**
     * Gets is_hidden
     *
     * @return bool
     */
    public function getIsHidden()
    {
        return $this->container['is_hidden'];
    }

    /**
     * Sets is_hidden
     *
     *  Indicates whether the row is hidden.
     *
     * @return $this
     */
    public function setIsHidden($is_hidden)
    {
        $this->container['is_hidden'] = $is_hidden;

        return $this;
    }
   /**
     * Gets style
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style
     *
     *  Represents the style of this row.
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $this->container['style'] = $style;

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
