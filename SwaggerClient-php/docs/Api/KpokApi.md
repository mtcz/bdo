# Swagger\Client\KpokApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveKpok**](KpokApi.md#approveKpok) | **PUT** /WasteRegister/WasteTransferCard/v1/Kpok/approve/card | Zmiana statusu karty z \&quot;Planowana\&quot; na \&quot;Zatwierdzona\&quot;
[**assignReceiveConfirmationToKpok**](KpokApi.md#assignReceiveConfirmationToKpok) | **PUT** /WasteRegister/WasteTransferCard/v1/Kpok/assign/receiveconfirmation | Zmiana statusu karty z \&quot;Potwierdzenie wygenerowane\&quot; na \&quot;Potwierdzenie przejęcia\&quot;
[**changeKpokStatusToTransportConfirmation**](KpokApi.md#changeKpokStatusToTransportConfirmation) | **PUT** /WasteRegister/WasteTransferCard/v1/Kpok/status/transportconfirmation | Zmiana statusu karty z \&quot;Potwierdzenie przejęcia\&quot; na \&quot;Potwierdzenie transportu\&quot;
[**deleteKpok**](KpokApi.md#deleteKpok) | **DELETE** /WasteRegister/WasteTransferCard/v1/Kpok/delete | Usunięcie karty ze statusem \&quot;Planowana\&quot;
[**getApprovedKpok**](KpokApi.md#getApprovedKpok) | **GET** /WasteRegister/WasteTransferCard/v1/Kpok/approved/card | Informacje o karcie ze statusem \&quot;Zatwierdzona\&quot;
[**getConfirmationGeneratedKpok**](KpokApi.md#getConfirmationGeneratedKpok) | **GET** /WasteRegister/WasteTransferCard/v1/Kpok/confirmationgenerated/card | Informacje o karcie ze statusem \&quot;Wygenerowane potwierdzenie\&quot;
[**getKpokReceivePrintingPage**](KpokApi.md#getKpokReceivePrintingPage) | **GET** /WasteRegister/WasteTransferCard/v1/Kpok/printingpage/receive | Pobranie danych karty przekazania do wydruku, dla podtypu \&quot;Odbiór\&quot;
[**getKpokTransferPrintingPage**](KpokApi.md#getKpokTransferPrintingPage) | **GET** /WasteRegister/WasteTransferCard/v1/Kpok/printingpage/transfer | Pobranie danych karty do wydruku, dla podtypu \&quot;Przekazanie\&quot;
[**getPlannedKpok**](KpokApi.md#getPlannedKpok) | **GET** /WasteRegister/WasteTransferCard/v1/Kpok/planned/card | Informacje o karcie ze statusem \&quot;Planowana\&quot;
[**getReceiveConfirmedKpok**](KpokApi.md#getReceiveConfirmedKpok) | **GET** /WasteRegister/WasteTransferCard/v1/Kpok/receiveconfirmed/card | Informacje o karcie ze statusem \&quot;Potwierdzenie przejęcia\&quot;
[**getRejectedKpok**](KpokApi.md#getRejectedKpok) | **GET** /WasteRegister/WasteTransferCard/v1/Kpok/rejected/card | Informacje o karcie ze statusem \&quot;Odrzucona\&quot;
[**getTransportConfirmationKpok**](KpokApi.md#getTransportConfirmationKpok) | **GET** /WasteRegister/WasteTransferCard/v1/Kpok/transportconfirmation/card | Informacje o karcie ze statusem \&quot;Potwierdzony transport\&quot;
[**getWithdrawnKpok**](KpokApi.md#getWithdrawnKpok) | **GET** /WasteRegister/WasteTransferCard/v1/Kpok/withdrawn/card | Informacje o karcie ze statusem \&quot;Wycofana\&quot;
[**planReceiveKpok**](KpokApi.md#planReceiveKpok) | **POST** /WasteRegister/WasteTransferCard/v1/Kpok/create/plannedreceivecard | Tworzenie karty ze statusem \&quot;Planowana\&quot; dla podtypu \&quot;Odbiór\&quot;
[**planTransferKpok**](KpokApi.md#planTransferKpok) | **POST** /WasteRegister/WasteTransferCard/v1/Kpok/create/plannedtransfercard | Tworzenie karty ze statusem \&quot;Planowana\&quot; dla podtypu \&quot;Przekazanie\&quot;
[**promoteKpokToConfirmationGenerated**](KpokApi.md#promoteKpokToConfirmationGenerated) | **PUT** /WasteRegister/WasteTransferCard/v1/Kpok/promote/confirmationgenerated | Zmiana statusu karty z \&quot;Zatwierdzona\&quot; na \&quot;Wygenerowane potwierdzenie\&quot;
[**rejectKpok**](KpokApi.md#rejectKpok) | **PUT** /WasteRegister/WasteTransferCard/v1/Kpok/reject/card | Zmiana statusu karty \&quot;Potwierdzenie wygenerowane\&quot; na \&quot;Odrzucona\&quot;
[**reviseKpok**](KpokApi.md#reviseKpok) | **PUT** /WasteRegister/WasteTransferCard/v1/Kpok/revise | Korekta odrzuconej karty
[**searchKpokAsCarrier**](KpokApi.md#searchKpokAsCarrier) | **POST** /WasteRegister/WasteTransferCard/v1/Kpok/carrier/search | Wyszukiwarka kart, gdzie bieżący podmiot występuje w roli Transportującego
[**searchKpokAsReceiver**](KpokApi.md#searchKpokAsReceiver) | **POST** /WasteRegister/WasteTransferCard/v1/Kpok/receiver/search | Wyszukiwarka kart, gdzie bieżący podmiot występuje w roli Przejmującego
[**searchKpokAsSender**](KpokApi.md#searchKpokAsSender) | **POST** /WasteRegister/WasteTransferCard/v1/Kpok/sender/search | Wyszukiwarka kart, gdzie bieżący podmiot występuje w roli Przekazującego
[**searchReceiverKpokAsSender**](KpokApi.md#searchReceiverKpokAsSender) | **POST** /WasteRegister/WasteTransferCard/v1/Kpok/receivercards/sender | Lista kart ze statusem \&quot;Zrealizowane przejęcie\&quot; lub \&quot;Potwierdzony transport\&quot;, gdzie bieżący podmiot występuje w roli przekazującego odpady
[**searchSenderKpokAsReceiver**](KpokApi.md#searchSenderKpokAsReceiver) | **POST** /WasteRegister/WasteTransferCard/v1/Kpok/sendercards/receiver | Lista kart ze statusem \&quot;Zrealizowane przejęcie\&quot; lub \&quot;Potwierdzony transport\&quot;, gdzie bieżący podmiot występuje w roli przejmującego odpady
[**updateApprovedReceiveKpok**](KpokApi.md#updateApprovedReceiveKpok) | **PUT** /WasteRegister/WasteTransferCard/v1/Kpok/update/approvedreceivecard | Edycja karty ze statusem \&quot;Zatwierdzona\&quot;, dla podtypu \&quot;Odbiór\&quot;
[**updateApprovedTransferKpok**](KpokApi.md#updateApprovedTransferKpok) | **PUT** /WasteRegister/WasteTransferCard/v1/Kpok/update/approvedtransfercard | Edycja karty ze statusem \&quot;Zatwierdzona\&quot;, dla podtypu \&quot;Przekazanie\&quot;
[**updatePlannedReceiveKpok**](KpokApi.md#updatePlannedReceiveKpok) | **PUT** /WasteRegister/WasteTransferCard/v1/Kpok/update/plannedreceivecard | Edycja karty ze statusem \&quot;Planowana\&quot;, dla podtypu \&quot;Odbiór\&quot;
[**updatePlannedTransferKpok**](KpokApi.md#updatePlannedTransferKpok) | **PUT** /WasteRegister/WasteTransferCard/v1/Kpok/update/plannedtransfercard | Edycja karty ze statusem \&quot;Planowana\&quot;, dla podtypu \&quot;Przekazanie\&quot;
[**withdrawnKpok**](KpokApi.md#withdrawnKpok) | **PUT** /WasteRegister/WasteTransferCard/v1/Kpok/card/withdrawn | Zmiana statusu karty z \&quot;Zatwierdzona\&quot; lub \&quot;Potwierdzenie wygenerowane\&quot; na \&quot;Wycofana\&quot;.


# **approveKpok**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1ApproveKpokResponse approveKpok($request)

Zmiana statusu karty z \"Planowana\" na \"Zatwierdzona\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1ApproveKpokRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1ApproveKpokRequest | 

try {
    $result = $apiInstance->approveKpok($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->approveKpok: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1ApproveKpokRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1ApproveKpokRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1ApproveKpokResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1ApproveKpokResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assignReceiveConfirmationToKpok**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1AssignReceiveConfirmationToKpokResponse assignReceiveConfirmationToKpok($request)

Zmiana statusu karty z \"Potwierdzenie wygenerowane\" na \"Potwierdzenie przejęcia\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1AssignReceiveConfirmationToKpokRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1AssignReceiveConfirmationToKpokRequest | 

try {
    $result = $apiInstance->assignReceiveConfirmationToKpok($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->assignReceiveConfirmationToKpok: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1AssignReceiveConfirmationToKpokRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1AssignReceiveConfirmationToKpokRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1AssignReceiveConfirmationToKpokResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1AssignReceiveConfirmationToKpokResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeKpokStatusToTransportConfirmation**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1ChangeKpokStatusToTransportConfirmationResponse changeKpokStatusToTransportConfirmation($request)

Zmiana statusu karty z \"Potwierdzenie przejęcia\" na \"Potwierdzenie transportu\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1ChangeKpokStatusToTransportConfirmationRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1ChangeKpokStatusToTransportConfirmationRequest | 

try {
    $result = $apiInstance->changeKpokStatusToTransportConfirmation($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->changeKpokStatusToTransportConfirmation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1ChangeKpokStatusToTransportConfirmationRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1ChangeKpokStatusToTransportConfirmationRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1ChangeKpokStatusToTransportConfirmationResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1ChangeKpokStatusToTransportConfirmationResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKpok**
> object deleteKpok($request)

Usunięcie karty ze statusem \"Planowana\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1DeleteKpokRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1DeleteKpokRequest | 

try {
    $result = $apiInstance->deleteKpok($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->deleteKpok: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1DeleteKpokRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1DeleteKpokRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApprovedKpok**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1ApprovedKpokDto getApprovedKpok($kpok_id, $company_type)

Informacje o karcie ze statusem \"Zatwierdzona\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kpok_id = "kpok_id_example"; // string | Id karty
$company_type = "company_type_example"; // string | 

try {
    $result = $apiInstance->getApprovedKpok($kpok_id, $company_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->getApprovedKpok: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kpok_id** | [**string**](../Model/.md)| Id karty | [optional]
 **company_type** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1ApprovedKpokDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1ApprovedKpokDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConfirmationGeneratedKpok**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1ConfirmationGeneratedKpokDto getConfirmationGeneratedKpok($kpok_id, $company_type)

Informacje o karcie ze statusem \"Wygenerowane potwierdzenie\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kpok_id = "kpok_id_example"; // string | Id karty
$company_type = "company_type_example"; // string | 

try {
    $result = $apiInstance->getConfirmationGeneratedKpok($kpok_id, $company_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->getConfirmationGeneratedKpok: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kpok_id** | [**string**](../Model/.md)| Id karty | [optional]
 **company_type** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1ConfirmationGeneratedKpokDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1ConfirmationGeneratedKpokDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKpokReceivePrintingPage**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1KpokReceivePrintingPage getKpokReceivePrintingPage($kpok_id)

Pobranie danych karty przekazania do wydruku, dla podtypu \"Odbiór\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kpok_id = "kpok_id_example"; // string | Id karty

try {
    $result = $apiInstance->getKpokReceivePrintingPage($kpok_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->getKpokReceivePrintingPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kpok_id** | [**string**](../Model/.md)| Id karty | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1KpokReceivePrintingPage**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1KpokReceivePrintingPage.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKpokTransferPrintingPage**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1KpokTransferPrintingPage getKpokTransferPrintingPage($kpok_id)

Pobranie danych karty do wydruku, dla podtypu \"Przekazanie\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kpok_id = "kpok_id_example"; // string | Id karty

try {
    $result = $apiInstance->getKpokTransferPrintingPage($kpok_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->getKpokTransferPrintingPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kpok_id** | [**string**](../Model/.md)| Id karty | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1KpokTransferPrintingPage**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1KpokTransferPrintingPage.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPlannedKpok**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1PlannedKpokDto getPlannedKpok($kpok_id, $company_type)

Informacje o karcie ze statusem \"Planowana\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kpok_id = "kpok_id_example"; // string | Id karty
$company_type = "company_type_example"; // string | 

try {
    $result = $apiInstance->getPlannedKpok($kpok_id, $company_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->getPlannedKpok: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kpok_id** | [**string**](../Model/.md)| Id karty | [optional]
 **company_type** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1PlannedKpokDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1PlannedKpokDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReceiveConfirmedKpok**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1ReceiveConfirmedKpokDto getReceiveConfirmedKpok($kpok_id, $company_type)

Informacje o karcie ze statusem \"Potwierdzenie przejęcia\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kpok_id = "kpok_id_example"; // string | Id karty
$company_type = "company_type_example"; // string | 

try {
    $result = $apiInstance->getReceiveConfirmedKpok($kpok_id, $company_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->getReceiveConfirmedKpok: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kpok_id** | [**string**](../Model/.md)| Id karty | [optional]
 **company_type** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1ReceiveConfirmedKpokDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1ReceiveConfirmedKpokDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRejectedKpok**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1RejectedKpokDto getRejectedKpok($kpok_id, $company_type)

Informacje o karcie ze statusem \"Odrzucona\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kpok_id = "kpok_id_example"; // string | Id karty
$company_type = "company_type_example"; // string | 

try {
    $result = $apiInstance->getRejectedKpok($kpok_id, $company_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->getRejectedKpok: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kpok_id** | [**string**](../Model/.md)| Id karty | [optional]
 **company_type** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1RejectedKpokDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1RejectedKpokDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransportConfirmationKpok**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1TransportConfirmationKpokDto getTransportConfirmationKpok($kpok_id, $company_type)

Informacje o karcie ze statusem \"Potwierdzony transport\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kpok_id = "kpok_id_example"; // string | Id karty
$company_type = "company_type_example"; // string | 

try {
    $result = $apiInstance->getTransportConfirmationKpok($kpok_id, $company_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->getTransportConfirmationKpok: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kpok_id** | [**string**](../Model/.md)| Id karty | [optional]
 **company_type** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1TransportConfirmationKpokDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1TransportConfirmationKpokDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWithdrawnKpok**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1WithdrawnKpokDto getWithdrawnKpok($kpok_id, $company_type)

Informacje o karcie ze statusem \"Wycofana\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kpok_id = "kpok_id_example"; // string | Id karty
$company_type = "company_type_example"; // string | 

try {
    $result = $apiInstance->getWithdrawnKpok($kpok_id, $company_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->getWithdrawnKpok: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kpok_id** | [**string**](../Model/.md)| Id karty | [optional]
 **company_type** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1WithdrawnKpokDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1WithdrawnKpokDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **planReceiveKpok**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1PlannedReceiveKpokDto planReceiveKpok($request)

Tworzenie karty ze statusem \"Planowana\" dla podtypu \"Odbiór\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1PlanReceiveKpokRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1PlanReceiveKpokRequest | 

try {
    $result = $apiInstance->planReceiveKpok($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->planReceiveKpok: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1PlanReceiveKpokRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1PlanReceiveKpokRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1PlannedReceiveKpokDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1PlannedReceiveKpokDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **planTransferKpok**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1PlannedTransferKpokDto planTransferKpok($request)

Tworzenie karty ze statusem \"Planowana\" dla podtypu \"Przekazanie\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1PlanTransferKpokRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1PlanTransferKpokRequest | 

try {
    $result = $apiInstance->planTransferKpok($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->planTransferKpok: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1PlanTransferKpokRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1PlanTransferKpokRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1PlannedTransferKpokDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1PlannedTransferKpokDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promoteKpokToConfirmationGenerated**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1PromoteKpokToConfirmationGeneratedResponse promoteKpokToConfirmationGenerated($request)

Zmiana statusu karty z \"Zatwierdzona\" na \"Wygenerowane potwierdzenie\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1PromoteKpokToConfirmationGeneratedRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1PromoteKpokToConfirmationGeneratedRequest | 

try {
    $result = $apiInstance->promoteKpokToConfirmationGenerated($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->promoteKpokToConfirmationGenerated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1PromoteKpokToConfirmationGeneratedRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1PromoteKpokToConfirmationGeneratedRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1PromoteKpokToConfirmationGeneratedResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1PromoteKpokToConfirmationGeneratedResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rejectKpok**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1RejectKpokResponse rejectKpok($request)

Zmiana statusu karty \"Potwierdzenie wygenerowane\" na \"Odrzucona\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1RejectKpokRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1RejectKpokRequest | 

try {
    $result = $apiInstance->rejectKpok($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->rejectKpok: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1RejectKpokRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1RejectKpokRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1RejectKpokResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1RejectKpokResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviseKpok**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1ReviseKpokResponse reviseKpok($request)

Korekta odrzuconej karty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1ReviseKpokRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1ReviseKpokRequest | 

try {
    $result = $apiInstance->reviseKpok($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->reviseKpok: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1ReviseKpokRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1ReviseKpokRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1ReviseKpokResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1ReviseKpokResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchKpokAsCarrier**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1KpokAsCarrierSearchResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull searchKpokAsCarrier($request)

Wyszukiwarka kart, gdzie bieżący podmiot występuje w roli Transportującego

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardSearchCardsV1SearchKpokAsCarrierRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardSearchCardsV1SearchKpokAsCarrierRequest | 

try {
    $result = $apiInstance->searchKpokAsCarrier($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->searchKpokAsCarrier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardSearchCardsV1SearchKpokAsCarrierRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardSearchCardsV1SearchKpokAsCarrierRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1KpokAsCarrierSearchResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull**](../Model/WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1KpokAsCarrierSearchResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchKpokAsReceiver**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1KpokAsReceiverSearchResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull searchKpokAsReceiver($request)

Wyszukiwarka kart, gdzie bieżący podmiot występuje w roli Przejmującego

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardSearchCardsV1SearchKpokAsReceiverRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardSearchCardsV1SearchKpokAsReceiverRequest | 

try {
    $result = $apiInstance->searchKpokAsReceiver($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->searchKpokAsReceiver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardSearchCardsV1SearchKpokAsReceiverRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardSearchCardsV1SearchKpokAsReceiverRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1KpokAsReceiverSearchResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull**](../Model/WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1KpokAsReceiverSearchResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchKpokAsSender**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1KpokAsSenderSearchResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull searchKpokAsSender($request)

Wyszukiwarka kart, gdzie bieżący podmiot występuje w roli Przekazującego

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardSearchCardsV1SearchKpokAsSenderRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardSearchCardsV1SearchKpokAsSenderRequest | 

try {
    $result = $apiInstance->searchKpokAsSender($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->searchKpokAsSender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardSearchCardsV1SearchKpokAsSenderRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardSearchCardsV1SearchKpokAsSenderRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1KpokAsSenderSearchResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull**](../Model/WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1KpokAsSenderSearchResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchReceiverKpokAsSender**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1ReceiverKpokAsSenderListItem[] searchReceiverKpokAsSender($request)

Lista kart ze statusem \"Zrealizowane przejęcie\" lub \"Potwierdzony transport\", gdzie bieżący podmiot występuje w roli przekazującego odpady

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardSearchCardsV1SearchReceiverKpokAsSenderRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardSearchCardsV1SearchReceiverKpokAsSenderRequest | 

try {
    $result = $apiInstance->searchReceiverKpokAsSender($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->searchReceiverKpokAsSender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardSearchCardsV1SearchReceiverKpokAsSenderRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardSearchCardsV1SearchReceiverKpokAsSenderRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1ReceiverKpokAsSenderListItem[]**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1ReceiverKpokAsSenderListItem.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchSenderKpokAsReceiver**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1SenderKpokAsReceiverListItem[] searchSenderKpokAsReceiver($request)

Lista kart ze statusem \"Zrealizowane przejęcie\" lub \"Potwierdzony transport\", gdzie bieżący podmiot występuje w roli przejmującego odpady

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardSearchCardsV1SearchSenderKpokAsReceiverRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardSearchCardsV1SearchSenderKpokAsReceiverRequest | 

try {
    $result = $apiInstance->searchSenderKpokAsReceiver($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->searchSenderKpokAsReceiver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardSearchCardsV1SearchSenderKpokAsReceiverRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardSearchCardsV1SearchSenderKpokAsReceiverRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1SenderKpokAsReceiverListItem[]**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1SenderKpokAsReceiverListItem.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateApprovedReceiveKpok**
> object updateApprovedReceiveKpok($request)

Edycja karty ze statusem \"Zatwierdzona\", dla podtypu \"Odbiór\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1UpdateApprovedReceiveKpokRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1UpdateApprovedReceiveKpokRequest | 

try {
    $result = $apiInstance->updateApprovedReceiveKpok($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->updateApprovedReceiveKpok: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1UpdateApprovedReceiveKpokRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1UpdateApprovedReceiveKpokRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateApprovedTransferKpok**
> object updateApprovedTransferKpok($request)

Edycja karty ze statusem \"Zatwierdzona\", dla podtypu \"Przekazanie\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1UpdateApprovedTransferKpokRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1UpdateApprovedTransferKpokRequest | 

try {
    $result = $apiInstance->updateApprovedTransferKpok($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->updateApprovedTransferKpok: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1UpdateApprovedTransferKpokRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1UpdateApprovedTransferKpokRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePlannedReceiveKpok**
> object updatePlannedReceiveKpok($request)

Edycja karty ze statusem \"Planowana\", dla podtypu \"Odbiór\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1UpdatePlannedReceiveKpokRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1UpdatePlannedReceiveKpokRequest | 

try {
    $result = $apiInstance->updatePlannedReceiveKpok($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->updatePlannedReceiveKpok: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1UpdatePlannedReceiveKpokRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1UpdatePlannedReceiveKpokRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePlannedTransferKpok**
> object updatePlannedTransferKpok($request)

Edycja karty ze statusem \"Planowana\", dla podtypu \"Przekazanie\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1UpdatePlannedTransferKpokRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1UpdatePlannedTransferKpokRequest | 

try {
    $result = $apiInstance->updatePlannedTransferKpok($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->updatePlannedTransferKpok: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1UpdatePlannedTransferKpokRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1UpdatePlannedTransferKpokRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **withdrawnKpok**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1WithdrawnKpokResponse withdrawnKpok($request)

Zmiana statusu karty z \"Zatwierdzona\" lub \"Potwierdzenie wygenerowane\" na \"Wycofana\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpokApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1WithdrawnKpokRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1WithdrawnKpokRequest | 

try {
    $result = $apiInstance->withdrawnKpok($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpokApi->withdrawnKpok: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1WithdrawnKpokRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterMunicipalWasteTransferCardV1WithdrawnKpokRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1WithdrawnKpokResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterMuncipalWasteTransferCardV1WithdrawnKpokResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

