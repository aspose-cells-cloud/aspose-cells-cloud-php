<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PageSetup.cs">
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

class PageSetup implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PageSetup';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'black_and_white' => 'bool',
        'bottom_margin' => 'double',
        'center_horizontally' => 'bool',
        'center_vertically' => 'bool',
        'first_page_number' => 'int',
        'fit_to_pages_tall' => 'int',
        'fit_to_pages_wide' => 'int',
        'footer_margin' => 'double',
        'header_margin' => 'double',
        'is_auto_first_page_number' => 'bool',
        'is_hf_align_margins' => 'bool',
        'is_hf_diff_first' => 'bool',
        'is_hf_diff_odd_even' => 'bool',
        'is_hf_scale_with_doc' => 'bool',
        'is_percent_scale' => 'bool',
        'left_margin' => 'double',
        'order' => 'string',
        'orientation' => 'string',
        'paper_size' => 'string',
        'print_area' => 'string',
        'print_comments' => 'string',
        'print_copies' => 'int',
        'print_draft' => 'bool',
        'print_errors' => 'string',
        'print_gridlines' => 'bool',
        'print_headings' => 'bool',
        'print_quality' => 'int',
        'print_title_columns' => 'string',
        'print_title_rows' => 'string',
        'right_margin' => 'double',
        'top_margin' => 'double',
        'zoom' => 'int',
        'header' => '\Aspose\Cells\Cloud\Model\PageSection[]',
        'footer' => '\Aspose\Cells\Cloud\Model\PageSection[]',
        'link' => '\Aspose\Cells\Cloud\Model\Link'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'black_and_white' => null  ,
        'bottom_margin' => null  ,
        'center_horizontally' => null  ,
        'center_vertically' => null  ,
        'first_page_number' => null  ,
        'fit_to_pages_tall' => null  ,
        'fit_to_pages_wide' => null  ,
        'footer_margin' => null  ,
        'header_margin' => null  ,
        'is_auto_first_page_number' => null  ,
        'is_hf_align_margins' => null  ,
        'is_hf_diff_first' => null  ,
        'is_hf_diff_odd_even' => null  ,
        'is_hf_scale_with_doc' => null  ,
        'is_percent_scale' => null  ,
        'left_margin' => null  ,
        'order' => null  ,
        'orientation' => null  ,
        'paper_size' => null  ,
        'print_area' => null  ,
        'print_comments' => null  ,
        'print_copies' => null  ,
        'print_draft' => null  ,
        'print_errors' => null  ,
        'print_gridlines' => null  ,
        'print_headings' => null  ,
        'print_quality' => null  ,
        'print_title_columns' => null  ,
        'print_title_rows' => null  ,
        'right_margin' => null  ,
        'top_margin' => null  ,
        'zoom' => null  ,
        'header' => null  ,
        'footer' => null  ,
        'link' => null  
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
         'black_and_white' => 'BlackAndWhite' ,
         'bottom_margin' => 'BottomMargin' ,
         'center_horizontally' => 'CenterHorizontally' ,
         'center_vertically' => 'CenterVertically' ,
         'first_page_number' => 'FirstPageNumber' ,
         'fit_to_pages_tall' => 'FitToPagesTall' ,
         'fit_to_pages_wide' => 'FitToPagesWide' ,
         'footer_margin' => 'FooterMargin' ,
         'header_margin' => 'HeaderMargin' ,
         'is_auto_first_page_number' => 'IsAutoFirstPageNumber' ,
         'is_hf_align_margins' => 'IsHFAlignMargins' ,
         'is_hf_diff_first' => 'IsHFDiffFirst' ,
         'is_hf_diff_odd_even' => 'IsHFDiffOddEven' ,
         'is_hf_scale_with_doc' => 'IsHFScaleWithDoc' ,
         'is_percent_scale' => 'IsPercentScale' ,
         'left_margin' => 'LeftMargin' ,
         'order' => 'Order' ,
         'orientation' => 'Orientation' ,
         'paper_size' => 'PaperSize' ,
         'print_area' => 'PrintArea' ,
         'print_comments' => 'PrintComments' ,
         'print_copies' => 'PrintCopies' ,
         'print_draft' => 'PrintDraft' ,
         'print_errors' => 'PrintErrors' ,
         'print_gridlines' => 'PrintGridlines' ,
         'print_headings' => 'PrintHeadings' ,
         'print_quality' => 'PrintQuality' ,
         'print_title_columns' => 'PrintTitleColumns' ,
         'print_title_rows' => 'PrintTitleRows' ,
         'right_margin' => 'RightMargin' ,
         'top_margin' => 'TopMargin' ,
         'zoom' => 'Zoom' ,
         'header' => 'Header' ,
         'footer' => 'Footer' ,
         'link' => 'link' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'black_and_white' => 'setBlackAndWhite' ,
        'bottom_margin' => 'setBottomMargin' ,
        'center_horizontally' => 'setCenterHorizontally' ,
        'center_vertically' => 'setCenterVertically' ,
        'first_page_number' => 'setFirstPageNumber' ,
        'fit_to_pages_tall' => 'setFitToPagesTall' ,
        'fit_to_pages_wide' => 'setFitToPagesWide' ,
        'footer_margin' => 'setFooterMargin' ,
        'header_margin' => 'setHeaderMargin' ,
        'is_auto_first_page_number' => 'setIsAutoFirstPageNumber' ,
        'is_hf_align_margins' => 'setIsHFAlignMargins' ,
        'is_hf_diff_first' => 'setIsHFDiffFirst' ,
        'is_hf_diff_odd_even' => 'setIsHFDiffOddEven' ,
        'is_hf_scale_with_doc' => 'setIsHFScaleWithDoc' ,
        'is_percent_scale' => 'setIsPercentScale' ,
        'left_margin' => 'setLeftMargin' ,
        'order' => 'setOrder' ,
        'orientation' => 'setOrientation' ,
        'paper_size' => 'setPaperSize' ,
        'print_area' => 'setPrintArea' ,
        'print_comments' => 'setPrintComments' ,
        'print_copies' => 'setPrintCopies' ,
        'print_draft' => 'setPrintDraft' ,
        'print_errors' => 'setPrintErrors' ,
        'print_gridlines' => 'setPrintGridlines' ,
        'print_headings' => 'setPrintHeadings' ,
        'print_quality' => 'setPrintQuality' ,
        'print_title_columns' => 'setPrintTitleColumns' ,
        'print_title_rows' => 'setPrintTitleRows' ,
        'right_margin' => 'setRightMargin' ,
        'top_margin' => 'setTopMargin' ,
        'zoom' => 'setZoom' ,
        'header' => 'setHeader' ,
        'footer' => 'setFooter' ,
        'link' => 'setlink' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'black_and_white' => 'getBlackAndWhite' ,
        'bottom_margin' => 'getBottomMargin' ,
        'center_horizontally' => 'getCenterHorizontally' ,
        'center_vertically' => 'getCenterVertically' ,
        'first_page_number' => 'getFirstPageNumber' ,
        'fit_to_pages_tall' => 'getFitToPagesTall' ,
        'fit_to_pages_wide' => 'getFitToPagesWide' ,
        'footer_margin' => 'getFooterMargin' ,
        'header_margin' => 'getHeaderMargin' ,
        'is_auto_first_page_number' => 'getIsAutoFirstPageNumber' ,
        'is_hf_align_margins' => 'getIsHFAlignMargins' ,
        'is_hf_diff_first' => 'getIsHFDiffFirst' ,
        'is_hf_diff_odd_even' => 'getIsHFDiffOddEven' ,
        'is_hf_scale_with_doc' => 'getIsHFScaleWithDoc' ,
        'is_percent_scale' => 'getIsPercentScale' ,
        'left_margin' => 'getLeftMargin' ,
        'order' => 'getOrder' ,
        'orientation' => 'getOrientation' ,
        'paper_size' => 'getPaperSize' ,
        'print_area' => 'getPrintArea' ,
        'print_comments' => 'getPrintComments' ,
        'print_copies' => 'getPrintCopies' ,
        'print_draft' => 'getPrintDraft' ,
        'print_errors' => 'getPrintErrors' ,
        'print_gridlines' => 'getPrintGridlines' ,
        'print_headings' => 'getPrintHeadings' ,
        'print_quality' => 'getPrintQuality' ,
        'print_title_columns' => 'getPrintTitleColumns' ,
        'print_title_rows' => 'getPrintTitleRows' ,
        'right_margin' => 'getRightMargin' ,
        'top_margin' => 'getTopMargin' ,
        'zoom' => 'getZoom' ,
        'header' => 'getHeader' ,
        'footer' => 'getFooter' ,
        'link' => 'getlink' 
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
        $this->container['black_and_white'] = isset($data['black_and_white']) ? $data['black_and_white'] : null;
        $this->container['bottom_margin'] = isset($data['bottom_margin']) ? $data['bottom_margin'] : null;
        $this->container['center_horizontally'] = isset($data['center_horizontally']) ? $data['center_horizontally'] : null;
        $this->container['center_vertically'] = isset($data['center_vertically']) ? $data['center_vertically'] : null;
        $this->container['first_page_number'] = isset($data['first_page_number']) ? $data['first_page_number'] : null;
        $this->container['fit_to_pages_tall'] = isset($data['fit_to_pages_tall']) ? $data['fit_to_pages_tall'] : null;
        $this->container['fit_to_pages_wide'] = isset($data['fit_to_pages_wide']) ? $data['fit_to_pages_wide'] : null;
        $this->container['footer_margin'] = isset($data['footer_margin']) ? $data['footer_margin'] : null;
        $this->container['header_margin'] = isset($data['header_margin']) ? $data['header_margin'] : null;
        $this->container['is_auto_first_page_number'] = isset($data['is_auto_first_page_number']) ? $data['is_auto_first_page_number'] : null;
        $this->container['is_hf_align_margins'] = isset($data['is_hf_align_margins']) ? $data['is_hf_align_margins'] : null;
        $this->container['is_hf_diff_first'] = isset($data['is_hf_diff_first']) ? $data['is_hf_diff_first'] : null;
        $this->container['is_hf_diff_odd_even'] = isset($data['is_hf_diff_odd_even']) ? $data['is_hf_diff_odd_even'] : null;
        $this->container['is_hf_scale_with_doc'] = isset($data['is_hf_scale_with_doc']) ? $data['is_hf_scale_with_doc'] : null;
        $this->container['is_percent_scale'] = isset($data['is_percent_scale']) ? $data['is_percent_scale'] : null;
        $this->container['left_margin'] = isset($data['left_margin']) ? $data['left_margin'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['orientation'] = isset($data['orientation']) ? $data['orientation'] : null;
        $this->container['paper_size'] = isset($data['paper_size']) ? $data['paper_size'] : null;
        $this->container['print_area'] = isset($data['print_area']) ? $data['print_area'] : null;
        $this->container['print_comments'] = isset($data['print_comments']) ? $data['print_comments'] : null;
        $this->container['print_copies'] = isset($data['print_copies']) ? $data['print_copies'] : null;
        $this->container['print_draft'] = isset($data['print_draft']) ? $data['print_draft'] : null;
        $this->container['print_errors'] = isset($data['print_errors']) ? $data['print_errors'] : null;
        $this->container['print_gridlines'] = isset($data['print_gridlines']) ? $data['print_gridlines'] : null;
        $this->container['print_headings'] = isset($data['print_headings']) ? $data['print_headings'] : null;
        $this->container['print_quality'] = isset($data['print_quality']) ? $data['print_quality'] : null;
        $this->container['print_title_columns'] = isset($data['print_title_columns']) ? $data['print_title_columns'] : null;
        $this->container['print_title_rows'] = isset($data['print_title_rows']) ? $data['print_title_rows'] : null;
        $this->container['right_margin'] = isset($data['right_margin']) ? $data['right_margin'] : null;
        $this->container['top_margin'] = isset($data['top_margin']) ? $data['top_margin'] : null;
        $this->container['zoom'] = isset($data['zoom']) ? $data['zoom'] : null;
        $this->container['header'] = isset($data['header']) ? $data['header'] : null;
        $this->container['footer'] = isset($data['footer']) ? $data['footer'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['black_and_white'] === null) {
            $invalidProperties[] = "'black_and_white' can't be null";
        }
        if ($this->container['bottom_margin'] === null) {
            $invalidProperties[] = "'bottom_margin' can't be null";
        }
        if ($this->container['center_horizontally'] === null) {
            $invalidProperties[] = "'center_horizontally' can't be null";
        }
        if ($this->container['center_vertically'] === null) {
            $invalidProperties[] = "'center_vertically' can't be null";
        }
        if ($this->container['first_page_number'] === null) {
            $invalidProperties[] = "'first_page_number' can't be null";
        }
        if ($this->container['fit_to_pages_tall'] === null) {
            $invalidProperties[] = "'fit_to_pages_tall' can't be null";
        }
        if ($this->container['fit_to_pages_wide'] === null) {
            $invalidProperties[] = "'fit_to_pages_wide' can't be null";
        }
        if ($this->container['footer_margin'] === null) {
            $invalidProperties[] = "'footer_margin' can't be null";
        }
        if ($this->container['header_margin'] === null) {
            $invalidProperties[] = "'header_margin' can't be null";
        }
        if ($this->container['is_auto_first_page_number'] === null) {
            $invalidProperties[] = "'is_auto_first_page_number' can't be null";
        }
        if ($this->container['is_hf_align_margins'] === null) {
            $invalidProperties[] = "'is_hf_align_margins' can't be null";
        }
        if ($this->container['is_hf_diff_first'] === null) {
            $invalidProperties[] = "'is_hf_diff_first' can't be null";
        }
        if ($this->container['is_hf_diff_odd_even'] === null) {
            $invalidProperties[] = "'is_hf_diff_odd_even' can't be null";
        }
        if ($this->container['is_hf_scale_with_doc'] === null) {
            $invalidProperties[] = "'is_hf_scale_with_doc' can't be null";
        }
        if ($this->container['is_percent_scale'] === null) {
            $invalidProperties[] = "'is_percent_scale' can't be null";
        }
        if ($this->container['left_margin'] === null) {
            $invalidProperties[] = "'left_margin' can't be null";
        }
        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        if ($this->container['orientation'] === null) {
            $invalidProperties[] = "'orientation' can't be null";
        }
        if ($this->container['paper_size'] === null) {
            $invalidProperties[] = "'paper_size' can't be null";
        }
        if ($this->container['print_area'] === null) {
            $invalidProperties[] = "'print_area' can't be null";
        }
        if ($this->container['print_comments'] === null) {
            $invalidProperties[] = "'print_comments' can't be null";
        }
        if ($this->container['print_copies'] === null) {
            $invalidProperties[] = "'print_copies' can't be null";
        }
        if ($this->container['print_draft'] === null) {
            $invalidProperties[] = "'print_draft' can't be null";
        }
        if ($this->container['print_errors'] === null) {
            $invalidProperties[] = "'print_errors' can't be null";
        }
        if ($this->container['print_gridlines'] === null) {
            $invalidProperties[] = "'print_gridlines' can't be null";
        }
        if ($this->container['print_headings'] === null) {
            $invalidProperties[] = "'print_headings' can't be null";
        }
        if ($this->container['print_quality'] === null) {
            $invalidProperties[] = "'print_quality' can't be null";
        }
        if ($this->container['print_title_columns'] === null) {
            $invalidProperties[] = "'print_title_columns' can't be null";
        }
        if ($this->container['print_title_rows'] === null) {
            $invalidProperties[] = "'print_title_rows' can't be null";
        }
        if ($this->container['right_margin'] === null) {
            $invalidProperties[] = "'right_margin' can't be null";
        }
        if ($this->container['top_margin'] === null) {
            $invalidProperties[] = "'top_margin' can't be null";
        }
        if ($this->container['zoom'] === null) {
            $invalidProperties[] = "'zoom' can't be null";
        }
        if ($this->container['header'] === null) {
            $invalidProperties[] = "'header' can't be null";
        }
        if ($this->container['footer'] === null) {
            $invalidProperties[] = "'footer' can't be null";
        }
        if ($this->container['link'] === null) {
            $invalidProperties[] = "'link' can't be null";
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
        if ($this->container['black_and_white'] === null) {
                    return false;
                }
        if ($this->container['bottom_margin'] === null) {
                    return false;
                }
        if ($this->container['center_horizontally'] === null) {
                    return false;
                }
        if ($this->container['center_vertically'] === null) {
                    return false;
                }
        if ($this->container['first_page_number'] === null) {
                    return false;
                }
        if ($this->container['fit_to_pages_tall'] === null) {
                    return false;
                }
        if ($this->container['fit_to_pages_wide'] === null) {
                    return false;
                }
        if ($this->container['footer_margin'] === null) {
                    return false;
                }
        if ($this->container['header_margin'] === null) {
                    return false;
                }
        if ($this->container['is_auto_first_page_number'] === null) {
                    return false;
                }
        if ($this->container['is_hf_align_margins'] === null) {
                    return false;
                }
        if ($this->container['is_hf_diff_first'] === null) {
                    return false;
                }
        if ($this->container['is_hf_diff_odd_even'] === null) {
                    return false;
                }
        if ($this->container['is_hf_scale_with_doc'] === null) {
                    return false;
                }
        if ($this->container['is_percent_scale'] === null) {
                    return false;
                }
        if ($this->container['left_margin'] === null) {
                    return false;
                }
        if ($this->container['order'] === null) {
                    return false;
                }
        if ($this->container['orientation'] === null) {
                    return false;
                }
        if ($this->container['paper_size'] === null) {
                    return false;
                }
        if ($this->container['print_area'] === null) {
                    return false;
                }
        if ($this->container['print_comments'] === null) {
                    return false;
                }
        if ($this->container['print_copies'] === null) {
                    return false;
                }
        if ($this->container['print_draft'] === null) {
                    return false;
                }
        if ($this->container['print_errors'] === null) {
                    return false;
                }
        if ($this->container['print_gridlines'] === null) {
                    return false;
                }
        if ($this->container['print_headings'] === null) {
                    return false;
                }
        if ($this->container['print_quality'] === null) {
                    return false;
                }
        if ($this->container['print_title_columns'] === null) {
                    return false;
                }
        if ($this->container['print_title_rows'] === null) {
                    return false;
                }
        if ($this->container['right_margin'] === null) {
                    return false;
                }
        if ($this->container['top_margin'] === null) {
                    return false;
                }
        if ($this->container['zoom'] === null) {
                    return false;
                }
        if ($this->container['header'] === null) {
                    return false;
                }
        if ($this->container['footer'] === null) {
                    return false;
                }
        if ($this->container['link'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets black_and_white
     *
     * @return bool
     */
    public function getBlackAndWhite()
    {
        return $this->container['black_and_white'];
    }

    /**
     * Sets black_and_white
     *
     *  Represents if elements of the document will be printed in black and white.
     *
     * @return $this
     */
    public function setBlackAndWhite($black_and_white)
    {
        $this->container['black_and_white'] = $black_and_white;

        return $this;
    }
   /**
     * Gets bottom_margin
     *
     * @return double
     */
    public function getBottomMargin()
    {
        return $this->container['bottom_margin'];
    }

    /**
     * Sets bottom_margin
     *
     *  Represents the size of the bottom margin, in unit of centimeters.
     *
     * @return $this
     */
    public function setBottomMargin($bottom_margin)
    {
        $this->container['bottom_margin'] = $bottom_margin;

        return $this;
    }
   /**
     * Gets center_horizontally
     *
     * @return bool
     */
    public function getCenterHorizontally()
    {
        return $this->container['center_horizontally'];
    }

    /**
     * Sets center_horizontally
     *
     *  Represent if the sheet is printed centered horizontally.
     *
     * @return $this
     */
    public function setCenterHorizontally($center_horizontally)
    {
        $this->container['center_horizontally'] = $center_horizontally;

        return $this;
    }
   /**
     * Gets center_vertically
     *
     * @return bool
     */
    public function getCenterVertically()
    {
        return $this->container['center_vertically'];
    }

    /**
     * Sets center_vertically
     *
     *  Represent if the sheet is printed centered vertically.
     *
     * @return $this
     */
    public function setCenterVertically($center_vertically)
    {
        $this->container['center_vertically'] = $center_vertically;

        return $this;
    }
   /**
     * Gets first_page_number
     *
     * @return int
     */
    public function getFirstPageNumber()
    {
        return $this->container['first_page_number'];
    }

    /**
     * Sets first_page_number
     *
     *  Represents the first page number that will be used when this sheet is printed.
     *
     * @return $this
     */
    public function setFirstPageNumber($first_page_number)
    {
        $this->container['first_page_number'] = $first_page_number;

        return $this;
    }
   /**
     * Gets fit_to_pages_tall
     *
     * @return int
     */
    public function getFitToPagesTall()
    {
        return $this->container['fit_to_pages_tall'];
    }

    /**
     * Sets fit_to_pages_tall
     *
     *  Represents  the number of pages tall the worksheet will be scaled to when it's printed.                        The default value is 1.
     *
     * @return $this
     */
    public function setFitToPagesTall($fit_to_pages_tall)
    {
        $this->container['fit_to_pages_tall'] = $fit_to_pages_tall;

        return $this;
    }
   /**
     * Gets fit_to_pages_wide
     *
     * @return int
     */
    public function getFitToPagesWide()
    {
        return $this->container['fit_to_pages_wide'];
    }

    /**
     * Sets fit_to_pages_wide
     *
     *  Represents the number of pages wide the worksheet will be scaled to when it's printed.                        The default value is 1.
     *
     * @return $this
     */
    public function setFitToPagesWide($fit_to_pages_wide)
    {
        $this->container['fit_to_pages_wide'] = $fit_to_pages_wide;

        return $this;
    }
   /**
     * Gets footer_margin
     *
     * @return double
     */
    public function getFooterMargin()
    {
        return $this->container['footer_margin'];
    }

    /**
     * Sets footer_margin
     *
     *  Represents the distance from the bottom of the page to the footer, in unit of centimeters.
     *
     * @return $this
     */
    public function setFooterMargin($footer_margin)
    {
        $this->container['footer_margin'] = $footer_margin;

        return $this;
    }
   /**
     * Gets header_margin
     *
     * @return double
     */
    public function getHeaderMargin()
    {
        return $this->container['header_margin'];
    }

    /**
     * Sets header_margin
     *
     *  Represents the distance from the top of the page to the header, in unit of centimeters.
     *
     * @return $this
     */
    public function setHeaderMargin($header_margin)
    {
        $this->container['header_margin'] = $header_margin;

        return $this;
    }
   /**
     * Gets is_auto_first_page_number
     *
     * @return bool
     */
    public function getIsAutoFirstPageNumber()
    {
        return $this->container['is_auto_first_page_number'];
    }

    /**
     * Sets is_auto_first_page_number
     *
     *  Indicates whether the first the page number is automatically assigned.
     *
     * @return $this
     */
    public function setIsAutoFirstPageNumber($is_auto_first_page_number)
    {
        $this->container['is_auto_first_page_number'] = $is_auto_first_page_number;

        return $this;
    }
   /**
     * Gets is_hf_align_margins
     *
     * @return bool
     */
    public function getIsHFAlignMargins()
    {
        return $this->container['is_hf_align_margins'];
    }

    /**
     * Sets is_hf_align_margins
     *
     *  Indicates whether header and footer margins are aligned with the page margins.                        If this property is true, the left header and footer will be aligned with the left margin,                        and the right header and footer will be aligned with the right margin.                        This option is enabled by default.
     *
     * @return $this
     */
    public function setIsHFAlignMargins($is_hf_align_margins)
    {
        $this->container['is_hf_align_margins'] = $is_hf_align_margins;

        return $this;
    }
   /**
     * Gets is_hf_diff_first
     *
     * @return bool
     */
    public function getIsHFDiffFirst()
    {
        return $this->container['is_hf_diff_first'];
    }

    /**
     * Sets is_hf_diff_first
     *
     *  True means that the header/footer of the first page is different with other pages.
     *
     * @return $this
     */
    public function setIsHFDiffFirst($is_hf_diff_first)
    {
        $this->container['is_hf_diff_first'] = $is_hf_diff_first;

        return $this;
    }
   /**
     * Gets is_hf_diff_odd_even
     *
     * @return bool
     */
    public function getIsHFDiffOddEven()
    {
        return $this->container['is_hf_diff_odd_even'];
    }

    /**
     * Sets is_hf_diff_odd_even
     *
     *  True means that the header/footer of the odd pages is different with odd pages.
     *
     * @return $this
     */
    public function setIsHFDiffOddEven($is_hf_diff_odd_even)
    {
        $this->container['is_hf_diff_odd_even'] = $is_hf_diff_odd_even;

        return $this;
    }
   /**
     * Gets is_hf_scale_with_doc
     *
     * @return bool
     */
    public function getIsHFScaleWithDoc()
    {
        return $this->container['is_hf_scale_with_doc'];
    }

    /**
     * Sets is_hf_scale_with_doc
     *
     *  Indicates whether header and footer are scaled with document scaling.                        Only applies for Excel 2007.
     *
     * @return $this
     */
    public function setIsHFScaleWithDoc($is_hf_scale_with_doc)
    {
        $this->container['is_hf_scale_with_doc'] = $is_hf_scale_with_doc;

        return $this;
    }
   /**
     * Gets is_percent_scale
     *
     * @return bool
     */
    public function getIsPercentScale()
    {
        return $this->container['is_percent_scale'];
    }

    /**
     * Sets is_percent_scale
     *
     *  If this property is False, the FitToPagesWide and FitToPagesTall properties control how the worksheet is scaled.
     *
     * @return $this
     */
    public function setIsPercentScale($is_percent_scale)
    {
        $this->container['is_percent_scale'] = $is_percent_scale;

        return $this;
    }
   /**
     * Gets left_margin
     *
     * @return double
     */
    public function getLeftMargin()
    {
        return $this->container['left_margin'];
    }

    /**
     * Sets left_margin
     *
     *  Represents the size of the left margin, in unit of centimeters.
     *
     * @return $this
     */
    public function setLeftMargin($left_margin)
    {
        $this->container['left_margin'] = $left_margin;

        return $this;
    }
   /**
     * Gets order
     *
     * @return string
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     *  Represents the order that Microsoft Excel uses to number pages when printing a large worksheet.
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }
   /**
     * Gets orientation
     *
     * @return string
     */
    public function getOrientation()
    {
        return $this->container['orientation'];
    }

    /**
     * Sets orientation
     *
     *  Represents page print orientation.
     *
     * @return $this
     */
    public function setOrientation($orientation)
    {
        $this->container['orientation'] = $orientation;

        return $this;
    }
   /**
     * Gets paper_size
     *
     * @return string
     */
    public function getPaperSize()
    {
        return $this->container['paper_size'];
    }

    /**
     * Sets paper_size
     *
     *  Represents the size of the paper.
     *
     * @return $this
     */
    public function setPaperSize($paper_size)
    {
        $this->container['paper_size'] = $paper_size;

        return $this;
    }
   /**
     * Gets print_area
     *
     * @return string
     */
    public function getPrintArea()
    {
        return $this->container['print_area'];
    }

    /**
     * Sets print_area
     *
     *  Represents the range to be printed.
     *
     * @return $this
     */
    public function setPrintArea($print_area)
    {
        $this->container['print_area'] = $print_area;

        return $this;
    }
   /**
     * Gets print_comments
     *
     * @return string
     */
    public function getPrintComments()
    {
        return $this->container['print_comments'];
    }

    /**
     * Sets print_comments
     *
     *  Represents the way comments are printed with the sheet.
     *
     * @return $this
     */
    public function setPrintComments($print_comments)
    {
        $this->container['print_comments'] = $print_comments;

        return $this;
    }
   /**
     * Gets print_copies
     *
     * @return int
     */
    public function getPrintCopies()
    {
        return $this->container['print_copies'];
    }

    /**
     * Sets print_copies
     *
     *  Get and sets number of copies to print.
     *
     * @return $this
     */
    public function setPrintCopies($print_copies)
    {
        $this->container['print_copies'] = $print_copies;

        return $this;
    }
   /**
     * Gets print_draft
     *
     * @return bool
     */
    public function getPrintDraft()
    {
        return $this->container['print_draft'];
    }

    /**
     * Sets print_draft
     *
     *  Represents if the sheet will be printed without graphics.
     *
     * @return $this
     */
    public function setPrintDraft($print_draft)
    {
        $this->container['print_draft'] = $print_draft;

        return $this;
    }
   /**
     * Gets print_errors
     *
     * @return string
     */
    public function getPrintErrors()
    {
        return $this->container['print_errors'];
    }

    /**
     * Sets print_errors
     *
     *  Specifies the type of print error displayed.
     *
     * @return $this
     */
    public function setPrintErrors($print_errors)
    {
        $this->container['print_errors'] = $print_errors;

        return $this;
    }
   /**
     * Gets print_gridlines
     *
     * @return bool
     */
    public function getPrintGridlines()
    {
        return $this->container['print_gridlines'];
    }

    /**
     * Sets print_gridlines
     *
     *  Represents if cell gridlines are printed on the page.
     *
     * @return $this
     */
    public function setPrintGridlines($print_gridlines)
    {
        $this->container['print_gridlines'] = $print_gridlines;

        return $this;
    }
   /**
     * Gets print_headings
     *
     * @return bool
     */
    public function getPrintHeadings()
    {
        return $this->container['print_headings'];
    }

    /**
     * Sets print_headings
     *
     *  Represents if row and column headings are printed with this page.
     *
     * @return $this
     */
    public function setPrintHeadings($print_headings)
    {
        $this->container['print_headings'] = $print_headings;

        return $this;
    }
   /**
     * Gets print_quality
     *
     * @return int
     */
    public function getPrintQuality()
    {
        return $this->container['print_quality'];
    }

    /**
     * Sets print_quality
     *
     *  Represents the print quality.
     *
     * @return $this
     */
    public function setPrintQuality($print_quality)
    {
        $this->container['print_quality'] = $print_quality;

        return $this;
    }
   /**
     * Gets print_title_columns
     *
     * @return string
     */
    public function getPrintTitleColumns()
    {
        return $this->container['print_title_columns'];
    }

    /**
     * Sets print_title_columns
     *
     *  Represents the columns that contain the cells to be repeated on the left side of each page.
     *
     * @return $this
     */
    public function setPrintTitleColumns($print_title_columns)
    {
        $this->container['print_title_columns'] = $print_title_columns;

        return $this;
    }
   /**
     * Gets print_title_rows
     *
     * @return string
     */
    public function getPrintTitleRows()
    {
        return $this->container['print_title_rows'];
    }

    /**
     * Sets print_title_rows
     *
     *  Represents the rows that contain the cells to be repeated at the top of each page.
     *
     * @return $this
     */
    public function setPrintTitleRows($print_title_rows)
    {
        $this->container['print_title_rows'] = $print_title_rows;

        return $this;
    }
   /**
     * Gets right_margin
     *
     * @return double
     */
    public function getRightMargin()
    {
        return $this->container['right_margin'];
    }

    /**
     * Sets right_margin
     *
     *  Represents the size of the right margin, in unit of centimeters.
     *
     * @return $this
     */
    public function setRightMargin($right_margin)
    {
        $this->container['right_margin'] = $right_margin;

        return $this;
    }
   /**
     * Gets top_margin
     *
     * @return double
     */
    public function getTopMargin()
    {
        return $this->container['top_margin'];
    }

    /**
     * Sets top_margin
     *
     *  Represents the size of the top margin, in unit of centimeters.
     *
     * @return $this
     */
    public function setTopMargin($top_margin)
    {
        $this->container['top_margin'] = $top_margin;

        return $this;
    }
   /**
     * Gets zoom
     *
     * @return int
     */
    public function getZoom()
    {
        return $this->container['zoom'];
    }

    /**
     * Sets zoom
     *
     *  Represents the scaling factor in percent. It should be between 10 and 400.
     *
     * @return $this
     */
    public function setZoom($zoom)
    {
        $this->container['zoom'] = $zoom;

        return $this;
    }
   /**
     * Gets header
     *
     * @return \Aspose\Cells\Cloud\Model\PageSection[]
     */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
     * Sets header
     *
     *  Represents the page header.
     *
     * @return $this
     */
    public function setHeader($header)
    {
        $this->container['header'] = $header;

        return $this;
    }
   /**
     * Gets footer
     *
     * @return \Aspose\Cells\Cloud\Model\PageSection[]
     */
    public function getFooter()
    {
        return $this->container['footer'];
    }

    /**
     * Sets footer
     *
     *  Represents the page footor.
     *
     * @return $this
     */
    public function setFooter($footer)
    {
        $this->container['footer'] = $footer;

        return $this;
    }
   /**
     * Gets link
     *
     * @return \Aspose\Cells\Cloud\Model\Link
     */
    public function getlink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     *  
     *
     * @return $this
     */
    public function setlink($link)
    {
        $this->container['link'] = $link;

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
