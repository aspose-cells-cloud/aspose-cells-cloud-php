<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Comment.cs">
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

class Comment
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Comment';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cell_name' => 'string',
        'author' => 'string',
        'html_note' => 'string',
        'note' => 'string',
        'auto_size' => 'bool',
        'is_visible' => 'bool',
        'width' => 'int',
        'height' => 'int',
        'text_horizontal_alignment' => 'string',
        'text_orientation_type' => 'string',
        'text_vertical_alignment' => 'string',
        'link' => '\Aspose\Cells\Cloud\Model\Link'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cell_name' => null  ,
        'author' => null  ,
        'html_note' => null  ,
        'note' => null  ,
        'auto_size' => null  ,
        'is_visible' => null  ,
        'width' => null  ,
        'height' => null  ,
        'text_horizontal_alignment' => null  ,
        'text_orientation_type' => null  ,
        'text_vertical_alignment' => null  ,
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
         'cell_name' => 'CellName' ,
         'author' => 'Author' ,
         'html_note' => 'HtmlNote' ,
         'note' => 'Note' ,
         'auto_size' => 'AutoSize' ,
         'is_visible' => 'IsVisible' ,
         'width' => 'Width' ,
         'height' => 'Height' ,
         'text_horizontal_alignment' => 'TextHorizontalAlignment' ,
         'text_orientation_type' => 'TextOrientationType' ,
         'text_vertical_alignment' => 'TextVerticalAlignment' ,
         'link' => 'link' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cell_name' => 'setCellName' ,
        'author' => 'setAuthor' ,
        'html_note' => 'setHtmlNote' ,
        'note' => 'setNote' ,
        'auto_size' => 'setAutoSize' ,
        'is_visible' => 'setIsVisible' ,
        'width' => 'setWidth' ,
        'height' => 'setHeight' ,
        'text_horizontal_alignment' => 'setTextHorizontalAlignment' ,
        'text_orientation_type' => 'setTextOrientationType' ,
        'text_vertical_alignment' => 'setTextVerticalAlignment' ,
        'link' => 'setlink' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cell_name' => 'getCellName' ,
        'author' => 'getAuthor' ,
        'html_note' => 'getHtmlNote' ,
        'note' => 'getNote' ,
        'auto_size' => 'getAutoSize' ,
        'is_visible' => 'getIsVisible' ,
        'width' => 'getWidth' ,
        'height' => 'getHeight' ,
        'text_horizontal_alignment' => 'getTextHorizontalAlignment' ,
        'text_orientation_type' => 'getTextOrientationType' ,
        'text_vertical_alignment' => 'getTextVerticalAlignment' ,
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
        $this->container['cell_name'] = isset($data['cell_name']) ? $data['cell_name'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['html_note'] = isset($data['html_note']) ? $data['html_note'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['auto_size'] = isset($data['auto_size']) ? $data['auto_size'] : null;
        $this->container['is_visible'] = isset($data['is_visible']) ? $data['is_visible'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['text_horizontal_alignment'] = isset($data['text_horizontal_alignment']) ? $data['text_horizontal_alignment'] : null;
        $this->container['text_orientation_type'] = isset($data['text_orientation_type']) ? $data['text_orientation_type'] : null;
        $this->container['text_vertical_alignment'] = isset($data['text_vertical_alignment']) ? $data['text_vertical_alignment'] : null;
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
        if ($this->container['cell_name'] === null) {
            $invalidProperties[] = "'cell_name' can't be null";
        }
        if ($this->container['author'] === null) {
            $invalidProperties[] = "'author' can't be null";
        }
        if ($this->container['html_note'] === null) {
            $invalidProperties[] = "'html_note' can't be null";
        }
        if ($this->container['note'] === null) {
            $invalidProperties[] = "'note' can't be null";
        }
        if ($this->container['auto_size'] === null) {
            $invalidProperties[] = "'auto_size' can't be null";
        }
        if ($this->container['is_visible'] === null) {
            $invalidProperties[] = "'is_visible' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['text_horizontal_alignment'] === null) {
            $invalidProperties[] = "'text_horizontal_alignment' can't be null";
        }
        if ($this->container['text_orientation_type'] === null) {
            $invalidProperties[] = "'text_orientation_type' can't be null";
        }
        if ($this->container['text_vertical_alignment'] === null) {
            $invalidProperties[] = "'text_vertical_alignment' can't be null";
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
        if ($this->container['cell_name'] === null) {
                    return false;
                }
        if ($this->container['author'] === null) {
                    return false;
                }
        if ($this->container['html_note'] === null) {
                    return false;
                }
        if ($this->container['note'] === null) {
                    return false;
                }
        if ($this->container['auto_size'] === null) {
                    return false;
                }
        if ($this->container['is_visible'] === null) {
                    return false;
                }
        if ($this->container['width'] === null) {
                    return false;
                }
        if ($this->container['height'] === null) {
                    return false;
                }
        if ($this->container['text_horizontal_alignment'] === null) {
                    return false;
                }
        if ($this->container['text_orientation_type'] === null) {
                    return false;
                }
        if ($this->container['text_vertical_alignment'] === null) {
                    return false;
                }
        if ($this->container['link'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets cell_name
     *
     * @return string
     */
    public function getCellName()
    {
        return $this->container['cell_name'];
    }

    /**
     * Sets cell_name
     *
     *  Property: CellName attribute with XmlElement tag in the class.
     *
     * @return $this
     */
    public function setCellName($cell_name)
    {
        $this->container['cell_name'] = $cell_name;

        return $this;
    }
   /**
     * Gets author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     *  Gets and sets Name of the original comment author
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }
   /**
     * Gets html_note
     *
     * @return string
     */
    public function getHtmlNote()
    {
        return $this->container['html_note'];
    }

    /**
     * Sets html_note
     *
     *  Gets and sets the html string which contains data and some formats in this comment.
     *
     * @return $this
     */
    public function setHtmlNote($html_note)
    {
        $this->container['html_note'] = $html_note;

        return $this;
    }
   /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     *  Represents the content of comment.
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }
   /**
     * Gets auto_size
     *
     * @return bool
     */
    public function getAutoSize()
    {
        return $this->container['auto_size'];
    }

    /**
     * Sets auto_size
     *
     *  Indicates if size of comment is adjusted automatically according to its content.
     *
     * @return $this
     */
    public function setAutoSize($auto_size)
    {
        $this->container['auto_size'] = $auto_size;

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
     *  Represents if the comment is visible or not.
     *
     * @return $this
     */
    public function setIsVisible($is_visible)
    {
        $this->container['is_visible'] = $is_visible;

        return $this;
    }
   /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     *  Represents the width of the comment, in unit of pixels.
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }
   /**
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     *  Represents the Height of the comment, in unit of pixels.
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }
   /**
     * Gets text_horizontal_alignment
     *
     * @return string
     */
    public function getTextHorizontalAlignment()
    {
        return $this->container['text_horizontal_alignment'];
    }

    /**
     * Sets text_horizontal_alignment
     *
     *  Gets and sets the text horizontal alignment type of the comment.
     *
     * @return $this
     */
    public function setTextHorizontalAlignment($text_horizontal_alignment)
    {
        $this->container['text_horizontal_alignment'] = $text_horizontal_alignment;

        return $this;
    }
   /**
     * Gets text_orientation_type
     *
     * @return string
     */
    public function getTextOrientationType()
    {
        return $this->container['text_orientation_type'];
    }

    /**
     * Sets text_orientation_type
     *
     *  Gets and sets the text orientation type of the comment.
     *
     * @return $this
     */
    public function setTextOrientationType($text_orientation_type)
    {
        $this->container['text_orientation_type'] = $text_orientation_type;

        return $this;
    }
   /**
     * Gets text_vertical_alignment
     *
     * @return string
     */
    public function getTextVerticalAlignment()
    {
        return $this->container['text_vertical_alignment'];
    }

    /**
     * Sets text_vertical_alignment
     *
     *  Gets and sets the text vertical alignment type of the comment.
     *
     * @return $this
     */
    public function setTextVerticalAlignment($text_vertical_alignment)
    {
        $this->container['text_vertical_alignment'] = $text_vertical_alignment;

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
