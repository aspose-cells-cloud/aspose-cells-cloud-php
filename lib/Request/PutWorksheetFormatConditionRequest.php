<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutWorksheetFormatConditionRequest.cs">
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
 * Request model for  PutWorksheetFormatCondition operation.
 */

class PutWorksheetFormatConditionRequest extends BaseApiRequest
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
    * index : 
    */ 
    public $index;

    public function getIndex()
    {
        return $this->index;
    }

    public function setIndex($value)
    {
        $this->index = $value;
    }

    /*
    * cellArea : 
    */ 
    public $cell_area;

    public function getCellArea()
    {
        return $this->cell_area;
    }

    public function setCellArea($value)
    {
        $this->cell_area = $value;
    }

    /*
    * type : 
    */ 
    public $type;

    public function getType()
    {
        return $this->type;
    }

    public function setType($value)
    {
        $this->type = $value;
    }

    /*
    * operatorType : 
    */ 
    public $operator_type;

    public function getOperatorType()
    {
        return $this->operator_type;
    }

    public function setOperatorType($value)
    {
        $this->operator_type = $value;
    }

    /*
    * formula1 : 
    */ 
    public $formula1;

    public function getFormula1()
    {
        return $this->formula1;
    }

    public function setFormula1($value)
    {
        $this->formula1 = $value;
    }

    /*
    * formula2 : 
    */ 
    public $formula2;

    public function getFormula2()
    {
        return $this->formula2;
    }

    public function setFormula2($value)
    {
        $this->formula2 = $value;
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
                'Missing the required parameter $name when calling PutWorksheetFormatCondition'
            );
        } 

        // verify the required parameter 'sheet_name' is set
        if ($this->sheet_name === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sheet_name when calling PutWorksheetFormatCondition'
            );
        } 

        // verify the required parameter 'index' is set
        if ($this->index === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $index when calling PutWorksheetFormatCondition'
            );
        } 

        // verify the required parameter 'cell_area' is set
        if ($this->cell_area === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cell_area when calling PutWorksheetFormatCondition'
            );
        } 

        // verify the required parameter 'type' is set
        if ($this->type === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $type when calling PutWorksheetFormatCondition'
            );
        } 

        // verify the required parameter 'operator_type' is set
        if ($this->operator_type === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $operator_type when calling PutWorksheetFormatCondition'
            );
        } 

        // verify the required parameter 'formula1' is set
        if ($this->formula1 === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $formula1 when calling PutWorksheetFormatCondition'
            );
        } 

        // verify the required parameter 'formula2' is set
        if ($this->formula2 === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $formula2 when calling PutWorksheetFormatCondition'
            );
        } 

        $resourcePath = '/cells/{name}/worksheets/{sheetName}/conditionalFormattings/{index}';
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
        // index params
        if ($this->index !== null) {
            $resourcePath = str_replace(
                '{' . 'index' . '}',
                ObjectSerializer::toPathValue($this->index),
                $resourcePath
            );
        }
        // query params : cell_area
        if ($this->cell_area !== null) {
            $queryParams['cellArea'] = ObjectSerializer::toQueryValue($this->cell_area);
        }
        // query params : type
        if ($this->type !== null) {
            $queryParams['type'] = ObjectSerializer::toQueryValue($this->type);
        }
        // query params : operator_type
        if ($this->operator_type !== null) {
            $queryParams['operatorType'] = ObjectSerializer::toQueryValue($this->operator_type);
        }
        // query params : formula1
        if ($this->formula1 !== null) {
            $queryParams['formula1'] = ObjectSerializer::toQueryValue($this->formula1);
        }
        // query params : formula2
        if ($this->formula2 !== null) {
            $queryParams['formula2'] = ObjectSerializer::toQueryValue($this->formula2);
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