<?php


class WeChatController extends Controller {

    public function __construct()
    {
        $token = Config::get('wechat.token');
        $appid = Config::get('wechat.appid');
        $appsecret = Config::get('wechat.appsecret');
        $this->wechat = new WeChat($token, $appid, $appsecret);
    }

    public function test()
    {
        if (!$this->wechat->checkAccessToken())
            $this->wechat->getAccessToken();
        return Cache::get('access_token');
    }

    public function auth()
    {
        $signature = Input::get('signature');
        $timestamp = Input::get('timestamp');
        $nonce = Input::get('nonce');
        $echostr = Input::get('echostr');

        $ret = $wechat->checkSignature($signature, $timestamp, $nonce);
        return $ret ? $echostr : "failure";
    }
}
