<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function getIndex(){
        return view('usuarios.index');
    }

    public function getCreate(){
        return view('usuarios.create');
    }

    public function getShow($id){
        return view('usuarios.show', array('id'=>$id));
    }

    public function getEdit($id){
        return view('usuarios.edit', array('id'=>$id));
    }
}
