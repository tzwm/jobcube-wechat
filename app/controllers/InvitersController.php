<?php

class InvitersController extends BaseController {

    public function __construct()
    {        
        $token = Config::get('wechat.token');
        $appid = Config::get('wechat.appid');
        $appsecret = Config::get('wechat.appsecret');
        $this->wechat = new WeChat($token, $appid, $appsecret);
    }

    public function index()
    {
        if (!Input::has('code') || !Input::has('state')) {
            return "No Access";
        }

        $code = Input::get('code');
        $state = Input::get('state');
        if ($state != Config::get('wechat.oauth.state')) {
            return "Error State";
        }

        $data = $this->wechat->getOAuthAccessToken($code);

        $this->layout = 'layouts.master';
        $this->layout->title = trans('inviters.index.title');
        $this->layout->content = View::make('inviters.index');
    }

    public function show($id)
    {
        $this->layout = 'layouts.master';
        $this->layout->title = trans('inviters.show.title');
        $this->layout->content = View::make('inviters.show');
    }
}
