# Aspose\Cells\Cloud\CellsApi

All URIs are relative to *https://api.aspose.cloud/v1.1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cellsDeleteWorksheetColumns**](CellsApi.md#cellsDeleteWorksheetColumns) | **DELETE** /cells/{name}/worksheets/{sheetName}/cells/columns/{columnIndex} | Delete worksheet columns.
[**cellsDeleteWorksheetRow**](CellsApi.md#cellsDeleteWorksheetRow) | **DELETE** /cells/{name}/worksheets/{sheetName}/cells/rows/{rowIndex} | Delete worksheet row.
[**cellsDeleteWorksheetRows**](CellsApi.md#cellsDeleteWorksheetRows) | **DELETE** /cells/{name}/worksheets/{sheetName}/cells/rows | Delete several worksheet rows.
[**cellsGetWorksheetCell**](CellsApi.md#cellsGetWorksheetCell) | **GET** /cells/{name}/worksheets/{sheetName}/cells/{cellOrMethodName} | Read cell data by cell&#39;s name.
[**cellsGetWorksheetCellStyle**](CellsApi.md#cellsGetWorksheetCellStyle) | **GET** /cells/{name}/worksheets/{sheetName}/cells/{cellName}/style | Read cell&#39;s style info.
[**cellsGetWorksheetCells**](CellsApi.md#cellsGetWorksheetCells) | **GET** /cells/{name}/worksheets/{sheetName}/cells | Get cells info.
[**cellsGetWorksheetColumn**](CellsApi.md#cellsGetWorksheetColumn) | **GET** /cells/{name}/worksheets/{sheetName}/cells/columns/{columnIndex} | Read worksheet column data by column&#39;s index.
[**cellsGetWorksheetColumns**](CellsApi.md#cellsGetWorksheetColumns) | **GET** /cells/{name}/worksheets/{sheetName}/cells/columns | Read worksheet columns info.
[**cellsGetWorksheetRow**](CellsApi.md#cellsGetWorksheetRow) | **GET** /cells/{name}/worksheets/{sheetName}/cells/rows/{rowIndex} | Read worksheet row data by row&#39;s index.
[**cellsGetWorksheetRows**](CellsApi.md#cellsGetWorksheetRows) | **GET** /cells/{name}/worksheets/{sheetName}/cells/rows | Read worksheet rows info.
[**cellsPostCellCalculate**](CellsApi.md#cellsPostCellCalculate) | **POST** /cells/{name}/worksheets/{sheetName}/cells/{cellName}/calculate | Cell calculate formula
[**cellsPostCellCharacters**](CellsApi.md#cellsPostCellCharacters) | **POST** /cells/{name}/worksheets/{sheetName}/cells/{cellName}/characters | Set cell characters
[**cellsPostClearContents**](CellsApi.md#cellsPostClearContents) | **POST** /cells/{name}/worksheets/{sheetName}/cells/clearcontents | Clear cells contents.
[**cellsPostClearFormats**](CellsApi.md#cellsPostClearFormats) | **POST** /cells/{name}/worksheets/{sheetName}/cells/clearformats | Clear cells contents.
[**cellsPostColumnStyle**](CellsApi.md#cellsPostColumnStyle) | **POST** /cells/{name}/worksheets/{sheetName}/cells/columns/{columnIndex}/style | Set column style
[**cellsPostCopyCellIntoCell**](CellsApi.md#cellsPostCopyCellIntoCell) | **POST** /cells/{name}/worksheets/{sheetName}/cells/{destCellName}/copy | Copy cell into cell
[**cellsPostCopyWorksheetColumns**](CellsApi.md#cellsPostCopyWorksheetColumns) | **POST** /cells/{name}/worksheets/{sheetName}/cells/columns/copy | Copy worksheet columns.
[**cellsPostCopyWorksheetRows**](CellsApi.md#cellsPostCopyWorksheetRows) | **POST** /cells/{name}/worksheets/{sheetName}/cells/rows/copy | Copy worksheet rows.
[**cellsPostGroupWorksheetColumns**](CellsApi.md#cellsPostGroupWorksheetColumns) | **POST** /cells/{name}/worksheets/{sheetName}/cells/columns/group | Group worksheet columns.
[**cellsPostGroupWorksheetRows**](CellsApi.md#cellsPostGroupWorksheetRows) | **POST** /cells/{name}/worksheets/{sheetName}/cells/rows/group | Group worksheet rows.
[**cellsPostHideWorksheetColumns**](CellsApi.md#cellsPostHideWorksheetColumns) | **POST** /cells/{name}/worksheets/{sheetName}/cells/columns/hide | Hide worksheet columns.
[**cellsPostHideWorksheetRows**](CellsApi.md#cellsPostHideWorksheetRows) | **POST** /cells/{name}/worksheets/{sheetName}/cells/rows/hide | Hide worksheet rows.
[**cellsPostRowStyle**](CellsApi.md#cellsPostRowStyle) | **POST** /cells/{name}/worksheets/{sheetName}/cells/rows/{rowIndex}/style | Set row style.
[**cellsPostSetCellHtmlString**](CellsApi.md#cellsPostSetCellHtmlString) | **POST** /cells/{name}/worksheets/{sheetName}/cells/{cellName}/htmlstring | Set htmlstring value into cell
[**cellsPostSetCellRangeValue**](CellsApi.md#cellsPostSetCellRangeValue) | **POST** /cells/{name}/worksheets/{sheetName}/cells | Set cell range value
[**cellsPostSetWorksheetColumnWidth**](CellsApi.md#cellsPostSetWorksheetColumnWidth) | **POST** /cells/{name}/worksheets/{sheetName}/cells/columns/{columnIndex} | Set worksheet column width.
[**cellsPostUngroupWorksheetColumns**](CellsApi.md#cellsPostUngroupWorksheetColumns) | **POST** /cells/{name}/worksheets/{sheetName}/cells/columns/ungroup | Ungroup worksheet columns.
[**cellsPostUngroupWorksheetRows**](CellsApi.md#cellsPostUngroupWorksheetRows) | **POST** /cells/{name}/worksheets/{sheetName}/cells/rows/ungroup | Ungroup worksheet rows.
[**cellsPostUnhideWorksheetColumns**](CellsApi.md#cellsPostUnhideWorksheetColumns) | **POST** /cells/{name}/worksheets/{sheetName}/cells/columns/unhide | Unhide worksheet columns.
[**cellsPostUnhideWorksheetRows**](CellsApi.md#cellsPostUnhideWorksheetRows) | **POST** /cells/{name}/worksheets/{sheetName}/cells/rows/unhide | Unhide worksheet rows.
[**cellsPostUpdateWorksheetCellStyle**](CellsApi.md#cellsPostUpdateWorksheetCellStyle) | **POST** /cells/{name}/worksheets/{sheetName}/cells/{cellName}/style | Update cell&#39;s style.
[**cellsPostUpdateWorksheetRangeStyle**](CellsApi.md#cellsPostUpdateWorksheetRangeStyle) | **POST** /cells/{name}/worksheets/{sheetName}/cells/style | Update cell&#39;s range style.
[**cellsPostUpdateWorksheetRow**](CellsApi.md#cellsPostUpdateWorksheetRow) | **POST** /cells/{name}/worksheets/{sheetName}/cells/rows/{rowIndex} | Update worksheet row.
[**cellsPostWorksheetCellSetValue**](CellsApi.md#cellsPostWorksheetCellSetValue) | **POST** /cells/{name}/worksheets/{sheetName}/cells/{cellName} | Set cell value.
[**cellsPostWorksheetMerge**](CellsApi.md#cellsPostWorksheetMerge) | **POST** /cells/{name}/worksheets/{sheetName}/cells/merge | Merge cells.
[**cellsPostWorksheetUnmerge**](CellsApi.md#cellsPostWorksheetUnmerge) | **POST** /cells/{name}/worksheets/{sheetName}/cells/unmerge | Unmerge cells.
[**cellsPutInsertWorksheetColumns**](CellsApi.md#cellsPutInsertWorksheetColumns) | **PUT** /cells/{name}/worksheets/{sheetName}/cells/columns/{columnIndex} | Insert worksheet columns.
[**cellsPutInsertWorksheetRow**](CellsApi.md#cellsPutInsertWorksheetRow) | **PUT** /cells/{name}/worksheets/{sheetName}/cells/rows/{rowIndex} | Insert new worksheet row.
[**cellsPutInsertWorksheetRows**](CellsApi.md#cellsPutInsertWorksheetRows) | **PUT** /cells/{name}/worksheets/{sheetName}/cells/rows | Insert several new worksheet rows.


# **cellsDeleteWorksheetColumns**
> \Aspose\Cells\Cloud\Model\ColumnsResponse cellsDeleteWorksheetColumns($name, $sheet_name, $column_index, $columns, $update_reference, $folder)

Delete worksheet columns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$column_index = 56; // int | The column index.
$columns = 56; // int | The columns.
$update_reference = true; // bool | The update reference.
$folder = "folder_example"; // string | The workbook folder.

try {
    $result = $apiInstance->cellsDeleteWorksheetColumns($name, $sheet_name, $column_index, $columns, $update_reference, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsDeleteWorksheetColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **column_index** | **int**| The column index. |
 **columns** | **int**| The columns. |
 **update_reference** | **bool**| The update reference. |
 **folder** | **string**| The workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\ColumnsResponse**](../Model/ColumnsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsDeleteWorksheetRow**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsDeleteWorksheetRow($name, $sheet_name, $row_index, $folder)

Delete worksheet row.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet bame.
$row_index = 56; // int | The row index.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsDeleteWorksheetRow($name, $sheet_name, $row_index, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsDeleteWorksheetRow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet bame. |
 **row_index** | **int**| The row index. |
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsDeleteWorksheetRows**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsDeleteWorksheetRows($name, $sheet_name, $startrow, $total_rows, $update_reference, $folder)

Delete several worksheet rows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet bame.
$startrow = 56; // int | The begin row index to be operated.
$total_rows = 1; // int | Number of rows to be operated.
$update_reference = true; // bool | Indicates if update references in other worksheets.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsDeleteWorksheetRows($name, $sheet_name, $startrow, $total_rows, $update_reference, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsDeleteWorksheetRows: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet bame. |
 **startrow** | **int**| The begin row index to be operated. |
 **total_rows** | **int**| Number of rows to be operated. | [optional] [default to 1]
 **update_reference** | **bool**| Indicates if update references in other worksheets. | [optional] [default to true]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsGetWorksheetCell**
> \SplFileObject cellsGetWorksheetCell($name, $sheet_name, $cell_or_method_name, $folder)

Read cell data by cell's name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$cell_or_method_name = "cell_or_method_name_example"; // string | The cell's or method name. (Method name like firstcell, endcell etc.)
$folder = "folder_example"; // string | Document's folder.

try {
    $result = $apiInstance->cellsGetWorksheetCell($name, $sheet_name, $cell_or_method_name, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsGetWorksheetCell: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| Worksheet name. |
 **cell_or_method_name** | **string**| The cell&#39;s or method name. (Method name like firstcell, endcell etc.) |
 **folder** | **string**| Document&#39;s folder. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsGetWorksheetCellStyle**
> \Aspose\Cells\Cloud\Model\StyleResponse cellsGetWorksheetCellStyle($name, $sheet_name, $cell_name, $folder)

Read cell's style info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$cell_name = "cell_name_example"; // string | Cell's name.
$folder = "folder_example"; // string | Document's folder.

try {
    $result = $apiInstance->cellsGetWorksheetCellStyle($name, $sheet_name, $cell_name, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsGetWorksheetCellStyle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| Worksheet name. |
 **cell_name** | **string**| Cell&#39;s name. |
 **folder** | **string**| Document&#39;s folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\StyleResponse**](../Model/StyleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsGetWorksheetCells**
> \Aspose\Cells\Cloud\Model\CellsResponse cellsGetWorksheetCells($name, $sheet_name, $offest, $count, $folder)

Get cells info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$offest = 0; // int | Begginig offset.
$count = 0; // int | Maximum amount of cells in the response.
$folder = "folder_example"; // string | Document's folder name.

try {
    $result = $apiInstance->cellsGetWorksheetCells($name, $sheet_name, $offest, $count, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsGetWorksheetCells: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| Worksheet name. |
 **offest** | **int**| Begginig offset. | [optional] [default to 0]
 **count** | **int**| Maximum amount of cells in the response. | [optional] [default to 0]
 **folder** | **string**| Document&#39;s folder name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\CellsResponse**](../Model/CellsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsGetWorksheetColumn**
> \Aspose\Cells\Cloud\Model\ColumnResponse cellsGetWorksheetColumn($name, $sheet_name, $column_index, $folder)

Read worksheet column data by column's index.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$column_index = 56; // int | The column index.
$folder = "folder_example"; // string | The workbook folder.

try {
    $result = $apiInstance->cellsGetWorksheetColumn($name, $sheet_name, $column_index, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsGetWorksheetColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **column_index** | **int**| The column index. |
 **folder** | **string**| The workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\ColumnResponse**](../Model/ColumnResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsGetWorksheetColumns**
> \Aspose\Cells\Cloud\Model\ColumnsResponse cellsGetWorksheetColumns($name, $sheet_name, $folder)

Read worksheet columns info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$folder = "folder_example"; // string | The workdook folder.

try {
    $result = $apiInstance->cellsGetWorksheetColumns($name, $sheet_name, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsGetWorksheetColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **folder** | **string**| The workdook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\ColumnsResponse**](../Model/ColumnsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsGetWorksheetRow**
> \Aspose\Cells\Cloud\Model\RowResponse cellsGetWorksheetRow($name, $sheet_name, $row_index, $folder)

Read worksheet row data by row's index.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$row_index = 56; // int | The row index.
$folder = "folder_example"; // string | The workbook folder.

try {
    $result = $apiInstance->cellsGetWorksheetRow($name, $sheet_name, $row_index, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsGetWorksheetRow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **row_index** | **int**| The row index. |
 **folder** | **string**| The workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\RowResponse**](../Model/RowResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsGetWorksheetRows**
> \Aspose\Cells\Cloud\Model\RowsResponse cellsGetWorksheetRows($name, $sheet_name, $folder)

Read worksheet rows info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$folder = "folder_example"; // string | The workdook folder.

try {
    $result = $apiInstance->cellsGetWorksheetRows($name, $sheet_name, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsGetWorksheetRows: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **folder** | **string**| The workdook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\RowsResponse**](../Model/RowsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostCellCalculate**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPostCellCalculate($name, $sheet_name, $cell_name, $options, $folder)

Cell calculate formula

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$cell_name = "cell_name_example"; // string | 
$options = new \Aspose\Cells\Cloud\Model\CalculationOptions(); // \Aspose\Cells\Cloud\Model\CalculationOptions | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->cellsPostCellCalculate($name, $sheet_name, $cell_name, $options, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostCellCalculate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **cell_name** | **string**|  |
 **options** | [**\Aspose\Cells\Cloud\Model\CalculationOptions**](../Model/CalculationOptions.md)|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostCellCharacters**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPostCellCharacters($name, $sheet_name, $cell_name, $options, $folder)

Set cell characters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$cell_name = "cell_name_example"; // string | 
$options = array(new \Aspose\Cells\Cloud\Model\FontSetting()); // \Aspose\Cells\Cloud\Model\FontSetting[] | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->cellsPostCellCharacters($name, $sheet_name, $cell_name, $options, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostCellCharacters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **cell_name** | **string**|  |
 **options** | [**\Aspose\Cells\Cloud\Model\FontSetting[]**](../Model/FontSetting.md)|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostClearContents**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPostClearContents($name, $sheet_name, $range, $start_row, $start_column, $end_row, $end_column, $folder)

Clear cells contents.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Workbook name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$range = "range_example"; // string | The range.
$start_row = 56; // int | The start row.
$start_column = 56; // int | The start column.
$end_row = 56; // int | The end row.
$end_column = 56; // int | The end column.
$folder = "folder_example"; // string | The workbook folder.

try {
    $result = $apiInstance->cellsPostClearContents($name, $sheet_name, $range, $start_row, $start_column, $end_row, $end_column, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostClearContents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Workbook name. |
 **sheet_name** | **string**| Worksheet name. |
 **range** | **string**| The range. | [optional]
 **start_row** | **int**| The start row. | [optional]
 **start_column** | **int**| The start column. | [optional]
 **end_row** | **int**| The end row. | [optional]
 **end_column** | **int**| The end column. | [optional]
 **folder** | **string**| The workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostClearFormats**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPostClearFormats($name, $sheet_name, $range, $start_row, $start_column, $end_row, $end_column, $folder)

Clear cells contents.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Workbook name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$range = "range_example"; // string | The range.
$start_row = 56; // int | The start row.
$start_column = 56; // int | The start column.
$end_row = 56; // int | The end row.
$end_column = 56; // int | The end column.
$folder = "folder_example"; // string | The workbook folder.

try {
    $result = $apiInstance->cellsPostClearFormats($name, $sheet_name, $range, $start_row, $start_column, $end_row, $end_column, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostClearFormats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Workbook name. |
 **sheet_name** | **string**| Worksheet name. |
 **range** | **string**| The range. | [optional]
 **start_row** | **int**| The start row. | [optional]
 **start_column** | **int**| The start column. | [optional]
 **end_row** | **int**| The end row. | [optional]
 **end_column** | **int**| The end column. | [optional]
 **folder** | **string**| The workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostColumnStyle**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPostColumnStyle($name, $sheet_name, $column_index, $style, $folder)

Set column style

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$column_index = 56; // int | The column index.
$style = new \Aspose\Cells\Cloud\Model\Style(); // \Aspose\Cells\Cloud\Model\Style | Style dto
$folder = "folder_example"; // string | The workbook folder.

try {
    $result = $apiInstance->cellsPostColumnStyle($name, $sheet_name, $column_index, $style, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostColumnStyle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **column_index** | **int**| The column index. |
 **style** | [**\Aspose\Cells\Cloud\Model\Style**](../Model/Style.md)| Style dto | [optional]
 **folder** | **string**| The workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostCopyCellIntoCell**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPostCopyCellIntoCell($name, $dest_cell_name, $sheet_name, $worksheet, $cellname, $row, $column, $folder)

Copy cell into cell

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Workbook name.
$dest_cell_name = "dest_cell_name_example"; // string | Destination cell name
$sheet_name = "sheet_name_example"; // string | Destination worksheet name.
$worksheet = "worksheet_example"; // string | Source worksheet name.
$cellname = "cellname_example"; // string | Source cell name
$row = 56; // int | Source row
$column = 56; // int | Source column
$folder = "folder_example"; // string | Folder name

try {
    $result = $apiInstance->cellsPostCopyCellIntoCell($name, $dest_cell_name, $sheet_name, $worksheet, $cellname, $row, $column, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostCopyCellIntoCell: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Workbook name. |
 **dest_cell_name** | **string**| Destination cell name |
 **sheet_name** | **string**| Destination worksheet name. |
 **worksheet** | **string**| Source worksheet name. |
 **cellname** | **string**| Source cell name | [optional]
 **row** | **int**| Source row | [optional]
 **column** | **int**| Source column | [optional]
 **folder** | **string**| Folder name | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostCopyWorksheetColumns**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPostCopyWorksheetColumns($name, $sheet_name, $source_column_index, $destination_column_index, $column_number, $worksheet, $folder)

Copy worksheet columns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$source_column_index = 56; // int | Source column index
$destination_column_index = 56; // int | Destination column index
$column_number = 56; // int | The copied column number
$worksheet = ""; // string | The Worksheet
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsPostCopyWorksheetColumns($name, $sheet_name, $source_column_index, $destination_column_index, $column_number, $worksheet, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostCopyWorksheetColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **source_column_index** | **int**| Source column index |
 **destination_column_index** | **int**| Destination column index |
 **column_number** | **int**| The copied column number |
 **worksheet** | **string**| The Worksheet | [optional] [default to ]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostCopyWorksheetRows**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPostCopyWorksheetRows($name, $sheet_name, $source_row_index, $destination_row_index, $row_number, $worksheet, $folder)

Copy worksheet rows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$source_row_index = 56; // int | Source row index
$destination_row_index = 56; // int | Destination row index
$row_number = 56; // int | The copied row number
$worksheet = "worksheet_example"; // string | worksheet
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsPostCopyWorksheetRows($name, $sheet_name, $source_row_index, $destination_row_index, $row_number, $worksheet, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostCopyWorksheetRows: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **source_row_index** | **int**| Source row index |
 **destination_row_index** | **int**| Destination row index |
 **row_number** | **int**| The copied row number |
 **worksheet** | **string**| worksheet | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostGroupWorksheetColumns**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPostGroupWorksheetColumns($name, $sheet_name, $first_index, $last_index, $hide, $folder)

Group worksheet columns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$first_index = 56; // int | The first column index to be operated.
$last_index = 56; // int | The last column index to be operated.
$hide = true; // bool | columns visible state
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsPostGroupWorksheetColumns($name, $sheet_name, $first_index, $last_index, $hide, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostGroupWorksheetColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **first_index** | **int**| The first column index to be operated. |
 **last_index** | **int**| The last column index to be operated. |
 **hide** | **bool**| columns visible state | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostGroupWorksheetRows**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPostGroupWorksheetRows($name, $sheet_name, $first_index, $last_index, $hide, $folder)

Group worksheet rows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$first_index = 56; // int | The first row index to be operated.
$last_index = 56; // int | The last row index to be operated.
$hide = true; // bool | rows visible state
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsPostGroupWorksheetRows($name, $sheet_name, $first_index, $last_index, $hide, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostGroupWorksheetRows: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **first_index** | **int**| The first row index to be operated. |
 **last_index** | **int**| The last row index to be operated. |
 **hide** | **bool**| rows visible state | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostHideWorksheetColumns**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPostHideWorksheetColumns($name, $sheet_name, $start_column, $total_columns, $folder)

Hide worksheet columns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$start_column = 56; // int | The begin column index to be operated.
$total_columns = 56; // int | Number of columns to be operated.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsPostHideWorksheetColumns($name, $sheet_name, $start_column, $total_columns, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostHideWorksheetColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **start_column** | **int**| The begin column index to be operated. |
 **total_columns** | **int**| Number of columns to be operated. |
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostHideWorksheetRows**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPostHideWorksheetRows($name, $sheet_name, $startrow, $total_rows, $folder)

Hide worksheet rows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$startrow = 56; // int | The begin row index to be operated.
$total_rows = 56; // int | Number of rows to be operated.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsPostHideWorksheetRows($name, $sheet_name, $startrow, $total_rows, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostHideWorksheetRows: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **startrow** | **int**| The begin row index to be operated. |
 **total_rows** | **int**| Number of rows to be operated. |
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostRowStyle**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPostRowStyle($name, $sheet_name, $row_index, $style, $folder)

Set row style.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$row_index = 56; // int | The row index.
$style = new \Aspose\Cells\Cloud\Model\Style(); // \Aspose\Cells\Cloud\Model\Style | Style dto
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsPostRowStyle($name, $sheet_name, $row_index, $style, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostRowStyle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **row_index** | **int**| The row index. |
 **style** | [**\Aspose\Cells\Cloud\Model\Style**](../Model/Style.md)| Style dto | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostSetCellHtmlString**
> \Aspose\Cells\Cloud\Model\CellResponse cellsPostSetCellHtmlString($name, $sheet_name, $cell_name, $folder)

Set htmlstring value into cell

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Workbook name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$cell_name = "cell_name_example"; // string | The cell name.
$folder = "folder_example"; // string | The workbook folder.

try {
    $result = $apiInstance->cellsPostSetCellHtmlString($name, $sheet_name, $cell_name, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostSetCellHtmlString: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Workbook name. |
 **sheet_name** | **string**| Worksheet name. |
 **cell_name** | **string**| The cell name. |
 **folder** | **string**| The workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\CellResponse**](../Model/CellResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostSetCellRangeValue**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPostSetCellRangeValue($name, $sheet_name, $cellarea, $value, $type, $folder)

Set cell range value

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Workbook name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$cellarea = "cellarea_example"; // string | Cell area (like \"A1:C2\")
$value = "value_example"; // string | Range value
$type = "type_example"; // string | Value data type (like \"int\")
$folder = "folder_example"; // string | Folder name

try {
    $result = $apiInstance->cellsPostSetCellRangeValue($name, $sheet_name, $cellarea, $value, $type, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostSetCellRangeValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Workbook name. |
 **sheet_name** | **string**| Worksheet name. |
 **cellarea** | **string**| Cell area (like \&quot;A1:C2\&quot;) |
 **value** | **string**| Range value |
 **type** | **string**| Value data type (like \&quot;int\&quot;) |
 **folder** | **string**| Folder name | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostSetWorksheetColumnWidth**
> \Aspose\Cells\Cloud\Model\ColumnResponse cellsPostSetWorksheetColumnWidth($name, $sheet_name, $column_index, $width, $folder)

Set worksheet column width.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$column_index = 56; // int | The column index.
$width = 1.2; // double | The width.
$folder = "folder_example"; // string | The workbook folder.

try {
    $result = $apiInstance->cellsPostSetWorksheetColumnWidth($name, $sheet_name, $column_index, $width, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostSetWorksheetColumnWidth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **column_index** | **int**| The column index. |
 **width** | **double**| The width. |
 **folder** | **string**| The workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\ColumnResponse**](../Model/ColumnResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostUngroupWorksheetColumns**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPostUngroupWorksheetColumns($name, $sheet_name, $first_index, $last_index, $folder)

Ungroup worksheet columns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$first_index = 56; // int | The first column index to be operated.
$last_index = 56; // int | The last column index to be operated.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsPostUngroupWorksheetColumns($name, $sheet_name, $first_index, $last_index, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostUngroupWorksheetColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **first_index** | **int**| The first column index to be operated. |
 **last_index** | **int**| The last column index to be operated. |
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostUngroupWorksheetRows**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPostUngroupWorksheetRows($name, $sheet_name, $first_index, $last_index, $is_all, $folder)

Ungroup worksheet rows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$first_index = 56; // int | The first row index to be operated.
$last_index = 56; // int | The last row index to be operated.
$is_all = true; // bool | Is all row to be operated
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsPostUngroupWorksheetRows($name, $sheet_name, $first_index, $last_index, $is_all, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostUngroupWorksheetRows: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **first_index** | **int**| The first row index to be operated. |
 **last_index** | **int**| The last row index to be operated. |
 **is_all** | **bool**| Is all row to be operated | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostUnhideWorksheetColumns**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPostUnhideWorksheetColumns($name, $sheet_name, $startcolumn, $total_columns, $width, $folder)

Unhide worksheet columns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$startcolumn = 56; // int | The begin column index to be operated.
$total_columns = 56; // int | Number of columns to be operated.
$width = 50.0; // double | The new column width.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsPostUnhideWorksheetColumns($name, $sheet_name, $startcolumn, $total_columns, $width, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostUnhideWorksheetColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **startcolumn** | **int**| The begin column index to be operated. |
 **total_columns** | **int**| Number of columns to be operated. |
 **width** | **double**| The new column width. | [optional] [default to 50.0]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostUnhideWorksheetRows**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPostUnhideWorksheetRows($name, $sheet_name, $startrow, $total_rows, $height, $folder)

Unhide worksheet rows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$startrow = 56; // int | The begin row index to be operated.
$total_rows = 56; // int | Number of rows to be operated.
$height = 15.0; // double | The new row height.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsPostUnhideWorksheetRows($name, $sheet_name, $startrow, $total_rows, $height, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostUnhideWorksheetRows: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **startrow** | **int**| The begin row index to be operated. |
 **total_rows** | **int**| Number of rows to be operated. |
 **height** | **double**| The new row height. | [optional] [default to 15.0]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostUpdateWorksheetCellStyle**
> \Aspose\Cells\Cloud\Model\StyleResponse cellsPostUpdateWorksheetCellStyle($name, $sheet_name, $cell_name, $style, $folder)

Update cell's style.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Workbook name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$cell_name = "cell_name_example"; // string | The cell name.
$style = new \Aspose\Cells\Cloud\Model\Style(); // \Aspose\Cells\Cloud\Model\Style | with update style settings.
$folder = "folder_example"; // string | The workbook folder.

try {
    $result = $apiInstance->cellsPostUpdateWorksheetCellStyle($name, $sheet_name, $cell_name, $style, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostUpdateWorksheetCellStyle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Workbook name. |
 **sheet_name** | **string**| Worksheet name. |
 **cell_name** | **string**| The cell name. |
 **style** | [**\Aspose\Cells\Cloud\Model\Style**](../Model/Style.md)| with update style settings. | [optional]
 **folder** | **string**| The workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\StyleResponse**](../Model/StyleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostUpdateWorksheetRangeStyle**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPostUpdateWorksheetRangeStyle($name, $sheet_name, $range, $style, $folder)

Update cell's range style.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Workbook name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$range = "range_example"; // string | The range.
$style = new \Aspose\Cells\Cloud\Model\Style(); // \Aspose\Cells\Cloud\Model\Style | with update style settings.
$folder = "folder_example"; // string | The workbook folder.

try {
    $result = $apiInstance->cellsPostUpdateWorksheetRangeStyle($name, $sheet_name, $range, $style, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostUpdateWorksheetRangeStyle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Workbook name. |
 **sheet_name** | **string**| Worksheet name. |
 **range** | **string**| The range. |
 **style** | [**\Aspose\Cells\Cloud\Model\Style**](../Model/Style.md)| with update style settings. | [optional]
 **folder** | **string**| The workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostUpdateWorksheetRow**
> \Aspose\Cells\Cloud\Model\RowResponse cellsPostUpdateWorksheetRow($name, $sheet_name, $row_index, $height, $folder)

Update worksheet row.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$row_index = 56; // int | The row index.
$height = 0.0; // double | The new row height.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsPostUpdateWorksheetRow($name, $sheet_name, $row_index, $height, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostUpdateWorksheetRow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **row_index** | **int**| The row index. |
 **height** | **double**| The new row height. | [optional] [default to 0.0]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\RowResponse**](../Model/RowResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostWorksheetCellSetValue**
> \Aspose\Cells\Cloud\Model\CellResponse cellsPostWorksheetCellSetValue($name, $sheet_name, $cell_name, $value, $type, $formula, $folder)

Set cell value.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$cell_name = "cell_name_example"; // string | The cell name.
$value = "value_example"; // string | The cell value.
$type = "type_example"; // string | The value type.
$formula = "formula_example"; // string | Formula for cell
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsPostWorksheetCellSetValue($name, $sheet_name, $cell_name, $value, $type, $formula, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostWorksheetCellSetValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **sheet_name** | **string**| The worksheet name. |
 **cell_name** | **string**| The cell name. |
 **value** | **string**| The cell value. | [optional]
 **type** | **string**| The value type. | [optional]
 **formula** | **string**| Formula for cell | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\CellResponse**](../Model/CellResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostWorksheetMerge**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPostWorksheetMerge($name, $sheet_name, $start_row, $start_column, $total_rows, $total_columns, $folder)

Merge cells.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$start_row = 56; // int | The start row.
$start_column = 56; // int | The start column.
$total_rows = 56; // int | The total rows
$total_columns = 56; // int | The total columns.
$folder = "folder_example"; // string | The workbook folder.

try {
    $result = $apiInstance->cellsPostWorksheetMerge($name, $sheet_name, $start_row, $start_column, $total_rows, $total_columns, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostWorksheetMerge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **start_row** | **int**| The start row. |
 **start_column** | **int**| The start column. |
 **total_rows** | **int**| The total rows |
 **total_columns** | **int**| The total columns. |
 **folder** | **string**| The workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPostWorksheetUnmerge**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPostWorksheetUnmerge($name, $sheet_name, $start_row, $start_column, $total_rows, $total_columns, $folder)

Unmerge cells.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$start_row = 56; // int | The start row.
$start_column = 56; // int | The start column.
$total_rows = 56; // int | The total rows
$total_columns = 56; // int | The total columns.
$folder = "folder_example"; // string | The workbook folder.

try {
    $result = $apiInstance->cellsPostWorksheetUnmerge($name, $sheet_name, $start_row, $start_column, $total_rows, $total_columns, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPostWorksheetUnmerge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **start_row** | **int**| The start row. |
 **start_column** | **int**| The start column. |
 **total_rows** | **int**| The total rows |
 **total_columns** | **int**| The total columns. |
 **folder** | **string**| The workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPutInsertWorksheetColumns**
> \Aspose\Cells\Cloud\Model\ColumnsResponse cellsPutInsertWorksheetColumns($name, $sheet_name, $column_index, $columns, $update_reference, $folder)

Insert worksheet columns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$column_index = 56; // int | The column index.
$columns = 56; // int | The columns.
$update_reference = true; // bool | The update reference.
$folder = "folder_example"; // string | The workbook folder.

try {
    $result = $apiInstance->cellsPutInsertWorksheetColumns($name, $sheet_name, $column_index, $columns, $update_reference, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPutInsertWorksheetColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **column_index** | **int**| The column index. |
 **columns** | **int**| The columns. |
 **update_reference** | **bool**| The update reference. | [optional] [default to true]
 **folder** | **string**| The workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\ColumnsResponse**](../Model/ColumnsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPutInsertWorksheetRow**
> \Aspose\Cells\Cloud\Model\RowResponse cellsPutInsertWorksheetRow($name, $sheet_name, $row_index, $folder)

Insert new worksheet row.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$row_index = 56; // int | The new row index.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsPutInsertWorksheetRow($name, $sheet_name, $row_index, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPutInsertWorksheetRow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **row_index** | **int**| The new row index. |
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\RowResponse**](../Model/RowResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPutInsertWorksheetRows**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPutInsertWorksheetRows($name, $sheet_name, $startrow, $total_rows, $update_reference, $folder)

Insert several new worksheet rows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$startrow = 56; // int | The begin row index to be operated.
$total_rows = 1; // int | Number of rows to be operated.
$update_reference = true; // bool | Indicates if update references in other worksheets.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsPutInsertWorksheetRows($name, $sheet_name, $startrow, $total_rows, $update_reference, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsApi->cellsPutInsertWorksheetRows: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **startrow** | **int**| The begin row index to be operated. |
 **total_rows** | **int**| Number of rows to be operated. | [optional] [default to 1]
 **update_reference** | **bool**| Indicates if update references in other worksheets. | [optional] [default to true]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

