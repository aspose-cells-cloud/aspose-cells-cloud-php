# Aspose\Cells\Cloud\CellsTaskApi

All URIs are relative to *https://api.aspose.cloud/v1.1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cellsTaskPostRunTask**](CellsTaskApi.md#cellsTaskPostRunTask) | **POST** /cells/task/runtask | Run tasks


# **cellsTaskPostRunTask**
> \SplFileObject cellsTaskPostRunTask($task_data)

Run tasks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\CellsTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$task_data = new \Aspose\Cells\Cloud\Model\TaskData(); // \Aspose\Cells\Cloud\Model\TaskData | 

try {
    $result = $apiInstance->cellsTaskPostRunTask($task_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellsTaskApi->cellsTaskPostRunTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_data** | [**\Aspose\Cells\Cloud\Model\TaskData**](../Model/TaskData.md)|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

