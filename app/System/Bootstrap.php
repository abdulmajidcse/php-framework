<?php
namespace App\System;

defined('APP_ROOT') OR exit('Access to this resource on the server is denied!');

class Bootstrap
{
    public static function runApp()
    {
        new Router();
    }
}