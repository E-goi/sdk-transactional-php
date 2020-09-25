# AlertTemplateResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | the name to coloquially address the alert. | [optional] 
**interval** | **int** | The interval in seconds between messages to the recipient(s). Maximum interval is 86400 seconds (24 hours). | 
**max_attempts** | **int** | The maximum amount of attempts to be made. | 
**template_id** | **string** | the id of the message template existent in the system. | [optional] 
**subject** | **string** | the subject of the message. only used in email alerts. | [optional] 
**html_body** | **string** | the html version of the body of the message. only used in email alerts. | [optional] 
**text_body** | **string** | the text version of the message. | [optional] 
**channel** | **string** | the text version of the message. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

