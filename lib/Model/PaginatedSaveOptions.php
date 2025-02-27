<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PaginatedSaveOptions.cs">
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

class PaginatedSaveOptions
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaginatedSaveOptions';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'default_font' => 'string',
        'check_workbook_default_font' => 'bool',
        'check_font_compatibility' => 'bool',
        'is_font_substitution_char_granularity' => 'bool',
        'one_page_per_sheet' => 'bool',
        'all_columns_in_one_page_per_sheet' => 'bool',
        'ignore_error' => 'bool',
        'output_blank_page_when_nothing_to_print' => 'bool',
        'page_index' => 'int',
        'page_count' => 'int',
        'printing_page_type' => 'string',
        'gridline_type' => 'string',
        'text_cross_type' => 'string',
        'default_edit_language' => 'string',
        'emf_render_setting' => 'string',
        'merge_areas' => 'bool',
        'sort_external_names' => 'bool',
        'update_smart_art' => 'bool',
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
        'default_font' => null  ,
        'check_workbook_default_font' => null  ,
        'check_font_compatibility' => null  ,
        'is_font_substitution_char_granularity' => null  ,
        'one_page_per_sheet' => null  ,
        'all_columns_in_one_page_per_sheet' => null  ,
        'ignore_error' => null  ,
        'output_blank_page_when_nothing_to_print' => null  ,
        'page_index' => null  ,
        'page_count' => null  ,
        'printing_page_type' => null  ,
        'gridline_type' => null  ,
        'text_cross_type' => null  ,
        'default_edit_language' => null  ,
        'emf_render_setting' => null  ,
        'merge_areas' => null  ,
        'sort_external_names' => null  ,
        'update_smart_art' => null  ,
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
         'default_font' => 'DefaultFont' ,
         'check_workbook_default_font' => 'CheckWorkbookDefaultFont' ,
         'check_font_compatibility' => 'CheckFontCompatibility' ,
         'is_font_substitution_char_granularity' => 'IsFontSubstitutionCharGranularity' ,
         'one_page_per_sheet' => 'OnePagePerSheet' ,
         'all_columns_in_one_page_per_sheet' => 'AllColumnsInOnePagePerSheet' ,
         'ignore_error' => 'IgnoreError' ,
         'output_blank_page_when_nothing_to_print' => 'OutputBlankPageWhenNothingToPrint' ,
         'page_index' => 'PageIndex' ,
         'page_count' => 'PageCount' ,
         'printing_page_type' => 'PrintingPageType' ,
         'gridline_type' => 'GridlineType' ,
         'text_cross_type' => 'TextCrossType' ,
         'default_edit_language' => 'DefaultEditLanguage' ,
         'emf_render_setting' => 'EmfRenderSetting' ,
         'merge_areas' => 'MergeAreas' ,
         'sort_external_names' => 'SortExternalNames' ,
         'update_smart_art' => 'UpdateSmartArt' ,
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
        'default_font' => 'setDefaultFont' ,
        'check_workbook_default_font' => 'setCheckWorkbookDefaultFont' ,
        'check_font_compatibility' => 'setCheckFontCompatibility' ,
        'is_font_substitution_char_granularity' => 'setIsFontSubstitutionCharGranularity' ,
        'one_page_per_sheet' => 'setOnePagePerSheet' ,
        'all_columns_in_one_page_per_sheet' => 'setAllColumnsInOnePagePerSheet' ,
        'ignore_error' => 'setIgnoreError' ,
        'output_blank_page_when_nothing_to_print' => 'setOutputBlankPageWhenNothingToPrint' ,
        'page_index' => 'setPageIndex' ,
        'page_count' => 'setPageCount' ,
        'printing_page_type' => 'setPrintingPageType' ,
        'gridline_type' => 'setGridlineType' ,
        'text_cross_type' => 'setTextCrossType' ,
        'default_edit_language' => 'setDefaultEditLanguage' ,
        'emf_render_setting' => 'setEmfRenderSetting' ,
        'merge_areas' => 'setMergeAreas' ,
        'sort_external_names' => 'setSortExternalNames' ,
        'update_smart_art' => 'setUpdateSmartArt' ,
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
        'default_font' => 'getDefaultFont' ,
        'check_workbook_default_font' => 'getCheckWorkbookDefaultFont' ,
        'check_font_compatibility' => 'getCheckFontCompatibility' ,
        'is_font_substitution_char_granularity' => 'getIsFontSubstitutionCharGranularity' ,
        'one_page_per_sheet' => 'getOnePagePerSheet' ,
        'all_columns_in_one_page_per_sheet' => 'getAllColumnsInOnePagePerSheet' ,
        'ignore_error' => 'getIgnoreError' ,
        'output_blank_page_when_nothing_to_print' => 'getOutputBlankPageWhenNothingToPrint' ,
        'page_index' => 'getPageIndex' ,
        'page_count' => 'getPageCount' ,
        'printing_page_type' => 'getPrintingPageType' ,
        'gridline_type' => 'getGridlineType' ,
        'text_cross_type' => 'getTextCrossType' ,
        'default_edit_language' => 'getDefaultEditLanguage' ,
        'emf_render_setting' => 'getEmfRenderSetting' ,
        'merge_areas' => 'getMergeAreas' ,
        'sort_external_names' => 'getSortExternalNames' ,
        'update_smart_art' => 'getUpdateSmartArt' ,
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
        $this->container['default_font'] = isset($data['default_font']) ? $data['default_font'] : null;
        $this->container['check_workbook_default_font'] = isset($data['check_workbook_default_font']) ? $data['check_workbook_default_font'] : null;
        $this->container['check_font_compatibility'] = isset($data['check_font_compatibility']) ? $data['check_font_compatibility'] : null;
        $this->container['is_font_substitution_char_granularity'] = isset($data['is_font_substitution_char_granularity']) ? $data['is_font_substitution_char_granularity'] : null;
        $this->container['one_page_per_sheet'] = isset($data['one_page_per_sheet']) ? $data['one_page_per_sheet'] : null;
        $this->container['all_columns_in_one_page_per_sheet'] = isset($data['all_columns_in_one_page_per_sheet']) ? $data['all_columns_in_one_page_per_sheet'] : null;
        $this->container['ignore_error'] = isset($data['ignore_error']) ? $data['ignore_error'] : null;
        $this->container['output_blank_page_when_nothing_to_print'] = isset($data['output_blank_page_when_nothing_to_print']) ? $data['output_blank_page_when_nothing_to_print'] : null;
        $this->container['page_index'] = isset($data['page_index']) ? $data['page_index'] : null;
        $this->container['page_count'] = isset($data['page_count']) ? $data['page_count'] : null;
        $this->container['printing_page_type'] = isset($data['printing_page_type']) ? $data['printing_page_type'] : null;
        $this->container['gridline_type'] = isset($data['gridline_type']) ? $data['gridline_type'] : null;
        $this->container['text_cross_type'] = isset($data['text_cross_type']) ? $data['text_cross_type'] : null;
        $this->container['default_edit_language'] = isset($data['default_edit_language']) ? $data['default_edit_language'] : null;
        $this->container['emf_render_setting'] = isset($data['emf_render_setting']) ? $data['emf_render_setting'] : null;
        $this->container['merge_areas'] = isset($data['merge_areas']) ? $data['merge_areas'] : null;
        $this->container['sort_external_names'] = isset($data['sort_external_names']) ? $data['sort_external_names'] : null;
        $this->container['update_smart_art'] = isset($data['update_smart_art']) ? $data['update_smart_art'] : null;
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
        if ($this->container['default_font'] === null) {
            $invalidProperties[] = "'default_font' can't be null";
        }
        if ($this->container['check_workbook_default_font'] === null) {
            $invalidProperties[] = "'check_workbook_default_font' can't be null";
        }
        if ($this->container['check_font_compatibility'] === null) {
            $invalidProperties[] = "'check_font_compatibility' can't be null";
        }
        if ($this->container['is_font_substitution_char_granularity'] === null) {
            $invalidProperties[] = "'is_font_substitution_char_granularity' can't be null";
        }
        if ($this->container['one_page_per_sheet'] === null) {
            $invalidProperties[] = "'one_page_per_sheet' can't be null";
        }
        if ($this->container['all_columns_in_one_page_per_sheet'] === null) {
            $invalidProperties[] = "'all_columns_in_one_page_per_sheet' can't be null";
        }
        if ($this->container['ignore_error'] === null) {
            $invalidProperties[] = "'ignore_error' can't be null";
        }
        if ($this->container['output_blank_page_when_nothing_to_print'] === null) {
            $invalidProperties[] = "'output_blank_page_when_nothing_to_print' can't be null";
        }
        if ($this->container['page_index'] === null) {
            $invalidProperties[] = "'page_index' can't be null";
        }
        if ($this->container['page_count'] === null) {
            $invalidProperties[] = "'page_count' can't be null";
        }
        if ($this->container['printing_page_type'] === null) {
            $invalidProperties[] = "'printing_page_type' can't be null";
        }
        if ($this->container['gridline_type'] === null) {
            $invalidProperties[] = "'gridline_type' can't be null";
        }
        if ($this->container['text_cross_type'] === null) {
            $invalidProperties[] = "'text_cross_type' can't be null";
        }
        if ($this->container['default_edit_language'] === null) {
            $invalidProperties[] = "'default_edit_language' can't be null";
        }
        if ($this->container['emf_render_setting'] === null) {
            $invalidProperties[] = "'emf_render_setting' can't be null";
        }
        if ($this->container['merge_areas'] === null) {
            $invalidProperties[] = "'merge_areas' can't be null";
        }
        if ($this->container['sort_external_names'] === null) {
            $invalidProperties[] = "'sort_external_names' can't be null";
        }
        if ($this->container['update_smart_art'] === null) {
            $invalidProperties[] = "'update_smart_art' can't be null";
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
        if ($this->container['default_font'] === null) {
                    return false;
                }
        if ($this->container['check_workbook_default_font'] === null) {
                    return false;
                }
        if ($this->container['check_font_compatibility'] === null) {
                    return false;
                }
        if ($this->container['is_font_substitution_char_granularity'] === null) {
                    return false;
                }
        if ($this->container['one_page_per_sheet'] === null) {
                    return false;
                }
        if ($this->container['all_columns_in_one_page_per_sheet'] === null) {
                    return false;
                }
        if ($this->container['ignore_error'] === null) {
                    return false;
                }
        if ($this->container['output_blank_page_when_nothing_to_print'] === null) {
                    return false;
                }
        if ($this->container['page_index'] === null) {
                    return false;
                }
        if ($this->container['page_count'] === null) {
                    return false;
                }
        if ($this->container['printing_page_type'] === null) {
                    return false;
                }
        if ($this->container['gridline_type'] === null) {
                    return false;
                }
        if ($this->container['text_cross_type'] === null) {
                    return false;
                }
        if ($this->container['default_edit_language'] === null) {
                    return false;
                }
        if ($this->container['emf_render_setting'] === null) {
                    return false;
                }
        if ($this->container['merge_areas'] === null) {
                    return false;
                }
        if ($this->container['sort_external_names'] === null) {
                    return false;
                }
        if ($this->container['update_smart_art'] === null) {
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
     * Gets default_font
     *
     * @return string
     */
    public function getDefaultFont()
    {
        return $this->container['default_font'];
    }

    /**
     * Sets default_font
     *
     *  When characters in the Excel are Unicode and not be set with correct font in cell style,They may appear as block in pdf,image.Set the DefaultFont such as MingLiu or MS Gothic to show these characters. If this property is not set, Aspose.Cells will use system default font to show these unicode characters.
     *
     * @return $this
     */
    public function setDefaultFont($default_font)
    {
        $this->container['default_font'] = $default_font;

        return $this;
    }
   /**
     * Gets check_workbook_default_font
     *
     * @return bool
     */
    public function getCheckWorkbookDefaultFont()
    {
        return $this->container['check_workbook_default_font'];
    }

    /**
     * Sets check_workbook_default_font
     *
     *  When characters in the Excel are Unicode and not be set with correct font in cell style,They may appear as block in pdf,image.Set this to true to try to use workbook's default font to show these characters first.
     *
     * @return $this
     */
    public function setCheckWorkbookDefaultFont($check_workbook_default_font)
    {
        $this->container['check_workbook_default_font'] = $check_workbook_default_font;

        return $this;
    }
   /**
     * Gets check_font_compatibility
     *
     * @return bool
     */
    public function getCheckFontCompatibility()
    {
        return $this->container['check_font_compatibility'];
    }

    /**
     * Sets check_font_compatibility
     *
     *  Indicates whether to check font compatibility for every character in text.
     *
     * @return $this
     */
    public function setCheckFontCompatibility($check_font_compatibility)
    {
        $this->container['check_font_compatibility'] = $check_font_compatibility;

        return $this;
    }
   /**
     * Gets is_font_substitution_char_granularity
     *
     * @return bool
     */
    public function getIsFontSubstitutionCharGranularity()
    {
        return $this->container['is_font_substitution_char_granularity'];
    }

    /**
     * Sets is_font_substitution_char_granularity
     *
     *  Indicates whether to only substitute the font of character when the cell font is not compatibility for it.
     *
     * @return $this
     */
    public function setIsFontSubstitutionCharGranularity($is_font_substitution_char_granularity)
    {
        $this->container['is_font_substitution_char_granularity'] = $is_font_substitution_char_granularity;

        return $this;
    }
   /**
     * Gets one_page_per_sheet
     *
     * @return bool
     */
    public function getOnePagePerSheet()
    {
        return $this->container['one_page_per_sheet'];
    }

    /**
     * Sets one_page_per_sheet
     *
     *  If OnePagePerSheet is true , all content of one sheet will output to only one page in result.The paper size of pagesetup will be invalid, and the other settings of pagesetup will still take effect.
     *
     * @return $this
     */
    public function setOnePagePerSheet($one_page_per_sheet)
    {
        $this->container['one_page_per_sheet'] = $one_page_per_sheet;

        return $this;
    }
   /**
     * Gets all_columns_in_one_page_per_sheet
     *
     * @return bool
     */
    public function getAllColumnsInOnePagePerSheet()
    {
        return $this->container['all_columns_in_one_page_per_sheet'];
    }

    /**
     * Sets all_columns_in_one_page_per_sheet
     *
     *  If AllColumnsInOnePagePerSheet is true , all column content of one sheet will output to only one page in result.The width of paper size of pagesetup will be ignored, and the other settings of pagesetup will still take effect.
     *
     * @return $this
     */
    public function setAllColumnsInOnePagePerSheet($all_columns_in_one_page_per_sheet)
    {
        $this->container['all_columns_in_one_page_per_sheet'] = $all_columns_in_one_page_per_sheet;

        return $this;
    }
   /**
     * Gets ignore_error
     *
     * @return bool
     */
    public function getIgnoreError()
    {
        return $this->container['ignore_error'];
    }

    /**
     * Sets ignore_error
     *
     *  Indicates if you need to hide the error while rendering.The error can be error in shape, image, chart rendering, etc.
     *
     * @return $this
     */
    public function setIgnoreError($ignore_error)
    {
        $this->container['ignore_error'] = $ignore_error;

        return $this;
    }
   /**
     * Gets output_blank_page_when_nothing_to_print
     *
     * @return bool
     */
    public function getOutputBlankPageWhenNothingToPrint()
    {
        return $this->container['output_blank_page_when_nothing_to_print'];
    }

    /**
     * Sets output_blank_page_when_nothing_to_print
     *
     *  Indicates whether to output a blank page when there is nothing to print.
     *
     * @return $this
     */
    public function setOutputBlankPageWhenNothingToPrint($output_blank_page_when_nothing_to_print)
    {
        $this->container['output_blank_page_when_nothing_to_print'] = $output_blank_page_when_nothing_to_print;

        return $this;
    }
   /**
     * Gets page_index
     *
     * @return int
     */
    public function getPageIndex()
    {
        return $this->container['page_index'];
    }

    /**
     * Sets page_index
     *
     *  Gets or sets the 0-based index of the first page to save.
     *
     * @return $this
     */
    public function setPageIndex($page_index)
    {
        $this->container['page_index'] = $page_index;

        return $this;
    }
   /**
     * Gets page_count
     *
     * @return int
     */
    public function getPageCount()
    {
        return $this->container['page_count'];
    }

    /**
     * Sets page_count
     *
     *  Gets or sets the number of pages to save.
     *
     * @return $this
     */
    public function setPageCount($page_count)
    {
        $this->container['page_count'] = $page_count;

        return $this;
    }
   /**
     * Gets printing_page_type
     *
     * @return string
     */
    public function getPrintingPageType()
    {
        return $this->container['printing_page_type'];
    }

    /**
     * Sets printing_page_type
     *
     *  Indicates which pages will not be printed.
     *
     * @return $this
     */
    public function setPrintingPageType($printing_page_type)
    {
        $this->container['printing_page_type'] = $printing_page_type;

        return $this;
    }
   /**
     * Gets gridline_type
     *
     * @return string
     */
    public function getGridlineType()
    {
        return $this->container['gridline_type'];
    }

    /**
     * Sets gridline_type
     *
     *  Gets or sets gridline type.
     *
     * @return $this
     */
    public function setGridlineType($gridline_type)
    {
        $this->container['gridline_type'] = $gridline_type;

        return $this;
    }
   /**
     * Gets text_cross_type
     *
     * @return string
     */
    public function getTextCrossType()
    {
        return $this->container['text_cross_type'];
    }

    /**
     * Sets text_cross_type
     *
     *  Gets or sets displaying text type when the text width is larger than cell width.
     *
     * @return $this
     */
    public function setTextCrossType($text_cross_type)
    {
        $this->container['text_cross_type'] = $text_cross_type;

        return $this;
    }
   /**
     * Gets default_edit_language
     *
     * @return string
     */
    public function getDefaultEditLanguage()
    {
        return $this->container['default_edit_language'];
    }

    /**
     * Sets default_edit_language
     *
     *  Gets or sets default edit language.
     *
     * @return $this
     */
    public function setDefaultEditLanguage($default_edit_language)
    {
        $this->container['default_edit_language'] = $default_edit_language;

        return $this;
    }
   /**
     * Gets emf_render_setting
     *
     * @return string
     */
    public function getEmfRenderSetting()
    {
        return $this->container['emf_render_setting'];
    }

    /**
     * Sets emf_render_setting
     *
     *  Setting for rendering Emf metafile.
     *
     * @return $this
     */
    public function setEmfRenderSetting($emf_render_setting)
    {
        $this->container['emf_render_setting'] = $emf_render_setting;

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
