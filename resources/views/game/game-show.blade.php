<x-layout>
    <section class="container-fluid">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-10">
                <h1 class="titolo-dettaglio text-center">{{$game->title}}</h1>
            </div>
            <div class="col-5">
                <img class="img-fluid" src="{{Storage::url($game->cover)}}" alt="">
            </div>
            <div class="col-5">
                <p class="fs-5">Descrizione: <br> {{$game->description}}</p>
                <p>Creato da: {{$game->user->name}}</p>
                <div class="d-flex gap-2">
                    @auth
                        @if ($game->user_id == Auth::id() || Auth::user()->admin == true)
                        <a class="btn btn-warning" href="{{route('game.edit', $game)}}">Modifica</a>
                        <form action="{{route('game.destroy', $game)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Elimina</button>
                        </form>
                        @endauth
                    @endif
                    <a class="btn btn-dark ms-auto" href="{{route('game.index')}}">Torna alla lista</a>
                </div>
            </div>
        </div>
    </section>
</x-layout>