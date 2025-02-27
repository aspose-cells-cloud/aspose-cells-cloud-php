<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PdfSecurityOptions.cs">
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

class PdfSecurityOptions
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PdfSecurityOptions';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'annotations_permission' => 'bool',
        'assemble_document_permission' => 'bool',
        'extract_content_permission' => 'bool',
        'fill_forms_permission' => 'bool',
        'full_quality_print_permission' => 'bool',
        'modify_document_permission' => 'bool',
        'owner_password' => 'string',
        'print_permission' => 'bool',
        'user_password' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'annotations_permission' => null  ,
        'assemble_document_permission' => null  ,
        'extract_content_permission' => null  ,
        'fill_forms_permission' => null  ,
        'full_quality_print_permission' => null  ,
        'modify_document_permission' => null  ,
        'owner_password' => null  ,
        'print_permission' => null  ,
        'user_password' => null  
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
         'annotations_permission' => 'AnnotationsPermission' ,
         'assemble_document_permission' => 'AssembleDocumentPermission' ,
         'extract_content_permission' => 'ExtractContentPermission' ,
         'fill_forms_permission' => 'FillFormsPermission' ,
         'full_quality_print_permission' => 'FullQualityPrintPermission' ,
         'modify_document_permission' => 'ModifyDocumentPermission' ,
         'owner_password' => 'OwnerPassword' ,
         'print_permission' => 'PrintPermission' ,
         'user_password' => 'UserPassword' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'annotations_permission' => 'setAnnotationsPermission' ,
        'assemble_document_permission' => 'setAssembleDocumentPermission' ,
        'extract_content_permission' => 'setExtractContentPermission' ,
        'fill_forms_permission' => 'setFillFormsPermission' ,
        'full_quality_print_permission' => 'setFullQualityPrintPermission' ,
        'modify_document_permission' => 'setModifyDocumentPermission' ,
        'owner_password' => 'setOwnerPassword' ,
        'print_permission' => 'setPrintPermission' ,
        'user_password' => 'setUserPassword' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'annotations_permission' => 'getAnnotationsPermission' ,
        'assemble_document_permission' => 'getAssembleDocumentPermission' ,
        'extract_content_permission' => 'getExtractContentPermission' ,
        'fill_forms_permission' => 'getFillFormsPermission' ,
        'full_quality_print_permission' => 'getFullQualityPrintPermission' ,
        'modify_document_permission' => 'getModifyDocumentPermission' ,
        'owner_password' => 'getOwnerPassword' ,
        'print_permission' => 'getPrintPermission' ,
        'user_password' => 'getUserPassword' 
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
        $this->container['annotations_permission'] = isset($data['annotations_permission']) ? $data['annotations_permission'] : null;
        $this->container['assemble_document_permission'] = isset($data['assemble_document_permission']) ? $data['assemble_document_permission'] : null;
        $this->container['extract_content_permission'] = isset($data['extract_content_permission']) ? $data['extract_content_permission'] : null;
        $this->container['fill_forms_permission'] = isset($data['fill_forms_permission']) ? $data['fill_forms_permission'] : null;
        $this->container['full_quality_print_permission'] = isset($data['full_quality_print_permission']) ? $data['full_quality_print_permission'] : null;
        $this->container['modify_document_permission'] = isset($data['modify_document_permission']) ? $data['modify_document_permission'] : null;
        $this->container['owner_password'] = isset($data['owner_password']) ? $data['owner_password'] : null;
        $this->container['print_permission'] = isset($data['print_permission']) ? $data['print_permission'] : null;
        $this->container['user_password'] = isset($data['user_password']) ? $data['user_password'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['annotations_permission'] === null) {
            $invalidProperties[] = "'annotations_permission' can't be null";
        }
        if ($this->container['assemble_document_permission'] === null) {
            $invalidProperties[] = "'assemble_document_permission' can't be null";
        }
        if ($this->container['extract_content_permission'] === null) {
            $invalidProperties[] = "'extract_content_permission' can't be null";
        }
        if ($this->container['fill_forms_permission'] === null) {
            $invalidProperties[] = "'fill_forms_permission' can't be null";
        }
        if ($this->container['full_quality_print_permission'] === null) {
            $invalidProperties[] = "'full_quality_print_permission' can't be null";
        }
        if ($this->container['modify_document_permission'] === null) {
            $invalidProperties[] = "'modify_document_permission' can't be null";
        }
        if ($this->container['owner_password'] === null) {
            $invalidProperties[] = "'owner_password' can't be null";
        }
        if ($this->container['print_permission'] === null) {
            $invalidProperties[] = "'print_permission' can't be null";
        }
        if ($this->container['user_password'] === null) {
            $invalidProperties[] = "'user_password' can't be null";
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
        if ($this->container['annotations_permission'] === null) {
                    return false;
                }
        if ($this->container['assemble_document_permission'] === null) {
                    return false;
                }
        if ($this->container['extract_content_permission'] === null) {
                    return false;
                }
        if ($this->container['fill_forms_permission'] === null) {
                    return false;
                }
        if ($this->container['full_quality_print_permission'] === null) {
                    return false;
                }
        if ($this->container['modify_document_permission'] === null) {
                    return false;
                }
        if ($this->container['owner_password'] === null) {
                    return false;
                }
        if ($this->container['print_permission'] === null) {
                    return false;
                }
        if ($this->container['user_password'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets annotations_permission
     *
     * @return bool
     */
    public function getAnnotationsPermission()
    {
        return $this->container['annotations_permission'];
    }

    /**
     * Sets annotations_permission
     *
     *  Indicates whether to allow to add or modify text annotations, fill in interactive form fields.
     *
     * @return $this
     */
    public function setAnnotationsPermission($annotations_permission)
    {
        $this->container['annotations_permission'] = $annotations_permission;

        return $this;
    }
   /**
     * Gets assemble_document_permission
     *
     * @return bool
     */
    public function getAssembleDocumentPermission()
    {
        return $this->container['assemble_document_permission'];
    }

    /**
     * Sets assemble_document_permission
     *
     *  
     *
     * @return $this
     */
    public function setAssembleDocumentPermission($assemble_document_permission)
    {
        $this->container['assemble_document_permission'] = $assemble_document_permission;

        return $this;
    }
   /**
     * Gets extract_content_permission
     *
     * @return bool
     */
    public function getExtractContentPermission()
    {
        return $this->container['extract_content_permission'];
    }

    /**
     * Sets extract_content_permission
     *
     *  
     *
     * @return $this
     */
    public function setExtractContentPermission($extract_content_permission)
    {
        $this->container['extract_content_permission'] = $extract_content_permission;

        return $this;
    }
   /**
     * Gets fill_forms_permission
     *
     * @return bool
     */
    public function getFillFormsPermission()
    {
        return $this->container['fill_forms_permission'];
    }

    /**
     * Sets fill_forms_permission
     *
     *  
     *
     * @return $this
     */
    public function setFillFormsPermission($fill_forms_permission)
    {
        $this->container['fill_forms_permission'] = $fill_forms_permission;

        return $this;
    }
   /**
     * Gets full_quality_print_permission
     *
     * @return bool
     */
    public function getFullQualityPrintPermission()
    {
        return $this->container['full_quality_print_permission'];
    }

    /**
     * Sets full_quality_print_permission
     *
     *  
     *
     * @return $this
     */
    public function setFullQualityPrintPermission($full_quality_print_permission)
    {
        $this->container['full_quality_print_permission'] = $full_quality_print_permission;

        return $this;
    }
   /**
     * Gets modify_document_permission
     *
     * @return bool
     */
    public function getModifyDocumentPermission()
    {
        return $this->container['modify_document_permission'];
    }

    /**
     * Sets modify_document_permission
     *
     *  
     *
     * @return $this
     */
    public function setModifyDocumentPermission($modify_document_permission)
    {
        $this->container['modify_document_permission'] = $modify_document_permission;

        return $this;
    }
   /**
     * Gets owner_password
     *
     * @return string
     */
    public function getOwnerPassword()
    {
        return $this->container['owner_password'];
    }

    /**
     * Sets owner_password
     *
     *  
     *
     * @return $this
     */
    public function setOwnerPassword($owner_password)
    {
        $this->container['owner_password'] = $owner_password;

        return $this;
    }
   /**
     * Gets print_permission
     *
     * @return bool
     */
    public function getPrintPermission()
    {
        return $this->container['print_permission'];
    }

    /**
     * Sets print_permission
     *
     *  
     *
     * @return $this
     */
    public function setPrintPermission($print_permission)
    {
        $this->container['print_permission'] = $print_permission;

        return $this;
    }
   /**
     * Gets user_password
     *
     * @return string
     */
    public function getUserPassword()
    {
        return $this->container['user_password'];
    }

    /**
     * Sets user_password
     *
     *  
     *
     * @return $this
     */
    public function setUserPassword($user_password)
    {
        $this->container['user_password'] = $user_password;

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
