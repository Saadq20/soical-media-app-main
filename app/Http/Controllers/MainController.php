<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    protected $redirectTo = '/user_post';
    public function login() {

        return view('login');
    }

    public function signup() {

        return view('signup');
    }
    public function register() {

        echo 'Hi';
    }
}
