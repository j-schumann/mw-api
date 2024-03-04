# Mittwald\Api\ArtikelApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getArticle**](ArtikelApi.md#getarticle) | **GET** /articles/{articleNumber} | Artikeldetails
[**getArticleUpgrades**](ArtikelApi.md#getarticleupgrades) | **GET** /articles/{articleNumber}/upgrades | Artikel Upgrades
[**getCrossSellingOptions**](ArtikelApi.md#getcrosssellingoptions) | **GET** /articles/{articleNumber}/cross-selling | Cross-Selling Optionen
[**listArticles**](ArtikelApi.md#listarticles) | **GET** /articles | Suche nach Artikeln

# **getArticle**
> \Mittwald\Api\Model\Article getArticle($article_number, $fields)

Artikeldetails

Artikeldetails auslesen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\ArtikelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$article_number = "article_number_example"; // string | Artikelnummer
$fields = "fields_example"; // string | Auszuliefernde Felder, als kommaseparierte Liste. Beispiel: `articleNumber,description`

try {
    $result = $apiInstance->getArticle($article_number, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtikelApi->getArticle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **article_number** | **string**| Artikelnummer |
 **fields** | **string**| Auszuliefernde Felder, als kommaseparierte Liste. Beispiel: &#x60;articleNumber,description&#x60; | [optional]

### Return type

[**\Mittwald\Api\Model\Article**](../Model/Article.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArticleUpgrades**
> \Mittwald\Api\Model\ArticleUpgradeOption[] getArticleUpgrades($article_number)

Artikel Upgrades

Liefert alle möglichen Upgrades für diesen Artikel aus

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\ArtikelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$article_number = "article_number_example"; // string | Artikelnummer

try {
    $result = $apiInstance->getArticleUpgrades($article_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtikelApi->getArticleUpgrades: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **article_number** | **string**| Artikelnummer |

### Return type

[**\Mittwald\Api\Model\ArticleUpgradeOption[]**](../Model/ArticleUpgradeOption.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCrossSellingOptions**
> \Mittwald\Api\Model\ArticleOption[] getCrossSellingOptions($article_number)

Cross-Selling Optionen

Liefert alle möglichen Cross-Selling Artikel aus

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\ArtikelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$article_number = "article_number_example"; // string | Artikelnummer

try {
    $result = $apiInstance->getCrossSellingOptions($article_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtikelApi->getCrossSellingOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **article_number** | **string**| Artikelnummer |

### Return type

[**\Mittwald\Api\Model\ArticleOption[]**](../Model/ArticleOption.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listArticles**
> \Mittwald\Api\Model\Article[] listArticles($fields, $limit, $offset, $articles)

Suche nach Artikeln

Diese Operation liefert eine Liste von Artikeln zurück, die den angegebenen Suchparametern entsprechen.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\ArtikelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | Auszuliefernde Felder, als kommaseparierte Liste. Beispiel: `articleNumber,description`
$limit = 20; // int | Anzahl der zurückzuliefernden Artikel.
$offset = 0; // int | Offset für die Limitierung der Suchergebnisse
$articles = "articles_example"; // string | Kommaseparierte-Liste von Artiklenummern

try {
    $result = $apiInstance->listArticles($fields, $limit, $offset, $articles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtikelApi->listArticles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Auszuliefernde Felder, als kommaseparierte Liste. Beispiel: &#x60;articleNumber,description&#x60; | [optional]
 **limit** | **int**| Anzahl der zurückzuliefernden Artikel. | [optional] [default to 20]
 **offset** | **int**| Offset für die Limitierung der Suchergebnisse | [optional] [default to 0]
 **articles** | **string**| Kommaseparierte-Liste von Artiklenummern | [optional]

### Return type

[**\Mittwald\Api\Model\Article[]**](../Model/Article.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

