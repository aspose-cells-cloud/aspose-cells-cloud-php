<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostWatermarkRequest.cs">
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
 * Request model for  PostWatermark operation.
 */

class PostWatermarkRequest extends BaseApiRequest
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
    * text : background text.
    */ 
    public $text;

    public function getText()
    {
        return $this->text;
    }

    public function setText($value)
    {
        $this->text = $value;
    }

    /*
    * color : e.g. #1032ff
    */ 
    public $color;

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($value)
    {
        $this->color = $value;
    }

    /*
    * outFormat : The output data file format.(CSV/XLS/HTML/MHTML/ODS/PDF/XML/TXT/TIFF/XLSB/XLSM/XLSX/XLTM/XLTX/XPS/PNG/JPG/JPEG/GIF/EMF/BMP/MD[Markdown]/Numbers)
    */ 
    public $out_format;

    public function getOutFormat()
    {
        return $this->out_format;
    }

    public function setOutFormat($value)
    {
        $this->out_format = $value;
    }

    /*
    * password : The password needed to open an Excel file.
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
    * checkExcelRestriction : Whether check restriction of excel file when user modify cells related objects.
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

    /*
    * region : The regional settings for workbook.
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

    public function __construct( $file = null,$text = null,$color = null )
    {        
        $this->file = $file; 
        $this->text = $text; 
        $this->color = $color; 
    }

    public function createHttpRequest($headerSelector,$config)
    {
        // verify the required parameter 'file' is set
        if ($this->file === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling PostWatermark'
            );
        }


        // verify the required parameter 'text' is set
        if ($this->text === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $text when calling PostWatermark'
            );
        }


        // verify the required parameter 'color' is set
        if ($this->color === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $color when calling PostWatermark'
            );
        }


        $resourcePath = 'v3.0/cells/watermark';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;    
        // query params : text
        if ($this->text !== null) {
            $queryParams['text'] = ObjectSerializer::toQueryValue($this->text);
        }
        // query params : color
        if ($this->color !== null) {
            $queryParams['color'] = ObjectSerializer::toQueryValue($this->color);
        }
        // query params : out_format
        if ($this->out_format !== null) {
            $queryParams['outFormat'] = ObjectSerializer::toQueryValue($this->out_format);
        }
        // query params : password
        if ($this->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($this->password);
        }
        // query params : check_excel_restriction
        if ($this->check_excel_restriction !== null) {
            $queryParams['checkExcelRestriction'] = ObjectSerializer::toQueryValue($this->check_excel_restriction);
        }
        // query params : region
        if ($this->region !== null) {
            $queryParams['region'] = ObjectSerializer::toQueryValue($this->region);
        }
        if ($this->file !== null) {
            $multipart = true;
            if( is_array($this->file)){
                foreach($this->file as $key => $value) {
                    $formParams[basename($key)] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($value), 'rb');
                }
            }else {
                $formParams[basename($this->file)] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($this->file), 'rb');
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
            'POST',
            $config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );    
    }

}