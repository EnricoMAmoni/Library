<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
      <a class="navbar-brand" href="{{route('welcome')}}"><i class="bi bi-book mx-2"></i></a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item mx-2">
          <a class="nav-link" aria-current="page" href="{{route('welcome')}}">Home</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="{{route('indexLibri')}}">Catalogo Libri</a>
        </li>
        
        @guest
        <li>
          <div class="dropdown dropstart">
            <a class="bi bi-person-circle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
              <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
            </ul>
          </div>
          
        </li>
        @else
          <li>
            <a class="nav-link" href="{{route('createLibri')}}">Inserisci Libri</a>
          </li>
        
        <li>
          <a class="nav-link" href="{{route('logout')}}" 
           onclick="event.preventDefault(); 
           document.getElementById('logout-form').submit();">Logout
          </a>
          <form method="POST" class="d-none" id="logout-form" action="{{ route('logout') }}">
            @csrf
          </form>
        </li>
        <li>
          <a class="nav-link userPageLink" href="{{route('userPage')}}">Benvenuto {{Auth::user()->name}}</a>
        </li>
        @endguest
    
    </ul>
  </div>
</div>
</nav>