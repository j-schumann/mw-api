# Mittwald\Api\ResellerApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReseller**](ResellerApi.md#getreseller) | **GET** /resellers/{resellerIdentifier} | Reseller auslesen

# **getReseller**
> \Mittwald\Api\Model\Reseller getReseller($reseller_identifier)

Reseller auslesen

Diese Operation liest genaue Daten eines einzelnen Resellers aus

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\ResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reseller_identifier = "reseller_identifier_example"; // string | Name oder ID eines Resellers

try {
    $result = $apiInstance->getReseller($reseller_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellerApi->getReseller: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reseller_identifier** | **string**| Name oder ID eines Resellers |

### Return type

[**\Mittwald\Api\Model\Reseller**](../Model/Reseller.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

