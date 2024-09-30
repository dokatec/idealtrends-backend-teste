<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <header>
        <h1>IDEAL TRENDS - TESTE TÉCNICO</h1>
    </header>
    <main>
        <section>
            <h2>Listagem de usuários por email</h2>
            @foreach ($usuarios as $usuario)
                <p>{{ $usuario->name }} - {{ $usuario->email }}</p>
            @endforeach
        </section>
    </main>


</body>

</html>