<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PasteOptions.cs">
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

class PasteOptions
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PasteOptions';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'only_visible_cells' => 'bool',
        'paste_type' => 'string',
        'skip_blanks' => 'bool',
        'transpose' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'only_visible_cells' => null  ,
        'paste_type' => null  ,
        'skip_blanks' => null  ,
        'transpose' => null  
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
         'only_visible_cells' => 'OnlyVisibleCells' ,
         'paste_type' => 'PasteType' ,
         'skip_blanks' => 'SkipBlanks' ,
         'transpose' => 'Transpose' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'only_visible_cells' => 'setOnlyVisibleCells' ,
        'paste_type' => 'setPasteType' ,
        'skip_blanks' => 'setSkipBlanks' ,
        'transpose' => 'setTranspose' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'only_visible_cells' => 'getOnlyVisibleCells' ,
        'paste_type' => 'getPasteType' ,
        'skip_blanks' => 'getSkipBlanks' ,
        'transpose' => 'getTranspose' 
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
        $this->container['only_visible_cells'] = isset($data['only_visible_cells']) ? $data['only_visible_cells'] : null;
        $this->container['paste_type'] = isset($data['paste_type']) ? $data['paste_type'] : null;
        $this->container['skip_blanks'] = isset($data['skip_blanks']) ? $data['skip_blanks'] : null;
        $this->container['transpose'] = isset($data['transpose']) ? $data['transpose'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['only_visible_cells'] === null) {
            $invalidProperties[] = "'only_visible_cells' can't be null";
        }
        if ($this->container['paste_type'] === null) {
            $invalidProperties[] = "'paste_type' can't be null";
        }
        if ($this->container['skip_blanks'] === null) {
            $invalidProperties[] = "'skip_blanks' can't be null";
        }
        if ($this->container['transpose'] === null) {
            $invalidProperties[] = "'transpose' can't be null";
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
        if ($this->container['only_visible_cells'] === null) {
                    return false;
                }
        if ($this->container['paste_type'] === null) {
                    return false;
                }
        if ($this->container['skip_blanks'] === null) {
                    return false;
                }
        if ($this->container['transpose'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets only_visible_cells
     *
     * @return bool
     */
    public function getOnlyVisibleCells()
    {
        return $this->container['only_visible_cells'];
    }

    /**
     * Sets only_visible_cells
     *
     *  True means only copying visible cells. 
     *
     * @return $this
     */
    public function setOnlyVisibleCells($only_visible_cells)
    {
        $this->container['only_visible_cells'] = $only_visible_cells;

        return $this;
    }
   /**
     * Gets paste_type
     *
     * @return string
     */
    public function getPasteType()
    {
        return $this->container['paste_type'];
    }

    /**
     * Sets paste_type
     *
     *  The paste special type. 
     *
     * @return $this
     */
    public function setPasteType($paste_type)
    {
        $this->container['paste_type'] = $paste_type;

        return $this;
    }
   /**
     * Gets skip_blanks
     *
     * @return bool
     */
    public function getSkipBlanks()
    {
        return $this->container['skip_blanks'];
    }

    /**
     * Sets skip_blanks
     *
     *  Indicates whether skips blank cells. 
     *
     * @return $this
     */
    public function setSkipBlanks($skip_blanks)
    {
        $this->container['skip_blanks'] = $skip_blanks;

        return $this;
    }
   /**
     * Gets transpose
     *
     * @return bool
     */
    public function getTranspose()
    {
        return $this->container['transpose'];
    }

    /**
     * Sets transpose
     *
     *  True to transpose rows and columns when the range is pasted. The default value is False. 
     *
     * @return $this
     */
    public function setTranspose($transpose)
    {
        $this->container['transpose'] = $transpose;

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
