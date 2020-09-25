# Swagger\Client\WebhooksApi

All URIs are relative to *https://slingshot.egoiapp.com/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addWebHook**](WebhooksApi.md#addwebhook) | **POST** /v2/webhooks | Create new Webhook
[**listWebHooks**](WebhooksApi.md#listwebhooks) | **GET** /v2/webhooks | Get All Webhooks
[**removeWebHook**](WebhooksApi.md#removewebhook) | **DELETE** /v2/webhooks | Remove Webhook

# **addWebHook**
> \Swagger\Client\Model\WebhookIdResponse addWebHook($body)

Create new Webhook

Create a new Webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body1(); // \Swagger\Client\Model\Body1 | default response

try {
    $result = $apiInstance->addWebHook($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->addWebHook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body1**](../Model/Body1.md)| default response | [optional]

### Return type

[**\Swagger\Client\Model\WebhookIdResponse**](../Model/WebhookIdResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listWebHooks**
> \Swagger\Client\Model\GetWebhooksResponse[] listWebHooks($channel)

Get All Webhooks

Return all Webhooks defined by the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel = "channel_example"; // string | The channel of the groups. Can be `email` or `sms`, otherwise returns all groups.

try {
    $result = $apiInstance->listWebHooks($channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->listWebHooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel** | **string**| The channel of the groups. Can be &#x60;email&#x60; or &#x60;sms&#x60;, otherwise returns all groups. | [optional]

### Return type

[**\Swagger\Client\Model\GetWebhooksResponse[]**](../Model/GetWebhooksResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeWebHook**
> removeWebHook($id, $channel)

Remove Webhook

Remove a Webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of the contact to be delete. Cannot be empty.
$channel = "channel_example"; // string | The channel of the Webhook. Can be `email` or `sms`, otherwise removes all the requested webhooks.

try {
    $apiInstance->removeWebHook($id, $channel);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->removeWebHook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of the contact to be delete. Cannot be empty. |
 **channel** | **string**| The channel of the Webhook. Can be &#x60;email&#x60; or &#x60;sms&#x60;, otherwise removes all the requested webhooks. | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

