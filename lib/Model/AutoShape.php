<?php
/**
 * AutoShape
 *
 * PHP version 5
 *
 * @category Class
 * @package  Aspose\Cells\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Web API Swagger specification
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Aspose\Cells\Cloud\Model;

use \ArrayAccess;
use \Aspose\Cells\Cloud\ObjectSerializer;

/**
 * AutoShape Class Doc Comment
 *
 * @category Class
 * @package  Aspose\Cells\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AutoShape implements  ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AutoShape';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alternative_text' => 'string',
        'bottom' => 'int',
        'top' => 'int',
        'width' => 'int',
        'html_text' => 'string',
        'text_vertical_alignment' => 'string',
        'auto_shape_type' => 'string',
        'is_printable' => 'bool',
        'upper_left_column' => 'int',
        'is_lock_aspect_ratio' => 'bool',
        'is_group' => 'bool',
        'rotation_angle' => 'double',
        'z_order_position' => 'int',
        'text_horizontal_overflow' => 'string',
        'mso_drawing_type' => 'string',
        'text_orientation_type' => 'string',
        'placement' => 'string',
        'name' => 'string',
        'is_word_art' => 'bool',
        'linked_cell' => 'string',
        'upper_left_row' => 'int',
        'is_locked' => 'bool',
        'lower_right_row' => 'int',
        'is_text_wrapped' => 'bool',
        'y' => 'int',
        'x' => 'int',
        'is_hidden' => 'bool',
        'left' => 'int',
        'right' => 'int',
        'text' => 'string',
        'lower_right_column' => 'int',
        'height' => 'int',
        'text_horizontal_alignment' => 'string',
        'text_vertical_overflow' => 'string',
        'link' => '\Aspose\Cells\Cloud\Model\Link'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'alternative_text' => null,
        'bottom' => 'int32',
        'top' => 'int32',
        'width' => 'int32',
        'html_text' => null,
        'text_vertical_alignment' => null,
        'auto_shape_type' => null,
        'is_printable' => null,
        'upper_left_column' => 'int32',
        'is_lock_aspect_ratio' => null,
        'is_group' => null,
        'rotation_angle' => 'double',
        'z_order_position' => 'int32',
        'text_horizontal_overflow' => null,
        'mso_drawing_type' => null,
        'text_orientation_type' => null,
        'placement' => null,
        'name' => null,
        'is_word_art' => null,
        'linked_cell' => null,
        'upper_left_row' => 'int32',
        'is_locked' => null,
        'lower_right_row' => 'int32',
        'is_text_wrapped' => null,
        'y' => 'int32',
        'x' => 'int32',
        'is_hidden' => null,
        'left' => 'int32',
        'right' => 'int32',
        'text' => null,
        'lower_right_column' => 'int32',
        'height' => 'int32',
        'text_horizontal_alignment' => null,
        'text_vertical_overflow' => null,
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
        'alternative_text' => 'AlternativeText',
        'bottom' => 'Bottom',
        'top' => 'Top',
        'width' => 'Width',
        'html_text' => 'HtmlText',
        'text_vertical_alignment' => 'TextVerticalAlignment',
        'auto_shape_type' => 'AutoShapeType',
        'is_printable' => 'IsPrintable',
        'upper_left_column' => 'UpperLeftColumn',
        'is_lock_aspect_ratio' => 'IsLockAspectRatio',
        'is_group' => 'IsGroup',
        'rotation_angle' => 'RotationAngle',
        'z_order_position' => 'ZOrderPosition',
        'text_horizontal_overflow' => 'TextHorizontalOverflow',
        'mso_drawing_type' => 'MsoDrawingType',
        'text_orientation_type' => 'TextOrientationType',
        'placement' => 'Placement',
        'name' => 'Name',
        'is_word_art' => 'IsWordArt',
        'linked_cell' => 'LinkedCell',
        'upper_left_row' => 'UpperLeftRow',
        'is_locked' => 'IsLocked',
        'lower_right_row' => 'LowerRightRow',
        'is_text_wrapped' => 'IsTextWrapped',
        'y' => 'Y',
        'x' => 'X',
        'is_hidden' => 'IsHidden',
        'left' => 'Left',
        'right' => 'Right',
        'text' => 'Text',
        'lower_right_column' => 'LowerRightColumn',
        'height' => 'Height',
        'text_horizontal_alignment' => 'TextHorizontalAlignment',
        'text_vertical_overflow' => 'TextVerticalOverflow',
        'link' => 'link'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alternative_text' => 'setAlternativeText',
        'bottom' => 'setBottom',
        'top' => 'setTop',
        'width' => 'setWidth',
        'html_text' => 'setHtmlText',
        'text_vertical_alignment' => 'setTextVerticalAlignment',
        'auto_shape_type' => 'setAutoShapeType',
        'is_printable' => 'setIsPrintable',
        'upper_left_column' => 'setUpperLeftColumn',
        'is_lock_aspect_ratio' => 'setIsLockAspectRatio',
        'is_group' => 'setIsGroup',
        'rotation_angle' => 'setRotationAngle',
        'z_order_position' => 'setZOrderPosition',
        'text_horizontal_overflow' => 'setTextHorizontalOverflow',
        'mso_drawing_type' => 'setMsoDrawingType',
        'text_orientation_type' => 'setTextOrientationType',
        'placement' => 'setPlacement',
        'name' => 'setName',
        'is_word_art' => 'setIsWordArt',
        'linked_cell' => 'setLinkedCell',
        'upper_left_row' => 'setUpperLeftRow',
        'is_locked' => 'setIsLocked',
        'lower_right_row' => 'setLowerRightRow',
        'is_text_wrapped' => 'setIsTextWrapped',
        'y' => 'setY',
        'x' => 'setX',
        'is_hidden' => 'setIsHidden',
        'left' => 'setLeft',
        'right' => 'setRight',
        'text' => 'setText',
        'lower_right_column' => 'setLowerRightColumn',
        'height' => 'setHeight',
        'text_horizontal_alignment' => 'setTextHorizontalAlignment',
        'text_vertical_overflow' => 'setTextVerticalOverflow',
        'link' => 'setLink'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alternative_text' => 'getAlternativeText',
        'bottom' => 'getBottom',
        'top' => 'getTop',
        'width' => 'getWidth',
        'html_text' => 'getHtmlText',
        'text_vertical_alignment' => 'getTextVerticalAlignment',
        'auto_shape_type' => 'getAutoShapeType',
        'is_printable' => 'getIsPrintable',
        'upper_left_column' => 'getUpperLeftColumn',
        'is_lock_aspect_ratio' => 'getIsLockAspectRatio',
        'is_group' => 'getIsGroup',
        'rotation_angle' => 'getRotationAngle',
        'z_order_position' => 'getZOrderPosition',
        'text_horizontal_overflow' => 'getTextHorizontalOverflow',
        'mso_drawing_type' => 'getMsoDrawingType',
        'text_orientation_type' => 'getTextOrientationType',
        'placement' => 'getPlacement',
        'name' => 'getName',
        'is_word_art' => 'getIsWordArt',
        'linked_cell' => 'getLinkedCell',
        'upper_left_row' => 'getUpperLeftRow',
        'is_locked' => 'getIsLocked',
        'lower_right_row' => 'getLowerRightRow',
        'is_text_wrapped' => 'getIsTextWrapped',
        'y' => 'getY',
        'x' => 'getX',
        'is_hidden' => 'getIsHidden',
        'left' => 'getLeft',
        'right' => 'getRight',
        'text' => 'getText',
        'lower_right_column' => 'getLowerRightColumn',
        'height' => 'getHeight',
        'text_horizontal_alignment' => 'getTextHorizontalAlignment',
        'text_vertical_overflow' => 'getTextVerticalOverflow',
        'link' => 'getLink'
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
        $this->container['alternative_text'] = isset($data['alternative_text']) ? $data['alternative_text'] : null;
        $this->container['bottom'] = isset($data['bottom']) ? $data['bottom'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['html_text'] = isset($data['html_text']) ? $data['html_text'] : null;
        $this->container['text_vertical_alignment'] = isset($data['text_vertical_alignment']) ? $data['text_vertical_alignment'] : null;
        $this->container['auto_shape_type'] = isset($data['auto_shape_type']) ? $data['auto_shape_type'] : null;
        $this->container['is_printable'] = isset($data['is_printable']) ? $data['is_printable'] : null;
        $this->container['upper_left_column'] = isset($data['upper_left_column']) ? $data['upper_left_column'] : null;
        $this->container['is_lock_aspect_ratio'] = isset($data['is_lock_aspect_ratio']) ? $data['is_lock_aspect_ratio'] : null;
        $this->container['is_group'] = isset($data['is_group']) ? $data['is_group'] : null;
        $this->container['rotation_angle'] = isset($data['rotation_angle']) ? $data['rotation_angle'] : null;
        $this->container['z_order_position'] = isset($data['z_order_position']) ? $data['z_order_position'] : null;
        $this->container['text_horizontal_overflow'] = isset($data['text_horizontal_overflow']) ? $data['text_horizontal_overflow'] : null;
        $this->container['mso_drawing_type'] = isset($data['mso_drawing_type']) ? $data['mso_drawing_type'] : null;
        $this->container['text_orientation_type'] = isset($data['text_orientation_type']) ? $data['text_orientation_type'] : null;
        $this->container['placement'] = isset($data['placement']) ? $data['placement'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['is_word_art'] = isset($data['is_word_art']) ? $data['is_word_art'] : null;
        $this->container['linked_cell'] = isset($data['linked_cell']) ? $data['linked_cell'] : null;
        $this->container['upper_left_row'] = isset($data['upper_left_row']) ? $data['upper_left_row'] : null;
        $this->container['is_locked'] = isset($data['is_locked']) ? $data['is_locked'] : null;
        $this->container['lower_right_row'] = isset($data['lower_right_row']) ? $data['lower_right_row'] : null;
        $this->container['is_text_wrapped'] = isset($data['is_text_wrapped']) ? $data['is_text_wrapped'] : null;
        $this->container['y'] = isset($data['y']) ? $data['y'] : null;
        $this->container['x'] = isset($data['x']) ? $data['x'] : null;
        $this->container['is_hidden'] = isset($data['is_hidden']) ? $data['is_hidden'] : null;
        $this->container['left'] = isset($data['left']) ? $data['left'] : null;
        $this->container['right'] = isset($data['right']) ? $data['right'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['lower_right_column'] = isset($data['lower_right_column']) ? $data['lower_right_column'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['text_horizontal_alignment'] = isset($data['text_horizontal_alignment']) ? $data['text_horizontal_alignment'] : null;
        $this->container['text_vertical_overflow'] = isset($data['text_vertical_overflow']) ? $data['text_vertical_overflow'] : null;
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

        return true;
    }


    /**
     * Gets alternative_text
     *
     * @return string
     */
    public function getAlternativeText()
    {
        return $this->container['alternative_text'];
    }

    /**
     * Sets alternative_text
     *
     * @param string $alternative_text alternative_text
     *
     * @return $this
     */
    public function setAlternativeText($alternative_text)
    {
        $this->container['alternative_text'] = $alternative_text;

        return $this;
    }

    /**
     * Gets bottom
     *
     * @return int
     */
    public function getBottom()
    {
        return $this->container['bottom'];
    }

    /**
     * Sets bottom
     *
     * @param int $bottom bottom
     *
     * @return $this
     */
    public function setBottom($bottom)
    {
        $this->container['bottom'] = $bottom;

        return $this;
    }

    /**
     * Gets top
     *
     * @return int
     */
    public function getTop()
    {
        return $this->container['top'];
    }

    /**
     * Sets top
     *
     * @param int $top top
     *
     * @return $this
     */
    public function setTop($top)
    {
        $this->container['top'] = $top;

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
     * @param int $width width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets html_text
     *
     * @return string
     */
    public function getHtmlText()
    {
        return $this->container['html_text'];
    }

    /**
     * Sets html_text
     *
     * @param string $html_text html_text
     *
     * @return $this
     */
    public function setHtmlText($html_text)
    {
        $this->container['html_text'] = $html_text;

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
     * @param string $text_vertical_alignment text_vertical_alignment
     *
     * @return $this
     */
    public function setTextVerticalAlignment($text_vertical_alignment)
    {
        $this->container['text_vertical_alignment'] = $text_vertical_alignment;

        return $this;
    }

    /**
     * Gets auto_shape_type
     *
     * @return string
     */
    public function getAutoShapeType()
    {
        return $this->container['auto_shape_type'];
    }

    /**
     * Sets auto_shape_type
     *
     * @param string $auto_shape_type auto_shape_type
     *
     * @return $this
     */
    public function setAutoShapeType($auto_shape_type)
    {
        $this->container['auto_shape_type'] = $auto_shape_type;

        return $this;
    }

    /**
     * Gets is_printable
     *
     * @return bool
     */
    public function getIsPrintable()
    {
        return $this->container['is_printable'];
    }

    /**
     * Sets is_printable
     *
     * @param bool $is_printable is_printable
     *
     * @return $this
     */
    public function setIsPrintable($is_printable)
    {
        $this->container['is_printable'] = $is_printable;

        return $this;
    }

    /**
     * Gets upper_left_column
     *
     * @return int
     */
    public function getUpperLeftColumn()
    {
        return $this->container['upper_left_column'];
    }

    /**
     * Sets upper_left_column
     *
     * @param int $upper_left_column upper_left_column
     *
     * @return $this
     */
    public function setUpperLeftColumn($upper_left_column)
    {
        $this->container['upper_left_column'] = $upper_left_column;

        return $this;
    }

    /**
     * Gets is_lock_aspect_ratio
     *
     * @return bool
     */
    public function getIsLockAspectRatio()
    {
        return $this->container['is_lock_aspect_ratio'];
    }

    /**
     * Sets is_lock_aspect_ratio
     *
     * @param bool $is_lock_aspect_ratio is_lock_aspect_ratio
     *
     * @return $this
     */
    public function setIsLockAspectRatio($is_lock_aspect_ratio)
    {
        $this->container['is_lock_aspect_ratio'] = $is_lock_aspect_ratio;

        return $this;
    }

    /**
     * Gets is_group
     *
     * @return bool
     */
    public function getIsGroup()
    {
        return $this->container['is_group'];
    }

    /**
     * Sets is_group
     *
     * @param bool $is_group is_group
     *
     * @return $this
     */
    public function setIsGroup($is_group)
    {
        $this->container['is_group'] = $is_group;

        return $this;
    }

    /**
     * Gets rotation_angle
     *
     * @return double
     */
    public function getRotationAngle()
    {
        return $this->container['rotation_angle'];
    }

    /**
     * Sets rotation_angle
     *
     * @param double $rotation_angle rotation_angle
     *
     * @return $this
     */
    public function setRotationAngle($rotation_angle)
    {
        $this->container['rotation_angle'] = $rotation_angle;

        return $this;
    }

    /**
     * Gets z_order_position
     *
     * @return int
     */
    public function getZOrderPosition()
    {
        return $this->container['z_order_position'];
    }

    /**
     * Sets z_order_position
     *
     * @param int $z_order_position z_order_position
     *
     * @return $this
     */
    public function setZOrderPosition($z_order_position)
    {
        $this->container['z_order_position'] = $z_order_position;

        return $this;
    }

    /**
     * Gets text_horizontal_overflow
     *
     * @return string
     */
    public function getTextHorizontalOverflow()
    {
        return $this->container['text_horizontal_overflow'];
    }

    /**
     * Sets text_horizontal_overflow
     *
     * @param string $text_horizontal_overflow text_horizontal_overflow
     *
     * @return $this
     */
    public function setTextHorizontalOverflow($text_horizontal_overflow)
    {
        $this->container['text_horizontal_overflow'] = $text_horizontal_overflow;

        return $this;
    }

    /**
     * Gets mso_drawing_type
     *
     * @return string
     */
    public function getMsoDrawingType()
    {
        return $this->container['mso_drawing_type'];
    }

    /**
     * Sets mso_drawing_type
     *
     * @param string $mso_drawing_type mso_drawing_type
     *
     * @return $this
     */
    public function setMsoDrawingType($mso_drawing_type)
    {
        $this->container['mso_drawing_type'] = $mso_drawing_type;

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
     * @param string $text_orientation_type text_orientation_type
     *
     * @return $this
     */
    public function setTextOrientationType($text_orientation_type)
    {
        $this->container['text_orientation_type'] = $text_orientation_type;

        return $this;
    }

    /**
     * Gets placement
     *
     * @return string
     */
    public function getPlacement()
    {
        return $this->container['placement'];
    }

    /**
     * Sets placement
     *
     * @param string $placement placement
     *
     * @return $this
     */
    public function setPlacement($placement)
    {
        $this->container['placement'] = $placement;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets is_word_art
     *
     * @return bool
     */
    public function getIsWordArt()
    {
        return $this->container['is_word_art'];
    }

    /**
     * Sets is_word_art
     *
     * @param bool $is_word_art is_word_art
     *
     * @return $this
     */
    public function setIsWordArt($is_word_art)
    {
        $this->container['is_word_art'] = $is_word_art;

        return $this;
    }

    /**
     * Gets linked_cell
     *
     * @return string
     */
    public function getLinkedCell()
    {
        return $this->container['linked_cell'];
    }

    /**
     * Sets linked_cell
     *
     * @param string $linked_cell linked_cell
     *
     * @return $this
     */
    public function setLinkedCell($linked_cell)
    {
        $this->container['linked_cell'] = $linked_cell;

        return $this;
    }

    /**
     * Gets upper_left_row
     *
     * @return int
     */
    public function getUpperLeftRow()
    {
        return $this->container['upper_left_row'];
    }

    /**
     * Sets upper_left_row
     *
     * @param int $upper_left_row upper_left_row
     *
     * @return $this
     */
    public function setUpperLeftRow($upper_left_row)
    {
        $this->container['upper_left_row'] = $upper_left_row;

        return $this;
    }

    /**
     * Gets is_locked
     *
     * @return bool
     */
    public function getIsLocked()
    {
        return $this->container['is_locked'];
    }

    /**
     * Sets is_locked
     *
     * @param bool $is_locked is_locked
     *
     * @return $this
     */
    public function setIsLocked($is_locked)
    {
        $this->container['is_locked'] = $is_locked;

        return $this;
    }

    /**
     * Gets lower_right_row
     *
     * @return int
     */
    public function getLowerRightRow()
    {
        return $this->container['lower_right_row'];
    }

    /**
     * Sets lower_right_row
     *
     * @param int $lower_right_row lower_right_row
     *
     * @return $this
     */
    public function setLowerRightRow($lower_right_row)
    {
        $this->container['lower_right_row'] = $lower_right_row;

        return $this;
    }

    /**
     * Gets is_text_wrapped
     *
     * @return bool
     */
    public function getIsTextWrapped()
    {
        return $this->container['is_text_wrapped'];
    }

    /**
     * Sets is_text_wrapped
     *
     * @param bool $is_text_wrapped is_text_wrapped
     *
     * @return $this
     */
    public function setIsTextWrapped($is_text_wrapped)
    {
        $this->container['is_text_wrapped'] = $is_text_wrapped;

        return $this;
    }

    /**
     * Gets y
     *
     * @return int
     */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
     * Sets y
     *
     * @param int $y y
     *
     * @return $this
     */
    public function setY($y)
    {
        $this->container['y'] = $y;

        return $this;
    }

    /**
     * Gets x
     *
     * @return int
     */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
     * Sets x
     *
     * @param int $x x
     *
     * @return $this
     */
    public function setX($x)
    {
        $this->container['x'] = $x;

        return $this;
    }

    /**
     * Gets is_hidden
     *
     * @return bool
     */
    public function getIsHidden()
    {
        return $this->container['is_hidden'];
    }

    /**
     * Sets is_hidden
     *
     * @param bool $is_hidden is_hidden
     *
     * @return $this
     */
    public function setIsHidden($is_hidden)
    {
        $this->container['is_hidden'] = $is_hidden;

        return $this;
    }

    /**
     * Gets left
     *
     * @return int
     */
    public function getLeft()
    {
        return $this->container['left'];
    }

    /**
     * Sets left
     *
     * @param int $left left
     *
     * @return $this
     */
    public function setLeft($left)
    {
        $this->container['left'] = $left;

        return $this;
    }

    /**
     * Gets right
     *
     * @return int
     */
    public function getRight()
    {
        return $this->container['right'];
    }

    /**
     * Sets right
     *
     * @param int $right right
     *
     * @return $this
     */
    public function setRight($right)
    {
        $this->container['right'] = $right;

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
     * @param string $text text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets lower_right_column
     *
     * @return int
     */
    public function getLowerRightColumn()
    {
        return $this->container['lower_right_column'];
    }

    /**
     * Sets lower_right_column
     *
     * @param int $lower_right_column lower_right_column
     *
     * @return $this
     */
    public function setLowerRightColumn($lower_right_column)
    {
        $this->container['lower_right_column'] = $lower_right_column;

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
     * @param int $height height
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
     * @param string $text_horizontal_alignment text_horizontal_alignment
     *
     * @return $this
     */
    public function setTextHorizontalAlignment($text_horizontal_alignment)
    {
        $this->container['text_horizontal_alignment'] = $text_horizontal_alignment;

        return $this;
    }

    /**
     * Gets text_vertical_overflow
     *
     * @return string
     */
    public function getTextVerticalOverflow()
    {
        return $this->container['text_vertical_overflow'];
    }

    /**
     * Sets text_vertical_overflow
     *
     * @param string $text_vertical_overflow text_vertical_overflow
     *
     * @return $this
     */
    public function setTextVerticalOverflow($text_vertical_overflow)
    {
        $this->container['text_vertical_overflow'] = $text_vertical_overflow;

        return $this;
    }

    /**
     * Gets link
     *
     * @return \Aspose\Cells\Cloud\Model\Link
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param \Aspose\Cells\Cloud\Model\Link $link link
     *
     * @return $this
     */
    public function setLink($link)
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

