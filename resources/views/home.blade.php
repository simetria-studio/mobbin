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
        <header>
            <div class="sc-jfJzZe dgjHqK">
                <div class="sc-fnlXYz gmzLtL">
                    <div class="logotipo">
                        <a href="/">
                            <img src="{{ url('assets/img/logo.png') }}" alt="">
                        </a>
                    </div>
                    <div class="sc-tkKAw iZDSzm">
                        <button class="sc-cHjxUU eMORyZ">
                            <div></div>
                        </button>
                        <nav class="sc-dRPiIx othOs">
                            <a aria-current="page" class="sc-hYZPRl bisXXO active" href="/dashboard">Home</a>
                            <a class="sc-hYZPRl bisXXO" href="">Minha Conta</a>
                            <a href="" class="sc-hYZPRl bisXXO">Meus Cursos</a>
                        </nav>
                    </div>

                    <div class="sair">
                        <div class="planos">
                            <a class="btn btn-primary">Planos</a>
                        </div>
                        <div class="sc-hFXnzx fjFzkC">
                            <button class="sc-iuAqxS cwUjYZ">
                                Sair
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </header>





        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
                integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
                integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
        </script>
</body>


</html>
