# Aspose\Cells\Cloud\CellsOleObjectsApi

All URIs are relative to *https://api.aspose.cloud/v1.1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cellsOleObjectsDeleteWorksheetOleObject**](CellsOleObjectsApi.md#cellsOleObjectsDeleteWorksheetOleObject) | **DELETE** /cells/{name}/worksheets/{sheetName}/oleobjects/{oleObjectIndex} | Delete OLE object.
[**cellsOleObjectsDeleteWorksheetOleObjects**](CellsOleObjectsApi.md#cellsOleObjectsDeleteWorksheetOleObjects) | **DELETE** /cells/{name}/worksheets/{sheetName}/oleobjects | Delete all OLE objects.
[**cellsOleObjectsGetWorksheetOleObject**](CellsOleObjectsApi.md#cellsOleObjectsGetWorksheetOleObject) | **GET** /cells/{name}/worksheets/{sheetName}/oleobjects/{objectNumber} | Get OLE object info.
[**cellsOleObjectsGetWorksheetOleObjects**](CellsOleObjectsApi.md#cellsOleObjectsGetWorksheetOleObjects) | **GET** /cells/{name}/worksheets/{sheetName}/oleobjects | Get worksheet OLE objects info.
[**cellsOleObjectsPostUpdateWorksheetOleObject**](CellsOleObjectsApi.md#cellsOleObjectsPostUpdateWorksheetOleObject) | **POST** /cells/{name}/worksheets/{sheetName}/oleobjects/{oleObjectIndex} | Update OLE object.
[**cellsOleObjectsPutWorksheetOleObject**](CellsOleObjectsApi.md#cellsOleObjectsPutWorksheetOleObject) | **PUT** /cells/{name}/worksheets/{sheetName}/oleobjects | Add OLE object


# **cellsOleObjectsDeleteWorksheetOleObject**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsOleObjectsDeleteWorksheetOleObject($name, $sheet_name, $ole_object_index, $folder, $storage)

Delete OLE object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsOleObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worsheet name.
$ole_object_index = 56; // int | Ole object index
$folder = "folder_example"; // string | The workbook folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsOleObjectsDeleteWorksheetOleObject($name, $sheet_name, $ole_object_index, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsOleObjectsApi->cellsOleObjectsDeleteWorksheetOleObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worsheet name. |
 **ole_object_index** | **int**| Ole object index |
 **folder** | **string**| The workbook folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsOleObjectsDeleteWorksheetOleObjects**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsOleObjectsDeleteWorksheetOleObjects($name, $sheet_name, $folder, $storage)

Delete all OLE objects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsOleObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worsheet name.
$folder = "folder_example"; // string | The workbook folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsOleObjectsDeleteWorksheetOleObjects($name, $sheet_name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsOleObjectsApi->cellsOleObjectsDeleteWorksheetOleObjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worsheet name. |
 **folder** | **string**| The workbook folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsOleObjectsGetWorksheetOleObject**
> \SplFileObject cellsOleObjectsGetWorksheetOleObject($name, $sheet_name, $object_number, $folder, $storage)

Get OLE object info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsOleObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$object_number = 56; // int | The object number.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsOleObjectsGetWorksheetOleObject($name, $sheet_name, $object_number, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsOleObjectsApi->cellsOleObjectsGetWorksheetOleObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| Worksheet name. |
 **object_number** | **int**| The object number. |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsOleObjectsGetWorksheetOleObjects**
> \Aspose\Cells\Cloud\Model\OleObjectsResponse cellsOleObjectsGetWorksheetOleObjects($name, $sheet_name, $folder, $storage)

Get worksheet OLE objects info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsOleObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsOleObjectsGetWorksheetOleObjects($name, $sheet_name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsOleObjectsApi->cellsOleObjectsGetWorksheetOleObjects: ', $e->getMessage(), PHP_EOL;
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

[**\Aspose\Cells\Cloud\Model\OleObjectsResponse**](../Model/OleObjectsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsOleObjectsPostUpdateWorksheetOleObject**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsOleObjectsPostUpdateWorksheetOleObject($name, $sheet_name, $ole_object_index, $ole, $folder, $storage)

Update OLE object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsOleObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worsheet name.
$ole_object_index = 56; // int | Ole object index
$ole = new \Aspose\Cells\Cloud\Model\OleObject(); // \Aspose\Cells\Cloud\Model\OleObject | Ole Object
$folder = "folder_example"; // string | The workbook folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsOleObjectsPostUpdateWorksheetOleObject($name, $sheet_name, $ole_object_index, $ole, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsOleObjectsApi->cellsOleObjectsPostUpdateWorksheetOleObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worsheet name. |
 **ole_object_index** | **int**| Ole object index |
 **ole** | [**\Aspose\Cells\Cloud\Model\OleObject**](../Model/OleObject.md)| Ole Object | [optional]
 **folder** | **string**| The workbook folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsOleObjectsPutWorksheetOleObject**
> \Aspose\Cells\Cloud\Model\OleObjectResponse cellsOleObjectsPutWorksheetOleObject($name, $sheet_name, $ole_object, $upper_left_row, $upper_left_column, $height, $width, $ole_file, $image_file, $folder, $storage)

Add OLE object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsOleObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worsheet name.
$ole_object = new \Aspose\Cells\Cloud\Model\OleObject(); // \Aspose\Cells\Cloud\Model\OleObject | Ole Object
$upper_left_row = 0; // int | Upper left row index
$upper_left_column = 0; // int | Upper left column index
$height = 0; // int | Height of oleObject, in unit of pixel
$width = 0; // int | Width of oleObject, in unit of pixel
$ole_file = "ole_file_example"; // string | OLE filename
$image_file = "image_file_example"; // string | Image filename
$folder = "folder_example"; // string | The workbook folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsOleObjectsPutWorksheetOleObject($name, $sheet_name, $ole_object, $upper_left_row, $upper_left_column, $height, $width, $ole_file, $image_file, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsOleObjectsApi->cellsOleObjectsPutWorksheetOleObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worsheet name. |
 **ole_object** | [**\Aspose\Cells\Cloud\Model\OleObject**](../Model/OleObject.md)| Ole Object | [optional]
 **upper_left_row** | **int**| Upper left row index | [optional] [default to 0]
 **upper_left_column** | **int**| Upper left column index | [optional] [default to 0]
 **height** | **int**| Height of oleObject, in unit of pixel | [optional] [default to 0]
 **width** | **int**| Width of oleObject, in unit of pixel | [optional] [default to 0]
 **ole_file** | **string**| OLE filename | [optional]
 **image_file** | **string**| Image filename | [optional]
 **folder** | **string**| The workbook folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\OleObjectResponse**](../Model/OleObjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

