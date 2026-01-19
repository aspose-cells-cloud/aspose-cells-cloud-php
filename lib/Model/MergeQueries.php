<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MergeQueries.cs">
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
        'data_query_name_a' => 'string',
        'data_a_index_field' => 'string',
        'data_query_name_b' => 'string',
        'data_b_index_field' => 'string',
        'join_type' => 'string',
        'applied_operate_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'data_query_name_a' => null  ,
        'data_a_index_field' => null  ,
        'data_query_name_b' => null  ,
        'data_b_index_field' => null  ,
        'join_type' => null  ,
        'applied_operate_type' => null  
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
         'data_query_name_a' => 'DataQueryNameA' ,
         'data_a_index_field' => 'DataAIndexField' ,
         'data_query_name_b' => 'DataQueryNameB' ,
         'data_b_index_field' => 'DataBIndexField' ,
         'join_type' => 'JoinType' ,
         'applied_operate_type' => 'AppliedOperateType' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_query_name_a' => 'setDataQueryNameA' ,
        'data_a_index_field' => 'setDataAIndexField' ,
        'data_query_name_b' => 'setDataQueryNameB' ,
        'data_b_index_field' => 'setDataBIndexField' ,
        'join_type' => 'setJoinType' ,
        'applied_operate_type' => 'setAppliedOperateType' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_query_name_a' => 'getDataQueryNameA' ,
        'data_a_index_field' => 'getDataAIndexField' ,
        'data_query_name_b' => 'getDataQueryNameB' ,
        'data_b_index_field' => 'getDataBIndexField' ,
        'join_type' => 'getJoinType' ,
        'applied_operate_type' => 'getAppliedOperateType' 
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
        $this->container['data_query_name_a'] = isset($data['data_query_name_a']) ? $data['data_query_name_a'] : null;
        $this->container['data_a_index_field'] = isset($data['data_a_index_field']) ? $data['data_a_index_field'] : null;
        $this->container['data_query_name_b'] = isset($data['data_query_name_b']) ? $data['data_query_name_b'] : null;
        $this->container['data_b_index_field'] = isset($data['data_b_index_field']) ? $data['data_b_index_field'] : null;
        $this->container['join_type'] = isset($data['join_type']) ? $data['join_type'] : null;
        $this->container['applied_operate_type'] = isset($data['applied_operate_type']) ? $data['applied_operate_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['data_query_name_a'] === null) {
            $invalidProperties[] = "'data_query_name_a' can't be null";
        }
        if ($this->container['data_a_index_field'] === null) {
            $invalidProperties[] = "'data_a_index_field' can't be null";
        }
        if ($this->container['data_query_name_b'] === null) {
            $invalidProperties[] = "'data_query_name_b' can't be null";
        }
        if ($this->container['data_b_index_field'] === null) {
            $invalidProperties[] = "'data_b_index_field' can't be null";
        }
        if ($this->container['join_type'] === null) {
            $invalidProperties[] = "'join_type' can't be null";
        }
        if ($this->container['applied_operate_type'] === null) {
            $invalidProperties[] = "'applied_operate_type' can't be null";
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
        if ($this->container['data_query_name_a'] === null) {
                    return false;
                }
        if ($this->container['data_a_index_field'] === null) {
                    return false;
                }
        if ($this->container['data_query_name_b'] === null) {
                    return false;
                }
        if ($this->container['data_b_index_field'] === null) {
                    return false;
                }
        if ($this->container['join_type'] === null) {
                    return false;
                }
        if ($this->container['applied_operate_type'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets data_query_name_a
     *
     * @return string
     */
    public function getDataQueryNameA()
    {
        return $this->container['data_query_name_a'];
    }

    /**
     * Sets data_query_name_a
     *
     *  Indicates the name of the data query , it is matched in the data query set.
     *
     * @return $this
     */
    public function setDataQueryNameA($data_query_name_a)
    {
        $this->container['data_query_name_a'] = $data_query_name_a;

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
     *  Represents index field  of DataA.
     *
     * @return $this
     */
    public function setDataAIndexField($data_a_index_field)
    {
        $this->container['data_a_index_field'] = $data_a_index_field;

        return $this;
    }
   /**
     * Gets data_query_name_b
     *
     * @return string
     */
    public function getDataQueryNameB()
    {
        return $this->container['data_query_name_b'];
    }

    /**
     * Sets data_query_name_b
     *
     *  Indicates the name of the data query , it is matched in the data query set.
     *
     * @return $this
     */
    public function setDataQueryNameB($data_query_name_b)
    {
        $this->container['data_query_name_b'] = $data_query_name_b;

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
     *  Represents index field  of DataB.
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
     *  Represents ethods of data consolidation.
     *
     * @return $this
     */
    public function setJoinType($join_type)
    {
        $this->container['join_type'] = $join_type;

        return $this;
    }
   /**
     * Gets applied_operate_type
     *
     * @return string
     */
    public function getAppliedOperateType()
    {
        return $this->container['applied_operate_type'];
    }

    /**
     * Sets applied_operate_type
     *
     *  
     *
     * @return $this
     */
    public function setAppliedOperateType($applied_operate_type)
    {
        $this->container['applied_operate_type'] = $applied_operate_type;

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
