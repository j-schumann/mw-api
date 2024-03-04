# Mittwald\Api\PartnerApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderPartnerBox**](PartnerApi.md#orderpartnerbox) | **POST** /orders/partnerbox | Bestellung eines Partnerbox
[**orderPartnerProgram**](PartnerApi.md#orderpartnerprogram) | **POST** /orders/partnerprogram | Anmeldung am Partnerprogramm

# **orderPartnerBox**
> orderPartnerBox($body)

Bestellung eines Partnerbox

Über diese Operation kann ein neues Partnerbox bestellt werden.  **Achtung**: Ist der Nutzer der API als Kunde authentifiziert (d.h. ein API-Token über den `/authenticate`-Endpunkt bezogen hat), ist die erneute Angabe von Kundenstammdaten im Request (hier über das `customer`-Attribut) nicht notwendig. Dennoch übergebene Kundenstammdaten werden zugunsten der bereits im System hinterlegten ignoriert.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\PartnerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Mittwald\Api\Model\PartnerHostingOrderRequest(); // \Mittwald\Api\Model\PartnerHostingOrderRequest | Die Bestellanfrage; diese enthält notwendige Kundenstammdaten

try {
    $apiInstance->orderPartnerBox($body);
} catch (Exception $e) {
    echo 'Exception when calling PartnerApi->orderPartnerBox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Mittwald\Api\Model\PartnerHostingOrderRequest**](../Model/PartnerHostingOrderRequest.md)| Die Bestellanfrage; diese enthält notwendige Kundenstammdaten |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderPartnerProgram**
> orderPartnerProgram($body)

Anmeldung am Partnerprogramm

Über diese Operation kann ein Kunde am Partnerprogramm angemeldet werden.  **Achtung**: Ist der Nutzer der API als Kunde authentifiziert (d.h. ein API-Token über den `/authenticate`-Endpunkt bezogen hat), ist die erneute Angabe von Kundenstammdaten im Request (hier über das `customer`-Attribut) nicht notwendig. Dennoch übergebene Kundenstammdaten werden zugunsten der bereits im System hinterlegten ignoriert.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\PartnerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Mittwald\Api\Model\PartnerHostingOrderRequest(); // \Mittwald\Api\Model\PartnerHostingOrderRequest | Die Bestellanfrage; diese enthält notwendige Kundenstammdaten

try {
    $apiInstance->orderPartnerProgram($body);
} catch (Exception $e) {
    echo 'Exception when calling PartnerApi->orderPartnerProgram: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Mittwald\Api\Model\PartnerHostingOrderRequest**](../Model/PartnerHostingOrderRequest.md)| Die Bestellanfrage; diese enthält notwendige Kundenstammdaten |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

