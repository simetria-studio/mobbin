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
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ url('assets/img/newlogo.png') }}" alt="">
                    </a>
                    <button class="navbar-toggler menu-m" type="button" data-bs-toggle="collapse"
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
                            <img src="https://ui-avatars.com/api/?size=512&amp;background=ffa800&amp;color=fff&amp;name={{ auth()->user()->name }}"
                                alt="">
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
            <div class="mobile">
                <div class="mainContainer">
                    <header>
                        <a href="" class="close d-none">
                            x
                        </a>
                        <nav class="mainMenu">
                            <ul>
                                <li>
                                    <a href="{{ route('perfil') }}">Perfil</a>
                                </li>
                                <li>
                                    <a href="#">Jobs</a>
                                </li>
                                <li>
                                    <a href="#">Marketplace</a>
                                </li>
                                <li>
                                    <a href="#">Suporte</a>
                                </li>
                                <li>
                                    <a href="#">VIP</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" class="suBtn">Sair</a>
                                </li>
                            </ul>
                        </nav>
                    </header>
                    <div class="container">
                    </div>
                    <footer>
                    </footer>
                </div>
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
        <menu class="menu d-sm-none">

            <button class="menu__item  menuBtn" style="--bgColorItem: #ff8c00;">
                <svg class="icon" viewBox="0 0 24 24">
                    <path d="M3.8,6.6h16.4" />
                    <path d="M20.2,12.1H3.8" />
                    <path d="M3.8,17.5h16.4" />
                </svg>
            </button>

            <button class="menu__item" style="--bgColorItem: #f54888;">
                <svg class="icon" viewBox="0 0 24 24">
                    <path d="M6.7,4.8h10.7c0.3,0,0.6,0.2,0.7,0.5l2.8,7.3c0,0.1,0,0.2,0,0.3v5.6c0,0.4-0.4,0.8-0.8,0.8H3.8
                C3.4,19.3,3,19,3,18.5v-5.6c0-0.1,0-0.2,0.1-0.3L6,5.3C6.1,5,6.4,4.8,6.7,4.8z" />
                    <path d="M3.4,12.9H8l1.6,2.8h4.9l1.5-2.8h4.6" />
                </svg>
            </button>

            <button class="menu__item active" style="--bgColorItem: #4343f5;" onclick="home()">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="24" height="24"
                viewBox="0 0 24 24"
                style=" fill:#000000;"><path d="M 12 2.0996094 L 1 12 L 4 12 L 4 21 L 11 21 L 11 15 L 13 15 L 13 21 L 20 21 L 20 12 L 23 12 L 12 2.0996094 z M 12 4.7910156 L 18 10.191406 L 18 11 L 18 19 L 15 19 L 15 13 L 9 13 L 9 19 L 6 19 L 6 10.191406 L 12 4.7910156 z"></path></svg>
            </button>

            <button class="menu__item" style="--bgColorItem: #e0b115;">
                <svg class="icon" viewBox="0 0 24 24">
                    <path d="M5.1,3.9h13.9c0.6,0,1.2,0.5,1.2,1.2v13.9c0,0.6-0.5,1.2-1.2,1.2H5.1c-0.6,0-1.2-0.5-1.2-1.2V5.1
                  C3.9,4.4,4.4,3.9,5.1,3.9z" />
                    <path d="M4.2,9.3h15.6" />
                    <path d="M9.1,9.5v10.3" />
                </svg>
            </button>

            <button class="menu__item" style="--bgColorItem:#65ddb7;">
                <svg class="icon" viewBox="0 0 24 24">
                    <path d="M5.1,3.9h13.9c0.6,0,1.2,0.5,1.2,1.2v13.9c0,0.6-0.5,1.2-1.2,1.2H5.1c-0.6,0-1.2-0.5-1.2-1.2V5.1
                  C3.9,4.4,4.4,3.9,5.1,3.9z" />
                    <path d="M5.5,20l9.9-9.9l4.7,4.7" />
                    <path
                        d="M10.4,8.8c0,0.9-0.7,1.6-1.6,1.6c-0.9,0-1.6-0.7-1.6-1.6C7.3,8,8,7.3,8.9,7.3C9.7,7.3,10.4,8,10.4,8.8z" />
                </svg>
            </button>

            <div class="menu__border"></div>

        </menu>

        <div class="svg-container">
            <svg viewBox="0 0 202.9 45.5">
                <clipPath id="menu" clipPathUnits="objectBoundingBox"
                    transform="scale(0.0049285362247413 0.021978021978022)">
                    <path d="M6.7,45.5c5.7,0.1,14.1-0.4,23.3-4c5.7-2.3,9.9-5,18.1-10.5c10.7-7.1,11.8-9.2,20.6-14.3c5-2.9,9.2-5.2,15.2-7
                  c7.1-2.1,13.3-2.3,17.6-2.1c4.2-0.2,10.5,0.1,17.6,2.1c6.1,1.8,10.2,4.1,15.2,7c8.8,5,9.9,7.1,20.6,14.3c8.3,5.5,12.4,8.2,18.1,10.5
                  c9.2,3.6,17.6,4.2,23.3,4H6.7z" />
                </clipPath>
            </svg>
        </div>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/e67788a73f.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
                integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
                integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
        </script>
        <script src="{{ url('assets/js/menu.js') }}"></script>
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
            $(document).ready(function() {
                // menu click event
                $('.menuBtn').click(function() {
                    $(this).toggleClass('act');
                    if ($(this).hasClass('act')) {
                        $('.mainMenu').addClass('act');
                        $('.close').removeClass('d-none');
                    } else {
                        $('.mainMenu').removeClass('act');
                        $('.close').addClass('d-none');
                    }
                });
            });
        </script>
        <script src="{{ url('assets/js/script.js') }}"></script>
</body>


</html>
