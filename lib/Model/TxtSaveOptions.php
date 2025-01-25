<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TxtSaveOptions.cs">
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

class TxtSaveOptions
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TxtSaveOptions';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'quote_type' => 'string',
        'separator' => 'string',
        'separator_string' => 'string',
        'always_quoted' => 'bool',
        'save_format' => 'string',
        'cached_file_folder' => 'string',
        'clear_data' => 'bool',
        'create_directory' => 'bool',
        'enable_http_compression' => 'bool',
        'refresh_chart_cache' => 'bool',
        'sort_names' => 'bool',
        'validate_merged_areas' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'quote_type' => null  ,
        'separator' => null  ,
        'separator_string' => null  ,
        'always_quoted' => null  ,
        'save_format' => null  ,
        'cached_file_folder' => null  ,
        'clear_data' => null  ,
        'create_directory' => null  ,
        'enable_http_compression' => null  ,
        'refresh_chart_cache' => null  ,
        'sort_names' => null  ,
        'validate_merged_areas' => null  
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
         'quote_type' => 'QuoteType' ,
         'separator' => 'Separator' ,
         'separator_string' => 'SeparatorString' ,
         'always_quoted' => 'AlwaysQuoted' ,
         'save_format' => 'SaveFormat' ,
         'cached_file_folder' => 'CachedFileFolder' ,
         'clear_data' => 'ClearData' ,
         'create_directory' => 'CreateDirectory' ,
         'enable_http_compression' => 'EnableHTTPCompression' ,
         'refresh_chart_cache' => 'RefreshChartCache' ,
         'sort_names' => 'SortNames' ,
         'validate_merged_areas' => 'ValidateMergedAreas' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quote_type' => 'setQuoteType' ,
        'separator' => 'setSeparator' ,
        'separator_string' => 'setSeparatorString' ,
        'always_quoted' => 'setAlwaysQuoted' ,
        'save_format' => 'setSaveFormat' ,
        'cached_file_folder' => 'setCachedFileFolder' ,
        'clear_data' => 'setClearData' ,
        'create_directory' => 'setCreateDirectory' ,
        'enable_http_compression' => 'setEnableHTTPCompression' ,
        'refresh_chart_cache' => 'setRefreshChartCache' ,
        'sort_names' => 'setSortNames' ,
        'validate_merged_areas' => 'setValidateMergedAreas' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quote_type' => 'getQuoteType' ,
        'separator' => 'getSeparator' ,
        'separator_string' => 'getSeparatorString' ,
        'always_quoted' => 'getAlwaysQuoted' ,
        'save_format' => 'getSaveFormat' ,
        'cached_file_folder' => 'getCachedFileFolder' ,
        'clear_data' => 'getClearData' ,
        'create_directory' => 'getCreateDirectory' ,
        'enable_http_compression' => 'getEnableHTTPCompression' ,
        'refresh_chart_cache' => 'getRefreshChartCache' ,
        'sort_names' => 'getSortNames' ,
        'validate_merged_areas' => 'getValidateMergedAreas' 
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
        $this->container['quote_type'] = isset($data['quote_type']) ? $data['quote_type'] : null;
        $this->container['separator'] = isset($data['separator']) ? $data['separator'] : null;
        $this->container['separator_string'] = isset($data['separator_string']) ? $data['separator_string'] : null;
        $this->container['always_quoted'] = isset($data['always_quoted']) ? $data['always_quoted'] : null;
        $this->container['save_format'] = isset($data['save_format']) ? $data['save_format'] : null;
        $this->container['cached_file_folder'] = isset($data['cached_file_folder']) ? $data['cached_file_folder'] : null;
        $this->container['clear_data'] = isset($data['clear_data']) ? $data['clear_data'] : null;
        $this->container['create_directory'] = isset($data['create_directory']) ? $data['create_directory'] : null;
        $this->container['enable_http_compression'] = isset($data['enable_http_compression']) ? $data['enable_http_compression'] : null;
        $this->container['refresh_chart_cache'] = isset($data['refresh_chart_cache']) ? $data['refresh_chart_cache'] : null;
        $this->container['sort_names'] = isset($data['sort_names']) ? $data['sort_names'] : null;
        $this->container['validate_merged_areas'] = isset($data['validate_merged_areas']) ? $data['validate_merged_areas'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['quote_type'] === null) {
            $invalidProperties[] = "'quote_type' can't be null";
        }
        if ($this->container['separator'] === null) {
            $invalidProperties[] = "'separator' can't be null";
        }
        if ($this->container['separator_string'] === null) {
            $invalidProperties[] = "'separator_string' can't be null";
        }
        if ($this->container['always_quoted'] === null) {
            $invalidProperties[] = "'always_quoted' can't be null";
        }
        if ($this->container['save_format'] === null) {
            $invalidProperties[] = "'save_format' can't be null";
        }
        if ($this->container['cached_file_folder'] === null) {
            $invalidProperties[] = "'cached_file_folder' can't be null";
        }
        if ($this->container['clear_data'] === null) {
            $invalidProperties[] = "'clear_data' can't be null";
        }
        if ($this->container['create_directory'] === null) {
            $invalidProperties[] = "'create_directory' can't be null";
        }
        if ($this->container['enable_http_compression'] === null) {
            $invalidProperties[] = "'enable_http_compression' can't be null";
        }
        if ($this->container['refresh_chart_cache'] === null) {
            $invalidProperties[] = "'refresh_chart_cache' can't be null";
        }
        if ($this->container['sort_names'] === null) {
            $invalidProperties[] = "'sort_names' can't be null";
        }
        if ($this->container['validate_merged_areas'] === null) {
            $invalidProperties[] = "'validate_merged_areas' can't be null";
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
        if ($this->container['quote_type'] === null) {
                    return false;
                }
        if ($this->container['separator'] === null) {
                    return false;
                }
        if ($this->container['separator_string'] === null) {
                    return false;
                }
        if ($this->container['always_quoted'] === null) {
                    return false;
                }
        if ($this->container['save_format'] === null) {
                    return false;
                }
        if ($this->container['cached_file_folder'] === null) {
                    return false;
                }
        if ($this->container['clear_data'] === null) {
                    return false;
                }
        if ($this->container['create_directory'] === null) {
                    return false;
                }
        if ($this->container['enable_http_compression'] === null) {
                    return false;
                }
        if ($this->container['refresh_chart_cache'] === null) {
                    return false;
                }
        if ($this->container['sort_names'] === null) {
                    return false;
                }
        if ($this->container['validate_merged_areas'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets quote_type
     *
     * @return string
     */
    public function getQuoteType()
    {
        return $this->container['quote_type'];
    }

    /**
     * Sets quote_type
     *
     *  Gets or sets how to quote values in the exported text file.
     *
     * @return $this
     */
    public function setQuoteType($quote_type)
    {
        $this->container['quote_type'] = $quote_type;

        return $this;
    }
   /**
     * Gets separator
     *
     * @return string
     */
    public function getSeparator()
    {
        return $this->container['separator'];
    }

    /**
     * Sets separator
     *
     *  Gets and sets char Delimiter of text file.
     *
     * @return $this
     */
    public function setSeparator($separator)
    {
        $this->container['separator'] = $separator;

        return $this;
    }
   /**
     * Gets separator_string
     *
     * @return string
     */
    public function getSeparatorString()
    {
        return $this->container['separator_string'];
    }

    /**
     * Sets separator_string
     *
     *  Gets and sets the a string value as separator.
     *
     * @return $this
     */
    public function setSeparatorString($separator_string)
    {
        $this->container['separator_string'] = $separator_string;

        return $this;
    }
   /**
     * Gets always_quoted
     *
     * @return bool
     */
    public function getAlwaysQuoted()
    {
        return $this->container['always_quoted'];
    }

    /**
     * Sets always_quoted
     *
     *  Indicates whether always adding '"' for each field. If true then all values will be quoted; If false then values will only be quoted when needed(for example, when values contain special characters such as '"' , '\n' or separator character). Default is false.
     *
     * @return $this
     */
    public function setAlwaysQuoted($always_quoted)
    {
        $this->container['always_quoted'] = $always_quoted;

        return $this;
    }
   /**
     * Gets save_format
     *
     * @return string
     */
    public function getSaveFormat()
    {
        return $this->container['save_format'];
    }

    /**
     * Sets save_format
     *
     *  
     *
     * @return $this
     */
    public function setSaveFormat($save_format)
    {
        $this->container['save_format'] = $save_format;

        return $this;
    }
   /**
     * Gets cached_file_folder
     *
     * @return string
     */
    public function getCachedFileFolder()
    {
        return $this->container['cached_file_folder'];
    }

    /**
     * Sets cached_file_folder
     *
     *  
     *
     * @return $this
     */
    public function setCachedFileFolder($cached_file_folder)
    {
        $this->container['cached_file_folder'] = $cached_file_folder;

        return $this;
    }
   /**
     * Gets clear_data
     *
     * @return bool
     */
    public function getClearData()
    {
        return $this->container['clear_data'];
    }

    /**
     * Sets clear_data
     *
     *  
     *
     * @return $this
     */
    public function setClearData($clear_data)
    {
        $this->container['clear_data'] = $clear_data;

        return $this;
    }
   /**
     * Gets create_directory
     *
     * @return bool
     */
    public function getCreateDirectory()
    {
        return $this->container['create_directory'];
    }

    /**
     * Sets create_directory
     *
     *  
     *
     * @return $this
     */
    public function setCreateDirectory($create_directory)
    {
        $this->container['create_directory'] = $create_directory;

        return $this;
    }
   /**
     * Gets enable_http_compression
     *
     * @return bool
     */
    public function getEnableHTTPCompression()
    {
        return $this->container['enable_http_compression'];
    }

    /**
     * Sets enable_http_compression
     *
     *  
     *
     * @return $this
     */
    public function setEnableHTTPCompression($enable_http_compression)
    {
        $this->container['enable_http_compression'] = $enable_http_compression;

        return $this;
    }
   /**
     * Gets refresh_chart_cache
     *
     * @return bool
     */
    public function getRefreshChartCache()
    {
        return $this->container['refresh_chart_cache'];
    }

    /**
     * Sets refresh_chart_cache
     *
     *  
     *
     * @return $this
     */
    public function setRefreshChartCache($refresh_chart_cache)
    {
        $this->container['refresh_chart_cache'] = $refresh_chart_cache;

        return $this;
    }
   /**
     * Gets sort_names
     *
     * @return bool
     */
    public function getSortNames()
    {
        return $this->container['sort_names'];
    }

    /**
     * Sets sort_names
     *
     *  
     *
     * @return $this
     */
    public function setSortNames($sort_names)
    {
        $this->container['sort_names'] = $sort_names;

        return $this;
    }
   /**
     * Gets validate_merged_areas
     *
     * @return bool
     */
    public function getValidateMergedAreas()
    {
        return $this->container['validate_merged_areas'];
    }

    /**
     * Sets validate_merged_areas
     *
     *  
     *
     * @return $this
     */
    public function setValidateMergedAreas($validate_merged_areas)
    {
        $this->container['validate_merged_areas'] = $validate_merged_areas;

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
