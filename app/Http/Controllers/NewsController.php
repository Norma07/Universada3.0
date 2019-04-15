<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return view('News.index');
    }
    public function create(){
        return view('News.create');
    }
    public function store(){

    }
}
