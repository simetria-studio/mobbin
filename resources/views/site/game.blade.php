@extends('layouts.site')

@section('content')

<div class="container-custom">
    <div id="score"></div>
    <canvas id="game" style="width: 100%;" width="1280" height="100"></canvas>
    <div id="introduction">Segure o click do mouse para fazer a vareta</div>
    <div id="perfect">DOUBLE SCORE</div>
    <button id="restart">RECOMEÇAR</button>
  </div>





@endsection
