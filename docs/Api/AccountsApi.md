# Mittwald\Api\AccountsApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccount**](AccountsApi.md#getaccount) | **GET** /accounts/{accountIdentifier} | Account auslesen
[**getAccountStatistics**](AccountsApi.md#getaccountstatistics) | **GET** /accounts/{accountIdentifier}/stats | 
[**getAccountVisitorStatistics**](AccountsApi.md#getaccountvisitorstatistics) | **GET** /accounts/{accountIdentifier}/stats/visitors | 
[**listAccountsByCustomer**](AccountsApi.md#listaccountsbycustomer) | **GET** /customers/{customerNumber}/accounts | Accounts eines Kunden
[**listSoftwareInstallationsByAccount**](AccountsApi.md#listsoftwareinstallationsbyaccount) | **GET** /accounts/{accountIdentifier}/installations | Softwareinstallationen auslesen

# **getAccount**
> \Mittwald\Api\Model\Account getAccount($account_identifier)

Account auslesen

Diese Operation liest genaue Daten eines einzelnen Accounts aus

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_identifier = "account_identifier_example"; // string | Name oder ID eines Accounts

try {
    $result = $apiInstance->getAccount($account_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_identifier** | **string**| Name oder ID eines Accounts |

### Return type

[**\Mittwald\Api\Model\Account**](../Model/Account.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountStatistics**
> \Mittwald\Api\Model\StorageStatistics getAccountStatistics($account_identifier)



Liefert Statistiken zur Speicherplatzauslastung eines Projekts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_identifier = "account_identifier_example"; // string | Name oder ID eines Accounts

try {
    $result = $apiInstance->getAccountStatistics($account_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_identifier** | **string**| Name oder ID eines Accounts |

### Return type

[**\Mittwald\Api\Model\StorageStatistics**](../Model/StorageStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountVisitorStatistics**
> \Mittwald\Api\Model\VisitorStatistics getAccountVisitorStatistics($account_identifier)



Liefert Statistiken zu Besucherzahlen eines Projekts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_identifier = "account_identifier_example"; // string | Name oder ID eines Accounts

try {
    $result = $apiInstance->getAccountVisitorStatistics($account_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountVisitorStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_identifier** | **string**| Name oder ID eines Accounts |

### Return type

[**\Mittwald\Api\Model\VisitorStatistics**](../Model/VisitorStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAccountsByCustomer**
> \Mittwald\Api\Model\Account[] listAccountsByCustomer($customer_number, $advised, $owned)

Accounts eines Kunden

Diese Ressource enthält eine Sammlung aller Accounts eines Kunden.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = 56; // int | Kundennummer
$advised = false; // bool | Dieser Parameter steuert, ob auch Accounts zurückgeliefert werden sollen, für die eine Verwaltungsfreigabe besteht, aber nicht zur Kundennummer `{customerNumber}` gehören.'
$owned = true; // bool | Dieser Parameter steuert, ob Accounts zurückgeliefert werden sollen, die direkt der Kundennummer `{customerNumber}` gehören. Dieser Parameter hat standardmäßig den Wert `true`; über den Wert `false` können in Kombination mit dem Parameter `advised` ausschließlich Accounts abgefragt werden, für die eine Verwaltungsfreigabe besteht.

try {
    $result = $apiInstance->listAccountsByCustomer($customer_number, $advised, $owned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->listAccountsByCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **int**| Kundennummer |
 **advised** | **bool**| Dieser Parameter steuert, ob auch Accounts zurückgeliefert werden sollen, für die eine Verwaltungsfreigabe besteht, aber nicht zur Kundennummer &#x60;{customerNumber}&#x60; gehören.&#x27; | [optional] [default to false]
 **owned** | **bool**| Dieser Parameter steuert, ob Accounts zurückgeliefert werden sollen, die direkt der Kundennummer &#x60;{customerNumber}&#x60; gehören. Dieser Parameter hat standardmäßig den Wert &#x60;true&#x60;; über den Wert &#x60;false&#x60; können in Kombination mit dem Parameter &#x60;advised&#x60; ausschließlich Accounts abgefragt werden, für die eine Verwaltungsfreigabe besteht. | [optional] [default to true]

### Return type

[**\Mittwald\Api\Model\Account[]**](../Model/Account.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSoftwareInstallationsByAccount**
> \Mittwald\Api\Model\SoftwareInstallation[] listSoftwareInstallationsByAccount($account_identifier, $install_path)

Softwareinstallationen auslesen

Diese Operation liest alle Softwareinstallationen eines einzelnen Accounts aus

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_identifier = "account_identifier_example"; // string | Name oder ID eines Accounts
$install_path = "install_path_example"; // string | Filtert Software-Installationen nach Installationspfad (z.B. `&installPath=%2Fhtml%2Ftypo3`)

try {
    $result = $apiInstance->listSoftwareInstallationsByAccount($account_identifier, $install_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->listSoftwareInstallationsByAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_identifier** | **string**| Name oder ID eines Accounts |
 **install_path** | **string**| Filtert Software-Installationen nach Installationspfad (z.B. &#x60;&amp;installPath&#x3D;%2Fhtml%2Ftypo3&#x60;) | [optional]

### Return type

[**\Mittwald\Api\Model\SoftwareInstallation[]**](../Model/SoftwareInstallation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

