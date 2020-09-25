# TemplateEmail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain** | **string** | the Domain to de used in the sender email. | [optional] 
**sender_id** | **string** | The code identification of the sender profile to be used. | 
**sender_name** | **string** | The name to be associated with the Domain to form the email. | [optional] 
**to** | **string[]** | The To field in the email. | 
**cc** | **string[]** | The Cc field in the email. | [optional] 
**bcc** | **string[]** | The Bcc field in the email. | [optional] 
**reply_to_id** | **string** | The email id for if/when the recipient responds to the email. | [optional] 
**template_id** | **string** | The id of the template to use. | 
**attachment** | [**\Swagger\Client\Model\AttachmentRequest[]**](AttachmentRequest.md) | A list of files to be attached to the emails | [optional] 
**merge_tags** | **string[]** | A list of the merge tags to replace information gaps in the email. The format of each tag should be &#x60;&#x60;tagName:tagValue&#x60;&#x60; | [optional] 
**custom_data** | **string** | Extra Data related to the campaign to be re-sent via WebHook. | [optional] 
**priority** | **string** | The priority of the message. | [optional] [default to 'non-urgent']
**registered** | **bool** | option to register the message. Its an exclusive feature for senders that require it. | [optional] [default to false]
**header** | [**\Swagger\Client\Model\HeaderOptionsRequest**](HeaderOptionsRequest.md) |  | [optional] 
**group** | **string** | The group of the message. | [optional] [default to 'default']

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

