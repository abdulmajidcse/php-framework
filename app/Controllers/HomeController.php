<?php
namespace App\Controllers;

defined('APP_ROOT') OR exit('Access to this resource on the server is denied!');

use App\Models\Test;

class HomeController extends Controller
{
    public function index()
    {
        $users = (new Test())->init();
        return $this->view('welcome', ['users' => $users]);
    }

    public function about()
    {
        return $this->view('about');
    }
}