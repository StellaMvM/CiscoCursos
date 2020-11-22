<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    //
    function index(){
        return view("staff.index");
    }

    function create(){
        return view("staff.create");
    }

    function show(){
        return view("staff.show");
    }
}
