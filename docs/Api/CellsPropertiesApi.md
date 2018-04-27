# Aspose\Cells\Cloud\CellsPropertiesApi

All URIs are relative to *https://api.aspose.cloud/v1.1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cellsPropertiesDeleteDocumentProperties**](CellsPropertiesApi.md#cellsPropertiesDeleteDocumentProperties) | **DELETE** /cells/{name}/documentproperties | Delete all custom document properties and clean built-in ones.
[**cellsPropertiesDeleteDocumentProperty**](CellsPropertiesApi.md#cellsPropertiesDeleteDocumentProperty) | **DELETE** /cells/{name}/documentproperties/{propertyName} | Delete document property.
[**cellsPropertiesGetDocumentProperties**](CellsPropertiesApi.md#cellsPropertiesGetDocumentProperties) | **GET** /cells/{name}/documentproperties | Read document properties.
[**cellsPropertiesGetDocumentProperty**](CellsPropertiesApi.md#cellsPropertiesGetDocumentProperty) | **GET** /cells/{name}/documentproperties/{propertyName} | Read document property by name.
[**cellsPropertiesPutDocumentProperty**](CellsPropertiesApi.md#cellsPropertiesPutDocumentProperty) | **PUT** /cells/{name}/documentproperties/{propertyName} | Set/create document property.


# **cellsPropertiesDeleteDocumentProperties**
> \Aspose\Cells\Cloud\Model\CellsDocumentPropertiesResponse cellsPropertiesDeleteDocumentProperties($name, $folder)

Delete all custom document properties and clean built-in ones.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsPropertiesDeleteDocumentProperties($name, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPropertiesApi->cellsPropertiesDeleteDocumentProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\CellsDocumentPropertiesResponse**](../Model/CellsDocumentPropertiesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPropertiesDeleteDocumentProperty**
> \Aspose\Cells\Cloud\Model\CellsDocumentPropertiesResponse cellsPropertiesDeleteDocumentProperty($name, $property_name, $folder)

Delete document property.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$property_name = "property_name_example"; // string | The property name.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsPropertiesDeleteDocumentProperty($name, $property_name, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPropertiesApi->cellsPropertiesDeleteDocumentProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **property_name** | **string**| The property name. |
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\CellsDocumentPropertiesResponse**](../Model/CellsDocumentPropertiesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPropertiesGetDocumentProperties**
> \Aspose\Cells\Cloud\Model\CellsDocumentPropertiesResponse cellsPropertiesGetDocumentProperties($name, $folder)

Read document properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsPropertiesGetDocumentProperties($name, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPropertiesApi->cellsPropertiesGetDocumentProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\CellsDocumentPropertiesResponse**](../Model/CellsDocumentPropertiesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPropertiesGetDocumentProperty**
> \Aspose\Cells\Cloud\Model\CellsDocumentPropertyResponse cellsPropertiesGetDocumentProperty($name, $property_name, $folder)

Read document property by name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$property_name = "property_name_example"; // string | The property name.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsPropertiesGetDocumentProperty($name, $property_name, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPropertiesApi->cellsPropertiesGetDocumentProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **property_name** | **string**| The property name. |
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\CellsDocumentPropertyResponse**](../Model/CellsDocumentPropertyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsPropertiesPutDocumentProperty**
> \Aspose\Cells\Cloud\Model\CellsDocumentPropertyResponse cellsPropertiesPutDocumentProperty($name, $property_name, $property, $folder)

Set/create document property.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$property_name = "property_name_example"; // string | The property name.
$property = new \Aspose\Cells\Cloud\Model\CellsDocumentProperty(); // \Aspose\Cells\Cloud\Model\CellsDocumentProperty | with new property value.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsPropertiesPutDocumentProperty($name, $property_name, $property, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsPropertiesApi->cellsPropertiesPutDocumentProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **property_name** | **string**| The property name. |
 **property** | [**\Aspose\Cells\Cloud\Model\CellsDocumentProperty**](../Model/CellsDocumentProperty.md)| with new property value. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\CellsDocumentPropertyResponse**](../Model/CellsDocumentPropertyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

