<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function getIndex(){
        return view('proveedores.index');
    }

    public function getCreate(){
        return view('proveedores.create');
    }

    public function getShow($id){
        return view('proveedores.show', array('id'=>$id));
    }

    public function getEdit($id){
        return view('proveedores.edit', array('id'=>$id));
    }
}
