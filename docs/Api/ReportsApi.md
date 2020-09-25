# Swagger\Client\ReportsApi

All URIs are relative to *https://slingshot.egoiapp.com/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**produceEmailReport**](ReportsApi.md#produceemailreport) | **GET** /v2/email/reports | Get Email Report
[**produceSmsReport**](ReportsApi.md#producesmsreport) | **GET** /v2/sms/reports | Get Sms Report

# **produceEmailReport**
> \Swagger\Client\Model\EmailReportResponse[] produceEmailReport($group, $group_by, $date_start, $date_end)

Get Email Report

Retrieve Mail Reports and Statistics. Entries can be customizable

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group = "group_example"; // string | The name of the group to search
$group_by = "group_by_example"; // string | The option to group the results. Can be either ``day`` or ``month``. Defaults to ``day`` if none are present
$date_start = "date_start_example"; // string | The date to start the report. Date must be in format ``yyyy-MM-dd``
$date_end = "date_end_example"; // string | The date to end the report. Date should be in format ``yyyy-MM-dd``

try {
    $result = $apiInstance->produceEmailReport($group, $group_by, $date_start, $date_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->produceEmailReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| The name of the group to search | [optional]
 **group_by** | **string**| The option to group the results. Can be either &#x60;&#x60;day&#x60;&#x60; or &#x60;&#x60;month&#x60;&#x60;. Defaults to &#x60;&#x60;day&#x60;&#x60; if none are present | [optional]
 **date_start** | **string**| The date to start the report. Date must be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; | [optional]
 **date_end** | **string**| The date to end the report. Date should be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\EmailReportResponse[]**](../Model/EmailReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **produceSmsReport**
> \Swagger\Client\Model\SmsReportResponse[] produceSmsReport($group, $group_by, $date_start, $date_end)

Get Sms Report

Retrieve Sms Reports and Statistics. Entries can be customizable

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group = "group_example"; // string | The id of the group to search
$group_by = "group_by_example"; // string | The option to group the results. Can be either ``day`` or ``month``. Defaults to ``day`` if none are present
$date_start = "date_start_example"; // string | The date to start the report. Date must be in format ``yyyy-MM-dd``
$date_end = "date_end_example"; // string | The date to end the report. Date should be in format ``yyyy-MM-dd``

try {
    $result = $apiInstance->produceSmsReport($group, $group_by, $date_start, $date_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->produceSmsReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group** | **string**| The id of the group to search | [optional]
 **group_by** | **string**| The option to group the results. Can be either &#x60;&#x60;day&#x60;&#x60; or &#x60;&#x60;month&#x60;&#x60;. Defaults to &#x60;&#x60;day&#x60;&#x60; if none are present | [optional]
 **date_start** | **string**| The date to start the report. Date must be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; | [optional]
 **date_end** | **string**| The date to end the report. Date should be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\SmsReportResponse[]**](../Model/SmsReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

