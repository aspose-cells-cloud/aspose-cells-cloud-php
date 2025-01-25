<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SmartMarkerTaskParameter.cs">
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

class SmartMarkerTaskParameter
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SmartMarkerTaskParameter';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'source_workbook' => '\Aspose\Cells\Cloud\Model\FileSource',
        'destination_workbook' => '\Aspose\Cells\Cloud\Model\FileSource',
        'xml_file' => '\Aspose\Cells\Cloud\Model\FileSource',
        'data_source' => '\Aspose\Cells\Cloud\Model\DataSource',
        'target_data_source' => '\Aspose\Cells\Cloud\Model\DataSource',
        'xml_file_data_source' => '\Aspose\Cells\Cloud\Model\DataSource'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'source_workbook' => null  ,
        'destination_workbook' => null  ,
        'xml_file' => null  ,
        'data_source' => null  ,
        'target_data_source' => null  ,
        'xml_file_data_source' => null  
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
         'source_workbook' => 'SourceWorkbook' ,
         'destination_workbook' => 'DestinationWorkbook' ,
         'xml_file' => 'xmlFile' ,
         'data_source' => 'DataSource' ,
         'target_data_source' => 'TargetDataSource' ,
         'xml_file_data_source' => 'XMLFileDataSource' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'source_workbook' => 'setSourceWorkbook' ,
        'destination_workbook' => 'setDestinationWorkbook' ,
        'xml_file' => 'setxmlFile' ,
        'data_source' => 'setDataSource' ,
        'target_data_source' => 'setTargetDataSource' ,
        'xml_file_data_source' => 'setXMLFileDataSource' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'source_workbook' => 'getSourceWorkbook' ,
        'destination_workbook' => 'getDestinationWorkbook' ,
        'xml_file' => 'getxmlFile' ,
        'data_source' => 'getDataSource' ,
        'target_data_source' => 'getTargetDataSource' ,
        'xml_file_data_source' => 'getXMLFileDataSource' 
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
        $this->container['source_workbook'] = isset($data['source_workbook']) ? $data['source_workbook'] : null;
        $this->container['destination_workbook'] = isset($data['destination_workbook']) ? $data['destination_workbook'] : null;
        $this->container['xml_file'] = isset($data['xml_file']) ? $data['xml_file'] : null;
        $this->container['data_source'] = isset($data['data_source']) ? $data['data_source'] : null;
        $this->container['target_data_source'] = isset($data['target_data_source']) ? $data['target_data_source'] : null;
        $this->container['xml_file_data_source'] = isset($data['xml_file_data_source']) ? $data['xml_file_data_source'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['source_workbook'] === null) {
            $invalidProperties[] = "'source_workbook' can't be null";
        }
        if ($this->container['destination_workbook'] === null) {
            $invalidProperties[] = "'destination_workbook' can't be null";
        }
        if ($this->container['xml_file'] === null) {
            $invalidProperties[] = "'xml_file' can't be null";
        }
        if ($this->container['data_source'] === null) {
            $invalidProperties[] = "'data_source' can't be null";
        }
        if ($this->container['target_data_source'] === null) {
            $invalidProperties[] = "'target_data_source' can't be null";
        }
        if ($this->container['xml_file_data_source'] === null) {
            $invalidProperties[] = "'xml_file_data_source' can't be null";
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
        if ($this->container['source_workbook'] === null) {
                    return false;
                }
        if ($this->container['destination_workbook'] === null) {
                    return false;
                }
        if ($this->container['xml_file'] === null) {
                    return false;
                }
        if ($this->container['data_source'] === null) {
                    return false;
                }
        if ($this->container['target_data_source'] === null) {
                    return false;
                }
        if ($this->container['xml_file_data_source'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets source_workbook
     *
     * @return \Aspose\Cells\Cloud\Model\FileSource
     */
    public function getSourceWorkbook()
    {
        return $this->container['source_workbook'];
    }

    /**
     * Sets source_workbook
     *
     *  Represents data source of task object.
     *
     * @return $this
     */
    public function setSourceWorkbook($source_workbook)
    {
        $this->container['source_workbook'] = $source_workbook;

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
     *  Represents data source of task object.
     *
     * @return $this
     */
    public function setDestinationWorkbook($destination_workbook)
    {
        $this->container['destination_workbook'] = $destination_workbook;

        return $this;
    }
   /**
     * Gets xml_file
     *
     * @return \Aspose\Cells\Cloud\Model\FileSource
     */
    public function getxmlFile()
    {
        return $this->container['xml_file'];
    }

    /**
     * Sets xml_file
     *
     *  Represents xml file.
     *
     * @return $this
     */
    public function setxmlFile($xml_file)
    {
        $this->container['xml_file'] = $xml_file;

        return $this;
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
     *  Represents destination data source.
     *
     * @return $this
     */
    public function setDataSource($data_source)
    {
        $this->container['data_source'] = $data_source;

        return $this;
    }
   /**
     * Gets target_data_source
     *
     * @return \Aspose\Cells\Cloud\Model\DataSource
     */
    public function getTargetDataSource()
    {
        return $this->container['target_data_source'];
    }

    /**
     * Sets target_data_source
     *
     *  Represents destination data source.
     *
     * @return $this
     */
    public function setTargetDataSource($target_data_source)
    {
        $this->container['target_data_source'] = $target_data_source;

        return $this;
    }
   /**
     * Gets xml_file_data_source
     *
     * @return \Aspose\Cells\Cloud\Model\DataSource
     */
    public function getXMLFileDataSource()
    {
        return $this->container['xml_file_data_source'];
    }

    /**
     * Sets xml_file_data_source
     *
     *  Represents xml file.
     *
     * @return $this
     */
    public function setXMLFileDataSource($xml_file_data_source)
    {
        $this->container['xml_file_data_source'] = $xml_file_data_source;

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
