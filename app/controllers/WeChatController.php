<?php


class WeChatController extends Controller {

    protected function checkSignature($signature, $timestamp, $nonce)
    {
        $token = Config::get('app.token');
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        if( $tmpStr == $signature ){
            return true;
        }else{
            return false;
        }
    }

    public function auth()
    {
        $signature = Input::get('signature');
        $timestamp = Input::get('timestamp');
        $nonce = Input::get('nonce');
        $echostr = Input::get('echostr');

        $ret = $this->checkSignature($signature, $timestamp, $nonce);
        return $ret ? $echostr : "failure";
    }

}
