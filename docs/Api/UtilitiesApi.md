# Swagger\Client\UtilitiesApi

All URIs are relative to *https://slingshot.egoiapp.com/api/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**emailValidator**](UtilitiesApi.md#emailvalidator) | **POST** /v2/emailValidator | Email Validator
[**htmlToPdf**](UtilitiesApi.md#htmltopdf) | **POST** /v2/htmlToPdfConverter | HTML to PDF converter
[**pingApi**](UtilitiesApi.md#pingapi) | **GET** /v2/ping | Ping API
[**smsLengthCalculator**](UtilitiesApi.md#smslengthcalculator) | **POST** /v2/smsLengthCalculator | SMS Length Calculator
[**validatePhone**](UtilitiesApi.md#validatephone) | **GET** /v2/validate-phone/{number} | Validate Phone

# **emailValidator**
> \Swagger\Client\Model\EmailValidatorResponse emailValidator($body)

Email Validator

Validates status and heath of the email address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UtilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EmailValidatorRequest(); // \Swagger\Client\Model\EmailValidatorRequest | 

try {
    $result = $apiInstance->emailValidator($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->emailValidator: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EmailValidatorRequest**](../Model/EmailValidatorRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\EmailValidatorResponse**](../Model/EmailValidatorResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **htmlToPdf**
> \Swagger\Client\Model\HtmlToPdfResponse htmlToPdf($body)

HTML to PDF converter

Converts an HTML input (either via html string or url) to a PDF returned at base 64. Before using, please validate if your HTML content isdone accordingly to the best standards [HERE](https://validator.w3.org/)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UtilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\HtmlToPdfRequest(); // \Swagger\Client\Model\HtmlToPdfRequest | 

try {
    $result = $apiInstance->htmlToPdf($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->htmlToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\HtmlToPdfRequest**](../Model/HtmlToPdfRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\HtmlToPdfResponse**](../Model/HtmlToPdfResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pingApi**
> \Swagger\Client\Model\PingResponse pingApi()

Ping API

Send an innocuous request to the API, in order to confirm its working as intended

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UtilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->pingApi();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->pingApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PingResponse**](../Model/PingResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsLengthCalculator**
> \Swagger\Client\Model\SmsLengthCalculatorResponse smsLengthCalculator($body)

SMS Length Calculator

Calculates the sizes of an SMS text

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UtilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SmsLengthCalculatorRequest(); // \Swagger\Client\Model\SmsLengthCalculatorRequest | 

try {
    $result = $apiInstance->smsLengthCalculator($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->smsLengthCalculator: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SmsLengthCalculatorRequest**](../Model/SmsLengthCalculatorRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SmsLengthCalculatorResponse**](../Model/SmsLengthCalculatorResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validatePhone**
> \Swagger\Client\Model\ValidatePhoneResponse validatePhone($number)

Validate Phone

Checks if a phone number is valid. Can be either land line or mobile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new Swagger\Client\Api\UtilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = "number_example"; // string | The phone number to validate. must be in format ``countryCode-mobileNumber``

try {
    $result = $apiInstance->validatePhone($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->validatePhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| The phone number to validate. must be in format &#x60;&#x60;countryCode-mobileNumber&#x60;&#x60; |

### Return type

[**\Swagger\Client\Model\ValidatePhoneResponse**](../Model/ValidatePhoneResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

