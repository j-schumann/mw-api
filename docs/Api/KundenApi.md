# Mittwald\Api\KundenApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBenefitDetails**](KundenApi.md#getbenefitdetails) | **GET** /customers/{customerNumber}/benefits/{benefit} | Details zu einer gebuchten Leistung
[**getCurrentCustomer**](KundenApi.md#getcurrentcustomer) | **GET** /customer | Details zu dem aktuellem Kunden
[**getCustomer**](KundenApi.md#getcustomer) | **GET** /customers/{customerNumber} | Kundendetails auslesen
[**getCustomerBillingRecipient**](KundenApi.md#getcustomerbillingrecipient) | **GET** /customers/{customerNumber}/billingrecipient | Rechungsempfänger auslesen
[**getCustomerBillingSettings**](KundenApi.md#getcustomerbillingsettings) | **GET** /customers/{customerNumber}/billingsettings | Rechungseinstellungen auslesen
[**getCustomerContactPerson**](KundenApi.md#getcustomercontactperson) | **GET** /customers/{customerNumber}/contactperson | Ansprechpartner auslesen
[**getCustomerContractPartner**](KundenApi.md#getcustomercontractpartner) | **GET** /customers/{customerNumber}/contractpartner | Vertragspartner auslesen
[**getCustomerPaymentSettings**](KundenApi.md#getcustomerpaymentsettings) | **GET** /customers/{customerNumber}/paymentsettings | Zahlungseinstellungen auslesen
[**getInvoice**](KundenApi.md#getinvoice) | **GET** /invoices/{invoiceNumber} | Rechnung eines Kunden
[**getPaymentReceipts**](KundenApi.md#getpaymentreceipts) | **GET** /invoices/{invoiceNumber}/paymentreceipts | Zahlungseingänge einer Rechnung
[**listAccountsByCustomer**](KundenApi.md#listaccountsbycustomer) | **GET** /customers/{customerNumber}/accounts | Accounts eines Kunden
[**listInvoicesByCustomer**](KundenApi.md#listinvoicesbycustomer) | **GET** /customers/{customerNumber}/invoices | Rechnungen eines Kunden
[**resetCustomerBillingRecipient**](KundenApi.md#resetcustomerbillingrecipient) | **DELETE** /customers/{customerNumber}/billingrecipient | Rechnungsempfänger eines Kunden zurücksetzen
[**updateCustomerBillingRecipient**](KundenApi.md#updatecustomerbillingrecipient) | **PUT** /customers/{customerNumber}/billingrecipient | Rechnungsempfänger ändern
[**updateCustomerBillingSettings**](KundenApi.md#updatecustomerbillingsettings) | **PUT** /customers/{customerNumber}/billingsettings | Rechnungseinstellungen ändern
[**updateCustomerContactPerson**](KundenApi.md#updatecustomercontactperson) | **PUT** /customers/{customerNumber}/contactperson | Ansprechpartner ändern
[**updateCustomerContractPartner**](KundenApi.md#updatecustomercontractpartner) | **PUT** /customers/{customerNumber}/contractpartner | Vertragspartner ändern
[**updateCustomerPaymentSettings**](KundenApi.md#updatecustomerpaymentsettings) | **PUT** /customers/{customerNumber}/paymentsettings | Zahlungseinstellungen ändern

# **getBenefitDetails**
> \Mittwald\Api\Model\Benefit[] getBenefitDetails($customer_number, $benefit)

Details zu einer gebuchten Leistung

Liefert Details zu einer gebuchten Leistung.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\KundenApi(
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

$apiInstance = new Mittwald\Api\Functions\KundenApi(
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

$apiInstance = new Mittwald\Api\Functions\KundenApi(
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

$apiInstance = new Mittwald\Api\Functions\KundenApi(
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

$apiInstance = new Mittwald\Api\Functions\KundenApi(
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

$apiInstance = new Mittwald\Api\Functions\KundenApi(
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

$apiInstance = new Mittwald\Api\Functions\KundenApi(
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

$apiInstance = new Mittwald\Api\Functions\KundenApi(
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

$apiInstance = new Mittwald\Api\Functions\KundenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoice_number = 56; // int | Rechnungsnummer
$accept = new \Mittwald\Api\Model\null(); //  | Das erwünschte Format (`application/json` oder `application/pdf`)

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
 **accept** | [****](../Model/.md)| Das erwünschte Format (&#x60;application/json&#x60; oder &#x60;application/pdf&#x60;) | [optional]

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

$apiInstance = new Mittwald\Api\Functions\KundenApi(
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

$apiInstance = new Mittwald\Api\Functions\KundenApi(
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

# **listInvoicesByCustomer**
> \Mittwald\Api\Model\Invoice[] listInvoicesByCustomer($customer_number)

Rechnungen eines Kunden

Diese Ressource enthält eine Sammlung aller Rechnungen eines Kunden

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\KundenApi(
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

$apiInstance = new Mittwald\Api\Functions\KundenApi(
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
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerBillingRecipient**
> \Mittwald\Api\Model\CustomerPartner updateCustomerBillingRecipient($body, $customer_number)

Rechnungsempfänger ändern

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\KundenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Mittwald\Api\Model\CustomerPartner(); // \Mittwald\Api\Model\CustomerPartner | Neuer Rechnungsempfänger
$customer_number = 56; // int | Kundennummer

try {
    $result = $apiInstance->updateCustomerBillingRecipient($body, $customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KundenApi->updateCustomerBillingRecipient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Mittwald\Api\Model\CustomerPartner**](../Model/CustomerPartner.md)| Neuer Rechnungsempfänger |
 **customer_number** | **int**| Kundennummer |

### Return type

[**\Mittwald\Api\Model\CustomerPartner**](../Model/CustomerPartner.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerBillingSettings**
> \Mittwald\Api\Model\CustomerBillingSettings updateCustomerBillingSettings($body, $customer_number)

Rechnungseinstellungen ändern

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\KundenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Mittwald\Api\Model\CustomerBillingSettings(); // \Mittwald\Api\Model\CustomerBillingSettings | Neue Zahlungseinstellungen
$customer_number = 56; // int | Kundennummer

try {
    $result = $apiInstance->updateCustomerBillingSettings($body, $customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KundenApi->updateCustomerBillingSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Mittwald\Api\Model\CustomerBillingSettings**](../Model/CustomerBillingSettings.md)| Neue Zahlungseinstellungen |
 **customer_number** | **int**| Kundennummer |

### Return type

[**\Mittwald\Api\Model\CustomerBillingSettings**](../Model/CustomerBillingSettings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerContactPerson**
> \Mittwald\Api\Model\CustomerPartner updateCustomerContactPerson($body, $customer_number)

Ansprechpartner ändern

Über diese Operation lassen sich die Daten des Ansprechpartners eines Kunden ändern. Dabei kann der Ansprechpartner über den Request-Body-Parameter \"identicalToDefaultAddress\" ebenfalls identisch zum Vertragspartner gesetzt werden.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\KundenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Mittwald\Api\Model\ContactUpdateRequest(); // \Mittwald\Api\Model\ContactUpdateRequest | Die zu ändernden Ansprechpartnerdaten
$customer_number = 56; // int | Kundennummer

try {
    $result = $apiInstance->updateCustomerContactPerson($body, $customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KundenApi->updateCustomerContactPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Mittwald\Api\Model\ContactUpdateRequest**](../Model/ContactUpdateRequest.md)| Die zu ändernden Ansprechpartnerdaten |
 **customer_number** | **int**| Kundennummer |

### Return type

[**\Mittwald\Api\Model\CustomerPartner**](../Model/CustomerPartner.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerContractPartner**
> \Mittwald\Api\Model\CustomerPartner updateCustomerContractPartner($body, $customer_number)

Vertragspartner ändern

Über diese Operation können die Vertragspartnerdaten eines Kunden geändert werden

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\KundenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Mittwald\Api\Model\UpdateContact(); // \Mittwald\Api\Model\UpdateContact | Die zu ändernden Vertragspartnerdaten
$customer_number = 56; // int | Kundennummer

try {
    $result = $apiInstance->updateCustomerContractPartner($body, $customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KundenApi->updateCustomerContractPartner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Mittwald\Api\Model\UpdateContact**](../Model/UpdateContact.md)| Die zu ändernden Vertragspartnerdaten |
 **customer_number** | **int**| Kundennummer |

### Return type

[**\Mittwald\Api\Model\CustomerPartner**](../Model/CustomerPartner.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerPaymentSettings**
> \Mittwald\Api\Model\CustomerPaymentSettings updateCustomerPaymentSettings($body, $customer_number)

Zahlungseinstellungen ändern

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\KundenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Mittwald\Api\Model\CustomerPaymentSettings(); // \Mittwald\Api\Model\CustomerPaymentSettings | Neue Zahlungseinstellungen
$customer_number = 56; // int | Kundennummer

try {
    $result = $apiInstance->updateCustomerPaymentSettings($body, $customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KundenApi->updateCustomerPaymentSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Mittwald\Api\Model\CustomerPaymentSettings**](../Model/CustomerPaymentSettings.md)| Neue Zahlungseinstellungen |
 **customer_number** | **int**| Kundennummer |

### Return type

[**\Mittwald\Api\Model\CustomerPaymentSettings**](../Model/CustomerPaymentSettings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

