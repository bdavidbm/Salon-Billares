<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function getIndex(){
        return view('clientes.index');
    }

    public function getCreate(){
        return view('clientes.create');
    }

    public function getShow($id){
        return view('clientes.show', array('id'=>$id));
    }

    public function getEdit($id){
        return view('clientes.edit', array('id'=>$id));
    }
}
