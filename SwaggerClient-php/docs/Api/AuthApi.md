# Swagger\Client\AuthApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateEupAccessToken**](AuthApi.md#generateEupAccessToken) | **POST** /WasteRegister/v1/Auth/generateEupAccessToken | 
[**getEupList**](AuthApi.md#getEupList) | **POST** /WasteRegister/v1/Auth/getEupList | 


# **generateEupAccessToken**
> \Swagger\Client\Model\WasteRegisterPublicApiSecurityDtoJwtAccessToken generateEupAccessToken($request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsAuthV1JwtRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsAuthV1JwtRequest | 

try {
    $result = $apiInstance->generateEupAccessToken($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->generateEupAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsAuthV1JwtRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsAuthV1JwtRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiSecurityDtoJwtAccessToken**](../Model/WasteRegisterPublicApiSecurityDtoJwtAccessToken.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEupList**
> \Swagger\Client\Model\BDOApiClientModelsPaginatedPageCompanyEupDto getEupList($request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsAuthV1EupRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsAuthV1EupRequest | 

try {
    $result = $apiInstance->getEupList($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getEupList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsAuthV1EupRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsAuthV1EupRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\BDOApiClientModelsPaginatedPageCompanyEupDto**](../Model/BDOApiClientModelsPaginatedPageCompanyEupDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

