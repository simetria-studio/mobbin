@extends('layouts.site')

@section('content')
    <div class="ola container">
        <div class="nome-usuario">
            <img class="img-0" src="{{ url('assets/img/hi-mobbin-150x150.png') }}" alt="">
            <p><span style="color: rgb(79, 217, 214);">Olá</span>, {{ auth()->user()->name }}</p>
        </div>
        <div class="anuncio ">
            <div class="d-flex item">
                <img src="{{ url('assets/img/banner-black_friday-desktop-1024x153.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="grid-template ">
        <div class="card">
            <a href="">
                <div class="card-image">
                    <img src="{{ url('assets/img/sprite.png') }}" alt="">
                </div>
                <div class="frame"></div>
                <div class="pagina">
                    <p>CURSO <br> WORDPRESS</p>
                </div>
            </a>
        </div>
        <div class="card">
            <a href="{{ route('layouts') }}">
                <div class="card-image">
                    <img src="{{ url('assets/img/sprite2.png') }}" alt="">
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
                    <img src="{{ url('assets/img/sprite3.png') }}" alt="">
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
                    <img src="{{ url('assets/img/sprite4.png') }}" alt="">
                </div>
                <div class="frame"></div>
                <div class="pagina">
                    <p>SUPORTE <br> TÉCNICO</p>
                </div>
            </a>
        </div>
    </div>
@endsection
