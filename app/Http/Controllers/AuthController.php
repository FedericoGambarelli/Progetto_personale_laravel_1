<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginShow(){
        return view('auth.login');
    }

    public function dashboardview(){
        $games = Game::all();
        return view('auth.dashboard', compact('games'));
    }
}
