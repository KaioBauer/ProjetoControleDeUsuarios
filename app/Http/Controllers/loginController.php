<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{


    public function showLoginForm()
    {
        return view('login');
    }

    public function showRegisterForm()
    {
        return view('register');
    }

    public function showProfile()
    {
        return view('profile');
    }
}
