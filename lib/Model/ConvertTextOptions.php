<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ConvertTextOptions.cs">
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

class ConvertTextOptions
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConvertTextOptions';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'data_source' => '\Aspose\Cells\Cloud\Model\DataSource',
        'file_info' => '\Aspose\Cells\Cloud\Model\FileInfo',
        'scope_options' => '\Aspose\Cells\Cloud\Model\ScopeOptions',
        'convert_text_type' => 'string',
        'source_characters' => 'string',
        'target_characters' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null  ,
        'data_source' => null  ,
        'file_info' => null  ,
        'scope_options' => null  ,
        'convert_text_type' => null  ,
        'source_characters' => null  ,
        'target_characters' => null  
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
         'name' => 'Name' ,
         'data_source' => 'DataSource' ,
         'file_info' => 'FileInfo' ,
         'scope_options' => 'ScopeOptions' ,
         'convert_text_type' => 'ConvertTextType' ,
         'source_characters' => 'SourceCharacters' ,
         'target_characters' => 'TargetCharacters' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName' ,
        'data_source' => 'setDataSource' ,
        'file_info' => 'setFileInfo' ,
        'scope_options' => 'setScopeOptions' ,
        'convert_text_type' => 'setConvertTextType' ,
        'source_characters' => 'setSourceCharacters' ,
        'target_characters' => 'setTargetCharacters' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName' ,
        'data_source' => 'getDataSource' ,
        'file_info' => 'getFileInfo' ,
        'scope_options' => 'getScopeOptions' ,
        'convert_text_type' => 'getConvertTextType' ,
        'source_characters' => 'getSourceCharacters' ,
        'target_characters' => 'getTargetCharacters' 
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['data_source'] = isset($data['data_source']) ? $data['data_source'] : null;
        $this->container['file_info'] = isset($data['file_info']) ? $data['file_info'] : null;
        $this->container['scope_options'] = isset($data['scope_options']) ? $data['scope_options'] : null;
        $this->container['convert_text_type'] = isset($data['convert_text_type']) ? $data['convert_text_type'] : null;
        $this->container['source_characters'] = isset($data['source_characters']) ? $data['source_characters'] : null;
        $this->container['target_characters'] = isset($data['target_characters']) ? $data['target_characters'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['data_source'] === null) {
            $invalidProperties[] = "'data_source' can't be null";
        }
        if ($this->container['file_info'] === null) {
            $invalidProperties[] = "'file_info' can't be null";
        }
        if ($this->container['scope_options'] === null) {
            $invalidProperties[] = "'scope_options' can't be null";
        }
        if ($this->container['convert_text_type'] === null) {
            $invalidProperties[] = "'convert_text_type' can't be null";
        }
        if ($this->container['source_characters'] === null) {
            $invalidProperties[] = "'source_characters' can't be null";
        }
        if ($this->container['target_characters'] === null) {
            $invalidProperties[] = "'target_characters' can't be null";
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
        if ($this->container['name'] === null) {
                    return false;
                }
        if ($this->container['data_source'] === null) {
                    return false;
                }
        if ($this->container['file_info'] === null) {
                    return false;
                }
        if ($this->container['scope_options'] === null) {
                    return false;
                }
        if ($this->container['convert_text_type'] === null) {
                    return false;
                }
        if ($this->container['source_characters'] === null) {
                    return false;
                }
        if ($this->container['target_characters'] === null) {
                    return false;
                }
        return true;
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
     *  The class has a public property called "Name" of type string that can be accessed and modified.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     *  Represents data source.  There are three types of data, they are CloudFileSystem, RequestFiles, HttpUri.
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
     *  Represents file information. Include of filename, filesize, and file content(base64String).
     *
     * @return $this
     */
    public function setFileInfo($file_info)
    {
        $this->container['file_info'] = $file_info;

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
     *  Specifies the range of cells within the worksheet where the spreadsheet operations will be performed. This parameter allows users to define the exact area to be processed, ensuring that operations are applied only to the designated cells.
     *
     * @return $this
     */
    public function setScopeOptions($scope_options)
    {
        $this->container['scope_options'] = $scope_options;

        return $this;
    }
   /**
     * Gets convert_text_type
     *
     * @return string
     */
    public function getConvertTextType()
    {
        return $this->container['convert_text_type'];
    }

    /**
     * Sets convert_text_type
     *
     *  
     *
     * @return $this
     */
    public function setConvertTextType($convert_text_type)
    {
        $this->container['convert_text_type'] = $convert_text_type;

        return $this;
    }
   /**
     * Gets source_characters
     *
     * @return string
     */
    public function getSourceCharacters()
    {
        return $this->container['source_characters'];
    }

    /**
     * Sets source_characters
     *
     *  
     *
     * @return $this
     */
    public function setSourceCharacters($source_characters)
    {
        $this->container['source_characters'] = $source_characters;

        return $this;
    }
   /**
     * Gets target_characters
     *
     * @return string
     */
    public function getTargetCharacters()
    {
        return $this->container['target_characters'];
    }

    /**
     * Sets target_characters
     *
     *  
     *
     * @return $this
     */
    public function setTargetCharacters($target_characters)
    {
        $this->container['target_characters'] = $target_characters;

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
