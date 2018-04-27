# Aspose\Cells\Cloud\CellsChartAreaApi

All URIs are relative to *https://api.aspose.cloud/v1.1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cellsChartAreaGetChartArea**](CellsChartAreaApi.md#cellsChartAreaGetChartArea) | **GET** /cells/{name}/worksheets/{sheetName}/charts/{chartIndex}/chartArea | Get chart area info.
[**cellsChartAreaGetChartAreaBorder**](CellsChartAreaApi.md#cellsChartAreaGetChartAreaBorder) | **GET** /cells/{name}/worksheets/{sheetName}/charts/{chartIndex}/chartArea/border | Get chart area border info.
[**cellsChartAreaGetChartAreaFillFormat**](CellsChartAreaApi.md#cellsChartAreaGetChartAreaFillFormat) | **GET** /cells/{name}/worksheets/{sheetName}/charts/{chartIndex}/chartArea/fillFormat | Get chart area fill format info.


# **cellsChartAreaGetChartArea**
> \Aspose\Cells\Cloud\Model\ChartAreaResponse cellsChartAreaGetChartArea($name, $sheet_name, $chart_index, $folder)

Get chart area info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsChartAreaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Workbook name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$chart_index = 56; // int | The chart index.
$folder = "folder_example"; // string | Workbook folder.

try {
    $result = $apiInstance->cellsChartAreaGetChartArea($name, $sheet_name, $chart_index, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsChartAreaApi->cellsChartAreaGetChartArea: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Workbook name. |
 **sheet_name** | **string**| Worksheet name. |
 **chart_index** | **int**| The chart index. |
 **folder** | **string**| Workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\ChartAreaResponse**](../Model/ChartAreaResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsChartAreaGetChartAreaBorder**
> \Aspose\Cells\Cloud\Model\LineResponse cellsChartAreaGetChartAreaBorder($name, $sheet_name, $chart_index, $folder)

Get chart area border info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsChartAreaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Workbook name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$chart_index = 56; // int | The chart index.
$folder = "folder_example"; // string | Workbook folder.

try {
    $result = $apiInstance->cellsChartAreaGetChartAreaBorder($name, $sheet_name, $chart_index, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsChartAreaApi->cellsChartAreaGetChartAreaBorder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Workbook name. |
 **sheet_name** | **string**| Worksheet name. |
 **chart_index** | **int**| The chart index. |
 **folder** | **string**| Workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\LineResponse**](../Model/LineResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsChartAreaGetChartAreaFillFormat**
> \Aspose\Cells\Cloud\Model\FillFormatResponse cellsChartAreaGetChartAreaFillFormat($name, $sheet_name, $chart_index, $folder)

Get chart area fill format info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsChartAreaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Workbook name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$chart_index = 56; // int | The chart index.
$folder = "folder_example"; // string | Workbook folder.

try {
    $result = $apiInstance->cellsChartAreaGetChartAreaFillFormat($name, $sheet_name, $chart_index, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsChartAreaApi->cellsChartAreaGetChartAreaFillFormat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Workbook name. |
 **sheet_name** | **string**| Worksheet name. |
 **chart_index** | **int**| The chart index. |
 **folder** | **string**| Workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\FillFormatResponse**](../Model/FillFormatResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

