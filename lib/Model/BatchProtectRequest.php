<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BatchProtectRequest.cs">
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

class BatchProtectRequest
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BatchProtectRequest';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'source_folder' => 'string',
        'source_storage' => 'string',
        'match_condition' => '\Aspose\Cells\Cloud\Model\MatchConditionRequest',
        'protection_type' => 'string',
        'password' => 'string',
        'out_folder' => 'string',
        'out_storage' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'source_folder' => null  ,
        'source_storage' => null  ,
        'match_condition' => null  ,
        'protection_type' => null  ,
        'password' => null  ,
        'out_folder' => null  ,
        'out_storage' => null  
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
         'source_folder' => 'SourceFolder' ,
         'source_storage' => 'SourceStorage' ,
         'match_condition' => 'MatchCondition' ,
         'protection_type' => 'ProtectionType' ,
         'password' => 'Password' ,
         'out_folder' => 'OutFolder' ,
         'out_storage' => 'OutStorage' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'source_folder' => 'setSourceFolder' ,
        'source_storage' => 'setSourceStorage' ,
        'match_condition' => 'setMatchCondition' ,
        'protection_type' => 'setProtectionType' ,
        'password' => 'setPassword' ,
        'out_folder' => 'setOutFolder' ,
        'out_storage' => 'setOutStorage' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'source_folder' => 'getSourceFolder' ,
        'source_storage' => 'getSourceStorage' ,
        'match_condition' => 'getMatchCondition' ,
        'protection_type' => 'getProtectionType' ,
        'password' => 'getPassword' ,
        'out_folder' => 'getOutFolder' ,
        'out_storage' => 'getOutStorage' 
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
        $this->container['source_folder'] = isset($data['source_folder']) ? $data['source_folder'] : null;
        $this->container['source_storage'] = isset($data['source_storage']) ? $data['source_storage'] : null;
        $this->container['match_condition'] = isset($data['match_condition']) ? $data['match_condition'] : null;
        $this->container['protection_type'] = isset($data['protection_type']) ? $data['protection_type'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['out_folder'] = isset($data['out_folder']) ? $data['out_folder'] : null;
        $this->container['out_storage'] = isset($data['out_storage']) ? $data['out_storage'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['source_folder'] === null) {
            $invalidProperties[] = "'source_folder' can't be null";
        }
        if ($this->container['source_storage'] === null) {
            $invalidProperties[] = "'source_storage' can't be null";
        }
        if ($this->container['match_condition'] === null) {
            $invalidProperties[] = "'match_condition' can't be null";
        }
        if ($this->container['protection_type'] === null) {
            $invalidProperties[] = "'protection_type' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ($this->container['out_folder'] === null) {
            $invalidProperties[] = "'out_folder' can't be null";
        }
        if ($this->container['out_storage'] === null) {
            $invalidProperties[] = "'out_storage' can't be null";
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
        if ($this->container['source_folder'] === null) {
                    return false;
                }
        if ($this->container['source_storage'] === null) {
                    return false;
                }
        if ($this->container['match_condition'] === null) {
                    return false;
                }
        if ($this->container['protection_type'] === null) {
                    return false;
                }
        if ($this->container['password'] === null) {
                    return false;
                }
        if ($this->container['out_folder'] === null) {
                    return false;
                }
        if ($this->container['out_storage'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets source_folder
     *
     * @return string
     */
    public function getSourceFolder()
    {
        return $this->container['source_folder'];
    }

    /**
     * Sets source_folder
     *
     *  The directory stores files that need to format conversion.            
     *
     * @return $this
     */
    public function setSourceFolder($source_folder)
    {
        $this->container['source_folder'] = $source_folder;

        return $this;
    }
   /**
     * Gets source_storage
     *
     * @return string
     */
    public function getSourceStorage()
    {
        return $this->container['source_storage'];
    }

    /**
     * Sets source_storage
     *
     *  Aspose Cloud storage name
     *
     * @return $this
     */
    public function setSourceStorage($source_storage)
    {
        $this->container['source_storage'] = $source_storage;

        return $this;
    }
   /**
     * Gets match_condition
     *
     * @return \Aspose\Cells\Cloud\Model\MatchConditionRequest
     */
    public function getMatchCondition()
    {
        return $this->container['match_condition'];
    }

    /**
     * Sets match_condition
     *
     *  Indicates the match condition that needs to be processed for the file name.
     *
     * @return $this
     */
    public function setMatchCondition($match_condition)
    {
        $this->container['match_condition'] = $match_condition;

        return $this;
    }
   /**
     * Gets protection_type
     *
     * @return string
     */
    public function getProtectionType()
    {
        return $this->container['protection_type'];
    }

    /**
     * Sets protection_type
     *
     *  This property defines the protection type of an object.
     *
     * @return $this
     */
    public function setProtectionType($protection_type)
    {
        $this->container['protection_type'] = $protection_type;

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
     *              
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }
   /**
     * Gets out_folder
     *
     * @return string
     */
    public function getOutFolder()
    {
        return $this->container['out_folder'];
    }

    /**
     * Sets out_folder
     *
     *  The directory that stores files whose format conversion was successful.
     *
     * @return $this
     */
    public function setOutFolder($out_folder)
    {
        $this->container['out_folder'] = $out_folder;

        return $this;
    }
   /**
     * Gets out_storage
     *
     * @return string
     */
    public function getOutStorage()
    {
        return $this->container['out_storage'];
    }

    /**
     * Sets out_storage
     *
     *  Aspose Cloud storage name.
     *
     * @return $this
     */
    public function setOutStorage($out_storage)
    {
        $this->container['out_storage'] = $out_storage;

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
