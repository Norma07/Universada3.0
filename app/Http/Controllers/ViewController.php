<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function ajedrez(){
        return view('disciplines.ajedrez');
    }
    public function disciplinas(){
        return view ('disciplines.disciplinas');
    }

    public function index(){
        return view ('index');
    }
}
