# Aspose\Cells\Cloud\CellsWorkbookApi

All URIs are relative to *https://api.aspose.cloud/v1.1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cellsWorkbookDeleteDecryptDocument**](CellsWorkbookApi.md#cellsWorkbookDeleteDecryptDocument) | **DELETE** /cells/{name}/encryption | Decrypt document.
[**cellsWorkbookDeleteDocumentUnprotectFromChanges**](CellsWorkbookApi.md#cellsWorkbookDeleteDocumentUnprotectFromChanges) | **DELETE** /cells/{name}/writeProtection | Unprotect document from changes.
[**cellsWorkbookDeleteUnprotectDocument**](CellsWorkbookApi.md#cellsWorkbookDeleteUnprotectDocument) | **DELETE** /cells/{name}/protection | Unprotect document.
[**cellsWorkbookDeleteWorkbookName**](CellsWorkbookApi.md#cellsWorkbookDeleteWorkbookName) | **DELETE** /cells/{name}/names/{nameName} | Clean workbook&#39;s names.
[**cellsWorkbookDeleteWorkbookNames**](CellsWorkbookApi.md#cellsWorkbookDeleteWorkbookNames) | **DELETE** /cells/{name}/names | Clean workbook&#39;s names.
[**cellsWorkbookGetWorkbook**](CellsWorkbookApi.md#cellsWorkbookGetWorkbook) | **GET** /cells/{name} | Read workbook info or export.
[**cellsWorkbookGetWorkbookDefaultStyle**](CellsWorkbookApi.md#cellsWorkbookGetWorkbookDefaultStyle) | **GET** /cells/{name}/defaultstyle | Read workbook default style info.
[**cellsWorkbookGetWorkbookName**](CellsWorkbookApi.md#cellsWorkbookGetWorkbookName) | **GET** /cells/{name}/names/{nameName} | Read workbook&#39;s name.
[**cellsWorkbookGetWorkbookNameValue**](CellsWorkbookApi.md#cellsWorkbookGetWorkbookNameValue) | **GET** /cells/{name}/names/{nameName}/value | Get workbook&#39;s name value.
[**cellsWorkbookGetWorkbookNames**](CellsWorkbookApi.md#cellsWorkbookGetWorkbookNames) | **GET** /cells/{name}/names | Read workbook&#39;s names.
[**cellsWorkbookGetWorkbookSettings**](CellsWorkbookApi.md#cellsWorkbookGetWorkbookSettings) | **GET** /cells/{name}/settings | Get Workbook Settings DTO
[**cellsWorkbookGetWorkbookTextItems**](CellsWorkbookApi.md#cellsWorkbookGetWorkbookTextItems) | **GET** /cells/{name}/textItems | Read workbook&#39;s text items.
[**cellsWorkbookPostAutofitWorkbookRows**](CellsWorkbookApi.md#cellsWorkbookPostAutofitWorkbookRows) | **POST** /cells/{name}/autofitrows | Autofit workbook rows.
[**cellsWorkbookPostEncryptDocument**](CellsWorkbookApi.md#cellsWorkbookPostEncryptDocument) | **POST** /cells/{name}/encryption | Encript document.
[**cellsWorkbookPostImportData**](CellsWorkbookApi.md#cellsWorkbookPostImportData) | **POST** /cells/{name}/importdata | 
[**cellsWorkbookPostProtectDocument**](CellsWorkbookApi.md#cellsWorkbookPostProtectDocument) | **POST** /cells/{name}/protection | Protect document.
[**cellsWorkbookPostWorkbookCalculateFormula**](CellsWorkbookApi.md#cellsWorkbookPostWorkbookCalculateFormula) | **POST** /cells/{name}/calculateformula | Calculate all formulas in workbook.
[**cellsWorkbookPostWorkbookGetSmartMarkerResult**](CellsWorkbookApi.md#cellsWorkbookPostWorkbookGetSmartMarkerResult) | **POST** /cells/{name}/smartmarker | Smart marker processing result.
[**cellsWorkbookPostWorkbookSettings**](CellsWorkbookApi.md#cellsWorkbookPostWorkbookSettings) | **POST** /cells/{name}/settings | Update Workbook setting
[**cellsWorkbookPostWorkbookSplit**](CellsWorkbookApi.md#cellsWorkbookPostWorkbookSplit) | **POST** /cells/{name}/split | Split workbook.
[**cellsWorkbookPostWorkbooksMerge**](CellsWorkbookApi.md#cellsWorkbookPostWorkbooksMerge) | **POST** /cells/{name}/merge | Merge workbooks.
[**cellsWorkbookPostWorkbooksTextReplace**](CellsWorkbookApi.md#cellsWorkbookPostWorkbooksTextReplace) | **POST** /cells/{name}/replaceText | Replace text.
[**cellsWorkbookPostWorkbooksTextSearch**](CellsWorkbookApi.md#cellsWorkbookPostWorkbooksTextSearch) | **POST** /cells/{name}/findText | Search text.
[**cellsWorkbookPutConvertWorkbook**](CellsWorkbookApi.md#cellsWorkbookPutConvertWorkbook) | **PUT** /cells/convert | Convert workbook from request content to some format.
[**cellsWorkbookPutDocumentProtectFromChanges**](CellsWorkbookApi.md#cellsWorkbookPutDocumentProtectFromChanges) | **PUT** /cells/{name}/writeProtection | Protect document from changes.
[**cellsWorkbookPutWorkbookCreate**](CellsWorkbookApi.md#cellsWorkbookPutWorkbookCreate) | **PUT** /cells/{name} | Create new workbook using deferent methods.


# **cellsWorkbookDeleteDecryptDocument**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorkbookDeleteDecryptDocument($name, $encryption, $folder, $storage)

Decrypt document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$encryption = new \Aspose\Cells\Cloud\Model\WorkbookEncryptionRequest(); // \Aspose\Cells\Cloud\Model\WorkbookEncryptionRequest | Encryption settings, only password can be specified.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorkbookDeleteDecryptDocument($name, $encryption, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookDeleteDecryptDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **encryption** | [**\Aspose\Cells\Cloud\Model\WorkbookEncryptionRequest**](../Model/WorkbookEncryptionRequest.md)| Encryption settings, only password can be specified. | [optional]
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

# **cellsWorkbookDeleteDocumentUnprotectFromChanges**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorkbookDeleteDocumentUnprotectFromChanges($name, $folder, $storage)

Unprotect document from changes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorkbookDeleteDocumentUnprotectFromChanges($name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookDeleteDocumentUnprotectFromChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
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

# **cellsWorkbookDeleteUnprotectDocument**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorkbookDeleteUnprotectDocument($name, $protection, $folder, $storage)

Unprotect document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$protection = new \Aspose\Cells\Cloud\Model\WorkbookProtectionRequest(); // \Aspose\Cells\Cloud\Model\WorkbookProtectionRequest | Protection settings, only password can be specified.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorkbookDeleteUnprotectDocument($name, $protection, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookDeleteUnprotectDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **protection** | [**\Aspose\Cells\Cloud\Model\WorkbookProtectionRequest**](../Model/WorkbookProtectionRequest.md)| Protection settings, only password can be specified. | [optional]
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

# **cellsWorkbookDeleteWorkbookName**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorkbookDeleteWorkbookName($name, $name_name, $folder, $storage)

Clean workbook's names.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$name_name = "name_name_example"; // string | The name.
$folder = "folder_example"; // string | The workbook folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorkbookDeleteWorkbookName($name, $name_name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookDeleteWorkbookName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **name_name** | **string**| The name. |
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

# **cellsWorkbookDeleteWorkbookNames**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorkbookDeleteWorkbookNames($name, $folder, $storage)

Clean workbook's names.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$folder = "folder_example"; // string | The workbook folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorkbookDeleteWorkbookNames($name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookDeleteWorkbookNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
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

# **cellsWorkbookGetWorkbook**
> \SplFileObject cellsWorkbookGetWorkbook($name, $password, $format, $is_auto_fit, $only_save_table, $folder, $storage, $out_path)

Read workbook info or export.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$password = "password_example"; // string | The document password.
$format = "format_example"; // string | The exported file format.
$is_auto_fit = false; // bool | Set document rows to be autofit.
$only_save_table = false; // bool | Only save table data.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | storage name.
$out_path = "out_path_example"; // string | The document output folder.

try {
    $result = $apiInstance->cellsWorkbookGetWorkbook($name, $password, $format, $is_auto_fit, $only_save_table, $folder, $storage, $out_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookGetWorkbook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **password** | **string**| The document password. | [optional]
 **format** | **string**| The exported file format. | [optional]
 **is_auto_fit** | **bool**| Set document rows to be autofit. | [optional] [default to false]
 **only_save_table** | **bool**| Only save table data. | [optional] [default to false]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| storage name. | [optional]
 **out_path** | **string**| The document output folder. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorkbookGetWorkbookDefaultStyle**
> \Aspose\Cells\Cloud\Model\StyleResponse cellsWorkbookGetWorkbookDefaultStyle($name, $folder, $storage)

Read workbook default style info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$folder = "folder_example"; // string | The document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorkbookGetWorkbookDefaultStyle($name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookGetWorkbookDefaultStyle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **folder** | **string**| The document&#39;s folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\StyleResponse**](../Model/StyleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorkbookGetWorkbookName**
> \Aspose\Cells\Cloud\Model\NameResponse cellsWorkbookGetWorkbookName($name, $name_name, $folder, $storage)

Read workbook's name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$name_name = "name_name_example"; // string | The name.
$folder = "folder_example"; // string | The workbook folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorkbookGetWorkbookName($name, $name_name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookGetWorkbookName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **name_name** | **string**| The name. |
 **folder** | **string**| The workbook folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\NameResponse**](../Model/NameResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorkbookGetWorkbookNameValue**
> \Aspose\Cells\Cloud\Model\RangeValueResponse cellsWorkbookGetWorkbookNameValue($name, $name_name, $folder, $storage)

Get workbook's name value.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$name_name = "name_name_example"; // string | The name.
$folder = "folder_example"; // string | The workbook folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorkbookGetWorkbookNameValue($name, $name_name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookGetWorkbookNameValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **name_name** | **string**| The name. |
 **folder** | **string**| The workbook folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\RangeValueResponse**](../Model/RangeValueResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorkbookGetWorkbookNames**
> \Aspose\Cells\Cloud\Model\NamesResponse cellsWorkbookGetWorkbookNames($name, $folder, $storage)

Read workbook's names.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$folder = "folder_example"; // string | The workbook folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorkbookGetWorkbookNames($name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookGetWorkbookNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **folder** | **string**| The workbook folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\NamesResponse**](../Model/NamesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorkbookGetWorkbookSettings**
> \Aspose\Cells\Cloud\Model\WorkbookSettingsResponse cellsWorkbookGetWorkbookSettings($name, $folder, $storage)

Get Workbook Settings DTO

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorkbookGetWorkbookSettings($name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookGetWorkbookSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **folder** | **string**| Document&#39;s folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\WorkbookSettingsResponse**](../Model/WorkbookSettingsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorkbookGetWorkbookTextItems**
> \Aspose\Cells\Cloud\Model\TextItemsResponse cellsWorkbookGetWorkbookTextItems($name, $folder, $storage)

Read workbook's text items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$folder = "folder_example"; // string | The workbook folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorkbookGetWorkbookTextItems($name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookGetWorkbookTextItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **folder** | **string**| The workbook folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\TextItemsResponse**](../Model/TextItemsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorkbookPostAutofitWorkbookRows**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorkbookPostAutofitWorkbookRows($name, $auto_fitter_options, $start_row, $end_row, $only_auto, $folder, $storage)

Autofit workbook rows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$auto_fitter_options = new \Aspose\Cells\Cloud\Model\AutoFitterOptions(); // \Aspose\Cells\Cloud\Model\AutoFitterOptions | Auto Fitter Options.
$start_row = 56; // int | Start row.
$end_row = 56; // int | End row.
$only_auto = false; // bool | Only auto.
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorkbookPostAutofitWorkbookRows($name, $auto_fitter_options, $start_row, $end_row, $only_auto, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookPostAutofitWorkbookRows: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
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

# **cellsWorkbookPostEncryptDocument**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorkbookPostEncryptDocument($name, $encryption, $folder, $storage)

Encript document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$encryption = new \Aspose\Cells\Cloud\Model\WorkbookEncryptionRequest(); // \Aspose\Cells\Cloud\Model\WorkbookEncryptionRequest | Encryption parameters.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorkbookPostEncryptDocument($name, $encryption, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookPostEncryptDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **encryption** | [**\Aspose\Cells\Cloud\Model\WorkbookEncryptionRequest**](../Model/WorkbookEncryptionRequest.md)| Encryption parameters. | [optional]
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

# **cellsWorkbookPostImportData**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorkbookPostImportData($name, $importdata, $folder, $storage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$importdata = new \Aspose\Cells\Cloud\Model\ImportOption(); // \Aspose\Cells\Cloud\Model\ImportOption | 
$folder = "folder_example"; // string | 
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorkbookPostImportData($name, $importdata, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookPostImportData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **importdata** | [**\Aspose\Cells\Cloud\Model\ImportOption**](../Model/ImportOption.md)|  |
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

# **cellsWorkbookPostProtectDocument**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorkbookPostProtectDocument($name, $protection, $folder, $storage)

Protect document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$protection = new \Aspose\Cells\Cloud\Model\WorkbookProtectionRequest(); // \Aspose\Cells\Cloud\Model\WorkbookProtectionRequest | The protection settings.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorkbookPostProtectDocument($name, $protection, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookPostProtectDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **protection** | [**\Aspose\Cells\Cloud\Model\WorkbookProtectionRequest**](../Model/WorkbookProtectionRequest.md)| The protection settings. | [optional]
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

# **cellsWorkbookPostWorkbookCalculateFormula**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorkbookPostWorkbookCalculateFormula($name, $options, $ignore_error, $folder, $storage)

Calculate all formulas in workbook.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$options = new \Aspose\Cells\Cloud\Model\CalculationOptions(); // \Aspose\Cells\Cloud\Model\CalculationOptions | Calculation Options.
$ignore_error = true; // bool | ignore Error.
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorkbookPostWorkbookCalculateFormula($name, $options, $ignore_error, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookPostWorkbookCalculateFormula: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **options** | [**\Aspose\Cells\Cloud\Model\CalculationOptions**](../Model/CalculationOptions.md)| Calculation Options. | [optional]
 **ignore_error** | **bool**| ignore Error. | [optional]
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

# **cellsWorkbookPostWorkbookGetSmartMarkerResult**
> \SplFileObject cellsWorkbookPostWorkbookGetSmartMarkerResult($name, $xml_file, $folder, $storage, $out_path)

Smart marker processing result.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$xml_file = "xml_file_example"; // string | The xml file full path, if empty the data is read from request body.
$folder = "folder_example"; // string | The workbook folder full path.
$storage = "storage_example"; // string | storage name.
$out_path = "out_path_example"; // string | Path to save result

try {
    $result = $apiInstance->cellsWorkbookPostWorkbookGetSmartMarkerResult($name, $xml_file, $folder, $storage, $out_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookPostWorkbookGetSmartMarkerResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **xml_file** | **string**| The xml file full path, if empty the data is read from request body. | [optional]
 **folder** | **string**| The workbook folder full path. | [optional]
 **storage** | **string**| storage name. | [optional]
 **out_path** | **string**| Path to save result | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorkbookPostWorkbookSettings**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorkbookPostWorkbookSettings($name, $settings, $folder, $storage)

Update Workbook setting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$settings = new \Aspose\Cells\Cloud\Model\WorkbookSettings(); // \Aspose\Cells\Cloud\Model\WorkbookSettings | Workbook Setting DTO
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorkbookPostWorkbookSettings($name, $settings, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookPostWorkbookSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **settings** | [**\Aspose\Cells\Cloud\Model\WorkbookSettings**](../Model/WorkbookSettings.md)| Workbook Setting DTO | [optional]
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

# **cellsWorkbookPostWorkbookSplit**
> \Aspose\Cells\Cloud\Model\SplitResultResponse cellsWorkbookPostWorkbookSplit($name, $format, $from, $to, $horizontal_resolution, $vertical_resolution, $folder, $storage)

Split workbook.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The workbook name.
$format = "format_example"; // string | Split format.
$from = 0; // int | Start worksheet index.
$to = 0; // int | End worksheet index.
$horizontal_resolution = 0; // int | Image horizontal resolution.
$vertical_resolution = 0; // int | Image vertical resolution.
$folder = "folder_example"; // string | The workbook folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorkbookPostWorkbookSplit($name, $format, $from, $to, $horizontal_resolution, $vertical_resolution, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookPostWorkbookSplit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The workbook name. |
 **format** | **string**| Split format. | [optional]
 **from** | **int**| Start worksheet index. | [optional] [default to 0]
 **to** | **int**| End worksheet index. | [optional] [default to 0]
 **horizontal_resolution** | **int**| Image horizontal resolution. | [optional] [default to 0]
 **vertical_resolution** | **int**| Image vertical resolution. | [optional] [default to 0]
 **folder** | **string**| The workbook folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SplitResultResponse**](../Model/SplitResultResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorkbookPostWorkbooksMerge**
> \Aspose\Cells\Cloud\Model\WorkbookResponse cellsWorkbookPostWorkbooksMerge($name, $merge_with, $folder, $storage)

Merge workbooks.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Workbook name.
$merge_with = "merge_with_example"; // string | The workbook to merge with.
$folder = "folder_example"; // string | Source workbook folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorkbookPostWorkbooksMerge($name, $merge_with, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookPostWorkbooksMerge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Workbook name. |
 **merge_with** | **string**| The workbook to merge with. |
 **folder** | **string**| Source workbook folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\WorkbookResponse**](../Model/WorkbookResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorkbookPostWorkbooksTextReplace**
> \Aspose\Cells\Cloud\Model\WorkbookReplaceResponse cellsWorkbookPostWorkbooksTextReplace($name, $old_value, $new_value, $folder, $storage)

Replace text.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$old_value = "old_value_example"; // string | The old value.
$new_value = "new_value_example"; // string | The new value.
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorkbookPostWorkbooksTextReplace($name, $old_value, $new_value, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookPostWorkbooksTextReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **old_value** | **string**| The old value. |
 **new_value** | **string**| The new value. |
 **folder** | **string**| Document&#39;s folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\WorkbookReplaceResponse**](../Model/WorkbookReplaceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorkbookPostWorkbooksTextSearch**
> \Aspose\Cells\Cloud\Model\TextItemsResponse cellsWorkbookPostWorkbooksTextSearch($name, $text, $folder, $storage)

Search text.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$text = "text_example"; // string | Text sample.
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorkbookPostWorkbooksTextSearch($name, $text, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookPostWorkbooksTextSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **text** | **string**| Text sample. |
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

# **cellsWorkbookPutConvertWorkbook**
> \SplFileObject cellsWorkbookPutConvertWorkbook($format, $password, $out_path)

Convert workbook from request content to some format.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$format = "format_example"; // string | The format to convert.
$password = "password_example"; // string | The workbook password.
$out_path = "out_path_example"; // string | Path to save result

try {
    $result = $apiInstance->cellsWorkbookPutConvertWorkbook($format, $password, $out_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookPutConvertWorkbook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| The format to convert. | [optional]
 **password** | **string**| The workbook password. | [optional]
 **out_path** | **string**| Path to save result | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorkbookPutDocumentProtectFromChanges**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsWorkbookPutDocumentProtectFromChanges($name, $password, $folder, $storage)

Protect document from changes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$password = new \Aspose\Cells\Cloud\Model\PasswordRequest(); // \Aspose\Cells\Cloud\Model\PasswordRequest | Modification password.
$folder = "folder_example"; // string | Document's folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorkbookPutDocumentProtectFromChanges($name, $password, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookPutDocumentProtectFromChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **password** | [**\Aspose\Cells\Cloud\Model\PasswordRequest**](../Model/PasswordRequest.md)| Modification password. | [optional]
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

# **cellsWorkbookPutWorkbookCreate**
> \Aspose\Cells\Cloud\Model\WorkbookResponse cellsWorkbookPutWorkbookCreate($name, $template_file, $data_file, $folder, $storage)

Create new workbook using deferent methods.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorkbookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The new document name.
$template_file = "template_file_example"; // string | The template file, if the data not provided default workbook is created.
$data_file = "data_file_example"; // string | Smart marker data file, if the data not provided the request content is checked for the data.
$folder = "folder_example"; // string | The new document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsWorkbookPutWorkbookCreate($name, $template_file, $data_file, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorkbookApi->cellsWorkbookPutWorkbookCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The new document name. |
 **template_file** | **string**| The template file, if the data not provided default workbook is created. | [optional]
 **data_file** | **string**| Smart marker data file, if the data not provided the request content is checked for the data. | [optional]
 **folder** | **string**| The new document folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\WorkbookResponse**](../Model/WorkbookResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

