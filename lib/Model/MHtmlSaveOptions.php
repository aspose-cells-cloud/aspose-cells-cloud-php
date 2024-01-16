<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MHtmlSaveOptions.cs">
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

use \ArrayAccess;
use \Aspose\Cells\Cloud\ObjectSerializer;

class MHtmlSaveOptions implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MHtmlSaveOptions';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attached_files_directory' => 'string',
        'attached_files_url_prefix' => 'string',
        'encoding' => 'string',
        'export_active_worksheet_only' => 'bool',
        'export_chart_image_format' => 'string',
        'export_images_as_base64' => 'bool',
        'hidden_col_display_type' => 'string',
        'hidden_row_display_type' => 'string',
        'html_cross_string_type' => 'string',
        'is_exp_image_to_temp_dir' => 'bool',
        'page_title' => 'string',
        'parse_html_tag_in_cell' => 'bool',
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
        'attached_files_directory' => null  ,
        'attached_files_url_prefix' => null  ,
        'encoding' => null  ,
        'export_active_worksheet_only' => null  ,
        'export_chart_image_format' => null  ,
        'export_images_as_base64' => null  ,
        'hidden_col_display_type' => null  ,
        'hidden_row_display_type' => null  ,
        'html_cross_string_type' => null  ,
        'is_exp_image_to_temp_dir' => null  ,
        'page_title' => null  ,
        'parse_html_tag_in_cell' => null  ,
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
         'attached_files_directory' => 'AttachedFilesDirectory' ,
         'attached_files_url_prefix' => 'AttachedFilesUrlPrefix' ,
         'encoding' => 'Encoding' ,
         'export_active_worksheet_only' => 'ExportActiveWorksheetOnly' ,
         'export_chart_image_format' => 'ExportChartImageFormat' ,
         'export_images_as_base64' => 'ExportImagesAsBase64' ,
         'hidden_col_display_type' => 'HiddenColDisplayType' ,
         'hidden_row_display_type' => 'HiddenRowDisplayType' ,
         'html_cross_string_type' => 'HtmlCrossStringType' ,
         'is_exp_image_to_temp_dir' => 'IsExpImageToTempDir' ,
         'page_title' => 'PageTitle' ,
         'parse_html_tag_in_cell' => 'ParseHtmlTagInCell' ,
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
        'attached_files_directory' => 'setAttachedFilesDirectory' ,
        'attached_files_url_prefix' => 'setAttachedFilesUrlPrefix' ,
        'encoding' => 'setEncoding' ,
        'export_active_worksheet_only' => 'setExportActiveWorksheetOnly' ,
        'export_chart_image_format' => 'setExportChartImageFormat' ,
        'export_images_as_base64' => 'setExportImagesAsBase64' ,
        'hidden_col_display_type' => 'setHiddenColDisplayType' ,
        'hidden_row_display_type' => 'setHiddenRowDisplayType' ,
        'html_cross_string_type' => 'setHtmlCrossStringType' ,
        'is_exp_image_to_temp_dir' => 'setIsExpImageToTempDir' ,
        'page_title' => 'setPageTitle' ,
        'parse_html_tag_in_cell' => 'setParseHtmlTagInCell' ,
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
        'attached_files_directory' => 'getAttachedFilesDirectory' ,
        'attached_files_url_prefix' => 'getAttachedFilesUrlPrefix' ,
        'encoding' => 'getEncoding' ,
        'export_active_worksheet_only' => 'getExportActiveWorksheetOnly' ,
        'export_chart_image_format' => 'getExportChartImageFormat' ,
        'export_images_as_base64' => 'getExportImagesAsBase64' ,
        'hidden_col_display_type' => 'getHiddenColDisplayType' ,
        'hidden_row_display_type' => 'getHiddenRowDisplayType' ,
        'html_cross_string_type' => 'getHtmlCrossStringType' ,
        'is_exp_image_to_temp_dir' => 'getIsExpImageToTempDir' ,
        'page_title' => 'getPageTitle' ,
        'parse_html_tag_in_cell' => 'getParseHtmlTagInCell' ,
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
        $this->container['attached_files_directory'] = isset($data['attached_files_directory']) ? $data['attached_files_directory'] : null;
        $this->container['attached_files_url_prefix'] = isset($data['attached_files_url_prefix']) ? $data['attached_files_url_prefix'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
        $this->container['export_active_worksheet_only'] = isset($data['export_active_worksheet_only']) ? $data['export_active_worksheet_only'] : null;
        $this->container['export_chart_image_format'] = isset($data['export_chart_image_format']) ? $data['export_chart_image_format'] : null;
        $this->container['export_images_as_base64'] = isset($data['export_images_as_base64']) ? $data['export_images_as_base64'] : null;
        $this->container['hidden_col_display_type'] = isset($data['hidden_col_display_type']) ? $data['hidden_col_display_type'] : null;
        $this->container['hidden_row_display_type'] = isset($data['hidden_row_display_type']) ? $data['hidden_row_display_type'] : null;
        $this->container['html_cross_string_type'] = isset($data['html_cross_string_type']) ? $data['html_cross_string_type'] : null;
        $this->container['is_exp_image_to_temp_dir'] = isset($data['is_exp_image_to_temp_dir']) ? $data['is_exp_image_to_temp_dir'] : null;
        $this->container['page_title'] = isset($data['page_title']) ? $data['page_title'] : null;
        $this->container['parse_html_tag_in_cell'] = isset($data['parse_html_tag_in_cell']) ? $data['parse_html_tag_in_cell'] : null;
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
        if ($this->container['attached_files_directory'] === null) {
            $invalidProperties[] = "'attached_files_directory' can't be null";
        }
        if ($this->container['attached_files_url_prefix'] === null) {
            $invalidProperties[] = "'attached_files_url_prefix' can't be null";
        }
        if ($this->container['encoding'] === null) {
            $invalidProperties[] = "'encoding' can't be null";
        }
        if ($this->container['export_active_worksheet_only'] === null) {
            $invalidProperties[] = "'export_active_worksheet_only' can't be null";
        }
        if ($this->container['export_chart_image_format'] === null) {
            $invalidProperties[] = "'export_chart_image_format' can't be null";
        }
        if ($this->container['export_images_as_base64'] === null) {
            $invalidProperties[] = "'export_images_as_base64' can't be null";
        }
        if ($this->container['hidden_col_display_type'] === null) {
            $invalidProperties[] = "'hidden_col_display_type' can't be null";
        }
        if ($this->container['hidden_row_display_type'] === null) {
            $invalidProperties[] = "'hidden_row_display_type' can't be null";
        }
        if ($this->container['html_cross_string_type'] === null) {
            $invalidProperties[] = "'html_cross_string_type' can't be null";
        }
        if ($this->container['is_exp_image_to_temp_dir'] === null) {
            $invalidProperties[] = "'is_exp_image_to_temp_dir' can't be null";
        }
        if ($this->container['page_title'] === null) {
            $invalidProperties[] = "'page_title' can't be null";
        }
        if ($this->container['parse_html_tag_in_cell'] === null) {
            $invalidProperties[] = "'parse_html_tag_in_cell' can't be null";
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
        if ($this->container['attached_files_directory'] === null) {
                    return false;
                }
        if ($this->container['attached_files_url_prefix'] === null) {
                    return false;
                }
        if ($this->container['encoding'] === null) {
                    return false;
                }
        if ($this->container['export_active_worksheet_only'] === null) {
                    return false;
                }
        if ($this->container['export_chart_image_format'] === null) {
                    return false;
                }
        if ($this->container['export_images_as_base64'] === null) {
                    return false;
                }
        if ($this->container['hidden_col_display_type'] === null) {
                    return false;
                }
        if ($this->container['hidden_row_display_type'] === null) {
                    return false;
                }
        if ($this->container['html_cross_string_type'] === null) {
                    return false;
                }
        if ($this->container['is_exp_image_to_temp_dir'] === null) {
                    return false;
                }
        if ($this->container['page_title'] === null) {
                    return false;
                }
        if ($this->container['parse_html_tag_in_cell'] === null) {
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
     * Gets attached_files_directory
     *
     * @return string
     */
    public function getAttachedFilesDirectory()
    {
        return $this->container['attached_files_directory'];
    }

    /**
     * Sets attached_files_directory
     *
     *  The directory that the attached files will be saved to.  Only for saving to html stream.
     *
     * @return $this
     */
    public function setAttachedFilesDirectory($attached_files_directory)
    {
        $this->container['attached_files_directory'] = $attached_files_directory;

        return $this;
    }
   /**
     * Gets attached_files_url_prefix
     *
     * @return string
     */
    public function getAttachedFilesUrlPrefix()
    {
        return $this->container['attached_files_url_prefix'];
    }

    /**
     * Sets attached_files_url_prefix
     *
     *  Specify the Url prefix of attached files such as image in the html file. Only for saving to html stream.
     *
     * @return $this
     */
    public function setAttachedFilesUrlPrefix($attached_files_url_prefix)
    {
        $this->container['attached_files_url_prefix'] = $attached_files_url_prefix;

        return $this;
    }
   /**
     * Gets encoding
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
     * Sets encoding
     *
     *  If not set,use Encoding.UTF8 as default enconding type.
     *
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;

        return $this;
    }
   /**
     * Gets export_active_worksheet_only
     *
     * @return bool
     */
    public function getExportActiveWorksheetOnly()
    {
        return $this->container['export_active_worksheet_only'];
    }

    /**
     * Sets export_active_worksheet_only
     *
     *  Indicates if exporting the whole workbook to html file.
     *
     * @return $this
     */
    public function setExportActiveWorksheetOnly($export_active_worksheet_only)
    {
        $this->container['export_active_worksheet_only'] = $export_active_worksheet_only;

        return $this;
    }
   /**
     * Gets export_chart_image_format
     *
     * @return string
     */
    public function getExportChartImageFormat()
    {
        return $this->container['export_chart_image_format'];
    }

    /**
     * Sets export_chart_image_format
     *
     *  Get or set the format of chart image before exporting
     *
     * @return $this
     */
    public function setExportChartImageFormat($export_chart_image_format)
    {
        $this->container['export_chart_image_format'] = $export_chart_image_format;

        return $this;
    }
   /**
     * Gets export_images_as_base64
     *
     * @return bool
     */
    public function getExportImagesAsBase64()
    {
        return $this->container['export_images_as_base64'];
    }

    /**
     * Sets export_images_as_base64
     *
     *  Specifies whether images are saved in Base64 format to HTML, MHTML or EPUB.
     *
     * @return $this
     */
    public function setExportImagesAsBase64($export_images_as_base64)
    {
        $this->container['export_images_as_base64'] = $export_images_as_base64;

        return $this;
    }
   /**
     * Gets hidden_col_display_type
     *
     * @return string
     */
    public function getHiddenColDisplayType()
    {
        return $this->container['hidden_col_display_type'];
    }

    /**
     * Sets hidden_col_display_type
     *
     *  Hidden column(the width of this column is 0) in excel,before save this into                html format, if HtmlHiddenColDisplayType is "Remove",the hidden column would               ont been output, if the value is "Hidden", the column would been output,but was hidden,the default value is "Hidden"
     *
     * @return $this
     */
    public function setHiddenColDisplayType($hidden_col_display_type)
    {
        $this->container['hidden_col_display_type'] = $hidden_col_display_type;

        return $this;
    }
   /**
     * Gets hidden_row_display_type
     *
     * @return string
     */
    public function getHiddenRowDisplayType()
    {
        return $this->container['hidden_row_display_type'];
    }

    /**
     * Sets hidden_row_display_type
     *
     *  Hidden row(the height of this row is 0) in excel,before save this into html                format, if HtmlHiddenRowDisplayType is "Remove",the hidden row would ont               been output, if the value is "Hidden", the row would been output,but was               hidden,the default value is "Hidden"
     *
     * @return $this
     */
    public function setHiddenRowDisplayType($hidden_row_display_type)
    {
        $this->container['hidden_row_display_type'] = $hidden_row_display_type;

        return $this;
    }
   /**
     * Gets html_cross_string_type
     *
     * @return string
     */
    public function getHtmlCrossStringType()
    {
        return $this->container['html_cross_string_type'];
    }

    /**
     * Sets html_cross_string_type
     *
     *  Indicates if a cross-cell string will be displayed in the same way as MS               Excel when saving an Excel file in html format.  By default the value is               Default, so, for cross-cell strings, there is little difference between the               html files created by Aspose.Cells and MS Excel. But the performance for               creating large html files,setting the value to Cross would be several times               faster than setting it to Default or Fit2Cell.
     *
     * @return $this
     */
    public function setHtmlCrossStringType($html_cross_string_type)
    {
        $this->container['html_cross_string_type'] = $html_cross_string_type;

        return $this;
    }
   /**
     * Gets is_exp_image_to_temp_dir
     *
     * @return bool
     */
    public function getIsExpImageToTempDir()
    {
        return $this->container['is_exp_image_to_temp_dir'];
    }

    /**
     * Sets is_exp_image_to_temp_dir
     *
     *  Indicates if export image files to temp directory.  Only for saving to html  stream.
     *
     * @return $this
     */
    public function setIsExpImageToTempDir($is_exp_image_to_temp_dir)
    {
        $this->container['is_exp_image_to_temp_dir'] = $is_exp_image_to_temp_dir;

        return $this;
    }
   /**
     * Gets page_title
     *
     * @return string
     */
    public function getPageTitle()
    {
        return $this->container['page_title'];
    }

    /**
     * Sets page_title
     *
     *  The title of the html page.  Only for saving to html stream.
     *
     * @return $this
     */
    public function setPageTitle($page_title)
    {
        $this->container['page_title'] = $page_title;

        return $this;
    }
   /**
     * Gets parse_html_tag_in_cell
     *
     * @return bool
     */
    public function getParseHtmlTagInCell()
    {
        return $this->container['parse_html_tag_in_cell'];
    }

    /**
     * Sets parse_html_tag_in_cell
     *
     *  Parse html tag in cell,like ,as cell value,or as html tag,default is true
     *
     * @return $this
     */
    public function setParseHtmlTagInCell($parse_html_tag_in_cell)
    {
        $this->container['parse_html_tag_in_cell'] = $parse_html_tag_in_cell;

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
