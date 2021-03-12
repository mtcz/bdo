# Swagger\Client\SearchApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCompanyById**](SearchApi.md#getCompanyById) | **GET** /WasteRegister/v1/Search/getcompanybyid | Zwraca rekord z danymi podmiotu zgodnie z wartością zapytania
[**getEupById**](SearchApi.md#getEupById) | **GET** /WasteRegister/v1/Search/geteupbyid | Zwraca rekord z danymi miejsca prowadzenia działalności zgodnie z wartością zapytania
[**getEupsByCompanyId**](SearchApi.md#getEupsByCompanyId) | **GET** /WasteRegister/v1/Search/geteupsbycompanyid | Zwraca listę 10 rekordów z danymi miejsc prowadzenia działalności przypisanych do Id podmiotu
[**getTerytById**](SearchApi.md#getTerytById) | **GET** /WasteRegister/v1/Search/getterytbyid | Zwraca rekord z danymi TERYT
[**getTerytCommuneById**](SearchApi.md#getTerytCommuneById) | **GET** /WasteRegister/v1/Search/getterytcommunebyid | Zwraca rekord z danymi gminy
[**searchCompany**](SearchApi.md#searchCompany) | **GET** /WasteRegister/v1/Search/searchcompany | Zwraca listę rekordów z danymi podmiotów zgodnie z wartością zapytania
[**searchEupsByCompanyId**](SearchApi.md#searchEupsByCompanyId) | **GET** /WasteRegister/v1/Search/searcheupsbycompanyid | Zwraca listę rekordów z danymi miejsc prowadzenia działalności przypisanych do Id podmiotu, według podanego kryterium wyszukiwania
[**searchTeryt**](SearchApi.md#searchTeryt) | **GET** /WasteRegister/v1/Search/searchteryt | Zwraca listę rekordów TERYT zgodnie z wartością zapytania
[**searchTerytCommune**](SearchApi.md#searchTerytCommune) | **GET** /WasteRegister/v1/Search/searchterytcommune | Zwraca listę gmin zgodnie z wartością zapytania


# **getCompanyById**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsElasticsearchCompanyEs getCompanyById($company_id)

Zwraca rekord z danymi podmiotu zgodnie z wartością zapytania

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = "company_id_example"; // string | Id podmiotu

try {
    $result = $apiInstance->getCompanyById($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getCompanyById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | [**string**](../Model/.md)| Id podmiotu | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsElasticsearchCompanyEs**](../Model/WasteRegisterPublicApiApiModelsElasticsearchCompanyEs.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEupById**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsElasticsearchEupEs getEupById($eup_id)

Zwraca rekord z danymi miejsca prowadzenia działalności zgodnie z wartością zapytania

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eup_id = "eup_id_example"; // string | Id miejsca prowadzenia działalności

try {
    $result = $apiInstance->getEupById($eup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getEupById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eup_id** | [**string**](../Model/.md)| Id miejsca prowadzenia działalności | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsElasticsearchEupEs**](../Model/WasteRegisterPublicApiApiModelsElasticsearchEupEs.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEupsByCompanyId**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsElasticsearchEupEs[] getEupsByCompanyId($company_id)

Zwraca listę 10 rekordów z danymi miejsc prowadzenia działalności przypisanych do Id podmiotu

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = "company_id_example"; // string | Id podmiotu

try {
    $result = $apiInstance->getEupsByCompanyId($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getEupsByCompanyId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | [**string**](../Model/.md)| Id podmiotu | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsElasticsearchEupEs[]**](../Model/WasteRegisterPublicApiApiModelsElasticsearchEupEs.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTerytById**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsElasticsearchTerytEs getTerytById($query)

Zwraca rekord z danymi TERYT

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | 

try {
    $result = $apiInstance->getTerytById($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getTerytById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsElasticsearchTerytEs**](../Model/WasteRegisterPublicApiApiModelsElasticsearchTerytEs.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTerytCommuneById**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsElasticsearchTerytCommuneEs getTerytCommuneById($query)

Zwraca rekord z danymi gminy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | 

try {
    $result = $apiInstance->getTerytCommuneById($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getTerytCommuneById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsElasticsearchTerytCommuneEs**](../Model/WasteRegisterPublicApiApiModelsElasticsearchTerytCommuneEs.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchCompany**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsElasticsearchCompanyEs[] searchCompany($query)

Zwraca listę rekordów z danymi podmiotów zgodnie z wartością zapytania

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | Wartość zapytania

try {
    $result = $apiInstance->searchCompany($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| Wartość zapytania | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsElasticsearchCompanyEs[]**](../Model/WasteRegisterPublicApiApiModelsElasticsearchCompanyEs.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchEupsByCompanyId**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsElasticsearchEupEs[] searchEupsByCompanyId($company_id, $query)

Zwraca listę rekordów z danymi miejsc prowadzenia działalności przypisanych do Id podmiotu, według podanego kryterium wyszukiwania

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = "company_id_example"; // string | Id podmiotu
$query = "query_example"; // string | Kryterium wyszukiwania. Jeśli puste, metoda zwraca 10 wyników.

try {
    $result = $apiInstance->searchEupsByCompanyId($company_id, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchEupsByCompanyId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | [**string**](../Model/.md)| Id podmiotu | [optional]
 **query** | **string**| Kryterium wyszukiwania. Jeśli puste, metoda zwraca 10 wyników. | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsElasticsearchEupEs[]**](../Model/WasteRegisterPublicApiApiModelsElasticsearchEupEs.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchTeryt**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsElasticsearchTerytEs[] searchTeryt($query)

Zwraca listę rekordów TERYT zgodnie z wartością zapytania

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | 

try {
    $result = $apiInstance->searchTeryt($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchTeryt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsElasticsearchTerytEs[]**](../Model/WasteRegisterPublicApiApiModelsElasticsearchTerytEs.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchTerytCommune**
> \Swagger\Client\Model\WasteRegisterPublicApiApiModelsElasticsearchTerytCommuneEs[] searchTerytCommune($query)

Zwraca listę gmin zgodnie z wartością zapytania

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | 

try {
    $result = $apiInstance->searchTerytCommune($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchTerytCommune: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\WasteRegisterPublicApiApiModelsElasticsearchTerytCommuneEs[]**](../Model/WasteRegisterPublicApiApiModelsElasticsearchTerytCommuneEs.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

