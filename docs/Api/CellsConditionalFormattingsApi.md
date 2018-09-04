# Aspose\Cells\Cloud\CellsConditionalFormattingsApi

All URIs are relative to *https://api.aspose.cloud/v1.1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cellsConditionalFormattingsDeleteWorksheetConditionalFormatting**](CellsConditionalFormattingsApi.md#cellsConditionalFormattingsDeleteWorksheetConditionalFormatting) | **DELETE** /cells/{name}/worksheets/{sheetName}/conditionalFormattings/{index} | Remove conditional formatting
[**cellsConditionalFormattingsDeleteWorksheetConditionalFormattingArea**](CellsConditionalFormattingsApi.md#cellsConditionalFormattingsDeleteWorksheetConditionalFormattingArea) | **DELETE** /cells/{name}/worksheets/{sheetName}/conditionalFormattings/area | Remove cell area from conditional formatting.
[**cellsConditionalFormattingsDeleteWorksheetConditionalFormattings**](CellsConditionalFormattingsApi.md#cellsConditionalFormattingsDeleteWorksheetConditionalFormattings) | **DELETE** /cells/{name}/worksheets/{sheetName}/conditionalFormattings | Clear all condition formattings
[**cellsConditionalFormattingsGetWorksheetConditionalFormatting**](CellsConditionalFormattingsApi.md#cellsConditionalFormattingsGetWorksheetConditionalFormatting) | **GET** /cells/{name}/worksheets/{sheetName}/conditionalFormattings/{index} | Get conditional formatting
[**cellsConditionalFormattingsGetWorksheetConditionalFormattings**](CellsConditionalFormattingsApi.md#cellsConditionalFormattingsGetWorksheetConditionalFormattings) | **GET** /cells/{name}/worksheets/{sheetName}/conditionalFormattings | Get conditional formattings
[**cellsConditionalFormattingsPutWorksheetConditionalFormatting**](CellsConditionalFormattingsApi.md#cellsConditionalFormattingsPutWorksheetConditionalFormatting) | **PUT** /cells/{name}/worksheets/{sheetName}/conditionalFormattings | Add a condition formatting.
[**cellsConditionalFormattingsPutWorksheetFormatCondition**](CellsConditionalFormattingsApi.md#cellsConditionalFormattingsPutWorksheetFormatCondition) | **PUT** /cells/{name}/worksheets/{sheetName}/conditionalFormattings/{index} | Add a format condition.
[**cellsConditionalFormattingsPutWorksheetFormatConditionArea**](CellsConditionalFormattingsApi.md#cellsConditionalFormattingsPutWorksheetFormatConditionArea) | **PUT** /cells/{name}/worksheets/{sheetName}/conditionalFormattings/{index}/area | add a cell area for format condition
[**cellsConditionalFormattingsPutWorksheetFormatConditionCondition**](CellsConditionalFormattingsApi.md#cellsConditionalFormattingsPutWorksheetFormatConditionCondition) | **PUT** /cells/{name}/worksheets/{sheetName}/conditionalFormattings/{index}/condition | Add a condition for format condition.


# **cellsConditionalFormattingsDeleteWorksheetConditionalFormatting**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsConditionalFormattingsDeleteWorksheetConditionalFormatting($name, $sheet_name, $index, $folder, $storage)

Remove conditional formatting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsConditionalFormattingsApi(
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
    $result = $apiInstance->cellsConditionalFormattingsDeleteWorksheetConditionalFormatting($name, $sheet_name, $index, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsConditionalFormattingsApi->cellsConditionalFormattingsDeleteWorksheetConditionalFormatting: ', $e->getMessage(), PHP_EOL;
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

# **cellsConditionalFormattingsDeleteWorksheetConditionalFormattingArea**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsConditionalFormattingsDeleteWorksheetConditionalFormattingArea($name, $sheet_name, $start_row, $start_column, $total_rows, $total_columns, $folder, $storage)

Remove cell area from conditional formatting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsConditionalFormattingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$start_row = 56; // int | 
$start_column = 56; // int | 
$total_rows = 56; // int | 
$total_columns = 56; // int | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsConditionalFormattingsDeleteWorksheetConditionalFormattingArea($name, $sheet_name, $start_row, $start_column, $total_rows, $total_columns, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsConditionalFormattingsApi->cellsConditionalFormattingsDeleteWorksheetConditionalFormattingArea: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **start_row** | **int**|  |
 **start_column** | **int**|  |
 **total_rows** | **int**|  |
 **total_columns** | **int**|  |
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

# **cellsConditionalFormattingsDeleteWorksheetConditionalFormattings**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsConditionalFormattingsDeleteWorksheetConditionalFormattings($name, $sheet_name, $folder, $storage)

Clear all condition formattings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsConditionalFormattingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsConditionalFormattingsDeleteWorksheetConditionalFormattings($name, $sheet_name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsConditionalFormattingsApi->cellsConditionalFormattingsDeleteWorksheetConditionalFormattings: ', $e->getMessage(), PHP_EOL;
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

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsConditionalFormattingsGetWorksheetConditionalFormatting**
> \Aspose\Cells\Cloud\Model\ConditionalFormattingResponse cellsConditionalFormattingsGetWorksheetConditionalFormatting($name, $sheet_name, $index, $folder, $storage)

Get conditional formatting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsConditionalFormattingsApi(
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
    $result = $apiInstance->cellsConditionalFormattingsGetWorksheetConditionalFormatting($name, $sheet_name, $index, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsConditionalFormattingsApi->cellsConditionalFormattingsGetWorksheetConditionalFormatting: ', $e->getMessage(), PHP_EOL;
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

[**\Aspose\Cells\Cloud\Model\ConditionalFormattingResponse**](../Model/ConditionalFormattingResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsConditionalFormattingsGetWorksheetConditionalFormattings**
> \Aspose\Cells\Cloud\Model\ConditionalFormattingsResponse cellsConditionalFormattingsGetWorksheetConditionalFormattings($name, $sheet_name, $folder, $storage)

Get conditional formattings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsConditionalFormattingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsConditionalFormattingsGetWorksheetConditionalFormattings($name, $sheet_name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsConditionalFormattingsApi->cellsConditionalFormattingsGetWorksheetConditionalFormattings: ', $e->getMessage(), PHP_EOL;
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

[**\Aspose\Cells\Cloud\Model\ConditionalFormattingsResponse**](../Model/ConditionalFormattingsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsConditionalFormattingsPutWorksheetConditionalFormatting**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsConditionalFormattingsPutWorksheetConditionalFormatting($name, $sheet_name, $cell_area, $formatcondition, $folder, $storage)

Add a condition formatting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsConditionalFormattingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$cell_area = "cell_area_example"; // string | 
$formatcondition = new \Aspose\Cells\Cloud\Model\FormatCondition(); // \Aspose\Cells\Cloud\Model\FormatCondition | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsConditionalFormattingsPutWorksheetConditionalFormatting($name, $sheet_name, $cell_area, $formatcondition, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsConditionalFormattingsApi->cellsConditionalFormattingsPutWorksheetConditionalFormatting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **cell_area** | **string**|  |
 **formatcondition** | [**\Aspose\Cells\Cloud\Model\FormatCondition**](../Model/FormatCondition.md)|  | [optional]
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

# **cellsConditionalFormattingsPutWorksheetFormatCondition**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsConditionalFormattingsPutWorksheetFormatCondition($name, $sheet_name, $index, $cell_area, $type, $operator_type, $formula1, $formula2, $folder, $storage)

Add a format condition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsConditionalFormattingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$index = 56; // int | 
$cell_area = "cell_area_example"; // string | 
$type = "type_example"; // string | 
$operator_type = "operator_type_example"; // string | 
$formula1 = "formula1_example"; // string | 
$formula2 = "formula2_example"; // string | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsConditionalFormattingsPutWorksheetFormatCondition($name, $sheet_name, $index, $cell_area, $type, $operator_type, $formula1, $formula2, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsConditionalFormattingsApi->cellsConditionalFormattingsPutWorksheetFormatCondition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **index** | **int**|  |
 **cell_area** | **string**|  |
 **type** | **string**|  |
 **operator_type** | **string**|  |
 **formula1** | **string**|  |
 **formula2** | **string**|  |
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

# **cellsConditionalFormattingsPutWorksheetFormatConditionArea**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsConditionalFormattingsPutWorksheetFormatConditionArea($name, $sheet_name, $index, $cell_area, $folder, $storage)

add a cell area for format condition

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsConditionalFormattingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$index = 56; // int | 
$cell_area = "cell_area_example"; // string | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsConditionalFormattingsPutWorksheetFormatConditionArea($name, $sheet_name, $index, $cell_area, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsConditionalFormattingsApi->cellsConditionalFormattingsPutWorksheetFormatConditionArea: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **index** | **int**|  |
 **cell_area** | **string**|  |
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

# **cellsConditionalFormattingsPutWorksheetFormatConditionCondition**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsConditionalFormattingsPutWorksheetFormatConditionCondition($name, $sheet_name, $index, $type, $operator_type, $formula1, $formula2, $folder, $storage)

Add a condition for format condition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsConditionalFormattingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$index = 56; // int | 
$type = "type_example"; // string | 
$operator_type = "operator_type_example"; // string | 
$formula1 = "formula1_example"; // string | 
$formula2 = "formula2_example"; // string | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsConditionalFormattingsPutWorksheetFormatConditionCondition($name, $sheet_name, $index, $type, $operator_type, $formula1, $formula2, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsConditionalFormattingsApi->cellsConditionalFormattingsPutWorksheetFormatConditionCondition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **index** | **int**|  |
 **type** | **string**|  |
 **operator_type** | **string**|  |
 **formula1** | **string**|  |
 **formula2** | **string**|  |
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

