<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="../../css/app.scss">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Notas</title>
</head>
<body>
<header>
    <h1>
        Destaque do Trimestre
    </h1>
</header>
<x-menu></x-menu>

<div class="container">
    @isset($successMessage)
        <div class="alert alert-success">
            {{$successMessage}}
        </div>
    @endisset
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <table class="table">

        <tr class="evaluation-row">
            <thead>
            <td>
                Nome
            </td>
            <td>
                Nota 1
            </td>
            <td>
                Nota 2
            </td>
            <td>
                Nota 3
            </td>
            <td>
                Nota 4
            </td>
            <td>
                Nota 5
            </td>
            <td>
                Nota 6
            </td>
            <td>
                Nota 7
            </td>
            <td>
                Nota 8
            </td>
            <td>
                Nota 9
            </td>
            <td>
                Nota 10
            </td>
            </thead>
            @foreach($evaluations as $evaluation)

                <td id="namer">
                    {{ $evaluation->name }}
                </td>

                <td>
                    {{ $evaluation->score_work }}
                </td>
                <td>
                    {{ $evaluation->score_proactivity }}
                </td>
                <td>
                    {{ $evaluation->score_responsibility }}
                </td>
                <td>
                    {{ $evaluation->score_creative }}
                </td>
                <td>
                    {{ $evaluation->score_communication }}
                </td>
                <td>
                    {{ $evaluation->score_punctuality }}
                </td>
                <td>
                    {{ $evaluation->score_behavior }}
                </td>
                <td>
                    {{ $evaluation->score_technique }}
                </td>
                <td>
                    {{ $evaluation->score_improvement }}
                </td>
                <td>
                    {{ $evaluation->score_leader }}
                </td>
                <td>

                    <a class="btn" href="{{ route('evaluation.show', $evaluation->id) }}">Ver Mais</a>

                </td>
        </tr>
        @endforeach
    </table>
</div>


</body>
</html>
