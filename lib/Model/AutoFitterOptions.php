<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AutoFitterOptions.cs">
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

class AutoFitterOptions implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AutoFitterOptions';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_fit_merged_cells_type' => 'string',
        'auto_fit_merged_cells' => 'bool',
        'ignore_hidden' => 'bool',
        'only_auto' => 'bool',
        'default_edit_language' => 'string',
        'max_row_height' => 'double',
        'auto_fit_wrapped_text_type' => 'string',
        'format_strategy' => 'string',
        'for_rendering' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auto_fit_merged_cells_type' => null  ,
        'auto_fit_merged_cells' => null  ,
        'ignore_hidden' => null  ,
        'only_auto' => null  ,
        'default_edit_language' => null  ,
        'max_row_height' => null  ,
        'auto_fit_wrapped_text_type' => null  ,
        'format_strategy' => null  ,
        'for_rendering' => null  
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
         'auto_fit_merged_cells_type' => 'AutoFitMergedCellsType' ,
         'auto_fit_merged_cells' => 'AutoFitMergedCells' ,
         'ignore_hidden' => 'IgnoreHidden' ,
         'only_auto' => 'OnlyAuto' ,
         'default_edit_language' => 'DefaultEditLanguage' ,
         'max_row_height' => 'MaxRowHeight' ,
         'auto_fit_wrapped_text_type' => 'AutoFitWrappedTextType' ,
         'format_strategy' => 'FormatStrategy' ,
         'for_rendering' => 'ForRendering' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_fit_merged_cells_type' => 'setAutoFitMergedCellsType' ,
        'auto_fit_merged_cells' => 'setAutoFitMergedCells' ,
        'ignore_hidden' => 'setIgnoreHidden' ,
        'only_auto' => 'setOnlyAuto' ,
        'default_edit_language' => 'setDefaultEditLanguage' ,
        'max_row_height' => 'setMaxRowHeight' ,
        'auto_fit_wrapped_text_type' => 'setAutoFitWrappedTextType' ,
        'format_strategy' => 'setFormatStrategy' ,
        'for_rendering' => 'setForRendering' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_fit_merged_cells_type' => 'getAutoFitMergedCellsType' ,
        'auto_fit_merged_cells' => 'getAutoFitMergedCells' ,
        'ignore_hidden' => 'getIgnoreHidden' ,
        'only_auto' => 'getOnlyAuto' ,
        'default_edit_language' => 'getDefaultEditLanguage' ,
        'max_row_height' => 'getMaxRowHeight' ,
        'auto_fit_wrapped_text_type' => 'getAutoFitWrappedTextType' ,
        'format_strategy' => 'getFormatStrategy' ,
        'for_rendering' => 'getForRendering' 
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
        $this->container['auto_fit_merged_cells_type'] = isset($data['auto_fit_merged_cells_type']) ? $data['auto_fit_merged_cells_type'] : null;
        $this->container['auto_fit_merged_cells'] = isset($data['auto_fit_merged_cells']) ? $data['auto_fit_merged_cells'] : null;
        $this->container['ignore_hidden'] = isset($data['ignore_hidden']) ? $data['ignore_hidden'] : null;
        $this->container['only_auto'] = isset($data['only_auto']) ? $data['only_auto'] : null;
        $this->container['default_edit_language'] = isset($data['default_edit_language']) ? $data['default_edit_language'] : null;
        $this->container['max_row_height'] = isset($data['max_row_height']) ? $data['max_row_height'] : null;
        $this->container['auto_fit_wrapped_text_type'] = isset($data['auto_fit_wrapped_text_type']) ? $data['auto_fit_wrapped_text_type'] : null;
        $this->container['format_strategy'] = isset($data['format_strategy']) ? $data['format_strategy'] : null;
        $this->container['for_rendering'] = isset($data['for_rendering']) ? $data['for_rendering'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['auto_fit_merged_cells_type'] === null) {
            $invalidProperties[] = "'auto_fit_merged_cells_type' can't be null";
        }
        if ($this->container['auto_fit_merged_cells'] === null) {
            $invalidProperties[] = "'auto_fit_merged_cells' can't be null";
        }
        if ($this->container['ignore_hidden'] === null) {
            $invalidProperties[] = "'ignore_hidden' can't be null";
        }
        if ($this->container['only_auto'] === null) {
            $invalidProperties[] = "'only_auto' can't be null";
        }
        if ($this->container['default_edit_language'] === null) {
            $invalidProperties[] = "'default_edit_language' can't be null";
        }
        if ($this->container['max_row_height'] === null) {
            $invalidProperties[] = "'max_row_height' can't be null";
        }
        if ($this->container['auto_fit_wrapped_text_type'] === null) {
            $invalidProperties[] = "'auto_fit_wrapped_text_type' can't be null";
        }
        if ($this->container['format_strategy'] === null) {
            $invalidProperties[] = "'format_strategy' can't be null";
        }
        if ($this->container['for_rendering'] === null) {
            $invalidProperties[] = "'for_rendering' can't be null";
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
        if ($this->container['auto_fit_merged_cells_type'] === null) {
                    return false;
                }
        if ($this->container['auto_fit_merged_cells'] === null) {
                    return false;
                }
        if ($this->container['ignore_hidden'] === null) {
                    return false;
                }
        if ($this->container['only_auto'] === null) {
                    return false;
                }
        if ($this->container['default_edit_language'] === null) {
                    return false;
                }
        if ($this->container['max_row_height'] === null) {
                    return false;
                }
        if ($this->container['auto_fit_wrapped_text_type'] === null) {
                    return false;
                }
        if ($this->container['format_strategy'] === null) {
                    return false;
                }
        if ($this->container['for_rendering'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets auto_fit_merged_cells_type
     *
     * @return string
     */
    public function getAutoFitMergedCellsType()
    {
        return $this->container['auto_fit_merged_cells_type'];
    }

    /**
     * Sets auto_fit_merged_cells_type
     *
     *  Gets and set the type of auto fitting row height of merged cells.
     *
     * @return $this
     */
    public function setAutoFitMergedCellsType($auto_fit_merged_cells_type)
    {
        $this->container['auto_fit_merged_cells_type'] = $auto_fit_merged_cells_type;

        return $this;
    }
   /**
     * Gets auto_fit_merged_cells
     *
     * @return bool
     */
    public function getAutoFitMergedCells()
    {
        return $this->container['auto_fit_merged_cells'];
    }

    /**
     * Sets auto_fit_merged_cells
     *
     *  Indicates whether auto fit row height when the cells is merged in a row.                        The default value is false.
     *
     * @return $this
     */
    public function setAutoFitMergedCells($auto_fit_merged_cells)
    {
        $this->container['auto_fit_merged_cells'] = $auto_fit_merged_cells;

        return $this;
    }
   /**
     * Gets ignore_hidden
     *
     * @return bool
     */
    public function getIgnoreHidden()
    {
        return $this->container['ignore_hidden'];
    }

    /**
     * Sets ignore_hidden
     *
     *  Ignores the hidden rows/columns.
     *
     * @return $this
     */
    public function setIgnoreHidden($ignore_hidden)
    {
        $this->container['ignore_hidden'] = $ignore_hidden;

        return $this;
    }
   /**
     * Gets only_auto
     *
     * @return bool
     */
    public function getOnlyAuto()
    {
        return $this->container['only_auto'];
    }

    /**
     * Sets only_auto
     *
     *  Indicates whether only fit the rows which height are not customed.
     *
     * @return $this
     */
    public function setOnlyAuto($only_auto)
    {
        $this->container['only_auto'] = $only_auto;

        return $this;
    }
   /**
     * Gets default_edit_language
     *
     * @return string
     */
    public function getDefaultEditLanguage()
    {
        return $this->container['default_edit_language'];
    }

    /**
     * Sets default_edit_language
     *
     *  Gets or sets default edit language.
     *
     * @return $this
     */
    public function setDefaultEditLanguage($default_edit_language)
    {
        $this->container['default_edit_language'] = $default_edit_language;

        return $this;
    }
   /**
     * Gets max_row_height
     *
     * @return double
     */
    public function getMaxRowHeight()
    {
        return $this->container['max_row_height'];
    }

    /**
     * Sets max_row_height
     *
     *  Gets and sets the max row height(in unit of Point) when autofitting rows.
     *
     * @return $this
     */
    public function setMaxRowHeight($max_row_height)
    {
        $this->container['max_row_height'] = $max_row_height;

        return $this;
    }
   /**
     * Gets auto_fit_wrapped_text_type
     *
     * @return string
     */
    public function getAutoFitWrappedTextType()
    {
        return $this->container['auto_fit_wrapped_text_type'];
    }

    /**
     * Sets auto_fit_wrapped_text_type
     *
     *  Gets and sets the type of auto fitting wrapped text.
     *
     * @return $this
     */
    public function setAutoFitWrappedTextType($auto_fit_wrapped_text_type)
    {
        $this->container['auto_fit_wrapped_text_type'] = $auto_fit_wrapped_text_type;

        return $this;
    }
   /**
     * Gets format_strategy
     *
     * @return string
     */
    public function getFormatStrategy()
    {
        return $this->container['format_strategy'];
    }

    /**
     * Sets format_strategy
     *
     *  Gets and sets the formatted strategy.
     *
     * @return $this
     */
    public function setFormatStrategy($format_strategy)
    {
        $this->container['format_strategy'] = $format_strategy;

        return $this;
    }
   /**
     * Gets for_rendering
     *
     * @return bool
     */
    public function getForRendering()
    {
        return $this->container['for_rendering'];
    }

    /**
     * Sets for_rendering
     *
     *  Indicates whether fit for rendering purpose.
     *
     * @return $this
     */
    public function setForRendering($for_rendering)
    {
        $this->container['for_rendering'] = $for_rendering;

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
