<?php
namespace App\Models;

defined('APP_ROOT') OR exit('Access to this resource on the server is denied!');

class Test extends Model
{
    public function init()
    {
        return $this->get('users');
    }
}