# VerifyRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender_id** | **string** | The id of the sender. | 
**to** | **string** | The phone number of the recipient of the code. Format should be &#x60;countryCode&#x60;-&#x60;phoneNumber&#x60; | 
**message** | **string** | the message that the user is going to receive. location of the code should be given by using the tag {{ code }}. All instances of {{ code }} will be replaced with a code that is in accordance with the settings. If the tag is not present, the code will be added at the end of the message. | [optional] 
**code_length** | **int** | the length of the code in characters. Maximum is 20 characters. Default is 6 characters. | [optional] [default to 6]
**code_validity** | **int** | the period of time the code is valid after the message has been sent, in seconds. Defaults to 600 seconds (10 min). Maximum validity is 3600 seconds (1 hour). | [optional] [default to 600]
**code_type** | **string** | the format of the code. can be:  Format | Description | RegEx --- | --- | --- numeric | numbers | [0-9] alpha | letters | [A-Z] alphanumeric | numbers and letters | [0-9A-Z] hexa | numbers and letters up to F | [0-9A-F] | [optional] [default to 'numeric']

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

