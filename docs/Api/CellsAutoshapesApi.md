# Aspose\Cells\Cloud\CellsAutoshapesApi

All URIs are relative to *https://api.aspose.cloud/v1.1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cellsAutoshapesGetWorksheetAutoshape**](CellsAutoshapesApi.md#cellsAutoshapesGetWorksheetAutoshape) | **GET** /cells/{name}/worksheets/{sheetName}/autoshapes/{autoshapeNumber} | Get autoshape info.
[**cellsAutoshapesGetWorksheetAutoshapes**](CellsAutoshapesApi.md#cellsAutoshapesGetWorksheetAutoshapes) | **GET** /cells/{name}/worksheets/{sheetName}/autoshapes | Get worksheet autoshapes info.


# **cellsAutoshapesGetWorksheetAutoshape**
> \SplFileObject cellsAutoshapesGetWorksheetAutoshape($name, $sheet_name, $autoshape_number, $folder)

Get autoshape info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsAutoshapesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$autoshape_number = 56; // int | The autoshape number.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsAutoshapesGetWorksheetAutoshape($name, $sheet_name, $autoshape_number, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsAutoshapesApi->cellsAutoshapesGetWorksheetAutoshape: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| Worksheet name. |
 **autoshape_number** | **int**| The autoshape number. |
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsAutoshapesGetWorksheetAutoshapes**
> \Aspose\Cells\Cloud\Model\AutoShapesResponse cellsAutoshapesGetWorksheetAutoshapes($name, $sheet_name, $folder)

Get worksheet autoshapes info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsAutoshapesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$folder = "folder_example"; // string | Document's folder.

try {
    $result = $apiInstance->cellsAutoshapesGetWorksheetAutoshapes($name, $sheet_name, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsAutoshapesApi->cellsAutoshapesGetWorksheetAutoshapes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| The worksheet name. |
 **folder** | **string**| Document&#39;s folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\AutoShapesResponse**](../Model/AutoShapesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

