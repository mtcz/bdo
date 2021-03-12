# Swagger\Client\CardStatusApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCardStatusCodeNames**](CardStatusApi.md#getCardStatusCodeNames) | **GET** /WasteRegister/v1/CardStatus | Pełna lista statusów kart


# **getCardStatusCodeNames**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesCardStatusV1CardStatusDto[] getCardStatusCodeNames()

Pełna lista statusów kart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CardStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCardStatusCodeNames();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardStatusApi->getCardStatusCodeNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesCardStatusV1CardStatusDto[]**](../Model/WasteRegisterPublicApiApiModelsResponsesCardStatusV1CardStatusDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

