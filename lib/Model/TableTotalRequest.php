<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TableTotalRequest.cs">
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

class TableTotalRequest
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TableTotalRequest';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'list_column_index' => 'int',
        'totals_calculation' => 'string',
        'custom_formula' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'list_column_index' => null  ,
        'totals_calculation' => null  ,
        'custom_formula' => null  
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
         'list_column_index' => 'ListColumnIndex' ,
         'totals_calculation' => 'TotalsCalculation' ,
         'custom_formula' => 'CustomFormula' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'list_column_index' => 'setListColumnIndex' ,
        'totals_calculation' => 'setTotalsCalculation' ,
        'custom_formula' => 'setCustomFormula' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'list_column_index' => 'getListColumnIndex' ,
        'totals_calculation' => 'getTotalsCalculation' ,
        'custom_formula' => 'getCustomFormula' 
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
        $this->container['list_column_index'] = isset($data['list_column_index']) ? $data['list_column_index'] : null;
        $this->container['totals_calculation'] = isset($data['totals_calculation']) ? $data['totals_calculation'] : null;
        $this->container['custom_formula'] = isset($data['custom_formula']) ? $data['custom_formula'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['list_column_index'] === null) {
            $invalidProperties[] = "'list_column_index' can't be null";
        }
        if ($this->container['totals_calculation'] === null) {
            $invalidProperties[] = "'totals_calculation' can't be null";
        }
        if ($this->container['custom_formula'] === null) {
            $invalidProperties[] = "'custom_formula' can't be null";
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
        if ($this->container['list_column_index'] === null) {
                    return false;
                }
        if ($this->container['totals_calculation'] === null) {
                    return false;
                }
        if ($this->container['custom_formula'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets list_column_index
     *
     * @return int
     */
    public function getListColumnIndex()
    {
        return $this->container['list_column_index'];
    }

    /**
     * Sets list_column_index
     *
     *  Indicates list column index.
     *
     * @return $this
     */
    public function setListColumnIndex($list_column_index)
    {
        $this->container['list_column_index'] = $list_column_index;

        return $this;
    }
   /**
     * Gets totals_calculation
     *
     * @return string
     */
    public function getTotalsCalculation()
    {
        return $this->container['totals_calculation'];
    }

    /**
     * Sets totals_calculation
     *
     *  Indicates totals calculation.
     *
     * @return $this
     */
    public function setTotalsCalculation($totals_calculation)
    {
        $this->container['totals_calculation'] = $totals_calculation;

        return $this;
    }
   /**
     * Gets custom_formula
     *
     * @return string
     */
    public function getCustomFormula()
    {
        return $this->container['custom_formula'];
    }

    /**
     * Sets custom_formula
     *
     *  Indicates custom formula.
     *
     * @return $this
     */
    public function setCustomFormula($custom_formula)
    {
        $this->container['custom_formula'] = $custom_formula;

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
