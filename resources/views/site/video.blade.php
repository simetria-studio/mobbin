@extends('layouts.site')
@section('content')
    <div class="container">
        <div class="grid-container">
            <div class="video">
                <div class="frame">
                    <iframe width="740" height="416" src="https://www.youtube.com/embed/yNcAE7uH9n4"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="controles"></div>
            </div>
            <div class="area">
                <div class="cursos">
                    <div class="titulo">
                        <h4>Titulo do curso</h4>
                    </div>
                    <div class="qt-aulas">
                        <span>5 aulas</span>
                    </div>
                </div>
                <div class="aulas">
                    <div class="scope">
                        <ul>
                            <li class="nav-item"><a href="" class="nav-link active">Aula 01 - Titulo</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Aula 02 - Titulo</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Aula 03 - Titulo</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Aula 04 - Titulo</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Aula 05 - Titulo</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
