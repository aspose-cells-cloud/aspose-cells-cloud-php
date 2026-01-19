<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RemoveCharactersByCharacter.cs">
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

class RemoveCharactersByCharacter
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RemoveCharactersByCharacter';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'remove_text_method' => 'string',
        'remove_characters' => 'string[]',
        'remove_character_sets_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'remove_text_method' => null  ,
        'remove_characters' => null  ,
        'remove_character_sets_type' => null  
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
         'remove_text_method' => 'RemoveTextMethod' ,
         'remove_characters' => 'RemoveCharacters' ,
         'remove_character_sets_type' => 'RemoveCharacterSetsType' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'remove_text_method' => 'setRemoveTextMethod' ,
        'remove_characters' => 'setRemoveCharacters' ,
        'remove_character_sets_type' => 'setRemoveCharacterSetsType' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'remove_text_method' => 'getRemoveTextMethod' ,
        'remove_characters' => 'getRemoveCharacters' ,
        'remove_character_sets_type' => 'getRemoveCharacterSetsType' 
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
        $this->container['remove_text_method'] = isset($data['remove_text_method']) ? $data['remove_text_method'] : null;
        $this->container['remove_characters'] = isset($data['remove_characters']) ? $data['remove_characters'] : null;
        $this->container['remove_character_sets_type'] = isset($data['remove_character_sets_type']) ? $data['remove_character_sets_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['remove_text_method'] === null) {
            $invalidProperties[] = "'remove_text_method' can't be null";
        }
        if ($this->container['remove_characters'] === null) {
            $invalidProperties[] = "'remove_characters' can't be null";
        }
        if ($this->container['remove_character_sets_type'] === null) {
            $invalidProperties[] = "'remove_character_sets_type' can't be null";
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
        if ($this->container['remove_text_method'] === null) {
                    return false;
                }
        if ($this->container['remove_characters'] === null) {
                    return false;
                }
        if ($this->container['remove_character_sets_type'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets remove_text_method
     *
     * @return string
     */
    public function getRemoveTextMethod()
    {
        return $this->container['remove_text_method'];
    }

    /**
     * Sets remove_text_method
     *
     *  Property: "RemoveTextMethod" is serialized using a string representation of the enum value.
     *
     * @return $this
     */
    public function setRemoveTextMethod($remove_text_method)
    {
        $this->container['remove_text_method'] = $remove_text_method;

        return $this;
    }
   /**
     * Gets remove_characters
     *
     * @return string[]
     */
    public function getRemoveCharacters()
    {
        return $this->container['remove_characters'];
    }

    /**
     * Sets remove_characters
     *
     *  
     *
     * @return $this
     */
    public function setRemoveCharacters($remove_characters)
    {
        $this->container['remove_characters'] = $remove_characters;

        return $this;
    }
   /**
     * Gets remove_character_sets_type
     *
     * @return string
     */
    public function getRemoveCharacterSetsType()
    {
        return $this->container['remove_character_sets_type'];
    }

    /**
     * Sets remove_character_sets_type
     *
     *  
     *
     * @return $this
     */
    public function setRemoveCharacterSetsType($remove_character_sets_type)
    {
        $this->container['remove_character_sets_type'] = $remove_character_sets_type;

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
