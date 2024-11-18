<nav class="navbar navbar-expand-lg bg-navbar fixed-top shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-joystick" viewBox="0 0 16 16">
                <path d="M10 2a2 2 0 0 1-1.5 1.937v5.087c.863.083 1.5.377 1.5.726 0 .414-.895.75-2 .75s-2-.336-2-.75c0-.35.637-.643 1.5-.726V3.937A2 2 0 1 1 10 2"/>
                <path d="M0 9.665v1.717a1 1 0 0 0 .553.894l6.553 3.277a2 2 0 0 0 1.788 0l6.553-3.277a1 1 0 0 0 .553-.894V9.665c0-.1-.06-.19-.152-.23L9.5 6.715v.993l5.227 2.178a.125.125 0 0 1 .001.23l-5.94 2.546a2 2 0 0 1-1.576 0l-5.94-2.546a.125.125 0 0 1 .001-.23L6.5 7.708l-.013-.988L.152 9.435a.25.25 0 0 0-.152.23"/>
            </svg>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @auth
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active fw-bold" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{route('contatti')}}">Contatti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{route('showpage')}}">Nuovo Gioco</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{route('game.index')}}">Lista Giochi</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link fw-bold dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Ciao {{Auth::user()->name}}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="{{route('dashboard')}}">Dashboard</a></li>
                        <li>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
        @endauth
        @guest
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active fw-bold" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{route('contatti')}}">Contatti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold disabled" href="{{route('showpage')}}">Nuovo Gioco</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{route('game.index')}}">Lista Giochi</a>
                </li>
            <li class="nav-item dropdown">
                <button class="nav-link fw-bold dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Ciao Ospite
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                    <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                </ul>
            </li>
        @endguest
            </ul>
        </div>
    </div>
</nav>