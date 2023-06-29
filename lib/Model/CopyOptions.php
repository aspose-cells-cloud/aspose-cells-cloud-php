<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CopyOptions.cs">
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

class CopyOptions implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CopyOptions';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'column_character_width' => 'bool',
        'copy_invalid_formulas_as_values' => 'bool',
        'copy_names' => 'bool',
        'extend_to_adjacent_range' => 'bool',
        'refer_to_destination_sheet' => 'bool',
        'refer_to_sheet_with_same_name' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'column_character_width' => null  ,
        'copy_invalid_formulas_as_values' => null  ,
        'copy_names' => null  ,
        'extend_to_adjacent_range' => null  ,
        'refer_to_destination_sheet' => null  ,
        'refer_to_sheet_with_same_name' => null  
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
         'column_character_width' => 'ColumnCharacterWidth' ,
         'copy_invalid_formulas_as_values' => 'CopyInvalidFormulasAsValues' ,
         'copy_names' => 'CopyNames' ,
         'extend_to_adjacent_range' => 'ExtendToAdjacentRange' ,
         'refer_to_destination_sheet' => 'ReferToDestinationSheet' ,
         'refer_to_sheet_with_same_name' => 'ReferToSheetWithSameName' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'column_character_width' => 'setColumnCharacterWidth' ,
        'copy_invalid_formulas_as_values' => 'setCopyInvalidFormulasAsValues' ,
        'copy_names' => 'setCopyNames' ,
        'extend_to_adjacent_range' => 'setExtendToAdjacentRange' ,
        'refer_to_destination_sheet' => 'setReferToDestinationSheet' ,
        'refer_to_sheet_with_same_name' => 'setReferToSheetWithSameName' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'column_character_width' => 'getColumnCharacterWidth' ,
        'copy_invalid_formulas_as_values' => 'getCopyInvalidFormulasAsValues' ,
        'copy_names' => 'getCopyNames' ,
        'extend_to_adjacent_range' => 'getExtendToAdjacentRange' ,
        'refer_to_destination_sheet' => 'getReferToDestinationSheet' ,
        'refer_to_sheet_with_same_name' => 'getReferToSheetWithSameName' 
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
        $this->container['column_character_width'] = isset($data['column_character_width']) ? $data['column_character_width'] : null;
        $this->container['copy_invalid_formulas_as_values'] = isset($data['copy_invalid_formulas_as_values']) ? $data['copy_invalid_formulas_as_values'] : null;
        $this->container['copy_names'] = isset($data['copy_names']) ? $data['copy_names'] : null;
        $this->container['extend_to_adjacent_range'] = isset($data['extend_to_adjacent_range']) ? $data['extend_to_adjacent_range'] : null;
        $this->container['refer_to_destination_sheet'] = isset($data['refer_to_destination_sheet']) ? $data['refer_to_destination_sheet'] : null;
        $this->container['refer_to_sheet_with_same_name'] = isset($data['refer_to_sheet_with_same_name']) ? $data['refer_to_sheet_with_same_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['column_character_width'] === null) {
            $invalidProperties[] = "'column_character_width' can't be null";
        }
        if ($this->container['copy_invalid_formulas_as_values'] === null) {
            $invalidProperties[] = "'copy_invalid_formulas_as_values' can't be null";
        }
        if ($this->container['copy_names'] === null) {
            $invalidProperties[] = "'copy_names' can't be null";
        }
        if ($this->container['extend_to_adjacent_range'] === null) {
            $invalidProperties[] = "'extend_to_adjacent_range' can't be null";
        }
        if ($this->container['refer_to_destination_sheet'] === null) {
            $invalidProperties[] = "'refer_to_destination_sheet' can't be null";
        }
        if ($this->container['refer_to_sheet_with_same_name'] === null) {
            $invalidProperties[] = "'refer_to_sheet_with_same_name' can't be null";
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
        if ($this->container['column_character_width'] === null) {
                    return false;
                }
        if ($this->container['copy_invalid_formulas_as_values'] === null) {
                    return false;
                }
        if ($this->container['copy_names'] === null) {
                    return false;
                }
        if ($this->container['extend_to_adjacent_range'] === null) {
                    return false;
                }
        if ($this->container['refer_to_destination_sheet'] === null) {
                    return false;
                }
        if ($this->container['refer_to_sheet_with_same_name'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets column_character_width
     *
     * @return bool
     */
    public function getColumnCharacterWidth()
    {
        return $this->container['column_character_width'];
    }

    /**
     * Sets column_character_width
     *
     *  Indicates whether copying column width in unit of characters.
     *
     * @return $this
     */
    public function setColumnCharacterWidth($column_character_width)
    {
        $this->container['column_character_width'] = $column_character_width;

        return $this;
    }
   /**
     * Gets copy_invalid_formulas_as_values
     *
     * @return bool
     */
    public function getCopyInvalidFormulasAsValues()
    {
        return $this->container['copy_invalid_formulas_as_values'];
    }

    /**
     * Sets copy_invalid_formulas_as_values
     *
     *  If the formula is not valid for the dest destination, only copy values.
     *
     * @return $this
     */
    public function setCopyInvalidFormulasAsValues($copy_invalid_formulas_as_values)
    {
        $this->container['copy_invalid_formulas_as_values'] = $copy_invalid_formulas_as_values;

        return $this;
    }
   /**
     * Gets copy_names
     *
     * @return bool
     */
    public function getCopyNames()
    {
        return $this->container['copy_names'];
    }

    /**
     * Sets copy_names
     *
     *  Indicates whether copying the names.
     *
     * @return $this
     */
    public function setCopyNames($copy_names)
    {
        $this->container['copy_names'] = $copy_names;

        return $this;
    }
   /**
     * Gets extend_to_adjacent_range
     *
     * @return bool
     */
    public function getExtendToAdjacentRange()
    {
        return $this->container['extend_to_adjacent_range'];
    }

    /**
     * Sets extend_to_adjacent_range
     *
     *  Indicates whether extend ranges when copying the range to adjacent range.
     *
     * @return $this
     */
    public function setExtendToAdjacentRange($extend_to_adjacent_range)
    {
        $this->container['extend_to_adjacent_range'] = $extend_to_adjacent_range;

        return $this;
    }
   /**
     * Gets refer_to_destination_sheet
     *
     * @return bool
     */
    public function getReferToDestinationSheet()
    {
        return $this->container['refer_to_destination_sheet'];
    }

    /**
     * Sets refer_to_destination_sheet
     *
     *  When copying the range in the same file and the chart refers to the source sheet,  False means the copied chart's data source will not be changed. True means the  copied chart's data source refers to the destination sheet.            
     *
     * @return $this
     */
    public function setReferToDestinationSheet($refer_to_destination_sheet)
    {
        $this->container['refer_to_destination_sheet'] = $refer_to_destination_sheet;

        return $this;
    }
   /**
     * Gets refer_to_sheet_with_same_name
     *
     * @return bool
     */
    public function getReferToSheetWithSameName()
    {
        return $this->container['refer_to_sheet_with_same_name'];
    }

    /**
     * Sets refer_to_sheet_with_same_name
     *
     *  
     *
     * @return $this
     */
    public function setReferToSheetWithSameName($refer_to_sheet_with_same_name)
    {
        $this->container['refer_to_sheet_with_same_name'] = $refer_to_sheet_with_same_name;

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
