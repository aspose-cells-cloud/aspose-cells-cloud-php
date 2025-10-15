<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ImportDataIntoSpreadsheetRequest.cs">
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
 * Request model for  ImportDataIntoSpreadsheet operation.
 */

class ImportDataIntoSpreadsheetRequest extends BaseApiRequest
{

    /*
    * datafile : Upload data file.
    */ 
    public $datafile;

    public function getDatafile()
    {
        return $this->datafile;
    }

    public function setDatafile($value)
    {
        $this->datafile = $value;
    }

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
    * worksheet : Specify the worksheet for importing data
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
    * startcell : Specify the starting position for importing data
    */ 
    public $startcell;

    public function getStartcell()
    {
        return $this->startcell;
    }

    public function setStartcell($value)
    {
        $this->startcell = $value;
    }

    /*
    * insert : The specified import data is for insertion and overwrite.
    */ 
    public $insert;

    public function getInsert()
    {
        return $this->insert;
    }

    public function setInsert($value)
    {
        $this->insert = $value;
    }

    /*
    * convertNumericData : Specify whether to convert numerical data
    */ 
    public $convert_numeric_data;

    public function getConvertNumericData()
    {
        return $this->convert_numeric_data;
    }

    public function setConvertNumericData($value)
    {
        $this->convert_numeric_data = $value;
    }

    /*
    * splitter : Specify the delimiter for the CSV format.
    */ 
    public $splitter;

    public function getSplitter()
    {
        return $this->splitter;
    }

    public function setSplitter($value)
    {
        $this->splitter = $value;
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
    * fontsLocation : Use Custom fonts.
    */ 
    public $fonts_location;

    public function getFontsLocation()
    {
        return $this->fonts_location;
    }

    public function setFontsLocation($value)
    {
        $this->fonts_location = $value;
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

    public function __construct( $datafile = null,$spreadsheet = null,$worksheet = null,$startcell = null )
    {        
        $this->datafile = $datafile; 
        $this->spreadsheet = $spreadsheet; 
        $this->worksheet = $worksheet; 
        $this->startcell = $startcell; 
    }

    public function createHttpRequest($headerSelector,$config)
    {
        // verify the required parameter 'datafile' is set
        if ($this->datafile === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $datafile when calling ImportDataIntoSpreadsheet'
            );
        }


        // verify the required parameter 'spreadsheet' is set
        if ($this->spreadsheet === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $spreadsheet when calling ImportDataIntoSpreadsheet'
            );
        }


        // verify the required parameter 'worksheet' is set
        if ($this->worksheet === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $worksheet when calling ImportDataIntoSpreadsheet'
            );
        }


        // verify the required parameter 'startcell' is set
        if ($this->startcell === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $startcell when calling ImportDataIntoSpreadsheet'
            );
        }


        $resourcePath = 'v4.0/cells/import/data';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;    
        // query params : worksheet
        if ($this->worksheet !== null) {
            $queryParams['worksheet'] = ObjectSerializer::toQueryValue($this->worksheet);
        }
        // query params : startcell
        if ($this->startcell !== null) {
            $queryParams['startcell'] = ObjectSerializer::toQueryValue($this->startcell);
        }
        // query params : insert
        if ($this->insert !== null) {
            $queryParams['insert'] = ObjectSerializer::toQueryValue($this->insert);
        }
        // query params : convert_numeric_data
        if ($this->convert_numeric_data !== null) {
            $queryParams['convertNumericData'] = ObjectSerializer::toQueryValue($this->convert_numeric_data);
        }
        // query params : splitter
        if ($this->splitter !== null) {
            $queryParams['splitter'] = ObjectSerializer::toQueryValue($this->splitter);
        }
        // query params : out_path
        if ($this->out_path !== null) {
            $queryParams['outPath'] = ObjectSerializer::toQueryValue($this->out_path);
        }
        // query params : out_storage_name
        if ($this->out_storage_name !== null) {
            $queryParams['outStorageName'] = ObjectSerializer::toQueryValue($this->out_storage_name);
        }
        // query params : fonts_location
        if ($this->fonts_location !== null) {
            $queryParams['fontsLocation'] = ObjectSerializer::toQueryValue($this->fonts_location);
        }
        // query params : region
        if ($this->region !== null) {
            $queryParams['region'] = ObjectSerializer::toQueryValue($this->region);
        }
        // query params : password
        if ($this->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($this->password);
        }
        if ($this->datafile !== null) {
            $multipart = true;
            if( is_array($this->datafile)){
                foreach($this->datafile as $key => $value) {
                    $formParams[basename($key)] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($value), 'rb');
                }
            }else {
                $formParams[basename($this->datafile)] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($this->datafile), 'rb');
            }
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