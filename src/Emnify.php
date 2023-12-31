<?php

namespace LaravelLatam\Emnify;

use Emnify\EmnifySdk\Api\EndpointApi;
use Emnify\EmnifySdk\Configuration;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;

class Emnify
{
    protected $config;

    public function endpoints($q = null, $sort = null, $page = null, $per_page = null)
    {

        $token = Storage::disk('local')->get('access_token');
        $this->config = Configuration::getDefaultConfiguration()
            ->setAccessToken($token);

        $apiInstance = new EndpointApi(
            new Client(),
            $this->config
        );

        try {
            $result = $apiInstance->getEndpoints($q, $sort, $page, $per_page);

            return collect($result);
        } catch (Exception $e) {
            throw new Exception('Exception when calling EndpointApi->getEndpoints: ', $e->getMessage());
        }
    }
}
