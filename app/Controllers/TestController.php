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

    public function super() 
    {
        return view('super/v_super_template');
    }

    public function login() 
    {
        $data = [
            'judul' => 'Selamat Datang'
        ];
        return view('auth/v_login.php', $data);
    }

    public function signup() 
    {
        $data = [
            'judul' => 'Sign up'
        ];
        return view('auth/v_signup.php', $data);
    }
}
