<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    //
    function index(){
        return view("galeria.index");
    }

    function create(){
        return view("galeria.create");
    }

    function show(){
        return view("galeria.show");
    }
}
