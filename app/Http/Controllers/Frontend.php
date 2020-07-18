<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontend extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function prices(){
        return view('prices');
    }
}
