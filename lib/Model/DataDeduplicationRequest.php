<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DataDeduplicationRequest.cs">
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

class DataDeduplicationRequest
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DataDeduplicationRequest';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'file' => '\Aspose\Cells\Cloud\Model\FileInfo',
        'deduplication_region' => '\Aspose\Cells\Cloud\Model\DeduplicationRegion',
        'out_file_format' => 'string',
        'check_excel_restriction' => 'bool',
        'region' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'file' => null  ,
        'deduplication_region' => null  ,
        'out_file_format' => null  ,
        'check_excel_restriction' => null  ,
        'region' => null  
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
         'file' => 'File' ,
         'deduplication_region' => 'DeduplicationRegion' ,
         'out_file_format' => 'OutFileFormat' ,
         'check_excel_restriction' => 'CheckExcelRestriction' ,
         'region' => 'Region' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file' => 'setFile' ,
        'deduplication_region' => 'setDeduplicationRegion' ,
        'out_file_format' => 'setOutFileFormat' ,
        'check_excel_restriction' => 'setCheckExcelRestriction' ,
        'region' => 'setRegion' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file' => 'getFile' ,
        'deduplication_region' => 'getDeduplicationRegion' ,
        'out_file_format' => 'getOutFileFormat' ,
        'check_excel_restriction' => 'getCheckExcelRestriction' ,
        'region' => 'getRegion' 
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
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['deduplication_region'] = isset($data['deduplication_region']) ? $data['deduplication_region'] : null;
        $this->container['out_file_format'] = isset($data['out_file_format']) ? $data['out_file_format'] : null;
        $this->container['check_excel_restriction'] = isset($data['check_excel_restriction']) ? $data['check_excel_restriction'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['file'] === null) {
            $invalidProperties[] = "'file' can't be null";
        }
        if ($this->container['deduplication_region'] === null) {
            $invalidProperties[] = "'deduplication_region' can't be null";
        }
        if ($this->container['out_file_format'] === null) {
            $invalidProperties[] = "'out_file_format' can't be null";
        }
        if ($this->container['check_excel_restriction'] === null) {
            $invalidProperties[] = "'check_excel_restriction' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
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
        if ($this->container['file'] === null) {
                    return false;
                }
        if ($this->container['deduplication_region'] === null) {
                    return false;
                }
        if ($this->container['out_file_format'] === null) {
                    return false;
                }
        if ($this->container['check_excel_restriction'] === null) {
                    return false;
                }
        if ($this->container['region'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets file
     *
     * @return \Aspose\Cells\Cloud\Model\FileInfo
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     *  Spreadsheet files that require data fulling. 
     *
     * @return $this
     */
    public function setFile($file)
    {
        $this->container['file'] = $file;

        return $this;
    }
   /**
     * Gets deduplication_region
     *
     * @return \Aspose\Cells\Cloud\Model\DeduplicationRegion
     */
    public function getDeduplicationRegion()
    {
        return $this->container['deduplication_region'];
    }

    /**
     * Sets deduplication_region
     *
     *  This class has a property named "DeduplicationRegion" of type "DeduplicationRegion" with a default value of a new instance of the "DeduplicationRegion" class.
     *
     * @return $this
     */
    public function setDeduplicationRegion($deduplication_region)
    {
        $this->container['deduplication_region'] = $deduplication_region;

        return $this;
    }
   /**
     * Gets out_file_format
     *
     * @return string
     */
    public function getOutFileFormat()
    {
        return $this->container['out_file_format'];
    }

    /**
     * Sets out_file_format
     *
     *  finish to data cleansing, outfile`s file format.
     *
     * @return $this
     */
    public function setOutFileFormat($out_file_format)
    {
        $this->container['out_file_format'] = $out_file_format;

        return $this;
    }
   /**
     * Gets check_excel_restriction
     *
     * @return bool
     */
    public function getCheckExcelRestriction()
    {
        return $this->container['check_excel_restriction'];
    }

    /**
     * Sets check_excel_restriction
     *
     *  Whether check restriction of Spreadsheet file when user modify cells related objects.
     *
     * @return $this
     */
    public function setCheckExcelRestriction($check_excel_restriction)
    {
        $this->container['check_excel_restriction'] = $check_excel_restriction;

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
     *  The regional settings for workbook.
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

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
