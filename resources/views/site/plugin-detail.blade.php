@extends('layouts.site')

@section('content')

    <div class="container">
        <div class="row">
            <div class="my-5 col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/CJO0u_HrWE8"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-6 my-5">
                <div class="d-flex flex-column">
                    <div class="desc-plugin d-flex">
                        <div>
                            <span><i class="fas fa-hashtag"></i></span>
                        </div>
                        <div>
                            <p>Yellow Pencil – Visual CSS Style Editor</p>
                        </div>
                    </div>
                    <div class="desc-plugin d-flex">
                        <div>
                            <span><i class="fas fa-hashtag"></i></span>
                        </div>
                        <div>
                            <p>Atualizado em: </p>
                        </div>
                    </div>
                    <div class="desc-plugin d-flex">
                        <div>
                            <span><i class="fas fa-hashtag"></i></span>
                        </div>
                        <div>
                            <p>Versão do Plugin</p>
                        </div>
                    </div>
                    <div class="desc-plugin d-flex">
                        <div>
                            <span><i class="fas fa-arrow-alt-circle-down"></i></span>
                        </div>
                        <div>
                            <p>Baixar Arquivos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 acd">
            <button class="accordion">Instruções</button>
            <div class="acord">
                <p>-</p>
            </div>

            <button class="accordion mt-1">Licença</button>
            <div class="acord">
                <p>Todos os itens inclusos na Plataforma Mobbin são desenvolvidos por terceiros e redistribuídos sob os termos da Licença Pública Geral (GNU GPL). A Mobbin não é associado ou afiliado com nenhum desenvolvedor presente em nosso site.</p>
            </div>
        </div>
    </div>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].onclick = function() {
                this.classList.toggle("active");
                this.nextElementSibling.classList.toggle("show");
            }
        }
    </script>
@endsection
