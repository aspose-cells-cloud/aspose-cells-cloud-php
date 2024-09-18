<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WordCaseOptions.cs">
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

class WordCaseOptions
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WordCaseOptions';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'data_source' => '\Aspose\Cells\Cloud\Model\DataSource',
        'file_info' => '\Aspose\Cells\Cloud\Model\FileInfo',
        'word_case_type' => 'string',
        'scope_options' => '\Aspose\Cells\Cloud\Model\ScopeOptions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'data_source' => null  ,
        'file_info' => null  ,
        'word_case_type' => null  ,
        'scope_options' => null  
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
         'file_info' => 'FileInfo' ,
         'word_case_type' => 'WordCaseType' ,
         'scope_options' => 'ScopeOptions' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_source' => 'setDataSource' ,
        'file_info' => 'setFileInfo' ,
        'word_case_type' => 'setWordCaseType' ,
        'scope_options' => 'setScopeOptions' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_source' => 'getDataSource' ,
        'file_info' => 'getFileInfo' ,
        'word_case_type' => 'getWordCaseType' ,
        'scope_options' => 'getScopeOptions' 
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
        $this->container['file_info'] = isset($data['file_info']) ? $data['file_info'] : null;
        $this->container['word_case_type'] = isset($data['word_case_type']) ? $data['word_case_type'] : null;
        $this->container['scope_options'] = isset($data['scope_options']) ? $data['scope_options'] : null;
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
        if ($this->container['file_info'] === null) {
            $invalidProperties[] = "'file_info' can't be null";
        }
        if ($this->container['word_case_type'] === null) {
            $invalidProperties[] = "'word_case_type' can't be null";
        }
        if ($this->container['scope_options'] === null) {
            $invalidProperties[] = "'scope_options' can't be null";
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
        if ($this->container['file_info'] === null) {
                    return false;
                }
        if ($this->container['word_case_type'] === null) {
                    return false;
                }
        if ($this->container['scope_options'] === null) {
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
     * Gets word_case_type
     *
     * @return string
     */
    public function getWordCaseType()
    {
        return $this->container['word_case_type'];
    }

    /**
     * Sets word_case_type
     *
     *  
     *
     * @return $this
     */
    public function setWordCaseType($word_case_type)
    {
        $this->container['word_case_type'] = $word_case_type;

        return $this;
    }
   /**
     * Gets scope_options
     *
     * @return \Aspose\Cells\Cloud\Model\ScopeOptions
     */
    public function getScopeOptions()
    {
        return $this->container['scope_options'];
    }

    /**
     * Sets scope_options
     *
     *  
     *
     * @return $this
     */
    public function setScopeOptions($scope_options)
    {
        $this->container['scope_options'] = $scope_options;

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
