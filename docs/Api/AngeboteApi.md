# Mittwald\Api\AngeboteApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createQuoteFromCart**](AngeboteApi.md#createquotefromcart) | **POST** /carts/{cartIdentifier}/actions/offer | Angebot versenden
[**recommendCart**](AngeboteApi.md#recommendcart) | **POST** /carts/{cartIdentifier}/actions/recommend | Warenkorbvorlage für Account-Ausgliederung erstellen
[**requestQuote**](AngeboteApi.md#requestquote) | **POST** /offers | Neues Angebot anfordern
[**shareCart**](AngeboteApi.md#sharecart) | **POST** /carts/{cartIdentifier}/actions/share | Warenkorbvorlage erstellen
[**verifyRecommendCart**](AngeboteApi.md#verifyrecommendcart) | **POST** /carts/{cartIdentifier}/actions/recommendation/verify | Überprüfe PIN-Code von Empfehlung

# **createQuoteFromCart**
> createQuoteFromCart($body, $cart_identifier)

Angebot versenden

Erzeugt ein Angebot aus einem Warenkorb und verschickt dieses als PDF per Mail an den angegebenen Empfänger.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\AngeboteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Mittwald\Api\Model\Contact(); // \Mittwald\Api\Model\Contact | Empfänger
$cart_identifier = "cart_identifier_example"; // string | Warenkorb ID

try {
    $apiInstance->createQuoteFromCart($body, $cart_identifier);
} catch (Exception $e) {
    echo 'Exception when calling AngeboteApi->createQuoteFromCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Mittwald\Api\Model\Contact**](../Model/Contact.md)| Empfänger |
 **cart_identifier** | **string**| Warenkorb ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recommendCart**
> \Mittwald\Api\Model\Recommendation recommendCart($cart_identifier)

Warenkorbvorlage für Account-Ausgliederung erstellen

Erstellt eine Vorlage aus einem Warenkorb mit Account-Ausgliederung. Vorlagen können nicht bearbeitet werden. Die Vorlage enthält keine Personenbezogenendaten.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\AngeboteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_identifier = "cart_identifier_example"; // string | Warenkorb ID

try {
    $result = $apiInstance->recommendCart($cart_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AngeboteApi->recommendCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |

### Return type

[**\Mittwald\Api\Model\Recommendation**](../Model/Recommendation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestQuote**
> requestQuote($body)

Neues Angebot anfordern

Über diese Operation kann ein neues Angebot angefordert werden

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\AngeboteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Mittwald\Api\Model\OfferRequest(); // \Mittwald\Api\Model\OfferRequest | Die Angebotsanfrage; diese enthält Daten zu den angefragten Artikeln sowie notwendige Kundenstammdaten

try {
    $apiInstance->requestQuote($body);
} catch (Exception $e) {
    echo 'Exception when calling AngeboteApi->requestQuote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Mittwald\Api\Model\OfferRequest**](../Model/OfferRequest.md)| Die Angebotsanfrage; diese enthält Daten zu den angefragten Artikeln sowie notwendige Kundenstammdaten |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
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

$apiInstance = new Mittwald\Api\Functions\AngeboteApi(
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

# **verifyRecommendCart**
> \Mittwald\Api\Model\Message verifyRecommendCart($body, $cart_identifier)

Überprüfe PIN-Code von Empfehlung

Überprüft den Pin-Code bei einer Empfehlung.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\AngeboteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Mittwald\Api\Model\FormularBody2(); // \Mittwald\Api\Model\FormularBody2 | 
$cart_identifier = "cart_identifier_example"; // string | Warenkorb ID

try {
    $result = $apiInstance->verifyRecommendCart($body, $cart_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AngeboteApi->verifyRecommendCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Mittwald\Api\Model\FormularBody2**](../Model/FormularBody2.md)|  |
 **cart_identifier** | **string**| Warenkorb ID |

### Return type

[**\Mittwald\Api\Model\Message**](../Model/Message.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

