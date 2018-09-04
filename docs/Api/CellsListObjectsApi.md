# Aspose\Cells\Cloud\CellsListObjectsApi

All URIs are relative to *https://api.aspose.cloud/v1.1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cellsListObjectsDeleteWorksheetListObject**](CellsListObjectsApi.md#cellsListObjectsDeleteWorksheetListObject) | **DELETE** /cells/{name}/worksheets/{sheetName}/listobjects/{listObjectIndex} | Delete worksheet list object by index
[**cellsListObjectsDeleteWorksheetListObjects**](CellsListObjectsApi.md#cellsListObjectsDeleteWorksheetListObjects) | **DELETE** /cells/{name}/worksheets/{sheetName}/listobjects | Delete worksheet list objects
[**cellsListObjectsGetWorksheetListObject**](CellsListObjectsApi.md#cellsListObjectsGetWorksheetListObject) | **GET** /cells/{name}/worksheets/{sheetName}/listobjects/{listobjectindex} | Get worksheet list object info by index.
[**cellsListObjectsGetWorksheetListObjects**](CellsListObjectsApi.md#cellsListObjectsGetWorksheetListObjects) | **GET** /cells/{name}/worksheets/{sheetName}/listobjects | Get worksheet listobjects info.
[**cellsListObjectsPostWorksheetListObject**](CellsListObjectsApi.md#cellsListObjectsPostWorksheetListObject) | **POST** /cells/{name}/worksheets/{sheetName}/listobjects/{listObjectIndex} | Update  list object
[**cellsListObjectsPostWorksheetListObjectConvertToRange**](CellsListObjectsApi.md#cellsListObjectsPostWorksheetListObjectConvertToRange) | **POST** /cells/{name}/worksheets/{sheetName}/listobjects/{listObjectIndex}/ConvertToRange | 
[**cellsListObjectsPostWorksheetListObjectSortTable**](CellsListObjectsApi.md#cellsListObjectsPostWorksheetListObjectSortTable) | **POST** /cells/{name}/worksheets/{sheetName}/listobjects/{listObjectIndex}/sort | 
[**cellsListObjectsPostWorksheetListObjectSummarizeWithPivotTable**](CellsListObjectsApi.md#cellsListObjectsPostWorksheetListObjectSummarizeWithPivotTable) | **POST** /cells/{name}/worksheets/{sheetName}/listobjects/{listObjectIndex}/SummarizeWithPivotTable | 
[**cellsListObjectsPutWorksheetListObject**](CellsListObjectsApi.md#cellsListObjectsPutWorksheetListObject) | **PUT** /cells/{name}/worksheets/{sheetName}/listobjects | Add a list object into worksheet.


# **cellsListObjectsDeleteWorksheetListObject**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsListObjectsDeleteWorksheetListObject($name, $sheet_name, $list_object_index, $folder, $storage)

Delete worksheet list object by index

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsListObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$list_object_index = 56; // int | List object index
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsListObjectsDeleteWorksheetListObject($name, $sheet_name, $list_object_index, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsListObjectsApi->cellsListObjectsDeleteWorksheetListObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| The worksheet name. |
 **list_object_index** | **int**| List object index |
 **folder** | **string**| Document&#39;s folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsListObjectsDeleteWorksheetListObjects**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsListObjectsDeleteWorksheetListObjects($name, $sheet_name, $folder, $storage)

Delete worksheet list objects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsListObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsListObjectsDeleteWorksheetListObjects($name, $sheet_name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsListObjectsApi->cellsListObjectsDeleteWorksheetListObjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| The worksheet name. |
 **folder** | **string**| Document&#39;s folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsListObjectsGetWorksheetListObject**
> \Aspose\Cells\Cloud\Model\ListObjectResponse cellsListObjectsGetWorksheetListObject($name, $sheet_name, $listobjectindex, $folder, $storage)

Get worksheet list object info by index.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsListObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$listobjectindex = 56; // int | list object index.
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsListObjectsGetWorksheetListObject($name, $sheet_name, $listobjectindex, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsListObjectsApi->cellsListObjectsGetWorksheetListObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| The worksheet name. |
 **listobjectindex** | **int**| list object index. |
 **folder** | **string**| Document&#39;s folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\ListObjectResponse**](../Model/ListObjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsListObjectsGetWorksheetListObjects**
> \Aspose\Cells\Cloud\Model\ListObjectsResponse cellsListObjectsGetWorksheetListObjects($name, $sheet_name, $folder, $storage)

Get worksheet listobjects info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsListObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsListObjectsGetWorksheetListObjects($name, $sheet_name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsListObjectsApi->cellsListObjectsGetWorksheetListObjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| The worksheet name. |
 **folder** | **string**| Document&#39;s folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\ListObjectsResponse**](../Model/ListObjectsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsListObjectsPostWorksheetListObject**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsListObjectsPostWorksheetListObject($name, $sheet_name, $list_object_index, $list_object, $folder, $storage)

Update  list object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsListObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$list_object_index = 56; // int | list Object index
$list_object = new \Aspose\Cells\Cloud\Model\ListObject(); // \Aspose\Cells\Cloud\Model\ListObject | listObject dto in request body.
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsListObjectsPostWorksheetListObject($name, $sheet_name, $list_object_index, $list_object, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsListObjectsApi->cellsListObjectsPostWorksheetListObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| The worksheet name. |
 **list_object_index** | **int**| list Object index |
 **list_object** | [**\Aspose\Cells\Cloud\Model\ListObject**](../Model/ListObject.md)| listObject dto in request body. | [optional]
 **folder** | **string**| Document&#39;s folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsListObjectsPostWorksheetListObjectConvertToRange**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsListObjectsPostWorksheetListObjectConvertToRange($name, $sheet_name, $list_object_index, $folder, $storage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsListObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$list_object_index = 56; // int | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsListObjectsPostWorksheetListObjectConvertToRange($name, $sheet_name, $list_object_index, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsListObjectsApi->cellsListObjectsPostWorksheetListObjectConvertToRange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **list_object_index** | **int**|  |
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

# **cellsListObjectsPostWorksheetListObjectSortTable**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsListObjectsPostWorksheetListObjectSortTable($name, $sheet_name, $list_object_index, $data_sorter, $folder, $storage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsListObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$list_object_index = 56; // int | 
$data_sorter = new \Aspose\Cells\Cloud\Model\DataSorter(); // \Aspose\Cells\Cloud\Model\DataSorter | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsListObjectsPostWorksheetListObjectSortTable($name, $sheet_name, $list_object_index, $data_sorter, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsListObjectsApi->cellsListObjectsPostWorksheetListObjectSortTable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **list_object_index** | **int**|  |
 **data_sorter** | [**\Aspose\Cells\Cloud\Model\DataSorter**](../Model/DataSorter.md)|  | [optional]
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

# **cellsListObjectsPostWorksheetListObjectSummarizeWithPivotTable**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsListObjectsPostWorksheetListObjectSummarizeWithPivotTable($name, $sheet_name, $list_object_index, $destsheet_name, $request, $folder, $storage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsListObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$list_object_index = 56; // int | 
$destsheet_name = "destsheet_name_example"; // string | 
$request = new \Aspose\Cells\Cloud\Model\CreatePivotTableRequest(); // \Aspose\Cells\Cloud\Model\CreatePivotTableRequest | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsListObjectsPostWorksheetListObjectSummarizeWithPivotTable($name, $sheet_name, $list_object_index, $destsheet_name, $request, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsListObjectsApi->cellsListObjectsPostWorksheetListObjectSummarizeWithPivotTable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **list_object_index** | **int**|  |
 **destsheet_name** | **string**|  |
 **request** | [**\Aspose\Cells\Cloud\Model\CreatePivotTableRequest**](../Model/CreatePivotTableRequest.md)|  | [optional]
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

# **cellsListObjectsPutWorksheetListObject**
> \Aspose\Cells\Cloud\Model\ListObjectResponse cellsListObjectsPutWorksheetListObject($name, $sheet_name, $start_row, $start_column, $end_row, $end_column, $folder, $storage, $has_headers)

Add a list object into worksheet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsListObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$start_row = 56; // int | The start row of the list range.
$start_column = 56; // int | The start row of the list range.
$end_row = 56; // int | The start row of the list range.
$end_column = 56; // int | The start row of the list range.
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.
$has_headers = true; // bool | Whether the range has headers.

try {
    $result = $apiInstance->cellsListObjectsPutWorksheetListObject($name, $sheet_name, $start_row, $start_column, $end_row, $end_column, $folder, $storage, $has_headers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsListObjectsApi->cellsListObjectsPutWorksheetListObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| The worksheet name. |
 **start_row** | **int**| The start row of the list range. |
 **start_column** | **int**| The start row of the list range. |
 **end_row** | **int**| The start row of the list range. |
 **end_column** | **int**| The start row of the list range. |
 **folder** | **string**| Document&#39;s folder. | [optional]
 **storage** | **string**| storage name. | [optional]
 **has_headers** | **bool**| Whether the range has headers. | [optional] [default to true]

### Return type

[**\Aspose\Cells\Cloud\Model\ListObjectResponse**](../Model/ListObjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

