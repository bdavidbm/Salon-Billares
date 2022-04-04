<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function getIndex(){
        return view('stock.index');
    }

    public function getShow($id){
        return view('stock.show', array('id'=>$id));
    }
}
