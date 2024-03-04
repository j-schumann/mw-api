# Mittwald\Api\SoftwareApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSoftwareInstallation**](SoftwareApi.md#getsoftwareinstallation) | **GET** /installations/{installationIdentifier} | Details einer Softwareinstallation auslesen
[**listSoftwareInstallationExtensions**](SoftwareApi.md#listsoftwareinstallationextensions) | **GET** /installations/{installationIdentifier}/extensions | Extensions einer Softwareinstallation auslesen
[**listSoftwareInstallationsByAccount**](SoftwareApi.md#listsoftwareinstallationsbyaccount) | **GET** /accounts/{accountIdentifier}/installations | Softwareinstallationen auslesen
[**listSoftwares**](SoftwareApi.md#listsoftwares) | **GET** /software | Unterstützte Software auslesen

# **getSoftwareInstallation**
> \Mittwald\Api\Model\SoftwareInstallation getSoftwareInstallation($installation_identifier)

Details einer Softwareinstallation auslesen

Diese Operation liest Details zu einer ganz bestimmten Softwareinstallation aus

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\SoftwareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$installation_identifier = "installation_identifier_example"; // string | ID einer Software-Installation

try {
    $result = $apiInstance->getSoftwareInstallation($installation_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftwareApi->getSoftwareInstallation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **installation_identifier** | **string**| ID einer Software-Installation |

### Return type

[**\Mittwald\Api\Model\SoftwareInstallation**](../Model/SoftwareInstallation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSoftwareInstallationExtensions**
> \Mittwald\Api\Model\SoftwareExtension[] listSoftwareInstallationExtensions($installation_identifier)

Extensions einer Softwareinstallation auslesen

Diese Operation liest Extensions aus, die in einer bestimmten Softwareinstallation installiert sind.  **Hinweis**: Diese Daten werden in der Regel einmal täglich aktualisiert.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\SoftwareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$installation_identifier = "installation_identifier_example"; // string | ID einer Software-Installation

try {
    $result = $apiInstance->listSoftwareInstallationExtensions($installation_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftwareApi->listSoftwareInstallationExtensions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **installation_identifier** | **string**| ID einer Software-Installation |

### Return type

[**\Mittwald\Api\Model\SoftwareExtension[]**](../Model/SoftwareExtension.md)

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

$apiInstance = new Mittwald\Api\Functions\SoftwareApi(
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
    echo 'Exception when calling SoftwareApi->listSoftwareInstallationsByAccount: ', $e->getMessage(), PHP_EOL;
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

# **listSoftwares**
> \Mittwald\Api\Model\Software[] listSoftwares()

Unterstützte Software auslesen

Liest die mögliche Software für eine Neu-Bestellung aus

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\SoftwareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listSoftwares();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftwareApi->listSoftwares: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Mittwald\Api\Model\Software[]**](../Model/Software.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

