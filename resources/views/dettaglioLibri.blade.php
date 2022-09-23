<x-layout>

    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-12 col-md-4 mb-3 mt-3" style="width: 18rem;">
                <img src="{{Storage::url($book->img)}}" class="card-img-top" alt="libri">
                <div class="card-body">
                    <h1 class="card-title">Titolo: {{$book->title}}</h1>
                    <h2 class="card-text">Autore: {{$book->author}}</h2>
                    <h5>Anno di pubblicazione: {{$book->year}}</h5>
                    <h5>Prezzo: {{$book->price}}</h5>
                    <p>{{$book->synopsis}}</p>
                    @if(Auth::check())
                    <a href="{{route('viewEditLibri', compact('book'))}}"><button href="" class="btn bntCreateLibri">Modifica</button></a>
                    @endif
                    
                    
                    

                </div>
            </div>


        </div>


    </div>
</x-layout>