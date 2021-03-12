# Swagger\Client\KekosApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBatchOfGeneratedSediment**](KekosApi.md#createBatchOfGeneratedSediment) | **POST** /WasteRegister/MunicipalSewageSludgeCard/v1/Kekos/batchofgeneratedsediment | Tworzenie wpisu \&quot;Wytworzonych osadów\&quot;
[**createKekos**](KekosApi.md#createKekos) | **POST** /WasteRegister/MunicipalSewageSludgeCard/v1/Kekos/create | Tworzenie karty
[**createKekosAppliedSediment**](KekosApi.md#createKekosAppliedSediment) | **POST** /WasteRegister/MunicipalSewageSludgeCard/v1/Kekos/appliedSediment | Tworzeniw wpisu \&quot;Zastosowanych osadów\&quot;
[**createKekosResearchCard**](KekosApi.md#createKekosResearchCard) | **POST** /WasteRegister/MunicipalSewageSludgeCard/v1/Kekos/researchCard | Tworzenie wpisu \&quot;Wyniki badań\&quot;
[**deleteBatchOfGeneratedSediment**](KekosApi.md#deleteBatchOfGeneratedSediment) | **DELETE** /WasteRegister/MunicipalSewageSludgeCard/v1/Kekos/batchofgeneratedsediment | Usunięcie wpisu wytworzonych osadów
[**deleteKekos**](KekosApi.md#deleteKekos) | **DELETE** /WasteRegister/MunicipalSewageSludgeCard/v1/Kekos/delete | Usunięcie karty
[**deleteKekosAppliedSediment**](KekosApi.md#deleteKekosAppliedSediment) | **DELETE** /WasteRegister/MunicipalSewageSludgeCard/v1/Kekos/appliedSediment | Usunięcie wpisu \&quot;Zastosowanych osadów\&quot;
[**deleteKekosResearchCard**](KekosApi.md#deleteKekosResearchCard) | **DELETE** /WasteRegister/MunicipalSewageSludgeCard/v1/Kekos/researchCard | Usunięcie wpisu \&quot;Wyniki badań\&quot;
[**getBatchGeneratedSediment**](KekosApi.md#getBatchGeneratedSediment) | **GET** /WasteRegister/MunicipalSewageSludgeCard/v1/Kekos/batchofgeneratedsediment | Zwraca wpis \&quot;Wytworzonych osadów\&quot; z karty
[**getBatchGeneratedSediments**](KekosApi.md#getBatchGeneratedSediments) | **POST** /WasteRegister/MunicipalSewageSludgeCard/v1/Kekos/batch/generatedsediments | Edycja wpisu \&quot;Wytworzonych osadów\&quot;
[**getGivenYearKekosesByEup**](KekosApi.md#getGivenYearKekosesByEup) | **GET** /WasteRegister/MunicipalSewageSludgeCard/v1/Kekos/cards/givenyear | Lista kart
[**getKekosAppliedSediment**](KekosApi.md#getKekosAppliedSediment) | **GET** /WasteRegister/MunicipalSewageSludgeCard/v1/Kekos/appliedSediment | Zwraca wpis \&quot;Zastosowanych osadów\&quot; z karty
[**getKekosAppliedSediments**](KekosApi.md#getKekosAppliedSediments) | **POST** /WasteRegister/MunicipalSewageSludgeCard/v1/Kekos/appliedSediments | Tworzenie wpisu \&quot;Zastosowanych osadów\&quot;
[**getKekosAppliedSedimentsMassByBatchId**](KekosApi.md#getKekosAppliedSedimentsMassByBatchId) | **POST** /WasteRegister/MunicipalSewageSludgeCard/v1/Kekos/appliedSedimentsMassByBatchId | Zwraca masę zastosowanych osadów dla karty
[**getKekosById**](KekosApi.md#getKekosById) | **GET** /WasteRegister/MunicipalSewageSludgeCard/v1/Kekos/card | Pobranie karty
[**getKekosPrintingPage**](KekosApi.md#getKekosPrintingPage) | **GET** /WasteRegister/MunicipalSewageSludgeCard/v1/Kekos/card/printingpage | Zwraca dane do wydruku
[**getKekosResearchCard**](KekosApi.md#getKekosResearchCard) | **GET** /WasteRegister/MunicipalSewageSludgeCard/v1/Kekos/researchCard | 
[**getKekosResearchCards**](KekosApi.md#getKekosResearchCards) | **GET** /WasteRegister/MunicipalSewageSludgeCard/v1/Kekos/researchCards | Zwraca wpis \&quot;Wyniki badań
[**getKekosResearchPrintingPage**](KekosApi.md#getKekosResearchPrintingPage) | **GET** /WasteRegister/MunicipalSewageSludgeCard/v1/Kekos/researchCard/printingpage | Zwraca dane do wydruku karty badań
[**getKekosSummary**](KekosApi.md#getKekosSummary) | **GET** /WasteRegister/MunicipalSewageSludgeCard/v1/Kekos/summary | Zwraca dane podsumowujące
[**updateBatchOfGeneratedSediment**](KekosApi.md#updateBatchOfGeneratedSediment) | **PUT** /WasteRegister/MunicipalSewageSludgeCard/v1/Kekos/batchofgeneratedsediment | Edycja wpisu \&quot;Wytworzonych osadów\&quot;
[**updateKekosAppliedSediment**](KekosApi.md#updateKekosAppliedSediment) | **PUT** /WasteRegister/MunicipalSewageSludgeCard/v1/Kekos/appliedSediment | Edycja wpisu \&quot;Zastosowanych osadów\&quot;
[**updateKekosInitialMass**](KekosApi.md#updateKekosInitialMass) | **PUT** /WasteRegister/MunicipalSewageSludgeCard/v1/Kekos/update | Edycja karty
[**updateKekosResearchCard**](KekosApi.md#updateKekosResearchCard) | **PUT** /WasteRegister/MunicipalSewageSludgeCard/v1/Kekos/researchCard | Edycja wpisu \&quot;Wyniki badań\&quot;


# **createBatchOfGeneratedSediment**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1CreateBatchOfGeneratedSedimentResponse createBatchOfGeneratedSediment($request)

Tworzenie wpisu \"Wytworzonych osadów\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KekosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1CreateBatchOfGeneratedSedimentRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1CreateBatchOfGeneratedSedimentRequest | 

try {
    $result = $apiInstance->createBatchOfGeneratedSediment($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KekosApi->createBatchOfGeneratedSediment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1CreateBatchOfGeneratedSedimentRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1CreateBatchOfGeneratedSedimentRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1CreateBatchOfGeneratedSedimentResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1CreateBatchOfGeneratedSedimentResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createKekos**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1CreateKekosResponse createKekos($request)

Tworzenie karty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KekosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1CreateKekosRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1CreateKekosRequest | 

try {
    $result = $apiInstance->createKekos($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KekosApi->createKekos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1CreateKekosRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1CreateKekosRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1CreateKekosResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1CreateKekosResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createKekosAppliedSediment**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1CreateKekosAppliedSedimentResponse createKekosAppliedSediment($request)

Tworzeniw wpisu \"Zastosowanych osadów\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KekosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1CreateKekosAppliedSedimentRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1CreateKekosAppliedSedimentRequest | 

try {
    $result = $apiInstance->createKekosAppliedSediment($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KekosApi->createKekosAppliedSediment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1CreateKekosAppliedSedimentRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1CreateKekosAppliedSedimentRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1CreateKekosAppliedSedimentResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1CreateKekosAppliedSedimentResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createKekosResearchCard**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1CreateKekosResearchCardResponse createKekosResearchCard($request)

Tworzenie wpisu \"Wyniki badań\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KekosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1CreateKekosResearchCardRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1CreateKekosResearchCardRequest | 

try {
    $result = $apiInstance->createKekosResearchCard($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KekosApi->createKekosResearchCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1CreateKekosResearchCardRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1CreateKekosResearchCardRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1CreateKekosResearchCardResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1CreateKekosResearchCardResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBatchOfGeneratedSediment**
> object deleteBatchOfGeneratedSediment($request)

Usunięcie wpisu wytworzonych osadów

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KekosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1DeleteBatchOfGeneratedSedimentRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1DeleteBatchOfGeneratedSedimentRequest | 

try {
    $result = $apiInstance->deleteBatchOfGeneratedSediment($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KekosApi->deleteBatchOfGeneratedSediment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1DeleteBatchOfGeneratedSedimentRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1DeleteBatchOfGeneratedSedimentRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKekos**
> object deleteKekos($request)

Usunięcie karty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KekosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1DeleteKekosRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1DeleteKekosRequest | 

try {
    $result = $apiInstance->deleteKekos($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KekosApi->deleteKekos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1DeleteKekosRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1DeleteKekosRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKekosAppliedSediment**
> object deleteKekosAppliedSediment($request)

Usunięcie wpisu \"Zastosowanych osadów\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KekosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1DeleteKekosAppliedSedimentRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1DeleteKekosAppliedSedimentRequest | 

try {
    $result = $apiInstance->deleteKekosAppliedSediment($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KekosApi->deleteKekosAppliedSediment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1DeleteKekosAppliedSedimentRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1DeleteKekosAppliedSedimentRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKekosResearchCard**
> object deleteKekosResearchCard($request)

Usunięcie wpisu \"Wyniki badań\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KekosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1DeleteKekosResearchCardRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1DeleteKekosResearchCardRequest | 

try {
    $result = $apiInstance->deleteKekosResearchCard($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KekosApi->deleteKekosResearchCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1DeleteKekosResearchCardRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1DeleteKekosResearchCardRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBatchGeneratedSediment**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetBatchGeneratedSedimentResponse getBatchGeneratedSediment($batch_generated_sediment_id)

Zwraca wpis \"Wytworzonych osadów\" z karty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KekosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_generated_sediment_id = "batch_generated_sediment_id_example"; // string | Id wpisu \"Wytworzone osady\"

try {
    $result = $apiInstance->getBatchGeneratedSediment($batch_generated_sediment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KekosApi->getBatchGeneratedSediment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_generated_sediment_id** | [**string**](../Model/.md)| Id wpisu \&quot;Wytworzone osady\&quot; | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetBatchGeneratedSedimentResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetBatchGeneratedSedimentResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBatchGeneratedSediments**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetBatchGeneratedSedimentsResponse getBatchGeneratedSediments($request)

Edycja wpisu \"Wytworzonych osadów\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KekosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1GetBatchGeneratedSedimentsRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1GetBatchGeneratedSedimentsRequest | 

try {
    $result = $apiInstance->getBatchGeneratedSediments($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KekosApi->getBatchGeneratedSediments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1GetBatchGeneratedSedimentsRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1GetBatchGeneratedSedimentsRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetBatchGeneratedSedimentsResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetBatchGeneratedSedimentsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGivenYearKekosesByEup**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1KekosOnListDto[] getGivenYearKekosesByEup()

Lista kart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KekosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGivenYearKekosesByEup();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KekosApi->getGivenYearKekosesByEup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1KekosOnListDto[]**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1KekosOnListDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKekosAppliedSediment**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosAppliedSedimentResponse getKekosAppliedSediment($kekos_applied_sediment_id)

Zwraca wpis \"Zastosowanych osadów\" z karty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KekosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kekos_applied_sediment_id = "kekos_applied_sediment_id_example"; // string | 

try {
    $result = $apiInstance->getKekosAppliedSediment($kekos_applied_sediment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KekosApi->getKekosAppliedSediment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kekos_applied_sediment_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosAppliedSedimentResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosAppliedSedimentResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKekosAppliedSediments**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosAppliedSedimentsResponse getKekosAppliedSediments($request)

Tworzenie wpisu \"Zastosowanych osadów\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KekosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1GetKekosAppliedSedimentsRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1GetKekosAppliedSedimentsRequest | 

try {
    $result = $apiInstance->getKekosAppliedSediments($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KekosApi->getKekosAppliedSediments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1GetKekosAppliedSedimentsRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1GetKekosAppliedSedimentsRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosAppliedSedimentsResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosAppliedSedimentsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKekosAppliedSedimentsMassByBatchId**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosAppliedSedimentsMassByBatchIdResponse getKekosAppliedSedimentsMassByBatchId($request)

Zwraca masę zastosowanych osadów dla karty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KekosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1GetKekosAppliedSedimentsMassByBatchIdRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1GetKekosAppliedSedimentsMassByBatchIdRequest | 

try {
    $result = $apiInstance->getKekosAppliedSedimentsMassByBatchId($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KekosApi->getKekosAppliedSedimentsMassByBatchId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1GetKekosAppliedSedimentsMassByBatchIdRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1GetKekosAppliedSedimentsMassByBatchIdRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosAppliedSedimentsMassByBatchIdResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosAppliedSedimentsMassByBatchIdResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKekosById**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosByIdResponse getKekosById($kekos_id)

Pobranie karty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KekosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kekos_id = "kekos_id_example"; // string | Id karty

try {
    $result = $apiInstance->getKekosById($kekos_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KekosApi->getKekosById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kekos_id** | [**string**](../Model/.md)| Id karty | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosByIdResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosByIdResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKekosPrintingPage**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosPrintingPageResponse getKekosPrintingPage($kekos_id)

Zwraca dane do wydruku

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KekosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kekos_id = "kekos_id_example"; // string | 

try {
    $result = $apiInstance->getKekosPrintingPage($kekos_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KekosApi->getKekosPrintingPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kekos_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosPrintingPageResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosPrintingPageResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKekosResearchCard**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosResearchCardResponse getKekosResearchCard($kekos_research_card_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KekosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kekos_research_card_id = "kekos_research_card_id_example"; // string | 

try {
    $result = $apiInstance->getKekosResearchCard($kekos_research_card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KekosApi->getKekosResearchCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kekos_research_card_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosResearchCardResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosResearchCardResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKekosResearchCards**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosResearchCardsResponse getKekosResearchCards($kekos_batch_of_generated_sediment_id)

Zwraca wpis \"Wyniki badań

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KekosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kekos_batch_of_generated_sediment_id = "kekos_batch_of_generated_sediment_id_example"; // string | 

try {
    $result = $apiInstance->getKekosResearchCards($kekos_batch_of_generated_sediment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KekosApi->getKekosResearchCards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kekos_batch_of_generated_sediment_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosResearchCardsResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosResearchCardsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKekosResearchPrintingPage**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosResearchPrintingPageResponse getKekosResearchPrintingPage($kekos_research_card_id)

Zwraca dane do wydruku karty badań

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KekosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kekos_research_card_id = "kekos_research_card_id_example"; // string | 

try {
    $result = $apiInstance->getKekosResearchPrintingPage($kekos_research_card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KekosApi->getKekosResearchPrintingPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kekos_research_card_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosResearchPrintingPageResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosResearchPrintingPageResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKekosSummary**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosSummaryResponse getKekosSummary($kekos_id)

Zwraca dane podsumowujące

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KekosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kekos_id = "kekos_id_example"; // string | 

try {
    $result = $apiInstance->getKekosSummary($kekos_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KekosApi->getKekosSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kekos_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosSummaryResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMunicipalSewageSludgeCardV1GetKekosSummaryResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBatchOfGeneratedSediment**
> object updateBatchOfGeneratedSediment($request)

Edycja wpisu \"Wytworzonych osadów\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KekosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1UpdateBatchOfGeneratedSedimentRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1UpdateBatchOfGeneratedSedimentRequest | 

try {
    $result = $apiInstance->updateBatchOfGeneratedSediment($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KekosApi->updateBatchOfGeneratedSediment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1UpdateBatchOfGeneratedSedimentRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1UpdateBatchOfGeneratedSedimentRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateKekosAppliedSediment**
> object updateKekosAppliedSediment($request)

Edycja wpisu \"Zastosowanych osadów\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KekosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1UpdateKekosAppliedSedimentRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1UpdateKekosAppliedSedimentRequest | 

try {
    $result = $apiInstance->updateKekosAppliedSediment($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KekosApi->updateKekosAppliedSediment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1UpdateKekosAppliedSedimentRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1UpdateKekosAppliedSedimentRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateKekosInitialMass**
> object updateKekosInitialMass($request)

Edycja karty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KekosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1UpdateKekosInitialMassRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1UpdateKekosInitialMassRequest | 

try {
    $result = $apiInstance->updateKekosInitialMass($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KekosApi->updateKekosInitialMass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1UpdateKekosInitialMassRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1UpdateKekosInitialMassRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateKekosResearchCard**
> object updateKekosResearchCard($request)

Edycja wpisu \"Wyniki badań\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KekosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1UpdateKekosResearchCardRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1UpdateKekosResearchCardRequest | 

try {
    $result = $apiInstance->updateKekosResearchCard($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KekosApi->updateKekosResearchCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1UpdateKekosResearchCardRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalSewageSludgeCardV1UpdateKekosResearchCardRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

