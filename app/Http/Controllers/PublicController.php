<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;
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

    public function viewRecensioni(){
        $reviews=Review::all();
        return view ('allReview', compact('reviews'));
    }

    public function editReview (Review $review){
        return view ('editReview', compact('review'));
    }
    
    

   
}
