<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <header>
        <h1>IDEAL TRENDS - TESTE TÉCNICO</h1>
    </header>
    <main>
        <section>
            <h2>Listagem de usuários</h2>
            <form action="" method="GET">
                <input class="input-control" type="text" name="email" id="email" placeholder="Digite o e-mail">
                <button type="submit">Pesquisar</button>
            </form>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{$user->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links('pagination::bootstrap-4') }}
        </section>


    </main>


</body>

</html>