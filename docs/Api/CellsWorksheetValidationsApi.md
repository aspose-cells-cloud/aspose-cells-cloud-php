# Aspose\Cells\Cloud\CellsWorksheetValidationsApi

All URIs are relative to *https://api.aspose.cloud/v1.1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cellsWorksheetValidationsDeleteWorksheetValidation**](CellsWorksheetValidationsApi.md#cellsWorksheetValidationsDeleteWorksheetValidation) | **DELETE** /cells/{name}/worksheets/{sheetName}/validations/{validationIndex} | Delete worksheet validation by index.
[**cellsWorksheetValidationsGetWorksheetValidation**](CellsWorksheetValidationsApi.md#cellsWorksheetValidationsGetWorksheetValidation) | **GET** /cells/{name}/worksheets/{sheetName}/validations/{validationIndex} | Get worksheet validation by index.
[**cellsWorksheetValidationsGetWorksheetValidations**](CellsWorksheetValidationsApi.md#cellsWorksheetValidationsGetWorksheetValidations) | **GET** /cells/{name}/worksheets/{sheetName}/validations | Get worksheet validations.
[**cellsWorksheetValidationsPostWorksheetValidation**](CellsWorksheetValidationsApi.md#cellsWorksheetValidationsPostWorksheetValidation) | **POST** /cells/{name}/worksheets/{sheetName}/validations/{validationIndex} | Update worksheet validation by index.
[**cellsWorksheetValidationsPutWorksheetValidation**](CellsWorksheetValidationsApi.md#cellsWorksheetValidationsPutWorksheetValidation) | **PUT** /cells/{name}/worksheets/{sheetName}/validations | Add worksheet validation at index.


# **cellsWorksheetValidationsDeleteWorksheetValidation**
> \Aspose\Cells\Cloud\Model\ValidationResponse cellsWorksheetValidationsDeleteWorksheetValidation($name, $sheet_name, $validation_index, $folder)

Delete worksheet validation by index.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetValidationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$validation_index = 56; // int | The validation index.
$folder = "folder_example"; // string | Document's folder.

try {
    $result = $apiInstance->cellsWorksheetValidationsDeleteWorksheetValidation($name, $sheet_name, $validation_index, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetValidationsApi->cellsWorksheetValidationsDeleteWorksheetValidation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| Worksheet name. |
 **validation_index** | **int**| The validation index. |
 **folder** | **string**| Document&#39;s folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\ValidationResponse**](../Model/ValidationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorksheetValidationsGetWorksheetValidation**
> \Aspose\Cells\Cloud\Model\ValidationResponse cellsWorksheetValidationsGetWorksheetValidation($name, $sheet_name, $validation_index, $folder)

Get worksheet validation by index.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetValidationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$validation_index = 56; // int | The validation index.
$folder = "folder_example"; // string | Document's folder.

try {
    $result = $apiInstance->cellsWorksheetValidationsGetWorksheetValidation($name, $sheet_name, $validation_index, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetValidationsApi->cellsWorksheetValidationsGetWorksheetValidation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| Worksheet name. |
 **validation_index** | **int**| The validation index. |
 **folder** | **string**| Document&#39;s folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\ValidationResponse**](../Model/ValidationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorksheetValidationsGetWorksheetValidations**
> \Aspose\Cells\Cloud\Model\ValidationsResponse cellsWorksheetValidationsGetWorksheetValidations($name, $sheet_name, $folder)

Get worksheet validations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetValidationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$folder = "folder_example"; // string | Document folder.

try {
    $result = $apiInstance->cellsWorksheetValidationsGetWorksheetValidations($name, $sheet_name, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetValidationsApi->cellsWorksheetValidationsGetWorksheetValidations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| Worksheet name. |
 **folder** | **string**| Document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\ValidationsResponse**](../Model/ValidationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorksheetValidationsPostWorksheetValidation**
> \Aspose\Cells\Cloud\Model\ValidationResponse cellsWorksheetValidationsPostWorksheetValidation($name, $sheet_name, $validation_index, $validation, $folder)

Update worksheet validation by index.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetValidationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$validation_index = 56; // int | The validation index.
$validation = new \Aspose\Cells\Cloud\Model\Validation(); // \Aspose\Cells\Cloud\Model\Validation | 
$folder = "folder_example"; // string | Document's folder.

try {
    $result = $apiInstance->cellsWorksheetValidationsPostWorksheetValidation($name, $sheet_name, $validation_index, $validation, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetValidationsApi->cellsWorksheetValidationsPostWorksheetValidation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| Worksheet name. |
 **validation_index** | **int**| The validation index. |
 **validation** | [**\Aspose\Cells\Cloud\Model\Validation**](../Model/Validation.md)|  | [optional]
 **folder** | **string**| Document&#39;s folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\ValidationResponse**](../Model/ValidationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsWorksheetValidationsPutWorksheetValidation**
> \Aspose\Cells\Cloud\Model\ValidationResponse cellsWorksheetValidationsPutWorksheetValidation($name, $sheet_name, $range, $folder)

Add worksheet validation at index.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsWorksheetValidationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$range = "range_example"; // string | Specified cells area
$folder = "folder_example"; // string | Document's folder.

try {
    $result = $apiInstance->cellsWorksheetValidationsPutWorksheetValidation($name, $sheet_name, $range, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsWorksheetValidationsApi->cellsWorksheetValidationsPutWorksheetValidation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| Worksheet name. |
 **range** | **string**| Specified cells area | [optional]
 **folder** | **string**| Document&#39;s folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\ValidationResponse**](../Model/ValidationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

