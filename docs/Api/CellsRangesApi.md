# Aspose\Cells\Cloud\CellsRangesApi

All URIs are relative to *https://api.aspose.cloud/v1.1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cellsRangesGetWorksheetCellsRangeValue**](CellsRangesApi.md#cellsRangesGetWorksheetCellsRangeValue) | **GET** /cells/{name}/worksheets/{sheetName}/ranges/value | Get cells list in a range by range name or row column indexes
[**cellsRangesPostWorksheetCellsRangeColumnWidth**](CellsRangesApi.md#cellsRangesPostWorksheetCellsRangeColumnWidth) | **POST** /cells/{name}/worksheets/{sheetName}/ranges/columnWidth | Set column width of range
[**cellsRangesPostWorksheetCellsRangeMerge**](CellsRangesApi.md#cellsRangesPostWorksheetCellsRangeMerge) | **POST** /cells/{name}/worksheets/{sheetName}/ranges/merge | Combines a range of cells into a single cell.
[**cellsRangesPostWorksheetCellsRangeMoveTo**](CellsRangesApi.md#cellsRangesPostWorksheetCellsRangeMoveTo) | **POST** /cells/{name}/worksheets/{sheetName}/ranges/moveto | Move the current range to the dest range.
[**cellsRangesPostWorksheetCellsRangeOutlineBorder**](CellsRangesApi.md#cellsRangesPostWorksheetCellsRangeOutlineBorder) | **POST** /cells/{name}/worksheets/{sheetName}/ranges/outlineBorder | Sets outline border around a range of cells.
[**cellsRangesPostWorksheetCellsRangeRowHeight**](CellsRangesApi.md#cellsRangesPostWorksheetCellsRangeRowHeight) | **POST** /cells/{name}/worksheets/{sheetName}/ranges/rowHeight | set row height of range
[**cellsRangesPostWorksheetCellsRangeStyle**](CellsRangesApi.md#cellsRangesPostWorksheetCellsRangeStyle) | **POST** /cells/{name}/worksheets/{sheetName}/ranges/style | Sets the style of the range.
[**cellsRangesPostWorksheetCellsRangeUnmerge**](CellsRangesApi.md#cellsRangesPostWorksheetCellsRangeUnmerge) | **POST** /cells/{name}/worksheets/{sheetName}/ranges/unmerge | Unmerges merged cells of this range.
[**cellsRangesPostWorksheetCellsRangeValue**](CellsRangesApi.md#cellsRangesPostWorksheetCellsRangeValue) | **POST** /cells/{name}/worksheets/{sheetName}/ranges/value | Puts a value into the range, if appropriate the value will be converted to other data type and cell&#39;s number format will be reset.
[**cellsRangesPostWorksheetCellsRanges**](CellsRangesApi.md#cellsRangesPostWorksheetCellsRanges) | **POST** /cells/{name}/worksheets/{sheetName}/ranges | copy range in the worksheet


# **cellsRangesGetWorksheetCellsRangeValue**
> \Aspose\Cells\Cloud\Model\RangeValueResponse cellsRangesGetWorksheetCellsRangeValue($name, $sheet_name, $namerange, $first_row, $first_column, $row_count, $column_count, $folder)

Get cells list in a range by range name or row column indexes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsRangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | workbook name
$sheet_name = "sheet_name_example"; // string | worksheet name
$namerange = "namerange_example"; // string | range name, for example: 'A1:B2' or 'range_name1'
$first_row = 56; // int | the first row of the range
$first_column = 56; // int | the first column of the range
$row_count = 56; // int | the count of rows in the range
$column_count = 56; // int | the count of columns in the range
$folder = "folder_example"; // string | Workbook folder.

try {
    $result = $apiInstance->cellsRangesGetWorksheetCellsRangeValue($name, $sheet_name, $namerange, $first_row, $first_column, $row_count, $column_count, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsRangesApi->cellsRangesGetWorksheetCellsRangeValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| workbook name |
 **sheet_name** | **string**| worksheet name |
 **namerange** | **string**| range name, for example: &#39;A1:B2&#39; or &#39;range_name1&#39; | [optional]
 **first_row** | **int**| the first row of the range | [optional]
 **first_column** | **int**| the first column of the range | [optional]
 **row_count** | **int**| the count of rows in the range | [optional]
 **column_count** | **int**| the count of columns in the range | [optional]
 **folder** | **string**| Workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\RangeValueResponse**](../Model/RangeValueResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsRangesPostWorksheetCellsRangeColumnWidth**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsRangesPostWorksheetCellsRangeColumnWidth($name, $sheet_name, $value, $range, $folder)

Set column width of range

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsRangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$value = 1.2; // double | 
$range = new \Aspose\Cells\Cloud\Model\Range(); // \Aspose\Cells\Cloud\Model\Range | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->cellsRangesPostWorksheetCellsRangeColumnWidth($name, $sheet_name, $value, $range, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsRangesApi->cellsRangesPostWorksheetCellsRangeColumnWidth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **value** | **double**|  |
 **range** | [**\Aspose\Cells\Cloud\Model\Range**](../Model/Range.md)|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsRangesPostWorksheetCellsRangeMerge**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsRangesPostWorksheetCellsRangeMerge($name, $sheet_name, $range, $folder)

Combines a range of cells into a single cell.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsRangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | workbook name
$sheet_name = "sheet_name_example"; // string | worksheet name
$range = new \Aspose\Cells\Cloud\Model\Range(); // \Aspose\Cells\Cloud\Model\Range | range in worksheet
$folder = "folder_example"; // string | Workbook folder.

try {
    $result = $apiInstance->cellsRangesPostWorksheetCellsRangeMerge($name, $sheet_name, $range, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsRangesApi->cellsRangesPostWorksheetCellsRangeMerge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| workbook name |
 **sheet_name** | **string**| worksheet name |
 **range** | [**\Aspose\Cells\Cloud\Model\Range**](../Model/Range.md)| range in worksheet | [optional]
 **folder** | **string**| Workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsRangesPostWorksheetCellsRangeMoveTo**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsRangesPostWorksheetCellsRangeMoveTo($name, $sheet_name, $dest_row, $dest_column, $range, $folder)

Move the current range to the dest range.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsRangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | workbook name
$sheet_name = "sheet_name_example"; // string | worksheet name
$dest_row = 56; // int | The start row of the dest range.
$dest_column = 56; // int | The start column of the dest range.
$range = new \Aspose\Cells\Cloud\Model\Range(); // \Aspose\Cells\Cloud\Model\Range | range in worksheet
$folder = "folder_example"; // string | Workbook folder.

try {
    $result = $apiInstance->cellsRangesPostWorksheetCellsRangeMoveTo($name, $sheet_name, $dest_row, $dest_column, $range, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsRangesApi->cellsRangesPostWorksheetCellsRangeMoveTo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| workbook name |
 **sheet_name** | **string**| worksheet name |
 **dest_row** | **int**| The start row of the dest range. |
 **dest_column** | **int**| The start column of the dest range. |
 **range** | [**\Aspose\Cells\Cloud\Model\Range**](../Model/Range.md)| range in worksheet | [optional]
 **folder** | **string**| Workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsRangesPostWorksheetCellsRangeOutlineBorder**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsRangesPostWorksheetCellsRangeOutlineBorder($name, $sheet_name, $range_operate, $folder)

Sets outline border around a range of cells.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsRangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | workbook name
$sheet_name = "sheet_name_example"; // string | worksheet name
$range_operate = new \Aspose\Cells\Cloud\Model\RangeSetOutlineBorderRequest(); // \Aspose\Cells\Cloud\Model\RangeSetOutlineBorderRequest | Range Set OutlineBorder Request
$folder = "folder_example"; // string | Workbook folder.

try {
    $result = $apiInstance->cellsRangesPostWorksheetCellsRangeOutlineBorder($name, $sheet_name, $range_operate, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsRangesApi->cellsRangesPostWorksheetCellsRangeOutlineBorder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| workbook name |
 **sheet_name** | **string**| worksheet name |
 **range_operate** | [**\Aspose\Cells\Cloud\Model\RangeSetOutlineBorderRequest**](../Model/RangeSetOutlineBorderRequest.md)| Range Set OutlineBorder Request | [optional]
 **folder** | **string**| Workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsRangesPostWorksheetCellsRangeRowHeight**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsRangesPostWorksheetCellsRangeRowHeight($name, $sheet_name, $value, $range, $folder)

set row height of range

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsRangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$value = 1.2; // double | 
$range = new \Aspose\Cells\Cloud\Model\Range(); // \Aspose\Cells\Cloud\Model\Range | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->cellsRangesPostWorksheetCellsRangeRowHeight($name, $sheet_name, $value, $range, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsRangesApi->cellsRangesPostWorksheetCellsRangeRowHeight: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **value** | **double**|  |
 **range** | [**\Aspose\Cells\Cloud\Model\Range**](../Model/Range.md)|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsRangesPostWorksheetCellsRangeStyle**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsRangesPostWorksheetCellsRangeStyle($name, $sheet_name, $range_operate, $folder)

Sets the style of the range.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsRangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | workbook name
$sheet_name = "sheet_name_example"; // string | worksheet name
$range_operate = new \Aspose\Cells\Cloud\Model\RangeSetStyleRequest(); // \Aspose\Cells\Cloud\Model\RangeSetStyleRequest | Range Set Style Request
$folder = "folder_example"; // string | Workbook folder.

try {
    $result = $apiInstance->cellsRangesPostWorksheetCellsRangeStyle($name, $sheet_name, $range_operate, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsRangesApi->cellsRangesPostWorksheetCellsRangeStyle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| workbook name |
 **sheet_name** | **string**| worksheet name |
 **range_operate** | [**\Aspose\Cells\Cloud\Model\RangeSetStyleRequest**](../Model/RangeSetStyleRequest.md)| Range Set Style Request | [optional]
 **folder** | **string**| Workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsRangesPostWorksheetCellsRangeUnmerge**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsRangesPostWorksheetCellsRangeUnmerge($name, $sheet_name, $range, $folder)

Unmerges merged cells of this range.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsRangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | workbook name
$sheet_name = "sheet_name_example"; // string | worksheet name
$range = new \Aspose\Cells\Cloud\Model\Range(); // \Aspose\Cells\Cloud\Model\Range | range in worksheet
$folder = "folder_example"; // string | Workbook folder.

try {
    $result = $apiInstance->cellsRangesPostWorksheetCellsRangeUnmerge($name, $sheet_name, $range, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsRangesApi->cellsRangesPostWorksheetCellsRangeUnmerge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| workbook name |
 **sheet_name** | **string**| worksheet name |
 **range** | [**\Aspose\Cells\Cloud\Model\Range**](../Model/Range.md)| range in worksheet | [optional]
 **folder** | **string**| Workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsRangesPostWorksheetCellsRangeValue**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsRangesPostWorksheetCellsRangeValue($name, $sheet_name, $value, $range, $is_converted, $set_style, $folder)

Puts a value into the range, if appropriate the value will be converted to other data type and cell's number format will be reset.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsRangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | workbook name
$sheet_name = "sheet_name_example"; // string | worksheet name
$value = "value_example"; // string | Input value
$range = new \Aspose\Cells\Cloud\Model\Range(); // \Aspose\Cells\Cloud\Model\Range | range in worksheet
$is_converted = false; // bool | True: converted to other data type if appropriate.
$set_style = false; // bool | True: set the number format to cell's style when converting to other data type
$folder = "folder_example"; // string | Workbook folder.

try {
    $result = $apiInstance->cellsRangesPostWorksheetCellsRangeValue($name, $sheet_name, $value, $range, $is_converted, $set_style, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsRangesApi->cellsRangesPostWorksheetCellsRangeValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| workbook name |
 **sheet_name** | **string**| worksheet name |
 **value** | **string**| Input value |
 **range** | [**\Aspose\Cells\Cloud\Model\Range**](../Model/Range.md)| range in worksheet | [optional]
 **is_converted** | **bool**| True: converted to other data type if appropriate. | [optional] [default to false]
 **set_style** | **bool**| True: set the number format to cell&#39;s style when converting to other data type | [optional] [default to false]
 **folder** | **string**| Workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsRangesPostWorksheetCellsRanges**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsRangesPostWorksheetCellsRanges($name, $sheet_name, $range_operate, $folder)

copy range in the worksheet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsRangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | workbook name
$sheet_name = "sheet_name_example"; // string | worksheet name
$range_operate = new \Aspose\Cells\Cloud\Model\RangeCopyRequest(); // \Aspose\Cells\Cloud\Model\RangeCopyRequest | copydata,copystyle,copyto,copyvalue
$folder = "folder_example"; // string | Workbook folder.

try {
    $result = $apiInstance->cellsRangesPostWorksheetCellsRanges($name, $sheet_name, $range_operate, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsRangesApi->cellsRangesPostWorksheetCellsRanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| workbook name |
 **sheet_name** | **string**| worksheet name |
 **range_operate** | [**\Aspose\Cells\Cloud\Model\RangeCopyRequest**](../Model/RangeCopyRequest.md)| copydata,copystyle,copyto,copyvalue | [optional]
 **folder** | **string**| Workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

