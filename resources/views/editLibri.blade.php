<x-layout>
    <div class="container">
        <h1 class="m-5">Modifica il libro</h1>  
        <div class="row">
            <div class="col-7"> 
                <form method="POST" action="{{route('editLibri', compact('book'))}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="mb-3">
                        <label class="form-label">Titolo</label>
                        <input placeholder="Inserisci il titolo del libro" class="form-control" name="title" value="{{$book->title}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Autore</label>
                        <input placeholder="Inserisci l'autore del libro" class="form-control" name="author" value="{{$book->author}}">
                    </div>
                    <!-- <div class="mb-3">
                        <label class="form-label">Categoria</label>
                        <input placeholder="Inserisci la categoria" class="form-control" name="category" value="{{$book->category}}">
                    </div> -->
                    <div class="mb-3">
                        <label class="form-label">Anno di pubblicazione</label>
                        <input placeholder="Inserisci l'anno di pubblicazione" class="form-control" name="year" value="{{$book->year}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prezzo</label>
                        <input placeholder="Inserisci il prezzo" class="form-control" name="price" value="{{$book->price}}">
                    </div>
                    <div class="mb-3">
                        <p>Sinossi</p>
                        <textarea placeholder="Inserisci la sinossi" name="synopsis" cols="70" rows="10">{{$book->synopsis}}"</textarea>
                    </div>
                    <div class="mb-3">
                        <p>Carica l'immagine di copertina</p>
                        <input type="file" class="form-control" name="img">
                    </div>
                    
                    <button type="submit" class="btn bntCreateLibri">Modifica</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>