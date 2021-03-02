<?php
namespace App\System;

defined('APP_ROOT') OR exit('Access to this resource on the server is denied!');

use App\Config\App;

trait Load
{
    use App;

    final public function view($directory, $data = [])
    {
        require_once $this->appDirectory() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . \str_replace('.', DIRECTORY_SEPARATOR, $directory) . '.php';
        return $data;
    }

    final public function include($directory, $data = [])
    {
        return $this->view($directory, $data);
    }
}