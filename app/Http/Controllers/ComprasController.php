<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComprasController extends Controller
{
    public function getIndex(){
        return view('compras.index');
    }

    public function getCreate(){
        return view('compras.create');
    }

    public function getShow($id){
        return view('compras.show', array('id'=>$id));
    }
}
