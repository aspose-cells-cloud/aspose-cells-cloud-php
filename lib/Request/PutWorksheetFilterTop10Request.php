<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutWorksheetFilterTop10Request.cs">
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
 * Request model for  PutWorksheetFilterTop10 operation.
 */

class PutWorksheetFilterTop10Request extends BaseApiRequest
{

    /*
    * name : 
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
    * sheetName : 
    */ 
    public $sheet_name;

    public function getSheetName()
    {
        return $this->sheet_name;
    }

    public function setSheetName($value)
    {
        $this->sheet_name = $value;
    }

    /*
    * range : 
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
    * fieldIndex : 
    */ 
    public $field_index;

    public function getFieldIndex()
    {
        return $this->field_index;
    }

    public function setFieldIndex($value)
    {
        $this->field_index = $value;
    }

    /*
    * isTop : 
    */ 
    public $is_top;

    public function getIsTop()
    {
        return $this->is_top;
    }

    public function setIsTop($value)
    {
        $this->is_top = $value;
    }

    /*
    * isPercent : 
    */ 
    public $is_percent;

    public function getIsPercent()
    {
        return $this->is_percent;
    }

    public function setIsPercent($value)
    {
        $this->is_percent = $value;
    }

    /*
    * itemCount : 
    */ 
    public $item_count;

    public function getItemCount()
    {
        return $this->item_count;
    }

    public function setItemCount($value)
    {
        $this->item_count = $value;
    }

    /*
    * matchBlanks : 
    */ 
    public $match_blanks;

    public function getMatchBlanks()
    {
        return $this->match_blanks;
    }

    public function setMatchBlanks($value)
    {
        $this->match_blanks = $value;
    }

    /*
    * refresh : 
    */ 
    public $refresh;

    public function getRefresh()
    {
        return $this->refresh;
    }

    public function setRefresh($value)
    {
        $this->refresh = $value;
    }

    /*
    * folder : 
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
    * storageName : 
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

    public function __construct()
    {        
    }

    public function createHttpRequest($headerSelector,$config)
    {
        // verify the required parameter 'name' is set
        if ($this->name === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling PutWorksheetFilterTop10'
            );
        } 

        // verify the required parameter 'sheet_name' is set
        if ($this->sheet_name === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sheet_name when calling PutWorksheetFilterTop10'
            );
        } 

        // verify the required parameter 'range' is set
        if ($this->range === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $range when calling PutWorksheetFilterTop10'
            );
        } 

        // verify the required parameter 'field_index' is set
        if ($this->field_index === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $field_index when calling PutWorksheetFilterTop10'
            );
        } 

        // verify the required parameter 'is_top' is set
        if ($this->is_top === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $is_top when calling PutWorksheetFilterTop10'
            );
        } 

        // verify the required parameter 'is_percent' is set
        if ($this->is_percent === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $is_percent when calling PutWorksheetFilterTop10'
            );
        } 

        // verify the required parameter 'item_count' is set
        if ($this->item_count === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $item_count when calling PutWorksheetFilterTop10'
            );
        } 

        $resourcePath = '/cells/{name}/worksheets/{sheetName}/autoFilter/filterTop10';
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
        // sheet_name params
        if ($this->sheet_name !== null) {
            $resourcePath = str_replace(
                '{' . 'sheetName' . '}',
                ObjectSerializer::toPathValue($this->sheet_name),
                $resourcePath
            );
        }
        // query params : range
        if ($this->range !== null) {
            $queryParams['range'] = ObjectSerializer::toQueryValue($this->range);
        }
        // query params : field_index
        if ($this->field_index !== null) {
            $queryParams['fieldIndex'] = ObjectSerializer::toQueryValue($this->field_index);
        }
        // query params : is_top
        if ($this->is_top !== null) {
            $queryParams['isTop'] = ObjectSerializer::toQueryValue($this->is_top);
        }
        // query params : is_percent
        if ($this->is_percent !== null) {
            $queryParams['isPercent'] = ObjectSerializer::toQueryValue($this->is_percent);
        }
        // query params : item_count
        if ($this->item_count !== null) {
            $queryParams['itemCount'] = ObjectSerializer::toQueryValue($this->item_count);
        }
        // query params : match_blanks
        if ($this->match_blanks !== null) {
            $queryParams['matchBlanks'] = ObjectSerializer::toQueryValue($this->match_blanks);
        }
        // query params : refresh
        if ($this->refresh !== null) {
            $queryParams['refresh'] = ObjectSerializer::toQueryValue($this->refresh);
        }
        // query params : folder
        if ($this->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($this->folder);
        }
        // query params : storage_name
        if ($this->storage_name !== null) {
            $queryParams['storageName'] = ObjectSerializer::toQueryValue($this->storage_name);
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
            'PUT',
            $config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );    
    }

}