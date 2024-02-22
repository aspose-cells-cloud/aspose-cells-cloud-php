<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Name.cs">
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

class Name
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Name';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'comment' => 'string',
        'worksheet_index' => 'int',
        'is_referred' => 'bool',
        'is_visible' => 'bool',
        'r1_c1_refers_to' => 'string',
        'refers_to' => 'string',
        'text' => 'string',
        'link' => '\Aspose\Cells\Cloud\Model\Link'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'comment' => null  ,
        'worksheet_index' => null  ,
        'is_referred' => null  ,
        'is_visible' => null  ,
        'r1_c1_refers_to' => null  ,
        'refers_to' => null  ,
        'text' => null  ,
        'link' => null  
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
         'comment' => 'Comment' ,
         'worksheet_index' => 'WorksheetIndex' ,
         'is_referred' => 'IsReferred' ,
         'is_visible' => 'IsVisible' ,
         'r1_c1_refers_to' => 'R1C1RefersTo' ,
         'refers_to' => 'RefersTo' ,
         'text' => 'Text' ,
         'link' => 'link' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comment' => 'setComment' ,
        'worksheet_index' => 'setWorksheetIndex' ,
        'is_referred' => 'setIsReferred' ,
        'is_visible' => 'setIsVisible' ,
        'r1_c1_refers_to' => 'setR1C1RefersTo' ,
        'refers_to' => 'setRefersTo' ,
        'text' => 'setText' ,
        'link' => 'setlink' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comment' => 'getComment' ,
        'worksheet_index' => 'getWorksheetIndex' ,
        'is_referred' => 'getIsReferred' ,
        'is_visible' => 'getIsVisible' ,
        'r1_c1_refers_to' => 'getR1C1RefersTo' ,
        'refers_to' => 'getRefersTo' ,
        'text' => 'getText' ,
        'link' => 'getlink' 
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
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['worksheet_index'] = isset($data['worksheet_index']) ? $data['worksheet_index'] : null;
        $this->container['is_referred'] = isset($data['is_referred']) ? $data['is_referred'] : null;
        $this->container['is_visible'] = isset($data['is_visible']) ? $data['is_visible'] : null;
        $this->container['r1_c1_refers_to'] = isset($data['r1_c1_refers_to']) ? $data['r1_c1_refers_to'] : null;
        $this->container['refers_to'] = isset($data['refers_to']) ? $data['refers_to'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['comment'] === null) {
            $invalidProperties[] = "'comment' can't be null";
        }
        if ($this->container['worksheet_index'] === null) {
            $invalidProperties[] = "'worksheet_index' can't be null";
        }
        if ($this->container['is_referred'] === null) {
            $invalidProperties[] = "'is_referred' can't be null";
        }
        if ($this->container['is_visible'] === null) {
            $invalidProperties[] = "'is_visible' can't be null";
        }
        if ($this->container['r1_c1_refers_to'] === null) {
            $invalidProperties[] = "'r1_c1_refers_to' can't be null";
        }
        if ($this->container['refers_to'] === null) {
            $invalidProperties[] = "'refers_to' can't be null";
        }
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }
        if ($this->container['link'] === null) {
            $invalidProperties[] = "'link' can't be null";
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
        if ($this->container['comment'] === null) {
                    return false;
                }
        if ($this->container['worksheet_index'] === null) {
                    return false;
                }
        if ($this->container['is_referred'] === null) {
                    return false;
                }
        if ($this->container['is_visible'] === null) {
                    return false;
                }
        if ($this->container['r1_c1_refers_to'] === null) {
                    return false;
                }
        if ($this->container['refers_to'] === null) {
                    return false;
                }
        if ($this->container['text'] === null) {
                    return false;
                }
        if ($this->container['link'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     *  Gets and sets the comment of the name.                        Only applies for Excel 2007.
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }
   /**
     * Gets worksheet_index
     *
     * @return int
     */
    public function getWorksheetIndex()
    {
        return $this->container['worksheet_index'];
    }

    /**
     * Sets worksheet_index
     *
     *  
     *
     * @return $this
     */
    public function setWorksheetIndex($worksheet_index)
    {
        $this->container['worksheet_index'] = $worksheet_index;

        return $this;
    }
   /**
     * Gets is_referred
     *
     * @return bool
     */
    public function getIsReferred()
    {
        return $this->container['is_referred'];
    }

    /**
     * Sets is_referred
     *
     *  Indicates whether this name is referred by other formulas.
     *
     * @return $this
     */
    public function setIsReferred($is_referred)
    {
        $this->container['is_referred'] = $is_referred;

        return $this;
    }
   /**
     * Gets is_visible
     *
     * @return bool
     */
    public function getIsVisible()
    {
        return $this->container['is_visible'];
    }

    /**
     * Sets is_visible
     *
     *  Indicates whether the name is visible.
     *
     * @return $this
     */
    public function setIsVisible($is_visible)
    {
        $this->container['is_visible'] = $is_visible;

        return $this;
    }
   /**
     * Gets r1_c1_refers_to
     *
     * @return string
     */
    public function getR1C1RefersTo()
    {
        return $this->container['r1_c1_refers_to'];
    }

    /**
     * Sets r1_c1_refers_to
     *
     *  Gets or sets a R1C1 reference of the .
     *
     * @return $this
     */
    public function setR1C1RefersTo($r1_c1_refers_to)
    {
        $this->container['r1_c1_refers_to'] = $r1_c1_refers_to;

        return $this;
    }
   /**
     * Gets refers_to
     *
     * @return string
     */
    public function getRefersTo()
    {
        return $this->container['refers_to'];
    }

    /**
     * Sets refers_to
     *
     *  Returns or sets the formula that the name is defined to refer to, beginning with an equal sign.
     *
     * @return $this
     */
    public function setRefersTo($refers_to)
    {
        $this->container['refers_to'] = $refers_to;

        return $this;
    }
   /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     *  Gets the name text of the object.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }
   /**
     * Gets link
     *
     * @return \Aspose\Cells\Cloud\Model\Link
     */
    public function getlink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     *  
     *
     * @return $this
     */
    public function setlink($link)
    {
        $this->container['link'] = $link;

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
