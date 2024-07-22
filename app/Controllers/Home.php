<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('/pages/index');
    }

    public function stok()
    {
        $data = [
            'title' => 'Stok'
        ];
        return view('/pages/stok', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('/auth/login', $data);
    }
    public function register()
    {
        $data = [
            'title' => 'Register'
        ];
        return view('/auth/register', $data);
    }
}
