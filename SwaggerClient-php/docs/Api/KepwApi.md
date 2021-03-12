# Swagger\Client\KepwApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkWasteCodeUsedInKepwCreateContext**](KepwApi.md#checkWasteCodeUsedInKepwCreateContext) | **GET** /WasteRegister/WreckWasteRecordCard/v1/Kepw/context/wastecodeCreate | Sprawdzenie czy istnieje już karta z danym kodem odpadu
[**checkWasteCodeUsedInKepwEditContext**](KepwApi.md#checkWasteCodeUsedInKepwEditContext) | **GET** /WasteRegister/WreckWasteRecordCard/v1/Kepw/context/wastecodeEdit | Sprawdzenie czy oprócz wybranej karty istnieje inna z danym kodem odpadu
[**createCollectingReceivedVehicle**](KepwApi.md#createCollectingReceivedVehicle) | **POST** /WasteRegister/WreckWasteRecordCard/v1/Kepw/collectingReceivedVehicle | Tworzenie wpisu Prowadzący punkt zbierania pojazdów - Przyjęte
[**createCollectingTransferredVehicle**](KepwApi.md#createCollectingTransferredVehicle) | **POST** /WasteRegister/WreckWasteRecordCard/v1/Kepw/collectingTransferredVehicle | Tworzenie wpisu Prowadzący punkt zbierania pojazdów - Przekazane
[**createDismantleProcessedWaste**](KepwApi.md#createDismantleProcessedWaste) | **POST** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleProcessedWaste | Tworzenie wpisu Prowadzący stację demontażu - Przetwarzane odpady
[**createDismantleProducedWaste**](KepwApi.md#createDismantleProducedWaste) | **POST** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleProducedWaste | Tworzenie wpisu Prowadzący stację demontażu - Wytwarzane odpady
[**createDismantleReceivedVehicle**](KepwApi.md#createDismantleReceivedVehicle) | **POST** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleReceivedVehicle | Tworzenie wpisu Prowadzący stację demontażu - Przyjete pojazdy
[**createDismantleReusableEquipmentAndParts**](KepwApi.md#createDismantleReusableEquipmentAndParts) | **POST** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleReusableEquipmentAndParts | 
[**createDismantleTransferredWaste**](KepwApi.md#createDismantleTransferredWaste) | **POST** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleTransferredWaste | Tworzenie wpisu Prowadzący stację demontażu - Przekazane odpady
[**createKepw**](KepwApi.md#createKepw) | **POST** /WasteRegister/WreckWasteRecordCard/v1/Kepw | Tworzenie karty
[**deleteCollectingReceivedVehicle**](KepwApi.md#deleteCollectingReceivedVehicle) | **DELETE** /WasteRegister/WreckWasteRecordCard/v1/Kepw/collectingReceivedVehicle | Usunięcie wpisu Prowadzący punkt zbierania pojazdów - Przyjęte
[**deleteCollectingTransferredVehicle**](KepwApi.md#deleteCollectingTransferredVehicle) | **DELETE** /WasteRegister/WreckWasteRecordCard/v1/Kepw/collectingTransferredVehicle | Usunięcie wpisu Prowadzący punkt zbierania pojazdów - Przekazane
[**deleteDismantleProcessedWaste**](KepwApi.md#deleteDismantleProcessedWaste) | **DELETE** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleProcessedWaste | Usunięcie wpisu Prowadzący stację demontażu - Przetwarzane odpady
[**deleteDismantleProducedWaste**](KepwApi.md#deleteDismantleProducedWaste) | **DELETE** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleProducedWaste | Usunięcie wpisu Prowadzący stację demontażu - Wytwarzane odpady
[**deleteDismantleReceivedVehicle**](KepwApi.md#deleteDismantleReceivedVehicle) | **DELETE** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleReceivedVehicle | Usunięcie wpisu Prowadzący stację demontażu - Przyjete pojazdy
[**deleteDismantleReusableEquipmentAndParts**](KepwApi.md#deleteDismantleReusableEquipmentAndParts) | **DELETE** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleReusableEquipmentAndParts | 
[**deleteDismantleTransferredWaste**](KepwApi.md#deleteDismantleTransferredWaste) | **DELETE** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleTransferredWaste | Usunięcie wpisu Prowadzący stację demontażu - Przekazane odpady
[**deleteKepw**](KepwApi.md#deleteKepw) | **DELETE** /WasteRegister/WreckWasteRecordCard/v1/Kepw | Usunięcie karty
[**getCollectingReceivedVehicle**](KepwApi.md#getCollectingReceivedVehicle) | **GET** /WasteRegister/WreckWasteRecordCard/v1/Kepw/collectingReceivedVehicle | Informacje o wpisie Prowadzący punkt zbierania pojazdów - Przyjęte
[**getCollectingReceivedVehicles**](KepwApi.md#getCollectingReceivedVehicles) | **POST** /WasteRegister/WreckWasteRecordCard/v1/Kepw/collectingReceivedVehicle/search | Wyszukiwarka wpisów Prowadzący punkt zbierania pojazdów - Przyjęte
[**getCollectingTransferredVehicle**](KepwApi.md#getCollectingTransferredVehicle) | **GET** /WasteRegister/WreckWasteRecordCard/v1/Kepw/collectingTransferredVehicle | Informacje o wpisie Prowadzący punkt zbierania pojazdów - Przekazane
[**getCollectingTransferredVehicles**](KepwApi.md#getCollectingTransferredVehicles) | **POST** /WasteRegister/WreckWasteRecordCard/v1/Kepw/collectingTransferredVehicle/search | Wyszukiwarka wpisów Prowadzący punkt zbierania pojazdów - Przekazane
[**getDismantleProcessedWaste**](KepwApi.md#getDismantleProcessedWaste) | **GET** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleProcessedWaste | Informacje o wpisie Prowadzący stację demontażu - Przetwarzane odpady
[**getDismantleProcessedWastes**](KepwApi.md#getDismantleProcessedWastes) | **POST** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleProcessedWaste/search | Wyszukiwarka wpisów Prowadzący stację demontażu - Przetwarzane odpady
[**getDismantleProducedWaste**](KepwApi.md#getDismantleProducedWaste) | **GET** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleProducedWaste | Informacje o wpisie Prowadzący stację demontażu - Wytwarzane odpady
[**getDismantleProducedWastes**](KepwApi.md#getDismantleProducedWastes) | **POST** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleProducedWaste/search | Wyszukiwarka wpisów Prowadzący stację demontażu - Wytwarzane odpady
[**getDismantleReceivedVehicle**](KepwApi.md#getDismantleReceivedVehicle) | **GET** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleReceivedVehicle | Informacje o wpisie Prowadzący stację demontażu - Przyjete pojazdy
[**getDismantleReceivedVehicles**](KepwApi.md#getDismantleReceivedVehicles) | **POST** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleReceivedVehicle/search | Wyszukiwarka wpisów Prowadzący stację demontażu - Przyjete pojazdy
[**getDismantleReusableEquipmentAndParts**](KepwApi.md#getDismantleReusableEquipmentAndParts) | **GET** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleReusableEquipmentAndParts | 
[**getDismantleReusableEquipmentAndPartsList**](KepwApi.md#getDismantleReusableEquipmentAndPartsList) | **POST** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleReusableEquipmentAndParts/search | 
[**getDismantleTransferredWaste**](KepwApi.md#getDismantleTransferredWaste) | **GET** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleTransferredWaste | Informacje o wpisie Prowadzący stację demontażu - Przekazane odpady
[**getDismantleTransferredWastes**](KepwApi.md#getDismantleTransferredWastes) | **POST** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleTransferredWaste/search | Wyszukiwarka wpisów Prowadzący stację demontażu - Przekazane odpady
[**getDismantleWasteSummary**](KepwApi.md#getDismantleWasteSummary) | **GET** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleWasteSummary | Zestawienie danych - Prowadzący stację demontażu
[**getKepw**](KepwApi.md#getKepw) | **GET** /WasteRegister/WreckWasteRecordCard/v1/Kepw | Informacje o karcie i liście stanów magazynowych - odpady
[**getKepwCollectingPrintingPage**](KepwApi.md#getKepwCollectingPrintingPage) | **GET** /WasteRegister/WreckWasteRecordCard/v1/Kepw/card/collecting/printingpage | Pobranie danych karty do wydruku - Prowadzący punkt zbierania pojazdów
[**getKepwDismantlePrintingPage**](KepwApi.md#getKepwDismantlePrintingPage) | **GET** /WasteRegister/WreckWasteRecordCard/v1/Kepw/card/dismantle/printingpage | Pobranie danych karty do wydruku - Prowadzący stację demontażu
[**searchKepw**](KepwApi.md#searchKepw) | **POST** /WasteRegister/WreckWasteRecordCard/v1/Kepw/search | Wyszukiwarka kart
[**updateCollectingReceivedVehicle**](KepwApi.md#updateCollectingReceivedVehicle) | **PUT** /WasteRegister/WreckWasteRecordCard/v1/Kepw/collectingReceivedVehicle | Edycja wpisu Prowadzący punkt zbierania pojazdów - Przyjęte
[**updateCollectingTransferredVehicle**](KepwApi.md#updateCollectingTransferredVehicle) | **PUT** /WasteRegister/WreckWasteRecordCard/v1/Kepw/collectingTransferredVehicle | Edycja wpisu Prowadzący punkt zbierania pojazdów - Przekazane
[**updateDismantleProcessedWaste**](KepwApi.md#updateDismantleProcessedWaste) | **PUT** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleProcessedWaste | Edycja wpisu Prowadzący stację demontażu - Przetwarzane odpady
[**updateDismantleProducedWaste**](KepwApi.md#updateDismantleProducedWaste) | **PUT** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleProducedWaste | Edycja wpisu Prowadzący stację demontażu - Wytwarzane odpady
[**updateDismantleReceivedVehicle**](KepwApi.md#updateDismantleReceivedVehicle) | **PUT** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleReceivedVehicle | Edycja wpisu Prowadzący stację demontażu - Przyjete pojazdy
[**updateDismantleReusableEquipmentAndParts**](KepwApi.md#updateDismantleReusableEquipmentAndParts) | **PUT** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleReusableEquipmentAndParts | 
[**updateDismantleTransferredWaste**](KepwApi.md#updateDismantleTransferredWaste) | **PUT** /WasteRegister/WreckWasteRecordCard/v1/Kepw/dismantleTransferredWaste | Edycja wpisu Prowadzący stację demontażu - Przekazane odpady
[**updateKepw**](KepwApi.md#updateKepw) | **PUT** /WasteRegister/WreckWasteRecordCard/v1/Kepw | Edycja karty


# **checkWasteCodeUsedInKepwCreateContext**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CheckWasteCodeUsedInKepwCreateContextResponse checkWasteCodeUsedInKepwCreateContext($waste_code_id, $waste_code_extended, $waste_code_extended_description, $hazardous_waste_reclassification, $hazardous_waste_reclassification_description)

Sprawdzenie czy istnieje już karta z danym kodem odpadu

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waste_code_id = 56; // int | 
$waste_code_extended = true; // bool | 
$waste_code_extended_description = "waste_code_extended_description_example"; // string | 
$hazardous_waste_reclassification = true; // bool | 
$hazardous_waste_reclassification_description = "hazardous_waste_reclassification_description_example"; // string | 

try {
    $result = $apiInstance->checkWasteCodeUsedInKepwCreateContext($waste_code_id, $waste_code_extended, $waste_code_extended_description, $hazardous_waste_reclassification, $hazardous_waste_reclassification_description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->checkWasteCodeUsedInKepwCreateContext: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waste_code_id** | **int**|  | [optional]
 **waste_code_extended** | **bool**|  | [optional]
 **waste_code_extended_description** | **string**|  | [optional]
 **hazardous_waste_reclassification** | **bool**|  | [optional]
 **hazardous_waste_reclassification_description** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CheckWasteCodeUsedInKepwCreateContextResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CheckWasteCodeUsedInKepwCreateContextResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkWasteCodeUsedInKepwEditContext**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CheckWasteCodeUsedInKepwCreateContextResponse checkWasteCodeUsedInKepwEditContext($kepw_id, $waste_code_id, $waste_code_extended, $waste_code_extended_description, $hazardous_waste_reclassification, $hazardous_waste_reclassification_description)

Sprawdzenie czy oprócz wybranej karty istnieje inna z danym kodem odpadu

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kepw_id = "kepw_id_example"; // string | 
$waste_code_id = 56; // int | 
$waste_code_extended = true; // bool | 
$waste_code_extended_description = "waste_code_extended_description_example"; // string | 
$hazardous_waste_reclassification = true; // bool | 
$hazardous_waste_reclassification_description = "hazardous_waste_reclassification_description_example"; // string | 

try {
    $result = $apiInstance->checkWasteCodeUsedInKepwEditContext($kepw_id, $waste_code_id, $waste_code_extended, $waste_code_extended_description, $hazardous_waste_reclassification, $hazardous_waste_reclassification_description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->checkWasteCodeUsedInKepwEditContext: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kepw_id** | [**string**](../Model/.md)|  | [optional]
 **waste_code_id** | **int**|  | [optional]
 **waste_code_extended** | **bool**|  | [optional]
 **waste_code_extended_description** | **string**|  | [optional]
 **hazardous_waste_reclassification** | **bool**|  | [optional]
 **hazardous_waste_reclassification_description** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CheckWasteCodeUsedInKepwCreateContextResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CheckWasteCodeUsedInKepwCreateContextResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCollectingReceivedVehicle**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CreateCollectingReceivedVehicleResponse createCollectingReceivedVehicle($request)

Tworzenie wpisu Prowadzący punkt zbierania pojazdów - Przyjęte

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingReceivedVehicleV1CreateCollectingReceivedVehicleRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingReceivedVehicleV1CreateCollectingReceivedVehicleRequest | 

try {
    $result = $apiInstance->createCollectingReceivedVehicle($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->createCollectingReceivedVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingReceivedVehicleV1CreateCollectingReceivedVehicleRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingReceivedVehicleV1CreateCollectingReceivedVehicleRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CreateCollectingReceivedVehicleResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CreateCollectingReceivedVehicleResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCollectingTransferredVehicle**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CreateCollectingTransferredVehicleResponse createCollectingTransferredVehicle($request)

Tworzenie wpisu Prowadzący punkt zbierania pojazdów - Przekazane

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingTransferredVehicleV1CreateCollectingTransferredVehicleRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingTransferredVehicleV1CreateCollectingTransferredVehicleRequest | 

try {
    $result = $apiInstance->createCollectingTransferredVehicle($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->createCollectingTransferredVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingTransferredVehicleV1CreateCollectingTransferredVehicleRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingTransferredVehicleV1CreateCollectingTransferredVehicleRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CreateCollectingTransferredVehicleResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CreateCollectingTransferredVehicleResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDismantleProcessedWaste**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CreateDismantleProcessedWasteResponse createDismantleProcessedWaste($request)

Tworzenie wpisu Prowadzący stację demontażu - Przetwarzane odpady

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProcessedWasteV1CreateDismantleProcessedWasteRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProcessedWasteV1CreateDismantleProcessedWasteRequest | 

try {
    $result = $apiInstance->createDismantleProcessedWaste($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->createDismantleProcessedWaste: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProcessedWasteV1CreateDismantleProcessedWasteRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProcessedWasteV1CreateDismantleProcessedWasteRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CreateDismantleProcessedWasteResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CreateDismantleProcessedWasteResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDismantleProducedWaste**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CreateDismantleProducedWasteResponse createDismantleProducedWaste($request)

Tworzenie wpisu Prowadzący stację demontażu - Wytwarzane odpady

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProducedWasteV1CreateDismantleProducedWasteRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProducedWasteV1CreateDismantleProducedWasteRequest | 

try {
    $result = $apiInstance->createDismantleProducedWaste($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->createDismantleProducedWaste: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProducedWasteV1CreateDismantleProducedWasteRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProducedWasteV1CreateDismantleProducedWasteRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CreateDismantleProducedWasteResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CreateDismantleProducedWasteResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDismantleReceivedVehicle**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CreateDismantleReceivedVehicleResponse createDismantleReceivedVehicle($request)

Tworzenie wpisu Prowadzący stację demontażu - Przyjete pojazdy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReceivedVehicleV1CreateDismantleReceivedVehicleRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReceivedVehicleV1CreateDismantleReceivedVehicleRequest | 

try {
    $result = $apiInstance->createDismantleReceivedVehicle($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->createDismantleReceivedVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReceivedVehicleV1CreateDismantleReceivedVehicleRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReceivedVehicleV1CreateDismantleReceivedVehicleRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CreateDismantleReceivedVehicleResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CreateDismantleReceivedVehicleResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDismantleReusableEquipmentAndParts**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CreateDismantleReusableEquipmentAndPartsResponse createDismantleReusableEquipmentAndParts($request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReusableEquipmentAndPartsV1CreateDismantleReusableEquipmentAndPartsRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReusableEquipmentAndPartsV1CreateDismantleReusableEquipmentAndPartsRequest | 

try {
    $result = $apiInstance->createDismantleReusableEquipmentAndParts($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->createDismantleReusableEquipmentAndParts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReusableEquipmentAndPartsV1CreateDismantleReusableEquipmentAndPartsRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReusableEquipmentAndPartsV1CreateDismantleReusableEquipmentAndPartsRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CreateDismantleReusableEquipmentAndPartsResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CreateDismantleReusableEquipmentAndPartsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDismantleTransferredWaste**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CreateDismantleTransferredWasteResponse createDismantleTransferredWaste($request)

Tworzenie wpisu Prowadzący stację demontażu - Przekazane odpady

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleTransferredWasteV1CreateDismantleTransferredWasteRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleTransferredWasteV1CreateDismantleTransferredWasteRequest | 

try {
    $result = $apiInstance->createDismantleTransferredWaste($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->createDismantleTransferredWaste: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleTransferredWasteV1CreateDismantleTransferredWasteRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleTransferredWasteV1CreateDismantleTransferredWasteRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CreateDismantleTransferredWasteResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CreateDismantleTransferredWasteResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createKepw**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CreateKepwResponse createKepw($request)

Tworzenie karty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardKepwV1CreateKepwRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardKepwV1CreateKepwRequest | 

try {
    $result = $apiInstance->createKepw($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->createKepw: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardKepwV1CreateKepwRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardKepwV1CreateKepwRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CreateKepwResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1CreateKepwResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectingReceivedVehicle**
> object deleteCollectingReceivedVehicle($request)

Usunięcie wpisu Prowadzący punkt zbierania pojazdów - Przyjęte

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingReceivedVehicleV1DeleteCollectingReceivedVehicleRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingReceivedVehicleV1DeleteCollectingReceivedVehicleRequest | 

try {
    $result = $apiInstance->deleteCollectingReceivedVehicle($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->deleteCollectingReceivedVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingReceivedVehicleV1DeleteCollectingReceivedVehicleRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingReceivedVehicleV1DeleteCollectingReceivedVehicleRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollectingTransferredVehicle**
> object deleteCollectingTransferredVehicle($request)

Usunięcie wpisu Prowadzący punkt zbierania pojazdów - Przekazane

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingTransferredVehicleV1DeleteCollectingTransferredVehicleRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingTransferredVehicleV1DeleteCollectingTransferredVehicleRequest | 

try {
    $result = $apiInstance->deleteCollectingTransferredVehicle($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->deleteCollectingTransferredVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingTransferredVehicleV1DeleteCollectingTransferredVehicleRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingTransferredVehicleV1DeleteCollectingTransferredVehicleRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDismantleProcessedWaste**
> object deleteDismantleProcessedWaste($request)

Usunięcie wpisu Prowadzący stację demontażu - Przetwarzane odpady

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProcessedWasteV1DeleteDismantleProcessedWasteRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProcessedWasteV1DeleteDismantleProcessedWasteRequest | 

try {
    $result = $apiInstance->deleteDismantleProcessedWaste($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->deleteDismantleProcessedWaste: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProcessedWasteV1DeleteDismantleProcessedWasteRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProcessedWasteV1DeleteDismantleProcessedWasteRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDismantleProducedWaste**
> object deleteDismantleProducedWaste($request)

Usunięcie wpisu Prowadzący stację demontażu - Wytwarzane odpady

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProducedWasteV1DeleteDismantleProducedWasteRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProducedWasteV1DeleteDismantleProducedWasteRequest | 

try {
    $result = $apiInstance->deleteDismantleProducedWaste($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->deleteDismantleProducedWaste: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProducedWasteV1DeleteDismantleProducedWasteRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProducedWasteV1DeleteDismantleProducedWasteRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDismantleReceivedVehicle**
> object deleteDismantleReceivedVehicle($request)

Usunięcie wpisu Prowadzący stację demontażu - Przyjete pojazdy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReceivedVehicleV1DeleteDismantleReceivedVehicleRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReceivedVehicleV1DeleteDismantleReceivedVehicleRequest | 

try {
    $result = $apiInstance->deleteDismantleReceivedVehicle($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->deleteDismantleReceivedVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReceivedVehicleV1DeleteDismantleReceivedVehicleRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReceivedVehicleV1DeleteDismantleReceivedVehicleRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDismantleReusableEquipmentAndParts**
> object deleteDismantleReusableEquipmentAndParts($request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReusableEquipmentAndPartsV1DeleteDismantleReusableEquipmentAndPartsRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReusableEquipmentAndPartsV1DeleteDismantleReusableEquipmentAndPartsRequest | 

try {
    $result = $apiInstance->deleteDismantleReusableEquipmentAndParts($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->deleteDismantleReusableEquipmentAndParts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReusableEquipmentAndPartsV1DeleteDismantleReusableEquipmentAndPartsRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReusableEquipmentAndPartsV1DeleteDismantleReusableEquipmentAndPartsRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDismantleTransferredWaste**
> object deleteDismantleTransferredWaste($request)

Usunięcie wpisu Prowadzący stację demontażu - Przekazane odpady

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleTransferredWasteV1DeleteDismantleTransferredWasteRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleTransferredWasteV1DeleteDismantleTransferredWasteRequest | 

try {
    $result = $apiInstance->deleteDismantleTransferredWaste($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->deleteDismantleTransferredWaste: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleTransferredWasteV1DeleteDismantleTransferredWasteRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleTransferredWasteV1DeleteDismantleTransferredWasteRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKepw**
> object deleteKepw($request)

Usunięcie karty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardKepwV1DeleteKepwRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardKepwV1DeleteKepwRequest | 

try {
    $result = $apiInstance->deleteKepw($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->deleteKepw: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardKepwV1DeleteKepwRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardKepwV1DeleteKepwRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCollectingReceivedVehicle**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetCollectingReceivedVehicleResponse getCollectingReceivedVehicle($collecting_received_vehicle_id)

Informacje o wpisie Prowadzący punkt zbierania pojazdów - Przyjęte

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collecting_received_vehicle_id = "collecting_received_vehicle_id_example"; // string | 

try {
    $result = $apiInstance->getCollectingReceivedVehicle($collecting_received_vehicle_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->getCollectingReceivedVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collecting_received_vehicle_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetCollectingReceivedVehicleResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetCollectingReceivedVehicleResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCollectingReceivedVehicles**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetCollectingReceivedVehiclesResponse getCollectingReceivedVehicles($request)

Wyszukiwarka wpisów Prowadzący punkt zbierania pojazdów - Przyjęte

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingReceivedVehicleV1GetCollectingReceivedVehiclesRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingReceivedVehicleV1GetCollectingReceivedVehiclesRequest | 

try {
    $result = $apiInstance->getCollectingReceivedVehicles($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->getCollectingReceivedVehicles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingReceivedVehicleV1GetCollectingReceivedVehiclesRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingReceivedVehicleV1GetCollectingReceivedVehiclesRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetCollectingReceivedVehiclesResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetCollectingReceivedVehiclesResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCollectingTransferredVehicle**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetCollectingTransferredVehicleResponse getCollectingTransferredVehicle($collecting_transferred_vehicles_id)

Informacje o wpisie Prowadzący punkt zbierania pojazdów - Przekazane

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collecting_transferred_vehicles_id = "collecting_transferred_vehicles_id_example"; // string | 

try {
    $result = $apiInstance->getCollectingTransferredVehicle($collecting_transferred_vehicles_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->getCollectingTransferredVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collecting_transferred_vehicles_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetCollectingTransferredVehicleResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetCollectingTransferredVehicleResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCollectingTransferredVehicles**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetCollectingTransferredVehiclesResponse getCollectingTransferredVehicles($request)

Wyszukiwarka wpisów Prowadzący punkt zbierania pojazdów - Przekazane

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingTransferredVehicleV1GetCollectingTransferredVehiclesRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingTransferredVehicleV1GetCollectingTransferredVehiclesRequest | 

try {
    $result = $apiInstance->getCollectingTransferredVehicles($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->getCollectingTransferredVehicles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingTransferredVehicleV1GetCollectingTransferredVehiclesRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingTransferredVehicleV1GetCollectingTransferredVehiclesRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetCollectingTransferredVehiclesResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetCollectingTransferredVehiclesResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDismantleProcessedWaste**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleProcessedWasteResponse getDismantleProcessedWaste($dismantle_processed_waste_id)

Informacje o wpisie Prowadzący stację demontażu - Przetwarzane odpady

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dismantle_processed_waste_id = "dismantle_processed_waste_id_example"; // string | 

try {
    $result = $apiInstance->getDismantleProcessedWaste($dismantle_processed_waste_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->getDismantleProcessedWaste: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dismantle_processed_waste_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleProcessedWasteResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleProcessedWasteResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDismantleProcessedWastes**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleProcessedWastesResponse getDismantleProcessedWastes($request)

Wyszukiwarka wpisów Prowadzący stację demontażu - Przetwarzane odpady

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProcessedWasteV1GetDismantleProcessedWastesRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProcessedWasteV1GetDismantleProcessedWastesRequest | 

try {
    $result = $apiInstance->getDismantleProcessedWastes($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->getDismantleProcessedWastes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProcessedWasteV1GetDismantleProcessedWastesRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProcessedWasteV1GetDismantleProcessedWastesRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleProcessedWastesResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleProcessedWastesResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDismantleProducedWaste**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleProducedWasteResponse getDismantleProducedWaste($dismantle_produced_waste_id)

Informacje o wpisie Prowadzący stację demontażu - Wytwarzane odpady

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dismantle_produced_waste_id = "dismantle_produced_waste_id_example"; // string | 

try {
    $result = $apiInstance->getDismantleProducedWaste($dismantle_produced_waste_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->getDismantleProducedWaste: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dismantle_produced_waste_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleProducedWasteResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleProducedWasteResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDismantleProducedWastes**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleProducedWastesResponse getDismantleProducedWastes($request)

Wyszukiwarka wpisów Prowadzący stację demontażu - Wytwarzane odpady

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProducedWasteV1GetDismantleProducedWastesRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProducedWasteV1GetDismantleProducedWastesRequest | 

try {
    $result = $apiInstance->getDismantleProducedWastes($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->getDismantleProducedWastes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProducedWasteV1GetDismantleProducedWastesRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProducedWasteV1GetDismantleProducedWastesRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleProducedWastesResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleProducedWastesResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDismantleReceivedVehicle**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleReceivedVehicleResponse getDismantleReceivedVehicle($dismantle_received_vehicle_id)

Informacje o wpisie Prowadzący stację demontażu - Przyjete pojazdy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dismantle_received_vehicle_id = "dismantle_received_vehicle_id_example"; // string | 

try {
    $result = $apiInstance->getDismantleReceivedVehicle($dismantle_received_vehicle_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->getDismantleReceivedVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dismantle_received_vehicle_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleReceivedVehicleResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleReceivedVehicleResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDismantleReceivedVehicles**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleReceivedVehiclesResponse getDismantleReceivedVehicles($request)

Wyszukiwarka wpisów Prowadzący stację demontażu - Przyjete pojazdy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReceivedVehicleV1GetDismantleReceivedVehiclesRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReceivedVehicleV1GetDismantleReceivedVehiclesRequest | 

try {
    $result = $apiInstance->getDismantleReceivedVehicles($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->getDismantleReceivedVehicles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReceivedVehicleV1GetDismantleReceivedVehiclesRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReceivedVehicleV1GetDismantleReceivedVehiclesRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleReceivedVehiclesResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleReceivedVehiclesResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDismantleReusableEquipmentAndParts**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleReusableEquipmentAndPartsResponse getDismantleReusableEquipmentAndParts($dismantle_reusable_equipment_and_parts_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dismantle_reusable_equipment_and_parts_id = "dismantle_reusable_equipment_and_parts_id_example"; // string | 

try {
    $result = $apiInstance->getDismantleReusableEquipmentAndParts($dismantle_reusable_equipment_and_parts_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->getDismantleReusableEquipmentAndParts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dismantle_reusable_equipment_and_parts_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleReusableEquipmentAndPartsResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleReusableEquipmentAndPartsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDismantleReusableEquipmentAndPartsList**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleReusableEquipmentAndPartsListResponse getDismantleReusableEquipmentAndPartsList($request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReusableEquipmentAndPartsV1GetDismantleReusableEquipmentAndPartsListRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReusableEquipmentAndPartsV1GetDismantleReusableEquipmentAndPartsListRequest | 

try {
    $result = $apiInstance->getDismantleReusableEquipmentAndPartsList($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->getDismantleReusableEquipmentAndPartsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReusableEquipmentAndPartsV1GetDismantleReusableEquipmentAndPartsListRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReusableEquipmentAndPartsV1GetDismantleReusableEquipmentAndPartsListRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleReusableEquipmentAndPartsListResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleReusableEquipmentAndPartsListResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDismantleTransferredWaste**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleTransferredWasteResponse getDismantleTransferredWaste($dismantle_transferred_waste_id)

Informacje o wpisie Prowadzący stację demontażu - Przekazane odpady

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dismantle_transferred_waste_id = "dismantle_transferred_waste_id_example"; // string | 

try {
    $result = $apiInstance->getDismantleTransferredWaste($dismantle_transferred_waste_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->getDismantleTransferredWaste: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dismantle_transferred_waste_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleTransferredWasteResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleTransferredWasteResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDismantleTransferredWastes**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleTransferredWastesResponse getDismantleTransferredWastes($request)

Wyszukiwarka wpisów Prowadzący stację demontażu - Przekazane odpady

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleTransferredWasteV1GetDismantleTransferredWastesRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleTransferredWasteV1GetDismantleTransferredWastesRequest | 

try {
    $result = $apiInstance->getDismantleTransferredWastes($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->getDismantleTransferredWastes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleTransferredWasteV1GetDismantleTransferredWastesRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleTransferredWasteV1GetDismantleTransferredWastesRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleTransferredWastesResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleTransferredWastesResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDismantleWasteSummary**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleWasteSummaryResponse getDismantleWasteSummary($kepw_id)

Zestawienie danych - Prowadzący stację demontażu

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kepw_id = "kepw_id_example"; // string | 

try {
    $result = $apiInstance->getDismantleWasteSummary($kepw_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->getDismantleWasteSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kepw_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleWasteSummaryResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantleWasteSummaryResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKepw**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1KepwWithDismantleInitialWastes getKepw($kepw_id)

Informacje o karcie i liście stanów magazynowych - odpady

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kepw_id = "kepw_id_example"; // string | 

try {
    $result = $apiInstance->getKepw($kepw_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->getKepw: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kepw_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1KepwWithDismantleInitialWastes**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1KepwWithDismantleInitialWastes.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKepwCollectingPrintingPage**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetCollectingPrintingPageResponse getKepwCollectingPrintingPage($kepw_id)

Pobranie danych karty do wydruku - Prowadzący punkt zbierania pojazdów

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kepw_id = "kepw_id_example"; // string | 

try {
    $result = $apiInstance->getKepwCollectingPrintingPage($kepw_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->getKepwCollectingPrintingPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kepw_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetCollectingPrintingPageResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetCollectingPrintingPageResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKepwDismantlePrintingPage**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantlePrintingPageResponse getKepwDismantlePrintingPage($kepw_id)

Pobranie danych karty do wydruku - Prowadzący stację demontażu

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kepw_id = "kepw_id_example"; // string | 

try {
    $result = $apiInstance->getKepwDismantlePrintingPage($kepw_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->getKepwDismantlePrintingPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kepw_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantlePrintingPageResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1GetDismantlePrintingPageResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchKepw**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1KepwListItemWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull searchKepw($request)

Wyszukiwarka kart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardKepwV1SearchKepwRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardKepwV1SearchKepwRequest | 

try {
    $result = $apiInstance->searchKepw($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->searchKepw: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardKepwV1SearchKepwRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardKepwV1SearchKepwRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1KepwListItemWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull**](../Model/WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterWreckWasteRecordCardV1KepwListItemWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCollectingReceivedVehicle**
> object updateCollectingReceivedVehicle($request)

Edycja wpisu Prowadzący punkt zbierania pojazdów - Przyjęte

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingReceivedVehicleV1UpdateCollectingReceivedVehicleRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingReceivedVehicleV1UpdateCollectingReceivedVehicleRequest | 

try {
    $result = $apiInstance->updateCollectingReceivedVehicle($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->updateCollectingReceivedVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingReceivedVehicleV1UpdateCollectingReceivedVehicleRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingReceivedVehicleV1UpdateCollectingReceivedVehicleRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCollectingTransferredVehicle**
> object updateCollectingTransferredVehicle($request)

Edycja wpisu Prowadzący punkt zbierania pojazdów - Przekazane

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingTransferredVehicleV1UpdateCollectingTransferredVehicleRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingTransferredVehicleV1UpdateCollectingTransferredVehicleRequest | 

try {
    $result = $apiInstance->updateCollectingTransferredVehicle($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->updateCollectingTransferredVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingTransferredVehicleV1UpdateCollectingTransferredVehicleRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardCollectingTransferredVehicleV1UpdateCollectingTransferredVehicleRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDismantleProcessedWaste**
> object updateDismantleProcessedWaste($request)

Edycja wpisu Prowadzący stację demontażu - Przetwarzane odpady

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProcessedWasteV1UpdateDismantleProcessedWasteRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProcessedWasteV1UpdateDismantleProcessedWasteRequest | 

try {
    $result = $apiInstance->updateDismantleProcessedWaste($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->updateDismantleProcessedWaste: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProcessedWasteV1UpdateDismantleProcessedWasteRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProcessedWasteV1UpdateDismantleProcessedWasteRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDismantleProducedWaste**
> object updateDismantleProducedWaste($request)

Edycja wpisu Prowadzący stację demontażu - Wytwarzane odpady

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProducedWasteV1UpdateDismantleProducedWasteRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProducedWasteV1UpdateDismantleProducedWasteRequest | 

try {
    $result = $apiInstance->updateDismantleProducedWaste($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->updateDismantleProducedWaste: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProducedWasteV1UpdateDismantleProducedWasteRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleProducedWasteV1UpdateDismantleProducedWasteRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDismantleReceivedVehicle**
> object updateDismantleReceivedVehicle($request)

Edycja wpisu Prowadzący stację demontażu - Przyjete pojazdy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReceivedVehicleV1UpdateDismantleReceivedVehicleRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReceivedVehicleV1UpdateDismantleReceivedVehicleRequest | 

try {
    $result = $apiInstance->updateDismantleReceivedVehicle($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->updateDismantleReceivedVehicle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReceivedVehicleV1UpdateDismantleReceivedVehicleRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReceivedVehicleV1UpdateDismantleReceivedVehicleRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDismantleReusableEquipmentAndParts**
> object updateDismantleReusableEquipmentAndParts($request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReusableEquipmentAndPartsV1UpdateDismantleReusableEquipmentAndPartsRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReusableEquipmentAndPartsV1UpdateDismantleReusableEquipmentAndPartsRequest | 

try {
    $result = $apiInstance->updateDismantleReusableEquipmentAndParts($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->updateDismantleReusableEquipmentAndParts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReusableEquipmentAndPartsV1UpdateDismantleReusableEquipmentAndPartsRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleReusableEquipmentAndPartsV1UpdateDismantleReusableEquipmentAndPartsRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDismantleTransferredWaste**
> object updateDismantleTransferredWaste($request)

Edycja wpisu Prowadzący stację demontażu - Przekazane odpady

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleTransferredWasteV1UpdateDismantleTransferredWasteRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleTransferredWasteV1UpdateDismantleTransferredWasteRequest | 

try {
    $result = $apiInstance->updateDismantleTransferredWaste($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->updateDismantleTransferredWaste: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleTransferredWasteV1UpdateDismantleTransferredWasteRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardDismantleTransferredWasteV1UpdateDismantleTransferredWasteRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateKepw**
> object updateKepw($request)

Edycja karty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KepwApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardKepwV1UpdateKepwRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardKepwV1UpdateKepwRequest | 

try {
    $result = $apiInstance->updateKepw($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KepwApi->updateKepw: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardKepwV1UpdateKepwRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWreckWasteRecordCardKepwV1UpdateKepwRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

