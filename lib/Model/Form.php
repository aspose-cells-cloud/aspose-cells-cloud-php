<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Form.cs">
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

class Form implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Form';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'form_type' => 'string',
        'checked_value' => 'string',
        'shadow' => 'bool',
        'input_range' => 'string',
        'selected_index' => 'int',
        'selected_value' => 'string',
        'selected_cell' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'drop_down_lines' => 'int',
        'item_count' => 'int',
        'selected_cells' => '\Aspose\Cells\Cloud\Model\LinkElement[]',
        'selection_type' => 'string',
        'is_checked' => 'bool',
        'current_value' => 'int',
        'min' => 'int',
        'max' => 'int',
        'incremental_change' => 'int',
        'page_change' => 'int',
        'is_horizontal' => 'bool',
        'name' => 'string',
        'mso_drawing_type' => 'string',
        'auto_shape_type' => 'string',
        'placement' => 'string',
        'upper_left_row' => 'int',
        'top' => 'int',
        'upper_left_column' => 'int',
        'left' => 'int',
        'lower_right_row' => 'int',
        'bottom' => 'int',
        'lower_right_column' => 'int',
        'right' => 'int',
        'width' => 'int',
        'height' => 'int',
        'x' => 'int',
        'y' => 'int',
        'rotation_angle' => 'double',
        'html_text' => 'string',
        'text' => 'string',
        'alternative_text' => 'string',
        'text_horizontal_alignment' => 'string',
        'text_horizontal_overflow' => 'string',
        'text_orientation_type' => 'string',
        'text_vertical_alignment' => 'string',
        'text_vertical_overflow' => 'string',
        'is_group' => 'bool',
        'is_hidden' => 'bool',
        'is_lock_aspect_ratio' => 'bool',
        'is_locked' => 'bool',
        'is_printable' => 'bool',
        'is_text_wrapped' => 'bool',
        'is_word_art' => 'bool',
        'linked_cell' => 'string',
        'z_order_position' => 'int',
        'font' => '\Aspose\Cells\Cloud\Model\Font',
        'hyperlink' => 'string',
        'link' => '\Aspose\Cells\Cloud\Model\Link'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'form_type' => null  ,
        'checked_value' => null  ,
        'shadow' => null  ,
        'input_range' => null  ,
        'selected_index' => null  ,
        'selected_value' => null  ,
        'selected_cell' => null  ,
        'drop_down_lines' => null  ,
        'item_count' => null  ,
        'selected_cells' => null  ,
        'selection_type' => null  ,
        'is_checked' => null  ,
        'current_value' => null  ,
        'min' => null  ,
        'max' => null  ,
        'incremental_change' => null  ,
        'page_change' => null  ,
        'is_horizontal' => null  ,
        'name' => null  ,
        'mso_drawing_type' => null  ,
        'auto_shape_type' => null  ,
        'placement' => null  ,
        'upper_left_row' => null  ,
        'top' => null  ,
        'upper_left_column' => null  ,
        'left' => null  ,
        'lower_right_row' => null  ,
        'bottom' => null  ,
        'lower_right_column' => null  ,
        'right' => null  ,
        'width' => null  ,
        'height' => null  ,
        'x' => null  ,
        'y' => null  ,
        'rotation_angle' => null  ,
        'html_text' => null  ,
        'text' => null  ,
        'alternative_text' => null  ,
        'text_horizontal_alignment' => null  ,
        'text_horizontal_overflow' => null  ,
        'text_orientation_type' => null  ,
        'text_vertical_alignment' => null  ,
        'text_vertical_overflow' => null  ,
        'is_group' => null  ,
        'is_hidden' => null  ,
        'is_lock_aspect_ratio' => null  ,
        'is_locked' => null  ,
        'is_printable' => null  ,
        'is_text_wrapped' => null  ,
        'is_word_art' => null  ,
        'linked_cell' => null  ,
        'z_order_position' => null  ,
        'font' => null  ,
        'hyperlink' => null  ,
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
         'form_type' => 'FormType' ,
         'checked_value' => 'CheckedValue' ,
         'shadow' => 'Shadow' ,
         'input_range' => 'InputRange' ,
         'selected_index' => 'SelectedIndex' ,
         'selected_value' => 'SelectedValue' ,
         'selected_cell' => 'SelectedCell' ,
         'drop_down_lines' => 'DropDownLines' ,
         'item_count' => 'ItemCount' ,
         'selected_cells' => 'SelectedCells' ,
         'selection_type' => 'SelectionType' ,
         'is_checked' => 'IsChecked' ,
         'current_value' => 'CurrentValue' ,
         'min' => 'Min' ,
         'max' => 'Max' ,
         'incremental_change' => 'IncrementalChange' ,
         'page_change' => 'PageChange' ,
         'is_horizontal' => 'IsHorizontal' ,
         'name' => 'Name' ,
         'mso_drawing_type' => 'MsoDrawingType' ,
         'auto_shape_type' => 'AutoShapeType' ,
         'placement' => 'Placement' ,
         'upper_left_row' => 'UpperLeftRow' ,
         'top' => 'Top' ,
         'upper_left_column' => 'UpperLeftColumn' ,
         'left' => 'Left' ,
         'lower_right_row' => 'LowerRightRow' ,
         'bottom' => 'Bottom' ,
         'lower_right_column' => 'LowerRightColumn' ,
         'right' => 'Right' ,
         'width' => 'Width' ,
         'height' => 'Height' ,
         'x' => 'X' ,
         'y' => 'Y' ,
         'rotation_angle' => 'RotationAngle' ,
         'html_text' => 'HtmlText' ,
         'text' => 'Text' ,
         'alternative_text' => 'AlternativeText' ,
         'text_horizontal_alignment' => 'TextHorizontalAlignment' ,
         'text_horizontal_overflow' => 'TextHorizontalOverflow' ,
         'text_orientation_type' => 'TextOrientationType' ,
         'text_vertical_alignment' => 'TextVerticalAlignment' ,
         'text_vertical_overflow' => 'TextVerticalOverflow' ,
         'is_group' => 'IsGroup' ,
         'is_hidden' => 'IsHidden' ,
         'is_lock_aspect_ratio' => 'IsLockAspectRatio' ,
         'is_locked' => 'IsLocked' ,
         'is_printable' => 'IsPrintable' ,
         'is_text_wrapped' => 'IsTextWrapped' ,
         'is_word_art' => 'IsWordArt' ,
         'linked_cell' => 'LinkedCell' ,
         'z_order_position' => 'ZOrderPosition' ,
         'font' => 'Font' ,
         'hyperlink' => 'Hyperlink' ,
         'link' => 'link' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'form_type' => 'setFormType' ,
        'checked_value' => 'setCheckedValue' ,
        'shadow' => 'setShadow' ,
        'input_range' => 'setInputRange' ,
        'selected_index' => 'setSelectedIndex' ,
        'selected_value' => 'setSelectedValue' ,
        'selected_cell' => 'setSelectedCell' ,
        'drop_down_lines' => 'setDropDownLines' ,
        'item_count' => 'setItemCount' ,
        'selected_cells' => 'setSelectedCells' ,
        'selection_type' => 'setSelectionType' ,
        'is_checked' => 'setIsChecked' ,
        'current_value' => 'setCurrentValue' ,
        'min' => 'setMin' ,
        'max' => 'setMax' ,
        'incremental_change' => 'setIncrementalChange' ,
        'page_change' => 'setPageChange' ,
        'is_horizontal' => 'setIsHorizontal' ,
        'name' => 'setName' ,
        'mso_drawing_type' => 'setMsoDrawingType' ,
        'auto_shape_type' => 'setAutoShapeType' ,
        'placement' => 'setPlacement' ,
        'upper_left_row' => 'setUpperLeftRow' ,
        'top' => 'setTop' ,
        'upper_left_column' => 'setUpperLeftColumn' ,
        'left' => 'setLeft' ,
        'lower_right_row' => 'setLowerRightRow' ,
        'bottom' => 'setBottom' ,
        'lower_right_column' => 'setLowerRightColumn' ,
        'right' => 'setRight' ,
        'width' => 'setWidth' ,
        'height' => 'setHeight' ,
        'x' => 'setX' ,
        'y' => 'setY' ,
        'rotation_angle' => 'setRotationAngle' ,
        'html_text' => 'setHtmlText' ,
        'text' => 'setText' ,
        'alternative_text' => 'setAlternativeText' ,
        'text_horizontal_alignment' => 'setTextHorizontalAlignment' ,
        'text_horizontal_overflow' => 'setTextHorizontalOverflow' ,
        'text_orientation_type' => 'setTextOrientationType' ,
        'text_vertical_alignment' => 'setTextVerticalAlignment' ,
        'text_vertical_overflow' => 'setTextVerticalOverflow' ,
        'is_group' => 'setIsGroup' ,
        'is_hidden' => 'setIsHidden' ,
        'is_lock_aspect_ratio' => 'setIsLockAspectRatio' ,
        'is_locked' => 'setIsLocked' ,
        'is_printable' => 'setIsPrintable' ,
        'is_text_wrapped' => 'setIsTextWrapped' ,
        'is_word_art' => 'setIsWordArt' ,
        'linked_cell' => 'setLinkedCell' ,
        'z_order_position' => 'setZOrderPosition' ,
        'font' => 'setFont' ,
        'hyperlink' => 'setHyperlink' ,
        'link' => 'setlink' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'form_type' => 'getFormType' ,
        'checked_value' => 'getCheckedValue' ,
        'shadow' => 'getShadow' ,
        'input_range' => 'getInputRange' ,
        'selected_index' => 'getSelectedIndex' ,
        'selected_value' => 'getSelectedValue' ,
        'selected_cell' => 'getSelectedCell' ,
        'drop_down_lines' => 'getDropDownLines' ,
        'item_count' => 'getItemCount' ,
        'selected_cells' => 'getSelectedCells' ,
        'selection_type' => 'getSelectionType' ,
        'is_checked' => 'getIsChecked' ,
        'current_value' => 'getCurrentValue' ,
        'min' => 'getMin' ,
        'max' => 'getMax' ,
        'incremental_change' => 'getIncrementalChange' ,
        'page_change' => 'getPageChange' ,
        'is_horizontal' => 'getIsHorizontal' ,
        'name' => 'getName' ,
        'mso_drawing_type' => 'getMsoDrawingType' ,
        'auto_shape_type' => 'getAutoShapeType' ,
        'placement' => 'getPlacement' ,
        'upper_left_row' => 'getUpperLeftRow' ,
        'top' => 'getTop' ,
        'upper_left_column' => 'getUpperLeftColumn' ,
        'left' => 'getLeft' ,
        'lower_right_row' => 'getLowerRightRow' ,
        'bottom' => 'getBottom' ,
        'lower_right_column' => 'getLowerRightColumn' ,
        'right' => 'getRight' ,
        'width' => 'getWidth' ,
        'height' => 'getHeight' ,
        'x' => 'getX' ,
        'y' => 'getY' ,
        'rotation_angle' => 'getRotationAngle' ,
        'html_text' => 'getHtmlText' ,
        'text' => 'getText' ,
        'alternative_text' => 'getAlternativeText' ,
        'text_horizontal_alignment' => 'getTextHorizontalAlignment' ,
        'text_horizontal_overflow' => 'getTextHorizontalOverflow' ,
        'text_orientation_type' => 'getTextOrientationType' ,
        'text_vertical_alignment' => 'getTextVerticalAlignment' ,
        'text_vertical_overflow' => 'getTextVerticalOverflow' ,
        'is_group' => 'getIsGroup' ,
        'is_hidden' => 'getIsHidden' ,
        'is_lock_aspect_ratio' => 'getIsLockAspectRatio' ,
        'is_locked' => 'getIsLocked' ,
        'is_printable' => 'getIsPrintable' ,
        'is_text_wrapped' => 'getIsTextWrapped' ,
        'is_word_art' => 'getIsWordArt' ,
        'linked_cell' => 'getLinkedCell' ,
        'z_order_position' => 'getZOrderPosition' ,
        'font' => 'getFont' ,
        'hyperlink' => 'getHyperlink' ,
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
        $this->container['form_type'] = isset($data['form_type']) ? $data['form_type'] : null;
        $this->container['checked_value'] = isset($data['checked_value']) ? $data['checked_value'] : null;
        $this->container['shadow'] = isset($data['shadow']) ? $data['shadow'] : null;
        $this->container['input_range'] = isset($data['input_range']) ? $data['input_range'] : null;
        $this->container['selected_index'] = isset($data['selected_index']) ? $data['selected_index'] : null;
        $this->container['selected_value'] = isset($data['selected_value']) ? $data['selected_value'] : null;
        $this->container['selected_cell'] = isset($data['selected_cell']) ? $data['selected_cell'] : null;
        $this->container['drop_down_lines'] = isset($data['drop_down_lines']) ? $data['drop_down_lines'] : null;
        $this->container['item_count'] = isset($data['item_count']) ? $data['item_count'] : null;
        $this->container['selected_cells'] = isset($data['selected_cells']) ? $data['selected_cells'] : null;
        $this->container['selection_type'] = isset($data['selection_type']) ? $data['selection_type'] : null;
        $this->container['is_checked'] = isset($data['is_checked']) ? $data['is_checked'] : null;
        $this->container['current_value'] = isset($data['current_value']) ? $data['current_value'] : null;
        $this->container['min'] = isset($data['min']) ? $data['min'] : null;
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
        $this->container['incremental_change'] = isset($data['incremental_change']) ? $data['incremental_change'] : null;
        $this->container['page_change'] = isset($data['page_change']) ? $data['page_change'] : null;
        $this->container['is_horizontal'] = isset($data['is_horizontal']) ? $data['is_horizontal'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['mso_drawing_type'] = isset($data['mso_drawing_type']) ? $data['mso_drawing_type'] : null;
        $this->container['auto_shape_type'] = isset($data['auto_shape_type']) ? $data['auto_shape_type'] : null;
        $this->container['placement'] = isset($data['placement']) ? $data['placement'] : null;
        $this->container['upper_left_row'] = isset($data['upper_left_row']) ? $data['upper_left_row'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['upper_left_column'] = isset($data['upper_left_column']) ? $data['upper_left_column'] : null;
        $this->container['left'] = isset($data['left']) ? $data['left'] : null;
        $this->container['lower_right_row'] = isset($data['lower_right_row']) ? $data['lower_right_row'] : null;
        $this->container['bottom'] = isset($data['bottom']) ? $data['bottom'] : null;
        $this->container['lower_right_column'] = isset($data['lower_right_column']) ? $data['lower_right_column'] : null;
        $this->container['right'] = isset($data['right']) ? $data['right'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['x'] = isset($data['x']) ? $data['x'] : null;
        $this->container['y'] = isset($data['y']) ? $data['y'] : null;
        $this->container['rotation_angle'] = isset($data['rotation_angle']) ? $data['rotation_angle'] : null;
        $this->container['html_text'] = isset($data['html_text']) ? $data['html_text'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['alternative_text'] = isset($data['alternative_text']) ? $data['alternative_text'] : null;
        $this->container['text_horizontal_alignment'] = isset($data['text_horizontal_alignment']) ? $data['text_horizontal_alignment'] : null;
        $this->container['text_horizontal_overflow'] = isset($data['text_horizontal_overflow']) ? $data['text_horizontal_overflow'] : null;
        $this->container['text_orientation_type'] = isset($data['text_orientation_type']) ? $data['text_orientation_type'] : null;
        $this->container['text_vertical_alignment'] = isset($data['text_vertical_alignment']) ? $data['text_vertical_alignment'] : null;
        $this->container['text_vertical_overflow'] = isset($data['text_vertical_overflow']) ? $data['text_vertical_overflow'] : null;
        $this->container['is_group'] = isset($data['is_group']) ? $data['is_group'] : null;
        $this->container['is_hidden'] = isset($data['is_hidden']) ? $data['is_hidden'] : null;
        $this->container['is_lock_aspect_ratio'] = isset($data['is_lock_aspect_ratio']) ? $data['is_lock_aspect_ratio'] : null;
        $this->container['is_locked'] = isset($data['is_locked']) ? $data['is_locked'] : null;
        $this->container['is_printable'] = isset($data['is_printable']) ? $data['is_printable'] : null;
        $this->container['is_text_wrapped'] = isset($data['is_text_wrapped']) ? $data['is_text_wrapped'] : null;
        $this->container['is_word_art'] = isset($data['is_word_art']) ? $data['is_word_art'] : null;
        $this->container['linked_cell'] = isset($data['linked_cell']) ? $data['linked_cell'] : null;
        $this->container['z_order_position'] = isset($data['z_order_position']) ? $data['z_order_position'] : null;
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
        $this->container['hyperlink'] = isset($data['hyperlink']) ? $data['hyperlink'] : null;
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
        if ($this->container['form_type'] === null) {
            $invalidProperties[] = "'form_type' can't be null";
        }
        if ($this->container['checked_value'] === null) {
            $invalidProperties[] = "'checked_value' can't be null";
        }
        if ($this->container['shadow'] === null) {
            $invalidProperties[] = "'shadow' can't be null";
        }
        if ($this->container['input_range'] === null) {
            $invalidProperties[] = "'input_range' can't be null";
        }
        if ($this->container['selected_index'] === null) {
            $invalidProperties[] = "'selected_index' can't be null";
        }
        if ($this->container['selected_value'] === null) {
            $invalidProperties[] = "'selected_value' can't be null";
        }
        if ($this->container['selected_cell'] === null) {
            $invalidProperties[] = "'selected_cell' can't be null";
        }
        if ($this->container['drop_down_lines'] === null) {
            $invalidProperties[] = "'drop_down_lines' can't be null";
        }
        if ($this->container['item_count'] === null) {
            $invalidProperties[] = "'item_count' can't be null";
        }
        if ($this->container['selected_cells'] === null) {
            $invalidProperties[] = "'selected_cells' can't be null";
        }
        if ($this->container['selection_type'] === null) {
            $invalidProperties[] = "'selection_type' can't be null";
        }
        if ($this->container['is_checked'] === null) {
            $invalidProperties[] = "'is_checked' can't be null";
        }
        if ($this->container['current_value'] === null) {
            $invalidProperties[] = "'current_value' can't be null";
        }
        if ($this->container['min'] === null) {
            $invalidProperties[] = "'min' can't be null";
        }
        if ($this->container['max'] === null) {
            $invalidProperties[] = "'max' can't be null";
        }
        if ($this->container['incremental_change'] === null) {
            $invalidProperties[] = "'incremental_change' can't be null";
        }
        if ($this->container['page_change'] === null) {
            $invalidProperties[] = "'page_change' can't be null";
        }
        if ($this->container['is_horizontal'] === null) {
            $invalidProperties[] = "'is_horizontal' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['mso_drawing_type'] === null) {
            $invalidProperties[] = "'mso_drawing_type' can't be null";
        }
        if ($this->container['auto_shape_type'] === null) {
            $invalidProperties[] = "'auto_shape_type' can't be null";
        }
        if ($this->container['placement'] === null) {
            $invalidProperties[] = "'placement' can't be null";
        }
        if ($this->container['upper_left_row'] === null) {
            $invalidProperties[] = "'upper_left_row' can't be null";
        }
        if ($this->container['top'] === null) {
            $invalidProperties[] = "'top' can't be null";
        }
        if ($this->container['upper_left_column'] === null) {
            $invalidProperties[] = "'upper_left_column' can't be null";
        }
        if ($this->container['left'] === null) {
            $invalidProperties[] = "'left' can't be null";
        }
        if ($this->container['lower_right_row'] === null) {
            $invalidProperties[] = "'lower_right_row' can't be null";
        }
        if ($this->container['bottom'] === null) {
            $invalidProperties[] = "'bottom' can't be null";
        }
        if ($this->container['lower_right_column'] === null) {
            $invalidProperties[] = "'lower_right_column' can't be null";
        }
        if ($this->container['right'] === null) {
            $invalidProperties[] = "'right' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['x'] === null) {
            $invalidProperties[] = "'x' can't be null";
        }
        if ($this->container['y'] === null) {
            $invalidProperties[] = "'y' can't be null";
        }
        if ($this->container['rotation_angle'] === null) {
            $invalidProperties[] = "'rotation_angle' can't be null";
        }
        if ($this->container['html_text'] === null) {
            $invalidProperties[] = "'html_text' can't be null";
        }
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }
        if ($this->container['alternative_text'] === null) {
            $invalidProperties[] = "'alternative_text' can't be null";
        }
        if ($this->container['text_horizontal_alignment'] === null) {
            $invalidProperties[] = "'text_horizontal_alignment' can't be null";
        }
        if ($this->container['text_horizontal_overflow'] === null) {
            $invalidProperties[] = "'text_horizontal_overflow' can't be null";
        }
        if ($this->container['text_orientation_type'] === null) {
            $invalidProperties[] = "'text_orientation_type' can't be null";
        }
        if ($this->container['text_vertical_alignment'] === null) {
            $invalidProperties[] = "'text_vertical_alignment' can't be null";
        }
        if ($this->container['text_vertical_overflow'] === null) {
            $invalidProperties[] = "'text_vertical_overflow' can't be null";
        }
        if ($this->container['is_group'] === null) {
            $invalidProperties[] = "'is_group' can't be null";
        }
        if ($this->container['is_hidden'] === null) {
            $invalidProperties[] = "'is_hidden' can't be null";
        }
        if ($this->container['is_lock_aspect_ratio'] === null) {
            $invalidProperties[] = "'is_lock_aspect_ratio' can't be null";
        }
        if ($this->container['is_locked'] === null) {
            $invalidProperties[] = "'is_locked' can't be null";
        }
        if ($this->container['is_printable'] === null) {
            $invalidProperties[] = "'is_printable' can't be null";
        }
        if ($this->container['is_text_wrapped'] === null) {
            $invalidProperties[] = "'is_text_wrapped' can't be null";
        }
        if ($this->container['is_word_art'] === null) {
            $invalidProperties[] = "'is_word_art' can't be null";
        }
        if ($this->container['linked_cell'] === null) {
            $invalidProperties[] = "'linked_cell' can't be null";
        }
        if ($this->container['z_order_position'] === null) {
            $invalidProperties[] = "'z_order_position' can't be null";
        }
        if ($this->container['font'] === null) {
            $invalidProperties[] = "'font' can't be null";
        }
        if ($this->container['hyperlink'] === null) {
            $invalidProperties[] = "'hyperlink' can't be null";
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
        if ($this->container['form_type'] === null) {
                    return false;
                }
        if ($this->container['checked_value'] === null) {
                    return false;
                }
        if ($this->container['shadow'] === null) {
                    return false;
                }
        if ($this->container['input_range'] === null) {
                    return false;
                }
        if ($this->container['selected_index'] === null) {
                    return false;
                }
        if ($this->container['selected_value'] === null) {
                    return false;
                }
        if ($this->container['selected_cell'] === null) {
                    return false;
                }
        if ($this->container['drop_down_lines'] === null) {
                    return false;
                }
        if ($this->container['item_count'] === null) {
                    return false;
                }
        if ($this->container['selected_cells'] === null) {
                    return false;
                }
        if ($this->container['selection_type'] === null) {
                    return false;
                }
        if ($this->container['is_checked'] === null) {
                    return false;
                }
        if ($this->container['current_value'] === null) {
                    return false;
                }
        if ($this->container['min'] === null) {
                    return false;
                }
        if ($this->container['max'] === null) {
                    return false;
                }
        if ($this->container['incremental_change'] === null) {
                    return false;
                }
        if ($this->container['page_change'] === null) {
                    return false;
                }
        if ($this->container['is_horizontal'] === null) {
                    return false;
                }
        if ($this->container['name'] === null) {
                    return false;
                }
        if ($this->container['mso_drawing_type'] === null) {
                    return false;
                }
        if ($this->container['auto_shape_type'] === null) {
                    return false;
                }
        if ($this->container['placement'] === null) {
                    return false;
                }
        if ($this->container['upper_left_row'] === null) {
                    return false;
                }
        if ($this->container['top'] === null) {
                    return false;
                }
        if ($this->container['upper_left_column'] === null) {
                    return false;
                }
        if ($this->container['left'] === null) {
                    return false;
                }
        if ($this->container['lower_right_row'] === null) {
                    return false;
                }
        if ($this->container['bottom'] === null) {
                    return false;
                }
        if ($this->container['lower_right_column'] === null) {
                    return false;
                }
        if ($this->container['right'] === null) {
                    return false;
                }
        if ($this->container['width'] === null) {
                    return false;
                }
        if ($this->container['height'] === null) {
                    return false;
                }
        if ($this->container['x'] === null) {
                    return false;
                }
        if ($this->container['y'] === null) {
                    return false;
                }
        if ($this->container['rotation_angle'] === null) {
                    return false;
                }
        if ($this->container['html_text'] === null) {
                    return false;
                }
        if ($this->container['text'] === null) {
                    return false;
                }
        if ($this->container['alternative_text'] === null) {
                    return false;
                }
        if ($this->container['text_horizontal_alignment'] === null) {
                    return false;
                }
        if ($this->container['text_horizontal_overflow'] === null) {
                    return false;
                }
        if ($this->container['text_orientation_type'] === null) {
                    return false;
                }
        if ($this->container['text_vertical_alignment'] === null) {
                    return false;
                }
        if ($this->container['text_vertical_overflow'] === null) {
                    return false;
                }
        if ($this->container['is_group'] === null) {
                    return false;
                }
        if ($this->container['is_hidden'] === null) {
                    return false;
                }
        if ($this->container['is_lock_aspect_ratio'] === null) {
                    return false;
                }
        if ($this->container['is_locked'] === null) {
                    return false;
                }
        if ($this->container['is_printable'] === null) {
                    return false;
                }
        if ($this->container['is_text_wrapped'] === null) {
                    return false;
                }
        if ($this->container['is_word_art'] === null) {
                    return false;
                }
        if ($this->container['linked_cell'] === null) {
                    return false;
                }
        if ($this->container['z_order_position'] === null) {
                    return false;
                }
        if ($this->container['font'] === null) {
                    return false;
                }
        if ($this->container['hyperlink'] === null) {
                    return false;
                }
        if ($this->container['link'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets form_type
     *
     * @return string
     */
    public function getFormType()
    {
        return $this->container['form_type'];
    }

    /**
     * Sets form_type
     *
     *  
     *
     * @return $this
     */
    public function setFormType($form_type)
    {
        $this->container['form_type'] = $form_type;

        return $this;
    }
   /**
     * Gets checked_value
     *
     * @return string
     */
    public function getCheckedValue()
    {
        return $this->container['checked_value'];
    }

    /**
     * Sets checked_value
     *
     *  
     *
     * @return $this
     */
    public function setCheckedValue($checked_value)
    {
        $this->container['checked_value'] = $checked_value;

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
     *  
     *
     * @return $this
     */
    public function setShadow($shadow)
    {
        $this->container['shadow'] = $shadow;

        return $this;
    }
   /**
     * Gets input_range
     *
     * @return string
     */
    public function getInputRange()
    {
        return $this->container['input_range'];
    }

    /**
     * Sets input_range
     *
     *  
     *
     * @return $this
     */
    public function setInputRange($input_range)
    {
        $this->container['input_range'] = $input_range;

        return $this;
    }
   /**
     * Gets selected_index
     *
     * @return int
     */
    public function getSelectedIndex()
    {
        return $this->container['selected_index'];
    }

    /**
     * Sets selected_index
     *
     *  
     *
     * @return $this
     */
    public function setSelectedIndex($selected_index)
    {
        $this->container['selected_index'] = $selected_index;

        return $this;
    }
   /**
     * Gets selected_value
     *
     * @return string
     */
    public function getSelectedValue()
    {
        return $this->container['selected_value'];
    }

    /**
     * Sets selected_value
     *
     *  
     *
     * @return $this
     */
    public function setSelectedValue($selected_value)
    {
        $this->container['selected_value'] = $selected_value;

        return $this;
    }
   /**
     * Gets selected_cell
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getSelectedCell()
    {
        return $this->container['selected_cell'];
    }

    /**
     * Sets selected_cell
     *
     *  
     *
     * @return $this
     */
    public function setSelectedCell($selected_cell)
    {
        $this->container['selected_cell'] = $selected_cell;

        return $this;
    }
   /**
     * Gets drop_down_lines
     *
     * @return int
     */
    public function getDropDownLines()
    {
        return $this->container['drop_down_lines'];
    }

    /**
     * Sets drop_down_lines
     *
     *  
     *
     * @return $this
     */
    public function setDropDownLines($drop_down_lines)
    {
        $this->container['drop_down_lines'] = $drop_down_lines;

        return $this;
    }
   /**
     * Gets item_count
     *
     * @return int
     */
    public function getItemCount()
    {
        return $this->container['item_count'];
    }

    /**
     * Sets item_count
     *
     *  
     *
     * @return $this
     */
    public function setItemCount($item_count)
    {
        $this->container['item_count'] = $item_count;

        return $this;
    }
   /**
     * Gets selected_cells
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement[]
     */
    public function getSelectedCells()
    {
        return $this->container['selected_cells'];
    }

    /**
     * Sets selected_cells
     *
     *  
     *
     * @return $this
     */
    public function setSelectedCells($selected_cells)
    {
        $this->container['selected_cells'] = $selected_cells;

        return $this;
    }
   /**
     * Gets selection_type
     *
     * @return string
     */
    public function getSelectionType()
    {
        return $this->container['selection_type'];
    }

    /**
     * Sets selection_type
     *
     *  
     *
     * @return $this
     */
    public function setSelectionType($selection_type)
    {
        $this->container['selection_type'] = $selection_type;

        return $this;
    }
   /**
     * Gets is_checked
     *
     * @return bool
     */
    public function getIsChecked()
    {
        return $this->container['is_checked'];
    }

    /**
     * Sets is_checked
     *
     *  
     *
     * @return $this
     */
    public function setIsChecked($is_checked)
    {
        $this->container['is_checked'] = $is_checked;

        return $this;
    }
   /**
     * Gets current_value
     *
     * @return int
     */
    public function getCurrentValue()
    {
        return $this->container['current_value'];
    }

    /**
     * Sets current_value
     *
     *  
     *
     * @return $this
     */
    public function setCurrentValue($current_value)
    {
        $this->container['current_value'] = $current_value;

        return $this;
    }
   /**
     * Gets min
     *
     * @return int
     */
    public function getMin()
    {
        return $this->container['min'];
    }

    /**
     * Sets min
     *
     *  
     *
     * @return $this
     */
    public function setMin($min)
    {
        $this->container['min'] = $min;

        return $this;
    }
   /**
     * Gets max
     *
     * @return int
     */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
     * Sets max
     *
     *  
     *
     * @return $this
     */
    public function setMax($max)
    {
        $this->container['max'] = $max;

        return $this;
    }
   /**
     * Gets incremental_change
     *
     * @return int
     */
    public function getIncrementalChange()
    {
        return $this->container['incremental_change'];
    }

    /**
     * Sets incremental_change
     *
     *  
     *
     * @return $this
     */
    public function setIncrementalChange($incremental_change)
    {
        $this->container['incremental_change'] = $incremental_change;

        return $this;
    }
   /**
     * Gets page_change
     *
     * @return int
     */
    public function getPageChange()
    {
        return $this->container['page_change'];
    }

    /**
     * Sets page_change
     *
     *  
     *
     * @return $this
     */
    public function setPageChange($page_change)
    {
        $this->container['page_change'] = $page_change;

        return $this;
    }
   /**
     * Gets is_horizontal
     *
     * @return bool
     */
    public function getIsHorizontal()
    {
        return $this->container['is_horizontal'];
    }

    /**
     * Sets is_horizontal
     *
     *  
     *
     * @return $this
     */
    public function setIsHorizontal($is_horizontal)
    {
        $this->container['is_horizontal'] = $is_horizontal;

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
     * Gets mso_drawing_type
     *
     * @return string
     */
    public function getMsoDrawingType()
    {
        return $this->container['mso_drawing_type'];
    }

    /**
     * Sets mso_drawing_type
     *
     *  
     *
     * @return $this
     */
    public function setMsoDrawingType($mso_drawing_type)
    {
        $this->container['mso_drawing_type'] = $mso_drawing_type;

        return $this;
    }
   /**
     * Gets auto_shape_type
     *
     * @return string
     */
    public function getAutoShapeType()
    {
        return $this->container['auto_shape_type'];
    }

    /**
     * Sets auto_shape_type
     *
     *  
     *
     * @return $this
     */
    public function setAutoShapeType($auto_shape_type)
    {
        $this->container['auto_shape_type'] = $auto_shape_type;

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
     *  
     *
     * @return $this
     */
    public function setPlacement($placement)
    {
        $this->container['placement'] = $placement;

        return $this;
    }
   /**
     * Gets upper_left_row
     *
     * @return int
     */
    public function getUpperLeftRow()
    {
        return $this->container['upper_left_row'];
    }

    /**
     * Sets upper_left_row
     *
     *  
     *
     * @return $this
     */
    public function setUpperLeftRow($upper_left_row)
    {
        $this->container['upper_left_row'] = $upper_left_row;

        return $this;
    }
   /**
     * Gets top
     *
     * @return int
     */
    public function getTop()
    {
        return $this->container['top'];
    }

    /**
     * Sets top
     *
     *  
     *
     * @return $this
     */
    public function setTop($top)
    {
        $this->container['top'] = $top;

        return $this;
    }
   /**
     * Gets upper_left_column
     *
     * @return int
     */
    public function getUpperLeftColumn()
    {
        return $this->container['upper_left_column'];
    }

    /**
     * Sets upper_left_column
     *
     *  
     *
     * @return $this
     */
    public function setUpperLeftColumn($upper_left_column)
    {
        $this->container['upper_left_column'] = $upper_left_column;

        return $this;
    }
   /**
     * Gets left
     *
     * @return int
     */
    public function getLeft()
    {
        return $this->container['left'];
    }

    /**
     * Sets left
     *
     *  
     *
     * @return $this
     */
    public function setLeft($left)
    {
        $this->container['left'] = $left;

        return $this;
    }
   /**
     * Gets lower_right_row
     *
     * @return int
     */
    public function getLowerRightRow()
    {
        return $this->container['lower_right_row'];
    }

    /**
     * Sets lower_right_row
     *
     *  
     *
     * @return $this
     */
    public function setLowerRightRow($lower_right_row)
    {
        $this->container['lower_right_row'] = $lower_right_row;

        return $this;
    }
   /**
     * Gets bottom
     *
     * @return int
     */
    public function getBottom()
    {
        return $this->container['bottom'];
    }

    /**
     * Sets bottom
     *
     *  
     *
     * @return $this
     */
    public function setBottom($bottom)
    {
        $this->container['bottom'] = $bottom;

        return $this;
    }
   /**
     * Gets lower_right_column
     *
     * @return int
     */
    public function getLowerRightColumn()
    {
        return $this->container['lower_right_column'];
    }

    /**
     * Sets lower_right_column
     *
     *  
     *
     * @return $this
     */
    public function setLowerRightColumn($lower_right_column)
    {
        $this->container['lower_right_column'] = $lower_right_column;

        return $this;
    }
   /**
     * Gets right
     *
     * @return int
     */
    public function getRight()
    {
        return $this->container['right'];
    }

    /**
     * Sets right
     *
     *  
     *
     * @return $this
     */
    public function setRight($right)
    {
        $this->container['right'] = $right;

        return $this;
    }
   /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     *  
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }
   /**
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     *  
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }
   /**
     * Gets x
     *
     * @return int
     */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
     * Sets x
     *
     *  
     *
     * @return $this
     */
    public function setX($x)
    {
        $this->container['x'] = $x;

        return $this;
    }
   /**
     * Gets y
     *
     * @return int
     */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
     * Sets y
     *
     *  
     *
     * @return $this
     */
    public function setY($y)
    {
        $this->container['y'] = $y;

        return $this;
    }
   /**
     * Gets rotation_angle
     *
     * @return double
     */
    public function getRotationAngle()
    {
        return $this->container['rotation_angle'];
    }

    /**
     * Sets rotation_angle
     *
     *  
     *
     * @return $this
     */
    public function setRotationAngle($rotation_angle)
    {
        $this->container['rotation_angle'] = $rotation_angle;

        return $this;
    }
   /**
     * Gets html_text
     *
     * @return string
     */
    public function getHtmlText()
    {
        return $this->container['html_text'];
    }

    /**
     * Sets html_text
     *
     *  
     *
     * @return $this
     */
    public function setHtmlText($html_text)
    {
        $this->container['html_text'] = $html_text;

        return $this;
    }
   /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     *  
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }
   /**
     * Gets alternative_text
     *
     * @return string
     */
    public function getAlternativeText()
    {
        return $this->container['alternative_text'];
    }

    /**
     * Sets alternative_text
     *
     *  
     *
     * @return $this
     */
    public function setAlternativeText($alternative_text)
    {
        $this->container['alternative_text'] = $alternative_text;

        return $this;
    }
   /**
     * Gets text_horizontal_alignment
     *
     * @return string
     */
    public function getTextHorizontalAlignment()
    {
        return $this->container['text_horizontal_alignment'];
    }

    /**
     * Sets text_horizontal_alignment
     *
     *  
     *
     * @return $this
     */
    public function setTextHorizontalAlignment($text_horizontal_alignment)
    {
        $this->container['text_horizontal_alignment'] = $text_horizontal_alignment;

        return $this;
    }
   /**
     * Gets text_horizontal_overflow
     *
     * @return string
     */
    public function getTextHorizontalOverflow()
    {
        return $this->container['text_horizontal_overflow'];
    }

    /**
     * Sets text_horizontal_overflow
     *
     *  
     *
     * @return $this
     */
    public function setTextHorizontalOverflow($text_horizontal_overflow)
    {
        $this->container['text_horizontal_overflow'] = $text_horizontal_overflow;

        return $this;
    }
   /**
     * Gets text_orientation_type
     *
     * @return string
     */
    public function getTextOrientationType()
    {
        return $this->container['text_orientation_type'];
    }

    /**
     * Sets text_orientation_type
     *
     *  
     *
     * @return $this
     */
    public function setTextOrientationType($text_orientation_type)
    {
        $this->container['text_orientation_type'] = $text_orientation_type;

        return $this;
    }
   /**
     * Gets text_vertical_alignment
     *
     * @return string
     */
    public function getTextVerticalAlignment()
    {
        return $this->container['text_vertical_alignment'];
    }

    /**
     * Sets text_vertical_alignment
     *
     *  
     *
     * @return $this
     */
    public function setTextVerticalAlignment($text_vertical_alignment)
    {
        $this->container['text_vertical_alignment'] = $text_vertical_alignment;

        return $this;
    }
   /**
     * Gets text_vertical_overflow
     *
     * @return string
     */
    public function getTextVerticalOverflow()
    {
        return $this->container['text_vertical_overflow'];
    }

    /**
     * Sets text_vertical_overflow
     *
     *  
     *
     * @return $this
     */
    public function setTextVerticalOverflow($text_vertical_overflow)
    {
        $this->container['text_vertical_overflow'] = $text_vertical_overflow;

        return $this;
    }
   /**
     * Gets is_group
     *
     * @return bool
     */
    public function getIsGroup()
    {
        return $this->container['is_group'];
    }

    /**
     * Sets is_group
     *
     *  
     *
     * @return $this
     */
    public function setIsGroup($is_group)
    {
        $this->container['is_group'] = $is_group;

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
     *  
     *
     * @return $this
     */
    public function setIsHidden($is_hidden)
    {
        $this->container['is_hidden'] = $is_hidden;

        return $this;
    }
   /**
     * Gets is_lock_aspect_ratio
     *
     * @return bool
     */
    public function getIsLockAspectRatio()
    {
        return $this->container['is_lock_aspect_ratio'];
    }

    /**
     * Sets is_lock_aspect_ratio
     *
     *  
     *
     * @return $this
     */
    public function setIsLockAspectRatio($is_lock_aspect_ratio)
    {
        $this->container['is_lock_aspect_ratio'] = $is_lock_aspect_ratio;

        return $this;
    }
   /**
     * Gets is_locked
     *
     * @return bool
     */
    public function getIsLocked()
    {
        return $this->container['is_locked'];
    }

    /**
     * Sets is_locked
     *
     *  
     *
     * @return $this
     */
    public function setIsLocked($is_locked)
    {
        $this->container['is_locked'] = $is_locked;

        return $this;
    }
   /**
     * Gets is_printable
     *
     * @return bool
     */
    public function getIsPrintable()
    {
        return $this->container['is_printable'];
    }

    /**
     * Sets is_printable
     *
     *  
     *
     * @return $this
     */
    public function setIsPrintable($is_printable)
    {
        $this->container['is_printable'] = $is_printable;

        return $this;
    }
   /**
     * Gets is_text_wrapped
     *
     * @return bool
     */
    public function getIsTextWrapped()
    {
        return $this->container['is_text_wrapped'];
    }

    /**
     * Sets is_text_wrapped
     *
     *  
     *
     * @return $this
     */
    public function setIsTextWrapped($is_text_wrapped)
    {
        $this->container['is_text_wrapped'] = $is_text_wrapped;

        return $this;
    }
   /**
     * Gets is_word_art
     *
     * @return bool
     */
    public function getIsWordArt()
    {
        return $this->container['is_word_art'];
    }

    /**
     * Sets is_word_art
     *
     *  
     *
     * @return $this
     */
    public function setIsWordArt($is_word_art)
    {
        $this->container['is_word_art'] = $is_word_art;

        return $this;
    }
   /**
     * Gets linked_cell
     *
     * @return string
     */
    public function getLinkedCell()
    {
        return $this->container['linked_cell'];
    }

    /**
     * Sets linked_cell
     *
     *  
     *
     * @return $this
     */
    public function setLinkedCell($linked_cell)
    {
        $this->container['linked_cell'] = $linked_cell;

        return $this;
    }
   /**
     * Gets z_order_position
     *
     * @return int
     */
    public function getZOrderPosition()
    {
        return $this->container['z_order_position'];
    }

    /**
     * Sets z_order_position
     *
     *  
     *
     * @return $this
     */
    public function setZOrderPosition($z_order_position)
    {
        $this->container['z_order_position'] = $z_order_position;

        return $this;
    }
   /**
     * Gets font
     *
     * @return \Aspose\Cells\Cloud\Model\Font
     */
    public function getFont()
    {
        return $this->container['font'];
    }

    /**
     * Sets font
     *
     *  
     *
     * @return $this
     */
    public function setFont($font)
    {
        $this->container['font'] = $font;

        return $this;
    }
   /**
     * Gets hyperlink
     *
     * @return string
     */
    public function getHyperlink()
    {
        return $this->container['hyperlink'];
    }

    /**
     * Sets hyperlink
     *
     *  
     *
     * @return $this
     */
    public function setHyperlink($hyperlink)
    {
        $this->container['hyperlink'] = $hyperlink;

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
