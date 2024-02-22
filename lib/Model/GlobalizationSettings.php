<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GlobalizationSettings.cs">
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

class GlobalizationSettings
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GlobalizationSettings';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'chart_settings' => '\Aspose\Cells\Cloud\Model\ChartGlobalizationSettings',
        'pivot_settings' => '\Aspose\Cells\Cloud\Model\PivotGlobalizationSettings',
        'list_separator' => 'string',
        'row_separator_of_formula_array' => 'string',
        'column_separator_of_formula_array' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'chart_settings' => null  ,
        'pivot_settings' => null  ,
        'list_separator' => null  ,
        'row_separator_of_formula_array' => null  ,
        'column_separator_of_formula_array' => null  
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
         'chart_settings' => 'ChartSettings' ,
         'pivot_settings' => 'PivotSettings' ,
         'list_separator' => 'ListSeparator' ,
         'row_separator_of_formula_array' => 'RowSeparatorOfFormulaArray' ,
         'column_separator_of_formula_array' => 'ColumnSeparatorOfFormulaArray' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chart_settings' => 'setChartSettings' ,
        'pivot_settings' => 'setPivotSettings' ,
        'list_separator' => 'setListSeparator' ,
        'row_separator_of_formula_array' => 'setRowSeparatorOfFormulaArray' ,
        'column_separator_of_formula_array' => 'setColumnSeparatorOfFormulaArray' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chart_settings' => 'getChartSettings' ,
        'pivot_settings' => 'getPivotSettings' ,
        'list_separator' => 'getListSeparator' ,
        'row_separator_of_formula_array' => 'getRowSeparatorOfFormulaArray' ,
        'column_separator_of_formula_array' => 'getColumnSeparatorOfFormulaArray' 
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
        $this->container['chart_settings'] = isset($data['chart_settings']) ? $data['chart_settings'] : null;
        $this->container['pivot_settings'] = isset($data['pivot_settings']) ? $data['pivot_settings'] : null;
        $this->container['list_separator'] = isset($data['list_separator']) ? $data['list_separator'] : null;
        $this->container['row_separator_of_formula_array'] = isset($data['row_separator_of_formula_array']) ? $data['row_separator_of_formula_array'] : null;
        $this->container['column_separator_of_formula_array'] = isset($data['column_separator_of_formula_array']) ? $data['column_separator_of_formula_array'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['chart_settings'] === null) {
            $invalidProperties[] = "'chart_settings' can't be null";
        }
        if ($this->container['pivot_settings'] === null) {
            $invalidProperties[] = "'pivot_settings' can't be null";
        }
        if ($this->container['list_separator'] === null) {
            $invalidProperties[] = "'list_separator' can't be null";
        }
        if ($this->container['row_separator_of_formula_array'] === null) {
            $invalidProperties[] = "'row_separator_of_formula_array' can't be null";
        }
        if ($this->container['column_separator_of_formula_array'] === null) {
            $invalidProperties[] = "'column_separator_of_formula_array' can't be null";
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
        if ($this->container['chart_settings'] === null) {
                    return false;
                }
        if ($this->container['pivot_settings'] === null) {
                    return false;
                }
        if ($this->container['list_separator'] === null) {
                    return false;
                }
        if ($this->container['row_separator_of_formula_array'] === null) {
                    return false;
                }
        if ($this->container['column_separator_of_formula_array'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets chart_settings
     *
     * @return \Aspose\Cells\Cloud\Model\ChartGlobalizationSettings
     */
    public function getChartSettings()
    {
        return $this->container['chart_settings'];
    }

    /**
     * Sets chart_settings
     *
     *  Gets or sets the globalization settings for Chart. 
     *
     * @return $this
     */
    public function setChartSettings($chart_settings)
    {
        $this->container['chart_settings'] = $chart_settings;

        return $this;
    }
   /**
     * Gets pivot_settings
     *
     * @return \Aspose\Cells\Cloud\Model\PivotGlobalizationSettings
     */
    public function getPivotSettings()
    {
        return $this->container['pivot_settings'];
    }

    /**
     * Sets pivot_settings
     *
     *  Gets or sets the globalization settings for pivot table. 
     *
     * @return $this
     */
    public function setPivotSettings($pivot_settings)
    {
        $this->container['pivot_settings'] = $pivot_settings;

        return $this;
    }
   /**
     * Gets list_separator
     *
     * @return string
     */
    public function getListSeparator()
    {
        return $this->container['list_separator'];
    }

    /**
     * Sets list_separator
     *
     *  Gets the separator for list, parameters of function, ...etc. 
     *
     * @return $this
     */
    public function setListSeparator($list_separator)
    {
        $this->container['list_separator'] = $list_separator;

        return $this;
    }
   /**
     * Gets row_separator_of_formula_array
     *
     * @return string
     */
    public function getRowSeparatorOfFormulaArray()
    {
        return $this->container['row_separator_of_formula_array'];
    }

    /**
     * Sets row_separator_of_formula_array
     *
     *  Gets the separator for rows in array data in formula. 
     *
     * @return $this
     */
    public function setRowSeparatorOfFormulaArray($row_separator_of_formula_array)
    {
        $this->container['row_separator_of_formula_array'] = $row_separator_of_formula_array;

        return $this;
    }
   /**
     * Gets column_separator_of_formula_array
     *
     * @return string
     */
    public function getColumnSeparatorOfFormulaArray()
    {
        return $this->container['column_separator_of_formula_array'];
    }

    /**
     * Sets column_separator_of_formula_array
     *
     *  Gets the separator for the items in array's row data in formula. 
     *
     * @return $this
     */
    public function setColumnSeparatorOfFormulaArray($column_separator_of_formula_array)
    {
        $this->container['column_separator_of_formula_array'] = $column_separator_of_formula_array;

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
