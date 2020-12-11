<?php
namespace App\Models;

defined('APP_ROOT') OR exit('Access to this resource on the server is denied!');

use App\System\DB;

class Model extends DB
{
    public function __construct()
    {
        parent::__construct();
    }
}