<x-layout>

    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-12 col-md-4 mb-3 mt-3" style="width: 18rem;">
                <img src="https://picsum.photos/200/300/?blur" class="card-img-top" alt="libri">
                <div class="card-body">
                    <h1 class="card-title">Titolo: {{$book->title}}</h1>
                    <h2 class="card-text">Autore: {{$book->author}}</h2>
                    <h5>Anno di pubblicazione: {{$book->year}}</h5>
                    <h5>Prezzo: {{$book->price}}</h5>
                    <p>{{$book->synopsis}}</p>
                    

                </div>
            </div>


        </div>


    </div>
</x-layout>