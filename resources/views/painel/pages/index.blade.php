@extends('layouts.site')


@section('content')


    <div class="container-alt">

        <div class="button-container">
            <a href="#" class="card">
                <p><i class="fa fa-user-circle-o card-icon"></i></p>
                <p class="card-title">Usuários</p>
            </a>
        </div>

        <div class="button-container">
            <a href="{{ route('layout') }}" class="card">
                <p><i class="fas fa-pager card-icon"></i></p>
                <p class="card-title">Layouts</p>
            </a>
        </div>

        <div class="button-container">
            <a href="#" class="card">
                <p><i class="fas fa-network-wired card-icon"></i></p>
                <p class="card-title">Jobs</p>
            </a>
        </div>

        <div class="button-container">
            <a href="#" class="card">
                <p><i class="fas fa-photo-video card-icon"></i></p>
                <p class="card-title">Videos</p>
            </a>
        </div>

        <div class="button-container">
            <a href="#" class="card">
                <p><i class="fas fa-cogs card-icon"></i></p>
                <p class="card-title">Config</p>
            </a>
        </div>



    </div>


@endsection
