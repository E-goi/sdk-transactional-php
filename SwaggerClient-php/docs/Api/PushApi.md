# Swagger\Client\PushApi

All URIs are relative to *https://slingshot.egoiapp.com/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addApp**](PushApi.md#addapp) | **POST** /v2/apps | Create App
[**addPushTemplate**](PushApi.md#addpushtemplate) | **POST** /v2/push/templates | Create Push Template
[**deleteApp**](PushApi.md#deleteapp) | **DELETE** /v2/apps/{id} | Remove App
[**deletePushTemplate**](PushApi.md#deletepushtemplate) | **DELETE** /v2/push/templates/{id} | Remove Push Template
[**listApp**](PushApi.md#listapp) | **GET** /v2/apps/{id} | Get an App
[**listApps**](PushApi.md#listapps) | **GET** /v2/apps | Get All Apps
[**listPushTemplate**](PushApi.md#listpushtemplate) | **GET** /v2/push/templates/{id} | Get an Push Template
[**listPushTemplates**](PushApi.md#listpushtemplates) | **GET** /v2/push/templates | Get All Push Templates
[**sendPushMessages**](PushApi.md#sendpushmessages) | **POST** /v2/push/messages/action/send | Send a Push Message
[**updateApp**](PushApi.md#updateapp) | **PUT** /v2/apps/{id} | Update App
[**updatePushTemplate**](PushApi.md#updatepushtemplate) | **PATCH** /v2/push/templates/{id} | Update Push Template

# **addApp**
> \Swagger\Client\Model\TemplateIdResponse addApp($body)

Create App

Creates a new App

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MobileAppRequest(); // \Swagger\Client\Model\MobileAppRequest | 

try {
    $result = $apiInstance->addApp($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->addApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MobileAppRequest**](../Model/MobileAppRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TemplateIdResponse**](../Model/TemplateIdResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPushTemplate**
> \Swagger\Client\Model\TemplateIdResponse addPushTemplate($body)

Create Push Template

Creates a new template record for Push

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PushTemplateRequest(); // \Swagger\Client\Model\PushTemplateRequest | 

try {
    $result = $apiInstance->addPushTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->addPushTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PushTemplateRequest**](../Model/PushTemplateRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TemplateIdResponse**](../Model/TemplateIdResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteApp**
> deleteApp($id)

Remove App

Remove App

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of the app. Cannot be empty.

try {
    $apiInstance->deleteApp($id);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->deleteApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of the app. Cannot be empty. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePushTemplate**
> deletePushTemplate($id)

Remove Push Template

Remove Push Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of the Push Template. Cannot be empty.

try {
    $apiInstance->deletePushTemplate($id);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->deletePushTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of the Push Template. Cannot be empty. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listApp**
> \Swagger\Client\Model\MobileAppIdResponse listApp($id)

Get an App

Gets an App

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of the App. Cannot be empty.

try {
    $result = $apiInstance->listApp($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->listApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of the App. Cannot be empty. |

### Return type

[**\Swagger\Client\Model\MobileAppIdResponse**](../Model/MobileAppIdResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listApps**
> \Swagger\Client\Model\MobileAppResponse[] listApps()

Get All Apps

Obtains all the Apps

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listApps();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->listApps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MobileAppResponse[]**](../Model/MobileAppResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPushTemplate**
> \Swagger\Client\Model\SinglePushTemplateResponse listPushTemplate($id)

Get an Push Template

Gets an Push Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of the Push Template. Cannot be empty.

try {
    $result = $apiInstance->listPushTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->listPushTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of the Push Template. Cannot be empty. |

### Return type

[**\Swagger\Client\Model\SinglePushTemplateResponse**](../Model/SinglePushTemplateResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPushTemplates**
> \Swagger\Client\Model\SinglePushTemplateResponse[] listPushTemplates()

Get All Push Templates

Obtains all the Push templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listPushTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->listPushTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SinglePushTemplateResponse[]**](../Model/SinglePushTemplateResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendPushMessages**
> \Swagger\Client\Model\SendMessageIdResponse[] sendPushMessages($body)

Send a Push Message

Send an push message to a recipient

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \stdClass); // object[] | default response

try {
    $result = $apiInstance->sendPushMessages($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->sendPushMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object[]**](../Model/object.md)| default response | [optional]

### Return type

[**\Swagger\Client\Model\SendMessageIdResponse[]**](../Model/SendMessageIdResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateApp**
> \Swagger\Client\Model\MobileAppIdResponse updateApp($id, $body)

Update App

Updates an App, given a template id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of the Push Template. Cannot be empty.
$body = new \Swagger\Client\Model\MobileAppRequest(); // \Swagger\Client\Model\MobileAppRequest | 

try {
    $result = $apiInstance->updateApp($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->updateApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of the Push Template. Cannot be empty. |
 **body** | [**\Swagger\Client\Model\MobileAppRequest**](../Model/MobileAppRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\MobileAppIdResponse**](../Model/MobileAppIdResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePushTemplate**
> \Swagger\Client\Model\SinglePushTemplateResponse updatePushTemplate($id, $body)

Update Push Template

Updates an Push template, given a template id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of the Push Template. Cannot be empty.
$body = new \Swagger\Client\Model\PushTemplateRequest(); // \Swagger\Client\Model\PushTemplateRequest | 

try {
    $result = $apiInstance->updatePushTemplate($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->updatePushTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of the Push Template. Cannot be empty. |
 **body** | [**\Swagger\Client\Model\PushTemplateRequest**](../Model/PushTemplateRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SinglePushTemplateResponse**](../Model/SinglePushTemplateResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

