<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ExportChartAsFormatRequest.cs">
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
 * Request model for  ExportChartAsFormat operation.
 */

class ExportChartAsFormatRequest extends BaseApiRequest
{

    /*
    * name : (Required) The name of the workbook file to be retrieved.
    */ 
    public $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($value)
    {
        $this->name = $value;
    }

    /*
    * worksheet : 
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
    * chartIndex : 
    */ 
    public $chart_index;

    public function getChartIndex()
    {
        return $this->chart_index;
    }

    public function setChartIndex($value)
    {
        $this->chart_index = $value;
    }

    /*
    * format : (Required) The desired pdf or image format  (e.g., "png", "Pdf", "svg").
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
    * folder : (Optional) The folder path where the workbook is stored. The default is null.
    */ 
    public $folder;

    public function getFolder()
    {
        return $this->folder;
    }

    public function setFolder($value)
    {
        $this->folder = $value;
    }

    /*
    * storageName : (Optional) The name of the storage if using custom cloud storage. Use default storage if omitted.
    */ 
    public $storage_name;

    public function getStorageName()
    {
        return $this->storage_name;
    }

    public function setStorageName($value)
    {
        $this->storage_name = $value;
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

    public function __construct( $name = null,$worksheet = null,$chart_index = null,$format = null )
    {        
        $this->name = $name; 
        $this->worksheet = $worksheet; 
        $this->chart_index = $chart_index; 
        $this->format = $format; 
    }

    public function createHttpRequest($headerSelector,$config)
    {
        // verify the required parameter 'name' is set
        if ($this->name === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling ExportChartAsFormat'
            );
        }


        // verify the required parameter 'worksheet' is set
        if ($this->worksheet === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $worksheet when calling ExportChartAsFormat'
            );
        }


        // verify the required parameter 'chart_index' is set
        if ($this->chart_index === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $chart_index when calling ExportChartAsFormat'
            );
        }


        // verify the required parameter 'format' is set
        if ($this->format === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $format when calling ExportChartAsFormat'
            );
        }


        $resourcePath = 'v4.0/cells/{name}/worksheets/{worksheet}/charts/{chartIndex}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;    
        // name params
        if ($this->name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($this->name),
                $resourcePath
            );
        }
        // worksheet params
        if ($this->worksheet !== null) {
            $resourcePath = str_replace(
                '{' . 'worksheet' . '}',
                ObjectSerializer::toPathValue($this->worksheet),
                $resourcePath
            );
        }
        // chart_index params
        if ($this->chart_index !== null) {
            $resourcePath = str_replace(
                '{' . 'chartIndex' . '}',
                ObjectSerializer::toPathValue($this->chart_index),
                $resourcePath
            );
        }
        // query params : format
        if ($this->format !== null) {
            $queryParams['format'] = ObjectSerializer::toQueryValue($this->format);
        }
        // query params : folder
        if ($this->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($this->folder);
        }
        // query params : storage_name
        if ($this->storage_name !== null) {
            $queryParams['storageName'] = ObjectSerializer::toQueryValue($this->storage_name);
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
        // query params : regoin
        if ($this->regoin !== null) {
            $queryParams['regoin'] = ObjectSerializer::toQueryValue($this->regoin);
        }
        // query params : password
        if ($this->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($this->password);
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
        $defaultHeaders['x-aspose-client-version'] = '25.6.1';
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );    
    }

}