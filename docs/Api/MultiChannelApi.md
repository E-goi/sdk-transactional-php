# Swagger\Client\MultiChannelApi

All URIs are relative to *https://slingshot.egoiapp.com/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMultiChannelFlow**](MultiChannelApi.md#createmultichannelflow) | **POST** /v2/multi-channel/flow | Create Multi-Channel Flow
[**executeMultiChannel**](MultiChannelApi.md#executemultichannel) | **POST** /v2/multi-channel/execute | Execute Multi-Channel
[**listMultiChannel2**](MultiChannelApi.md#listmultichannel2) | **GET** /v2/multi-channel/flow/{id} | Get Single Multi-Channel Flow
[**listMultiChannels**](MultiChannelApi.md#listmultichannels) | **GET** /v2/multi-channel/flow | Get All Multi-Channel Flows
[**removeMultiChannel**](MultiChannelApi.md#removemultichannel) | **DELETE** /v2/multi-channel/flow/{id} | Remove Single Multi-Channel

# **createMultiChannelFlow**
> \Swagger\Client\Model\MultiChannelFlowIdResponse createMultiChannelFlow($body)

Create Multi-Channel Flow

This method will create and add a Multi-Channel Flow. First message doesn't need interval or condition, since it doesn't depend on other messages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\MultiChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MultiChannelFlowRequest(); // \Swagger\Client\Model\MultiChannelFlowRequest | 

try {
    $result = $apiInstance->createMultiChannelFlow($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultiChannelApi->createMultiChannelFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MultiChannelFlowRequest**](../Model/MultiChannelFlowRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\MultiChannelFlowIdResponse**](../Model/MultiChannelFlowIdResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeMultiChannel**
> \Swagger\Client\Model\MultiChannelIdResponse executeMultiChannel($body)

Execute Multi-Channel

This method will create and start a flow, sending the Multi-Channel of messages to the appropriate recipient

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\MultiChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ExecuteMultiChannelRequest(); // \Swagger\Client\Model\ExecuteMultiChannelRequest | 

try {
    $result = $apiInstance->executeMultiChannel($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultiChannelApi->executeMultiChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ExecuteMultiChannelRequest**](../Model/ExecuteMultiChannelRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\MultiChannelIdResponse**](../Model/MultiChannelIdResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMultiChannel2**
> \Swagger\Client\Model\MultiChannelFlowResponse[] listMultiChannel2($id)

Get Single Multi-Channel Flow

This method returns the Multi-Channel Flow wih the id in the path

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\MultiChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the Multi-Channel Flow

try {
    $result = $apiInstance->listMultiChannel2($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultiChannelApi->listMultiChannel2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the Multi-Channel Flow |

### Return type

[**\Swagger\Client\Model\MultiChannelFlowResponse[]**](../Model/MultiChannelFlowResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMultiChannels**
> \Swagger\Client\Model\MultiChannelFlowResponse[] listMultiChannels()

Get All Multi-Channel Flows

This method returns all Multi-Channels Flows set in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\MultiChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listMultiChannels();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MultiChannelApi->listMultiChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MultiChannelFlowResponse[]**](../Model/MultiChannelFlowResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeMultiChannel**
> removeMultiChannel($id)

Remove Single Multi-Channel

This method removes a Multi-Channel Flow from the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\MultiChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the Multi-Channel Flow to remove

try {
    $apiInstance->removeMultiChannel($id);
} catch (Exception $e) {
    echo 'Exception when calling MultiChannelApi->removeMultiChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the Multi-Channel Flow to remove |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

