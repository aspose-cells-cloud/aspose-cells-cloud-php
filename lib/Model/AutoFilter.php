<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AutoFilter.cs">
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

class AutoFilter
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AutoFilter';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'filter_columns' => '\Aspose\Cells\Cloud\Model\FilterColumn[]',
        'range' => 'string',
        'sorter' => '\Aspose\Cells\Cloud\Model\DataSorter',
        'show_filter_button' => 'bool',
        'link' => '\Aspose\Cells\Cloud\Model\Link'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'filter_columns' => null  ,
        'range' => null  ,
        'sorter' => null  ,
        'show_filter_button' => null  ,
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
         'filter_columns' => 'FilterColumns' ,
         'range' => 'Range' ,
         'sorter' => 'Sorter' ,
         'show_filter_button' => 'ShowFilterButton' ,
         'link' => 'link' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'filter_columns' => 'setFilterColumns' ,
        'range' => 'setRange' ,
        'sorter' => 'setSorter' ,
        'show_filter_button' => 'setShowFilterButton' ,
        'link' => 'setlink' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'filter_columns' => 'getFilterColumns' ,
        'range' => 'getRange' ,
        'sorter' => 'getSorter' ,
        'show_filter_button' => 'getShowFilterButton' ,
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
        $this->container['filter_columns'] = isset($data['filter_columns']) ? $data['filter_columns'] : null;
        $this->container['range'] = isset($data['range']) ? $data['range'] : null;
        $this->container['sorter'] = isset($data['sorter']) ? $data['sorter'] : null;
        $this->container['show_filter_button'] = isset($data['show_filter_button']) ? $data['show_filter_button'] : null;
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
        if ($this->container['filter_columns'] === null) {
            $invalidProperties[] = "'filter_columns' can't be null";
        }
        if ($this->container['range'] === null) {
            $invalidProperties[] = "'range' can't be null";
        }
        if ($this->container['sorter'] === null) {
            $invalidProperties[] = "'sorter' can't be null";
        }
        if ($this->container['show_filter_button'] === null) {
            $invalidProperties[] = "'show_filter_button' can't be null";
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
        if ($this->container['filter_columns'] === null) {
                    return false;
                }
        if ($this->container['range'] === null) {
                    return false;
                }
        if ($this->container['sorter'] === null) {
                    return false;
                }
        if ($this->container['show_filter_button'] === null) {
                    return false;
                }
        if ($this->container['link'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets filter_columns
     *
     * @return \Aspose\Cells\Cloud\Model\FilterColumn[]
     */
    public function getFilterColumns()
    {
        return $this->container['filter_columns'];
    }

    /**
     * Sets filter_columns
     *
     *  Gets the collection of the filter columns.
     *
     * @return $this
     */
    public function setFilterColumns($filter_columns)
    {
        $this->container['filter_columns'] = $filter_columns;

        return $this;
    }
   /**
     * Gets range
     *
     * @return string
     */
    public function getRange()
    {
        return $this->container['range'];
    }

    /**
     * Sets range
     *
     *  Represents the range to which the specified AutoFilter applies.
     *
     * @return $this
     */
    public function setRange($range)
    {
        $this->container['range'] = $range;

        return $this;
    }
   /**
     * Gets sorter
     *
     * @return \Aspose\Cells\Cloud\Model\DataSorter
     */
    public function getSorter()
    {
        return $this->container['sorter'];
    }

    /**
     * Sets sorter
     *
     *  Gets the data sorter.
     *
     * @return $this
     */
    public function setSorter($sorter)
    {
        $this->container['sorter'] = $sorter;

        return $this;
    }
   /**
     * Gets show_filter_button
     *
     * @return bool
     */
    public function getShowFilterButton()
    {
        return $this->container['show_filter_button'];
    }

    /**
     * Sets show_filter_button
     *
     *  Indicates whether the AutoFilter button for this column is visible.
     *
     * @return $this
     */
    public function setShowFilterButton($show_filter_button)
    {
        $this->container['show_filter_button'] = $show_filter_button;

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
