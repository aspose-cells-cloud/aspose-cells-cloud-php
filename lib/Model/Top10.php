<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Top10.cs">
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

class Top10
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Top10';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_bottom' => 'bool',
        'is_percent' => 'bool',
        'rank' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_bottom' => null  ,
        'is_percent' => null  ,
        'rank' => null  
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
         'is_bottom' => 'IsBottom' ,
         'is_percent' => 'IsPercent' ,
         'rank' => 'Rank' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_bottom' => 'setIsBottom' ,
        'is_percent' => 'setIsPercent' ,
        'rank' => 'setRank' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_bottom' => 'getIsBottom' ,
        'is_percent' => 'getIsPercent' ,
        'rank' => 'getRank' 
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
        $this->container['is_bottom'] = isset($data['is_bottom']) ? $data['is_bottom'] : null;
        $this->container['is_percent'] = isset($data['is_percent']) ? $data['is_percent'] : null;
        $this->container['rank'] = isset($data['rank']) ? $data['rank'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['is_bottom'] === null) {
            $invalidProperties[] = "'is_bottom' can't be null";
        }
        if ($this->container['is_percent'] === null) {
            $invalidProperties[] = "'is_percent' can't be null";
        }
        if ($this->container['rank'] === null) {
            $invalidProperties[] = "'rank' can't be null";
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
        if ($this->container['is_bottom'] === null) {
                    return false;
                }
        if ($this->container['is_percent'] === null) {
                    return false;
                }
        if ($this->container['rank'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets is_bottom
     *
     * @return bool
     */
    public function getIsBottom()
    {
        return $this->container['is_bottom'];
    }

    /**
     * Sets is_bottom
     *
     *  Get or set whether a "top/bottom n" rule is a "bottom n" rule.            Default value is false. 
     *
     * @return $this
     */
    public function setIsBottom($is_bottom)
    {
        $this->container['is_bottom'] = $is_bottom;

        return $this;
    }
   /**
     * Gets is_percent
     *
     * @return bool
     */
    public function getIsPercent()
    {
        return $this->container['is_percent'];
    }

    /**
     * Sets is_percent
     *
     *  Get or set whether a "top/bottom n" rule is a "top/bottom n percent" rule.            Default value is false. 
     *
     * @return $this
     */
    public function setIsPercent($is_percent)
    {
        $this->container['is_percent'] = $is_percent;

        return $this;
    }
   /**
     * Gets rank
     *
     * @return int
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     *
     *  Get or set the value of "n" in a "top/bottom n" conditional formatting rule.            If IsPercent is true, the value must between 0 and 100.            Otherwise it must between 0 and 1000.            Default value is 10. 
     *
     * @return $this
     */
    public function setRank($rank)
    {
        $this->container['rank'] = $rank;

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
