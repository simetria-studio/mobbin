@extends('layouts.auth')
@section('container')
    <div class="container">
        <div class="mobbin">
            <div class="logo">
                <div class="logotipo">
                    <img src="{{ url('assets/img/newlogo.png') }}" alt="">
                </div>
                <div class="registre">
                    Não tem cadastro?&nbsp; <br><a href="{{ url('registro') }}">Registrar-se</a>
                </div>
            </div>
            <div class="login">
                <div class="titulo">
                    <p>Login</p>
                </div>
                <div class="campo-login">
                    <div class="espacamento">
                        <form id="form-login"  action="{{route('login')}}" method="post">
                            @csrf
                            <section>
                                <div class="email mb-2">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                                        </path>
                                    </svg>
                                    <input name="email" type="text" id="email" aria-label="email" placeholder="E-mail">
                                </div>
                                <div class="senha">
                                    <svg class="cadeado" stroke="currentColor" fill="currentColor"
                                        stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z">
                                        </path>
                                    </svg>
                                    <input name="password" type="password" id="password" aria-label="password"
                                        placeholder="Senha" autocomplete="off">
                                    <a class="zoio" tabindex="-1" id="zoio">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 24 24" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </section>
                            <a class="forgot" href="{{ route('forget.password.get') }}">Esqueci minha senha</a>
                            <button class="btn-entrar mt-3" type="button" id="btn-login" font-size="16">Entrar</button>
                            <div class="naotem">
                                Não tem uma conta?&nbsp;<a href="{{ url('registro') }}">Registre-se</a>
                            </div>
                            <div class="sc-eYErCu bSLbKf"></div>
                        </form>
                    </div>
                </div>
                <div class="simetria">
                    <img src="{{ url('assets/img/simetria.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
