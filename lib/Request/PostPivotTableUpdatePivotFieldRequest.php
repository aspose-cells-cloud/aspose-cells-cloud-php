<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostPivotTableUpdatePivotFieldRequest.cs">
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
 * Request model for  PostPivotTableUpdatePivotField operation.
 */

class PostPivotTableUpdatePivotFieldRequest extends BaseApiRequest
{

    /*
    * name : The workbook name.
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
    * sheetName : The worksheet name.
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
    * pivotTableIndex : Gets the PivotTable report by index.
    */ 
    public $pivot_table_index;

    public function getPivotTableIndex()
    {
        return $this->pivot_table_index;
    }

    public function setPivotTableIndex($value)
    {
        $this->pivot_table_index = $value;
    }

    /*
    * pivotFieldIndex : Gets the PivotField Object at the specific index.
    */ 
    public $pivot_field_index;

    public function getPivotFieldIndex()
    {
        return $this->pivot_field_index;
    }

    public function setPivotFieldIndex($value)
    {
        $this->pivot_field_index = $value;
    }

    /*
    * pivotFieldType : Represents PivotTable field type(Undefined/Row/Column/Page/Data).
    */ 
    public $pivot_field_type;

    public function getPivotFieldType()
    {
        return $this->pivot_field_type;
    }

    public function setPivotFieldType($value)
    {
        $this->pivot_field_type = $value;
    }

    /*
    * pivotField : Represents pivot field.
    */ 
    public $pivot_field;

    public function getPivotField()
    {
        return $this->pivot_field;
    }

    public function setPivotField($value)
    {
        $this->pivot_field = $value;
    }

    /*
    * needReCalculate : Whether the specific pivot table calculate(true/false).
    */ 
    public $need_re_calculate;

    public function getNeedReCalculate()
    {
        return $this->need_re_calculate;
    }

    public function setNeedReCalculate($value)
    {
        $this->need_re_calculate = $value;
    }

    /*
    * folder : Original workbook folder.
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
    * storageName : Storage name.
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
                'Missing the required parameter $name when calling PostPivotTableUpdatePivotField'
            );
        } 

        // verify the required parameter 'sheet_name' is set
        if ($this->sheet_name === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sheet_name when calling PostPivotTableUpdatePivotField'
            );
        } 

        // verify the required parameter 'pivot_table_index' is set
        if ($this->pivot_table_index === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pivot_table_index when calling PostPivotTableUpdatePivotField'
            );
        } 

        // verify the required parameter 'pivot_field_index' is set
        if ($this->pivot_field_index === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pivot_field_index when calling PostPivotTableUpdatePivotField'
            );
        } 

        // verify the required parameter 'pivot_field_type' is set
        if ($this->pivot_field_type === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pivot_field_type when calling PostPivotTableUpdatePivotField'
            );
        } 

        // verify the required parameter 'pivot_field' is set
        if ($this->pivot_field === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pivot_field when calling PostPivotTableUpdatePivotField'
            );
        } 

        $resourcePath = '/cells/{name}/worksheets/{sheetName}/pivottables/{pivotTableIndex}/PivotFields/{pivotFieldIndex}';
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
        // pivot_table_index params
        if ($this->pivot_table_index !== null) {
            $resourcePath = str_replace(
                '{' . 'pivotTableIndex' . '}',
                ObjectSerializer::toPathValue($this->pivot_table_index),
                $resourcePath
            );
        }
        // pivot_field_index params
        if ($this->pivot_field_index !== null) {
            $resourcePath = str_replace(
                '{' . 'pivotFieldIndex' . '}',
                ObjectSerializer::toPathValue($this->pivot_field_index),
                $resourcePath
            );
        }
        // query params : pivot_field_type
        if ($this->pivot_field_type !== null) {
            $queryParams['pivotFieldType'] = ObjectSerializer::toQueryValue($this->pivot_field_type);
        }
        // query params : need_re_calculate
        if ($this->need_re_calculate !== null) {
            $queryParams['needReCalculate'] = ObjectSerializer::toQueryValue($this->need_re_calculate);
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
        if (isset($this->pivot_field)) {
            $_tempBody = $this->pivot_field;
            $_tempBodyName =str_replace('_','', 'pivot_field');
        }
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