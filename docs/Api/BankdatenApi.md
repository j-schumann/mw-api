# Mittwald\Api\BankdatenApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**convertBankDataToSEPA**](BankdatenApi.md#convertBankDataToSEPA) | **POST** /bankdata/actions/convert | Konvertiert Bankdaten in das IBAN / BIC Format


# **convertBankDataToSEPA**
> \Mittwald\Api\Model\Bankdaten convertBankDataToSEPA($bankdaten)

Konvertiert Bankdaten in das IBAN / BIC Format

Liefert zu einer gegebenen Kontonummer und BLZ die entsprechende IBAN und BIC

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\BankdatenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankdaten = new \Mittwald\Api\Model\BankData(); // \Mittwald\Api\Model\BankData | Die zu konvertierenden Bankdaten

try {
    $result = $apiInstance->convertBankDataToSEPA($bankdaten);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankdatenApi->convertBankDataToSEPA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankdaten** | [**\Mittwald\Api\Model\BankData**](../Model/BankData.md)| Die zu konvertierenden Bankdaten |

### Return type

[**\Mittwald\Api\Model\Bankdaten**](../Model/Bankdaten.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

