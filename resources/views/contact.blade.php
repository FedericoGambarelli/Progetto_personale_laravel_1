<x-layout>
    <header class="header-create">
        <section class="container-fluid">
            <div class="row my-5 justify-content-center align-items-center">
                <div class="col-6">
                    @auth
                    <form class="background-form" action="{{route('confirmation')}}" method="POST">
                        @csrf
                        <h1 class="titolo-dettaglio text-center">Contattaci</h1>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Indirizzo E-mail</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{Auth::user()->email}}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Messaggio</label>
                            <textarea class="form-control" name="messaggio" id="message" cols="50" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-dark">Invia</button>
                    </form>
                    @endauth
                    @guest
                    <form class="background-form" action="{{route('confirmation')}}" method="POST">
                        @csrf
                        <h1 class="titolo-dettaglio text-center">Contattaci</h1>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Indirizzo E-mail</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Messaggio</label>
                            <textarea class="form-control" name="messaggio" id="message" cols="50" rows="5"></textarea>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <button type="submit" class="btn btn-outline-dark">Invia</button>
                    </form>
                    @endguest
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
</x-layout>