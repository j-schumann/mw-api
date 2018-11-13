# Mittwald\Api\TicketsApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**answerSupportTicket**](TicketsApi.md#answerSupportTicket) | **POST** /tickets/{ticketIdentifier}/answers | Ticketantwort erstellen
[**createSupportTicket**](TicketsApi.md#createSupportTicket) | **POST** /tickets | Neues Support-Ticket
[**listSupportTicketAnswers**](TicketsApi.md#listSupportTicketAnswers) | **GET** /tickets/{ticketIdentifier}/answers | Ticketantworten auslesen
[**listSupportTickets**](TicketsApi.md#listSupportTickets) | **GET** /customers/{customerNumber}/tickets | Support-Tickets auslesen


# **answerSupportTicket**
> \Mittwald\Api\Model\TicketAnswer answerSupportTicket($ticket_identifier, $answer)

Ticketantwort erstellen

Erstellt eine neue Antwort auf ein Support-Ticket

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ticket_identifier = "ticket_identifier_example"; // string | Die Ticket-ID
$answer = new \Mittwald\Api\Model\TicketAnswerInput(); // \Mittwald\Api\Model\TicketAnswerInput | Die neue Antwort

try {
    $result = $apiInstance->answerSupportTicket($ticket_identifier, $answer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->answerSupportTicket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_identifier** | **string**| Die Ticket-ID |
 **answer** | [**\Mittwald\Api\Model\TicketAnswerInput**](../Model/TicketAnswerInput.md)| Die neue Antwort |

### Return type

[**\Mittwald\Api\Model\TicketAnswer**](../Model/TicketAnswer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSupportTicket**
> \Mittwald\Api\Model\Ticket createSupportTicket($ticket)

Neues Support-Ticket

Erstellt ein neues Support-Ticket

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ticket = new \Mittwald\Api\Model\TicketInput(); // \Mittwald\Api\Model\TicketInput | Das neue Support-Ticket

try {
    $result = $apiInstance->createSupportTicket($ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->createSupportTicket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket** | [**\Mittwald\Api\Model\TicketInput**](../Model/TicketInput.md)| Das neue Support-Ticket |

### Return type

[**\Mittwald\Api\Model\Ticket**](../Model/Ticket.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSupportTicketAnswers**
> \Mittwald\Api\Model\TicketAnswer[] listSupportTicketAnswers($ticket_identifier)

Ticketantworten auslesen

Liefert alle Antworten auf ein bestimmtes Support-Ticket zurück

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ticket_identifier = "ticket_identifier_example"; // string | Die Ticket-ID

try {
    $result = $apiInstance->listSupportTicketAnswers($ticket_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->listSupportTicketAnswers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_identifier** | **string**| Die Ticket-ID |

### Return type

[**\Mittwald\Api\Model\TicketAnswer[]**](../Model/TicketAnswer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSupportTickets**
> \Mittwald\Api\Model\Ticket[] listSupportTickets($customer_number)

Support-Tickets auslesen

Listet Support-Tickets eines Kunden auf

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = "customer_number_example"; // string | Die Kundennummer

try {
    $result = $apiInstance->listSupportTickets($customer_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->listSupportTickets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_number** | **string**| Die Kundennummer |

### Return type

[**\Mittwald\Api\Model\Ticket[]**](../Model/Ticket.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

