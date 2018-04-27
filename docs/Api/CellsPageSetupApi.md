# Aspose\Cells\Cloud\CellsPageSetupApi

All URIs are relative to *https://api.aspose.cloud/v1.1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cellsPageSetupDeleteHeaderFooter**](CellsPageSetupApi.md#cellsPageSetupDeleteHeaderFooter) | **DELETE** /cells/{name}/worksheets/{sheetName}/pagesetup/clearheaderfooter | clear header footer
[**cellsPageSetupGetFooter**](CellsPageSetupApi.md#cellsPageSetupGetFooter) | **GET** /cells/{name}/worksheets/{sheetName}/pagesetup/footer | get page footer information
[**cellsPageSetupGetHeader**](CellsPageSetupApi.md#cellsPageSetupGetHeader) | **GET** /cells/{name}/worksheets/{sheetName}/pagesetup/header | get page header information
[**cellsPageSetupGetPageSetup**](CellsPageSetupApi.md#cellsPageSetupGetPageSetup) | **GET** /cells/{name}/worksheets/{sheetName}/pagesetup | Get Page Setup information.
[**cellsPageSetupPostFooter**](CellsPageSetupApi.md#cellsPageSetupPostFooter) | **POST** /cells/{name}/worksheets/{sheetName}/pagesetup/footer | update  page footer information
[**cellsPageSetupPostHeader**](CellsPageSetupApi.md#cellsPageSetupPostHeader) | **POST** /cells/{name}/worksheets/{sheetName}/pagesetup/header | update  page header information
[**cellsPageSetupPostPageSetup**](CellsPageSetupApi.md#cellsPageSetupPostPageSetup) | **POST** /cells/{name}/worksheets/{sheetName}/pagesetup | Update Page Setup information.


# **cellsPageSetupDeleteHeaderFooter**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPageSetupDeleteHeaderFooter($name, $sheet_name, $folder)

clear header footer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPageSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->cellsPageSetupDeleteHeaderFooter($name, $sheet_name, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPageSetupApi->cellsPageSetupDeleteHeaderFooter: ', $e->getMessage(), PHP_EOL;
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

# **cellsPageSetupGetFooter**
> \Aspose\Cells\Cloud\Model\PageSectionsResponse cellsPageSetupGetFooter($name, $sheet_name, $folder)

get page footer information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPageSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->cellsPageSetupGetFooter($name, $sheet_name, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPageSetupApi->cellsPageSetupGetFooter: ', $e->getMessage(), PHP_EOL;
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

[**\Aspose\Cells\Cloud\Model\PageSectionsResponse**](../Model/PageSectionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPageSetupGetHeader**
> \Aspose\Cells\Cloud\Model\PageSectionsResponse cellsPageSetupGetHeader($name, $sheet_name, $folder)

get page header information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPageSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->cellsPageSetupGetHeader($name, $sheet_name, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPageSetupApi->cellsPageSetupGetHeader: ', $e->getMessage(), PHP_EOL;
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

[**\Aspose\Cells\Cloud\Model\PageSectionsResponse**](../Model/PageSectionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPageSetupGetPageSetup**
> \Aspose\Cells\Cloud\Model\PageSetupResponse cellsPageSetupGetPageSetup($name, $sheet_name, $folder)

Get Page Setup information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPageSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->cellsPageSetupGetPageSetup($name, $sheet_name, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPageSetupApi->cellsPageSetupGetPageSetup: ', $e->getMessage(), PHP_EOL;
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

[**\Aspose\Cells\Cloud\Model\PageSetupResponse**](../Model/PageSetupResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPageSetupPostFooter**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPageSetupPostFooter($name, $sheet_name, $section, $script, $is_first_page, $folder)

update  page footer information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPageSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$section = 56; // int | 
$script = "script_example"; // string | 
$is_first_page = true; // bool | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->cellsPageSetupPostFooter($name, $sheet_name, $section, $script, $is_first_page, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPageSetupApi->cellsPageSetupPostFooter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **section** | **int**|  |
 **script** | **string**|  |
 **is_first_page** | **bool**|  |
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPageSetupPostHeader**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPageSetupPostHeader($name, $sheet_name, $section, $script, $is_first_page, $folder)

update  page header information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPageSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$section = 56; // int | 
$script = "script_example"; // string | 
$is_first_page = true; // bool | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->cellsPageSetupPostHeader($name, $sheet_name, $section, $script, $is_first_page, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPageSetupApi->cellsPageSetupPostHeader: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **section** | **int**|  |
 **script** | **string**|  |
 **is_first_page** | **bool**|  |
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPageSetupPostPageSetup**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsPageSetupPostPageSetup($name, $sheet_name, $page_setup, $folder)

Update Page Setup information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPageSetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$page_setup = new \Aspose\Cells\Cloud\Model\PageSetup(); // \Aspose\Cells\Cloud\Model\PageSetup | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->cellsPageSetupPostPageSetup($name, $sheet_name, $page_setup, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPageSetupApi->cellsPageSetupPostPageSetup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **page_setup** | [**\Aspose\Cells\Cloud\Model\PageSetup**](../Model/PageSetup.md)|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

