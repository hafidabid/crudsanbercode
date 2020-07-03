<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    function index(){
        return view('master'); 
    }

    function create(){
        return view('formquestion');
    }

    function store(){
        
    }
}
