<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MergeQueries.cs">
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

class MergeQueries
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MergeQueries';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'data_source_a' => '\Aspose\Cells\Cloud\Model\DataSource',
        'file_info_a' => '\Aspose\Cells\Cloud\Model\FileInfo',
        'data_item_a' => '\Aspose\Cells\Cloud\Model\DataItem',
        'data_a_index_field' => 'string',
        'data_source_b' => '\Aspose\Cells\Cloud\Model\DataSource',
        'file_info_b' => '\Aspose\Cells\Cloud\Model\FileInfo',
        'data_item_b' => '\Aspose\Cells\Cloud\Model\DataItem',
        'data_b_index_field' => 'string',
        'join_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'data_source_a' => null  ,
        'file_info_a' => null  ,
        'data_item_a' => null  ,
        'data_a_index_field' => null  ,
        'data_source_b' => null  ,
        'file_info_b' => null  ,
        'data_item_b' => null  ,
        'data_b_index_field' => null  ,
        'join_type' => null  
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
         'data_source_a' => 'DataSourceA' ,
         'file_info_a' => 'FileInfoA' ,
         'data_item_a' => 'DataItemA' ,
         'data_a_index_field' => 'DataAIndexField' ,
         'data_source_b' => 'DataSourceB' ,
         'file_info_b' => 'FileInfoB' ,
         'data_item_b' => 'DataItemB' ,
         'data_b_index_field' => 'DataBIndexField' ,
         'join_type' => 'JoinType' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_source_a' => 'setDataSourceA' ,
        'file_info_a' => 'setFileInfoA' ,
        'data_item_a' => 'setDataItemA' ,
        'data_a_index_field' => 'setDataAIndexField' ,
        'data_source_b' => 'setDataSourceB' ,
        'file_info_b' => 'setFileInfoB' ,
        'data_item_b' => 'setDataItemB' ,
        'data_b_index_field' => 'setDataBIndexField' ,
        'join_type' => 'setJoinType' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_source_a' => 'getDataSourceA' ,
        'file_info_a' => 'getFileInfoA' ,
        'data_item_a' => 'getDataItemA' ,
        'data_a_index_field' => 'getDataAIndexField' ,
        'data_source_b' => 'getDataSourceB' ,
        'file_info_b' => 'getFileInfoB' ,
        'data_item_b' => 'getDataItemB' ,
        'data_b_index_field' => 'getDataBIndexField' ,
        'join_type' => 'getJoinType' 
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
        $this->container['data_source_a'] = isset($data['data_source_a']) ? $data['data_source_a'] : null;
        $this->container['file_info_a'] = isset($data['file_info_a']) ? $data['file_info_a'] : null;
        $this->container['data_item_a'] = isset($data['data_item_a']) ? $data['data_item_a'] : null;
        $this->container['data_a_index_field'] = isset($data['data_a_index_field']) ? $data['data_a_index_field'] : null;
        $this->container['data_source_b'] = isset($data['data_source_b']) ? $data['data_source_b'] : null;
        $this->container['file_info_b'] = isset($data['file_info_b']) ? $data['file_info_b'] : null;
        $this->container['data_item_b'] = isset($data['data_item_b']) ? $data['data_item_b'] : null;
        $this->container['data_b_index_field'] = isset($data['data_b_index_field']) ? $data['data_b_index_field'] : null;
        $this->container['join_type'] = isset($data['join_type']) ? $data['join_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['data_source_a'] === null) {
            $invalidProperties[] = "'data_source_a' can't be null";
        }
        if ($this->container['file_info_a'] === null) {
            $invalidProperties[] = "'file_info_a' can't be null";
        }
        if ($this->container['data_item_a'] === null) {
            $invalidProperties[] = "'data_item_a' can't be null";
        }
        if ($this->container['data_a_index_field'] === null) {
            $invalidProperties[] = "'data_a_index_field' can't be null";
        }
        if ($this->container['data_source_b'] === null) {
            $invalidProperties[] = "'data_source_b' can't be null";
        }
        if ($this->container['file_info_b'] === null) {
            $invalidProperties[] = "'file_info_b' can't be null";
        }
        if ($this->container['data_item_b'] === null) {
            $invalidProperties[] = "'data_item_b' can't be null";
        }
        if ($this->container['data_b_index_field'] === null) {
            $invalidProperties[] = "'data_b_index_field' can't be null";
        }
        if ($this->container['join_type'] === null) {
            $invalidProperties[] = "'join_type' can't be null";
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
        if ($this->container['data_source_a'] === null) {
                    return false;
                }
        if ($this->container['file_info_a'] === null) {
                    return false;
                }
        if ($this->container['data_item_a'] === null) {
                    return false;
                }
        if ($this->container['data_a_index_field'] === null) {
                    return false;
                }
        if ($this->container['data_source_b'] === null) {
                    return false;
                }
        if ($this->container['file_info_b'] === null) {
                    return false;
                }
        if ($this->container['data_item_b'] === null) {
                    return false;
                }
        if ($this->container['data_b_index_field'] === null) {
                    return false;
                }
        if ($this->container['join_type'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets data_source_a
     *
     * @return \Aspose\Cells\Cloud\Model\DataSource
     */
    public function getDataSourceA()
    {
        return $this->container['data_source_a'];
    }

    /**
     * Sets data_source_a
     *
     *  Indicates the source of the mount data.
     *
     * @return $this
     */
    public function setDataSourceA($data_source_a)
    {
        $this->container['data_source_a'] = $data_source_a;

        return $this;
    }
   /**
     * Gets file_info_a
     *
     * @return \Aspose\Cells\Cloud\Model\FileInfo
     */
    public function getFileInfoA()
    {
        return $this->container['file_info_a'];
    }

    /**
     * Sets file_info_a
     *
     *  
     *
     * @return $this
     */
    public function setFileInfoA($file_info_a)
    {
        $this->container['file_info_a'] = $file_info_a;

        return $this;
    }
   /**
     * Gets data_item_a
     *
     * @return \Aspose\Cells\Cloud\Model\DataItem
     */
    public function getDataItemA()
    {
        return $this->container['data_item_a'];
    }

    /**
     * Sets data_item_a
     *
     *  Represents data item.
     *
     * @return $this
     */
    public function setDataItemA($data_item_a)
    {
        $this->container['data_item_a'] = $data_item_a;

        return $this;
    }
   /**
     * Gets data_a_index_field
     *
     * @return string
     */
    public function getDataAIndexField()
    {
        return $this->container['data_a_index_field'];
    }

    /**
     * Sets data_a_index_field
     *
     *  Represents index field  of DataA
     *
     * @return $this
     */
    public function setDataAIndexField($data_a_index_field)
    {
        $this->container['data_a_index_field'] = $data_a_index_field;

        return $this;
    }
   /**
     * Gets data_source_b
     *
     * @return \Aspose\Cells\Cloud\Model\DataSource
     */
    public function getDataSourceB()
    {
        return $this->container['data_source_b'];
    }

    /**
     * Sets data_source_b
     *
     *  Indicates the source of the mount data.
     *
     * @return $this
     */
    public function setDataSourceB($data_source_b)
    {
        $this->container['data_source_b'] = $data_source_b;

        return $this;
    }
   /**
     * Gets file_info_b
     *
     * @return \Aspose\Cells\Cloud\Model\FileInfo
     */
    public function getFileInfoB()
    {
        return $this->container['file_info_b'];
    }

    /**
     * Sets file_info_b
     *
     *  
     *
     * @return $this
     */
    public function setFileInfoB($file_info_b)
    {
        $this->container['file_info_b'] = $file_info_b;

        return $this;
    }
   /**
     * Gets data_item_b
     *
     * @return \Aspose\Cells\Cloud\Model\DataItem
     */
    public function getDataItemB()
    {
        return $this->container['data_item_b'];
    }

    /**
     * Sets data_item_b
     *
     *  Represents data item.
     *
     * @return $this
     */
    public function setDataItemB($data_item_b)
    {
        $this->container['data_item_b'] = $data_item_b;

        return $this;
    }
   /**
     * Gets data_b_index_field
     *
     * @return string
     */
    public function getDataBIndexField()
    {
        return $this->container['data_b_index_field'];
    }

    /**
     * Sets data_b_index_field
     *
     *  Represents index field  of DataB
     *
     * @return $this
     */
    public function setDataBIndexField($data_b_index_field)
    {
        $this->container['data_b_index_field'] = $data_b_index_field;

        return $this;
    }
   /**
     * Gets join_type
     *
     * @return string
     */
    public function getJoinType()
    {
        return $this->container['join_type'];
    }

    /**
     * Sets join_type
     *
     *  
     *
     * @return $this
     */
    public function setJoinType($join_type)
    {
        $this->container['join_type'] = $join_type;

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
