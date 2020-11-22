<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    //
    function index(){
        return view("cursos.index");
    }

    function create(){
        return view("cursos.create");
    }

    function show(){
        return view("cursos.show");
    }
}
