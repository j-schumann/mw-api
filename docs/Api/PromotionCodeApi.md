# Mittwald\Api\PromotionCodeApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPromotionCode**](PromotionCodeApi.md#getpromotioncode) | **GET** /promotioncodes/{promotionCode} | Promotioncode auslesen
[**verifyPromotionCode**](PromotionCodeApi.md#verifypromotioncode) | **POST** /promotioncodes/{promotionCode}/actions/validate | Promotioncode validieren

# **getPromotionCode**
> getPromotionCode($promotion_code)

Promotioncode auslesen

Liefert PromotionCode-Details aus

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\PromotionCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$promotion_code = "promotion_code_example"; // string | PromotionCode

try {
    $apiInstance->getPromotionCode($promotion_code);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCodeApi->getPromotionCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_code** | **string**| PromotionCode |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyPromotionCode**
> verifyPromotionCode($body, $promotion_code)

Promotioncode validieren

Validiert einen Promotion-Code für eine Bestellung

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\PromotionCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Mittwald\Api\Model\PromotioncodeValidierungsanfrage(); // \Mittwald\Api\Model\PromotioncodeValidierungsanfrage | Die zu bestellenden Artikel und ob der Hauptartikel einen monatliche Abrechnungsperiode hat. Nur die Artikelnummer wird zwingend benötigt.
$promotion_code = "promotion_code_example"; // string | PromotionCode

try {
    $apiInstance->verifyPromotionCode($body, $promotion_code);
} catch (Exception $e) {
    echo 'Exception when calling PromotionCodeApi->verifyPromotionCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Mittwald\Api\Model\PromotioncodeValidierungsanfrage**](../Model/PromotioncodeValidierungsanfrage.md)| Die zu bestellenden Artikel und ob der Hauptartikel einen monatliche Abrechnungsperiode hat. Nur die Artikelnummer wird zwingend benötigt. |
 **promotion_code** | **string**| PromotionCode |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

