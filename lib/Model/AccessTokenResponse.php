<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AccessTokenResponse.cs">
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

use \ArrayAccess;
use \Aspose\Cells\Cloud\ObjectSerializer;

/**
 * AccessTokenResponse Class Doc Comment
 *
 * @category Class
 * @package  Aspose\Cells\Cloud
 * @author   Swagger CodeGen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccessTokenResponse implements  ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccessTokenResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'expires' => 'string',
        'access_token' => 'string',
        'issued' => 'string',
        'client_refresh_token_life_time_in_minutes' => 'string',
        'expires_in' => 'int',
        'token_type' => 'string',
        'client_id' => 'string',
        'refresh_token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'expires' => null,
        'access_token' => null,
        'issued' => null,
        'client_refresh_token_life_time_in_minutes' => null,
        'expires_in' => 'int64',
        'token_type' => null,
        'client_id' => null,
        'refresh_token' => null
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
        'expires' => 'expires',
        'access_token' => 'access_token',
        'issued' => 'issued',
        'client_refresh_token_life_time_in_minutes' => 'clientRefreshTokenLifeTimeInMinutes',
        'expires_in' => 'expires_in',
        'token_type' => 'token_type',
        'client_id' => 'client_id',
        'refresh_token' => 'refresh_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'expires' => 'setExpires',
        'access_token' => 'setAccessToken',
        'issued' => 'setIssued',
        'client_refresh_token_life_time_in_minutes' => 'setClientRefreshTokenLifeTimeInMinutes',
        'expires_in' => 'setExpiresIn',
        'token_type' => 'setTokenType',
        'client_id' => 'setClientId',
        'refresh_token' => 'setRefreshToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'expires' => 'getExpires',
        'access_token' => 'getAccessToken',
        'issued' => 'getIssued',
        'client_refresh_token_life_time_in_minutes' => 'getClientRefreshTokenLifeTimeInMinutes',
        'expires_in' => 'getExpiresIn',
        'token_type' => 'getTokenType',
        'client_id' => 'getClientId',
        'refresh_token' => 'getRefreshToken'
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
        $this->container['expires'] = isset($data['expires']) ? $data['expires'] : null;
        $this->container['access_token'] = isset($data['access_token']) ? $data['access_token'] : null;
        $this->container['issued'] = isset($data['issued']) ? $data['issued'] : null;
        $this->container['client_refresh_token_life_time_in_minutes'] = isset($data['client_refresh_token_life_time_in_minutes']) ? $data['client_refresh_token_life_time_in_minutes'] : null;
        $this->container['expires_in'] = isset($data['expires_in']) ? $data['expires_in'] : null;
        $this->container['token_type'] = isset($data['token_type']) ? $data['token_type'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['refresh_token'] = isset($data['refresh_token']) ? $data['refresh_token'] : null;
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
     * Gets expires
     *
     * @return string
     */
    public function getExpires()
    {
        return $this->container['expires'];
    }

    /**
     * Sets expires
     *
     * @param string $expires expires
     *
     * @return $this
     */
    public function setExpires($expires)
    {
        $this->container['expires'] = $expires;

        return $this;
    }

    /**
     * Gets access_token
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->container['access_token'];
    }

    /**
     * Sets access_token
     *
     * @param string $access_token access_token
     *
     * @return $this
     */
    public function setAccessToken($access_token)
    {
        $this->container['access_token'] = $access_token;

        return $this;
    }

    /**
     * Gets issued
     *
     * @return string
     */
    public function getIssued()
    {
        return $this->container['issued'];
    }

    /**
     * Sets issued
     *
     * @param string $issued issued
     *
     * @return $this
     */
    public function setIssued($issued)
    {
        $this->container['issued'] = $issued;

        return $this;
    }

    /**
     * Gets client_refresh_token_life_time_in_minutes
     *
     * @return string
     */
    public function getClientRefreshTokenLifeTimeInMinutes()
    {
        return $this->container['client_refresh_token_life_time_in_minutes'];
    }

    /**
     * Sets client_refresh_token_life_time_in_minutes
     *
     * @param string $client_refresh_token_life_time_in_minutes client_refresh_token_life_time_in_minutes
     *
     * @return $this
     */
    public function setClientRefreshTokenLifeTimeInMinutes($client_refresh_token_life_time_in_minutes)
    {
        $this->container['client_refresh_token_life_time_in_minutes'] = $client_refresh_token_life_time_in_minutes;

        return $this;
    }

    /**
     * Gets expires_in
     *
     * @return int
     */
    public function getExpiresIn()
    {
        return $this->container['expires_in'];
    }

    /**
     * Sets expires_in
     *
     * @param int $expires_in expires_in
     *
     * @return $this
     */
    public function setExpiresIn($expires_in)
    {
        $this->container['expires_in'] = $expires_in;

        return $this;
    }

    /**
     * Gets token_type
     *
     * @return string
     */
    public function getTokenType()
    {
        return $this->container['token_type'];
    }

    /**
     * Sets token_type
     *
     * @param string $token_type token_type
     *
     * @return $this
     */
    public function setTokenType($token_type)
    {
        $this->container['token_type'] = $token_type;

        return $this;
    }

    /**
     * Gets client_id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string $client_id client_id
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets refresh_token
     *
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->container['refresh_token'];
    }

    /**
     * Sets refresh_token
     *
     * @param string $refresh_token refresh_token
     *
     * @return $this
     */
    public function setRefreshToken($refresh_token)
    {
        $this->container['refresh_token'] = $refresh_token;

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
