<?php

namespace App\Http\Controllers;

use App\Models\game;
use Illuminate\Http\Request;

class MesasController extends Controller
{
    public function getIndex(){
        $arrayMesa=game::all();
        return view('mesas.index', compact('arrayMesa'));
    }

    public function getCreate(){
        return view('mesas.create');
    }

    public function getShow($id){
        $mesa=game::findOrFail($id);
        return view('mesas.show', compact('mesa'));
    }

    public function getEdit($id){
        $mesa=game::findOrFail($id);
        return view('mesas.edit', compact('mesa'));
    }
}
