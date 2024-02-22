<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FormulaSettings.cs">
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

class FormulaSettings
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FormulaSettings';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'calculate_on_open' => 'bool',
        'calculate_on_save' => 'bool',
        'force_full_calculation' => 'bool',
        'calculation_mode' => 'string',
        'calculation_id' => 'string',
        'enable_iterative_calculation' => 'bool',
        'max_iteration' => 'int',
        'max_change' => 'double',
        'precision_as_displayed' => 'bool',
        'enable_calculation_chain' => 'bool',
        'preserve_padding_spaces' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'calculate_on_open' => null  ,
        'calculate_on_save' => null  ,
        'force_full_calculation' => null  ,
        'calculation_mode' => null  ,
        'calculation_id' => null  ,
        'enable_iterative_calculation' => null  ,
        'max_iteration' => null  ,
        'max_change' => null  ,
        'precision_as_displayed' => null  ,
        'enable_calculation_chain' => null  ,
        'preserve_padding_spaces' => null  
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
         'calculate_on_open' => 'CalculateOnOpen' ,
         'calculate_on_save' => 'CalculateOnSave' ,
         'force_full_calculation' => 'ForceFullCalculation' ,
         'calculation_mode' => 'CalculationMode' ,
         'calculation_id' => 'CalculationId' ,
         'enable_iterative_calculation' => 'EnableIterativeCalculation' ,
         'max_iteration' => 'MaxIteration' ,
         'max_change' => 'MaxChange' ,
         'precision_as_displayed' => 'PrecisionAsDisplayed' ,
         'enable_calculation_chain' => 'EnableCalculationChain' ,
         'preserve_padding_spaces' => 'PreservePaddingSpaces' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'calculate_on_open' => 'setCalculateOnOpen' ,
        'calculate_on_save' => 'setCalculateOnSave' ,
        'force_full_calculation' => 'setForceFullCalculation' ,
        'calculation_mode' => 'setCalculationMode' ,
        'calculation_id' => 'setCalculationId' ,
        'enable_iterative_calculation' => 'setEnableIterativeCalculation' ,
        'max_iteration' => 'setMaxIteration' ,
        'max_change' => 'setMaxChange' ,
        'precision_as_displayed' => 'setPrecisionAsDisplayed' ,
        'enable_calculation_chain' => 'setEnableCalculationChain' ,
        'preserve_padding_spaces' => 'setPreservePaddingSpaces' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'calculate_on_open' => 'getCalculateOnOpen' ,
        'calculate_on_save' => 'getCalculateOnSave' ,
        'force_full_calculation' => 'getForceFullCalculation' ,
        'calculation_mode' => 'getCalculationMode' ,
        'calculation_id' => 'getCalculationId' ,
        'enable_iterative_calculation' => 'getEnableIterativeCalculation' ,
        'max_iteration' => 'getMaxIteration' ,
        'max_change' => 'getMaxChange' ,
        'precision_as_displayed' => 'getPrecisionAsDisplayed' ,
        'enable_calculation_chain' => 'getEnableCalculationChain' ,
        'preserve_padding_spaces' => 'getPreservePaddingSpaces' 
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
        $this->container['calculate_on_open'] = isset($data['calculate_on_open']) ? $data['calculate_on_open'] : null;
        $this->container['calculate_on_save'] = isset($data['calculate_on_save']) ? $data['calculate_on_save'] : null;
        $this->container['force_full_calculation'] = isset($data['force_full_calculation']) ? $data['force_full_calculation'] : null;
        $this->container['calculation_mode'] = isset($data['calculation_mode']) ? $data['calculation_mode'] : null;
        $this->container['calculation_id'] = isset($data['calculation_id']) ? $data['calculation_id'] : null;
        $this->container['enable_iterative_calculation'] = isset($data['enable_iterative_calculation']) ? $data['enable_iterative_calculation'] : null;
        $this->container['max_iteration'] = isset($data['max_iteration']) ? $data['max_iteration'] : null;
        $this->container['max_change'] = isset($data['max_change']) ? $data['max_change'] : null;
        $this->container['precision_as_displayed'] = isset($data['precision_as_displayed']) ? $data['precision_as_displayed'] : null;
        $this->container['enable_calculation_chain'] = isset($data['enable_calculation_chain']) ? $data['enable_calculation_chain'] : null;
        $this->container['preserve_padding_spaces'] = isset($data['preserve_padding_spaces']) ? $data['preserve_padding_spaces'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['calculate_on_open'] === null) {
            $invalidProperties[] = "'calculate_on_open' can't be null";
        }
        if ($this->container['calculate_on_save'] === null) {
            $invalidProperties[] = "'calculate_on_save' can't be null";
        }
        if ($this->container['force_full_calculation'] === null) {
            $invalidProperties[] = "'force_full_calculation' can't be null";
        }
        if ($this->container['calculation_mode'] === null) {
            $invalidProperties[] = "'calculation_mode' can't be null";
        }
        if ($this->container['calculation_id'] === null) {
            $invalidProperties[] = "'calculation_id' can't be null";
        }
        if ($this->container['enable_iterative_calculation'] === null) {
            $invalidProperties[] = "'enable_iterative_calculation' can't be null";
        }
        if ($this->container['max_iteration'] === null) {
            $invalidProperties[] = "'max_iteration' can't be null";
        }
        if ($this->container['max_change'] === null) {
            $invalidProperties[] = "'max_change' can't be null";
        }
        if ($this->container['precision_as_displayed'] === null) {
            $invalidProperties[] = "'precision_as_displayed' can't be null";
        }
        if ($this->container['enable_calculation_chain'] === null) {
            $invalidProperties[] = "'enable_calculation_chain' can't be null";
        }
        if ($this->container['preserve_padding_spaces'] === null) {
            $invalidProperties[] = "'preserve_padding_spaces' can't be null";
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
        if ($this->container['calculate_on_open'] === null) {
                    return false;
                }
        if ($this->container['calculate_on_save'] === null) {
                    return false;
                }
        if ($this->container['force_full_calculation'] === null) {
                    return false;
                }
        if ($this->container['calculation_mode'] === null) {
                    return false;
                }
        if ($this->container['calculation_id'] === null) {
                    return false;
                }
        if ($this->container['enable_iterative_calculation'] === null) {
                    return false;
                }
        if ($this->container['max_iteration'] === null) {
                    return false;
                }
        if ($this->container['max_change'] === null) {
                    return false;
                }
        if ($this->container['precision_as_displayed'] === null) {
                    return false;
                }
        if ($this->container['enable_calculation_chain'] === null) {
                    return false;
                }
        if ($this->container['preserve_padding_spaces'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets calculate_on_open
     *
     * @return bool
     */
    public function getCalculateOnOpen()
    {
        return $this->container['calculate_on_open'];
    }

    /**
     * Sets calculate_on_open
     *
     *  Indicates whether the application is required to perform a full calculation when the workbook is opened. 
     *
     * @return $this
     */
    public function setCalculateOnOpen($calculate_on_open)
    {
        $this->container['calculate_on_open'] = $calculate_on_open;

        return $this;
    }
   /**
     * Gets calculate_on_save
     *
     * @return bool
     */
    public function getCalculateOnSave()
    {
        return $this->container['calculate_on_save'];
    }

    /**
     * Sets calculate_on_save
     *
     *  Indicates whether recalculate the workbook before saving the document, when in manual calculation mode. 
     *
     * @return $this
     */
    public function setCalculateOnSave($calculate_on_save)
    {
        $this->container['calculate_on_save'] = $calculate_on_save;

        return $this;
    }
   /**
     * Gets force_full_calculation
     *
     * @return bool
     */
    public function getForceFullCalculation()
    {
        return $this->container['force_full_calculation'];
    }

    /**
     * Sets force_full_calculation
     *
     *  Indicates whether calculates all formulas every time when a calculation is triggered. 
     *
     * @return $this
     */
    public function setForceFullCalculation($force_full_calculation)
    {
        $this->container['force_full_calculation'] = $force_full_calculation;

        return $this;
    }
   /**
     * Gets calculation_mode
     *
     * @return string
     */
    public function getCalculationMode()
    {
        return $this->container['calculation_mode'];
    }

    /**
     * Sets calculation_mode
     *
     *  Gets or sets the mode for workbook calculation in ms excel. 
     *
     * @return $this
     */
    public function setCalculationMode($calculation_mode)
    {
        $this->container['calculation_mode'] = $calculation_mode;

        return $this;
    }
   /**
     * Gets calculation_id
     *
     * @return string
     */
    public function getCalculationId()
    {
        return $this->container['calculation_id'];
    }

    /**
     * Sets calculation_id
     *
     *  Specifies the version of the calculation engine used to calculate values in the workbook. 
     *
     * @return $this
     */
    public function setCalculationId($calculation_id)
    {
        $this->container['calculation_id'] = $calculation_id;

        return $this;
    }
   /**
     * Gets enable_iterative_calculation
     *
     * @return bool
     */
    public function getEnableIterativeCalculation()
    {
        return $this->container['enable_iterative_calculation'];
    }

    /**
     * Sets enable_iterative_calculation
     *
     *  Indicates whether enable iterative calculation to resolve circular references. 
     *
     * @return $this
     */
    public function setEnableIterativeCalculation($enable_iterative_calculation)
    {
        $this->container['enable_iterative_calculation'] = $enable_iterative_calculation;

        return $this;
    }
   /**
     * Gets max_iteration
     *
     * @return int
     */
    public function getMaxIteration()
    {
        return $this->container['max_iteration'];
    }

    /**
     * Sets max_iteration
     *
     *  The maximum iterations to resolve a circular reference. 
     *
     * @return $this
     */
    public function setMaxIteration($max_iteration)
    {
        $this->container['max_iteration'] = $max_iteration;

        return $this;
    }
   /**
     * Gets max_change
     *
     * @return double
     */
    public function getMaxChange()
    {
        return $this->container['max_change'];
    }

    /**
     * Sets max_change
     *
     *  The maximum change to resolve a circular reference. 
     *
     * @return $this
     */
    public function setMaxChange($max_change)
    {
        $this->container['max_change'] = $max_change;

        return $this;
    }
   /**
     * Gets precision_as_displayed
     *
     * @return bool
     */
    public function getPrecisionAsDisplayed()
    {
        return $this->container['precision_as_displayed'];
    }

    /**
     * Sets precision_as_displayed
     *
     *  Whether the precision of calculated result be set as they are displayed while calculating formulas 
     *
     * @return $this
     */
    public function setPrecisionAsDisplayed($precision_as_displayed)
    {
        $this->container['precision_as_displayed'] = $precision_as_displayed;

        return $this;
    }
   /**
     * Gets enable_calculation_chain
     *
     * @return bool
     */
    public function getEnableCalculationChain()
    {
        return $this->container['enable_calculation_chain'];
    }

    /**
     * Sets enable_calculation_chain
     *
     *  Whether enable calculation chain for formulas. Default is false. 
     *
     * @return $this
     */
    public function setEnableCalculationChain($enable_calculation_chain)
    {
        $this->container['enable_calculation_chain'] = $enable_calculation_chain;

        return $this;
    }
   /**
     * Gets preserve_padding_spaces
     *
     * @return bool
     */
    public function getPreservePaddingSpaces()
    {
        return $this->container['preserve_padding_spaces'];
    }

    /**
     * Sets preserve_padding_spaces
     *
     *  Indicates whether preserve those spaces and line breaks that are padded between formula tokens            while getting and setting formulas.            Default value is false. 
     *
     * @return $this
     */
    public function setPreservePaddingSpaces($preserve_padding_spaces)
    {
        $this->container['preserve_padding_spaces'] = $preserve_padding_spaces;

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
