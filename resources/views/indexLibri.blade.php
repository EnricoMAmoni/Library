<x-layout>
   <h1 class="text-center mt-5 mb-3">
    I nostri libri in catalogo
   </h1>


  <div class="container">
      <div class="row justify-content-evenly">
         @if (session('message'))
        <div class="alert alert-warning">
            {{ session('message') }}
        </div>
        @endif
        
         
            @foreach ($books as $book)
                
            <div class="card col-12 col-md-4 mb-3 mt-3" style="width: 18rem;" >

               <img src="{{Storage::url($book->img)}}" class="card-img-top" alt="libri">
               <div class="card-body">
                  <h5 class="card-title">Titolo: {{$book->title}}</h5>
                  <h5 class="card-text">Autore: {{$book->author}}</h5>
                  <a href="{{route('dettaglioLibri', compact ('book'))}}" class="btn btn-warning">Dettaglio</a>
               
                  
               </div>
   
            </div>
            @endforeach
      

      </div>
   </div>
</x-layout>