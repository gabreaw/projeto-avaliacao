<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/app.scss">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Criar Setor</title>
</head>
<body>
<header>
    <h1>
        Destaque do Trimestre
    </h1>
</header>
<x-menu></x-menu>
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('sector.store') }}" method="post">
        @csrf
        <input type="text" class="form-control" name="sector" id="sector">
        <br>
        <button class="btn btn-success" type="submit">Criar</button>
    </form>
</div>
</body>
</html>
