<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function Homepage() {
        return view('welcome');
    }

    public function showContact(){
        return view('contact');
    }
}
