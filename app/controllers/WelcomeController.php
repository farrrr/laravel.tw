<?php

class WelcomeController extends BaseController
{
    public function __construct()
    {
        parent::__construct();

        $this->pagevars->body_class = 'home';
    }

    public function index()
    {
        return View::make('welcome/index');
    }
}
