<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RemoveCharactersRequest.cs">
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

namespace Aspose\Cells\Cloud\Request;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Aspose\Cells\Cloud\ObjectSerializer;
use Aspose\Cells\Cloud\HeaderSelector;
use Asapose\Cells\Cloud\Configuration;

/*
 * Request model for  RemoveCharacters operation.
 */

class RemoveCharactersRequest extends BaseApiRequest
{

    /*
    * Spreadsheet : Upload spreadsheet file.
    */ 
    public $spreadsheet;

    public function getSpreadsheet()
    {
        return $this->spreadsheet;
    }

    public function setSpreadsheet($value)
    {
        $this->spreadsheet = $value;
    }

    /*
    * theFirstNCharacters : Specify removing the first n characters from selected cells.
    */ 
    public $the_first_n_characters;

    public function getTheFirstNCharacters()
    {
        return $this->the_first_n_characters;
    }

    public function setTheFirstNCharacters($value)
    {
        $this->the_first_n_characters = $value;
    }

    /*
    * theLastNCharacters : Specify removing the last n characters from selected cells.
    */ 
    public $the_last_n_characters;

    public function getTheLastNCharacters()
    {
        return $this->the_last_n_characters;
    }

    public function setTheLastNCharacters($value)
    {
        $this->the_last_n_characters = $value;
    }

    /*
    * allCharactersBeforeText : Specify using targeted removal options to delete text that is located before certain characters.
    */ 
    public $all_characters_before_text;

    public function getAllCharactersBeforeText()
    {
        return $this->all_characters_before_text;
    }

    public function setAllCharactersBeforeText($value)
    {
        $this->all_characters_before_text = $value;
    }

    /*
    * allCharactersAfterText : Specify using targeted removal options to delete text that is located after certain characters.
    */ 
    public $all_characters_after_text;

    public function getAllCharactersAfterText()
    {
        return $this->all_characters_after_text;
    }

    public function setAllCharactersAfterText($value)
    {
        $this->all_characters_after_text = $value;
    }

    /*
    * removeTextMethod : Specify the removal of text method type.
    */ 
    public $remove_text_method;

    public function getRemoveTextMethod()
    {
        return $this->remove_text_method;
    }

    public function setRemoveTextMethod($value)
    {
        $this->remove_text_method = $value;
    }

    /*
    * characterSets : Specify the character sets.
    */ 
    public $character_sets;

    public function getCharacterSets()
    {
        return $this->character_sets;
    }

    public function setCharacterSets($value)
    {
        $this->character_sets = $value;
    }

    /*
    * removeCustomValue : Specify the remove custom value.
    */ 
    public $remove_custom_value;

    public function getRemoveCustomValue()
    {
        return $this->remove_custom_value;
    }

    public function setRemoveCustomValue($value)
    {
        $this->remove_custom_value = $value;
    }

    /*
    * worksheet : Specify the worksheet of spreadsheet.
    */ 
    public $worksheet;

    public function getWorksheet()
    {
        return $this->worksheet;
    }

    public function setWorksheet($value)
    {
        $this->worksheet = $value;
    }

    /*
    * range : Specify the worksheet range of spreadsheet.
    */ 
    public $range;

    public function getRange()
    {
        return $this->range;
    }

    public function setRange($value)
    {
        $this->range = $value;
    }

    /*
    * outPath : (Optional) The folder path where the workbook is stored. The default is null.
    */ 
    public $out_path;

    public function getOutPath()
    {
        return $this->out_path;
    }

    public function setOutPath($value)
    {
        $this->out_path = $value;
    }

    /*
    * outStorageName : Output file Storage Name.
    */ 
    public $out_storage_name;

    public function getOutStorageName()
    {
        return $this->out_storage_name;
    }

    public function setOutStorageName($value)
    {
        $this->out_storage_name = $value;
    }

    /*
    * region : The spreadsheet region setting.
    */ 
    public $region;

    public function getRegion()
    {
        return $this->region;
    }

    public function setRegion($value)
    {
        $this->region = $value;
    }

    /*
    * password : The password for opening spreadsheet file.
    */ 
    public $password;

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($value)
    {
        $this->password = $value;
    }

    public function __construct( $spreadsheet = null,$the_first_n_characters = null,$the_last_n_characters = null,$all_characters_before_text = null,$all_characters_after_text = null,$remove_text_method = null,$character_sets = null,$remove_custom_value = null,$worksheet = null,$range = null )
    {        
        $this->spreadsheet = $spreadsheet; 
        $this->the_first_n_characters = $the_first_n_characters; 
        $this->the_last_n_characters = $the_last_n_characters; 
        $this->all_characters_before_text = $all_characters_before_text; 
        $this->all_characters_after_text = $all_characters_after_text; 
        $this->remove_text_method = $remove_text_method; 
        $this->character_sets = $character_sets; 
        $this->remove_custom_value = $remove_custom_value; 
        $this->worksheet = $worksheet; 
        $this->range = $range; 
    }

    public function createHttpRequest($headerSelector,$config)
    {
        // verify the required parameter 'spreadsheet' is set
        if ($this->spreadsheet === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $spreadsheet when calling RemoveCharacters'
            );
        }


