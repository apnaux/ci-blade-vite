<?php

namespace App\Controllers;

use App\Libraries\Blade;

class Home extends BaseController
{
    public function index(): string
    {
        return Blade::render('hello', []);
    }
}
