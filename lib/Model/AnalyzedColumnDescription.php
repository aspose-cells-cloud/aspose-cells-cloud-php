<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AnalyzedColumnDescription.cs">
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

class AnalyzedColumnDescription
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AnalyzedColumnDescription';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'index' => 'int',
        'column_index' => 'int',
        'title' => 'string',
        'repetition_rate' => 'double',
        'column_data_data_type' => 'string',
        'number_category_type' => 'string',
        'text_category_type' => 'string',
        'style_number' => 'int',
        'column_data_exception_description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'index' => null  ,
        'column_index' => null  ,
        'title' => null  ,
        'repetition_rate' => null  ,
        'column_data_data_type' => null  ,
        'number_category_type' => null  ,
        'text_category_type' => null  ,
        'style_number' => null  ,
        'column_data_exception_description' => null  
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
         'index' => 'Index' ,
         'column_index' => 'ColumnIndex' ,
         'title' => 'Title' ,
         'repetition_rate' => 'RepetitionRate' ,
         'column_data_data_type' => 'ColumnDataDataType' ,
         'number_category_type' => 'NumberCategoryType' ,
         'text_category_type' => 'TextCategoryType' ,
         'style_number' => 'StyleNumber' ,
         'column_data_exception_description' => 'columnDataExceptionDescription' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'index' => 'setIndex' ,
        'column_index' => 'setColumnIndex' ,
        'title' => 'setTitle' ,
        'repetition_rate' => 'setRepetitionRate' ,
        'column_data_data_type' => 'setColumnDataDataType' ,
        'number_category_type' => 'setNumberCategoryType' ,
        'text_category_type' => 'setTextCategoryType' ,
        'style_number' => 'setStyleNumber' ,
        'column_data_exception_description' => 'setcolumnDataExceptionDescription' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'index' => 'getIndex' ,
        'column_index' => 'getColumnIndex' ,
        'title' => 'getTitle' ,
        'repetition_rate' => 'getRepetitionRate' ,
        'column_data_data_type' => 'getColumnDataDataType' ,
        'number_category_type' => 'getNumberCategoryType' ,
        'text_category_type' => 'getTextCategoryType' ,
        'style_number' => 'getStyleNumber' ,
        'column_data_exception_description' => 'getcolumnDataExceptionDescription' 
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
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['column_index'] = isset($data['column_index']) ? $data['column_index'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['repetition_rate'] = isset($data['repetition_rate']) ? $data['repetition_rate'] : null;
        $this->container['column_data_data_type'] = isset($data['column_data_data_type']) ? $data['column_data_data_type'] : null;
        $this->container['number_category_type'] = isset($data['number_category_type']) ? $data['number_category_type'] : null;
        $this->container['text_category_type'] = isset($data['text_category_type']) ? $data['text_category_type'] : null;
        $this->container['style_number'] = isset($data['style_number']) ? $data['style_number'] : null;
        $this->container['column_data_exception_description'] = isset($data['column_data_exception_description']) ? $data['column_data_exception_description'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['index'] === null) {
            $invalidProperties[] = "'index' can't be null";
        }
        if ($this->container['column_index'] === null) {
            $invalidProperties[] = "'column_index' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['repetition_rate'] === null) {
            $invalidProperties[] = "'repetition_rate' can't be null";
        }
        if ($this->container['column_data_data_type'] === null) {
            $invalidProperties[] = "'column_data_data_type' can't be null";
        }
        if ($this->container['number_category_type'] === null) {
            $invalidProperties[] = "'number_category_type' can't be null";
        }
        if ($this->container['text_category_type'] === null) {
            $invalidProperties[] = "'text_category_type' can't be null";
        }
        if ($this->container['style_number'] === null) {
            $invalidProperties[] = "'style_number' can't be null";
        }
        if ($this->container['column_data_exception_description'] === null) {
            $invalidProperties[] = "'column_data_exception_description' can't be null";
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
        if ($this->container['index'] === null) {
                    return false;
                }
        if ($this->container['column_index'] === null) {
                    return false;
                }
        if ($this->container['title'] === null) {
                    return false;
                }
        if ($this->container['repetition_rate'] === null) {
                    return false;
                }
        if ($this->container['column_data_data_type'] === null) {
                    return false;
                }
        if ($this->container['number_category_type'] === null) {
                    return false;
                }
        if ($this->container['text_category_type'] === null) {
                    return false;
                }
        if ($this->container['style_number'] === null) {
                    return false;
                }
        if ($this->container['column_data_exception_description'] === null) {
                    return false;
                }
        return true;
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
     *  Column index.
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }
   /**
     * Gets column_index
     *
     * @return int
     */
    public function getColumnIndex()
    {
        return $this->container['column_index'];
    }

    /**
     * Sets column_index
     *
     *  The true position index value of the column.
     *
     * @return $this
     */
    public function setColumnIndex($column_index)
    {
        $this->container['column_index'] = $column_index;

        return $this;
    }
   /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     *  This class has a public property "Title" of type string with a default value of an empty string.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }
   /**
     * Gets repetition_rate
     *
     * @return double
     */
    public function getRepetitionRate()
    {
        return $this->container['repetition_rate'];
    }

    /**
     * Sets repetition_rate
     *
     *  When the repetition rate is high, can it be viewed as a group display?
     *
     * @return $this
     */
    public function setRepetitionRate($repetition_rate)
    {
        $this->container['repetition_rate'] = $repetition_rate;

        return $this;
    }
   /**
     * Gets column_data_data_type
     *
     * @return string
     */
    public function getColumnDataDataType()
    {
        return $this->container['column_data_data_type'];
    }

    /**
     * Sets column_data_data_type
     *
     *  The column type is identified, and the attributes of the column are determined after data analysis.
     *
     * @return $this
     */
    public function setColumnDataDataType($column_data_data_type)
    {
        $this->container['column_data_data_type'] = $column_data_data_type;

        return $this;
    }
   /**
     * Gets number_category_type
     *
     * @return string
     */
    public function getNumberCategoryType()
    {
        return $this->container['number_category_type'];
    }

    /**
     * Sets number_category_type
     *
     *  
     *
     * @return $this
     */
    public function setNumberCategoryType($number_category_type)
    {
        $this->container['number_category_type'] = $number_category_type;

        return $this;
    }
   /**
     * Gets text_category_type
     *
     * @return string
     */
    public function getTextCategoryType()
    {
        return $this->container['text_category_type'];
    }

    /**
     * Sets text_category_type
     *
     *  
     *
     * @return $this
     */
    public function setTextCategoryType($text_category_type)
    {
        $this->container['text_category_type'] = $text_category_type;

        return $this;
    }
   /**
     * Gets style_number
     *
     * @return int
     */
    public function getStyleNumber()
    {
        return $this->container['style_number'];
    }

    /**
     * Sets style_number
     *
     *  
     *
     * @return $this
     */
    public function setStyleNumber($style_number)
    {
        $this->container['style_number'] = $style_number;

        return $this;
    }
   /**
     * Gets column_data_exception_description
     *
     * @return string
     */
    public function getcolumnDataExceptionDescription()
    {
        return $this->container['column_data_exception_description'];
    }

    /**
     * Sets column_data_exception_description
     *
     *  Column data exception description.
     *
     * @return $this
     */
    public function setcolumnDataExceptionDescription($column_data_exception_description)
    {
        $this->container['column_data_exception_description'] = $column_data_exception_description;

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
