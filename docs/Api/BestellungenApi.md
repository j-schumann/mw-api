# Mittwald\Api\BestellungenApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderPartnerBox**](BestellungenApi.md#orderPartnerBox) | **POST** /orders/partnerbox | Bestellung eines Partnerbox
[**orderPartnerProgram**](BestellungenApi.md#orderPartnerProgram) | **POST** /orders/partnerprogram | Anmeldung am Partnerprogramm


# **orderPartnerBox**
> orderPartnerBox($partner_hosting_order_request)

Bestellung eines Partnerbox

Über diese Operation kann ein neues Partnerbox bestellt werden.  **Achtung**: Ist der Nutzer der API als Kunde authentifiziert (d.h. ein API-Token über den `/authenticate`-Endpunkt bezogen hat), ist die erneute Angabe von Kundenstammdaten im Request (hier über das `customer`-Attribut) nicht notwendig. Dennoch übergebene Kundenstammdaten werden zugunsten der bereits im System hinterlegten ignoriert.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\BestellungenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$partner_hosting_order_request = new \Mittwald\Api\Model\PartnerHostingOrderRequest(); // \Mittwald\Api\Model\PartnerHostingOrderRequest | Die Bestellanfrage; diese enthält notwendige Kundenstammdaten

try {
    $apiInstance->orderPartnerBox($partner_hosting_order_request);
} catch (Exception $e) {
    echo 'Exception when calling BestellungenApi->orderPartnerBox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_hosting_order_request** | [**\Mittwald\Api\Model\PartnerHostingOrderRequest**](../Model/PartnerHostingOrderRequest.md)| Die Bestellanfrage; diese enthält notwendige Kundenstammdaten |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPartnerProgram**
> orderPartnerProgram($partner_hosting_order_request)

Anmeldung am Partnerprogramm

Über diese Operation kann ein Kunde am Partnerprogramm angemeldet werden.  **Achtung**: Ist der Nutzer der API als Kunde authentifiziert (d.h. ein API-Token über den `/authenticate`-Endpunkt bezogen hat), ist die erneute Angabe von Kundenstammdaten im Request (hier über das `customer`-Attribut) nicht notwendig. Dennoch übergebene Kundenstammdaten werden zugunsten der bereits im System hinterlegten ignoriert.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\BestellungenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$partner_hosting_order_request = new \Mittwald\Api\Model\PartnerHostingOrderRequest(); // \Mittwald\Api\Model\PartnerHostingOrderRequest | Die Bestellanfrage; diese enthält notwendige Kundenstammdaten

try {
    $apiInstance->orderPartnerProgram($partner_hosting_order_request);
} catch (Exception $e) {
    echo 'Exception when calling BestellungenApi->orderPartnerProgram: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_hosting_order_request** | [**\Mittwald\Api\Model\PartnerHostingOrderRequest**](../Model/PartnerHostingOrderRequest.md)| Die Bestellanfrage; diese enthält notwendige Kundenstammdaten |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

