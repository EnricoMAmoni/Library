<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 col-lg-4">
                <h1>Accedi</h1>
                <form method="POST" action="{{route('login')}}">
                    @csrf
                  
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    
                
                   
                    <button type="submit" class="btn btn-primary">Accedi</button>
                    
                    <a href="./register">Oppure Registrati</a>
                </form>
            </div>
        </div>
    </div>
</x-layout>