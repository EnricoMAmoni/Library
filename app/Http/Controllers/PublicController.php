<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome() {
        return view('welcome');
    }
    
    public function userDetail() {
        return view('userDetail');
    }

    public function viewFromRecensioni(){
        return view('insFormReview');
    }
    
    

   
}
