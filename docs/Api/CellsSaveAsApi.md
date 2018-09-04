# Aspose\Cells\Cloud\CellsSaveAsApi

All URIs are relative to *https://api.aspose.cloud/v1.1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cellsSaveAsPostDocumentSaveAs**](CellsSaveAsApi.md#cellsSaveAsPostDocumentSaveAs) | **POST** /cells/{name}/SaveAs | Convert document and save result to storage.


# **cellsSaveAsPostDocumentSaveAs**
> \Aspose\Cells\Cloud\Model\SaveResponse cellsSaveAsPostDocumentSaveAs($name, $save_options, $newfilename, $is_auto_fit_rows, $is_auto_fit_columns, $folder, $storage)

Convert document and save result to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsSaveAsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$save_options = new \Aspose\Cells\Cloud\Model\SaveOptions(); // \Aspose\Cells\Cloud\Model\SaveOptions | Save options.
$newfilename = "newfilename_example"; // string | The new file name.
$is_auto_fit_rows = false; // bool | Autofit rows.
$is_auto_fit_columns = false; // bool | Autofit columns.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | storage name.

try {
    $result = $apiInstance->cellsSaveAsPostDocumentSaveAs($name, $save_options, $newfilename, $is_auto_fit_rows, $is_auto_fit_columns, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsSaveAsApi->cellsSaveAsPostDocumentSaveAs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **save_options** | [**\Aspose\Cells\Cloud\Model\SaveOptions**](../Model/SaveOptions.md)| Save options. | [optional]
 **newfilename** | **string**| The new file name. | [optional]
 **is_auto_fit_rows** | **bool**| Autofit rows. | [optional] [default to false]
 **is_auto_fit_columns** | **bool**| Autofit columns. | [optional] [default to false]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| storage name. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaveResponse**](../Model/SaveResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

