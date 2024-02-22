<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Trendline.cs">
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

class Trendline
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Trendline';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'link' => '\Aspose\Cells\Cloud\Model\Link',
        'backward' => 'double',
        'data_labels' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'display_equation' => 'bool',
        'display_r_squared' => 'bool',
        'forward' => 'double',
        'intercept' => 'double',
        'is_name_auto' => 'bool',
        'legend_entry' => '\Aspose\Cells\Cloud\Model\LinkElement',
        'name' => 'string',
        'order' => 'int',
        'period' => 'int',
        'type' => 'string',
        'begin_arrow_length' => 'string',
        'begin_arrow_width' => 'string',
        'begin_type' => 'string',
        'cap_type' => 'string',
        'color' => '\Aspose\Cells\Cloud\Model\Color',
        'compound_type' => 'string',
        'dash_type' => 'string',
        'end_arrow_length' => 'string',
        'end_arrow_width' => 'string',
        'end_type' => 'string',
        'gradient_fill' => '\Aspose\Cells\Cloud\Model\GradientFill',
        'is_auto' => 'bool',
        'is_automatic_color' => 'bool',
        'is_visible' => 'bool',
        'join_type' => 'string',
        'style' => 'string',
        'transparency' => 'double',
        'weight' => 'string',
        'weight_pt' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'link' => null  ,
        'backward' => null  ,
        'data_labels' => null  ,
        'display_equation' => null  ,
        'display_r_squared' => null  ,
        'forward' => null  ,
        'intercept' => null  ,
        'is_name_auto' => null  ,
        'legend_entry' => null  ,
        'name' => null  ,
        'order' => null  ,
        'period' => null  ,
        'type' => null  ,
        'begin_arrow_length' => null  ,
        'begin_arrow_width' => null  ,
        'begin_type' => null  ,
        'cap_type' => null  ,
        'color' => null  ,
        'compound_type' => null  ,
        'dash_type' => null  ,
        'end_arrow_length' => null  ,
        'end_arrow_width' => null  ,
        'end_type' => null  ,
        'gradient_fill' => null  ,
        'is_auto' => null  ,
        'is_automatic_color' => null  ,
        'is_visible' => null  ,
        'join_type' => null  ,
        'style' => null  ,
        'transparency' => null  ,
        'weight' => null  ,
        'weight_pt' => null  
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
         'link' => 'link' ,
         'backward' => 'Backward' ,
         'data_labels' => 'DataLabels' ,
         'display_equation' => 'DisplayEquation' ,
         'display_r_squared' => 'DisplayRSquared' ,
         'forward' => 'Forward' ,
         'intercept' => 'Intercept' ,
         'is_name_auto' => 'IsNameAuto' ,
         'legend_entry' => 'LegendEntry' ,
         'name' => 'Name' ,
         'order' => 'Order' ,
         'period' => 'Period' ,
         'type' => 'Type' ,
         'begin_arrow_length' => 'BeginArrowLength' ,
         'begin_arrow_width' => 'BeginArrowWidth' ,
         'begin_type' => 'BeginType' ,
         'cap_type' => 'CapType' ,
         'color' => 'Color' ,
         'compound_type' => 'CompoundType' ,
         'dash_type' => 'DashType' ,
         'end_arrow_length' => 'EndArrowLength' ,
         'end_arrow_width' => 'EndArrowWidth' ,
         'end_type' => 'EndType' ,
         'gradient_fill' => 'GradientFill' ,
         'is_auto' => 'IsAuto' ,
         'is_automatic_color' => 'IsAutomaticColor' ,
         'is_visible' => 'IsVisible' ,
         'join_type' => 'JoinType' ,
         'style' => 'Style' ,
         'transparency' => 'Transparency' ,
         'weight' => 'Weight' ,
         'weight_pt' => 'WeightPt' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'link' => 'setlink' ,
        'backward' => 'setBackward' ,
        'data_labels' => 'setDataLabels' ,
        'display_equation' => 'setDisplayEquation' ,
        'display_r_squared' => 'setDisplayRSquared' ,
        'forward' => 'setForward' ,
        'intercept' => 'setIntercept' ,
        'is_name_auto' => 'setIsNameAuto' ,
        'legend_entry' => 'setLegendEntry' ,
        'name' => 'setName' ,
        'order' => 'setOrder' ,
        'period' => 'setPeriod' ,
        'type' => 'setType' ,
        'begin_arrow_length' => 'setBeginArrowLength' ,
        'begin_arrow_width' => 'setBeginArrowWidth' ,
        'begin_type' => 'setBeginType' ,
        'cap_type' => 'setCapType' ,
        'color' => 'setColor' ,
        'compound_type' => 'setCompoundType' ,
        'dash_type' => 'setDashType' ,
        'end_arrow_length' => 'setEndArrowLength' ,
        'end_arrow_width' => 'setEndArrowWidth' ,
        'end_type' => 'setEndType' ,
        'gradient_fill' => 'setGradientFill' ,
        'is_auto' => 'setIsAuto' ,
        'is_automatic_color' => 'setIsAutomaticColor' ,
        'is_visible' => 'setIsVisible' ,
        'join_type' => 'setJoinType' ,
        'style' => 'setStyle' ,
        'transparency' => 'setTransparency' ,
        'weight' => 'setWeight' ,
        'weight_pt' => 'setWeightPt' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'link' => 'getlink' ,
        'backward' => 'getBackward' ,
        'data_labels' => 'getDataLabels' ,
        'display_equation' => 'getDisplayEquation' ,
        'display_r_squared' => 'getDisplayRSquared' ,
        'forward' => 'getForward' ,
        'intercept' => 'getIntercept' ,
        'is_name_auto' => 'getIsNameAuto' ,
        'legend_entry' => 'getLegendEntry' ,
        'name' => 'getName' ,
        'order' => 'getOrder' ,
        'period' => 'getPeriod' ,
        'type' => 'getType' ,
        'begin_arrow_length' => 'getBeginArrowLength' ,
        'begin_arrow_width' => 'getBeginArrowWidth' ,
        'begin_type' => 'getBeginType' ,
        'cap_type' => 'getCapType' ,
        'color' => 'getColor' ,
        'compound_type' => 'getCompoundType' ,
        'dash_type' => 'getDashType' ,
        'end_arrow_length' => 'getEndArrowLength' ,
        'end_arrow_width' => 'getEndArrowWidth' ,
        'end_type' => 'getEndType' ,
        'gradient_fill' => 'getGradientFill' ,
        'is_auto' => 'getIsAuto' ,
        'is_automatic_color' => 'getIsAutomaticColor' ,
        'is_visible' => 'getIsVisible' ,
        'join_type' => 'getJoinType' ,
        'style' => 'getStyle' ,
        'transparency' => 'getTransparency' ,
        'weight' => 'getWeight' ,
        'weight_pt' => 'getWeightPt' 
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
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['backward'] = isset($data['backward']) ? $data['backward'] : null;
        $this->container['data_labels'] = isset($data['data_labels']) ? $data['data_labels'] : null;
        $this->container['display_equation'] = isset($data['display_equation']) ? $data['display_equation'] : null;
        $this->container['display_r_squared'] = isset($data['display_r_squared']) ? $data['display_r_squared'] : null;
        $this->container['forward'] = isset($data['forward']) ? $data['forward'] : null;
        $this->container['intercept'] = isset($data['intercept']) ? $data['intercept'] : null;
        $this->container['is_name_auto'] = isset($data['is_name_auto']) ? $data['is_name_auto'] : null;
        $this->container['legend_entry'] = isset($data['legend_entry']) ? $data['legend_entry'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['begin_arrow_length'] = isset($data['begin_arrow_length']) ? $data['begin_arrow_length'] : null;
        $this->container['begin_arrow_width'] = isset($data['begin_arrow_width']) ? $data['begin_arrow_width'] : null;
        $this->container['begin_type'] = isset($data['begin_type']) ? $data['begin_type'] : null;
        $this->container['cap_type'] = isset($data['cap_type']) ? $data['cap_type'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['compound_type'] = isset($data['compound_type']) ? $data['compound_type'] : null;
        $this->container['dash_type'] = isset($data['dash_type']) ? $data['dash_type'] : null;
        $this->container['end_arrow_length'] = isset($data['end_arrow_length']) ? $data['end_arrow_length'] : null;
        $this->container['end_arrow_width'] = isset($data['end_arrow_width']) ? $data['end_arrow_width'] : null;
        $this->container['end_type'] = isset($data['end_type']) ? $data['end_type'] : null;
        $this->container['gradient_fill'] = isset($data['gradient_fill']) ? $data['gradient_fill'] : null;
        $this->container['is_auto'] = isset($data['is_auto']) ? $data['is_auto'] : null;
        $this->container['is_automatic_color'] = isset($data['is_automatic_color']) ? $data['is_automatic_color'] : null;
        $this->container['is_visible'] = isset($data['is_visible']) ? $data['is_visible'] : null;
        $this->container['join_type'] = isset($data['join_type']) ? $data['join_type'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
        $this->container['transparency'] = isset($data['transparency']) ? $data['transparency'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['weight_pt'] = isset($data['weight_pt']) ? $data['weight_pt'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['link'] === null) {
            $invalidProperties[] = "'link' can't be null";
        }
        if ($this->container['backward'] === null) {
            $invalidProperties[] = "'backward' can't be null";
        }
        if ($this->container['data_labels'] === null) {
            $invalidProperties[] = "'data_labels' can't be null";
        }
        if ($this->container['display_equation'] === null) {
            $invalidProperties[] = "'display_equation' can't be null";
        }
        if ($this->container['display_r_squared'] === null) {
            $invalidProperties[] = "'display_r_squared' can't be null";
        }
        if ($this->container['forward'] === null) {
            $invalidProperties[] = "'forward' can't be null";
        }
        if ($this->container['intercept'] === null) {
            $invalidProperties[] = "'intercept' can't be null";
        }
        if ($this->container['is_name_auto'] === null) {
            $invalidProperties[] = "'is_name_auto' can't be null";
        }
        if ($this->container['legend_entry'] === null) {
            $invalidProperties[] = "'legend_entry' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        if ($this->container['period'] === null) {
            $invalidProperties[] = "'period' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['begin_arrow_length'] === null) {
            $invalidProperties[] = "'begin_arrow_length' can't be null";
        }
        if ($this->container['begin_arrow_width'] === null) {
            $invalidProperties[] = "'begin_arrow_width' can't be null";
        }
        if ($this->container['begin_type'] === null) {
            $invalidProperties[] = "'begin_type' can't be null";
        }
        if ($this->container['cap_type'] === null) {
            $invalidProperties[] = "'cap_type' can't be null";
        }
        if ($this->container['color'] === null) {
            $invalidProperties[] = "'color' can't be null";
        }
        if ($this->container['compound_type'] === null) {
            $invalidProperties[] = "'compound_type' can't be null";
        }
        if ($this->container['dash_type'] === null) {
            $invalidProperties[] = "'dash_type' can't be null";
        }
        if ($this->container['end_arrow_length'] === null) {
            $invalidProperties[] = "'end_arrow_length' can't be null";
        }
        if ($this->container['end_arrow_width'] === null) {
            $invalidProperties[] = "'end_arrow_width' can't be null";
        }
        if ($this->container['end_type'] === null) {
            $invalidProperties[] = "'end_type' can't be null";
        }
        if ($this->container['gradient_fill'] === null) {
            $invalidProperties[] = "'gradient_fill' can't be null";
        }
        if ($this->container['is_auto'] === null) {
            $invalidProperties[] = "'is_auto' can't be null";
        }
        if ($this->container['is_automatic_color'] === null) {
            $invalidProperties[] = "'is_automatic_color' can't be null";
        }
        if ($this->container['is_visible'] === null) {
            $invalidProperties[] = "'is_visible' can't be null";
        }
        if ($this->container['join_type'] === null) {
            $invalidProperties[] = "'join_type' can't be null";
        }
        if ($this->container['style'] === null) {
            $invalidProperties[] = "'style' can't be null";
        }
        if ($this->container['transparency'] === null) {
            $invalidProperties[] = "'transparency' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
        if ($this->container['weight_pt'] === null) {
            $invalidProperties[] = "'weight_pt' can't be null";
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
        if ($this->container['link'] === null) {
                    return false;
                }
        if ($this->container['backward'] === null) {
                    return false;
                }
        if ($this->container['data_labels'] === null) {
                    return false;
                }
        if ($this->container['display_equation'] === null) {
                    return false;
                }
        if ($this->container['display_r_squared'] === null) {
                    return false;
                }
        if ($this->container['forward'] === null) {
                    return false;
                }
        if ($this->container['intercept'] === null) {
                    return false;
                }
        if ($this->container['is_name_auto'] === null) {
                    return false;
                }
        if ($this->container['legend_entry'] === null) {
                    return false;
                }
        if ($this->container['name'] === null) {
                    return false;
                }
        if ($this->container['order'] === null) {
                    return false;
                }
        if ($this->container['period'] === null) {
                    return false;
                }
        if ($this->container['type'] === null) {
                    return false;
                }
        if ($this->container['begin_arrow_length'] === null) {
                    return false;
                }
        if ($this->container['begin_arrow_width'] === null) {
                    return false;
                }
        if ($this->container['begin_type'] === null) {
                    return false;
                }
        if ($this->container['cap_type'] === null) {
                    return false;
                }
        if ($this->container['color'] === null) {
                    return false;
                }
        if ($this->container['compound_type'] === null) {
                    return false;
                }
        if ($this->container['dash_type'] === null) {
                    return false;
                }
        if ($this->container['end_arrow_length'] === null) {
                    return false;
                }
        if ($this->container['end_arrow_width'] === null) {
                    return false;
                }
        if ($this->container['end_type'] === null) {
                    return false;
                }
        if ($this->container['gradient_fill'] === null) {
                    return false;
                }
        if ($this->container['is_auto'] === null) {
                    return false;
                }
        if ($this->container['is_automatic_color'] === null) {
                    return false;
                }
        if ($this->container['is_visible'] === null) {
                    return false;
                }
        if ($this->container['join_type'] === null) {
                    return false;
                }
        if ($this->container['style'] === null) {
                    return false;
                }
        if ($this->container['transparency'] === null) {
                    return false;
                }
        if ($this->container['weight'] === null) {
                    return false;
                }
        if ($this->container['weight_pt'] === null) {
                    return false;
                }
        return true;
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
     * Gets backward
     *
     * @return double
     */
    public function getBackward()
    {
        return $this->container['backward'];
    }

    /**
     * Sets backward
     *
     *  Returns or sets the number of periods (or units on a scatter chart) that the trendline extends backward.                         The number of periods must be greater than or equal to zero.                        If the chart type is column ,the number of periods must be between 0 and 0.5
     *
     * @return $this
     */
    public function setBackward($backward)
    {
        $this->container['backward'] = $backward;

        return $this;
    }
   /**
     * Gets data_labels
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getDataLabels()
    {
        return $this->container['data_labels'];
    }

    /**
     * Sets data_labels
     *
     *  Represents the DataLabels object for the specified series.
     *
     * @return $this
     */
    public function setDataLabels($data_labels)
    {
        $this->container['data_labels'] = $data_labels;

        return $this;
    }
   /**
     * Gets display_equation
     *
     * @return bool
     */
    public function getDisplayEquation()
    {
        return $this->container['display_equation'];
    }

    /**
     * Sets display_equation
     *
     *  Represents if the equation for the trendline is displayed on the chart (in the same data label as the R-squared value). Setting this property to True automatically turns on data labels.
     *
     * @return $this
     */
    public function setDisplayEquation($display_equation)
    {
        $this->container['display_equation'] = $display_equation;

        return $this;
    }
   /**
     * Gets display_r_squared
     *
     * @return bool
     */
    public function getDisplayRSquared()
    {
        return $this->container['display_r_squared'];
    }

    /**
     * Sets display_r_squared
     *
     *  Represents if the R-squared value of the trendline is displayed on the chart (in the same data label as the equation). Setting this property to True automatically turns on data labels.
     *
     * @return $this
     */
    public function setDisplayRSquared($display_r_squared)
    {
        $this->container['display_r_squared'] = $display_r_squared;

        return $this;
    }
   /**
     * Gets forward
     *
     * @return double
     */
    public function getForward()
    {
        return $this->container['forward'];
    }

    /**
     * Sets forward
     *
     *  Returns or sets the number of periods (or units on a scatter chart) that the trendline extends forward.                        The number of periods must be greater than or equal to zero.
     *
     * @return $this
     */
    public function setForward($forward)
    {
        $this->container['forward'] = $forward;

        return $this;
    }
   /**
     * Gets intercept
     *
     * @return double
     */
    public function getIntercept()
    {
        return $this->container['intercept'];
    }

    /**
     * Sets intercept
     *
     *  Returns or sets the point where the trendline crosses the value axis.
     *
     * @return $this
     */
    public function setIntercept($intercept)
    {
        $this->container['intercept'] = $intercept;

        return $this;
    }
   /**
     * Gets is_name_auto
     *
     * @return bool
     */
    public function getIsNameAuto()
    {
        return $this->container['is_name_auto'];
    }

    /**
     * Sets is_name_auto
     *
     *  Returns if Microsoft Excel automatically determines the name of the trendline.
     *
     * @return $this
     */
    public function setIsNameAuto($is_name_auto)
    {
        $this->container['is_name_auto'] = $is_name_auto;

        return $this;
    }
   /**
     * Gets legend_entry
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement
     */
    public function getLegendEntry()
    {
        return $this->container['legend_entry'];
    }

    /**
     * Sets legend_entry
     *
     *  Gets the legend entry according to this trendline
     *
     * @return $this
     */
    public function setLegendEntry($legend_entry)
    {
        $this->container['legend_entry'] = $legend_entry;

        return $this;
    }
   /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     *  Returns the name of the trendline.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }
   /**
     * Gets order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     *  Returns or sets the trendline order (an integer greater than 1) when the trendline type is Polynomial.                         The order must be between 2 and 6.
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }
   /**
     * Gets period
     *
     * @return int
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     *  Returns or sets the period for the moving-average trendline.
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }
   /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     *  Returns the trendline type.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }
   /**
     * Gets begin_arrow_length
     *
     * @return string
     */
    public function getBeginArrowLength()
    {
        return $this->container['begin_arrow_length'];
    }

    /**
     * Sets begin_arrow_length
     *
     *  
     *
     * @return $this
     */
    public function setBeginArrowLength($begin_arrow_length)
    {
        $this->container['begin_arrow_length'] = $begin_arrow_length;

        return $this;
    }
   /**
     * Gets begin_arrow_width
     *
     * @return string
     */
    public function getBeginArrowWidth()
    {
        return $this->container['begin_arrow_width'];
    }

    /**
     * Sets begin_arrow_width
     *
     *  
     *
     * @return $this
     */
    public function setBeginArrowWidth($begin_arrow_width)
    {
        $this->container['begin_arrow_width'] = $begin_arrow_width;

        return $this;
    }
   /**
     * Gets begin_type
     *
     * @return string
     */
    public function getBeginType()
    {
        return $this->container['begin_type'];
    }

    /**
     * Sets begin_type
     *
     *  
     *
     * @return $this
     */
    public function setBeginType($begin_type)
    {
        $this->container['begin_type'] = $begin_type;

        return $this;
    }
   /**
     * Gets cap_type
     *
     * @return string
     */
    public function getCapType()
    {
        return $this->container['cap_type'];
    }

    /**
     * Sets cap_type
     *
     *  
     *
     * @return $this
     */
    public function setCapType($cap_type)
    {
        $this->container['cap_type'] = $cap_type;

        return $this;
    }
   /**
     * Gets color
     *
     * @return \Aspose\Cells\Cloud\Model\Color
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     *  
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }
   /**
     * Gets compound_type
     *
     * @return string
     */
    public function getCompoundType()
    {
        return $this->container['compound_type'];
    }

    /**
     * Sets compound_type
     *
     *  
     *
     * @return $this
     */
    public function setCompoundType($compound_type)
    {
        $this->container['compound_type'] = $compound_type;

        return $this;
    }
   /**
     * Gets dash_type
     *
     * @return string
     */
    public function getDashType()
    {
        return $this->container['dash_type'];
    }

    /**
     * Sets dash_type
     *
     *  
     *
     * @return $this
     */
    public function setDashType($dash_type)
    {
        $this->container['dash_type'] = $dash_type;

        return $this;
    }
   /**
     * Gets end_arrow_length
     *
     * @return string
     */
    public function getEndArrowLength()
    {
        return $this->container['end_arrow_length'];
    }

    /**
     * Sets end_arrow_length
     *
     *  
     *
     * @return $this
     */
    public function setEndArrowLength($end_arrow_length)
    {
        $this->container['end_arrow_length'] = $end_arrow_length;

        return $this;
    }
   /**
     * Gets end_arrow_width
     *
     * @return string
     */
    public function getEndArrowWidth()
    {
        return $this->container['end_arrow_width'];
    }

    /**
     * Sets end_arrow_width
     *
     *  
     *
     * @return $this
     */
    public function setEndArrowWidth($end_arrow_width)
    {
        $this->container['end_arrow_width'] = $end_arrow_width;

        return $this;
    }
   /**
     * Gets end_type
     *
     * @return string
     */
    public function getEndType()
    {
        return $this->container['end_type'];
    }

    /**
     * Sets end_type
     *
     *  
     *
     * @return $this
     */
    public function setEndType($end_type)
    {
        $this->container['end_type'] = $end_type;

        return $this;
    }
   /**
     * Gets gradient_fill
     *
     * @return \Aspose\Cells\Cloud\Model\GradientFill
     */
    public function getGradientFill()
    {
        return $this->container['gradient_fill'];
    }

    /**
     * Sets gradient_fill
     *
     *  
     *
     * @return $this
     */
    public function setGradientFill($gradient_fill)
    {
        $this->container['gradient_fill'] = $gradient_fill;

        return $this;
    }
   /**
     * Gets is_auto
     *
     * @return bool
     */
    public function getIsAuto()
    {
        return $this->container['is_auto'];
    }

    /**
     * Sets is_auto
     *
     *  
     *
     * @return $this
     */
    public function setIsAuto($is_auto)
    {
        $this->container['is_auto'] = $is_auto;

        return $this;
    }
   /**
     * Gets is_automatic_color
     *
     * @return bool
     */
    public function getIsAutomaticColor()
    {
        return $this->container['is_automatic_color'];
    }

    /**
     * Sets is_automatic_color
     *
     *  
     *
     * @return $this
     */
    public function setIsAutomaticColor($is_automatic_color)
    {
        $this->container['is_automatic_color'] = $is_automatic_color;

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
     *  
     *
     * @return $this
     */
    public function setIsVisible($is_visible)
    {
        $this->container['is_visible'] = $is_visible;

        return $this;
    }
   /**
     * Gets join_type
     *
     * @return string
     */
    public function getJoinType()
    {
        return $this->container['join_type'];
    }

    /**
     * Sets join_type
     *
     *  
     *
     * @return $this
     */
    public function setJoinType($join_type)
    {
        $this->container['join_type'] = $join_type;

        return $this;
    }
   /**
     * Gets style
     *
     * @return string
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style
     *
     *  
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $this->container['style'] = $style;

        return $this;
    }
   /**
     * Gets transparency
     *
     * @return double
     */
    public function getTransparency()
    {
        return $this->container['transparency'];
    }

    /**
     * Sets transparency
     *
     *  
     *
     * @return $this
     */
    public function setTransparency($transparency)
    {
        $this->container['transparency'] = $transparency;

        return $this;
    }
   /**
     * Gets weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     *  
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }
   /**
     * Gets weight_pt
     *
     * @return double
     */
    public function getWeightPt()
    {
        return $this->container['weight_pt'];
    }

    /**
     * Sets weight_pt
     *
     *  
     *
     * @return $this
     */
    public function setWeightPt($weight_pt)
    {
        $this->container['weight_pt'] = $weight_pt;

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
