<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginShow(){
        return view('auth.login');
    }

    public function dashboardview(){
        return view('auth.dashboard');
    }
}
