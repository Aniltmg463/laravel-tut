<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class forgetpasswordController extends Controller
{
    public function create()
    {
        return view('auth.forgetpassword');
    }
}
