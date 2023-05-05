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
    <title>Avaliação</title>
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
    <form action="{{ route('evaluation.store') }}" method="post">
        @csrf
        <table class="table">
            <thead>
            <tr>
                <th>Dados</th>
                <th>Notas</th>
                <th>Justificativa</th>
            </tr>
            </thead>
            <tr>
                <td>Setor:</td>
                    <td>
                    <select name="sector_id" id=sel" class="form-select" >
                        @foreach($sectors as $sector)
                            <option value="{{ $sector->id }}">{{ $sector->sector }}</option>
                        @endforeach
                    </select>
                    </td>
                <td> {{-- Ajeitando a table --}} </td>
            </tr>
            <tr>
                <td >Nome do Colaborador:</td>
                <td><input type="text" id="name" class="form-control" name="name">
                </td>
                <td> {{-- Ajeitando a table --}}  </td>
            </tr>
            <x-inputs class="text-center" title="Trabalho em Equipe" idNota="score_work" name="score_work" nameJ="justification_work"
                      tooltips="Consegue colaborar em atividades que envolvam mais de uma pessoa de forma produtiva e respeitosa desenvolvendo boa relação com os colegas?"
            ></x-inputs>

            <x-inputs title="Proatividade" idNota="score_proactivity" name="score_proactivity"
                      nameJ="justification_proactivity"
                      tooltips="O que se dispõem a fazer além do esperado, sempre pronta a resolver problemas e assumir a responsabilidade sobre suas ações. Busca pelo aperfeiçoamento do seu trabalho além do comum."
            ></x-inputs>

            <x-inputs title="Responsabilidade" idNota="score_responsibility" name="score_responsibility"
                      nameJ="justification_responsibility"
                      tooltips="O colaborador é responsável em relação ao cumprimento dos combinados, regras e procedimentos adotados pela empresa?"
            ></x-inputs>

            <x-inputs title="Criatividade" idNota="score_creative" name="score_creative" nameJ="justification_creative"
                      tooltips="O colaborador tem a habilidade de pensar sobre uma tarefa ou problema de uma maneira nova ou diferente, ou a habilidade de usar a imaginação para gerar novas ideias. "
            ></x-inputs>

            <x-inputs title="Comunicação" idNota="score_communication" name="score_communication"
                      nameJ="justification_communication"
                      tooltips="A comunicação entre colaborador e gestor é muito importante para que o trabalho flua da melhor forma possível. O colaborador se comunica sempre que tem um problema, não gosta de alguma situação ou deseja dar alguma sugestão?"
            ></x-inputs>

            <x-inputs title="Pontualidade" idNota="score_punctuality" name="score_punctuality"
                      nameJ="justification_punctuality"
                      tooltips="Consegue cumprir com regularidade a sua carga horária. Realiza os compromissos e afazeres dentro do prazo estipulado."
            ></x-inputs>

            <x-inputs title="Comportamento" idNota="score_behavior" name="score_behavior" nameJ="justification_behavior"
                      tooltips="Comportamento ético, respeitoso (a) sabe escutar e procura entender a situação como todo buscando ter um olhar respeitoso a si mesmo, aos colegas e clientes.        "
            ></x-inputs>

            <x-inputs title="Domínio Técnico" idNota="score_technique" name="score_technique"
                      nameJ="justification_technique"
                      tooltips="Tem domínio técnico das suas atividades, conhece bem as plataformas/ferramentas que utiliza. O colaborador realiza cursos EaD que são oferecido pela empresa para aperfeiçoar o seu conhecimento."
            ></x-inputs>

            <x-inputs title="Melhorias" idNota="score_improvement" name="score_improvement"
                      nameJ="justification_improvement"
                      tooltips="Melhorias desde a última avaliação de desempenho individual ou do último feedback."
            ></x-inputs>

            <tr>
                <td>
                    <button type="button" class="" data-toggle="tooltip" data-placement="top"
                            title="Esta opção é para o gestor/líder definir algum ponto que é essencial avaliar no setor.">
                        Ponto Avaliado Pelo Gestor/Líder
                    </button>
                </td>
                <td><input type="number" class="form-control" name="score_leader" id="score_leader"
                           placeholder="0 - 100" min="0"
                           max="100">
                </td>
                <td>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Escreva sua justificativa aqui" required
                                  name="justification_leader" id="justification"></textarea>
                        <label for="justification">Justificativa</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>Total</td>
                <td>
                    <label id="result">0</label>
                </td>
                <td>
                    <button class="btn btn-light">
                            Enviar!
                    </button>
                </td>
            </tr>
        </table>
    </form>

</div>
<script>

    window.addEventListener("DOMContentLoaded", (event) => {
        const score_work = document.getElementById('score_work');
        const score_proactivity = document.getElementById('score_proactivity');
        const score_responsibility = document.getElementById('score_responsibility');
        const score_creative = document.getElementById('score_creative');
        const score_communication = document.getElementById('score_communication');
        const score_punctuality = document.getElementById('score_punctuality');
        const score_behavior = document.getElementById('score_behavior');
        const score_technique = document.getElementById('score_technique');
        const score_improvement = document.getElementById('score_improvement');
        const score_leader = document.getElementById('score_leader');
        const btn = document.getElementById('btn');
        const result = document.getElementById('result');

        let elem = [score_work, score_proactivity, score_responsibility, score_creative, score_communication,
            score_punctuality, score_behavior, score_technique, score_improvement, score_leader];
        const changeEl = () => {
            let total = 0
            elem.forEach(input => {

                let inputValue = 0;

                if (parseInt(input.value) > 0) {
                    inputValue = parseInt(input.value)
                }
                total += inputValue;


            })
            result.textContent = total / 10;
        }

        elem.forEach(elem => {
            elem.addEventListener("change", changeEl)
        })

        // }


    });
</script>
<script src="../../js/app.js"></script>
</body>
</html>
