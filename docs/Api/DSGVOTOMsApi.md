# Mittwald\Api\DSGVOTOMsApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createGDPRTom**](DSGVOTOMsApi.md#createGDPRTom) | **POST** /gdpr/toms | TOM - TOM anlegen
[**getGDPRTom**](DSGVOTOMsApi.md#getGDPRTom) | **GET** /gdpr/toms/{tomIdentifier} | TOM - Liefert einen bestimmten TOM
[**getGDPRToms**](DSGVOTOMsApi.md#getGDPRToms) | **GET** /gdpr/toms | TOM - Liefert alle hinterlegten TOMs


# **createGDPRTom**
> \Mittwald\Api\Model\GDPRTom createGDPRTom($create_gdpr_tom_request)

TOM - TOM anlegen

Legt einen TOM mit den angegebenen Daten an

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\DSGVOTOMsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_gdpr_tom_request = new \Mittwald\Api\Model\GDPRTom(); // \Mittwald\Api\Model\GDPRTom | Die Daten des Toms

try {
    $result = $apiInstance->createGDPRTom($create_gdpr_tom_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOTOMsApi->createGDPRTom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_gdpr_tom_request** | [**\Mittwald\Api\Model\GDPRTom**](../Model/GDPRTom.md)| Die Daten des Toms |

### Return type

[**\Mittwald\Api\Model\GDPRTom**](../Model/GDPRTom.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGDPRTom**
> \Mittwald\Api\Model\GDPRTom getGDPRTom($tom_identifier)

TOM - Liefert einen bestimmten TOM

Liefert die Daten eines bestimmten TOMs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\DSGVOTOMsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tom_identifier = "tom_identifier_example"; // string | Die ID des TOMs

try {
    $result = $apiInstance->getGDPRTom($tom_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOTOMsApi->getGDPRTom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tom_identifier** | **string**| Die ID des TOMs |

### Return type

[**\Mittwald\Api\Model\GDPRTom**](../Model/GDPRTom.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGDPRToms**
> \Mittwald\Api\Model\GDPRTom[] getGDPRToms()

TOM - Liefert alle hinterlegten TOMs

Liefert die Daten aller hinterlegten TOMs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\DSGVOTOMsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getGDPRToms();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSGVOTOMsApi->getGDPRToms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Mittwald\Api\Model\GDPRTom[]**](../Model/GDPRTom.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

