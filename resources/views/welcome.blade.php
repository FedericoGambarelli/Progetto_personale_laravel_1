<x-layout>

    <header class="header-home ">
        <h1 class="titolo">Arcade.com</h1>
    </header>

    <main class="container-fluid">
        <div class="row justify-content-evenly my-5">
            <div class="col-3">
                <div class="card border-0" >
                    <img src="/media/add.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Aggiungi il tuo gioco preferito</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        @auth
                        <a href="{{route('showpage')}}" class="btn btn-outline-dark">Go somewhere</a>
                        @endauth
                        @guest
                        <a href="{{route('showpage')}}" class="btn btn-outline-dark disabled">Go somewhere</a>
                        @endguest
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card border-0" >
                    <img src="/media/lista.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Scopri nuovi giochi</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{route('game.index')}}" class="btn btn-outline-dark">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-4 text-end">
                <h2 class="fw-bold fs-1">Chi siamo</h2>
                <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit magnam doloremque, rem nesciunt harum odit sit distinctio quasi autem in ipsam? Perferendis aspernatur tempore repellendus error optio in dicta non libero tempora at eveniet quia porro et iure minus dolorem, cupiditate commodi ratione esse. Rerum obcaecati inventore ipsa quod magnam ut eligendi architecto, autem esse sequi nisi molestias beatae voluptatibus tempora, nostrum atque fugiat deleniti placeat, minima praesentium pariatur maxime voluptas! Laborum maxime iure, voluptatibus deserunt, delectus rerum obcaecati nulla repudiandae nemo, accusantium ab corrupti. Impedit dolorem eveniet perspiciatis, voluptas quidem et possimus, sequi maiores nisi neque vero quibusdam quod./p>
                </div>
            </div>
            @if (session('success'))
            <div class="alert alert-success fixed-bottom">
                {{ session('success') }}
            </div>
            @endif
            @if (session('success-confirmation'))
            <div class="alert alert-success fixed-bottom">
                {{ session('success-confirmation') }}
            </div>
            @endif
        </main>
    </x-layout>