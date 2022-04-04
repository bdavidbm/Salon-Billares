<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHome(){
        return view('home');
    }

    public function getCobrar($id){
        return view('cobrar', array('id'=>$id));
    }
}
