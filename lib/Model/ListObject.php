<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ListObject.cs">
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

class ListObject implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ListObject';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_filter' => '\Aspose\Cells\Cloud\Model\AutoFilter',
        'display_name' => 'string',
        'start_column' => 'int',
        'start_row' => 'int',
        'end_column' => 'int',
        'end_row' => 'int',
        'list_columns' => '\Aspose\Cells\Cloud\Model\ListColumn[]',
        'show_header_row' => 'bool',
        'show_table_style_column_stripes' => 'bool',
        'show_table_style_first_column' => 'bool',
        'show_table_style_last_column' => 'bool',
        'show_table_style_row_stripes' => 'bool',
        'show_totals' => 'bool',
        'table_style_name' => 'string',
        'table_style_type' => 'string',
        'link' => '\Aspose\Cells\Cloud\Model\Link'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auto_filter' => null  ,
        'display_name' => null  ,
        'start_column' => null  ,
        'start_row' => null  ,
        'end_column' => null  ,
        'end_row' => null  ,
        'list_columns' => null  ,
        'show_header_row' => null  ,
        'show_table_style_column_stripes' => null  ,
        'show_table_style_first_column' => null  ,
        'show_table_style_last_column' => null  ,
        'show_table_style_row_stripes' => null  ,
        'show_totals' => null  ,
        'table_style_name' => null  ,
        'table_style_type' => null  ,
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
         'auto_filter' => 'AutoFilter' ,
         'display_name' => 'DisplayName' ,
         'start_column' => 'StartColumn' ,
         'start_row' => 'StartRow' ,
         'end_column' => 'EndColumn' ,
         'end_row' => 'EndRow' ,
         'list_columns' => 'ListColumns' ,
         'show_header_row' => 'ShowHeaderRow' ,
         'show_table_style_column_stripes' => 'ShowTableStyleColumnStripes' ,
         'show_table_style_first_column' => 'ShowTableStyleFirstColumn' ,
         'show_table_style_last_column' => 'ShowTableStyleLastColumn' ,
         'show_table_style_row_stripes' => 'ShowTableStyleRowStripes' ,
         'show_totals' => 'ShowTotals' ,
         'table_style_name' => 'TableStyleName' ,
         'table_style_type' => 'TableStyleType' ,
         'link' => 'link' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_filter' => 'setAutoFilter' ,
        'display_name' => 'setDisplayName' ,
        'start_column' => 'setStartColumn' ,
        'start_row' => 'setStartRow' ,
        'end_column' => 'setEndColumn' ,
        'end_row' => 'setEndRow' ,
        'list_columns' => 'setListColumns' ,
        'show_header_row' => 'setShowHeaderRow' ,
        'show_table_style_column_stripes' => 'setShowTableStyleColumnStripes' ,
        'show_table_style_first_column' => 'setShowTableStyleFirstColumn' ,
        'show_table_style_last_column' => 'setShowTableStyleLastColumn' ,
        'show_table_style_row_stripes' => 'setShowTableStyleRowStripes' ,
        'show_totals' => 'setShowTotals' ,
        'table_style_name' => 'setTableStyleName' ,
        'table_style_type' => 'setTableStyleType' ,
        'link' => 'setlink' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_filter' => 'getAutoFilter' ,
        'display_name' => 'getDisplayName' ,
        'start_column' => 'getStartColumn' ,
        'start_row' => 'getStartRow' ,
        'end_column' => 'getEndColumn' ,
        'end_row' => 'getEndRow' ,
        'list_columns' => 'getListColumns' ,
        'show_header_row' => 'getShowHeaderRow' ,
        'show_table_style_column_stripes' => 'getShowTableStyleColumnStripes' ,
        'show_table_style_first_column' => 'getShowTableStyleFirstColumn' ,
        'show_table_style_last_column' => 'getShowTableStyleLastColumn' ,
        'show_table_style_row_stripes' => 'getShowTableStyleRowStripes' ,
        'show_totals' => 'getShowTotals' ,
        'table_style_name' => 'getTableStyleName' ,
        'table_style_type' => 'getTableStyleType' ,
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
        $this->container['auto_filter'] = isset($data['auto_filter']) ? $data['auto_filter'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['start_column'] = isset($data['start_column']) ? $data['start_column'] : null;
        $this->container['start_row'] = isset($data['start_row']) ? $data['start_row'] : null;
        $this->container['end_column'] = isset($data['end_column']) ? $data['end_column'] : null;
        $this->container['end_row'] = isset($data['end_row']) ? $data['end_row'] : null;
        $this->container['list_columns'] = isset($data['list_columns']) ? $data['list_columns'] : null;
        $this->container['show_header_row'] = isset($data['show_header_row']) ? $data['show_header_row'] : null;
        $this->container['show_table_style_column_stripes'] = isset($data['show_table_style_column_stripes']) ? $data['show_table_style_column_stripes'] : null;
        $this->container['show_table_style_first_column'] = isset($data['show_table_style_first_column']) ? $data['show_table_style_first_column'] : null;
        $this->container['show_table_style_last_column'] = isset($data['show_table_style_last_column']) ? $data['show_table_style_last_column'] : null;
        $this->container['show_table_style_row_stripes'] = isset($data['show_table_style_row_stripes']) ? $data['show_table_style_row_stripes'] : null;
        $this->container['show_totals'] = isset($data['show_totals']) ? $data['show_totals'] : null;
        $this->container['table_style_name'] = isset($data['table_style_name']) ? $data['table_style_name'] : null;
        $this->container['table_style_type'] = isset($data['table_style_type']) ? $data['table_style_type'] : null;
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
        if ($this->container['auto_filter'] === null) {
            $invalidProperties[] = "'auto_filter' can't be null";
        }
        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ($this->container['start_column'] === null) {
            $invalidProperties[] = "'start_column' can't be null";
        }
        if ($this->container['start_row'] === null) {
            $invalidProperties[] = "'start_row' can't be null";
        }
        if ($this->container['end_column'] === null) {
            $invalidProperties[] = "'end_column' can't be null";
        }
        if ($this->container['end_row'] === null) {
            $invalidProperties[] = "'end_row' can't be null";
        }
        if ($this->container['list_columns'] === null) {
            $invalidProperties[] = "'list_columns' can't be null";
        }
        if ($this->container['show_header_row'] === null) {
            $invalidProperties[] = "'show_header_row' can't be null";
        }
        if ($this->container['show_table_style_column_stripes'] === null) {
            $invalidProperties[] = "'show_table_style_column_stripes' can't be null";
        }
        if ($this->container['show_table_style_first_column'] === null) {
            $invalidProperties[] = "'show_table_style_first_column' can't be null";
        }
        if ($this->container['show_table_style_last_column'] === null) {
            $invalidProperties[] = "'show_table_style_last_column' can't be null";
        }
        if ($this->container['show_table_style_row_stripes'] === null) {
            $invalidProperties[] = "'show_table_style_row_stripes' can't be null";
        }
        if ($this->container['show_totals'] === null) {
            $invalidProperties[] = "'show_totals' can't be null";
        }
        if ($this->container['table_style_name'] === null) {
            $invalidProperties[] = "'table_style_name' can't be null";
        }
        if ($this->container['table_style_type'] === null) {
            $invalidProperties[] = "'table_style_type' can't be null";
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
        if ($this->container['auto_filter'] === null) {
                    return false;
                }
        if ($this->container['display_name'] === null) {
                    return false;
                }
        if ($this->container['start_column'] === null) {
                    return false;
                }
        if ($this->container['start_row'] === null) {
                    return false;
                }
        if ($this->container['end_column'] === null) {
                    return false;
                }
        if ($this->container['end_row'] === null) {
                    return false;
                }
        if ($this->container['list_columns'] === null) {
                    return false;
                }
        if ($this->container['show_header_row'] === null) {
                    return false;
                }
        if ($this->container['show_table_style_column_stripes'] === null) {
                    return false;
                }
        if ($this->container['show_table_style_first_column'] === null) {
                    return false;
                }
        if ($this->container['show_table_style_last_column'] === null) {
                    return false;
                }
        if ($this->container['show_table_style_row_stripes'] === null) {
                    return false;
                }
        if ($this->container['show_totals'] === null) {
                    return false;
                }
        if ($this->container['table_style_name'] === null) {
                    return false;
                }
        if ($this->container['table_style_type'] === null) {
                    return false;
                }
        if ($this->container['link'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets auto_filter
     *
     * @return \Aspose\Cells\Cloud\Model\AutoFilter
     */
    public function getAutoFilter()
    {
        return $this->container['auto_filter'];
    }

    /**
     * Sets auto_filter
     *
     *  
     *
     * @return $this
     */
    public function setAutoFilter($auto_filter)
    {
        $this->container['auto_filter'] = $auto_filter;

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
     *  
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }
   /**
     * Gets start_column
     *
     * @return int
     */
    public function getStartColumn()
    {
        return $this->container['start_column'];
    }

    /**
     * Sets start_column
     *
     *  
     *
     * @return $this
     */
    public function setStartColumn($start_column)
    {
        $this->container['start_column'] = $start_column;

        return $this;
    }
   /**
     * Gets start_row
     *
     * @return int
     */
    public function getStartRow()
    {
        return $this->container['start_row'];
    }

    /**
     * Sets start_row
     *
     *  
     *
     * @return $this
     */
    public function setStartRow($start_row)
    {
        $this->container['start_row'] = $start_row;

        return $this;
    }
   /**
     * Gets end_column
     *
     * @return int
     */
    public function getEndColumn()
    {
        return $this->container['end_column'];
    }

    /**
     * Sets end_column
     *
     *  
     *
     * @return $this
     */
    public function setEndColumn($end_column)
    {
        $this->container['end_column'] = $end_column;

        return $this;
    }
   /**
     * Gets end_row
     *
     * @return int
     */
    public function getEndRow()
    {
        return $this->container['end_row'];
    }

    /**
     * Sets end_row
     *
     *  
     *
     * @return $this
     */
    public function setEndRow($end_row)
    {
        $this->container['end_row'] = $end_row;

        return $this;
    }
   /**
     * Gets list_columns
     *
     * @return \Aspose\Cells\Cloud\Model\ListColumn[]
     */
    public function getListColumns()
    {
        return $this->container['list_columns'];
    }

    /**
     * Sets list_columns
     *
     *  
     *
     * @return $this
     */
    public function setListColumns($list_columns)
    {
        $this->container['list_columns'] = $list_columns;

        return $this;
    }
   /**
     * Gets show_header_row
     *
     * @return bool
     */
    public function getShowHeaderRow()
    {
        return $this->container['show_header_row'];
    }

    /**
     * Sets show_header_row
     *
     *  
     *
     * @return $this
     */
    public function setShowHeaderRow($show_header_row)
    {
        $this->container['show_header_row'] = $show_header_row;

        return $this;
    }
   /**
     * Gets show_table_style_column_stripes
     *
     * @return bool
     */
    public function getShowTableStyleColumnStripes()
    {
        return $this->container['show_table_style_column_stripes'];
    }

    /**
     * Sets show_table_style_column_stripes
     *
     *  
     *
     * @return $this
     */
    public function setShowTableStyleColumnStripes($show_table_style_column_stripes)
    {
        $this->container['show_table_style_column_stripes'] = $show_table_style_column_stripes;

        return $this;
    }
   /**
     * Gets show_table_style_first_column
     *
     * @return bool
     */
    public function getShowTableStyleFirstColumn()
    {
        return $this->container['show_table_style_first_column'];
    }

    /**
     * Sets show_table_style_first_column
     *
     *  
     *
     * @return $this
     */
    public function setShowTableStyleFirstColumn($show_table_style_first_column)
    {
        $this->container['show_table_style_first_column'] = $show_table_style_first_column;

        return $this;
    }
   /**
     * Gets show_table_style_last_column
     *
     * @return bool
     */
    public function getShowTableStyleLastColumn()
    {
        return $this->container['show_table_style_last_column'];
    }

    /**
     * Sets show_table_style_last_column
     *
     *  
     *
     * @return $this
     */
    public function setShowTableStyleLastColumn($show_table_style_last_column)
    {
        $this->container['show_table_style_last_column'] = $show_table_style_last_column;

        return $this;
    }
   /**
     * Gets show_table_style_row_stripes
     *
     * @return bool
     */
    public function getShowTableStyleRowStripes()
    {
        return $this->container['show_table_style_row_stripes'];
    }

    /**
     * Sets show_table_style_row_stripes
     *
     *  
     *
     * @return $this
     */
    public function setShowTableStyleRowStripes($show_table_style_row_stripes)
    {
        $this->container['show_table_style_row_stripes'] = $show_table_style_row_stripes;

        return $this;
    }
   /**
     * Gets show_totals
     *
     * @return bool
     */
    public function getShowTotals()
    {
        return $this->container['show_totals'];
    }

    /**
     * Sets show_totals
     *
     *  
     *
     * @return $this
     */
    public function setShowTotals($show_totals)
    {
        $this->container['show_totals'] = $show_totals;

        return $this;
    }
   /**
     * Gets table_style_name
     *
     * @return string
     */
    public function getTableStyleName()
    {
        return $this->container['table_style_name'];
    }

    /**
     * Sets table_style_name
     *
     *  
     *
     * @return $this
     */
    public function setTableStyleName($table_style_name)
    {
        $this->container['table_style_name'] = $table_style_name;

        return $this;
    }
   /**
     * Gets table_style_type
     *
     * @return string
     */
    public function getTableStyleType()
    {
        return $this->container['table_style_type'];
    }

    /**
     * Sets table_style_type
     *
     *  
     *
     * @return $this
     */
    public function setTableStyleType($table_style_type)
    {
        $this->container['table_style_type'] = $table_style_type;

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
