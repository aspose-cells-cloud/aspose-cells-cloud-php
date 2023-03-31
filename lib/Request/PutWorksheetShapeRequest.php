<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutWorksheetShapeRequest.cs">
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
 * Request model for  PutWorksheetShape operation.
 */

class PutWorksheetShapeRequest extends BaseApiRequest
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
    * shapeDTO : 
    */ 
    public $shape_dto;

    public function getShapeDTO()
    {
        return $this->shape_dto;
    }

    public function setShapeDTO($value)
    {
        $this->shape_dto = $value;
    }

    /*
    * DrawingType : 
    */ 
    public $drawing_type;

    public function getDrawingType()
    {
        return $this->drawing_type;
    }

    public function setDrawingType($value)
    {
        $this->drawing_type = $value;
    }

    /*
    * upperLeftRow : 
    */ 
    public $upper_left_row;

    public function getUpperLeftRow()
    {
        return $this->upper_left_row;
    }

    public function setUpperLeftRow($value)
    {
        $this->upper_left_row = $value;
    }

    /*
    * upperLeftColumn : 
    */ 
    public $upper_left_column;

    public function getUpperLeftColumn()
    {
        return $this->upper_left_column;
    }

    public function setUpperLeftColumn($value)
    {
        $this->upper_left_column = $value;
    }

    /*
    * top : 
    */ 
    public $top;

    public function getTop()
    {
        return $this->top;
    }

    public function setTop($value)
    {
        $this->top = $value;
    }

    /*
    * left : 
    */ 
    public $left;

    public function getLeft()
    {
        return $this->left;
    }

    public function setLeft($value)
    {
        $this->left = $value;
    }

    /*
    * width : 
    */ 
    public $width;

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($value)
    {
        $this->width = $value;
    }

    /*
    * height : 
    */ 
    public $height;

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($value)
    {
        $this->height = $value;
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
                'Missing the required parameter $name when calling PutWorksheetShape'
            );
        } 

        // verify the required parameter 'sheet_name' is set
        if ($this->sheet_name === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sheet_name when calling PutWorksheetShape'
            );
        } 

        $resourcePath = '/cells/{name}/worksheets/{sheetName}/shapes';
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
        // query params : drawing_type
        if ($this->drawing_type !== null) {
            $queryParams['DrawingType'] = ObjectSerializer::toQueryValue($this->drawing_type);
        }
        // query params : upper_left_row
        if ($this->upper_left_row !== null) {
            $queryParams['upperLeftRow'] = ObjectSerializer::toQueryValue($this->upper_left_row);
        }
        // query params : upper_left_column
        if ($this->upper_left_column !== null) {
            $queryParams['upperLeftColumn'] = ObjectSerializer::toQueryValue($this->upper_left_column);
        }
        // query params : top
        if ($this->top !== null) {
            $queryParams['top'] = ObjectSerializer::toQueryValue($this->top);
        }
        // query params : left
        if ($this->left !== null) {
            $queryParams['left'] = ObjectSerializer::toQueryValue($this->left);
        }
        // query params : width
        if ($this->width !== null) {
            $queryParams['width'] = ObjectSerializer::toQueryValue($this->width);
        }
        // query params : height
        if ($this->height !== null) {
            $queryParams['height'] = ObjectSerializer::toQueryValue($this->height);
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
        if (isset($this->shape_dto)) {
            $_tempBody = $this->shape_dto;
            $_tempBodyName =str_replace('_','', 'shape_dto');
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
            'PUT',
            $config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );    
    }

}