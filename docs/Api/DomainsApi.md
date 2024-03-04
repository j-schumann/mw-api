# Mittwald\Api\DomainsApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkDomainAvailability**](DomainsApi.md#checkdomainavailability) | **POST** /domains/{domainIdentifier}/actions/check | Domainverfügbarkeit prüfen
[**createSubdomain**](DomainsApi.md#createsubdomain) | **POST** /accounts/{accountIdentifier}/domains/{domainIdentifier}/subdomains | Subdomain erstellen
[**deleteDomain**](DomainsApi.md#deletedomain) | **DELETE** /accounts/{accountIdentifier}/domains/{domainIdentifier} | Domain löschen/kündigen
[**deleteSubdomain**](DomainsApi.md#deletesubdomain) | **DELETE** /accounts/{accountIdentifier}/domains/{domainIdentifier}/subdomains | Subdomain löschen
[**domainProxyList**](DomainsApi.md#domainproxylist) | **GET** /accounts/{accountIdentifier}/domainsproxies | Domain Proxies eines Accounts
[**getDomainAuthCode**](DomainsApi.md#getdomainauthcode) | **GET** /accounts/{accountIdentifier}/domains/{domainIdentifier}/authcode | Auth-Code einer Domain auslesen
[**getToplevelDomain**](DomainsApi.md#gettopleveldomain) | **GET** /topleveldomains/{topLevelDomainIdentifier} | Toplevel-Domain auslesen
[**listDomainsByAccount**](DomainsApi.md#listdomainsbyaccount) | **GET** /accounts/{accountIdentifier}/domains | Domains eines Accounts auslesen
[**listSubdomainsByDomain**](DomainsApi.md#listsubdomainsbydomain) | **GET** /accounts/{accountIdentifier}/domains/{domainIdentifier}/subdomains | Subdomains eines Accounts auslesen
[**listToplevelDomains**](DomainsApi.md#listtopleveldomains) | **GET** /topleveldomains | Toplevel-Domains auslesen
[**registerNewDomain**](DomainsApi.md#registernewdomain) | **POST** /accounts/{accountIdentifier}/domains | Domain registrieren/Transfer einleiten

# **checkDomainAvailability**
> checkDomainAvailability($domain_identifier)

Domainverfügbarkeit prüfen

Prüft ob eine Domain verfügbar ist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$domain_identifier = "domain_identifier_example"; // string | Domain

try {
    $apiInstance->checkDomainAvailability($domain_identifier);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->checkDomainAvailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_identifier** | **string**| Domain |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSubdomain**
> \Mittwald\Api\Model\Subdomain[] createSubdomain($body, $account_identifier, $domain_identifier)

Subdomain erstellen

Erstellt eine neue Subdomain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\DomainsApi(
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
    echo 'Exception when calling DomainsApi->createSubdomain: ', $e->getMessage(), PHP_EOL;
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

# **deleteDomain**
> deleteDomain($account_identifier, $domain_identifier)

Domain löschen/kündigen

Löscht bzw. kündigt eine bestehende Domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_identifier = "account_identifier_example"; // string | Name oder ID eines Accounts
$domain_identifier = "domain_identifier_example"; // string | Vollständiger Name der Domain

try {
    $apiInstance->deleteDomain($account_identifier, $domain_identifier);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->deleteDomain: ', $e->getMessage(), PHP_EOL;
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

# **deleteSubdomain**
> deleteSubdomain($account_identifier, $domain_identifier)

Subdomain löschen

Löscht eine bestehende Subdomain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_identifier = "account_identifier_example"; // string | Name oder ID eines Accounts
$domain_identifier = "domain_identifier_example"; // string | Vollständiger Name der Domain

try {
    $apiInstance->deleteSubdomain($account_identifier, $domain_identifier);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->deleteSubdomain: ', $e->getMessage(), PHP_EOL;
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

# **domainProxyList**
> \Mittwald\Api\Model\DomainProxy[] domainProxyList($account_identifier)

Domain Proxies eines Accounts

Zeige alle aktiven Domain Proxies eines Accounts an

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_identifier = "account_identifier_example"; // string | Name oder ID eines Accounts

try {
    $result = $apiInstance->domainProxyList($account_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainProxyList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_identifier** | **string**| Name oder ID eines Accounts |

### Return type

[**\Mittwald\Api\Model\DomainProxy[]**](../Model/DomainProxy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDomainAuthCode**
> \Mittwald\Api\Model\DomainAuthCode getDomainAuthCode($account_identifier, $domain_identifier)

Auth-Code einer Domain auslesen

Liefert den Auth-Code einer Domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_identifier = "account_identifier_example"; // string | Name oder ID eines Accounts
$domain_identifier = "domain_identifier_example"; // string | Vollständiger Name der Domain

try {
    $result = $apiInstance->getDomainAuthCode($account_identifier, $domain_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->getDomainAuthCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_identifier** | **string**| Name oder ID eines Accounts |
 **domain_identifier** | **string**| Vollständiger Name der Domain |

### Return type

[**\Mittwald\Api\Model\DomainAuthCode**](../Model/DomainAuthCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getToplevelDomain**
> \Mittwald\Api\Model\TopLevelDomain getToplevelDomain($top_level_domain_identifier, $fields)

Toplevel-Domain auslesen

Liefert eine Topleveldomain aus

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$top_level_domain_identifier = "top_level_domain_identifier_example"; // string | Topleveldomain
$fields = "fields_example"; // string | Auszuliefernde Felder, als kommaseparierte Liste.

try {
    $result = $apiInstance->getToplevelDomain($top_level_domain_identifier, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->getToplevelDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **top_level_domain_identifier** | **string**| Topleveldomain |
 **fields** | **string**| Auszuliefernde Felder, als kommaseparierte Liste. | [optional]

### Return type

[**\Mittwald\Api\Model\TopLevelDomain**](../Model/TopLevelDomain.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listDomainsByAccount**
> \Mittwald\Api\Model\Domain[] listDomainsByAccount($account_identifier, $limit, $offset)

Domains eines Accounts auslesen

Diese Operation liest die Domains eines einzelnen Accounts aus

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_identifier = "account_identifier_example"; // string | Name oder ID eines Accounts
$limit = 20; // int | Anzahl der zurückzuliefernden Domains.
$offset = 0; // int | Offset für die Limitierung der Suchergebnisse

try {
    $result = $apiInstance->listDomainsByAccount($account_identifier, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->listDomainsByAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_identifier** | **string**| Name oder ID eines Accounts |
 **limit** | **int**| Anzahl der zurückzuliefernden Domains. | [optional] [default to 20]
 **offset** | **int**| Offset für die Limitierung der Suchergebnisse | [optional] [default to 0]

### Return type

[**\Mittwald\Api\Model\Domain[]**](../Model/Domain.md)

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

$apiInstance = new Mittwald\Api\Functions\DomainsApi(
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
    echo 'Exception when calling DomainsApi->listSubdomainsByDomain: ', $e->getMessage(), PHP_EOL;
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

# **listToplevelDomains**
> \Mittwald\Api\Model\TopLevelDomain[] listToplevelDomains()

Toplevel-Domains auslesen

Liefert alle möglichen Topleveldomains aus

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listToplevelDomains();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->listToplevelDomains: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Mittwald\Api\Model\TopLevelDomain[]**](../Model/TopLevelDomain.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerNewDomain**
> \Mittwald\Api\Model\Domain[] registerNewDomain($body, $account_identifier)

Domain registrieren/Transfer einleiten

Diese Operation kann genutzt werden, um für den gegebenen Account eine neue Domain zu registrieren oder einen Virtual Host Eintrag zu erstellen. Falls die Domain bereits vergeben ist, müssen ein Auth-Code und unter Umständen ein Authentifizierungsverfahren mitangegeben werden, um einen Domain-Transfer einzuleiten.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Mittwald\Api\Model\DomainRegistration(); // \Mittwald\Api\Model\DomainRegistration | Daten für eine Domain-Registrierung
$account_identifier = "account_identifier_example"; // string | Name oder ID eines Accounts

try {
    $result = $apiInstance->registerNewDomain($body, $account_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->registerNewDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Mittwald\Api\Model\DomainRegistration**](../Model/DomainRegistration.md)| Daten für eine Domain-Registrierung |
 **account_identifier** | **string**| Name oder ID eines Accounts |

### Return type

[**\Mittwald\Api\Model\Domain[]**](../Model/Domain.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

