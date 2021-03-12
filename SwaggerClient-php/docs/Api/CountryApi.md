# Swagger\Client\CountryApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCountries**](CountryApi.md#getCountries) | **GET** /GeneralResources/v1/Country | Lista krajów
[**searchCountry**](CountryApi.md#searchCountry) | **POST** /GeneralResources/v1/Country/search | Wyszukiwarka krajów wg kodu


# **getCountries**
> \Swagger\Client\Model\BdoServiceModelsDtoGeneralResourcesCountryCountryDto[] getCountries()

Lista krajów

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CountryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCountries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountryApi->getCountries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BdoServiceModelsDtoGeneralResourcesCountryCountryDto[]**](../Model/BdoServiceModelsDtoGeneralResourcesCountryCountryDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchCountry**
> \Swagger\Client\Model\BdoServiceModelsDtoGeneralResourcesCountryCountryDto[] searchCountry($request)

Wyszukiwarka krajów wg kodu

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CountryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsGeneralResourcesCountryV1SearchCountryRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsGeneralResourcesCountryV1SearchCountryRequest | 

try {
    $result = $apiInstance->searchCountry($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountryApi->searchCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsGeneralResourcesCountryV1SearchCountryRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsGeneralResourcesCountryV1SearchCountryRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\BdoServiceModelsDtoGeneralResourcesCountryCountryDto[]**](../Model/BdoServiceModelsDtoGeneralResourcesCountryCountryDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

