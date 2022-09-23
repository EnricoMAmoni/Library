<x-layout>
    <h1>La nostra libreria</h1>
    <!-- @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif -->

    
    @if(Auth::check())
    <p>{{Auth::user()->name}} crea la tua libreria</p>
    @endif

    <!-- @if (session('message'))
        <div class="alert alert-warning">
            {{ session('message') }}
        </div>
        @endif -->
        
</x-layout>