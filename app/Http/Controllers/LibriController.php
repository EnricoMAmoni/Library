<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\LibriRequest;

class LibriController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except(
           'indexLibri', 'dettaglioLibri'
        );
    }

    public function createLibri(){
        return view('createLibri');
    }

    public function storeLibri(LibriRequest $request){
        $books = Book::create([
            'title'=>$request->input('title'),
            'author'=>$request->input('author'),
            'category'=>$request->input('category'),
            'year'=>$request->input('year'),
            'price'=>$request->input('price'),
            'synopsis'=>$request->input('synopsis'),
            'img'=>$request->file('img')->store('public/media'),
        ]);
        
        return redirect(route('createLibri'))->with('message', 'Libro inserito');

    }

    public function indexLibri(){
        
        $books = Book::all();
        return view ('indexLibri', compact('books'));

    }

    public function dettaglioLibri(Book $book){
        
        return view ('dettaglioLibri', compact('book'));
        
    }

    
   

   
}
