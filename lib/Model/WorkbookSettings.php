<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WorkbookSettings.cs">
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

class WorkbookSettings implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WorkbookSettings';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_compress_pictures' => 'bool',
        'auto_recover' => 'bool',
        'build_version' => 'string',
        'calc_mode' => 'string',
        'calc_stack_size' => 'int',
        'calculation_id' => 'string',
        'check_comptiliblity' => 'bool',
        'check_excel_restriction' => 'bool',
        'crash_save' => 'bool',
        'create_calc_chain' => 'bool',
        'data_extract_load' => 'bool',
        'date1904' => 'bool',
        'display_drawing_objects' => 'string',
        'enable_macros' => 'bool',
        'first_visible_tab' => 'int',
        'hide_pivot_field_list' => 'bool',
        'is_default_encrypted' => 'bool',
        'is_hidden' => 'bool',
        'is_h_scroll_bar_visible' => 'bool',
        'is_minimized' => 'bool',
        'is_v_scroll_bar_visible' => 'bool',
        'iteration' => 'bool',
        'language_code' => 'string',
        'max_change' => 'double',
        'max_iteration' => 'int',
        'memory_setting' => 'string',
        'number_decimal_separator' => 'string',
        'number_group_separator' => 'string',
        'parsing_formula_on_open' => 'bool',
        'precision_as_displayed' => 'bool',
        'recalculate_before_save' => 'bool',
        're_calculate_on_open' => 'bool',
        'recommend_read_only' => 'bool',
        'region' => 'string',
        'remove_personal_information' => 'bool',
        'repair_load' => 'bool',
        'shared' => 'bool',
        'sheet_tab_bar_width' => 'int',
        'show_tabs' => 'bool',
        'update_adjacent_cells_border' => 'bool',
        'update_links_type' => 'string',
        'window_height' => 'double',
        'window_left' => 'double',
        'window_top' => 'double',
        'window_width' => 'double',
        'author' => 'string',
        'check_custom_number_format' => 'bool',
        'protection_type' => 'string',
        'globalization_settings' => '\Aspose\Cells\Cloud\Model\GlobalizationSettings',
        'password' => 'string',
        'write_protection' => '\Aspose\Cells\Cloud\Model\WriteProtection',
        'is_encrypted' => 'bool',
        'is_protected' => 'bool',
        'max_row' => 'int',
        'max_column' => 'int',
        'significant_digits' => 'int',
        'check_compatibility' => 'bool',
        'paper_size' => 'string',
        'max_rows_of_shared_formula' => 'int',
        'compliance' => 'string',
        'quote_prefix_to_style' => 'bool',
        'formula_settings' => '\Aspose\Cells\Cloud\Model\FormulaSettings',
        'force_full_calculate' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auto_compress_pictures' => null  ,
        'auto_recover' => null  ,
        'build_version' => null  ,
        'calc_mode' => null  ,
        'calc_stack_size' => null  ,
        'calculation_id' => null  ,
        'check_comptiliblity' => null  ,
        'check_excel_restriction' => null  ,
        'crash_save' => null  ,
        'create_calc_chain' => null  ,
        'data_extract_load' => null  ,
        'date1904' => null  ,
        'display_drawing_objects' => null  ,
        'enable_macros' => null  ,
        'first_visible_tab' => null  ,
        'hide_pivot_field_list' => null  ,
        'is_default_encrypted' => null  ,
        'is_hidden' => null  ,
        'is_h_scroll_bar_visible' => null  ,
        'is_minimized' => null  ,
        'is_v_scroll_bar_visible' => null  ,
        'iteration' => null  ,
        'language_code' => null  ,
        'max_change' => null  ,
        'max_iteration' => null  ,
        'memory_setting' => null  ,
        'number_decimal_separator' => null  ,
        'number_group_separator' => null  ,
        'parsing_formula_on_open' => null  ,
        'precision_as_displayed' => null  ,
        'recalculate_before_save' => null  ,
        're_calculate_on_open' => null  ,
        'recommend_read_only' => null  ,
        'region' => null  ,
        'remove_personal_information' => null  ,
        'repair_load' => null  ,
        'shared' => null  ,
        'sheet_tab_bar_width' => null  ,
        'show_tabs' => null  ,
        'update_adjacent_cells_border' => null  ,
        'update_links_type' => null  ,
        'window_height' => null  ,
        'window_left' => null  ,
        'window_top' => null  ,
        'window_width' => null  ,
        'author' => null  ,
        'check_custom_number_format' => null  ,
        'protection_type' => null  ,
        'globalization_settings' => null  ,
        'password' => null  ,
        'write_protection' => null  ,
        'is_encrypted' => null  ,
        'is_protected' => null  ,
        'max_row' => null  ,
        'max_column' => null  ,
        'significant_digits' => null  ,
        'check_compatibility' => null  ,
        'paper_size' => null  ,
        'max_rows_of_shared_formula' => null  ,
        'compliance' => null  ,
        'quote_prefix_to_style' => null  ,
        'formula_settings' => null  ,
        'force_full_calculate' => null  
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
         'auto_compress_pictures' => 'AutoCompressPictures' ,
         'auto_recover' => 'AutoRecover' ,
         'build_version' => 'BuildVersion' ,
         'calc_mode' => 'CalcMode' ,
         'calc_stack_size' => 'CalcStackSize' ,
         'calculation_id' => 'CalculationId' ,
         'check_comptiliblity' => 'CheckComptiliblity' ,
         'check_excel_restriction' => 'CheckExcelRestriction' ,
         'crash_save' => 'CrashSave' ,
         'create_calc_chain' => 'CreateCalcChain' ,
         'data_extract_load' => 'DataExtractLoad' ,
         'date1904' => 'Date1904' ,
         'display_drawing_objects' => 'DisplayDrawingObjects' ,
         'enable_macros' => 'EnableMacros' ,
         'first_visible_tab' => 'FirstVisibleTab' ,
         'hide_pivot_field_list' => 'HidePivotFieldList' ,
         'is_default_encrypted' => 'IsDefaultEncrypted' ,
         'is_hidden' => 'IsHidden' ,
         'is_h_scroll_bar_visible' => 'IsHScrollBarVisible' ,
         'is_minimized' => 'IsMinimized' ,
         'is_v_scroll_bar_visible' => 'IsVScrollBarVisible' ,
         'iteration' => 'Iteration' ,
         'language_code' => 'LanguageCode' ,
         'max_change' => 'MaxChange' ,
         'max_iteration' => 'MaxIteration' ,
         'memory_setting' => 'MemorySetting' ,
         'number_decimal_separator' => 'NumberDecimalSeparator' ,
         'number_group_separator' => 'NumberGroupSeparator' ,
         'parsing_formula_on_open' => 'ParsingFormulaOnOpen' ,
         'precision_as_displayed' => 'PrecisionAsDisplayed' ,
         'recalculate_before_save' => 'RecalculateBeforeSave' ,
         're_calculate_on_open' => 'ReCalculateOnOpen' ,
         'recommend_read_only' => 'RecommendReadOnly' ,
         'region' => 'Region' ,
         'remove_personal_information' => 'RemovePersonalInformation' ,
         'repair_load' => 'RepairLoad' ,
         'shared' => 'Shared' ,
         'sheet_tab_bar_width' => 'SheetTabBarWidth' ,
         'show_tabs' => 'ShowTabs' ,
         'update_adjacent_cells_border' => 'UpdateAdjacentCellsBorder' ,
         'update_links_type' => 'UpdateLinksType' ,
         'window_height' => 'WindowHeight' ,
         'window_left' => 'WindowLeft' ,
         'window_top' => 'WindowTop' ,
         'window_width' => 'WindowWidth' ,
         'author' => 'Author' ,
         'check_custom_number_format' => 'CheckCustomNumberFormat' ,
         'protection_type' => 'ProtectionType' ,
         'globalization_settings' => 'GlobalizationSettings' ,
         'password' => 'Password' ,
         'write_protection' => 'WriteProtection' ,
         'is_encrypted' => 'IsEncrypted' ,
         'is_protected' => 'IsProtected' ,
         'max_row' => 'MaxRow' ,
         'max_column' => 'MaxColumn' ,
         'significant_digits' => 'SignificantDigits' ,
         'check_compatibility' => 'CheckCompatibility' ,
         'paper_size' => 'PaperSize' ,
         'max_rows_of_shared_formula' => 'MaxRowsOfSharedFormula' ,
         'compliance' => 'Compliance' ,
         'quote_prefix_to_style' => 'QuotePrefixToStyle' ,
         'formula_settings' => 'FormulaSettings' ,
         'force_full_calculate' => 'ForceFullCalculate' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_compress_pictures' => 'setAutoCompressPictures' ,
        'auto_recover' => 'setAutoRecover' ,
        'build_version' => 'setBuildVersion' ,
        'calc_mode' => 'setCalcMode' ,
        'calc_stack_size' => 'setCalcStackSize' ,
        'calculation_id' => 'setCalculationId' ,
        'check_comptiliblity' => 'setCheckComptiliblity' ,
        'check_excel_restriction' => 'setCheckExcelRestriction' ,
        'crash_save' => 'setCrashSave' ,
        'create_calc_chain' => 'setCreateCalcChain' ,
        'data_extract_load' => 'setDataExtractLoad' ,
        'date1904' => 'setDate1904' ,
        'display_drawing_objects' => 'setDisplayDrawingObjects' ,
        'enable_macros' => 'setEnableMacros' ,
        'first_visible_tab' => 'setFirstVisibleTab' ,
        'hide_pivot_field_list' => 'setHidePivotFieldList' ,
        'is_default_encrypted' => 'setIsDefaultEncrypted' ,
        'is_hidden' => 'setIsHidden' ,
        'is_h_scroll_bar_visible' => 'setIsHScrollBarVisible' ,
        'is_minimized' => 'setIsMinimized' ,
        'is_v_scroll_bar_visible' => 'setIsVScrollBarVisible' ,
        'iteration' => 'setIteration' ,
        'language_code' => 'setLanguageCode' ,
        'max_change' => 'setMaxChange' ,
        'max_iteration' => 'setMaxIteration' ,
        'memory_setting' => 'setMemorySetting' ,
        'number_decimal_separator' => 'setNumberDecimalSeparator' ,
        'number_group_separator' => 'setNumberGroupSeparator' ,
        'parsing_formula_on_open' => 'setParsingFormulaOnOpen' ,
        'precision_as_displayed' => 'setPrecisionAsDisplayed' ,
        'recalculate_before_save' => 'setRecalculateBeforeSave' ,
        're_calculate_on_open' => 'setReCalculateOnOpen' ,
        'recommend_read_only' => 'setRecommendReadOnly' ,
        'region' => 'setRegion' ,
        'remove_personal_information' => 'setRemovePersonalInformation' ,
        'repair_load' => 'setRepairLoad' ,
        'shared' => 'setShared' ,
        'sheet_tab_bar_width' => 'setSheetTabBarWidth' ,
        'show_tabs' => 'setShowTabs' ,
        'update_adjacent_cells_border' => 'setUpdateAdjacentCellsBorder' ,
        'update_links_type' => 'setUpdateLinksType' ,
        'window_height' => 'setWindowHeight' ,
        'window_left' => 'setWindowLeft' ,
        'window_top' => 'setWindowTop' ,
        'window_width' => 'setWindowWidth' ,
        'author' => 'setAuthor' ,
        'check_custom_number_format' => 'setCheckCustomNumberFormat' ,
        'protection_type' => 'setProtectionType' ,
        'globalization_settings' => 'setGlobalizationSettings' ,
        'password' => 'setPassword' ,
        'write_protection' => 'setWriteProtection' ,
        'is_encrypted' => 'setIsEncrypted' ,
        'is_protected' => 'setIsProtected' ,
        'max_row' => 'setMaxRow' ,
        'max_column' => 'setMaxColumn' ,
        'significant_digits' => 'setSignificantDigits' ,
        'check_compatibility' => 'setCheckCompatibility' ,
        'paper_size' => 'setPaperSize' ,
        'max_rows_of_shared_formula' => 'setMaxRowsOfSharedFormula' ,
        'compliance' => 'setCompliance' ,
        'quote_prefix_to_style' => 'setQuotePrefixToStyle' ,
        'formula_settings' => 'setFormulaSettings' ,
        'force_full_calculate' => 'setForceFullCalculate' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_compress_pictures' => 'getAutoCompressPictures' ,
        'auto_recover' => 'getAutoRecover' ,
        'build_version' => 'getBuildVersion' ,
        'calc_mode' => 'getCalcMode' ,
        'calc_stack_size' => 'getCalcStackSize' ,
        'calculation_id' => 'getCalculationId' ,
        'check_comptiliblity' => 'getCheckComptiliblity' ,
        'check_excel_restriction' => 'getCheckExcelRestriction' ,
        'crash_save' => 'getCrashSave' ,
        'create_calc_chain' => 'getCreateCalcChain' ,
        'data_extract_load' => 'getDataExtractLoad' ,
        'date1904' => 'getDate1904' ,
        'display_drawing_objects' => 'getDisplayDrawingObjects' ,
        'enable_macros' => 'getEnableMacros' ,
        'first_visible_tab' => 'getFirstVisibleTab' ,
        'hide_pivot_field_list' => 'getHidePivotFieldList' ,
        'is_default_encrypted' => 'getIsDefaultEncrypted' ,
        'is_hidden' => 'getIsHidden' ,
        'is_h_scroll_bar_visible' => 'getIsHScrollBarVisible' ,
        'is_minimized' => 'getIsMinimized' ,
        'is_v_scroll_bar_visible' => 'getIsVScrollBarVisible' ,
        'iteration' => 'getIteration' ,
        'language_code' => 'getLanguageCode' ,
        'max_change' => 'getMaxChange' ,
        'max_iteration' => 'getMaxIteration' ,
        'memory_setting' => 'getMemorySetting' ,
        'number_decimal_separator' => 'getNumberDecimalSeparator' ,
        'number_group_separator' => 'getNumberGroupSeparator' ,
        'parsing_formula_on_open' => 'getParsingFormulaOnOpen' ,
        'precision_as_displayed' => 'getPrecisionAsDisplayed' ,
        'recalculate_before_save' => 'getRecalculateBeforeSave' ,
        're_calculate_on_open' => 'getReCalculateOnOpen' ,
        'recommend_read_only' => 'getRecommendReadOnly' ,
        'region' => 'getRegion' ,
        'remove_personal_information' => 'getRemovePersonalInformation' ,
        'repair_load' => 'getRepairLoad' ,
        'shared' => 'getShared' ,
        'sheet_tab_bar_width' => 'getSheetTabBarWidth' ,
        'show_tabs' => 'getShowTabs' ,
        'update_adjacent_cells_border' => 'getUpdateAdjacentCellsBorder' ,
        'update_links_type' => 'getUpdateLinksType' ,
        'window_height' => 'getWindowHeight' ,
        'window_left' => 'getWindowLeft' ,
        'window_top' => 'getWindowTop' ,
        'window_width' => 'getWindowWidth' ,
        'author' => 'getAuthor' ,
        'check_custom_number_format' => 'getCheckCustomNumberFormat' ,
        'protection_type' => 'getProtectionType' ,
        'globalization_settings' => 'getGlobalizationSettings' ,
        'password' => 'getPassword' ,
        'write_protection' => 'getWriteProtection' ,
        'is_encrypted' => 'getIsEncrypted' ,
        'is_protected' => 'getIsProtected' ,
        'max_row' => 'getMaxRow' ,
        'max_column' => 'getMaxColumn' ,
        'significant_digits' => 'getSignificantDigits' ,
        'check_compatibility' => 'getCheckCompatibility' ,
        'paper_size' => 'getPaperSize' ,
        'max_rows_of_shared_formula' => 'getMaxRowsOfSharedFormula' ,
        'compliance' => 'getCompliance' ,
        'quote_prefix_to_style' => 'getQuotePrefixToStyle' ,
        'formula_settings' => 'getFormulaSettings' ,
        'force_full_calculate' => 'getForceFullCalculate' 
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
        $this->container['auto_compress_pictures'] = isset($data['auto_compress_pictures']) ? $data['auto_compress_pictures'] : null;
        $this->container['auto_recover'] = isset($data['auto_recover']) ? $data['auto_recover'] : null;
        $this->container['build_version'] = isset($data['build_version']) ? $data['build_version'] : null;
        $this->container['calc_mode'] = isset($data['calc_mode']) ? $data['calc_mode'] : null;
        $this->container['calc_stack_size'] = isset($data['calc_stack_size']) ? $data['calc_stack_size'] : null;
        $this->container['calculation_id'] = isset($data['calculation_id']) ? $data['calculation_id'] : null;
        $this->container['check_comptiliblity'] = isset($data['check_comptiliblity']) ? $data['check_comptiliblity'] : null;
        $this->container['check_excel_restriction'] = isset($data['check_excel_restriction']) ? $data['check_excel_restriction'] : null;
        $this->container['crash_save'] = isset($data['crash_save']) ? $data['crash_save'] : null;
        $this->container['create_calc_chain'] = isset($data['create_calc_chain']) ? $data['create_calc_chain'] : null;
        $this->container['data_extract_load'] = isset($data['data_extract_load']) ? $data['data_extract_load'] : null;
        $this->container['date1904'] = isset($data['date1904']) ? $data['date1904'] : null;
        $this->container['display_drawing_objects'] = isset($data['display_drawing_objects']) ? $data['display_drawing_objects'] : null;
        $this->container['enable_macros'] = isset($data['enable_macros']) ? $data['enable_macros'] : null;
        $this->container['first_visible_tab'] = isset($data['first_visible_tab']) ? $data['first_visible_tab'] : null;
        $this->container['hide_pivot_field_list'] = isset($data['hide_pivot_field_list']) ? $data['hide_pivot_field_list'] : null;
        $this->container['is_default_encrypted'] = isset($data['is_default_encrypted']) ? $data['is_default_encrypted'] : null;
        $this->container['is_hidden'] = isset($data['is_hidden']) ? $data['is_hidden'] : null;
        $this->container['is_h_scroll_bar_visible'] = isset($data['is_h_scroll_bar_visible']) ? $data['is_h_scroll_bar_visible'] : null;
        $this->container['is_minimized'] = isset($data['is_minimized']) ? $data['is_minimized'] : null;
        $this->container['is_v_scroll_bar_visible'] = isset($data['is_v_scroll_bar_visible']) ? $data['is_v_scroll_bar_visible'] : null;
        $this->container['iteration'] = isset($data['iteration']) ? $data['iteration'] : null;
        $this->container['language_code'] = isset($data['language_code']) ? $data['language_code'] : null;
        $this->container['max_change'] = isset($data['max_change']) ? $data['max_change'] : null;
        $this->container['max_iteration'] = isset($data['max_iteration']) ? $data['max_iteration'] : null;
        $this->container['memory_setting'] = isset($data['memory_setting']) ? $data['memory_setting'] : null;
        $this->container['number_decimal_separator'] = isset($data['number_decimal_separator']) ? $data['number_decimal_separator'] : null;
        $this->container['number_group_separator'] = isset($data['number_group_separator']) ? $data['number_group_separator'] : null;
        $this->container['parsing_formula_on_open'] = isset($data['parsing_formula_on_open']) ? $data['parsing_formula_on_open'] : null;
        $this->container['precision_as_displayed'] = isset($data['precision_as_displayed']) ? $data['precision_as_displayed'] : null;
        $this->container['recalculate_before_save'] = isset($data['recalculate_before_save']) ? $data['recalculate_before_save'] : null;
        $this->container['re_calculate_on_open'] = isset($data['re_calculate_on_open']) ? $data['re_calculate_on_open'] : null;
        $this->container['recommend_read_only'] = isset($data['recommend_read_only']) ? $data['recommend_read_only'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['remove_personal_information'] = isset($data['remove_personal_information']) ? $data['remove_personal_information'] : null;
        $this->container['repair_load'] = isset($data['repair_load']) ? $data['repair_load'] : null;
        $this->container['shared'] = isset($data['shared']) ? $data['shared'] : null;
        $this->container['sheet_tab_bar_width'] = isset($data['sheet_tab_bar_width']) ? $data['sheet_tab_bar_width'] : null;
        $this->container['show_tabs'] = isset($data['show_tabs']) ? $data['show_tabs'] : null;
        $this->container['update_adjacent_cells_border'] = isset($data['update_adjacent_cells_border']) ? $data['update_adjacent_cells_border'] : null;
        $this->container['update_links_type'] = isset($data['update_links_type']) ? $data['update_links_type'] : null;
        $this->container['window_height'] = isset($data['window_height']) ? $data['window_height'] : null;
        $this->container['window_left'] = isset($data['window_left']) ? $data['window_left'] : null;
        $this->container['window_top'] = isset($data['window_top']) ? $data['window_top'] : null;
        $this->container['window_width'] = isset($data['window_width']) ? $data['window_width'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['check_custom_number_format'] = isset($data['check_custom_number_format']) ? $data['check_custom_number_format'] : null;
        $this->container['protection_type'] = isset($data['protection_type']) ? $data['protection_type'] : null;
        $this->container['globalization_settings'] = isset($data['globalization_settings']) ? $data['globalization_settings'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['write_protection'] = isset($data['write_protection']) ? $data['write_protection'] : null;
        $this->container['is_encrypted'] = isset($data['is_encrypted']) ? $data['is_encrypted'] : null;
        $this->container['is_protected'] = isset($data['is_protected']) ? $data['is_protected'] : null;
        $this->container['max_row'] = isset($data['max_row']) ? $data['max_row'] : null;
        $this->container['max_column'] = isset($data['max_column']) ? $data['max_column'] : null;
        $this->container['significant_digits'] = isset($data['significant_digits']) ? $data['significant_digits'] : null;
        $this->container['check_compatibility'] = isset($data['check_compatibility']) ? $data['check_compatibility'] : null;
        $this->container['paper_size'] = isset($data['paper_size']) ? $data['paper_size'] : null;
        $this->container['max_rows_of_shared_formula'] = isset($data['max_rows_of_shared_formula']) ? $data['max_rows_of_shared_formula'] : null;
        $this->container['compliance'] = isset($data['compliance']) ? $data['compliance'] : null;
        $this->container['quote_prefix_to_style'] = isset($data['quote_prefix_to_style']) ? $data['quote_prefix_to_style'] : null;
        $this->container['formula_settings'] = isset($data['formula_settings']) ? $data['formula_settings'] : null;
        $this->container['force_full_calculate'] = isset($data['force_full_calculate']) ? $data['force_full_calculate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['auto_compress_pictures'] === null) {
            $invalidProperties[] = "'auto_compress_pictures' can't be null";
        }
        if ($this->container['auto_recover'] === null) {
            $invalidProperties[] = "'auto_recover' can't be null";
        }
        if ($this->container['build_version'] === null) {
            $invalidProperties[] = "'build_version' can't be null";
        }
        if ($this->container['calc_mode'] === null) {
            $invalidProperties[] = "'calc_mode' can't be null";
        }
        if ($this->container['calc_stack_size'] === null) {
            $invalidProperties[] = "'calc_stack_size' can't be null";
        }
        if ($this->container['calculation_id'] === null) {
            $invalidProperties[] = "'calculation_id' can't be null";
        }
        if ($this->container['check_comptiliblity'] === null) {
            $invalidProperties[] = "'check_comptiliblity' can't be null";
        }
        if ($this->container['check_excel_restriction'] === null) {
            $invalidProperties[] = "'check_excel_restriction' can't be null";
        }
        if ($this->container['crash_save'] === null) {
            $invalidProperties[] = "'crash_save' can't be null";
        }
        if ($this->container['create_calc_chain'] === null) {
            $invalidProperties[] = "'create_calc_chain' can't be null";
        }
        if ($this->container['data_extract_load'] === null) {
            $invalidProperties[] = "'data_extract_load' can't be null";
        }
        if ($this->container['date1904'] === null) {
            $invalidProperties[] = "'date1904' can't be null";
        }
        if ($this->container['display_drawing_objects'] === null) {
            $invalidProperties[] = "'display_drawing_objects' can't be null";
        }
        if ($this->container['enable_macros'] === null) {
            $invalidProperties[] = "'enable_macros' can't be null";
        }
        if ($this->container['first_visible_tab'] === null) {
            $invalidProperties[] = "'first_visible_tab' can't be null";
        }
        if ($this->container['hide_pivot_field_list'] === null) {
            $invalidProperties[] = "'hide_pivot_field_list' can't be null";
        }
        if ($this->container['is_default_encrypted'] === null) {
            $invalidProperties[] = "'is_default_encrypted' can't be null";
        }
        if ($this->container['is_hidden'] === null) {
            $invalidProperties[] = "'is_hidden' can't be null";
        }
        if ($this->container['is_h_scroll_bar_visible'] === null) {
            $invalidProperties[] = "'is_h_scroll_bar_visible' can't be null";
        }
        if ($this->container['is_minimized'] === null) {
            $invalidProperties[] = "'is_minimized' can't be null";
        }
        if ($this->container['is_v_scroll_bar_visible'] === null) {
            $invalidProperties[] = "'is_v_scroll_bar_visible' can't be null";
        }
        if ($this->container['iteration'] === null) {
            $invalidProperties[] = "'iteration' can't be null";
        }
        if ($this->container['language_code'] === null) {
            $invalidProperties[] = "'language_code' can't be null";
        }
        if ($this->container['max_change'] === null) {
            $invalidProperties[] = "'max_change' can't be null";
        }
        if ($this->container['max_iteration'] === null) {
            $invalidProperties[] = "'max_iteration' can't be null";
        }
        if ($this->container['memory_setting'] === null) {
            $invalidProperties[] = "'memory_setting' can't be null";
        }
        if ($this->container['number_decimal_separator'] === null) {
            $invalidProperties[] = "'number_decimal_separator' can't be null";
        }
        if ($this->container['number_group_separator'] === null) {
            $invalidProperties[] = "'number_group_separator' can't be null";
        }
        if ($this->container['parsing_formula_on_open'] === null) {
            $invalidProperties[] = "'parsing_formula_on_open' can't be null";
        }
        if ($this->container['precision_as_displayed'] === null) {
            $invalidProperties[] = "'precision_as_displayed' can't be null";
        }
        if ($this->container['recalculate_before_save'] === null) {
            $invalidProperties[] = "'recalculate_before_save' can't be null";
        }
        if ($this->container['re_calculate_on_open'] === null) {
            $invalidProperties[] = "'re_calculate_on_open' can't be null";
        }
        if ($this->container['recommend_read_only'] === null) {
            $invalidProperties[] = "'recommend_read_only' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['remove_personal_information'] === null) {
            $invalidProperties[] = "'remove_personal_information' can't be null";
        }
        if ($this->container['repair_load'] === null) {
            $invalidProperties[] = "'repair_load' can't be null";
        }
        if ($this->container['shared'] === null) {
            $invalidProperties[] = "'shared' can't be null";
        }
        if ($this->container['sheet_tab_bar_width'] === null) {
            $invalidProperties[] = "'sheet_tab_bar_width' can't be null";
        }
        if ($this->container['show_tabs'] === null) {
            $invalidProperties[] = "'show_tabs' can't be null";
        }
        if ($this->container['update_adjacent_cells_border'] === null) {
            $invalidProperties[] = "'update_adjacent_cells_border' can't be null";
        }
        if ($this->container['update_links_type'] === null) {
            $invalidProperties[] = "'update_links_type' can't be null";
        }
        if ($this->container['window_height'] === null) {
            $invalidProperties[] = "'window_height' can't be null";
        }
        if ($this->container['window_left'] === null) {
            $invalidProperties[] = "'window_left' can't be null";
        }
        if ($this->container['window_top'] === null) {
            $invalidProperties[] = "'window_top' can't be null";
        }
        if ($this->container['window_width'] === null) {
            $invalidProperties[] = "'window_width' can't be null";
        }
        if ($this->container['author'] === null) {
            $invalidProperties[] = "'author' can't be null";
        }
        if ($this->container['check_custom_number_format'] === null) {
            $invalidProperties[] = "'check_custom_number_format' can't be null";
        }
        if ($this->container['protection_type'] === null) {
            $invalidProperties[] = "'protection_type' can't be null";
        }
        if ($this->container['globalization_settings'] === null) {
            $invalidProperties[] = "'globalization_settings' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ($this->container['write_protection'] === null) {
            $invalidProperties[] = "'write_protection' can't be null";
        }
        if ($this->container['is_encrypted'] === null) {
            $invalidProperties[] = "'is_encrypted' can't be null";
        }
        if ($this->container['is_protected'] === null) {
            $invalidProperties[] = "'is_protected' can't be null";
        }
        if ($this->container['max_row'] === null) {
            $invalidProperties[] = "'max_row' can't be null";
        }
        if ($this->container['max_column'] === null) {
            $invalidProperties[] = "'max_column' can't be null";
        }
        if ($this->container['significant_digits'] === null) {
            $invalidProperties[] = "'significant_digits' can't be null";
        }
        if ($this->container['check_compatibility'] === null) {
            $invalidProperties[] = "'check_compatibility' can't be null";
        }
        if ($this->container['paper_size'] === null) {
            $invalidProperties[] = "'paper_size' can't be null";
        }
        if ($this->container['max_rows_of_shared_formula'] === null) {
            $invalidProperties[] = "'max_rows_of_shared_formula' can't be null";
        }
        if ($this->container['compliance'] === null) {
            $invalidProperties[] = "'compliance' can't be null";
        }
        if ($this->container['quote_prefix_to_style'] === null) {
            $invalidProperties[] = "'quote_prefix_to_style' can't be null";
        }
        if ($this->container['formula_settings'] === null) {
            $invalidProperties[] = "'formula_settings' can't be null";
        }
        if ($this->container['force_full_calculate'] === null) {
            $invalidProperties[] = "'force_full_calculate' can't be null";
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
        if ($this->container['auto_compress_pictures'] === null) {
                    return false;
                }
        if ($this->container['auto_recover'] === null) {
                    return false;
                }
        if ($this->container['build_version'] === null) {
                    return false;
                }
        if ($this->container['calc_mode'] === null) {
                    return false;
                }
        if ($this->container['calc_stack_size'] === null) {
                    return false;
                }
        if ($this->container['calculation_id'] === null) {
                    return false;
                }
        if ($this->container['check_comptiliblity'] === null) {
                    return false;
                }
        if ($this->container['check_excel_restriction'] === null) {
                    return false;
                }
        if ($this->container['crash_save'] === null) {
                    return false;
                }
        if ($this->container['create_calc_chain'] === null) {
                    return false;
                }
        if ($this->container['data_extract_load'] === null) {
                    return false;
                }
        if ($this->container['date1904'] === null) {
                    return false;
                }
        if ($this->container['display_drawing_objects'] === null) {
                    return false;
                }
        if ($this->container['enable_macros'] === null) {
                    return false;
                }
        if ($this->container['first_visible_tab'] === null) {
                    return false;
                }
        if ($this->container['hide_pivot_field_list'] === null) {
                    return false;
                }
        if ($this->container['is_default_encrypted'] === null) {
                    return false;
                }
        if ($this->container['is_hidden'] === null) {
                    return false;
                }
        if ($this->container['is_h_scroll_bar_visible'] === null) {
                    return false;
                }
        if ($this->container['is_minimized'] === null) {
                    return false;
                }
        if ($this->container['is_v_scroll_bar_visible'] === null) {
                    return false;
                }
        if ($this->container['iteration'] === null) {
                    return false;
                }
        if ($this->container['language_code'] === null) {
                    return false;
                }
        if ($this->container['max_change'] === null) {
                    return false;
                }
        if ($this->container['max_iteration'] === null) {
                    return false;
                }
        if ($this->container['memory_setting'] === null) {
                    return false;
                }
        if ($this->container['number_decimal_separator'] === null) {
                    return false;
                }
        if ($this->container['number_group_separator'] === null) {
                    return false;
                }
        if ($this->container['parsing_formula_on_open'] === null) {
                    return false;
                }
        if ($this->container['precision_as_displayed'] === null) {
                    return false;
                }
        if ($this->container['recalculate_before_save'] === null) {
                    return false;
                }
        if ($this->container['re_calculate_on_open'] === null) {
                    return false;
                }
        if ($this->container['recommend_read_only'] === null) {
                    return false;
                }
        if ($this->container['region'] === null) {
                    return false;
                }
        if ($this->container['remove_personal_information'] === null) {
                    return false;
                }
        if ($this->container['repair_load'] === null) {
                    return false;
                }
        if ($this->container['shared'] === null) {
                    return false;
                }
        if ($this->container['sheet_tab_bar_width'] === null) {
                    return false;
                }
        if ($this->container['show_tabs'] === null) {
                    return false;
                }
        if ($this->container['update_adjacent_cells_border'] === null) {
                    return false;
                }
        if ($this->container['update_links_type'] === null) {
                    return false;
                }
        if ($this->container['window_height'] === null) {
                    return false;
                }
        if ($this->container['window_left'] === null) {
                    return false;
                }
        if ($this->container['window_top'] === null) {
                    return false;
                }
        if ($this->container['window_width'] === null) {
                    return false;
                }
        if ($this->container['author'] === null) {
                    return false;
                }
        if ($this->container['check_custom_number_format'] === null) {
                    return false;
                }
        if ($this->container['protection_type'] === null) {
                    return false;
                }
        if ($this->container['globalization_settings'] === null) {
                    return false;
                }
        if ($this->container['password'] === null) {
                    return false;
                }
        if ($this->container['write_protection'] === null) {
                    return false;
                }
        if ($this->container['is_encrypted'] === null) {
                    return false;
                }
        if ($this->container['is_protected'] === null) {
                    return false;
                }
        if ($this->container['max_row'] === null) {
                    return false;
                }
        if ($this->container['max_column'] === null) {
                    return false;
                }
        if ($this->container['significant_digits'] === null) {
                    return false;
                }
        if ($this->container['check_compatibility'] === null) {
                    return false;
                }
        if ($this->container['paper_size'] === null) {
                    return false;
                }
        if ($this->container['max_rows_of_shared_formula'] === null) {
                    return false;
                }
        if ($this->container['compliance'] === null) {
                    return false;
                }
        if ($this->container['quote_prefix_to_style'] === null) {
                    return false;
                }
        if ($this->container['formula_settings'] === null) {
                    return false;
                }
        if ($this->container['force_full_calculate'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets auto_compress_pictures
     *
     * @return bool
     */
    public function getAutoCompressPictures()
    {
        return $this->container['auto_compress_pictures'];
    }

    /**
     * Sets auto_compress_pictures
     *
     *  
     *
     * @return $this
     */
    public function setAutoCompressPictures($auto_compress_pictures)
    {
        $this->container['auto_compress_pictures'] = $auto_compress_pictures;

        return $this;
    }
   /**
     * Gets auto_recover
     *
     * @return bool
     */
    public function getAutoRecover()
    {
        return $this->container['auto_recover'];
    }

    /**
     * Sets auto_recover
     *
     *  
     *
     * @return $this
     */
    public function setAutoRecover($auto_recover)
    {
        $this->container['auto_recover'] = $auto_recover;

        return $this;
    }
   /**
     * Gets build_version
     *
     * @return string
     */
    public function getBuildVersion()
    {
        return $this->container['build_version'];
    }

    /**
     * Sets build_version
     *
     *  Specifies the incremental public release of the application.            
     *
     * @return $this
     */
    public function setBuildVersion($build_version)
    {
        $this->container['build_version'] = $build_version;

        return $this;
    }
   /**
     * Gets calc_mode
     *
     * @return string
     */
    public function getCalcMode()
    {
        return $this->container['calc_mode'];
    }

    /**
     * Sets calc_mode
     *
     *  It specifies whether to calculate formulas manually, automatically or automaticallyexcept for multiple table operations.            
     *
     * @return $this
     */
    public function setCalcMode($calc_mode)
    {
        $this->container['calc_mode'] = $calc_mode;

        return $this;
    }
   /**
     * Gets calc_stack_size
     *
     * @return int
     */
    public function getCalcStackSize()
    {
        return $this->container['calc_stack_size'];
    }

    /**
     * Sets calc_stack_size
     *
     *  Specifies the stack size for calculating cells recursively.  The large valuefor this size will give better performance when there are lots of cells needto be calculated recursively.  On the other hand, larger value will raisethe stakes of StackOverflowException.  If use gets StackOverflowExceptionwhen calculating formulas, this value should be decreased.            
     *
     * @return $this
     */
    public function setCalcStackSize($calc_stack_size)
    {
        $this->container['calc_stack_size'] = $calc_stack_size;

        return $this;
    }
   /**
     * Gets calculation_id
     *
     * @return string
     */
    public function getCalculationId()
    {
        return $this->container['calculation_id'];
    }

    /**
     * Sets calculation_id
     *
     *  Specifies the version of the calculation engine used to calculate valuesin the workbook.            
     *
     * @return $this
     */
    public function setCalculationId($calculation_id)
    {
        $this->container['calculation_id'] = $calculation_id;

        return $this;
    }
   /**
     * Gets check_comptiliblity
     *
     * @return bool
     */
    public function getCheckComptiliblity()
    {
        return $this->container['check_comptiliblity'];
    }

    /**
     * Sets check_comptiliblity
     *
     *  Indicates whether check comptiliblity when saving workbook.                         Remarks: The default value is true.             
     *
     * @return $this
     */
    public function setCheckComptiliblity($check_comptiliblity)
    {
        $this->container['check_comptiliblity'] = $check_comptiliblity;

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
     *  Whether check restriction of excel file when user modify cells related objects. For example, excel does not allow inputting string value longer than 32K. When you input a value longer than 32K such as by Cell.PutValue(string),if this property is true, you will get an Exception.  If this property isfalse, we will accept your input string value as the cell's value so thatlater you can output the complete string value for other file formats suchas CSV.  However, if you have set such kind of value that is invalid forexcel file format, you should not save the workbook as excel file formatlater. Otherwise there may be unexpected error for the generated excel file.            
     *
     * @return $this
     */
    public function setCheckExcelRestriction($check_excel_restriction)
    {
        $this->container['check_excel_restriction'] = $check_excel_restriction;

        return $this;
    }
   /**
     * Gets crash_save
     *
     * @return bool
     */
    public function getCrashSave()
    {
        return $this->container['crash_save'];
    }

    /**
     * Sets crash_save
     *
     *  
     *
     * @return $this
     */
    public function setCrashSave($crash_save)
    {
        $this->container['crash_save'] = $crash_save;

        return $this;
    }
   /**
     * Gets create_calc_chain
     *
     * @return bool
     */
    public function getCreateCalcChain()
    {
        return $this->container['create_calc_chain'];
    }

    /**
     * Sets create_calc_chain
     *
     *  Indicates whether create calculated formulas chain.            
     *
     * @return $this
     */
    public function setCreateCalcChain($create_calc_chain)
    {
        $this->container['create_calc_chain'] = $create_calc_chain;

        return $this;
    }
   /**
     * Gets data_extract_load
     *
     * @return bool
     */
    public function getDataExtractLoad()
    {
        return $this->container['data_extract_load'];
    }

    /**
     * Sets data_extract_load
     *
     *  
     *
     * @return $this
     */
    public function setDataExtractLoad($data_extract_load)
    {
        $this->container['data_extract_load'] = $data_extract_load;

        return $this;
    }
   /**
     * Gets date1904
     *
     * @return bool
     */
    public function getDate1904()
    {
        return $this->container['date1904'];
    }

    /**
     * Sets date1904
     *
     *  Gets or sets a value which represents if the workbook uses the 1904 datesystem.            
     *
     * @return $this
     */
    public function setDate1904($date1904)
    {
        $this->container['date1904'] = $date1904;

        return $this;
    }
   /**
     * Gets display_drawing_objects
     *
     * @return string
     */
    public function getDisplayDrawingObjects()
    {
        return $this->container['display_drawing_objects'];
    }

    /**
     * Sets display_drawing_objects
     *
     *  Indicates whether and how to show objects in the workbook.            
     *
     * @return $this
     */
    public function setDisplayDrawingObjects($display_drawing_objects)
    {
        $this->container['display_drawing_objects'] = $display_drawing_objects;

        return $this;
    }
   /**
     * Gets enable_macros
     *
     * @return bool
     */
    public function getEnableMacros()
    {
        return $this->container['enable_macros'];
    }

    /**
     * Sets enable_macros
     *
     *  
     *
     * @return $this
     */
    public function setEnableMacros($enable_macros)
    {
        $this->container['enable_macros'] = $enable_macros;

        return $this;
    }
   /**
     * Gets first_visible_tab
     *
     * @return int
     */
    public function getFirstVisibleTab()
    {
        return $this->container['first_visible_tab'];
    }

    /**
     * Sets first_visible_tab
     *
     *  Gets or sets the first visible worksheet tab.            
     *
     * @return $this
     */
    public function setFirstVisibleTab($first_visible_tab)
    {
        $this->container['first_visible_tab'] = $first_visible_tab;

        return $this;
    }
   /**
     * Gets hide_pivot_field_list
     *
     * @return bool
     */
    public function getHidePivotFieldList()
    {
        return $this->container['hide_pivot_field_list'];
    }

    /**
     * Sets hide_pivot_field_list
     *
     *  
     *
     * @return $this
     */
    public function setHidePivotFieldList($hide_pivot_field_list)
    {
        $this->container['hide_pivot_field_list'] = $hide_pivot_field_list;

        return $this;
    }
   /**
     * Gets is_default_encrypted
     *
     * @return bool
     */
    public function getIsDefaultEncrypted()
    {
        return $this->container['is_default_encrypted'];
    }

    /**
     * Sets is_default_encrypted
     *
     *  
     *
     * @return $this
     */
    public function setIsDefaultEncrypted($is_default_encrypted)
    {
        $this->container['is_default_encrypted'] = $is_default_encrypted;

        return $this;
    }
   /**
     * Gets is_hidden
     *
     * @return bool
     */
    public function getIsHidden()
    {
        return $this->container['is_hidden'];
    }

    /**
     * Sets is_hidden
     *
     *  Indicates whether this workbook is hidden.            
     *
     * @return $this
     */
    public function setIsHidden($is_hidden)
    {
        $this->container['is_hidden'] = $is_hidden;

        return $this;
    }
   /**
     * Gets is_h_scroll_bar_visible
     *
     * @return bool
     */
    public function getIsHScrollBarVisible()
    {
        return $this->container['is_h_scroll_bar_visible'];
    }

    /**
     * Sets is_h_scroll_bar_visible
     *
     *  Gets or sets a value indicating whether the generated spreadsheet will containa horizontal scroll bar.                         Remarks:The default value is true.             
     *
     * @return $this
     */
    public function setIsHScrollBarVisible($is_h_scroll_bar_visible)
    {
        $this->container['is_h_scroll_bar_visible'] = $is_h_scroll_bar_visible;

        return $this;
    }
   /**
     * Gets is_minimized
     *
     * @return bool
     */
    public function getIsMinimized()
    {
        return $this->container['is_minimized'];
    }

    /**
     * Sets is_minimized
     *
     *  Represents whether the generated spreadsheet will be opened Minimized.            
     *
     * @return $this
     */
    public function setIsMinimized($is_minimized)
    {
        $this->container['is_minimized'] = $is_minimized;

        return $this;
    }
   /**
     * Gets is_v_scroll_bar_visible
     *
     * @return bool
     */
    public function getIsVScrollBarVisible()
    {
        return $this->container['is_v_scroll_bar_visible'];
    }

    /**
     * Sets is_v_scroll_bar_visible
     *
     *  Gets or sets a value indicating whether the generated spreadsheet will containa vertical scroll bar.                         Remarks:The default value is true.             
     *
     * @return $this
     */
    public function setIsVScrollBarVisible($is_v_scroll_bar_visible)
    {
        $this->container['is_v_scroll_bar_visible'] = $is_v_scroll_bar_visible;

        return $this;
    }
   /**
     * Gets iteration
     *
     * @return bool
     */
    public function getIteration()
    {
        return $this->container['iteration'];
    }

    /**
     * Sets iteration
     *
     *  Indicates if Aspose.Cells will use iteration to resolve circular references.            
     *
     * @return $this
     */
    public function setIteration($iteration)
    {
        $this->container['iteration'] = $iteration;

        return $this;
    }
   /**
     * Gets language_code
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->container['language_code'];
    }

    /**
     * Sets language_code
     *
     *  Gets or sets the user interface language of the Workbook version based onCountryCode that has saved the file.            
     *
     * @return $this
     */
    public function setLanguageCode($language_code)
    {
        $this->container['language_code'] = $language_code;

        return $this;
    }
   /**
     * Gets max_change
     *
     * @return double
     */
    public function getMaxChange()
    {
        return $this->container['max_change'];
    }

    /**
     * Sets max_change
     *
     *  Returns or sets the maximum number of change that Microsoft Excel can useto resolve a circular reference.            
     *
     * @return $this
     */
    public function setMaxChange($max_change)
    {
        $this->container['max_change'] = $max_change;

        return $this;
    }
   /**
     * Gets max_iteration
     *
     * @return int
     */
    public function getMaxIteration()
    {
        return $this->container['max_iteration'];
    }

    /**
     * Sets max_iteration
     *
     *  Returns or sets the maximum number of iterations that Aspose.Cells can useto resolve a circular reference.            
     *
     * @return $this
     */
    public function setMaxIteration($max_iteration)
    {
        $this->container['max_iteration'] = $max_iteration;

        return $this;
    }
   /**
     * Gets memory_setting
     *
     * @return string
     */
    public function getMemorySetting()
    {
        return $this->container['memory_setting'];
    }

    /**
     * Sets memory_setting
     *
     *  
     *
     * @return $this
     */
    public function setMemorySetting($memory_setting)
    {
        $this->container['memory_setting'] = $memory_setting;

        return $this;
    }
   /**
     * Gets number_decimal_separator
     *
     * @return string
     */
    public function getNumberDecimalSeparator()
    {
        return $this->container['number_decimal_separator'];
    }

    /**
     * Sets number_decimal_separator
     *
     *  
     *
     * @return $this
     */
    public function setNumberDecimalSeparator($number_decimal_separator)
    {
        $this->container['number_decimal_separator'] = $number_decimal_separator;

        return $this;
    }
   /**
     * Gets number_group_separator
     *
     * @return string
     */
    public function getNumberGroupSeparator()
    {
        return $this->container['number_group_separator'];
    }

    /**
     * Sets number_group_separator
     *
     *  
     *
     * @return $this
     */
    public function setNumberGroupSeparator($number_group_separator)
    {
        $this->container['number_group_separator'] = $number_group_separator;

        return $this;
    }
   /**
     * Gets parsing_formula_on_open
     *
     * @return bool
     */
    public function getParsingFormulaOnOpen()
    {
        return $this->container['parsing_formula_on_open'];
    }

    /**
     * Sets parsing_formula_on_open
     *
     *  Indicates whether parsing the formula when reading the file.                         Remarks:Only applies for Excel Xlsx,Xltx, Xltm,Xlsm file because the formulas inthe files are stored with a string formula.             
     *
     * @return $this
     */
    public function setParsingFormulaOnOpen($parsing_formula_on_open)
    {
        $this->container['parsing_formula_on_open'] = $parsing_formula_on_open;

        return $this;
    }
   /**
     * Gets precision_as_displayed
     *
     * @return bool
     */
    public function getPrecisionAsDisplayed()
    {
        return $this->container['precision_as_displayed'];
    }

    /**
     * Sets precision_as_displayed
     *
     *  True if calculations in this workbook will be done using only the precisionof the numbers as they're displayed            
     *
     * @return $this
     */
    public function setPrecisionAsDisplayed($precision_as_displayed)
    {
        $this->container['precision_as_displayed'] = $precision_as_displayed;

        return $this;
    }
   /**
     * Gets recalculate_before_save
     *
     * @return bool
     */
    public function getRecalculateBeforeSave()
    {
        return $this->container['recalculate_before_save'];
    }

    /**
     * Sets recalculate_before_save
     *
     *  Indicates whether to recalculate before saving the document.            
     *
     * @return $this
     */
    public function setRecalculateBeforeSave($recalculate_before_save)
    {
        $this->container['recalculate_before_save'] = $recalculate_before_save;

        return $this;
    }
   /**
     * Gets re_calculate_on_open
     *
     * @return bool
     */
    public function getReCalculateOnOpen()
    {
        return $this->container['re_calculate_on_open'];
    }

    /**
     * Sets re_calculate_on_open
     *
     *  Indicates whether re-calculate all formulas on opening file.            
     *
     * @return $this
     */
    public function setReCalculateOnOpen($re_calculate_on_open)
    {
        $this->container['re_calculate_on_open'] = $re_calculate_on_open;

        return $this;
    }
   /**
     * Gets recommend_read_only
     *
     * @return bool
     */
    public function getRecommendReadOnly()
    {
        return $this->container['recommend_read_only'];
    }

    /**
     * Sets recommend_read_only
     *
     *  Indicates if the Read Only Recommended option is selected.            
     *
     * @return $this
     */
    public function setRecommendReadOnly($recommend_read_only)
    {
        $this->container['recommend_read_only'] = $recommend_read_only;

        return $this;
    }
   /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     *  Gets or sets the system regional settings based on CountryCode at the timethe file was saved.                         Remarks:If you do not want to use the region saved in the file, please reset it afterreading the file.             
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }
   /**
     * Gets remove_personal_information
     *
     * @return bool
     */
    public function getRemovePersonalInformation()
    {
        return $this->container['remove_personal_information'];
    }

    /**
     * Sets remove_personal_information
     *
     *  
     *
     * @return $this
     */
    public function setRemovePersonalInformation($remove_personal_information)
    {
        $this->container['remove_personal_information'] = $remove_personal_information;

        return $this;
    }
   /**
     * Gets repair_load
     *
     * @return bool
     */
    public function getRepairLoad()
    {
        return $this->container['repair_load'];
    }

    /**
     * Sets repair_load
     *
     *  
     *
     * @return $this
     */
    public function setRepairLoad($repair_load)
    {
        $this->container['repair_load'] = $repair_load;

        return $this;
    }
   /**
     * Gets shared
     *
     * @return bool
     */
    public function getShared()
    {
        return $this->container['shared'];
    }

    /**
     * Sets shared
     *
     *  Gets or sets a value that indicates whether the Workbook is shared.                         Remarks:The default value is false.             
     *
     * @return $this
     */
    public function setShared($shared)
    {
        $this->container['shared'] = $shared;

        return $this;
    }
   /**
     * Gets sheet_tab_bar_width
     *
     * @return int
     */
    public function getSheetTabBarWidth()
    {
        return $this->container['sheet_tab_bar_width'];
    }

    /**
     * Sets sheet_tab_bar_width
     *
     *  Width of worksheet tab bar (in 1/1000 of window width).            
     *
     * @return $this
     */
    public function setSheetTabBarWidth($sheet_tab_bar_width)
    {
        $this->container['sheet_tab_bar_width'] = $sheet_tab_bar_width;

        return $this;
    }
   /**
     * Gets show_tabs
     *
     * @return bool
     */
    public function getShowTabs()
    {
        return $this->container['show_tabs'];
    }

    /**
     * Sets show_tabs
     *
     *  Get or sets a value whether the Workbook tabs are displayed.                         Remarks:The default value is true.             
     *
     * @return $this
     */
    public function setShowTabs($show_tabs)
    {
        $this->container['show_tabs'] = $show_tabs;

        return $this;
    }
   /**
     * Gets update_adjacent_cells_border
     *
     * @return bool
     */
    public function getUpdateAdjacentCellsBorder()
    {
        return $this->container['update_adjacent_cells_border'];
    }

    /**
     * Sets update_adjacent_cells_border
     *
     *  Indicates whether update adjacent cells' border.                         Remarks:The default value is true.  For example: the bottom border of the cell A1is update, the top border of the cell A2 should be changed too.             
     *
     * @return $this
     */
    public function setUpdateAdjacentCellsBorder($update_adjacent_cells_border)
    {
        $this->container['update_adjacent_cells_border'] = $update_adjacent_cells_border;

        return $this;
    }
   /**
     * Gets update_links_type
     *
     * @return string
     */
    public function getUpdateLinksType()
    {
        return $this->container['update_links_type'];
    }

    /**
     * Sets update_links_type
     *
     *  
     *
     * @return $this
     */
    public function setUpdateLinksType($update_links_type)
    {
        $this->container['update_links_type'] = $update_links_type;

        return $this;
    }
   /**
     * Gets window_height
     *
     * @return double
     */
    public function getWindowHeight()
    {
        return $this->container['window_height'];
    }

    /**
     * Sets window_height
     *
     *  The height of the window, in unit of point.            
     *
     * @return $this
     */
    public function setWindowHeight($window_height)
    {
        $this->container['window_height'] = $window_height;

        return $this;
    }
   /**
     * Gets window_left
     *
     * @return double
     */
    public function getWindowLeft()
    {
        return $this->container['window_left'];
    }

    /**
     * Sets window_left
     *
     *  The distance from the left edge of the client area to the left edge of thewindow, in unit of point.            
     *
     * @return $this
     */
    public function setWindowLeft($window_left)
    {
        $this->container['window_left'] = $window_left;

        return $this;
    }
   /**
     * Gets window_top
     *
     * @return double
     */
    public function getWindowTop()
    {
        return $this->container['window_top'];
    }

    /**
     * Sets window_top
     *
     *  The distance from the top edge of the client area to the top edge of thewindow, in unit of point.            
     *
     * @return $this
     */
    public function setWindowTop($window_top)
    {
        $this->container['window_top'] = $window_top;

        return $this;
    }
   /**
     * Gets window_width
     *
     * @return double
     */
    public function getWindowWidth()
    {
        return $this->container['window_width'];
    }

    /**
     * Sets window_width
     *
     *  The width of the window, in unit of point.            
     *
     * @return $this
     */
    public function setWindowWidth($window_width)
    {
        $this->container['window_width'] = $window_width;

        return $this;
    }
   /**
     * Gets author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     *  Gets and sets the author of the file. 
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }
   /**
     * Gets check_custom_number_format
     *
     * @return bool
     */
    public function getCheckCustomNumberFormat()
    {
        return $this->container['check_custom_number_format'];
    }

    /**
     * Sets check_custom_number_format
     *
     *  Indicates whether checking custom number format when setting Style.Custom. 
     *
     * @return $this
     */
    public function setCheckCustomNumberFormat($check_custom_number_format)
    {
        $this->container['check_custom_number_format'] = $check_custom_number_format;

        return $this;
    }
   /**
     * Gets protection_type
     *
     * @return string
     */
    public function getProtectionType()
    {
        return $this->container['protection_type'];
    }

    /**
     * Sets protection_type
     *
     *  Gets the protection type of the workbook. 
     *
     * @return $this
     */
    public function setProtectionType($protection_type)
    {
        $this->container['protection_type'] = $protection_type;

        return $this;
    }
   /**
     * Gets globalization_settings
     *
     * @return \Aspose\Cells\Cloud\Model\GlobalizationSettings
     */
    public function getGlobalizationSettings()
    {
        return $this->container['globalization_settings'];
    }

    /**
     * Sets globalization_settings
     *
     *  Gets and sets the globalization settings. 
     *
     * @return $this
     */
    public function setGlobalizationSettings($globalization_settings)
    {
        $this->container['globalization_settings'] = $globalization_settings;

        return $this;
    }
   /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     *  Represents Workbook file encryption password. 
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }
   /**
     * Gets write_protection
     *
     * @return \Aspose\Cells\Cloud\Model\WriteProtection
     */
    public function getWriteProtection()
    {
        return $this->container['write_protection'];
    }

    /**
     * Sets write_protection
     *
     *  Provides access to the workbook write protection options. 
     *
     * @return $this
     */
    public function setWriteProtection($write_protection)
    {
        $this->container['write_protection'] = $write_protection;

        return $this;
    }
   /**
     * Gets is_encrypted
     *
     * @return bool
     */
    public function getIsEncrypted()
    {
        return $this->container['is_encrypted'];
    }

    /**
     * Sets is_encrypted
     *
     *  Gets a value that indicates whether a password is required to open this workbook. 
     *
     * @return $this
     */
    public function setIsEncrypted($is_encrypted)
    {
        $this->container['is_encrypted'] = $is_encrypted;

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
     *  Gets a value that indicates whether the structure or window of the Workbook is protected. 
     *
     * @return $this
     */
    public function setIsProtected($is_protected)
    {
        $this->container['is_protected'] = $is_protected;

        return $this;
    }
   /**
     * Gets max_row
     *
     * @return int
     */
    public function getMaxRow()
    {
        return $this->container['max_row'];
    }

    /**
     * Sets max_row
     *
     *  Gets the max row index, zero-based. 
     *
     * @return $this
     */
    public function setMaxRow($max_row)
    {
        $this->container['max_row'] = $max_row;

        return $this;
    }
   /**
     * Gets max_column
     *
     * @return int
     */
    public function getMaxColumn()
    {
        return $this->container['max_column'];
    }

    /**
     * Sets max_column
     *
     *  Gets the max column index, zero-based. 
     *
     * @return $this
     */
    public function setMaxColumn($max_column)
    {
        $this->container['max_column'] = $max_column;

        return $this;
    }
   /**
     * Gets significant_digits
     *
     * @return int
     */
    public function getSignificantDigits()
    {
        return $this->container['significant_digits'];
    }

    /**
     * Sets significant_digits
     *
     *  
     *
     * @return $this
     */
    public function setSignificantDigits($significant_digits)
    {
        $this->container['significant_digits'] = $significant_digits;

        return $this;
    }
   /**
     * Gets check_compatibility
     *
     * @return bool
     */
    public function getCheckCompatibility()
    {
        return $this->container['check_compatibility'];
    }

    /**
     * Sets check_compatibility
     *
     *  Indicates whether check compatibility with earlier versions when saving workbook. 
     *
     * @return $this
     */
    public function setCheckCompatibility($check_compatibility)
    {
        $this->container['check_compatibility'] = $check_compatibility;

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
     *  Gets and sets the default print paper size. 
     *
     * @return $this
     */
    public function setPaperSize($paper_size)
    {
        $this->container['paper_size'] = $paper_size;

        return $this;
    }
   /**
     * Gets max_rows_of_shared_formula
     *
     * @return int
     */
    public function getMaxRowsOfSharedFormula()
    {
        return $this->container['max_rows_of_shared_formula'];
    }

    /**
     * Sets max_rows_of_shared_formula
     *
     *  Gets and sets the max row number of shared formula. 
     *
     * @return $this
     */
    public function setMaxRowsOfSharedFormula($max_rows_of_shared_formula)
    {
        $this->container['max_rows_of_shared_formula'] = $max_rows_of_shared_formula;

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
     *  Specifies the OOXML version for the output document. The default value is Ecma376_2006. 
     *
     * @return $this
     */
    public function setCompliance($compliance)
    {
        $this->container['compliance'] = $compliance;

        return $this;
    }
   /**
     * Gets quote_prefix_to_style
     *
     * @return bool
     */
    public function getQuotePrefixToStyle()
    {
        return $this->container['quote_prefix_to_style'];
    }

    /**
     * Sets quote_prefix_to_style
     *
     *  Indicates whether setting  property when entering the string value(which starts  with single quote mark ) to the cell 
     *
     * @return $this
     */
    public function setQuotePrefixToStyle($quote_prefix_to_style)
    {
        $this->container['quote_prefix_to_style'] = $quote_prefix_to_style;

        return $this;
    }
   /**
     * Gets formula_settings
     *
     * @return \Aspose\Cells\Cloud\Model\FormulaSettings
     */
    public function getFormulaSettings()
    {
        return $this->container['formula_settings'];
    }

    /**
     * Sets formula_settings
     *
     *  Gets the settings for formula-related features. 
     *
     * @return $this
     */
    public function setFormulaSettings($formula_settings)
    {
        $this->container['formula_settings'] = $formula_settings;

        return $this;
    }
   /**
     * Gets force_full_calculate
     *
     * @return bool
     */
    public function getForceFullCalculate()
    {
        return $this->container['force_full_calculate'];
    }

    /**
     * Sets force_full_calculate
     *
     *  Fully calculates every time when a calculation is triggered. 
     *
     * @return $this
     */
    public function setForceFullCalculate($force_full_calculate)
    {
        $this->container['force_full_calculate'] = $force_full_calculate;

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
