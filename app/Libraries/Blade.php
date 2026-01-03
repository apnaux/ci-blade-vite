<?php

namespace App\Libraries;

use eftec\bladeone\BladeOne;

class Blade
{
    public static function render($view, $data = [])
    {
        $views = APPPATH . 'Views'; 
        $cache = WRITEPATH . 'cache/blade'; 
        $blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);
        
        return $blade->run($view, $data);
    }
}