@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="call">
            <h2>Olá, <span style="color:#8108d0;">{{ auth()->user()->name }}</span></h2>
            <h2>Que bom ter você aqui de volta!</h2>
        </div>
        <div class="row squares">
            <div class="col-md-3 square">
                <a href="{{ route('plugins') }}">
                    <div class="d-flex flex-column ">
                        <div>
                            <span><i class="fas fa-arrow-alt-circle-down"></i></span>
                        </div>
                        <div class="my-5">
                            <h2>Plugins</h2>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-md-3 d-flex flex-column square">
                <div>
                    <span><i class="far fa-lightbulb"></i></span>
                </div>
                <div class="my-5">
                    <h2>Cursos</h2>
                </div>
            </div>
            <div class="col-md-3 d-flex flex-column square">
                <div>
                    <span><i class="fas fa-award"></i></span>
                </div>
                <div class="my-5">
                    <h2>Projetos</h2>
                </div>
            </div>
            <div class="col-md-3 d-flex flex-column square">
                <div>
                    <span><i class="fas fa-draw-polygon"></i></span>
                </div>
                <div class="my-5">
                    <h2>Layouts</h2>
                </div>
            </div>

        </div>
        <div class="row squares">
            <div class="col-md-3 d-flex flex-column square">
                <div>
                    <span><i class="fab fa-wordpress-simple"></i></span>
                </div>
                <div class="my-5">
                    <h2>Agências</h2>
                </div>
            </div>
            <div class="col-md-3 d-flex flex-column square">
                <div>
                    <span><i class="fas fa-user-astronaut"></i></span>
                </div>
                <div class="my-5">
                    <h2>Freelancers</h2>
                </div>
            </div>
            <div class="col-md-3 d-flex flex-column square">
                <div>
                    <span><i class="fab fa-font-awesome-flag"></i></span>
                </div>
                <div class="my-5">
                    <h2>free área</h2>
                </div>
            </div>
            <div class="col-md-3 d-flex flex-column square">
                <div>
                    <span><i class="fas fa-hands-helping"></i></span>
                </div>
                <div class="my-5">
                    <h2>Suporte</h2>
                </div>
            </div>

        </div>
    </div>
@endsection
