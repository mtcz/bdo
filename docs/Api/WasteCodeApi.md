# Swagger\Client\WasteCodeApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getWasteCodes**](WasteCodeApi.md#getWasteCodes) | **GET** /WasteRegister/v1/WasteCode | Pełna lista kodów odpadów (UWAGA: Z przyczyn wydajnościowych, prosimy o zapisanie pobranej listy w lokalnej bazie danych i korzystanie z tej metody możliwie rzadko)
[**searchWasteCode**](WasteCodeApi.md#searchWasteCode) | **POST** /WasteRegister/v1/WasteCode/search | Wyszukuje informacje o kodzie odpadów


# **getWasteCodes**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteCodeV1WasteCodeDto[] getWasteCodes()

Pełna lista kodów odpadów (UWAGA: Z przyczyn wydajnościowych, prosimy o zapisanie pobranej listy w lokalnej bazie danych i korzystanie z tej metody możliwie rzadko)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WasteCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWasteCodes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WasteCodeApi->getWasteCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteCodeV1WasteCodeDto[]**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteCodeV1WasteCodeDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchWasteCode**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteCodeV1WasteCodeDto[] searchWasteCode($request)

Wyszukuje informacje o kodzie odpadów

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WasteCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteCodeV1SearchWasteCodeRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteCodeV1SearchWasteCodeRequest | 

try {
    $result = $apiInstance->searchWasteCode($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WasteCodeApi->searchWasteCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteCodeV1SearchWasteCodeRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteCodeV1SearchWasteCodeRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteCodeV1WasteCodeDto[]**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteCodeV1WasteCodeDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

