# Swagger\Client\KeokApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createKeok**](KeokApi.md#createKeok) | **POST** /WasteRegister/MunicipalWasteRecordCard/v1/Keok | Tworzenie karty
[**createKeokCollectedFromRealEstateOwner**](KeokApi.md#createKeokCollectedFromRealEstateOwner) | **POST** /WasteRegister/MunicipalWasteRecordCard/v1/Keok/collectedFromRealEstateOwner | Utworzenie wpisu ze statusem \&quot;Przyjęte\&quot;
[**createKeokProcessed**](KeokApi.md#createKeokProcessed) | **POST** /WasteRegister/MunicipalWasteRecordCard/v1/Keok/processed | Utworzenie wpisu ze statusem \&quot;Przetwarzane\&quot;
[**createKeokReceived**](KeokApi.md#createKeokReceived) | **POST** /WasteRegister/MunicipalWasteRecordCard/v1/Keok/received | Tworzenie wpisu ze statusem \&quot;Odbiór\&quot;
[**createKeokTransferred**](KeokApi.md#createKeokTransferred) | **POST** /WasteRegister/MunicipalWasteRecordCard/v1/Keok/transferred | Utworzenie wpisu ze statusem \&quot;Przekazane\&quot;
[**deleteKeok**](KeokApi.md#deleteKeok) | **DELETE** /WasteRegister/MunicipalWasteRecordCard/v1/Keok | Usunięcie karty
[**deleteKeokCollectedFromRealEstateOwner**](KeokApi.md#deleteKeokCollectedFromRealEstateOwner) | **DELETE** /WasteRegister/MunicipalWasteRecordCard/v1/Keok/collectedFromRealEstateOwner | Usunięcie wpisu ze statusem \&quot;Przyjęte\&quot;
[**deleteKeokProcessed**](KeokApi.md#deleteKeokProcessed) | **DELETE** /WasteRegister/MunicipalWasteRecordCard/v1/Keok/processed | Edycja wpisu ze statusem \&quot;Przekazane\&quot;
[**deleteKeokReceived**](KeokApi.md#deleteKeokReceived) | **DELETE** /WasteRegister/MunicipalWasteRecordCard/v1/Keok/received | Usunięcie wpisu ze statusem \&quot;Odbiór\&quot;
[**deleteKeokTransferred**](KeokApi.md#deleteKeokTransferred) | **DELETE** /WasteRegister/MunicipalWasteRecordCard/v1/Keok/transferred | Usunięcie wpisu ze statusem \&quot;Przekazane\&quot;
[**getKeok**](KeokApi.md#getKeok) | **GET** /WasteRegister/MunicipalWasteRecordCard/v1/Keok | Informacje o karcie
[**getKeokCollectedFromRealEstateOwner**](KeokApi.md#getKeokCollectedFromRealEstateOwner) | **GET** /WasteRegister/MunicipalWasteRecordCard/v1/Keok/collectedFromRealEstateOwner | Informacje o wpisie ze statusem \&quot;Przyjęte\&quot;
[**getKeokPrintingPageData**](KeokApi.md#getKeokPrintingPageData) | **GET** /WasteRegister/MunicipalWasteRecordCard/v1/Keok/card/printingpage | Pobranie danych karty do wydruku
[**getKeokProcessed**](KeokApi.md#getKeokProcessed) | **GET** /WasteRegister/MunicipalWasteRecordCard/v1/Keok/processed | Informacje o wpisie ze statusem \&quot;Przetwarzane\&quot;
[**getKeokReceived**](KeokApi.md#getKeokReceived) | **GET** /WasteRegister/MunicipalWasteRecordCard/v1/Keok/received | Informacje o wpisie ze statusem \&quot;Odbiór\&quot;
[**getKeokTransferred**](KeokApi.md#getKeokTransferred) | **GET** /WasteRegister/MunicipalWasteRecordCard/v1/Keok/transferred | Informacje o wpisie ze statusem \&quot;Przekazane\&quot;
[**searchKeok**](KeokApi.md#searchKeok) | **POST** /WasteRegister/MunicipalWasteRecordCard/v1/Keok/search | Wyszukiwarka kart
[**searchKeokCollectedFromRealEstateOwner**](KeokApi.md#searchKeokCollectedFromRealEstateOwner) | **POST** /WasteRegister/MunicipalWasteRecordCard/v1/Keok/collectedFromRealEstateOwner/search | Wyszukiwarka wpisów ze statusem \&quot;Przyjęte\&quot;
[**searchKeokProcessed**](KeokApi.md#searchKeokProcessed) | **POST** /WasteRegister/MunicipalWasteRecordCard/v1/Keok/processed/search | Wyszukiwarka wpisów ze statusem \&quot;Przetwarzane\&quot;
[**searchKeokReceived**](KeokApi.md#searchKeokReceived) | **POST** /WasteRegister/MunicipalWasteRecordCard/v1/Keok/received/search | Wyszukiwarka wpisów ze statusem \&quot;Odbiór\&quot;
[**searchKeokTransferred**](KeokApi.md#searchKeokTransferred) | **POST** /WasteRegister/MunicipalWasteRecordCard/v1/Keok/transferred/search | Wyszukiwarka wpisów ze statusem \&quot;Przekazane\&quot;
[**updateKeok**](KeokApi.md#updateKeok) | **PUT** /WasteRegister/MunicipalWasteRecordCard/v1/Keok | Edycja karty
[**updateKeokCollectedFromRealEstateOwner**](KeokApi.md#updateKeokCollectedFromRealEstateOwner) | **PUT** /WasteRegister/MunicipalWasteRecordCard/v1/Keok/collectedFromRealEstateOwner | Edycja wpisu ze statusem \&quot;Przyjęte\&quot;
[**updateKeokProcessed**](KeokApi.md#updateKeokProcessed) | **PUT** /WasteRegister/MunicipalWasteRecordCard/v1/Keok/processed | Edycja wpisu ze statusem \&quot;Przetwarzane\&quot;
[**updateKeokReceived**](KeokApi.md#updateKeokReceived) | **PUT** /WasteRegister/MunicipalWasteRecordCard/v1/Keok/received | Edycja wpisu ze statusem \&quot;Odbiór\&quot;
[**updateKeokTransferred**](KeokApi.md#updateKeokTransferred) | **PUT** /WasteRegister/MunicipalWasteRecordCard/v1/Keok/transferred | Edycja wpisu ze statusem \&quot;Przekazane\&quot;


# **createKeok**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1CreateKeokResponse createKeok($request)

Tworzenie karty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokV1CreateKeokRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokV1CreateKeokRequest | 

try {
    $result = $apiInstance->createKeok($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->createKeok: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokV1CreateKeokRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokV1CreateKeokRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1CreateKeokResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1CreateKeokResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createKeokCollectedFromRealEstateOwner**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1CreateKeokCollectedFromRealEstateOwnerResponse createKeokCollectedFromRealEstateOwner($request)

Utworzenie wpisu ze statusem \"Przyjęte\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokCollectedFromRealEstateOwnerV1CreateKeokCollectedFromRealEstateOwnerRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokCollectedFromRealEstateOwnerV1CreateKeokCollectedFromRealEstateOwnerRequest | 

try {
    $result = $apiInstance->createKeokCollectedFromRealEstateOwner($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->createKeokCollectedFromRealEstateOwner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokCollectedFromRealEstateOwnerV1CreateKeokCollectedFromRealEstateOwnerRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokCollectedFromRealEstateOwnerV1CreateKeokCollectedFromRealEstateOwnerRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1CreateKeokCollectedFromRealEstateOwnerResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1CreateKeokCollectedFromRealEstateOwnerResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createKeokProcessed**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1CreateKeokProcessedResponse createKeokProcessed($request)

Utworzenie wpisu ze statusem \"Przetwarzane\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokProcessedV1CreateKeokProcessedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokProcessedV1CreateKeokProcessedRequest | 

try {
    $result = $apiInstance->createKeokProcessed($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->createKeokProcessed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokProcessedV1CreateKeokProcessedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokProcessedV1CreateKeokProcessedRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1CreateKeokProcessedResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1CreateKeokProcessedResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createKeokReceived**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1CreateKeokReceivedResponse createKeokReceived($request)

Tworzenie wpisu ze statusem \"Odbiór\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokReceivedV1CreateKeokReceivedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokReceivedV1CreateKeokReceivedRequest | 

try {
    $result = $apiInstance->createKeokReceived($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->createKeokReceived: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokReceivedV1CreateKeokReceivedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokReceivedV1CreateKeokReceivedRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1CreateKeokReceivedResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1CreateKeokReceivedResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createKeokTransferred**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1CreateKeokTransferredResponse createKeokTransferred($request)

Utworzenie wpisu ze statusem \"Przekazane\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokTransferredV1CreateKeokTransferredRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokTransferredV1CreateKeokTransferredRequest | 

try {
    $result = $apiInstance->createKeokTransferred($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->createKeokTransferred: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokTransferredV1CreateKeokTransferredRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokTransferredV1CreateKeokTransferredRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1CreateKeokTransferredResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1CreateKeokTransferredResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKeok**
> object deleteKeok($request)

Usunięcie karty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokV1DeleteKeokRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokV1DeleteKeokRequest | 

try {
    $result = $apiInstance->deleteKeok($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->deleteKeok: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokV1DeleteKeokRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokV1DeleteKeokRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKeokCollectedFromRealEstateOwner**
> object deleteKeokCollectedFromRealEstateOwner($request)

Usunięcie wpisu ze statusem \"Przyjęte\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokCollectedFromRealEstateOwnerV1DeleteKeokCollectedFromRealEstateOwnerRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokCollectedFromRealEstateOwnerV1DeleteKeokCollectedFromRealEstateOwnerRequest | 

try {
    $result = $apiInstance->deleteKeokCollectedFromRealEstateOwner($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->deleteKeokCollectedFromRealEstateOwner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokCollectedFromRealEstateOwnerV1DeleteKeokCollectedFromRealEstateOwnerRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokCollectedFromRealEstateOwnerV1DeleteKeokCollectedFromRealEstateOwnerRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKeokProcessed**
> object deleteKeokProcessed($request)

Edycja wpisu ze statusem \"Przekazane\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokProcessedV1DeleteKeokProcessedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokProcessedV1DeleteKeokProcessedRequest | 

try {
    $result = $apiInstance->deleteKeokProcessed($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->deleteKeokProcessed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokProcessedV1DeleteKeokProcessedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokProcessedV1DeleteKeokProcessedRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKeokReceived**
> object deleteKeokReceived($request)

Usunięcie wpisu ze statusem \"Odbiór\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokReceivedV1DeleteKeokReceivedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokReceivedV1DeleteKeokReceivedRequest | 

try {
    $result = $apiInstance->deleteKeokReceived($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->deleteKeokReceived: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokReceivedV1DeleteKeokReceivedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokReceivedV1DeleteKeokReceivedRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKeokTransferred**
> object deleteKeokTransferred($request)

Usunięcie wpisu ze statusem \"Przekazane\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokTransferredV1DeleteKeokTransferredRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokTransferredV1DeleteKeokTransferredRequest | 

try {
    $result = $apiInstance->deleteKeokTransferred($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->deleteKeokTransferred: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokTransferredV1DeleteKeokTransferredRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokTransferredV1DeleteKeokTransferredRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKeok**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1GetKeokResponse getKeok($keok_id)

Informacje o karcie

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keok_id = "keok_id_example"; // string | Id karty

try {
    $result = $apiInstance->getKeok($keok_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->getKeok: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keok_id** | [**string**](../Model/.md)| Id karty | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1GetKeokResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1GetKeokResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKeokCollectedFromRealEstateOwner**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1GetKeokCollectedFromRealEstateOwnerResponse getKeokCollectedFromRealEstateOwner($keok_collected_from_real_estate_owner_id)

Informacje o wpisie ze statusem \"Przyjęte\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keok_collected_from_real_estate_owner_id = "keok_collected_from_real_estate_owner_id_example"; // string | 

try {
    $result = $apiInstance->getKeokCollectedFromRealEstateOwner($keok_collected_from_real_estate_owner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->getKeokCollectedFromRealEstateOwner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keok_collected_from_real_estate_owner_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1GetKeokCollectedFromRealEstateOwnerResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1GetKeokCollectedFromRealEstateOwnerResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKeokPrintingPageData**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1GetKeokPrintingPageDataResponse getKeokPrintingPageData($keok_id)

Pobranie danych karty do wydruku

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keok_id = "keok_id_example"; // string | Id karty

try {
    $result = $apiInstance->getKeokPrintingPageData($keok_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->getKeokPrintingPageData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keok_id** | [**string**](../Model/.md)| Id karty | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1GetKeokPrintingPageDataResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1GetKeokPrintingPageDataResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKeokProcessed**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1GetKeokProcessedResponse getKeokProcessed($keok_processed_id)

Informacje o wpisie ze statusem \"Przetwarzane\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keok_processed_id = "keok_processed_id_example"; // string | 

try {
    $result = $apiInstance->getKeokProcessed($keok_processed_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->getKeokProcessed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keok_processed_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1GetKeokProcessedResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1GetKeokProcessedResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKeokReceived**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1GetKeokReceivedResponse getKeokReceived($keok_received_id)

Informacje o wpisie ze statusem \"Odbiór\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keok_received_id = "keok_received_id_example"; // string | Id wpisu o statusie \"Odbiór\"

try {
    $result = $apiInstance->getKeokReceived($keok_received_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->getKeokReceived: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keok_received_id** | [**string**](../Model/.md)| Id wpisu o statusie \&quot;Odbiór\&quot; | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1GetKeokReceivedResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1GetKeokReceivedResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKeokTransferred**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1GetKeokTransferredResponse getKeokTransferred($keok_transferred_id)

Informacje o wpisie ze statusem \"Przekazane\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keok_transferred_id = "keok_transferred_id_example"; // string | 

try {
    $result = $apiInstance->getKeokTransferred($keok_transferred_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->getKeokTransferred: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keok_transferred_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1GetKeokTransferredResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1GetKeokTransferredResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchKeok**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1KeokListItemWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull searchKeok($request)

Wyszukiwarka kart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokV1SearchKeokRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokV1SearchKeokRequest | 

try {
    $result = $apiInstance->searchKeok($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->searchKeok: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokV1SearchKeokRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokV1SearchKeokRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1KeokListItemWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull**](../Model/WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1KeokListItemWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchKeokCollectedFromRealEstateOwner**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1SearchKeokCollectedFromRealEstateOwnerResponse searchKeokCollectedFromRealEstateOwner($request)

Wyszukiwarka wpisów ze statusem \"Przyjęte\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokCollectedFromRealEstateOwnerV1SearchKeokCollectedFromRealEstateOwnerRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokCollectedFromRealEstateOwnerV1SearchKeokCollectedFromRealEstateOwnerRequest | 

try {
    $result = $apiInstance->searchKeokCollectedFromRealEstateOwner($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->searchKeokCollectedFromRealEstateOwner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokCollectedFromRealEstateOwnerV1SearchKeokCollectedFromRealEstateOwnerRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokCollectedFromRealEstateOwnerV1SearchKeokCollectedFromRealEstateOwnerRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1SearchKeokCollectedFromRealEstateOwnerResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1SearchKeokCollectedFromRealEstateOwnerResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchKeokProcessed**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1SearchKeokProcessedResponse searchKeokProcessed($request)

Wyszukiwarka wpisów ze statusem \"Przetwarzane\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokProcessedV1SearchKeokProcessedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokProcessedV1SearchKeokProcessedRequest | 

try {
    $result = $apiInstance->searchKeokProcessed($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->searchKeokProcessed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokProcessedV1SearchKeokProcessedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokProcessedV1SearchKeokProcessedRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1SearchKeokProcessedResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1SearchKeokProcessedResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchKeokReceived**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1SearchKeokReceivedResponse searchKeokReceived($request)

Wyszukiwarka wpisów ze statusem \"Odbiór\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokReceivedV1SearchKeokReceivedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokReceivedV1SearchKeokReceivedRequest | 

try {
    $result = $apiInstance->searchKeokReceived($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->searchKeokReceived: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokReceivedV1SearchKeokReceivedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokReceivedV1SearchKeokReceivedRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1SearchKeokReceivedResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1SearchKeokReceivedResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchKeokTransferred**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1SearchKeokTransferredResponse searchKeokTransferred($request)

Wyszukiwarka wpisów ze statusem \"Przekazane\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokTransferredV1SearchKeokTransferredRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokTransferredV1SearchKeokTransferredRequest | 

try {
    $result = $apiInstance->searchKeokTransferred($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->searchKeokTransferred: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokTransferredV1SearchKeokTransferredRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokTransferredV1SearchKeokTransferredRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1SearchKeokTransferredResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteRecordCardV1SearchKeokTransferredResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateKeok**
> object updateKeok($request)

Edycja karty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokV1UpdateKeokRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokV1UpdateKeokRequest | 

try {
    $result = $apiInstance->updateKeok($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->updateKeok: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokV1UpdateKeokRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokV1UpdateKeokRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateKeokCollectedFromRealEstateOwner**
> object updateKeokCollectedFromRealEstateOwner($request)

Edycja wpisu ze statusem \"Przyjęte\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokCollectedFromRealEstateOwnerV1UpdateKeokCollectedFromRealEstateOwnerRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokCollectedFromRealEstateOwnerV1UpdateKeokCollectedFromRealEstateOwnerRequest | 

try {
    $result = $apiInstance->updateKeokCollectedFromRealEstateOwner($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->updateKeokCollectedFromRealEstateOwner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokCollectedFromRealEstateOwnerV1UpdateKeokCollectedFromRealEstateOwnerRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokCollectedFromRealEstateOwnerV1UpdateKeokCollectedFromRealEstateOwnerRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateKeokProcessed**
> object updateKeokProcessed($request)

Edycja wpisu ze statusem \"Przetwarzane\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokProcessedV1UpdateKeokProcessedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokProcessedV1UpdateKeokProcessedRequest | 

try {
    $result = $apiInstance->updateKeokProcessed($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->updateKeokProcessed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokProcessedV1UpdateKeokProcessedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokProcessedV1UpdateKeokProcessedRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateKeokReceived**
> object updateKeokReceived($request)

Edycja wpisu ze statusem \"Odbiór\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokReceivedV1UpdateKeokReceivedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokReceivedV1UpdateKeokReceivedRequest | 

try {
    $result = $apiInstance->updateKeokReceived($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->updateKeokReceived: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokReceivedV1UpdateKeokReceivedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokReceivedV1UpdateKeokReceivedRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateKeokTransferred**
> object updateKeokTransferred($request)

Edycja wpisu ze statusem \"Przekazane\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokTransferredV1UpdateKeokTransferredRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokTransferredV1UpdateKeokTransferredRequest | 

try {
    $result = $apiInstance->updateKeokTransferred($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeokApi->updateKeokTransferred: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokTransferredV1UpdateKeokTransferredRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteRecordCardKeokTransferredV1UpdateKeokTransferredRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

