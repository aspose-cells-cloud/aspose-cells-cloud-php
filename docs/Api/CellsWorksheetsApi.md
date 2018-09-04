# Aspose\Cells\Cloud\CellsWorksheetsApi

All URIs are relative to *https://api.aspose.cloud/v1.1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cellsWorksheetsDeleteUnprotectWorksheet**](CellsWorksheetsApi.md#cellsWorksheetsDeleteUnprotectWorksheet) | **DELETE** /cells/{name}/worksheets/{sheetName}/protection | Unprotect worksheet.
[**cellsWorksheetsDeleteWorksheet**](CellsWorksheetsApi.md#cellsWorksheetsDeleteWorksheet) | **DELETE** /cells/{name}/worksheets/{sheetName} | Delete worksheet.
[**cellsWorksheetsDeleteWorksheetBackground**](CellsWorksheetsApi.md#cellsWorksheetsDeleteWorksheetBackground) | **DELETE** /cells/{name}/worksheets/{sheetName}/background | Set worksheet background image.
[**cellsWorksheetsDeleteWorksheetComment**](CellsWorksheetsApi.md#cellsWorksheetsDeleteWorksheetComment) | **DELETE** /cells/{name}/worksheets/{sheetName}/comments/{cellName} | Delete worksheet&#39;s cell comment.
[**cellsWorksheetsDeleteWorksheetComments**](CellsWorksheetsApi.md#cellsWorksheetsDeleteWorksheetComments) | **DELETE** /cells/{name}/worksheets/{sheetName}/comments | Delete all comments for worksheet.
[**cellsWorksheetsDeleteWorksheetFreezePanes**](CellsWorksheetsApi.md#cellsWorksheetsDeleteWorksheetFreezePanes) | **DELETE** /cells/{name}/worksheets/{sheetName}/freezepanes | Unfreeze panes
[**cellsWorksheetsGetNamedRanges**](CellsWorksheetsApi.md#cellsWorksheetsGetNamedRanges) | **GET** /cells/{name}/worksheets/ranges | Read worksheets ranges info.
[**cellsWorksheetsGetWorksheet**](CellsWorksheetsApi.md#cellsWorksheetsGetWorksheet) | **GET** /cells/{name}/worksheets/{sheetName} | Read worksheet info or export.
[**cellsWorksheetsGetWorksheetCalculateFormula**](CellsWorksheetsApi.md#cellsWorksheetsGetWorksheetCalculateFormula) | **GET** /cells/{name}/worksheets/{sheetName}/formulaResult | Calculate formula value.
[**cellsWorksheetsGetWorksheetComment**](CellsWorksheetsApi.md#cellsWorksheetsGetWorksheetComment) | **GET** /cells/{name}/worksheets/{sheetName}/comments/{cellName} | Get worksheet comment by cell name.
[**cellsWorksheetsGetWorksheetComments**](CellsWorksheetsApi.md#cellsWorksheetsGetWorksheetComments) | **GET** /cells/{name}/worksheets/{sheetName}/comments | Get worksheet comments.
[**cellsWorksheetsGetWorksheetMergedCell**](CellsWorksheetsApi.md#cellsWorksheetsGetWorksheetMergedCell) | **GET** /cells/{name}/worksheets/{sheetName}/mergedCells/{mergedCellIndex} | Get worksheet merged cell by its index.
[**cellsWorksheetsGetWorksheetMergedCells**](CellsWorksheetsApi.md#cellsWorksheetsGetWorksheetMergedCells) | **GET** /cells/{name}/worksheets/{sheetName}/mergedCells | Get worksheet merged cells.
[**cellsWorksheetsGetWorksheetTextItems**](CellsWorksheetsApi.md#cellsWorksheetsGetWorksheetTextItems) | **GET** /cells/{name}/worksheets/{sheetName}/textItems | Get worksheet text items.
[**cellsWorksheetsGetWorksheets**](CellsWorksheetsApi.md#cellsWorksheetsGetWorksheets) | **GET** /cells/{name}/worksheets | Read worksheets info.
[**cellsWorksheetsPostAutofitWorksheetColumns**](CellsWorksheetsApi.md#cellsWorksheetsPostAutofitWorksheetColumns) | **POST** /cells/{name}/worksheets/{sheetName}/autofitcolumns | 
[**cellsWorksheetsPostAutofitWorksheetRow**](CellsWorksheetsApi.md#cellsWorksheetsPostAutofitWorksheetRow) | **POST** /cells/{name}/worksheets/{sheetName}/autofitrow | 
[**cellsWorksheetsPostAutofitWorksheetRows**](CellsWorksheetsApi.md#cellsWorksheetsPostAutofitWorksheetRows) | **POST** /cells/{name}/worksheets/{sheetName}/autofitrows | Autofit worksheet rows.
[**cellsWorksheetsPostCopyWorksheet**](CellsWorksheetsApi.md#cellsWorksheetsPostCopyWorksheet) | **POST** /cells/{name}/worksheets/{sheetName}/copy | 
[**cellsWorksheetsPostMoveWorksheet**](CellsWorksheetsApi.md#cellsWorksheetsPostMoveWorksheet) | **POST** /cells/{name}/worksheets/{sheetName}/position | Move worksheet.
[**cellsWorksheetsPostRenameWorksheet**](CellsWorksheetsApi.md#cellsWorksheetsPostRenameWorksheet) | **POST** /cells/{name}/worksheets/{sheetName}/rename | Rename worksheet
[**cellsWorksheetsPostUpdateWorksheetProperty**](CellsWorksheetsApi.md#cellsWorksheetsPostUpdateWorksheetProperty) | **POST** /cells/{name}/worksheets/{sheetName} | Update worksheet property
[**cellsWorksheetsPostUpdateWorksheetZoom**](CellsWorksheetsApi.md#cellsWorksheetsPostUpdateWorksheetZoom) | **POST** /cells/{name}/worksheets/{sheetName}/zoom | 
[**cellsWorksheetsPostWorksheetComment**](CellsWorksheetsApi.md#cellsWorksheetsPostWorksheetComment) | **POST** /cells/{name}/worksheets/{sheetName}/comments/{cellName} | Update worksheet&#39;s cell comment.
[**cellsWorksheetsPostWorksheetRangeSort**](CellsWorksheetsApi.md#cellsWorksheetsPostWorksheetRangeSort) | **POST** /cells/{name}/worksheets/{sheetName}/sort | Sort worksheet range.
[**cellsWorksheetsPostWorksheetTextSearch**](CellsWorksheetsApi.md#cellsWorksheetsPostWorksheetTextSearch) | **POST** /cells/{name}/worksheets/{sheetName}/findText | Search text.
[**cellsWorksheetsPostWorsheetTextReplace**](CellsWorksheetsApi.md#cellsWorksheetsPostWorsheetTextReplace) | **POST** /cells/{name}/worksheets/{sheetName}/replaceText | Replace text.
[**cellsWorksheetsPutAddNewWorksheet**](CellsWorksheetsApi.md#cellsWorksheetsPutAddNewWorksheet) | **PUT** /cells/{name}/worksheets/{sheetName} | Add new worksheet.
[**cellsWorksheetsPutChangeVisibilityWorksheet**](CellsWorksheetsApi.md#cellsWorksheetsPutChangeVisibilityWorksheet) | **PUT** /cells/{name}/worksheets/{sheetName}/visible | Change worksheet visibility.
[**cellsWorksheetsPutProtectWorksheet**](CellsWorksheetsApi.md#cellsWorksheetsPutProtectWorksheet) | **PUT** /cells/{name}/worksheets/{sheetName}/protection | Protect worksheet.
[**cellsWorksheetsPutWorksheetBackground**](CellsWorksheetsApi.md#cellsWorksheetsPutWorksheetBackground) | **PUT** /cells/{name}/worksheets/{sheetName}/background | Set worksheet background image.
[**cellsWorksheetsPutWorksheetComment**](CellsWorksheetsApi.md#cellsWorksheetsPutWorksheetComment) | **PUT** /cells/{name}/worksheets/{sheetName}/comments/{cellName} | Add worksheet&#39;s cell comment.
[**cellsWorksheetsPutWorksheetFreezePanes**](CellsWorksheetsApi.md#cellsWorksheetsPutWorksheetFreezePanes) | **PUT** /cells/{name}/worksheets/{sheetName}/freezepanes | Set freeze panes


# **cellsWorksheetsDeleteUnprotectWorksheet**
> \Aspose\Cells\Cloud\Model\WorksheetResponse cellsWorksheetsDeleteUnprotectWorksheet($name, $sheet_name, $protect_parameter, $folder, $storage)

Unprotect worksheet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$protect_parameter = new \Aspose\Cells\Cloud\Model\ProtectSheetParameter(); // \Aspose\Cells\Cloud\Model\ProtectSheetParameter | with protection settings. Only password is used here.
$folder = "folder_example"; // string | Document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsDeleteUnprotectWorksheet($name, $sheet_name, $protect_parameter, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsDeleteUnprotectWorksheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| The worksheet name. |
 **protect_parameter** | [**\Aspose\Cells\Cloud\Model\ProtectSheetParameter**](../Model/ProtectSheetParameter.md)| with protection settings. Only password is used here. | [optional]
 **folder** | **string**| Document folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\WorksheetResponse**](../Model/WorksheetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorksheetsDeleteWorksheet**
> \Aspose\Cells\Cloud\Model\WorksheetsResponse cellsWorksheetsDeleteWorksheet($name, $sheet_name, $folder, $storage)

Delete worksheet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsDeleteWorksheet($name, $sheet_name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsDeleteWorksheet: ', $e->getMessage(), PHP_EOL;
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

[**\Aspose\Cells\Cloud\Model\WorksheetsResponse**](../Model/WorksheetsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorksheetsDeleteWorksheetBackground**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorksheetsDeleteWorksheetBackground($name, $sheet_name, $folder, $storage)

Set worksheet background image.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsDeleteWorksheetBackground($name, $sheet_name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsDeleteWorksheetBackground: ', $e->getMessage(), PHP_EOL;
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

# **cellsWorksheetsDeleteWorksheetComment**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorksheetsDeleteWorksheetComment($name, $sheet_name, $cell_name, $folder, $storage)

Delete worksheet's cell comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$cell_name = "cell_name_example"; // string | The cell name
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsDeleteWorksheetComment($name, $sheet_name, $cell_name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsDeleteWorksheetComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **sheet_name** | **string**| The worksheet name. |
 **cell_name** | **string**| The cell name |
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

# **cellsWorksheetsDeleteWorksheetComments**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorksheetsDeleteWorksheetComments($name, $sheet_name, $folder, $storage)

Delete all comments for worksheet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsDeleteWorksheetComments($name, $sheet_name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsDeleteWorksheetComments: ', $e->getMessage(), PHP_EOL;
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

# **cellsWorksheetsDeleteWorksheetFreezePanes**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorksheetsDeleteWorksheetFreezePanes($name, $sheet_name, $row, $column, $freezed_rows, $freezed_columns, $folder, $storage)

Unfreeze panes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$row = 56; // int | 
$column = 56; // int | 
$freezed_rows = 56; // int | 
$freezed_columns = 56; // int | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsDeleteWorksheetFreezePanes($name, $sheet_name, $row, $column, $freezed_rows, $freezed_columns, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsDeleteWorksheetFreezePanes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **row** | **int**|  |
 **column** | **int**|  |
 **freezed_rows** | **int**|  |
 **freezed_columns** | **int**|  |
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

# **cellsWorksheetsGetNamedRanges**
> \Aspose\Cells\Cloud\Model\RangesResponse cellsWorksheetsGetNamedRanges($name, $folder, $storage)

Read worksheets ranges info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$folder = "folder_example"; // string | Document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsGetNamedRanges($name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsGetNamedRanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **folder** | **string**| Document folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\RangesResponse**](../Model/RangesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorksheetsGetWorksheet**
> \SplFileObject cellsWorksheetsGetWorksheet($name, $sheet_name, $format, $vertical_resolution, $horizontal_resolution, $folder, $storage)

Read worksheet info or export.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$format = "format_example"; // string | The exported file format.
$vertical_resolution = 0; // int | Image vertical resolution.
$horizontal_resolution = 0; // int | Image horizontal resolution.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsGetWorksheet($name, $sheet_name, $format, $vertical_resolution, $horizontal_resolution, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsGetWorksheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **sheet_name** | **string**| The worksheet name. |
 **format** | **string**| The exported file format. | [optional]
 **vertical_resolution** | **int**| Image vertical resolution. | [optional] [default to 0]
 **horizontal_resolution** | **int**| Image horizontal resolution. | [optional] [default to 0]
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

# **cellsWorksheetsGetWorksheetCalculateFormula**
> \Aspose\Cells\Cloud\Model\SingleValueResponse cellsWorksheetsGetWorksheetCalculateFormula($name, $sheet_name, $formula, $folder, $storage)

Calculate formula value.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$formula = "formula_example"; // string | The formula.
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsGetWorksheetCalculateFormula($name, $sheet_name, $formula, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsGetWorksheetCalculateFormula: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| Worksheet name. |
 **formula** | **string**| The formula. |
 **folder** | **string**| Document&#39;s folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SingleValueResponse**](../Model/SingleValueResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorksheetsGetWorksheetComment**
> \Aspose\Cells\Cloud\Model\CommentResponse cellsWorksheetsGetWorksheetComment($name, $sheet_name, $cell_name, $folder, $storage)

Get worksheet comment by cell name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$cell_name = "cell_name_example"; // string | The cell name
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsGetWorksheetComment($name, $sheet_name, $cell_name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsGetWorksheetComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **sheet_name** | **string**| The worksheet name. |
 **cell_name** | **string**| The cell name |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\CommentResponse**](../Model/CommentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorksheetsGetWorksheetComments**
> \Aspose\Cells\Cloud\Model\CommentsResponse cellsWorksheetsGetWorksheetComments($name, $sheet_name, $folder, $storage)

Get worksheet comments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsGetWorksheetComments($name, $sheet_name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsGetWorksheetComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\CommentsResponse**](../Model/CommentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorksheetsGetWorksheetMergedCell**
> \Aspose\Cells\Cloud\Model\MergedCellResponse cellsWorksheetsGetWorksheetMergedCell($name, $sheet_name, $merged_cell_index, $folder, $storage)

Get worksheet merged cell by its index.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$merged_cell_index = 56; // int | Merged cell index.
$folder = "folder_example"; // string | Document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsGetWorksheetMergedCell($name, $sheet_name, $merged_cell_index, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsGetWorksheetMergedCell: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| Worksheet name. |
 **merged_cell_index** | **int**| Merged cell index. |
 **folder** | **string**| Document folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\MergedCellResponse**](../Model/MergedCellResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorksheetsGetWorksheetMergedCells**
> \Aspose\Cells\Cloud\Model\MergedCellsResponse cellsWorksheetsGetWorksheetMergedCells($name, $sheet_name, $folder, $storage)

Get worksheet merged cells.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The workseet name.
$folder = "folder_example"; // string | Document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsGetWorksheetMergedCells($name, $sheet_name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsGetWorksheetMergedCells: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| The workseet name. |
 **folder** | **string**| Document folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\MergedCellsResponse**](../Model/MergedCellsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorksheetsGetWorksheetTextItems**
> \Aspose\Cells\Cloud\Model\TextItemsResponse cellsWorksheetsGetWorksheetTextItems($name, $sheet_name, $folder, $storage)

Get worksheet text items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$folder = "folder_example"; // string | The workbook's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsGetWorksheetTextItems($name, $sheet_name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsGetWorksheetTextItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **folder** | **string**| The workbook&#39;s folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\TextItemsResponse**](../Model/TextItemsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorksheetsGetWorksheets**
> \Aspose\Cells\Cloud\Model\WorksheetsResponse cellsWorksheetsGetWorksheets($name, $folder, $storage)

Read worksheets info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$folder = "folder_example"; // string | Document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsGetWorksheets($name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsGetWorksheets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **folder** | **string**| Document folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\WorksheetsResponse**](../Model/WorksheetsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorksheetsPostAutofitWorksheetColumns**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorksheetsPostAutofitWorksheetColumns($name, $sheet_name, $first_column, $last_column, $auto_fitter_options, $first_row, $last_row, $folder, $storage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$first_column = 56; // int | 
$last_column = 56; // int | 
$auto_fitter_options = new \Aspose\Cells\Cloud\Model\AutoFitterOptions(); // \Aspose\Cells\Cloud\Model\AutoFitterOptions | 
$first_row = 56; // int | 
$last_row = 56; // int | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsPostAutofitWorksheetColumns($name, $sheet_name, $first_column, $last_column, $auto_fitter_options, $first_row, $last_row, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsPostAutofitWorksheetColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **first_column** | **int**|  |
 **last_column** | **int**|  |
 **auto_fitter_options** | [**\Aspose\Cells\Cloud\Model\AutoFitterOptions**](../Model/AutoFitterOptions.md)|  | [optional]
 **first_row** | **int**|  | [optional]
 **last_row** | **int**|  | [optional]
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

# **cellsWorksheetsPostAutofitWorksheetRow**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorksheetsPostAutofitWorksheetRow($name, $sheet_name, $row_index, $first_column, $last_column, $auto_fitter_options, $folder, $storage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$row_index = 56; // int | 
$first_column = 56; // int | 
$last_column = 56; // int | 
$auto_fitter_options = new \Aspose\Cells\Cloud\Model\AutoFitterOptions(); // \Aspose\Cells\Cloud\Model\AutoFitterOptions | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsPostAutofitWorksheetRow($name, $sheet_name, $row_index, $first_column, $last_column, $auto_fitter_options, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsPostAutofitWorksheetRow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **row_index** | **int**|  |
 **first_column** | **int**|  |
 **last_column** | **int**|  |
 **auto_fitter_options** | [**\Aspose\Cells\Cloud\Model\AutoFitterOptions**](../Model/AutoFitterOptions.md)|  | [optional]
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

# **cellsWorksheetsPostAutofitWorksheetRows**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorksheetsPostAutofitWorksheetRows($name, $sheet_name, $auto_fitter_options, $start_row, $end_row, $only_auto, $folder, $storage)

Autofit worksheet rows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$auto_fitter_options = new \Aspose\Cells\Cloud\Model\AutoFitterOptions(); // \Aspose\Cells\Cloud\Model\AutoFitterOptions | Auto Fitter Options.
$start_row = 56; // int | Start row.
$end_row = 56; // int | End row.
$only_auto = false; // bool | Only auto.
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsPostAutofitWorksheetRows($name, $sheet_name, $auto_fitter_options, $start_row, $end_row, $only_auto, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsPostAutofitWorksheetRows: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| The worksheet name. |
 **auto_fitter_options** | [**\Aspose\Cells\Cloud\Model\AutoFitterOptions**](../Model/AutoFitterOptions.md)| Auto Fitter Options. | [optional]
 **start_row** | **int**| Start row. | [optional]
 **end_row** | **int**| End row. | [optional]
 **only_auto** | **bool**| Only auto. | [optional] [default to false]
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

# **cellsWorksheetsPostCopyWorksheet**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorksheetsPostCopyWorksheet($name, $sheet_name, $source_sheet, $options, $source_workbook, $source_folder, $folder, $storage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$source_sheet = "source_sheet_example"; // string | 
$options = new \Aspose\Cells\Cloud\Model\CopyOptions(); // \Aspose\Cells\Cloud\Model\CopyOptions | 
$source_workbook = "source_workbook_example"; // string | 
$source_folder = "source_folder_example"; // string | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsPostCopyWorksheet($name, $sheet_name, $source_sheet, $options, $source_workbook, $source_folder, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsPostCopyWorksheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **source_sheet** | **string**|  |
 **options** | [**\Aspose\Cells\Cloud\Model\CopyOptions**](../Model/CopyOptions.md)|  | [optional]
 **source_workbook** | **string**|  | [optional]
 **source_folder** | **string**|  | [optional]
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

# **cellsWorksheetsPostMoveWorksheet**
> \Aspose\Cells\Cloud\Model\WorksheetsResponse cellsWorksheetsPostMoveWorksheet($name, $sheet_name, $moving, $folder, $storage)

Move worksheet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$moving = new \Aspose\Cells\Cloud\Model\WorksheetMovingRequest(); // \Aspose\Cells\Cloud\Model\WorksheetMovingRequest | with moving parameters.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsPostMoveWorksheet($name, $sheet_name, $moving, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsPostMoveWorksheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| The worksheet name. |
 **moving** | [**\Aspose\Cells\Cloud\Model\WorksheetMovingRequest**](../Model/WorksheetMovingRequest.md)| with moving parameters. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\WorksheetsResponse**](../Model/WorksheetsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorksheetsPostRenameWorksheet**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorksheetsPostRenameWorksheet($name, $sheet_name, $newname, $folder, $storage)

Rename worksheet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$newname = "newname_example"; // string | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsPostRenameWorksheet($name, $sheet_name, $newname, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsPostRenameWorksheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **newname** | **string**|  |
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

# **cellsWorksheetsPostUpdateWorksheetProperty**
> \Aspose\Cells\Cloud\Model\WorksheetResponse cellsWorksheetsPostUpdateWorksheetProperty($name, $sheet_name, $sheet, $folder, $storage)

Update worksheet property

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$sheet = new \Aspose\Cells\Cloud\Model\Worksheet(); // \Aspose\Cells\Cloud\Model\Worksheet | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsPostUpdateWorksheetProperty($name, $sheet_name, $sheet, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsPostUpdateWorksheetProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **sheet** | [**\Aspose\Cells\Cloud\Model\Worksheet**](../Model/Worksheet.md)|  | [optional]
 **folder** | **string**|  | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\WorksheetResponse**](../Model/WorksheetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorksheetsPostUpdateWorksheetZoom**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorksheetsPostUpdateWorksheetZoom($name, $sheet_name, $value, $folder, $storage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$value = 56; // int | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsPostUpdateWorksheetZoom($name, $sheet_name, $value, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsPostUpdateWorksheetZoom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **value** | **int**|  |
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

# **cellsWorksheetsPostWorksheetComment**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorksheetsPostWorksheetComment($name, $sheet_name, $cell_name, $comment, $folder, $storage)

Update worksheet's cell comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$cell_name = "cell_name_example"; // string | The cell name
$comment = new \Aspose\Cells\Cloud\Model\Comment(); // \Aspose\Cells\Cloud\Model\Comment | Comment object
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsPostWorksheetComment($name, $sheet_name, $cell_name, $comment, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsPostWorksheetComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **sheet_name** | **string**| The worksheet name. |
 **cell_name** | **string**| The cell name |
 **comment** | [**\Aspose\Cells\Cloud\Model\Comment**](../Model/Comment.md)| Comment object | [optional]
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

# **cellsWorksheetsPostWorksheetRangeSort**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorksheetsPostWorksheetRangeSort($name, $sheet_name, $cell_area, $data_sorter, $folder, $storage)

Sort worksheet range.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$cell_area = "cell_area_example"; // string | The range to sort.
$data_sorter = new \Aspose\Cells\Cloud\Model\DataSorter(); // \Aspose\Cells\Cloud\Model\DataSorter | with sorting settings.
$folder = "folder_example"; // string | The workbook folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsPostWorksheetRangeSort($name, $sheet_name, $cell_area, $data_sorter, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsPostWorksheetRangeSort: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **cell_area** | **string**| The range to sort. |
 **data_sorter** | [**\Aspose\Cells\Cloud\Model\DataSorter**](../Model/DataSorter.md)| with sorting settings. | [optional]
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

# **cellsWorksheetsPostWorksheetTextSearch**
> \Aspose\Cells\Cloud\Model\TextItemsResponse cellsWorksheetsPostWorksheetTextSearch($name, $sheet_name, $text, $folder, $storage)

Search text.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$text = "text_example"; // string | Text to search.
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsPostWorksheetTextSearch($name, $sheet_name, $text, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsPostWorksheetTextSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| The worksheet name. |
 **text** | **string**| Text to search. |
 **folder** | **string**| Document&#39;s folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\TextItemsResponse**](../Model/TextItemsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorksheetsPostWorsheetTextReplace**
> \Aspose\Cells\Cloud\Model\WorksheetReplaceResponse cellsWorksheetsPostWorsheetTextReplace($name, $sheet_name, $old_value, $new_value, $folder, $storage)

Replace text.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$old_value = "old_value_example"; // string | The old text to replace.
$new_value = "new_value_example"; // string | The new text to replace by.
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsPostWorsheetTextReplace($name, $sheet_name, $old_value, $new_value, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsPostWorsheetTextReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| Worksheet name. |
 **old_value** | **string**| The old text to replace. |
 **new_value** | **string**| The new text to replace by. |
 **folder** | **string**| Document&#39;s folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\WorksheetReplaceResponse**](../Model/WorksheetReplaceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorksheetsPutAddNewWorksheet**
> \Aspose\Cells\Cloud\Model\WorksheetsResponse cellsWorksheetsPutAddNewWorksheet($name, $sheet_name, $position, $sheettype, $folder, $storage)

Add new worksheet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The new sheet name.
$position = 56; // int | The new sheet position.
$sheettype = "sheettype_example"; // string | The new sheet type.
$folder = "folder_example"; // string | Document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsPutAddNewWorksheet($name, $sheet_name, $position, $sheettype, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsPutAddNewWorksheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| The new sheet name. |
 **position** | **int**| The new sheet position. | [optional]
 **sheettype** | **string**| The new sheet type. | [optional]
 **folder** | **string**| Document folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\WorksheetsResponse**](../Model/WorksheetsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorksheetsPutChangeVisibilityWorksheet**
> \Aspose\Cells\Cloud\Model\WorksheetResponse cellsWorksheetsPutChangeVisibilityWorksheet($name, $sheet_name, $is_visible, $folder, $storage)

Change worksheet visibility.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$is_visible = true; // bool | New worksheet visibility value.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsPutChangeVisibilityWorksheet($name, $sheet_name, $is_visible, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsPutChangeVisibilityWorksheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| Worksheet name. |
 **is_visible** | **bool**| New worksheet visibility value. |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\WorksheetResponse**](../Model/WorksheetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorksheetsPutProtectWorksheet**
> \Aspose\Cells\Cloud\Model\WorksheetResponse cellsWorksheetsPutProtectWorksheet($name, $sheet_name, $protect_parameter, $folder, $storage)

Protect worksheet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$protect_parameter = new \Aspose\Cells\Cloud\Model\ProtectSheetParameter(); // \Aspose\Cells\Cloud\Model\ProtectSheetParameter | with protection settings.
$folder = "folder_example"; // string | Document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsPutProtectWorksheet($name, $sheet_name, $protect_parameter, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsPutProtectWorksheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| The worksheet name. |
 **protect_parameter** | [**\Aspose\Cells\Cloud\Model\ProtectSheetParameter**](../Model/ProtectSheetParameter.md)| with protection settings. | [optional]
 **folder** | **string**| Document folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\WorksheetResponse**](../Model/WorksheetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorksheetsPutWorksheetBackground**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorksheetsPutWorksheetBackground($name, $sheet_name, $png, $folder, $storage)

Set worksheet background image.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$png = "B"; // string | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsPutWorksheetBackground($name, $sheet_name, $png, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsPutWorksheetBackground: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **png** | **string**|  |
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

# **cellsWorksheetsPutWorksheetComment**
> \Aspose\Cells\Cloud\Model\CommentResponse cellsWorksheetsPutWorksheetComment($name, $sheet_name, $cell_name, $comment, $folder, $storage)

Add worksheet's cell comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$cell_name = "cell_name_example"; // string | The cell name
$comment = new \Aspose\Cells\Cloud\Model\Comment(); // \Aspose\Cells\Cloud\Model\Comment | Comment object
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsPutWorksheetComment($name, $sheet_name, $cell_name, $comment, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsPutWorksheetComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **sheet_name** | **string**| The worksheet name. |
 **cell_name** | **string**| The cell name |
 **comment** | [**\Aspose\Cells\Cloud\Model\Comment**](../Model/Comment.md)| Comment object | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\CommentResponse**](../Model/CommentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorksheetsPutWorksheetFreezePanes**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorksheetsPutWorksheetFreezePanes($name, $sheet_name, $row, $column, $freezed_rows, $freezed_columns, $folder, $storage)

Set freeze panes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$row = 56; // int | 
$column = 56; // int | 
$freezed_rows = 56; // int | 
$freezed_columns = 56; // int | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorksheetsPutWorksheetFreezePanes($name, $sheet_name, $row, $column, $freezed_rows, $freezed_columns, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetsApi->cellsWorksheetsPutWorksheetFreezePanes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **row** | **int**|  |
 **column** | **int**|  |
 **freezed_rows** | **int**|  |
 **freezed_columns** | **int**|  |
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

