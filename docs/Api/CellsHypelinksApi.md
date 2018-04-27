# Aspose\Cells\Cloud\CellsHypelinksApi

All URIs are relative to *https://api.aspose.cloud/v1.1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cellsHypelinksDeleteWorksheetHyperlink**](CellsHypelinksApi.md#cellsHypelinksDeleteWorksheetHyperlink) | **DELETE** /cells/{name}/worksheets/{sheetName}/hyperlinks/{hyperlinkIndex} | Delete worksheet hyperlink by index.
[**cellsHypelinksDeleteWorksheetHyperlinks**](CellsHypelinksApi.md#cellsHypelinksDeleteWorksheetHyperlinks) | **DELETE** /cells/{name}/worksheets/{sheetName}/hyperlinks | Delete all hyperlinks in worksheet.
[**cellsHypelinksGetWorksheetHyperlink**](CellsHypelinksApi.md#cellsHypelinksGetWorksheetHyperlink) | **GET** /cells/{name}/worksheets/{sheetName}/hyperlinks/{hyperlinkIndex} | Get worksheet hyperlink by index.
[**cellsHypelinksGetWorksheetHyperlinks**](CellsHypelinksApi.md#cellsHypelinksGetWorksheetHyperlinks) | **GET** /cells/{name}/worksheets/{sheetName}/hyperlinks | Get worksheet hyperlinks.
[**cellsHypelinksPostWorksheetHyperlink**](CellsHypelinksApi.md#cellsHypelinksPostWorksheetHyperlink) | **POST** /cells/{name}/worksheets/{sheetName}/hyperlinks/{hyperlinkIndex} | Update worksheet hyperlink by index.
[**cellsHypelinksPutWorksheetHyperlink**](CellsHypelinksApi.md#cellsHypelinksPutWorksheetHyperlink) | **PUT** /cells/{name}/worksheets/{sheetName}/hyperlinks | Add worksheet hyperlink.


# **cellsHypelinksDeleteWorksheetHyperlink**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsHypelinksDeleteWorksheetHyperlink($name, $sheet_name, $hyperlink_index, $folder)

Delete worksheet hyperlink by index.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsHypelinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$hyperlink_index = 56; // int | The hyperlink's index.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsHypelinksDeleteWorksheetHyperlink($name, $sheet_name, $hyperlink_index, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsHypelinksApi->cellsHypelinksDeleteWorksheetHyperlink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| Worksheet name. |
 **hyperlink_index** | **int**| The hyperlink&#39;s index. |
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsHypelinksDeleteWorksheetHyperlinks**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsHypelinksDeleteWorksheetHyperlinks($name, $sheet_name, $folder)

Delete all hyperlinks in worksheet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsHypelinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsHypelinksDeleteWorksheetHyperlinks($name, $sheet_name, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsHypelinksApi->cellsHypelinksDeleteWorksheetHyperlinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| Worksheet name. |
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsHypelinksGetWorksheetHyperlink**
> \Aspose\Cells\Cloud\Model\HyperlinkResponse cellsHypelinksGetWorksheetHyperlink($name, $sheet_name, $hyperlink_index, $folder)

Get worksheet hyperlink by index.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsHypelinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$hyperlink_index = 56; // int | The hyperlink's index.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsHypelinksGetWorksheetHyperlink($name, $sheet_name, $hyperlink_index, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsHypelinksApi->cellsHypelinksGetWorksheetHyperlink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| Worksheet name. |
 **hyperlink_index** | **int**| The hyperlink&#39;s index. |
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\HyperlinkResponse**](../Model/HyperlinkResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsHypelinksGetWorksheetHyperlinks**
> \Aspose\Cells\Cloud\Model\HyperlinksResponse cellsHypelinksGetWorksheetHyperlinks($name, $sheet_name, $folder)

Get worksheet hyperlinks.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsHypelinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$folder = "folder_example"; // string | Document's folder.

try {
    $result = $apiInstance->cellsHypelinksGetWorksheetHyperlinks($name, $sheet_name, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsHypelinksApi->cellsHypelinksGetWorksheetHyperlinks: ', $e->getMessage(), PHP_EOL;
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

[**\Aspose\Cells\Cloud\Model\HyperlinksResponse**](../Model/HyperlinksResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsHypelinksPostWorksheetHyperlink**
> \Aspose\Cells\Cloud\Model\HyperlinkResponse cellsHypelinksPostWorksheetHyperlink($name, $sheet_name, $hyperlink_index, $hyperlink, $folder)

Update worksheet hyperlink by index.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsHypelinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$hyperlink_index = 56; // int | The hyperlink's index.
$hyperlink = new \Aspose\Cells\Cloud\Model\Hyperlink(); // \Aspose\Cells\Cloud\Model\Hyperlink | Hyperlink object
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsHypelinksPostWorksheetHyperlink($name, $sheet_name, $hyperlink_index, $hyperlink, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsHypelinksApi->cellsHypelinksPostWorksheetHyperlink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| Worksheet name. |
 **hyperlink_index** | **int**| The hyperlink&#39;s index. |
 **hyperlink** | [**\Aspose\Cells\Cloud\Model\Hyperlink**](../Model/Hyperlink.md)| Hyperlink object | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\HyperlinkResponse**](../Model/HyperlinkResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsHypelinksPutWorksheetHyperlink**
> \Aspose\Cells\Cloud\Model\HyperlinkResponse cellsHypelinksPutWorksheetHyperlink($name, $sheet_name, $first_row, $first_column, $total_rows, $total_columns, $address, $folder)

Add worksheet hyperlink.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsHypelinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$first_row = 56; // int | 
$first_column = 56; // int | 
$total_rows = 56; // int | 
$total_columns = 56; // int | 
$address = "address_example"; // string | 
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsHypelinksPutWorksheetHyperlink($name, $sheet_name, $first_row, $first_column, $total_rows, $total_columns, $address, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsHypelinksApi->cellsHypelinksPutWorksheetHyperlink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| Worksheet name. |
 **first_row** | **int**|  |
 **first_column** | **int**|  |
 **total_rows** | **int**|  |
 **total_columns** | **int**|  |
 **address** | **string**|  |
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\HyperlinkResponse**](../Model/HyperlinkResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

