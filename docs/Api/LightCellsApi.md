# Aspose\Cells\Cloud\LightCellsApi

All URIs are relative to *https://api.aspose.cloud/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteMetadata**](LightCellsApi.md#deleteMetadata) | **POST** /cells/metadata/delete | 
[**getMetadata**](LightCellsApi.md#getMetadata) | **POST** /cells/metadata/get | 
[**postAssemble**](LightCellsApi.md#postAssemble) | **POST** /cells/assemble | 
[**postClearObjects**](LightCellsApi.md#postClearObjects) | **POST** /cells/clearobjects | 
[**postExport**](LightCellsApi.md#postExport) | **POST** /cells/export | 
[**postMerge**](LightCellsApi.md#postMerge) | **POST** /cells/merge | 
[**postMetadata**](LightCellsApi.md#postMetadata) | **POST** /cells/metadata/update | 
[**postProtect**](LightCellsApi.md#postProtect) | **POST** /cells/protect | 
[**postSearch**](LightCellsApi.md#postSearch) | **POST** /cells/search | 
[**postSplit**](LightCellsApi.md#postSplit) | **POST** /cells/split | 
[**postUnlock**](LightCellsApi.md#postUnlock) | **POST** /cells/unlock | 
[**postWatermark**](LightCellsApi.md#postWatermark) | **POST** /cells/watermark | 


# **deleteMetadata**
> \Aspose\Cells\Cloud\Model\FilesResult deleteMetadata($file, $type)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\LightCellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "/path/to/file.txt"; // \SplFileObject | File to upload
$type = "all"; // string | 

try {
    $result = $apiInstance->deleteMetadata($file, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightCellsApi->deleteMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File to upload |
 **type** | **string**|  | [optional] [default to all]

### Return type

[**\Aspose\Cells\Cloud\Model\FilesResult**](../Model/FilesResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMetadata**
> \Aspose\Cells\Cloud\Model\CellsDocumentProperty[] getMetadata($file, $type)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\LightCellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "/path/to/file.txt"; // \SplFileObject | File to upload
$type = "all"; // string | 

try {
    $result = $apiInstance->getMetadata($file, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightCellsApi->getMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File to upload |
 **type** | **string**|  | [optional] [default to all]

### Return type

[**\Aspose\Cells\Cloud\Model\CellsDocumentProperty[]**](../Model/CellsDocumentProperty.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAssemble**
> \Aspose\Cells\Cloud\Model\FilesResult postAssemble($file, $datasource, $format)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\LightCellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "/path/to/file.txt"; // \SplFileObject | File to upload
$datasource = "datasource_example"; // string | 
$format = "Xlsx"; // string | 

try {
    $result = $apiInstance->postAssemble($file, $datasource, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightCellsApi->postAssemble: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File to upload |
 **datasource** | **string**|  |
 **format** | **string**|  | [optional] [default to Xlsx]

### Return type

[**\Aspose\Cells\Cloud\Model\FilesResult**](../Model/FilesResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postClearObjects**
> \Aspose\Cells\Cloud\Model\FilesResult postClearObjects($file, $objecttype)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\LightCellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "/path/to/file.txt"; // \SplFileObject | File to upload
$objecttype = "objecttype_example"; // string | 

try {
    $result = $apiInstance->postClearObjects($file, $objecttype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightCellsApi->postClearObjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File to upload |
 **objecttype** | **string**|  |

### Return type

[**\Aspose\Cells\Cloud\Model\FilesResult**](../Model/FilesResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postExport**
> \Aspose\Cells\Cloud\Model\FilesResult postExport($file, $object_type, $format)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\LightCellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "/path/to/file.txt"; // \SplFileObject | File to upload
$object_type = "object_type_example"; // string | 
$format = "format_example"; // string | 

try {
    $result = $apiInstance->postExport($file, $object_type, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightCellsApi->postExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File to upload |
 **object_type** | **string**|  |
 **format** | **string**|  |

### Return type

[**\Aspose\Cells\Cloud\Model\FilesResult**](../Model/FilesResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMerge**
> \Aspose\Cells\Cloud\Model\FileInfo postMerge($file, $format, $merge_to_one_sheet)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\LightCellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "/path/to/file.txt"; // \SplFileObject | File to upload
$format = "xlsx"; // string | 
$merge_to_one_sheet = false; // bool | 

try {
    $result = $apiInstance->postMerge($file, $format, $merge_to_one_sheet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightCellsApi->postMerge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File to upload |
 **format** | **string**|  | [optional] [default to xlsx]
 **merge_to_one_sheet** | **bool**|  | [optional] [default to false]

### Return type

[**\Aspose\Cells\Cloud\Model\FileInfo**](../Model/FileInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMetadata**
> \Aspose\Cells\Cloud\Model\FilesResult postMetadata($file, $document_properties)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\LightCellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "/path/to/file.txt"; // \SplFileObject | File to upload
$document_properties = new \Aspose\Cells\Cloud\Model\CellsDocumentProperty(); // \Aspose\Cells\Cloud\Model\CellsDocumentProperty | Cells document property.

try {
    $result = $apiInstance->postMetadata($file, $document_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightCellsApi->postMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File to upload |
 **document_properties** | [**\Aspose\Cells\Cloud\Model\CellsDocumentProperty**](../Model/CellsDocumentProperty.md)| Cells document property. |

### Return type

[**\Aspose\Cells\Cloud\Model\FilesResult**](../Model/FilesResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postProtect**
> \Aspose\Cells\Cloud\Model\FilesResult postProtect($file, $password)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\LightCellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "/path/to/file.txt"; // \SplFileObject | File to upload
$password = "password_example"; // string | 

try {
    $result = $apiInstance->postProtect($file, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightCellsApi->postProtect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File to upload |
 **password** | **string**|  |

### Return type

[**\Aspose\Cells\Cloud\Model\FilesResult**](../Model/FilesResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSearch**
> \Aspose\Cells\Cloud\Model\TextItem[] postSearch($file, $text, $password, $sheetname)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\LightCellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "/path/to/file.txt"; // \SplFileObject | File to upload
$text = "text_example"; // string | 
$password = "password_example"; // string | 
$sheetname = "sheetname_example"; // string | 

try {
    $result = $apiInstance->postSearch($file, $text, $password, $sheetname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightCellsApi->postSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File to upload |
 **text** | **string**|  |
 **password** | **string**|  | [optional]
 **sheetname** | **string**|  | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\TextItem[]**](../Model/TextItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSplit**
> \Aspose\Cells\Cloud\Model\FilesResult postSplit($file, $format, $password, $from, $to)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\LightCellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "/path/to/file.txt"; // \SplFileObject | File to upload
$format = "format_example"; // string | 
$password = "password_example"; // string | 
$from = 56; // int | 
$to = 56; // int | 

try {
    $result = $apiInstance->postSplit($file, $format, $password, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightCellsApi->postSplit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File to upload |
 **format** | **string**|  |
 **password** | **string**|  | [optional]
 **from** | **int**|  | [optional]
 **to** | **int**|  | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\FilesResult**](../Model/FilesResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUnlock**
> \Aspose\Cells\Cloud\Model\FilesResult postUnlock($file, $password)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\LightCellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "/path/to/file.txt"; // \SplFileObject | File to upload
$password = "password_example"; // string | 

try {
    $result = $apiInstance->postUnlock($file, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightCellsApi->postUnlock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File to upload |
 **password** | **string**|  |

### Return type

[**\Aspose\Cells\Cloud\Model\FilesResult**](../Model/FilesResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWatermark**
> \Aspose\Cells\Cloud\Model\FilesResult postWatermark($file, $text, $color)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\LightCellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "/path/to/file.txt"; // \SplFileObject | File to upload
$text = "text_example"; // string | 
$color = "color_example"; // string | 

try {
    $result = $apiInstance->postWatermark($file, $text, $color);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightCellsApi->postWatermark: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| File to upload |
 **text** | **string**|  |
 **color** | **string**|  |

### Return type

[**\Aspose\Cells\Cloud\Model\FilesResult**](../Model/FilesResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

