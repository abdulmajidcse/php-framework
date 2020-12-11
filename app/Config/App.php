<?php
namespace App\Config;

defined('APP_ROOT') OR exit('Access to this resource on the server is denied!');

trait App
{
    // Application Name
    private $appName = 'PHP Framework';

    // Application directory
    private $appDirectory = APP_ROOT . '/app';

    // Applicaton url
    private $appUrl = 'http://localhost/php';

    /**
     * Get app name
     * @return $string
     */
    final public function appName()
    {
        return $this->appName;
    }

    /**
     * Get app url
     * @return $string
     */
    final public function appUrl($route = '')
    {
        return trim($this->appUrl, '/') . '/' . trim($route, '/');
    }

    /**
     * Get app directory
     * @return $string
     */
    final public function appDirectory()
    {
        return rtrim($this->appDirectory, '/');
    }
}