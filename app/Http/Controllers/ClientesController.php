<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function getIndex(){
        $arrayCliente=client::all();
        return view('clientes.index', compact('arrayCliente'));
    }

    public function getCreate(){
        return view('clientes.create');
    }

    public function getShow($id){
        $cliente=client::findOrFail($id);
        return view('clientes.show', compact('cliente'));
    }

    public function getEdit($id){
        $cliente=client::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }
}
