<nav class="navbar navbar-expand-lg bg-body-tertiary ">
  <div class="container-fluid">
            <a class="navbar-brand " href="/"><img class="image" src="{{ asset('img/LOGO.png') }}"  style="width: 250px;" alt="Mineblast Image"/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
                <span><img class="image" src="{{ asset('img/menu-bar.png') }}"  style="width: 40px;" alt="Mineblast Image"/></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"style="margin-left: 3rem;" >
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto fw-bold">
                        <li class="nav-item">
                        <a class="nav-link active pr-5 " aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                    
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle pr-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item " href="{{ route('courses') }}" style="font-size: 1.2em;">Introduction</a></li>
                            <li><a class="dropdown-item" href="{{ route('minequiz') }}"style="font-size: 1.2em;">Test Your Knowledge</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('dashboard') }}"style="font-size: 1.2em;">DashBoard</a></li>
                            <li><a class="dropdown-item" href="#"style="font-size: 1.2em;">Glossary</a></li>
                        </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link pr-5" href="{{ route('about') }}">About</a> </li>
                        <li class="nav-item"><a class="nav-link pr-5" href="#">References</a> </li>
                        <li class="nav-item"><a class="nav-link pr-5" href="{{ route('ulogout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a> </li>
                        
                    </ul>
            
             </div>
            
  </div>
  <form id="logout-form" action="{{ route('ulogout') }}" method="POST" style="display: none;">
    @csrf
</form>
</nav>