<?php

class WeChat {
    private $token = NULL;
    private $appid = NULL;
    private $secret = NULL;
    private $client = NULL;


    public function __construct($_token, $_appid, $_secret)
    {
        $this->token = $_token;
        $this->appid = $_appid;
        $this->secret = $_secret;
        $this->client = new GuzzleHttp\Client();
    }

    public function checkSignature($signature, $timestamp, $nonce)
    {
        $tmpArr = array($this->token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        if ( $tmpStr == $signature ){
            return true;
        }else{
            return false;
        }
    }

    public function checkAccessToken()
    {
        return Cache::has('access_token');
    }

    public function getAccessToken()
    {
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=" . $this->appid . "&secret=" . $this->secret;
        $res = $this->client->get($url);
        if (!$this->checkResponseError($res))
            return false;

        $res = $res->json();
        $expireAt = \Carbon\Carbon::now()->addSeconds($res['expires_in']);
        if (!Cache::add('access_token', $res['access_token'], $expireAt)) {
            Log::error("access_token can't be cached");
            return false;
        }

        return true;
    }

    private function checkResponseError($response)
    {
        if ($response->getStatusCode() !== 200) return false;
        $resBody = $response->getBody();
        if (array_key_exists('errcode', $resBody)) {
            Log::error($resBody['errcode'] . ":" . $resBody['errmsg']);
            return false;
        }

        return true;
    }

}
