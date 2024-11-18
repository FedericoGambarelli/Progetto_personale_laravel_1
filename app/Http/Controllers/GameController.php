<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Requests\RequestCustom;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class GameController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return [
            new Middleware('auth', only: ['ShowPage', 'edit', 'update', 'destroy'])
        ];
    }

    public function ShowPage(){
        return view('game.game-create');
    }

    public function GameCreate(RequestCustom $request){
        Game::create([
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'cover' =>$request->has('cover') ? $request->file('cover')->store('covers-games', 'public') : 'covers-games/default-image.jpg',
            'user_id' => Auth::user()->id
        ]);


        return redirect(route('home'))->with('success', 'Il tuo gioco è stato aggiunto correttamente.');
    }

    public function index(){

        $games = Game::all();
        return view('game.game-index', compact('games'));
    }

    public function show(Game $game){
        return view('game.game-show', compact('game'));
    }

    public function edit(Game $game){
        return view('game.game-edit', compact('game'));
    }

    public function update(Request $request, Game $game){
        $game->update([
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'cover' =>$request->file('cover') ? $request->file('cover')->store('covers-games', 'public') : $game->cover
        ]);

        return redirect(route('game.index'))->with('success-edit', 'Hai modificato il gioco correttamente');
    }

    public function destroy(Game $game){
        $game->delete();
        return redirect(route('game.index'))->with('success-delte', 'Hai eliminato il gioco correttamente');
    }
}
