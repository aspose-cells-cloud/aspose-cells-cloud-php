<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Validation.cs">
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

class Validation implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Validation';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alert_style' => 'string',
        'area_list' => '\Aspose\Cells\Cloud\Model\CellArea[]',
        'error_message' => 'string',
        'error_title' => 'string',
        'formula1' => 'string',
        'formula2' => 'string',
        'ignore_blank' => 'bool',
        'in_cell_drop_down' => 'bool',
        'input_message' => 'string',
        'input_title' => 'string',
        'operator' => 'string',
        'show_error' => 'bool',
        'show_input' => 'bool',
        'type' => 'string',
        'value1' => 'string',
        'value2' => 'string',
        'link' => '\Aspose\Cells\Cloud\Model\Link'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'alert_style' => null  ,
        'area_list' => null  ,
        'error_message' => null  ,
        'error_title' => null  ,
        'formula1' => null  ,
        'formula2' => null  ,
        'ignore_blank' => null  ,
        'in_cell_drop_down' => null  ,
        'input_message' => null  ,
        'input_title' => null  ,
        'operator' => null  ,
        'show_error' => null  ,
        'show_input' => null  ,
        'type' => null  ,
        'value1' => null  ,
        'value2' => null  ,
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
         'alert_style' => 'AlertStyle' ,
         'area_list' => 'AreaList' ,
         'error_message' => 'ErrorMessage' ,
         'error_title' => 'ErrorTitle' ,
         'formula1' => 'Formula1' ,
         'formula2' => 'Formula2' ,
         'ignore_blank' => 'IgnoreBlank' ,
         'in_cell_drop_down' => 'InCellDropDown' ,
         'input_message' => 'InputMessage' ,
         'input_title' => 'InputTitle' ,
         'operator' => 'Operator' ,
         'show_error' => 'ShowError' ,
         'show_input' => 'ShowInput' ,
         'type' => 'Type' ,
         'value1' => 'Value1' ,
         'value2' => 'Value2' ,
         'link' => 'link' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alert_style' => 'setAlertStyle' ,
        'area_list' => 'setAreaList' ,
        'error_message' => 'setErrorMessage' ,
        'error_title' => 'setErrorTitle' ,
        'formula1' => 'setFormula1' ,
        'formula2' => 'setFormula2' ,
        'ignore_blank' => 'setIgnoreBlank' ,
        'in_cell_drop_down' => 'setInCellDropDown' ,
        'input_message' => 'setInputMessage' ,
        'input_title' => 'setInputTitle' ,
        'operator' => 'setOperator' ,
        'show_error' => 'setShowError' ,
        'show_input' => 'setShowInput' ,
        'type' => 'setType' ,
        'value1' => 'setValue1' ,
        'value2' => 'setValue2' ,
        'link' => 'setlink' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alert_style' => 'getAlertStyle' ,
        'area_list' => 'getAreaList' ,
        'error_message' => 'getErrorMessage' ,
        'error_title' => 'getErrorTitle' ,
        'formula1' => 'getFormula1' ,
        'formula2' => 'getFormula2' ,
        'ignore_blank' => 'getIgnoreBlank' ,
        'in_cell_drop_down' => 'getInCellDropDown' ,
        'input_message' => 'getInputMessage' ,
        'input_title' => 'getInputTitle' ,
        'operator' => 'getOperator' ,
        'show_error' => 'getShowError' ,
        'show_input' => 'getShowInput' ,
        'type' => 'getType' ,
        'value1' => 'getValue1' ,
        'value2' => 'getValue2' ,
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
        $this->container['alert_style'] = isset($data['alert_style']) ? $data['alert_style'] : null;
        $this->container['area_list'] = isset($data['area_list']) ? $data['area_list'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['error_title'] = isset($data['error_title']) ? $data['error_title'] : null;
        $this->container['formula1'] = isset($data['formula1']) ? $data['formula1'] : null;
        $this->container['formula2'] = isset($data['formula2']) ? $data['formula2'] : null;
        $this->container['ignore_blank'] = isset($data['ignore_blank']) ? $data['ignore_blank'] : null;
        $this->container['in_cell_drop_down'] = isset($data['in_cell_drop_down']) ? $data['in_cell_drop_down'] : null;
        $this->container['input_message'] = isset($data['input_message']) ? $data['input_message'] : null;
        $this->container['input_title'] = isset($data['input_title']) ? $data['input_title'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['show_error'] = isset($data['show_error']) ? $data['show_error'] : null;
        $this->container['show_input'] = isset($data['show_input']) ? $data['show_input'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['value1'] = isset($data['value1']) ? $data['value1'] : null;
        $this->container['value2'] = isset($data['value2']) ? $data['value2'] : null;
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
        if ($this->container['alert_style'] === null) {
            $invalidProperties[] = "'alert_style' can't be null";
        }
        if ($this->container['area_list'] === null) {
            $invalidProperties[] = "'area_list' can't be null";
        }
        if ($this->container['error_message'] === null) {
            $invalidProperties[] = "'error_message' can't be null";
        }
        if ($this->container['error_title'] === null) {
            $invalidProperties[] = "'error_title' can't be null";
        }
        if ($this->container['formula1'] === null) {
            $invalidProperties[] = "'formula1' can't be null";
        }
        if ($this->container['formula2'] === null) {
            $invalidProperties[] = "'formula2' can't be null";
        }
        if ($this->container['ignore_blank'] === null) {
            $invalidProperties[] = "'ignore_blank' can't be null";
        }
        if ($this->container['in_cell_drop_down'] === null) {
            $invalidProperties[] = "'in_cell_drop_down' can't be null";
        }
        if ($this->container['input_message'] === null) {
            $invalidProperties[] = "'input_message' can't be null";
        }
        if ($this->container['input_title'] === null) {
            $invalidProperties[] = "'input_title' can't be null";
        }
        if ($this->container['operator'] === null) {
            $invalidProperties[] = "'operator' can't be null";
        }
        if ($this->container['show_error'] === null) {
            $invalidProperties[] = "'show_error' can't be null";
        }
        if ($this->container['show_input'] === null) {
            $invalidProperties[] = "'show_input' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['value1'] === null) {
            $invalidProperties[] = "'value1' can't be null";
        }
        if ($this->container['value2'] === null) {
            $invalidProperties[] = "'value2' can't be null";
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
        if ($this->container['alert_style'] === null) {
                    return false;
                }
        if ($this->container['area_list'] === null) {
                    return false;
                }
        if ($this->container['error_message'] === null) {
                    return false;
                }
        if ($this->container['error_title'] === null) {
                    return false;
                }
        if ($this->container['formula1'] === null) {
                    return false;
                }
        if ($this->container['formula2'] === null) {
                    return false;
                }
        if ($this->container['ignore_blank'] === null) {
                    return false;
                }
        if ($this->container['in_cell_drop_down'] === null) {
                    return false;
                }
        if ($this->container['input_message'] === null) {
                    return false;
                }
        if ($this->container['input_title'] === null) {
                    return false;
                }
        if ($this->container['operator'] === null) {
                    return false;
                }
        if ($this->container['show_error'] === null) {
                    return false;
                }
        if ($this->container['show_input'] === null) {
                    return false;
                }
        if ($this->container['type'] === null) {
                    return false;
                }
        if ($this->container['value1'] === null) {
                    return false;
                }
        if ($this->container['value2'] === null) {
                    return false;
                }
        if ($this->container['link'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets alert_style
     *
     * @return string
     */
    public function getAlertStyle()
    {
        return $this->container['alert_style'];
    }

    /**
     * Sets alert_style
     *
     *  Represents the validation alert style.
     *
     * @return $this
     */
    public function setAlertStyle($alert_style)
    {
        $this->container['alert_style'] = $alert_style;

        return $this;
    }
   /**
     * Gets area_list
     *
     * @return \Aspose\Cells\Cloud\Model\CellArea[]
     */
    public function getAreaList()
    {
        return $this->container['area_list'];
    }

    /**
     * Sets area_list
     *
     *  Represents a collection of Aspose.Cells.CellArea which contains the data                validation settings.
     *
     * @return $this
     */
    public function setAreaList($area_list)
    {
        $this->container['area_list'] = $area_list;

        return $this;
    }
   /**
     * Gets error_message
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     *  Represents the data validation error message.
     *
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }
   /**
     * Gets error_title
     *
     * @return string
     */
    public function getErrorTitle()
    {
        return $this->container['error_title'];
    }

    /**
     * Sets error_title
     *
     *  Represents the title of the data-validation error dialog box.
     *
     * @return $this
     */
    public function setErrorTitle($error_title)
    {
        $this->container['error_title'] = $error_title;

        return $this;
    }
   /**
     * Gets formula1
     *
     * @return string
     */
    public function getFormula1()
    {
        return $this->container['formula1'];
    }

    /**
     * Sets formula1
     *
     *  Represents the value or expression associated with the data validation.
     *
     * @return $this
     */
    public function setFormula1($formula1)
    {
        $this->container['formula1'] = $formula1;

        return $this;
    }
   /**
     * Gets formula2
     *
     * @return string
     */
    public function getFormula2()
    {
        return $this->container['formula2'];
    }

    /**
     * Sets formula2
     *
     *  Represents the value or expression associated with the data validation.
     *
     * @return $this
     */
    public function setFormula2($formula2)
    {
        $this->container['formula2'] = $formula2;

        return $this;
    }
   /**
     * Gets ignore_blank
     *
     * @return bool
     */
    public function getIgnoreBlank()
    {
        return $this->container['ignore_blank'];
    }

    /**
     * Sets ignore_blank
     *
     *  Indicates whether blank values are permitted by the range data validation.
     *
     * @return $this
     */
    public function setIgnoreBlank($ignore_blank)
    {
        $this->container['ignore_blank'] = $ignore_blank;

        return $this;
    }
   /**
     * Gets in_cell_drop_down
     *
     * @return bool
     */
    public function getInCellDropDown()
    {
        return $this->container['in_cell_drop_down'];
    }

    /**
     * Sets in_cell_drop_down
     *
     *  Indicates whether data validation displays a drop-down list that contains acceptable values.
     *
     * @return $this
     */
    public function setInCellDropDown($in_cell_drop_down)
    {
        $this->container['in_cell_drop_down'] = $in_cell_drop_down;

        return $this;
    }
   /**
     * Gets input_message
     *
     * @return string
     */
    public function getInputMessage()
    {
        return $this->container['input_message'];
    }

    /**
     * Sets input_message
     *
     *  Represents the data validation input message.
     *
     * @return $this
     */
    public function setInputMessage($input_message)
    {
        $this->container['input_message'] = $input_message;

        return $this;
    }
   /**
     * Gets input_title
     *
     * @return string
     */
    public function getInputTitle()
    {
        return $this->container['input_title'];
    }

    /**
     * Sets input_title
     *
     *  Represents the title of the data-validation input dialog box.
     *
     * @return $this
     */
    public function setInputTitle($input_title)
    {
        $this->container['input_title'] = $input_title;

        return $this;
    }
   /**
     * Gets operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     *  Represents the operator for the data validation.
     *
     * @return $this
     */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;

        return $this;
    }
   /**
     * Gets show_error
     *
     * @return bool
     */
    public function getShowError()
    {
        return $this->container['show_error'];
    }

    /**
     * Sets show_error
     *
     *  Indicates whether the data validation error message will be displayed whenever the user enters invalid data.
     *
     * @return $this
     */
    public function setShowError($show_error)
    {
        $this->container['show_error'] = $show_error;

        return $this;
    }
   /**
     * Gets show_input
     *
     * @return bool
     */
    public function getShowInput()
    {
        return $this->container['show_input'];
    }

    /**
     * Sets show_input
     *
     *  Indicates whether the data validation input message will be displayed whenever the user selects a cell in the data validation range.
     *
     * @return $this
     */
    public function setShowInput($show_input)
    {
        $this->container['show_input'] = $show_input;

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
     *  Represents the data validation type.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }
   /**
     * Gets value1
     *
     * @return string
     */
    public function getValue1()
    {
        return $this->container['value1'];
    }

    /**
     * Sets value1
     *
     *  Represents the first value associated with the data validation.
     *
     * @return $this
     */
    public function setValue1($value1)
    {
        $this->container['value1'] = $value1;

        return $this;
    }
   /**
     * Gets value2
     *
     * @return string
     */
    public function getValue2()
    {
        return $this->container['value2'];
    }

    /**
     * Sets value2
     *
     *  Represents the second value associated with the data validation.
     *
     * @return $this
     */
    public function setValue2($value2)
    {
        $this->container['value2'] = $value2;

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
