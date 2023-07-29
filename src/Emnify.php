<?php

namespace LaravelLatam\Emnify;

use Emnify\EmnifySdk\Api\AuthenticationApi;
use Emnify\EmnifySdk\Api\EndpointApi;
use Emnify\EmnifySdk\Configuration;
use Exception;
use GuzzleHttp\Client;

class Emnify
{
    protected $config;
    public function __construct()
    {
        $config = Configuration::getDefaultConfiguration()
        ->setAccessToken('YOUR_ACCESS_TOKEN');
    }
    public function auth(){
        $apiInstance = new AuthenticationApi(
            // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
            // This is optional, `GuzzleHttp\Client` will be used as default.
            new Client()
        );
        $body = new \Emnify\EmnifySdk\Model\Authentication(); // \Emnify\EmnifySdk\Model\Authentication | Authentication using Application Tokens or user/password combination
        
        try {
            $result = $apiInstance->authenticate($body);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling AuthenticationApi->authenticate: ', $e->getMessage(), PHP_EOL;
        }
        return "";
    }
}
