<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CalculationOptions.cs">
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

class CalculationOptions
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CalculationOptions';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'calc_stack_size' => 'int',
        'ignore_error' => 'bool',
        'precision_strategy' => 'string',
        'recursive' => 'bool',
        'custom_engine' => '\Aspose\Cells\Cloud\Model\AbstractCalculationEngine',
        'calculation_monitor' => '\Aspose\Cells\Cloud\Model\AbstractCalculationMonitor',
        'linked_data_sources' => '\Aspose\Cells\Cloud\Model\Workbook[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'calc_stack_size' => null  ,
        'ignore_error' => null  ,
        'precision_strategy' => null  ,
        'recursive' => null  ,
        'custom_engine' => null  ,
        'calculation_monitor' => null  ,
        'linked_data_sources' => null  
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
         'calc_stack_size' => 'CalcStackSize' ,
         'ignore_error' => 'IgnoreError' ,
         'precision_strategy' => 'PrecisionStrategy' ,
         'recursive' => 'Recursive' ,
         'custom_engine' => 'CustomEngine' ,
         'calculation_monitor' => 'CalculationMonitor' ,
         'linked_data_sources' => 'LinkedDataSources' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'calc_stack_size' => 'setCalcStackSize' ,
        'ignore_error' => 'setIgnoreError' ,
        'precision_strategy' => 'setPrecisionStrategy' ,
        'recursive' => 'setRecursive' ,
        'custom_engine' => 'setCustomEngine' ,
        'calculation_monitor' => 'setCalculationMonitor' ,
        'linked_data_sources' => 'setLinkedDataSources' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'calc_stack_size' => 'getCalcStackSize' ,
        'ignore_error' => 'getIgnoreError' ,
        'precision_strategy' => 'getPrecisionStrategy' ,
        'recursive' => 'getRecursive' ,
        'custom_engine' => 'getCustomEngine' ,
        'calculation_monitor' => 'getCalculationMonitor' ,
        'linked_data_sources' => 'getLinkedDataSources' 
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
        $this->container['calc_stack_size'] = isset($data['calc_stack_size']) ? $data['calc_stack_size'] : null;
        $this->container['ignore_error'] = isset($data['ignore_error']) ? $data['ignore_error'] : null;
        $this->container['precision_strategy'] = isset($data['precision_strategy']) ? $data['precision_strategy'] : null;
        $this->container['recursive'] = isset($data['recursive']) ? $data['recursive'] : null;
        $this->container['custom_engine'] = isset($data['custom_engine']) ? $data['custom_engine'] : null;
        $this->container['calculation_monitor'] = isset($data['calculation_monitor']) ? $data['calculation_monitor'] : null;
        $this->container['linked_data_sources'] = isset($data['linked_data_sources']) ? $data['linked_data_sources'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['calc_stack_size'] === null) {
            $invalidProperties[] = "'calc_stack_size' can't be null";
        }
        if ($this->container['ignore_error'] === null) {
            $invalidProperties[] = "'ignore_error' can't be null";
        }
        if ($this->container['precision_strategy'] === null) {
            $invalidProperties[] = "'precision_strategy' can't be null";
        }
        if ($this->container['recursive'] === null) {
            $invalidProperties[] = "'recursive' can't be null";
        }
        if ($this->container['custom_engine'] === null) {
            $invalidProperties[] = "'custom_engine' can't be null";
        }
        if ($this->container['calculation_monitor'] === null) {
            $invalidProperties[] = "'calculation_monitor' can't be null";
        }
        if ($this->container['linked_data_sources'] === null) {
            $invalidProperties[] = "'linked_data_sources' can't be null";
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
        if ($this->container['calc_stack_size'] === null) {
                    return false;
                }
        if ($this->container['ignore_error'] === null) {
                    return false;
                }
        if ($this->container['precision_strategy'] === null) {
                    return false;
                }
        if ($this->container['recursive'] === null) {
                    return false;
                }
        if ($this->container['custom_engine'] === null) {
                    return false;
                }
        if ($this->container['calculation_monitor'] === null) {
                    return false;
                }
        if ($this->container['linked_data_sources'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets calc_stack_size
     *
     * @return int
     */
    public function getCalcStackSize()
    {
        return $this->container['calc_stack_size'];
    }

    /**
     * Sets calc_stack_size
     *
     *  Specifies the stack size for calculating cells recursively. 
     *
     * @return $this
     */
    public function setCalcStackSize($calc_stack_size)
    {
        $this->container['calc_stack_size'] = $calc_stack_size;

        return $this;
    }
   /**
     * Gets ignore_error
     *
     * @return bool
     */
    public function getIgnoreError()
    {
        return $this->container['ignore_error'];
    }

    /**
     * Sets ignore_error
     *
     *  Indicates whether errors encountered while calculating formulas should be ignored.            The error may be unsupported function, external links, etc.            The default value is true. 
     *
     * @return $this
     */
    public function setIgnoreError($ignore_error)
    {
        $this->container['ignore_error'] = $ignore_error;

        return $this;
    }
   /**
     * Gets precision_strategy
     *
     * @return string
     */
    public function getPrecisionStrategy()
    {
        return $this->container['precision_strategy'];
    }

    /**
     * Sets precision_strategy
     *
     *  Specifies the strategy for processing precision of calculation. 
     *
     * @return $this
     */
    public function setPrecisionStrategy($precision_strategy)
    {
        $this->container['precision_strategy'] = $precision_strategy;

        return $this;
    }
   /**
     * Gets recursive
     *
     * @return bool
     */
    public function getRecursive()
    {
        return $this->container['recursive'];
    }

    /**
     * Sets recursive
     *
     *  Indicates whether calculate the dependent cells recursively when calculating one cell and it depends on other cells.            The default value is true. 
     *
     * @return $this
     */
    public function setRecursive($recursive)
    {
        $this->container['recursive'] = $recursive;

        return $this;
    }
   /**
     * Gets custom_engine
     *
     * @return \Aspose\Cells\Cloud\Model\AbstractCalculationEngine
     */
    public function getCustomEngine()
    {
        return $this->container['custom_engine'];
    }

    /**
     * Sets custom_engine
     *
     *  The custom formula calculation engine to extend the default calculation engine of Aspose.Cells. 
     *
     * @return $this
     */
    public function setCustomEngine($custom_engine)
    {
        $this->container['custom_engine'] = $custom_engine;

        return $this;
    }
   /**
     * Gets calculation_monitor
     *
     * @return \Aspose\Cells\Cloud\Model\AbstractCalculationMonitor
     */
    public function getCalculationMonitor()
    {
        return $this->container['calculation_monitor'];
    }

    /**
     * Sets calculation_monitor
     *
     *  The monitor for user to track the progress of formula calculation. 
     *
     * @return $this
     */
    public function setCalculationMonitor($calculation_monitor)
    {
        $this->container['calculation_monitor'] = $calculation_monitor;

        return $this;
    }
   /**
     * Gets linked_data_sources
     *
     * @return \Aspose\Cells\Cloud\Model\Workbook[]
     */
    public function getLinkedDataSources()
    {
        return $this->container['linked_data_sources'];
    }

    /**
     * Sets linked_data_sources
     *
     *  Specifies the data sources for external links used in formulas. 
     *
     * @return $this
     */
    public function setLinkedDataSources($linked_data_sources)
    {
        $this->container['linked_data_sources'] = $linked_data_sources;

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
