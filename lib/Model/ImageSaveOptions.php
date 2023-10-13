<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ImageSaveOptions.cs">
 *   Copyright (c) 2023 Aspose.Cells Cloud
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

class ImageSaveOptions implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImageSaveOptions';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'chart_image_type' => 'string',
        'embeded_image_name_in_svg' => 'string',
        'horizontal_resolution' => 'int',
        'image_format' => 'string',
        'is_cell_auto_fit' => 'bool',
        'one_page_per_sheet' => 'bool',
        'only_area' => 'bool',
        'printing_page' => 'string',
        'print_with_status_dialog' => 'bool',
        'quality' => 'int',
        'tiff_compression' => 'string',
        'vertical_resolution' => 'int',
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
        'chart_image_type' => null  ,
        'embeded_image_name_in_svg' => null  ,
        'horizontal_resolution' => null  ,
        'image_format' => null  ,
        'is_cell_auto_fit' => null  ,
        'one_page_per_sheet' => null  ,
        'only_area' => null  ,
        'printing_page' => null  ,
        'print_with_status_dialog' => null  ,
        'quality' => null  ,
        'tiff_compression' => null  ,
        'vertical_resolution' => null  ,
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
         'chart_image_type' => 'ChartImageType' ,
         'embeded_image_name_in_svg' => 'EmbededImageNameInSvg' ,
         'horizontal_resolution' => 'HorizontalResolution' ,
         'image_format' => 'ImageFormat' ,
         'is_cell_auto_fit' => 'IsCellAutoFit' ,
         'one_page_per_sheet' => 'OnePagePerSheet' ,
         'only_area' => 'OnlyArea' ,
         'printing_page' => 'PrintingPage' ,
         'print_with_status_dialog' => 'PrintWithStatusDialog' ,
         'quality' => 'Quality' ,
         'tiff_compression' => 'TiffCompression' ,
         'vertical_resolution' => 'VerticalResolution' ,
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
        'chart_image_type' => 'setChartImageType' ,
        'embeded_image_name_in_svg' => 'setEmbededImageNameInSvg' ,
        'horizontal_resolution' => 'setHorizontalResolution' ,
        'image_format' => 'setImageFormat' ,
        'is_cell_auto_fit' => 'setIsCellAutoFit' ,
        'one_page_per_sheet' => 'setOnePagePerSheet' ,
        'only_area' => 'setOnlyArea' ,
        'printing_page' => 'setPrintingPage' ,
        'print_with_status_dialog' => 'setPrintWithStatusDialog' ,
        'quality' => 'setQuality' ,
        'tiff_compression' => 'setTiffCompression' ,
        'vertical_resolution' => 'setVerticalResolution' ,
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
        'chart_image_type' => 'getChartImageType' ,
        'embeded_image_name_in_svg' => 'getEmbededImageNameInSvg' ,
        'horizontal_resolution' => 'getHorizontalResolution' ,
        'image_format' => 'getImageFormat' ,
        'is_cell_auto_fit' => 'getIsCellAutoFit' ,
        'one_page_per_sheet' => 'getOnePagePerSheet' ,
        'only_area' => 'getOnlyArea' ,
        'printing_page' => 'getPrintingPage' ,
        'print_with_status_dialog' => 'getPrintWithStatusDialog' ,
        'quality' => 'getQuality' ,
        'tiff_compression' => 'getTiffCompression' ,
        'vertical_resolution' => 'getVerticalResolution' ,
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
        $this->container['chart_image_type'] = isset($data['chart_image_type']) ? $data['chart_image_type'] : null;
        $this->container['embeded_image_name_in_svg'] = isset($data['embeded_image_name_in_svg']) ? $data['embeded_image_name_in_svg'] : null;
        $this->container['horizontal_resolution'] = isset($data['horizontal_resolution']) ? $data['horizontal_resolution'] : null;
        $this->container['image_format'] = isset($data['image_format']) ? $data['image_format'] : null;
        $this->container['is_cell_auto_fit'] = isset($data['is_cell_auto_fit']) ? $data['is_cell_auto_fit'] : null;
        $this->container['one_page_per_sheet'] = isset($data['one_page_per_sheet']) ? $data['one_page_per_sheet'] : null;
        $this->container['only_area'] = isset($data['only_area']) ? $data['only_area'] : null;
        $this->container['printing_page'] = isset($data['printing_page']) ? $data['printing_page'] : null;
        $this->container['print_with_status_dialog'] = isset($data['print_with_status_dialog']) ? $data['print_with_status_dialog'] : null;
        $this->container['quality'] = isset($data['quality']) ? $data['quality'] : null;
        $this->container['tiff_compression'] = isset($data['tiff_compression']) ? $data['tiff_compression'] : null;
        $this->container['vertical_resolution'] = isset($data['vertical_resolution']) ? $data['vertical_resolution'] : null;
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
        if ($this->container['chart_image_type'] === null) {
            $invalidProperties[] = "'chart_image_type' can't be null";
        }
        if ($this->container['embeded_image_name_in_svg'] === null) {
            $invalidProperties[] = "'embeded_image_name_in_svg' can't be null";
        }
        if ($this->container['horizontal_resolution'] === null) {
            $invalidProperties[] = "'horizontal_resolution' can't be null";
        }
        if ($this->container['image_format'] === null) {
            $invalidProperties[] = "'image_format' can't be null";
        }
        if ($this->container['is_cell_auto_fit'] === null) {
            $invalidProperties[] = "'is_cell_auto_fit' can't be null";
        }
        if ($this->container['one_page_per_sheet'] === null) {
            $invalidProperties[] = "'one_page_per_sheet' can't be null";
        }
        if ($this->container['only_area'] === null) {
            $invalidProperties[] = "'only_area' can't be null";
        }
        if ($this->container['printing_page'] === null) {
            $invalidProperties[] = "'printing_page' can't be null";
        }
        if ($this->container['print_with_status_dialog'] === null) {
            $invalidProperties[] = "'print_with_status_dialog' can't be null";
        }
        if ($this->container['quality'] === null) {
            $invalidProperties[] = "'quality' can't be null";
        }
        if ($this->container['tiff_compression'] === null) {
            $invalidProperties[] = "'tiff_compression' can't be null";
        }
        if ($this->container['vertical_resolution'] === null) {
            $invalidProperties[] = "'vertical_resolution' can't be null";
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
        if ($this->container['chart_image_type'] === null) {
                    return false;
                }
        if ($this->container['embeded_image_name_in_svg'] === null) {
                    return false;
                }
        if ($this->container['horizontal_resolution'] === null) {
                    return false;
                }
        if ($this->container['image_format'] === null) {
                    return false;
                }
        if ($this->container['is_cell_auto_fit'] === null) {
                    return false;
                }
        if ($this->container['one_page_per_sheet'] === null) {
                    return false;
                }
        if ($this->container['only_area'] === null) {
                    return false;
                }
        if ($this->container['printing_page'] === null) {
                    return false;
                }
        if ($this->container['print_with_status_dialog'] === null) {
                    return false;
                }
        if ($this->container['quality'] === null) {
                    return false;
                }
        if ($this->container['tiff_compression'] === null) {
                    return false;
                }
        if ($this->container['vertical_resolution'] === null) {
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
     * Gets chart_image_type
     *
     * @return string
     */
    public function getChartImageType()
    {
        return $this->container['chart_image_type'];
    }

    /**
     * Sets chart_image_type
     *
     *  Indicate the chart imagetype when converting.
     *
     * @return $this
     */
    public function setChartImageType($chart_image_type)
    {
        $this->container['chart_image_type'] = $chart_image_type;

        return $this;
    }
   /**
     * Gets embeded_image_name_in_svg
     *
     * @return string
     */
    public function getEmbededImageNameInSvg()
    {
        return $this->container['embeded_image_name_in_svg'];
    }

    /**
     * Sets embeded_image_name_in_svg
     *
     *  Indicate the filename of embeded image in svg. This should be full path with directory like "c:\\xpsEmbeded"
     *
     * @return $this
     */
    public function setEmbededImageNameInSvg($embeded_image_name_in_svg)
    {
        $this->container['embeded_image_name_in_svg'] = $embeded_image_name_in_svg;

        return $this;
    }
   /**
     * Gets horizontal_resolution
     *
     * @return int
     */
    public function getHorizontalResolution()
    {
        return $this->container['horizontal_resolution'];
    }

    /**
     * Sets horizontal_resolution
     *
     *  Gets or sets the horizontal resolution for generated images, in dots per inch.                 Applies generating image method except Emf format images.               The default value is 96.
     *
     * @return $this
     */
    public function setHorizontalResolution($horizontal_resolution)
    {
        $this->container['horizontal_resolution'] = $horizontal_resolution;

        return $this;
    }
   /**
     * Gets image_format
     *
     * @return string
     */
    public function getImageFormat()
    {
        return $this->container['image_format'];
    }

    /**
     * Sets image_format
     *
     *  Gets or sets the format of the generated images.  Don't apply the method that returns a Bitmap object.             The default value is ImageFormat.Bmp.  Don't apply the method that returns a Bitmap object.
     *
     * @return $this
     */
    public function setImageFormat($image_format)
    {
        $this->container['image_format'] = $image_format;

        return $this;
    }
   /**
     * Gets is_cell_auto_fit
     *
     * @return bool
     */
    public function getIsCellAutoFit()
    {
        return $this->container['is_cell_auto_fit'];
    }

    /**
     * Sets is_cell_auto_fit
     *
     *  Indicates whether the width and height of the cells is automatically fitted by cell value. The default value is false.
     *
     * @return $this
     */
    public function setIsCellAutoFit($is_cell_auto_fit)
    {
        $this->container['is_cell_auto_fit'] = $is_cell_auto_fit;

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
     *  If OnePagePerSheet is true , all content of one sheet will output to only                one page in result. The paper size of pagesetup will be invalid, and the                other settings of pagesetup will still take effect.
     *
     * @return $this
     */
    public function setOnePagePerSheet($one_page_per_sheet)
    {
        $this->container['one_page_per_sheet'] = $one_page_per_sheet;

        return $this;
    }
   /**
     * Gets only_area
     *
     * @return bool
     */
    public function getOnlyArea()
    {
        return $this->container['only_area'];
    }

    /**
     * Sets only_area
     *
     *  If this property is true , onle Area will be output, and no scale will take effect.
     *
     * @return $this
     */
    public function setOnlyArea($only_area)
    {
        $this->container['only_area'] = $only_area;

        return $this;
    }
   /**
     * Gets printing_page
     *
     * @return string
     */
    public function getPrintingPage()
    {
        return $this->container['printing_page'];
    }

    /**
     * Sets printing_page
     *
     *  Indicates which pages will not be printed.
     *
     * @return $this
     */
    public function setPrintingPage($printing_page)
    {
        $this->container['printing_page'] = $printing_page;

        return $this;
    }
   /**
     * Gets print_with_status_dialog
     *
     * @return bool
     */
    public function getPrintWithStatusDialog()
    {
        return $this->container['print_with_status_dialog'];
    }

    /**
     * Sets print_with_status_dialog
     *
     *  If PrintWithStatusDialog = true , there will be a dialog that shows current print status.  else no such dialog will show.
     *
     * @return $this
     */
    public function setPrintWithStatusDialog($print_with_status_dialog)
    {
        $this->container['print_with_status_dialog'] = $print_with_status_dialog;

        return $this;
    }
   /**
     * Gets quality
     *
     * @return int
     */
    public function getQuality()
    {
        return $this->container['quality'];
    }

    /**
     * Sets quality
     *
     *  Gets or sets a value determining the quality of the generated images to apply only when saving pages to the Jpeg format.            Has effect only when saving to JPEG.  The value must be between 0 and 100. The default value is 100.
     *
     * @return $this
     */
    public function setQuality($quality)
    {
        $this->container['quality'] = $quality;

        return $this;
    }
   /**
     * Gets tiff_compression
     *
     * @return string
     */
    public function getTiffCompression()
    {
        return $this->container['tiff_compression'];
    }

    /**
     * Sets tiff_compression
     *
     *  Gets or sets the type of compression to apply only when saving pages to the Tiff format.            Has effect only when saving to TIFF.  The default value is Lzw.
     *
     * @return $this
     */
    public function setTiffCompression($tiff_compression)
    {
        $this->container['tiff_compression'] = $tiff_compression;

        return $this;
    }
   /**
     * Gets vertical_resolution
     *
     * @return int
     */
    public function getVerticalResolution()
    {
        return $this->container['vertical_resolution'];
    }

    /**
     * Sets vertical_resolution
     *
     *  Gets or sets the vertical resolution for generated images, in dots per inch.            Applies generating image method except Emf format image.            The default value is 96.
     *
     * @return $this
     */
    public function setVerticalResolution($vertical_resolution)
    {
        $this->container['vertical_resolution'] = $vertical_resolution;

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
