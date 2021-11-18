<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mobbin</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/style2.min.css') }}">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ url('assets/img/logo.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Minha Conta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Meus Cursos</a>
                        </li>
                    </ul>
                    <button class="btn-planos">AREA VIP</button>
                    <a href="{{ route('logout') }}"><button class="btn-sair"><img src="{{ url('assets/img/sair.png') }}" alt=""> Sair</button></a>
                </div>
            </div>
        </nav>
        <div class="espacamento">
            <div class="ola">
                <div class="nome-usuario">
                    <p>Olá, {{ auth()->user()->name }}</p>
                </div>
                <div class="anuncio ">
                    <div class="d-flex item">
                        <img src="{{ url("assets/img/curso.png") }}" alt="">
                        <p>CURSO <br> WORDPRESS <br> MOBILE FIRST </p>
                    </div>
                    <div class="dois-ponto-zero">
                        <p>2.0</p>
                    </div>
                </div>
            </div>
            <div class="grid-template">
                <div class="card">
                    <a href="">
                        <div class="card-image">
                            <img src="{{ url("assets/img/sprite.png") }}" alt="">
                        </div>
                        <div class="frame"></div>
                        <div class="pagina">
                            <p>CURSO <br> WORDPRESS</p>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="">
                        <div class="card-image">
                            <img src="{{ url("assets/img/sprite2.png") }}" alt="">
                        </div>
                        <div class="frame"></div>
                        <div class="pagina">
                            <p>LAYOUTS E <br> TEMPLATES</p>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="">
                        <div class="card-image">
                            <img src="{{ url("assets/img/sprite3.png") }}" alt="">
                        </div>
                        <div class="frame"></div>
                        <div class="pagina">
                            <p>REVIEW DE <br> PLUGINS</p>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="">
                        <div class="card-image">
                            <img src="{{ url("assets/img/sprite4.png") }}" alt="">
                        </div>
                        <div class="frame"></div>
                        <div class="pagina">
                            <p>SUPORTE <br> TÉCNICO</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="text-center mb-5">
                <img src="{{ url("assets/img/simetria.png") }}" alt="">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>


</html>
