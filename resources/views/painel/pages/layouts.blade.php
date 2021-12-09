@extends('layouts.site')


@section('content')
    <div class="container">
        <button class="btn btn-light my-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Criar Layout</button>
        <table class="table bg-light">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Free</th>
                    <th scope="col">Categoria</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($layouts as $layout)
                    <tr>
                        <th scope="row">{{ $layout->id }}</th>
                        <td>{{ $layout->title }}</td>
                        <td>@if ($layout->free == 1) Sim @else Não @endif</td>
                        <td>{{ $layout->category }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Layout</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="page-form">
                            <form action="{{ route('layout.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Titulo</label>
                                    <input type="text" name="title" class="form-control" id="exampleFormControlInput1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Link Visualizar</label>
                                    <input type="text" name="link_view" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Link Download</label>
                                    <input type="text" name="link_down" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Imagem</label>
                                    <input class="form-control" name="image" type="file" id="formFile">
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Selecione a Categoria</label>
                                    <select class="form-select" aria-label="Default select example" name="category">
                                        <option value="WordPress" selected>WordPress</option>
                                        <option value="Laravel">Laravel</option>
                                        <option value="HTML e CSS">HTML</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1"
                                        rows="3"></textarea>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" name="free"
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Grátis?
                                    </label>
                                </div>
                                <button class="btn btn-primary my-4" type="submit">Cadastrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
