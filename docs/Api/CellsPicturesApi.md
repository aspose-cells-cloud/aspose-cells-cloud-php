# Aspose\Cells\Cloud\CellsPicturesApi

All URIs are relative to *https://api.aspose.cloud/v1.1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cellsPicturesDeleteWorksheetPicture**](CellsPicturesApi.md#cellsPicturesDeleteWorksheetPicture) | **DELETE** /cells/{name}/worksheets/{sheetName}/pictures/{pictureIndex} | Delete a picture object in worksheet
[**cellsPicturesDeleteWorksheetPictures**](CellsPicturesApi.md#cellsPicturesDeleteWorksheetPictures) | **DELETE** /cells/{name}/worksheets/{sheetName}/pictures | Delete all pictures in worksheet.
[**cellsPicturesGetWorksheetPicture**](CellsPicturesApi.md#cellsPicturesGetWorksheetPicture) | **GET** /cells/{name}/worksheets/{sheetName}/pictures/{pictureIndex} | GRead worksheet picture by number.
[**cellsPicturesGetWorksheetPictures**](CellsPicturesApi.md#cellsPicturesGetWorksheetPictures) | **GET** /cells/{name}/worksheets/{sheetName}/pictures | Read worksheet pictures.
[**cellsPicturesPostWorksheetPicture**](CellsPicturesApi.md#cellsPicturesPostWorksheetPicture) | **POST** /cells/{name}/worksheets/{sheetName}/pictures/{pictureIndex} | Update worksheet picture by index.
[**cellsPicturesPutWorksheetAddPicture**](CellsPicturesApi.md#cellsPicturesPutWorksheetAddPicture) | **PUT** /cells/{name}/worksheets/{sheetName}/pictures | Add a new worksheet picture.


# **cellsPicturesDeleteWorksheetPicture**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPicturesDeleteWorksheetPicture($name, $sheet_name, $picture_index, $folder, $storage)

Delete a picture object in worksheet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPicturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worsheet name.
$picture_index = 56; // int | Picture index
$folder = "folder_example"; // string | The workbook folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPicturesDeleteWorksheetPicture($name, $sheet_name, $picture_index, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPicturesApi->cellsPicturesDeleteWorksheetPicture: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worsheet name. |
 **picture_index** | **int**| Picture index |
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

# **cellsPicturesDeleteWorksheetPictures**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPicturesDeleteWorksheetPictures($name, $sheet_name, $folder, $storage)

Delete all pictures in worksheet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPicturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPicturesDeleteWorksheetPictures($name, $sheet_name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPicturesApi->cellsPicturesDeleteWorksheetPictures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| Worksheet name. |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPicturesGetWorksheetPicture**
> \SplFileObject cellsPicturesGetWorksheetPicture($name, $sheet_name, $picture_index, $format, $folder, $storage)

GRead worksheet picture by number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPicturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$picture_index = 56; // int | The picture index.
$format = "format_example"; // string | The exported object format.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPicturesGetWorksheetPicture($name, $sheet_name, $picture_index, $format, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPicturesApi->cellsPicturesGetWorksheetPicture: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| Worksheet name. |
 **picture_index** | **int**| The picture index. |
 **format** | **string**| The exported object format. | [optional]
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

# **cellsPicturesGetWorksheetPictures**
> \Aspose\Cells\Cloud\Model\PicturesResponse cellsPicturesGetWorksheetPictures($name, $sheet_name, $folder, $storage)

Read worksheet pictures.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPicturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPicturesGetWorksheetPictures($name, $sheet_name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPicturesApi->cellsPicturesGetWorksheetPictures: ', $e->getMessage(), PHP_EOL;
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

[**\Aspose\Cells\Cloud\Model\PicturesResponse**](../Model/PicturesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPicturesPostWorksheetPicture**
> \Aspose\Cells\Cloud\Model\PictureResponse cellsPicturesPostWorksheetPicture($name, $sheet_name, $picture_index, $picture, $folder, $storage)

Update worksheet picture by index.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPicturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$picture_index = 56; // int | The picture's index.
$picture = new \Aspose\Cells\Cloud\Model\Picture(); // \Aspose\Cells\Cloud\Model\Picture | Picture object
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPicturesPostWorksheetPicture($name, $sheet_name, $picture_index, $picture, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPicturesApi->cellsPicturesPostWorksheetPicture: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| Worksheet name. |
 **picture_index** | **int**| The picture&#39;s index. |
 **picture** | [**\Aspose\Cells\Cloud\Model\Picture**](../Model/Picture.md)| Picture object | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\PictureResponse**](../Model/PictureResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPicturesPutWorksheetAddPicture**
> \Aspose\Cells\Cloud\Model\PicturesResponse cellsPicturesPutWorksheetAddPicture($name, $sheet_name, $picture, $upper_left_row, $upper_left_column, $lower_right_row, $lower_right_column, $picture_path, $folder, $storage)

Add a new worksheet picture.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPicturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worsheet name.
$picture = new \Aspose\Cells\Cloud\Model\Picture(); // \Aspose\Cells\Cloud\Model\Picture | Pictute object
$upper_left_row = 0; // int | The image upper left row.
$upper_left_column = 0; // int | The image upper left column.
$lower_right_row = 0; // int | The image low right row.
$lower_right_column = 0; // int | The image low right column.
$picture_path = "picture_path_example"; // string | The picture path, if not provided the picture data is inspected in the request body.
$folder = "folder_example"; // string | The workbook folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPicturesPutWorksheetAddPicture($name, $sheet_name, $picture, $upper_left_row, $upper_left_column, $lower_right_row, $lower_right_column, $picture_path, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPicturesApi->cellsPicturesPutWorksheetAddPicture: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worsheet name. |
 **picture** | [**\Aspose\Cells\Cloud\Model\Picture**](../Model/Picture.md)| Pictute object | [optional]
 **upper_left_row** | **int**| The image upper left row. | [optional] [default to 0]
 **upper_left_column** | **int**| The image upper left column. | [optional] [default to 0]
 **lower_right_row** | **int**| The image low right row. | [optional] [default to 0]
 **lower_right_column** | **int**| The image low right column. | [optional] [default to 0]
 **picture_path** | **string**| The picture path, if not provided the picture data is inspected in the request body. | [optional]
 **folder** | **string**| The workbook folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\PicturesResponse**](../Model/PicturesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

