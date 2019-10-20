<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>@yield('title')</title>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }
    </style>
</head>

<body>
    @section('navbar')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Equipamentos hospitalares</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/equipamentos">Equipamentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/equipamentostatus">Equipamentos Status</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/hospitais">Hospitais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/manutencoes">Manutencoes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/setores">Setores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tiposequipamentos">Tipos Equipamentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tiposmanutencoes">Tipos Manutenções</a>
                </li>
            </ul>
        </div>
    </nav>
    @show
    <div class="full-height">
        @yield('content')
    </div>
</body>

</html>