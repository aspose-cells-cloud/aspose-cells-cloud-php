<?php
/* 
 * <summary>
 *  Copyright (c) 2022 Aspose.Cells Cloud
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
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
 */


namespace Aspose\Cells\Cloud\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Aspose\Cells\Cloud\ApiException;
use Aspose\Cells\Cloud\Configuration;
use Aspose\Cells\Cloud\HeaderSelector;
use Aspose\Cells\Cloud\ObjectSerializer;

/**
 * LightCellsApi Class Doc Comment
 *
 * @category Class
 * @package  Aspose\Cells\Cloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 * @deprecated
 */
class LightCellsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    protected $_clientId;
    protected $_clientSecret;
    protected $_appVersion;
    protected $_getAccessTokenTime;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        $clientId,$clientSecret,$version ="v3.0",$baseUrl="https://api.aspose.cloud"
    ) {
        $this->_clientId = $clientId;
        $this->_clientSecret = $clientSecret;
        $this->_appVersion = $version;
        $this->_baseUrl = substr($baseUrl,-1)=="/"?substr($baseUrl,0,strlen($baseUrl)-1):$baseUrl;
        //[ 'proxy'=> '127.0.0.1:8888',"verify"=>false]
        $this->client =  new Client();
        $this->config =  new Configuration();
        $this->headerSelector =  new HeaderSelector();
        $grantType = "client_credentials";
        $this->config->setHost($this->_baseUrl."/".$this->_appVersion);
        $defaultHost =  $this->config->getHost();
        $this->config->setHost($this->_baseUrl);
        if(  empty( $clientId)  || empty( $clientId) ) {
            $this->_needAuth = false;
        }else{
            $this->config ->setAccessToken ( $this->getAccessToken($grantType, $clientId, $clientSecret,$version));
        }
        $this->_getAccessTokenTime = date('y-m-d h:i:s');
        $this->config->setHost( $defaultHost );
    }

    public function checkAccessToken(){
        if((strtotime(date('y-m-d h:i:s'))-strtotime($this->_getAccessTokenTime))>86400){
            $defaultHost =  $this->config->getHost();
            $this->config->setHost('https://api.aspose.cloud');
            $this->config ->setAccessToken ( $this->getAccessToken( "client_credentials",$this->_appSid, $this->_appKey, $this->_appVersion));
            $this->_getAccessTokenTime = date('y-m-d h:i:s');
            $this->config->setHost( $defaultHost );
        }
    }


    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation deleteMetadata
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $type type (optional, default to all)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Cells\Cloud\Model\FilesResult
     */
    public function deleteMetadata($file, $type = 'all' ,$check_excel_restriction = 'true')
    {
        $this->checkAccessToken();
        list($response) = $this->deleteMetadataWithHttpInfo($file, $type,$check_excel_restriction );
        return $response;
    }

    /**
     * Operation deleteMetadataWithHttpInfo
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $type (optional, default to all)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Cells\Cloud\Model\FilesResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteMetadataWithHttpInfo($file, $type = 'all', $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->deleteMetadataRequest($file, $type, $check_excel_restriction );

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Cells\Cloud\Model\FilesResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteMetadataAsync
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $type (optional, default to all)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteMetadataAsync($file, $type = 'all', $check_excel_restriction = 'true')
    {
        return $this->deleteMetadataAsyncWithHttpInfo($file, $type,$check_excel_restriction)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteMetadataAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $type (optional, default to all)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteMetadataAsyncWithHttpInfo($file, $type = 'all', $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->deleteMetadataRequest($file, $type,$check_excel_restriction);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'deleteMetadata'
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $type (optional, default to all)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteMetadataRequest($file, $type = 'all', $check_excel_restriction = 'true')
    {
        // verify the required parameter 'file' is set
        if ($file === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling deleteMetadata'
            );
        }

        $resourcePath = '/cells/metadata/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($type !== null) {
            $queryParams['type'] = ObjectSerializer::toQueryValue($type);
        }
        // query params
        if ($check_excel_restriction !== null) {
            $queryParams['checkExcelRestriction'] = ObjectSerializer::toQueryValue($check_excel_restriction);
        }


        // form params
        if ($file !== null) {
            $multipart = true;
            if( is_array($file)){
                foreach($file as $key => $value) {
                    $formParams[$key] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($value), 'rb');
                }
            }else {
                $formParams['File'] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($file), 'rb');
            }
            
        }
        // body params
        $_tempBody = null;
        $_tempBodyName ;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
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
            else if('deleteMetadata'==='cellsSaveAsPostDocumentSaveAs'){
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        if($this->config->getAccessToken()!==''){
            $defaultHeaders['Authorization']= 'Bearer ' . $this->config->getAccessToken();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getMetadata
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $type type (optional, default to all)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Cells\Cloud\Model\CellsDocumentProperty[]
     */
    public function getMetadata($file, $type = 'all', $check_excel_restriction = 'true')
    {
        $this->checkAccessToken();
        list($response) = $this->getMetadataWithHttpInfo($file, $type, $check_excel_restriction);
        return $response;
    }

    /**
     * Operation getMetadataWithHttpInfo
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $type (optional, default to all)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Cells\Cloud\Model\CellsDocumentProperty[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getMetadataWithHttpInfo($file, $type = 'all', $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\CellsDocumentProperty[]';
        $request = $this->getMetadataRequest($file, $type,$check_excel_restriction );

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Cells\Cloud\Model\CellsDocumentProperty[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getMetadataAsync
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $type (optional, default to all)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMetadataAsync($file, $type = 'all', $check_excel_restriction = 'true')
    {
        return $this->getMetadataAsyncWithHttpInfo($file, $type,$check_excel_restriction)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMetadataAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $type (optional, default to all)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMetadataAsyncWithHttpInfo($file, $type = 'all', $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\CellsDocumentProperty[]';
        $request = $this->getMetadataRequest($file, $type, $check_excel_restriction );

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getMetadata'
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $type (optional, default to all)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getMetadataRequest($file, $type = 'all', $check_excel_restriction = 'true')
    {
        // verify the required parameter 'file' is set
        if ($file === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling getMetadata'
            );
        }

        $resourcePath = '/cells/metadata/get';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($type !== null) {
            $queryParams['type'] = ObjectSerializer::toQueryValue($type);
        }
        // query params
        if ($check_excel_restriction !== null) {
            $queryParams['checkExcelRestriction'] = ObjectSerializer::toQueryValue($check_excel_restriction);
        }

        // form params
        if ($file !== null) {
            $multipart = true;
            if( is_array($file)){
                foreach($file as $key => $value) {
                    $formParams[$key] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($value), 'rb');
                }
            }else {
                $formParams['File'] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($file), 'rb');
            }
            
        }
        // body params
        $_tempBody = null;
        $_tempBodyName ;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
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
            else if('getMetadata'==='cellsSaveAsPostDocumentSaveAs'){
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        if($this->config->getAccessToken()!==''){
            $defaultHeaders['Authorization']= 'Bearer ' . $this->config->getAccessToken();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postAssemble
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $datasource datasource (required)
     * @param  string $format format (optional, default to Xlsx)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Cells\Cloud\Model\FilesResult
     */
    public function postAssemble($file, $datasource, $format = 'Xlsx', $check_excel_restriction = 'true')
    {
        $this->checkAccessToken();
        list($response) = $this->postAssembleWithHttpInfo($file, $datasource, $format,$check_excel_restriction);
        return $response;
    }

    /**
     * Operation postAssembleWithHttpInfo
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $datasource (required)
     * @param  string $format (optional, default to Xlsx)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Cells\Cloud\Model\FilesResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function postAssembleWithHttpInfo($file, $datasource, $format = 'Xlsx', $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->postAssembleRequest($file, $datasource, $format, $check_excel_restriction);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Cells\Cloud\Model\FilesResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postAssembleAsync
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $datasource (required)
     * @param  string $format (optional, default to Xlsx)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postAssembleAsync($file, $datasource, $format = 'Xlsx', $check_excel_restriction = 'true')
    {
        return $this->postAssembleAsyncWithHttpInfo($file, $datasource, $format, $check_excel_restriction)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postAssembleAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $datasource (required)
     * @param  string $format (optional, default to Xlsx)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postAssembleAsyncWithHttpInfo($file, $datasource, $format = 'Xlsx', $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->postAssembleRequest($file, $datasource, $format, $check_excel_restriction );

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'postAssemble'
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $datasource (required)
     * @param  string $format (optional, default to Xlsx)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postAssembleRequest($file, $datasource, $format = 'Xlsx', $check_excel_restriction ='true')
    {
        // verify the required parameter 'file' is set
        if ($file === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling postAssemble'
            );
        }
        // verify the required parameter 'datasource' is set
        if ($datasource === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $datasource when calling postAssemble'
            );
        }

        $resourcePath = '/cells/assemble';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = ObjectSerializer::toQueryValue($datasource);
        }
        // query params
        if ($format !== null) {
            $queryParams['format'] = ObjectSerializer::toQueryValue($format);
        }

        // query params
        if ($check_excel_restriction !== null) {
            $queryParams['checkExcelRestriction'] = ObjectSerializer::toQueryValue($check_excel_restriction);
        }

        // form params
        if ($file !== null) {
            $multipart = true;
            if( is_array($file)){
                foreach($file as $key => $value) {
                    $formParams[$key] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($value), 'rb');
                }
            }else {
                $formParams['File'] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($file), 'rb');
            }
            
        }
        // body params
        $_tempBody = null;
        $_tempBodyName ;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
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
            else if('postAssemble'==='cellsSaveAsPostDocumentSaveAs'){
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        if($this->config->getAccessToken()!==''){
            $defaultHeaders['Authorization']= 'Bearer ' . $this->config->getAccessToken();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postClearObjects
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $objecttype objecttype (required)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Cells\Cloud\Model\FilesResult
     */
    public function postClearObjects($file, $objecttype, $sheetname = null,  $out_format = null , $check_excel_restriction = 'true')
    {
        $this->checkAccessToken();
        list($response) = $this->postClearObjectsWithHttpInfo($file, $objecttype, $sheetname,  $out_format, $check_excel_restriction);
        return $response;
    }

    /**
     * Operation postClearObjectsWithHttpInfo
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $objecttype (required)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Cells\Cloud\Model\FilesResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function postClearObjectsWithHttpInfo($file, $objecttype, $sheetname = null,  $out_format = null, $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->postClearObjectsRequest($file, $objecttype, $sheetname,  $out_format, $check_excel_restriction);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Cells\Cloud\Model\FilesResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postClearObjectsAsync
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $objecttype (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postClearObjectsAsync($file, $objecttype, $sheetname = null,  $out_format = null, $check_excel_restriction = 'true')
    {
        return $this->postClearObjectsAsyncWithHttpInfo($file, $objecttype, $sheetname,  $out_format, $check_excel_restriction )
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postClearObjectsAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $objecttype (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postClearObjectsAsyncWithHttpInfo($file, $objecttype, $sheetname = null,  $out_format = null, $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->postClearObjectsRequest($file, $objecttype, $check_excel_restriction );

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'postClearObjects'
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $objecttype (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postClearObjectsRequest($file, $objecttype, $sheetname = null,  $out_format = null, $check_excel_restriction = 'true')
    {
        // verify the required parameter 'file' is set
        if ($file === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling postClearObjects'
            );
        }
        // verify the required parameter 'objecttype' is set
        if ($objecttype === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $objecttype when calling postClearObjects'
            );
        }

        $resourcePath = '/cells/clearobjects';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($objecttype !== null) {
            $queryParams['objecttype'] = ObjectSerializer::toQueryValue($objecttype);
        }
        if ($sheetname !== null) {
            $queryParams['sheetname'] = ObjectSerializer::toQueryValue($sheetname);
        }
        if ($out_format !== null) {
            $queryParams['outFormat'] = ObjectSerializer::toQueryValue($out_format);
        }
        // query params
        if ($check_excel_restriction !== null) {
            $queryParams['checkExcelRestriction'] = ObjectSerializer::toQueryValue($check_excel_restriction);
        }


        // form params
        if ($file !== null) {
            $multipart = true;
            if( is_array($file)){
                foreach($file as $key => $value) {
                    $formParams[$key] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($value), 'rb');
                }
            }else {
                $formParams['File'] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($file), 'rb');
            }
            
        }
        // body params
        $_tempBody = null;
        $_tempBodyName ;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
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
            else if('postClearObjects'==='cellsSaveAsPostDocumentSaveAs'){
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        if($this->config->getAccessToken()!==''){
            $defaultHeaders['Authorization']= 'Bearer ' . $this->config->getAccessToken();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postExport
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $object_type object_type (required)
     * @param  string $format format (required)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Cells\Cloud\Model\FilesResult
     */
    public function postExport($file, $object_type, $format, $check_excel_restriction = 'true', $extended_query_parameters = null)
    {
        $this->checkAccessToken();
        list($response) = $this->postExportWithHttpInfo($file, $object_type, $format, $check_excel_restriction, $extended_query_parameters);
        return $response;
    }

    /**
     * Operation postExportWithHttpInfo
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $object_type (required)
     * @param  string $format (required)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Cells\Cloud\Model\FilesResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function postExportWithHttpInfo($file, $object_type, $format, $check_excel_restriction = 'true', $extended_query_parameters = null)
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->postExportRequest($file, $object_type, $format, $check_excel_restriction , $extended_query_parameters);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Cells\Cloud\Model\FilesResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postExportAsync
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $object_type (required)
     * @param  string $format (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postExportAsync($file, $object_type, $format, $check_excel_restriction = 'true', $extended_query_parameters = null)
    {
        return $this->postExportAsyncWithHttpInfo($file, $object_type, $format, $check_excel_restriction , $extended_query_parameters)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postExportAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $object_type (required)
     * @param  string $format (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postExportAsyncWithHttpInfo($file, $object_type, $format, $check_excel_restriction = 'true', $extended_query_parameters = null)
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->postExportRequest($file, $object_type, $format, $check_excel_restriction , $extended_query_parameters);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'postExport'
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $object_type (required)
     * @param  string $format (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postExportRequest($file, $object_type, $format, $check_excel_restriction = 'true', $extended_query_parameters = null)
    {
        // verify the required parameter 'file' is set
        if ($file === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling postExport'
            );
        }
        // verify the required parameter 'object_type' is set
        if ($object_type === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $object_type when calling postExport'
            );
        }
        // verify the required parameter 'format' is set
        if ($format === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $format when calling postExport'
            );
        }



        $resourcePath = '/cells/export';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($object_type !== null) {
            $queryParams['objectType'] = ObjectSerializer::toQueryValue($object_type);
        }
        // query params
        if ($format !== null) {
            $queryParams['format'] = ObjectSerializer::toQueryValue($format);
        }
        // query params
        if ($check_excel_restriction !== null) {
            $queryParams['checkExcelRestriction'] = ObjectSerializer::toQueryValue($check_excel_restriction);
        }        
        if($extended_query_parameters !== null){
            foreach($extended_query_parameters as $key => $value) {
                $queryParams[$key] = ObjectSerializer::toQueryValue($value);
            }
        }

        // form params
        if ($file !== null) {
            $multipart = true;
            if( is_array($file)){
                foreach($file as $key => $value) {
                    $formParams[$key] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($value), 'rb');
                }
            }else {
                $formParams['File'] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($file), 'rb');
            }
            
        }
        // body params
        $_tempBody = null;
        $_tempBodyName ;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
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
            else if('postExport'==='cellsSaveAsPostDocumentSaveAs'){
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        if($this->config->getAccessToken()!==''){
            $defaultHeaders['Authorization']= 'Bearer ' . $this->config->getAccessToken();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postMerge
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $format format (optional, default to xlsx)
     * @param  bool $merge_to_one_sheet merge_to_one_sheet (optional, default to false)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Cells\Cloud\Model\FileInfo
     */
    public function postMerge($file, $format = 'xlsx', $merge_to_one_sheet = 'false', $check_excel_restriction = 'true')
    {
        $this->checkAccessToken();
        list($response) = $this->postMergeWithHttpInfo($file, $format, $merge_to_one_sheet, $check_excel_restriction );
        return $response;
    }

    /**
     * Operation postMergeWithHttpInfo
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $format (optional, default to xlsx)
     * @param  bool $merge_to_one_sheet (optional, default to false)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Cells\Cloud\Model\FileInfo, HTTP status code, HTTP response headers (array of strings)
     */
    public function postMergeWithHttpInfo($file, $format = 'xlsx', $merge_to_one_sheet = 'false', $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $request = $this->postMergeRequest($file, $format, $merge_to_one_sheet, $check_excel_restriction);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Cells\Cloud\Model\FileInfo',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postMergeAsync
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $format (optional, default to xlsx)
     * @param  bool $merge_to_one_sheet (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postMergeAsync($file, $format = 'xlsx', $merge_to_one_sheet = 'false', $check_excel_restriction = 'true')
    {
        return $this->postMergeAsyncWithHttpInfo($file, $format, $merge_to_one_sheet, $check_excel_restriction )
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postMergeAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $format (optional, default to xlsx)
     * @param  bool $merge_to_one_sheet (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postMergeAsyncWithHttpInfo($file, $format = 'xlsx', $merge_to_one_sheet = 'false', $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $request = $this->postMergeRequest($file, $format, $merge_to_one_sheet, $check_excel_restriction );

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'postMerge'
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $format (optional, default to xlsx)
     * @param  bool $merge_to_one_sheet (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postMergeRequest($file, $format = 'xlsx', $merge_to_one_sheet = 'false', $check_excel_restriction = 'true')
    {
        // verify the required parameter 'file' is set
        if ($file === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling postMerge'
            );
        }

        $resourcePath = '/cells/merge';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($format !== null) {
            $queryParams['format'] = ObjectSerializer::toQueryValue($format);
        }
        // query params
        if ($merge_to_one_sheet !== null) {
            $queryParams['mergeToOneSheet'] = ObjectSerializer::toQueryValue($merge_to_one_sheet);
        }
        // query params
        if ($check_excel_restriction !== null) {
            $queryParams['checkExcelRestriction'] = ObjectSerializer::toQueryValue($check_excel_restriction);
        }


        // form params
        if ($file !== null) {
            $multipart = true;
            if( is_array($file)){
                foreach($file as $key => $value) {
                    $formParams[$key] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($value), 'rb');
                }
            }else {
                $formParams['File'] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($file), 'rb');
            }
            
        }
        // body params
        $_tempBody = null;
        $_tempBodyName ;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
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
            else if('postMerge'==='cellsSaveAsPostDocumentSaveAs'){
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        if($this->config->getAccessToken()!==''){
            $defaultHeaders['Authorization']= 'Bearer ' . $this->config->getAccessToken();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }
    /**
     * Operation postImport
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $object_type object_type (required)
     * @param  string $format format (required)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Cells\Cloud\Model\FilesResult
     */
    public function postImport($file,$importoption)
    {
        $this->checkAccessToken();
        list($response) = $this->postImportWithHttpInfo($file,$importoption);
        return $response;
    }

    /**
     * Operation postImportWithHttpInfo
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $object_type (required)
     * @param  string $format (required)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Cells\Cloud\Model\FilesResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function postImportWithHttpInfo($file,$importoption)
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->postImportRequest($file,$importoption);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Cells\Cloud\Model\FilesResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postImportAsync
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $object_type (required)
     * @param  string $format (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImportAsync($file,$importoption)
    {
        return $this->postImportAsyncWithHttpInfo($file,$importoption)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postImportAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $object_type (required)
     * @param  string $format (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postImportAsyncWithHttpInfo($file,$importoption)
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->postImportRequest($file,$importoption);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'postImport'
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $object_type (required)
     * @param  string $format (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postImportRequest($file,$importoption)
    {
        // verify the required parameter 'file' is set
        if ($file === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling postImport'
            );
        }


        $resourcePath = '/cells/import';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // form params
        if ($file !== null) {
            $multipart = true;
            if( is_array($file)){
                foreach($file as $key => $value) {
                    $formParams[$key] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($value), 'rb');
                }
            }else {
                $formParams['file'] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($file), 'rb');
            }
            
        }
        // body params
        $_tempBody = null;
        $_tempBodyName ;
        
        if (isset($importoption)) {
            $_tempBody = $importoption;
            $_tempBodyName ='importoption';
        }
        
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['multipart/form-data']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['multipart/form-data'],
                ['multipart/form-data']
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
            else if('postImport'==='cellsSaveAsPostDocumentSaveAs'){
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        if($this->config->getAccessToken()!==''){
            $defaultHeaders['Authorization']= 'Bearer ' . $this->config->getAccessToken();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postMetadata
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  \Aspose\Cells\Cloud\Model\CellsDocumentProperty $document_properties Cells document property. (required)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Cells\Cloud\Model\FilesResult
     */
    public function postMetadata($file, $document_properties, $check_excel_restriction = 'true')
    {
        $this->checkAccessToken();
        list($response) = $this->postMetadataWithHttpInfo($file, $document_properties, $check_excel_restriction );
        return $response;
    }

    /**
     * Operation postMetadataWithHttpInfo
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  \Aspose\Cells\Cloud\Model\CellsDocumentProperty $document_properties Cells document property. (required)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Cells\Cloud\Model\FilesResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function postMetadataWithHttpInfo($file, $document_properties, $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->postMetadataRequest($file, $document_properties, $check_excel_restriction );

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Cells\Cloud\Model\FilesResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postMetadataAsync
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  \Aspose\Cells\Cloud\Model\CellsDocumentProperty $document_properties Cells document property. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postMetadataAsync($file, $document_properties, $check_excel_restriction = 'true')
    {
        return $this->postMetadataAsyncWithHttpInfo($file, $document_properties, $check_excel_restriction )
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postMetadataAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  \Aspose\Cells\Cloud\Model\CellsDocumentProperty $document_properties Cells document property. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postMetadataAsyncWithHttpInfo($file, $document_properties, $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->postMetadataRequest($file, $document_properties, $check_excel_restriction);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'postMetadata'
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  \Aspose\Cells\Cloud\Model\CellsDocumentProperty $document_properties Cells document property. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postMetadataRequest($file, $document_properties, $check_excel_restriction = 'true')
    {
        // verify the required parameter 'file' is set
        if ($file === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling postMetadata'
            );
        }
        // verify the required parameter 'document_properties' is set
        if ($document_properties === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $document_properties when calling postMetadata'
            );
        }

        $resourcePath = '/cells/metadata/update';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($check_excel_restriction !== null) {
            $queryParams['checkExcelRestriction'] = ObjectSerializer::toQueryValue($check_excel_restriction);
        }


        // form params
        if ($file !== null) {
            $multipart = true;
            if( is_array($file)){
                foreach($file as $key => $value) {
                    $formParams[$key] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($value), 'rb');
                }
            }else {
                $formParams['File'] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($file), 'rb');
            }
            
        }
        // body params
        $_tempBody = null;
        $_tempBodyName ;
        if (isset($document_properties)) {
            $_tempBody = $document_properties;
            $_tempBodyName =str_replace('_','', 'document_properties');
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['multipart/form-data']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['multipart/form-data'],
                ['multipart/form-data']
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
            else if('postMetadata'==='cellsSaveAsPostDocumentSaveAs'){
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        if($this->config->getAccessToken()!==''){
            $defaultHeaders['Authorization']= 'Bearer ' . $this->config->getAccessToken();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postProtect
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $password password (required)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Cells\Cloud\Model\FilesResult
     */
    public function postProtect($file, $password)
    {
        $this->checkAccessToken();
        list($response) = $this->postProtectWithHttpInfo($file, $password);
        return $response;
    }

    /**
     * Operation postProtectWithHttpInfo
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $password (required)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Cells\Cloud\Model\FilesResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function postProtectWithHttpInfo($file, $password)
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->postProtectRequest($file, $password);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Cells\Cloud\Model\FilesResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postProtectAsync
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $password (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postProtectAsync($file, $password)
    {
        return $this->postProtectAsyncWithHttpInfo($file, $password)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postProtectAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $password (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postProtectAsyncWithHttpInfo($file, $password)
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->postProtectRequest($file, $password);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'postProtect'
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $password (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postProtectRequest($file, $password)
    {
        // verify the required parameter 'file' is set
        if ($file === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling postProtect'
            );
        }
        // verify the required parameter 'password' is set
        if ($password === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $password when calling postProtect'
            );
        }

        $resourcePath = '/cells/protect';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($password);
        }


        // form params
        if ($file !== null) {
            $multipart = true;
            if( is_array($file)){
                foreach($file as $key => $value) {
                    $formParams[$key] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($value), 'rb');
                }
            }else {
                $formParams['File'] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($file), 'rb');
            }
            
        }
        // body params
        $_tempBody = null;
        $_tempBodyName ;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
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
            else if('postProtect'==='cellsSaveAsPostDocumentSaveAs'){
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        if($this->config->getAccessToken()!==''){
            $defaultHeaders['Authorization']= 'Bearer ' . $this->config->getAccessToken();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postSearch
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $text text (required)
     * @param  string $password password (optional)
     * @param  string $sheetname sheetname (optional)
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function postSearch($file, $text, $password = null, $sheetname = null, $check_excel_restriction = 'true')
    {
        $this->checkAccessToken();
        list($response) = $this->postSearchWithHttpInfo($file, $text, $password, $sheetname, $check_excel_restriction );
        return $response;
    }

    /**
     * Operation postSearchWithHttpInfo
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $text (required)
     * @param  string $password (optional)
     * @param  string $sheetname (optional)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Cells\Cloud\Model\TextItem, HTTP status code, HTTP response headers (array of strings)
     */
    public function postSearchWithHttpInfo($file, $text, $password = null, $sheetname = null, $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\TextItem[]';
        $request = $this->postSearchRequest($file, $text, $password, $sheetname, $check_excel_restriction );

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Cells\Cloud\Model\TextItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postSearchAsync
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $text (required)
     * @param  string $password (optional)
     * @param  string $sheetname (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postSearchAsync($file, $text, $password = null, $sheetname = null, $check_excel_restriction = 'true')
    {
        return $this->postSearchAsyncWithHttpInfo($file, $text, $password, $sheetname, $check_excel_restriction )
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postSearchAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $text (required)
     * @param  string $password (optional)
     * @param  string $sheetname (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postSearchAsyncWithHttpInfo($file, $text, $password = null, $sheetname = null, $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\TextItem[]';
        $request = $this->postSearchRequest($file, $text, $password, $sheetname, $check_excel_restriction );

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'postSearch'
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $text (required)
     * @param  string $password (optional)
     * @param  string $sheetname (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSearchRequest($file, $text, $password = null, $sheetname = null, $check_excel_restriction = 'true')
    {
        // verify the required parameter 'file' is set
        if ($file === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling postSearch'
            );
        }
        // verify the required parameter 'text' is set
        if ($text === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $text when calling postSearch'
            );
        }

        $resourcePath = '/cells/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($text !== null) {
            $queryParams['text'] = ObjectSerializer::toQueryValue($text);
        }
        // query params
        if ($password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($password);
        }
        // query params
        if ($sheetname !== null) {
            $queryParams['sheetname'] = ObjectSerializer::toQueryValue($sheetname);
        }
        // query params
        if ($check_excel_restriction !== null) {
            $queryParams['checkExcelRestriction'] = ObjectSerializer::toQueryValue($check_excel_restriction);
        }


        // form params
        if ($file !== null) {
            $multipart = true;
            if( is_array($file)){
                foreach($file as $key => $value) {
                    $formParams[$key] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($value), 'rb');
                }
            }else {
                $formParams['File'] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($file), 'rb');
            }
            
        }
        // body params
        $_tempBody = null;
        $_tempBodyName ;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
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
            else if('postSearch'==='cellsSaveAsPostDocumentSaveAs'){
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        if($this->config->getAccessToken()!==''){
            $defaultHeaders['Authorization']= 'Bearer ' . $this->config->getAccessToken();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postSplit
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $format format (required)
     * @param  string $password password (optional)
     * @param  int $from from (optional)
     * @param  int $to to (optional)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Cells\Cloud\Model\FilesResult
     */
    public function postSplit($file, $format, $password = null, $from = null, $to = null, $check_excel_restriction = 'true')
    {
        $this->checkAccessToken();
        list($response) = $this->postSplitWithHttpInfo($file, $format, $password, $from, $to, $check_excel_restriction );
        return $response;
    }

    /**
     * Operation postSplitWithHttpInfo
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $format (required)
     * @param  string $password (optional)
     * @param  int $from (optional)
     * @param  int $to (optional)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Cells\Cloud\Model\FilesResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function postSplitWithHttpInfo($file, $format, $password = null, $from = null, $to = null, $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->postSplitRequest($file, $format, $password, $from, $to, $check_excel_restriction);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Cells\Cloud\Model\FilesResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postSplitAsync
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $format (required)
     * @param  string $password (optional)
     * @param  int $from (optional)
     * @param  int $to (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postSplitAsync($file, $format, $password = null, $from = null, $to = null, $check_excel_restriction = 'true')
    {
        return $this->postSplitAsyncWithHttpInfo($file, $format, $password, $from, $to, $check_excel_restriction )
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postSplitAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $format (required)
     * @param  string $password (optional)
     * @param  int $from (optional)
     * @param  int $to (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postSplitAsyncWithHttpInfo($file, $format, $password = null, $from = null, $to = null, $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->postSplitRequest($file, $format, $password, $from, $to, $check_excel_restriction);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'postSplit'
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $format (required)
     * @param  string $password (optional)
     * @param  int $from (optional)
     * @param  int $to (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSplitRequest($file, $format, $password = null, $from = null, $to = null, $check_excel_restriction = 'true')
    {
        // verify the required parameter 'file' is set
        if ($file === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling postSplit'
            );
        }
        // verify the required parameter 'format' is set
        if ($format === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $format when calling postSplit'
            );
        }

        $resourcePath = '/cells/split';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($format !== null) {
            $queryParams['format'] = ObjectSerializer::toQueryValue($format);
        }
        // query params
        if ($password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($password);
        }
        // query params
        if ($from !== null) {
            $queryParams['from'] = ObjectSerializer::toQueryValue($from);
        }
        // query params
        if ($to !== null) {
            $queryParams['to'] = ObjectSerializer::toQueryValue($to);
        }        
        // query params
        if ($check_excel_restriction !== null) {
            $queryParams['checkExcelRestriction'] = ObjectSerializer::toQueryValue($check_excel_restriction);
        }


        // form params
        if ($file !== null) {
            $multipart = true;
            if( is_array($file)){
                foreach($file as $key => $value) {
                    $formParams[$key] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($value), 'rb');
                }
            }else {
                $formParams['File'] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($file), 'rb');
            }
            
        }
        // body params
        $_tempBody = null;
        $_tempBodyName ;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
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
            else if('postSplit'==='cellsSaveAsPostDocumentSaveAs'){
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        if($this->config->getAccessToken()!==''){
            $defaultHeaders['Authorization']= 'Bearer ' . $this->config->getAccessToken();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postUnlock
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $password password (required)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Cells\Cloud\Model\FilesResult
     */
    public function postUnlock($file, $password)
    {
        $this->checkAccessToken();
        list($response) = $this->postUnlockWithHttpInfo($file, $password);
        return $response;
    }

    /**
     * Operation postUnlockWithHttpInfo
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $password (required)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Cells\Cloud\Model\FilesResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function postUnlockWithHttpInfo($file, $password)
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->postUnlockRequest($file, $password);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Cells\Cloud\Model\FilesResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postUnlockAsync
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $password (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postUnlockAsync($file, $password)
    {
        return $this->postUnlockAsyncWithHttpInfo($file, $password)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postUnlockAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $password (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postUnlockAsyncWithHttpInfo($file, $password)
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->postUnlockRequest($file, $password);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'postUnlock'
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $password (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postUnlockRequest($file, $password)
    {
        // verify the required parameter 'file' is set
        if ($file === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling postUnlock'
            );
        }
        // verify the required parameter 'password' is set
        if ($password === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $password when calling postUnlock'
            );
        }

        $resourcePath = '/cells/unlock';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($password);
        }


        // form params
        if ($file !== null) {
            $multipart = true;
            if( is_array($file)){
                foreach($file as $key => $value) {
                    $formParams[$key] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($value), 'rb');
                }
            }else {
                $formParams['File'] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($file), 'rb');
            }
            
        }
        // body params
        $_tempBody = null;
        $_tempBodyName ;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
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
            else if('postUnlock'==='cellsSaveAsPostDocumentSaveAs'){
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        if($this->config->getAccessToken()!==''){
            $defaultHeaders['Authorization']= 'Bearer ' . $this->config->getAccessToken();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postWatermark
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $text text (required)
     * @param  string $color color (required)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Cells\Cloud\Model\FilesResult
     */
    public function postWatermark($file, $text, $color, $check_excel_restriction = 'true')
    {
        $this->checkAccessToken();
        list($response) = $this->postWatermarkWithHttpInfo($file, $text, $color, $check_excel_restriction );
        return $response;
    }

    /**
     * Operation postWatermarkWithHttpInfo
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $text (required)
     * @param  string $color (required)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Cells\Cloud\Model\FilesResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function postWatermarkWithHttpInfo($file, $text, $color, $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->postWatermarkRequest($file, $text, $color, $check_excel_restriction);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Cells\Cloud\Model\FilesResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postWatermarkAsync
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $text (required)
     * @param  string $color (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postWatermarkAsync($file, $text, $color, $check_excel_restriction = 'true')
    {
        return $this->postWatermarkAsyncWithHttpInfo($file, $text, $color, $check_excel_restriction )
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postWatermarkAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $text (required)
     * @param  string $color (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postWatermarkAsyncWithHttpInfo($file, $text, $color, $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->postWatermarkRequest($file, $text, $color, $check_excel_restriction );

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'postWatermark'
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $text (required)
     * @param  string $color (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postWatermarkRequest($file, $text, $color, $check_excel_restriction = 'true')
    {
        // verify the required parameter 'file' is set
        if ($file === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling postWatermark'
            );
        }
        // verify the required parameter 'text' is set
        if ($text === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $text when calling postWatermark'
            );
        }
        // verify the required parameter 'color' is set
        if ($color === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $color when calling postWatermark'
            );
        }

        $resourcePath = '/cells/watermark';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($text !== null) {
            $queryParams['text'] = ObjectSerializer::toQueryValue($text);
        }
        // query params
        if ($color !== null) {
            $queryParams['color'] = ObjectSerializer::toQueryValue($color);
        }
        // query params
        if ($check_excel_restriction !== null) {
            $queryParams['checkExcelRestriction'] = ObjectSerializer::toQueryValue($check_excel_restriction);
        }


        // form params
        if ($file !== null) {
            $multipart = true;
            if( is_array($file)){
                foreach($file as $key => $value) {
                    $formParams[$key] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($value), 'rb');
                }
            }else {
                $formParams['File'] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($file), 'rb');
            }
            
        }
        // body params
        $_tempBody = null;
        $_tempBodyName ;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
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
            else if('postWatermark'==='cellsSaveAsPostDocumentSaveAs'){
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        if($this->config->getAccessToken()!==''){
            $defaultHeaders['Authorization']= 'Bearer ' . $this->config->getAccessToken();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    
    /**
     * Operation postCompress
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $compress_level compresslevel (required)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Cells\Cloud\Model\FilesResult
     */
    public function postCompress($file, $compress_level, $check_excel_restriction = 'true')
    {
        $this->checkAccessToken();
        list($response) = $this->postCompressWithHttpInfo($file, $compress_level, $check_excel_restriction );
        return $response;
    }

    /**
     * Operation postCompressWithHttpInfo
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $$compress_level (required)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Cells\Cloud\Model\FilesResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function postCompressWithHttpInfo($file, $compress_level, $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->postCompressRequest($file, $compress_level, $check_excel_restriction);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Cells\Cloud\Model\FilesResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postCompressAsync
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $compress_level (required)
     * @param  string $color (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postCompressAsync($file, $compress_level, $check_excel_restriction = 'true')
    {
        return $this->postCompressAsyncWithHttpInfo($file, $compress_level, $check_excel_restriction)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postCompressAsyncAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $compress_level (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postCompressAsyncAsyncWithHttpInfo($file, $compress_level, $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->posttCompressRequest($file, $compress_level, $check_excel_restriction );

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'postCompress'
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $compress_level (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postCompressRequest($file, $compress_level, $check_excel_restriction = 'true')
    {
        // verify the required parameter 'file' is set
        if ($file === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling postCompress'
            );
        }
        // verify the required parameter 'text' is set
        if ($compress_level === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $compress_level when calling postCompress'
            );
        }
        

        $resourcePath = '/cells/compress';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($compress_level !== null) {
            $queryParams['CompressLevel'] = ObjectSerializer::toQueryValue($compress_level);
        }
        // query params
        if ($check_excel_restriction !== null) {
            $queryParams['checkExcelRestriction'] = ObjectSerializer::toQueryValue($check_excel_restriction);
        }
       
        // form params
        if ($file !== null) {
            $multipart = true;
            if( is_array($file)){
                foreach($file as $key => $value) {
                    $formParams[$key] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($value), 'rb');
                }
            }else {
                $formParams['File'] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($file), 'rb');
            }
            
        }
        // body params
        $_tempBody = null;
        $_tempBodyName ;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
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
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        if($this->config->getAccessToken()!==''){
            $defaultHeaders['Authorization']= 'Bearer ' . $this->config->getAccessToken();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postReplace
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $text text (required)
     * @param  string $newtext newtext (required)
     * @param  string $password password
     * @param  string $sheet_name sheetname
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Cells\Cloud\Model\FilesResult
     */
    public function postReplace($file, $text, $newtext,$password = null,$sheet_name = null, $check_excel_restriction = 'true')
    {
        $this->checkAccessToken();
        list($response) = $this->postReplaceWithHttpInfo($file, $text, $newtext,$password,$sheet_name, $check_excel_restriction );
        return $response;
    }

    /**
     * Operation postReplaceWithHttpInfo
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $text (required)
     * @param  string $newtext newtext (required)
     * @param  string $password password
     * @param  string $sheet_name sheetname
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Cells\Cloud\Model\FilesResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function postReplaceWithHttpInfo($file, $text,$newtext,$password,$sheet_name, $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->postReplaceRequest($file, $text, $newtext,$password,$sheet_name, $check_excel_restriction );

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Cells\Cloud\Model\FilesResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postReplaceAsync
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $text (required)
     * @param  string $newtext newtext (required)
     * @param  string $password password
     * @param  string $sheet_name sheetname
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postReplaceAsync($file, $text, $newtext,$password = null,$sheet_name = null, $check_excel_restriction = 'true')
    {
        return $this->postReplaceAsyncWithHttpInfo($file, $text, $newtext,$password,$sheet_name, $check_excel_restriction)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postWatermarkAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $text (required)
     * @param  string $newtext newtext (required)
     * @param  string $password password
     * @param  string $sheet_name sheetname
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postReplaceAsyncWithHttpInfo($file, $text,$newtext,$password,$sheet_name, $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->postReplaceRequest($file, $text,$newtext,$password,$sheet_name, $check_excel_restriction);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'postWatermark'
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $text (required)
     * @param  string $newtext newtext (required)
     * @param  string $password password
     * @param  string $sheet_name sheetname
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postReplaceRequest($file, $text, $newtext,$password,$sheet_name, $check_excel_restriction = 'true')
    {
        // verify the required parameter 'file' is set
        if ($file === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling postReplace'
            );
        }
        // verify the required parameter 'text' is set
        if ($text === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $text when calling postReplace'
            );
        }
        // verify the required parameter 'color' is set
        if ($newtext === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $newtext when calling postReplace'
            );
        }

        $resourcePath = '/cells/replace';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($text !== null) {
            $queryParams['text'] = ObjectSerializer::toQueryValue($text);
        }
        // query params
        if ($newtext !== null) {
            $queryParams['newtext'] = ObjectSerializer::toQueryValue($newtext);
        }
        // query params
        if ($password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($password);
        }
        // query params
        if ($sheet_name !== null) {
            $queryParams['sheetname'] = ObjectSerializer::toQueryValue($sheet_name);
        }
        // query params
        if ($check_excel_restriction !== null) {
            $queryParams['checkExcelRestriction'] = ObjectSerializer::toQueryValue($check_excel_restriction);
        }

        // form params
        if ($file !== null) {
            $multipart = true;
            if( is_array($file)){
                foreach($file as $key => $value) {
                    $formParams[$key] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($value), 'rb');
                }
            }else {
                $formParams['File'] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($file), 'rb');
            }
            
        }
        // body params
        $_tempBody = null;
        $_tempBodyName ;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
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
            else if('postWatermark'==='cellsSaveAsPostDocumentSaveAs'){
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        if($this->config->getAccessToken()!==''){
            $defaultHeaders['Authorization']= 'Bearer ' . $this->config->getAccessToken();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postReverse
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $rotateType rotateType (required)
     * @param  string $format format (required)

     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Cells\Cloud\Model\FilesResult
     */
    public function postReverse($file, $rotateType, $format, $check_excel_restriction = 'true')
    {
        $this->checkAccessToken();
        list($response) = $this->postReverseWithHttpInfo($file, $rotateType, $format, $check_excel_restriction );
        return $response;
    }

    /**
     * Operation postReverseWithHttpInfo
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $rotateType (required)
     * @param  string $format  (required)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Cells\Cloud\Model\FilesResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function postReverseWithHttpInfo($file, $rotateType,$format, $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->postReverseRequest($file, $rotateType, $format, $check_excel_restriction);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Cells\Cloud\Model\FilesResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postReverseAsync
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $rotateType (required)
     * @param  string $format  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postReverseAsync($file, $rotateType, $format, $check_excel_restriction = 'true')
    {
        return $this->postReverseAsyncWithHttpInfo($file, $rotateType, $format, $check_excel_restriction )
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postReversAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $rotateType (required)
     * @param  string $format  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postReverseAsyncWithHttpInfo($file, $rotateType,$newtext, $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->postReverseRequest($file, $rotateType,$format, $check_excel_restriction);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'postWatermark'
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $rotateType (required)
     * @param  string $format  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postReverseRequest($file, $rotateType, $format, $check_excel_restriction = 'true')
    {
        // verify the required parameter 'file' is set
        if ($file === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling postReplace'
            );
        }
        // verify the required parameter 'text' is set
        if ($rotateType === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $text when calling postReplace'
            );
        }
        // verify the required parameter 'color' is set
        if ($format === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $newtext when calling postReplace'
            );
        }

        $resourcePath = '/cells/reverse';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($rotateType !== null) {
            $queryParams['rotateType'] = ObjectSerializer::toQueryValue($rotateType);
        }
        // query params
        if ($format !== null) {
            $queryParams['format'] = ObjectSerializer::toQueryValue($format);
        }
        // query params
        if ($check_excel_restriction !== null) {
            $queryParams['checkExcelRestriction'] = ObjectSerializer::toQueryValue($check_excel_restriction);
        }
       
        // form params
        if ($file !== null) {
            $multipart = true;
            if( is_array($file)){
                foreach($file as $key => $value) {
                    $formParams[$key] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($value), 'rb');
                }
            }else {
                $formParams['File'] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($file), 'rb');
            }
            
        }
        // body params
        $_tempBody = null;
        $_tempBodyName ;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
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
            else if('postWatermark'==='cellsSaveAsPostDocumentSaveAs'){
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        if($this->config->getAccessToken()!==''){
            $defaultHeaders['Authorization']= 'Bearer ' . $this->config->getAccessToken();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postRotate
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $rotateType rotateType (required)
     * @param  string $format format (required)

     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Aspose\Cells\Cloud\Model\FilesResult
     */
    public function postRotate($file, $rotateType, $format, $check_excel_restriction = 'true')
    {
        $this->checkAccessToken();
        list($response) = $this->postRotateWithHttpInfo($file, $rotateType, $format, $check_excel_restriction );
        return $response;
    }

    /**
     * Operation postRotateWithHttpInfo
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $rotateType (required)
     * @param  string $format  (required)
     *
     * @throws \Aspose\Cells\Cloud\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Aspose\Cells\Cloud\Model\FilesResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function postRotateWithHttpInfo($file, $rotateType,$format, $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->postRotateRequest($file, $rotateType, $format, $check_excel_restriction);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Cells\Cloud\Model\FilesResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postRotateAsync
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $rotateType (required)
     * @param  string $format  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postRotateAsync($file, $rotateType, $format, $check_excel_restriction = 'true')
    {
        return $this->postRotateAsyncWithHttpInfo($file, $rotateType, $format, $check_excel_restriction )
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postReversAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $rotateType (required)
     * @param  string $format  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postRotateAsyncWithHttpInfo($file, $rotateType,$newtext, $check_excel_restriction = 'true')
    {
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $request = $this->postRotateRequest($file, $rotateType,$format, $check_excel_restriction);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'postRotate'
     *
     * @param  \SplFileObject $file File to upload (required)
     * @param  string $rotateType (required)
     * @param  string $format  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postRotateRequest($file, $rotateType, $format, $check_excel_restriction = 'true')
    {
        // verify the required parameter 'file' is set
        if ($file === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling postReplace'
            );
        }
        // verify the required parameter 'text' is set
        if ($rotateType === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $text when calling postReplace'
            );
        }
        // verify the required parameter 'color' is set
        if ($format === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $newtext when calling postReplace'
            );
        }

        $resourcePath = '/cells/rotate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($rotateType !== null) {
            $queryParams['rotateType'] = ObjectSerializer::toQueryValue($rotateType);
        }
        // query params
        if ($format !== null) {
            $queryParams['format'] = ObjectSerializer::toQueryValue($format);
        }
        // query params
        if ($check_excel_restriction !== null) {
            $queryParams['checkExcelRestriction'] = ObjectSerializer::toQueryValue($check_excel_restriction);
        }
       
        // form params
        if ($file !== null) {
            $multipart = true;
            if( is_array($file)){
                foreach($file as $key => $value) {
                    $formParams[$key] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($value), 'rb');
                }
            }else {
                $formParams['File'] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($file), 'rb');
            }
            
        }
        // body params
        $_tempBody = null;
        $_tempBodyName ;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
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
            else if('postWatermark'==='cellsSaveAsPostDocumentSaveAs'){
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        if($this->config->getAccessToken()!==''){
            $defaultHeaders['Authorization']= 'Bearer ' . $this->config->getAccessToken();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }


    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

    public function getAccessToken($grant_type, $client_id, $client_secret ,$version = "v3.0")
    {
        $returnType = '\Aspose\Cells\Cloud\Model\AccessTokenResponse';

        if ($grant_type === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $grant_type when calling oAuthPost'
            );
        }
        // verify the required parameter 'client_id' is set
        if ($client_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client_id when calling oAuthPost'
            );
        }
        // verify the required parameter 'client_secret' is set
        if ($client_secret === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client_secret when calling oAuthPost'
            );
        }

        $resourcePath = '/connect/token';
        if($version === 'v1.1'){
            $resourcePath = '/oauth2/token';
        }
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // form params
        if ($grant_type !== null) {
            $formParams['grant_type'] = ObjectSerializer::toFormValue($grant_type);
        }
        // form params
        if ($client_id !== null) {
            $formParams['client_id'] = ObjectSerializer::toFormValue($client_id);
        }
        // form params
        if ($client_secret !== null) {
            $formParams['client_secret'] = ObjectSerializer::toFormValue($client_secret);
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
            else if (gettype($httpBody) == 'array' && $headers['Content-Type'] === 'application/json') {
                $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
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
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        if($this->config->getAccessToken()!==''){
            $defaultHeaders['Authorization']= 'Bearer ' . $this->config->getAccessToken();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        $request =  new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            $AccessTokenResponse =  ObjectSerializer::deserialize($content, $returnType, []);
            return $AccessTokenResponse->getAccessToken();
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Cells\Cloud\Model\AccessTokenResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }            
    }    
}
