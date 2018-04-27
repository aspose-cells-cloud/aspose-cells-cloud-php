# Aspose\Cells\Cloud\CellsChartsApi

All URIs are relative to *https://api.aspose.cloud/v1.1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cellsChartsDeleteWorksheetChartLegend**](CellsChartsApi.md#cellsChartsDeleteWorksheetChartLegend) | **DELETE** /cells/{name}/worksheets/{sheetName}/charts/{chartIndex}/legend | Hide legend in chart
[**cellsChartsDeleteWorksheetChartTitle**](CellsChartsApi.md#cellsChartsDeleteWorksheetChartTitle) | **DELETE** /cells/{name}/worksheets/{sheetName}/charts/{chartIndex}/title | Hide title in chart
[**cellsChartsDeleteWorksheetClearCharts**](CellsChartsApi.md#cellsChartsDeleteWorksheetClearCharts) | **DELETE** /cells/{name}/worksheets/{sheetName}/charts | Clear the charts.
[**cellsChartsDeleteWorksheetDeleteChart**](CellsChartsApi.md#cellsChartsDeleteWorksheetDeleteChart) | **DELETE** /cells/{name}/worksheets/{sheetName}/charts/{chartIndex} | Delete worksheet chart by index.
[**cellsChartsGetWorksheetChart**](CellsChartsApi.md#cellsChartsGetWorksheetChart) | **GET** /cells/{name}/worksheets/{sheetName}/charts/{chartNumber} | Get chart info.
[**cellsChartsGetWorksheetChartLegend**](CellsChartsApi.md#cellsChartsGetWorksheetChartLegend) | **GET** /cells/{name}/worksheets/{sheetName}/charts/{chartIndex}/legend | Get chart legend
[**cellsChartsGetWorksheetChartTitle**](CellsChartsApi.md#cellsChartsGetWorksheetChartTitle) | **GET** /cells/{name}/worksheets/{sheetName}/charts/{chartIndex}/title | Get chart title
[**cellsChartsGetWorksheetCharts**](CellsChartsApi.md#cellsChartsGetWorksheetCharts) | **GET** /cells/{name}/worksheets/{sheetName}/charts | Get worksheet charts info.
[**cellsChartsPostWorksheetChart**](CellsChartsApi.md#cellsChartsPostWorksheetChart) | **POST** /cells/{name}/worksheets/{sheetName}/charts/{chartIndex} | Update chart propreties
[**cellsChartsPostWorksheetChartLegend**](CellsChartsApi.md#cellsChartsPostWorksheetChartLegend) | **POST** /cells/{name}/worksheets/{sheetName}/charts/{chartIndex}/legend | Update chart legend
[**cellsChartsPostWorksheetChartTitle**](CellsChartsApi.md#cellsChartsPostWorksheetChartTitle) | **POST** /cells/{name}/worksheets/{sheetName}/charts/{chartIndex}/title | Update chart title
[**cellsChartsPutWorksheetAddChart**](CellsChartsApi.md#cellsChartsPutWorksheetAddChart) | **PUT** /cells/{name}/worksheets/{sheetName}/charts | Add new chart to worksheet.
[**cellsChartsPutWorksheetChartLegend**](CellsChartsApi.md#cellsChartsPutWorksheetChartLegend) | **PUT** /cells/{name}/worksheets/{sheetName}/charts/{chartIndex}/legend | Show legend in chart
[**cellsChartsPutWorksheetChartTitle**](CellsChartsApi.md#cellsChartsPutWorksheetChartTitle) | **PUT** /cells/{name}/worksheets/{sheetName}/charts/{chartIndex}/title | Add chart title / Set chart title visible


# **cellsChartsDeleteWorksheetChartLegend**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsChartsDeleteWorksheetChartLegend($name, $sheet_name, $chart_index, $folder)

Hide legend in chart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Workbook name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$chart_index = 56; // int | The chart index.
$folder = "folder_example"; // string | The workbook folder.

try {
    $result = $apiInstance->cellsChartsDeleteWorksheetChartLegend($name, $sheet_name, $chart_index, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsChartsApi->cellsChartsDeleteWorksheetChartLegend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Workbook name. |
 **sheet_name** | **string**| Worksheet name. |
 **chart_index** | **int**| The chart index. |
 **folder** | **string**| The workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsChartsDeleteWorksheetChartTitle**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsChartsDeleteWorksheetChartTitle($name, $sheet_name, $chart_index, $folder)

Hide title in chart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Workbook name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$chart_index = 56; // int | The chart index.
$folder = "folder_example"; // string | The workbook folder.

try {
    $result = $apiInstance->cellsChartsDeleteWorksheetChartTitle($name, $sheet_name, $chart_index, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsChartsApi->cellsChartsDeleteWorksheetChartTitle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Workbook name. |
 **sheet_name** | **string**| Worksheet name. |
 **chart_index** | **int**| The chart index. |
 **folder** | **string**| The workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsChartsDeleteWorksheetClearCharts**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsChartsDeleteWorksheetClearCharts($name, $sheet_name, $folder)

Clear the charts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$folder = "folder_example"; // string | The workbook folder.

try {
    $result = $apiInstance->cellsChartsDeleteWorksheetClearCharts($name, $sheet_name, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsChartsApi->cellsChartsDeleteWorksheetClearCharts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **folder** | **string**| The workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsChartsDeleteWorksheetDeleteChart**
> \Aspose\Cells\Cloud\Model\ChartsResponse cellsChartsDeleteWorksheetDeleteChart($name, $sheet_name, $chart_index, $folder)

Delete worksheet chart by index.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Workbook name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$chart_index = 56; // int | The chart index.
$folder = "folder_example"; // string | The workbook folder.

try {
    $result = $apiInstance->cellsChartsDeleteWorksheetDeleteChart($name, $sheet_name, $chart_index, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsChartsApi->cellsChartsDeleteWorksheetDeleteChart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Workbook name. |
 **sheet_name** | **string**| Worksheet name. |
 **chart_index** | **int**| The chart index. |
 **folder** | **string**| The workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\ChartsResponse**](../Model/ChartsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsChartsGetWorksheetChart**
> \SplFileObject cellsChartsGetWorksheetChart($name, $sheet_name, $chart_number, $format, $folder)

Get chart info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$chart_number = 56; // int | The chart number.
$format = "format_example"; // string | The exported file format.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->cellsChartsGetWorksheetChart($name, $sheet_name, $chart_number, $format, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsChartsApi->cellsChartsGetWorksheetChart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **sheet_name** | **string**| Worksheet name. |
 **chart_number** | **int**| The chart number. |
 **format** | **string**| The exported file format. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsChartsGetWorksheetChartLegend**
> \Aspose\Cells\Cloud\Model\LegendResponse cellsChartsGetWorksheetChartLegend($name, $sheet_name, $chart_index, $folder)

Get chart legend

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Workbook name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$chart_index = 56; // int | The chart index.
$folder = "folder_example"; // string | The workbook folder.

try {
    $result = $apiInstance->cellsChartsGetWorksheetChartLegend($name, $sheet_name, $chart_index, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsChartsApi->cellsChartsGetWorksheetChartLegend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Workbook name. |
 **sheet_name** | **string**| Worksheet name. |
 **chart_index** | **int**| The chart index. |
 **folder** | **string**| The workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\LegendResponse**](../Model/LegendResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsChartsGetWorksheetChartTitle**
> \Aspose\Cells\Cloud\Model\TitleResponse cellsChartsGetWorksheetChartTitle($name, $sheet_name, $chart_index, $folder)

Get chart title

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Workbook name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$chart_index = 56; // int | The chart index.
$folder = "folder_example"; // string | The workbook folder.

try {
    $result = $apiInstance->cellsChartsGetWorksheetChartTitle($name, $sheet_name, $chart_index, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsChartsApi->cellsChartsGetWorksheetChartTitle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Workbook name. |
 **sheet_name** | **string**| Worksheet name. |
 **chart_index** | **int**| The chart index. |
 **folder** | **string**| The workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\TitleResponse**](../Model/TitleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsChartsGetWorksheetCharts**
> \Aspose\Cells\Cloud\Model\ChartsResponse cellsChartsGetWorksheetCharts($name, $sheet_name, $folder)

Get worksheet charts info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$folder = "folder_example"; // string | Document's folder.

try {
    $result = $apiInstance->cellsChartsGetWorksheetCharts($name, $sheet_name, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsChartsApi->cellsChartsGetWorksheetCharts: ', $e->getMessage(), PHP_EOL;
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

[**\Aspose\Cells\Cloud\Model\ChartsResponse**](../Model/ChartsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsChartsPostWorksheetChart**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsChartsPostWorksheetChart($name, $sheet_name, $chart_index, $chart, $folder)

Update chart propreties

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$sheet_name = "sheet_name_example"; // string | 
$chart_index = 56; // int | 
$chart = new \Aspose\Cells\Cloud\Model\Chart(); // \Aspose\Cells\Cloud\Model\Chart | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->cellsChartsPostWorksheetChart($name, $sheet_name, $chart_index, $chart, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsChartsApi->cellsChartsPostWorksheetChart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sheet_name** | **string**|  |
 **chart_index** | **int**|  |
 **chart** | [**\Aspose\Cells\Cloud\Model\Chart**](../Model/Chart.md)|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsChartsPostWorksheetChartLegend**
> \Aspose\Cells\Cloud\Model\LegendResponse cellsChartsPostWorksheetChartLegend($name, $sheet_name, $chart_index, $legend, $folder)

Update chart legend

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Workbook name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$chart_index = 56; // int | The chart index.
$legend = new \Aspose\Cells\Cloud\Model\Legend(); // \Aspose\Cells\Cloud\Model\Legend | 
$folder = "folder_example"; // string | The workbook folder.

try {
    $result = $apiInstance->cellsChartsPostWorksheetChartLegend($name, $sheet_name, $chart_index, $legend, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsChartsApi->cellsChartsPostWorksheetChartLegend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Workbook name. |
 **sheet_name** | **string**| Worksheet name. |
 **chart_index** | **int**| The chart index. |
 **legend** | [**\Aspose\Cells\Cloud\Model\Legend**](../Model/Legend.md)|  | [optional]
 **folder** | **string**| The workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\LegendResponse**](../Model/LegendResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsChartsPostWorksheetChartTitle**
> \Aspose\Cells\Cloud\Model\TitleResponse cellsChartsPostWorksheetChartTitle($name, $sheet_name, $chart_index, $title, $folder)

Update chart title

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Workbook name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$chart_index = 56; // int | The chart index.
$title = new \Aspose\Cells\Cloud\Model\Title(); // \Aspose\Cells\Cloud\Model\Title | Chart title
$folder = "folder_example"; // string | The workbook folder.

try {
    $result = $apiInstance->cellsChartsPostWorksheetChartTitle($name, $sheet_name, $chart_index, $title, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsChartsApi->cellsChartsPostWorksheetChartTitle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Workbook name. |
 **sheet_name** | **string**| Worksheet name. |
 **chart_index** | **int**| The chart index. |
 **title** | [**\Aspose\Cells\Cloud\Model\Title**](../Model/Title.md)| Chart title | [optional]
 **folder** | **string**| The workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\TitleResponse**](../Model/TitleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsChartsPutWorksheetAddChart**
> \Aspose\Cells\Cloud\Model\ChartsResponse cellsChartsPutWorksheetAddChart($name, $sheet_name, $chart_type, $upper_left_row, $upper_left_column, $lower_right_row, $lower_right_column, $area, $is_vertical, $category_data, $is_auto_get_serial_name, $title, $folder)

Add new chart to worksheet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Workbook name.
$sheet_name = "sheet_name_example"; // string | The worksheet name.
$chart_type = "chart_type_example"; // string | Chart type, please refer property Type in chart resource.
$upper_left_row = 0; // int | New chart upper left row.
$upper_left_column = 0; // int | New chart upperleft column.
$lower_right_row = 0; // int | New chart lower right row.
$lower_right_column = 0; // int | New chart lower right column.
$area = "area_example"; // string | Specifies values from which to plot the data series.
$is_vertical = true; // bool | Specifies whether to plot the series from a range of cell values by row or by column.
$category_data = "category_data_example"; // string | Gets or sets the range of category Axis values. It can be a range of cells (such as, \"d1:e10\").
$is_auto_get_serial_name = true; // bool | Specifies whether auto update serial name.
$title = "title_example"; // string | Specifies chart title name.
$folder = "folder_example"; // string | The workbook folder.

try {
    $result = $apiInstance->cellsChartsPutWorksheetAddChart($name, $sheet_name, $chart_type, $upper_left_row, $upper_left_column, $lower_right_row, $lower_right_column, $area, $is_vertical, $category_data, $is_auto_get_serial_name, $title, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsChartsApi->cellsChartsPutWorksheetAddChart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Workbook name. |
 **sheet_name** | **string**| The worksheet name. |
 **chart_type** | **string**| Chart type, please refer property Type in chart resource. |
 **upper_left_row** | **int**| New chart upper left row. | [optional] [default to 0]
 **upper_left_column** | **int**| New chart upperleft column. | [optional] [default to 0]
 **lower_right_row** | **int**| New chart lower right row. | [optional] [default to 0]
 **lower_right_column** | **int**| New chart lower right column. | [optional] [default to 0]
 **area** | **string**| Specifies values from which to plot the data series. | [optional]
 **is_vertical** | **bool**| Specifies whether to plot the series from a range of cell values by row or by column. | [optional] [default to true]
 **category_data** | **string**| Gets or sets the range of category Axis values. It can be a range of cells (such as, \&quot;d1:e10\&quot;). | [optional]
 **is_auto_get_serial_name** | **bool**| Specifies whether auto update serial name. | [optional] [default to true]
 **title** | **string**| Specifies chart title name. | [optional]
 **folder** | **string**| The workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\ChartsResponse**](../Model/ChartsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsChartsPutWorksheetChartLegend**
> \Aspose\Cells\Cloud\Model\SaaSposeResponse cellsChartsPutWorksheetChartLegend($name, $sheet_name, $chart_index, $folder)

Show legend in chart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Workbook name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$chart_index = 56; // int | The chart index.
$folder = "folder_example"; // string | The workbook folder.

try {
    $result = $apiInstance->cellsChartsPutWorksheetChartLegend($name, $sheet_name, $chart_index, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsChartsApi->cellsChartsPutWorksheetChartLegend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Workbook name. |
 **sheet_name** | **string**| Worksheet name. |
 **chart_index** | **int**| The chart index. |
 **folder** | **string**| The workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\SaaSposeResponse**](../Model/SaaSposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cellsChartsPutWorksheetChartTitle**
> \Aspose\Cells\Cloud\Model\TitleResponse cellsChartsPutWorksheetChartTitle($name, $sheet_name, $chart_index, $title, $folder)

Add chart title / Set chart title visible

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsChartsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Workbook name.
$sheet_name = "sheet_name_example"; // string | Worksheet name.
$chart_index = 56; // int | The chart index.
$title = new \Aspose\Cells\Cloud\Model\Title(); // \Aspose\Cells\Cloud\Model\Title | Chart title.
$folder = "folder_example"; // string | The workbook folder.

try {
    $result = $apiInstance->cellsChartsPutWorksheetChartTitle($name, $sheet_name, $chart_index, $title, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsChartsApi->cellsChartsPutWorksheetChartTitle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Workbook name. |
 **sheet_name** | **string**| Worksheet name. |
 **chart_index** | **int**| The chart index. |
 **title** | [**\Aspose\Cells\Cloud\Model\Title**](../Model/Title.md)| Chart title. | [optional]
 **folder** | **string**| The workbook folder. | [optional]

### Return type

[**\Aspose\Cells\Cloud\Model\TitleResponse**](../Model/TitleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

