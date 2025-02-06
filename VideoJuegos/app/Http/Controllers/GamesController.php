<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function create(){
        return view('create');
    }

    public function delete(){
        return view('delete');
    }

    public function help($name_game){
        $date = now();
        return view('show', ['nameJuego' => $name_game]);
    }

    public function store(Request $request){
        $game = new Game;
        $game->nombre = $request->nombre;
        $game->categoria = $request->categoria;
        $game->save();

        return redirect()->route('show', ['nameJuego' => $game->nombre]);
    }
}
