<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Protection.cs">
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

class Protection
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Protection';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allow_deleting_column' => 'bool',
        'allow_deleting_row' => 'bool',
        'allow_filtering' => 'bool',
        'allow_formatting_cell' => 'bool',
        'allow_formatting_column' => 'bool',
        'allow_formatting_row' => 'bool',
        'allow_inserting_column' => 'bool',
        'allow_inserting_hyperlink' => 'bool',
        'allow_inserting_row' => 'bool',
        'allow_sorting' => 'bool',
        'allow_using_pivot_table' => 'bool',
        'allow_editing_content' => 'bool',
        'allow_editing_object' => 'bool',
        'allow_editing_scenario' => 'bool',
        'password' => 'string',
        'allow_selecting_locked_cell' => 'bool',
        'allow_selecting_unlocked_cell' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allow_deleting_column' => null  ,
        'allow_deleting_row' => null  ,
        'allow_filtering' => null  ,
        'allow_formatting_cell' => null  ,
        'allow_formatting_column' => null  ,
        'allow_formatting_row' => null  ,
        'allow_inserting_column' => null  ,
        'allow_inserting_hyperlink' => null  ,
        'allow_inserting_row' => null  ,
        'allow_sorting' => null  ,
        'allow_using_pivot_table' => null  ,
        'allow_editing_content' => null  ,
        'allow_editing_object' => null  ,
        'allow_editing_scenario' => null  ,
        'password' => null  ,
        'allow_selecting_locked_cell' => null  ,
        'allow_selecting_unlocked_cell' => null  
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
         'allow_deleting_column' => 'AllowDeletingColumn' ,
         'allow_deleting_row' => 'AllowDeletingRow' ,
         'allow_filtering' => 'AllowFiltering' ,
         'allow_formatting_cell' => 'AllowFormattingCell' ,
         'allow_formatting_column' => 'AllowFormattingColumn' ,
         'allow_formatting_row' => 'AllowFormattingRow' ,
         'allow_inserting_column' => 'AllowInsertingColumn' ,
         'allow_inserting_hyperlink' => 'AllowInsertingHyperlink' ,
         'allow_inserting_row' => 'AllowInsertingRow' ,
         'allow_sorting' => 'AllowSorting' ,
         'allow_using_pivot_table' => 'AllowUsingPivotTable' ,
         'allow_editing_content' => 'AllowEditingContent' ,
         'allow_editing_object' => 'AllowEditingObject' ,
         'allow_editing_scenario' => 'AllowEditingScenario' ,
         'password' => 'Password' ,
         'allow_selecting_locked_cell' => 'AllowSelectingLockedCell' ,
         'allow_selecting_unlocked_cell' => 'AllowSelectingUnlockedCell' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_deleting_column' => 'setAllowDeletingColumn' ,
        'allow_deleting_row' => 'setAllowDeletingRow' ,
        'allow_filtering' => 'setAllowFiltering' ,
        'allow_formatting_cell' => 'setAllowFormattingCell' ,
        'allow_formatting_column' => 'setAllowFormattingColumn' ,
        'allow_formatting_row' => 'setAllowFormattingRow' ,
        'allow_inserting_column' => 'setAllowInsertingColumn' ,
        'allow_inserting_hyperlink' => 'setAllowInsertingHyperlink' ,
        'allow_inserting_row' => 'setAllowInsertingRow' ,
        'allow_sorting' => 'setAllowSorting' ,
        'allow_using_pivot_table' => 'setAllowUsingPivotTable' ,
        'allow_editing_content' => 'setAllowEditingContent' ,
        'allow_editing_object' => 'setAllowEditingObject' ,
        'allow_editing_scenario' => 'setAllowEditingScenario' ,
        'password' => 'setPassword' ,
        'allow_selecting_locked_cell' => 'setAllowSelectingLockedCell' ,
        'allow_selecting_unlocked_cell' => 'setAllowSelectingUnlockedCell' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_deleting_column' => 'getAllowDeletingColumn' ,
        'allow_deleting_row' => 'getAllowDeletingRow' ,
        'allow_filtering' => 'getAllowFiltering' ,
        'allow_formatting_cell' => 'getAllowFormattingCell' ,
        'allow_formatting_column' => 'getAllowFormattingColumn' ,
        'allow_formatting_row' => 'getAllowFormattingRow' ,
        'allow_inserting_column' => 'getAllowInsertingColumn' ,
        'allow_inserting_hyperlink' => 'getAllowInsertingHyperlink' ,
        'allow_inserting_row' => 'getAllowInsertingRow' ,
        'allow_sorting' => 'getAllowSorting' ,
        'allow_using_pivot_table' => 'getAllowUsingPivotTable' ,
        'allow_editing_content' => 'getAllowEditingContent' ,
        'allow_editing_object' => 'getAllowEditingObject' ,
        'allow_editing_scenario' => 'getAllowEditingScenario' ,
        'password' => 'getPassword' ,
        'allow_selecting_locked_cell' => 'getAllowSelectingLockedCell' ,
        'allow_selecting_unlocked_cell' => 'getAllowSelectingUnlockedCell' 
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
        $this->container['allow_deleting_column'] = isset($data['allow_deleting_column']) ? $data['allow_deleting_column'] : null;
        $this->container['allow_deleting_row'] = isset($data['allow_deleting_row']) ? $data['allow_deleting_row'] : null;
        $this->container['allow_filtering'] = isset($data['allow_filtering']) ? $data['allow_filtering'] : null;
        $this->container['allow_formatting_cell'] = isset($data['allow_formatting_cell']) ? $data['allow_formatting_cell'] : null;
        $this->container['allow_formatting_column'] = isset($data['allow_formatting_column']) ? $data['allow_formatting_column'] : null;
        $this->container['allow_formatting_row'] = isset($data['allow_formatting_row']) ? $data['allow_formatting_row'] : null;
        $this->container['allow_inserting_column'] = isset($data['allow_inserting_column']) ? $data['allow_inserting_column'] : null;
        $this->container['allow_inserting_hyperlink'] = isset($data['allow_inserting_hyperlink']) ? $data['allow_inserting_hyperlink'] : null;
        $this->container['allow_inserting_row'] = isset($data['allow_inserting_row']) ? $data['allow_inserting_row'] : null;
        $this->container['allow_sorting'] = isset($data['allow_sorting']) ? $data['allow_sorting'] : null;
        $this->container['allow_using_pivot_table'] = isset($data['allow_using_pivot_table']) ? $data['allow_using_pivot_table'] : null;
        $this->container['allow_editing_content'] = isset($data['allow_editing_content']) ? $data['allow_editing_content'] : null;
        $this->container['allow_editing_object'] = isset($data['allow_editing_object']) ? $data['allow_editing_object'] : null;
        $this->container['allow_editing_scenario'] = isset($data['allow_editing_scenario']) ? $data['allow_editing_scenario'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['allow_selecting_locked_cell'] = isset($data['allow_selecting_locked_cell']) ? $data['allow_selecting_locked_cell'] : null;
        $this->container['allow_selecting_unlocked_cell'] = isset($data['allow_selecting_unlocked_cell']) ? $data['allow_selecting_unlocked_cell'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['allow_deleting_column'] === null) {
            $invalidProperties[] = "'allow_deleting_column' can't be null";
        }
        if ($this->container['allow_deleting_row'] === null) {
            $invalidProperties[] = "'allow_deleting_row' can't be null";
        }
        if ($this->container['allow_filtering'] === null) {
            $invalidProperties[] = "'allow_filtering' can't be null";
        }
        if ($this->container['allow_formatting_cell'] === null) {
            $invalidProperties[] = "'allow_formatting_cell' can't be null";
        }
        if ($this->container['allow_formatting_column'] === null) {
            $invalidProperties[] = "'allow_formatting_column' can't be null";
        }
        if ($this->container['allow_formatting_row'] === null) {
            $invalidProperties[] = "'allow_formatting_row' can't be null";
        }
        if ($this->container['allow_inserting_column'] === null) {
            $invalidProperties[] = "'allow_inserting_column' can't be null";
        }
        if ($this->container['allow_inserting_hyperlink'] === null) {
            $invalidProperties[] = "'allow_inserting_hyperlink' can't be null";
        }
        if ($this->container['allow_inserting_row'] === null) {
            $invalidProperties[] = "'allow_inserting_row' can't be null";
        }
        if ($this->container['allow_sorting'] === null) {
            $invalidProperties[] = "'allow_sorting' can't be null";
        }
        if ($this->container['allow_using_pivot_table'] === null) {
            $invalidProperties[] = "'allow_using_pivot_table' can't be null";
        }
        if ($this->container['allow_editing_content'] === null) {
            $invalidProperties[] = "'allow_editing_content' can't be null";
        }
        if ($this->container['allow_editing_object'] === null) {
            $invalidProperties[] = "'allow_editing_object' can't be null";
        }
        if ($this->container['allow_editing_scenario'] === null) {
            $invalidProperties[] = "'allow_editing_scenario' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ($this->container['allow_selecting_locked_cell'] === null) {
            $invalidProperties[] = "'allow_selecting_locked_cell' can't be null";
        }
        if ($this->container['allow_selecting_unlocked_cell'] === null) {
            $invalidProperties[] = "'allow_selecting_unlocked_cell' can't be null";
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
        if ($this->container['allow_deleting_column'] === null) {
                    return false;
                }
        if ($this->container['allow_deleting_row'] === null) {
                    return false;
                }
        if ($this->container['allow_filtering'] === null) {
                    return false;
                }
        if ($this->container['allow_formatting_cell'] === null) {
                    return false;
                }
        if ($this->container['allow_formatting_column'] === null) {
                    return false;
                }
        if ($this->container['allow_formatting_row'] === null) {
                    return false;
                }
        if ($this->container['allow_inserting_column'] === null) {
                    return false;
                }
        if ($this->container['allow_inserting_hyperlink'] === null) {
                    return false;
                }
        if ($this->container['allow_inserting_row'] === null) {
                    return false;
                }
        if ($this->container['allow_sorting'] === null) {
                    return false;
                }
        if ($this->container['allow_using_pivot_table'] === null) {
                    return false;
                }
        if ($this->container['allow_editing_content'] === null) {
                    return false;
                }
        if ($this->container['allow_editing_object'] === null) {
                    return false;
                }
        if ($this->container['allow_editing_scenario'] === null) {
                    return false;
                }
        if ($this->container['password'] === null) {
                    return false;
                }
        if ($this->container['allow_selecting_locked_cell'] === null) {
                    return false;
                }
        if ($this->container['allow_selecting_unlocked_cell'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets allow_deleting_column
     *
     * @return bool
     */
    public function getAllowDeletingColumn()
    {
        return $this->container['allow_deleting_column'];
    }

    /**
     * Sets allow_deleting_column
     *
     *  Represents if the deletion of columns is allowed on a protected worksheet. 
     *
     * @return $this
     */
    public function setAllowDeletingColumn($allow_deleting_column)
    {
        $this->container['allow_deleting_column'] = $allow_deleting_column;

        return $this;
    }
   /**
     * Gets allow_deleting_row
     *
     * @return bool
     */
    public function getAllowDeletingRow()
    {
        return $this->container['allow_deleting_row'];
    }

    /**
     * Sets allow_deleting_row
     *
     *  Represents if the deletion of rows is allowed on a protected worksheet. 
     *
     * @return $this
     */
    public function setAllowDeletingRow($allow_deleting_row)
    {
        $this->container['allow_deleting_row'] = $allow_deleting_row;

        return $this;
    }
   /**
     * Gets allow_filtering
     *
     * @return bool
     */
    public function getAllowFiltering()
    {
        return $this->container['allow_filtering'];
    }

    /**
     * Sets allow_filtering
     *
     *  Represents if the user is allowed to make use of an AutoFilter that was created before the sheet was protected. 
     *
     * @return $this
     */
    public function setAllowFiltering($allow_filtering)
    {
        $this->container['allow_filtering'] = $allow_filtering;

        return $this;
    }
   /**
     * Gets allow_formatting_cell
     *
     * @return bool
     */
    public function getAllowFormattingCell()
    {
        return $this->container['allow_formatting_cell'];
    }

    /**
     * Sets allow_formatting_cell
     *
     *  Represents if the formatting of cells is allowed on a protected worksheet. 
     *
     * @return $this
     */
    public function setAllowFormattingCell($allow_formatting_cell)
    {
        $this->container['allow_formatting_cell'] = $allow_formatting_cell;

        return $this;
    }
   /**
     * Gets allow_formatting_column
     *
     * @return bool
     */
    public function getAllowFormattingColumn()
    {
        return $this->container['allow_formatting_column'];
    }

    /**
     * Sets allow_formatting_column
     *
     *  Represents if the formatting of columns is allowed on a protected worksheet 
     *
     * @return $this
     */
    public function setAllowFormattingColumn($allow_formatting_column)
    {
        $this->container['allow_formatting_column'] = $allow_formatting_column;

        return $this;
    }
   /**
     * Gets allow_formatting_row
     *
     * @return bool
     */
    public function getAllowFormattingRow()
    {
        return $this->container['allow_formatting_row'];
    }

    /**
     * Sets allow_formatting_row
     *
     *  Represents if the formatting of rows is allowed on a protected worksheet 
     *
     * @return $this
     */
    public function setAllowFormattingRow($allow_formatting_row)
    {
        $this->container['allow_formatting_row'] = $allow_formatting_row;

        return $this;
    }
   /**
     * Gets allow_inserting_column
     *
     * @return bool
     */
    public function getAllowInsertingColumn()
    {
        return $this->container['allow_inserting_column'];
    }

    /**
     * Sets allow_inserting_column
     *
     *  Represents if the insertion of columns is allowed on a protected worksheet 
     *
     * @return $this
     */
    public function setAllowInsertingColumn($allow_inserting_column)
    {
        $this->container['allow_inserting_column'] = $allow_inserting_column;

        return $this;
    }
   /**
     * Gets allow_inserting_hyperlink
     *
     * @return bool
     */
    public function getAllowInsertingHyperlink()
    {
        return $this->container['allow_inserting_hyperlink'];
    }

    /**
     * Sets allow_inserting_hyperlink
     *
     *  Represents if the insertion of hyperlinks is allowed on a protected worksheet 
     *
     * @return $this
     */
    public function setAllowInsertingHyperlink($allow_inserting_hyperlink)
    {
        $this->container['allow_inserting_hyperlink'] = $allow_inserting_hyperlink;

        return $this;
    }
   /**
     * Gets allow_inserting_row
     *
     * @return bool
     */
    public function getAllowInsertingRow()
    {
        return $this->container['allow_inserting_row'];
    }

    /**
     * Sets allow_inserting_row
     *
     *  Represents if the insertion of rows is allowed on a protected worksheet 
     *
     * @return $this
     */
    public function setAllowInsertingRow($allow_inserting_row)
    {
        $this->container['allow_inserting_row'] = $allow_inserting_row;

        return $this;
    }
   /**
     * Gets allow_sorting
     *
     * @return bool
     */
    public function getAllowSorting()
    {
        return $this->container['allow_sorting'];
    }

    /**
     * Sets allow_sorting
     *
     *  Represents if the sorting option is allowed on a protected worksheet. 
     *
     * @return $this
     */
    public function setAllowSorting($allow_sorting)
    {
        $this->container['allow_sorting'] = $allow_sorting;

        return $this;
    }
   /**
     * Gets allow_using_pivot_table
     *
     * @return bool
     */
    public function getAllowUsingPivotTable()
    {
        return $this->container['allow_using_pivot_table'];
    }

    /**
     * Sets allow_using_pivot_table
     *
     *  Represents if the user is allowed to manipulate pivot tables on a protected worksheet. 
     *
     * @return $this
     */
    public function setAllowUsingPivotTable($allow_using_pivot_table)
    {
        $this->container['allow_using_pivot_table'] = $allow_using_pivot_table;

        return $this;
    }
   /**
     * Gets allow_editing_content
     *
     * @return bool
     */
    public function getAllowEditingContent()
    {
        return $this->container['allow_editing_content'];
    }

    /**
     * Sets allow_editing_content
     *
     *  Represents if the user is allowed to edit contents of locked cells on a protected worksheet. 
     *
     * @return $this
     */
    public function setAllowEditingContent($allow_editing_content)
    {
        $this->container['allow_editing_content'] = $allow_editing_content;

        return $this;
    }
   /**
     * Gets allow_editing_object
     *
     * @return bool
     */
    public function getAllowEditingObject()
    {
        return $this->container['allow_editing_object'];
    }

    /**
     * Sets allow_editing_object
     *
     *  Represents if the user is allowed to manipulate drawing objects on a protected worksheet. 
     *
     * @return $this
     */
    public function setAllowEditingObject($allow_editing_object)
    {
        $this->container['allow_editing_object'] = $allow_editing_object;

        return $this;
    }
   /**
     * Gets allow_editing_scenario
     *
     * @return bool
     */
    public function getAllowEditingScenario()
    {
        return $this->container['allow_editing_scenario'];
    }

    /**
     * Sets allow_editing_scenario
     *
     *  Represents if the user is allowed to edit scenarios on a protected worksheet. 
     *
     * @return $this
     */
    public function setAllowEditingScenario($allow_editing_scenario)
    {
        $this->container['allow_editing_scenario'] = $allow_editing_scenario;

        return $this;
    }
   /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     *  Represents the password to protect the worksheet. 
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }
   /**
     * Gets allow_selecting_locked_cell
     *
     * @return bool
     */
    public function getAllowSelectingLockedCell()
    {
        return $this->container['allow_selecting_locked_cell'];
    }

    /**
     * Sets allow_selecting_locked_cell
     *
     *  Represents if the user is allowed to select locked cells on a protected worksheet. 
     *
     * @return $this
     */
    public function setAllowSelectingLockedCell($allow_selecting_locked_cell)
    {
        $this->container['allow_selecting_locked_cell'] = $allow_selecting_locked_cell;

        return $this;
    }
   /**
     * Gets allow_selecting_unlocked_cell
     *
     * @return bool
     */
    public function getAllowSelectingUnlockedCell()
    {
        return $this->container['allow_selecting_unlocked_cell'];
    }

    /**
     * Sets allow_selecting_unlocked_cell
     *
     *  Represents if the user is allowed to select unlocked cells on a protected worksheet. 
     *
     * @return $this
     */
    public function setAllowSelectingUnlockedCell($allow_selecting_unlocked_cell)
    {
        $this->container['allow_selecting_unlocked_cell'] = $allow_selecting_unlocked_cell;

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
