<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CopyFileRequest.cs">
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
 * Request model for  CopyFile operation.
 */

class CopyFileRequest extends BaseApiRequest
{

    /*
    * srcPath : 
    */ 
    public $src_path;

    public function getSrcPath()
    {
        return $this->src_path;
    }

    public function setSrcPath($value)
    {
        $this->src_path = $value;
    }

    /*
    * destPath : 
    */ 
    public $dest_path;

    public function getDestPath()
    {
        return $this->dest_path;
    }

    public function setDestPath($value)
    {
        $this->dest_path = $value;
    }

    /*
    * srcStorageName : 
    */ 
    public $src_storage_name;

    public function getSrcStorageName()
    {
        return $this->src_storage_name;
    }

    public function setSrcStorageName($value)
    {
        $this->src_storage_name = $value;
    }

    /*
    * destStorageName : 
    */ 
    public $dest_storage_name;

    public function getDestStorageName()
    {
        return $this->dest_storage_name;
    }

    public function setDestStorageName($value)
    {
        $this->dest_storage_name = $value;
    }

    /*
    * versionId : 
    */ 
    public $version_id;

    public function getVersionId()
    {
        return $this->version_id;
    }

    public function setVersionId($value)
    {
        $this->version_id = $value;
    }

    public function __construct()
    {        
    }

    public function createHttpRequest($headerSelector,$config)
    {
        // verify the required parameter 'src_path' is set
        if ($this->src_path === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $src_path when calling CopyFile'
            );
        } 

        // verify the required parameter 'dest_path' is set
        if ($this->dest_path === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dest_path when calling CopyFile'
            );
        } 

        $resourcePath = '/cells/storage/file/copy/{srcPath}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;    
        // src_path params
        if ($this->src_path !== null) {
            $resourcePath = str_replace(
                '{' . 'srcPath' . '}',
                ObjectSerializer::toPathValue($this->src_path),
                $resourcePath
            );
        }
        // query params : dest_path
        if ($this->dest_path !== null) {
            $queryParams['destPath'] = ObjectSerializer::toQueryValue($this->dest_path);
        }
        // query params : src_storage_name
        if ($this->src_storage_name !== null) {
            $queryParams['srcStorageName'] = ObjectSerializer::toQueryValue($this->src_storage_name);
        }
        // query params : dest_storage_name
        if ($this->dest_storage_name !== null) {
            $queryParams['destStorageName'] = ObjectSerializer::toQueryValue($this->dest_storage_name);
        }
        // query params : version_id
        if ($this->version_id !== null) {
            $queryParams['versionId'] = ObjectSerializer::toQueryValue($this->version_id);
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