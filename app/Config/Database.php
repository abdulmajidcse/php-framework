<?php
namespace App\Config;

defined('APP_ROOT') OR exit('Access to this resource on the server is denied!');

trait Database
{
    public $database = array(
        'host_name' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database_name' => 'php',
    );
}