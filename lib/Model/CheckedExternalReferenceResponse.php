<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CheckedExternalReferenceResponse.cs">
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

class CheckedExternalReferenceResponse
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CheckedExternalReferenceResponse';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reference_other_workbook' => 'bool',
        'reference_other_worksheet' => 'bool',
        'formulas' => 'string[]',
        'code' => 'int',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reference_other_workbook' => null  ,
        'reference_other_worksheet' => null  ,
        'formulas' => null  ,
        'code' => null  ,
        'status' => null  
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
         'reference_other_workbook' => 'ReferenceOtherWorkbook' ,
         'reference_other_worksheet' => 'ReferenceOtherWorksheet' ,
         'formulas' => 'Formulas' ,
         'code' => 'Code' ,
         'status' => 'Status' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reference_other_workbook' => 'setReferenceOtherWorkbook' ,
        'reference_other_worksheet' => 'setReferenceOtherWorksheet' ,
        'formulas' => 'setFormulas' ,
        'code' => 'setCode' ,
        'status' => 'setStatus' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reference_other_workbook' => 'getReferenceOtherWorkbook' ,
        'reference_other_worksheet' => 'getReferenceOtherWorksheet' ,
        'formulas' => 'getFormulas' ,
        'code' => 'getCode' ,
        'status' => 'getStatus' 
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
        $this->container['reference_other_workbook'] = isset($data['reference_other_workbook']) ? $data['reference_other_workbook'] : null;
        $this->container['reference_other_worksheet'] = isset($data['reference_other_worksheet']) ? $data['reference_other_worksheet'] : null;
        $this->container['formulas'] = isset($data['formulas']) ? $data['formulas'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['reference_other_workbook'] === null) {
            $invalidProperties[] = "'reference_other_workbook' can't be null";
        }
        if ($this->container['reference_other_worksheet'] === null) {
            $invalidProperties[] = "'reference_other_worksheet' can't be null";
        }
        if ($this->container['formulas'] === null) {
            $invalidProperties[] = "'formulas' can't be null";
        }
        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
        if ($this->container['reference_other_workbook'] === null) {
                    return false;
                }
        if ($this->container['reference_other_worksheet'] === null) {
                    return false;
                }
        if ($this->container['formulas'] === null) {
                    return false;
                }
        if ($this->container['code'] === null) {
                    return false;
                }
        if ($this->container['status'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets reference_other_workbook
     *
     * @return bool
     */
    public function getReferenceOtherWorkbook()
    {
        return $this->container['reference_other_workbook'];
    }

    /**
     * Sets reference_other_workbook
     *
     *  
     *
     * @return $this
     */
    public function setReferenceOtherWorkbook($reference_other_workbook)
    {
        $this->container['reference_other_workbook'] = $reference_other_workbook;

        return $this;
    }
   /**
     * Gets reference_other_worksheet
     *
     * @return bool
     */
    public function getReferenceOtherWorksheet()
    {
        return $this->container['reference_other_worksheet'];
    }

    /**
     * Sets reference_other_worksheet
     *
     *  
     *
     * @return $this
     */
    public function setReferenceOtherWorksheet($reference_other_worksheet)
    {
        $this->container['reference_other_worksheet'] = $reference_other_worksheet;

        return $this;
    }
   /**
     * Gets formulas
     *
     * @return string[]
     */
    public function getFormulas()
    {
        return $this->container['formulas'];
    }

    /**
     * Sets formulas
     *
     *  
     *
     * @return $this
     */
    public function setFormulas($formulas)
    {
        $this->container['formulas'] = $formulas;

        return $this;
    }
   /**
     * Gets code
     *
     * @return int
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     *  
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }
   /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     *  
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
