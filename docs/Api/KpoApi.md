# Swagger\Client\KpoApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveKpo**](KpoApi.md#approveKpo) | **PUT** /WasteRegister/WasteTransferCard/v1/Kpo/approve | Zmiana statusu karty z \&quot;Planowana\&quot; na \&quot;Zatwierdzona\&quot;
[**assignReceiveConfirmationToKpo**](KpoApi.md#assignReceiveConfirmationToKpo) | **PUT** /WasteRegister/WasteTransferCard/v1/Kpo/assign/receiveconfirmation | Zmiana statusu karty z \&quot;Potwierdzenie wygenerowane\&quot; na \&quot;Potwierdzenie przejęcia\&quot;
[**changeKpoStatusToTransportConfirmation**](KpoApi.md#changeKpoStatusToTransportConfirmation) | **PUT** /WasteRegister/WasteTransferCard/v1/Kpo/status/transportconfirmation | Zmiana statusu karty z \&quot;Potwierdzenie przejęcia\&quot; na \&quot;Potwierdzenie transportu\&quot;
[**deleteKpo**](KpoApi.md#deleteKpo) | **DELETE** /WasteRegister/WasteTransferCard/v1/Kpo/delete | Usunięcie karty ze statusem \&quot;Planowana\&quot;
[**generateKpoConfirmation**](KpoApi.md#generateKpoConfirmation) | **PUT** /WasteRegister/WasteTransferCard/v1/Kpo/generateconfirmation | Zmiana statusu karty z \&quot;Zatwierdzona\&quot; na \&quot;Potwierdzenie wygenerowane\&quot;.
[**getApprovedKpo**](KpoApi.md#getApprovedKpo) | **GET** /WasteRegister/WasteTransferCard/v1/Kpo/approved/card | Informacje o karcie ze statusem \&quot;Zatwierdzona\&quot;
[**getConfirmationGeneratedKpo**](KpoApi.md#getConfirmationGeneratedKpo) | **GET** /WasteRegister/WasteTransferCard/v1/Kpo/confirmationgenerated/card | Informacje o karcie ze statusem \&quot;Wygenerowane potwierdzenie\&quot;
[**getKpoPrintingPage**](KpoApi.md#getKpoPrintingPage) | **GET** /WasteRegister/WasteTransferCard/v1/Kpo/printingpage | Pobranie danych karty do wydruku
[**getPlannedKpo**](KpoApi.md#getPlannedKpo) | **GET** /WasteRegister/WasteTransferCard/v1/Kpo/planned/card | Informacje o karcie ze statusem \&quot;Planowana\&quot;
[**getReceiveConfirmedKpo**](KpoApi.md#getReceiveConfirmedKpo) | **GET** /WasteRegister/WasteTransferCard/v1/Kpo/receiveconfirmed/card | Informacje o karcie ze statusem \&quot;Potwierdzenie przejęcia\&quot;
[**getReceiverKposAsSender**](KpoApi.md#getReceiverKposAsSender) | **GET** /WasteRegister/WasteTransferCard/v1/Kpo/receivercards/sender | Lista kart ze statusem \&quot;Zrealizowane przejęcie\&quot; lub \&quot;Potwierdzony transport\&quot;, gdzie bieżący podmiot występuje w roli przekazującego odpady
[**getRejectedKpo**](KpoApi.md#getRejectedKpo) | **GET** /WasteRegister/WasteTransferCard/v1/Kpo/rejected/card | Informacje o karcie ze statusem \&quot;Odrzucona\&quot;
[**getSenderKposAsReceiver**](KpoApi.md#getSenderKposAsReceiver) | **GET** /WasteRegister/WasteTransferCard/v1/Kpo/sendercards/receiver | Lista kart ze statusem \&quot;Zrealizowane przejęcie\&quot; lub \&quot;Potwierdzony transport\&quot;, gdzie bieżący podmiot występuje w roli przejmującego odpady
[**getTransportConfirmationKpo**](KpoApi.md#getTransportConfirmationKpo) | **GET** /WasteRegister/WasteTransferCard/v1/Kpo/transportconfirmation/card | Informacje o karcie ze statusem \&quot;Potwierdzony transport\&quot;
[**getWithdrawnKpo**](KpoApi.md#getWithdrawnKpo) | **GET** /WasteRegister/WasteTransferCard/v1/Kpo/withdrawn/card | Informacje o karcie ze statusem \&quot;Wycofana\&quot;
[**planKpo**](KpoApi.md#planKpo) | **POST** /WasteRegister/WasteTransferCard/v1/Kpo/create/plannedcard | Tworzenie karty ze statusem \&quot;Planowana\&quot;
[**rejectKpo**](KpoApi.md#rejectKpo) | **PUT** /WasteRegister/WasteTransferCard/v1/Kpo/reject | Zmiana statusu karty \&quot;Potwierdzenie wygenerowane\&quot; na \&quot;Odrzucona\&quot;
[**reviseKpo**](KpoApi.md#reviseKpo) | **PUT** /WasteRegister/WasteTransferCard/v1/Kpo/revise | Korekta odrzuconej karty
[**searchKpoAsCarrier**](KpoApi.md#searchKpoAsCarrier) | **POST** /WasteRegister/WasteTransferCard/v1/Kpo/carrier/search | Wyszukiwarka kart, gdzie bieżący podmiot występuje w roli Transportującego
[**searchKpoAsReceiver**](KpoApi.md#searchKpoAsReceiver) | **POST** /WasteRegister/WasteTransferCard/v1/Kpo/receiver/search | Wyszukiwarka kart, gdzie bieżący podmiot występuje w roli Przejmującego
[**searchKpoAsSender**](KpoApi.md#searchKpoAsSender) | **POST** /WasteRegister/WasteTransferCard/v1/Kpo/sender/search | Wyszukiwarka kart, gdzie bieżący podmiot występuje w roli Przekazującego
[**updateApprovedGenerateConfirmationKpoAsSender**](KpoApi.md#updateApprovedGenerateConfirmationKpoAsSender) | **PUT** /WasteRegister/WasteTransferCard/v1/Kpo/sender/update/approved/generateconfirmation | Wygenerowanie potwierdzenia (zmiana statusu karty na \&quot;Potwierdzenie wygenerowane\&quot;) dla karty ze statusem \&quot;Zatwierdzona\&quot;, gdzie bieżący podmiot występuje w roli Przekazującego
[**updateApprovedKpo**](KpoApi.md#updateApprovedKpo) | **PUT** /WasteRegister/WasteTransferCard/v1/Kpo/update/approvedcard | Edycja karty ze statusem \&quot;Zatwierdzona\&quot;
[**updateApprovedKpoAndGenerateConfirmationAsCarrier**](KpoApi.md#updateApprovedKpoAndGenerateConfirmationAsCarrier) | **PUT** /WasteRegister/WasteTransferCard/v1/Kpo/carrier/update/approved/generateconfirmation | Wygenerowanie potwierdzenia (zmiana statusu karty na \&quot;Potwierdzenie wygenerowane\&quot;) dla karty ze statusem \&quot;Zatwierdzona\&quot;, gdzie bieżący podmiot występuje w roli Transportującego
[**updatePlannedKpo**](KpoApi.md#updatePlannedKpo) | **PUT** /WasteRegister/WasteTransferCard/v1/Kpo/update/plannedcard | Edycja karty ze statusem \&quot;Planowana\&quot;
[**withdrawnKpo**](KpoApi.md#withdrawnKpo) | **PUT** /WasteRegister/WasteTransferCard/v1/Kpo/withdrawn | Zmiana statusu karty z \&quot;Zatwierdzona\&quot; lub \&quot;Potwierdzenie wygenerowane\&quot; na \&quot;Wycofana\&quot;.


# **approveKpo**
> object approveKpo($request)

Zmiana statusu karty z \"Planowana\" na \"Zatwierdzona\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1ApproveKpoRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1ApproveKpoRequest | 

try {
    $result = $apiInstance->approveKpo($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->approveKpo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1ApproveKpoRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1ApproveKpoRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assignReceiveConfirmationToKpo**
> object assignReceiveConfirmationToKpo($request)

Zmiana statusu karty z \"Potwierdzenie wygenerowane\" na \"Potwierdzenie przejęcia\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1AssignReceiveConfirmationToKpoRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1AssignReceiveConfirmationToKpoRequest | 

try {
    $result = $apiInstance->assignReceiveConfirmationToKpo($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->assignReceiveConfirmationToKpo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1AssignReceiveConfirmationToKpoRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1AssignReceiveConfirmationToKpoRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeKpoStatusToTransportConfirmation**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1ChangeKpoStatusToTransportConfirmationResponse changeKpoStatusToTransportConfirmation($request)

Zmiana statusu karty z \"Potwierdzenie przejęcia\" na \"Potwierdzenie transportu\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1ChangeKpoStatusToTransportConfirmationRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1ChangeKpoStatusToTransportConfirmationRequest | 

try {
    $result = $apiInstance->changeKpoStatusToTransportConfirmation($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->changeKpoStatusToTransportConfirmation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1ChangeKpoStatusToTransportConfirmationRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1ChangeKpoStatusToTransportConfirmationRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1ChangeKpoStatusToTransportConfirmationResponse**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1ChangeKpoStatusToTransportConfirmationResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteKpo**
> object deleteKpo($request)

Usunięcie karty ze statusem \"Planowana\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1DeleteKpoRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1DeleteKpoRequest | 

try {
    $result = $apiInstance->deleteKpo($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->deleteKpo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1DeleteKpoRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1DeleteKpoRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateKpoConfirmation**
> object generateKpoConfirmation($request)

Zmiana statusu karty z \"Zatwierdzona\" na \"Potwierdzenie wygenerowane\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1GenerateKpoConfirmationRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1GenerateKpoConfirmationRequest | 

try {
    $result = $apiInstance->generateKpoConfirmation($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->generateKpoConfirmation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1GenerateKpoConfirmationRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1GenerateKpoConfirmationRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApprovedKpo**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1ApprovedKpoDto getApprovedKpo($kpo_id, $company_type)

Informacje o karcie ze statusem \"Zatwierdzona\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kpo_id = "kpo_id_example"; // string | Id Karty Przekazania Odpadów
$company_type = "company_type_example"; // string | Rola w której występuje podmiot w procesie przekazania odpadów

try {
    $result = $apiInstance->getApprovedKpo($kpo_id, $company_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->getApprovedKpo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kpo_id** | [**string**](../Model/.md)| Id Karty Przekazania Odpadów | [optional]
 **company_type** | **string**| Rola w której występuje podmiot w procesie przekazania odpadów | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1ApprovedKpoDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1ApprovedKpoDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConfirmationGeneratedKpo**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1ConfirmationGeneratedKpoDto getConfirmationGeneratedKpo($kpo_id, $company_type)

Informacje o karcie ze statusem \"Wygenerowane potwierdzenie\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kpo_id = "kpo_id_example"; // string | Id Karty Przekazania Odpadów
$company_type = "company_type_example"; // string | Rola w której występuje podmiot w procesie przekazania odpadów

try {
    $result = $apiInstance->getConfirmationGeneratedKpo($kpo_id, $company_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->getConfirmationGeneratedKpo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kpo_id** | [**string**](../Model/.md)| Id Karty Przekazania Odpadów | [optional]
 **company_type** | **string**| Rola w której występuje podmiot w procesie przekazania odpadów | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1ConfirmationGeneratedKpoDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1ConfirmationGeneratedKpoDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKpoPrintingPage**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1KpoPrintingPage getKpoPrintingPage($kpo_id)

Pobranie danych karty do wydruku

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kpo_id = "kpo_id_example"; // string | Id Karty Przekazania Odpadów

try {
    $result = $apiInstance->getKpoPrintingPage($kpo_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->getKpoPrintingPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kpo_id** | [**string**](../Model/.md)| Id Karty Przekazania Odpadów | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1KpoPrintingPage**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1KpoPrintingPage.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPlannedKpo**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1PlannedKpoDto getPlannedKpo($kpo_id, $company_type)

Informacje o karcie ze statusem \"Planowana\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kpo_id = "kpo_id_example"; // string | Id Karty Przekazania Odpadów
$company_type = "company_type_example"; // string | Rola w której występuje podmiot w procesie przekazania odpadów

try {
    $result = $apiInstance->getPlannedKpo($kpo_id, $company_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->getPlannedKpo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kpo_id** | [**string**](../Model/.md)| Id Karty Przekazania Odpadów | [optional]
 **company_type** | **string**| Rola w której występuje podmiot w procesie przekazania odpadów | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1PlannedKpoDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1PlannedKpoDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReceiveConfirmedKpo**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1ReceiveConfirmedKpoDto getReceiveConfirmedKpo($kpo_id, $company_type)

Informacje o karcie ze statusem \"Potwierdzenie przejęcia\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kpo_id = "kpo_id_example"; // string | Id Karty Przekazania Odpadów
$company_type = "company_type_example"; // string | Rola w której występuje podmiot w procesie przekazania odpadów

try {
    $result = $apiInstance->getReceiveConfirmedKpo($kpo_id, $company_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->getReceiveConfirmedKpo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kpo_id** | [**string**](../Model/.md)| Id Karty Przekazania Odpadów | [optional]
 **company_type** | **string**| Rola w której występuje podmiot w procesie przekazania odpadów | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1ReceiveConfirmedKpoDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1ReceiveConfirmedKpoDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReceiverKposAsSender**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1ReceiverKpoAsSenderListItemDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull getReceiverKposAsSender($page_size, $pagination_parameters_order_is_ascending, $pagination_parameters_order_order_column, $pagination_parameters_page_index, $pagination_parameters_page_size, $pagination_parameters_get_order_column, $pagination_parameters_get_order_direction, $pagination_parameters_get_ordering, $receiver_identification_number, $receiver_name, $receiver_nip, $card_number, $receive_confirmation_time, $card_status_code_names, $waste_code_name, $is_used)

Lista kart ze statusem \"Zrealizowane przejęcie\" lub \"Potwierdzony transport\", gdzie bieżący podmiot występuje w roli przekazującego odpady

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 789; // int | Maksymalna liczba wyników wyszukiwania
$pagination_parameters_order_is_ascending = true; // bool | Flaga ustawiana na true, jeśli zbiór ma być posortowany rosnąco, false w przeciwnym razie
$pagination_parameters_order_order_column = "pagination_parameters_order_order_column_example"; // string | Identyfikator kolumny, według której ma być zrelizowane sortowanie
$pagination_parameters_page_index = 789; // int | Indeks strony
$pagination_parameters_page_size = 789; // int | Ilość wyników na stronie (min 1, max 50)
$pagination_parameters_get_order_column = "pagination_parameters_get_order_column_example"; // string | Identyfikator kolumny, według której ma być zrelizowane sortowanie
$pagination_parameters_get_order_direction = "pagination_parameters_get_order_direction_example"; // string | Kierunek sortowania
$pagination_parameters_get_ordering = "pagination_parameters_get_ordering_example"; // string | Sortowanie
$receiver_identification_number = "receiver_identification_number_example"; // string | Numer identyfikacyjny podmiotu przejmującego odpady
$receiver_name = "receiver_name_example"; // string | Nazwa podmiotu przejmującego odpady
$receiver_nip = "receiver_nip_example"; // string | Nip podmiotu przejmującego odpady
$card_number = "card_number_example"; // string | Numer Karty Przekazania Odpadów
$receive_confirmation_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Data przekazania odpadów
$card_status_code_names = "card_status_code_names_example"; // string | Lista statusów Kart Przekazania Odpadów rozdzielona średnikami. Słownik wartości dostępny w kontrolerze CardStatus
$waste_code_name = "waste_code_name_example"; // string | Kod odpadów
$is_used = true; // bool | 

try {
    $result = $apiInstance->getReceiverKposAsSender($page_size, $pagination_parameters_order_is_ascending, $pagination_parameters_order_order_column, $pagination_parameters_page_index, $pagination_parameters_page_size, $pagination_parameters_get_order_column, $pagination_parameters_get_order_direction, $pagination_parameters_get_ordering, $receiver_identification_number, $receiver_name, $receiver_nip, $card_number, $receive_confirmation_time, $card_status_code_names, $waste_code_name, $is_used);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->getReceiverKposAsSender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| Maksymalna liczba wyników wyszukiwania | [optional]
 **pagination_parameters_order_is_ascending** | **bool**| Flaga ustawiana na true, jeśli zbiór ma być posortowany rosnąco, false w przeciwnym razie | [optional]
 **pagination_parameters_order_order_column** | **string**| Identyfikator kolumny, według której ma być zrelizowane sortowanie | [optional]
 **pagination_parameters_page_index** | **int**| Indeks strony | [optional]
 **pagination_parameters_page_size** | **int**| Ilość wyników na stronie (min 1, max 50) | [optional]
 **pagination_parameters_get_order_column** | **string**| Identyfikator kolumny, według której ma być zrelizowane sortowanie | [optional]
 **pagination_parameters_get_order_direction** | **string**| Kierunek sortowania | [optional]
 **pagination_parameters_get_ordering** | **string**| Sortowanie | [optional]
 **receiver_identification_number** | **string**| Numer identyfikacyjny podmiotu przejmującego odpady | [optional]
 **receiver_name** | **string**| Nazwa podmiotu przejmującego odpady | [optional]
 **receiver_nip** | **string**| Nip podmiotu przejmującego odpady | [optional]
 **card_number** | **string**| Numer Karty Przekazania Odpadów | [optional]
 **receive_confirmation_time** | **\DateTime**| Data przekazania odpadów | [optional]
 **card_status_code_names** | **string**| Lista statusów Kart Przekazania Odpadów rozdzielona średnikami. Słownik wartości dostępny w kontrolerze CardStatus | [optional]
 **waste_code_name** | **string**| Kod odpadów | [optional]
 **is_used** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1ReceiverKpoAsSenderListItemDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull**](../Model/WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1ReceiverKpoAsSenderListItemDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRejectedKpo**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1RejectedKpoDto getRejectedKpo($kpo_id, $company_type)

Informacje o karcie ze statusem \"Odrzucona\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kpo_id = "kpo_id_example"; // string | Id Karty Przekazania Odpadów
$company_type = "company_type_example"; // string | Rola w której występuje podmiot w procesie przekazania odpadów

try {
    $result = $apiInstance->getRejectedKpo($kpo_id, $company_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->getRejectedKpo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kpo_id** | [**string**](../Model/.md)| Id Karty Przekazania Odpadów | [optional]
 **company_type** | **string**| Rola w której występuje podmiot w procesie przekazania odpadów | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1RejectedKpoDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1RejectedKpoDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSenderKposAsReceiver**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1SenderKpoAsReceiverDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull getSenderKposAsReceiver($page_size, $pagination_parameters_order_is_ascending, $pagination_parameters_order_order_column, $pagination_parameters_page_index, $pagination_parameters_page_size, $pagination_parameters_get_order_column, $pagination_parameters_get_order_direction, $pagination_parameters_get_ordering, $card_number, $sender_nip, $sender_identification_number, $sender_name, $receive_confirmation_time, $card_status_code_names, $waste_code_name, $is_used)

Lista kart ze statusem \"Zrealizowane przejęcie\" lub \"Potwierdzony transport\", gdzie bieżący podmiot występuje w roli przejmującego odpady

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 789; // int | Maksymalna liczba wyników wyszukiwania
$pagination_parameters_order_is_ascending = true; // bool | Flaga ustawiana na true, jeśli zbiór ma być posortowany rosnąco, false w przeciwnym razie
$pagination_parameters_order_order_column = "pagination_parameters_order_order_column_example"; // string | Identyfikator kolumny, według której ma być zrelizowane sortowanie
$pagination_parameters_page_index = 789; // int | Indeks strony
$pagination_parameters_page_size = 789; // int | Ilość wyników na stronie (min 1, max 50)
$pagination_parameters_get_order_column = "pagination_parameters_get_order_column_example"; // string | Identyfikator kolumny, według której ma być zrelizowane sortowanie
$pagination_parameters_get_order_direction = "pagination_parameters_get_order_direction_example"; // string | Kierunek sortowania
$pagination_parameters_get_ordering = "pagination_parameters_get_ordering_example"; // string | Sortowanie
$card_number = "card_number_example"; // string | Numer lub fragment numeru karty KPO
$sender_nip = "sender_nip_example"; // string | NIP przekazującego odpad
$sender_identification_number = "sender_identification_number_example"; // string | Numer rejestrowy przekazującego odpady
$sender_name = "sender_name_example"; // string | Nazwa lub Imię i Nazwisko przekazującego odpady
$receive_confirmation_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Data przekazania odpadów
$card_status_code_names = "card_status_code_names_example"; // string | Lista statusów Kart Przekazania Odpadów rozdzielona średnikami. Słownik wartości dostępny w kontrolerze CardStatus
$waste_code_name = "waste_code_name_example"; // string | Kod odpadów
$is_used = true; // bool | 

try {
    $result = $apiInstance->getSenderKposAsReceiver($page_size, $pagination_parameters_order_is_ascending, $pagination_parameters_order_order_column, $pagination_parameters_page_index, $pagination_parameters_page_size, $pagination_parameters_get_order_column, $pagination_parameters_get_order_direction, $pagination_parameters_get_ordering, $card_number, $sender_nip, $sender_identification_number, $sender_name, $receive_confirmation_time, $card_status_code_names, $waste_code_name, $is_used);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->getSenderKposAsReceiver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| Maksymalna liczba wyników wyszukiwania | [optional]
 **pagination_parameters_order_is_ascending** | **bool**| Flaga ustawiana na true, jeśli zbiór ma być posortowany rosnąco, false w przeciwnym razie | [optional]
 **pagination_parameters_order_order_column** | **string**| Identyfikator kolumny, według której ma być zrelizowane sortowanie | [optional]
 **pagination_parameters_page_index** | **int**| Indeks strony | [optional]
 **pagination_parameters_page_size** | **int**| Ilość wyników na stronie (min 1, max 50) | [optional]
 **pagination_parameters_get_order_column** | **string**| Identyfikator kolumny, według której ma być zrelizowane sortowanie | [optional]
 **pagination_parameters_get_order_direction** | **string**| Kierunek sortowania | [optional]
 **pagination_parameters_get_ordering** | **string**| Sortowanie | [optional]
 **card_number** | **string**| Numer lub fragment numeru karty KPO | [optional]
 **sender_nip** | **string**| NIP przekazującego odpad | [optional]
 **sender_identification_number** | **string**| Numer rejestrowy przekazującego odpady | [optional]
 **sender_name** | **string**| Nazwa lub Imię i Nazwisko przekazującego odpady | [optional]
 **receive_confirmation_time** | **\DateTime**| Data przekazania odpadów | [optional]
 **card_status_code_names** | **string**| Lista statusów Kart Przekazania Odpadów rozdzielona średnikami. Słownik wartości dostępny w kontrolerze CardStatus | [optional]
 **waste_code_name** | **string**| Kod odpadów | [optional]
 **is_used** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1SenderKpoAsReceiverDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull**](../Model/WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1SenderKpoAsReceiverDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransportConfirmationKpo**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1TransportConfirmationKpoDto getTransportConfirmationKpo($kpo_id, $company_type)

Informacje o karcie ze statusem \"Potwierdzony transport\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kpo_id = "kpo_id_example"; // string | Id Karty Przekazania Odpadów
$company_type = "company_type_example"; // string | Rola w której występuje podmiot w procesie przekazania odpadów

try {
    $result = $apiInstance->getTransportConfirmationKpo($kpo_id, $company_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->getTransportConfirmationKpo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kpo_id** | [**string**](../Model/.md)| Id Karty Przekazania Odpadów | [optional]
 **company_type** | **string**| Rola w której występuje podmiot w procesie przekazania odpadów | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1TransportConfirmationKpoDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1TransportConfirmationKpoDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWithdrawnKpo**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1GetWithdrawnKpoDto getWithdrawnKpo($kpo_id, $company_type)

Informacje o karcie ze statusem \"Wycofana\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kpo_id = "kpo_id_example"; // string | Id Karty Przekazania Odpadów
$company_type = "company_type_example"; // string | Rola w której występuje podmiot w procesie przekazania odpadów

try {
    $result = $apiInstance->getWithdrawnKpo($kpo_id, $company_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->getWithdrawnKpo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kpo_id** | [**string**](../Model/.md)| Id Karty Przekazania Odpadów | [optional]
 **company_type** | **string**| Rola w której występuje podmiot w procesie przekazania odpadów | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1GetWithdrawnKpoDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1GetWithdrawnKpoDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **planKpo**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1PlannedKpoDto planKpo($request)

Tworzenie karty ze statusem \"Planowana\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1PlanKpoRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1PlanKpoRequest | 

try {
    $result = $apiInstance->planKpo($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->planKpo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1PlanKpoRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1PlanKpoRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1PlannedKpoDto**](../Model/WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1PlannedKpoDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rejectKpo**
> object rejectKpo($request)

Zmiana statusu karty \"Potwierdzenie wygenerowane\" na \"Odrzucona\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1RejectKpoRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1RejectKpoRequest | 

try {
    $result = $apiInstance->rejectKpo($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->rejectKpo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1RejectKpoRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1RejectKpoRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviseKpo**
> object reviseKpo($request)

Korekta odrzuconej karty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1ReviseKpoRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1ReviseKpoRequest | 

try {
    $result = $apiInstance->reviseKpo($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->reviseKpo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1ReviseKpoRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1ReviseKpoRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchKpoAsCarrier**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1KpoAsCarrierSearchResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull searchKpoAsCarrier($request)

Wyszukiwarka kart, gdzie bieżący podmiot występuje w roli Transportującego

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardSearchCardsV1SearchKpoAsCarrierRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardSearchCardsV1SearchKpoAsCarrierRequest | 

try {
    $result = $apiInstance->searchKpoAsCarrier($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->searchKpoAsCarrier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardSearchCardsV1SearchKpoAsCarrierRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardSearchCardsV1SearchKpoAsCarrierRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1KpoAsCarrierSearchResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull**](../Model/WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1KpoAsCarrierSearchResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchKpoAsReceiver**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1KpoAsReceiverSearchResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull searchKpoAsReceiver($request)

Wyszukiwarka kart, gdzie bieżący podmiot występuje w roli Przejmującego

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardSearchCardsV1SearchKpoAsReceiverRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardSearchCardsV1SearchKpoAsReceiverRequest | 

try {
    $result = $apiInstance->searchKpoAsReceiver($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->searchKpoAsReceiver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardSearchCardsV1SearchKpoAsReceiverRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardSearchCardsV1SearchKpoAsReceiverRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1KpoAsReceiverSearchResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull**](../Model/WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1KpoAsReceiverSearchResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchKpoAsSender**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1KpoAsSenderSearchResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull searchKpoAsSender($request)

Wyszukiwarka kart, gdzie bieżący podmiot występuje w roli Przekazującego

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardSearchCardsV1SearchKpoAsSenderRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardSearchCardsV1SearchKpoAsSenderRequest | 

try {
    $result = $apiInstance->searchKpoAsSender($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->searchKpoAsSender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardSearchCardsV1SearchKpoAsSenderRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardSearchCardsV1SearchKpoAsSenderRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1KpoAsSenderSearchResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull**](../Model/WasteRegisterPublicApiApiModelsCollectionsPaginatedPage1WasteRegisterPublicApiApiModelsResponsesWasteRegisterWasteTransferCardV1KpoAsSenderSearchResultDtoWasteRegisterPublicApiVersion1000CultureNeutralPublicKeyTokenNull.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateApprovedGenerateConfirmationKpoAsSender**
> object updateApprovedGenerateConfirmationKpoAsSender($request)

Wygenerowanie potwierdzenia (zmiana statusu karty na \"Potwierdzenie wygenerowane\") dla karty ze statusem \"Zatwierdzona\", gdzie bieżący podmiot występuje w roli Przekazującego

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1UpdateApprovedKpoRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1UpdateApprovedKpoRequest | 

try {
    $result = $apiInstance->updateApprovedGenerateConfirmationKpoAsSender($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->updateApprovedGenerateConfirmationKpoAsSender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1UpdateApprovedKpoRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1UpdateApprovedKpoRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateApprovedKpo**
> object updateApprovedKpo($request)

Edycja karty ze statusem \"Zatwierdzona\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1UpdateApprovedKpoRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1UpdateApprovedKpoRequest | 

try {
    $result = $apiInstance->updateApprovedKpo($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->updateApprovedKpo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1UpdateApprovedKpoRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1UpdateApprovedKpoRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateApprovedKpoAndGenerateConfirmationAsCarrier**
> object updateApprovedKpoAndGenerateConfirmationAsCarrier($request)

Wygenerowanie potwierdzenia (zmiana statusu karty na \"Potwierdzenie wygenerowane\") dla karty ze statusem \"Zatwierdzona\", gdzie bieżący podmiot występuje w roli Transportującego

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1UpdateApprovedKpoAndGenerateConfirmationAsCarrierRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1UpdateApprovedKpoAndGenerateConfirmationAsCarrierRequest | 

try {
    $result = $apiInstance->updateApprovedKpoAndGenerateConfirmationAsCarrier($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->updateApprovedKpoAndGenerateConfirmationAsCarrier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1UpdateApprovedKpoAndGenerateConfirmationAsCarrierRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1UpdateApprovedKpoAndGenerateConfirmationAsCarrierRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePlannedKpo**
> object updatePlannedKpo($request)

Edycja karty ze statusem \"Planowana\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1UpdatePlannedKpoRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1UpdatePlannedKpoRequest | 

try {
    $result = $apiInstance->updatePlannedKpo($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->updatePlannedKpo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1UpdatePlannedKpoRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1UpdatePlannedKpoRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **withdrawnKpo**
> object withdrawnKpo($request)

Zmiana statusu karty z \"Zatwierdzona\" lub \"Potwierdzenie wygenerowane\" na \"Wycofana\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KpoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1WithdrawnKpoRequest(); // \Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1WithdrawnKpoRequest | 

try {
    $result = $apiInstance->withdrawnKpo($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KpoApi->withdrawnKpo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1WithdrawnKpoRequest**](../Model/WasteRegisterPublicApiApiModelsRequestsWasteRegisterWasteTransferCardV1WithdrawnKpoRequest.md)|  | [optional]

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

