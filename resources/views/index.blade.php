<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/app.scss">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Página Inicial</title>
</head>
<body>

<header>
    <h1>Página Inicial</h1>
</header>
<div class="container">
        <h1>O que deseja acessar?</h1>
        <hr>
        <a class="btn btn-outline-dark btn-block mb-2" href="{{ route('evaluation.create') }}">Cadastrar uma Nota</a>
        <a class="btn btn-outline-dark btn-block mb-2" href="{{ route('evaluation.index') }}">Visualizar as Notas</a>
        <a class="btn btn-outline-dark btn-block mb-2" href="{{ route('sector.index') }}">Listagem de Setores</a>
        <a class="btn btn-outline-dark btn-block mb-2" href="{{ route('sector.create') }}">Criar um Setor</a>
</div>
</body>
</html>
