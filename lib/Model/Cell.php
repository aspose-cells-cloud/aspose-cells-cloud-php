<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Cell.cs">
 *   Copyright (c) 2025 Aspose.Cells Cloud
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

class Cell
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Cell';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'row' => 'int',
        'column' => 'int',
        'value' => 'string',
        'type' => 'string',
        'formula' => 'string',
        'is_formula' => 'bool',
        'is_merged' => 'bool',
        'is_array_header' => 'bool',
        'is_in_array' => 'bool',
        'is_error_value' => 'bool',
        'is_in_table' => 'bool',
        'is_style_set' => 'bool',
        'html_string' => 'string',
        'style' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'worksheet' => 'string',
        'link' => '\Aspose\Cells\Cloud\Model\Link'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null  ,
        'row' => null  ,
        'column' => null  ,
        'value' => null  ,
        'type' => null  ,
        'formula' => null  ,
        'is_formula' => null  ,
        'is_merged' => null  ,
        'is_array_header' => null  ,
        'is_in_array' => null  ,
        'is_error_value' => null  ,
        'is_in_table' => null  ,
        'is_style_set' => null  ,
        'html_string' => null  ,
        'style' => null  ,
        'worksheet' => null  ,
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
         'name' => 'Name' ,
         'row' => 'Row' ,
         'column' => 'Column' ,
         'value' => 'Value' ,
         'type' => 'Type' ,
         'formula' => 'Formula' ,
         'is_formula' => 'IsFormula' ,
         'is_merged' => 'IsMerged' ,
         'is_array_header' => 'IsArrayHeader' ,
         'is_in_array' => 'IsInArray' ,
         'is_error_value' => 'IsErrorValue' ,
         'is_in_table' => 'IsInTable' ,
         'is_style_set' => 'IsStyleSet' ,
         'html_string' => 'HtmlString' ,
         'style' => 'Style' ,
         'worksheet' => 'Worksheet' ,
         'link' => 'link' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName' ,
        'row' => 'setRow' ,
        'column' => 'setColumn' ,
        'value' => 'setValue' ,
        'type' => 'setType' ,
        'formula' => 'setFormula' ,
        'is_formula' => 'setIsFormula' ,
        'is_merged' => 'setIsMerged' ,
        'is_array_header' => 'setIsArrayHeader' ,
        'is_in_array' => 'setIsInArray' ,
        'is_error_value' => 'setIsErrorValue' ,
        'is_in_table' => 'setIsInTable' ,
        'is_style_set' => 'setIsStyleSet' ,
        'html_string' => 'setHtmlString' ,
        'style' => 'setStyle' ,
        'worksheet' => 'setWorksheet' ,
        'link' => 'setlink' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName' ,
        'row' => 'getRow' ,
        'column' => 'getColumn' ,
        'value' => 'getValue' ,
        'type' => 'getType' ,
        'formula' => 'getFormula' ,
        'is_formula' => 'getIsFormula' ,
        'is_merged' => 'getIsMerged' ,
        'is_array_header' => 'getIsArrayHeader' ,
        'is_in_array' => 'getIsInArray' ,
        'is_error_value' => 'getIsErrorValue' ,
        'is_in_table' => 'getIsInTable' ,
        'is_style_set' => 'getIsStyleSet' ,
        'html_string' => 'getHtmlString' ,
        'style' => 'getStyle' ,
        'worksheet' => 'getWorksheet' ,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['row'] = isset($data['row']) ? $data['row'] : null;
        $this->container['column'] = isset($data['column']) ? $data['column'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['formula'] = isset($data['formula']) ? $data['formula'] : null;
        $this->container['is_formula'] = isset($data['is_formula']) ? $data['is_formula'] : null;
        $this->container['is_merged'] = isset($data['is_merged']) ? $data['is_merged'] : null;
        $this->container['is_array_header'] = isset($data['is_array_header']) ? $data['is_array_header'] : null;
        $this->container['is_in_array'] = isset($data['is_in_array']) ? $data['is_in_array'] : null;
        $this->container['is_error_value'] = isset($data['is_error_value']) ? $data['is_error_value'] : null;
        $this->container['is_in_table'] = isset($data['is_in_table']) ? $data['is_in_table'] : null;
        $this->container['is_style_set'] = isset($data['is_style_set']) ? $data['is_style_set'] : null;
        $this->container['html_string'] = isset($data['html_string']) ? $data['html_string'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
        $this->container['worksheet'] = isset($data['worksheet']) ? $data['worksheet'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['row'] === null) {
            $invalidProperties[] = "'row' can't be null";
        }
        if ($this->container['column'] === null) {
            $invalidProperties[] = "'column' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['formula'] === null) {
            $invalidProperties[] = "'formula' can't be null";
        }
        if ($this->container['is_formula'] === null) {
            $invalidProperties[] = "'is_formula' can't be null";
        }
        if ($this->container['is_merged'] === null) {
            $invalidProperties[] = "'is_merged' can't be null";
        }
        if ($this->container['is_array_header'] === null) {
            $invalidProperties[] = "'is_array_header' can't be null";
        }
        if ($this->container['is_in_array'] === null) {
            $invalidProperties[] = "'is_in_array' can't be null";
        }
        if ($this->container['is_error_value'] === null) {
            $invalidProperties[] = "'is_error_value' can't be null";
        }
        if ($this->container['is_in_table'] === null) {
            $invalidProperties[] = "'is_in_table' can't be null";
        }
        if ($this->container['is_style_set'] === null) {
            $invalidProperties[] = "'is_style_set' can't be null";
        }
        if ($this->container['html_string'] === null) {
            $invalidProperties[] = "'html_string' can't be null";
        }
        if ($this->container['style'] === null) {
            $invalidProperties[] = "'style' can't be null";
        }
        if ($this->container['worksheet'] === null) {
            $invalidProperties[] = "'worksheet' can't be null";
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
        if ($this->container['name'] === null) {
                    return false;
                }
        if ($this->container['row'] === null) {
                    return false;
                }
        if ($this->container['column'] === null) {
                    return false;
                }
        if ($this->container['value'] === null) {
                    return false;
                }
        if ($this->container['type'] === null) {
                    return false;
                }
        if ($this->container['formula'] === null) {
                    return false;
                }
        if ($this->container['is_formula'] === null) {
                    return false;
                }
        if ($this->container['is_merged'] === null) {
                    return false;
                }
        if ($this->container['is_array_header'] === null) {
                    return false;
                }
        if ($this->container['is_in_array'] === null) {
                    return false;
                }
        if ($this->container['is_error_value'] === null) {
                    return false;
                }
        if ($this->container['is_in_table'] === null) {
                    return false;
                }
        if ($this->container['is_style_set'] === null) {
                    return false;
                }
        if ($this->container['html_string'] === null) {
                    return false;
                }
        if ($this->container['style'] === null) {
                    return false;
                }
        if ($this->container['worksheet'] === null) {
                    return false;
                }
        if ($this->container['link'] === null) {
                    return false;
                }
        return true;
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
     *  Gets the name of the cell.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }
   /**
     * Gets row
     *
     * @return int
     */
    public function getRow()
    {
        return $this->container['row'];
    }

    /**
     * Sets row
     *
     *  Gets row number (zero based) of the cell.
     *
     * @return $this
     */
    public function setRow($row)
    {
        $this->container['row'] = $row;

        return $this;
    }
   /**
     * Gets column
     *
     * @return int
     */
    public function getColumn()
    {
        return $this->container['column'];
    }

    /**
     * Sets column
     *
     *  Gets column number (zero based) of the cell.
     *
     * @return $this
     */
    public function setColumn($column)
    {
        $this->container['column'] = $column;

        return $this;
    }
   /**
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     *  Gets the value contained in this cell.
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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
     *  Represents cell value type.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }
   /**
     * Gets formula
     *
     * @return string
     */
    public function getFormula()
    {
        return $this->container['formula'];
    }

    /**
     * Sets formula
     *
     *  Gets or sets a formula of the .
     *
     * @return $this
     */
    public function setFormula($formula)
    {
        $this->container['formula'] = $formula;

        return $this;
    }
   /**
     * Gets is_formula
     *
     * @return bool
     */
    public function getIsFormula()
    {
        return $this->container['is_formula'];
    }

    /**
     * Sets is_formula
     *
     *  Represents if the specified cell contains formula.
     *
     * @return $this
     */
    public function setIsFormula($is_formula)
    {
        $this->container['is_formula'] = $is_formula;

        return $this;
    }
   /**
     * Gets is_merged
     *
     * @return bool
     */
    public function getIsMerged()
    {
        return $this->container['is_merged'];
    }

    /**
     * Sets is_merged
     *
     *  Checks if a cell is part of a merged range or not.
     *
     * @return $this
     */
    public function setIsMerged($is_merged)
    {
        $this->container['is_merged'] = $is_merged;

        return $this;
    }
   /**
     * Gets is_array_header
     *
     * @return bool
     */
    public function getIsArrayHeader()
    {
        return $this->container['is_array_header'];
    }

    /**
     * Sets is_array_header
     *
     *  Indicates the cell's formula is and array formula                         and it is the first cell of the array.
     *
     * @return $this
     */
    public function setIsArrayHeader($is_array_header)
    {
        $this->container['is_array_header'] = $is_array_header;

        return $this;
    }
   /**
     * Gets is_in_array
     *
     * @return bool
     */
    public function getIsInArray()
    {
        return $this->container['is_in_array'];
    }

    /**
     * Sets is_in_array
     *
     *  Indicates whether the cell formula is an array formula.
     *
     * @return $this
     */
    public function setIsInArray($is_in_array)
    {
        $this->container['is_in_array'] = $is_in_array;

        return $this;
    }
   /**
     * Gets is_error_value
     *
     * @return bool
     */
    public function getIsErrorValue()
    {
        return $this->container['is_error_value'];
    }

    /**
     * Sets is_error_value
     *
     *  Checks if the value of this cell is an error.
     *
     * @return $this
     */
    public function setIsErrorValue($is_error_value)
    {
        $this->container['is_error_value'] = $is_error_value;

        return $this;
    }
   /**
     * Gets is_in_table
     *
     * @return bool
     */
    public function getIsInTable()
    {
        return $this->container['is_in_table'];
    }

    /**
     * Sets is_in_table
     *
     *  Indicates whether this cell is part of table formula.
     *
     * @return $this
     */
    public function setIsInTable($is_in_table)
    {
        $this->container['is_in_table'] = $is_in_table;

        return $this;
    }
   /**
     * Gets is_style_set
     *
     * @return bool
     */
    public function getIsStyleSet()
    {
        return $this->container['is_style_set'];
    }

    /**
     * Sets is_style_set
     *
     *  Indicates if the cell's style is set. If return false, it means this cell has a default cell format.
     *
     * @return $this
     */
    public function setIsStyleSet($is_style_set)
    {
        $this->container['is_style_set'] = $is_style_set;

        return $this;
    }
   /**
     * Gets html_string
     *
     * @return string
     */
    public function getHtmlString()
    {
        return $this->container['html_string'];
    }

    /**
     * Sets html_string
     *
     *  Gets and sets the html string which contains data and some formats in this cell.
     *
     * @return $this
     */
    public function setHtmlString($html_string)
    {
        $this->container['html_string'] = $html_string;

        return $this;
    }
   /**
     * Gets style
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style
     *
     *  This class property represents a style element with the specified XML element name.
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $this->container['style'] = $style;

        return $this;
    }
   /**
     * Gets worksheet
     *
     * @return string
     */
    public function getWorksheet()
    {
        return $this->container['worksheet'];
    }

    /**
     * Sets worksheet
     *
     *  Gets the parent worksheet.
     *
     * @return $this
     */
    public function setWorksheet($worksheet)
    {
        $this->container['worksheet'] = $worksheet;

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
