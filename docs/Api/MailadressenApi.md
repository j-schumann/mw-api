# Mittwald\Api\MailadressenApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listEmailAddressesByAccount**](MailadressenApi.md#listemailaddressesbyaccount) | **GET** /accounts/{accountIdentifier}/mailaddresses | Mailadressen eines Accounts auslesen

# **listEmailAddressesByAccount**
> \Mittwald\Api\Model\MailAddress[] listEmailAddressesByAccount($account_identifier, $limit, $offset)

Mailadressen eines Accounts auslesen

Diese Operation liest die Mailadressen eines einzelnen Accounts aus

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\MailadressenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_identifier = "account_identifier_example"; // string | Name oder ID eines Accounts
$limit = 20; // int | Anzahl der zurückzuliefernden Domains.
$offset = 0; // int | Offset für die Limitierung der Suchergebnisse

try {
    $result = $apiInstance->listEmailAddressesByAccount($account_identifier, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailadressenApi->listEmailAddressesByAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_identifier** | **string**| Name oder ID eines Accounts |
 **limit** | **int**| Anzahl der zurückzuliefernden Domains. | [optional] [default to 20]
 **offset** | **int**| Offset für die Limitierung der Suchergebnisse | [optional] [default to 0]

### Return type

[**\Mittwald\Api\Model\MailAddress[]**](../Model/MailAddress.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

