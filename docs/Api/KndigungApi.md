# Mittwald\Api\KndigungApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelContract**](KndigungApi.md#cancelcontract) | **POST** /cancellations | Kündigung einleiten
[**resendCancellationConfirmation**](KndigungApi.md#resendcancellationconfirmation) | **POST** /cancellations/{cancellationIdentifier}/actions/confirmationmail | Kündigungsbestätigung erneut senden

# **cancelContract**
> cancelContract($body)

Kündigung einleiten

Leitet die Kündigung für einen bestimmten Tarif ein

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\KndigungApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Mittwald\Api\Model\CancellationRequest(); // \Mittwald\Api\Model\CancellationRequest | Die Kündigungsdaten

try {
    $apiInstance->cancelContract($body);
} catch (Exception $e) {
    echo 'Exception when calling KndigungApi->cancelContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Mittwald\Api\Model\CancellationRequest**](../Model/CancellationRequest.md)| Die Kündigungsdaten |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resendCancellationConfirmation**
> resendCancellationConfirmation($cancellation_identifier)

Kündigungsbestätigung erneut senden

Löst eine erneute Versendung der Kündigungsbestätigung per E-Mail aus

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\KndigungApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cancellation_identifier = 56; // int | Die ID der bereits eingeleiteten Kündigung

try {
    $apiInstance->resendCancellationConfirmation($cancellation_identifier);
} catch (Exception $e) {
    echo 'Exception when calling KndigungApi->resendCancellationConfirmation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cancellation_identifier** | **int**| Die ID der bereits eingeleiteten Kündigung |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

