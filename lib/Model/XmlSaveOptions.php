<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="XmlSaveOptions.cs">
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

class XmlSaveOptions
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'XmlSaveOptions';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sheet_indexes' => 'int[]',
        'export_area' => '\Aspose\Cells\Cloud\Model\CellArea',
        'has_header_row' => 'bool',
        'xml_map_name' => 'string',
        'sheet_name_as_element_name' => 'bool',
        'data_as_attribute' => 'bool',
        'save_format' => 'string',
        'cached_file_folder' => 'string',
        'clear_data' => 'bool',
        'create_directory' => 'bool',
        'enable_http_compression' => 'bool',
        'refresh_chart_cache' => 'bool',
        'sort_names' => 'bool',
        'validate_merged_areas' => 'bool',
        'merge_areas' => 'bool',
        'sort_external_names' => 'bool',
        'check_excel_restriction' => 'bool',
        'update_smart_art' => 'bool',
        'encrypt_document_properties' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sheet_indexes' => null  ,
        'export_area' => null  ,
        'has_header_row' => null  ,
        'xml_map_name' => null  ,
        'sheet_name_as_element_name' => null  ,
        'data_as_attribute' => null  ,
        'save_format' => null  ,
        'cached_file_folder' => null  ,
        'clear_data' => null  ,
        'create_directory' => null  ,
        'enable_http_compression' => null  ,
        'refresh_chart_cache' => null  ,
        'sort_names' => null  ,
        'validate_merged_areas' => null  ,
        'merge_areas' => null  ,
        'sort_external_names' => null  ,
        'check_excel_restriction' => null  ,
        'update_smart_art' => null  ,
        'encrypt_document_properties' => null  
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
         'sheet_indexes' => 'SheetIndexes' ,
         'export_area' => 'ExportArea' ,
         'has_header_row' => 'HasHeaderRow' ,
         'xml_map_name' => 'XmlMapName' ,
         'sheet_name_as_element_name' => 'SheetNameAsElementName' ,
         'data_as_attribute' => 'DataAsAttribute' ,
         'save_format' => 'SaveFormat' ,
         'cached_file_folder' => 'CachedFileFolder' ,
         'clear_data' => 'ClearData' ,
         'create_directory' => 'CreateDirectory' ,
         'enable_http_compression' => 'EnableHTTPCompression' ,
         'refresh_chart_cache' => 'RefreshChartCache' ,
         'sort_names' => 'SortNames' ,
         'validate_merged_areas' => 'ValidateMergedAreas' ,
         'merge_areas' => 'MergeAreas' ,
         'sort_external_names' => 'SortExternalNames' ,
         'check_excel_restriction' => 'CheckExcelRestriction' ,
         'update_smart_art' => 'UpdateSmartArt' ,
         'encrypt_document_properties' => 'EncryptDocumentProperties' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sheet_indexes' => 'setSheetIndexes' ,
        'export_area' => 'setExportArea' ,
        'has_header_row' => 'setHasHeaderRow' ,
        'xml_map_name' => 'setXmlMapName' ,
        'sheet_name_as_element_name' => 'setSheetNameAsElementName' ,
        'data_as_attribute' => 'setDataAsAttribute' ,
        'save_format' => 'setSaveFormat' ,
        'cached_file_folder' => 'setCachedFileFolder' ,
        'clear_data' => 'setClearData' ,
        'create_directory' => 'setCreateDirectory' ,
        'enable_http_compression' => 'setEnableHTTPCompression' ,
        'refresh_chart_cache' => 'setRefreshChartCache' ,
        'sort_names' => 'setSortNames' ,
        'validate_merged_areas' => 'setValidateMergedAreas' ,
        'merge_areas' => 'setMergeAreas' ,
        'sort_external_names' => 'setSortExternalNames' ,
        'check_excel_restriction' => 'setCheckExcelRestriction' ,
        'update_smart_art' => 'setUpdateSmartArt' ,
        'encrypt_document_properties' => 'setEncryptDocumentProperties' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sheet_indexes' => 'getSheetIndexes' ,
        'export_area' => 'getExportArea' ,
        'has_header_row' => 'getHasHeaderRow' ,
        'xml_map_name' => 'getXmlMapName' ,
        'sheet_name_as_element_name' => 'getSheetNameAsElementName' ,
        'data_as_attribute' => 'getDataAsAttribute' ,
        'save_format' => 'getSaveFormat' ,
        'cached_file_folder' => 'getCachedFileFolder' ,
        'clear_data' => 'getClearData' ,
        'create_directory' => 'getCreateDirectory' ,
        'enable_http_compression' => 'getEnableHTTPCompression' ,
        'refresh_chart_cache' => 'getRefreshChartCache' ,
        'sort_names' => 'getSortNames' ,
        'validate_merged_areas' => 'getValidateMergedAreas' ,
        'merge_areas' => 'getMergeAreas' ,
        'sort_external_names' => 'getSortExternalNames' ,
        'check_excel_restriction' => 'getCheckExcelRestriction' ,
        'update_smart_art' => 'getUpdateSmartArt' ,
        'encrypt_document_properties' => 'getEncryptDocumentProperties' 
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
        $this->container['sheet_indexes'] = isset($data['sheet_indexes']) ? $data['sheet_indexes'] : null;
        $this->container['export_area'] = isset($data['export_area']) ? $data['export_area'] : null;
        $this->container['has_header_row'] = isset($data['has_header_row']) ? $data['has_header_row'] : null;
        $this->container['xml_map_name'] = isset($data['xml_map_name']) ? $data['xml_map_name'] : null;
        $this->container['sheet_name_as_element_name'] = isset($data['sheet_name_as_element_name']) ? $data['sheet_name_as_element_name'] : null;
        $this->container['data_as_attribute'] = isset($data['data_as_attribute']) ? $data['data_as_attribute'] : null;
        $this->container['save_format'] = isset($data['save_format']) ? $data['save_format'] : null;
        $this->container['cached_file_folder'] = isset($data['cached_file_folder']) ? $data['cached_file_folder'] : null;
        $this->container['clear_data'] = isset($data['clear_data']) ? $data['clear_data'] : null;
        $this->container['create_directory'] = isset($data['create_directory']) ? $data['create_directory'] : null;
        $this->container['enable_http_compression'] = isset($data['enable_http_compression']) ? $data['enable_http_compression'] : null;
        $this->container['refresh_chart_cache'] = isset($data['refresh_chart_cache']) ? $data['refresh_chart_cache'] : null;
        $this->container['sort_names'] = isset($data['sort_names']) ? $data['sort_names'] : null;
        $this->container['validate_merged_areas'] = isset($data['validate_merged_areas']) ? $data['validate_merged_areas'] : null;
        $this->container['merge_areas'] = isset($data['merge_areas']) ? $data['merge_areas'] : null;
        $this->container['sort_external_names'] = isset($data['sort_external_names']) ? $data['sort_external_names'] : null;
        $this->container['check_excel_restriction'] = isset($data['check_excel_restriction']) ? $data['check_excel_restriction'] : null;
        $this->container['update_smart_art'] = isset($data['update_smart_art']) ? $data['update_smart_art'] : null;
        $this->container['encrypt_document_properties'] = isset($data['encrypt_document_properties']) ? $data['encrypt_document_properties'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sheet_indexes'] === null) {
            $invalidProperties[] = "'sheet_indexes' can't be null";
        }
        if ($this->container['export_area'] === null) {
            $invalidProperties[] = "'export_area' can't be null";
        }
        if ($this->container['has_header_row'] === null) {
            $invalidProperties[] = "'has_header_row' can't be null";
        }
        if ($this->container['xml_map_name'] === null) {
            $invalidProperties[] = "'xml_map_name' can't be null";
        }
        if ($this->container['sheet_name_as_element_name'] === null) {
            $invalidProperties[] = "'sheet_name_as_element_name' can't be null";
        }
        if ($this->container['data_as_attribute'] === null) {
            $invalidProperties[] = "'data_as_attribute' can't be null";
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
        if ($this->container['merge_areas'] === null) {
            $invalidProperties[] = "'merge_areas' can't be null";
        }
        if ($this->container['sort_external_names'] === null) {
            $invalidProperties[] = "'sort_external_names' can't be null";
        }
        if ($this->container['check_excel_restriction'] === null) {
            $invalidProperties[] = "'check_excel_restriction' can't be null";
        }
        if ($this->container['update_smart_art'] === null) {
            $invalidProperties[] = "'update_smart_art' can't be null";
        }
        if ($this->container['encrypt_document_properties'] === null) {
            $invalidProperties[] = "'encrypt_document_properties' can't be null";
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
        if ($this->container['sheet_indexes'] === null) {
                    return false;
                }
        if ($this->container['export_area'] === null) {
                    return false;
                }
        if ($this->container['has_header_row'] === null) {
                    return false;
                }
        if ($this->container['xml_map_name'] === null) {
                    return false;
                }
        if ($this->container['sheet_name_as_element_name'] === null) {
                    return false;
                }
        if ($this->container['data_as_attribute'] === null) {
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
        if ($this->container['merge_areas'] === null) {
                    return false;
                }
        if ($this->container['sort_external_names'] === null) {
                    return false;
                }
        if ($this->container['check_excel_restriction'] === null) {
                    return false;
                }
        if ($this->container['update_smart_art'] === null) {
                    return false;
                }
        if ($this->container['encrypt_document_properties'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets sheet_indexes
     *
     * @return int[]
     */
    public function getSheetIndexes()
    {
        return $this->container['sheet_indexes'];
    }

    /**
     * Sets sheet_indexes
     *
     *  Represents the indexes of exported sheets.
     *
     * @return $this
     */
    public function setSheetIndexes($sheet_indexes)
    {
        $this->container['sheet_indexes'] = $sheet_indexes;

        return $this;
    }
   /**
     * Gets export_area
     *
     * @return \Aspose\Cells\Cloud\Model\CellArea
     */
    public function getExportArea()
    {
        return $this->container['export_area'];
    }

    /**
     * Sets export_area
     *
     *  Gets or sets the exporting range.
     *
     * @return $this
     */
    public function setExportArea($export_area)
    {
        $this->container['export_area'] = $export_area;

        return $this;
    }
   /**
     * Gets has_header_row
     *
     * @return bool
     */
    public function getHasHeaderRow()
    {
        return $this->container['has_header_row'];
    }

    /**
     * Sets has_header_row
     *
     *  Indicates whether the range contains header row.
     *
     * @return $this
     */
    public function setHasHeaderRow($has_header_row)
    {
        $this->container['has_header_row'] = $has_header_row;

        return $this;
    }
   /**
     * Gets xml_map_name
     *
     * @return string
     */
    public function getXmlMapName()
    {
        return $this->container['xml_map_name'];
    }

    /**
     * Sets xml_map_name
     *
     *  Indicates whether exporting xml map in the file.
     *
     * @return $this
     */
    public function setXmlMapName($xml_map_name)
    {
        $this->container['xml_map_name'] = $xml_map_name;

        return $this;
    }
   /**
     * Gets sheet_name_as_element_name
     *
     * @return bool
     */
    public function getSheetNameAsElementName()
    {
        return $this->container['sheet_name_as_element_name'];
    }

    /**
     * Sets sheet_name_as_element_name
     *
     *  Indicates whether exporting sheet's name as the name of the element.
     *
     * @return $this
     */
    public function setSheetNameAsElementName($sheet_name_as_element_name)
    {
        $this->container['sheet_name_as_element_name'] = $sheet_name_as_element_name;

        return $this;
    }
   /**
     * Gets data_as_attribute
     *
     * @return bool
     */
    public function getDataAsAttribute()
    {
        return $this->container['data_as_attribute'];
    }

    /**
     * Sets data_as_attribute
     *
     *  Indicates whether exporting data as attributes of element.
     *
     * @return $this
     */
    public function setDataAsAttribute($data_as_attribute)
    {
        $this->container['data_as_attribute'] = $data_as_attribute;

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
     * Gets merge_areas
     *
     * @return bool
     */
    public function getMergeAreas()
    {
        return $this->container['merge_areas'];
    }

    /**
     * Sets merge_areas
     *
     *  
     *
     * @return $this
     */
    public function setMergeAreas($merge_areas)
    {
        $this->container['merge_areas'] = $merge_areas;

        return $this;
    }
   /**
     * Gets sort_external_names
     *
     * @return bool
     */
    public function getSortExternalNames()
    {
        return $this->container['sort_external_names'];
    }

    /**
     * Sets sort_external_names
     *
     *  
     *
     * @return $this
     */
    public function setSortExternalNames($sort_external_names)
    {
        $this->container['sort_external_names'] = $sort_external_names;

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
     *  
     *
     * @return $this
     */
    public function setCheckExcelRestriction($check_excel_restriction)
    {
        $this->container['check_excel_restriction'] = $check_excel_restriction;

        return $this;
    }
   /**
     * Gets update_smart_art
     *
     * @return bool
     */
    public function getUpdateSmartArt()
    {
        return $this->container['update_smart_art'];
    }

    /**
     * Sets update_smart_art
     *
     *  
     *
     * @return $this
     */
    public function setUpdateSmartArt($update_smart_art)
    {
        $this->container['update_smart_art'] = $update_smart_art;

        return $this;
    }
   /**
     * Gets encrypt_document_properties
     *
     * @return bool
     */
    public function getEncryptDocumentProperties()
    {
        return $this->container['encrypt_document_properties'];
    }

    /**
     * Sets encrypt_document_properties
     *
     *  
     *
     * @return $this
     */
    public function setEncryptDocumentProperties($encrypt_document_properties)
    {
        $this->container['encrypt_document_properties'] = $encrypt_document_properties;

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
