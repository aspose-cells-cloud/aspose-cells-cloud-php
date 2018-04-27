# Aspose\Cells\Cloud\OAuthApi

All URIs are relative to *https://api.aspose.cloud/v1.1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**oAuthPost**](OAuthApi.md#oAuthPost) | **POST** /oauth2/token | Get Access token


# **oAuthPost**
> \Aspose\Cells\Cloud\Model\AccessTokenResponse oAuthPost($grant_type, $client_id, $client_secret)

Get Access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\Cells\Cloud\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$grant_type = "grant_type_example"; // string | Grant Type
$client_id = "client_id_example"; // string | App SID
$client_secret = "client_secret_example"; // string | App Key

try {
    $result = $apiInstance->oAuthPost($grant_type, $client_id, $client_secret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->oAuthPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_type** | **string**| Grant Type |
 **client_id** | **string**| App SID |
 **client_secret** | **string**| App Key |

### Return type

[**\Aspose\Cells\Cloud\Model\AccessTokenResponse**](../Model/AccessTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

