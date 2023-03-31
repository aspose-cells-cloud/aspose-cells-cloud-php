<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PivotTable.cs">
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

class PivotTable implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PivotTable';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alt_text_description' => 'string',
        'alt_text_title' => 'string',
        'auto_format_type' => 'string',
        'base_fields' => '\Aspose\Cells\Cloud\Model\PivotField[]',
        'column_fields' => '\Aspose\Cells\Cloud\Model\PivotField[]',
        'column_grand' => 'bool',
        'column_header_caption' => 'string',
        'column_range' => '\Aspose\Cells\Cloud\Model\CellArea',
        'custom_list_sort' => 'bool',
        'data_body_range' => '\Aspose\Cells\Cloud\Model\CellArea',
        'data_field' => '\Aspose\Cells\Cloud\Model\PivotField',
        'data_fields' => '\Aspose\Cells\Cloud\Model\PivotField[]',
        'data_source' => 'string[]',
        'display_error_string' => 'bool',
        'display_immediate_items' => 'bool',
        'display_null_string' => 'bool',
        'enable_data_value_editing' => 'bool',
        'enable_drilldown' => 'bool',
        'enable_field_dialog' => 'bool',
        'enable_field_list' => 'bool',
        'enable_wizard' => 'bool',
        'error_string' => 'string',
        'field_list_sort_ascending' => 'bool',
        'grand_total_name' => 'string',
        'has_blank_rows' => 'bool',
        'indent' => 'int',
        'is_auto_format' => 'bool',
        'is_grid_drop_zones' => 'bool',
        'is_multiple_field_filters' => 'bool',
        'is_selected' => 'bool',
        'item_print_titles' => 'bool',
        'manual_update' => 'bool',
        'merge_labels' => 'bool',
        'missing_items_limit' => 'string',
        'name' => 'string',
        'null_string' => 'string',
        'page_field_order' => 'string',
        'page_fields' => '\Aspose\Cells\Cloud\Model\PivotField[]',
        'page_field_wrap_count' => 'int',
        'pivot_filters' => '\Aspose\Cells\Cloud\Model\PivotFilter[]',
        'pivot_table_style_name' => 'string',
        'pivot_table_style_type' => 'string',
        'preserve_formatting' => 'bool',
        'print_drill' => 'bool',
        'print_titles' => 'bool',
        'refresh_data_flag' => 'bool',
        'refresh_data_on_opening_file' => 'bool',
        'row_fields' => '\Aspose\Cells\Cloud\Model\PivotField[]',
        'row_grand' => 'bool',
        'row_header_caption' => 'string',
        'row_range' => '\Aspose\Cells\Cloud\Model\CellArea',
        'save_data' => 'bool',
        'show_data_tips' => 'bool',
        'show_drill' => 'bool',
        'show_empty_col' => 'bool',
        'show_empty_row' => 'bool',
        'show_member_property_tips' => 'bool',
        'show_pivot_style_column_header' => 'bool',
        'show_pivot_style_column_stripes' => 'bool',
        'show_pivot_style_last_column' => 'bool',
        'show_pivot_style_row_header' => 'bool',
        'show_pivot_style_row_stripes' => 'bool',
        'show_row_header_caption' => 'bool',
        'show_values_row' => 'bool',
        'subtotal_hidden_page_items' => 'bool',
        'table_range1' => '\Aspose\Cells\Cloud\Model\CellArea',
        'table_range2' => '\Aspose\Cells\Cloud\Model\CellArea',
        'tag' => 'string',
        'link' => '\Aspose\Cells\Cloud\Model\Link'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'alt_text_description' => null  ,
        'alt_text_title' => null  ,
        'auto_format_type' => null  ,
        'base_fields' => null  ,
        'column_fields' => null  ,
        'column_grand' => null  ,
        'column_header_caption' => null  ,
        'column_range' => null  ,
        'custom_list_sort' => null  ,
        'data_body_range' => null  ,
        'data_field' => null  ,
        'data_fields' => null  ,
        'data_source' => null  ,
        'display_error_string' => null  ,
        'display_immediate_items' => null  ,
        'display_null_string' => null  ,
        'enable_data_value_editing' => null  ,
        'enable_drilldown' => null  ,
        'enable_field_dialog' => null  ,
        'enable_field_list' => null  ,
        'enable_wizard' => null  ,
        'error_string' => null  ,
        'field_list_sort_ascending' => null  ,
        'grand_total_name' => null  ,
        'has_blank_rows' => null  ,
        'indent' => null  ,
        'is_auto_format' => null  ,
        'is_grid_drop_zones' => null  ,
        'is_multiple_field_filters' => null  ,
        'is_selected' => null  ,
        'item_print_titles' => null  ,
        'manual_update' => null  ,
        'merge_labels' => null  ,
        'missing_items_limit' => null  ,
        'name' => null  ,
        'null_string' => null  ,
        'page_field_order' => null  ,
        'page_fields' => null  ,
        'page_field_wrap_count' => null  ,
        'pivot_filters' => null  ,
        'pivot_table_style_name' => null  ,
        'pivot_table_style_type' => null  ,
        'preserve_formatting' => null  ,
        'print_drill' => null  ,
        'print_titles' => null  ,
        'refresh_data_flag' => null  ,
        'refresh_data_on_opening_file' => null  ,
        'row_fields' => null  ,
        'row_grand' => null  ,
        'row_header_caption' => null  ,
        'row_range' => null  ,
        'save_data' => null  ,
        'show_data_tips' => null  ,
        'show_drill' => null  ,
        'show_empty_col' => null  ,
        'show_empty_row' => null  ,
        'show_member_property_tips' => null  ,
        'show_pivot_style_column_header' => null  ,
        'show_pivot_style_column_stripes' => null  ,
        'show_pivot_style_last_column' => null  ,
        'show_pivot_style_row_header' => null  ,
        'show_pivot_style_row_stripes' => null  ,
        'show_row_header_caption' => null  ,
        'show_values_row' => null  ,
        'subtotal_hidden_page_items' => null  ,
        'table_range1' => null  ,
        'table_range2' => null  ,
        'tag' => null  ,
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
         'alt_text_description' => 'AltTextDescription' ,
         'alt_text_title' => 'AltTextTitle' ,
         'auto_format_type' => 'AutoFormatType' ,
         'base_fields' => 'BaseFields' ,
         'column_fields' => 'ColumnFields' ,
         'column_grand' => 'ColumnGrand' ,
         'column_header_caption' => 'ColumnHeaderCaption' ,
         'column_range' => 'ColumnRange' ,
         'custom_list_sort' => 'CustomListSort' ,
         'data_body_range' => 'DataBodyRange' ,
         'data_field' => 'DataField' ,
         'data_fields' => 'DataFields' ,
         'data_source' => 'DataSource' ,
         'display_error_string' => 'DisplayErrorString' ,
         'display_immediate_items' => 'DisplayImmediateItems' ,
         'display_null_string' => 'DisplayNullString' ,
         'enable_data_value_editing' => 'EnableDataValueEditing' ,
         'enable_drilldown' => 'EnableDrilldown' ,
         'enable_field_dialog' => 'EnableFieldDialog' ,
         'enable_field_list' => 'EnableFieldList' ,
         'enable_wizard' => 'EnableWizard' ,
         'error_string' => 'ErrorString' ,
         'field_list_sort_ascending' => 'FieldListSortAscending' ,
         'grand_total_name' => 'GrandTotalName' ,
         'has_blank_rows' => 'HasBlankRows' ,
         'indent' => 'Indent' ,
         'is_auto_format' => 'IsAutoFormat' ,
         'is_grid_drop_zones' => 'IsGridDropZones' ,
         'is_multiple_field_filters' => 'IsMultipleFieldFilters' ,
         'is_selected' => 'IsSelected' ,
         'item_print_titles' => 'ItemPrintTitles' ,
         'manual_update' => 'ManualUpdate' ,
         'merge_labels' => 'MergeLabels' ,
         'missing_items_limit' => 'MissingItemsLimit' ,
         'name' => 'Name' ,
         'null_string' => 'NullString' ,
         'page_field_order' => 'PageFieldOrder' ,
         'page_fields' => 'PageFields' ,
         'page_field_wrap_count' => 'PageFieldWrapCount' ,
         'pivot_filters' => 'PivotFilters' ,
         'pivot_table_style_name' => 'PivotTableStyleName' ,
         'pivot_table_style_type' => 'PivotTableStyleType' ,
         'preserve_formatting' => 'PreserveFormatting' ,
         'print_drill' => 'PrintDrill' ,
         'print_titles' => 'PrintTitles' ,
         'refresh_data_flag' => 'RefreshDataFlag' ,
         'refresh_data_on_opening_file' => 'RefreshDataOnOpeningFile' ,
         'row_fields' => 'RowFields' ,
         'row_grand' => 'RowGrand' ,
         'row_header_caption' => 'RowHeaderCaption' ,
         'row_range' => 'RowRange' ,
         'save_data' => 'SaveData' ,
         'show_data_tips' => 'ShowDataTips' ,
         'show_drill' => 'ShowDrill' ,
         'show_empty_col' => 'ShowEmptyCol' ,
         'show_empty_row' => 'ShowEmptyRow' ,
         'show_member_property_tips' => 'ShowMemberPropertyTips' ,
         'show_pivot_style_column_header' => 'ShowPivotStyleColumnHeader' ,
         'show_pivot_style_column_stripes' => 'ShowPivotStyleColumnStripes' ,
         'show_pivot_style_last_column' => 'ShowPivotStyleLastColumn' ,
         'show_pivot_style_row_header' => 'ShowPivotStyleRowHeader' ,
         'show_pivot_style_row_stripes' => 'ShowPivotStyleRowStripes' ,
         'show_row_header_caption' => 'ShowRowHeaderCaption' ,
         'show_values_row' => 'ShowValuesRow' ,
         'subtotal_hidden_page_items' => 'SubtotalHiddenPageItems' ,
         'table_range1' => 'TableRange1' ,
         'table_range2' => 'TableRange2' ,
         'tag' => 'Tag' ,
         'link' => 'link' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alt_text_description' => 'setAltTextDescription' ,
        'alt_text_title' => 'setAltTextTitle' ,
        'auto_format_type' => 'setAutoFormatType' ,
        'base_fields' => 'setBaseFields' ,
        'column_fields' => 'setColumnFields' ,
        'column_grand' => 'setColumnGrand' ,
        'column_header_caption' => 'setColumnHeaderCaption' ,
        'column_range' => 'setColumnRange' ,
        'custom_list_sort' => 'setCustomListSort' ,
        'data_body_range' => 'setDataBodyRange' ,
        'data_field' => 'setDataField' ,
        'data_fields' => 'setDataFields' ,
        'data_source' => 'setDataSource' ,
        'display_error_string' => 'setDisplayErrorString' ,
        'display_immediate_items' => 'setDisplayImmediateItems' ,
        'display_null_string' => 'setDisplayNullString' ,
        'enable_data_value_editing' => 'setEnableDataValueEditing' ,
        'enable_drilldown' => 'setEnableDrilldown' ,
        'enable_field_dialog' => 'setEnableFieldDialog' ,
        'enable_field_list' => 'setEnableFieldList' ,
        'enable_wizard' => 'setEnableWizard' ,
        'error_string' => 'setErrorString' ,
        'field_list_sort_ascending' => 'setFieldListSortAscending' ,
        'grand_total_name' => 'setGrandTotalName' ,
        'has_blank_rows' => 'setHasBlankRows' ,
        'indent' => 'setIndent' ,
        'is_auto_format' => 'setIsAutoFormat' ,
        'is_grid_drop_zones' => 'setIsGridDropZones' ,
        'is_multiple_field_filters' => 'setIsMultipleFieldFilters' ,
        'is_selected' => 'setIsSelected' ,
        'item_print_titles' => 'setItemPrintTitles' ,
        'manual_update' => 'setManualUpdate' ,
        'merge_labels' => 'setMergeLabels' ,
        'missing_items_limit' => 'setMissingItemsLimit' ,
        'name' => 'setName' ,
        'null_string' => 'setNullString' ,
        'page_field_order' => 'setPageFieldOrder' ,
        'page_fields' => 'setPageFields' ,
        'page_field_wrap_count' => 'setPageFieldWrapCount' ,
        'pivot_filters' => 'setPivotFilters' ,
        'pivot_table_style_name' => 'setPivotTableStyleName' ,
        'pivot_table_style_type' => 'setPivotTableStyleType' ,
        'preserve_formatting' => 'setPreserveFormatting' ,
        'print_drill' => 'setPrintDrill' ,
        'print_titles' => 'setPrintTitles' ,
        'refresh_data_flag' => 'setRefreshDataFlag' ,
        'refresh_data_on_opening_file' => 'setRefreshDataOnOpeningFile' ,
        'row_fields' => 'setRowFields' ,
        'row_grand' => 'setRowGrand' ,
        'row_header_caption' => 'setRowHeaderCaption' ,
        'row_range' => 'setRowRange' ,
        'save_data' => 'setSaveData' ,
        'show_data_tips' => 'setShowDataTips' ,
        'show_drill' => 'setShowDrill' ,
        'show_empty_col' => 'setShowEmptyCol' ,
        'show_empty_row' => 'setShowEmptyRow' ,
        'show_member_property_tips' => 'setShowMemberPropertyTips' ,
        'show_pivot_style_column_header' => 'setShowPivotStyleColumnHeader' ,
        'show_pivot_style_column_stripes' => 'setShowPivotStyleColumnStripes' ,
        'show_pivot_style_last_column' => 'setShowPivotStyleLastColumn' ,
        'show_pivot_style_row_header' => 'setShowPivotStyleRowHeader' ,
        'show_pivot_style_row_stripes' => 'setShowPivotStyleRowStripes' ,
        'show_row_header_caption' => 'setShowRowHeaderCaption' ,
        'show_values_row' => 'setShowValuesRow' ,
        'subtotal_hidden_page_items' => 'setSubtotalHiddenPageItems' ,
        'table_range1' => 'setTableRange1' ,
        'table_range2' => 'setTableRange2' ,
        'tag' => 'setTag' ,
        'link' => 'setlink' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alt_text_description' => 'getAltTextDescription' ,
        'alt_text_title' => 'getAltTextTitle' ,
        'auto_format_type' => 'getAutoFormatType' ,
        'base_fields' => 'getBaseFields' ,
        'column_fields' => 'getColumnFields' ,
        'column_grand' => 'getColumnGrand' ,
        'column_header_caption' => 'getColumnHeaderCaption' ,
        'column_range' => 'getColumnRange' ,
        'custom_list_sort' => 'getCustomListSort' ,
        'data_body_range' => 'getDataBodyRange' ,
        'data_field' => 'getDataField' ,
        'data_fields' => 'getDataFields' ,
        'data_source' => 'getDataSource' ,
        'display_error_string' => 'getDisplayErrorString' ,
        'display_immediate_items' => 'getDisplayImmediateItems' ,
        'display_null_string' => 'getDisplayNullString' ,
        'enable_data_value_editing' => 'getEnableDataValueEditing' ,
        'enable_drilldown' => 'getEnableDrilldown' ,
        'enable_field_dialog' => 'getEnableFieldDialog' ,
        'enable_field_list' => 'getEnableFieldList' ,
        'enable_wizard' => 'getEnableWizard' ,
        'error_string' => 'getErrorString' ,
        'field_list_sort_ascending' => 'getFieldListSortAscending' ,
        'grand_total_name' => 'getGrandTotalName' ,
        'has_blank_rows' => 'getHasBlankRows' ,
        'indent' => 'getIndent' ,
        'is_auto_format' => 'getIsAutoFormat' ,
        'is_grid_drop_zones' => 'getIsGridDropZones' ,
        'is_multiple_field_filters' => 'getIsMultipleFieldFilters' ,
        'is_selected' => 'getIsSelected' ,
        'item_print_titles' => 'getItemPrintTitles' ,
        'manual_update' => 'getManualUpdate' ,
        'merge_labels' => 'getMergeLabels' ,
        'missing_items_limit' => 'getMissingItemsLimit' ,
        'name' => 'getName' ,
        'null_string' => 'getNullString' ,
        'page_field_order' => 'getPageFieldOrder' ,
        'page_fields' => 'getPageFields' ,
        'page_field_wrap_count' => 'getPageFieldWrapCount' ,
        'pivot_filters' => 'getPivotFilters' ,
        'pivot_table_style_name' => 'getPivotTableStyleName' ,
        'pivot_table_style_type' => 'getPivotTableStyleType' ,
        'preserve_formatting' => 'getPreserveFormatting' ,
        'print_drill' => 'getPrintDrill' ,
        'print_titles' => 'getPrintTitles' ,
        'refresh_data_flag' => 'getRefreshDataFlag' ,
        'refresh_data_on_opening_file' => 'getRefreshDataOnOpeningFile' ,
        'row_fields' => 'getRowFields' ,
        'row_grand' => 'getRowGrand' ,
        'row_header_caption' => 'getRowHeaderCaption' ,
        'row_range' => 'getRowRange' ,
        'save_data' => 'getSaveData' ,
        'show_data_tips' => 'getShowDataTips' ,
        'show_drill' => 'getShowDrill' ,
        'show_empty_col' => 'getShowEmptyCol' ,
        'show_empty_row' => 'getShowEmptyRow' ,
        'show_member_property_tips' => 'getShowMemberPropertyTips' ,
        'show_pivot_style_column_header' => 'getShowPivotStyleColumnHeader' ,
        'show_pivot_style_column_stripes' => 'getShowPivotStyleColumnStripes' ,
        'show_pivot_style_last_column' => 'getShowPivotStyleLastColumn' ,
        'show_pivot_style_row_header' => 'getShowPivotStyleRowHeader' ,
        'show_pivot_style_row_stripes' => 'getShowPivotStyleRowStripes' ,
        'show_row_header_caption' => 'getShowRowHeaderCaption' ,
        'show_values_row' => 'getShowValuesRow' ,
        'subtotal_hidden_page_items' => 'getSubtotalHiddenPageItems' ,
        'table_range1' => 'getTableRange1' ,
        'table_range2' => 'getTableRange2' ,
        'tag' => 'getTag' ,
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
        $this->container['alt_text_description'] = isset($data['alt_text_description']) ? $data['alt_text_description'] : null;
        $this->container['alt_text_title'] = isset($data['alt_text_title']) ? $data['alt_text_title'] : null;
        $this->container['auto_format_type'] = isset($data['auto_format_type']) ? $data['auto_format_type'] : null;
        $this->container['base_fields'] = isset($data['base_fields']) ? $data['base_fields'] : null;
        $this->container['column_fields'] = isset($data['column_fields']) ? $data['column_fields'] : null;
        $this->container['column_grand'] = isset($data['column_grand']) ? $data['column_grand'] : null;
        $this->container['column_header_caption'] = isset($data['column_header_caption']) ? $data['column_header_caption'] : null;
        $this->container['column_range'] = isset($data['column_range']) ? $data['column_range'] : null;
        $this->container['custom_list_sort'] = isset($data['custom_list_sort']) ? $data['custom_list_sort'] : null;
        $this->container['data_body_range'] = isset($data['data_body_range']) ? $data['data_body_range'] : null;
        $this->container['data_field'] = isset($data['data_field']) ? $data['data_field'] : null;
        $this->container['data_fields'] = isset($data['data_fields']) ? $data['data_fields'] : null;
        $this->container['data_source'] = isset($data['data_source']) ? $data['data_source'] : null;
        $this->container['display_error_string'] = isset($data['display_error_string']) ? $data['display_error_string'] : null;
        $this->container['display_immediate_items'] = isset($data['display_immediate_items']) ? $data['display_immediate_items'] : null;
        $this->container['display_null_string'] = isset($data['display_null_string']) ? $data['display_null_string'] : null;
        $this->container['enable_data_value_editing'] = isset($data['enable_data_value_editing']) ? $data['enable_data_value_editing'] : null;
        $this->container['enable_drilldown'] = isset($data['enable_drilldown']) ? $data['enable_drilldown'] : null;
        $this->container['enable_field_dialog'] = isset($data['enable_field_dialog']) ? $data['enable_field_dialog'] : null;
        $this->container['enable_field_list'] = isset($data['enable_field_list']) ? $data['enable_field_list'] : null;
        $this->container['enable_wizard'] = isset($data['enable_wizard']) ? $data['enable_wizard'] : null;
        $this->container['error_string'] = isset($data['error_string']) ? $data['error_string'] : null;
        $this->container['field_list_sort_ascending'] = isset($data['field_list_sort_ascending']) ? $data['field_list_sort_ascending'] : null;
        $this->container['grand_total_name'] = isset($data['grand_total_name']) ? $data['grand_total_name'] : null;
        $this->container['has_blank_rows'] = isset($data['has_blank_rows']) ? $data['has_blank_rows'] : null;
        $this->container['indent'] = isset($data['indent']) ? $data['indent'] : null;
        $this->container['is_auto_format'] = isset($data['is_auto_format']) ? $data['is_auto_format'] : null;
        $this->container['is_grid_drop_zones'] = isset($data['is_grid_drop_zones']) ? $data['is_grid_drop_zones'] : null;
        $this->container['is_multiple_field_filters'] = isset($data['is_multiple_field_filters']) ? $data['is_multiple_field_filters'] : null;
        $this->container['is_selected'] = isset($data['is_selected']) ? $data['is_selected'] : null;
        $this->container['item_print_titles'] = isset($data['item_print_titles']) ? $data['item_print_titles'] : null;
        $this->container['manual_update'] = isset($data['manual_update']) ? $data['manual_update'] : null;
        $this->container['merge_labels'] = isset($data['merge_labels']) ? $data['merge_labels'] : null;
        $this->container['missing_items_limit'] = isset($data['missing_items_limit']) ? $data['missing_items_limit'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['null_string'] = isset($data['null_string']) ? $data['null_string'] : null;
        $this->container['page_field_order'] = isset($data['page_field_order']) ? $data['page_field_order'] : null;
        $this->container['page_fields'] = isset($data['page_fields']) ? $data['page_fields'] : null;
        $this->container['page_field_wrap_count'] = isset($data['page_field_wrap_count']) ? $data['page_field_wrap_count'] : null;
        $this->container['pivot_filters'] = isset($data['pivot_filters']) ? $data['pivot_filters'] : null;
        $this->container['pivot_table_style_name'] = isset($data['pivot_table_style_name']) ? $data['pivot_table_style_name'] : null;
        $this->container['pivot_table_style_type'] = isset($data['pivot_table_style_type']) ? $data['pivot_table_style_type'] : null;
        $this->container['preserve_formatting'] = isset($data['preserve_formatting']) ? $data['preserve_formatting'] : null;
        $this->container['print_drill'] = isset($data['print_drill']) ? $data['print_drill'] : null;
        $this->container['print_titles'] = isset($data['print_titles']) ? $data['print_titles'] : null;
        $this->container['refresh_data_flag'] = isset($data['refresh_data_flag']) ? $data['refresh_data_flag'] : null;
        $this->container['refresh_data_on_opening_file'] = isset($data['refresh_data_on_opening_file']) ? $data['refresh_data_on_opening_file'] : null;
        $this->container['row_fields'] = isset($data['row_fields']) ? $data['row_fields'] : null;
        $this->container['row_grand'] = isset($data['row_grand']) ? $data['row_grand'] : null;
        $this->container['row_header_caption'] = isset($data['row_header_caption']) ? $data['row_header_caption'] : null;
        $this->container['row_range'] = isset($data['row_range']) ? $data['row_range'] : null;
        $this->container['save_data'] = isset($data['save_data']) ? $data['save_data'] : null;
        $this->container['show_data_tips'] = isset($data['show_data_tips']) ? $data['show_data_tips'] : null;
        $this->container['show_drill'] = isset($data['show_drill']) ? $data['show_drill'] : null;
        $this->container['show_empty_col'] = isset($data['show_empty_col']) ? $data['show_empty_col'] : null;
        $this->container['show_empty_row'] = isset($data['show_empty_row']) ? $data['show_empty_row'] : null;
        $this->container['show_member_property_tips'] = isset($data['show_member_property_tips']) ? $data['show_member_property_tips'] : null;
        $this->container['show_pivot_style_column_header'] = isset($data['show_pivot_style_column_header']) ? $data['show_pivot_style_column_header'] : null;
        $this->container['show_pivot_style_column_stripes'] = isset($data['show_pivot_style_column_stripes']) ? $data['show_pivot_style_column_stripes'] : null;
        $this->container['show_pivot_style_last_column'] = isset($data['show_pivot_style_last_column']) ? $data['show_pivot_style_last_column'] : null;
        $this->container['show_pivot_style_row_header'] = isset($data['show_pivot_style_row_header']) ? $data['show_pivot_style_row_header'] : null;
        $this->container['show_pivot_style_row_stripes'] = isset($data['show_pivot_style_row_stripes']) ? $data['show_pivot_style_row_stripes'] : null;
        $this->container['show_row_header_caption'] = isset($data['show_row_header_caption']) ? $data['show_row_header_caption'] : null;
        $this->container['show_values_row'] = isset($data['show_values_row']) ? $data['show_values_row'] : null;
        $this->container['subtotal_hidden_page_items'] = isset($data['subtotal_hidden_page_items']) ? $data['subtotal_hidden_page_items'] : null;
        $this->container['table_range1'] = isset($data['table_range1']) ? $data['table_range1'] : null;
        $this->container['table_range2'] = isset($data['table_range2']) ? $data['table_range2'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
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
        if ($this->container['alt_text_description'] === null) {
            $invalidProperties[] = "'alt_text_description' can't be null";
        }
        if ($this->container['alt_text_title'] === null) {
            $invalidProperties[] = "'alt_text_title' can't be null";
        }
        if ($this->container['auto_format_type'] === null) {
            $invalidProperties[] = "'auto_format_type' can't be null";
        }
        if ($this->container['base_fields'] === null) {
            $invalidProperties[] = "'base_fields' can't be null";
        }
        if ($this->container['column_fields'] === null) {
            $invalidProperties[] = "'column_fields' can't be null";
        }
        if ($this->container['column_grand'] === null) {
            $invalidProperties[] = "'column_grand' can't be null";
        }
        if ($this->container['column_header_caption'] === null) {
            $invalidProperties[] = "'column_header_caption' can't be null";
        }
        if ($this->container['column_range'] === null) {
            $invalidProperties[] = "'column_range' can't be null";
        }
        if ($this->container['custom_list_sort'] === null) {
            $invalidProperties[] = "'custom_list_sort' can't be null";
        }
        if ($this->container['data_body_range'] === null) {
            $invalidProperties[] = "'data_body_range' can't be null";
        }
        if ($this->container['data_field'] === null) {
            $invalidProperties[] = "'data_field' can't be null";
        }
        if ($this->container['data_fields'] === null) {
            $invalidProperties[] = "'data_fields' can't be null";
        }
        if ($this->container['data_source'] === null) {
            $invalidProperties[] = "'data_source' can't be null";
        }
        if ($this->container['display_error_string'] === null) {
            $invalidProperties[] = "'display_error_string' can't be null";
        }
        if ($this->container['display_immediate_items'] === null) {
            $invalidProperties[] = "'display_immediate_items' can't be null";
        }
        if ($this->container['display_null_string'] === null) {
            $invalidProperties[] = "'display_null_string' can't be null";
        }
        if ($this->container['enable_data_value_editing'] === null) {
            $invalidProperties[] = "'enable_data_value_editing' can't be null";
        }
        if ($this->container['enable_drilldown'] === null) {
            $invalidProperties[] = "'enable_drilldown' can't be null";
        }
        if ($this->container['enable_field_dialog'] === null) {
            $invalidProperties[] = "'enable_field_dialog' can't be null";
        }
        if ($this->container['enable_field_list'] === null) {
            $invalidProperties[] = "'enable_field_list' can't be null";
        }
        if ($this->container['enable_wizard'] === null) {
            $invalidProperties[] = "'enable_wizard' can't be null";
        }
        if ($this->container['error_string'] === null) {
            $invalidProperties[] = "'error_string' can't be null";
        }
        if ($this->container['field_list_sort_ascending'] === null) {
            $invalidProperties[] = "'field_list_sort_ascending' can't be null";
        }
        if ($this->container['grand_total_name'] === null) {
            $invalidProperties[] = "'grand_total_name' can't be null";
        }
        if ($this->container['has_blank_rows'] === null) {
            $invalidProperties[] = "'has_blank_rows' can't be null";
        }
        if ($this->container['indent'] === null) {
            $invalidProperties[] = "'indent' can't be null";
        }
        if ($this->container['is_auto_format'] === null) {
            $invalidProperties[] = "'is_auto_format' can't be null";
        }
        if ($this->container['is_grid_drop_zones'] === null) {
            $invalidProperties[] = "'is_grid_drop_zones' can't be null";
        }
        if ($this->container['is_multiple_field_filters'] === null) {
            $invalidProperties[] = "'is_multiple_field_filters' can't be null";
        }
        if ($this->container['is_selected'] === null) {
            $invalidProperties[] = "'is_selected' can't be null";
        }
        if ($this->container['item_print_titles'] === null) {
            $invalidProperties[] = "'item_print_titles' can't be null";
        }
        if ($this->container['manual_update'] === null) {
            $invalidProperties[] = "'manual_update' can't be null";
        }
        if ($this->container['merge_labels'] === null) {
            $invalidProperties[] = "'merge_labels' can't be null";
        }
        if ($this->container['missing_items_limit'] === null) {
            $invalidProperties[] = "'missing_items_limit' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['null_string'] === null) {
            $invalidProperties[] = "'null_string' can't be null";
        }
        if ($this->container['page_field_order'] === null) {
            $invalidProperties[] = "'page_field_order' can't be null";
        }
        if ($this->container['page_fields'] === null) {
            $invalidProperties[] = "'page_fields' can't be null";
        }
        if ($this->container['page_field_wrap_count'] === null) {
            $invalidProperties[] = "'page_field_wrap_count' can't be null";
        }
        if ($this->container['pivot_filters'] === null) {
            $invalidProperties[] = "'pivot_filters' can't be null";
        }
        if ($this->container['pivot_table_style_name'] === null) {
            $invalidProperties[] = "'pivot_table_style_name' can't be null";
        }
        if ($this->container['pivot_table_style_type'] === null) {
            $invalidProperties[] = "'pivot_table_style_type' can't be null";
        }
        if ($this->container['preserve_formatting'] === null) {
            $invalidProperties[] = "'preserve_formatting' can't be null";
        }
        if ($this->container['print_drill'] === null) {
            $invalidProperties[] = "'print_drill' can't be null";
        }
        if ($this->container['print_titles'] === null) {
            $invalidProperties[] = "'print_titles' can't be null";
        }
        if ($this->container['refresh_data_flag'] === null) {
            $invalidProperties[] = "'refresh_data_flag' can't be null";
        }
        if ($this->container['refresh_data_on_opening_file'] === null) {
            $invalidProperties[] = "'refresh_data_on_opening_file' can't be null";
        }
        if ($this->container['row_fields'] === null) {
            $invalidProperties[] = "'row_fields' can't be null";
        }
        if ($this->container['row_grand'] === null) {
            $invalidProperties[] = "'row_grand' can't be null";
        }
        if ($this->container['row_header_caption'] === null) {
            $invalidProperties[] = "'row_header_caption' can't be null";
        }
        if ($this->container['row_range'] === null) {
            $invalidProperties[] = "'row_range' can't be null";
        }
        if ($this->container['save_data'] === null) {
            $invalidProperties[] = "'save_data' can't be null";
        }
        if ($this->container['show_data_tips'] === null) {
            $invalidProperties[] = "'show_data_tips' can't be null";
        }
        if ($this->container['show_drill'] === null) {
            $invalidProperties[] = "'show_drill' can't be null";
        }
        if ($this->container['show_empty_col'] === null) {
            $invalidProperties[] = "'show_empty_col' can't be null";
        }
        if ($this->container['show_empty_row'] === null) {
            $invalidProperties[] = "'show_empty_row' can't be null";
        }
        if ($this->container['show_member_property_tips'] === null) {
            $invalidProperties[] = "'show_member_property_tips' can't be null";
        }
        if ($this->container['show_pivot_style_column_header'] === null) {
            $invalidProperties[] = "'show_pivot_style_column_header' can't be null";
        }
        if ($this->container['show_pivot_style_column_stripes'] === null) {
            $invalidProperties[] = "'show_pivot_style_column_stripes' can't be null";
        }
        if ($this->container['show_pivot_style_last_column'] === null) {
            $invalidProperties[] = "'show_pivot_style_last_column' can't be null";
        }
        if ($this->container['show_pivot_style_row_header'] === null) {
            $invalidProperties[] = "'show_pivot_style_row_header' can't be null";
        }
        if ($this->container['show_pivot_style_row_stripes'] === null) {
            $invalidProperties[] = "'show_pivot_style_row_stripes' can't be null";
        }
        if ($this->container['show_row_header_caption'] === null) {
            $invalidProperties[] = "'show_row_header_caption' can't be null";
        }
        if ($this->container['show_values_row'] === null) {
            $invalidProperties[] = "'show_values_row' can't be null";
        }
        if ($this->container['subtotal_hidden_page_items'] === null) {
            $invalidProperties[] = "'subtotal_hidden_page_items' can't be null";
        }
        if ($this->container['table_range1'] === null) {
            $invalidProperties[] = "'table_range1' can't be null";
        }
        if ($this->container['table_range2'] === null) {
            $invalidProperties[] = "'table_range2' can't be null";
        }
        if ($this->container['tag'] === null) {
            $invalidProperties[] = "'tag' can't be null";
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
        if ($this->container['alt_text_description'] === null) {
                    return false;
                }
        if ($this->container['alt_text_title'] === null) {
                    return false;
                }
        if ($this->container['auto_format_type'] === null) {
                    return false;
                }
        if ($this->container['base_fields'] === null) {
                    return false;
                }
        if ($this->container['column_fields'] === null) {
                    return false;
                }
        if ($this->container['column_grand'] === null) {
                    return false;
                }
        if ($this->container['column_header_caption'] === null) {
                    return false;
                }
        if ($this->container['column_range'] === null) {
                    return false;
                }
        if ($this->container['custom_list_sort'] === null) {
                    return false;
                }
        if ($this->container['data_body_range'] === null) {
                    return false;
                }
        if ($this->container['data_field'] === null) {
                    return false;
                }
        if ($this->container['data_fields'] === null) {
                    return false;
                }
        if ($this->container['data_source'] === null) {
                    return false;
                }
        if ($this->container['display_error_string'] === null) {
                    return false;
                }
        if ($this->container['display_immediate_items'] === null) {
                    return false;
                }
        if ($this->container['display_null_string'] === null) {
                    return false;
                }
        if ($this->container['enable_data_value_editing'] === null) {
                    return false;
                }
        if ($this->container['enable_drilldown'] === null) {
                    return false;
                }
        if ($this->container['enable_field_dialog'] === null) {
                    return false;
                }
        if ($this->container['enable_field_list'] === null) {
                    return false;
                }
        if ($this->container['enable_wizard'] === null) {
                    return false;
                }
        if ($this->container['error_string'] === null) {
                    return false;
                }
        if ($this->container['field_list_sort_ascending'] === null) {
                    return false;
                }
        if ($this->container['grand_total_name'] === null) {
                    return false;
                }
        if ($this->container['has_blank_rows'] === null) {
                    return false;
                }
        if ($this->container['indent'] === null) {
                    return false;
                }
        if ($this->container['is_auto_format'] === null) {
                    return false;
                }
        if ($this->container['is_grid_drop_zones'] === null) {
                    return false;
                }
        if ($this->container['is_multiple_field_filters'] === null) {
                    return false;
                }
        if ($this->container['is_selected'] === null) {
                    return false;
                }
        if ($this->container['item_print_titles'] === null) {
                    return false;
                }
        if ($this->container['manual_update'] === null) {
                    return false;
                }
        if ($this->container['merge_labels'] === null) {
                    return false;
                }
        if ($this->container['missing_items_limit'] === null) {
                    return false;
                }
        if ($this->container['name'] === null) {
                    return false;
                }
        if ($this->container['null_string'] === null) {
                    return false;
                }
        if ($this->container['page_field_order'] === null) {
                    return false;
                }
        if ($this->container['page_fields'] === null) {
                    return false;
                }
        if ($this->container['page_field_wrap_count'] === null) {
                    return false;
                }
        if ($this->container['pivot_filters'] === null) {
                    return false;
                }
        if ($this->container['pivot_table_style_name'] === null) {
                    return false;
                }
        if ($this->container['pivot_table_style_type'] === null) {
                    return false;
                }
        if ($this->container['preserve_formatting'] === null) {
                    return false;
                }
        if ($this->container['print_drill'] === null) {
                    return false;
                }
        if ($this->container['print_titles'] === null) {
                    return false;
                }
        if ($this->container['refresh_data_flag'] === null) {
                    return false;
                }
        if ($this->container['refresh_data_on_opening_file'] === null) {
                    return false;
                }
        if ($this->container['row_fields'] === null) {
                    return false;
                }
        if ($this->container['row_grand'] === null) {
                    return false;
                }
        if ($this->container['row_header_caption'] === null) {
                    return false;
                }
        if ($this->container['row_range'] === null) {
                    return false;
                }
        if ($this->container['save_data'] === null) {
                    return false;
                }
        if ($this->container['show_data_tips'] === null) {
                    return false;
                }
        if ($this->container['show_drill'] === null) {
                    return false;
                }
        if ($this->container['show_empty_col'] === null) {
                    return false;
                }
        if ($this->container['show_empty_row'] === null) {
                    return false;
                }
        if ($this->container['show_member_property_tips'] === null) {
                    return false;
                }
        if ($this->container['show_pivot_style_column_header'] === null) {
                    return false;
                }
        if ($this->container['show_pivot_style_column_stripes'] === null) {
                    return false;
                }
        if ($this->container['show_pivot_style_last_column'] === null) {
                    return false;
                }
        if ($this->container['show_pivot_style_row_header'] === null) {
                    return false;
                }
        if ($this->container['show_pivot_style_row_stripes'] === null) {
                    return false;
                }
        if ($this->container['show_row_header_caption'] === null) {
                    return false;
                }
        if ($this->container['show_values_row'] === null) {
                    return false;
                }
        if ($this->container['subtotal_hidden_page_items'] === null) {
                    return false;
                }
        if ($this->container['table_range1'] === null) {
                    return false;
                }
        if ($this->container['table_range2'] === null) {
                    return false;
                }
        if ($this->container['tag'] === null) {
                    return false;
                }
        if ($this->container['link'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets alt_text_description
     *
     * @return string
     */
    public function getAltTextDescription()
    {
        return $this->container['alt_text_description'];
    }

    /**
     * Sets alt_text_description
     *
     *  
     *
     * @return $this
     */
    public function setAltTextDescription($alt_text_description)
    {
        $this->container['alt_text_description'] = $alt_text_description;

        return $this;
    }
   /**
     * Gets alt_text_title
     *
     * @return string
     */
    public function getAltTextTitle()
    {
        return $this->container['alt_text_title'];
    }

    /**
     * Sets alt_text_title
     *
     *  
     *
     * @return $this
     */
    public function setAltTextTitle($alt_text_title)
    {
        $this->container['alt_text_title'] = $alt_text_title;

        return $this;
    }
   /**
     * Gets auto_format_type
     *
     * @return string
     */
    public function getAutoFormatType()
    {
        return $this->container['auto_format_type'];
    }

    /**
     * Sets auto_format_type
     *
     *  
     *
     * @return $this
     */
    public function setAutoFormatType($auto_format_type)
    {
        $this->container['auto_format_type'] = $auto_format_type;

        return $this;
    }
   /**
     * Gets base_fields
     *
     * @return \Aspose\Cells\Cloud\Model\PivotField[]
     */
    public function getBaseFields()
    {
        return $this->container['base_fields'];
    }

    /**
     * Sets base_fields
     *
     *  
     *
     * @return $this
     */
    public function setBaseFields($base_fields)
    {
        $this->container['base_fields'] = $base_fields;

        return $this;
    }
   /**
     * Gets column_fields
     *
     * @return \Aspose\Cells\Cloud\Model\PivotField[]
     */
    public function getColumnFields()
    {
        return $this->container['column_fields'];
    }

    /**
     * Sets column_fields
     *
     *  
     *
     * @return $this
     */
    public function setColumnFields($column_fields)
    {
        $this->container['column_fields'] = $column_fields;

        return $this;
    }
   /**
     * Gets column_grand
     *
     * @return bool
     */
    public function getColumnGrand()
    {
        return $this->container['column_grand'];
    }

    /**
     * Sets column_grand
     *
     *  
     *
     * @return $this
     */
    public function setColumnGrand($column_grand)
    {
        $this->container['column_grand'] = $column_grand;

        return $this;
    }
   /**
     * Gets column_header_caption
     *
     * @return string
     */
    public function getColumnHeaderCaption()
    {
        return $this->container['column_header_caption'];
    }

    /**
     * Sets column_header_caption
     *
     *  
     *
     * @return $this
     */
    public function setColumnHeaderCaption($column_header_caption)
    {
        $this->container['column_header_caption'] = $column_header_caption;

        return $this;
    }
   /**
     * Gets column_range
     *
     * @return \Aspose\Cells\Cloud\Model\CellArea
     */
    public function getColumnRange()
    {
        return $this->container['column_range'];
    }

    /**
     * Sets column_range
     *
     *  
     *
     * @return $this
     */
    public function setColumnRange($column_range)
    {
        $this->container['column_range'] = $column_range;

        return $this;
    }
   /**
     * Gets custom_list_sort
     *
     * @return bool
     */
    public function getCustomListSort()
    {
        return $this->container['custom_list_sort'];
    }

    /**
     * Sets custom_list_sort
     *
     *  
     *
     * @return $this
     */
    public function setCustomListSort($custom_list_sort)
    {
        $this->container['custom_list_sort'] = $custom_list_sort;

        return $this;
    }
   /**
     * Gets data_body_range
     *
     * @return \Aspose\Cells\Cloud\Model\CellArea
     */
    public function getDataBodyRange()
    {
        return $this->container['data_body_range'];
    }

    /**
     * Sets data_body_range
     *
     *  
     *
     * @return $this
     */
    public function setDataBodyRange($data_body_range)
    {
        $this->container['data_body_range'] = $data_body_range;

        return $this;
    }
   /**
     * Gets data_field
     *
     * @return \Aspose\Cells\Cloud\Model\PivotField
     */
    public function getDataField()
    {
        return $this->container['data_field'];
    }

    /**
     * Sets data_field
     *
     *  
     *
     * @return $this
     */
    public function setDataField($data_field)
    {
        $this->container['data_field'] = $data_field;

        return $this;
    }
   /**
     * Gets data_fields
     *
     * @return \Aspose\Cells\Cloud\Model\PivotField[]
     */
    public function getDataFields()
    {
        return $this->container['data_fields'];
    }

    /**
     * Sets data_fields
     *
     *  
     *
     * @return $this
     */
    public function setDataFields($data_fields)
    {
        $this->container['data_fields'] = $data_fields;

        return $this;
    }
   /**
     * Gets data_source
     *
     * @return string[]
     */
    public function getDataSource()
    {
        return $this->container['data_source'];
    }

    /**
     * Sets data_source
     *
     *  
     *
     * @return $this
     */
    public function setDataSource($data_source)
    {
        $this->container['data_source'] = $data_source;

        return $this;
    }
   /**
     * Gets display_error_string
     *
     * @return bool
     */
    public function getDisplayErrorString()
    {
        return $this->container['display_error_string'];
    }

    /**
     * Sets display_error_string
     *
     *  
     *
     * @return $this
     */
    public function setDisplayErrorString($display_error_string)
    {
        $this->container['display_error_string'] = $display_error_string;

        return $this;
    }
   /**
     * Gets display_immediate_items
     *
     * @return bool
     */
    public function getDisplayImmediateItems()
    {
        return $this->container['display_immediate_items'];
    }

    /**
     * Sets display_immediate_items
     *
     *  
     *
     * @return $this
     */
    public function setDisplayImmediateItems($display_immediate_items)
    {
        $this->container['display_immediate_items'] = $display_immediate_items;

        return $this;
    }
   /**
     * Gets display_null_string
     *
     * @return bool
     */
    public function getDisplayNullString()
    {
        return $this->container['display_null_string'];
    }

    /**
     * Sets display_null_string
     *
     *  
     *
     * @return $this
     */
    public function setDisplayNullString($display_null_string)
    {
        $this->container['display_null_string'] = $display_null_string;

        return $this;
    }
   /**
     * Gets enable_data_value_editing
     *
     * @return bool
     */
    public function getEnableDataValueEditing()
    {
        return $this->container['enable_data_value_editing'];
    }

    /**
     * Sets enable_data_value_editing
     *
     *  
     *
     * @return $this
     */
    public function setEnableDataValueEditing($enable_data_value_editing)
    {
        $this->container['enable_data_value_editing'] = $enable_data_value_editing;

        return $this;
    }
   /**
     * Gets enable_drilldown
     *
     * @return bool
     */
    public function getEnableDrilldown()
    {
        return $this->container['enable_drilldown'];
    }

    /**
     * Sets enable_drilldown
     *
     *  
     *
     * @return $this
     */
    public function setEnableDrilldown($enable_drilldown)
    {
        $this->container['enable_drilldown'] = $enable_drilldown;

        return $this;
    }
   /**
     * Gets enable_field_dialog
     *
     * @return bool
     */
    public function getEnableFieldDialog()
    {
        return $this->container['enable_field_dialog'];
    }

    /**
     * Sets enable_field_dialog
     *
     *  
     *
     * @return $this
     */
    public function setEnableFieldDialog($enable_field_dialog)
    {
        $this->container['enable_field_dialog'] = $enable_field_dialog;

        return $this;
    }
   /**
     * Gets enable_field_list
     *
     * @return bool
     */
    public function getEnableFieldList()
    {
        return $this->container['enable_field_list'];
    }

    /**
     * Sets enable_field_list
     *
     *  
     *
     * @return $this
     */
    public function setEnableFieldList($enable_field_list)
    {
        $this->container['enable_field_list'] = $enable_field_list;

        return $this;
    }
   /**
     * Gets enable_wizard
     *
     * @return bool
     */
    public function getEnableWizard()
    {
        return $this->container['enable_wizard'];
    }

    /**
     * Sets enable_wizard
     *
     *  
     *
     * @return $this
     */
    public function setEnableWizard($enable_wizard)
    {
        $this->container['enable_wizard'] = $enable_wizard;

        return $this;
    }
   /**
     * Gets error_string
     *
     * @return string
     */
    public function getErrorString()
    {
        return $this->container['error_string'];
    }

    /**
     * Sets error_string
     *
     *  
     *
     * @return $this
     */
    public function setErrorString($error_string)
    {
        $this->container['error_string'] = $error_string;

        return $this;
    }
   /**
     * Gets field_list_sort_ascending
     *
     * @return bool
     */
    public function getFieldListSortAscending()
    {
        return $this->container['field_list_sort_ascending'];
    }

    /**
     * Sets field_list_sort_ascending
     *
     *  
     *
     * @return $this
     */
    public function setFieldListSortAscending($field_list_sort_ascending)
    {
        $this->container['field_list_sort_ascending'] = $field_list_sort_ascending;

        return $this;
    }
   /**
     * Gets grand_total_name
     *
     * @return string
     */
    public function getGrandTotalName()
    {
        return $this->container['grand_total_name'];
    }

    /**
     * Sets grand_total_name
     *
     *  
     *
     * @return $this
     */
    public function setGrandTotalName($grand_total_name)
    {
        $this->container['grand_total_name'] = $grand_total_name;

        return $this;
    }
   /**
     * Gets has_blank_rows
     *
     * @return bool
     */
    public function getHasBlankRows()
    {
        return $this->container['has_blank_rows'];
    }

    /**
     * Sets has_blank_rows
     *
     *  
     *
     * @return $this
     */
    public function setHasBlankRows($has_blank_rows)
    {
        $this->container['has_blank_rows'] = $has_blank_rows;

        return $this;
    }
   /**
     * Gets indent
     *
     * @return int
     */
    public function getIndent()
    {
        return $this->container['indent'];
    }

    /**
     * Sets indent
     *
     *  
     *
     * @return $this
     */
    public function setIndent($indent)
    {
        $this->container['indent'] = $indent;

        return $this;
    }
   /**
     * Gets is_auto_format
     *
     * @return bool
     */
    public function getIsAutoFormat()
    {
        return $this->container['is_auto_format'];
    }

    /**
     * Sets is_auto_format
     *
     *  
     *
     * @return $this
     */
    public function setIsAutoFormat($is_auto_format)
    {
        $this->container['is_auto_format'] = $is_auto_format;

        return $this;
    }
   /**
     * Gets is_grid_drop_zones
     *
     * @return bool
     */
    public function getIsGridDropZones()
    {
        return $this->container['is_grid_drop_zones'];
    }

    /**
     * Sets is_grid_drop_zones
     *
     *  
     *
     * @return $this
     */
    public function setIsGridDropZones($is_grid_drop_zones)
    {
        $this->container['is_grid_drop_zones'] = $is_grid_drop_zones;

        return $this;
    }
   /**
     * Gets is_multiple_field_filters
     *
     * @return bool
     */
    public function getIsMultipleFieldFilters()
    {
        return $this->container['is_multiple_field_filters'];
    }

    /**
     * Sets is_multiple_field_filters
     *
     *  
     *
     * @return $this
     */
    public function setIsMultipleFieldFilters($is_multiple_field_filters)
    {
        $this->container['is_multiple_field_filters'] = $is_multiple_field_filters;

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
     *  
     *
     * @return $this
     */
    public function setIsSelected($is_selected)
    {
        $this->container['is_selected'] = $is_selected;

        return $this;
    }
   /**
     * Gets item_print_titles
     *
     * @return bool
     */
    public function getItemPrintTitles()
    {
        return $this->container['item_print_titles'];
    }

    /**
     * Sets item_print_titles
     *
     *  
     *
     * @return $this
     */
    public function setItemPrintTitles($item_print_titles)
    {
        $this->container['item_print_titles'] = $item_print_titles;

        return $this;
    }
   /**
     * Gets manual_update
     *
     * @return bool
     */
    public function getManualUpdate()
    {
        return $this->container['manual_update'];
    }

    /**
     * Sets manual_update
     *
     *  
     *
     * @return $this
     */
    public function setManualUpdate($manual_update)
    {
        $this->container['manual_update'] = $manual_update;

        return $this;
    }
   /**
     * Gets merge_labels
     *
     * @return bool
     */
    public function getMergeLabels()
    {
        return $this->container['merge_labels'];
    }

    /**
     * Sets merge_labels
     *
     *  
     *
     * @return $this
     */
    public function setMergeLabels($merge_labels)
    {
        $this->container['merge_labels'] = $merge_labels;

        return $this;
    }
   /**
     * Gets missing_items_limit
     *
     * @return string
     */
    public function getMissingItemsLimit()
    {
        return $this->container['missing_items_limit'];
    }

    /**
     * Sets missing_items_limit
     *
     *  
     *
     * @return $this
     */
    public function setMissingItemsLimit($missing_items_limit)
    {
        $this->container['missing_items_limit'] = $missing_items_limit;

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
     *  
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }
   /**
     * Gets null_string
     *
     * @return string
     */
    public function getNullString()
    {
        return $this->container['null_string'];
    }

    /**
     * Sets null_string
     *
     *  
     *
     * @return $this
     */
    public function setNullString($null_string)
    {
        $this->container['null_string'] = $null_string;

        return $this;
    }
   /**
     * Gets page_field_order
     *
     * @return string
     */
    public function getPageFieldOrder()
    {
        return $this->container['page_field_order'];
    }

    /**
     * Sets page_field_order
     *
     *  
     *
     * @return $this
     */
    public function setPageFieldOrder($page_field_order)
    {
        $this->container['page_field_order'] = $page_field_order;

        return $this;
    }
   /**
     * Gets page_fields
     *
     * @return \Aspose\Cells\Cloud\Model\PivotField[]
     */
    public function getPageFields()
    {
        return $this->container['page_fields'];
    }

    /**
     * Sets page_fields
     *
     *  
     *
     * @return $this
     */
    public function setPageFields($page_fields)
    {
        $this->container['page_fields'] = $page_fields;

        return $this;
    }
   /**
     * Gets page_field_wrap_count
     *
     * @return int
     */
    public function getPageFieldWrapCount()
    {
        return $this->container['page_field_wrap_count'];
    }

    /**
     * Sets page_field_wrap_count
     *
     *  
     *
     * @return $this
     */
    public function setPageFieldWrapCount($page_field_wrap_count)
    {
        $this->container['page_field_wrap_count'] = $page_field_wrap_count;

        return $this;
    }
   /**
     * Gets pivot_filters
     *
     * @return \Aspose\Cells\Cloud\Model\PivotFilter[]
     */
    public function getPivotFilters()
    {
        return $this->container['pivot_filters'];
    }

    /**
     * Sets pivot_filters
     *
     *  
     *
     * @return $this
     */
    public function setPivotFilters($pivot_filters)
    {
        $this->container['pivot_filters'] = $pivot_filters;

        return $this;
    }
   /**
     * Gets pivot_table_style_name
     *
     * @return string
     */
    public function getPivotTableStyleName()
    {
        return $this->container['pivot_table_style_name'];
    }

    /**
     * Sets pivot_table_style_name
     *
     *  
     *
     * @return $this
     */
    public function setPivotTableStyleName($pivot_table_style_name)
    {
        $this->container['pivot_table_style_name'] = $pivot_table_style_name;

        return $this;
    }
   /**
     * Gets pivot_table_style_type
     *
     * @return string
     */
    public function getPivotTableStyleType()
    {
        return $this->container['pivot_table_style_type'];
    }

    /**
     * Sets pivot_table_style_type
     *
     *  
     *
     * @return $this
     */
    public function setPivotTableStyleType($pivot_table_style_type)
    {
        $this->container['pivot_table_style_type'] = $pivot_table_style_type;

        return $this;
    }
   /**
     * Gets preserve_formatting
     *
     * @return bool
     */
    public function getPreserveFormatting()
    {
        return $this->container['preserve_formatting'];
    }

    /**
     * Sets preserve_formatting
     *
     *  
     *
     * @return $this
     */
    public function setPreserveFormatting($preserve_formatting)
    {
        $this->container['preserve_formatting'] = $preserve_formatting;

        return $this;
    }
   /**
     * Gets print_drill
     *
     * @return bool
     */
    public function getPrintDrill()
    {
        return $this->container['print_drill'];
    }

    /**
     * Sets print_drill
     *
     *  
     *
     * @return $this
     */
    public function setPrintDrill($print_drill)
    {
        $this->container['print_drill'] = $print_drill;

        return $this;
    }
   /**
     * Gets print_titles
     *
     * @return bool
     */
    public function getPrintTitles()
    {
        return $this->container['print_titles'];
    }

    /**
     * Sets print_titles
     *
     *  
     *
     * @return $this
     */
    public function setPrintTitles($print_titles)
    {
        $this->container['print_titles'] = $print_titles;

        return $this;
    }
   /**
     * Gets refresh_data_flag
     *
     * @return bool
     */
    public function getRefreshDataFlag()
    {
        return $this->container['refresh_data_flag'];
    }

    /**
     * Sets refresh_data_flag
     *
     *  
     *
     * @return $this
     */
    public function setRefreshDataFlag($refresh_data_flag)
    {
        $this->container['refresh_data_flag'] = $refresh_data_flag;

        return $this;
    }
   /**
     * Gets refresh_data_on_opening_file
     *
     * @return bool
     */
    public function getRefreshDataOnOpeningFile()
    {
        return $this->container['refresh_data_on_opening_file'];
    }

    /**
     * Sets refresh_data_on_opening_file
     *
     *  
     *
     * @return $this
     */
    public function setRefreshDataOnOpeningFile($refresh_data_on_opening_file)
    {
        $this->container['refresh_data_on_opening_file'] = $refresh_data_on_opening_file;

        return $this;
    }
   /**
     * Gets row_fields
     *
     * @return \Aspose\Cells\Cloud\Model\PivotField[]
     */
    public function getRowFields()
    {
        return $this->container['row_fields'];
    }

    /**
     * Sets row_fields
     *
     *  
     *
     * @return $this
     */
    public function setRowFields($row_fields)
    {
        $this->container['row_fields'] = $row_fields;

        return $this;
    }
   /**
     * Gets row_grand
     *
     * @return bool
     */
    public function getRowGrand()
    {
        return $this->container['row_grand'];
    }

    /**
     * Sets row_grand
     *
     *  
     *
     * @return $this
     */
    public function setRowGrand($row_grand)
    {
        $this->container['row_grand'] = $row_grand;

        return $this;
    }
   /**
     * Gets row_header_caption
     *
     * @return string
     */
    public function getRowHeaderCaption()
    {
        return $this->container['row_header_caption'];
    }

    /**
     * Sets row_header_caption
     *
     *  
     *
     * @return $this
     */
    public function setRowHeaderCaption($row_header_caption)
    {
        $this->container['row_header_caption'] = $row_header_caption;

        return $this;
    }
   /**
     * Gets row_range
     *
     * @return \Aspose\Cells\Cloud\Model\CellArea
     */
    public function getRowRange()
    {
        return $this->container['row_range'];
    }

    /**
     * Sets row_range
     *
     *  
     *
     * @return $this
     */
    public function setRowRange($row_range)
    {
        $this->container['row_range'] = $row_range;

        return $this;
    }
   /**
     * Gets save_data
     *
     * @return bool
     */
    public function getSaveData()
    {
        return $this->container['save_data'];
    }

    /**
     * Sets save_data
     *
     *  
     *
     * @return $this
     */
    public function setSaveData($save_data)
    {
        $this->container['save_data'] = $save_data;

        return $this;
    }
   /**
     * Gets show_data_tips
     *
     * @return bool
     */
    public function getShowDataTips()
    {
        return $this->container['show_data_tips'];
    }

    /**
     * Sets show_data_tips
     *
     *  
     *
     * @return $this
     */
    public function setShowDataTips($show_data_tips)
    {
        $this->container['show_data_tips'] = $show_data_tips;

        return $this;
    }
   /**
     * Gets show_drill
     *
     * @return bool
     */
    public function getShowDrill()
    {
        return $this->container['show_drill'];
    }

    /**
     * Sets show_drill
     *
     *  
     *
     * @return $this
     */
    public function setShowDrill($show_drill)
    {
        $this->container['show_drill'] = $show_drill;

        return $this;
    }
   /**
     * Gets show_empty_col
     *
     * @return bool
     */
    public function getShowEmptyCol()
    {
        return $this->container['show_empty_col'];
    }

    /**
     * Sets show_empty_col
     *
     *  
     *
     * @return $this
     */
    public function setShowEmptyCol($show_empty_col)
    {
        $this->container['show_empty_col'] = $show_empty_col;

        return $this;
    }
   /**
     * Gets show_empty_row
     *
     * @return bool
     */
    public function getShowEmptyRow()
    {
        return $this->container['show_empty_row'];
    }

    /**
     * Sets show_empty_row
     *
     *  
     *
     * @return $this
     */
    public function setShowEmptyRow($show_empty_row)
    {
        $this->container['show_empty_row'] = $show_empty_row;

        return $this;
    }
   /**
     * Gets show_member_property_tips
     *
     * @return bool
     */
    public function getShowMemberPropertyTips()
    {
        return $this->container['show_member_property_tips'];
    }

    /**
     * Sets show_member_property_tips
     *
     *  
     *
     * @return $this
     */
    public function setShowMemberPropertyTips($show_member_property_tips)
    {
        $this->container['show_member_property_tips'] = $show_member_property_tips;

        return $this;
    }
   /**
     * Gets show_pivot_style_column_header
     *
     * @return bool
     */
    public function getShowPivotStyleColumnHeader()
    {
        return $this->container['show_pivot_style_column_header'];
    }

    /**
     * Sets show_pivot_style_column_header
     *
     *  
     *
     * @return $this
     */
    public function setShowPivotStyleColumnHeader($show_pivot_style_column_header)
    {
        $this->container['show_pivot_style_column_header'] = $show_pivot_style_column_header;

        return $this;
    }
   /**
     * Gets show_pivot_style_column_stripes
     *
     * @return bool
     */
    public function getShowPivotStyleColumnStripes()
    {
        return $this->container['show_pivot_style_column_stripes'];
    }

    /**
     * Sets show_pivot_style_column_stripes
     *
     *  
     *
     * @return $this
     */
    public function setShowPivotStyleColumnStripes($show_pivot_style_column_stripes)
    {
        $this->container['show_pivot_style_column_stripes'] = $show_pivot_style_column_stripes;

        return $this;
    }
   /**
     * Gets show_pivot_style_last_column
     *
     * @return bool
     */
    public function getShowPivotStyleLastColumn()
    {
        return $this->container['show_pivot_style_last_column'];
    }

    /**
     * Sets show_pivot_style_last_column
     *
     *  
     *
     * @return $this
     */
    public function setShowPivotStyleLastColumn($show_pivot_style_last_column)
    {
        $this->container['show_pivot_style_last_column'] = $show_pivot_style_last_column;

        return $this;
    }
   /**
     * Gets show_pivot_style_row_header
     *
     * @return bool
     */
    public function getShowPivotStyleRowHeader()
    {
        return $this->container['show_pivot_style_row_header'];
    }

    /**
     * Sets show_pivot_style_row_header
     *
     *  
     *
     * @return $this
     */
    public function setShowPivotStyleRowHeader($show_pivot_style_row_header)
    {
        $this->container['show_pivot_style_row_header'] = $show_pivot_style_row_header;

        return $this;
    }
   /**
     * Gets show_pivot_style_row_stripes
     *
     * @return bool
     */
    public function getShowPivotStyleRowStripes()
    {
        return $this->container['show_pivot_style_row_stripes'];
    }

    /**
     * Sets show_pivot_style_row_stripes
     *
     *  
     *
     * @return $this
     */
    public function setShowPivotStyleRowStripes($show_pivot_style_row_stripes)
    {
        $this->container['show_pivot_style_row_stripes'] = $show_pivot_style_row_stripes;

        return $this;
    }
   /**
     * Gets show_row_header_caption
     *
     * @return bool
     */
    public function getShowRowHeaderCaption()
    {
        return $this->container['show_row_header_caption'];
    }

    /**
     * Sets show_row_header_caption
     *
     *  
     *
     * @return $this
     */
    public function setShowRowHeaderCaption($show_row_header_caption)
    {
        $this->container['show_row_header_caption'] = $show_row_header_caption;

        return $this;
    }
   /**
     * Gets show_values_row
     *
     * @return bool
     */
    public function getShowValuesRow()
    {
        return $this->container['show_values_row'];
    }

    /**
     * Sets show_values_row
     *
     *  
     *
     * @return $this
     */
    public function setShowValuesRow($show_values_row)
    {
        $this->container['show_values_row'] = $show_values_row;

        return $this;
    }
   /**
     * Gets subtotal_hidden_page_items
     *
     * @return bool
     */
    public function getSubtotalHiddenPageItems()
    {
        return $this->container['subtotal_hidden_page_items'];
    }

    /**
     * Sets subtotal_hidden_page_items
     *
     *  
     *
     * @return $this
     */
    public function setSubtotalHiddenPageItems($subtotal_hidden_page_items)
    {
        $this->container['subtotal_hidden_page_items'] = $subtotal_hidden_page_items;

        return $this;
    }
   /**
     * Gets table_range1
     *
     * @return \Aspose\Cells\Cloud\Model\CellArea
     */
    public function getTableRange1()
    {
        return $this->container['table_range1'];
    }

    /**
     * Sets table_range1
     *
     *  
     *
     * @return $this
     */
    public function setTableRange1($table_range1)
    {
        $this->container['table_range1'] = $table_range1;

        return $this;
    }
   /**
     * Gets table_range2
     *
     * @return \Aspose\Cells\Cloud\Model\CellArea
     */
    public function getTableRange2()
    {
        return $this->container['table_range2'];
    }

    /**
     * Sets table_range2
     *
     *  
     *
     * @return $this
     */
    public function setTableRange2($table_range2)
    {
        $this->container['table_range2'] = $table_range2;

        return $this;
    }
   /**
     * Gets tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     *  
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

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
