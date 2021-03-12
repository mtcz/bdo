# Swagger\Client\KezsApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkKezsExistsByYearAndWasteCodeCreate**](KezsApi.md#checkKezsExistsByYearAndWasteCodeCreate) | **GET** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/card/exist/year/wastecodeCreate | Sprawdzenie czy w danym roku istnieje już karta z wybranym kodem odpadu
[**checkKezsExistsByYearAndWasteCodeEdit**](KezsApi.md#checkKezsExistsByYearAndWasteCodeEdit) | **GET** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/card/exist/year/wastecodeEdit | Sprawdzenie czy w danym roku oprócz wybranej karty istnieje inna z wybranym kodem odpadu
[**createKezs**](KezsApi.md#createKezs) | **POST** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/create | Tworzenie karty
[**createKezsEquipmentCollectingEntry**](KezsApi.md#createKezsEquipmentCollectingEntry) | **POST** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/KezsEquipmentCollectingEntry/create | Tworzenie wpisu \&quot;Zbieranie sprzętu\&quot;
[**createKezsEquipmentManagement**](KezsApi.md#createKezsEquipmentManagement) | **POST** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/KezsEquipmentManagement/create | Tworzenie wpisu \&quot;Gospodarowanie sprzętem\&quot;
[**createKezsStockWasteMassGroup**](KezsApi.md#createKezsStockWasteMassGroup) | **POST** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/KezsStockWasteMassGroup/create | Tworzenie wpisu Stany magazynowe - \&quot;Wytworzone odpady\&quot;
[**createKezsUsedEquipmentWasteGeneration**](KezsApi.md#createKezsUsedEquipmentWasteGeneration) | **POST** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/KezsUsedEquipmentWasteGeneration/create | Tworzenie wpisu \&quot;Wytwarzanie odpadów w wyniku przetworzenia zużytego sprzętu\&quot;
[**createKezsWasteManagementHandedOver**](KezsApi.md#createKezsWasteManagementHandedOver) | **POST** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/KezsWasteManagementHandedOver/create | Tworzenie wpisu \&quot;Gospodarowanie odpadami - przekazanie innemu posiadaczowi\&quot;
[**createKezsWasteManagementOnOnesOwn**](KezsApi.md#createKezsWasteManagementOnOnesOwn) | **POST** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/KezsWasteManagementOnOnesOwn/create | Tworzenie wpisu \&quot;Gospodarowanie odpadami - we własnym zakresie\&quot;
[**deleteKezs**](KezsApi.md#deleteKezs) | **DELETE** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/delete | Usunięcie karty
[**deleteKezsEquipmentCollectingEntry**](KezsApi.md#deleteKezsEquipmentCollectingEntry) | **DELETE** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/KezsEquipmentCollectingEntry/delete | Usunięcie wpisu \&quot;Zbieranie sprzętu\&quot;
[**deleteKezsEquipmentManagement**](KezsApi.md#deleteKezsEquipmentManagement) | **DELETE** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/KezsEquipmentManagement/delete | Usunięcie wpisu \&quot;Gospodarowanie sprzętem\&quot;
[**deleteKezsStockWasteMassGroup**](KezsApi.md#deleteKezsStockWasteMassGroup) | **DELETE** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/KezsStockWasteMassGroup/delete | Usunięcie wpisu Stany magazynowe - \&quot;Wytworzone odpady\&quot;
[**deleteKezsUsedEquipmentWasteGeneration**](KezsApi.md#deleteKezsUsedEquipmentWasteGeneration) | **DELETE** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/KezsUsedEquipmentWasteGeneration/delete | Usunięcie wpisu \&quot;Wytwarzanie odpadów w wyniku przetworzenia zużytego sprzętu\&quot;
[**deleteKezsWasteManagementHandedOver**](KezsApi.md#deleteKezsWasteManagementHandedOver) | **DELETE** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/KezsWasteManagementHandedOver/delete | Usunięcie wpisu \&quot;Gospodarowanie odpadami - przekazanie innemu posiadaczowi\&quot;
[**deleteKezsWasteManagementOnOnesOwn**](KezsApi.md#deleteKezsWasteManagementOnOnesOwn) | **DELETE** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/KezsWasteManagementOnOnesOwn/delete | Usunięcie wpisu \&quot;Gospodarowanie odpadami - we własnym zakresie\&quot;
[**getKezs**](KezsApi.md#getKezs) | **GET** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/card | Lista kart
[**getKezsEquipmentCollectingEntries**](KezsApi.md#getKezsEquipmentCollectingEntries) | **GET** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/KezsEquipmentCollectingEntry/items | Lista wpisów \&quot;Zbieranie sprzętu\&quot;
[**getKezsEquipmentCollectingEntry**](KezsApi.md#getKezsEquipmentCollectingEntry) | **GET** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/KezsEquipmentCollectingEntry/item | Informacje o wpisie \&quot;Zbieranie sprzętu\&quot;
[**getKezsEquipmentManagement**](KezsApi.md#getKezsEquipmentManagement) | **GET** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/KezsEquipmentManagement/item | Informacje o wpisie \&quot;Gospodarowanie sprzętem\&quot;
[**getKezsPrintingPageData**](KezsApi.md#getKezsPrintingPageData) | **GET** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/card/printingpage | Pobranie danych karty do wydruku
[**getKezsStockWasteMassGroup**](KezsApi.md#getKezsStockWasteMassGroup) | **GET** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/Kezs/KezsStockWasteMassGroup/card | Informacje o stanach magazynowych
[**getKezsUsedEquipmentWasteGenerationOver**](KezsApi.md#getKezsUsedEquipmentWasteGenerationOver) | **GET** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/KezsUsedEquipmentWasteGeneration/item | Informacje o wpisie \&quot;Wytwarzanie odpadów w wyniku przetworzenia zużytego sprzętu\&quot;
[**getKezsUsedEquipmentWasteGenerations**](KezsApi.md#getKezsUsedEquipmentWasteGenerations) | **GET** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/KezsUsedEquipmentWasteGeneration/items | Lista wpisów \&quot;Wytwarzanie odpadów w wyniku przetworzenia zużytego sprzętu\&quot;
[**getKezsWasteManagementHandedOver**](KezsApi.md#getKezsWasteManagementHandedOver) | **GET** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/KezsWasteManagementHandedOver/item | Informacje o wpisie \&quot;Gospodarowanie odpadami - przekazanie innemu posiadaczowi\&quot;
[**getKezsWasteManagementHandedOvers**](KezsApi.md#getKezsWasteManagementHandedOvers) | **GET** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/KezsWasteManagementHandedOver/items | Lista wpisów \&quot;Gospodarowanie odpadami - przekazanie innemu posiadaczowi\&quot;
[**getKezsWasteManagementOnOnesOwn**](KezsApi.md#getKezsWasteManagementOnOnesOwn) | **GET** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/KezsWasteManagementOnOnesOwn/item | Informacje o wpisie \&quot;Gospodarowanie odpadami - we własnym zakresie\&quot;
[**getKezsWasteManagementOnOnesOwns**](KezsApi.md#getKezsWasteManagementOnOnesOwns) | **GET** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/KezsWasteManagementOnOnesOwn/items | Lista wpisów \&quot;Gospodarowanie odpadami - we własnym zakresie\&quot;
[**searchKezs**](KezsApi.md#searchKezs) | **POST** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/search | Wyszukiwarka kart
[**updateKezs**](KezsApi.md#updateKezs) | **PUT** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/update | Edycja karty i stanów magazynowych zebranego sprzetu
[**updateKezsEquipmentCollectingEntry**](KezsApi.md#updateKezsEquipmentCollectingEntry) | **PUT** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/UpdateKezsEquipmentCollectingEntry/update | Edycja wpisu \&quot;Zbieranie sprzętu\&quot;
[**updateKezsEquipmentManagement**](KezsApi.md#updateKezsEquipmentManagement) | **PUT** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/UpdateKezsEquipmentManagement/update | Edycja wpisu \&quot;Gospodarowanie sprzętem\&quot;
[**updateKezsStockWasteMassGroup**](KezsApi.md#updateKezsStockWasteMassGroup) | **PUT** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/KezsStockWasteMassGroup/update | Edycja wpisu Stany magazynowe - \&quot;Wytworzone odpady\&quot;
[**updateKezsUsedEquipmentWasteGeneration**](KezsApi.md#updateKezsUsedEquipmentWasteGeneration) | **PUT** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/UpdateKezsUsedEquipmentWasteGeneration/update | Edycja wpisu \&quot;Wytwarzanie odpadów w wyniku przetworzenia zużytego sprzętu\&quot;
[**updateKezsWasteManagementHandedOver**](KezsApi.md#updateKezsWasteManagementHandedOver) | **PUT** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/UpdateKezsWasteManagementHandedOver/update | Edycja wpisu \&quot;Gospodarowanie odpadami - przekazanie innemu posiadaczowi\&quot;
[**updateKezsWasteManagementOnOnesOwn**](KezsApi.md#updateKezsWasteManagementOnOnesOwn) | **PUT** /WasteRegister/ElectronicWasteRecordCard/v1/Kezs/KezsEquipmentGroupCard/UpdateKezsWasteManagementOnOnesOwn/update | Edycja wpisu \&quot;Gospodarowanie odpadami - we własnym zakresie\&quot;


# **checkKezsExistsByYearAndWasteCodeCreate**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1CheckKezsExistsByYearAndWasteCodeCreateResponse checkKezsExistsByYearAndWasteCodeCreate($waste_code_id, $waste_code_extended, $waste_code_extended_description, $hazardous_waste_reclassification, $hazardous_waste_reclassification_description)

Sprawdzenie czy w danym roku istnieje już karta z wybranym kodem odpadu

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
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
    $result = $apiInstance->checkKezsExistsByYearAndWasteCodeCreate($waste_code_id, $waste_code_extended, $waste_code_extended_description, $hazardous_waste_reclassification, $hazardous_waste_reclassification_description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->checkKezsExistsByYearAndWasteCodeCreate: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1CheckKezsExistsByYearAndWasteCodeCreateResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1CheckKezsExistsByYearAndWasteCodeCreateResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkKezsExistsByYearAndWasteCodeEdit**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1CheckKezsExistsByYearAndWasteCodeEditResponse checkKezsExistsByYearAndWasteCodeEdit($kezs_id, $waste_code_id, $waste_code_extended, $waste_code_extended_description, $hazardous_waste_reclassification, $hazardous_waste_reclassification_description)

Sprawdzenie czy w danym roku oprócz wybranej karty istnieje inna z wybranym kodem odpadu

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kezs_id = "kezs_id_example"; // string | 
$waste_code_id = 56; // int | 
$waste_code_extended = true; // bool | 
$waste_code_extended_description = "waste_code_extended_description_example"; // string | 
$hazardous_waste_reclassification = true; // bool | 
$hazardous_waste_reclassification_description = "hazardous_waste_reclassification_description_example"; // string | 

try {
    $result = $apiInstance->checkKezsExistsByYearAndWasteCodeEdit($kezs_id, $waste_code_id, $waste_code_extended, $waste_code_extended_description, $hazardous_waste_reclassification, $hazardous_waste_reclassification_description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->checkKezsExistsByYearAndWasteCodeEdit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kezs_id** | [**string**](../Model/.md)|  | [optional]
 **waste_code_id** | **int**|  | [optional]
 **waste_code_extended** | **bool**|  | [optional]
 **waste_code_extended_description** | **string**|  | [optional]
 **hazardous_waste_reclassification** | **bool**|  | [optional]
 **hazardous_waste_reclassification_description** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1CheckKezsExistsByYearAndWasteCodeEditResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1CheckKezsExistsByYearAndWasteCodeEditResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createKezs**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsDto createKezs($request)

Tworzenie karty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsRequest | 

try {
    $result = $apiInstance->createKezs($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->createKezs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createKezsEquipmentCollectingEntry**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentCollectingEntryDto createKezsEquipmentCollectingEntry($request)

Tworzenie wpisu \"Zbieranie sprzętu\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsEquipmentCollectingEntryRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsEquipmentCollectingEntryRequest | 

try {
    $result = $apiInstance->createKezsEquipmentCollectingEntry($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->createKezsEquipmentCollectingEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsEquipmentCollectingEntryRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsEquipmentCollectingEntryRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentCollectingEntryDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentCollectingEntryDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createKezsEquipmentManagement**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentManagementDto createKezsEquipmentManagement($request)

Tworzenie wpisu \"Gospodarowanie sprzętem\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsEquipmentManagementRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsEquipmentManagementRequest | 

try {
    $result = $apiInstance->createKezsEquipmentManagement($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->createKezsEquipmentManagement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsEquipmentManagementRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsEquipmentManagementRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentManagementDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentManagementDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createKezsStockWasteMassGroup**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsStockWasteMassGroupDto createKezsStockWasteMassGroup($request)

Tworzenie wpisu Stany magazynowe - \"Wytworzone odpady\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsStockWasteMassGroupRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsStockWasteMassGroupRequest | 

try {
    $result = $apiInstance->createKezsStockWasteMassGroup($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->createKezsStockWasteMassGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsStockWasteMassGroupRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsStockWasteMassGroupRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsStockWasteMassGroupDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsStockWasteMassGroupDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createKezsUsedEquipmentWasteGeneration**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsUsedEquipmentWasteGenerationDto createKezsUsedEquipmentWasteGeneration($request)

Tworzenie wpisu \"Wytwarzanie odpadów w wyniku przetworzenia zużytego sprzętu\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsUsedEquipmentWasteGenerationRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsUsedEquipmentWasteGenerationRequest | 

try {
    $result = $apiInstance->createKezsUsedEquipmentWasteGeneration($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->createKezsUsedEquipmentWasteGeneration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsUsedEquipmentWasteGenerationRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsUsedEquipmentWasteGenerationRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsUsedEquipmentWasteGenerationDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsUsedEquipmentWasteGenerationDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createKezsWasteManagementHandedOver**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementHandedOverDto createKezsWasteManagementHandedOver($request)

Tworzenie wpisu \"Gospodarowanie odpadami - przekazanie innemu posiadaczowi\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsWasteManagementHandedOverRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsWasteManagementHandedOverRequest | 

try {
    $result = $apiInstance->createKezsWasteManagementHandedOver($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->createKezsWasteManagementHandedOver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsWasteManagementHandedOverRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsWasteManagementHandedOverRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementHandedOverDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementHandedOverDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createKezsWasteManagementOnOnesOwn**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementOnOnesOwnDto createKezsWasteManagementOnOnesOwn($request)

Tworzenie wpisu \"Gospodarowanie odpadami - we własnym zakresie\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsWasteManagementOnOnesOwnRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsWasteManagementOnOnesOwnRequest | 

try {
    $result = $apiInstance->createKezsWasteManagementOnOnesOwn($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->createKezsWasteManagementOnOnesOwn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsWasteManagementOnOnesOwnRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1CreateKezsWasteManagementOnOnesOwnRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementOnOnesOwnDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementOnOnesOwnDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKezs**
> object deleteKezs($request)

Usunięcie karty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsRequest | 

try {
    $result = $apiInstance->deleteKezs($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->deleteKezs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKezsEquipmentCollectingEntry**
> object deleteKezsEquipmentCollectingEntry($request)

Usunięcie wpisu \"Zbieranie sprzętu\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsEquipmentCollectingEntryRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsEquipmentCollectingEntryRequest | 

try {
    $result = $apiInstance->deleteKezsEquipmentCollectingEntry($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->deleteKezsEquipmentCollectingEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsEquipmentCollectingEntryRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsEquipmentCollectingEntryRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKezsEquipmentManagement**
> object deleteKezsEquipmentManagement($request)

Usunięcie wpisu \"Gospodarowanie sprzętem\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsEquipmentManagementRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsEquipmentManagementRequest | 

try {
    $result = $apiInstance->deleteKezsEquipmentManagement($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->deleteKezsEquipmentManagement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsEquipmentManagementRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsEquipmentManagementRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKezsStockWasteMassGroup**
> object deleteKezsStockWasteMassGroup($request)

Usunięcie wpisu Stany magazynowe - \"Wytworzone odpady\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsStockWasteMassGroupRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsStockWasteMassGroupRequest | 

try {
    $result = $apiInstance->deleteKezsStockWasteMassGroup($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->deleteKezsStockWasteMassGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsStockWasteMassGroupRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsStockWasteMassGroupRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKezsUsedEquipmentWasteGeneration**
> object deleteKezsUsedEquipmentWasteGeneration($request)

Usunięcie wpisu \"Wytwarzanie odpadów w wyniku przetworzenia zużytego sprzętu\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsUsedEquipmentWasteGenerationRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsUsedEquipmentWasteGenerationRequest | 

try {
    $result = $apiInstance->deleteKezsUsedEquipmentWasteGeneration($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->deleteKezsUsedEquipmentWasteGeneration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsUsedEquipmentWasteGenerationRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsUsedEquipmentWasteGenerationRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKezsWasteManagementHandedOver**
> object deleteKezsWasteManagementHandedOver($request)

Usunięcie wpisu \"Gospodarowanie odpadami - przekazanie innemu posiadaczowi\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsWasteManagementHandedOverRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsWasteManagementHandedOverRequest | 

try {
    $result = $apiInstance->deleteKezsWasteManagementHandedOver($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->deleteKezsWasteManagementHandedOver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsWasteManagementHandedOverRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsWasteManagementHandedOverRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKezsWasteManagementOnOnesOwn**
> object deleteKezsWasteManagementOnOnesOwn($request)

Usunięcie wpisu \"Gospodarowanie odpadami - we własnym zakresie\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsWasteManagementOnOnesOwnRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsWasteManagementOnOnesOwnRequest | 

try {
    $result = $apiInstance->deleteKezsWasteManagementOnOnesOwn($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->deleteKezsWasteManagementOnOnesOwn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsWasteManagementOnOnesOwnRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1DeleteKezsWasteManagementOnOnesOwnRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKezs**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1GetKezsResponse getKezs($kezs_id)

Lista kart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kezs_id = "kezs_id_example"; // string | 

try {
    $result = $apiInstance->getKezs($kezs_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->getKezs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kezs_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1GetKezsResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1GetKezsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKezsEquipmentCollectingEntries**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentCollectingEntryDto[] getKezsEquipmentCollectingEntries($kezs_equipment_group_card_id, $pagination_parameters_order_is_ascending, $pagination_parameters_order_order_column, $pagination_parameters_page_index, $pagination_parameters_page_size, $pagination_parameters_get_order_column, $pagination_parameters_get_order_direction, $pagination_parameters_get_ordering)

Lista wpisów \"Zbieranie sprzętu\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kezs_equipment_group_card_id = "kezs_equipment_group_card_id_example"; // string | 
$pagination_parameters_order_is_ascending = true; // bool | Flaga ustawiana na true, jeśli zbiór ma być posortowany rosnąco, false w przeciwnym razie
$pagination_parameters_order_order_column = "pagination_parameters_order_order_column_example"; // string | Identyfikator kolumny, według której ma być zrelizowane sortowanie
$pagination_parameters_page_index = 789; // int | Indeks strony
$pagination_parameters_page_size = 789; // int | Ilość wyników na stronie (min 1, max 50)
$pagination_parameters_get_order_column = "pagination_parameters_get_order_column_example"; // string | Identyfikator kolumny, według której ma być zrelizowane sortowanie
$pagination_parameters_get_order_direction = "pagination_parameters_get_order_direction_example"; // string | Kierunek sortowania
$pagination_parameters_get_ordering = "pagination_parameters_get_ordering_example"; // string | Sortowanie

try {
    $result = $apiInstance->getKezsEquipmentCollectingEntries($kezs_equipment_group_card_id, $pagination_parameters_order_is_ascending, $pagination_parameters_order_order_column, $pagination_parameters_page_index, $pagination_parameters_page_size, $pagination_parameters_get_order_column, $pagination_parameters_get_order_direction, $pagination_parameters_get_ordering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->getKezsEquipmentCollectingEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kezs_equipment_group_card_id** | [**string**](../Model/.md)|  | [optional]
 **pagination_parameters_order_is_ascending** | **bool**| Flaga ustawiana na true, jeśli zbiór ma być posortowany rosnąco, false w przeciwnym razie | [optional]
 **pagination_parameters_order_order_column** | **string**| Identyfikator kolumny, według której ma być zrelizowane sortowanie | [optional]
 **pagination_parameters_page_index** | **int**| Indeks strony | [optional]
 **pagination_parameters_page_size** | **int**| Ilość wyników na stronie (min 1, max 50) | [optional]
 **pagination_parameters_get_order_column** | **string**| Identyfikator kolumny, według której ma być zrelizowane sortowanie | [optional]
 **pagination_parameters_get_order_direction** | **string**| Kierunek sortowania | [optional]
 **pagination_parameters_get_ordering** | **string**| Sortowanie | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentCollectingEntryDto[]**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentCollectingEntryDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKezsEquipmentCollectingEntry**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentCollectingEntryDto getKezsEquipmentCollectingEntry($kezs_equipment_collecting_entry_id)

Informacje o wpisie \"Zbieranie sprzętu\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kezs_equipment_collecting_entry_id = "kezs_equipment_collecting_entry_id_example"; // string | 

try {
    $result = $apiInstance->getKezsEquipmentCollectingEntry($kezs_equipment_collecting_entry_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->getKezsEquipmentCollectingEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kezs_equipment_collecting_entry_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentCollectingEntryDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentCollectingEntryDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKezsEquipmentManagement**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentManagementDto getKezsEquipmentManagement($kezs_equipment_management_id)

Informacje o wpisie \"Gospodarowanie sprzętem\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kezs_equipment_management_id = "kezs_equipment_management_id_example"; // string | 

try {
    $result = $apiInstance->getKezsEquipmentManagement($kezs_equipment_management_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->getKezsEquipmentManagement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kezs_equipment_management_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentManagementDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsEquipmentManagementDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKezsPrintingPageData**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1GetKezsPrintingPageDataResponse getKezsPrintingPageData($kezs_id, $group_number)

Pobranie danych karty do wydruku

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kezs_id = "kezs_id_example"; // string | 
$group_number = 56; // int | 

try {
    $result = $apiInstance->getKezsPrintingPageData($kezs_id, $group_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->getKezsPrintingPageData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kezs_id** | [**string**](../Model/.md)|  | [optional]
 **group_number** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1GetKezsPrintingPageDataResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1GetKezsPrintingPageDataResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKezsStockWasteMassGroup**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsStockWasteMassGroupDto getKezsStockWasteMassGroup($kezs_stock_waste_mass_group_id)

Informacje o stanach magazynowych

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kezs_stock_waste_mass_group_id = "kezs_stock_waste_mass_group_id_example"; // string | 

try {
    $result = $apiInstance->getKezsStockWasteMassGroup($kezs_stock_waste_mass_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->getKezsStockWasteMassGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kezs_stock_waste_mass_group_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsStockWasteMassGroupDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsStockWasteMassGroupDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKezsUsedEquipmentWasteGenerationOver**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsUsedEquipmentWasteGenerationDto getKezsUsedEquipmentWasteGenerationOver($kezs_used_equipment_waste_generation_id)

Informacje o wpisie \"Wytwarzanie odpadów w wyniku przetworzenia zużytego sprzętu\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kezs_used_equipment_waste_generation_id = "kezs_used_equipment_waste_generation_id_example"; // string | 

try {
    $result = $apiInstance->getKezsUsedEquipmentWasteGenerationOver($kezs_used_equipment_waste_generation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->getKezsUsedEquipmentWasteGenerationOver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kezs_used_equipment_waste_generation_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsUsedEquipmentWasteGenerationDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsUsedEquipmentWasteGenerationDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKezsUsedEquipmentWasteGenerations**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsUsedEquipmentWasteGenerationDto[] getKezsUsedEquipmentWasteGenerations($kezs_equipment_group_card_id, $pagination_parameters_order_is_ascending, $pagination_parameters_order_order_column, $pagination_parameters_page_index, $pagination_parameters_page_size, $pagination_parameters_get_order_column, $pagination_parameters_get_order_direction, $pagination_parameters_get_ordering)

Lista wpisów \"Wytwarzanie odpadów w wyniku przetworzenia zużytego sprzętu\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kezs_equipment_group_card_id = "kezs_equipment_group_card_id_example"; // string | 
$pagination_parameters_order_is_ascending = true; // bool | Flaga ustawiana na true, jeśli zbiór ma być posortowany rosnąco, false w przeciwnym razie
$pagination_parameters_order_order_column = "pagination_parameters_order_order_column_example"; // string | Identyfikator kolumny, według której ma być zrelizowane sortowanie
$pagination_parameters_page_index = 789; // int | Indeks strony
$pagination_parameters_page_size = 789; // int | Ilość wyników na stronie (min 1, max 50)
$pagination_parameters_get_order_column = "pagination_parameters_get_order_column_example"; // string | Identyfikator kolumny, według której ma być zrelizowane sortowanie
$pagination_parameters_get_order_direction = "pagination_parameters_get_order_direction_example"; // string | Kierunek sortowania
$pagination_parameters_get_ordering = "pagination_parameters_get_ordering_example"; // string | Sortowanie

try {
    $result = $apiInstance->getKezsUsedEquipmentWasteGenerations($kezs_equipment_group_card_id, $pagination_parameters_order_is_ascending, $pagination_parameters_order_order_column, $pagination_parameters_page_index, $pagination_parameters_page_size, $pagination_parameters_get_order_column, $pagination_parameters_get_order_direction, $pagination_parameters_get_ordering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->getKezsUsedEquipmentWasteGenerations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kezs_equipment_group_card_id** | [**string**](../Model/.md)|  | [optional]
 **pagination_parameters_order_is_ascending** | **bool**| Flaga ustawiana na true, jeśli zbiór ma być posortowany rosnąco, false w przeciwnym razie | [optional]
 **pagination_parameters_order_order_column** | **string**| Identyfikator kolumny, według której ma być zrelizowane sortowanie | [optional]
 **pagination_parameters_page_index** | **int**| Indeks strony | [optional]
 **pagination_parameters_page_size** | **int**| Ilość wyników na stronie (min 1, max 50) | [optional]
 **pagination_parameters_get_order_column** | **string**| Identyfikator kolumny, według której ma być zrelizowane sortowanie | [optional]
 **pagination_parameters_get_order_direction** | **string**| Kierunek sortowania | [optional]
 **pagination_parameters_get_ordering** | **string**| Sortowanie | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsUsedEquipmentWasteGenerationDto[]**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsUsedEquipmentWasteGenerationDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKezsWasteManagementHandedOver**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementHandedOverDto getKezsWasteManagementHandedOver($kezs_waste_management_handed_over_id)

Informacje o wpisie \"Gospodarowanie odpadami - przekazanie innemu posiadaczowi\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kezs_waste_management_handed_over_id = "kezs_waste_management_handed_over_id_example"; // string | 

try {
    $result = $apiInstance->getKezsWasteManagementHandedOver($kezs_waste_management_handed_over_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->getKezsWasteManagementHandedOver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kezs_waste_management_handed_over_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementHandedOverDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementHandedOverDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKezsWasteManagementHandedOvers**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementHandedOverDto[] getKezsWasteManagementHandedOvers($kezs_equipment_group_card_id, $pagination_parameters_order_is_ascending, $pagination_parameters_order_order_column, $pagination_parameters_page_index, $pagination_parameters_page_size, $pagination_parameters_get_order_column, $pagination_parameters_get_order_direction, $pagination_parameters_get_ordering)

Lista wpisów \"Gospodarowanie odpadami - przekazanie innemu posiadaczowi\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kezs_equipment_group_card_id = "kezs_equipment_group_card_id_example"; // string | 
$pagination_parameters_order_is_ascending = true; // bool | Flaga ustawiana na true, jeśli zbiór ma być posortowany rosnąco, false w przeciwnym razie
$pagination_parameters_order_order_column = "pagination_parameters_order_order_column_example"; // string | Identyfikator kolumny, według której ma być zrelizowane sortowanie
$pagination_parameters_page_index = 789; // int | Indeks strony
$pagination_parameters_page_size = 789; // int | Ilość wyników na stronie (min 1, max 50)
$pagination_parameters_get_order_column = "pagination_parameters_get_order_column_example"; // string | Identyfikator kolumny, według której ma być zrelizowane sortowanie
$pagination_parameters_get_order_direction = "pagination_parameters_get_order_direction_example"; // string | Kierunek sortowania
$pagination_parameters_get_ordering = "pagination_parameters_get_ordering_example"; // string | Sortowanie

try {
    $result = $apiInstance->getKezsWasteManagementHandedOvers($kezs_equipment_group_card_id, $pagination_parameters_order_is_ascending, $pagination_parameters_order_order_column, $pagination_parameters_page_index, $pagination_parameters_page_size, $pagination_parameters_get_order_column, $pagination_parameters_get_order_direction, $pagination_parameters_get_ordering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->getKezsWasteManagementHandedOvers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kezs_equipment_group_card_id** | [**string**](../Model/.md)|  | [optional]
 **pagination_parameters_order_is_ascending** | **bool**| Flaga ustawiana na true, jeśli zbiór ma być posortowany rosnąco, false w przeciwnym razie | [optional]
 **pagination_parameters_order_order_column** | **string**| Identyfikator kolumny, według której ma być zrelizowane sortowanie | [optional]
 **pagination_parameters_page_index** | **int**| Indeks strony | [optional]
 **pagination_parameters_page_size** | **int**| Ilość wyników na stronie (min 1, max 50) | [optional]
 **pagination_parameters_get_order_column** | **string**| Identyfikator kolumny, według której ma być zrelizowane sortowanie | [optional]
 **pagination_parameters_get_order_direction** | **string**| Kierunek sortowania | [optional]
 **pagination_parameters_get_ordering** | **string**| Sortowanie | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementHandedOverDto[]**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementHandedOverDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKezsWasteManagementOnOnesOwn**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementOnOnesOwnDto getKezsWasteManagementOnOnesOwn($kezs_waste_management_on_ones_own_id)

Informacje o wpisie \"Gospodarowanie odpadami - we własnym zakresie\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kezs_waste_management_on_ones_own_id = "kezs_waste_management_on_ones_own_id_example"; // string | 

try {
    $result = $apiInstance->getKezsWasteManagementOnOnesOwn($kezs_waste_management_on_ones_own_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->getKezsWasteManagementOnOnesOwn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kezs_waste_management_on_ones_own_id** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementOnOnesOwnDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementOnOnesOwnDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKezsWasteManagementOnOnesOwns**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementOnOnesOwnDto[] getKezsWasteManagementOnOnesOwns($kezs_equipment_group_card_id, $pagination_parameters_order_is_ascending, $pagination_parameters_order_order_column, $pagination_parameters_page_index, $pagination_parameters_page_size, $pagination_parameters_get_order_column, $pagination_parameters_get_order_direction, $pagination_parameters_get_ordering)

Lista wpisów \"Gospodarowanie odpadami - we własnym zakresie\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kezs_equipment_group_card_id = "kezs_equipment_group_card_id_example"; // string | 
$pagination_parameters_order_is_ascending = true; // bool | Flaga ustawiana na true, jeśli zbiór ma być posortowany rosnąco, false w przeciwnym razie
$pagination_parameters_order_order_column = "pagination_parameters_order_order_column_example"; // string | Identyfikator kolumny, według której ma być zrelizowane sortowanie
$pagination_parameters_page_index = 789; // int | Indeks strony
$pagination_parameters_page_size = 789; // int | Ilość wyników na stronie (min 1, max 50)
$pagination_parameters_get_order_column = "pagination_parameters_get_order_column_example"; // string | Identyfikator kolumny, według której ma być zrelizowane sortowanie
$pagination_parameters_get_order_direction = "pagination_parameters_get_order_direction_example"; // string | Kierunek sortowania
$pagination_parameters_get_ordering = "pagination_parameters_get_ordering_example"; // string | Sortowanie

try {
    $result = $apiInstance->getKezsWasteManagementOnOnesOwns($kezs_equipment_group_card_id, $pagination_parameters_order_is_ascending, $pagination_parameters_order_order_column, $pagination_parameters_page_index, $pagination_parameters_page_size, $pagination_parameters_get_order_column, $pagination_parameters_get_order_direction, $pagination_parameters_get_ordering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->getKezsWasteManagementOnOnesOwns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kezs_equipment_group_card_id** | [**string**](../Model/.md)|  | [optional]
 **pagination_parameters_order_is_ascending** | **bool**| Flaga ustawiana na true, jeśli zbiór ma być posortowany rosnąco, false w przeciwnym razie | [optional]
 **pagination_parameters_order_order_column** | **string**| Identyfikator kolumny, według której ma być zrelizowane sortowanie | [optional]
 **pagination_parameters_page_index** | **int**| Indeks strony | [optional]
 **pagination_parameters_page_size** | **int**| Ilość wyników na stronie (min 1, max 50) | [optional]
 **pagination_parameters_get_order_column** | **string**| Identyfikator kolumny, według której ma być zrelizowane sortowanie | [optional]
 **pagination_parameters_get_order_direction** | **string**| Kierunek sortowania | [optional]
 **pagination_parameters_get_ordering** | **string**| Sortowanie | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementOnOnesOwnDto[]**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1KezsWasteManagementOnOnesOwnDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchKezs**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1SearchKezsResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull searchKezs($request)

Wyszukiwarka kart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1SearchKezsRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1SearchKezsRequest | 

try {
    $result = $apiInstance->searchKezs($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->searchKezs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1SearchKezsRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1SearchKezsRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1SearchKezsResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull**](../Model/WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterElectronicWasteRecordCardV1SearchKezsResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateKezs**
> object updateKezs($request)

Edycja karty i stanów magazynowych zebranego sprzetu

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsRequest | 

try {
    $result = $apiInstance->updateKezs($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->updateKezs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateKezsEquipmentCollectingEntry**
> object updateKezsEquipmentCollectingEntry($request)

Edycja wpisu \"Zbieranie sprzętu\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsEquipmentCollectingEntryRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsEquipmentCollectingEntryRequest | 

try {
    $result = $apiInstance->updateKezsEquipmentCollectingEntry($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->updateKezsEquipmentCollectingEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsEquipmentCollectingEntryRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsEquipmentCollectingEntryRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateKezsEquipmentManagement**
> object updateKezsEquipmentManagement($request)

Edycja wpisu \"Gospodarowanie sprzętem\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsEquipmentManagementRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsEquipmentManagementRequest | 

try {
    $result = $apiInstance->updateKezsEquipmentManagement($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->updateKezsEquipmentManagement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsEquipmentManagementRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsEquipmentManagementRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateKezsStockWasteMassGroup**
> object updateKezsStockWasteMassGroup($request)

Edycja wpisu Stany magazynowe - \"Wytworzone odpady\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsStockWasteMassGroupRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsStockWasteMassGroupRequest | 

try {
    $result = $apiInstance->updateKezsStockWasteMassGroup($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->updateKezsStockWasteMassGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsStockWasteMassGroupRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsStockWasteMassGroupRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateKezsUsedEquipmentWasteGeneration**
> object updateKezsUsedEquipmentWasteGeneration($request)

Edycja wpisu \"Wytwarzanie odpadów w wyniku przetworzenia zużytego sprzętu\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsUsedEquipmentWasteGenerationRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsUsedEquipmentWasteGenerationRequest | 

try {
    $result = $apiInstance->updateKezsUsedEquipmentWasteGeneration($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->updateKezsUsedEquipmentWasteGeneration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsUsedEquipmentWasteGenerationRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsUsedEquipmentWasteGenerationRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateKezsWasteManagementHandedOver**
> object updateKezsWasteManagementHandedOver($request)

Edycja wpisu \"Gospodarowanie odpadami - przekazanie innemu posiadaczowi\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsWasteManagementHandedOverRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsWasteManagementHandedOverRequest | 

try {
    $result = $apiInstance->updateKezsWasteManagementHandedOver($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->updateKezsWasteManagementHandedOver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsWasteManagementHandedOverRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsWasteManagementHandedOverRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateKezsWasteManagementOnOnesOwn**
> object updateKezsWasteManagementOnOnesOwn($request)

Edycja wpisu \"Gospodarowanie odpadami - we własnym zakresie\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KezsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsWasteManagementOnOnesOwnRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsWasteManagementOnOnesOwnRequest | 

try {
    $result = $apiInstance->updateKezsWasteManagementOnOnesOwn($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KezsApi->updateKezsWasteManagementOnOnesOwn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsWasteManagementOnOnesOwnRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterElectronicWasteRecordCardV1UpdateKezsWasteManagementOnOnesOwnRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

