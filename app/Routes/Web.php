<?php
namespace App\Routes;

defined('APP_ROOT') OR exit('Access to this resource on the server is denied!');

class Web {

    protected $routes = array(

        ['get', '/', 'HomeController@index'],
        ['get', '/about', 'HomeController@about'],

    );

}