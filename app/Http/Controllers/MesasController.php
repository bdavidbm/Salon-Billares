<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MesasController extends Controller
{
    public function getIndex(){
        return view('mesas.index');
    }

    public function getCreate(){
        return view('mesas.create');
    }

    public function getShow($id){
        return view('mesas.show', array('id'=>$id));
    }

    public function getEdit($id){
        return view('mesas.edit', array('id'=>$id));
    }
}
