# ManualSMS

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string** | The contact of the recipient. format should be countryCode-phoneNumber. | 
**from** | **string** | The id of the sender. | 
**text_body** | **string** | The content of the message. | 
**encoding** | **string** | the encoding of the message. | [optional] 
**max_count** | **int** | the maximum amount of messages to be sent (if the textBody is too big for a single message). | [optional] 
**merge_tags** | **string[]** | A list of the merge tags to replace information gaps in the email. The format of each tag should be &#x60;&#x60;tagName:tagValue&#x60;&#x60; | [optional] 
**priority** | **string** | The priority of the message. | [optional] [default to 'non-urgent']
**custom_data** | **string** | Extra Data related to the campaign to be re-sent via WebHook. | [optional] 
**registered** | **bool** | option to register the message. Its an exclusive feature for senders that require it. | [optional] [default to false]
**group** | **string** | The group of the message. | [optional] [default to 'default']

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

