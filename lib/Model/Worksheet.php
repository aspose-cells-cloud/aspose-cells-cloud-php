<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Worksheet.cs">
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

class Worksheet
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Worksheet';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\Aspose\Cells\Cloud\Model\Link[]',
        'display_right_to_left' => 'bool',
        'display_zeros' => 'bool',
        'first_visible_column' => 'int',
        'first_visible_row' => 'int',
        'name' => 'string',
        'index' => 'int',
        'is_gridlines_visible' => 'bool',
        'is_outline_shown' => 'bool',
        'is_page_break_preview' => 'bool',
        'is_visible' => 'bool',
        'is_protected' => 'bool',
        'is_row_column_headers_visible' => 'bool',
        'is_ruler_visible' => 'bool',
        'is_selected' => 'bool',
        'tab_color' => '\Aspose\Cells\Cloud\Model\Color',
        'transition_entry' => 'bool',
        'transition_evaluation' => 'bool',
        'type' => 'string',
        'view_type' => 'string',
        'visibility_type' => 'string',
        'zoom' => 'int',
        'cells' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'charts' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'auto_shapes' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'ole_objects' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'comments' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'pictures' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'merged_cells' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'validations' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'conditional_formattings' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'hyperlinks' => '\Aspose\Cells\Cloud\Model\LinkElement'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null  ,
        'display_right_to_left' => null  ,
        'display_zeros' => null  ,
        'first_visible_column' => null  ,
        'first_visible_row' => null  ,
        'name' => null  ,
        'index' => null  ,
        'is_gridlines_visible' => null  ,
        'is_outline_shown' => null  ,
        'is_page_break_preview' => null  ,
        'is_visible' => null  ,
        'is_protected' => null  ,
        'is_row_column_headers_visible' => null  ,
        'is_ruler_visible' => null  ,
        'is_selected' => null  ,
        'tab_color' => null  ,
        'transition_entry' => null  ,
        'transition_evaluation' => null  ,
        'type' => null  ,
        'view_type' => null  ,
        'visibility_type' => null  ,
        'zoom' => null  ,
        'cells' => null  ,
        'charts' => null  ,
        'auto_shapes' => null  ,
        'ole_objects' => null  ,
        'comments' => null  ,
        'pictures' => null  ,
        'merged_cells' => null  ,
        'validations' => null  ,
        'conditional_formattings' => null  ,
        'hyperlinks' => null  
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
         'links' => 'Links' ,
         'display_right_to_left' => 'DisplayRightToLeft' ,
         'display_zeros' => 'DisplayZeros' ,
         'first_visible_column' => 'FirstVisibleColumn' ,
         'first_visible_row' => 'FirstVisibleRow' ,
         'name' => 'Name' ,
         'index' => 'Index' ,
         'is_gridlines_visible' => 'IsGridlinesVisible' ,
         'is_outline_shown' => 'IsOutlineShown' ,
         'is_page_break_preview' => 'IsPageBreakPreview' ,
         'is_visible' => 'IsVisible' ,
         'is_protected' => 'IsProtected' ,
         'is_row_column_headers_visible' => 'IsRowColumnHeadersVisible' ,
         'is_ruler_visible' => 'IsRulerVisible' ,
         'is_selected' => 'IsSelected' ,
         'tab_color' => 'TabColor' ,
         'transition_entry' => 'TransitionEntry' ,
         'transition_evaluation' => 'TransitionEvaluation' ,
         'type' => 'Type' ,
         'view_type' => 'ViewType' ,
         'visibility_type' => 'VisibilityType' ,
         'zoom' => 'Zoom' ,
         'cells' => 'Cells' ,
         'charts' => 'Charts' ,
         'auto_shapes' => 'AutoShapes' ,
         'ole_objects' => 'OleObjects' ,
         'comments' => 'Comments' ,
         'pictures' => 'Pictures' ,
         'merged_cells' => 'MergedCells' ,
         'validations' => 'Validations' ,
         'conditional_formattings' => 'ConditionalFormattings' ,
         'hyperlinks' => 'Hyperlinks' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks' ,
        'display_right_to_left' => 'setDisplayRightToLeft' ,
        'display_zeros' => 'setDisplayZeros' ,
        'first_visible_column' => 'setFirstVisibleColumn' ,
        'first_visible_row' => 'setFirstVisibleRow' ,
        'name' => 'setName' ,
        'index' => 'setIndex' ,
        'is_gridlines_visible' => 'setIsGridlinesVisible' ,
        'is_outline_shown' => 'setIsOutlineShown' ,
        'is_page_break_preview' => 'setIsPageBreakPreview' ,
        'is_visible' => 'setIsVisible' ,
        'is_protected' => 'setIsProtected' ,
        'is_row_column_headers_visible' => 'setIsRowColumnHeadersVisible' ,
        'is_ruler_visible' => 'setIsRulerVisible' ,
        'is_selected' => 'setIsSelected' ,
        'tab_color' => 'setTabColor' ,
        'transition_entry' => 'setTransitionEntry' ,
        'transition_evaluation' => 'setTransitionEvaluation' ,
        'type' => 'setType' ,
        'view_type' => 'setViewType' ,
        'visibility_type' => 'setVisibilityType' ,
        'zoom' => 'setZoom' ,
        'cells' => 'setCells' ,
        'charts' => 'setCharts' ,
        'auto_shapes' => 'setAutoShapes' ,
        'ole_objects' => 'setOleObjects' ,
        'comments' => 'setComments' ,
        'pictures' => 'setPictures' ,
        'merged_cells' => 'setMergedCells' ,
        'validations' => 'setValidations' ,
        'conditional_formattings' => 'setConditionalFormattings' ,
        'hyperlinks' => 'setHyperlinks' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks' ,
        'display_right_to_left' => 'getDisplayRightToLeft' ,
        'display_zeros' => 'getDisplayZeros' ,
        'first_visible_column' => 'getFirstVisibleColumn' ,
        'first_visible_row' => 'getFirstVisibleRow' ,
        'name' => 'getName' ,
        'index' => 'getIndex' ,
        'is_gridlines_visible' => 'getIsGridlinesVisible' ,
        'is_outline_shown' => 'getIsOutlineShown' ,
        'is_page_break_preview' => 'getIsPageBreakPreview' ,
        'is_visible' => 'getIsVisible' ,
        'is_protected' => 'getIsProtected' ,
        'is_row_column_headers_visible' => 'getIsRowColumnHeadersVisible' ,
        'is_ruler_visible' => 'getIsRulerVisible' ,
        'is_selected' => 'getIsSelected' ,
        'tab_color' => 'getTabColor' ,
        'transition_entry' => 'getTransitionEntry' ,
        'transition_evaluation' => 'getTransitionEvaluation' ,
        'type' => 'getType' ,
        'view_type' => 'getViewType' ,
        'visibility_type' => 'getVisibilityType' ,
        'zoom' => 'getZoom' ,
        'cells' => 'getCells' ,
        'charts' => 'getCharts' ,
        'auto_shapes' => 'getAutoShapes' ,
        'ole_objects' => 'getOleObjects' ,
        'comments' => 'getComments' ,
        'pictures' => 'getPictures' ,
        'merged_cells' => 'getMergedCells' ,
        'validations' => 'getValidations' ,
        'conditional_formattings' => 'getConditionalFormattings' ,
        'hyperlinks' => 'getHyperlinks' 
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['display_right_to_left'] = isset($data['display_right_to_left']) ? $data['display_right_to_left'] : null;
        $this->container['display_zeros'] = isset($data['display_zeros']) ? $data['display_zeros'] : null;
        $this->container['first_visible_column'] = isset($data['first_visible_column']) ? $data['first_visible_column'] : null;
        $this->container['first_visible_row'] = isset($data['first_visible_row']) ? $data['first_visible_row'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['is_gridlines_visible'] = isset($data['is_gridlines_visible']) ? $data['is_gridlines_visible'] : null;
        $this->container['is_outline_shown'] = isset($data['is_outline_shown']) ? $data['is_outline_shown'] : null;
        $this->container['is_page_break_preview'] = isset($data['is_page_break_preview']) ? $data['is_page_break_preview'] : null;
        $this->container['is_visible'] = isset($data['is_visible']) ? $data['is_visible'] : null;
        $this->container['is_protected'] = isset($data['is_protected']) ? $data['is_protected'] : null;
        $this->container['is_row_column_headers_visible'] = isset($data['is_row_column_headers_visible']) ? $data['is_row_column_headers_visible'] : null;
        $this->container['is_ruler_visible'] = isset($data['is_ruler_visible']) ? $data['is_ruler_visible'] : null;
        $this->container['is_selected'] = isset($data['is_selected']) ? $data['is_selected'] : null;
        $this->container['tab_color'] = isset($data['tab_color']) ? $data['tab_color'] : null;
        $this->container['transition_entry'] = isset($data['transition_entry']) ? $data['transition_entry'] : null;
        $this->container['transition_evaluation'] = isset($data['transition_evaluation']) ? $data['transition_evaluation'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['view_type'] = isset($data['view_type']) ? $data['view_type'] : null;
        $this->container['visibility_type'] = isset($data['visibility_type']) ? $data['visibility_type'] : null;
        $this->container['zoom'] = isset($data['zoom']) ? $data['zoom'] : null;
        $this->container['cells'] = isset($data['cells']) ? $data['cells'] : null;
        $this->container['charts'] = isset($data['charts']) ? $data['charts'] : null;
        $this->container['auto_shapes'] = isset($data['auto_shapes']) ? $data['auto_shapes'] : null;
        $this->container['ole_objects'] = isset($data['ole_objects']) ? $data['ole_objects'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['pictures'] = isset($data['pictures']) ? $data['pictures'] : null;
        $this->container['merged_cells'] = isset($data['merged_cells']) ? $data['merged_cells'] : null;
        $this->container['validations'] = isset($data['validations']) ? $data['validations'] : null;
        $this->container['conditional_formattings'] = isset($data['conditional_formattings']) ? $data['conditional_formattings'] : null;
        $this->container['hyperlinks'] = isset($data['hyperlinks']) ? $data['hyperlinks'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['links'] === null) {
            $invalidProperties[] = "'links' can't be null";
        }
        if ($this->container['display_right_to_left'] === null) {
            $invalidProperties[] = "'display_right_to_left' can't be null";
        }
        if ($this->container['display_zeros'] === null) {
            $invalidProperties[] = "'display_zeros' can't be null";
        }
        if ($this->container['first_visible_column'] === null) {
            $invalidProperties[] = "'first_visible_column' can't be null";
        }
        if ($this->container['first_visible_row'] === null) {
            $invalidProperties[] = "'first_visible_row' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['index'] === null) {
            $invalidProperties[] = "'index' can't be null";
        }
        if ($this->container['is_gridlines_visible'] === null) {
            $invalidProperties[] = "'is_gridlines_visible' can't be null";
        }
        if ($this->container['is_outline_shown'] === null) {
            $invalidProperties[] = "'is_outline_shown' can't be null";
        }
        if ($this->container['is_page_break_preview'] === null) {
            $invalidProperties[] = "'is_page_break_preview' can't be null";
        }
        if ($this->container['is_visible'] === null) {
            $invalidProperties[] = "'is_visible' can't be null";
        }
        if ($this->container['is_protected'] === null) {
            $invalidProperties[] = "'is_protected' can't be null";
        }
        if ($this->container['is_row_column_headers_visible'] === null) {
            $invalidProperties[] = "'is_row_column_headers_visible' can't be null";
        }
        if ($this->container['is_ruler_visible'] === null) {
            $invalidProperties[] = "'is_ruler_visible' can't be null";
        }
        if ($this->container['is_selected'] === null) {
            $invalidProperties[] = "'is_selected' can't be null";
        }
        if ($this->container['tab_color'] === null) {
            $invalidProperties[] = "'tab_color' can't be null";
        }
        if ($this->container['transition_entry'] === null) {
            $invalidProperties[] = "'transition_entry' can't be null";
        }
        if ($this->container['transition_evaluation'] === null) {
            $invalidProperties[] = "'transition_evaluation' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['view_type'] === null) {
            $invalidProperties[] = "'view_type' can't be null";
        }
        if ($this->container['visibility_type'] === null) {
            $invalidProperties[] = "'visibility_type' can't be null";
        }
        if ($this->container['zoom'] === null) {
            $invalidProperties[] = "'zoom' can't be null";
        }
        if ($this->container['cells'] === null) {
            $invalidProperties[] = "'cells' can't be null";
        }
        if ($this->container['charts'] === null) {
            $invalidProperties[] = "'charts' can't be null";
        }
        if ($this->container['auto_shapes'] === null) {
            $invalidProperties[] = "'auto_shapes' can't be null";
        }
        if ($this->container['ole_objects'] === null) {
            $invalidProperties[] = "'ole_objects' can't be null";
        }
        if ($this->container['comments'] === null) {
            $invalidProperties[] = "'comments' can't be null";
        }
        if ($this->container['pictures'] === null) {
            $invalidProperties[] = "'pictures' can't be null";
        }
        if ($this->container['merged_cells'] === null) {
            $invalidProperties[] = "'merged_cells' can't be null";
        }
        if ($this->container['validations'] === null) {
            $invalidProperties[] = "'validations' can't be null";
        }
        if ($this->container['conditional_formattings'] === null) {
            $invalidProperties[] = "'conditional_formattings' can't be null";
        }
        if ($this->container['hyperlinks'] === null) {
            $invalidProperties[] = "'hyperlinks' can't be null";
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
        if ($this->container['links'] === null) {
                    return false;
                }
        if ($this->container['display_right_to_left'] === null) {
                    return false;
                }
        if ($this->container['display_zeros'] === null) {
                    return false;
                }
        if ($this->container['first_visible_column'] === null) {
                    return false;
                }
        if ($this->container['first_visible_row'] === null) {
                    return false;
                }
        if ($this->container['name'] === null) {
                    return false;
                }
        if ($this->container['index'] === null) {
                    return false;
                }
        if ($this->container['is_gridlines_visible'] === null) {
                    return false;
                }
        if ($this->container['is_outline_shown'] === null) {
                    return false;
                }
        if ($this->container['is_page_break_preview'] === null) {
                    return false;
                }
        if ($this->container['is_visible'] === null) {
                    return false;
                }
        if ($this->container['is_protected'] === null) {
                    return false;
                }
        if ($this->container['is_row_column_headers_visible'] === null) {
                    return false;
                }
        if ($this->container['is_ruler_visible'] === null) {
                    return false;
                }
        if ($this->container['is_selected'] === null) {
                    return false;
                }
        if ($this->container['tab_color'] === null) {
                    return false;
                }
        if ($this->container['transition_entry'] === null) {
                    return false;
                }
        if ($this->container['transition_evaluation'] === null) {
                    return false;
                }
        if ($this->container['type'] === null) {
                    return false;
                }
        if ($this->container['view_type'] === null) {
                    return false;
                }
        if ($this->container['visibility_type'] === null) {
                    return false;
                }
        if ($this->container['zoom'] === null) {
                    return false;
                }
        if ($this->container['cells'] === null) {
                    return false;
                }
        if ($this->container['charts'] === null) {
                    return false;
                }
        if ($this->container['auto_shapes'] === null) {
                    return false;
                }
        if ($this->container['ole_objects'] === null) {
                    return false;
                }
        if ($this->container['comments'] === null) {
                    return false;
                }
        if ($this->container['pictures'] === null) {
                    return false;
                }
        if ($this->container['merged_cells'] === null) {
                    return false;
                }
        if ($this->container['validations'] === null) {
                    return false;
                }
        if ($this->container['conditional_formattings'] === null) {
                    return false;
                }
        if ($this->container['hyperlinks'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets links
     *
     * @return \Aspose\Cells\Cloud\Model\Link[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     *  
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }
   /**
     * Gets display_right_to_left
     *
     * @return bool
     */
    public function getDisplayRightToLeft()
    {
        return $this->container['display_right_to_left'];
    }

    /**
     * Sets display_right_to_left
     *
     *  Indicates if the specified worksheet is displayed from right to left instead of from left to right.            Default is false. 
     *
     * @return $this
     */
    public function setDisplayRightToLeft($display_right_to_left)
    {
        $this->container['display_right_to_left'] = $display_right_to_left;

        return $this;
    }
   /**
     * Gets display_zeros
     *
     * @return bool
     */
    public function getDisplayZeros()
    {
        return $this->container['display_zeros'];
    }

    /**
     * Sets display_zeros
     *
     *  True if zero values are displayed. 
     *
     * @return $this
     */
    public function setDisplayZeros($display_zeros)
    {
        $this->container['display_zeros'] = $display_zeros;

        return $this;
    }
   /**
     * Gets first_visible_column
     *
     * @return int
     */
    public function getFirstVisibleColumn()
    {
        return $this->container['first_visible_column'];
    }

    /**
     * Sets first_visible_column
     *
     *  Represents first visible column index. 
     *
     * @return $this
     */
    public function setFirstVisibleColumn($first_visible_column)
    {
        $this->container['first_visible_column'] = $first_visible_column;

        return $this;
    }
   /**
     * Gets first_visible_row
     *
     * @return int
     */
    public function getFirstVisibleRow()
    {
        return $this->container['first_visible_row'];
    }

    /**
     * Sets first_visible_row
     *
     *  Represents first visible row index. 
     *
     * @return $this
     */
    public function setFirstVisibleRow($first_visible_row)
    {
        $this->container['first_visible_row'] = $first_visible_row;

        return $this;
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
     *  Gets or sets the name of the worksheet. 
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }
   /**
     * Gets index
     *
     * @return int
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     *  Gets the index of sheet in the worksheet collection. 
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }
   /**
     * Gets is_gridlines_visible
     *
     * @return bool
     */
    public function getIsGridlinesVisible()
    {
        return $this->container['is_gridlines_visible'];
    }

    /**
     * Sets is_gridlines_visible
     *
     *  Gets or sets a value indicating whether the gridlines are visible.Default is true. 
     *
     * @return $this
     */
    public function setIsGridlinesVisible($is_gridlines_visible)
    {
        $this->container['is_gridlines_visible'] = $is_gridlines_visible;

        return $this;
    }
   /**
     * Gets is_outline_shown
     *
     * @return bool
     */
    public function getIsOutlineShown()
    {
        return $this->container['is_outline_shown'];
    }

    /**
     * Sets is_outline_shown
     *
     *  Indicates whether to show outline. 
     *
     * @return $this
     */
    public function setIsOutlineShown($is_outline_shown)
    {
        $this->container['is_outline_shown'] = $is_outline_shown;

        return $this;
    }
   /**
     * Gets is_page_break_preview
     *
     * @return bool
     */
    public function getIsPageBreakPreview()
    {
        return $this->container['is_page_break_preview'];
    }

    /**
     * Sets is_page_break_preview
     *
     *  Indicates whether the specified worksheet is shown in normal view or page break preview. 
     *
     * @return $this
     */
    public function setIsPageBreakPreview($is_page_break_preview)
    {
        $this->container['is_page_break_preview'] = $is_page_break_preview;

        return $this;
    }
   /**
     * Gets is_visible
     *
     * @return bool
     */
    public function getIsVisible()
    {
        return $this->container['is_visible'];
    }

    /**
     * Sets is_visible
     *
     *  Represents if the worksheet is visible. 
     *
     * @return $this
     */
    public function setIsVisible($is_visible)
    {
        $this->container['is_visible'] = $is_visible;

        return $this;
    }
   /**
     * Gets is_protected
     *
     * @return bool
     */
    public function getIsProtected()
    {
        return $this->container['is_protected'];
    }

    /**
     * Sets is_protected
     *
     *  Indicates if the worksheet is protected. 
     *
     * @return $this
     */
    public function setIsProtected($is_protected)
    {
        $this->container['is_protected'] = $is_protected;

        return $this;
    }
   /**
     * Gets is_row_column_headers_visible
     *
     * @return bool
     */
    public function getIsRowColumnHeadersVisible()
    {
        return $this->container['is_row_column_headers_visible'];
    }

    /**
     * Sets is_row_column_headers_visible
     *
     *  Gets or sets a value indicating whether the worksheet will display row and column headers.            Default is true. 
     *
     * @return $this
     */
    public function setIsRowColumnHeadersVisible($is_row_column_headers_visible)
    {
        $this->container['is_row_column_headers_visible'] = $is_row_column_headers_visible;

        return $this;
    }
   /**
     * Gets is_ruler_visible
     *
     * @return bool
     */
    public function getIsRulerVisible()
    {
        return $this->container['is_ruler_visible'];
    }

    /**
     * Sets is_ruler_visible
     *
     *  Indicates whether the ruler is visible. This property is only applied for page break preview. 
     *
     * @return $this
     */
    public function setIsRulerVisible($is_ruler_visible)
    {
        $this->container['is_ruler_visible'] = $is_ruler_visible;

        return $this;
    }
   /**
     * Gets is_selected
     *
     * @return bool
     */
    public function getIsSelected()
    {
        return $this->container['is_selected'];
    }

    /**
     * Sets is_selected
     *
     *  Indicates whether this worksheet is selected when the workbook is opened. 
     *
     * @return $this
     */
    public function setIsSelected($is_selected)
    {
        $this->container['is_selected'] = $is_selected;

        return $this;
    }
   /**
     * Gets tab_color
     *
     * @return \Aspose\Cells\Cloud\Model\Color
     */
    public function getTabColor()
    {
        return $this->container['tab_color'];
    }

    /**
     * Sets tab_color
     *
     *  Represents worksheet tab color. 
     *
     * @return $this
     */
    public function setTabColor($tab_color)
    {
        $this->container['tab_color'] = $tab_color;

        return $this;
    }
   /**
     * Gets transition_entry
     *
     * @return bool
     */
    public function getTransitionEntry()
    {
        return $this->container['transition_entry'];
    }

    /**
     * Sets transition_entry
     *
     *  Indicates whether the Transition Formula Entry (Lotus compatibility) option is enabled. 
     *
     * @return $this
     */
    public function setTransitionEntry($transition_entry)
    {
        $this->container['transition_entry'] = $transition_entry;

        return $this;
    }
   /**
     * Gets transition_evaluation
     *
     * @return bool
     */
    public function getTransitionEvaluation()
    {
        return $this->container['transition_evaluation'];
    }

    /**
     * Sets transition_evaluation
     *
     *  Indicates whether the Transition Formula Evaluation (Lotus compatibility) option is enabled. 
     *
     * @return $this
     */
    public function setTransitionEvaluation($transition_evaluation)
    {
        $this->container['transition_evaluation'] = $transition_evaluation;

        return $this;
    }
   /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     *  Represents worksheet type. 
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }
   /**
     * Gets view_type
     *
     * @return string
     */
    public function getViewType()
    {
        return $this->container['view_type'];
    }

    /**
     * Sets view_type
     *
     *  Gets and sets the view type. 
     *
     * @return $this
     */
    public function setViewType($view_type)
    {
        $this->container['view_type'] = $view_type;

        return $this;
    }
   /**
     * Gets visibility_type
     *
     * @return string
     */
    public function getVisibilityType()
    {
        return $this->container['visibility_type'];
    }

    /**
     * Sets visibility_type
     *
     *  Indicates the visible state for this sheet. 
     *
     * @return $this
     */
    public function setVisibilityType($visibility_type)
    {
        $this->container['visibility_type'] = $visibility_type;

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
     *  Represents the scaling factor in percentage. It should be between 10 and 400. 
     *
     * @return $this
     */
    public function setZoom($zoom)
    {
        $this->container['zoom'] = $zoom;

        return $this;
    }
   /**
     * Gets cells
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getCells()
    {
        return $this->container['cells'];
    }

    /**
     * Sets cells
     *
     *  Gets the  collection. 
     *
     * @return $this
     */
    public function setCells($cells)
    {
        $this->container['cells'] = $cells;

        return $this;
    }
   /**
     * Gets charts
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getCharts()
    {
        return $this->container['charts'];
    }

    /**
     * Sets charts
     *
     *  Gets a  collection 
     *
     * @return $this
     */
    public function setCharts($charts)
    {
        $this->container['charts'] = $charts;

        return $this;
    }
   /**
     * Gets auto_shapes
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getAutoShapes()
    {
        return $this->container['auto_shapes'];
    }

    /**
     * Sets auto_shapes
     *
     *  
     *
     * @return $this
     */
    public function setAutoShapes($auto_shapes)
    {
        $this->container['auto_shapes'] = $auto_shapes;

        return $this;
    }
   /**
     * Gets ole_objects
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getOleObjects()
    {
        return $this->container['ole_objects'];
    }

    /**
     * Sets ole_objects
     *
     *  Represents a collection of  in a worksheet. 
     *
     * @return $this
     */
    public function setOleObjects($ole_objects)
    {
        $this->container['ole_objects'] = $ole_objects;

        return $this;
    }
   /**
     * Gets comments
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     *  Gets the  collection. 
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }
   /**
     * Gets pictures
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getPictures()
    {
        return $this->container['pictures'];
    }

    /**
     * Sets pictures
     *
     *  Gets a  collection. 
     *
     * @return $this
     */
    public function setPictures($pictures)
    {
        $this->container['pictures'] = $pictures;

        return $this;
    }
   /**
     * Gets merged_cells
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getMergedCells()
    {
        return $this->container['merged_cells'];
    }

    /**
     * Sets merged_cells
     *
     *  
     *
     * @return $this
     */
    public function setMergedCells($merged_cells)
    {
        $this->container['merged_cells'] = $merged_cells;

        return $this;
    }
   /**
     * Gets validations
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getValidations()
    {
        return $this->container['validations'];
    }

    /**
     * Sets validations
     *
     *  Gets the data validation setting collection in the worksheet. 
     *
     * @return $this
     */
    public function setValidations($validations)
    {
        $this->container['validations'] = $validations;

        return $this;
    }
   /**
     * Gets conditional_formattings
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getConditionalFormattings()
    {
        return $this->container['conditional_formattings'];
    }

    /**
     * Sets conditional_formattings
     *
     *  Gets the ConditionalFormattings in the worksheet. 
     *
     * @return $this
     */
    public function setConditionalFormattings($conditional_formattings)
    {
        $this->container['conditional_formattings'] = $conditional_formattings;

        return $this;
    }
   /**
     * Gets hyperlinks
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getHyperlinks()
    {
        return $this->container['hyperlinks'];
    }

    /**
     * Sets hyperlinks
     *
     *  Gets the  collection. 
     *
     * @return $this
     */
    public function setHyperlinks($hyperlinks)
    {
        $this->container['hyperlinks'] = $hyperlinks;

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
