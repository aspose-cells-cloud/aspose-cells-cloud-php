<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MergeTableOptions.cs">
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

class MergeTableOptions
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MergeTableOptions';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'main_table' => '\Aspose\Cells\Cloud\Model\CombinationSourceData',
        'secondary_table' => '\Aspose\Cells\Cloud\Model\CombinationSourceData',
        'data_merge_type' => 'string',
        'overwrite_main_table' => 'bool',
        'sync_data_to_target_workbook' => 'bool',
        'merged_data_to_position' => '\Aspose\Cells\Cloud\Model\DataOutputLocation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'main_table' => null  ,
        'secondary_table' => null  ,
        'data_merge_type' => null  ,
        'overwrite_main_table' => null  ,
        'sync_data_to_target_workbook' => null  ,
        'merged_data_to_position' => null  
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
         'main_table' => 'MainTable' ,
         'secondary_table' => 'SecondaryTable' ,
         'data_merge_type' => 'DataMergeType' ,
         'overwrite_main_table' => 'OverwriteMainTable' ,
         'sync_data_to_target_workbook' => 'SyncDataToTargetWorkbook' ,
         'merged_data_to_position' => 'MergedDataToPosition' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'main_table' => 'setMainTable' ,
        'secondary_table' => 'setSecondaryTable' ,
        'data_merge_type' => 'setDataMergeType' ,
        'overwrite_main_table' => 'setOverwriteMainTable' ,
        'sync_data_to_target_workbook' => 'setSyncDataToTargetWorkbook' ,
        'merged_data_to_position' => 'setMergedDataToPosition' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'main_table' => 'getMainTable' ,
        'secondary_table' => 'getSecondaryTable' ,
        'data_merge_type' => 'getDataMergeType' ,
        'overwrite_main_table' => 'getOverwriteMainTable' ,
        'sync_data_to_target_workbook' => 'getSyncDataToTargetWorkbook' ,
        'merged_data_to_position' => 'getMergedDataToPosition' 
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
        $this->container['main_table'] = isset($data['main_table']) ? $data['main_table'] : null;
        $this->container['secondary_table'] = isset($data['secondary_table']) ? $data['secondary_table'] : null;
        $this->container['data_merge_type'] = isset($data['data_merge_type']) ? $data['data_merge_type'] : null;
        $this->container['overwrite_main_table'] = isset($data['overwrite_main_table']) ? $data['overwrite_main_table'] : null;
        $this->container['sync_data_to_target_workbook'] = isset($data['sync_data_to_target_workbook']) ? $data['sync_data_to_target_workbook'] : null;
        $this->container['merged_data_to_position'] = isset($data['merged_data_to_position']) ? $data['merged_data_to_position'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['main_table'] === null) {
            $invalidProperties[] = "'main_table' can't be null";
        }
        if ($this->container['secondary_table'] === null) {
            $invalidProperties[] = "'secondary_table' can't be null";
        }
        if ($this->container['data_merge_type'] === null) {
            $invalidProperties[] = "'data_merge_type' can't be null";
        }
        if ($this->container['overwrite_main_table'] === null) {
            $invalidProperties[] = "'overwrite_main_table' can't be null";
        }
        if ($this->container['sync_data_to_target_workbook'] === null) {
            $invalidProperties[] = "'sync_data_to_target_workbook' can't be null";
        }
        if ($this->container['merged_data_to_position'] === null) {
            $invalidProperties[] = "'merged_data_to_position' can't be null";
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
        if ($this->container['main_table'] === null) {
                    return false;
                }
        if ($this->container['secondary_table'] === null) {
                    return false;
                }
        if ($this->container['data_merge_type'] === null) {
                    return false;
                }
        if ($this->container['overwrite_main_table'] === null) {
                    return false;
                }
        if ($this->container['sync_data_to_target_workbook'] === null) {
                    return false;
                }
        if ($this->container['merged_data_to_position'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets main_table
     *
     * @return \Aspose\Cells\Cloud\Model\CombinationSourceData
     */
    public function getMainTable()
    {
        return $this->container['main_table'];
    }

    /**
     * Sets main_table
     *
     *  
     *
     * @return $this
     */
    public function setMainTable($main_table)
    {
        $this->container['main_table'] = $main_table;

        return $this;
    }
   /**
     * Gets secondary_table
     *
     * @return \Aspose\Cells\Cloud\Model\CombinationSourceData
     */
    public function getSecondaryTable()
    {
        return $this->container['secondary_table'];
    }

    /**
     * Sets secondary_table
     *
     *  
     *
     * @return $this
     */
    public function setSecondaryTable($secondary_table)
    {
        $this->container['secondary_table'] = $secondary_table;

        return $this;
    }
   /**
     * Gets data_merge_type
     *
     * @return string
     */
    public function getDataMergeType()
    {
        return $this->container['data_merge_type'];
    }

    /**
     * Sets data_merge_type
     *
     *  
     *
     * @return $this
     */
    public function setDataMergeType($data_merge_type)
    {
        $this->container['data_merge_type'] = $data_merge_type;

        return $this;
    }
   /**
     * Gets overwrite_main_table
     *
     * @return bool
     */
    public function getOverwriteMainTable()
    {
        return $this->container['overwrite_main_table'];
    }

    /**
     * Sets overwrite_main_table
     *
     *  
     *
     * @return $this
     */
    public function setOverwriteMainTable($overwrite_main_table)
    {
        $this->container['overwrite_main_table'] = $overwrite_main_table;

        return $this;
    }
   /**
     * Gets sync_data_to_target_workbook
     *
     * @return bool
     */
    public function getSyncDataToTargetWorkbook()
    {
        return $this->container['sync_data_to_target_workbook'];
    }

    /**
     * Sets sync_data_to_target_workbook
     *
     *  
     *
     * @return $this
     */
    public function setSyncDataToTargetWorkbook($sync_data_to_target_workbook)
    {
        $this->container['sync_data_to_target_workbook'] = $sync_data_to_target_workbook;

        return $this;
    }
   /**
     * Gets merged_data_to_position
     *
     * @return \Aspose\Cells\Cloud\Model\DataOutputLocation
     */
    public function getMergedDataToPosition()
    {
        return $this->container['merged_data_to_position'];
    }

    /**
     * Sets merged_data_to_position
     *
     *  
     *
     * @return $this
     */
    public function setMergedDataToPosition($merged_data_to_position)
    {
        $this->container['merged_data_to_position'] = $merged_data_to_position;

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
