<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Chart.cs">
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

class Chart implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Chart';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_scaling' => 'bool',
        'back_wall' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'category_axis' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'chart_area' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'chart_data_table' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'chart_object' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'depth_percent' => 'int',
        'elevation' => 'int',
        'first_slice_angle' => 'int',
        'floor' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'gap_depth' => 'int',
        'gap_width' => 'int',
        'height_percent' => 'int',
        'hide_pivot_field_buttons' => 'bool',
        'is3_d' => 'bool',
        'is_rectangular_cornered' => 'bool',
        'legend' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'name' => 'string',
        'n_series' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'page_setup' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'perspective' => 'int',
        'pivot_source' => 'string',
        'placement' => 'string',
        'plot_area' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'plot_empty_cells_type' => 'string',
        'plot_visible_cells' => 'bool',
        'print_size' => 'string',
        'right_angle_axes' => 'bool',
        'rotation_angle' => 'int',
        'second_category_axis' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'second_value_axis' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'series_axis' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'shapes' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'show_data_table' => 'bool',
        'show_legend' => 'bool',
        'side_wall' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'size_with_window' => 'bool',
        'style' => 'int',
        'title' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'type' => 'string',
        'value_axis' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'walls' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'walls_and_gridlines2_d' => 'bool',
        'link' => '\Aspose\Cells\Cloud\Model\Link'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auto_scaling' => null  ,
        'back_wall' => null  ,
        'category_axis' => null  ,
        'chart_area' => null  ,
        'chart_data_table' => null  ,
        'chart_object' => null  ,
        'depth_percent' => null  ,
        'elevation' => null  ,
        'first_slice_angle' => null  ,
        'floor' => null  ,
        'gap_depth' => null  ,
        'gap_width' => null  ,
        'height_percent' => null  ,
        'hide_pivot_field_buttons' => null  ,
        'is3_d' => null  ,
        'is_rectangular_cornered' => null  ,
        'legend' => null  ,
        'name' => null  ,
        'n_series' => null  ,
        'page_setup' => null  ,
        'perspective' => null  ,
        'pivot_source' => null  ,
        'placement' => null  ,
        'plot_area' => null  ,
        'plot_empty_cells_type' => null  ,
        'plot_visible_cells' => null  ,
        'print_size' => null  ,
        'right_angle_axes' => null  ,
        'rotation_angle' => null  ,
        'second_category_axis' => null  ,
        'second_value_axis' => null  ,
        'series_axis' => null  ,
        'shapes' => null  ,
        'show_data_table' => null  ,
        'show_legend' => null  ,
        'side_wall' => null  ,
        'size_with_window' => null  ,
        'style' => null  ,
        'title' => null  ,
        'type' => null  ,
        'value_axis' => null  ,
        'walls' => null  ,
        'walls_and_gridlines2_d' => null  ,
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
         'auto_scaling' => 'AutoScaling' ,
         'back_wall' => 'BackWall' ,
         'category_axis' => 'CategoryAxis' ,
         'chart_area' => 'ChartArea' ,
         'chart_data_table' => 'ChartDataTable' ,
         'chart_object' => 'ChartObject' ,
         'depth_percent' => 'DepthPercent' ,
         'elevation' => 'Elevation' ,
         'first_slice_angle' => 'FirstSliceAngle' ,
         'floor' => 'Floor' ,
         'gap_depth' => 'GapDepth' ,
         'gap_width' => 'GapWidth' ,
         'height_percent' => 'HeightPercent' ,
         'hide_pivot_field_buttons' => 'HidePivotFieldButtons' ,
         'is3_d' => 'Is3D' ,
         'is_rectangular_cornered' => 'IsRectangularCornered' ,
         'legend' => 'Legend' ,
         'name' => 'Name' ,
         'n_series' => 'NSeries' ,
         'page_setup' => 'PageSetup' ,
         'perspective' => 'Perspective' ,
         'pivot_source' => 'PivotSource' ,
         'placement' => 'Placement' ,
         'plot_area' => 'PlotArea' ,
         'plot_empty_cells_type' => 'PlotEmptyCellsType' ,
         'plot_visible_cells' => 'PlotVisibleCells' ,
         'print_size' => 'PrintSize' ,
         'right_angle_axes' => 'RightAngleAxes' ,
         'rotation_angle' => 'RotationAngle' ,
         'second_category_axis' => 'SecondCategoryAxis' ,
         'second_value_axis' => 'SecondValueAxis' ,
         'series_axis' => 'SeriesAxis' ,
         'shapes' => 'Shapes' ,
         'show_data_table' => 'ShowDataTable' ,
         'show_legend' => 'ShowLegend' ,
         'side_wall' => 'SideWall' ,
         'size_with_window' => 'SizeWithWindow' ,
         'style' => 'Style' ,
         'title' => 'Title' ,
         'type' => 'Type' ,
         'value_axis' => 'ValueAxis' ,
         'walls' => 'Walls' ,
         'walls_and_gridlines2_d' => 'WallsAndGridlines2D' ,
         'link' => 'link' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_scaling' => 'setAutoScaling' ,
        'back_wall' => 'setBackWall' ,
        'category_axis' => 'setCategoryAxis' ,
        'chart_area' => 'setChartArea' ,
        'chart_data_table' => 'setChartDataTable' ,
        'chart_object' => 'setChartObject' ,
        'depth_percent' => 'setDepthPercent' ,
        'elevation' => 'setElevation' ,
        'first_slice_angle' => 'setFirstSliceAngle' ,
        'floor' => 'setFloor' ,
        'gap_depth' => 'setGapDepth' ,
        'gap_width' => 'setGapWidth' ,
        'height_percent' => 'setHeightPercent' ,
        'hide_pivot_field_buttons' => 'setHidePivotFieldButtons' ,
        'is3_d' => 'setIs3D' ,
        'is_rectangular_cornered' => 'setIsRectangularCornered' ,
        'legend' => 'setLegend' ,
        'name' => 'setName' ,
        'n_series' => 'setNSeries' ,
        'page_setup' => 'setPageSetup' ,
        'perspective' => 'setPerspective' ,
        'pivot_source' => 'setPivotSource' ,
        'placement' => 'setPlacement' ,
        'plot_area' => 'setPlotArea' ,
        'plot_empty_cells_type' => 'setPlotEmptyCellsType' ,
        'plot_visible_cells' => 'setPlotVisibleCells' ,
        'print_size' => 'setPrintSize' ,
        'right_angle_axes' => 'setRightAngleAxes' ,
        'rotation_angle' => 'setRotationAngle' ,
        'second_category_axis' => 'setSecondCategoryAxis' ,
        'second_value_axis' => 'setSecondValueAxis' ,
        'series_axis' => 'setSeriesAxis' ,
        'shapes' => 'setShapes' ,
        'show_data_table' => 'setShowDataTable' ,
        'show_legend' => 'setShowLegend' ,
        'side_wall' => 'setSideWall' ,
        'size_with_window' => 'setSizeWithWindow' ,
        'style' => 'setStyle' ,
        'title' => 'setTitle' ,
        'type' => 'setType' ,
        'value_axis' => 'setValueAxis' ,
        'walls' => 'setWalls' ,
        'walls_and_gridlines2_d' => 'setWallsAndGridlines2D' ,
        'link' => 'setlink' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_scaling' => 'getAutoScaling' ,
        'back_wall' => 'getBackWall' ,
        'category_axis' => 'getCategoryAxis' ,
        'chart_area' => 'getChartArea' ,
        'chart_data_table' => 'getChartDataTable' ,
        'chart_object' => 'getChartObject' ,
        'depth_percent' => 'getDepthPercent' ,
        'elevation' => 'getElevation' ,
        'first_slice_angle' => 'getFirstSliceAngle' ,
        'floor' => 'getFloor' ,
        'gap_depth' => 'getGapDepth' ,
        'gap_width' => 'getGapWidth' ,
        'height_percent' => 'getHeightPercent' ,
        'hide_pivot_field_buttons' => 'getHidePivotFieldButtons' ,
        'is3_d' => 'getIs3D' ,
        'is_rectangular_cornered' => 'getIsRectangularCornered' ,
        'legend' => 'getLegend' ,
        'name' => 'getName' ,
        'n_series' => 'getNSeries' ,
        'page_setup' => 'getPageSetup' ,
        'perspective' => 'getPerspective' ,
        'pivot_source' => 'getPivotSource' ,
        'placement' => 'getPlacement' ,
        'plot_area' => 'getPlotArea' ,
        'plot_empty_cells_type' => 'getPlotEmptyCellsType' ,
        'plot_visible_cells' => 'getPlotVisibleCells' ,
        'print_size' => 'getPrintSize' ,
        'right_angle_axes' => 'getRightAngleAxes' ,
        'rotation_angle' => 'getRotationAngle' ,
        'second_category_axis' => 'getSecondCategoryAxis' ,
        'second_value_axis' => 'getSecondValueAxis' ,
        'series_axis' => 'getSeriesAxis' ,
        'shapes' => 'getShapes' ,
        'show_data_table' => 'getShowDataTable' ,
        'show_legend' => 'getShowLegend' ,
        'side_wall' => 'getSideWall' ,
        'size_with_window' => 'getSizeWithWindow' ,
        'style' => 'getStyle' ,
        'title' => 'getTitle' ,
        'type' => 'getType' ,
        'value_axis' => 'getValueAxis' ,
        'walls' => 'getWalls' ,
        'walls_and_gridlines2_d' => 'getWallsAndGridlines2D' ,
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
        $this->container['auto_scaling'] = isset($data['auto_scaling']) ? $data['auto_scaling'] : null;
        $this->container['back_wall'] = isset($data['back_wall']) ? $data['back_wall'] : null;
        $this->container['category_axis'] = isset($data['category_axis']) ? $data['category_axis'] : null;
        $this->container['chart_area'] = isset($data['chart_area']) ? $data['chart_area'] : null;
        $this->container['chart_data_table'] = isset($data['chart_data_table']) ? $data['chart_data_table'] : null;
        $this->container['chart_object'] = isset($data['chart_object']) ? $data['chart_object'] : null;
        $this->container['depth_percent'] = isset($data['depth_percent']) ? $data['depth_percent'] : null;
        $this->container['elevation'] = isset($data['elevation']) ? $data['elevation'] : null;
        $this->container['first_slice_angle'] = isset($data['first_slice_angle']) ? $data['first_slice_angle'] : null;
        $this->container['floor'] = isset($data['floor']) ? $data['floor'] : null;
        $this->container['gap_depth'] = isset($data['gap_depth']) ? $data['gap_depth'] : null;
        $this->container['gap_width'] = isset($data['gap_width']) ? $data['gap_width'] : null;
        $this->container['height_percent'] = isset($data['height_percent']) ? $data['height_percent'] : null;
        $this->container['hide_pivot_field_buttons'] = isset($data['hide_pivot_field_buttons']) ? $data['hide_pivot_field_buttons'] : null;
        $this->container['is3_d'] = isset($data['is3_d']) ? $data['is3_d'] : null;
        $this->container['is_rectangular_cornered'] = isset($data['is_rectangular_cornered']) ? $data['is_rectangular_cornered'] : null;
        $this->container['legend'] = isset($data['legend']) ? $data['legend'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['n_series'] = isset($data['n_series']) ? $data['n_series'] : null;
        $this->container['page_setup'] = isset($data['page_setup']) ? $data['page_setup'] : null;
        $this->container['perspective'] = isset($data['perspective']) ? $data['perspective'] : null;
        $this->container['pivot_source'] = isset($data['pivot_source']) ? $data['pivot_source'] : null;
        $this->container['placement'] = isset($data['placement']) ? $data['placement'] : null;
        $this->container['plot_area'] = isset($data['plot_area']) ? $data['plot_area'] : null;
        $this->container['plot_empty_cells_type'] = isset($data['plot_empty_cells_type']) ? $data['plot_empty_cells_type'] : null;
        $this->container['plot_visible_cells'] = isset($data['plot_visible_cells']) ? $data['plot_visible_cells'] : null;
        $this->container['print_size'] = isset($data['print_size']) ? $data['print_size'] : null;
        $this->container['right_angle_axes'] = isset($data['right_angle_axes']) ? $data['right_angle_axes'] : null;
        $this->container['rotation_angle'] = isset($data['rotation_angle']) ? $data['rotation_angle'] : null;
        $this->container['second_category_axis'] = isset($data['second_category_axis']) ? $data['second_category_axis'] : null;
        $this->container['second_value_axis'] = isset($data['second_value_axis']) ? $data['second_value_axis'] : null;
        $this->container['series_axis'] = isset($data['series_axis']) ? $data['series_axis'] : null;
        $this->container['shapes'] = isset($data['shapes']) ? $data['shapes'] : null;
        $this->container['show_data_table'] = isset($data['show_data_table']) ? $data['show_data_table'] : null;
        $this->container['show_legend'] = isset($data['show_legend']) ? $data['show_legend'] : null;
        $this->container['side_wall'] = isset($data['side_wall']) ? $data['side_wall'] : null;
        $this->container['size_with_window'] = isset($data['size_with_window']) ? $data['size_with_window'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['value_axis'] = isset($data['value_axis']) ? $data['value_axis'] : null;
        $this->container['walls'] = isset($data['walls']) ? $data['walls'] : null;
        $this->container['walls_and_gridlines2_d'] = isset($data['walls_and_gridlines2_d']) ? $data['walls_and_gridlines2_d'] : null;
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
        if ($this->container['auto_scaling'] === null) {
            $invalidProperties[] = "'auto_scaling' can't be null";
        }
        if ($this->container['back_wall'] === null) {
            $invalidProperties[] = "'back_wall' can't be null";
        }
        if ($this->container['category_axis'] === null) {
            $invalidProperties[] = "'category_axis' can't be null";
        }
        if ($this->container['chart_area'] === null) {
            $invalidProperties[] = "'chart_area' can't be null";
        }
        if ($this->container['chart_data_table'] === null) {
            $invalidProperties[] = "'chart_data_table' can't be null";
        }
        if ($this->container['chart_object'] === null) {
            $invalidProperties[] = "'chart_object' can't be null";
        }
        if ($this->container['depth_percent'] === null) {
            $invalidProperties[] = "'depth_percent' can't be null";
        }
        if ($this->container['elevation'] === null) {
            $invalidProperties[] = "'elevation' can't be null";
        }
        if ($this->container['first_slice_angle'] === null) {
            $invalidProperties[] = "'first_slice_angle' can't be null";
        }
        if ($this->container['floor'] === null) {
            $invalidProperties[] = "'floor' can't be null";
        }
        if ($this->container['gap_depth'] === null) {
            $invalidProperties[] = "'gap_depth' can't be null";
        }
        if ($this->container['gap_width'] === null) {
            $invalidProperties[] = "'gap_width' can't be null";
        }
        if ($this->container['height_percent'] === null) {
            $invalidProperties[] = "'height_percent' can't be null";
        }
        if ($this->container['hide_pivot_field_buttons'] === null) {
            $invalidProperties[] = "'hide_pivot_field_buttons' can't be null";
        }
        if ($this->container['is3_d'] === null) {
            $invalidProperties[] = "'is3_d' can't be null";
        }
        if ($this->container['is_rectangular_cornered'] === null) {
            $invalidProperties[] = "'is_rectangular_cornered' can't be null";
        }
        if ($this->container['legend'] === null) {
            $invalidProperties[] = "'legend' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['n_series'] === null) {
            $invalidProperties[] = "'n_series' can't be null";
        }
        if ($this->container['page_setup'] === null) {
            $invalidProperties[] = "'page_setup' can't be null";
        }
        if ($this->container['perspective'] === null) {
            $invalidProperties[] = "'perspective' can't be null";
        }
        if ($this->container['pivot_source'] === null) {
            $invalidProperties[] = "'pivot_source' can't be null";
        }
        if ($this->container['placement'] === null) {
            $invalidProperties[] = "'placement' can't be null";
        }
        if ($this->container['plot_area'] === null) {
            $invalidProperties[] = "'plot_area' can't be null";
        }
        if ($this->container['plot_empty_cells_type'] === null) {
            $invalidProperties[] = "'plot_empty_cells_type' can't be null";
        }
        if ($this->container['plot_visible_cells'] === null) {
            $invalidProperties[] = "'plot_visible_cells' can't be null";
        }
        if ($this->container['print_size'] === null) {
            $invalidProperties[] = "'print_size' can't be null";
        }
        if ($this->container['right_angle_axes'] === null) {
            $invalidProperties[] = "'right_angle_axes' can't be null";
        }
        if ($this->container['rotation_angle'] === null) {
            $invalidProperties[] = "'rotation_angle' can't be null";
        }
        if ($this->container['second_category_axis'] === null) {
            $invalidProperties[] = "'second_category_axis' can't be null";
        }
        if ($this->container['second_value_axis'] === null) {
            $invalidProperties[] = "'second_value_axis' can't be null";
        }
        if ($this->container['series_axis'] === null) {
            $invalidProperties[] = "'series_axis' can't be null";
        }
        if ($this->container['shapes'] === null) {
            $invalidProperties[] = "'shapes' can't be null";
        }
        if ($this->container['show_data_table'] === null) {
            $invalidProperties[] = "'show_data_table' can't be null";
        }
        if ($this->container['show_legend'] === null) {
            $invalidProperties[] = "'show_legend' can't be null";
        }
        if ($this->container['side_wall'] === null) {
            $invalidProperties[] = "'side_wall' can't be null";
        }
        if ($this->container['size_with_window'] === null) {
            $invalidProperties[] = "'size_with_window' can't be null";
        }
        if ($this->container['style'] === null) {
            $invalidProperties[] = "'style' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['value_axis'] === null) {
            $invalidProperties[] = "'value_axis' can't be null";
        }
        if ($this->container['walls'] === null) {
            $invalidProperties[] = "'walls' can't be null";
        }
        if ($this->container['walls_and_gridlines2_d'] === null) {
            $invalidProperties[] = "'walls_and_gridlines2_d' can't be null";
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
        if ($this->container['auto_scaling'] === null) {
                    return false;
                }
        if ($this->container['back_wall'] === null) {
                    return false;
                }
        if ($this->container['category_axis'] === null) {
                    return false;
                }
        if ($this->container['chart_area'] === null) {
                    return false;
                }
        if ($this->container['chart_data_table'] === null) {
                    return false;
                }
        if ($this->container['chart_object'] === null) {
                    return false;
                }
        if ($this->container['depth_percent'] === null) {
                    return false;
                }
        if ($this->container['elevation'] === null) {
                    return false;
                }
        if ($this->container['first_slice_angle'] === null) {
                    return false;
                }
        if ($this->container['floor'] === null) {
                    return false;
                }
        if ($this->container['gap_depth'] === null) {
                    return false;
                }
        if ($this->container['gap_width'] === null) {
                    return false;
                }
        if ($this->container['height_percent'] === null) {
                    return false;
                }
        if ($this->container['hide_pivot_field_buttons'] === null) {
                    return false;
                }
        if ($this->container['is3_d'] === null) {
                    return false;
                }
        if ($this->container['is_rectangular_cornered'] === null) {
                    return false;
                }
        if ($this->container['legend'] === null) {
                    return false;
                }
        if ($this->container['name'] === null) {
                    return false;
                }
        if ($this->container['n_series'] === null) {
                    return false;
                }
        if ($this->container['page_setup'] === null) {
                    return false;
                }
        if ($this->container['perspective'] === null) {
                    return false;
                }
        if ($this->container['pivot_source'] === null) {
                    return false;
                }
        if ($this->container['placement'] === null) {
                    return false;
                }
        if ($this->container['plot_area'] === null) {
                    return false;
                }
        if ($this->container['plot_empty_cells_type'] === null) {
                    return false;
                }
        if ($this->container['plot_visible_cells'] === null) {
                    return false;
                }
        if ($this->container['print_size'] === null) {
                    return false;
                }
        if ($this->container['right_angle_axes'] === null) {
                    return false;
                }
        if ($this->container['rotation_angle'] === null) {
                    return false;
                }
        if ($this->container['second_category_axis'] === null) {
                    return false;
                }
        if ($this->container['second_value_axis'] === null) {
                    return false;
                }
        if ($this->container['series_axis'] === null) {
                    return false;
                }
        if ($this->container['shapes'] === null) {
                    return false;
                }
        if ($this->container['show_data_table'] === null) {
                    return false;
                }
        if ($this->container['show_legend'] === null) {
                    return false;
                }
        if ($this->container['side_wall'] === null) {
                    return false;
                }
        if ($this->container['size_with_window'] === null) {
                    return false;
                }
        if ($this->container['style'] === null) {
                    return false;
                }
        if ($this->container['title'] === null) {
                    return false;
                }
        if ($this->container['type'] === null) {
                    return false;
                }
        if ($this->container['value_axis'] === null) {
                    return false;
                }
        if ($this->container['walls'] === null) {
                    return false;
                }
        if ($this->container['walls_and_gridlines2_d'] === null) {
                    return false;
                }
        if ($this->container['link'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets auto_scaling
     *
     * @return bool
     */
    public function getAutoScaling()
    {
        return $this->container['auto_scaling'];
    }

    /**
     * Sets auto_scaling
     *
     *  True if Microsoft Excel scales a 3-D chart so that it's closer in size to the equivalent 2-D chart.                         The RightAngleAxes property must be True.
     *
     * @return $this
     */
    public function setAutoScaling($auto_scaling)
    {
        $this->container['auto_scaling'] = $auto_scaling;

        return $this;
    }
   /**
     * Gets back_wall
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getBackWall()
    {
        return $this->container['back_wall'];
    }

    /**
     * Sets back_wall
     *
     *  Returns a  object that represents the back wall of a 3-D chart.
     *
     * @return $this
     */
    public function setBackWall($back_wall)
    {
        $this->container['back_wall'] = $back_wall;

        return $this;
    }
   /**
     * Gets category_axis
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getCategoryAxis()
    {
        return $this->container['category_axis'];
    }

    /**
     * Sets category_axis
     *
     *  Gets the chart's X axis.
     *
     * @return $this
     */
    public function setCategoryAxis($category_axis)
    {
        $this->container['category_axis'] = $category_axis;

        return $this;
    }
   /**
     * Gets chart_area
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getChartArea()
    {
        return $this->container['chart_area'];
    }

    /**
     * Sets chart_area
     *
     *  Gets the chart area in the worksheet.
     *
     * @return $this
     */
    public function setChartArea($chart_area)
    {
        $this->container['chart_area'] = $chart_area;

        return $this;
    }
   /**
     * Gets chart_data_table
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getChartDataTable()
    {
        return $this->container['chart_data_table'];
    }

    /**
     * Sets chart_data_table
     *
     *  Represents the chart data table.
     *
     * @return $this
     */
    public function setChartDataTable($chart_data_table)
    {
        $this->container['chart_data_table'] = $chart_data_table;

        return $this;
    }
   /**
     * Gets chart_object
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getChartObject()
    {
        return $this->container['chart_object'];
    }

    /**
     * Sets chart_object
     *
     *  Represents the chartShape;
     *
     * @return $this
     */
    public function setChartObject($chart_object)
    {
        $this->container['chart_object'] = $chart_object;

        return $this;
    }
   /**
     * Gets depth_percent
     *
     * @return int
     */
    public function getDepthPercent()
    {
        return $this->container['depth_percent'];
    }

    /**
     * Sets depth_percent
     *
     *  Represents the depth of a 3-D chart as a percentage of the chart width (between 20 and 2000 percent).
     *
     * @return $this
     */
    public function setDepthPercent($depth_percent)
    {
        $this->container['depth_percent'] = $depth_percent;

        return $this;
    }
   /**
     * Gets elevation
     *
     * @return int
     */
    public function getElevation()
    {
        return $this->container['elevation'];
    }

    /**
     * Sets elevation
     *
     *  Represents the elevation of the 3-D chart view, in degrees.
     *
     * @return $this
     */
    public function setElevation($elevation)
    {
        $this->container['elevation'] = $elevation;

        return $this;
    }
   /**
     * Gets first_slice_angle
     *
     * @return int
     */
    public function getFirstSliceAngle()
    {
        return $this->container['first_slice_angle'];
    }

    /**
     * Sets first_slice_angle
     *
     *  Gets or sets the angle of the first pie-chart or doughnut-chart slice, in degrees (clockwise from vertical).                         Applies only to pie, 3-D pie, and doughnut charts, 0 to 360.
     *
     * @return $this
     */
    public function setFirstSliceAngle($first_slice_angle)
    {
        $this->container['first_slice_angle'] = $first_slice_angle;

        return $this;
    }
   /**
     * Gets floor
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getFloor()
    {
        return $this->container['floor'];
    }

    /**
     * Sets floor
     *
     *  Returns a  object that represents the walls of a 3-D chart.
     *
     * @return $this
     */
    public function setFloor($floor)
    {
        $this->container['floor'] = $floor;

        return $this;
    }
   /**
     * Gets gap_depth
     *
     * @return int
     */
    public function getGapDepth()
    {
        return $this->container['gap_depth'];
    }

    /**
     * Sets gap_depth
     *
     *  Gets or sets the distance between the data series in a 3-D chart, as a percentage of the marker width.                        The value of this property must be between 0 and 500.
     *
     * @return $this
     */
    public function setGapDepth($gap_depth)
    {
        $this->container['gap_depth'] = $gap_depth;

        return $this;
    }
   /**
     * Gets gap_width
     *
     * @return int
     */
    public function getGapWidth()
    {
        return $this->container['gap_width'];
    }

    /**
     * Sets gap_width
     *
     *  Returns or sets the space between bar or column clusters, as a percentage of the bar or column width.                        The value of this property must be between 0 and 500.
     *
     * @return $this
     */
    public function setGapWidth($gap_width)
    {
        $this->container['gap_width'] = $gap_width;

        return $this;
    }
   /**
     * Gets height_percent
     *
     * @return int
     */
    public function getHeightPercent()
    {
        return $this->container['height_percent'];
    }

    /**
     * Sets height_percent
     *
     *  Returns or sets the height of a 3-D chart as a percentage of the chart width (between 5 and 500 percent).
     *
     * @return $this
     */
    public function setHeightPercent($height_percent)
    {
        $this->container['height_percent'] = $height_percent;

        return $this;
    }
   /**
     * Gets hide_pivot_field_buttons
     *
     * @return bool
     */
    public function getHidePivotFieldButtons()
    {
        return $this->container['hide_pivot_field_buttons'];
    }

    /**
     * Sets hide_pivot_field_buttons
     *
     *  Indicates whether hide the pivot chart field buttons only when the chart is PivotChart.
     *
     * @return $this
     */
    public function setHidePivotFieldButtons($hide_pivot_field_buttons)
    {
        $this->container['hide_pivot_field_buttons'] = $hide_pivot_field_buttons;

        return $this;
    }
   /**
     * Gets is3_d
     *
     * @return bool
     */
    public function getIs3D()
    {
        return $this->container['is3_d'];
    }

    /**
     * Sets is3_d
     *
     *  Indicates whether the chart is a 3d chart.
     *
     * @return $this
     */
    public function setIs3D($is3_d)
    {
        $this->container['is3_d'] = $is3_d;

        return $this;
    }
   /**
     * Gets is_rectangular_cornered
     *
     * @return bool
     */
    public function getIsRectangularCornered()
    {
        return $this->container['is_rectangular_cornered'];
    }

    /**
     * Sets is_rectangular_cornered
     *
     *  Gets or sets a value indicating whether the chart area is rectangular cornered.                        Default is true.
     *
     * @return $this
     */
    public function setIsRectangularCornered($is_rectangular_cornered)
    {
        $this->container['is_rectangular_cornered'] = $is_rectangular_cornered;

        return $this;
    }
   /**
     * Gets legend
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getLegend()
    {
        return $this->container['legend'];
    }

    /**
     * Sets legend
     *
     *  Gets the chart legend.
     *
     * @return $this
     */
    public function setLegend($legend)
    {
        $this->container['legend'] = $legend;

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
     *  Gets and sets the name of the chart.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }
   /**
     * Gets n_series
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getNSeries()
    {
        return $this->container['n_series'];
    }

    /**
     * Sets n_series
     *
     *  Gets a  collection representing the data series in the chart.
     *
     * @return $this
     */
    public function setNSeries($n_series)
    {
        $this->container['n_series'] = $n_series;

        return $this;
    }
   /**
     * Gets page_setup
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getPageSetup()
    {
        return $this->container['page_setup'];
    }

    /**
     * Sets page_setup
     *
     *  Represents the page setup description in this chart.
     *
     * @return $this
     */
    public function setPageSetup($page_setup)
    {
        $this->container['page_setup'] = $page_setup;

        return $this;
    }
   /**
     * Gets perspective
     *
     * @return int
     */
    public function getPerspective()
    {
        return $this->container['perspective'];
    }

    /**
     * Sets perspective
     *
     *  Returns or sets the perspective for the 3-D chart view. Must be between 0 and 100.                        This property is ignored if the RightAngleAxes property is True.
     *
     * @return $this
     */
    public function setPerspective($perspective)
    {
        $this->container['perspective'] = $perspective;

        return $this;
    }
   /**
     * Gets pivot_source
     *
     * @return string
     */
    public function getPivotSource()
    {
        return $this->container['pivot_source'];
    }

    /**
     * Sets pivot_source
     *
     *  The source is the data of the pivotTable.                        If PivotSource is not empty ,the chart is PivotChart.
     *
     * @return $this
     */
    public function setPivotSource($pivot_source)
    {
        $this->container['pivot_source'] = $pivot_source;

        return $this;
    }
   /**
     * Gets placement
     *
     * @return string
     */
    public function getPlacement()
    {
        return $this->container['placement'];
    }

    /**
     * Sets placement
     *
     *  Represents the way the chart is attached to the cells below it.
     *
     * @return $this
     */
    public function setPlacement($placement)
    {
        $this->container['placement'] = $placement;

        return $this;
    }
   /**
     * Gets plot_area
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getPlotArea()
    {
        return $this->container['plot_area'];
    }

    /**
     * Sets plot_area
     *
     *  Gets the chart's plot area which includes axis tick labels.
     *
     * @return $this
     */
    public function setPlotArea($plot_area)
    {
        $this->container['plot_area'] = $plot_area;

        return $this;
    }
   /**
     * Gets plot_empty_cells_type
     *
     * @return string
     */
    public function getPlotEmptyCellsType()
    {
        return $this->container['plot_empty_cells_type'];
    }

    /**
     * Sets plot_empty_cells_type
     *
     *  Gets and sets  how to plot the empty cells.
     *
     * @return $this
     */
    public function setPlotEmptyCellsType($plot_empty_cells_type)
    {
        $this->container['plot_empty_cells_type'] = $plot_empty_cells_type;

        return $this;
    }
   /**
     * Gets plot_visible_cells
     *
     * @return bool
     */
    public function getPlotVisibleCells()
    {
        return $this->container['plot_visible_cells'];
    }

    /**
     * Sets plot_visible_cells
     *
     *  Indicates whether only plot visible cells.
     *
     * @return $this
     */
    public function setPlotVisibleCells($plot_visible_cells)
    {
        $this->container['plot_visible_cells'] = $plot_visible_cells;

        return $this;
    }
   /**
     * Gets print_size
     *
     * @return string
     */
    public function getPrintSize()
    {
        return $this->container['print_size'];
    }

    /**
     * Sets print_size
     *
     *  Gets and sets the printed chart size.
     *
     * @return $this
     */
    public function setPrintSize($print_size)
    {
        $this->container['print_size'] = $print_size;

        return $this;
    }
   /**
     * Gets right_angle_axes
     *
     * @return bool
     */
    public function getRightAngleAxes()
    {
        return $this->container['right_angle_axes'];
    }

    /**
     * Sets right_angle_axes
     *
     *  True if the chart axes are at right angles. Applies only for 3-D charts(except Column3D and 3-D Pie Charts).
     *
     * @return $this
     */
    public function setRightAngleAxes($right_angle_axes)
    {
        $this->container['right_angle_axes'] = $right_angle_axes;

        return $this;
    }
   /**
     * Gets rotation_angle
     *
     * @return int
     */
    public function getRotationAngle()
    {
        return $this->container['rotation_angle'];
    }

    /**
     * Sets rotation_angle
     *
     *  Represents the rotation of the 3-D chart view (the rotation of the plot area around the z-axis, in degrees).
     *
     * @return $this
     */
    public function setRotationAngle($rotation_angle)
    {
        $this->container['rotation_angle'] = $rotation_angle;

        return $this;
    }
   /**
     * Gets second_category_axis
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getSecondCategoryAxis()
    {
        return $this->container['second_category_axis'];
    }

    /**
     * Sets second_category_axis
     *
     *  Gets the chart's second X axis.
     *
     * @return $this
     */
    public function setSecondCategoryAxis($second_category_axis)
    {
        $this->container['second_category_axis'] = $second_category_axis;

        return $this;
    }
   /**
     * Gets second_value_axis
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getSecondValueAxis()
    {
        return $this->container['second_value_axis'];
    }

    /**
     * Sets second_value_axis
     *
     *  Gets the chart's second Y axis.
     *
     * @return $this
     */
    public function setSecondValueAxis($second_value_axis)
    {
        $this->container['second_value_axis'] = $second_value_axis;

        return $this;
    }
   /**
     * Gets series_axis
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getSeriesAxis()
    {
        return $this->container['series_axis'];
    }

    /**
     * Sets series_axis
     *
     *  Gets the chart's series axis.
     *
     * @return $this
     */
    public function setSeriesAxis($series_axis)
    {
        $this->container['series_axis'] = $series_axis;

        return $this;
    }
   /**
     * Gets shapes
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getShapes()
    {
        return $this->container['shapes'];
    }

    /**
     * Sets shapes
     *
     *  Returns all drawing shapes in this chart.
     *
     * @return $this
     */
    public function setShapes($shapes)
    {
        $this->container['shapes'] = $shapes;

        return $this;
    }
   /**
     * Gets show_data_table
     *
     * @return bool
     */
    public function getShowDataTable()
    {
        return $this->container['show_data_table'];
    }

    /**
     * Sets show_data_table
     *
     *  Gets or sets a value indicating whether the chart displays a data table.
     *
     * @return $this
     */
    public function setShowDataTable($show_data_table)
    {
        $this->container['show_data_table'] = $show_data_table;

        return $this;
    }
   /**
     * Gets show_legend
     *
     * @return bool
     */
    public function getShowLegend()
    {
        return $this->container['show_legend'];
    }

    /**
     * Sets show_legend
     *
     *  Gets or sets a value indicating whether the chart legend will be displayed. Default is true.
     *
     * @return $this
     */
    public function setShowLegend($show_legend)
    {
        $this->container['show_legend'] = $show_legend;

        return $this;
    }
   /**
     * Gets side_wall
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getSideWall()
    {
        return $this->container['side_wall'];
    }

    /**
     * Sets side_wall
     *
     *  Returns a  object that represents the side wall of a 3-D chart.
     *
     * @return $this
     */
    public function setSideWall($side_wall)
    {
        $this->container['side_wall'] = $side_wall;

        return $this;
    }
   /**
     * Gets size_with_window
     *
     * @return bool
     */
    public function getSizeWithWindow()
    {
        return $this->container['size_with_window'];
    }

    /**
     * Sets size_with_window
     *
     *  True if Microsoft Excel resizes the chart to match the size of the chart sheet window.
     *
     * @return $this
     */
    public function setSizeWithWindow($size_with_window)
    {
        $this->container['size_with_window'] = $size_with_window;

        return $this;
    }
   /**
     * Gets style
     *
     * @return int
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style
     *
     *  Gets and sets the builtin style.
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $this->container['style'] = $style;

        return $this;
    }
   /**
     * Gets title
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     *  Gets the chart's title.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     *  Gets or sets a chart's type.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }
   /**
     * Gets value_axis
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getValueAxis()
    {
        return $this->container['value_axis'];
    }

    /**
     * Sets value_axis
     *
     *  Gets the chart's Y axis.
     *
     * @return $this
     */
    public function setValueAxis($value_axis)
    {
        $this->container['value_axis'] = $value_axis;

        return $this;
    }
   /**
     * Gets walls
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getWalls()
    {
        return $this->container['walls'];
    }

    /**
     * Sets walls
     *
     *  Returns a  object that represents the walls of a 3-D chart.
     *
     * @return $this
     */
    public function setWalls($walls)
    {
        $this->container['walls'] = $walls;

        return $this;
    }
   /**
     * Gets walls_and_gridlines2_d
     *
     * @return bool
     */
    public function getWallsAndGridlines2D()
    {
        return $this->container['walls_and_gridlines2_d'];
    }

    /**
     * Sets walls_and_gridlines2_d
     *
     *  True if gridlines are drawn two-dimensionally on a 3-D chart.
     *
     * @return $this
     */
    public function setWallsAndGridlines2D($walls_and_gridlines2_d)
    {
        $this->container['walls_and_gridlines2_d'] = $walls_and_gridlines2_d;

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
