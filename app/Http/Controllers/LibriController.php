<?php

namespace App\Http\Controllers;

use App\Models\Book;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\LibriRequest;
use Illuminate\Support\Facades\Auth;

class LibriController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except(
           'indexLibri', 'dettaglioLibri'
        );
    }

    public function createLibri(){
        $categories = Category::all();
        // dd($categories->all());
        return view('createLibri', compact('categories'));
    }

    public function storeLibri(LibriRequest $request){
        $user = Auth::user();
       
        $book=Auth::user()->books()->create([
            'title'=>$request->input('title'),
            'author'=>$request->input('author'),
            // 'category'=>$request->input('category'),
            'year'=>$request->input('year'),
            'price'=>$request->input('price'),
            'synopsis'=>$request->input('synopsis'),
            'img'=>$request->file('img')->store('public/media'),
        ]);
        $book->categories()->attach($request->categories);
        return redirect(route('createLibri'))->with('message', 'Libro inserito');

    }

    public function indexLibri(){
        
        $books = Book::all();
        return view ('indexLibri', compact('books'));

    }

    public function dettaglioLibri(Book $book){
        
        return view ('dettaglioLibri', compact('book'));
        
    }

    public function viewEditLibri(Book $book){
        
        return view ('editLibri', compact('book'));
        
    }

    public function editLibri(Book $book, LibriRequest $request){
        if($request->img){
            $book->update([
            'title'=>$request->title,
            'author'=>$request->author,
            'category'=>$request->category,
            'year'=>$request->year,
            'price'=>$request->price,
            'synopsis'=>$request->synopsis,
            'img'=>$request->file('img')->store('public/media'),
            ]);
        }else{
            $book->update([
            'title'=>$request->title,
            'author'=>$request->author,
            'category'=>$request->category,
            'year'=>$request->year,
            'price'=>$request->price,
            'synopsis'=>$request->synopsis,
        ]);   
        }
        return redirect(route('indexLibri'))->with('message','Libro aggiornato!');
    }


    public function destroy(Book $book){
       
        $book->delete();
        $book->categories()->detach();
        $book->user()->disassociate();

        return redirect(route('indexLibri'));
    }

    public function userPage() {
        $books = Auth::user()->books()->get();
        return view('userPage', compact('books'));
    }
    
    public function storeUser(Request $request){
       
        $userProfile = Auth::user();
        $userProfile->userProfile()->create([
            'name'=>$request->input('name'),
            'surname'=>$request->input('surname'),
            'email'=>Auth::user()->email,
            'address'=>$request->input('address'),
            'birthdate'=>$request->input('birthdate'),
            'profilepicture'=>$request->file('profilepicture')->store('public/media'),
            
        ]);
        
        return redirect(route('createLibri'))->with('message', 'Libro inserito');


 
}
}
