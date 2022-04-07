<?php

namespace App\Http\Controllers;

use App\Models\sale;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function getIndex(){
        $arrayVenta=sale::all();
        return view('ventas.index', compact('arrayVenta'));
    }

    public function getShow($id){
        $venta=sale::findOrFail($id);
        return view('ventas.show', compact('venta'));
    }
}
