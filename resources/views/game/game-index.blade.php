<x-layout>


    <main class="container-fluid px-4">
        <div class="row vh-100 justify-content-center align-items-center">
            @foreach ($games as $game)
            <div class="col-2">
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
            @endforeach

            @if (session('success-edit'))
            <div class="alert alert-success fixed-bottom">
                {{ session('success-edit') }}
            </div>
            @endif
            @if (session('success-delete'))
            <div class="alert alert-success fixed-bottom">
                {{ session('success-delete') }}
            </div>
            @endif
        </div>
    </main>
</x-layout>