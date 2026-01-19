<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PdfSaveOptions.cs">
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

class PdfSaveOptions
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PdfSaveOptions';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'display_doc_title' => 'bool',
        'export_document_structure' => 'bool',
        'emf_render_setting' => 'string',
        'custom_properties_export' => 'string',
        'optimization_type' => 'string',
        'producer' => 'string',
        'pdf_compression' => 'string',
        'font_encoding' => 'string',
        'watermark' => '\Aspose\Cells\Cloud\Model\RenderingWatermark',
        'calculate_formula' => 'bool',
        'check_font_compatibility' => 'bool',
        'compliance' => 'string',
        'default_font' => 'string',
        'one_page_per_sheet' => 'bool',
        'printing_page_type' => 'string',
        'security_options' => '\Aspose\Cells\Cloud\Model\PdfSecurityOptions',
        'desired_ppi' => 'int',
        'jpeg_quality' => 'int',
        'image_type' => 'string',
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
        'display_doc_title' => null  ,
        'export_document_structure' => null  ,
        'emf_render_setting' => null  ,
        'custom_properties_export' => null  ,
        'optimization_type' => null  ,
        'producer' => null  ,
        'pdf_compression' => null  ,
        'font_encoding' => null  ,
        'watermark' => null  ,
        'calculate_formula' => null  ,
        'check_font_compatibility' => null  ,
        'compliance' => null  ,
        'default_font' => null  ,
        'one_page_per_sheet' => null  ,
        'printing_page_type' => null  ,
        'security_options' => null  ,
        'desired_ppi' => null  ,
        'jpeg_quality' => null  ,
        'image_type' => null  ,
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
         'display_doc_title' => 'DisplayDocTitle' ,
         'export_document_structure' => 'ExportDocumentStructure' ,
         'emf_render_setting' => 'EmfRenderSetting' ,
         'custom_properties_export' => 'CustomPropertiesExport' ,
         'optimization_type' => 'OptimizationType' ,
         'producer' => 'Producer' ,
         'pdf_compression' => 'PdfCompression' ,
         'font_encoding' => 'FontEncoding' ,
         'watermark' => 'Watermark' ,
         'calculate_formula' => 'CalculateFormula' ,
         'check_font_compatibility' => 'CheckFontCompatibility' ,
         'compliance' => 'Compliance' ,
         'default_font' => 'DefaultFont' ,
         'one_page_per_sheet' => 'OnePagePerSheet' ,
         'printing_page_type' => 'PrintingPageType' ,
         'security_options' => 'SecurityOptions' ,
         'desired_ppi' => 'desiredPPI' ,
         'jpeg_quality' => 'jpegQuality' ,
         'image_type' => 'ImageType' ,
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
        'display_doc_title' => 'setDisplayDocTitle' ,
        'export_document_structure' => 'setExportDocumentStructure' ,
        'emf_render_setting' => 'setEmfRenderSetting' ,
        'custom_properties_export' => 'setCustomPropertiesExport' ,
        'optimization_type' => 'setOptimizationType' ,
        'producer' => 'setProducer' ,
        'pdf_compression' => 'setPdfCompression' ,
        'font_encoding' => 'setFontEncoding' ,
        'watermark' => 'setWatermark' ,
        'calculate_formula' => 'setCalculateFormula' ,
        'check_font_compatibility' => 'setCheckFontCompatibility' ,
        'compliance' => 'setCompliance' ,
        'default_font' => 'setDefaultFont' ,
        'one_page_per_sheet' => 'setOnePagePerSheet' ,
        'printing_page_type' => 'setPrintingPageType' ,
        'security_options' => 'setSecurityOptions' ,
        'desired_ppi' => 'setdesiredPPI' ,
        'jpeg_quality' => 'setjpegQuality' ,
        'image_type' => 'setImageType' ,
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
        'display_doc_title' => 'getDisplayDocTitle' ,
        'export_document_structure' => 'getExportDocumentStructure' ,
        'emf_render_setting' => 'getEmfRenderSetting' ,
        'custom_properties_export' => 'getCustomPropertiesExport' ,
        'optimization_type' => 'getOptimizationType' ,
        'producer' => 'getProducer' ,
        'pdf_compression' => 'getPdfCompression' ,
        'font_encoding' => 'getFontEncoding' ,
        'watermark' => 'getWatermark' ,
        'calculate_formula' => 'getCalculateFormula' ,
        'check_font_compatibility' => 'getCheckFontCompatibility' ,
        'compliance' => 'getCompliance' ,
        'default_font' => 'getDefaultFont' ,
        'one_page_per_sheet' => 'getOnePagePerSheet' ,
        'printing_page_type' => 'getPrintingPageType' ,
        'security_options' => 'getSecurityOptions' ,
        'desired_ppi' => 'getdesiredPPI' ,
        'jpeg_quality' => 'getjpegQuality' ,
        'image_type' => 'getImageType' ,
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
        $this->container['display_doc_title'] = isset($data['display_doc_title']) ? $data['display_doc_title'] : null;
        $this->container['export_document_structure'] = isset($data['export_document_structure']) ? $data['export_document_structure'] : null;
        $this->container['emf_render_setting'] = isset($data['emf_render_setting']) ? $data['emf_render_setting'] : null;
        $this->container['custom_properties_export'] = isset($data['custom_properties_export']) ? $data['custom_properties_export'] : null;
        $this->container['optimization_type'] = isset($data['optimization_type']) ? $data['optimization_type'] : null;
        $this->container['producer'] = isset($data['producer']) ? $data['producer'] : null;
        $this->container['pdf_compression'] = isset($data['pdf_compression']) ? $data['pdf_compression'] : null;
        $this->container['font_encoding'] = isset($data['font_encoding']) ? $data['font_encoding'] : null;
        $this->container['watermark'] = isset($data['watermark']) ? $data['watermark'] : null;
        $this->container['calculate_formula'] = isset($data['calculate_formula']) ? $data['calculate_formula'] : null;
        $this->container['check_font_compatibility'] = isset($data['check_font_compatibility']) ? $data['check_font_compatibility'] : null;
        $this->container['compliance'] = isset($data['compliance']) ? $data['compliance'] : null;
        $this->container['default_font'] = isset($data['default_font']) ? $data['default_font'] : null;
        $this->container['one_page_per_sheet'] = isset($data['one_page_per_sheet']) ? $data['one_page_per_sheet'] : null;
        $this->container['printing_page_type'] = isset($data['printing_page_type']) ? $data['printing_page_type'] : null;
        $this->container['security_options'] = isset($data['security_options']) ? $data['security_options'] : null;
        $this->container['desired_ppi'] = isset($data['desired_ppi']) ? $data['desired_ppi'] : null;
        $this->container['jpeg_quality'] = isset($data['jpeg_quality']) ? $data['jpeg_quality'] : null;
        $this->container['image_type'] = isset($data['image_type']) ? $data['image_type'] : null;
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
        if ($this->container['display_doc_title'] === null) {
            $invalidProperties[] = "'display_doc_title' can't be null";
        }
        if ($this->container['export_document_structure'] === null) {
            $invalidProperties[] = "'export_document_structure' can't be null";
        }
        if ($this->container['emf_render_setting'] === null) {
            $invalidProperties[] = "'emf_render_setting' can't be null";
        }
        if ($this->container['custom_properties_export'] === null) {
            $invalidProperties[] = "'custom_properties_export' can't be null";
        }
        if ($this->container['optimization_type'] === null) {
            $invalidProperties[] = "'optimization_type' can't be null";
        }
        if ($this->container['producer'] === null) {
            $invalidProperties[] = "'producer' can't be null";
        }
        if ($this->container['pdf_compression'] === null) {
            $invalidProperties[] = "'pdf_compression' can't be null";
        }
        if ($this->container['font_encoding'] === null) {
            $invalidProperties[] = "'font_encoding' can't be null";
        }
        if ($this->container['watermark'] === null) {
            $invalidProperties[] = "'watermark' can't be null";
        }
        if ($this->container['calculate_formula'] === null) {
            $invalidProperties[] = "'calculate_formula' can't be null";
        }
        if ($this->container['check_font_compatibility'] === null) {
            $invalidProperties[] = "'check_font_compatibility' can't be null";
        }
        if ($this->container['compliance'] === null) {
            $invalidProperties[] = "'compliance' can't be null";
        }
        if ($this->container['default_font'] === null) {
            $invalidProperties[] = "'default_font' can't be null";
        }
        if ($this->container['one_page_per_sheet'] === null) {
            $invalidProperties[] = "'one_page_per_sheet' can't be null";
        }
        if ($this->container['printing_page_type'] === null) {
            $invalidProperties[] = "'printing_page_type' can't be null";
        }
        if ($this->container['security_options'] === null) {
            $invalidProperties[] = "'security_options' can't be null";
        }
        if ($this->container['desired_ppi'] === null) {
            $invalidProperties[] = "'desired_ppi' can't be null";
        }
        if ($this->container['jpeg_quality'] === null) {
            $invalidProperties[] = "'jpeg_quality' can't be null";
        }
        if ($this->container['image_type'] === null) {
            $invalidProperties[] = "'image_type' can't be null";
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
        if ($this->container['display_doc_title'] === null) {
                    return false;
                }
        if ($this->container['export_document_structure'] === null) {
                    return false;
                }
        if ($this->container['emf_render_setting'] === null) {
                    return false;
                }
        if ($this->container['custom_properties_export'] === null) {
                    return false;
                }
        if ($this->container['optimization_type'] === null) {
                    return false;
                }
        if ($this->container['producer'] === null) {
                    return false;
                }
        if ($this->container['pdf_compression'] === null) {
                    return false;
                }
        if ($this->container['font_encoding'] === null) {
                    return false;
                }
        if ($this->container['watermark'] === null) {
                    return false;
                }
        if ($this->container['calculate_formula'] === null) {
                    return false;
                }
        if ($this->container['check_font_compatibility'] === null) {
                    return false;
                }
        if ($this->container['compliance'] === null) {
                    return false;
                }
        if ($this->container['default_font'] === null) {
                    return false;
                }
        if ($this->container['one_page_per_sheet'] === null) {
                    return false;
                }
        if ($this->container['printing_page_type'] === null) {
                    return false;
                }
        if ($this->container['security_options'] === null) {
                    return false;
                }
        if ($this->container['desired_ppi'] === null) {
                    return false;
                }
        if ($this->container['jpeg_quality'] === null) {
                    return false;
                }
        if ($this->container['image_type'] === null) {
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
     * Gets display_doc_title
     *
     * @return bool
     */
    public function getDisplayDocTitle()
    {
        return $this->container['display_doc_title'];
    }

    /**
     * Sets display_doc_title
     *
     *  
     *
     * @return $this
     */
    public function setDisplayDocTitle($display_doc_title)
    {
        $this->container['display_doc_title'] = $display_doc_title;

        return $this;
    }
   /**
     * Gets export_document_structure
     *
     * @return bool
     */
    public function getExportDocumentStructure()
    {
        return $this->container['export_document_structure'];
    }

    /**
     * Sets export_document_structure
     *
     *  
     *
     * @return $this
     */
    public function setExportDocumentStructure($export_document_structure)
    {
        $this->container['export_document_structure'] = $export_document_structure;

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
     *  
     *
     * @return $this
     */
    public function setEmfRenderSetting($emf_render_setting)
    {
        $this->container['emf_render_setting'] = $emf_render_setting;

        return $this;
    }
   /**
     * Gets custom_properties_export
     *
     * @return string
     */
    public function getCustomPropertiesExport()
    {
        return $this->container['custom_properties_export'];
    }

    /**
     * Sets custom_properties_export
     *
     *  
     *
     * @return $this
     */
    public function setCustomPropertiesExport($custom_properties_export)
    {
        $this->container['custom_properties_export'] = $custom_properties_export;

        return $this;
    }
   /**
     * Gets optimization_type
     *
     * @return string
     */
    public function getOptimizationType()
    {
        return $this->container['optimization_type'];
    }

    /**
     * Sets optimization_type
     *
     *  
     *
     * @return $this
     */
    public function setOptimizationType($optimization_type)
    {
        $this->container['optimization_type'] = $optimization_type;

        return $this;
    }
   /**
     * Gets producer
     *
     * @return string
     */
    public function getProducer()
    {
        return $this->container['producer'];
    }

    /**
     * Sets producer
     *
     *  
     *
     * @return $this
     */
    public function setProducer($producer)
    {
        $this->container['producer'] = $producer;

        return $this;
    }
   /**
     * Gets pdf_compression
     *
     * @return string
     */
    public function getPdfCompression()
    {
        return $this->container['pdf_compression'];
    }

    /**
     * Sets pdf_compression
     *
     *  
     *
     * @return $this
     */
    public function setPdfCompression($pdf_compression)
    {
        $this->container['pdf_compression'] = $pdf_compression;

        return $this;
    }
   /**
     * Gets font_encoding
     *
     * @return string
     */
    public function getFontEncoding()
    {
        return $this->container['font_encoding'];
    }

    /**
     * Sets font_encoding
     *
     *  
     *
     * @return $this
     */
    public function setFontEncoding($font_encoding)
    {
        $this->container['font_encoding'] = $font_encoding;

        return $this;
    }
   /**
     * Gets watermark
     *
     * @return \Aspose\Cells\Cloud\Model\RenderingWatermark
     */
    public function getWatermark()
    {
        return $this->container['watermark'];
    }

    /**
     * Sets watermark
     *
     *  
     *
     * @return $this
     */
    public function setWatermark($watermark)
    {
        $this->container['watermark'] = $watermark;

        return $this;
    }
   /**
     * Gets calculate_formula
     *
     * @return bool
     */
    public function getCalculateFormula()
    {
        return $this->container['calculate_formula'];
    }

    /**
     * Sets calculate_formula
     *
     *  
     *
     * @return $this
     */
    public function setCalculateFormula($calculate_formula)
    {
        $this->container['calculate_formula'] = $calculate_formula;

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
     *  
     *
     * @return $this
     */
    public function setCheckFontCompatibility($check_font_compatibility)
    {
        $this->container['check_font_compatibility'] = $check_font_compatibility;

        return $this;
    }
   /**
     * Gets compliance
     *
     * @return string
     */
    public function getCompliance()
    {
        return $this->container['compliance'];
    }

    /**
     * Sets compliance
     *
     *  
     *
     * @return $this
     */
    public function setCompliance($compliance)
    {
        $this->container['compliance'] = $compliance;

        return $this;
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
     *  
     *
     * @return $this
     */
    public function setDefaultFont($default_font)
    {
        $this->container['default_font'] = $default_font;

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
     *  
     *
     * @return $this
     */
    public function setOnePagePerSheet($one_page_per_sheet)
    {
        $this->container['one_page_per_sheet'] = $one_page_per_sheet;

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
     *  
     *
     * @return $this
     */
    public function setPrintingPageType($printing_page_type)
    {
        $this->container['printing_page_type'] = $printing_page_type;

        return $this;
    }
   /**
     * Gets security_options
     *
     * @return \Aspose\Cells\Cloud\Model\PdfSecurityOptions
     */
    public function getSecurityOptions()
    {
        return $this->container['security_options'];
    }

    /**
     * Sets security_options
     *
     *  
     *
     * @return $this
     */
    public function setSecurityOptions($security_options)
    {
        $this->container['security_options'] = $security_options;

        return $this;
    }
   /**
     * Gets desired_ppi
     *
     * @return int
     */
    public function getdesiredPPI()
    {
        return $this->container['desired_ppi'];
    }

    /**
     * Sets desired_ppi
     *
     *  
     *
     * @return $this
     */
    public function setdesiredPPI($desired_ppi)
    {
        $this->container['desired_ppi'] = $desired_ppi;

        return $this;
    }
   /**
     * Gets jpeg_quality
     *
     * @return int
     */
    public function getjpegQuality()
    {
        return $this->container['jpeg_quality'];
    }

    /**
     * Sets jpeg_quality
     *
     *  
     *
     * @return $this
     */
    public function setjpegQuality($jpeg_quality)
    {
        $this->container['jpeg_quality'] = $jpeg_quality;

        return $this;
    }
   /**
     * Gets image_type
     *
     * @return string
     */
    public function getImageType()
    {
        return $this->container['image_type'];
    }

    /**
     * Sets image_type
     *
     *  
     *
     * @return $this
     */
    public function setImageType($image_type)
    {
        $this->container['image_type'] = $image_type;

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
