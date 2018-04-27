# Aspose\Cells\Cloud\CellsShapesApi

All URIs are relative to *https://api.aspose.cloud/v1.1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cellsShapesDeleteWorksheetShape**](CellsShapesApi.md#cellsShapesDeleteWorksheetShape) | **DELETE** /cells/{name}/worksheets/{sheetName}/shapes/{shapeindex} | Delete a shape in worksheet
[**cellsShapesDeleteWorksheetShapes**](CellsShapesApi.md#cellsShapesDeleteWorksheetShapes) | **DELETE** /cells/{name}/worksheets/{sheetName}/shapes | delete all shapes in worksheet
[**cellsShapesGetWorksheetShape**](CellsShapesApi.md#cellsShapesGetWorksheetShape) | **GET** /cells/{name}/worksheets/{sheetName}/shapes/{shapeindex} | Get worksheet shape
[**cellsShapesGetWorksheetShapes**](CellsShapesApi.md#cellsShapesGetWorksheetShapes) | **GET** /cells/{name}/worksheets/{sheetName}/shapes | Get worksheet shapes
[**cellsShapesPostWorksheetShape**](CellsShapesApi.md#cellsShapesPostWorksheetShape) | **POST** /cells/{name}/worksheets/{sheetName}/shapes/{shapeindex} | Update a shape in worksheet
[**cellsShapesPutWorksheetShape**](CellsShapesApi.md#cellsShapesPutWorksheetShape) | **PUT** /cells/{name}/worksheets/{sheetName}/shapes | Add shape in worksheet


# **cellsShapesDeleteWorksheetShape**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsShapesDeleteWorksheetShape($name, $sheet_name, $shapeindex, $folder)

Delete a shape in worksheet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsShapesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | document name.
$sheet_name = "sheet_name_example"; // string | worksheet name.
$shapeindex = 56; // int | shape index in worksheet shapes.
$folder = "folder_example"; // string | Document's folder.

try {
    $result = $apiInstance->cellsShapesDeleteWorksheetShape($name, $sheet_name, $shapeindex, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsShapesApi->cellsShapesDeleteWorksheetShape: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| document name. |
 **sheet_name** | **string**| worksheet name. |
 **shapeindex** | **int**| shape index in worksheet shapes. |
 **folder** | **string**| Document&#39;s folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsShapesDeleteWorksheetShapes**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsShapesDeleteWorksheetShapes($name, $sheet_name, $folder)

delete all shapes in worksheet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsShapesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | document name.
$sheet_name = "sheet_name_example"; // string | worksheet name.
$folder = "folder_example"; // string | Document's folder.

try {
    $result = $apiInstance->cellsShapesDeleteWorksheetShapes($name, $sheet_name, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsShapesApi->cellsShapesDeleteWorksheetShapes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| document name. |
 **sheet_name** | **string**| worksheet name. |
 **folder** | **string**| Document&#39;s folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsShapesGetWorksheetShape**
> \Aspose\Cells\Cloud\Model\ShapeResponse cellsShapesGetWorksheetShape($name, $sheet_name, $shapeindex, $folder)

Get worksheet shape

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsShapesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | document name.
$sheet_name = "sheet_name_example"; // string | worksheet name.
$shapeindex = 56; // int | shape index in worksheet shapes.
$folder = "folder_example"; // string | Document's folder.

try {
    $result = $apiInstance->cellsShapesGetWorksheetShape($name, $sheet_name, $shapeindex, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsShapesApi->cellsShapesGetWorksheetShape: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| document name. |
 **sheet_name** | **string**| worksheet name. |
 **shapeindex** | **int**| shape index in worksheet shapes. |
 **folder** | **string**| Document&#39;s folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\ShapeResponse**](../Model/ShapeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsShapesGetWorksheetShapes**
> \Aspose\Cells\Cloud\Model\ShapesResponse cellsShapesGetWorksheetShapes($name, $sheet_name, $folder)

Get worksheet shapes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsShapesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | document name.
$sheet_name = "sheet_name_example"; // string | worksheet name.
$folder = "folder_example"; // string | Document's folder.

try {
    $result = $apiInstance->cellsShapesGetWorksheetShapes($name, $sheet_name, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsShapesApi->cellsShapesGetWorksheetShapes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| document name. |
 **sheet_name** | **string**| worksheet name. |
 **folder** | **string**| Document&#39;s folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\ShapesResponse**](../Model/ShapesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsShapesPostWorksheetShape**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsShapesPostWorksheetShape($name, $sheet_name, $shapeindex, $dto, $folder)

Update a shape in worksheet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsShapesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | document name.
$sheet_name = "sheet_name_example"; // string | worksheet name.
$shapeindex = 56; // int | shape index in worksheet shapes.
$dto = new \Aspose\Cells\Cloud\Model\Shape(); // \Aspose\Cells\Cloud\Model\Shape | 
$folder = "folder_example"; // string | Document's folder.

try {
    $result = $apiInstance->cellsShapesPostWorksheetShape($name, $sheet_name, $shapeindex, $dto, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsShapesApi->cellsShapesPostWorksheetShape: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| document name. |
 **sheet_name** | **string**| worksheet name. |
 **shapeindex** | **int**| shape index in worksheet shapes. |
 **dto** | [**\Aspose\Cells\Cloud\Model\Shape**](../Model/Shape.md)|  | [optional]
 **folder** | **string**| Document&#39;s folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsShapesPutWorksheetShape**
> \Aspose\Cells\Cloud\Model\ShapeResponse cellsShapesPutWorksheetShape($name, $sheet_name, $drawing_type, $upper_left_row, $upper_left_column, $top, $left, $width, $height, $folder)

Add shape in worksheet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsShapesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | document name.
$sheet_name = "sheet_name_example"; // string | worksheet name.
$drawing_type = "drawing_type_example"; // string | shape object type
$upper_left_row = 56; // int | Upper left row index.
$upper_left_column = 56; // int | Upper left column index.
$top = 56; // int | Represents the vertical offset of Spinner from its left row, in unit of pixel.
$left = 56; // int | Represents the horizontal offset of Spinner from its left column, in unit of pixel.
$width = 56; // int | Represents the height of Spinner, in unit of pixel.
$height = 56; // int | Represents the width of Spinner, in unit of pixel.
$folder = "folder_example"; // string | Document's folder.

try {
    $result = $apiInstance->cellsShapesPutWorksheetShape($name, $sheet_name, $drawing_type, $upper_left_row, $upper_left_column, $top, $left, $width, $height, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsShapesApi->cellsShapesPutWorksheetShape: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| document name. |
 **sheet_name** | **string**| worksheet name. |
 **drawing_type** | **string**| shape object type |
 **upper_left_row** | **int**| Upper left row index. |
 **upper_left_column** | **int**| Upper left column index. |
 **top** | **int**| Represents the vertical offset of Spinner from its left row, in unit of pixel. |
 **left** | **int**| Represents the horizontal offset of Spinner from its left column, in unit of pixel. |
 **width** | **int**| Represents the height of Spinner, in unit of pixel. |
 **height** | **int**| Represents the width of Spinner, in unit of pixel. |
 **folder** | **string**| Document&#39;s folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\ShapeResponse**](../Model/ShapeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

