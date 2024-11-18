<x-layout>
    @auth
        <header class="header-edit" style="background: url({{Storage::url($game->cover)}})">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <main class="container-fluid">
                <div class="row vh-100 justify-content-center align-items-center">
                    <div class="col-6">
                        <form class="background-form" action="{{route('game.update', $game)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="title" class="form-label">Titolo</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{$game->title}}">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Prezzo</label>
                                <input type="text" class="form-control" id="price" name="price" value="{{$game->price}}">
                            </div>
                            <div class="mb-3">
                                <div>
                                    <p>Copertina attuale: </p>
                                    <img class="img-fluid" src="{{Storage::url($game->cover)}}" alt="">
                                </div>
                                <label for="cover" class="form-label">Copertina</label>
                                <input type="file" class="form-control" id="cover" name="cover">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Descrizione</label>
                                <textarea class="form-control" name="description" id="description" cols="50" rows="10">{{$game->description}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-outline-dark">Modifica</button>
                        </form>
                    </div>
                </div>
            </main>
        </header>
    @endauth
    @guest
    <div class="vh-100 d-flex align-items-center justify-content-center">
        <h3 class="fs-1">Non hai accesso a questa funzionalità</h3>
    </div>
    @endguest
</x-layout>