# Swagger\Client\KeoApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createKeo**](KeoApi.md#createKeo) | **POST** /WasteRegister/WasteRecordCard/v1/Keo/create | Tworzenie karty
[**createKeoCollected**](KeoApi.md#createKeoCollected) | **POST** /WasteRegister/WasteRecordCard/v1/Keo/KeoCollected/create | Tworzy wpis ze statusem \&quot;Przyjęte\&quot;
[**createKeoExcavated**](KeoApi.md#createKeoExcavated) | **POST** /WasteRegister/WasteRecordCard/v1/Keo/KeoExcavated/create | Tworzy wpis ze statusem \&quot;Wydobyte\&quot;
[**createKeoForwarded**](KeoApi.md#createKeoForwarded) | **POST** /WasteRegister/WasteRecordCard/v1/Keo/KeoForwarded/create | Tworzy wpis ze statusem \&quot;Przekazane\&quot;
[**createKeoGenerated**](KeoApi.md#createKeoGenerated) | **POST** /WasteRegister/WasteRecordCard/v1/Keo/KeoGenerated/create | Tworzy wpis ze statusem \&quot;Wytworzone\&quot;
[**createKeoTreated**](KeoApi.md#createKeoTreated) | **POST** /WasteRegister/WasteRecordCard/v1/Keo/KeoTreated/create | Tworzy wpis ze statusem \&quot;Przetwarzane\&quot;
[**deleteKeo**](KeoApi.md#deleteKeo) | **DELETE** /WasteRegister/WasteRecordCard/v1/Keo/delete | Usunięcie karty
[**deleteKeoCollected**](KeoApi.md#deleteKeoCollected) | **DELETE** /WasteRegister/WasteRecordCard/v1/Keo/KeoCollected/delete | Usunięcie wpisu ze statusem \&quot;Przyjęte\&quot;
[**deleteKeoExcavated**](KeoApi.md#deleteKeoExcavated) | **DELETE** /WasteRegister/WasteRecordCard/v1/Keo/KeoExcavated/delete | Usunięcie wpisu ze statusem \&quot;Wydobyte\&quot;
[**deleteKeoForwarded**](KeoApi.md#deleteKeoForwarded) | **DELETE** /WasteRegister/WasteRecordCard/v1/Keo/KeoForwarded/delete | Usunięcie wpisu ze statusem \&quot;Przekazane\&quot;
[**deleteKeoGenerated**](KeoApi.md#deleteKeoGenerated) | **DELETE** /WasteRegister/WasteRecordCard/v1/Keo/KeoGenerated/delete | Usunięcie wpisu ze statusem \&quot;Wytworzone\&quot;
[**deleteKeoTreated**](KeoApi.md#deleteKeoTreated) | **DELETE** /WasteRegister/WasteRecordCard/v1/Keo/KeoTreated/delete | Usunięcie wpisu ze statusem \&quot;Przetwarzane\&quot;
[**getKeo**](KeoApi.md#getKeo) | **GET** /WasteRegister/WasteRecordCard/v1/Keo/card | Pobranie karty
[**getKeoCollected**](KeoApi.md#getKeoCollected) | **GET** /WasteRegister/WasteRecordCard/v1/Keo/KeoCollected/card | Informacje o wpisie ze statusem \&quot;Przyjęte\&quot;
[**getKeoExcavated**](KeoApi.md#getKeoExcavated) | **GET** /WasteRegister/WasteRecordCard/v1/Keo/KeoExcavated/card | Informacje o wpisie ze statusem \&quot;Wydobyte\&quot;
[**getKeoForwarded**](KeoApi.md#getKeoForwarded) | **GET** /WasteRegister/WasteRecordCard/v1/Keo/KeoForwarded/card | Informacje o wpisie ze statusem \&quot;Przekazane\&quot;
[**getKeoGenerated**](KeoApi.md#getKeoGenerated) | **GET** /WasteRegister/WasteRecordCard/v1/Keo/KeoGenerated/card | Informacje o wpisie ze statusem \&quot;Wytworzone\&quot;
[**getKeoPrintingPage**](KeoApi.md#getKeoPrintingPage) | **GET** /WasteRegister/WasteRecordCard/v1/Keo/card/printingpage | Pobranie danych karty do wydruku
[**getKeoTreated**](KeoApi.md#getKeoTreated) | **GET** /WasteRegister/WasteRecordCard/v1/Keo/KeoTreated/card | Informacje o wpisie ze statusem \&quot;Przetwarzane\&quot;
[**searchKeo**](KeoApi.md#searchKeo) | **POST** /WasteRegister/WasteRecordCard/v1/Keo/search | Wyszukiwarka kart
[**searchKeoCollected**](KeoApi.md#searchKeoCollected) | **POST** /WasteRegister/WasteRecordCard/v1/Keo/KeoCollected/search | Wyszukiwarka wpisów ze statusem \&quot;Przyjęte\&quot;
[**searchKeoExcavated**](KeoApi.md#searchKeoExcavated) | **POST** /WasteRegister/WasteRecordCard/v1/Keo/KeoExcavated/search | Wyszukiwarka wpisów ze statusem \&quot;Wydobyte\&quot;
[**searchKeoForwarded**](KeoApi.md#searchKeoForwarded) | **POST** /WasteRegister/WasteRecordCard/v1/Keo/KeoForwarded/search | Wyszukiwarka wpisów ze statusem \&quot;Przekazane\&quot;
[**searchKeoGenerated**](KeoApi.md#searchKeoGenerated) | **POST** /WasteRegister/WasteRecordCard/v1/Keo/KeoGenerated/search | Wyszukiwarka wpisów ze statusem \&quot;Wytworzone\&quot;
[**searchKeoTreated**](KeoApi.md#searchKeoTreated) | **POST** /WasteRegister/WasteRecordCard/v1/Keo/KeoTreated/search | Wyszukiwarka wpisów ze statusem \&quot;Przetwarzane\&quot;
[**updateCollectedKeo**](KeoApi.md#updateCollectedKeo) | **PUT** /WasteRegister/WasteRecordCard/v1/Keo/KeoCollected/update | Edycja wpisu ze statusem \&quot;Przyjęte\&quot;
[**updateExcavatedKeo**](KeoApi.md#updateExcavatedKeo) | **PUT** /WasteRegister/WasteRecordCard/v1/Keo/KeoExcavated/update | Edycja wpisu ze statusem \&quot;Wydobyte\&quot;
[**updateForwardedKeo**](KeoApi.md#updateForwardedKeo) | **PUT** /WasteRegister/WasteRecordCard/v1/Keo/KeoForwarded/update | Edycja wpisu ze statusem \&quot;Przekazane\&quot;
[**updateGeneratedKeo**](KeoApi.md#updateGeneratedKeo) | **PUT** /WasteRegister/WasteRecordCard/v1/Keo/KeoGenerated/update | Edycja wpisu ze statusem \&quot;Wytworzone\&quot;
[**updateKeo**](KeoApi.md#updateKeo) | **PUT** /WasteRegister/WasteRecordCard/v1/Keo/update | Edycja karty
[**updateTreatedKeo**](KeoApi.md#updateTreatedKeo) | **PUT** /WasteRegister/WasteRecordCard/v1/Keo/KeoTreated/update | Edycja wpisu ze statusem \&quot;Przetwarzane\&quot;


# **createKeo**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoDto createKeo($request)

Tworzenie karty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardV1CreateKeoRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardV1CreateKeoRequest | 

try {
    $result = $apiInstance->createKeo($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->createKeo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardV1CreateKeoRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardV1CreateKeoRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createKeoCollected**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoCollectedDto createKeoCollected($request)

Tworzy wpis ze statusem \"Przyjęte\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoCollectedV1CreateKeoCollectedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoCollectedV1CreateKeoCollectedRequest | 

try {
    $result = $apiInstance->createKeoCollected($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->createKeoCollected: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoCollectedV1CreateKeoCollectedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoCollectedV1CreateKeoCollectedRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoCollectedDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoCollectedDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createKeoExcavated**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoExcavatedDto createKeoExcavated($request)

Tworzy wpis ze statusem \"Wydobyte\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoExcavatedV1CreateKeoExcavatedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoExcavatedV1CreateKeoExcavatedRequest | 

try {
    $result = $apiInstance->createKeoExcavated($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->createKeoExcavated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoExcavatedV1CreateKeoExcavatedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoExcavatedV1CreateKeoExcavatedRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoExcavatedDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoExcavatedDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createKeoForwarded**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoForwardedDto createKeoForwarded($request)

Tworzy wpis ze statusem \"Przekazane\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoForwardedV1CreateKeoForwardedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoForwardedV1CreateKeoForwardedRequest | 

try {
    $result = $apiInstance->createKeoForwarded($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->createKeoForwarded: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoForwardedV1CreateKeoForwardedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoForwardedV1CreateKeoForwardedRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoForwardedDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoForwardedDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createKeoGenerated**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoGeneratedDto createKeoGenerated($request)

Tworzy wpis ze statusem \"Wytworzone\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoGeneratedV1CreateKeoGeneratedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoGeneratedV1CreateKeoGeneratedRequest | 

try {
    $result = $apiInstance->createKeoGenerated($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->createKeoGenerated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoGeneratedV1CreateKeoGeneratedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoGeneratedV1CreateKeoGeneratedRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoGeneratedDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoGeneratedDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createKeoTreated**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoTreatedDto createKeoTreated($request)

Tworzy wpis ze statusem \"Przetwarzane\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoTreatedV1CreateKeoTreatedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoTreatedV1CreateKeoTreatedRequest | 

try {
    $result = $apiInstance->createKeoTreated($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->createKeoTreated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoTreatedV1CreateKeoTreatedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoTreatedV1CreateKeoTreatedRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoTreatedDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoTreatedDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKeo**
> object deleteKeo($request)

Usunięcie karty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardV1DeleteKeoRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardV1DeleteKeoRequest | 

try {
    $result = $apiInstance->deleteKeo($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->deleteKeo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardV1DeleteKeoRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardV1DeleteKeoRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKeoCollected**
> object deleteKeoCollected($request)

Usunięcie wpisu ze statusem \"Przyjęte\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoCollectedV1DeleteKeoCollectedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoCollectedV1DeleteKeoCollectedRequest | 

try {
    $result = $apiInstance->deleteKeoCollected($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->deleteKeoCollected: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoCollectedV1DeleteKeoCollectedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoCollectedV1DeleteKeoCollectedRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKeoExcavated**
> object deleteKeoExcavated($request)

Usunięcie wpisu ze statusem \"Wydobyte\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoExcavatedV1DeleteKeoExcavatedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoExcavatedV1DeleteKeoExcavatedRequest | 

try {
    $result = $apiInstance->deleteKeoExcavated($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->deleteKeoExcavated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoExcavatedV1DeleteKeoExcavatedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoExcavatedV1DeleteKeoExcavatedRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKeoForwarded**
> object deleteKeoForwarded($request)

Usunięcie wpisu ze statusem \"Przekazane\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoForwardedV1DeleteKeoForwardedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoForwardedV1DeleteKeoForwardedRequest | 

try {
    $result = $apiInstance->deleteKeoForwarded($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->deleteKeoForwarded: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoForwardedV1DeleteKeoForwardedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoForwardedV1DeleteKeoForwardedRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKeoGenerated**
> object deleteKeoGenerated($request)

Usunięcie wpisu ze statusem \"Wytworzone\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoGeneratedV1DeleteKeoGeneratedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoGeneratedV1DeleteKeoGeneratedRequest | 

try {
    $result = $apiInstance->deleteKeoGenerated($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->deleteKeoGenerated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoGeneratedV1DeleteKeoGeneratedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoGeneratedV1DeleteKeoGeneratedRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKeoTreated**
> object deleteKeoTreated($request)

Usunięcie wpisu ze statusem \"Przetwarzane\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoTreatedV1DeleteKeoTreatedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoTreatedV1DeleteKeoTreatedRequest | 

try {
    $result = $apiInstance->deleteKeoTreated($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->deleteKeoTreated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoTreatedV1DeleteKeoTreatedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoTreatedV1DeleteKeoTreatedRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKeo**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoDto getKeo($keo_id)

Pobranie karty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keo_id = "keo_id_example"; // string | Id Karty Ewidencji Odpadów

try {
    $result = $apiInstance->getKeo($keo_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->getKeo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keo_id** | [**string**](../Model/.md)| Id Karty Ewidencji Odpadów | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKeoCollected**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoCollectedDto getKeoCollected($keo_collected_id)

Informacje o wpisie ze statusem \"Przyjęte\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keo_collected_id = "keo_collected_id_example"; // string | Id wpisu o statusie \"Przyjęte\"

try {
    $result = $apiInstance->getKeoCollected($keo_collected_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->getKeoCollected: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keo_collected_id** | [**string**](../Model/.md)| Id wpisu o statusie \&quot;Przyjęte\&quot; | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoCollectedDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoCollectedDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKeoExcavated**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoExcavatedDto getKeoExcavated($keo_excavated_id)

Informacje o wpisie ze statusem \"Wydobyte\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keo_excavated_id = "keo_excavated_id_example"; // string | Id wpisu dotyczącego wydobytych odpadów

try {
    $result = $apiInstance->getKeoExcavated($keo_excavated_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->getKeoExcavated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keo_excavated_id** | [**string**](../Model/.md)| Id wpisu dotyczącego wydobytych odpadów | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoExcavatedDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoExcavatedDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKeoForwarded**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoForwardedDto getKeoForwarded($keo_forwarded_id)

Informacje o wpisie ze statusem \"Przekazane\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keo_forwarded_id = "keo_forwarded_id_example"; // string | Id wpisu dotyczącego przekazanych odpadów

try {
    $result = $apiInstance->getKeoForwarded($keo_forwarded_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->getKeoForwarded: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keo_forwarded_id** | [**string**](../Model/.md)| Id wpisu dotyczącego przekazanych odpadów | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoForwardedDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoForwardedDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKeoGenerated**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoGeneratedDto getKeoGenerated($keo_generated_id)

Informacje o wpisie ze statusem \"Wytworzone\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keo_generated_id = "keo_generated_id_example"; // string | Id wpisu dotyczącego wytworzonych odpadów

try {
    $result = $apiInstance->getKeoGenerated($keo_generated_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->getKeoGenerated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keo_generated_id** | [**string**](../Model/.md)| Id wpisu dotyczącego wytworzonych odpadów | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoGeneratedDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoGeneratedDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKeoPrintingPage**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoPrintingPage getKeoPrintingPage($keo_id)

Pobranie danych karty do wydruku

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keo_id = "keo_id_example"; // string | Id Karty Ewidencji Odpadów

try {
    $result = $apiInstance->getKeoPrintingPage($keo_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->getKeoPrintingPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keo_id** | [**string**](../Model/.md)| Id Karty Ewidencji Odpadów | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoPrintingPage**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoPrintingPage.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKeoTreated**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoTreatedDto getKeoTreated($keo_treated_id)

Informacje o wpisie ze statusem \"Przetwarzane\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keo_treated_id = "keo_treated_id_example"; // string | Id wpisu dotyczącego przetwarzanych odpadów

try {
    $result = $apiInstance->getKeoTreated($keo_treated_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->getKeoTreated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keo_treated_id** | [**string**](../Model/.md)| Id wpisu dotyczącego przetwarzanych odpadów | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoTreatedDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoTreatedDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchKeo**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoListItemWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull searchKeo($request)

Wyszukiwarka kart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardV1SearchKeoRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardV1SearchKeoRequest | 

try {
    $result = $apiInstance->searchKeo($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->searchKeo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardV1SearchKeoRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardV1SearchKeoRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoListItemWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull**](../Model/WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1KeoListItemWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchKeoCollected**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1SearchKeoCollectedResponse searchKeoCollected($request)

Wyszukiwarka wpisów ze statusem \"Przyjęte\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoCollectedV1SearchKeoCollectedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoCollectedV1SearchKeoCollectedRequest | 

try {
    $result = $apiInstance->searchKeoCollected($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->searchKeoCollected: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoCollectedV1SearchKeoCollectedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoCollectedV1SearchKeoCollectedRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1SearchKeoCollectedResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1SearchKeoCollectedResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchKeoExcavated**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1SearchKeoExcavatedResponse searchKeoExcavated($request)

Wyszukiwarka wpisów ze statusem \"Wydobyte\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoExcavatedV1SearchKeoExcavatedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoExcavatedV1SearchKeoExcavatedRequest | 

try {
    $result = $apiInstance->searchKeoExcavated($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->searchKeoExcavated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoExcavatedV1SearchKeoExcavatedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoExcavatedV1SearchKeoExcavatedRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1SearchKeoExcavatedResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1SearchKeoExcavatedResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchKeoForwarded**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1SearchKeoForwardedResponse searchKeoForwarded($request)

Wyszukiwarka wpisów ze statusem \"Przekazane\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoForwardedV1SearchKeoForwardedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoForwardedV1SearchKeoForwardedRequest | 

try {
    $result = $apiInstance->searchKeoForwarded($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->searchKeoForwarded: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoForwardedV1SearchKeoForwardedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoForwardedV1SearchKeoForwardedRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1SearchKeoForwardedResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1SearchKeoForwardedResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchKeoGenerated**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1SearchKeoGeneratedResponse searchKeoGenerated($request)

Wyszukiwarka wpisów ze statusem \"Wytworzone\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoGeneratedV1SearchKeoGeneratedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoGeneratedV1SearchKeoGeneratedRequest | 

try {
    $result = $apiInstance->searchKeoGenerated($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->searchKeoGenerated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoGeneratedV1SearchKeoGeneratedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoGeneratedV1SearchKeoGeneratedRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1SearchKeoGeneratedResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1SearchKeoGeneratedResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchKeoTreated**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1SearchKeoTreatedResponse searchKeoTreated($request)

Wyszukiwarka wpisów ze statusem \"Przetwarzane\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoTreatedV1SearchKeoTreatedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoTreatedV1SearchKeoTreatedRequest | 

try {
    $result = $apiInstance->searchKeoTreated($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->searchKeoTreated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoTreatedV1SearchKeoTreatedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoTreatedV1SearchKeoTreatedRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1SearchKeoTreatedResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteRecordCardV1SearchKeoTreatedResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCollectedKeo**
> object updateCollectedKeo($request)

Edycja wpisu ze statusem \"Przyjęte\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoCollectedV1UpdateKeoCollectedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoCollectedV1UpdateKeoCollectedRequest | 

try {
    $result = $apiInstance->updateCollectedKeo($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->updateCollectedKeo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoCollectedV1UpdateKeoCollectedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoCollectedV1UpdateKeoCollectedRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateExcavatedKeo**
> object updateExcavatedKeo($request)

Edycja wpisu ze statusem \"Wydobyte\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoExcavatedV1UpdateKeoExcavatedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoExcavatedV1UpdateKeoExcavatedRequest | 

try {
    $result = $apiInstance->updateExcavatedKeo($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->updateExcavatedKeo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoExcavatedV1UpdateKeoExcavatedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoExcavatedV1UpdateKeoExcavatedRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateForwardedKeo**
> object updateForwardedKeo($request)

Edycja wpisu ze statusem \"Przekazane\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoForwardedV1UpdateKeoForwardedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoForwardedV1UpdateKeoForwardedRequest | 

try {
    $result = $apiInstance->updateForwardedKeo($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->updateForwardedKeo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoForwardedV1UpdateKeoForwardedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoForwardedV1UpdateKeoForwardedRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGeneratedKeo**
> object updateGeneratedKeo($request)

Edycja wpisu ze statusem \"Wytworzone\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoGeneratedV1UpdateKeoGeneratedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoGeneratedV1UpdateKeoGeneratedRequest | 

try {
    $result = $apiInstance->updateGeneratedKeo($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->updateGeneratedKeo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoGeneratedV1UpdateKeoGeneratedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoGeneratedV1UpdateKeoGeneratedRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateKeo**
> object updateKeo($request)

Edycja karty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardV1UpdateKeoRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardV1UpdateKeoRequest | 

try {
    $result = $apiInstance->updateKeo($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->updateKeo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardV1UpdateKeoRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardV1UpdateKeoRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTreatedKeo**
> object updateTreatedKeo($request)

Edycja wpisu ze statusem \"Przetwarzane\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoTreatedV1UpdateKeoTreatedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoTreatedV1UpdateKeoTreatedRequest | 

try {
    $result = $apiInstance->updateTreatedKeo($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeoApi->updateTreatedKeo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoTreatedV1UpdateKeoTreatedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteRecordCardKeoTreatedV1UpdateKeoTreatedRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

