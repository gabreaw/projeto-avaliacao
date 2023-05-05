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
    <title>Document</title>
</head>
<body>
<div class="container">
    <table class="table">
        <tr class="evaluation-row">
            <td colspan="3">
                {{ $evaluations->name }}
            </td>


        <tr>
            <thead>
            <tr>
                <th>Dados</th>
                <th>Notas</th>
                <th>Justificativa</th>
            </tr>
            </thead>

            <td class="mb-0">Nota Trabalho em Equipe</td>
            <td>
                {{ $evaluations->score_work }}
            </td>
            <td>
                {{ $evaluations->justification_work }}
            </td>

        </tr>
        <tr class="tr">
            <td>Nota Proatividade</td>
            <td>
                {{ $evaluations->score_proactivity }}
            </td>
            <td>
                {{ $evaluations->justification_proactivity }}
            </td>
        </tr>
        <tr class="tr">
            <td>Nota Responsabilidade</td>
            <td>
                {{ $evaluations->score_responsibility }}
            </td>
            <td>
                {{ $evaluations->justification_responsibility }}
            </td>
        </tr>
        <tr class="tr">
            <td>Nota Criatividade</td>
            <td>
                {{ $evaluations->score_creative }}
            </td>
            <td>
                {{ $evaluations->justification_creative }}
            </td>
        </tr>
        <tr class="tr">
            <td>Nota Comunicação</td>
            <td>
                {{ $evaluations->score_communication }}
            </td>
            <td>
                {{ $evaluations->justification_communication }}
            </td>
        </tr>
        <tr class="tr">
            <td>Nota Pontualidade</td>
            <td>
                {{ $evaluations->score_punctuality }}
            </td>
            <td>
                {{ $evaluations->justification_punctuality }}
            </td>
        </tr>
        <tr class="tr">
            <td>Nota Comportamento</td>
            <td>
                {{ $evaluations->score_behavior }}
            </td>
            <td>
                {{ $evaluations->justification_behavior }}
            </td>
        </tr>
        <tr class="tr">
            <td>Nota Domínio Técnico</td>
            <td>
                {{ $evaluations->score_technique }}
            </td>
            <td>
                {{ $evaluations->justification_technique }}
            </td>
        </tr>
        <tr class="tr">
            <td>Nota Melhorias</td>
            <td>
                {{ $evaluations->score_improvement }}
            </td>
            <td>
                {{ $evaluations->justification_improvement }}
            </td>
        </tr>
        <tr class="tr">
            <td>Ponto Avaliado Pelo Gestor/Líder</td>
            <td>
                {{ $evaluations->score_leader }}
            </td>
            <td class="tra">
                {{ $evaluations->justification_leader }}
            </td>
        </tr>

    </table>
    <td>
        <a class="btn btn-secondary" href="{{ route('evaluation.index')}}">Voltar</a>
    </td>

</div>

</body>
</html>
