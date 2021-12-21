@extends('layouts.site')
@section('content')
    <div class="sc-kMOkjD kujRMK">
        <div id="skylabWrapper" class="sc-ksPlPm fiBdLJ">
            <div class="sc-zmtOJ kFdGWd">
                {{-- Formulario --}}
                <div class="sc-dYdMoy bRHSrZ">
                    {{-- perfil --}}
                    <section id="section-sn" class="sc-jEUrFJ iqEaGO mb-4">
                        <h2>Meu perfil</h2>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                        <aside>
                            <div class="sc-joCieG sc-eiWQhh jeOLhp eiHLzg">
                                <label class="sc-bQbiG ddByRK">
                                    <div class="hover-text">
                                        <span>Trocar imagem</span>
                                    </div>
                                    <button class="sc-PGRUV ciUpew">
                                        <img src="https://ui-avatars.com/api/?size=512&amp;background=ffa800&amp;color=fff&amp;name={{ auth()->user()->name }}"
                                            alt="Profile">
                                    </button>
                                    <svg viewBox="0 0 180 180" class="sc-joetPs fnCmWH">
                                        <linearGradient id="gradient" x1="100%" y1="0%" x2="0%" y2="0%">
                                            <stop offset="0%" stop-color="#e1e1e6"></stop>
                                            <stop offset="100%" stop-color="#e1e1e6"></stop>
                                        </linearGradient>
                                        <circle r="88" cx="90" cy="90" stroke="url(#gradient)"></circle>
                                    </svg>
                                </label>
                                <h1>{{ auth()->user()->name }} <button loading="0" class="sc-bQltev kjKwmZ nome"
                                        data-bs-toggle="modal" data-bs-target="#nome"><svg stroke="currentColor"
                                            fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                                            width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z">
                                            </path>
                                        </svg>
                                    </button>
                                </h1>
                                <section>
                                    <div class="sc-cSOiNf jjhQja"></div>
                                    <div class="sc-jVcrfF jrislX"></div>
                                </section>
                                {{-- <div class="sc-heOwwK AvgPP">Membro desde: maio, 2020</div> --}}
                            </div>
                        </aside>
                    </section>
                    {{-- <section id="section-Le" class="sc-jEUrFJ iqEaGO mb-4">

                        <div class="sc-kBrnbA jjtpdI">
                            <h2>Endereço</h2>
                        </div>

                        <form data-testid="form" class=" d-sm-block">
                            <section class="sc-ihsSHl fpVrne ">
                                <div color="" class="sc-ezipRf jEXrZm">
                                    <label for="postal_code">CEP</label>
                                    <div class="d-sm-block">
                                        <div class="sc-cTkOiY brFinj ">
                                            <input name="postal_code" type="text" maxlength="8" value="">
                                        </div>
                                    </div>
                                </div>
                                <div color="" class="sc-ezipRf jEXrZm">
                                    <label for="street_name">Rua</label>
                                    <div>
                                        <div class="sc-cTkOiY brFinj">
                                            <input name="street_name" type="text" disabled="" value="">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="sc-ihsSHl jHRxGB">
                                <section class="sc-ihsSHl elHWPS">
                                    <div color="" class="sc-ezipRf jEXrZm">
                                        <label for="number">Número</label>
                                        <div>
                                            <div class="sc-cTkOiY brFinj">
                                                <input name="number" type="number" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <label class="sc-hoXqvr hgPDov">
                                        <div>
                                            <input type="checkbox" name="no_number">
                                            <span>Sem número</span>
                                        </div>
                                    </label>
                                </section>
                                <div color="" class="sc-ezipRf jEXrZm">
                                    <label for="complement">Complemento</label>
                                    <div>
                                        <div class="sc-cTkOiY brFinj">
                                            <input name="complement" type="text" value="">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="sc-ihsSHl jHRxGB">
                                <div color="" class="sc-ezipRf jEXrZm">
                                    <label for="neighborhood">Bairro</label>
                                    <div>
                                        <div class="sc-cTkOiY brFinj">
                                            <input name="neighborhood" type="text" disabled="" value="">
                                        </div>
                                    </div>
                                </div>
                                <section class="sc-ihsSHl fNordE">
                                    <div color="" class="sc-ezipRf jEXrZm">
                                        <label for="city">Cidade</label>
                                        <div>
                                            <div class="sc-cTkOiY brFinj">
                                                <input name="city" type="text" disabled="" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div color="" class="sc-ezipRf jEXrZm">
                                        <label for="state">UF</label>
                                        <div>
                                            <div class="sc-cTkOiY brFinj">
                                                <input name="state" type="text" disabled="" value="">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </section> --}}
                    {{-- <section class="sc-ihsSHl jHRxGB">
                                <section class="sc-ihsSHl dwlTEZ">
                                    <div color="" class="sc-ezipRf jEXrZm">
                                        <label for="phone">Telefone</label>
                                        <div>
                                            <div class="sc-cTkOiY brFinj">
                                                <input class="phone" name="phone" type="text" value="">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </section> --}}
                    {{-- <button loading="0" class="sc-hmfusV gGkNIZ sc-jmdVfC ffvZkK" type="submit">Salvar</button> --}}
                    </form>
                    </section>
                    {{-- acessos e conta --}}
                    <section id="section-Se" class="sc-bQltev hIbTsC">
                        <div class="sc-evBfig nAwjn">
                            <h2>Meu acesso</h2>
                            {{-- <button class="sc-eiWQhh hzwvPp">Excluir minha conta</button> --}}
                        </div>
                        <div class="sc-heOwwK irjWcZ mb-3">
                            <h4>E-mail de cadastro</h4>
                            <div>
                                <span>{{ auth()->user()->email }}</span>
                                {{-- <button type="button" data-bs-toggle="modal" data-bs-target="#email" disabled>Alterar</button> --}}
                            </div>
                        </div>
                        <div class="sc-heOwwK irjWcZ">
                            <h4>Senha</h4>
                            <div>
                                <span>******************</span>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#senha">Alterar</button>
                            </div>
                        </div>
                        {{-- <div class="sc-heOwwK irjWcZ">
                            <h4>CPF/CNPJ</h4>
                            <div>
                                <span>Não cadastrado @if (auth()->user()->cpf) @else @endif</span>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#cpf">Preencher</button>
                            </div>
                        </div> --}}
                    </section>
                    <section id="section-Se" class="sc-bQltev hIbTsC">
                        <div class="sc-evBfig nAwjn">
                            <h2>Freelancer</h2>
                            {{-- <button class="sc-eiWQhh hzwvPp">Excluir minha conta</button> --}}
                        </div>
                        <form action="{{ route('perfil.alt.freelancer', auth()->user()->id) }}" method="post">
                            @csrf
                            <div class="sc-heOwwK irjWcZ mb-3">
                                <h4>Gostaria de se tornar freenlancer?</h4>
                                <div>
                                    <div class="form-check free">
                                        <input class="form-check-input" name="freelancer" type="checkbox" value="1" id="flexCheckDefault" @if(auth()->user()->freelancer == 1) checked @endif>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Sim Gostaria
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="sc-hmfusV gGkNIZ">Confirmar</button>
                            </div>
                        </form>
                        {{-- <div class="sc-heOwwK irjWcZ">
                            <h4>CPF/CNPJ</h4>
                            <div>
                                <span>Não cadastrado @if (auth()->user()->cpf) @else @endif</span>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#cpf">Preencher</button>
                            </div>
                        </div> --}}
                    </section>
                </div>
                {{-- Modal --}}
                <div id="modal">
                    <div class="modal fade" id="email" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title" id="staticBackdropLabel">Alterar e-mail</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form data-testid="form">
                                        <section class="sc-kNPvCX VmZhk">
                                            <div color="" class="sc-ezipRf cTgfMb">
                                                <div>
                                                    <div class="sc-cTkOiY brFinj">
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                            viewBox="0 0 512 512" height="1em" width="1em"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                                                            </path>
                                                        </svg>
                                                        <input name="new_value" type="email" id="new_value"
                                                            aria-label="new_value" placeholder="Novo e-mail" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="sc-hmfusV gGkNIZ">Confirmar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="senha" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title" id="staticBackdropLabel">Alterar senha</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form data-testid="form"
                                        action="{{ route('perfil.alt.password', auth()->user()->id) }}" method="post">
                                        @csrf
                                        <section class="sc-kNPvCX VmZhk">
                                            {{-- <div color="" class="sc-ezipRf bGGNTp">
                                                <div>
                                                    <div class="sc-cTkOiY brFinj">
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                            viewBox="0 0 448 512" height="1em" width="1em"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z">
                                                            </path>
                                                        </svg>
                                                        <input name="current_password" type="password" id="current_password"
                                                            aria-label="current_password" placeholder="Senha atual"
                                                            value="">
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
                                            </div> --}}
                                            <div color="" class="sc-ezipRf bGGNTp">
                                                <div>
                                                    <div class="sc-cTkOiY brFinj">
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                            viewBox="0 0 448 512" height="1em" width="1em"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z">
                                                            </path>
                                                        </svg>
                                                        <input name="password" type="password" id="password"
                                                            aria-label="password" placeholder="Nova senha" value=""><a
                                                            tabindex="-1" class="sc-fvFlmW hRHjch">
                                                            <svg id="zoio" stroke="currentColor" fill="currentColor"
                                                                stroke-width="0" viewBox="0 0 24 24" height="1em"
                                                                width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div color="" class="sc-ezipRf bGGNTp">
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
                                                            placeholder="Confirme sua senha" value="">
                                                        <a tabindex="-1" class="sc-fvFlmW hRHjch">
                                                            <svg id="zoio_confirm" stroke="currentColor" fill="currentColor"
                                                                stroke-width="0" viewBox="0 0 24 24" height="1em"
                                                                width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="sc-hmfusV gGkNIZ">Confirmar</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="cpf" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title" id="staticBackdropLabel">Preencher CPF/CNPJ</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form data-testid="form">
                                        <section class="sc-kNPvCX VmZhk">
                                            <div color="" class="sc-ezipRf jEXrZm">
                                                <div>
                                                    <div class="sc-cTkOiY brFinj">
                                                        <input name="document" type="text" id="document"
                                                            aria-label="document" placeholder="CPF/CNPJ" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="sc-hmfusV gGkNIZ">Confirmar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="nome" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title" id="staticBackdropLabel">Meu Perfil</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <form action="{{ route('perfil.alt.name', auth()->user()->id) }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <section class="sc-ihsSHl jHRxGB">
                                            <div color="" class="sc-ezipRf jEXrZm">
                                                <label for="name">Nome completo</label>
                                                <div>
                                                    <div class="sc-cTkOiY brFinj">
                                                        <input name="name" type="text" id="name" aria-label="name"
                                                            value="{{ auth()->user()->name }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="sc-hmfusV gGkNIZ">Confirmar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
