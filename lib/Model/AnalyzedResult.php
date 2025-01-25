<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AnalyzedResult.cs">
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

class AnalyzedResult
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AnalyzedResult';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'filename' => 'string',
        'description' => 'string',
        'basic_statistics' => '\Aspose\Cells\Cloud\Model\ExcelDataStatistics',
        'results' => '\Aspose\Cells\Cloud\Model\AnalyzedTableDescription[]',
        'suggested_file' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'filename' => null  ,
        'description' => null  ,
        'basic_statistics' => null  ,
        'results' => null  ,
        'suggested_file' => null  
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
         'filename' => 'Filename' ,
         'description' => 'Description' ,
         'basic_statistics' => 'BasicStatistics' ,
         'results' => 'Results' ,
         'suggested_file' => 'SuggestedFile' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'filename' => 'setFilename' ,
        'description' => 'setDescription' ,
        'basic_statistics' => 'setBasicStatistics' ,
        'results' => 'setResults' ,
        'suggested_file' => 'setSuggestedFile' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'filename' => 'getFilename' ,
        'description' => 'getDescription' ,
        'basic_statistics' => 'getBasicStatistics' ,
        'results' => 'getResults' ,
        'suggested_file' => 'getSuggestedFile' 
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
        $this->container['filename'] = isset($data['filename']) ? $data['filename'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['basic_statistics'] = isset($data['basic_statistics']) ? $data['basic_statistics'] : null;
        $this->container['results'] = isset($data['results']) ? $data['results'] : null;
        $this->container['suggested_file'] = isset($data['suggested_file']) ? $data['suggested_file'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['filename'] === null) {
            $invalidProperties[] = "'filename' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['basic_statistics'] === null) {
            $invalidProperties[] = "'basic_statistics' can't be null";
        }
        if ($this->container['results'] === null) {
            $invalidProperties[] = "'results' can't be null";
        }
        if ($this->container['suggested_file'] === null) {
            $invalidProperties[] = "'suggested_file' can't be null";
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
        if ($this->container['filename'] === null) {
                    return false;
                }
        if ($this->container['description'] === null) {
                    return false;
                }
        if ($this->container['basic_statistics'] === null) {
                    return false;
                }
        if ($this->container['results'] === null) {
                    return false;
                }
        if ($this->container['suggested_file'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     *
     *  Represents the file name of data file.
     *
     * @return $this
     */
    public function setFilename($filename)
    {
        $this->container['filename'] = $filename;

        return $this;
    }
   /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     *  Represents summary about results of analyzed data.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }
   /**
     * Gets basic_statistics
     *
     * @return \Aspose\Cells\Cloud\Model\ExcelDataStatistics
     */
    public function getBasicStatistics()
    {
        return $this->container['basic_statistics'];
    }

    /**
     * Sets basic_statistics
     *
     *  Represents Excel data statistics.
     *
     * @return $this
     */
    public function setBasicStatistics($basic_statistics)
    {
        $this->container['basic_statistics'] = $basic_statistics;

        return $this;
    }
   /**
     * Gets results
     *
     * @return \Aspose\Cells\Cloud\Model\AnalyzedTableDescription[]
     */
    public function getResults()
    {
        return $this->container['results'];
    }

    /**
     * Sets results
     *
     *  Represents analyzed table description.
     *
     * @return $this
     */
    public function setResults($results)
    {
        $this->container['results'] = $results;

        return $this;
    }
   /**
     * Gets suggested_file
     *
     * @return string
     */
    public function getSuggestedFile()
    {
        return $this->container['suggested_file'];
    }

    /**
     * Sets suggested_file
     *
     *  base64String Excel file
     *
     * @return $this
     */
    public function setSuggestedFile($suggested_file)
    {
        $this->container['suggested_file'] = $suggested_file;

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
