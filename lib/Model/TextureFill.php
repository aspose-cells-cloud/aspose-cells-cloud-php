<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TextureFill.cs">
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


use \Aspose\Cells\Cloud\ObjectSerializer;

class TextureFill
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TextureFill';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'transparency' => 'double',
        'scale' => 'double',
        'tile_pic_option' => '\Aspose\Cells\Cloud\Model\TilePicOption',
        'pic_format_option' => '\Aspose\Cells\Cloud\Model\PicFormatOption',
        'image' => '\Aspose\Cells\Cloud\Model\LinkElement'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null  ,
        'transparency' => null  ,
        'scale' => null  ,
        'tile_pic_option' => null  ,
        'pic_format_option' => null  ,
        'image' => null  
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
         'type' => 'Type' ,
         'transparency' => 'Transparency' ,
         'scale' => 'Scale' ,
         'tile_pic_option' => 'TilePicOption' ,
         'pic_format_option' => 'PicFormatOption' ,
         'image' => 'Image' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType' ,
        'transparency' => 'setTransparency' ,
        'scale' => 'setScale' ,
        'tile_pic_option' => 'setTilePicOption' ,
        'pic_format_option' => 'setPicFormatOption' ,
        'image' => 'setImage' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType' ,
        'transparency' => 'getTransparency' ,
        'scale' => 'getScale' ,
        'tile_pic_option' => 'getTilePicOption' ,
        'pic_format_option' => 'getPicFormatOption' ,
        'image' => 'getImage' 
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['transparency'] = isset($data['transparency']) ? $data['transparency'] : null;
        $this->container['scale'] = isset($data['scale']) ? $data['scale'] : null;
        $this->container['tile_pic_option'] = isset($data['tile_pic_option']) ? $data['tile_pic_option'] : null;
        $this->container['pic_format_option'] = isset($data['pic_format_option']) ? $data['pic_format_option'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['transparency'] === null) {
            $invalidProperties[] = "'transparency' can't be null";
        }
        if ($this->container['scale'] === null) {
            $invalidProperties[] = "'scale' can't be null";
        }
        if ($this->container['tile_pic_option'] === null) {
            $invalidProperties[] = "'tile_pic_option' can't be null";
        }
        if ($this->container['pic_format_option'] === null) {
            $invalidProperties[] = "'pic_format_option' can't be null";
        }
        if ($this->container['image'] === null) {
            $invalidProperties[] = "'image' can't be null";
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
        if ($this->container['type'] === null) {
                    return false;
                }
        if ($this->container['transparency'] === null) {
                    return false;
                }
        if ($this->container['scale'] === null) {
                    return false;
                }
        if ($this->container['tile_pic_option'] === null) {
                    return false;
                }
        if ($this->container['pic_format_option'] === null) {
                    return false;
                }
        if ($this->container['image'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     *  Gets and sets the texture type 
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * Gets scale
     *
     * @return double
     */
    public function getScale()
    {
        return $this->container['scale'];
    }

    /**
     * Sets scale
     *
     *  Gets and sets the picture format scale. 
     *
     * @return $this
     */
    public function setScale($scale)
    {
        $this->container['scale'] = $scale;

        return $this;
    }
   /**
     * Gets tile_pic_option
     *
     * @return \Aspose\Cells\Cloud\Model\TilePicOption
     */
    public function getTilePicOption()
    {
        return $this->container['tile_pic_option'];
    }

    /**
     * Sets tile_pic_option
     *
     *  Gets or sets tile picture option. 
     *
     * @return $this
     */
    public function setTilePicOption($tile_pic_option)
    {
        $this->container['tile_pic_option'] = $tile_pic_option;

        return $this;
    }
   /**
     * Gets pic_format_option
     *
     * @return \Aspose\Cells\Cloud\Model\PicFormatOption
     */
    public function getPicFormatOption()
    {
        return $this->container['pic_format_option'];
    }

    /**
     * Sets pic_format_option
     *
     *  Gets or sets picture format option. 
     *
     * @return $this
     */
    public function setPicFormatOption($pic_format_option)
    {
        $this->container['pic_format_option'] = $pic_format_option;

        return $this;
    }
   /**
     * Gets image
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     *  
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

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
