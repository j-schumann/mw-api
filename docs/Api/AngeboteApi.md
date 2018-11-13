# Mittwald\Api\AngeboteApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createQuoteFromCart**](AngeboteApi.md#createQuoteFromCart) | **POST** /carts/{cartIdentifier}/actions/offer | Angebot versenden
[**requestQuote**](AngeboteApi.md#requestQuote) | **POST** /offers | Neues Angebot anfordern
[**shareCart**](AngeboteApi.md#shareCart) | **POST** /carts/{cartIdentifier}/actions/share | Warenkorbvorlage erstellen


# **createQuoteFromCart**
> createQuoteFromCart($cart_identifier, $recipient)

Angebot versenden

Erzeugt ein Angebot aus einem Warenkorb und verschickt dieses als PDF per Mail an den angegebenen Empfänger.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\AngeboteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_identifier = "cart_identifier_example"; // string | Warenkorb ID
$recipient = new \Mittwald\Api\Model\Contact(); // \Mittwald\Api\Model\Contact | Empfänger

try {
    $apiInstance->createQuoteFromCart($cart_identifier, $recipient);
} catch (Exception $e) {
    echo 'Exception when calling AngeboteApi->createQuoteFromCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |
 **recipient** | [**\Mittwald\Api\Model\Contact**](../Model/Contact.md)| Empfänger |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestQuote**
> requestQuote($offer_request)

Neues Angebot anfordern

Über diese Operation kann ein neues Angebot angefordert werden

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\AngeboteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offer_request = new \Mittwald\Api\Model\OfferRequest(); // \Mittwald\Api\Model\OfferRequest | Die Angebotsanfrage; diese enthält Daten zu den angefragten Artikeln sowie notwendige Kundenstammdaten

try {
    $apiInstance->requestQuote($offer_request);
} catch (Exception $e) {
    echo 'Exception when calling AngeboteApi->requestQuote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_request** | [**\Mittwald\Api\Model\OfferRequest**](../Model/OfferRequest.md)| Die Angebotsanfrage; diese enthält Daten zu den angefragten Artikeln sowie notwendige Kundenstammdaten |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shareCart**
> \Mittwald\Api\Model\Cart shareCart($cart_identifier)

Warenkorbvorlage erstellen

Erstellt eine Vorlage aus einem Warenkorb. Vorlagen können nicht bearbeitet werden. Die Vorlage enthält keine Personenbezogenendaten.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\AngeboteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_identifier = "cart_identifier_example"; // string | Warenkorb ID

try {
    $result = $apiInstance->shareCart($cart_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AngeboteApi->shareCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |

### Return type

[**\Mittwald\Api\Model\Cart**](../Model/Cart.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

