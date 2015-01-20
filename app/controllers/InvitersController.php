<?php

class InvitersController extends BaseController {
    protected $layout = 'layouts.master';

    public function index()
    {
        $this->layout->title = trans('inviters.index.title');
        $this->layout->content = View::make('inviters.index');
    }

    public function show($id)
    {
        $this->layout->title = trans('inviters.show.title');
        $this->layout->content = View::make('inviters.show');
    }
}
