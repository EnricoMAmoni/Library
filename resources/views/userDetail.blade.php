<x-layout>
  
    <h1>
        Inserisci i tuoi dati personali
    </h1>
    
       
        
   
    <div class="row">
        <div class="col-7">
            
            <form method="POST" action="{{route('postStoreUser')}}" enctype="multipart/form-data">
                @csrf
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
                    <label class="form-label">Nome</label>
                    <input placeholder="Inserisci il tuo nome" class="form-control" name="name" value="{{old('name')}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Cognome</label>
                    <input placeholder="Inserisci il tuo cognome" class="form-control" name="surname" value="{{old('surname')}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input placeholder="Inserisci la tua Email" class="form-control" name="email" value="{{Auth::user()->email}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Indirizzo</label>
                    <input placeholder="Inserisci l'indirizzo di casa" class="form-control" name="address" value="{{old('address')}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Data di nascita</label>
                    <input placeholder="Inserisci la tua data di nascita" class="form-control" name="birthdate" value="{{old('birthdate')}}">
                </div>
                <div class="mb-3">
                    <p>Carica l'immagine profilo</p>
                    <input type="file" class="form-control" name="profilepicture">
                </div>
                
                <button type="submit" class="btn bntCreateLibri">Invio</button>
            </form>
        </div>
    </div>
</div>



</x-layout>