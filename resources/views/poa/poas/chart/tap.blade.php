<div class="card mt-2 bd-callout bd-callout-info">
    <div class="card-header">
        <h3>
            Gráficas Relacionadas a POA'S registrados

            {{-- INI Menu rapido --}}
            {{-- <div class="btn-group float-right pt-2"> --}}
                {{-- @include('poa.estudiantes.menus.show') --}}
            {{-- </div> --}}
            {{-- FIN Menu rapido --}}

        </h3>
    </div>

    <div class="card-body p-1">

     @include('poa.poas.chart.body')

    </div>

</div>


 {{-- ini tab --}}
<nav class="pt-1 mt-1">
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-tab01-tab" data-toggle="tab" href="#nav-tab01" role="tab" aria-controls="nav-tab01" aria-selected="true">Gráficas 1</a>
    <a class="nav-item nav-link" id="nav-tab02-tab" data-toggle="tab" href="#nav-tab02" role="tab" aria-controls="nav-tab02" aria-selected="false">Gráficas 2</a>
  </div>
</nav>

<div class="tab-content" id="nav-tabContent">
  {{-- ini tab01 --}}
  <div class="tab-pane fade show active" id="nav-tab01" role="tabpanel" aria-labelledby="nav-tab01-tab">

      <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12">

            {{-- @include('expediente.estudiantes.chart.estudiantesmonth') --}}
            @includeIf('poa.poas.chart.poaxactividad')

        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">

          {{-- @include('expediente.estudiantes.chart.estudiantesestados') --}}

        </div>

      </div>

  </div>
  {{-- fin tab01 --}}

  {{-- ini tab02 --}}
  <div class="tab-pane fade" id="nav-tab02" role="tabpanel" aria-labelledby="nav-tab02-tab">

      <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12">

          {{-- @include('expediente.carreras.chart.carrerasestuds') --}}

        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">

            {{-- @include('expediente.rols.chart.rolsrangeschart') --}}

        </div>

      </div>

  </div>
  {{-- fin tab02 --}}
</div>
{{-- fin tab --}}