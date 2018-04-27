# Aspose\Cells\Cloud\CellsAutoFilterApi

All URIs are relative to *https://api.aspose.cloud/v1.1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cellsAutoFilterDeleteWorksheetDateFilter**](CellsAutoFilterApi.md#cellsAutoFilterDeleteWorksheetDateFilter) | **DELETE** /cells/{name}/worksheets/{sheetName}/autoFilter/dateFilter | Removes a date filter.
[**cellsAutoFilterDeleteWorksheetFilter**](CellsAutoFilterApi.md#cellsAutoFilterDeleteWorksheetFilter) | **DELETE** /cells/{name}/worksheets/{sheetName}/autoFilter/filter | Delete a filter for a filter column.
[**cellsAutoFilterGetWorksheetAutoFilter**](CellsAutoFilterApi.md#cellsAutoFilterGetWorksheetAutoFilter) | **GET** /cells/{name}/worksheets/{sheetName}/autoFilter | Get Auto filter Description
[**cellsAutoFilterPostWorksheetAutoFilterRefresh**](CellsAutoFilterApi.md#cellsAutoFilterPostWorksheetAutoFilterRefresh) | **POST** /cells/{name}/worksheets/{sheetName}/autoFilter/refresh | 
[**cellsAutoFilterPostWorksheetMatchBlanks**](CellsAutoFilterApi.md#cellsAutoFilterPostWorksheetMatchBlanks) | **POST** /cells/{name}/worksheets/{sheetName}/autoFilter/matchBlanks | Match all blank cell in the list.
[**cellsAutoFilterPostWorksheetMatchNonBlanks**](CellsAutoFilterApi.md#cellsAutoFilterPostWorksheetMatchNonBlanks) | **POST** /cells/{name}/worksheets/{sheetName}/autoFilter/matchNonBlanks | Match all not blank cell in the list.
[**cellsAutoFilterPutWorksheetColorFilter**](CellsAutoFilterApi.md#cellsAutoFilterPutWorksheetColorFilter) | **PUT** /cells/{name}/worksheets/{sheetName}/autoFilter/colorFilter | 
[**cellsAutoFilterPutWorksheetCustomFilter**](CellsAutoFilterApi.md#cellsAutoFilterPutWorksheetCustomFilter) | **PUT** /cells/{name}/worksheets/{sheetName}/autoFilter/custom | Filters a list with a custom criteria.
[**cellsAutoFilterPutWorksheetDateFilter**](CellsAutoFilterApi.md#cellsAutoFilterPutWorksheetDateFilter) | **PUT** /cells/{name}/worksheets/{sheetName}/autoFilter/dateFilter | add date filter in worksheet
[**cellsAutoFilterPutWorksheetDynamicFilter**](CellsAutoFilterApi.md#cellsAutoFilterPutWorksheetDynamicFilter) | **PUT** /cells/{name}/worksheets/{sheetName}/autoFilter/dynamicFilter | 
[**cellsAutoFilterPutWorksheetFilter**](CellsAutoFilterApi.md#cellsAutoFilterPutWorksheetFilter) | **PUT** /cells/{name}/worksheets/{sheetName}/autoFilter/filter | Adds a filter for a filter column.
[**cellsAutoFilterPutWorksheetFilterTop10**](CellsAutoFilterApi.md#cellsAutoFilterPutWorksheetFilterTop10) | **PUT** /cells/{name}/worksheets/{sheetName}/autoFilter/filterTop10 | Filter the top 10 item in the list
[**cellsAutoFilterPutWorksheetIconFilter**](CellsAutoFilterApi.md#cellsAutoFilterPutWorksheetIconFilter) | **PUT** /cells/{name}/worksheets/{sheetName}/autoFilter/iconFilter | Adds an icon filter.


# **cellsAutoFilterDeleteWorksheetDateFilter**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsAutoFilterDeleteWorksheetDateFilter($name, $sheet_name, $field_index, $date_time_grouping_type, $year, $month, $day, $hour, $minute, $second, $folder)

Removes a date filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsAutoFilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$field_index = 56; // int | 
$date_time_grouping_type = "date_time_grouping_type_example"; // string | 
$year = 0; // int | 
$month = 0; // int | 
$day = 0; // int | 
$hour = 0; // int | 
$minute = 0; // int | 
$second = 0; // int | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->cellsAutoFilterDeleteWorksheetDateFilter($name, $sheet_name, $field_index, $date_time_grouping_type, $year, $month, $day, $hour, $minute, $second, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsAutoFilterApi->cellsAutoFilterDeleteWorksheetDateFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **field_index** | **int**|  |
 **date_time_grouping_type** | **string**|  |
 **year** | **int**|  | [optional] [default to 0]
 **month** | **int**|  | [optional] [default to 0]
 **day** | **int**|  | [optional] [default to 0]
 **hour** | **int**|  | [optional] [default to 0]
 **minute** | **int**|  | [optional] [default to 0]
 **second** | **int**|  | [optional] [default to 0]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsAutoFilterDeleteWorksheetFilter**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsAutoFilterDeleteWorksheetFilter($name, $sheet_name, $field_index, $criteria, $folder)

Delete a filter for a filter column.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsAutoFilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$field_index = 56; // int | 
$criteria = "criteria_example"; // string | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->cellsAutoFilterDeleteWorksheetFilter($name, $sheet_name, $field_index, $criteria, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsAutoFilterApi->cellsAutoFilterDeleteWorksheetFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **field_index** | **int**|  |
 **criteria** | **string**|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsAutoFilterGetWorksheetAutoFilter**
> \Aspose\Cells\Cloud\Model\AutoFilterResponse cellsAutoFilterGetWorksheetAutoFilter($name, $sheet_name, $folder)

Get Auto filter Description

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsAutoFilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->cellsAutoFilterGetWorksheetAutoFilter($name, $sheet_name, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsAutoFilterApi->cellsAutoFilterGetWorksheetAutoFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\AutoFilterResponse**](../Model/AutoFilterResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsAutoFilterPostWorksheetAutoFilterRefresh**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsAutoFilterPostWorksheetAutoFilterRefresh($name, $sheet_name, $folder)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsAutoFilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->cellsAutoFilterPostWorksheetAutoFilterRefresh($name, $sheet_name, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsAutoFilterApi->cellsAutoFilterPostWorksheetAutoFilterRefresh: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsAutoFilterPostWorksheetMatchBlanks**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsAutoFilterPostWorksheetMatchBlanks($name, $sheet_name, $field_index, $folder)

Match all blank cell in the list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsAutoFilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$field_index = 56; // int | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->cellsAutoFilterPostWorksheetMatchBlanks($name, $sheet_name, $field_index, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsAutoFilterApi->cellsAutoFilterPostWorksheetMatchBlanks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **field_index** | **int**|  |
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsAutoFilterPostWorksheetMatchNonBlanks**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsAutoFilterPostWorksheetMatchNonBlanks($name, $sheet_name, $field_index, $folder)

Match all not blank cell in the list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsAutoFilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$field_index = 56; // int | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->cellsAutoFilterPostWorksheetMatchNonBlanks($name, $sheet_name, $field_index, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsAutoFilterApi->cellsAutoFilterPostWorksheetMatchNonBlanks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **field_index** | **int**|  |
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsAutoFilterPutWorksheetColorFilter**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsAutoFilterPutWorksheetColorFilter($name, $sheet_name, $range, $field_index, $color_filter, $match_blanks, $refresh, $folder)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsAutoFilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$range = "range_example"; // string | 
$field_index = 56; // int | 
$color_filter = new \Aspose\Cells\Cloud\Model\ColorFilterRequest(); // \Aspose\Cells\Cloud\Model\ColorFilterRequest | 
$match_blanks = true; // bool | 
$refresh = true; // bool | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->cellsAutoFilterPutWorksheetColorFilter($name, $sheet_name, $range, $field_index, $color_filter, $match_blanks, $refresh, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsAutoFilterApi->cellsAutoFilterPutWorksheetColorFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **range** | **string**|  |
 **field_index** | **int**|  |
 **color_filter** | [**\Aspose\Cells\Cloud\Model\ColorFilterRequest**](../Model/ColorFilterRequest.md)|  | [optional]
 **match_blanks** | **bool**|  | [optional]
 **refresh** | **bool**|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsAutoFilterPutWorksheetCustomFilter**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsAutoFilterPutWorksheetCustomFilter($name, $sheet_name, $range, $field_index, $operator_type1, $criteria1, $is_and, $operator_type2, $criteria2, $match_blanks, $refresh, $folder)

Filters a list with a custom criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsAutoFilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$range = "range_example"; // string | 
$field_index = 56; // int | 
$operator_type1 = "operator_type1_example"; // string | 
$criteria1 = "criteria1_example"; // string | 
$is_and = true; // bool | 
$operator_type2 = "operator_type2_example"; // string | 
$criteria2 = "criteria2_example"; // string | 
$match_blanks = true; // bool | 
$refresh = true; // bool | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->cellsAutoFilterPutWorksheetCustomFilter($name, $sheet_name, $range, $field_index, $operator_type1, $criteria1, $is_and, $operator_type2, $criteria2, $match_blanks, $refresh, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsAutoFilterApi->cellsAutoFilterPutWorksheetCustomFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **range** | **string**|  |
 **field_index** | **int**|  |
 **operator_type1** | **string**|  |
 **criteria1** | **string**|  |
 **is_and** | **bool**|  | [optional]
 **operator_type2** | **string**|  | [optional]
 **criteria2** | **string**|  | [optional]
 **match_blanks** | **bool**|  | [optional]
 **refresh** | **bool**|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsAutoFilterPutWorksheetDateFilter**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsAutoFilterPutWorksheetDateFilter($name, $sheet_name, $range, $field_index, $date_time_grouping_type, $year, $month, $day, $hour, $minute, $second, $match_blanks, $refresh, $folder)

add date filter in worksheet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsAutoFilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$range = "range_example"; // string | 
$field_index = 56; // int | 
$date_time_grouping_type = "date_time_grouping_type_example"; // string | 
$year = 0; // int | 
$month = 0; // int | 
$day = 0; // int | 
$hour = 0; // int | 
$minute = 0; // int | 
$second = 0; // int | 
$match_blanks = true; // bool | 
$refresh = true; // bool | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->cellsAutoFilterPutWorksheetDateFilter($name, $sheet_name, $range, $field_index, $date_time_grouping_type, $year, $month, $day, $hour, $minute, $second, $match_blanks, $refresh, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsAutoFilterApi->cellsAutoFilterPutWorksheetDateFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **range** | **string**|  |
 **field_index** | **int**|  |
 **date_time_grouping_type** | **string**|  |
 **year** | **int**|  | [optional] [default to 0]
 **month** | **int**|  | [optional] [default to 0]
 **day** | **int**|  | [optional] [default to 0]
 **hour** | **int**|  | [optional] [default to 0]
 **minute** | **int**|  | [optional] [default to 0]
 **second** | **int**|  | [optional] [default to 0]
 **match_blanks** | **bool**|  | [optional]
 **refresh** | **bool**|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsAutoFilterPutWorksheetDynamicFilter**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsAutoFilterPutWorksheetDynamicFilter($name, $sheet_name, $range, $field_index, $dynamic_filter_type, $match_blanks, $refresh, $folder)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsAutoFilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$range = "range_example"; // string | 
$field_index = 56; // int | 
$dynamic_filter_type = "dynamic_filter_type_example"; // string | 
$match_blanks = true; // bool | 
$refresh = true; // bool | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->cellsAutoFilterPutWorksheetDynamicFilter($name, $sheet_name, $range, $field_index, $dynamic_filter_type, $match_blanks, $refresh, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsAutoFilterApi->cellsAutoFilterPutWorksheetDynamicFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **range** | **string**|  |
 **field_index** | **int**|  |
 **dynamic_filter_type** | **string**|  |
 **match_blanks** | **bool**|  | [optional]
 **refresh** | **bool**|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsAutoFilterPutWorksheetFilter**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsAutoFilterPutWorksheetFilter($name, $sheet_name, $range, $field_index, $criteria, $match_blanks, $refresh, $folder)

Adds a filter for a filter column.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsAutoFilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$range = "range_example"; // string | 
$field_index = 56; // int | 
$criteria = "criteria_example"; // string | 
$match_blanks = true; // bool | 
$refresh = true; // bool | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->cellsAutoFilterPutWorksheetFilter($name, $sheet_name, $range, $field_index, $criteria, $match_blanks, $refresh, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsAutoFilterApi->cellsAutoFilterPutWorksheetFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **range** | **string**|  |
 **field_index** | **int**|  |
 **criteria** | **string**|  |
 **match_blanks** | **bool**|  | [optional]
 **refresh** | **bool**|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsAutoFilterPutWorksheetFilterTop10**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsAutoFilterPutWorksheetFilterTop10($name, $sheet_name, $range, $field_index, $is_top, $is_percent, $item_count, $match_blanks, $refresh, $folder)

Filter the top 10 item in the list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsAutoFilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$range = "range_example"; // string | 
$field_index = 56; // int | 
$is_top = true; // bool | 
$is_percent = true; // bool | 
$item_count = 56; // int | 
$match_blanks = true; // bool | 
$refresh = true; // bool | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->cellsAutoFilterPutWorksheetFilterTop10($name, $sheet_name, $range, $field_index, $is_top, $is_percent, $item_count, $match_blanks, $refresh, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsAutoFilterApi->cellsAutoFilterPutWorksheetFilterTop10: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **range** | **string**|  |
 **field_index** | **int**|  |
 **is_top** | **bool**|  |
 **is_percent** | **bool**|  |
 **item_count** | **int**|  |
 **match_blanks** | **bool**|  | [optional]
 **refresh** | **bool**|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsAutoFilterPutWorksheetIconFilter**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsAutoFilterPutWorksheetIconFilter($name, $sheet_name, $range, $field_index, $icon_set_type, $icon_id, $match_blanks, $refresh, $folder)

Adds an icon filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsAutoFilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$range = "range_example"; // string | 
$field_index = 56; // int | 
$icon_set_type = "icon_set_type_example"; // string | 
$icon_id = 56; // int | 
$match_blanks = true; // bool | 
$refresh = true; // bool | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->cellsAutoFilterPutWorksheetIconFilter($name, $sheet_name, $range, $field_index, $icon_set_type, $icon_id, $match_blanks, $refresh, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsAutoFilterApi->cellsAutoFilterPutWorksheetIconFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **range** | **string**|  |
 **field_index** | **int**|  |
 **icon_set_type** | **string**|  |
 **icon_id** | **int**|  |
 **match_blanks** | **bool**|  | [optional]
 **refresh** | **bool**|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

