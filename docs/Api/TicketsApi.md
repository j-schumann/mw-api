# Mittwald\Api\TicketsApi

All URIs are relative to *https://api.mittwald.de/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**answerSupportTicket**](TicketsApi.md#answersupportticket) | **POST** /tickets/{ticketIdentifier}/answers | Ticketantwort erstellen
[**createSupportTicket**](TicketsApi.md#createsupportticket) | **POST** /tickets | Neues Support-Ticket
[**listSupportTicketAnswers**](TicketsApi.md#listsupportticketanswers) | **GET** /tickets/{ticketIdentifier}/answers | Ticketantworten auslesen
[**listSupportTickets**](TicketsApi.md#listsupporttickets) | **GET** /customers/{customerNumber}/tickets | Support-Tickets auslesen

# **answerSupportTicket**
> \Mittwald\Api\Model\TicketAnswer answerSupportTicket($body, $ticket_identifier)

Ticketantwort erstellen

Erstellt eine neue Antwort auf ein Support-Ticket

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Mittwald\Api\Model\TicketAnswerInput(); // \Mittwald\Api\Model\TicketAnswerInput | Die neue Antwort
$ticket_identifier = new \Mittwald\Api\Model\null(); //  | Die Ticket-ID

try {
    $result = $apiInstance->answerSupportTicket($body, $ticket_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->answerSupportTicket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Mittwald\Api\Model\TicketAnswerInput**](../Model/TicketAnswerInput.md)| Die neue Antwort |
 **ticket_identifier** | [****](../Model/.md)| Die Ticket-ID |

### Return type

[**\Mittwald\Api\Model\TicketAnswer**](../Model/TicketAnswer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSupportTicket**
> \Mittwald\Api\Model\Ticket createSupportTicket($body)

Neues Support-Ticket

Erstellt ein neues Support-Ticket

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mittwald\Api\Functions\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Mittwald\Api\Model\TicketInput(); // \Mittwald\Api\Model\TicketInput | Das neue Support-Ticket

try {
    $result = $apiInstance->createSupportTicket($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->createSupportTicket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Mittwald\Api\Model\TicketInput**](../Model/TicketInput.md)| Das neue Support-Ticket |

### Return type

[**\Mittwald\Api\Model\Ticket**](../Model/Ticket.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: */*
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

$apiInstance = new Mittwald\Api\Functions\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ticket_identifier = new \Mittwald\Api\Model\null(); //  | Die Ticket-ID

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
 **ticket_identifier** | [****](../Model/.md)| Die Ticket-ID |

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

$apiInstance = new Mittwald\Api\Functions\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_number = new \Mittwald\Api\Model\null(); //  | Die Kundennummer

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
 **customer_number** | [****](../Model/.md)| Die Kundennummer |

### Return type

[**\Mittwald\Api\Model\Ticket[]**](../Model/Ticket.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

