<?php
/**
 * BestellungenApi
 * PHP version 5
 *
 * @category Class
 * @package  Mittwald\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Public API
 *
 * Schnittstellen für Mittwald-Kunden
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Mittwald\Api\Functions;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Mittwald\Api\ApiException;
use Mittwald\Api\Configuration;
use Mittwald\Api\HeaderSelector;
use Mittwald\Api\ObjectSerializer;

/**
 * BestellungenApi Class Doc Comment
 *
 * @category Class
 * @package  Mittwald\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BestellungenApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation orderPartnerBox
     *
     * Bestellung eines Partnerbox
     *
     * @param  \Mittwald\Api\Model\PartnerHostingOrderRequest $partner_hosting_order_request Die Bestellanfrage; diese enthält notwendige Kundenstammdaten (required)
     *
     * @throws \Mittwald\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function orderPartnerBox($partner_hosting_order_request)
    {
        $this->orderPartnerBoxWithHttpInfo($partner_hosting_order_request);
    }

    /**
     * Operation orderPartnerBoxWithHttpInfo
     *
     * Bestellung eines Partnerbox
     *
     * @param  \Mittwald\Api\Model\PartnerHostingOrderRequest $partner_hosting_order_request Die Bestellanfrage; diese enthält notwendige Kundenstammdaten (required)
     *
     * @throws \Mittwald\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function orderPartnerBoxWithHttpInfo($partner_hosting_order_request)
    {
        $returnType = '';
        $request = $this->orderPartnerBoxRequest($partner_hosting_order_request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Mittwald\Api\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Mittwald\Api\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Mittwald\Api\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation orderPartnerBoxAsync
     *
     * Bestellung eines Partnerbox
     *
     * @param  \Mittwald\Api\Model\PartnerHostingOrderRequest $partner_hosting_order_request Die Bestellanfrage; diese enthält notwendige Kundenstammdaten (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function orderPartnerBoxAsync($partner_hosting_order_request)
    {
        return $this->orderPartnerBoxAsyncWithHttpInfo($partner_hosting_order_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation orderPartnerBoxAsyncWithHttpInfo
     *
     * Bestellung eines Partnerbox
     *
     * @param  \Mittwald\Api\Model\PartnerHostingOrderRequest $partner_hosting_order_request Die Bestellanfrage; diese enthält notwendige Kundenstammdaten (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function orderPartnerBoxAsyncWithHttpInfo($partner_hosting_order_request)
    {
        $returnType = '';
        $request = $this->orderPartnerBoxRequest($partner_hosting_order_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'orderPartnerBox'
     *
     * @param  \Mittwald\Api\Model\PartnerHostingOrderRequest $partner_hosting_order_request Die Bestellanfrage; diese enthält notwendige Kundenstammdaten (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function orderPartnerBoxRequest($partner_hosting_order_request)
    {
        // verify the required parameter 'partner_hosting_order_request' is set
        if ($partner_hosting_order_request === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $partner_hosting_order_request when calling orderPartnerBox'
            );
        }

        $resourcePath = '/orders/partnerbox';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($partner_hosting_order_request)) {
            $_tempBody = $partner_hosting_order_request;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation orderPartnerProgram
     *
     * Anmeldung am Partnerprogramm
     *
     * @param  \Mittwald\Api\Model\PartnerHostingOrderRequest $partner_hosting_order_request Die Bestellanfrage; diese enthält notwendige Kundenstammdaten (required)
     *
     * @throws \Mittwald\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function orderPartnerProgram($partner_hosting_order_request)
    {
        $this->orderPartnerProgramWithHttpInfo($partner_hosting_order_request);
    }

    /**
     * Operation orderPartnerProgramWithHttpInfo
     *
     * Anmeldung am Partnerprogramm
     *
     * @param  \Mittwald\Api\Model\PartnerHostingOrderRequest $partner_hosting_order_request Die Bestellanfrage; diese enthält notwendige Kundenstammdaten (required)
     *
     * @throws \Mittwald\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function orderPartnerProgramWithHttpInfo($partner_hosting_order_request)
    {
        $returnType = '';
        $request = $this->orderPartnerProgramRequest($partner_hosting_order_request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Mittwald\Api\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Mittwald\Api\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Mittwald\Api\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation orderPartnerProgramAsync
     *
     * Anmeldung am Partnerprogramm
     *
     * @param  \Mittwald\Api\Model\PartnerHostingOrderRequest $partner_hosting_order_request Die Bestellanfrage; diese enthält notwendige Kundenstammdaten (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function orderPartnerProgramAsync($partner_hosting_order_request)
    {
        return $this->orderPartnerProgramAsyncWithHttpInfo($partner_hosting_order_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation orderPartnerProgramAsyncWithHttpInfo
     *
     * Anmeldung am Partnerprogramm
     *
     * @param  \Mittwald\Api\Model\PartnerHostingOrderRequest $partner_hosting_order_request Die Bestellanfrage; diese enthält notwendige Kundenstammdaten (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function orderPartnerProgramAsyncWithHttpInfo($partner_hosting_order_request)
    {
        $returnType = '';
        $request = $this->orderPartnerProgramRequest($partner_hosting_order_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'orderPartnerProgram'
     *
     * @param  \Mittwald\Api\Model\PartnerHostingOrderRequest $partner_hosting_order_request Die Bestellanfrage; diese enthält notwendige Kundenstammdaten (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function orderPartnerProgramRequest($partner_hosting_order_request)
    {
        // verify the required parameter 'partner_hosting_order_request' is set
        if ($partner_hosting_order_request === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $partner_hosting_order_request when calling orderPartnerProgram'
            );
        }

        $resourcePath = '/orders/partnerprogram';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($partner_hosting_order_request)) {
            $_tempBody = $partner_hosting_order_request;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}