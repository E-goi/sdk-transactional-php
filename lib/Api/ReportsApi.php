<?php
/**
 * ReportsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Transactional API
 *
 * # Introduction    This API is a service provided by [E-goi](www.e-goi.com) to send transactional messages.    Transactional Messaging is a 1-to-1 communication channel, usually from an organization directed to a specific consumer.   They can be triggered by:    * __Actions__ - The consumer interacts with the organization (ie.: online shopping);  * __Time__ - The consumer's actions are time-bounded by the organization (ie.: period of inactivity).    Because of the nature of these messages,   it is expected that the consumer is interested in the content of these messages.   Therefore, they have a different treatment from marketing messages, and have a higher acceptance and opening rate.    >DISCLAIMER  >  >Please notice that this platform is more delicate in regards to the nature and processing of its messages.  >  >It should NOT be used as a mean of mass marketing, scams, phishing or overall unruly behaviour.   >  >Failure to comply may lead to limitation of use and even termination of account.    ***
 *
 * OpenAPI spec version: V2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.21
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * ReportsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportsApi
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
     * @var HeaderSelector
     */
    protected $headerSelector;

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
     * Operation produceEmailReport
     *
     * Get Email Report
     *
     * @param  string $group The name of the group to search (optional)
     * @param  string $group_by The option to group the results. Can be either &#x60;&#x60;day&#x60;&#x60; or &#x60;&#x60;month&#x60;&#x60;. Defaults to &#x60;&#x60;day&#x60;&#x60; if none are present (optional)
     * @param  string $date_start The date to start the report. Date must be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; (optional)
     * @param  string $date_end The date to end the report. Date should be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\EmailReportResponse[]
     */
    public function produceEmailReport($group = null, $group_by = null, $date_start = null, $date_end = null)
    {
        list($response) = $this->produceEmailReportWithHttpInfo($group, $group_by, $date_start, $date_end);
        return $response;
    }

    /**
     * Operation produceEmailReportWithHttpInfo
     *
     * Get Email Report
     *
     * @param  string $group The name of the group to search (optional)
     * @param  string $group_by The option to group the results. Can be either &#x60;&#x60;day&#x60;&#x60; or &#x60;&#x60;month&#x60;&#x60;. Defaults to &#x60;&#x60;day&#x60;&#x60; if none are present (optional)
     * @param  string $date_start The date to start the report. Date must be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; (optional)
     * @param  string $date_end The date to end the report. Date should be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\EmailReportResponse[], HTTP status code, HTTP response headers (array of strings)
     */
    public function produceEmailReportWithHttpInfo($group = null, $group_by = null, $date_start = null, $date_end = null)
    {
        $returnType = '\Swagger\Client\Model\EmailReportResponse[]';
        $request = $this->produceEmailReportRequest($group, $group_by, $date_start, $date_end);

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

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\EmailReportResponse[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation produceEmailReportAsync
     *
     * Get Email Report
     *
     * @param  string $group The name of the group to search (optional)
     * @param  string $group_by The option to group the results. Can be either &#x60;&#x60;day&#x60;&#x60; or &#x60;&#x60;month&#x60;&#x60;. Defaults to &#x60;&#x60;day&#x60;&#x60; if none are present (optional)
     * @param  string $date_start The date to start the report. Date must be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; (optional)
     * @param  string $date_end The date to end the report. Date should be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function produceEmailReportAsync($group = null, $group_by = null, $date_start = null, $date_end = null)
    {
        return $this->produceEmailReportAsyncWithHttpInfo($group, $group_by, $date_start, $date_end)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation produceEmailReportAsyncWithHttpInfo
     *
     * Get Email Report
     *
     * @param  string $group The name of the group to search (optional)
     * @param  string $group_by The option to group the results. Can be either &#x60;&#x60;day&#x60;&#x60; or &#x60;&#x60;month&#x60;&#x60;. Defaults to &#x60;&#x60;day&#x60;&#x60; if none are present (optional)
     * @param  string $date_start The date to start the report. Date must be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; (optional)
     * @param  string $date_end The date to end the report. Date should be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function produceEmailReportAsyncWithHttpInfo($group = null, $group_by = null, $date_start = null, $date_end = null)
    {
        $returnType = '\Swagger\Client\Model\EmailReportResponse[]';
        $request = $this->produceEmailReportRequest($group, $group_by, $date_start, $date_end);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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
     * Create request for operation 'produceEmailReport'
     *
     * @param  string $group The name of the group to search (optional)
     * @param  string $group_by The option to group the results. Can be either &#x60;&#x60;day&#x60;&#x60; or &#x60;&#x60;month&#x60;&#x60;. Defaults to &#x60;&#x60;day&#x60;&#x60; if none are present (optional)
     * @param  string $date_start The date to start the report. Date must be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; (optional)
     * @param  string $date_end The date to end the report. Date should be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function produceEmailReportRequest($group = null, $group_by = null, $date_start = null, $date_end = null)
    {

        $resourcePath = '/v2/email/reports';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($group !== null) {
            $queryParams['group'] = ObjectSerializer::toQueryValue($group, null);
        }
        // query params
        if ($group_by !== null) {
            $queryParams['groupBy'] = ObjectSerializer::toQueryValue($group_by, null);
        }
        // query params
        if ($date_start !== null) {
            $queryParams['dateStart'] = ObjectSerializer::toQueryValue($date_start, null);
        }
        // query params
        if ($date_end !== null) {
            $queryParams['dateEnd'] = ObjectSerializer::toQueryValue($date_end, null);
        }


        // body params
        $_tempBody = null;

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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('ApiKey');
        if ($apiKey !== null) {
            $headers['ApiKey'] = $apiKey;
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation produceSmsReport
     *
     * Get Sms Report
     *
     * @param  string $group The id of the group to search (optional)
     * @param  string $group_by The option to group the results. Can be either &#x60;&#x60;day&#x60;&#x60; or &#x60;&#x60;month&#x60;&#x60;. Defaults to &#x60;&#x60;day&#x60;&#x60; if none are present (optional)
     * @param  string $date_start The date to start the report. Date must be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; (optional)
     * @param  string $date_end The date to end the report. Date should be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\SmsReportResponse[]
     */
    public function produceSmsReport($group = null, $group_by = null, $date_start = null, $date_end = null)
    {
        list($response) = $this->produceSmsReportWithHttpInfo($group, $group_by, $date_start, $date_end);
        return $response;
    }

    /**
     * Operation produceSmsReportWithHttpInfo
     *
     * Get Sms Report
     *
     * @param  string $group The id of the group to search (optional)
     * @param  string $group_by The option to group the results. Can be either &#x60;&#x60;day&#x60;&#x60; or &#x60;&#x60;month&#x60;&#x60;. Defaults to &#x60;&#x60;day&#x60;&#x60; if none are present (optional)
     * @param  string $date_start The date to start the report. Date must be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; (optional)
     * @param  string $date_end The date to end the report. Date should be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\SmsReportResponse[], HTTP status code, HTTP response headers (array of strings)
     */
    public function produceSmsReportWithHttpInfo($group = null, $group_by = null, $date_start = null, $date_end = null)
    {
        $returnType = '\Swagger\Client\Model\SmsReportResponse[]';
        $request = $this->produceSmsReportRequest($group, $group_by, $date_start, $date_end);

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

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\SmsReportResponse[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation produceSmsReportAsync
     *
     * Get Sms Report
     *
     * @param  string $group The id of the group to search (optional)
     * @param  string $group_by The option to group the results. Can be either &#x60;&#x60;day&#x60;&#x60; or &#x60;&#x60;month&#x60;&#x60;. Defaults to &#x60;&#x60;day&#x60;&#x60; if none are present (optional)
     * @param  string $date_start The date to start the report. Date must be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; (optional)
     * @param  string $date_end The date to end the report. Date should be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function produceSmsReportAsync($group = null, $group_by = null, $date_start = null, $date_end = null)
    {
        return $this->produceSmsReportAsyncWithHttpInfo($group, $group_by, $date_start, $date_end)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation produceSmsReportAsyncWithHttpInfo
     *
     * Get Sms Report
     *
     * @param  string $group The id of the group to search (optional)
     * @param  string $group_by The option to group the results. Can be either &#x60;&#x60;day&#x60;&#x60; or &#x60;&#x60;month&#x60;&#x60;. Defaults to &#x60;&#x60;day&#x60;&#x60; if none are present (optional)
     * @param  string $date_start The date to start the report. Date must be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; (optional)
     * @param  string $date_end The date to end the report. Date should be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function produceSmsReportAsyncWithHttpInfo($group = null, $group_by = null, $date_start = null, $date_end = null)
    {
        $returnType = '\Swagger\Client\Model\SmsReportResponse[]';
        $request = $this->produceSmsReportRequest($group, $group_by, $date_start, $date_end);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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
     * Create request for operation 'produceSmsReport'
     *
     * @param  string $group The id of the group to search (optional)
     * @param  string $group_by The option to group the results. Can be either &#x60;&#x60;day&#x60;&#x60; or &#x60;&#x60;month&#x60;&#x60;. Defaults to &#x60;&#x60;day&#x60;&#x60; if none are present (optional)
     * @param  string $date_start The date to start the report. Date must be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; (optional)
     * @param  string $date_end The date to end the report. Date should be in format &#x60;&#x60;yyyy-MM-dd&#x60;&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function produceSmsReportRequest($group = null, $group_by = null, $date_start = null, $date_end = null)
    {

        $resourcePath = '/v2/sms/reports';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($group !== null) {
            $queryParams['group'] = ObjectSerializer::toQueryValue($group, null);
        }
        // query params
        if ($group_by !== null) {
            $queryParams['groupBy'] = ObjectSerializer::toQueryValue($group_by, null);
        }
        // query params
        if ($date_start !== null) {
            $queryParams['dateStart'] = ObjectSerializer::toQueryValue($date_start, null);
        }
        // query params
        if ($date_end !== null) {
            $queryParams['dateEnd'] = ObjectSerializer::toQueryValue($date_end, null);
        }


        // body params
        $_tempBody = null;

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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('ApiKey');
        if ($apiKey !== null) {
            $headers['ApiKey'] = $apiKey;
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
            'GET',
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
