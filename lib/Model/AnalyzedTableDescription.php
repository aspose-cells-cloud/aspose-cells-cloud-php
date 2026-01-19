<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AnalyzedTableDescription.cs">
 *   Copyright (c) 2026 Aspose.Cells Cloud
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

class AnalyzedTableDescription
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AnalyzedTableDescription';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'sheet_name' => 'string',
        'columns' => '\Aspose\Cells\Cloud\Model\AnalyzedColumnDescription[]',
        'date_columns' => 'int[]',
        'number_columns' => 'int[]',
        'text_columns' => 'int[]',
        'exception_columns' => 'int[]',
        'has_table_header_row' => 'bool',
        'has_table_total_row' => 'bool',
        'start_data_column_index' => 'int',
        'end_data_column_index' => 'int',
        'start_data_row_index' => 'int',
        'end_data_row_index' => 'int',
        'thumbnail' => 'string',
        'discover_charts' => '\Aspose\Cells\Cloud\Model\DiscoverChart[]',
        'discover_pivot_tables' => '\Aspose\Cells\Cloud\Model\DiscoverPivotTable[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null  ,
        'sheet_name' => null  ,
        'columns' => null  ,
        'date_columns' => null  ,
        'number_columns' => null  ,
        'text_columns' => null  ,
        'exception_columns' => null  ,
        'has_table_header_row' => null  ,
        'has_table_total_row' => null  ,
        'start_data_column_index' => null  ,
        'end_data_column_index' => null  ,
        'start_data_row_index' => null  ,
        'end_data_row_index' => null  ,
        'thumbnail' => null  ,
        'discover_charts' => null  ,
        'discover_pivot_tables' => null  
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
         'sheet_name' => 'SheetName' ,
         'columns' => 'Columns' ,
         'date_columns' => 'DateColumns' ,
         'number_columns' => 'NumberColumns' ,
         'text_columns' => 'TextColumns' ,
         'exception_columns' => 'ExceptionColumns' ,
         'has_table_header_row' => 'HasTableHeaderRow' ,
         'has_table_total_row' => 'HasTableTotalRow' ,
         'start_data_column_index' => 'StartDataColumnIndex' ,
         'end_data_column_index' => 'EndDataColumnIndex' ,
         'start_data_row_index' => 'StartDataRowIndex' ,
         'end_data_row_index' => 'EndDataRowIndex' ,
         'thumbnail' => 'Thumbnail' ,
         'discover_charts' => 'DiscoverCharts' ,
         'discover_pivot_tables' => 'DiscoverPivotTables' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName' ,
        'sheet_name' => 'setSheetName' ,
        'columns' => 'setColumns' ,
        'date_columns' => 'setDateColumns' ,
        'number_columns' => 'setNumberColumns' ,
        'text_columns' => 'setTextColumns' ,
        'exception_columns' => 'setExceptionColumns' ,
        'has_table_header_row' => 'setHasTableHeaderRow' ,
        'has_table_total_row' => 'setHasTableTotalRow' ,
        'start_data_column_index' => 'setStartDataColumnIndex' ,
        'end_data_column_index' => 'setEndDataColumnIndex' ,
        'start_data_row_index' => 'setStartDataRowIndex' ,
        'end_data_row_index' => 'setEndDataRowIndex' ,
        'thumbnail' => 'setThumbnail' ,
        'discover_charts' => 'setDiscoverCharts' ,
        'discover_pivot_tables' => 'setDiscoverPivotTables' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName' ,
        'sheet_name' => 'getSheetName' ,
        'columns' => 'getColumns' ,
        'date_columns' => 'getDateColumns' ,
        'number_columns' => 'getNumberColumns' ,
        'text_columns' => 'getTextColumns' ,
        'exception_columns' => 'getExceptionColumns' ,
        'has_table_header_row' => 'getHasTableHeaderRow' ,
        'has_table_total_row' => 'getHasTableTotalRow' ,
        'start_data_column_index' => 'getStartDataColumnIndex' ,
        'end_data_column_index' => 'getEndDataColumnIndex' ,
        'start_data_row_index' => 'getStartDataRowIndex' ,
        'end_data_row_index' => 'getEndDataRowIndex' ,
        'thumbnail' => 'getThumbnail' ,
        'discover_charts' => 'getDiscoverCharts' ,
        'discover_pivot_tables' => 'getDiscoverPivotTables' 
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
        $this->container['sheet_name'] = isset($data['sheet_name']) ? $data['sheet_name'] : null;
        $this->container['columns'] = isset($data['columns']) ? $data['columns'] : null;
        $this->container['date_columns'] = isset($data['date_columns']) ? $data['date_columns'] : null;
        $this->container['number_columns'] = isset($data['number_columns']) ? $data['number_columns'] : null;
        $this->container['text_columns'] = isset($data['text_columns']) ? $data['text_columns'] : null;
        $this->container['exception_columns'] = isset($data['exception_columns']) ? $data['exception_columns'] : null;
        $this->container['has_table_header_row'] = isset($data['has_table_header_row']) ? $data['has_table_header_row'] : null;
        $this->container['has_table_total_row'] = isset($data['has_table_total_row']) ? $data['has_table_total_row'] : null;
        $this->container['start_data_column_index'] = isset($data['start_data_column_index']) ? $data['start_data_column_index'] : null;
        $this->container['end_data_column_index'] = isset($data['end_data_column_index']) ? $data['end_data_column_index'] : null;
        $this->container['start_data_row_index'] = isset($data['start_data_row_index']) ? $data['start_data_row_index'] : null;
        $this->container['end_data_row_index'] = isset($data['end_data_row_index']) ? $data['end_data_row_index'] : null;
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
        $this->container['discover_charts'] = isset($data['discover_charts']) ? $data['discover_charts'] : null;
        $this->container['discover_pivot_tables'] = isset($data['discover_pivot_tables']) ? $data['discover_pivot_tables'] : null;
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
        if ($this->container['sheet_name'] === null) {
            $invalidProperties[] = "'sheet_name' can't be null";
        }
        if ($this->container['columns'] === null) {
            $invalidProperties[] = "'columns' can't be null";
        }
        if ($this->container['date_columns'] === null) {
            $invalidProperties[] = "'date_columns' can't be null";
        }
        if ($this->container['number_columns'] === null) {
            $invalidProperties[] = "'number_columns' can't be null";
        }
        if ($this->container['text_columns'] === null) {
            $invalidProperties[] = "'text_columns' can't be null";
        }
        if ($this->container['exception_columns'] === null) {
            $invalidProperties[] = "'exception_columns' can't be null";
        }
        if ($this->container['has_table_header_row'] === null) {
            $invalidProperties[] = "'has_table_header_row' can't be null";
        }
        if ($this->container['has_table_total_row'] === null) {
            $invalidProperties[] = "'has_table_total_row' can't be null";
        }
        if ($this->container['start_data_column_index'] === null) {
            $invalidProperties[] = "'start_data_column_index' can't be null";
        }
        if ($this->container['end_data_column_index'] === null) {
            $invalidProperties[] = "'end_data_column_index' can't be null";
        }
        if ($this->container['start_data_row_index'] === null) {
            $invalidProperties[] = "'start_data_row_index' can't be null";
        }
        if ($this->container['end_data_row_index'] === null) {
            $invalidProperties[] = "'end_data_row_index' can't be null";
        }
        if ($this->container['thumbnail'] === null) {
            $invalidProperties[] = "'thumbnail' can't be null";
        }
        if ($this->container['discover_charts'] === null) {
            $invalidProperties[] = "'discover_charts' can't be null";
        }
        if ($this->container['discover_pivot_tables'] === null) {
            $invalidProperties[] = "'discover_pivot_tables' can't be null";
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
        if ($this->container['sheet_name'] === null) {
                    return false;
                }
        if ($this->container['columns'] === null) {
                    return false;
                }
        if ($this->container['date_columns'] === null) {
                    return false;
                }
        if ($this->container['number_columns'] === null) {
                    return false;
                }
        if ($this->container['text_columns'] === null) {
                    return false;
                }
        if ($this->container['exception_columns'] === null) {
                    return false;
                }
        if ($this->container['has_table_header_row'] === null) {
                    return false;
                }
        if ($this->container['has_table_total_row'] === null) {
                    return false;
                }
        if ($this->container['start_data_column_index'] === null) {
                    return false;
                }
        if ($this->container['end_data_column_index'] === null) {
                    return false;
                }
        if ($this->container['start_data_row_index'] === null) {
                    return false;
                }
        if ($this->container['end_data_row_index'] === null) {
                    return false;
                }
        if ($this->container['thumbnail'] === null) {
                    return false;
                }
        if ($this->container['discover_charts'] === null) {
                    return false;
                }
        if ($this->container['discover_pivot_tables'] === null) {
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
     *  Represents table name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }
   /**
     * Gets sheet_name
     *
     * @return string
     */
    public function getSheetName()
    {
        return $this->container['sheet_name'];
    }

    /**
     * Sets sheet_name
     *
     *  Represents worksheet name which is where the table is located.
     *
     * @return $this
     */
    public function setSheetName($sheet_name)
    {
        $this->container['sheet_name'] = $sheet_name;

        return $this;
    }
   /**
     * Gets columns
     *
     * @return \Aspose\Cells\Cloud\Model\AnalyzedColumnDescription[]
     */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
     * Sets columns
     *
     *  Represents analyzed description about table columns.
     *
     * @return $this
     */
    public function setColumns($columns)
    {
        $this->container['columns'] = $columns;

        return $this;
    }
   /**
     * Gets date_columns
     *
     * @return int[]
     */
    public function getDateColumns()
    {
        return $this->container['date_columns'];
    }

    /**
     * Sets date_columns
     *
     *  Represents date columns list.
     *
     * @return $this
     */
    public function setDateColumns($date_columns)
    {
        $this->container['date_columns'] = $date_columns;

        return $this;
    }
   /**
     * Gets number_columns
     *
     * @return int[]
     */
    public function getNumberColumns()
    {
        return $this->container['number_columns'];
    }

    /**
     * Sets number_columns
     *
     *  Represents number columns list.
     *
     * @return $this
     */
    public function setNumberColumns($number_columns)
    {
        $this->container['number_columns'] = $number_columns;

        return $this;
    }
   /**
     * Gets text_columns
     *
     * @return int[]
     */
    public function getTextColumns()
    {
        return $this->container['text_columns'];
    }

    /**
     * Sets text_columns
     *
     *  Represents string columns list.
     *
     * @return $this
     */
    public function setTextColumns($text_columns)
    {
        $this->container['text_columns'] = $text_columns;

        return $this;
    }
   /**
     * Gets exception_columns
     *
     * @return int[]
     */
    public function getExceptionColumns()
    {
        return $this->container['exception_columns'];
    }

    /**
     * Sets exception_columns
     *
     *  Represents exception columns list.
     *
     * @return $this
     */
    public function setExceptionColumns($exception_columns)
    {
        $this->container['exception_columns'] = $exception_columns;

        return $this;
    }
   /**
     * Gets has_table_header_row
     *
     * @return bool
     */
    public function getHasTableHeaderRow()
    {
        return $this->container['has_table_header_row'];
    }

    /**
     * Sets has_table_header_row
     *
     *  Represents there is a table header in the table.
     *
     * @return $this
     */
    public function setHasTableHeaderRow($has_table_header_row)
    {
        $this->container['has_table_header_row'] = $has_table_header_row;

        return $this;
    }
   /**
     * Gets has_table_total_row
     *
     * @return bool
     */
    public function getHasTableTotalRow()
    {
        return $this->container['has_table_total_row'];
    }

    /**
     * Sets has_table_total_row
     *
     *  Represents there is a total row in the table.
     *
     * @return $this
     */
    public function setHasTableTotalRow($has_table_total_row)
    {
        $this->container['has_table_total_row'] = $has_table_total_row;

        return $this;
    }
   /**
     * Gets start_data_column_index
     *
     * @return int
     */
    public function getStartDataColumnIndex()
    {
        return $this->container['start_data_column_index'];
    }

    /**
     * Sets start_data_column_index
     *
     *  Represents the column index as the start data column.
     *
     * @return $this
     */
    public function setStartDataColumnIndex($start_data_column_index)
    {
        $this->container['start_data_column_index'] = $start_data_column_index;

        return $this;
    }
   /**
     * Gets end_data_column_index
     *
     * @return int
     */
    public function getEndDataColumnIndex()
    {
        return $this->container['end_data_column_index'];
    }

    /**
     * Sets end_data_column_index
     *
     *  Represents the column index as the end data column.
     *
     * @return $this
     */
    public function setEndDataColumnIndex($end_data_column_index)
    {
        $this->container['end_data_column_index'] = $end_data_column_index;

        return $this;
    }
   /**
     * Gets start_data_row_index
     *
     * @return int
     */
    public function getStartDataRowIndex()
    {
        return $this->container['start_data_row_index'];
    }

    /**
     * Sets start_data_row_index
     *
     *  Represents the row index as the start data row.
     *
     * @return $this
     */
    public function setStartDataRowIndex($start_data_row_index)
    {
        $this->container['start_data_row_index'] = $start_data_row_index;

        return $this;
    }
   /**
     * Gets end_data_row_index
     *
     * @return int
     */
    public function getEndDataRowIndex()
    {
        return $this->container['end_data_row_index'];
    }

    /**
     * Sets end_data_row_index
     *
     *  Represents the row index as the end data row.
     *
     * @return $this
     */
    public function setEndDataRowIndex($end_data_row_index)
    {
        $this->container['end_data_row_index'] = $end_data_row_index;

        return $this;
    }
   /**
     * Gets thumbnail
     *
     * @return string
     */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
     * Sets thumbnail
     *
     *  Represents table thumbnail. Base64String
     *
     * @return $this
     */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;

        return $this;
    }
   /**
     * Gets discover_charts
     *
     * @return \Aspose\Cells\Cloud\Model\DiscoverChart[]
     */
    public function getDiscoverCharts()
    {
        return $this->container['discover_charts'];
    }

    /**
     * Sets discover_charts
     *
     *  Represents a collection of charts, which is a collection of charts created based on data analysis of a table.
     *
     * @return $this
     */
    public function setDiscoverCharts($discover_charts)
    {
        $this->container['discover_charts'] = $discover_charts;

        return $this;
    }
   /**
     * Gets discover_pivot_tables
     *
     * @return \Aspose\Cells\Cloud\Model\DiscoverPivotTable[]
     */
    public function getDiscoverPivotTables()
    {
        return $this->container['discover_pivot_tables'];
    }

    /**
     * Sets discover_pivot_tables
     *
     *  Represents a collection of pivot tables, which is a collection of pivot tables created based on data analysis of a table.
     *
     * @return $this
     */
    public function setDiscoverPivotTables($discover_pivot_tables)
    {
        $this->container['discover_pivot_tables'] = $discover_pivot_tables;

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
