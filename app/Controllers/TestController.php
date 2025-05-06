<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class TestController extends BaseController
{
    public function index()
    {
        //
        return view("v_template");
    }

    public function admin() 
    {
        return view('admin/v_admin_template');
    }
}
