@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="my-5 text-center">
            <img style="margin: 50px 0;" class="w-75"
                src="{{ url('assets/img/banner-black_friday-desktop-1024x153.png') }}" alt="">
        </div>
    </div>
    <div class="container my-4">
        <div class="row">
            <div class="col-md-6">
                <img class="w-100" src="{{ url('assets/img/banner-aula-landing-desktop-1024.jpg') }}" alt="">
            </div>
            <div class="col-md-6">
                <img class="w-100" src="{{ url('assets/img/embrevedesktop-1024x663.jpg') }}" alt="">
            </div>
        </div>
    </div>
    <div class="text-center mb-5">
        <img src="{{ url('assets/img/simetria.png') }}" alt="">
    </div>
@endsection
