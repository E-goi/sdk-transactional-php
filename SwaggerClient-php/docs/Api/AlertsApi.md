# Swagger\Client\AlertsApi

All URIs are relative to *https://slingshot.egoiapp.com/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeAlertTemplate**](AlertsApi.md#changealerttemplate) | **PATCH** /v2/alert/template/{id} | Change Single Alert Template
[**createAlertTemplate**](AlertsApi.md#createalerttemplate) | **POST** /v2/alert/template | Create Alert Template
[**executeEmailAlert**](AlertsApi.md#executeemailalert) | **POST** /v2/alert/action/execute | Execute Alert
[**listMultiChannel**](AlertsApi.md#listmultichannel) | **GET** /v2/alert/template/{id} | Get Single Alert Template
[**listMultiChannel1**](AlertsApi.md#listmultichannel1) | **GET** /v2/alert/template | Get All Alert Template
[**removeAlertTemplate**](AlertsApi.md#removealerttemplate) | **DELETE** /v2/alert/template/{id} | Remove Alert Template
[**stopAlert**](AlertsApi.md#stopalert) | **POST** /v2/alert/action/stop | Stop Alert

# **changeAlertTemplate**
> \Swagger\Client\Model\AlertTemplateResponse changeAlertTemplate($id, $body)

Change Single Alert Template

This method will change information about the template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the Alert Template to edit
$body = new \Swagger\Client\Model\AlertTemplateRequest(); // \Swagger\Client\Model\AlertTemplateRequest | 

try {
    $result = $apiInstance->changeAlertTemplate($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->changeAlertTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the Alert Template to edit |
 **body** | [**\Swagger\Client\Model\AlertTemplateRequest**](../Model/AlertTemplateRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\AlertTemplateResponse**](../Model/AlertTemplateResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAlertTemplate**
> \Swagger\Client\Model\AlertTemplateIdResponse createAlertTemplate($body)

Create Alert Template

This method will create and add an alert template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AlertTemplateRequest(); // \Swagger\Client\Model\AlertTemplateRequest | 

try {
    $result = $apiInstance->createAlertTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->createAlertTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AlertTemplateRequest**](../Model/AlertTemplateRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\AlertTemplateIdResponse**](../Model/AlertTemplateIdResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeEmailAlert**
> \Swagger\Client\Model\AlertIdResponse executeEmailAlert($body)

Execute Alert

This method executes an alert flow , using a pre-created alert template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | default response

try {
    $result = $apiInstance->executeEmailAlert($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->executeEmailAlert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body**](../Model/Body.md)| default response | [optional]

### Return type

[**\Swagger\Client\Model\AlertIdResponse**](../Model/AlertIdResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMultiChannel**
> \Swagger\Client\Model\AlertTemplateResponse listMultiChannel($id)

Get Single Alert Template

This method returns the Alert Template wih the id in the path

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the Alert Template

try {
    $result = $apiInstance->listMultiChannel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->listMultiChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the Alert Template |

### Return type

[**\Swagger\Client\Model\AlertTemplateResponse**](../Model/AlertTemplateResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMultiChannel1**
> \Swagger\Client\Model\AlertTemplateResponse[] listMultiChannel1()

Get All Alert Template

This method returns all the Alert Templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listMultiChannel1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->listMultiChannel1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AlertTemplateResponse[]**](../Model/AlertTemplateResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeAlertTemplate**
> removeAlertTemplate($id)

Remove Alert Template

This method removes an Alert Template from the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id of the Alert Template to remove

try {
    $apiInstance->removeAlertTemplate($id);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->removeAlertTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the Alert Template to remove |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stopAlert**
> \Swagger\Client\Model\AlertIdResponse stopAlert($body)

Stop Alert

This method will stop any alerts that are being processed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CancelAlertRequest(); // \Swagger\Client\Model\CancelAlertRequest | 

try {
    $result = $apiInstance->stopAlert($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->stopAlert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CancelAlertRequest**](../Model/CancelAlertRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\AlertIdResponse**](../Model/AlertIdResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

