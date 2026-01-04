<?php

namespace App\Controllers;

use App\Libraries\Blade;

class Home extends BaseController
{
    public function index()
    {
        return Blade::render('pages.hello', [
            'name' => 'User'
        ]);
    }
}
