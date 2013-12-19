<?php

class DocsController extends BaseController
{
    public function __construct()
    {
        parent::__construct();

        $this->pagevars->body_class = 'docs';
    }

    public function index()
    {
        return View::make('docs/index');
    }

    public function getDocs($document)
    {

    }
}
