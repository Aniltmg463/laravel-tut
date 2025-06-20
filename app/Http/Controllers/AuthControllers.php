<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthControllers extends Controller
{
    public function ShowLoginForm()
    {
        return view('auth.login');
    }
}
