<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TrimContentOptions.cs">
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

class TrimContentOptions
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TrimContentOptions';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'data_source' => '\Aspose\Cells\Cloud\Model\DataSource',
        'file_info' => '\Aspose\Cells\Cloud\Model\FileInfo',
        'trim_content' => 'string',
        'trim_leading' => 'bool',
        'trim_trailing' => 'bool',
        'trim_space_between_word_to1' => 'bool',
        'trim_non_breaking_spaces' => 'bool',
        'remove_extra_line_breaks' => 'bool',
        'remove_all_line_breaks' => 'bool',
        'scope_options' => '\Aspose\Cells\Cloud\Model\ScopeOptions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'data_source' => null  ,
        'file_info' => null  ,
        'trim_content' => null  ,
        'trim_leading' => null  ,
        'trim_trailing' => null  ,
        'trim_space_between_word_to1' => null  ,
        'trim_non_breaking_spaces' => null  ,
        'remove_extra_line_breaks' => null  ,
        'remove_all_line_breaks' => null  ,
        'scope_options' => null  
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
         'data_source' => 'DataSource' ,
         'file_info' => 'FileInfo' ,
         'trim_content' => 'TrimContent' ,
         'trim_leading' => 'TrimLeading' ,
         'trim_trailing' => 'TrimTrailing' ,
         'trim_space_between_word_to1' => 'TrimSpaceBetweenWordTo1' ,
         'trim_non_breaking_spaces' => 'TrimNonBreakingSpaces' ,
         'remove_extra_line_breaks' => 'RemoveExtraLineBreaks' ,
         'remove_all_line_breaks' => 'RemoveAllLineBreaks' ,
         'scope_options' => 'ScopeOptions' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_source' => 'setDataSource' ,
        'file_info' => 'setFileInfo' ,
        'trim_content' => 'setTrimContent' ,
        'trim_leading' => 'setTrimLeading' ,
        'trim_trailing' => 'setTrimTrailing' ,
        'trim_space_between_word_to1' => 'setTrimSpaceBetweenWordTo1' ,
        'trim_non_breaking_spaces' => 'setTrimNonBreakingSpaces' ,
        'remove_extra_line_breaks' => 'setRemoveExtraLineBreaks' ,
        'remove_all_line_breaks' => 'setRemoveAllLineBreaks' ,
        'scope_options' => 'setScopeOptions' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_source' => 'getDataSource' ,
        'file_info' => 'getFileInfo' ,
        'trim_content' => 'getTrimContent' ,
        'trim_leading' => 'getTrimLeading' ,
        'trim_trailing' => 'getTrimTrailing' ,
        'trim_space_between_word_to1' => 'getTrimSpaceBetweenWordTo1' ,
        'trim_non_breaking_spaces' => 'getTrimNonBreakingSpaces' ,
        'remove_extra_line_breaks' => 'getRemoveExtraLineBreaks' ,
        'remove_all_line_breaks' => 'getRemoveAllLineBreaks' ,
        'scope_options' => 'getScopeOptions' 
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
        $this->container['data_source'] = isset($data['data_source']) ? $data['data_source'] : null;
        $this->container['file_info'] = isset($data['file_info']) ? $data['file_info'] : null;
        $this->container['trim_content'] = isset($data['trim_content']) ? $data['trim_content'] : null;
        $this->container['trim_leading'] = isset($data['trim_leading']) ? $data['trim_leading'] : null;
        $this->container['trim_trailing'] = isset($data['trim_trailing']) ? $data['trim_trailing'] : null;
        $this->container['trim_space_between_word_to1'] = isset($data['trim_space_between_word_to1']) ? $data['trim_space_between_word_to1'] : null;
        $this->container['trim_non_breaking_spaces'] = isset($data['trim_non_breaking_spaces']) ? $data['trim_non_breaking_spaces'] : null;
        $this->container['remove_extra_line_breaks'] = isset($data['remove_extra_line_breaks']) ? $data['remove_extra_line_breaks'] : null;
        $this->container['remove_all_line_breaks'] = isset($data['remove_all_line_breaks']) ? $data['remove_all_line_breaks'] : null;
        $this->container['scope_options'] = isset($data['scope_options']) ? $data['scope_options'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['data_source'] === null) {
            $invalidProperties[] = "'data_source' can't be null";
        }
        if ($this->container['file_info'] === null) {
            $invalidProperties[] = "'file_info' can't be null";
        }
        if ($this->container['trim_content'] === null) {
            $invalidProperties[] = "'trim_content' can't be null";
        }
        if ($this->container['trim_leading'] === null) {
            $invalidProperties[] = "'trim_leading' can't be null";
        }
        if ($this->container['trim_trailing'] === null) {
            $invalidProperties[] = "'trim_trailing' can't be null";
        }
        if ($this->container['trim_space_between_word_to1'] === null) {
            $invalidProperties[] = "'trim_space_between_word_to1' can't be null";
        }
        if ($this->container['trim_non_breaking_spaces'] === null) {
            $invalidProperties[] = "'trim_non_breaking_spaces' can't be null";
        }
        if ($this->container['remove_extra_line_breaks'] === null) {
            $invalidProperties[] = "'remove_extra_line_breaks' can't be null";
        }
        if ($this->container['remove_all_line_breaks'] === null) {
            $invalidProperties[] = "'remove_all_line_breaks' can't be null";
        }
        if ($this->container['scope_options'] === null) {
            $invalidProperties[] = "'scope_options' can't be null";
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
        if ($this->container['data_source'] === null) {
                    return false;
                }
        if ($this->container['file_info'] === null) {
                    return false;
                }
        if ($this->container['trim_content'] === null) {
                    return false;
                }
        if ($this->container['trim_leading'] === null) {
                    return false;
                }
        if ($this->container['trim_trailing'] === null) {
                    return false;
                }
        if ($this->container['trim_space_between_word_to1'] === null) {
                    return false;
                }
        if ($this->container['trim_non_breaking_spaces'] === null) {
                    return false;
                }
        if ($this->container['remove_extra_line_breaks'] === null) {
                    return false;
                }
        if ($this->container['remove_all_line_breaks'] === null) {
                    return false;
                }
        if ($this->container['scope_options'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets data_source
     *
     * @return \Aspose\Cells\Cloud\Model\DataSource
     */
    public function getDataSource()
    {
        return $this->container['data_source'];
    }

    /**
     * Sets data_source
     *
     *  
     *
     * @return $this
     */
    public function setDataSource($data_source)
    {
        $this->container['data_source'] = $data_source;

        return $this;
    }
   /**
     * Gets file_info
     *
     * @return \Aspose\Cells\Cloud\Model\FileInfo
     */
    public function getFileInfo()
    {
        return $this->container['file_info'];
    }

    /**
     * Sets file_info
     *
     *  
     *
     * @return $this
     */
    public function setFileInfo($file_info)
    {
        $this->container['file_info'] = $file_info;

        return $this;
    }
   /**
     * Gets trim_content
     *
     * @return string
     */
    public function getTrimContent()
    {
        return $this->container['trim_content'];
    }

    /**
     * Sets trim_content
     *
     *  
     *
     * @return $this
     */
    public function setTrimContent($trim_content)
    {
        $this->container['trim_content'] = $trim_content;

        return $this;
    }
   /**
     * Gets trim_leading
     *
     * @return bool
     */
    public function getTrimLeading()
    {
        return $this->container['trim_leading'];
    }

    /**
     * Sets trim_leading
     *
     *  
     *
     * @return $this
     */
    public function setTrimLeading($trim_leading)
    {
        $this->container['trim_leading'] = $trim_leading;

        return $this;
    }
   /**
     * Gets trim_trailing
     *
     * @return bool
     */
    public function getTrimTrailing()
    {
        return $this->container['trim_trailing'];
    }

    /**
     * Sets trim_trailing
     *
     *  
     *
     * @return $this
     */
    public function setTrimTrailing($trim_trailing)
    {
        $this->container['trim_trailing'] = $trim_trailing;

        return $this;
    }
   /**
     * Gets trim_space_between_word_to1
     *
     * @return bool
     */
    public function getTrimSpaceBetweenWordTo1()
    {
        return $this->container['trim_space_between_word_to1'];
    }

    /**
     * Sets trim_space_between_word_to1
     *
     *  
     *
     * @return $this
     */
    public function setTrimSpaceBetweenWordTo1($trim_space_between_word_to1)
    {
        $this->container['trim_space_between_word_to1'] = $trim_space_between_word_to1;

        return $this;
    }
   /**
     * Gets trim_non_breaking_spaces
     *
     * @return bool
     */
    public function getTrimNonBreakingSpaces()
    {
        return $this->container['trim_non_breaking_spaces'];
    }

    /**
     * Sets trim_non_breaking_spaces
     *
     *  
     *
     * @return $this
     */
    public function setTrimNonBreakingSpaces($trim_non_breaking_spaces)
    {
        $this->container['trim_non_breaking_spaces'] = $trim_non_breaking_spaces;

        return $this;
    }
   /**
     * Gets remove_extra_line_breaks
     *
     * @return bool
     */
    public function getRemoveExtraLineBreaks()
    {
        return $this->container['remove_extra_line_breaks'];
    }

    /**
     * Sets remove_extra_line_breaks
     *
     *  
     *
     * @return $this
     */
    public function setRemoveExtraLineBreaks($remove_extra_line_breaks)
    {
        $this->container['remove_extra_line_breaks'] = $remove_extra_line_breaks;

        return $this;
    }
   /**
     * Gets remove_all_line_breaks
     *
     * @return bool
     */
    public function getRemoveAllLineBreaks()
    {
        return $this->container['remove_all_line_breaks'];
    }

    /**
     * Sets remove_all_line_breaks
     *
     *  
     *
     * @return $this
     */
    public function setRemoveAllLineBreaks($remove_all_line_breaks)
    {
        $this->container['remove_all_line_breaks'] = $remove_all_line_breaks;

        return $this;
    }
   /**
     * Gets scope_options
     *
     * @return \Aspose\Cells\Cloud\Model\ScopeOptions
     */
    public function getScopeOptions()
    {
        return $this->container['scope_options'];
    }

    /**
     * Sets scope_options
     *
     *  
     *
     * @return $this
     */
    public function setScopeOptions($scope_options)
    {
        $this->container['scope_options'] = $scope_options;

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
