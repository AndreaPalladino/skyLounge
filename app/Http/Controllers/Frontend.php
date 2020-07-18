<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontend extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function pictures(){
        return view('pictures');
    }
}
