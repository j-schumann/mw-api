# Mittwald\Api\SubdomainApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSubdomain**](SubdomainApi.md#createsubdomain) | **POST** /accounts/{accountIdentifier}/domains/{domainIdentifier}/subdomains | Subdomain erstellen
[**deleteSubdomain**](SubdomainApi.md#deletesubdomain) | **DELETE** /accounts/{accountIdentifier}/domains/{domainIdentifier}/subdomains | Subdomain löschen
[**getSubdomain**](SubdomainApi.md#getsubdomain) | **GET** /accounts/{accountIdentifier}/domains/{domainIdentifier}/subdomains/{subdomainIdentifier} | Subdomain auslesen
[**listSubdomainsByDomain**](SubdomainApi.md#listsubdomainsbydomain) | **GET** /accounts/{accountIdentifier}/domains/{domainIdentifier}/subdomains | Subdomains eines Accounts auslesen

# **createSubdomain**
> \Mittwald\Api\Model\Subdomain[] createSubdomain($body, $account_identifier, $domain_identifier)

Subdomain erstellen

Erstellt eine neue Subdomain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\SubdomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \Mittwald\Api\Model\SubdomainCreationBody()); // \Mittwald\Api\Model\SubdomainCreationBody[] | Daten der neuen Subdomain
$account_identifier = "account_identifier_example"; // string | Name oder ID eines Accounts
$domain_identifier = "domain_identifier_example"; // string | Vollständiger Name der Domain

try {
    $result = $apiInstance->createSubdomain($body, $account_identifier, $domain_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubdomainApi->createSubdomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Mittwald\Api\Model\SubdomainCreationBody[]**](../Model/SubdomainCreationBody.md)| Daten der neuen Subdomain |
 **account_identifier** | **string**| Name oder ID eines Accounts |
 **domain_identifier** | **string**| Vollständiger Name der Domain |

### Return type

[**\Mittwald\Api\Model\Subdomain[]**](../Model/Subdomain.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubdomain**
> deleteSubdomain($account_identifier, $domain_identifier)

Subdomain löschen

Löscht eine bestehende Subdomain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\SubdomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_identifier = "account_identifier_example"; // string | Name oder ID eines Accounts
$domain_identifier = "domain_identifier_example"; // string | Vollständiger Name der Domain

try {
    $apiInstance->deleteSubdomain($account_identifier, $domain_identifier);
} catch (Exception $e) {
    echo 'Exception when calling SubdomainApi->deleteSubdomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_identifier** | **string**| Name oder ID eines Accounts |
 **domain_identifier** | **string**| Vollständiger Name der Domain |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubdomain**
> \Mittwald\Api\Model\Subdomain getSubdomain($account_identifier, $domain_identifier, $subdomain_identifier)

Subdomain auslesen

Liefert eine spezifische Subdomain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\SubdomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_identifier = "account_identifier_example"; // string | Name oder ID eines Accounts
$domain_identifier = "domain_identifier_example"; // string | Vollständiger Name der Domain
$subdomain_identifier = "subdomain_identifier_example"; // string | Vollständiger Name der Subdomain

try {
    $result = $apiInstance->getSubdomain($account_identifier, $domain_identifier, $subdomain_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubdomainApi->getSubdomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_identifier** | **string**| Name oder ID eines Accounts |
 **domain_identifier** | **string**| Vollständiger Name der Domain |
 **subdomain_identifier** | **string**| Vollständiger Name der Subdomain |

### Return type

[**\Mittwald\Api\Model\Subdomain**](../Model/Subdomain.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSubdomainsByDomain**
> \Mittwald\Api\Model\Subdomain[] listSubdomainsByDomain($account_identifier, $domain_identifier)

Subdomains eines Accounts auslesen

Liefert alle verfügbaren Subdomains eines Accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\SubdomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_identifier = "account_identifier_example"; // string | Name oder ID eines Accounts
$domain_identifier = "domain_identifier_example"; // string | Vollständiger Name der Domain

try {
    $result = $apiInstance->listSubdomainsByDomain($account_identifier, $domain_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubdomainApi->listSubdomainsByDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_identifier** | **string**| Name oder ID eines Accounts |
 **domain_identifier** | **string**| Vollständiger Name der Domain |

### Return type

[**\Mittwald\Api\Model\Subdomain[]**](../Model/Subdomain.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

