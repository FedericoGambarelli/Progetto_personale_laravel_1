<x-layout>
    <header class="header-create">
        <section class="container-fluid">
            <div class="row my-5 justify-content-center align-items-center">
                <div class="col-6">
                    <form class="background-form" action="{{route('register')}}" method="POST">
                        @csrf
                        <h1 class="titolo-dettaglio text-center">Registrati</h1>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Indirizzo E-mail</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Conferma la password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
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
                        <button type="submit" class="btn btn-outline-dark">Registrati</button>
                    </form>
                </div>
            </div>
        </section>
    </header>
</x-layout>