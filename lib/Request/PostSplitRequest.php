<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostSplitRequest.cs">
 *   Copyright (c) 2023 Aspose.Cells Cloud
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
 * Request model for  PostSplit operation.
 */

class PostSplitRequest extends BaseApiRequest
{

    /*
    * File : File to upload
    */ 
    public $file;

    public function getFile()
    {
        return $this->file;
    }

    public function setFile($value)
    {
        $this->file = $value;
    }

    /*
    * format : 
    */ 
    public $format;

    public function getFormat()
    {
        return $this->format;
    }

    public function setFormat($value)
    {
        $this->format = $value;
    }

    /*
    * password : 
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
    * from : 
    */ 
    public $from;

    public function getFrom()
    {
        return $this->from;
    }

    public function setFrom($value)
    {
        $this->from = $value;
    }

    /*
    * to : 
    */ 
    public $to;

    public function getTo()
    {
        return $this->to;
    }

    public function setTo($value)
    {
        $this->to = $value;
    }

    /*
    * checkExcelRestriction : 
    */ 
    public $check_excel_restriction;

    public function getCheckExcelRestriction()
    {
        return $this->check_excel_restriction;
    }

    public function setCheckExcelRestriction($value)
    {
        $this->check_excel_restriction = $value;
    }

    public function __construct()
    {        
    }

    public function createHttpRequest($headerSelector,$config)
    {
        // verify the required parameter 'file' is set
        if ($this->file === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling PostSplit'
            );
        } 

        // verify the required parameter 'format' is set
        if ($this->format === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $format when calling PostSplit'
            );
        } 

        $resourcePath = '/cells/split';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;    
        // query params : format
        if ($this->format !== null) {
            $queryParams['format'] = ObjectSerializer::toQueryValue($this->format);
        }
        // query params : password
        if ($this->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($this->password);
        }
        // query params : from
        if ($this->from !== null) {
            $queryParams['from'] = ObjectSerializer::toQueryValue($this->from);
        }
        // query params : to
        if ($this->to !== null) {
            $queryParams['to'] = ObjectSerializer::toQueryValue($this->to);
        }
        // query params : check_excel_restriction
        if ($this->check_excel_restriction !== null) {
            $queryParams['checkExcelRestriction'] = ObjectSerializer::toQueryValue($this->check_excel_restriction);
        }
        if ($this->file !== null) {
            $multipart = true;
            if( is_array($this->file)){
                foreach($this->file as $key => $value) {
                    $formParams[$key] = \GuzzleHttp\Psr7\ Utils::tryFopen(ObjectSerializer::toFormValue($value), 'rb');
                }
            }else {
                $formParams['File'] = \GuzzleHttp\Psr7\ Utils::tryFopen(ObjectSerializer::toFormValue($this->file), 'rb');
            }
        }

    // body params
        $_tempBody = null;
        $_tempBodyName ;
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
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );    
    }

}