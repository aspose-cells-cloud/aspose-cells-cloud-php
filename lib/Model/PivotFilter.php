<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PivotFilter.cs">
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

class PivotFilter implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PivotFilter';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_filter' => '\Aspose\Cells\Cloud\Model\AutoFilter',
        'evaluation_order' => 'int',
        'field_index' => 'int',
        'filter_type' => 'string',
        'measure_fld_index' => 'int',
        'member_property_field_index' => 'int',
        'name' => 'string',
        'value1' => 'string',
        'value2' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auto_filter' => null  ,
        'evaluation_order' => null  ,
        'field_index' => null  ,
        'filter_type' => null  ,
        'measure_fld_index' => null  ,
        'member_property_field_index' => null  ,
        'name' => null  ,
        'value1' => null  ,
        'value2' => null  
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
         'auto_filter' => 'AutoFilter' ,
         'evaluation_order' => 'EvaluationOrder' ,
         'field_index' => 'FieldIndex' ,
         'filter_type' => 'FilterType' ,
         'measure_fld_index' => 'MeasureFldIndex' ,
         'member_property_field_index' => 'MemberPropertyFieldIndex' ,
         'name' => 'Name' ,
         'value1' => 'Value1' ,
         'value2' => 'Value2' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_filter' => 'setAutoFilter' ,
        'evaluation_order' => 'setEvaluationOrder' ,
        'field_index' => 'setFieldIndex' ,
        'filter_type' => 'setFilterType' ,
        'measure_fld_index' => 'setMeasureFldIndex' ,
        'member_property_field_index' => 'setMemberPropertyFieldIndex' ,
        'name' => 'setName' ,
        'value1' => 'setValue1' ,
        'value2' => 'setValue2' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_filter' => 'getAutoFilter' ,
        'evaluation_order' => 'getEvaluationOrder' ,
        'field_index' => 'getFieldIndex' ,
        'filter_type' => 'getFilterType' ,
        'measure_fld_index' => 'getMeasureFldIndex' ,
        'member_property_field_index' => 'getMemberPropertyFieldIndex' ,
        'name' => 'getName' ,
        'value1' => 'getValue1' ,
        'value2' => 'getValue2' 
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
        $this->container['auto_filter'] = isset($data['auto_filter']) ? $data['auto_filter'] : null;
        $this->container['evaluation_order'] = isset($data['evaluation_order']) ? $data['evaluation_order'] : null;
        $this->container['field_index'] = isset($data['field_index']) ? $data['field_index'] : null;
        $this->container['filter_type'] = isset($data['filter_type']) ? $data['filter_type'] : null;
        $this->container['measure_fld_index'] = isset($data['measure_fld_index']) ? $data['measure_fld_index'] : null;
        $this->container['member_property_field_index'] = isset($data['member_property_field_index']) ? $data['member_property_field_index'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['value1'] = isset($data['value1']) ? $data['value1'] : null;
        $this->container['value2'] = isset($data['value2']) ? $data['value2'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['auto_filter'] === null) {
            $invalidProperties[] = "'auto_filter' can't be null";
        }
        if ($this->container['evaluation_order'] === null) {
            $invalidProperties[] = "'evaluation_order' can't be null";
        }
        if ($this->container['field_index'] === null) {
            $invalidProperties[] = "'field_index' can't be null";
        }
        if ($this->container['filter_type'] === null) {
            $invalidProperties[] = "'filter_type' can't be null";
        }
        if ($this->container['measure_fld_index'] === null) {
            $invalidProperties[] = "'measure_fld_index' can't be null";
        }
        if ($this->container['member_property_field_index'] === null) {
            $invalidProperties[] = "'member_property_field_index' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['value1'] === null) {
            $invalidProperties[] = "'value1' can't be null";
        }
        if ($this->container['value2'] === null) {
            $invalidProperties[] = "'value2' can't be null";
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
        if ($this->container['auto_filter'] === null) {
                    return false;
                }
        if ($this->container['evaluation_order'] === null) {
                    return false;
                }
        if ($this->container['field_index'] === null) {
                    return false;
                }
        if ($this->container['filter_type'] === null) {
                    return false;
                }
        if ($this->container['measure_fld_index'] === null) {
                    return false;
                }
        if ($this->container['member_property_field_index'] === null) {
                    return false;
                }
        if ($this->container['name'] === null) {
                    return false;
                }
        if ($this->container['value1'] === null) {
                    return false;
                }
        if ($this->container['value2'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets auto_filter
     *
     * @return \Aspose\Cells\Cloud\Model\AutoFilter
     */
    public function getAutoFilter()
    {
        return $this->container['auto_filter'];
    }

    /**
     * Sets auto_filter
     *
     *  
     *
     * @return $this
     */
    public function setAutoFilter($auto_filter)
    {
        $this->container['auto_filter'] = $auto_filter;

        return $this;
    }
   /**
     * Gets evaluation_order
     *
     * @return int
     */
    public function getEvaluationOrder()
    {
        return $this->container['evaluation_order'];
    }

    /**
     * Sets evaluation_order
     *
     *  
     *
     * @return $this
     */
    public function setEvaluationOrder($evaluation_order)
    {
        $this->container['evaluation_order'] = $evaluation_order;

        return $this;
    }
   /**
     * Gets field_index
     *
     * @return int
     */
    public function getFieldIndex()
    {
        return $this->container['field_index'];
    }

    /**
     * Sets field_index
     *
     *  
     *
     * @return $this
     */
    public function setFieldIndex($field_index)
    {
        $this->container['field_index'] = $field_index;

        return $this;
    }
   /**
     * Gets filter_type
     *
     * @return string
     */
    public function getFilterType()
    {
        return $this->container['filter_type'];
    }

    /**
     * Sets filter_type
     *
     *  
     *
     * @return $this
     */
    public function setFilterType($filter_type)
    {
        $this->container['filter_type'] = $filter_type;

        return $this;
    }
   /**
     * Gets measure_fld_index
     *
     * @return int
     */
    public function getMeasureFldIndex()
    {
        return $this->container['measure_fld_index'];
    }

    /**
     * Sets measure_fld_index
     *
     *  
     *
     * @return $this
     */
    public function setMeasureFldIndex($measure_fld_index)
    {
        $this->container['measure_fld_index'] = $measure_fld_index;

        return $this;
    }
   /**
     * Gets member_property_field_index
     *
     * @return int
     */
    public function getMemberPropertyFieldIndex()
    {
        return $this->container['member_property_field_index'];
    }

    /**
     * Sets member_property_field_index
     *
     *  
     *
     * @return $this
     */
    public function setMemberPropertyFieldIndex($member_property_field_index)
    {
        $this->container['member_property_field_index'] = $member_property_field_index;

        return $this;
    }
   /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     *  
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }
   /**
     * Gets value1
     *
     * @return string
     */
    public function getValue1()
    {
        return $this->container['value1'];
    }

    /**
     * Sets value1
     *
     *  
     *
     * @return $this
     */
    public function setValue1($value1)
    {
        $this->container['value1'] = $value1;

        return $this;
    }
   /**
     * Gets value2
     *
     * @return string
     */
    public function getValue2()
    {
        return $this->container['value2'];
    }

    /**
     * Sets value2
     *
     *  
     *
     * @return $this
     */
    public function setValue2($value2)
    {
        $this->container['value2'] = $value2;

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
