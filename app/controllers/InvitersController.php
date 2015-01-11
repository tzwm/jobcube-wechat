<?php

class InvitersController extends BaseController {
    protected $layout = 'layouts.master';

    public function index()
    {
        $this->layout->title = trans('inviters.title');
        $this->layout->content = View::make('inviters.index');
    }

    public function show($id)
    {
        return $id;
    }
}
