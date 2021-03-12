# Swagger\Client\KeonApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createKeon**](KeonApi.md#createKeon) | **POST** /WasteRegister/HazardousWasteRecordCard/v1/Keon/create | Tworzenie karty
[**createKeonItem**](KeonApi.md#createKeonItem) | **POST** /WasteRegister/HazardousWasteRecordCard/v1/Keon/item/create | Tworzenie wpisu
[**deleteKeon**](KeonApi.md#deleteKeon) | **DELETE** /WasteRegister/HazardousWasteRecordCard/v1/Keon/delete | Usunięcie karty
[**deleteKeonItem**](KeonApi.md#deleteKeonItem) | **DELETE** /WasteRegister/HazardousWasteRecordCard/v1/Keon/item/delete | Usunięcie wpisu
[**editKeonItem**](KeonApi.md#editKeonItem) | **PUT** /WasteRegister/HazardousWasteRecordCard/v1/Keon/item/edit | Edycja wpisu
[**getKeon**](KeonApi.md#getKeon) | **GET** /WasteRegister/HazardousWasteRecordCard/v1/Keon/card | Informacje o karcie
[**getKeonItem**](KeonApi.md#getKeonItem) | **GET** /WasteRegister/HazardousWasteRecordCard/v1/Keon/item | Informacje o wpisie
[**getKeonPrintingPageData**](KeonApi.md#getKeonPrintingPageData) | **GET** /WasteRegister/HazardousWasteRecordCard/v1/Keon/card/printingpage | Pobranie danych karty do wydruku
[**getKeonSummary**](KeonApi.md#getKeonSummary) | **GET** /WasteRegister/HazardousWasteRecordCard/v1/Keon/summary | Zestawienie danych
[**getKeonWithKeonItems**](KeonApi.md#getKeonWithKeonItems) | **GET** /WasteRegister/HazardousWasteRecordCard/v1/Keon/card/items | Lista wpisów
[**searchKeon**](KeonApi.md#searchKeon) | **POST** /WasteRegister/HazardousWasteRecordCard/v1/Keon/search | Wyszukiwarka kart
[**searchKeonItems**](KeonApi.md#searchKeonItems) | **POST** /WasteRegister/HazardousWasteRecordCard/v1/Keon/search/keonitems | Wyszukiwarka wpisów


# **createKeon**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1KeonDto createKeon($request)

Tworzenie karty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1CreateKeonRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1CreateKeonRequest | 

try {
    $result = $apiInstance->createKeon($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeonApi->createKeon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1CreateKeonRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1CreateKeonRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1KeonDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1KeonDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createKeonItem**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1KeonItemDto createKeonItem($request)

Tworzenie wpisu

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1CreateKeonItemRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1CreateKeonItemRequest | 

try {
    $result = $apiInstance->createKeonItem($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeonApi->createKeonItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1CreateKeonItemRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1CreateKeonItemRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1KeonItemDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1KeonItemDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKeon**
> object deleteKeon($request)

Usunięcie karty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1DeleteKeonRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1DeleteKeonRequest | 

try {
    $result = $apiInstance->deleteKeon($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeonApi->deleteKeon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1DeleteKeonRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1DeleteKeonRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKeonItem**
> object deleteKeonItem($request)

Usunięcie wpisu

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1DeleteKeonItemRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1DeleteKeonItemRequest | 

try {
    $result = $apiInstance->deleteKeonItem($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeonApi->deleteKeonItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1DeleteKeonItemRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1DeleteKeonItemRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editKeonItem**
> object editKeonItem($request)

Edycja wpisu

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1EditKeonItemRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1EditKeonItemRequest | 

try {
    $result = $apiInstance->editKeonItem($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeonApi->editKeonItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1EditKeonItemRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1EditKeonItemRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKeon**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1KeonDto getKeon($keon_id)

Informacje o karcie

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keon_id = "keon_id_example"; // string | Id karty

try {
    $result = $apiInstance->getKeon($keon_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeonApi->getKeon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keon_id** | [**string**](../Model/.md)| Id karty | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1KeonDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1KeonDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKeonItem**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1KeonItemDto getKeonItem($keon_item_id)

Informacje o wpisie

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keon_item_id = "keon_item_id_example"; // string | Id wpisu z karty

try {
    $result = $apiInstance->getKeonItem($keon_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeonApi->getKeonItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keon_item_id** | [**string**](../Model/.md)| Id wpisu z karty | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1KeonItemDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1KeonItemDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKeonPrintingPageData**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1GetKeonPrintingPageDataResponse getKeonPrintingPageData($keon_id)

Pobranie danych karty do wydruku

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keon_id = "keon_id_example"; // string | Id karty

try {
    $result = $apiInstance->getKeonPrintingPageData($keon_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeonApi->getKeonPrintingPageData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keon_id** | [**string**](../Model/.md)| Id karty | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1GetKeonPrintingPageDataResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1GetKeonPrintingPageDataResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKeonSummary**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1GetKeonSummaryResponse getKeonSummary($keon_id)

Zestawienie danych

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keon_id = "keon_id_example"; // string | Id karty

try {
    $result = $apiInstance->getKeonSummary($keon_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeonApi->getKeonSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keon_id** | [**string**](../Model/.md)| Id karty | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1GetKeonSummaryResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1GetKeonSummaryResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKeonWithKeonItems**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1GetKeonWithKeonItemsResponse getKeonWithKeonItems($keon_id)

Lista wpisów

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keon_id = "keon_id_example"; // string | Id karty

try {
    $result = $apiInstance->getKeonWithKeonItems($keon_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeonApi->getKeonWithKeonItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keon_id** | [**string**](../Model/.md)| Id karty | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1GetKeonWithKeonItemsResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1GetKeonWithKeonItemsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchKeon**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1SearchKeonResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull searchKeon($request)

Wyszukiwarka kart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1SearchKeonRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1SearchKeonRequest | 

try {
    $result = $apiInstance->searchKeon($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeonApi->searchKeon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1SearchKeonRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1SearchKeonRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1SearchKeonResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull**](../Model/WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1SearchKeonResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchKeonItems**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1SearchKeonItemResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull searchKeonItems($request)

Wyszukiwarka wpisów

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1SearchKeonItemsRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1SearchKeonItemsRequest | 

try {
    $result = $apiInstance->searchKeonItems($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeonApi->searchKeonItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1SearchKeonItemsRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterHazardousWasteRecordCardV1SearchKeonItemsRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1SearchKeonItemResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull**](../Model/WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterHazardousWasteRecordCardV1SearchKeonItemResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

