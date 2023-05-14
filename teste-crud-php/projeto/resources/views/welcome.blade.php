<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="antialiased">
    @foreach ($pessoas as $pessoa)
    <div>{{ $pessoa->nome }}</div>
    <div>{{ $pessoa->sobrenome }}</div>
    <div>{{ $pessoa->cpf }}</div>
    <form action="/pessoa/delete/{{ $pessoa->id }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-primary">excluir</button>
    </form>
    @endforeach
</body>

</html>
