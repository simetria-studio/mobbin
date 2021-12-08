@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="ola d-md-flex mt-5 ">
            <div class="nome-usuario">
                <img class="img-0" src="{{ url('assets/img/hi-mobbin-150x150.png') }}" alt="">
                <p>Olá, <span style="color: #ffa800;">{{ auth()->user()->name }}</span></p>
            </div>
            <div class="anuncio ">
                <div class="banner">
                    <img src="{{ url('assets/img/banner.jpg') }}" alt="">
                </div>
            </div>
        </div>
{{-- {{-- --}}
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
                        <a href="{{ url('layouts') }}" type="button">
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
    {{-- <div id="drag-container">
        <div id="spin-container">
          <!-- Add your images (or video) here -->
          <img src="{{ url('assets/img/sprite.png') }}" alt="">
          <img src="{{ url('assets/img/sprite2.png') }}" alt="">
          <img src="{{ url('assets/img/sprite3.png') }}" alt="">
          <img src="{{ url('assets/img/sprite4.png') }}" alt="">
          {{-- <img src="https://images.pexels.com/photos/1382734/pexels-photo-1382734.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
          <img src="https://images.pexels.com/photos/1462636/pexels-photo-1462636.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""> --}}

          <!-- Example image with link -->
          {{-- <a target="_blank" href="https://images.pexels.com/photos/139829/pexels-photo-139829.jpeg">
            <img src="https://images.pexels.com/photos/139829/pexels-photo-139829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
          </a> --}}

          <!-- Example add video  -->


          <!-- Text at center of ground -->
          {{-- <p>MOBBIN A MELHOR PLATAFORMA</p>
        </div>
        <div id="ground"></div>
      </div> --}} --}}

      {{-- <div id="music-container"></div> --}}









      <!-- github corner (https://github.com/tholman/github-corners) -->
      {{-- <a href="https://github.com/HoangTran0410/3DCarousel" target="_blank" class="github-corner" aria-label="View source on GitHub"><svg width="80" height="80" viewBox="0 0 250 250" style="fill:#fff; color:#000; position: absolute; top: 0; border: 0; right: 0;" aria-hidden="true"><path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path><path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path><path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path></svg></a><style>.github-corner:hover .octo-arm{animation:octocat-wave 560ms ease-in-out}@keyframes octocat-wave{0%,100%{transform:rotate(0)}20%,60%{transform:rotate(-25deg)}40%,80%{transform:rotate(10deg)}}@media (max-width:500px){.github-corner:hover .octo-arm{animation:none}.github-corner .octo-arm{animation:octocat-wave 560ms ease-in-out}}</style> --}}
@endsection
