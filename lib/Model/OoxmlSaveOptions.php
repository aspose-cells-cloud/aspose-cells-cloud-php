<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="OoxmlSaveOptions.cs">
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

class OoxmlSaveOptions
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OoxmlSaveOptions';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'export_cell_name' => 'bool',
        'update_zoom' => 'bool',
        'enable_zip64' => 'bool',
        'embed_ooxml_as_ole_object' => 'bool',
        'compression_type' => 'string',
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
        'export_cell_name' => null  ,
        'update_zoom' => null  ,
        'enable_zip64' => null  ,
        'embed_ooxml_as_ole_object' => null  ,
        'compression_type' => null  ,
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
         'export_cell_name' => 'ExportCellName' ,
         'update_zoom' => 'UpdateZoom' ,
         'enable_zip64' => 'EnableZip64' ,
         'embed_ooxml_as_ole_object' => 'EmbedOoxmlAsOleObject' ,
         'compression_type' => 'CompressionType' ,
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
        'export_cell_name' => 'setExportCellName' ,
        'update_zoom' => 'setUpdateZoom' ,
        'enable_zip64' => 'setEnableZip64' ,
        'embed_ooxml_as_ole_object' => 'setEmbedOoxmlAsOleObject' ,
        'compression_type' => 'setCompressionType' ,
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
        'export_cell_name' => 'getExportCellName' ,
        'update_zoom' => 'getUpdateZoom' ,
        'enable_zip64' => 'getEnableZip64' ,
        'embed_ooxml_as_ole_object' => 'getEmbedOoxmlAsOleObject' ,
        'compression_type' => 'getCompressionType' ,
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
        $this->container['export_cell_name'] = isset($data['export_cell_name']) ? $data['export_cell_name'] : null;
        $this->container['update_zoom'] = isset($data['update_zoom']) ? $data['update_zoom'] : null;
        $this->container['enable_zip64'] = isset($data['enable_zip64']) ? $data['enable_zip64'] : null;
        $this->container['embed_ooxml_as_ole_object'] = isset($data['embed_ooxml_as_ole_object']) ? $data['embed_ooxml_as_ole_object'] : null;
        $this->container['compression_type'] = isset($data['compression_type']) ? $data['compression_type'] : null;
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
        if ($this->container['export_cell_name'] === null) {
            $invalidProperties[] = "'export_cell_name' can't be null";
        }
        if ($this->container['update_zoom'] === null) {
            $invalidProperties[] = "'update_zoom' can't be null";
        }
        if ($this->container['enable_zip64'] === null) {
            $invalidProperties[] = "'enable_zip64' can't be null";
        }
        if ($this->container['embed_ooxml_as_ole_object'] === null) {
            $invalidProperties[] = "'embed_ooxml_as_ole_object' can't be null";
        }
        if ($this->container['compression_type'] === null) {
            $invalidProperties[] = "'compression_type' can't be null";
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
        if ($this->container['export_cell_name'] === null) {
                    return false;
                }
        if ($this->container['update_zoom'] === null) {
                    return false;
                }
        if ($this->container['enable_zip64'] === null) {
                    return false;
                }
        if ($this->container['embed_ooxml_as_ole_object'] === null) {
                    return false;
                }
        if ($this->container['compression_type'] === null) {
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
     * Gets export_cell_name
     *
     * @return bool
     */
    public function getExportCellName()
    {
        return $this->container['export_cell_name'];
    }

    /**
     * Sets export_cell_name
     *
     *  Indicates if export cell name to Excel2007 .xlsx (.xlsm, .xltx, .xltm) file.               If the output file may be accessed by SQL Server DTS, this value must be               true.  Setting the value to false will highly increase the performance and               reduce the file size when creating large file.  Default value is false.
     *
     * @return $this
     */
    public function setExportCellName($export_cell_name)
    {
        $this->container['export_cell_name'] = $export_cell_name;

        return $this;
    }
   /**
     * Gets update_zoom
     *
     * @return bool
     */
    public function getUpdateZoom()
    {
        return $this->container['update_zoom'];
    }

    /**
     * Sets update_zoom
     *
     *  Indicates whether update scaling factor before saving the file if the PageSetup.FitToPagesWide and PageSetup.FitToPagesTall properties control how the worksheet is scaled.
     *
     * @return $this
     */
    public function setUpdateZoom($update_zoom)
    {
        $this->container['update_zoom'] = $update_zoom;

        return $this;
    }
   /**
     * Gets enable_zip64
     *
     * @return bool
     */
    public function getEnableZip64()
    {
        return $this->container['enable_zip64'];
    }

    /**
     * Sets enable_zip64
     *
     *  Always use ZIP64 extensions when writing zip archives, even when unnecessary.
     *
     * @return $this
     */
    public function setEnableZip64($enable_zip64)
    {
        $this->container['enable_zip64'] = $enable_zip64;

        return $this;
    }
   /**
     * Gets embed_ooxml_as_ole_object
     *
     * @return bool
     */
    public function getEmbedOoxmlAsOleObject()
    {
        return $this->container['embed_ooxml_as_ole_object'];
    }

    /**
     * Sets embed_ooxml_as_ole_object
     *
     *  Indicates whether embedding Ooxml files of OleObject as ole object.
     *
     * @return $this
     */
    public function setEmbedOoxmlAsOleObject($embed_ooxml_as_ole_object)
    {
        $this->container['embed_ooxml_as_ole_object'] = $embed_ooxml_as_ole_object;

        return $this;
    }
   /**
     * Gets compression_type
     *
     * @return string
     */
    public function getCompressionType()
    {
        return $this->container['compression_type'];
    }

    /**
     * Sets compression_type
     *
     *  Gets and sets the compression type for ooxml file.
     *
     * @return $this
     */
    public function setCompressionType($compression_type)
    {
        $this->container['compression_type'] = $compression_type;

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
