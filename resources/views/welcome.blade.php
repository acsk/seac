<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SEAC - Famp faculdade</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="/">
            <img src="{{ asset('/imgs/logo.svg') }}" width=100>
          </a>
        </div>
      </nav>

      <div class="container mt-5">

        @foreach($processos as $processo)
        <div class="card mb-3">
          <div class="card-header">
            {{ $processo->name }}
          </div>

          <div class="card-body">
            <div>
              <strong>Colegiado: </strong>
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
            </div>

            <div>
              <strong>Status: </strong>
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
            </div>

            <div>
              <strong>Data de Abertura: </strong>
              {{ $processo->openDate }}
            </div>

            <div>
              <strong>Descrição: </strong>
              {{ $processo->description }}
            </div>
          </div>
        </div>
        @endforeach

      </div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script>
        $('.collapse').collapse()
      </script>
    </body>
</html>
