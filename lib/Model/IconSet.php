<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="IconSet.cs">
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

class IconSet
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IconSet';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cf_icons' => '\Aspose\Cells\Cloud\Model\ConditionalFormattingIcon[]',
        'cfvos' => '\Aspose\Cells\Cloud\Model\ConditionalFormattingValue[]',
        'is_custom' => 'bool',
        'reverse' => 'bool',
        'show_value' => 'bool',
        'icon_set_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cf_icons' => null  ,
        'cfvos' => null  ,
        'is_custom' => null  ,
        'reverse' => null  ,
        'show_value' => null  ,
        'icon_set_type' => null  
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
         'cf_icons' => 'CfIcons' ,
         'cfvos' => 'Cfvos' ,
         'is_custom' => 'IsCustom' ,
         'reverse' => 'Reverse' ,
         'show_value' => 'ShowValue' ,
         'icon_set_type' => 'IconSetType' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cf_icons' => 'setCfIcons' ,
        'cfvos' => 'setCfvos' ,
        'is_custom' => 'setIsCustom' ,
        'reverse' => 'setReverse' ,
        'show_value' => 'setShowValue' ,
        'icon_set_type' => 'setIconSetType' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cf_icons' => 'getCfIcons' ,
        'cfvos' => 'getCfvos' ,
        'is_custom' => 'getIsCustom' ,
        'reverse' => 'getReverse' ,
        'show_value' => 'getShowValue' ,
        'icon_set_type' => 'getIconSetType' 
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
        $this->container['cf_icons'] = isset($data['cf_icons']) ? $data['cf_icons'] : null;
        $this->container['cfvos'] = isset($data['cfvos']) ? $data['cfvos'] : null;
        $this->container['is_custom'] = isset($data['is_custom']) ? $data['is_custom'] : null;
        $this->container['reverse'] = isset($data['reverse']) ? $data['reverse'] : null;
        $this->container['show_value'] = isset($data['show_value']) ? $data['show_value'] : null;
        $this->container['icon_set_type'] = isset($data['icon_set_type']) ? $data['icon_set_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['cf_icons'] === null) {
            $invalidProperties[] = "'cf_icons' can't be null";
        }
        if ($this->container['cfvos'] === null) {
            $invalidProperties[] = "'cfvos' can't be null";
        }
        if ($this->container['is_custom'] === null) {
            $invalidProperties[] = "'is_custom' can't be null";
        }
        if ($this->container['reverse'] === null) {
            $invalidProperties[] = "'reverse' can't be null";
        }
        if ($this->container['show_value'] === null) {
            $invalidProperties[] = "'show_value' can't be null";
        }
        if ($this->container['icon_set_type'] === null) {
            $invalidProperties[] = "'icon_set_type' can't be null";
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
        if ($this->container['cf_icons'] === null) {
                    return false;
                }
        if ($this->container['cfvos'] === null) {
                    return false;
                }
        if ($this->container['is_custom'] === null) {
                    return false;
                }
        if ($this->container['reverse'] === null) {
                    return false;
                }
        if ($this->container['show_value'] === null) {
                    return false;
                }
        if ($this->container['icon_set_type'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets cf_icons
     *
     * @return \Aspose\Cells\Cloud\Model\ConditionalFormattingIcon[]
     */
    public function getCfIcons()
    {
        return $this->container['cf_icons'];
    }

    /**
     * Sets cf_icons
     *
     *  Get the from the collection 
     *
     * @return $this
     */
    public function setCfIcons($cf_icons)
    {
        $this->container['cf_icons'] = $cf_icons;

        return $this;
    }
   /**
     * Gets cfvos
     *
     * @return \Aspose\Cells\Cloud\Model\ConditionalFormattingValue[]
     */
    public function getCfvos()
    {
        return $this->container['cfvos'];
    }

    /**
     * Sets cfvos
     *
     *  Get the CFValueObjects instance. 
     *
     * @return $this
     */
    public function setCfvos($cfvos)
    {
        $this->container['cfvos'] = $cfvos;

        return $this;
    }
   /**
     * Gets is_custom
     *
     * @return bool
     */
    public function getIsCustom()
    {
        return $this->container['is_custom'];
    }

    /**
     * Sets is_custom
     *
     *  Indicates whether the icon set is custom.            Default value is false. 
     *
     * @return $this
     */
    public function setIsCustom($is_custom)
    {
        $this->container['is_custom'] = $is_custom;

        return $this;
    }
   /**
     * Gets reverse
     *
     * @return bool
     */
    public function getReverse()
    {
        return $this->container['reverse'];
    }

    /**
     * Sets reverse
     *
     *  Get or set the flag indicating whether to reverses the default order of the icons in this icon set.            Default value is false. 
     *
     * @return $this
     */
    public function setReverse($reverse)
    {
        $this->container['reverse'] = $reverse;

        return $this;
    }
   /**
     * Gets show_value
     *
     * @return bool
     */
    public function getShowValue()
    {
        return $this->container['show_value'];
    }

    /**
     * Sets show_value
     *
     *  Get or set the flag indicating whether to show the values of the cells on which this icon set is applied.            Default value is true. 
     *
     * @return $this
     */
    public function setShowValue($show_value)
    {
        $this->container['show_value'] = $show_value;

        return $this;
    }
   /**
     * Gets icon_set_type
     *
     * @return string
     */
    public function getIconSetType()
    {
        return $this->container['icon_set_type'];
    }

    /**
     * Sets icon_set_type
     *
     *  Get or Set the icon set type to display.  Setting the type will auto check   if the current Cfvos's count is accord with the new type. If not accord,   old Cfvos will be cleaned and default Cfvos will be added.            
     *
     * @return $this
     */
    public function setIconSetType($icon_set_type)
    {
        $this->container['icon_set_type'] = $icon_set_type;

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
