# Aspose\Cells\Cloud\CellsPageBreaksApi

All URIs are relative to *https://api.aspose.cloud/v1.1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cellsPageBreaksDeleteHorizontalPageBreak**](CellsPageBreaksApi.md#cellsPageBreaksDeleteHorizontalPageBreak) | **DELETE** /cells/{name}/worksheets/{sheetName}/horizontalpagebreaks/{index} | 
[**cellsPageBreaksDeleteHorizontalPageBreaks**](CellsPageBreaksApi.md#cellsPageBreaksDeleteHorizontalPageBreaks) | **DELETE** /cells/{name}/worksheets/{sheetName}/horizontalpagebreaks | 
[**cellsPageBreaksDeleteVerticalPageBreak**](CellsPageBreaksApi.md#cellsPageBreaksDeleteVerticalPageBreak) | **DELETE** /cells/{name}/worksheets/{sheetName}/verticalpagebreaks/{index} | 
[**cellsPageBreaksDeleteVerticalPageBreaks**](CellsPageBreaksApi.md#cellsPageBreaksDeleteVerticalPageBreaks) | **DELETE** /cells/{name}/worksheets/{sheetName}/verticalpagebreaks | 
[**cellsPageBreaksGetHorizontalPageBreak**](CellsPageBreaksApi.md#cellsPageBreaksGetHorizontalPageBreak) | **GET** /cells/{name}/worksheets/{sheetName}/horizontalpagebreaks/{index} | 
[**cellsPageBreaksGetHorizontalPageBreaks**](CellsPageBreaksApi.md#cellsPageBreaksGetHorizontalPageBreaks) | **GET** /cells/{name}/worksheets/{sheetName}/horizontalpagebreaks | 
[**cellsPageBreaksGetVerticalPageBreak**](CellsPageBreaksApi.md#cellsPageBreaksGetVerticalPageBreak) | **GET** /cells/{name}/worksheets/{sheetName}/verticalpagebreaks/{index} | 
[**cellsPageBreaksGetVerticalPageBreaks**](CellsPageBreaksApi.md#cellsPageBreaksGetVerticalPageBreaks) | **GET** /cells/{name}/worksheets/{sheetName}/verticalpagebreaks | 
[**cellsPageBreaksPutHorizontalPageBreak**](CellsPageBreaksApi.md#cellsPageBreaksPutHorizontalPageBreak) | **PUT** /cells/{name}/worksheets/{sheetName}/horizontalpagebreaks | 
[**cellsPageBreaksPutVerticalPageBreak**](CellsPageBreaksApi.md#cellsPageBreaksPutVerticalPageBreak) | **PUT** /cells/{name}/worksheets/{sheetName}/verticalpagebreaks | 


# **cellsPageBreaksDeleteHorizontalPageBreak**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPageBreaksDeleteHorizontalPageBreak($name, $sheet_name, $index, $folder, $storage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPageBreaksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$index = 56; // int | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPageBreaksDeleteHorizontalPageBreak($name, $sheet_name, $index, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPageBreaksApi->cellsPageBreaksDeleteHorizontalPageBreak: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **index** | **int**|  |
 **folder** | **string**|  | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPageBreaksDeleteHorizontalPageBreaks**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPageBreaksDeleteHorizontalPageBreaks($name, $sheet_name, $row, $folder, $storage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPageBreaksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$row = 56; // int | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPageBreaksDeleteHorizontalPageBreaks($name, $sheet_name, $row, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPageBreaksApi->cellsPageBreaksDeleteHorizontalPageBreaks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **row** | **int**|  | [optional]
 **folder** | **string**|  | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPageBreaksDeleteVerticalPageBreak**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPageBreaksDeleteVerticalPageBreak($name, $sheet_name, $index, $folder, $storage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPageBreaksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$index = 56; // int | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPageBreaksDeleteVerticalPageBreak($name, $sheet_name, $index, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPageBreaksApi->cellsPageBreaksDeleteVerticalPageBreak: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **index** | **int**|  |
 **folder** | **string**|  | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPageBreaksDeleteVerticalPageBreaks**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPageBreaksDeleteVerticalPageBreaks($name, $sheet_name, $column, $folder, $storage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPageBreaksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$column = 56; // int | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPageBreaksDeleteVerticalPageBreaks($name, $sheet_name, $column, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPageBreaksApi->cellsPageBreaksDeleteVerticalPageBreaks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **column** | **int**|  | [optional]
 **folder** | **string**|  | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPageBreaksGetHorizontalPageBreak**
> \Aspose\Cells\Cloud\Model\HorizontalPageBreakResponse cellsPageBreaksGetHorizontalPageBreak($name, $sheet_name, $index, $folder, $storage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPageBreaksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$index = 56; // int | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPageBreaksGetHorizontalPageBreak($name, $sheet_name, $index, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPageBreaksApi->cellsPageBreaksGetHorizontalPageBreak: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **index** | **int**|  |
 **folder** | **string**|  | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\HorizontalPageBreakResponse**](../Model/HorizontalPageBreakResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPageBreaksGetHorizontalPageBreaks**
> \Aspose\Cells\Cloud\Model\HorizontalPageBreaksResponse cellsPageBreaksGetHorizontalPageBreaks($name, $sheet_name, $folder, $storage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPageBreaksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPageBreaksGetHorizontalPageBreaks($name, $sheet_name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPageBreaksApi->cellsPageBreaksGetHorizontalPageBreaks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **folder** | **string**|  | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\HorizontalPageBreaksResponse**](../Model/HorizontalPageBreaksResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPageBreaksGetVerticalPageBreak**
> \Aspose\Cells\Cloud\Model\VerticalPageBreakResponse cellsPageBreaksGetVerticalPageBreak($name, $sheet_name, $index, $folder, $storage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPageBreaksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$index = 56; // int | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPageBreaksGetVerticalPageBreak($name, $sheet_name, $index, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPageBreaksApi->cellsPageBreaksGetVerticalPageBreak: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **index** | **int**|  |
 **folder** | **string**|  | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\VerticalPageBreakResponse**](../Model/VerticalPageBreakResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPageBreaksGetVerticalPageBreaks**
> \Aspose\Cells\Cloud\Model\VerticalPageBreaksResponse cellsPageBreaksGetVerticalPageBreaks($name, $sheet_name, $folder, $storage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPageBreaksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPageBreaksGetVerticalPageBreaks($name, $sheet_name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPageBreaksApi->cellsPageBreaksGetVerticalPageBreaks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **folder** | **string**|  | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\VerticalPageBreaksResponse**](../Model/VerticalPageBreaksResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPageBreaksPutHorizontalPageBreak**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPageBreaksPutHorizontalPageBreak($name, $sheet_name, $cellname, $row, $column, $start_column, $end_column, $folder, $storage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPageBreaksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$cellname = "cellname_example"; // string | 
$row = 56; // int | 
$column = 56; // int | 
$start_column = 56; // int | 
$end_column = 56; // int | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPageBreaksPutHorizontalPageBreak($name, $sheet_name, $cellname, $row, $column, $start_column, $end_column, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPageBreaksApi->cellsPageBreaksPutHorizontalPageBreak: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **cellname** | **string**|  | [optional]
 **row** | **int**|  | [optional]
 **column** | **int**|  | [optional]
 **start_column** | **int**|  | [optional]
 **end_column** | **int**|  | [optional]
 **folder** | **string**|  | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPageBreaksPutVerticalPageBreak**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPageBreaksPutVerticalPageBreak($name, $sheet_name, $cellname, $column, $row, $start_row, $end_row, $folder, $storage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPageBreaksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$cellname = "cellname_example"; // string | 
$column = 56; // int | 
$row = 56; // int | 
$start_row = 56; // int | 
$end_row = 56; // int | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPageBreaksPutVerticalPageBreak($name, $sheet_name, $cellname, $column, $row, $start_row, $end_row, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPageBreaksApi->cellsPageBreaksPutVerticalPageBreak: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **cellname** | **string**|  | [optional]
 **column** | **int**|  | [optional]
 **row** | **int**|  | [optional]
 **start_row** | **int**|  | [optional]
 **end_row** | **int**|  | [optional]
 **folder** | **string**|  | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

