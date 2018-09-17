<div class="container">
    {{-- <h4> --}}
        {{-- Análisis Estadístico --}}
    {{-- </h4> --}}
    {{-- INI graphics --}}
    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12">

          @includeIf('poa.mactividads.mactividads.chart.activixrespon')

        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">

               @includeIf('poa.mactividads.mactividads.chart.mactividadsmonths')

        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">

               @includeIf('poa.mactividads.mactividads.chart.mactividadsestado')

        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">

               {{-- @includeIf('poa.mactividads.mactividads.chart.mactividadspoa') --}}

        </div>

    </div>
    {{-- FIN graphics --}}
</div>

