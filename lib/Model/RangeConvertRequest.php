<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RangeConvertRequest.cs">
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

class RangeConvertRequest
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RangeConvertRequest';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'source' => '\Aspose\Cells\Cloud\Model\Range',
        'image_type' => 'string',
        'image_or_print_options' => '\Aspose\Cells\Cloud\Model\ImageOrPrintOptions',
        'page_setup' => '\Aspose\Cells\Cloud\Model\PageSetup'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'source' => null  ,
        'image_type' => null  ,
        'image_or_print_options' => null  ,
        'page_setup' => null  
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
         'source' => 'Source' ,
         'image_type' => 'ImageType' ,
         'image_or_print_options' => 'ImageOrPrintOptions' ,
         'page_setup' => 'PageSetup' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'source' => 'setSource' ,
        'image_type' => 'setImageType' ,
        'image_or_print_options' => 'setImageOrPrintOptions' ,
        'page_setup' => 'setPageSetup' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'source' => 'getSource' ,
        'image_type' => 'getImageType' ,
        'image_or_print_options' => 'getImageOrPrintOptions' ,
        'page_setup' => 'getPageSetup' 
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
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['image_type'] = isset($data['image_type']) ? $data['image_type'] : null;
        $this->container['image_or_print_options'] = isset($data['image_or_print_options']) ? $data['image_or_print_options'] : null;
        $this->container['page_setup'] = isset($data['page_setup']) ? $data['page_setup'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        if ($this->container['image_type'] === null) {
            $invalidProperties[] = "'image_type' can't be null";
        }
        if ($this->container['image_or_print_options'] === null) {
            $invalidProperties[] = "'image_or_print_options' can't be null";
        }
        if ($this->container['page_setup'] === null) {
            $invalidProperties[] = "'page_setup' can't be null";
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
        if ($this->container['source'] === null) {
                    return false;
                }
        if ($this->container['image_type'] === null) {
                    return false;
                }
        if ($this->container['image_or_print_options'] === null) {
                    return false;
                }
        if ($this->container['page_setup'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets source
     *
     * @return \Aspose\Cells\Cloud\Model\Range
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     *  Source range. 
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }
   /**
     * Gets image_type
     *
     * @return string
     */
    public function getImageType()
    {
        return $this->container['image_type'];
    }

    /**
     * Sets image_type
     *
     *  Target range.
     *
     * @return $this
     */
    public function setImageType($image_type)
    {
        $this->container['image_type'] = $image_type;

        return $this;
    }
   /**
     * Gets image_or_print_options
     *
     * @return \Aspose\Cells\Cloud\Model\ImageOrPrintOptions
     */
    public function getImageOrPrintOptions()
    {
        return $this->container['image_or_print_options'];
    }

    /**
     * Sets image_or_print_options
     *
     *  Represents the paste special options.            
     *
     * @return $this
     */
    public function setImageOrPrintOptions($image_or_print_options)
    {
        $this->container['image_or_print_options'] = $image_or_print_options;

        return $this;
    }
   /**
     * Gets page_setup
     *
     * @return \Aspose\Cells\Cloud\Model\PageSetup
     */
    public function getPageSetup()
    {
        return $this->container['page_setup'];
    }

    /**
     * Sets page_setup
     *
     *  
     *
     * @return $this
     */
    public function setPageSetup($page_setup)
    {
        $this->container['page_setup'] = $page_setup;

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
