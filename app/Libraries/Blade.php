<?php

namespace App\Libraries;

use eftec\bladeone\BladeOne;

class Blade
{
    public static function registerDirectives(BladeOne $blade)
    {
        // custom csrf directive
        $blade->directive('csrf', function () {
            $tokenName = csrf_token(); 
            $tokenHash = csrf_hash(); 
            return "<input type='hidden' name='{$tokenName}' value='{$tokenHash}'>";
        });
        ENVIRONMENT;
        // vite directive for app.blade.php
        $blade->directive('vite', function ($files = []) {
            return <<<'blade'
                
            blade;
        });
    }

    public static function render($view, $data = [])
    {
        // Initialize View and Cache locations
        $views = APPPATH . 'Views'; 
        $cache = WRITEPATH . 'cache/blade'; 
        $blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);

        // Register custom directives
        self::registerDirectives($blade);

        // Render view
        return $blade->run($view, $data);
    }
}