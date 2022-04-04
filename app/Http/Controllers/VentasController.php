<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function getIndex(){
        return view('ventas.index');
    }

    public function getShow($id){
        return view('ventas.show', array('id'=>$id));
    }
}
