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
    {{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css"> --}}
    <link rel="stylesheet" href="{{ url('assets/css/style2.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/vip.min.css') }}">
</head>

<body>
    <div id="app">
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ url('assets/img/newlogo.png') }}" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse d-xl-flex  justify-content-sm-center "
                        id="navbarSupportedContent">
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Jobs</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Marketplace</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Suporte</a>
                            </li>

                            @if (auth()->user()->permission == 10)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.home') }}">Admin</a>
                            </li>
                            @endif

                            <li class="nav-item d-md-none mb-4 mt-2">
                                <a href="{{ route('logout') }}" class="nav-item btn-sair">Sair</a>

                            <li class="nav-item d-md-none">
                                <a href="{{ url('/vip') }}" class="nav-link btn-sair">VIP</a>
                            </li>
                            <li class="nav-item d-md-none">
                                <a href="{{ route('perfil') }}" class="nav-link btn-sair">Minha Conta</a>
                            </li>
                            {{-- <li class="nav-item d-md-none">
                                <a href="{{ route('logout') }}" class="nav-link btn-sair">Sair</a>

                            </li> --}}
                        </ul>
                        {{-- <div class="action d-none d-md-flex "></div> --}}
                    </div>

                    <div class="d-none d-xl-flex">
                        <a href="{{ url('/vip') }}" class="btn-vip" type="button">VIP</a>
                    </div>
                    <div class="perfil d-none d-md-flex">
                        <div class="dropdown">
                            <img src="https://ui-avatars.com/api/?size=512&amp;background=ffa800&amp;color=fff&amp;name={{ auth()->user()->name }}" alt="">
                            <div class="dropdown-content">
                                <a href="{{ route('perfil') }}">Minha Conta</a>
                                <a href="{{ route('logout') }}">Sair</a>

                            </div>

                        </div>
                        </a>
                        {{-- <a href="{{ route('logout') }}" class="btn-sair"><img
                                src="{{ url('assets/img/sair.png') }}" alt=""></a> --}}
                    </div>
                </nav>
            </div>
        </header>
        <div>

            @yield('content')
        </div>

        <footer class="text-center mb-5">
            <div class="text-center footer-logo">
                <a class="img-footer" href="https://simetria.studio/" target="_blank" loading="lazy">
                    <img src="{{ url('assets/img/footer-logo.png') }}" alt="">
                </a>
                <div class="text-center politicas">
                    <a href="/politicas" class="btn-politicas">POLÍTICAS</a>
                </div>
            </div>
        </footer>


        <script src="https://kit.fontawesome.com/e67788a73f.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
                integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
                integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
        </script>
        <script>
            setListeners();

            function setListeners() {
                let menus = document.querySelectorAll(".clps-button");
                for (let i = 0; i < menus.length; i++) {
                    menus.item(i).addEventListener("click", collapseToggle);
                }
            }

            function collapseToggle(evt) {
                if (evt.target.closest(".clps-menu").classList.contains("collapsed")) {
                    foldRecursively(evt.target.closest(".collapsed"));
                } else {
                    let collapsedSiblings = evt.target.closest(".clps-menu").parentNode.querySelector(".collapsed");
                    if (collapsedSiblings) {
                        foldRecursively(collapsedSiblings);
                    }
                    collapseElement(evt.target)
                }
            }

            function collapseElement(element) {
                let section = element.closest(".clps-menu").querySelector("ul");
                let numberBehind;
                let sectionHeight = section.scrollHeight;
                document.documentElement.style.setProperty(`--height-of-${element.closest(".clps-menu").classList[1]}`,
                    sectionHeight + "px");
                element.closest(".clps-menu").classList.add("collapsed");
            }

            function foldElement(element) {
                element.closest(".clps-menu").classList.remove("collapsed");
                document.documentElement.style.setProperty(`--height-of-${element.closest(".clps-menu").classList[1]}`, 0 +
                    "px");
            }

            function foldRecursively(element) {
                foldElement(element);
                if (element.querySelector(".collapsed")) {
                    foldRecursively(element.querySelector(".collapsed"));
                }
            }
        </script>
        <script src="{{ url('assets/js/script.js') }}"></script>
</body>


</html>
