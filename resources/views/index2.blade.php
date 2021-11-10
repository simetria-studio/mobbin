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
    <link rel="stylesheet" href="{{ url('assets/css/style1.min.css') }}">
</head>

<body>
    <div class="container">
        <div class="mobbin">
            <div class="login">
                <div class="titulo">
                    <p>Registrar</p>
                </div>
                <div class="campo-login">
                    <div class="espacamento">
                        <form>
                            <h1>Crie sua conta</h1>
                            <section>
                                <div color="" class="email">
                                    <div>
                                        <div class="inputs">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 512 512" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                                                </path>
                                            </svg>
                                            <input name="email" type="text" id="email" aria-label="email"
                                                placeholder="Seu E-mail" autocomplete="off" value="">
                                        </div>
                                    </div>
                                </div>

                                <div color="" class="inputs">
                                    <div>
                                        <div class="sc-cTkOiY brFinj">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 448 512" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z">
                                                </path>
                                            </svg>
                                            <input name="name" type="text" id="name" aria-label="name"
                                                placeholder="Seu nome" autocomplete="off" value="">
                                        </div>
                                    </div>
                                </div>

                                <div color="" class="inputs">
                                    <div>
                                        <div class="sc-cTkOiY brFinj">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 448 512" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z">
                                                </path>
                                            </svg>
                                            <input name="password" type="password" id="password" aria-label="password"
                                                placeholder="Sua senha" autocomplete="off" value="">
                                            <a tabindex="-1" class="sc-fvFlmW hRHjch">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    viewBox="0 0 24 24" height="1em" width="1em"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div color="" class="inputs">
                                    <div>
                                        <div class="sc-cTkOiY brFinj">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 448 512" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z">
                                                </path>
                                            </svg>
                                            <input name="password_confirmation" type="password"
                                                id="password_confirmation" aria-label="password_confirmation"
                                                placeholder="Confirme sua senha" autocomplete="off" value="">
                                            <a tabindex="-1" class="sc-fvFlmW hRHjch">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    viewBox="0 0 24 24" height="1em" width="1em"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="sc-chCrNI Doxm">
                                <div>
                                    <div>
                                        <div style="width: 304px; height: 78px;">
                                            <div>
                                                <iframe title="reCAPTCHA"
                                                    src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Ld3D-AZAAAAADjGhx4XHv9kYSThpbwnVa68lfWw&amp;co=aHR0cHM6Ly9hcHAucm9ja2V0c2VhdC5jb20uYnI6NDQz&amp;hl=pt-BR&amp;type=image&amp;v=kcXVPRWG7fMILHmzon0--fD3&amp;theme=dark&amp;size=normal&amp;badge=bottomright&amp;cb=wllnfpb4dkx2"
                                                    width="304" height="78" role="presentation" name="a-3syq3vp0rpdx"
                                                    frameborder="0" scrolling="no"
                                                    sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                            </div>
                                            <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                                                class="g-recaptcha-response"
                                                style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;">
                                            </textarea>
                                        </div>
                                        <iframe style="display: none;"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="sc-kwWFPY PcCxl">Ao se registrar, você aceita nossos&nbsp;
                                <a target="_blank" rel="noopener noreferrer" href=""
                                    class="sc-kRGEVP sc-cNujqI cfYgHF">termos de uso</a>&nbsp;e a nossa&nbsp;
                                <a target="_blank" rel="noopener noreferrer" href=""
                                    class="sc-kRGEVP sc-cNujqI cfYgHF">política de privacidade</a>.
                            </div>
                            <button type="submit" font-size="16" class="btn-cadastrar">Cadastrar</button>
                        </form>
                    </div>
                </div>
                <div class="simetria">
                    <img src="{{ url('assets/img/simetria.png') }}" alt="">
                </div>
            </div>
            <div class="logo">
                <img src="{{ url('assets/img/logo.png') }}" alt="">
                <div class="registre">
                    Voltar para&nbsp; <br><a href="">Login</a>
                </div>
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
