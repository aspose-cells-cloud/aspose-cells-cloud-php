<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DateTimeGroupItem.cs">
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

use \ArrayAccess;
use \Aspose\Cells\Cloud\ObjectSerializer;

class DateTimeGroupItem implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DateTimeGroupItem';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date_time_grouping_type' => 'string',
        'day' => 'int',
        'hour' => 'int',
        'minute' => 'int',
        'month' => 'int',
        'second' => 'int',
        'year' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date_time_grouping_type' => null  ,
        'day' => null  ,
        'hour' => null  ,
        'minute' => null  ,
        'month' => null  ,
        'second' => null  ,
        'year' => null  
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
         'date_time_grouping_type' => 'DateTimeGroupingType' ,
         'day' => 'Day' ,
         'hour' => 'Hour' ,
         'minute' => 'Minute' ,
         'month' => 'Month' ,
         'second' => 'Second' ,
         'year' => 'Year' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_time_grouping_type' => 'setDateTimeGroupingType' ,
        'day' => 'setDay' ,
        'hour' => 'setHour' ,
        'minute' => 'setMinute' ,
        'month' => 'setMonth' ,
        'second' => 'setSecond' ,
        'year' => 'setYear' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_time_grouping_type' => 'getDateTimeGroupingType' ,
        'day' => 'getDay' ,
        'hour' => 'getHour' ,
        'minute' => 'getMinute' ,
        'month' => 'getMonth' ,
        'second' => 'getSecond' ,
        'year' => 'getYear' 
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
        $this->container['date_time_grouping_type'] = isset($data['date_time_grouping_type']) ? $data['date_time_grouping_type'] : null;
        $this->container['day'] = isset($data['day']) ? $data['day'] : null;
        $this->container['hour'] = isset($data['hour']) ? $data['hour'] : null;
        $this->container['minute'] = isset($data['minute']) ? $data['minute'] : null;
        $this->container['month'] = isset($data['month']) ? $data['month'] : null;
        $this->container['second'] = isset($data['second']) ? $data['second'] : null;
        $this->container['year'] = isset($data['year']) ? $data['year'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['date_time_grouping_type'] === null) {
            $invalidProperties[] = "'date_time_grouping_type' can't be null";
        }
        if ($this->container['day'] === null) {
            $invalidProperties[] = "'day' can't be null";
        }
        if ($this->container['hour'] === null) {
            $invalidProperties[] = "'hour' can't be null";
        }
        if ($this->container['minute'] === null) {
            $invalidProperties[] = "'minute' can't be null";
        }
        if ($this->container['month'] === null) {
            $invalidProperties[] = "'month' can't be null";
        }
        if ($this->container['second'] === null) {
            $invalidProperties[] = "'second' can't be null";
        }
        if ($this->container['year'] === null) {
            $invalidProperties[] = "'year' can't be null";
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
        if ($this->container['date_time_grouping_type'] === null) {
                    return false;
                }
        if ($this->container['day'] === null) {
                    return false;
                }
        if ($this->container['hour'] === null) {
                    return false;
                }
        if ($this->container['minute'] === null) {
                    return false;
                }
        if ($this->container['month'] === null) {
                    return false;
                }
        if ($this->container['second'] === null) {
                    return false;
                }
        if ($this->container['year'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets date_time_grouping_type
     *
     * @return string
     */
    public function getDateTimeGroupingType()
    {
        return $this->container['date_time_grouping_type'];
    }

    /**
     * Sets date_time_grouping_type
     *
     *  Gets and sets the group type.
     *
     * @return $this
     */
    public function setDateTimeGroupingType($date_time_grouping_type)
    {
        $this->container['date_time_grouping_type'] = $date_time_grouping_type;

        return $this;
    }
   /**
     * Gets day
     *
     * @return int
     */
    public function getDay()
    {
        return $this->container['day'];
    }

    /**
     * Sets day
     *
     *  Gets and sets the day of the grouped date time.
     *
     * @return $this
     */
    public function setDay($day)
    {
        $this->container['day'] = $day;

        return $this;
    }
   /**
     * Gets hour
     *
     * @return int
     */
    public function getHour()
    {
        return $this->container['hour'];
    }

    /**
     * Sets hour
     *
     *  Gets and sets the hour of the grouped date time.
     *
     * @return $this
     */
    public function setHour($hour)
    {
        $this->container['hour'] = $hour;

        return $this;
    }
   /**
     * Gets minute
     *
     * @return int
     */
    public function getMinute()
    {
        return $this->container['minute'];
    }

    /**
     * Sets minute
     *
     *  Gets and sets the minute of the grouped date time.
     *
     * @return $this
     */
    public function setMinute($minute)
    {
        $this->container['minute'] = $minute;

        return $this;
    }
   /**
     * Gets month
     *
     * @return int
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     *
     *  Gets and sets the month of the grouped date time.
     *
     * @return $this
     */
    public function setMonth($month)
    {
        $this->container['month'] = $month;

        return $this;
    }
   /**
     * Gets second
     *
     * @return int
     */
    public function getSecond()
    {
        return $this->container['second'];
    }

    /**
     * Sets second
     *
     *  Gets and sets the second of the grouped date time.
     *
     * @return $this
     */
    public function setSecond($second)
    {
        $this->container['second'] = $second;

        return $this;
    }
   /**
     * Gets year
     *
     * @return int
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     *  Gets and sets the year of the grouped date time.
     *
     * @return $this
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

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
