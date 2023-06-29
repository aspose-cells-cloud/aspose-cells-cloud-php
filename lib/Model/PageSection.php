<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PageSection.cs">
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

class PageSection implements  ArrayAccess
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PageSection';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'section' => 'int',
        'context' => 'string',
        'picture' => 'string',
        'fisrt_page_context' => 'string',
        'even_page_context' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'section' => null  ,
        'context' => null  ,
        'picture' => null  ,
        'fisrt_page_context' => null  ,
        'even_page_context' => null  
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
         'section' => 'Section' ,
         'context' => 'Context' ,
         'picture' => 'Picture' ,
         'fisrt_page_context' => 'FisrtPageContext' ,
         'even_page_context' => 'EvenPageContext' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'section' => 'setSection' ,
        'context' => 'setContext' ,
        'picture' => 'setPicture' ,
        'fisrt_page_context' => 'setFisrtPageContext' ,
        'even_page_context' => 'setEvenPageContext' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'section' => 'getSection' ,
        'context' => 'getContext' ,
        'picture' => 'getPicture' ,
        'fisrt_page_context' => 'getFisrtPageContext' ,
        'even_page_context' => 'getEvenPageContext' 
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
        $this->container['section'] = isset($data['section']) ? $data['section'] : null;
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['picture'] = isset($data['picture']) ? $data['picture'] : null;
        $this->container['fisrt_page_context'] = isset($data['fisrt_page_context']) ? $data['fisrt_page_context'] : null;
        $this->container['even_page_context'] = isset($data['even_page_context']) ? $data['even_page_context'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['section'] === null) {
            $invalidProperties[] = "'section' can't be null";
        }
        if ($this->container['context'] === null) {
            $invalidProperties[] = "'context' can't be null";
        }
        if ($this->container['picture'] === null) {
            $invalidProperties[] = "'picture' can't be null";
        }
        if ($this->container['fisrt_page_context'] === null) {
            $invalidProperties[] = "'fisrt_page_context' can't be null";
        }
        if ($this->container['even_page_context'] === null) {
            $invalidProperties[] = "'even_page_context' can't be null";
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
        if ($this->container['section'] === null) {
                    return false;
                }
        if ($this->container['context'] === null) {
                    return false;
                }
        if ($this->container['picture'] === null) {
                    return false;
                }
        if ($this->container['fisrt_page_context'] === null) {
                    return false;
                }
        if ($this->container['even_page_context'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets section
     *
     * @return int
     */
    public function getSection()
    {
        return $this->container['section'];
    }

    /**
     * Sets section
     *
     *  0,1,2  left , middle ,right
     *
     * @return $this
     */
    public function setSection($section)
    {
        $this->container['section'] = $section;

        return $this;
    }
   /**
     * Gets context
     *
     * @return string
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     *  page context script            
     *
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

        return $this;
    }
   /**
     * Gets picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->container['picture'];
    }

    /**
     * Sets picture
     *
     *  
     *
     * @return $this
     */
    public function setPicture($picture)
    {
        $this->container['picture'] = $picture;

        return $this;
    }
   /**
     * Gets fisrt_page_context
     *
     * @return string
     */
    public function getFisrtPageContext()
    {
        return $this->container['fisrt_page_context'];
    }

    /**
     * Sets fisrt_page_context
     *
     *  fisrt page context script
     *
     * @return $this
     */
    public function setFisrtPageContext($fisrt_page_context)
    {
        $this->container['fisrt_page_context'] = $fisrt_page_context;

        return $this;
    }
   /**
     * Gets even_page_context
     *
     * @return string
     */
    public function getEvenPageContext()
    {
        return $this->container['even_page_context'];
    }

    /**
     * Sets even_page_context
     *
     *  Even page context script
     *
     * @return $this
     */
    public function setEvenPageContext($even_page_context)
    {
        $this->container['even_page_context'] = $even_page_context;

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
