# Aspose\Cells\Cloud\CellsPivotTablesApi

All URIs are relative to *https://api.aspose.cloud/v1.1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cellsPivotTablesDeletePivotTableField**](CellsPivotTablesApi.md#cellsPivotTablesDeletePivotTableField) | **DELETE** /cells/{name}/worksheets/{sheetName}/pivottables/{pivotTableIndex}/PivotField | Delete pivot field into into pivot table
[**cellsPivotTablesDeleteWorksheetPivotTable**](CellsPivotTablesApi.md#cellsPivotTablesDeleteWorksheetPivotTable) | **DELETE** /cells/{name}/worksheets/{sheetName}/pivottables/{pivotTableIndex} | Delete worksheet pivot table by index
[**cellsPivotTablesDeleteWorksheetPivotTableFilter**](CellsPivotTablesApi.md#cellsPivotTablesDeleteWorksheetPivotTableFilter) | **DELETE** /cells/{name}/worksheets/{sheetName}/pivottables/{pivotTableIndex}/PivotFilters/{fieldIndex} | delete  pivot filter for piovt table
[**cellsPivotTablesDeleteWorksheetPivotTableFilters**](CellsPivotTablesApi.md#cellsPivotTablesDeleteWorksheetPivotTableFilters) | **DELETE** /cells/{name}/worksheets/{sheetName}/pivottables/{pivotTableIndex}/PivotFilters | delete all pivot filters for piovt table
[**cellsPivotTablesDeleteWorksheetPivotTables**](CellsPivotTablesApi.md#cellsPivotTablesDeleteWorksheetPivotTables) | **DELETE** /cells/{name}/worksheets/{sheetName}/pivottables | Delete worksheet pivot tables
[**cellsPivotTablesGetPivotTableField**](CellsPivotTablesApi.md#cellsPivotTablesGetPivotTableField) | **GET** /cells/{name}/worksheets/{sheetName}/pivottables/{pivotTableIndex}/PivotField | Get pivot field into into pivot table
[**cellsPivotTablesGetWorksheetPivotTable**](CellsPivotTablesApi.md#cellsPivotTablesGetWorksheetPivotTable) | **GET** /cells/{name}/worksheets/{sheetName}/pivottables/{pivottableIndex} | Get worksheet pivottable info by index.
[**cellsPivotTablesGetWorksheetPivotTableFilter**](CellsPivotTablesApi.md#cellsPivotTablesGetWorksheetPivotTableFilter) | **GET** /cells/{name}/worksheets/{sheetName}/pivottables/{pivotTableIndex}/PivotFilters/{filterIndex} | 
[**cellsPivotTablesGetWorksheetPivotTableFilters**](CellsPivotTablesApi.md#cellsPivotTablesGetWorksheetPivotTableFilters) | **GET** /cells/{name}/worksheets/{sheetName}/pivottables/{pivotTableIndex}/PivotFilters | 
[**cellsPivotTablesGetWorksheetPivotTables**](CellsPivotTablesApi.md#cellsPivotTablesGetWorksheetPivotTables) | **GET** /cells/{name}/worksheets/{sheetName}/pivottables | Get worksheet pivottables info.
[**cellsPivotTablesPostPivotTableCellStyle**](CellsPivotTablesApi.md#cellsPivotTablesPostPivotTableCellStyle) | **POST** /cells/{name}/worksheets/{sheetName}/pivottables/{pivotTableIndex}/Format | Update cell style for pivot table
[**cellsPivotTablesPostPivotTableFieldHideItem**](CellsPivotTablesApi.md#cellsPivotTablesPostPivotTableFieldHideItem) | **POST** /cells/{name}/worksheets/{sheetName}/pivottables/{pivotTableIndex}/PivotField/Hide | 
[**cellsPivotTablesPostPivotTableFieldMoveTo**](CellsPivotTablesApi.md#cellsPivotTablesPostPivotTableFieldMoveTo) | **POST** /cells/{name}/worksheets/{sheetName}/pivottables/{pivotTableIndex}/PivotField/Move | 
[**cellsPivotTablesPostPivotTableStyle**](CellsPivotTablesApi.md#cellsPivotTablesPostPivotTableStyle) | **POST** /cells/{name}/worksheets/{sheetName}/pivottables/{pivotTableIndex}/FormatAll | Update style for pivot table
[**cellsPivotTablesPostWorksheetPivotTableCalculate**](CellsPivotTablesApi.md#cellsPivotTablesPostWorksheetPivotTableCalculate) | **POST** /cells/{name}/worksheets/{sheetName}/pivottables/{pivotTableIndex}/Calculate | Calculates pivottable&#39;s data to cells.
[**cellsPivotTablesPostWorksheetPivotTableMove**](CellsPivotTablesApi.md#cellsPivotTablesPostWorksheetPivotTableMove) | **POST** /cells/{name}/worksheets/{sheetName}/pivottables/{pivotTableIndex}/Move | 
[**cellsPivotTablesPutPivotTableField**](CellsPivotTablesApi.md#cellsPivotTablesPutPivotTableField) | **PUT** /cells/{name}/worksheets/{sheetName}/pivottables/{pivotTableIndex}/PivotField | Add pivot field into into pivot table
[**cellsPivotTablesPutWorksheetPivotTable**](CellsPivotTablesApi.md#cellsPivotTablesPutWorksheetPivotTable) | **PUT** /cells/{name}/worksheets/{sheetName}/pivottables | Add a pivot table into worksheet.
[**cellsPivotTablesPutWorksheetPivotTableFilter**](CellsPivotTablesApi.md#cellsPivotTablesPutWorksheetPivotTableFilter) | **PUT** /cells/{name}/worksheets/{sheetName}/pivottables/{pivotTableIndex}/PivotFilters | Add pivot filter for piovt table index


# **cellsPivotTablesDeletePivotTableField**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPivotTablesDeletePivotTableField($name, $sheet_name, $pivot_table_index, $pivot_field_type, $request, $folder, $storage)

Delete pivot field into into pivot table

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPivotTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$pivot_table_index = 56; // int | Pivot table index
$pivot_field_type = "pivot_field_type_example"; // string | The fields area type.
$request = new \Aspose\Cells\Cloud\Model\PivotTableFieldRequest(); // \Aspose\Cells\Cloud\Model\PivotTableFieldRequest | Dto that conrains field indexes
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPivotTablesDeletePivotTableField($name, $sheet_name, $pivot_table_index, $pivot_field_type, $request, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPivotTablesApi->cellsPivotTablesDeletePivotTableField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| The worksheet name. |
 **pivot_table_index** | **int**| Pivot table index |
 **pivot_field_type** | **string**| The fields area type. |
 **request** | [**\Aspose\Cells\Cloud\Model\PivotTableFieldRequest**](../Model/PivotTableFieldRequest.md)| Dto that conrains field indexes | [optional]
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

# **cellsPivotTablesDeleteWorksheetPivotTable**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPivotTablesDeleteWorksheetPivotTable($name, $sheet_name, $pivot_table_index, $folder, $storage)

Delete worksheet pivot table by index

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPivotTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$pivot_table_index = 56; // int | Pivot table index
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPivotTablesDeleteWorksheetPivotTable($name, $sheet_name, $pivot_table_index, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPivotTablesApi->cellsPivotTablesDeleteWorksheetPivotTable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| The worksheet name. |
 **pivot_table_index** | **int**| Pivot table index |
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

# **cellsPivotTablesDeleteWorksheetPivotTableFilter**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPivotTablesDeleteWorksheetPivotTableFilter($name, $sheet_name, $pivot_table_index, $field_index, $need_re_calculate, $folder, $storage)

delete  pivot filter for piovt table

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPivotTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$pivot_table_index = 56; // int | 
$field_index = 56; // int | 
$need_re_calculate = false; // bool | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPivotTablesDeleteWorksheetPivotTableFilter($name, $sheet_name, $pivot_table_index, $field_index, $need_re_calculate, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPivotTablesApi->cellsPivotTablesDeleteWorksheetPivotTableFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **pivot_table_index** | **int**|  |
 **field_index** | **int**|  |
 **need_re_calculate** | **bool**|  | [optional] [default to false]
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

# **cellsPivotTablesDeleteWorksheetPivotTableFilters**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPivotTablesDeleteWorksheetPivotTableFilters($name, $sheet_name, $pivot_table_index, $need_re_calculate, $folder, $storage)

delete all pivot filters for piovt table

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPivotTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$pivot_table_index = 56; // int | 
$need_re_calculate = false; // bool | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPivotTablesDeleteWorksheetPivotTableFilters($name, $sheet_name, $pivot_table_index, $need_re_calculate, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPivotTablesApi->cellsPivotTablesDeleteWorksheetPivotTableFilters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **pivot_table_index** | **int**|  |
 **need_re_calculate** | **bool**|  | [optional] [default to false]
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

# **cellsPivotTablesDeleteWorksheetPivotTables**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPivotTablesDeleteWorksheetPivotTables($name, $sheet_name, $folder, $storage)

Delete worksheet pivot tables

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPivotTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPivotTablesDeleteWorksheetPivotTables($name, $sheet_name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPivotTablesApi->cellsPivotTablesDeleteWorksheetPivotTables: ', $e->getMessage(), PHP_EOL;
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

# **cellsPivotTablesGetPivotTableField**
> \Aspose\Cells\Cloud\Model\PivotFieldResponse cellsPivotTablesGetPivotTableField($name, $sheet_name, $pivot_table_index, $pivot_field_index, $pivot_field_type, $folder, $storage)

Get pivot field into into pivot table

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPivotTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$pivot_table_index = 56; // int | Pivot table index
$pivot_field_index = 56; // int | The field index in the base fields.
$pivot_field_type = "pivot_field_type_example"; // string | The fields area type.
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPivotTablesGetPivotTableField($name, $sheet_name, $pivot_table_index, $pivot_field_index, $pivot_field_type, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPivotTablesApi->cellsPivotTablesGetPivotTableField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| The worksheet name. |
 **pivot_table_index** | **int**| Pivot table index |
 **pivot_field_index** | **int**| The field index in the base fields. |
 **pivot_field_type** | **string**| The fields area type. |
 **folder** | **string**| Document&#39;s folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\PivotFieldResponse**](../Model/PivotFieldResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPivotTablesGetWorksheetPivotTable**
> \Aspose\Cells\Cloud\Model\PivotTableResponse cellsPivotTablesGetWorksheetPivotTable($name, $sheet_name, $pivottable_index, $folder, $storage)

Get worksheet pivottable info by index.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPivotTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$pivottable_index = 56; // int | 
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPivotTablesGetWorksheetPivotTable($name, $sheet_name, $pivottable_index, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPivotTablesApi->cellsPivotTablesGetWorksheetPivotTable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| The worksheet name. |
 **pivottable_index** | **int**|  |
 **folder** | **string**| Document&#39;s folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\PivotTableResponse**](../Model/PivotTableResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPivotTablesGetWorksheetPivotTableFilter**
> \Aspose\Cells\Cloud\Model\PivotFilterResponse cellsPivotTablesGetWorksheetPivotTableFilter($name, $sheet_name, $pivot_table_index, $filter_index, $folder, $storage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPivotTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$pivot_table_index = 56; // int | 
$filter_index = 56; // int | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPivotTablesGetWorksheetPivotTableFilter($name, $sheet_name, $pivot_table_index, $filter_index, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPivotTablesApi->cellsPivotTablesGetWorksheetPivotTableFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **pivot_table_index** | **int**|  |
 **filter_index** | **int**|  |
 **folder** | **string**|  | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\PivotFilterResponse**](../Model/PivotFilterResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPivotTablesGetWorksheetPivotTableFilters**
> \Aspose\Cells\Cloud\Model\PivotFiltersResponse cellsPivotTablesGetWorksheetPivotTableFilters($name, $sheet_name, $pivot_table_index, $folder, $storage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPivotTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$pivot_table_index = 56; // int | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPivotTablesGetWorksheetPivotTableFilters($name, $sheet_name, $pivot_table_index, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPivotTablesApi->cellsPivotTablesGetWorksheetPivotTableFilters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **pivot_table_index** | **int**|  |
 **folder** | **string**|  | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\PivotFiltersResponse**](../Model/PivotFiltersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPivotTablesGetWorksheetPivotTables**
> \Aspose\Cells\Cloud\Model\PivotTablesResponse cellsPivotTablesGetWorksheetPivotTables($name, $sheet_name, $folder, $storage)

Get worksheet pivottables info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPivotTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPivotTablesGetWorksheetPivotTables($name, $sheet_name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPivotTablesApi->cellsPivotTablesGetWorksheetPivotTables: ', $e->getMessage(), PHP_EOL;
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

[**\Aspose\Cells\Cloud\Model\PivotTablesResponse**](../Model/PivotTablesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPivotTablesPostPivotTableCellStyle**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPivotTablesPostPivotTableCellStyle($name, $sheet_name, $pivot_table_index, $column, $row, $style, $need_re_calculate, $folder, $storage)

Update cell style for pivot table

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPivotTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$pivot_table_index = 56; // int | Pivot table index
$column = 56; // int | 
$row = 56; // int | 
$style = new \Aspose\Cells\Cloud\Model\Style(); // \Aspose\Cells\Cloud\Model\Style | Style dto in request body.
$need_re_calculate = false; // bool | 
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPivotTablesPostPivotTableCellStyle($name, $sheet_name, $pivot_table_index, $column, $row, $style, $need_re_calculate, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPivotTablesApi->cellsPivotTablesPostPivotTableCellStyle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| The worksheet name. |
 **pivot_table_index** | **int**| Pivot table index |
 **column** | **int**|  |
 **row** | **int**|  |
 **style** | [**\Aspose\Cells\Cloud\Model\Style**](../Model/Style.md)| Style dto in request body. | [optional]
 **need_re_calculate** | **bool**|  | [optional] [default to false]
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

# **cellsPivotTablesPostPivotTableFieldHideItem**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPivotTablesPostPivotTableFieldHideItem($name, $sheet_name, $pivot_table_index, $pivot_field_type, $field_index, $item_index, $is_hide, $need_re_calculate, $folder, $storage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPivotTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$pivot_table_index = 56; // int | 
$pivot_field_type = "pivot_field_type_example"; // string | 
$field_index = 56; // int | 
$item_index = 56; // int | 
$is_hide = true; // bool | 
$need_re_calculate = false; // bool | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPivotTablesPostPivotTableFieldHideItem($name, $sheet_name, $pivot_table_index, $pivot_field_type, $field_index, $item_index, $is_hide, $need_re_calculate, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPivotTablesApi->cellsPivotTablesPostPivotTableFieldHideItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **pivot_table_index** | **int**|  |
 **pivot_field_type** | **string**|  |
 **field_index** | **int**|  |
 **item_index** | **int**|  |
 **is_hide** | **bool**|  |
 **need_re_calculate** | **bool**|  | [optional] [default to false]
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

# **cellsPivotTablesPostPivotTableFieldMoveTo**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPivotTablesPostPivotTableFieldMoveTo($name, $sheet_name, $pivot_table_index, $field_index, $from, $to, $folder, $storage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPivotTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$pivot_table_index = 56; // int | 
$field_index = 56; // int | 
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPivotTablesPostPivotTableFieldMoveTo($name, $sheet_name, $pivot_table_index, $field_index, $from, $to, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPivotTablesApi->cellsPivotTablesPostPivotTableFieldMoveTo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **pivot_table_index** | **int**|  |
 **field_index** | **int**|  |
 **from** | **string**|  |
 **to** | **string**|  |
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

# **cellsPivotTablesPostPivotTableStyle**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPivotTablesPostPivotTableStyle($name, $sheet_name, $pivot_table_index, $style, $need_re_calculate, $folder, $storage)

Update style for pivot table

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPivotTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$pivot_table_index = 56; // int | Pivot table index
$style = new \Aspose\Cells\Cloud\Model\Style(); // \Aspose\Cells\Cloud\Model\Style | Style dto in request body.
$need_re_calculate = false; // bool | 
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPivotTablesPostPivotTableStyle($name, $sheet_name, $pivot_table_index, $style, $need_re_calculate, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPivotTablesApi->cellsPivotTablesPostPivotTableStyle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| The worksheet name. |
 **pivot_table_index** | **int**| Pivot table index |
 **style** | [**\Aspose\Cells\Cloud\Model\Style**](../Model/Style.md)| Style dto in request body. | [optional]
 **need_re_calculate** | **bool**|  | [optional] [default to false]
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

# **cellsPivotTablesPostWorksheetPivotTableCalculate**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPivotTablesPostWorksheetPivotTableCalculate($name, $sheet_name, $pivot_table_index, $folder, $storage)

Calculates pivottable's data to cells.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPivotTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$pivot_table_index = 56; // int | Pivot table index
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPivotTablesPostWorksheetPivotTableCalculate($name, $sheet_name, $pivot_table_index, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPivotTablesApi->cellsPivotTablesPostWorksheetPivotTableCalculate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| The worksheet name. |
 **pivot_table_index** | **int**| Pivot table index |
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

# **cellsPivotTablesPostWorksheetPivotTableMove**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPivotTablesPostWorksheetPivotTableMove($name, $sheet_name, $pivot_table_index, $row, $column, $dest_cell_name, $folder, $storage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPivotTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$pivot_table_index = 56; // int | 
$row = 56; // int | 
$column = 56; // int | 
$dest_cell_name = "dest_cell_name_example"; // string | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPivotTablesPostWorksheetPivotTableMove($name, $sheet_name, $pivot_table_index, $row, $column, $dest_cell_name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPivotTablesApi->cellsPivotTablesPostWorksheetPivotTableMove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **pivot_table_index** | **int**|  |
 **row** | **int**|  | [optional]
 **column** | **int**|  | [optional]
 **dest_cell_name** | **string**|  | [optional]
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

# **cellsPivotTablesPutPivotTableField**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPivotTablesPutPivotTableField($name, $sheet_name, $pivot_table_index, $pivot_field_type, $request, $need_re_calculate, $folder, $storage)

Add pivot field into into pivot table

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPivotTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$pivot_table_index = 56; // int | Pivot table index
$pivot_field_type = "pivot_field_type_example"; // string | The fields area type.
$request = new \Aspose\Cells\Cloud\Model\PivotTableFieldRequest(); // \Aspose\Cells\Cloud\Model\PivotTableFieldRequest | Dto that conrains field indexes
$need_re_calculate = false; // bool | 
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPivotTablesPutPivotTableField($name, $sheet_name, $pivot_table_index, $pivot_field_type, $request, $need_re_calculate, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPivotTablesApi->cellsPivotTablesPutPivotTableField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| The worksheet name. |
 **pivot_table_index** | **int**| Pivot table index |
 **pivot_field_type** | **string**| The fields area type. |
 **request** | [**\Aspose\Cells\Cloud\Model\PivotTableFieldRequest**](../Model/PivotTableFieldRequest.md)| Dto that conrains field indexes | [optional]
 **need_re_calculate** | **bool**|  | [optional] [default to false]
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

# **cellsPivotTablesPutWorksheetPivotTable**
> \Aspose\Cells\Cloud\Model\PivotTableResponse cellsPivotTablesPutWorksheetPivotTable($name, $sheet_name, $request, $folder, $storage, $source_data, $dest_cell_name, $table_name, $use_same_source)

Add a pivot table into worksheet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPivotTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$request = new \Aspose\Cells\Cloud\Model\CreatePivotTableRequest(); // \Aspose\Cells\Cloud\Model\CreatePivotTableRequest | CreatePivotTableRequest dto in request body.
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.
$source_data = "source_data_example"; // string | The data for the new PivotTable cache.
$dest_cell_name = "dest_cell_name_example"; // string | The cell in the upper-left corner of the PivotTable report's destination range.
$table_name = "table_name_example"; // string | The name of the new PivotTable report.
$use_same_source = true; // bool | Indicates whether using same data source when another existing pivot table has used this data source. If the property is true, it will save memory.

try {
    $result = $apiInstance->cellsPivotTablesPutWorksheetPivotTable($name, $sheet_name, $request, $folder, $storage, $source_data, $dest_cell_name, $table_name, $use_same_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPivotTablesApi->cellsPivotTablesPutWorksheetPivotTable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| The worksheet name. |
 **request** | [**\Aspose\Cells\Cloud\Model\CreatePivotTableRequest**](../Model/CreatePivotTableRequest.md)| CreatePivotTableRequest dto in request body. | [optional]
 **folder** | **string**| Document&#39;s folder. | [optional]
 **storage** | **string**| storage name. | [optional]
 **source_data** | **string**| The data for the new PivotTable cache. | [optional]
 **dest_cell_name** | **string**| The cell in the upper-left corner of the PivotTable report&#39;s destination range. | [optional]
 **table_name** | **string**| The name of the new PivotTable report. | [optional]
 **use_same_source** | **bool**| Indicates whether using same data source when another existing pivot table has used this data source. If the property is true, it will save memory. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\PivotTableResponse**](../Model/PivotTableResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPivotTablesPutWorksheetPivotTableFilter**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPivotTablesPutWorksheetPivotTableFilter($name, $sheet_name, $pivot_table_index, $filter, $need_re_calculate, $folder, $storage)

Add pivot filter for piovt table index

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPivotTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$pivot_table_index = 56; // int | 
$filter = new \Aspose\Cells\Cloud\Model\PivotFilter(); // \Aspose\Cells\Cloud\Model\PivotFilter | 
$need_re_calculate = false; // bool | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsPivotTablesPutWorksheetPivotTableFilter($name, $sheet_name, $pivot_table_index, $filter, $need_re_calculate, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPivotTablesApi->cellsPivotTablesPutWorksheetPivotTableFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **pivot_table_index** | **int**|  |
 **filter** | [**\Aspose\Cells\Cloud\Model\PivotFilter**](../Model/PivotFilter.md)|  | [optional]
 **need_re_calculate** | **bool**|  | [optional] [default to false]
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

