# Mittwald\Api\VertrgeApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelContract**](VertrgeApi.md#cancelcontract) | **POST** /cancellations | Kündigung einleiten
[**listCancelledContractsByCustomer**](VertrgeApi.md#listcancelledcontractsbycustomer) | **GET** /customers/{customerNumber}/cancelledcontracts | Verträge eines Kunden, die sich aktuell im Kündigungsprozess befinden
[**listContractsByCustomer**](VertrgeApi.md#listcontractsbycustomer) | **GET** /customers/{customerNumber}/contracts | Verträge auslesen
[**resendCancellationConfirmation**](VertrgeApi.md#resendcancellationconfirmation) | **POST** /cancellations/{cancellationIdentifier}/actions/confirmationmail | Kündigungsbestätigung erneut senden

# **cancelContract**
> cancelContract($body)

Kündigung einleiten

Leitet die Kündigung für einen bestimmten Tarif ein

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\VertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Mittwald\Api\Model\CancellationRequest(); // \Mittwald\Api\Model\CancellationRequest | Die Kündigungsdaten

try {
    $apiInstance->cancelContract($body);
} catch (Exception $e) {
    echo 'Exception when calling VertrgeApi->cancelContract: ', $e->getMessage(), PHP_EOL;
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

# **listCancelledContractsByCustomer**
> \Mittwald\Api\Model\Contract[] listCancelledContractsByCustomer($customer_number)

Verträge eines Kunden, die sich aktuell im Kündigungsprozess befinden

Liefert alle Verträge eines Kunden, die aktuell gekündigt werden und sich noch nicht länger als 5 Tage in diesem Prozess befinden

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\VertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = 56; // int | Die Kundennummer

try {
    $result = $apiInstance->listCancelledContractsByCustomer($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VertrgeApi->listCancelledContractsByCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **int**| Die Kundennummer |

### Return type

[**\Mittwald\Api\Model\Contract[]**](../Model/Contract.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listContractsByCustomer**
> \Mittwald\Api\Model\Contract[] listContractsByCustomer($customer_number)

Verträge auslesen

Liefert alle Verträge eines Kunden

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\VertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = 56; // int | Die Kundennummer

try {
    $result = $apiInstance->listContractsByCustomer($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VertrgeApi->listContractsByCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **int**| Die Kundennummer |

### Return type

[**\Mittwald\Api\Model\Contract[]**](../Model/Contract.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
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

$apiInstance = new Mittwald\Api\Functions\VertrgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cancellation_identifier = 56; // int | Die ID der bereits eingeleiteten Kündigung

try {
    $apiInstance->resendCancellationConfirmation($cancellation_identifier);
} catch (Exception $e) {
    echo 'Exception when calling VertrgeApi->resendCancellationConfirmation: ', $e->getMessage(), PHP_EOL;
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

