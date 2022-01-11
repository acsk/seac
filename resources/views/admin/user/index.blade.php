@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">

      <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
          <span>
            Usuários
          </span>

          <a href="{{route('user.create')}}"
            class="btn btn-primary btn-sm">Adicionar Usuário</a>
        </div>

        <div class="card-body">

          <div class="table-responsive">
            <table class="table table-hover table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Email</th>
                  <th scope="col">Ações</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <th scope="row">
                    {{ $user->id }}
                  </th>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Actions">
                      <a href="{{ route('user.show', ['user' => $user->id]) }}"
                        class="btn btn-warning">Editar</a>

                      <a href="{{ route('user.destroy', ['user' => $user->id]) }}"
                        class="btn btn-danger">Remover</a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>
@endsection
