@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="ola d-md-flex mt-5 ">
            <div class="nome-usuario">
                <img class="img-0" src="{{ url('assets/img/hi-mobbin-150x150.png') }}" alt="">
                <p><span style="color: rgb(79, 217, 214);">Olá</span>, {{ auth()->user()->name }}</p>
            </div>
            <div class="anuncio ">
                <div class="banner">
                    <p>Procurando <br> jobs?</p>
                </div>
            </div>
        </div>

        <div class="caminhos mt-5">
            <div class="item ">
                <div class="foto">
                    <img src="{{ url('assets/img/sprite.png') }}" alt="">
                </div>
                <div class="d-flex">
                    <div class="texto">
                        <p>Recursos criativos</p>
                    </div>
                    <div class="next">
                        <a href="" type="button">
                            <img src="{{ url('assets/img/next.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="foto">
                    <img src="{{ url('assets/img/sprite2.png') }}" alt="">
                </div>
                <div class="d-flex">
                    <div class="texto">
                        <p>Aprenda e
                            cresça</p>
                    </div>
                    <div class="next">
                        <a href="" type="button">
                            <img src="{{ url('assets/img/next.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="foto">
                    <img src="{{ url('assets/img/sprite3.png') }}" alt="">
                </div>
                <div class="d-flex">
                    <div class="texto">
                        <p>Buscando
                            network?</p>
                    </div>
                    <div class="next">
                        <a href="" type="button">
                            <img src="{{ url('assets/img/next.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="foto">
                    <img src="{{ url('assets/img/sprite4.png') }}" alt="">
                </div>
                <div class="d-flex">
                    <div class="texto">
                        <p>Seja um vip</p>
                    </div>
                    <div class="next">
                        <a href="" type="button">
                            <img src="{{ url('assets/img/next.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
