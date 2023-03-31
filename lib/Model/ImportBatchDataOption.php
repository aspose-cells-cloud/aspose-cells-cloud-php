<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ImportBatchDataOption.cs">
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

class ImportBatchDataOption implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImportBatchDataOption';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'batch_data' => '\Aspose\Cells\Cloud\Model\CellValue[]',
        'destination_worksheet' => 'string',
        'is_insert' => 'bool',
        'import_data_type' => 'string',
        'source' => '\Aspose\Cells\Cloud\Model\FileSource'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'batch_data' => null  ,
        'destination_worksheet' => null  ,
        'is_insert' => null  ,
        'import_data_type' => null  ,
        'source' => null  
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
         'batch_data' => 'BatchData' ,
         'destination_worksheet' => 'DestinationWorksheet' ,
         'is_insert' => 'IsInsert' ,
         'import_data_type' => 'ImportDataType' ,
         'source' => 'Source' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'batch_data' => 'setBatchData' ,
        'destination_worksheet' => 'setDestinationWorksheet' ,
        'is_insert' => 'setIsInsert' ,
        'import_data_type' => 'setImportDataType' ,
        'source' => 'setSource' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'batch_data' => 'getBatchData' ,
        'destination_worksheet' => 'getDestinationWorksheet' ,
        'is_insert' => 'getIsInsert' ,
        'import_data_type' => 'getImportDataType' ,
        'source' => 'getSource' 
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
        $this->container['batch_data'] = isset($data['batch_data']) ? $data['batch_data'] : null;
        $this->container['destination_worksheet'] = isset($data['destination_worksheet']) ? $data['destination_worksheet'] : null;
        $this->container['is_insert'] = isset($data['is_insert']) ? $data['is_insert'] : null;
        $this->container['import_data_type'] = isset($data['import_data_type']) ? $data['import_data_type'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['batch_data'] === null) {
            $invalidProperties[] = "'batch_data' can't be null";
        }
        if ($this->container['destination_worksheet'] === null) {
            $invalidProperties[] = "'destination_worksheet' can't be null";
        }
        if ($this->container['is_insert'] === null) {
            $invalidProperties[] = "'is_insert' can't be null";
        }
        if ($this->container['import_data_type'] === null) {
            $invalidProperties[] = "'import_data_type' can't be null";
        }
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
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
        if ($this->container['batch_data'] === null) {
                    return false;
                }
        if ($this->container['destination_worksheet'] === null) {
                    return false;
                }
        if ($this->container['is_insert'] === null) {
                    return false;
                }
        if ($this->container['import_data_type'] === null) {
                    return false;
                }
        if ($this->container['source'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets batch_data
     *
     * @return \Aspose\Cells\Cloud\Model\CellValue[]
     */
    public function getBatchData()
    {
        return $this->container['batch_data'];
    }

    /**
     * Sets batch_data
     *
     *  
     *
     * @return $this
     */
    public function setBatchData($batch_data)
    {
        $this->container['batch_data'] = $batch_data;

        return $this;
    }
   /**
     * Gets destination_worksheet
     *
     * @return string
     */
    public function getDestinationWorksheet()
    {
        return $this->container['destination_worksheet'];
    }

    /**
     * Sets destination_worksheet
     *
     *  
     *
     * @return $this
     */
    public function setDestinationWorksheet($destination_worksheet)
    {
        $this->container['destination_worksheet'] = $destination_worksheet;

        return $this;
    }
   /**
     * Gets is_insert
     *
     * @return bool
     */
    public function getIsInsert()
    {
        return $this->container['is_insert'];
    }

    /**
     * Sets is_insert
     *
     *  
     *
     * @return $this
     */
    public function setIsInsert($is_insert)
    {
        $this->container['is_insert'] = $is_insert;

        return $this;
    }
   /**
     * Gets import_data_type
     *
     * @return string
     */
    public function getImportDataType()
    {
        return $this->container['import_data_type'];
    }

    /**
     * Sets import_data_type
     *
     *  
     *
     * @return $this
     */
    public function setImportDataType($import_data_type)
    {
        $this->container['import_data_type'] = $import_data_type;

        return $this;
    }
   /**
     * Gets source
     *
     * @return \Aspose\Cells\Cloud\Model\FileSource
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     *  
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

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
