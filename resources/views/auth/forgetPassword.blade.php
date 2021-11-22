@extends('layouts.auth')

@section('container')
<main class="login-form">
  <div class="cotainer">
      <div style="margin-top: 25%;" class="d-flex justify-content-center align-content-center mt-5">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Resetar Senha</div>
                  <div class="card-body">

                    @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif

                      <form action="{{ route('forget.password.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="col-md-6 my-3 text-center offset-md-4">
                              <button type="submit" class="btn-entrar">
                                  Enviar Link de Reset
                              </button>
                          </div>
                      </form>

                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection
