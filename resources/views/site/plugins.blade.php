@extends('layouts.site')

@section('content')

    <div class="container">
        <div class="text-center my-4 plugins">
            <h1>plugins</h1>
            <p>premium</p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <a href="{{ route('plugins.detail') }}">
                    <div class="plugin-card">
                        <div>
                            <img src="{{ url('assets/img/yellowpencil.jpg') }}" alt="">
                        </div>
                        <div>
                            <h3>Yellow Pencil – Visual CSS Style Editor</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>


@endsection
