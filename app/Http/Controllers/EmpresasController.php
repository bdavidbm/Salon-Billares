<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    public function getIndex(){
        return view('empresas.index');
    }

    public function getCreate(){
        return view('empresas.create');
    }

    public function getShow($id){
        return view('empresas.show', array('id'=>$id));
    }

    public function getEdit($id){
        return view('empresas.edit', array('id'=>$id));
    }
}
