@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">

      <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
          <span>
            Listagens de Atas
          </span>

          <a href="{{route('processos.create')}}"
            class="btn btn-primary btn-sm">Adicionar Ata</a>
        </div>

        <div class="card-body">

          <div class="table-responsive">
            <table class="table table-hover table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Colegiado</th>
                  <th scope="col">Status</th>
                  <th scope="col">Data de Abertura</th>
                  <th scope="col">Descrição</th>
                  <th scope="col">Ata</th>
                  <th scope="col">Ações</th>
                </tr>
              </thead>
              <tbody>
                @foreach($processos as $processo)
                <tr>
                  <th scope="row">
                    {{ $processo->id }}
                  </th>

                  <td>{{ $processo->name }}</td>

                  <td>
                  @switch($processo->colege)
                      @case(0)
                        COLEC
                        @break

                      @case(1)
                        CONSEP
                        @break

                      @case(2)
                        CONSUP
                        @break

                      @case(3)
                        NDE
                        @break
                    @endswitch
                  </td>

                  <td>
                    @switch($processo->status)
                      @case(0)
                        Em análise do COLEC
                        @break

                      @case(1)
                        Em análise do CONSEP
                        @break

                      @case(2)
                        Em análise do CONSUP
                        @break

                      @case(3)
                        Em análise do NDE
                        @break

                      @case(4)
                        INDEFERIDO
                        @break

                      @case(5)
                        DEFERIDO
                        @break
                    @endswitch
                  </td>

                  <td>{{ $processo->openDate }}</td>

                  <td>{{ str_limit($processo->description, 150, '...') }}</td>

                  <td><a href="{{ asset('/atas/' . $processo->ata) }}">Download</a></td>

                  <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Actions">
                      <a href="{{ route('processos.show', ['processos' => $processo->id]) }}"
                        class="btn btn-warning">Editar</a>

                      <a href="{{ route('processos.destroy', ['processos' => $processo->id]) }}"
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
