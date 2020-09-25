# Swagger\Client\VerifyApi

All URIs are relative to *https://slingshot.egoiapp.com/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelVerify**](VerifyApi.md#cancelverify) | **POST** /v2/verify/{id}/cancel | Cancel Verify Request
[**getVerify**](VerifyApi.md#getverify) | **GET** /v2/verify/{id} | Get Verify Request
[**requestVerify**](VerifyApi.md#requestverify) | **POST** /v2/verify/request | Request Verify
[**resendVerify**](VerifyApi.md#resendverify) | **POST** /v2/verify/{id}/resend | Resend Verify Code
[**validateVerifyCode**](VerifyApi.md#validateverifycode) | **POST** /v2/verify/{id}/validate | Validate Verify Code

# **cancelVerify**
> \Swagger\Client\Model\VerifyIdResponse[] cancelVerify($id)

Cancel Verify Request

This method will cancel the requested verify. No codes will be further generated or confirmed within the context of the id of the message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\VerifyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the Verify Request

try {
    $result = $apiInstance->cancelVerify($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerifyApi->cancelVerify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the Verify Request |

### Return type

[**\Swagger\Client\Model\VerifyIdResponse[]**](../Model/VerifyIdResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVerify**
> \Swagger\Client\Model\CheckVerifyResponse getVerify($id)

Get Verify Request

This method gets a verify requests, including status of it

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\VerifyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the Verify Request

try {
    $result = $apiInstance->getVerify($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerifyApi->getVerify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the Verify Request |

### Return type

[**\Swagger\Client\Model\CheckVerifyResponse**](../Model/CheckVerifyResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestVerify**
> \Swagger\Client\Model\VerifyIdResponse requestVerify($body)

Request Verify

This method will generate a code and send a message with it to a recipient

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\VerifyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\VerifyRequest(); // \Swagger\Client\Model\VerifyRequest | 

try {
    $result = $apiInstance->requestVerify($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerifyApi->requestVerify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\VerifyRequest**](../Model/VerifyRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\VerifyIdResponse**](../Model/VerifyIdResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resendVerify**
> \Swagger\Client\Model\VerifyIdResponse[] resendVerify($id)

Resend Verify Code

This method will resend the requested verify. A new code will be generated and sent to the recipient

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\VerifyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the Verify Request

try {
    $result = $apiInstance->resendVerify($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerifyApi->resendVerify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the Verify Request |

### Return type

[**\Swagger\Client\Model\VerifyIdResponse[]**](../Model/VerifyIdResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateVerifyCode**
> \Swagger\Client\Model\VerifyIdResponse[] validateVerifyCode($id, $body)

Validate Verify Code

This method validates the code submitted by the recipient. This request should be made by the sender of the Verify request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\VerifyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the Verify Request
$body = new \Swagger\Client\Model\ValidateCodeVerifyRequest(); // \Swagger\Client\Model\ValidateCodeVerifyRequest | 

try {
    $result = $apiInstance->validateVerifyCode($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerifyApi->validateVerifyCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the Verify Request |
 **body** | [**\Swagger\Client\Model\ValidateCodeVerifyRequest**](../Model/ValidateCodeVerifyRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\VerifyIdResponse[]**](../Model/VerifyIdResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

