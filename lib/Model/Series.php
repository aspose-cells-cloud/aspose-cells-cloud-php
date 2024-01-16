<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Series.cs">
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

class Series implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Series';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'area' => '\Aspose\Cells\Cloud\Model\Area',
        'bar3_d_shape_type' => 'string',
        'border' => '\Aspose\Cells\Cloud\Model\Line',
        'bubble_scale' => 'int',
        'bubble_sizes' => 'string',
        'count_of_data_values' => 'int',
        'data_labels' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'display_name' => 'string',
        'doughnut_hole_size' => 'int',
        'down_bars' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'drop_lines' => '\Aspose\Cells\Cloud\Model\Line',
        'explosion' => 'int',
        'first_slice_angle' => 'int',
        'gap_width' => 'int',
        'has3_d_effect' => 'bool',
        'has_drop_lines' => 'bool',
        'has_hi_lo_lines' => 'bool',
        'has_leader_lines' => 'bool',
        'has_radar_axis_labels' => 'bool',
        'has_series_lines' => 'bool',
        'has_up_down_bars' => 'bool',
        'hi_lo_lines' => '\Aspose\Cells\Cloud\Model\Line',
        'is_auto_split' => 'bool',
        'is_color_varied' => 'bool',
        'leader_lines' => '\Aspose\Cells\Cloud\Model\Line',
        'legend_entry' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'line' => '\Aspose\Cells\Cloud\Model\Line',
        'marker' => '\Aspose\Cells\Cloud\Model\Marker',
        'name' => 'string',
        'overlap' => 'int',
        'plot_on_second_axis' => 'bool',
        'points' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'second_plot_size' => 'int',
        'series_lines' => '\Aspose\Cells\Cloud\Model\Line',
        'shadow' => 'bool',
        'shape_properties' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'show_negative_bubbles' => 'bool',
        'size_represents' => 'string',
        'smooth' => 'bool',
        'split_type' => 'string',
        'split_value' => 'double',
        'trend_lines' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'type' => 'string',
        'up_bars' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'values' => 'string',
        'x_error_bar' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'x_values' => 'string',
        'y_error_bar' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'link' => '\Aspose\Cells\Cloud\Model\Link'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'area' => null  ,
        'bar3_d_shape_type' => null  ,
        'border' => null  ,
        'bubble_scale' => null  ,
        'bubble_sizes' => null  ,
        'count_of_data_values' => null  ,
        'data_labels' => null  ,
        'display_name' => null  ,
        'doughnut_hole_size' => null  ,
        'down_bars' => null  ,
        'drop_lines' => null  ,
        'explosion' => null  ,
        'first_slice_angle' => null  ,
        'gap_width' => null  ,
        'has3_d_effect' => null  ,
        'has_drop_lines' => null  ,
        'has_hi_lo_lines' => null  ,
        'has_leader_lines' => null  ,
        'has_radar_axis_labels' => null  ,
        'has_series_lines' => null  ,
        'has_up_down_bars' => null  ,
        'hi_lo_lines' => null  ,
        'is_auto_split' => null  ,
        'is_color_varied' => null  ,
        'leader_lines' => null  ,
        'legend_entry' => null  ,
        'line' => null  ,
        'marker' => null  ,
        'name' => null  ,
        'overlap' => null  ,
        'plot_on_second_axis' => null  ,
        'points' => null  ,
        'second_plot_size' => null  ,
        'series_lines' => null  ,
        'shadow' => null  ,
        'shape_properties' => null  ,
        'show_negative_bubbles' => null  ,
        'size_represents' => null  ,
        'smooth' => null  ,
        'split_type' => null  ,
        'split_value' => null  ,
        'trend_lines' => null  ,
        'type' => null  ,
        'up_bars' => null  ,
        'values' => null  ,
        'x_error_bar' => null  ,
        'x_values' => null  ,
        'y_error_bar' => null  ,
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
         'area' => 'Area' ,
         'bar3_d_shape_type' => 'Bar3DShapeType' ,
         'border' => 'Border' ,
         'bubble_scale' => 'BubbleScale' ,
         'bubble_sizes' => 'BubbleSizes' ,
         'count_of_data_values' => 'CountOfDataValues' ,
         'data_labels' => 'DataLabels' ,
         'display_name' => 'DisplayName' ,
         'doughnut_hole_size' => 'DoughnutHoleSize' ,
         'down_bars' => 'DownBars' ,
         'drop_lines' => 'DropLines' ,
         'explosion' => 'Explosion' ,
         'first_slice_angle' => 'FirstSliceAngle' ,
         'gap_width' => 'GapWidth' ,
         'has3_d_effect' => 'Has3DEffect' ,
         'has_drop_lines' => 'HasDropLines' ,
         'has_hi_lo_lines' => 'HasHiLoLines' ,
         'has_leader_lines' => 'HasLeaderLines' ,
         'has_radar_axis_labels' => 'HasRadarAxisLabels' ,
         'has_series_lines' => 'HasSeriesLines' ,
         'has_up_down_bars' => 'HasUpDownBars' ,
         'hi_lo_lines' => 'HiLoLines' ,
         'is_auto_split' => 'IsAutoSplit' ,
         'is_color_varied' => 'IsColorVaried' ,
         'leader_lines' => 'LeaderLines' ,
         'legend_entry' => 'LegendEntry' ,
         'line' => 'Line' ,
         'marker' => 'Marker' ,
         'name' => 'Name' ,
         'overlap' => 'Overlap' ,
         'plot_on_second_axis' => 'PlotOnSecondAxis' ,
         'points' => 'Points' ,
         'second_plot_size' => 'SecondPlotSize' ,
         'series_lines' => 'SeriesLines' ,
         'shadow' => 'Shadow' ,
         'shape_properties' => 'ShapeProperties' ,
         'show_negative_bubbles' => 'ShowNegativeBubbles' ,
         'size_represents' => 'SizeRepresents' ,
         'smooth' => 'Smooth' ,
         'split_type' => 'SplitType' ,
         'split_value' => 'SplitValue' ,
         'trend_lines' => 'TrendLines' ,
         'type' => 'Type' ,
         'up_bars' => 'UpBars' ,
         'values' => 'Values' ,
         'x_error_bar' => 'XErrorBar' ,
         'x_values' => 'XValues' ,
         'y_error_bar' => 'YErrorBar' ,
         'link' => 'link' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'area' => 'setArea' ,
        'bar3_d_shape_type' => 'setBar3DShapeType' ,
        'border' => 'setBorder' ,
        'bubble_scale' => 'setBubbleScale' ,
        'bubble_sizes' => 'setBubbleSizes' ,
        'count_of_data_values' => 'setCountOfDataValues' ,
        'data_labels' => 'setDataLabels' ,
        'display_name' => 'setDisplayName' ,
        'doughnut_hole_size' => 'setDoughnutHoleSize' ,
        'down_bars' => 'setDownBars' ,
        'drop_lines' => 'setDropLines' ,
        'explosion' => 'setExplosion' ,
        'first_slice_angle' => 'setFirstSliceAngle' ,
        'gap_width' => 'setGapWidth' ,
        'has3_d_effect' => 'setHas3DEffect' ,
        'has_drop_lines' => 'setHasDropLines' ,
        'has_hi_lo_lines' => 'setHasHiLoLines' ,
        'has_leader_lines' => 'setHasLeaderLines' ,
        'has_radar_axis_labels' => 'setHasRadarAxisLabels' ,
        'has_series_lines' => 'setHasSeriesLines' ,
        'has_up_down_bars' => 'setHasUpDownBars' ,
        'hi_lo_lines' => 'setHiLoLines' ,
        'is_auto_split' => 'setIsAutoSplit' ,
        'is_color_varied' => 'setIsColorVaried' ,
        'leader_lines' => 'setLeaderLines' ,
        'legend_entry' => 'setLegendEntry' ,
        'line' => 'setLine' ,
        'marker' => 'setMarker' ,
        'name' => 'setName' ,
        'overlap' => 'setOverlap' ,
        'plot_on_second_axis' => 'setPlotOnSecondAxis' ,
        'points' => 'setPoints' ,
        'second_plot_size' => 'setSecondPlotSize' ,
        'series_lines' => 'setSeriesLines' ,
        'shadow' => 'setShadow' ,
        'shape_properties' => 'setShapeProperties' ,
        'show_negative_bubbles' => 'setShowNegativeBubbles' ,
        'size_represents' => 'setSizeRepresents' ,
        'smooth' => 'setSmooth' ,
        'split_type' => 'setSplitType' ,
        'split_value' => 'setSplitValue' ,
        'trend_lines' => 'setTrendLines' ,
        'type' => 'setType' ,
        'up_bars' => 'setUpBars' ,
        'values' => 'setValues' ,
        'x_error_bar' => 'setXErrorBar' ,
        'x_values' => 'setXValues' ,
        'y_error_bar' => 'setYErrorBar' ,
        'link' => 'setlink' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'area' => 'getArea' ,
        'bar3_d_shape_type' => 'getBar3DShapeType' ,
        'border' => 'getBorder' ,
        'bubble_scale' => 'getBubbleScale' ,
        'bubble_sizes' => 'getBubbleSizes' ,
        'count_of_data_values' => 'getCountOfDataValues' ,
        'data_labels' => 'getDataLabels' ,
        'display_name' => 'getDisplayName' ,
        'doughnut_hole_size' => 'getDoughnutHoleSize' ,
        'down_bars' => 'getDownBars' ,
        'drop_lines' => 'getDropLines' ,
        'explosion' => 'getExplosion' ,
        'first_slice_angle' => 'getFirstSliceAngle' ,
        'gap_width' => 'getGapWidth' ,
        'has3_d_effect' => 'getHas3DEffect' ,
        'has_drop_lines' => 'getHasDropLines' ,
        'has_hi_lo_lines' => 'getHasHiLoLines' ,
        'has_leader_lines' => 'getHasLeaderLines' ,
        'has_radar_axis_labels' => 'getHasRadarAxisLabels' ,
        'has_series_lines' => 'getHasSeriesLines' ,
        'has_up_down_bars' => 'getHasUpDownBars' ,
        'hi_lo_lines' => 'getHiLoLines' ,
        'is_auto_split' => 'getIsAutoSplit' ,
        'is_color_varied' => 'getIsColorVaried' ,
        'leader_lines' => 'getLeaderLines' ,
        'legend_entry' => 'getLegendEntry' ,
        'line' => 'getLine' ,
        'marker' => 'getMarker' ,
        'name' => 'getName' ,
        'overlap' => 'getOverlap' ,
        'plot_on_second_axis' => 'getPlotOnSecondAxis' ,
        'points' => 'getPoints' ,
        'second_plot_size' => 'getSecondPlotSize' ,
        'series_lines' => 'getSeriesLines' ,
        'shadow' => 'getShadow' ,
        'shape_properties' => 'getShapeProperties' ,
        'show_negative_bubbles' => 'getShowNegativeBubbles' ,
        'size_represents' => 'getSizeRepresents' ,
        'smooth' => 'getSmooth' ,
        'split_type' => 'getSplitType' ,
        'split_value' => 'getSplitValue' ,
        'trend_lines' => 'getTrendLines' ,
        'type' => 'getType' ,
        'up_bars' => 'getUpBars' ,
        'values' => 'getValues' ,
        'x_error_bar' => 'getXErrorBar' ,
        'x_values' => 'getXValues' ,
        'y_error_bar' => 'getYErrorBar' ,
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
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['bar3_d_shape_type'] = isset($data['bar3_d_shape_type']) ? $data['bar3_d_shape_type'] : null;
        $this->container['border'] = isset($data['border']) ? $data['border'] : null;
        $this->container['bubble_scale'] = isset($data['bubble_scale']) ? $data['bubble_scale'] : null;
        $this->container['bubble_sizes'] = isset($data['bubble_sizes']) ? $data['bubble_sizes'] : null;
        $this->container['count_of_data_values'] = isset($data['count_of_data_values']) ? $data['count_of_data_values'] : null;
        $this->container['data_labels'] = isset($data['data_labels']) ? $data['data_labels'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['doughnut_hole_size'] = isset($data['doughnut_hole_size']) ? $data['doughnut_hole_size'] : null;
        $this->container['down_bars'] = isset($data['down_bars']) ? $data['down_bars'] : null;
        $this->container['drop_lines'] = isset($data['drop_lines']) ? $data['drop_lines'] : null;
        $this->container['explosion'] = isset($data['explosion']) ? $data['explosion'] : null;
        $this->container['first_slice_angle'] = isset($data['first_slice_angle']) ? $data['first_slice_angle'] : null;
        $this->container['gap_width'] = isset($data['gap_width']) ? $data['gap_width'] : null;
        $this->container['has3_d_effect'] = isset($data['has3_d_effect']) ? $data['has3_d_effect'] : null;
        $this->container['has_drop_lines'] = isset($data['has_drop_lines']) ? $data['has_drop_lines'] : null;
        $this->container['has_hi_lo_lines'] = isset($data['has_hi_lo_lines']) ? $data['has_hi_lo_lines'] : null;
        $this->container['has_leader_lines'] = isset($data['has_leader_lines']) ? $data['has_leader_lines'] : null;
        $this->container['has_radar_axis_labels'] = isset($data['has_radar_axis_labels']) ? $data['has_radar_axis_labels'] : null;
        $this->container['has_series_lines'] = isset($data['has_series_lines']) ? $data['has_series_lines'] : null;
        $this->container['has_up_down_bars'] = isset($data['has_up_down_bars']) ? $data['has_up_down_bars'] : null;
        $this->container['hi_lo_lines'] = isset($data['hi_lo_lines']) ? $data['hi_lo_lines'] : null;
        $this->container['is_auto_split'] = isset($data['is_auto_split']) ? $data['is_auto_split'] : null;
        $this->container['is_color_varied'] = isset($data['is_color_varied']) ? $data['is_color_varied'] : null;
        $this->container['leader_lines'] = isset($data['leader_lines']) ? $data['leader_lines'] : null;
        $this->container['legend_entry'] = isset($data['legend_entry']) ? $data['legend_entry'] : null;
        $this->container['line'] = isset($data['line']) ? $data['line'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['overlap'] = isset($data['overlap']) ? $data['overlap'] : null;
        $this->container['plot_on_second_axis'] = isset($data['plot_on_second_axis']) ? $data['plot_on_second_axis'] : null;
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
        $this->container['second_plot_size'] = isset($data['second_plot_size']) ? $data['second_plot_size'] : null;
        $this->container['series_lines'] = isset($data['series_lines']) ? $data['series_lines'] : null;
        $this->container['shadow'] = isset($data['shadow']) ? $data['shadow'] : null;
        $this->container['shape_properties'] = isset($data['shape_properties']) ? $data['shape_properties'] : null;
        $this->container['show_negative_bubbles'] = isset($data['show_negative_bubbles']) ? $data['show_negative_bubbles'] : null;
        $this->container['size_represents'] = isset($data['size_represents']) ? $data['size_represents'] : null;
        $this->container['smooth'] = isset($data['smooth']) ? $data['smooth'] : null;
        $this->container['split_type'] = isset($data['split_type']) ? $data['split_type'] : null;
        $this->container['split_value'] = isset($data['split_value']) ? $data['split_value'] : null;
        $this->container['trend_lines'] = isset($data['trend_lines']) ? $data['trend_lines'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['up_bars'] = isset($data['up_bars']) ? $data['up_bars'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['x_error_bar'] = isset($data['x_error_bar']) ? $data['x_error_bar'] : null;
        $this->container['x_values'] = isset($data['x_values']) ? $data['x_values'] : null;
        $this->container['y_error_bar'] = isset($data['y_error_bar']) ? $data['y_error_bar'] : null;
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
        if ($this->container['area'] === null) {
            $invalidProperties[] = "'area' can't be null";
        }
        if ($this->container['bar3_d_shape_type'] === null) {
            $invalidProperties[] = "'bar3_d_shape_type' can't be null";
        }
        if ($this->container['border'] === null) {
            $invalidProperties[] = "'border' can't be null";
        }
        if ($this->container['bubble_scale'] === null) {
            $invalidProperties[] = "'bubble_scale' can't be null";
        }
        if ($this->container['bubble_sizes'] === null) {
            $invalidProperties[] = "'bubble_sizes' can't be null";
        }
        if ($this->container['count_of_data_values'] === null) {
            $invalidProperties[] = "'count_of_data_values' can't be null";
        }
        if ($this->container['data_labels'] === null) {
            $invalidProperties[] = "'data_labels' can't be null";
        }
        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ($this->container['doughnut_hole_size'] === null) {
            $invalidProperties[] = "'doughnut_hole_size' can't be null";
        }
        if ($this->container['down_bars'] === null) {
            $invalidProperties[] = "'down_bars' can't be null";
        }
        if ($this->container['drop_lines'] === null) {
            $invalidProperties[] = "'drop_lines' can't be null";
        }
        if ($this->container['explosion'] === null) {
            $invalidProperties[] = "'explosion' can't be null";
        }
        if ($this->container['first_slice_angle'] === null) {
            $invalidProperties[] = "'first_slice_angle' can't be null";
        }
        if ($this->container['gap_width'] === null) {
            $invalidProperties[] = "'gap_width' can't be null";
        }
        if ($this->container['has3_d_effect'] === null) {
            $invalidProperties[] = "'has3_d_effect' can't be null";
        }
        if ($this->container['has_drop_lines'] === null) {
            $invalidProperties[] = "'has_drop_lines' can't be null";
        }
        if ($this->container['has_hi_lo_lines'] === null) {
            $invalidProperties[] = "'has_hi_lo_lines' can't be null";
        }
        if ($this->container['has_leader_lines'] === null) {
            $invalidProperties[] = "'has_leader_lines' can't be null";
        }
        if ($this->container['has_radar_axis_labels'] === null) {
            $invalidProperties[] = "'has_radar_axis_labels' can't be null";
        }
        if ($this->container['has_series_lines'] === null) {
            $invalidProperties[] = "'has_series_lines' can't be null";
        }
        if ($this->container['has_up_down_bars'] === null) {
            $invalidProperties[] = "'has_up_down_bars' can't be null";
        }
        if ($this->container['hi_lo_lines'] === null) {
            $invalidProperties[] = "'hi_lo_lines' can't be null";
        }
        if ($this->container['is_auto_split'] === null) {
            $invalidProperties[] = "'is_auto_split' can't be null";
        }
        if ($this->container['is_color_varied'] === null) {
            $invalidProperties[] = "'is_color_varied' can't be null";
        }
        if ($this->container['leader_lines'] === null) {
            $invalidProperties[] = "'leader_lines' can't be null";
        }
        if ($this->container['legend_entry'] === null) {
            $invalidProperties[] = "'legend_entry' can't be null";
        }
        if ($this->container['line'] === null) {
            $invalidProperties[] = "'line' can't be null";
        }
        if ($this->container['marker'] === null) {
            $invalidProperties[] = "'marker' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['overlap'] === null) {
            $invalidProperties[] = "'overlap' can't be null";
        }
        if ($this->container['plot_on_second_axis'] === null) {
            $invalidProperties[] = "'plot_on_second_axis' can't be null";
        }
        if ($this->container['points'] === null) {
            $invalidProperties[] = "'points' can't be null";
        }
        if ($this->container['second_plot_size'] === null) {
            $invalidProperties[] = "'second_plot_size' can't be null";
        }
        if ($this->container['series_lines'] === null) {
            $invalidProperties[] = "'series_lines' can't be null";
        }
        if ($this->container['shadow'] === null) {
            $invalidProperties[] = "'shadow' can't be null";
        }
        if ($this->container['shape_properties'] === null) {
            $invalidProperties[] = "'shape_properties' can't be null";
        }
        if ($this->container['show_negative_bubbles'] === null) {
            $invalidProperties[] = "'show_negative_bubbles' can't be null";
        }
        if ($this->container['size_represents'] === null) {
            $invalidProperties[] = "'size_represents' can't be null";
        }
        if ($this->container['smooth'] === null) {
            $invalidProperties[] = "'smooth' can't be null";
        }
        if ($this->container['split_type'] === null) {
            $invalidProperties[] = "'split_type' can't be null";
        }
        if ($this->container['split_value'] === null) {
            $invalidProperties[] = "'split_value' can't be null";
        }
        if ($this->container['trend_lines'] === null) {
            $invalidProperties[] = "'trend_lines' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['up_bars'] === null) {
            $invalidProperties[] = "'up_bars' can't be null";
        }
        if ($this->container['values'] === null) {
            $invalidProperties[] = "'values' can't be null";
        }
        if ($this->container['x_error_bar'] === null) {
            $invalidProperties[] = "'x_error_bar' can't be null";
        }
        if ($this->container['x_values'] === null) {
            $invalidProperties[] = "'x_values' can't be null";
        }
        if ($this->container['y_error_bar'] === null) {
            $invalidProperties[] = "'y_error_bar' can't be null";
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
        if ($this->container['area'] === null) {
                    return false;
                }
        if ($this->container['bar3_d_shape_type'] === null) {
                    return false;
                }
        if ($this->container['border'] === null) {
                    return false;
                }
        if ($this->container['bubble_scale'] === null) {
                    return false;
                }
        if ($this->container['bubble_sizes'] === null) {
                    return false;
                }
        if ($this->container['count_of_data_values'] === null) {
                    return false;
                }
        if ($this->container['data_labels'] === null) {
                    return false;
                }
        if ($this->container['display_name'] === null) {
                    return false;
                }
        if ($this->container['doughnut_hole_size'] === null) {
                    return false;
                }
        if ($this->container['down_bars'] === null) {
                    return false;
                }
        if ($this->container['drop_lines'] === null) {
                    return false;
                }
        if ($this->container['explosion'] === null) {
                    return false;
                }
        if ($this->container['first_slice_angle'] === null) {
                    return false;
                }
        if ($this->container['gap_width'] === null) {
                    return false;
                }
        if ($this->container['has3_d_effect'] === null) {
                    return false;
                }
        if ($this->container['has_drop_lines'] === null) {
                    return false;
                }
        if ($this->container['has_hi_lo_lines'] === null) {
                    return false;
                }
        if ($this->container['has_leader_lines'] === null) {
                    return false;
                }
        if ($this->container['has_radar_axis_labels'] === null) {
                    return false;
                }
        if ($this->container['has_series_lines'] === null) {
                    return false;
                }
        if ($this->container['has_up_down_bars'] === null) {
                    return false;
                }
        if ($this->container['hi_lo_lines'] === null) {
                    return false;
                }
        if ($this->container['is_auto_split'] === null) {
                    return false;
                }
        if ($this->container['is_color_varied'] === null) {
                    return false;
                }
        if ($this->container['leader_lines'] === null) {
                    return false;
                }
        if ($this->container['legend_entry'] === null) {
                    return false;
                }
        if ($this->container['line'] === null) {
                    return false;
                }
        if ($this->container['marker'] === null) {
                    return false;
                }
        if ($this->container['name'] === null) {
                    return false;
                }
        if ($this->container['overlap'] === null) {
                    return false;
                }
        if ($this->container['plot_on_second_axis'] === null) {
                    return false;
                }
        if ($this->container['points'] === null) {
                    return false;
                }
        if ($this->container['second_plot_size'] === null) {
                    return false;
                }
        if ($this->container['series_lines'] === null) {
                    return false;
                }
        if ($this->container['shadow'] === null) {
                    return false;
                }
        if ($this->container['shape_properties'] === null) {
                    return false;
                }
        if ($this->container['show_negative_bubbles'] === null) {
                    return false;
                }
        if ($this->container['size_represents'] === null) {
                    return false;
                }
        if ($this->container['smooth'] === null) {
                    return false;
                }
        if ($this->container['split_type'] === null) {
                    return false;
                }
        if ($this->container['split_value'] === null) {
                    return false;
                }
        if ($this->container['trend_lines'] === null) {
                    return false;
                }
        if ($this->container['type'] === null) {
                    return false;
                }
        if ($this->container['up_bars'] === null) {
                    return false;
                }
        if ($this->container['values'] === null) {
                    return false;
                }
        if ($this->container['x_error_bar'] === null) {
                    return false;
                }
        if ($this->container['x_values'] === null) {
                    return false;
                }
        if ($this->container['y_error_bar'] === null) {
                    return false;
                }
        if ($this->container['link'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets area
     *
     * @return \Aspose\Cells\Cloud\Model\Area
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area
     *
     *  Represents the background area of Series object.
     *
     * @return $this
     */
    public function setArea($area)
    {
        $this->container['area'] = $area;

        return $this;
    }
   /**
     * Gets bar3_d_shape_type
     *
     * @return string
     */
    public function getBar3DShapeType()
    {
        return $this->container['bar3_d_shape_type'];
    }

    /**
     * Sets bar3_d_shape_type
     *
     *  Gets or sets the 3D shape type used with the 3-D bar or column chart.
     *
     * @return $this
     */
    public function setBar3DShapeType($bar3_d_shape_type)
    {
        $this->container['bar3_d_shape_type'] = $bar3_d_shape_type;

        return $this;
    }
   /**
     * Gets border
     *
     * @return \Aspose\Cells\Cloud\Model\Line
     */
    public function getBorder()
    {
        return $this->container['border'];
    }

    /**
     * Sets border
     *
     *  Represents border of Series object.
     *
     * @return $this
     */
    public function setBorder($border)
    {
        $this->container['border'] = $border;

        return $this;
    }
   /**
     * Gets bubble_scale
     *
     * @return int
     */
    public function getBubbleScale()
    {
        return $this->container['bubble_scale'];
    }

    /**
     * Sets bubble_scale
     *
     *  Gets or sets the scale factor for bubbles in the specified chart group.                         It can be an integer value from 0 (zero) to 300,                         corresponding to a percentage of the default size.                        Applies only to bubble charts.
     *
     * @return $this
     */
    public function setBubbleScale($bubble_scale)
    {
        $this->container['bubble_scale'] = $bubble_scale;

        return $this;
    }
   /**
     * Gets bubble_sizes
     *
     * @return string
     */
    public function getBubbleSizes()
    {
        return $this->container['bubble_sizes'];
    }

    /**
     * Sets bubble_sizes
     *
     *  Gets or sets the bubble sizes values of the chart series.
     *
     * @return $this
     */
    public function setBubbleSizes($bubble_sizes)
    {
        $this->container['bubble_sizes'] = $bubble_sizes;

        return $this;
    }
   /**
     * Gets count_of_data_values
     *
     * @return int
     */
    public function getCountOfDataValues()
    {
        return $this->container['count_of_data_values'];
    }

    /**
     * Sets count_of_data_values
     *
     *  Gets the number of the data values.
     *
     * @return $this
     */
    public function setCountOfDataValues($count_of_data_values)
    {
        $this->container['count_of_data_values'] = $count_of_data_values;

        return $this;
    }
   /**
     * Gets data_labels
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getDataLabels()
    {
        return $this->container['data_labels'];
    }

    /**
     * Sets data_labels
     *
     *  Represents the DataLabels object for the specified ASeries.
     *
     * @return $this
     */
    public function setDataLabels($data_labels)
    {
        $this->container['data_labels'] = $data_labels;

        return $this;
    }
   /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     *  Gets the series's name that displays on the chart graph.
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }
   /**
     * Gets doughnut_hole_size
     *
     * @return int
     */
    public function getDoughnutHoleSize()
    {
        return $this->container['doughnut_hole_size'];
    }

    /**
     * Sets doughnut_hole_size
     *
     *  Returns or sets the size of the hole in a doughnut chart group.                         The hole size is expressed as a percentage of the chart size, between 10 and 90 percent.
     *
     * @return $this
     */
    public function setDoughnutHoleSize($doughnut_hole_size)
    {
        $this->container['doughnut_hole_size'] = $doughnut_hole_size;

        return $this;
    }
   /**
     * Gets down_bars
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getDownBars()
    {
        return $this->container['down_bars'];
    }

    /**
     * Sets down_bars
     *
     *  Returns a  object that represents the down bars on a line chart.                        Applies only to line charts.
     *
     * @return $this
     */
    public function setDownBars($down_bars)
    {
        $this->container['down_bars'] = $down_bars;

        return $this;
    }
   /**
     * Gets drop_lines
     *
     * @return \Aspose\Cells\Cloud\Model\Line
     */
    public function getDropLines()
    {
        return $this->container['drop_lines'];
    }

    /**
     * Sets drop_lines
     *
     *  Returns a  object that represents the drop lines for a series on the line chart or area chart.                        Applies only to line chart or area charts.
     *
     * @return $this
     */
    public function setDropLines($drop_lines)
    {
        $this->container['drop_lines'] = $drop_lines;

        return $this;
    }
   /**
     * Gets explosion
     *
     * @return int
     */
    public function getExplosion()
    {
        return $this->container['explosion'];
    }

    /**
     * Sets explosion
     *
     *  The distance of an open pie slice from the center of the pie chart is expressed as a percentage of the pie diameter.
     *
     * @return $this
     */
    public function setExplosion($explosion)
    {
        $this->container['explosion'] = $explosion;

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
     * Gets has3_d_effect
     *
     * @return bool
     */
    public function getHas3DEffect()
    {
        return $this->container['has3_d_effect'];
    }

    /**
     * Sets has3_d_effect
     *
     *  True if the series has a three-dimensional appearance.                         Applies only to bubble charts.
     *
     * @return $this
     */
    public function setHas3DEffect($has3_d_effect)
    {
        $this->container['has3_d_effect'] = $has3_d_effect;

        return $this;
    }
   /**
     * Gets has_drop_lines
     *
     * @return bool
     */
    public function getHasDropLines()
    {
        return $this->container['has_drop_lines'];
    }

    /**
     * Sets has_drop_lines
     *
     *  True if the chart has drop lines.                        Applies only to line chart or area charts.
     *
     * @return $this
     */
    public function setHasDropLines($has_drop_lines)
    {
        $this->container['has_drop_lines'] = $has_drop_lines;

        return $this;
    }
   /**
     * Gets has_hi_lo_lines
     *
     * @return bool
     */
    public function getHasHiLoLines()
    {
        return $this->container['has_hi_lo_lines'];
    }

    /**
     * Sets has_hi_lo_lines
     *
     *  True if the line chart has high-low lines.                          Applies only to line charts.
     *
     * @return $this
     */
    public function setHasHiLoLines($has_hi_lo_lines)
    {
        $this->container['has_hi_lo_lines'] = $has_hi_lo_lines;

        return $this;
    }
   /**
     * Gets has_leader_lines
     *
     * @return bool
     */
    public function getHasLeaderLines()
    {
        return $this->container['has_leader_lines'];
    }

    /**
     * Sets has_leader_lines
     *
     *  True if the series has leader lines.
     *
     * @return $this
     */
    public function setHasLeaderLines($has_leader_lines)
    {
        $this->container['has_leader_lines'] = $has_leader_lines;

        return $this;
    }
   /**
     * Gets has_radar_axis_labels
     *
     * @return bool
     */
    public function getHasRadarAxisLabels()
    {
        return $this->container['has_radar_axis_labels'];
    }

    /**
     * Sets has_radar_axis_labels
     *
     *  True if a radar chart has category axis labels. Applies only to radar charts.
     *
     * @return $this
     */
    public function setHasRadarAxisLabels($has_radar_axis_labels)
    {
        $this->container['has_radar_axis_labels'] = $has_radar_axis_labels;

        return $this;
    }
   /**
     * Gets has_series_lines
     *
     * @return bool
     */
    public function getHasSeriesLines()
    {
        return $this->container['has_series_lines'];
    }

    /**
     * Sets has_series_lines
     *
     *  True if a stacked column chart or bar chart has series lines or                        if a Pie of Pie chart or Bar of Pie chart has connector lines between the two sections.                         Applies only to stacked column charts, bar charts, Pie of Pie charts, or Bar of Pie charts.
     *
     * @return $this
     */
    public function setHasSeriesLines($has_series_lines)
    {
        $this->container['has_series_lines'] = $has_series_lines;

        return $this;
    }
   /**
     * Gets has_up_down_bars
     *
     * @return bool
     */
    public function getHasUpDownBars()
    {
        return $this->container['has_up_down_bars'];
    }

    /**
     * Sets has_up_down_bars
     *
     *  True if a line chart has up and down bars.                        Applies only to line charts.
     *
     * @return $this
     */
    public function setHasUpDownBars($has_up_down_bars)
    {
        $this->container['has_up_down_bars'] = $has_up_down_bars;

        return $this;
    }
   /**
     * Gets hi_lo_lines
     *
     * @return \Aspose\Cells\Cloud\Model\Line
     */
    public function getHiLoLines()
    {
        return $this->container['hi_lo_lines'];
    }

    /**
     * Sets hi_lo_lines
     *
     *  Returns a HiLoLines object that represents the high-low lines for a series on a line chart.                         Applies only to line charts.
     *
     * @return $this
     */
    public function setHiLoLines($hi_lo_lines)
    {
        $this->container['hi_lo_lines'] = $hi_lo_lines;

        return $this;
    }
   /**
     * Gets is_auto_split
     *
     * @return bool
     */
    public function getIsAutoSplit()
    {
        return $this->container['is_auto_split'];
    }

    /**
     * Sets is_auto_split
     *
     *  Indicates whether the threshold value is automatic.
     *
     * @return $this
     */
    public function setIsAutoSplit($is_auto_split)
    {
        $this->container['is_auto_split'] = $is_auto_split;

        return $this;
    }
   /**
     * Gets is_color_varied
     *
     * @return bool
     */
    public function getIsColorVaried()
    {
        return $this->container['is_color_varied'];
    }

    /**
     * Sets is_color_varied
     *
     *  Represents if the color of points is varied.                         The chart must contain only one series.
     *
     * @return $this
     */
    public function setIsColorVaried($is_color_varied)
    {
        $this->container['is_color_varied'] = $is_color_varied;

        return $this;
    }
   /**
     * Gets leader_lines
     *
     * @return \Aspose\Cells\Cloud\Model\Line
     */
    public function getLeaderLines()
    {
        return $this->container['leader_lines'];
    }

    /**
     * Sets leader_lines
     *
     *  Represents leader lines on a chart. Leader lines connect data labels to data points.                         This object isn’t a collection; there’s no object that represents a single leader line.
     *
     * @return $this
     */
    public function setLeaderLines($leader_lines)
    {
        $this->container['leader_lines'] = $leader_lines;

        return $this;
    }
   /**
     * Gets legend_entry
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getLegendEntry()
    {
        return $this->container['legend_entry'];
    }

    /**
     * Sets legend_entry
     *
     *  Gets the legend entry according to this series.
     *
     * @return $this
     */
    public function setLegendEntry($legend_entry)
    {
        $this->container['legend_entry'] = $legend_entry;

        return $this;
    }
   /**
     * Gets line
     *
     * @return \Aspose\Cells\Cloud\Model\Line
     */
    public function getLine()
    {
        return $this->container['line'];
    }

    /**
     * Sets line
     *
     *  
     *
     * @return $this
     */
    public function setLine($line)
    {
        $this->container['line'] = $line;

        return $this;
    }
   /**
     * Gets marker
     *
     * @return \Aspose\Cells\Cloud\Model\Marker
     */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
     * Sets marker
     *
     *  Gets the marker.
     *
     * @return $this
     */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;

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
     *  Gets or sets the name of the data series.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }
   /**
     * Gets overlap
     *
     * @return int
     */
    public function getOverlap()
    {
        return $this->container['overlap'];
    }

    /**
     * Sets overlap
     *
     *  Specifies how bars and columns are positioned.                        Can be a value between – 100 and 100.                         Applies only to 2-D bar and 2-D column charts.
     *
     * @return $this
     */
    public function setOverlap($overlap)
    {
        $this->container['overlap'] = $overlap;

        return $this;
    }
   /**
     * Gets plot_on_second_axis
     *
     * @return bool
     */
    public function getPlotOnSecondAxis()
    {
        return $this->container['plot_on_second_axis'];
    }

    /**
     * Sets plot_on_second_axis
     *
     *  Indicates if this series is plotted on second value axis.
     *
     * @return $this
     */
    public function setPlotOnSecondAxis($plot_on_second_axis)
    {
        $this->container['plot_on_second_axis'] = $plot_on_second_axis;

        return $this;
    }
   /**
     * Gets points
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     *
     *  Gets the collection of points in a series in a chart.
     *
     * @return $this
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

        return $this;
    }
   /**
     * Gets second_plot_size
     *
     * @return int
     */
    public function getSecondPlotSize()
    {
        return $this->container['second_plot_size'];
    }

    /**
     * Sets second_plot_size
     *
     *  Returns or sets the size of the secondary section of either a pie of pie chart or a bar of pie chart,                         as a percentage of the size of the primary pie.                        Can be a value from 5 to 200.
     *
     * @return $this
     */
    public function setSecondPlotSize($second_plot_size)
    {
        $this->container['second_plot_size'] = $second_plot_size;

        return $this;
    }
   /**
     * Gets series_lines
     *
     * @return \Aspose\Cells\Cloud\Model\Line
     */
    public function getSeriesLines()
    {
        return $this->container['series_lines'];
    }

    /**
     * Sets series_lines
     *
     *  Returns a SeriesLines object that represents the series lines for a stacked bar chart or a stacked column chart.                        Applies only to stacked bar and stacked column charts.
     *
     * @return $this
     */
    public function setSeriesLines($series_lines)
    {
        $this->container['series_lines'] = $series_lines;

        return $this;
    }
   /**
     * Gets shadow
     *
     * @return bool
     */
    public function getShadow()
    {
        return $this->container['shadow'];
    }

    /**
     * Sets shadow
     *
     *  True if the series has a shadow.
     *
     * @return $this
     */
    public function setShadow($shadow)
    {
        $this->container['shadow'] = $shadow;

        return $this;
    }
   /**
     * Gets shape_properties
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getShapeProperties()
    {
        return $this->container['shape_properties'];
    }

    /**
     * Sets shape_properties
     *
     *  Gets the  object that holds the visual shape properties of the Series.
     *
     * @return $this
     */
    public function setShapeProperties($shape_properties)
    {
        $this->container['shape_properties'] = $shape_properties;

        return $this;
    }
   /**
     * Gets show_negative_bubbles
     *
     * @return bool
     */
    public function getShowNegativeBubbles()
    {
        return $this->container['show_negative_bubbles'];
    }

    /**
     * Sets show_negative_bubbles
     *
     *  True if negative bubbles are shown for the chart group. Valid only for bubble charts.
     *
     * @return $this
     */
    public function setShowNegativeBubbles($show_negative_bubbles)
    {
        $this->container['show_negative_bubbles'] = $show_negative_bubbles;

        return $this;
    }
   /**
     * Gets size_represents
     *
     * @return string
     */
    public function getSizeRepresents()
    {
        return $this->container['size_represents'];
    }

    /**
     * Sets size_represents
     *
     *  Gets or sets what the bubble size represents on a bubble chart.
     *
     * @return $this
     */
    public function setSizeRepresents($size_represents)
    {
        $this->container['size_represents'] = $size_represents;

        return $this;
    }
   /**
     * Gets smooth
     *
     * @return bool
     */
    public function getSmooth()
    {
        return $this->container['smooth'];
    }

    /**
     * Sets smooth
     *
     *  Represents curve smoothing.                         True if curve smoothing is turned on for the line chart or scatter chart.                        Applies only to line and scatter connected by lines charts.
     *
     * @return $this
     */
    public function setSmooth($smooth)
    {
        $this->container['smooth'] = $smooth;

        return $this;
    }
   /**
     * Gets split_type
     *
     * @return string
     */
    public function getSplitType()
    {
        return $this->container['split_type'];
    }

    /**
     * Sets split_type
     *
     *  Returns or sets a value that how to determine which data points are in the second pie or bar on a pie of pie or bar of                        pie chart.
     *
     * @return $this
     */
    public function setSplitType($split_type)
    {
        $this->container['split_type'] = $split_type;

        return $this;
    }
   /**
     * Gets split_value
     *
     * @return double
     */
    public function getSplitValue()
    {
        return $this->container['split_value'];
    }

    /**
     * Sets split_value
     *
     *  Returns or sets a value that shall be used to determine which data points are in the second pie or bar on                        a pie of pie or bar of pie chart.
     *
     * @return $this
     */
    public function setSplitValue($split_value)
    {
        $this->container['split_value'] = $split_value;

        return $this;
    }
   /**
     * Gets trend_lines
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getTrendLines()
    {
        return $this->container['trend_lines'];
    }

    /**
     * Sets trend_lines
     *
     *  Returns an object that represents a collection of all the trendlines for the series.
     *
     * @return $this
     */
    public function setTrendLines($trend_lines)
    {
        $this->container['trend_lines'] = $trend_lines;

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
     *  Gets or sets a data series' type.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }
   /**
     * Gets up_bars
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getUpBars()
    {
        return $this->container['up_bars'];
    }

    /**
     * Sets up_bars
     *
     *  Returns an DropBars object that represents the up bars on a line chart.                        Applies only to line charts.
     *
     * @return $this
     */
    public function setUpBars($up_bars)
    {
        $this->container['up_bars'] = $up_bars;

        return $this;
    }
   /**
     * Gets values
     *
     * @return string
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     *  Represents the data of the chart series.
     *
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

        return $this;
    }
   /**
     * Gets x_error_bar
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getXErrorBar()
    {
        return $this->container['x_error_bar'];
    }

    /**
     * Sets x_error_bar
     *
     *  Represents X direction error bar of the series.
     *
     * @return $this
     */
    public function setXErrorBar($x_error_bar)
    {
        $this->container['x_error_bar'] = $x_error_bar;

        return $this;
    }
   /**
     * Gets x_values
     *
     * @return string
     */
    public function getXValues()
    {
        return $this->container['x_values'];
    }

    /**
     * Sets x_values
     *
     *  Represents the x values of the chart series.
     *
     * @return $this
     */
    public function setXValues($x_values)
    {
        $this->container['x_values'] = $x_values;

        return $this;
    }
   /**
     * Gets y_error_bar
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getYErrorBar()
    {
        return $this->container['y_error_bar'];
    }

    /**
     * Sets y_error_bar
     *
     *  Represents Y direction error bar of the series.
     *
     * @return $this
     */
    public function setYErrorBar($y_error_bar)
    {
        $this->container['y_error_bar'] = $y_error_bar;

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
