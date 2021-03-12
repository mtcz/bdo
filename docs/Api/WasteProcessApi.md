# Swagger\Client\WasteProcessApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getWasteProcesses**](WasteProcessApi.md#getWasteProcesses) | **GET** /WasteRegister/v1/WasteProcess | Pełna lista procesów przetwarzania odpadów
[**searchWasteProcess**](WasteProcessApi.md#searchWasteProcess) | **POST** /WasteRegister/v1/WasteProcess/search | Wyszukuje informacje o procesie przetwarzania odpadów


# **getWasteProcesses**
> \Swagger\Client\Model\BdoServiceModelsDtoWasteRegisterWasteProcessWasteProcessDto[] getWasteProcesses()

Pełna lista procesów przetwarzania odpadów

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WasteProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWasteProcesses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WasteProcessApi->getWasteProcesses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BdoServiceModelsDtoWasteRegisterWasteProcessWasteProcessDto[]**](../Model/BdoServiceModelsDtoWasteRegisterWasteProcessWasteProcessDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchWasteProcess**
> \Swagger\Client\Model\BdoServiceModelsDtoWasteRegisterWasteProcessWasteProcessDto[] searchWasteProcess($request)

Wyszukuje informacje o procesie przetwarzania odpadów

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WasteProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteProcessV1SearchWasteProcessRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteProcessV1SearchWasteProcessRequest | 

try {
    $result = $apiInstance->searchWasteProcess($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WasteProcessApi->searchWasteProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteProcessV1SearchWasteProcessRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteProcessV1SearchWasteProcessRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\BdoServiceModelsDtoWasteRegisterWasteProcessWasteProcessDto[]**](../Model/BdoServiceModelsDtoWasteRegisterWasteProcessWasteProcessDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

