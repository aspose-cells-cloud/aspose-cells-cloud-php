<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RemoveCharactersByPosition.cs">
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

class RemoveCharactersByPosition
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RemoveCharactersByPosition';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'the_first_n_characters' => 'int',
        'the_last_n_characters' => 'int',
        'all_characters_before_text' => 'string',
        'all_characters_after_text' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'the_first_n_characters' => null  ,
        'the_last_n_characters' => null  ,
        'all_characters_before_text' => null  ,
        'all_characters_after_text' => null  
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
         'the_first_n_characters' => 'TheFirstNCharacters' ,
         'the_last_n_characters' => 'TheLastNCharacters' ,
         'all_characters_before_text' => 'AllCharactersBeforeText' ,
         'all_characters_after_text' => 'AllCharactersAfterText' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'the_first_n_characters' => 'setTheFirstNCharacters' ,
        'the_last_n_characters' => 'setTheLastNCharacters' ,
        'all_characters_before_text' => 'setAllCharactersBeforeText' ,
        'all_characters_after_text' => 'setAllCharactersAfterText' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'the_first_n_characters' => 'getTheFirstNCharacters' ,
        'the_last_n_characters' => 'getTheLastNCharacters' ,
        'all_characters_before_text' => 'getAllCharactersBeforeText' ,
        'all_characters_after_text' => 'getAllCharactersAfterText' 
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
        $this->container['the_first_n_characters'] = isset($data['the_first_n_characters']) ? $data['the_first_n_characters'] : null;
        $this->container['the_last_n_characters'] = isset($data['the_last_n_characters']) ? $data['the_last_n_characters'] : null;
        $this->container['all_characters_before_text'] = isset($data['all_characters_before_text']) ? $data['all_characters_before_text'] : null;
        $this->container['all_characters_after_text'] = isset($data['all_characters_after_text']) ? $data['all_characters_after_text'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['the_first_n_characters'] === null) {
            $invalidProperties[] = "'the_first_n_characters' can't be null";
        }
        if ($this->container['the_last_n_characters'] === null) {
            $invalidProperties[] = "'the_last_n_characters' can't be null";
        }
        if ($this->container['all_characters_before_text'] === null) {
            $invalidProperties[] = "'all_characters_before_text' can't be null";
        }
        if ($this->container['all_characters_after_text'] === null) {
            $invalidProperties[] = "'all_characters_after_text' can't be null";
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
        if ($this->container['the_first_n_characters'] === null) {
                    return false;
                }
        if ($this->container['the_last_n_characters'] === null) {
                    return false;
                }
        if ($this->container['all_characters_before_text'] === null) {
                    return false;
                }
        if ($this->container['all_characters_after_text'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets the_first_n_characters
     *
     * @return int
     */
    public function getTheFirstNCharacters()
    {
        return $this->container['the_first_n_characters'];
    }

    /**
     * Sets the_first_n_characters
     *
     *  
     *
     * @return $this
     */
    public function setTheFirstNCharacters($the_first_n_characters)
    {
        $this->container['the_first_n_characters'] = $the_first_n_characters;

        return $this;
    }
   /**
     * Gets the_last_n_characters
     *
     * @return int
     */
    public function getTheLastNCharacters()
    {
        return $this->container['the_last_n_characters'];
    }

    /**
     * Sets the_last_n_characters
     *
     *  
     *
     * @return $this
     */
    public function setTheLastNCharacters($the_last_n_characters)
    {
        $this->container['the_last_n_characters'] = $the_last_n_characters;

        return $this;
    }
   /**
     * Gets all_characters_before_text
     *
     * @return string
     */
    public function getAllCharactersBeforeText()
    {
        return $this->container['all_characters_before_text'];
    }

    /**
     * Sets all_characters_before_text
     *
     *  
     *
     * @return $this
     */
    public function setAllCharactersBeforeText($all_characters_before_text)
    {
        $this->container['all_characters_before_text'] = $all_characters_before_text;

        return $this;
    }
   /**
     * Gets all_characters_after_text
     *
     * @return string
     */
    public function getAllCharactersAfterText()
    {
        return $this->container['all_characters_after_text'];
    }

    /**
     * Sets all_characters_after_text
     *
     *  
     *
     * @return $this
     */
    public function setAllCharactersAfterText($all_characters_after_text)
    {
        $this->container['all_characters_after_text'] = $all_characters_after_text;

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
