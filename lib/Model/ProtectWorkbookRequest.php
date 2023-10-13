<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ProtectWorkbookRequest.cs">
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

class ProtectWorkbookRequest implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProtectWorkbookRequest';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'aways_open_read_only' => 'bool',
        'encrypt_with_password' => 'string',
        'protect_current_sheet' => '\Aspose\Cells\Cloud\Model\Protection',
        'protect_workbook_structure' => 'string',
        'digital_signature' => '\Aspose\Cells\Cloud\Model\DigitalSignature',
        'mark_as_final' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'aways_open_read_only' => null  ,
        'encrypt_with_password' => null  ,
        'protect_current_sheet' => null  ,
        'protect_workbook_structure' => null  ,
        'digital_signature' => null  ,
        'mark_as_final' => null  
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
         'aways_open_read_only' => 'AwaysOpenReadOnly' ,
         'encrypt_with_password' => 'EncryptWithPassword' ,
         'protect_current_sheet' => 'ProtectCurrentSheet' ,
         'protect_workbook_structure' => 'ProtectWorkbookStructure' ,
         'digital_signature' => 'DigitalSignature' ,
         'mark_as_final' => 'MarkAsFinal' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aways_open_read_only' => 'setAwaysOpenReadOnly' ,
        'encrypt_with_password' => 'setEncryptWithPassword' ,
        'protect_current_sheet' => 'setProtectCurrentSheet' ,
        'protect_workbook_structure' => 'setProtectWorkbookStructure' ,
        'digital_signature' => 'setDigitalSignature' ,
        'mark_as_final' => 'setMarkAsFinal' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aways_open_read_only' => 'getAwaysOpenReadOnly' ,
        'encrypt_with_password' => 'getEncryptWithPassword' ,
        'protect_current_sheet' => 'getProtectCurrentSheet' ,
        'protect_workbook_structure' => 'getProtectWorkbookStructure' ,
        'digital_signature' => 'getDigitalSignature' ,
        'mark_as_final' => 'getMarkAsFinal' 
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
        $this->container['aways_open_read_only'] = isset($data['aways_open_read_only']) ? $data['aways_open_read_only'] : null;
        $this->container['encrypt_with_password'] = isset($data['encrypt_with_password']) ? $data['encrypt_with_password'] : null;
        $this->container['protect_current_sheet'] = isset($data['protect_current_sheet']) ? $data['protect_current_sheet'] : null;
        $this->container['protect_workbook_structure'] = isset($data['protect_workbook_structure']) ? $data['protect_workbook_structure'] : null;
        $this->container['digital_signature'] = isset($data['digital_signature']) ? $data['digital_signature'] : null;
        $this->container['mark_as_final'] = isset($data['mark_as_final']) ? $data['mark_as_final'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['aways_open_read_only'] === null) {
            $invalidProperties[] = "'aways_open_read_only' can't be null";
        }
        if ($this->container['encrypt_with_password'] === null) {
            $invalidProperties[] = "'encrypt_with_password' can't be null";
        }
        if ($this->container['protect_current_sheet'] === null) {
            $invalidProperties[] = "'protect_current_sheet' can't be null";
        }
        if ($this->container['protect_workbook_structure'] === null) {
            $invalidProperties[] = "'protect_workbook_structure' can't be null";
        }
        if ($this->container['digital_signature'] === null) {
            $invalidProperties[] = "'digital_signature' can't be null";
        }
        if ($this->container['mark_as_final'] === null) {
            $invalidProperties[] = "'mark_as_final' can't be null";
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
        if ($this->container['aways_open_read_only'] === null) {
                    return false;
                }
        if ($this->container['encrypt_with_password'] === null) {
                    return false;
                }
        if ($this->container['protect_current_sheet'] === null) {
                    return false;
                }
        if ($this->container['protect_workbook_structure'] === null) {
                    return false;
                }
        if ($this->container['digital_signature'] === null) {
                    return false;
                }
        if ($this->container['mark_as_final'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets aways_open_read_only
     *
     * @return bool
     */
    public function getAwaysOpenReadOnly()
    {
        return $this->container['aways_open_read_only'];
    }

    /**
     * Sets aways_open_read_only
     *
     *  Indicates aways open read-only.
     *
     * @return $this
     */
    public function setAwaysOpenReadOnly($aways_open_read_only)
    {
        $this->container['aways_open_read_only'] = $aways_open_read_only;

        return $this;
    }
   /**
     * Gets encrypt_with_password
     *
     * @return string
     */
    public function getEncryptWithPassword()
    {
        return $this->container['encrypt_with_password'];
    }

    /**
     * Sets encrypt_with_password
     *
     *  Indicates encrypt with password.
     *
     * @return $this
     */
    public function setEncryptWithPassword($encrypt_with_password)
    {
        $this->container['encrypt_with_password'] = $encrypt_with_password;

        return $this;
    }
   /**
     * Gets protect_current_sheet
     *
     * @return \Aspose\Cells\Cloud\Model\Protection
     */
    public function getProtectCurrentSheet()
    {
        return $this->container['protect_current_sheet'];
    }

    /**
     * Sets protect_current_sheet
     *
     *  Represents the various types of protection options available for a worksheet.            
     *
     * @return $this
     */
    public function setProtectCurrentSheet($protect_current_sheet)
    {
        $this->container['protect_current_sheet'] = $protect_current_sheet;

        return $this;
    }
   /**
     * Gets protect_workbook_structure
     *
     * @return string
     */
    public function getProtectWorkbookStructure()
    {
        return $this->container['protect_workbook_structure'];
    }

    /**
     * Sets protect_workbook_structure
     *
     *  Indicates protect workbook structure. All, Contents, Objects, Scenarios, Structure, Windows, and None.
     *
     * @return $this
     */
    public function setProtectWorkbookStructure($protect_workbook_structure)
    {
        $this->container['protect_workbook_structure'] = $protect_workbook_structure;

        return $this;
    }
   /**
     * Gets digital_signature
     *
     * @return \Aspose\Cells\Cloud\Model\DigitalSignature
     */
    public function getDigitalSignature()
    {
        return $this->container['digital_signature'];
    }

    /**
     * Sets digital_signature
     *
     *  Indicates signature in file.
     *
     * @return $this
     */
    public function setDigitalSignature($digital_signature)
    {
        $this->container['digital_signature'] = $digital_signature;

        return $this;
    }
   /**
     * Gets mark_as_final
     *
     * @return bool
     */
    public function getMarkAsFinal()
    {
        return $this->container['mark_as_final'];
    }

    /**
     * Sets mark_as_final
     *
     *  Indicates mark as final.
     *
     * @return $this
     */
    public function setMarkAsFinal($mark_as_final)
    {
        $this->container['mark_as_final'] = $mark_as_final;

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
