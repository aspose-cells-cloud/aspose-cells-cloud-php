<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DataSorter.cs">
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

class DataSorter implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DataSorter';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'case_sensitive' => 'bool',
        'has_headers' => 'bool',
        'key_list' => '\Aspose\Cells\Cloud\Model\SortKey[]',
        'sort_left_to_right' => 'bool',
        'sort_as_number' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'case_sensitive' => null  ,
        'has_headers' => null  ,
        'key_list' => null  ,
        'sort_left_to_right' => null  ,
        'sort_as_number' => null  
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
         'case_sensitive' => 'CaseSensitive' ,
         'has_headers' => 'HasHeaders' ,
         'key_list' => 'KeyList' ,
         'sort_left_to_right' => 'SortLeftToRight' ,
         'sort_as_number' => 'SortAsNumber' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'case_sensitive' => 'setCaseSensitive' ,
        'has_headers' => 'setHasHeaders' ,
        'key_list' => 'setKeyList' ,
        'sort_left_to_right' => 'setSortLeftToRight' ,
        'sort_as_number' => 'setSortAsNumber' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'case_sensitive' => 'getCaseSensitive' ,
        'has_headers' => 'getHasHeaders' ,
        'key_list' => 'getKeyList' ,
        'sort_left_to_right' => 'getSortLeftToRight' ,
        'sort_as_number' => 'getSortAsNumber' 
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
        $this->container['case_sensitive'] = isset($data['case_sensitive']) ? $data['case_sensitive'] : null;
        $this->container['has_headers'] = isset($data['has_headers']) ? $data['has_headers'] : null;
        $this->container['key_list'] = isset($data['key_list']) ? $data['key_list'] : null;
        $this->container['sort_left_to_right'] = isset($data['sort_left_to_right']) ? $data['sort_left_to_right'] : null;
        $this->container['sort_as_number'] = isset($data['sort_as_number']) ? $data['sort_as_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['case_sensitive'] === null) {
            $invalidProperties[] = "'case_sensitive' can't be null";
        }
        if ($this->container['has_headers'] === null) {
            $invalidProperties[] = "'has_headers' can't be null";
        }
        if ($this->container['key_list'] === null) {
            $invalidProperties[] = "'key_list' can't be null";
        }
        if ($this->container['sort_left_to_right'] === null) {
            $invalidProperties[] = "'sort_left_to_right' can't be null";
        }
        if ($this->container['sort_as_number'] === null) {
            $invalidProperties[] = "'sort_as_number' can't be null";
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
        if ($this->container['case_sensitive'] === null) {
                    return false;
                }
        if ($this->container['has_headers'] === null) {
                    return false;
                }
        if ($this->container['key_list'] === null) {
                    return false;
                }
        if ($this->container['sort_left_to_right'] === null) {
                    return false;
                }
        if ($this->container['sort_as_number'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets case_sensitive
     *
     * @return bool
     */
    public function getCaseSensitive()
    {
        return $this->container['case_sensitive'];
    }

    /**
     * Sets case_sensitive
     *
     *  
     *
     * @return $this
     */
    public function setCaseSensitive($case_sensitive)
    {
        $this->container['case_sensitive'] = $case_sensitive;

        return $this;
    }
   /**
     * Gets has_headers
     *
     * @return bool
     */
    public function getHasHeaders()
    {
        return $this->container['has_headers'];
    }

    /**
     * Sets has_headers
     *
     *  
     *
     * @return $this
     */
    public function setHasHeaders($has_headers)
    {
        $this->container['has_headers'] = $has_headers;

        return $this;
    }
   /**
     * Gets key_list
     *
     * @return \Aspose\Cells\Cloud\Model\SortKey[]
     */
    public function getKeyList()
    {
        return $this->container['key_list'];
    }

    /**
     * Sets key_list
     *
     *  
     *
     * @return $this
     */
    public function setKeyList($key_list)
    {
        $this->container['key_list'] = $key_list;

        return $this;
    }
   /**
     * Gets sort_left_to_right
     *
     * @return bool
     */
    public function getSortLeftToRight()
    {
        return $this->container['sort_left_to_right'];
    }

    /**
     * Sets sort_left_to_right
     *
     *  
     *
     * @return $this
     */
    public function setSortLeftToRight($sort_left_to_right)
    {
        $this->container['sort_left_to_right'] = $sort_left_to_right;

        return $this;
    }
   /**
     * Gets sort_as_number
     *
     * @return bool
     */
    public function getSortAsNumber()
    {
        return $this->container['sort_as_number'];
    }

    /**
     * Sets sort_as_number
     *
     *  
     *
     * @return $this
     */
    public function setSortAsNumber($sort_as_number)
    {
        $this->container['sort_as_number'] = $sort_as_number;

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
