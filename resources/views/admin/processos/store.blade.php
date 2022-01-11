@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">

      <div class="card">
        <div class="card-header">
          Inserção de Atas
        </div>

        <div class="card-body">

          <form method="post" enctype="multipart/form-data" action="{{ route('processos.store') }}">
            <div class="form-group">
              <label for="name">Nome do Processo</label>

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
              <label for="nameColege">Colegiado</label>

              <select
                class="form-control"
                name="colege"
                id="nameColege">
                <option value='0'>COLEC</option>
                <option value='1'>CONSEP</option>
                <option value='2'>CONSUP</option>
                <option value='3'>NDE</option>
              </select>
            </div>

            <div class="form-group">
              <label for="status">Status</label>

              <select
                class="form-control"
                name="status"
                id="status">
                <option value='0'>Em análise do COLEC</option>
                <option value='1'>Em análise do CONSEP</option>
                <option value='2'>Em análise do CONSUP</option>
                <option value='3'>Em análise do NDE</option>
                <option value='4'>Indeferido</option>
                <option value='5'>Deferido</option>
              </select>
            </div>

            <div class="form-group">
              <label for="openDate">Data de Abertura</label>

              <input
                  type="date"
                  class="form-control"
                  name="openDate"
                  id="openDate"
                  aria-describedby="nameHelp"
                  value="{{ old('openDate') }}" />

                @if($errors->has('openDate'))
                  {{ $errors->first('openDate') }}
                @endif
            </div>

            <div class="form-group">
              <label for="description">Resumo da Ata</label>

              <textarea
                class="form-control"
                name="description"
                id="description"
                rows="5"
                cols="20"
                placeholder="Resumo da Ata">{{ old('description') }}</textarea>

                @if($errors->has('description'))
                  {{ $errors->first('description') }}
                @endif
            </div>

            <div class="form-group">
              <label for="fileAta">ATA</label>

              <input
                  type="file"
                  class="form-control-file"
                  name="ata"
                  id="fileAta"
                  aria-describedby="nameHelp" />
            </div>

            @csrf

            <div class="d-flex justify-content-between align-items-center">
              <a href="{{ route('home') }}" class="btn btn-light">
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



