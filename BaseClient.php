<?php
namespace carono\regru;

use GuzzleHttp\Client;

class BaseClient
{
    const FORMAT_PLAIN = 'plain';
    const FORMAT_JSON = 'json';
    const URL = 'https://api.reg.ru/api/regru2';

    public $inputFormat = 'plain';
    public $outputFormat = 'json';
    public $lang = 'ru';
    public $username;
    public $password;
    public $guzzleOptions = [];

    public function rawRequest($url, $data)
    {
        $guzzle = new Client();
        $uri = self::URL . '/' . ltrim($url, '/');
        try {
            $uri .= "?" . http_build_query(array_filter($data));
            $content = $guzzle->get($uri, $this->guzzleOptions)->getBody();
            if ($this->outputFormat == 'json') {
                return json_decode($content, 1);
            }
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }
        return null;
    }

    public function request($url, $data)
    {
        if ($data && $this->inputFormat == self::FORMAT_JSON) {
            $data = ['input_data' => json_encode($data)];
        }
        $data += [
            'username'     => $this->username,
            'password'     => $this->password,
            'input_format' => $this->inputFormat
        ];
        return $this->rawRequest($url, $data);
    }
}