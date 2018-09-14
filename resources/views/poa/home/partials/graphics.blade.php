{{-- INI dashboard widget --}}

<div class="container">
    <h4>
        Análisis Estadístico
    </h4>
    {{-- INI graphics --}}
    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12">

               @includeIf('poa.mactividads.mactividads.chart.activresponsable')

        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">

               @includeIf('poa.mactividads.mactividads.chart.mactividadsmonths')

        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">

               @includeIf('poa.mactividads.mactividads.chart.mactividadsestado')

        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">

               @includeIf('poa.mactividads.mactividads.chart.mactividadspoa')

        </div>

    </div>
    {{-- FIN graphics --}}
</div>
{{-- FIN dashboard widget --}}

@section('scripts')
    @parent
    {{-- <script src="{{ asset("js/Chart.js") }}"></script> --}}
    <script src="{{ asset("js/Chart.bundle.js") }}"></script>
    {{-- <script src="{{ asset("js/utils.js") }}"></script> --}}
    <script src="{{ asset("js/ChartFunction.js") }}"></script>{{-- Funciones para generar los Chart --}}

    {{-- INI Evento clic para generar los Chart por rango--}}
    <script src="{{ asset("js/ChartEvent.js") }}"></script>{{-- Funciones para generar los Chart --}}
    {{-- FIN Evento clic para generar los Chart por rango --}}

@endsection