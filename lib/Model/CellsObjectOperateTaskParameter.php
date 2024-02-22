<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CellsObjectOperateTaskParameter.cs">
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

class CellsObjectOperateTaskParameter
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CellsObjectOperateTaskParameter';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'operate_object' => '\Aspose\Cells\Cloud\Model\OperateObject',
        'operate_parameter' => '\Aspose\Cells\Cloud\Model\OperateParameter',
        'destination_workbook' => '\Aspose\Cells\Cloud\Model\FileSource'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'operate_object' => null  ,
        'operate_parameter' => null  ,
        'destination_workbook' => null  
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
         'operate_object' => 'OperateObject' ,
         'operate_parameter' => 'OperateParameter' ,
         'destination_workbook' => 'DestinationWorkbook' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'operate_object' => 'setOperateObject' ,
        'operate_parameter' => 'setOperateParameter' ,
        'destination_workbook' => 'setDestinationWorkbook' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'operate_object' => 'getOperateObject' ,
        'operate_parameter' => 'getOperateParameter' ,
        'destination_workbook' => 'getDestinationWorkbook' 
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
        $this->container['operate_object'] = isset($data['operate_object']) ? $data['operate_object'] : null;
        $this->container['operate_parameter'] = isset($data['operate_parameter']) ? $data['operate_parameter'] : null;
        $this->container['destination_workbook'] = isset($data['destination_workbook']) ? $data['destination_workbook'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['operate_object'] === null) {
            $invalidProperties[] = "'operate_object' can't be null";
        }
        if ($this->container['operate_parameter'] === null) {
            $invalidProperties[] = "'operate_parameter' can't be null";
        }
        if ($this->container['destination_workbook'] === null) {
            $invalidProperties[] = "'destination_workbook' can't be null";
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
        if ($this->container['operate_object'] === null) {
                    return false;
                }
        if ($this->container['operate_parameter'] === null) {
                    return false;
                }
        if ($this->container['destination_workbook'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets operate_object
     *
     * @return \Aspose\Cells\Cloud\Model\OperateObject
     */
    public function getOperateObject()
    {
        return $this->container['operate_object'];
    }

    /**
     * Sets operate_object
     *
     *  
     *
     * @return $this
     */
    public function setOperateObject($operate_object)
    {
        $this->container['operate_object'] = $operate_object;

        return $this;
    }
   /**
     * Gets operate_parameter
     *
     * @return \Aspose\Cells\Cloud\Model\OperateParameter
     */
    public function getOperateParameter()
    {
        return $this->container['operate_parameter'];
    }

    /**
     * Sets operate_parameter
     *
     *  
     *
     * @return $this
     */
    public function setOperateParameter($operate_parameter)
    {
        $this->container['operate_parameter'] = $operate_parameter;

        return $this;
    }
   /**
     * Gets destination_workbook
     *
     * @return \Aspose\Cells\Cloud\Model\FileSource
     */
    public function getDestinationWorkbook()
    {
        return $this->container['destination_workbook'];
    }

    /**
     * Sets destination_workbook
     *
     *  
     *
     * @return $this
     */
    public function setDestinationWorkbook($destination_workbook)
    {
        $this->container['destination_workbook'] = $destination_workbook;

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