        // verify the required parameter 'the_first_n_characters' is set
        if ($this->the_first_n_characters === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $the_first_n_characters when calling RemoveCharacters'
            );
        }


        // verify the required parameter 'the_last_n_characters' is set
        if ($this->the_last_n_characters === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $the_last_n_characters when calling RemoveCharacters'
            );
        }


        // verify the required parameter 'all_characters_before_text' is set
        if ($this->all_characters_before_text === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $all_characters_before_text when calling RemoveCharacters'
            );
        }


        // verify the required parameter 'all_characters_after_text' is set
        if ($this->all_characters_after_text === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $all_characters_after_text when calling RemoveCharacters'
            );
        }


        // verify the required parameter 'remove_text_method' is set
        if ($this->remove_text_method === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $remove_text_method when calling RemoveCharacters'
            );
        }


        // verify the required parameter 'character_sets' is set
        if ($this->character_sets === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $character_sets when calling RemoveCharacters'
            );
        }


        // verify the required parameter 'remove_custom_value' is set
        if ($this->remove_custom_value === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $remove_custom_value when calling RemoveCharacters'
            );
        }


        // verify the required parameter 'worksheet' is set
        if ($this->worksheet === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $worksheet when calling RemoveCharacters'
            );
        }


        // verify the required parameter 'range' is set
        if ($this->range === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $range when calling RemoveCharacters'
            );
        }


        $resourcePath = 'v4.0/cells/content/remove/characters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;    
        // query params : the_first_n_characters
        if ($this->the_first_n_characters !== null) {
            $queryParams['theFirstNCharacters'] = ObjectSerializer::toQueryValue($this->the_first_n_characters);
        }
        // query params : the_last_n_characters
        if ($this->the_last_n_characters !== null) {
            $queryParams['theLastNCharacters'] = ObjectSerializer::toQueryValue($this->the_last_n_characters);
        }
        // query params : all_characters_before_text
        if ($this->all_characters_before_text !== null) {
            $queryParams['allCharactersBeforeText'] = ObjectSerializer::toQueryValue($this->all_characters_before_text);
        }
        // query params : all_characters_after_text
        if ($this->all_characters_after_text !== null) {
            $queryParams['allCharactersAfterText'] = ObjectSerializer::toQueryValue($this->all_characters_after_text);
        }
        // query params : remove_text_method
        if ($this->remove_text_method !== null) {
            $queryParams['removeTextMethod'] = ObjectSerializer::toQueryValue($this->remove_text_method);
        }
        // query params : character_sets
        if ($this->character_sets !== null) {
            $queryParams['characterSets'] = ObjectSerializer::toQueryValue($this->character_sets);
        }
        // query params : remove_custom_value
        if ($this->remove_custom_value !== null) {
            $queryParams['removeCustomValue'] = ObjectSerializer::toQueryValue($this->remove_custom_value);
        }
        // query params : worksheet
        if ($this->worksheet !== null) {
            $queryParams['worksheet'] = ObjectSerializer::toQueryValue($this->worksheet);
        }
        // query params : range
        if ($this->range !== null) {
            $queryParams['range'] = ObjectSerializer::toQueryValue($this->range);
        }
        // query params : out_path
        if ($this->out_path !== null) {
            $queryParams['outPath'] = ObjectSerializer::toQueryValue($this->out_path);
        }
        // query params : out_storage_name
        if ($this->out_storage_name !== null) {
            $queryParams['outStorageName'] = ObjectSerializer::toQueryValue($this->out_storage_name);
        }
        // query params : region
        if ($this->region !== null) {
            $queryParams['region'] = ObjectSerializer::toQueryValue($this->region);
        }
        // query params : password
        if ($this->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($this->password);
        }
        if ($this->spreadsheet !== null) {
            $multipart = true;
            if( is_array($this->spreadsheet)){
                foreach($this->spreadsheet as $key => $value) {
                    $formParams[basename($key)] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($value), 'rb');
                }
            }else {
                $formParams[basename($this->spreadsheet)] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($this->spreadsheet), 'rb');
            }
        }

    // body params
        $_tempBody = null;
        $_tempBodyName =null;
        if ($multipart) {
            $headers = $headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }
        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                if (isset($_tempBody)) {
                    $httpBody = $_tempBody;
                    $multipartContents[] = [
                        'name' =>$_tempBodyName ,
                        'filename' =>$_tempBodyName ,
                        'contents' => json_encode( ObjectSerializer::sanitizeForSerialization($httpBody)) 
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }elseif (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
            else if (gettype($httpBody) == 'array' && $headers['Content-Type'] === 'application/json') {
                $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
            }

        }

        $defaultHeaders = [];
        if ($config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $config->getUserAgent();
        }
        if($config->getAccessToken()!==''){
            $defaultHeaders['Authorization']= 'Bearer ' . $config->getAccessToken();
        }
        $defaultHeaders['x-aspose-client'] = 'php sdk';
        $defaultHeaders['x-aspose-client-version'] = '25.10';
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'PUT',
            $config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );    
    }

}