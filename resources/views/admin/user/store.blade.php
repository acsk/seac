@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">

      <div class="card">
        <div class="card-header">
          Adicionar Usuário
        </div>

        <div class="card-body">

          <form
            method="post"
            action="{{ route('user.store') }}">

            <div class="form-group">
              <label for="name">Nome do Usuário</label>

              <input
                  type="text"
                  class="form-control"
                  name="name"
                  id="name"
                  aria-describedby="nameHelp"
                  placeholder="Nome do Processo"
                  value="{{ old('name') }}" />

                @if($errors->has('name'))
                  {{ $errors->first('name') }}
                @endif
            </div>

            <div class="form-group">
              <label for="email">E-Mail</label>

              <input
                  type="email"
                  class="form-control"
                  name="email"
                  id="email"
                  aria-describedby="nameHelp"
                  placeholder="E-mail do Usuário"
                  value="{{ old('email') }}" />

                @if($errors->has('email'))
                  {{ $errors->first('email') }}
                @endif
            </div>

            <div class="form-group">
              <label for="password">Senha</label>

              <input
                  type="password"
                  class="form-control"
                  name="password"
                  id="password"
                  aria-describedby="nameHelp"
                  placeholder="Password"
                  value="{{ old('password') }}" />

                @if($errors->has('password'))
                  {{ $errors->first('password') }}
                @endif
            </div>

            <div class="form-group">
              <label for="password_confirmation">Confirmação de Senha</label>

              <input
                  type="password"
                  class="form-control"
                  name="password_confirmation"
                  id="password_confirmation"
                  aria-describedby="nameHelp"
                  placeholder="Passworld"
                  value="{{ old('password_confirmation') }}" />

                @if($errors->has('password_confirmation'))
                  {{ $errors->first('password_confirmation') }}
                @endif
            </div>

            @csrf

            <div class="d-flex justify-content-between align-items-center">
              <a href="{{ route('user.index') }}" class="btn btn-light">
                Voltar
              </a>

              <button type="submit" class="btn btn-success">
                Cadastrar
              </button>
            </div>
          </form>

        </div>
      </div>

    </div>
  </div>
</div>
@endsection



