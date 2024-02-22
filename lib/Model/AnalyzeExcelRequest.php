<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AnalyzeExcelRequest.cs">
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

class AnalyzeExcelRequest
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AnalyzeExcelRequest';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'files' => '\Aspose\Cells\Cloud\Model\FileInfo[]',
        'need_thumbnail' => 'bool',
        'build_suggestoin_sheet' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'files' => null  ,
        'need_thumbnail' => null  ,
        'build_suggestoin_sheet' => null  
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
         'files' => 'Files' ,
         'need_thumbnail' => 'NeedThumbnail' ,
         'build_suggestoin_sheet' => 'BuildSuggestoinSheet' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'files' => 'setFiles' ,
        'need_thumbnail' => 'setNeedThumbnail' ,
        'build_suggestoin_sheet' => 'setBuildSuggestoinSheet' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'files' => 'getFiles' ,
        'need_thumbnail' => 'getNeedThumbnail' ,
        'build_suggestoin_sheet' => 'getBuildSuggestoinSheet' 
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
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['need_thumbnail'] = isset($data['need_thumbnail']) ? $data['need_thumbnail'] : null;
        $this->container['build_suggestoin_sheet'] = isset($data['build_suggestoin_sheet']) ? $data['build_suggestoin_sheet'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['files'] === null) {
            $invalidProperties[] = "'files' can't be null";
        }
        if ($this->container['need_thumbnail'] === null) {
            $invalidProperties[] = "'need_thumbnail' can't be null";
        }
        if ($this->container['build_suggestoin_sheet'] === null) {
            $invalidProperties[] = "'build_suggestoin_sheet' can't be null";
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
        if ($this->container['files'] === null) {
                    return false;
                }
        if ($this->container['need_thumbnail'] === null) {
                    return false;
                }
        if ($this->container['build_suggestoin_sheet'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets files
     *
     * @return \Aspose\Cells\Cloud\Model\FileInfo[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     *  
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

        return $this;
    }
   /**
     * Gets need_thumbnail
     *
     * @return bool
     */
    public function getNeedThumbnail()
    {
        return $this->container['need_thumbnail'];
    }

    /**
     * Sets need_thumbnail
     *
     *  
     *
     * @return $this
     */
    public function setNeedThumbnail($need_thumbnail)
    {
        $this->container['need_thumbnail'] = $need_thumbnail;

        return $this;
    }
   /**
     * Gets build_suggestoin_sheet
     *
     * @return bool
     */
    public function getBuildSuggestoinSheet()
    {
        return $this->container['build_suggestoin_sheet'];
    }

    /**
     * Sets build_suggestoin_sheet
     *
     *  
     *
     * @return $this
     */
    public function setBuildSuggestoinSheet($build_suggestoin_sheet)
    {
        $this->container['build_suggestoin_sheet'] = $build_suggestoin_sheet;

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
