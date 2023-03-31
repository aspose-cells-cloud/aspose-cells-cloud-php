<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AboveAverage.cs">
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

class AboveAverage implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AboveAverage';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_above_average' => 'bool',
        'is_equal_average' => 'bool',
        'std_dev' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_above_average' => null  ,
        'is_equal_average' => null  ,
        'std_dev' => null  
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
         'is_above_average' => 'IsAboveAverage' ,
         'is_equal_average' => 'IsEqualAverage' ,
         'std_dev' => 'StdDev' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_above_average' => 'setIsAboveAverage' ,
        'is_equal_average' => 'setIsEqualAverage' ,
        'std_dev' => 'setStdDev' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_above_average' => 'getIsAboveAverage' ,
        'is_equal_average' => 'getIsEqualAverage' ,
        'std_dev' => 'getStdDev' 
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
        $this->container['is_above_average'] = isset($data['is_above_average']) ? $data['is_above_average'] : null;
        $this->container['is_equal_average'] = isset($data['is_equal_average']) ? $data['is_equal_average'] : null;
        $this->container['std_dev'] = isset($data['std_dev']) ? $data['std_dev'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['is_above_average'] === null) {
            $invalidProperties[] = "'is_above_average' can't be null";
        }
        if ($this->container['is_equal_average'] === null) {
            $invalidProperties[] = "'is_equal_average' can't be null";
        }
        if ($this->container['std_dev'] === null) {
            $invalidProperties[] = "'std_dev' can't be null";
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
        if ($this->container['is_above_average'] === null) {
                    return false;
                }
        if ($this->container['is_equal_average'] === null) {
                    return false;
                }
        if ($this->container['std_dev'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets is_above_average
     *
     * @return bool
     */
    public function getIsAboveAverage()
    {
        return $this->container['is_above_average'];
    }

    /**
     * Sets is_above_average
     *
     *  
     *
     * @return $this
     */
    public function setIsAboveAverage($is_above_average)
    {
        $this->container['is_above_average'] = $is_above_average;

        return $this;
    }
   /**
     * Gets is_equal_average
     *
     * @return bool
     */
    public function getIsEqualAverage()
    {
        return $this->container['is_equal_average'];
    }

    /**
     * Sets is_equal_average
     *
     *  
     *
     * @return $this
     */
    public function setIsEqualAverage($is_equal_average)
    {
        $this->container['is_equal_average'] = $is_equal_average;

        return $this;
    }
   /**
     * Gets std_dev
     *
     * @return int
     */
    public function getStdDev()
    {
        return $this->container['std_dev'];
    }

    /**
     * Sets std_dev
     *
     *  
     *
     * @return $this
     */
    public function setStdDev($std_dev)
    {
        $this->container['std_dev'] = $std_dev;

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
