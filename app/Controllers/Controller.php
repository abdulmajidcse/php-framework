<?php
namespace App\Controllers;

defined('APP_ROOT') OR exit('Access to this resource on the server is denied!');

use App\Config\App;
use App\System\Load;

class Controller
{
    use App;
    use Load;
}