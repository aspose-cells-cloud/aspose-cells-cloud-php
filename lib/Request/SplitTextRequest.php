<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SplitTextRequest.cs">
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
 * Request model for  SplitText operation.
 */

class SplitTextRequest extends BaseApiRequest
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
    * splitDelimitersType : Indicates split delimiters type.
    */ 
    public $split_delimiters_type;

    public function getSplitDelimitersType()
    {
        return $this->split_delimiters_type;
    }

    public function setSplitDelimitersType($value)
    {
        $this->split_delimiters_type = $value;
    }

    /*
    * customDelimiter : Indicates the custom delimiter.
    */ 
    public $custom_delimiter;

    public function getCustomDelimiter()
    {
        return $this->custom_delimiter;
    }

    public function setCustomDelimiter($value)
    {
        $this->custom_delimiter = $value;
    }

    /*
    * keepDelimitersInResultingCells : Indicates keep delimiters in resulting cells.
    */ 
    public $keep_delimiters_in_resulting_cells;

    public function getKeepDelimitersInResultingCells()
    {
        return $this->keep_delimiters_in_resulting_cells;
    }

    public function setKeepDelimitersInResultingCells($value)
    {
        $this->keep_delimiters_in_resulting_cells = $value;
    }

    /*
    * keepDelimitersPosition : Indicates keep delimiters position.
    */ 
    public $keep_delimiters_position;

    public function getKeepDelimitersPosition()
    {
        return $this->keep_delimiters_position;
    }

    public function setKeepDelimitersPosition($value)
    {
        $this->keep_delimiters_position = $value;
    }

    /*
    * HowToSplit : Indicates
    */ 
    public $how_to_split;

    public function getHowToSplit()
    {
        return $this->how_to_split;
    }

    public function setHowToSplit($value)
    {
        $this->how_to_split = $value;
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

    public function __construct( $spreadsheet = null,$split_delimiters_type = null,$custom_delimiter = null,$keep_delimiters_in_resulting_cells = null,$keep_delimiters_position = null,$how_to_split = null )
    {        
        $this->spreadsheet = $spreadsheet; 
        $this->split_delimiters_type = $split_delimiters_type; 
        $this->custom_delimiter = $custom_delimiter; 
        $this->keep_delimiters_in_resulting_cells = $keep_delimiters_in_resulting_cells; 
        $this->keep_delimiters_position = $keep_delimiters_position; 
        $this->how_to_split = $how_to_split; 
    }

    public function createHttpRequest($headerSelector,$config)
    {
        // verify the required parameter 'spreadsheet' is set
        if ($this->spreadsheet === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $spreadsheet when calling SplitText'
            );
        }


        // verify the required parameter 'split_delimiters_type' is set
        if ($this->split_delimiters_type === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $split_delimiters_type when calling SplitText'
            );
        }


        // verify the required parameter 'custom_delimiter' is set
        if ($this->custom_delimiter === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $custom_delimiter when calling SplitText'
            );
        }


        // verify the required parameter 'keep_delimiters_in_resulting_cells' is set
        if ($this->keep_delimiters_in_resulting_cells === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $keep_delimiters_in_resulting_cells when calling SplitText'
            );
        }


        // verify the required parameter 'keep_delimiters_position' is set
        if ($this->keep_delimiters_position === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $keep_delimiters_position when calling SplitText'
            );
        }


        // verify the required parameter 'how_to_split' is set
        if ($this->how_to_split === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $how_to_split when calling SplitText'
            );
        }


        $resourcePath = 'v4.0/cells/content/split/text';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;    
        // query params : split_delimiters_type
        if ($this->split_delimiters_type !== null) {
            $queryParams['splitDelimitersType'] = ObjectSerializer::toQueryValue($this->split_delimiters_type);
        }
        // query params : custom_delimiter
        if ($this->custom_delimiter !== null) {
            $queryParams['customDelimiter'] = ObjectSerializer::toQueryValue($this->custom_delimiter);
        }
        // query params : keep_delimiters_in_resulting_cells
        if ($this->keep_delimiters_in_resulting_cells !== null) {
            $queryParams['keepDelimitersInResultingCells'] = ObjectSerializer::toQueryValue($this->keep_delimiters_in_resulting_cells);
        }
        // query params : keep_delimiters_position
        if ($this->keep_delimiters_position !== null) {
            $queryParams['keepDelimitersPosition'] = ObjectSerializer::toQueryValue($this->keep_delimiters_position);
        }
        // query params : how_to_split
        if ($this->how_to_split !== null) {
            $queryParams['HowToSplit'] = ObjectSerializer::toQueryValue($this->how_to_split);
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