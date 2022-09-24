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
                  @guest
                  
                  
                  {{-- @if(Auth::check()) --}}
                  @else
                  <form method="POST" action="{{route('destroy', compact ('book'))}}">
                     @csrf
                     @method('DELETE')
                     {{-- <button type="submit" class="btn btn-danger mt-2">Elimina</button> --}}
                     {{-- modale per bottone elimina --}}
                     <button type="button" class="btn btn-danger mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina</button>
                     
                        
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Elimina libro</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                    Sei sicuro di voler eliminare il libro?
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
                                    <button type="submit" class="btn btn-danger">ELIMINA</button>
                                    
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        
                        
                  </form>
                  @endguest
                  {{-- @endif --}}
                  
               </div>
   
            </div>
            @endforeach
      

      </div>
   </div>
</x-layout>