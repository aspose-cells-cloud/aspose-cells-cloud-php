<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="UnprotectSpreadsheetRequest.cs">
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
 * Request model for  UnprotectSpreadsheet operation.
 */

class UnprotectSpreadsheetRequest extends BaseApiRequest
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
    * password : Spreadsheet file encryption password.
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

    /*
    * modifyPassword : Sets the protected password to modify the file.
    */ 
    public $modify_password;

    public function getModifyPassword()
    {
        return $this->modify_password;
    }

    public function setModifyPassword($value)
    {
        $this->modify_password = $value;
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
    * regoin : The spreadsheet region setting.
    */ 
    public $regoin;

    public function getRegoin()
    {
        return $this->regoin;
    }

    public function setRegoin($value)
    {
        $this->regoin = $value;
    }

    public function __construct( $spreadsheet = null,$password = null,$modify_password = null )
    {        
        $this->spreadsheet = $spreadsheet; 
        $this->password = $password; 
        $this->modify_password = $modify_password; 
    }

    public function createHttpRequest($headerSelector,$config)
    {
        // verify the required parameter 'spreadsheet' is set
        if ($this->spreadsheet === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $spreadsheet when calling UnprotectSpreadsheet'
            );
        }


        // verify the required parameter 'password' is set
        if ($this->password === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $password when calling UnprotectSpreadsheet'
            );
        }


        // verify the required parameter 'modify_password' is set
        if ($this->modify_password === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $modify_password when calling UnprotectSpreadsheet'
            );
        }


        $resourcePath = 'v4.0/cells/unprotection/spreadsheet';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;    
        // query params : password
        if ($this->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($this->password);
        }
        // query params : modify_password
        if ($this->modify_password !== null) {
            $queryParams['modifyPassword'] = ObjectSerializer::toQueryValue($this->modify_password);
        }
        // query params : out_path
        if ($this->out_path !== null) {
            $queryParams['outPath'] = ObjectSerializer::toQueryValue($this->out_path);
        }
        // query params : out_storage_name
        if ($this->out_storage_name !== null) {
            $queryParams['outStorageName'] = ObjectSerializer::toQueryValue($this->out_storage_name);
        }
        // query params : regoin
        if ($this->regoin !== null) {
            $queryParams['regoin'] = ObjectSerializer::toQueryValue($this->regoin);
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
        $defaultHeaders['x-aspose-client-version'] = '25.7';
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