<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Richiesta assistenza</h1>
    <h2>Riepilogo:</h2>
    @auth
        <p>Utente registrato: si</p>
    @endauth
    @guest
        <p>Utente registrato: no</p>
    @endguest
    <p>Nome: {{$name}}</p>
    <p>E-mail: {{$email}}</p>
    <p>Messaggio: {{$messaggio}}</p>
</body>
</html>