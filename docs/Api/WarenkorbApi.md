# Mittwald\Api\WarenkorbApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDomainToCart**](WarenkorbApi.md#adddomaintocart) | **POST** /carts/{cartIdentifier}/domains | Warenkorb-Domainposition hinzufügen
[**addItemToCart**](WarenkorbApi.md#additemtocart) | **POST** /carts/{cartIdentifier}/items | Warenkorb-Position hinzufügen
[**checkoutOrder**](WarenkorbApi.md#checkoutorder) | **POST** /carts/{cartIdentifier}/actions/checkout | Bestellung abschließen
[**confirmSMSVerification**](WarenkorbApi.md#confirmsmsverification) | **POST** /carts/{cartIdentifier}/actions/verify | SMS-Verifizierung bestätigen
[**createCart**](WarenkorbApi.md#createcart) | **POST** /carts | Warenkorb erstellen
[**createCartFromTemplate**](WarenkorbApi.md#createcartfromtemplate) | **POST** /carts/{cartIdentifier} | Warenkorb aus Vorlage erstellen
[**createQuoteFromCart**](WarenkorbApi.md#createquotefromcart) | **POST** /carts/{cartIdentifier}/actions/offer | Angebot versenden
[**deleteCart**](WarenkorbApi.md#deletecart) | **DELETE** /carts/{cartIdentifier} | Warenkorb löschen
[**deleteItemFromCart**](WarenkorbApi.md#deleteitemfromcart) | **DELETE** /carts/{cartIdentifier}/items/{itemIdentifier} | Warenkorb-Position löschen
[**getCart**](WarenkorbApi.md#getcart) | **GET** /carts/{cartIdentifier} | Warenkorb auslesen
[**recommendCart**](WarenkorbApi.md#recommendcart) | **POST** /carts/{cartIdentifier}/actions/recommend | Warenkorbvorlage für Account-Ausgliederung erstellen
[**requestSMSVerification**](WarenkorbApi.md#requestsmsverification) | **POST** /carts/{cartIdentifier}/actions/requestverification | SMS-Verifizierung starten
[**shareCart**](WarenkorbApi.md#sharecart) | **POST** /carts/{cartIdentifier}/actions/share | Warenkorbvorlage erstellen
[**updateCart**](WarenkorbApi.md#updatecart) | **PUT** /carts/{cartIdentifier} | Warenkorb bearbeiten
[**verifyRecommendCart**](WarenkorbApi.md#verifyrecommendcart) | **POST** /carts/{cartIdentifier}/actions/recommendation/verify | Überprüfe PIN-Code von Empfehlung

# **addDomainToCart**
> \Mittwald\Api\Model\Cart addDomainToCart($body, $cart_identifier)

Warenkorb-Domainposition hinzufügen

Fügt eine Domain dem Warenkorb hinzu

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Mittwald\Api\Model\DomainItemInput(); // \Mittwald\Api\Model\DomainItemInput | Die hinzuzufügende Domain
$cart_identifier = "cart_identifier_example"; // string | Warenkorb ID

try {
    $result = $apiInstance->addDomainToCart($body, $cart_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->addDomainToCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Mittwald\Api\Model\DomainItemInput**](../Model/DomainItemInput.md)| Die hinzuzufügende Domain |
 **cart_identifier** | **string**| Warenkorb ID |

### Return type

[**\Mittwald\Api\Model\Cart**](../Model/Cart.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addItemToCart**
> \Mittwald\Api\Model\Cart addItemToCart($body, $cart_identifier)

Warenkorb-Position hinzufügen

Fügt ein neues Item in den Warenkorb

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Mittwald\Api\Model\CartItemInput(); // \Mittwald\Api\Model\CartItemInput | Das hinzuzufügende Item
$cart_identifier = "cart_identifier_example"; // string | Warenkorb ID

try {
    $result = $apiInstance->addItemToCart($body, $cart_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->addItemToCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Mittwald\Api\Model\CartItemInput**](../Model/CartItemInput.md)| Das hinzuzufügende Item |
 **cart_identifier** | **string**| Warenkorb ID |

### Return type

[**\Mittwald\Api\Model\Cart**](../Model/Cart.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkoutOrder**
> checkoutOrder($cart_identifier, $body)

Bestellung abschließen

Erzeugt eine Bestellung aus einem Warenkorb

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_identifier = "cart_identifier_example"; // string | Warenkorb ID
$body = new \Mittwald\Api\Model\FormularBody1(); // \Mittwald\Api\Model\FormularBody1 | 

try {
    $apiInstance->checkoutOrder($cart_identifier, $body);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->checkoutOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |
 **body** | [**\Mittwald\Api\Model\FormularBody1**](../Model/FormularBody1.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **confirmSMSVerification**
> confirmSMSVerification($body, $cart_identifier)

SMS-Verifizierung bestätigen

Bestätigt die SMS-Verifizierung.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Mittwald\Api\Model\Verifizierungscode(); // \Mittwald\Api\Model\Verifizierungscode | Der Verifizierungcode
$cart_identifier = "cart_identifier_example"; // string | Warenkorb ID

try {
    $apiInstance->confirmSMSVerification($body, $cart_identifier);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->confirmSMSVerification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Mittwald\Api\Model\Verifizierungscode**](../Model/Verifizierungscode.md)| Der Verifizierungcode |
 **cart_identifier** | **string**| Warenkorb ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCart**
> \Mittwald\Api\Model\Cart createCart($body)

Warenkorb erstellen

Erstellt einen neuen Warenkorb

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Mittwald\Api\Model\FormularBody(); // \Mittwald\Api\Model\FormularBody | 

try {
    $result = $apiInstance->createCart($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->createCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Mittwald\Api\Model\FormularBody**](../Model/FormularBody.md)|  | [optional]

### Return type

[**\Mittwald\Api\Model\Cart**](../Model/Cart.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCartFromTemplate**
> \Mittwald\Api\Model\Cart createCartFromTemplate($cart_identifier)

Warenkorb aus Vorlage erstellen

Erstellt einen neuen Warenkorb aus einer Vorlage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_identifier = "cart_identifier_example"; // string | Warenkorb ID

try {
    $result = $apiInstance->createCartFromTemplate($cart_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->createCartFromTemplate: ', $e->getMessage(), PHP_EOL;
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

# **createQuoteFromCart**
> createQuoteFromCart($body, $cart_identifier)

Angebot versenden

Erzeugt ein Angebot aus einem Warenkorb und verschickt dieses als PDF per Mail an den angegebenen Empfänger.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Mittwald\Api\Model\Contact(); // \Mittwald\Api\Model\Contact | Empfänger
$cart_identifier = "cart_identifier_example"; // string | Warenkorb ID

try {
    $apiInstance->createQuoteFromCart($body, $cart_identifier);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->createQuoteFromCart: ', $e->getMessage(), PHP_EOL;
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

# **deleteCart**
> deleteCart($cart_identifier)

Warenkorb löschen

Löscht einen bestehenden Warenkorb

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_identifier = "cart_identifier_example"; // string | Warenkorb ID

try {
    $apiInstance->deleteCart($cart_identifier);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->deleteCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemFromCart**
> \Mittwald\Api\Model\Cart deleteItemFromCart($cart_identifier, $item_identifier)

Warenkorb-Position löschen

Löscht ein Item aus dem Warenkorb

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_identifier = "cart_identifier_example"; // string | Warenkorb ID
$item_identifier = "item_identifier_example"; // string | Item ID

try {
    $result = $apiInstance->deleteItemFromCart($cart_identifier, $item_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->deleteItemFromCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_identifier** | **string**| Warenkorb ID |
 **item_identifier** | **string**| Item ID |

### Return type

[**\Mittwald\Api\Model\Cart**](../Model/Cart.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCart**
> \Mittwald\Api\Model\Cart getCart($cart_identifier)

Warenkorb auslesen

Liefert einen bestehenden Warenkorb aus

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_identifier = "cart_identifier_example"; // string | Warenkorb ID

try {
    $result = $apiInstance->getCart($cart_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->getCart: ', $e->getMessage(), PHP_EOL;
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

# **recommendCart**
> \Mittwald\Api\Model\Recommendation recommendCart($cart_identifier)

Warenkorbvorlage für Account-Ausgliederung erstellen

Erstellt eine Vorlage aus einem Warenkorb mit Account-Ausgliederung. Vorlagen können nicht bearbeitet werden. Die Vorlage enthält keine Personenbezogenendaten.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_identifier = "cart_identifier_example"; // string | Warenkorb ID

try {
    $result = $apiInstance->recommendCart($cart_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->recommendCart: ', $e->getMessage(), PHP_EOL;
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

# **requestSMSVerification**
> requestSMSVerification($body, $cart_identifier)

SMS-Verifizierung starten

Fragt eine SMS-Verifizierung an. Der Empfänger erhält eine SMS mit einem Code.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Mittwald\Api\Model\Verifizierungsanfrage(); // \Mittwald\Api\Model\Verifizierungsanfrage | 
$cart_identifier = "cart_identifier_example"; // string | Warenkorb ID

try {
    $apiInstance->requestSMSVerification($body, $cart_identifier);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->requestSMSVerification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Mittwald\Api\Model\Verifizierungsanfrage**](../Model/Verifizierungsanfrage.md)|  |
 **cart_identifier** | **string**| Warenkorb ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shareCart**
> \Mittwald\Api\Model\Cart shareCart($cart_identifier)

Warenkorbvorlage erstellen

Erstellt eine Vorlage aus einem Warenkorb. Vorlagen können nicht bearbeitet werden. Die Vorlage enthält keine Personenbezogenendaten.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_identifier = "cart_identifier_example"; // string | Warenkorb ID

try {
    $result = $apiInstance->shareCart($cart_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->shareCart: ', $e->getMessage(), PHP_EOL;
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

# **updateCart**
> \Mittwald\Api\Model\Cart updateCart($body, $cart_identifier)

Warenkorb bearbeiten

Aktualisiert einen bestehenden Warenkorb

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\WarenkorbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Mittwald\Api\Model\Cart(); // \Mittwald\Api\Model\Cart | Der neue Warenkorb
$cart_identifier = "cart_identifier_example"; // string | Warenkorb ID

try {
    $result = $apiInstance->updateCart($body, $cart_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarenkorbApi->updateCart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Mittwald\Api\Model\Cart**](../Model/Cart.md)| Der neue Warenkorb |
 **cart_identifier** | **string**| Warenkorb ID |

### Return type

[**\Mittwald\Api\Model\Cart**](../Model/Cart.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
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

$apiInstance = new Mittwald\Api\Functions\WarenkorbApi(
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
    echo 'Exception when calling WarenkorbApi->verifyRecommendCart: ', $e->getMessage(), PHP_EOL;
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

