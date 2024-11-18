<x-layout>
    <div class="container-fluid">
        <div class="row vh-custom align-items-center justify-content-center">

            <div class="col-12">
                <h1 class="text-center size-custom">Dashboard di {{Auth::user()->name}}</h1>
            </div>

        </div>

            <div class="row my-5 px-3">
                @forelse (Auth::user()->games as $game)
                    <div class="col-2 my-2">
                        <div class="card-lista border-0 rounded-4">
                            <div class="card-inner p-0">
                                <div class="card-front " style="background: url({{Storage::url($game->cover)}})">
                                    {{-- <img class="img-card-custom" src="{{Storage::url($game->cover)}}" alt=""> --}}
                                </div>
                                <div class="card-back rounded-4">
                                    <h3 class="fs-4">{{$game->title}}</h3>
                                    <p class="fs-6">Prezzo: {{$game->price}}$</p>
                                    <a class="btn btn-outline-light w-50 " href="{{route('game.show', $game)}}">Scopri di più</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                <div class="row justify-content-center">
                    <div class="col-5 d-flex flex-column align-items-center">
                        <h3>Non c'è nessun gioco registrato a tuo nome.</h3>
                        <a class="btn btn-dark" href="{{route('showpage')}}">Aggiungi subito il tuo primo gioco</a>
                    </div>
                </div>
                @endforelse
            </div>
    </div>
</x-layout>