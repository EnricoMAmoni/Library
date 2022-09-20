<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class LibriController extends Controller
{
    public function createLibri(){
        return view('createLibri');
    }

    public function storeLibri(Request $request){
        $books = Book::create([
            'title'=>$request->input('title'),
            'author'=>$request->input('author'),
            'category'=>$request->input('category'),
            'year'=>$request->input('year'),
            'price'=>$request->input('price'),
            'synopsis'=>$request->input('synopsis'),


        ]);
        

    }

    public function indexLibri(){

        return view ('indexLibri');

    }
}
