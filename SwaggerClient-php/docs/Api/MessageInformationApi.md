# Swagger\Client\MessageInformationApi

All URIs are relative to *https://slingshot.egoiapp.com/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listAllEmailMessages**](MessageInformationApi.md#listallemailmessages) | **GET** /v2/email/messages | Get All Email Messages
[**listAllSmsMessages**](MessageInformationApi.md#listallsmsmessages) | **GET** /v2/sms/messages | Get All Sms Messages
[**listSingleEmailMessage**](MessageInformationApi.md#listsingleemailmessage) | **GET** /v2/email/messages/{id} | Get Single Email Messages
[**listSingleSmsMessage**](MessageInformationApi.md#listsinglesmsmessage) | **GET** /v2/sms/messages/{id} | Get Single Sms Messages

# **listAllEmailMessages**
> \Swagger\Client\Model\PartialEmailMessageResponse[] listAllEmailMessages($group, $date_start, $date_end, $destination, $status)

Get All Email Messages

Retrieve the list of all sms messages. Results can be filtered by messages ids, group or channel. The result will be a combination of all parameters present

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\MessageInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group = "group_example"; // string | The name of the group to search
$date_start = "date_start_example"; // string | The date to start the report. Date must be in format ``yyyy-MM-dd``
$date_end = "date_end_example"; // string | The date to end the report. Date should be in format ``yyyy-MM-dd``
$destination = "destination_example"; // string | The mobile number of a recipient.
$status = "status_example"; // string | The status to check the message.

try {
    $result = $apiInstance->listAllEmailMessages($group, $date_start, $date_end, $destination, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageInformationApi->listAllEmailMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| The name of the group to search | [optional]
 **date_start** | **string**| The date to start the report. Date must be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; | [optional]
 **date_end** | **string**| The date to end the report. Date should be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; | [optional]
 **destination** | **string**| The mobile number of a recipient. | [optional]
 **status** | **string**| The status to check the message. | [optional]

### Return type

[**\Swagger\Client\Model\PartialEmailMessageResponse[]**](../Model/PartialEmailMessageResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAllSmsMessages**
> \Swagger\Client\Model\PartialSmsMessageResponse[] listAllSmsMessages($group, $date_start, $date_end, $destination, $status)

Get All Sms Messages

Retrieve the list of all sms messages. Results can be filtered by messages ids, group or channel. The result will be a combination of all parameters present

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\MessageInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group = "group_example"; // string | The name of the group to search
$date_start = "date_start_example"; // string | The date to start the report. Date must be in format ``yyyy-MM-dd``
$date_end = "date_end_example"; // string | The date to end the report. Date should be in format ``yyyy-MM-dd``
$destination = "destination_example"; // string | The mobile number of a recipient.
$status = "status_example"; // string | The status to check the message.

try {
    $result = $apiInstance->listAllSmsMessages($group, $date_start, $date_end, $destination, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageInformationApi->listAllSmsMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| The name of the group to search | [optional]
 **date_start** | **string**| The date to start the report. Date must be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; | [optional]
 **date_end** | **string**| The date to end the report. Date should be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; | [optional]
 **destination** | **string**| The mobile number of a recipient. | [optional]
 **status** | **string**| The status to check the message. | [optional]

### Return type

[**\Swagger\Client\Model\PartialSmsMessageResponse[]**](../Model/PartialSmsMessageResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSingleEmailMessage**
> \Swagger\Client\Model\CompleteEmailMessageResponse listSingleEmailMessage($id)

Get Single Email Messages

Retrieve the message with the id from path

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\MessageInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The id of the message.

try {
    $result = $apiInstance->listSingleEmailMessage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageInformationApi->listSingleEmailMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the message. |

### Return type

[**\Swagger\Client\Model\CompleteEmailMessageResponse**](../Model/CompleteEmailMessageResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSingleSmsMessage**
> \Swagger\Client\Model\CompleteSmsMessageResponse listSingleSmsMessage($id)

Get Single Sms Messages

Retrieve the message with the id from path

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\MessageInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The id of the message.

try {
    $result = $apiInstance->listSingleSmsMessage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageInformationApi->listSingleSmsMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the message. |

### Return type

[**\Swagger\Client\Model\CompleteSmsMessageResponse**](../Model/CompleteSmsMessageResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

