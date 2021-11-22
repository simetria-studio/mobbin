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
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ url('assets/img/logo.png') }}" alt="">
                </a>
                
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
<<<<<<< HEAD
                    <a href="{{ url('/vip') }}" class="btn-planos">AREA VIP</a>
                    <a href="{{ route('logout') }}"><button class="btn-sair"><img
                                src="{{ url('assets/img/sair.png') }}" alt=""> Sair</button></a>
=======
                <a href="/vip" class="btn-planos">AREA VIP</a>

                    <div class=" logout">
                        <a href="{{ route('logout') }}" class="btn-sair">
                            <img width="79" height="34" src="{{ url('assets/img/sair.png') }}" alt="">
                        </a>
                    </div>
>>>>>>> main
                </div>
            </div>
        </nav>
        <div>
            {{-- <div class="text-center mt-5 d-lg-none">
                <button class="btn-planos">AREA VIP</button>
            </div> --}}
<<<<<<< HEAD


            @yield('content')
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
=======
            @yield('content')
        </div>
        <footer class="text-center mb-5">
            <div class="text-center footer-logo">
                <a class="img-footer" href="https://simetria.studio/" target="_blank" loading="lazy">
                    <img src="{{ url('assets/img/footer-logo.png') }}" alt="">
                </a>
                <div class="text-center politicas">
                    <a href="" class="btn-politicas">POLÍTICAS</a>
                </div>
            </div>
        </footer>


>>>>>>> main
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
