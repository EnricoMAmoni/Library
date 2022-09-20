<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibriController extends Controller
{
    public function createLibri(){
        return view('createLibri');
    }
}
