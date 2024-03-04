# Mittwald\Api\DatabaseApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listDatabaseTypes**](DatabaseApi.md#listdatabasetypes) | **GET** /databasetypes | Datenbanktypen

# **listDatabaseTypes**
> \Mittwald\Api\Model\DatabaseType[] listDatabaseTypes()

Datenbanktypen

Datenbanktypen auslesen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\DatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listDatabaseTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseApi->listDatabaseTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Mittwald\Api\Model\DatabaseType[]**](../Model/DatabaseType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

