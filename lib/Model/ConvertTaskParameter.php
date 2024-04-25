<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ConvertTaskParameter.cs">
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

class ConvertTaskParameter
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConvertTaskParameter';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'data_source' => '\Aspose\Cells\Cloud\Model\DataSource',
        'workbook' => '\Aspose\Cells\Cloud\Model\FileSource',
        'destination_file' => 'string',
        'region' => 'string',
        'save_options' => '\Aspose\Cells\Cloud\Model\SaveOptions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'data_source' => null  ,
        'workbook' => null  ,
        'destination_file' => null  ,
        'region' => null  ,
        'save_options' => null  
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
         'data_source' => 'DataSource' ,
         'workbook' => 'Workbook' ,
         'destination_file' => 'DestinationFile' ,
         'region' => 'Region' ,
         'save_options' => 'SaveOptions' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_source' => 'setDataSource' ,
        'workbook' => 'setWorkbook' ,
        'destination_file' => 'setDestinationFile' ,
        'region' => 'setRegion' ,
        'save_options' => 'setSaveOptions' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_source' => 'getDataSource' ,
        'workbook' => 'getWorkbook' ,
        'destination_file' => 'getDestinationFile' ,
        'region' => 'getRegion' ,
        'save_options' => 'getSaveOptions' 
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
        $this->container['data_source'] = isset($data['data_source']) ? $data['data_source'] : null;
        $this->container['workbook'] = isset($data['workbook']) ? $data['workbook'] : null;
        $this->container['destination_file'] = isset($data['destination_file']) ? $data['destination_file'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['save_options'] = isset($data['save_options']) ? $data['save_options'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['data_source'] === null) {
            $invalidProperties[] = "'data_source' can't be null";
        }
        if ($this->container['workbook'] === null) {
            $invalidProperties[] = "'workbook' can't be null";
        }
        if ($this->container['destination_file'] === null) {
            $invalidProperties[] = "'destination_file' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['save_options'] === null) {
            $invalidProperties[] = "'save_options' can't be null";
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
        if ($this->container['data_source'] === null) {
                    return false;
                }
        if ($this->container['workbook'] === null) {
                    return false;
                }
        if ($this->container['destination_file'] === null) {
                    return false;
                }
        if ($this->container['region'] === null) {
                    return false;
                }
        if ($this->container['save_options'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets data_source
     *
     * @return \Aspose\Cells\Cloud\Model\DataSource
     */
    public function getDataSource()
    {
        return $this->container['data_source'];
    }

    /**
     * Sets data_source
     *
     *  
     *
     * @return $this
     */
    public function setDataSource($data_source)
    {
        $this->container['data_source'] = $data_source;

        return $this;
    }
   /**
     * Gets workbook
     *
     * @return \Aspose\Cells\Cloud\Model\FileSource
     */
    public function getWorkbook()
    {
        return $this->container['workbook'];
    }

    /**
     * Sets workbook
     *
     *  
     *
     * @return $this
     */
    public function setWorkbook($workbook)
    {
        $this->container['workbook'] = $workbook;

        return $this;
    }
   /**
     * Gets destination_file
     *
     * @return string
     */
    public function getDestinationFile()
    {
        return $this->container['destination_file'];
    }

    /**
     * Sets destination_file
     *
     *  
     *
     * @return $this
     */
    public function setDestinationFile($destination_file)
    {
        $this->container['destination_file'] = $destination_file;

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
     * Gets save_options
     *
     * @return \Aspose\Cells\Cloud\Model\SaveOptions
     */
    public function getSaveOptions()
    {
        return $this->container['save_options'];
    }

    /**
     * Sets save_options
     *
     *  
     *
     * @return $this
     */
    public function setSaveOptions($save_options)
    {
        $this->container['save_options'] = $save_options;

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
