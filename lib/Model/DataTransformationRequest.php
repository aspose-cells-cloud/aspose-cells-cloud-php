<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DataTransformationRequest.cs">
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

class DataTransformationRequest
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DataTransformationRequest';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'file_info' => '\Aspose\Cells\Cloud\Model\FileInfo',
        'transformation' => '\Aspose\Cells\Cloud\Model\Transformation',
        'load_data' => '\Aspose\Cells\Cloud\Model\LoadData',
        'region' => 'string',
        'out_format' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'file_info' => null  ,
        'transformation' => null  ,
        'load_data' => null  ,
        'region' => null  ,
        'out_format' => null  
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
         'file_info' => 'FileInfo' ,
         'transformation' => 'Transformation' ,
         'load_data' => 'LoadData' ,
         'region' => 'Region' ,
         'out_format' => 'OutFormat' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file_info' => 'setFileInfo' ,
        'transformation' => 'setTransformation' ,
        'load_data' => 'setLoadData' ,
        'region' => 'setRegion' ,
        'out_format' => 'setOutFormat' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file_info' => 'getFileInfo' ,
        'transformation' => 'getTransformation' ,
        'load_data' => 'getLoadData' ,
        'region' => 'getRegion' ,
        'out_format' => 'getOutFormat' 
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
        $this->container['file_info'] = isset($data['file_info']) ? $data['file_info'] : null;
        $this->container['transformation'] = isset($data['transformation']) ? $data['transformation'] : null;
        $this->container['load_data'] = isset($data['load_data']) ? $data['load_data'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['out_format'] = isset($data['out_format']) ? $data['out_format'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['file_info'] === null) {
            $invalidProperties[] = "'file_info' can't be null";
        }
        if ($this->container['transformation'] === null) {
            $invalidProperties[] = "'transformation' can't be null";
        }
        if ($this->container['load_data'] === null) {
            $invalidProperties[] = "'load_data' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['out_format'] === null) {
            $invalidProperties[] = "'out_format' can't be null";
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
        if ($this->container['file_info'] === null) {
                    return false;
                }
        if ($this->container['transformation'] === null) {
                    return false;
                }
        if ($this->container['load_data'] === null) {
                    return false;
                }
        if ($this->container['region'] === null) {
                    return false;
                }
        if ($this->container['out_format'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets file_info
     *
     * @return \Aspose\Cells\Cloud\Model\FileInfo
     */
    public function getFileInfo()
    {
        return $this->container['file_info'];
    }

    /**
     * Sets file_info
     *
     *  
     *
     * @return $this
     */
    public function setFileInfo($file_info)
    {
        $this->container['file_info'] = $file_info;

        return $this;
    }
   /**
     * Gets transformation
     *
     * @return \Aspose\Cells\Cloud\Model\Transformation
     */
    public function getTransformation()
    {
        return $this->container['transformation'];
    }

    /**
     * Sets transformation
     *
     *  
     *
     * @return $this
     */
    public function setTransformation($transformation)
    {
        $this->container['transformation'] = $transformation;

        return $this;
    }
   /**
     * Gets load_data
     *
     * @return \Aspose\Cells\Cloud\Model\LoadData
     */
    public function getLoadData()
    {
        return $this->container['load_data'];
    }

    /**
     * Sets load_data
     *
     *  
     *
     * @return $this
     */
    public function setLoadData($load_data)
    {
        $this->container['load_data'] = $load_data;

        return $this;
    }
   /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     *  
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }
   /**
     * Gets out_format
     *
     * @return string
     */
    public function getOutFormat()
    {
        return $this->container['out_format'];
    }

    /**
     * Sets out_format
     *
     *  
     *
     * @return $this
     */
    public function setOutFormat($out_format)
    {
        $this->container['out_format'] = $out_format;

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
