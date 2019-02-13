# Mittwald\Api\KundenApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBenefitDetails**](KundenApi.md#getBenefitDetails) | **GET** /customers/{customerNumber}/benefits/{benefit} | Details zu einer gebuchten Leistung
[**getCurrentCustomer**](KundenApi.md#getCurrentCustomer) | **GET** /customer | Details zu dem aktuellem Kunden
[**getCustomer**](KundenApi.md#getCustomer) | **GET** /customers/{customerNumber} | Kundendetails auslesen
[**getCustomerBillingRecipient**](KundenApi.md#getCustomerBillingRecipient) | **GET** /customers/{customerNumber}/billingrecipient | Rechungsempfänger auslesen
[**getCustomerBillingSettings**](KundenApi.md#getCustomerBillingSettings) | **GET** /customers/{customerNumber}/billingsettings | Rechungseinstellungen auslesen
[**getCustomerContactPerson**](KundenApi.md#getCustomerContactPerson) | **GET** /customers/{customerNumber}/contactperson | Ansprechpartner auslesen
[**getCustomerContractPartner**](KundenApi.md#getCustomerContractPartner) | **GET** /customers/{customerNumber}/contractpartner | Vertragspartner auslesen
[**getCustomerPaymentSettings**](KundenApi.md#getCustomerPaymentSettings) | **GET** /customers/{customerNumber}/paymentsettings | Zahlungseinstellungen auslesen
[**getInvoice**](KundenApi.md#getInvoice) | **GET** /invoices/{invoiceNumber} | Rechnung eines Kunden
[**getPaymentReceipts**](KundenApi.md#getPaymentReceipts) | **GET** /invoices/{invoiceNumber}/paymentreceipts | Zahlungseingänge einer Rechnung
[**listAccountsByCustomer**](KundenApi.md#listAccountsByCustomer) | **GET** /customers/{customerNumber}/accounts | Accounts eines Kunden
[**listInvoicesByCustomer**](KundenApi.md#listInvoicesByCustomer) | **GET** /customers/{customerNumber}/invoices | Rechnungen eines Kunden
[**resetCustomerBillingRecipient**](KundenApi.md#resetCustomerBillingRecipient) | **DELETE** /customers/{customerNumber}/billingrecipient | Rechnungsempfänger eines Kunden zurücksetzen
[**updateCustomerBillingRecipient**](KundenApi.md#updateCustomerBillingRecipient) | **PUT** /customers/{customerNumber}/billingrecipient | Rechnungsempfänger ändern
[**updateCustomerBillingSettings**](KundenApi.md#updateCustomerBillingSettings) | **PUT** /customers/{customerNumber}/billingsettings | Rechnungseinstellungen ändern
[**updateCustomerContactPerson**](KundenApi.md#updateCustomerContactPerson) | **PUT** /customers/{customerNumber}/contactperson | Ansprechpartner ändern
[**updateCustomerContractPartner**](KundenApi.md#updateCustomerContractPartner) | **PUT** /customers/{customerNumber}/contractpartner | Vertragspartner ändern
[**updateCustomerPaymentSettings**](KundenApi.md#updateCustomerPaymentSettings) | **PUT** /customers/{customerNumber}/paymentsettings | Zahlungseinstellungen ändern


# **getBenefitDetails**
> \Mittwald\Api\Model\Benefit[] getBenefitDetails($customer_number, $benefit)

Details zu einer gebuchten Leistung

Liefert Details zu einer gebuchten Leistung.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\KundenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = 56; // int | Kundennummer
$benefit = "benefit_example"; // string | Leistung

try {
    $result = $apiInstance->getBenefitDetails($customer_number, $benefit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KundenApi->getBenefitDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **int**| Kundennummer |
 **benefit** | **string**| Leistung |

### Return type

[**\Mittwald\Api\Model\Benefit[]**](../Model/Benefit.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentCustomer**
> \Mittwald\Api\Model\Customer getCurrentCustomer()

Details zu dem aktuellem Kunden

Liefert Details zum aktuellen Kunden.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\KundenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getCurrentCustomer();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KundenApi->getCurrentCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Mittwald\Api\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomer**
> \Mittwald\Api\Model\Customer getCustomer($customer_number)

Kundendetails auslesen

Diese Ressource enthält Detailinformationen zu einem bestimmten Kunden.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\KundenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = 56; // int | Kundennummer

try {
    $result = $apiInstance->getCustomer($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KundenApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **int**| Kundennummer |

### Return type

[**\Mittwald\Api\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerBillingRecipient**
> \Mittwald\Api\Model\CustomerPartner getCustomerBillingRecipient($customer_number)

Rechungsempfänger auslesen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\KundenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = 56; // int | Kundennummer

try {
    $result = $apiInstance->getCustomerBillingRecipient($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KundenApi->getCustomerBillingRecipient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **int**| Kundennummer |

### Return type

[**\Mittwald\Api\Model\CustomerPartner**](../Model/CustomerPartner.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerBillingSettings**
> \Mittwald\Api\Model\CustomerBillingSettings getCustomerBillingSettings($customer_number)

Rechungseinstellungen auslesen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\KundenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = 56; // int | Kundennummer

try {
    $result = $apiInstance->getCustomerBillingSettings($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KundenApi->getCustomerBillingSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **int**| Kundennummer |

### Return type

[**\Mittwald\Api\Model\CustomerBillingSettings**](../Model/CustomerBillingSettings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerContactPerson**
> \Mittwald\Api\Model\CustomerPartner getCustomerContactPerson($customer_number)

Ansprechpartner auslesen

Diese Operation liefert Details zum Ansprechpartner eines Kunden zurück. Der Ansprechpartner kann identisch mit dem Vertragspartner sein; in diesem Fall wird die Anfrage mit einem 303-Statuscode beantwortet, und der `Location`-Header enthält die URL des Vertragspartners, der in diesem Fall als Ansprechpartner gilt.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\KundenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = 56; // int | Kundennummer

try {
    $result = $apiInstance->getCustomerContactPerson($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KundenApi->getCustomerContactPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **int**| Kundennummer |

### Return type

[**\Mittwald\Api\Model\CustomerPartner**](../Model/CustomerPartner.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerContractPartner**
> \Mittwald\Api\Model\CustomerPartner getCustomerContractPartner($customer_number)

Vertragspartner auslesen

Diese Operation liefert Details zum Vertragspartner eines Kunden zurück

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\KundenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = 56; // int | Kundennummer

try {
    $result = $apiInstance->getCustomerContractPartner($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KundenApi->getCustomerContractPartner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **int**| Kundennummer |

### Return type

[**\Mittwald\Api\Model\CustomerPartner**](../Model/CustomerPartner.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerPaymentSettings**
> \Mittwald\Api\Model\CustomerPaymentSettings getCustomerPaymentSettings($customer_number)

Zahlungseinstellungen auslesen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\KundenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = 56; // int | Kundennummer

try {
    $result = $apiInstance->getCustomerPaymentSettings($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KundenApi->getCustomerPaymentSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **int**| Kundennummer |

### Return type

[**\Mittwald\Api\Model\CustomerPaymentSettings**](../Model/CustomerPaymentSettings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoice**
> \Mittwald\Api\Model\Invoice getInvoice($invoice_number, $accept)

Rechnung eines Kunden

Diese Ressource repräsentiert eine einzelne Rechnung.  Über den `Accept`-Header kann gesteuert werden, ob die Daten dieser Rechnung als JSON-Dokument oder das tatsächliche Rechnungsdokument als PDF abgerufen werden sollen.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\KundenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_number = 56; // int | Rechnungsnummer
$accept = "accept_example"; // string | Das erwünschte Format (`application/json` oder `application/pdf`)

try {
    $result = $apiInstance->getInvoice($invoice_number, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KundenApi->getInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_number** | **int**| Rechnungsnummer |
 **accept** | **string**| Das erwünschte Format (&#x60;application/json&#x60; oder &#x60;application/pdf&#x60;) | [optional]

### Return type

[**\Mittwald\Api\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentReceipts**
> \Mittwald\Api\Model\PaymentReceipt[] getPaymentReceipts($invoice_number)

Zahlungseingänge einer Rechnung

Liest erfasste Buchungen zu einer bestimmten Rechnung aus

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\KundenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_number = 56; // int | Rechnungsnummer

try {
    $result = $apiInstance->getPaymentReceipts($invoice_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KundenApi->getPaymentReceipts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_number** | **int**| Rechnungsnummer |

### Return type

[**\Mittwald\Api\Model\PaymentReceipt[]**](../Model/PaymentReceipt.md)

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

$apiInstance = new Mittwald\Api\Api\KundenApi(
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
    echo 'Exception when calling KundenApi->listAccountsByCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **int**| Kundennummer |
 **advised** | **bool**| Dieser Parameter steuert, ob auch Accounts zurückgeliefert werden sollen, für die eine Verwaltungsfreigabe besteht, aber nicht zur Kundennummer &#x60;{customerNumber}&#x60; gehören.&#39; | [optional] [default to false]
 **owned** | **bool**| Dieser Parameter steuert, ob Accounts zurückgeliefert werden sollen, die direkt der Kundennummer &#x60;{customerNumber}&#x60; gehören. Dieser Parameter hat standardmäßig den Wert &#x60;true&#x60;; über den Wert &#x60;false&#x60; können in Kombination mit dem Parameter &#x60;advised&#x60; ausschließlich Accounts abgefragt werden, für die eine Verwaltungsfreigabe besteht. | [optional] [default to true]

### Return type

[**\Mittwald\Api\Model\Account[]**](../Model/Account.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listInvoicesByCustomer**
> \Mittwald\Api\Model\Invoice[] listInvoicesByCustomer($customer_number)

Rechnungen eines Kunden

Diese Ressource enthält eine Sammlung aller Rechnungen eines Kunden

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\KundenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = 56; // int | Kundennummer

try {
    $result = $apiInstance->listInvoicesByCustomer($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KundenApi->listInvoicesByCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **int**| Kundennummer |

### Return type

[**\Mittwald\Api\Model\Invoice[]**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetCustomerBillingRecipient**
> resetCustomerBillingRecipient($customer_number)

Rechnungsempfänger eines Kunden zurücksetzen

Diese Operation setzt den Rechnungsempfänger eines Kunden auf den Vertragspartner zurück

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\KundenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = 56; // int | Kundennummer

try {
    $apiInstance->resetCustomerBillingRecipient($customer_number);
} catch (Exception $e) {
    echo 'Exception when calling KundenApi->resetCustomerBillingRecipient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **int**| Kundennummer |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerBillingRecipient**
> \Mittwald\Api\Model\CustomerPartner updateCustomerBillingRecipient($customer_number, $billing_recipient)

Rechnungsempfänger ändern

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\KundenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = 56; // int | Kundennummer
$billing_recipient = new \Mittwald\Api\Model\CustomerPartner(); // \Mittwald\Api\Model\CustomerPartner | Neuer Rechnungsempfänger

try {
    $result = $apiInstance->updateCustomerBillingRecipient($customer_number, $billing_recipient);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KundenApi->updateCustomerBillingRecipient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **int**| Kundennummer |
 **billing_recipient** | [**\Mittwald\Api\Model\CustomerPartner**](../Model/CustomerPartner.md)| Neuer Rechnungsempfänger |

### Return type

[**\Mittwald\Api\Model\CustomerPartner**](../Model/CustomerPartner.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerBillingSettings**
> \Mittwald\Api\Model\CustomerBillingSettings updateCustomerBillingSettings($customer_number, $billing_settings)

Rechnungseinstellungen ändern

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\KundenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = 56; // int | Kundennummer
$billing_settings = new \Mittwald\Api\Model\CustomerBillingSettings(); // \Mittwald\Api\Model\CustomerBillingSettings | Neue Zahlungseinstellungen

try {
    $result = $apiInstance->updateCustomerBillingSettings($customer_number, $billing_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KundenApi->updateCustomerBillingSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **int**| Kundennummer |
 **billing_settings** | [**\Mittwald\Api\Model\CustomerBillingSettings**](../Model/CustomerBillingSettings.md)| Neue Zahlungseinstellungen |

### Return type

[**\Mittwald\Api\Model\CustomerBillingSettings**](../Model/CustomerBillingSettings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerContactPerson**
> \Mittwald\Api\Model\CustomerPartner updateCustomerContactPerson($customer_number, $update_contact_person_request)

Ansprechpartner ändern

Über diese Operation lassen sich die Daten des Ansprechpartners eines Kunden ändern. Dabei kann der Ansprechpartner über den Request-Body-Parameter \"identicalToDefaultAddress\" ebenfalls identisch zum Vertragspartner gesetzt werden.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\KundenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = 56; // int | Kundennummer
$update_contact_person_request = new \Mittwald\Api\Model\ContactUpdateRequest(); // \Mittwald\Api\Model\ContactUpdateRequest | Die zu ändernden Ansprechpartnerdaten

try {
    $result = $apiInstance->updateCustomerContactPerson($customer_number, $update_contact_person_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KundenApi->updateCustomerContactPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **int**| Kundennummer |
 **update_contact_person_request** | [**\Mittwald\Api\Model\ContactUpdateRequest**](../Model/ContactUpdateRequest.md)| Die zu ändernden Ansprechpartnerdaten |

### Return type

[**\Mittwald\Api\Model\CustomerPartner**](../Model/CustomerPartner.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerContractPartner**
> \Mittwald\Api\Model\CustomerPartner updateCustomerContractPartner($customer_number, $update_contract_partner_request)

Vertragspartner ändern

Über diese Operation können die Vertragspartnerdaten eines Kunden geändert werden

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\KundenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = 56; // int | Kundennummer
$update_contract_partner_request = new \Mittwald\Api\Model\UpdateContact(); // \Mittwald\Api\Model\UpdateContact | Die zu ändernden Vertragspartnerdaten

try {
    $result = $apiInstance->updateCustomerContractPartner($customer_number, $update_contract_partner_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KundenApi->updateCustomerContractPartner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **int**| Kundennummer |
 **update_contract_partner_request** | [**\Mittwald\Api\Model\UpdateContact**](../Model/UpdateContact.md)| Die zu ändernden Vertragspartnerdaten |

### Return type

[**\Mittwald\Api\Model\CustomerPartner**](../Model/CustomerPartner.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerPaymentSettings**
> \Mittwald\Api\Model\CustomerPaymentSettings updateCustomerPaymentSettings($customer_number, $payment_settings)

Zahlungseinstellungen ändern

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\KundenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = 56; // int | Kundennummer
$payment_settings = new \Mittwald\Api\Model\CustomerPaymentSettings(); // \Mittwald\Api\Model\CustomerPaymentSettings | Neue Zahlungseinstellungen

try {
    $result = $apiInstance->updateCustomerPaymentSettings($customer_number, $payment_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KundenApi->updateCustomerPaymentSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **int**| Kundennummer |
 **payment_settings** | [**\Mittwald\Api\Model\CustomerPaymentSettings**](../Model/CustomerPaymentSettings.md)| Neue Zahlungseinstellungen |

### Return type

[**\Mittwald\Api\Model\CustomerPaymentSettings**](../Model/CustomerPaymentSettings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

