# Swagger\Client\DocumentServiceApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateKekosPrintingPage**](DocumentServiceApi.md#generateKekosPrintingPage) | **GET** /WasteRegister/DocumentService/v1/kekos/printingpage | Wydruk Karty Ewidencji Komunalnych Osadów Ściekowych
[**generateKekosReaserchPrintingPage**](DocumentServiceApi.md#generateKekosReaserchPrintingPage) | **GET** /WasteRegister/DocumentService/v1/kekos/research/printingpage | Wydruk Karty Badań Komunalnych Osadów Ściekowych
[**generateKeoPrintingPage**](DocumentServiceApi.md#generateKeoPrintingPage) | **GET** /WasteRegister/DocumentService/v1/keo/printingpage | Wydruk Karty Ewidencji Odpadów
[**generateKeokPrintingPage**](DocumentServiceApi.md#generateKeokPrintingPage) | **GET** /WasteRegister/DocumentService/v1/keok/printingpage | Wydruk Karty Ewidencji Odpadów Komunalnych
[**generateKeonPrintingPage**](DocumentServiceApi.md#generateKeonPrintingPage) | **GET** /WasteRegister/DocumentService/v1/keon/printingpage | Wydruk Karty Ewidencji Odpadów Niebezpiecznych
[**generateKepwCollectingPrintingPage**](DocumentServiceApi.md#generateKepwCollectingPrintingPage) | **GET** /WasteRegister/DocumentService/v1/kepw/collecting/printingpage | Wydruk Karty Ewidencji Pojazdów Wycofanych z Eksploatacji z punktu zbierania pojazdów
[**generateKepwDismantlePrintingPage**](DocumentServiceApi.md#generateKepwDismantlePrintingPage) | **GET** /WasteRegister/DocumentService/v1/kepw/dismantle/printingpage | Wydruk Karty Ewidencji Pojazdów Wycofanych z Eksploatacji ze stacji demontażu pojazdów
[**generateKezsPrintingPage**](DocumentServiceApi.md#generateKezsPrintingPage) | **GET** /WasteRegister/DocumentService/v1/kezs/printingpage | Wydruk Karty Ewidencji Zużytego Sprzętu Elektrycznego i Elektronicznego
[**generateKpoConfirmation**](DocumentServiceApi.md#generateKpoConfirmation) | **GET** /WasteRegister/DocumentService/v1/kpo/confirmation | Wydruk potwierdzenia wystawienia dla Karty Przekazania Odpadów
[**generateKpoPrintingPage**](DocumentServiceApi.md#generateKpoPrintingPage) | **GET** /WasteRegister/DocumentService/v1/kpo/printingpage | Wydruk Karty Przekazania Odpadów
[**generateKpokConfirmation**](DocumentServiceApi.md#generateKpokConfirmation) | **GET** /WasteRegister/DocumentService/v1/kpok/confirmation | Wydruk potwierdzenia wystawienia dla Karty Przekazania Odpadów Komunalnych
[**generateKpokReceivePrintingPage**](DocumentServiceApi.md#generateKpokReceivePrintingPage) | **GET** /WasteRegister/DocumentService/v1/kpok/receive/printingpage | Wydruk Karty Przekazania Odpadów Komunalnych w trybie \&quot;Odbiór\&quot;
[**generateKpokTransferPrintingPage**](DocumentServiceApi.md#generateKpokTransferPrintingPage) | **GET** /WasteRegister/DocumentService/v1/kpok/transfer/printingpage | Wydruk Karty Przekazania Odpadów Komunalnych w trybie \&quot;Przekazanie\&quot;


# **generateKekosPrintingPage**
> string generateKekosPrintingPage($kekos_id)

Wydruk Karty Ewidencji Komunalnych Osadów Ściekowych

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kekos_id = "kekos_id_example"; // string | 

try {
    $result = $apiInstance->generateKekosPrintingPage($kekos_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentServiceApi->generateKekosPrintingPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kekos_id** | [**string**](../Model/.md)|  | [optional]

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateKekosReaserchPrintingPage**
> string generateKekosReaserchPrintingPage($kekos_research_card_id)

Wydruk Karty Badań Komunalnych Osadów Ściekowych

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kekos_research_card_id = "kekos_research_card_id_example"; // string | 

try {
    $result = $apiInstance->generateKekosReaserchPrintingPage($kekos_research_card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentServiceApi->generateKekosReaserchPrintingPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kekos_research_card_id** | [**string**](../Model/.md)|  | [optional]

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateKeoPrintingPage**
> string generateKeoPrintingPage($keo_id)

Wydruk Karty Ewidencji Odpadów

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keo_id = "keo_id_example"; // string | 

try {
    $result = $apiInstance->generateKeoPrintingPage($keo_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentServiceApi->generateKeoPrintingPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keo_id** | [**string**](../Model/.md)|  | [optional]

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateKeokPrintingPage**
> string generateKeokPrintingPage($keok_id)

Wydruk Karty Ewidencji Odpadów Komunalnych

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keok_id = "keok_id_example"; // string | 

try {
    $result = $apiInstance->generateKeokPrintingPage($keok_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentServiceApi->generateKeokPrintingPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keok_id** | [**string**](../Model/.md)|  | [optional]

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateKeonPrintingPage**
> string generateKeonPrintingPage($keon_id)

Wydruk Karty Ewidencji Odpadów Niebezpiecznych

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keon_id = "keon_id_example"; // string | 

try {
    $result = $apiInstance->generateKeonPrintingPage($keon_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentServiceApi->generateKeonPrintingPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keon_id** | [**string**](../Model/.md)|  | [optional]

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateKepwCollectingPrintingPage**
> string generateKepwCollectingPrintingPage($kepw_id)

Wydruk Karty Ewidencji Pojazdów Wycofanych z Eksploatacji z punktu zbierania pojazdów

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kepw_id = "kepw_id_example"; // string | 

try {
    $result = $apiInstance->generateKepwCollectingPrintingPage($kepw_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentServiceApi->generateKepwCollectingPrintingPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kepw_id** | [**string**](../Model/.md)|  | [optional]

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateKepwDismantlePrintingPage**
> string generateKepwDismantlePrintingPage($kepw_id)

Wydruk Karty Ewidencji Pojazdów Wycofanych z Eksploatacji ze stacji demontażu pojazdów

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kepw_id = "kepw_id_example"; // string | 

try {
    $result = $apiInstance->generateKepwDismantlePrintingPage($kepw_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentServiceApi->generateKepwDismantlePrintingPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kepw_id** | [**string**](../Model/.md)|  | [optional]

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateKezsPrintingPage**
> string generateKezsPrintingPage($kezs_id, $group_number)

Wydruk Karty Ewidencji Zużytego Sprzętu Elektrycznego i Elektronicznego

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kezs_id = "kezs_id_example"; // string | 
$group_number = 56; // int | 

try {
    $result = $apiInstance->generateKezsPrintingPage($kezs_id, $group_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentServiceApi->generateKezsPrintingPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kezs_id** | [**string**](../Model/.md)|  | [optional]
 **group_number** | **int**|  | [optional]

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateKpoConfirmation**
> string generateKpoConfirmation($kpo_id)

Wydruk potwierdzenia wystawienia dla Karty Przekazania Odpadów

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kpo_id = "kpo_id_example"; // string | 

try {
    $result = $apiInstance->generateKpoConfirmation($kpo_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentServiceApi->generateKpoConfirmation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kpo_id** | [**string**](../Model/.md)|  | [optional]

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateKpoPrintingPage**
> string generateKpoPrintingPage($kpo_id)

Wydruk Karty Przekazania Odpadów

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kpo_id = "kpo_id_example"; // string | 

try {
    $result = $apiInstance->generateKpoPrintingPage($kpo_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentServiceApi->generateKpoPrintingPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kpo_id** | [**string**](../Model/.md)|  | [optional]

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateKpokConfirmation**
> string generateKpokConfirmation($kpok_id)

Wydruk potwierdzenia wystawienia dla Karty Przekazania Odpadów Komunalnych

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kpok_id = "kpok_id_example"; // string | 

try {
    $result = $apiInstance->generateKpokConfirmation($kpok_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentServiceApi->generateKpokConfirmation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kpok_id** | [**string**](../Model/.md)|  | [optional]

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateKpokReceivePrintingPage**
> string generateKpokReceivePrintingPage($kpok_id)

Wydruk Karty Przekazania Odpadów Komunalnych w trybie \"Odbiór\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kpok_id = "kpok_id_example"; // string | 

try {
    $result = $apiInstance->generateKpokReceivePrintingPage($kpok_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentServiceApi->generateKpokReceivePrintingPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kpok_id** | [**string**](../Model/.md)|  | [optional]

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateKpokTransferPrintingPage**
> string generateKpokTransferPrintingPage($kpok_id)

Wydruk Karty Przekazania Odpadów Komunalnych w trybie \"Przekazanie\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kpok_id = "kpok_id_example"; // string | 

try {
    $result = $apiInstance->generateKpokTransferPrintingPage($kpok_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentServiceApi->generateKpokTransferPrintingPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kpok_id** | [**string**](../Model/.md)|  | [optional]

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

