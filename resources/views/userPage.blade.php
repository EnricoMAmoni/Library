<x-layout>
    <h1>Ciao {{Auth::user()->name}}</h1>
    <p>{{Auth::user()->email}}</p>


   
    <div class="container">
        <div class="row justify-content-evenly">
          @foreach ($books as $book)
            <div class="card col-12 col-md-4 mb-3 mt-3" style="width: 18rem;">
                <img src="{{Storage::url($book->img)}}" class="card-img-top" alt="libri">
                <div class="card-body">
                    <h1 class="card-title">Titolo: {{$book->title}}</h1>
                    <h2 class="card-text">Autore: {{$book->author}}</h2>
                    <h5>Anno di pubblicazione: {{$book->year}}</h5>
                    <h5>Prezzo: {{$book->price}}</h5>
                    <p>{{$book->synopsis}}</p>
                    
                    <a href="{{route('viewEditLibri', compact('book'))}}"><button href="" class="btn bntCreateLibri">Modifica</button></a>
                    

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
                    
                    
                    
                </div>
            </div>
            @endforeach  
            
        </div>
        
        
    </div>
                  

</x-layout>