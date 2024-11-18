<x-layout>
    @auth
        <header class="header-create">
            <section class="container-fluid">
                <div class="row my-5 justify-content-center align-items-center">
                    <div class="col-6">
                        <form class="background-form" action="{{route('addgame')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h1 class="titolo-dettaglio">Aggiungi il tuo gioco</h1>
                            <div class="mb-3">
                                <label for="title" class="form-label">Titolo</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Prezzo</label>
                                <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}">
                            </div>
                            <div class="mb-3">
                                <label for="cover" class="form-label">Copertina</label>
                                <input type="file" class="form-control" id="cover" name="cover">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Descrizione</label>
                                <textarea class="form-control" name="description" id="description" cols="50" rows="10">{{old('description')}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-outline-dark">Aggiungi</button>
                        </form>
                    </div>
                </div>
            </section>
        </header>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    @endauth
    @guest
        <div class="vh-100 d-flex align-items-center justify-content-center">
            <h3 class="fs-1">Non hai accesso a questa funzionalità</h3>
        </div>
    @endguest
</x-layout>