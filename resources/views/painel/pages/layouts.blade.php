@extends('layouts.site')


@section('content')
<div class="container">
    <div class="page">
        <form action="{{ route('layout.store') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titulo</label>
            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Link Visualizar</label>
            <input type="text" name="link_view" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Link Download</label>
            <input type="text" name="link_down" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Imagem</label>
            <input class="form-control" name="image" type="file" id="formFile">
          </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Categoria</label>
            <input type="text" name="category" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <button class="btn btn-primary" type="submit">Cadastrar</button>
        </form>
    </div>
</div>
@endsection
