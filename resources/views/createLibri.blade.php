<x-layout>
    <div class="container">
        <h1 class="m-5">Inserisci il libro</h1>  
        <div class="row">
            <div class="col-7">
                
                <form>
                    <div class="mb-3">
                        <label class="form-label">Titolo</label>
                        <input placeholder="Inserisci il titolo del libro" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Autore</label>
                        <input placeholder="Inserisci l'autore del libro" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Categoria</label>
                        <input placeholder="Inserisci la categoria" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Data di pubblicazione</label>
                        <input placeholder="Inserisci la data di pubblicazione" class="form-control">
                    </div>
                    <div class="mb-3">
                        <p>Sinossi</p>
                        <textarea placeholder="Inserisci la sinossi" name="" cols="70" rows="10"></textarea>
                    </div>

                    
                    <button type="submit" class="btn bntCreateLibri">Invio</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>