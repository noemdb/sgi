<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">General</a>
  </li>

  {{-- <li class="nav-item"> --}}
    {{-- <a class="nav-link" id="afrecuencias-tab" data-toggle="tab" href="#afrecuencias" role="tab" aria-controls="afrecuencias" aria-selected="false">Frecuencia</a> --}}
  {{-- </li> --}}
  <li class="nav-item">
    <a class="nav-link" id="aestados-tab" data-toggle="tab" href="#aestados" role="tab" aria-controls="aestados" aria-selected="false">Estado</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" id="mproductos-tab" data-toggle="tab" href="#mproductos" role="tab" aria-controls="mproductos" aria-selected="false">Producto</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="objetivo-tab" data-toggle="tab" href="#objetivo" role="tab" aria-controls="objetivo" aria-selected="false">Objetivo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="problema-tab" data-toggle="tab" href="#problema" role="tab" aria-controls="problema" aria-selected="false">Problema</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="poa-tab" data-toggle="tab" href="#poa" role="tab" aria-controls="poa" aria-selected="false">POA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="ltime-tab" data-toggle="tab" href="#ltime" role="ltime" aria-controls="ltime" aria-selected="false">Línea de Tiempo</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">

  <div class="tab-pane fade show active pt-2" id="home" role="tabpanel" aria-labelledby="home-tab">
      @include('poa.mactividads.mactividads.show.mactividad')
  </div>

  {{-- <div class="tab-pane fade pt-2" id="afrecuencias" role="tabpanel" aria-labelledby="afrecuencias-tab">
    @if($mactividad->afrecuencias->count()>0)
      @php($afrecuencias = $mactividad->afrecuencias)
      @foreach($afrecuencias as $afrecuencia)
        <strong><span>{{ $loop->iteration or ''}}</span></strong>
        @include('poa.mactividads.afrecuencias.show.afrecuencia')
      @endforeach
    @endif
  </div> --}}

  <div class="tab-pane fade pt-2" id="aestados" role="tabpanel" aria-labelledby="aestados-tab">
    {{-- @if($mactividad->afrecuencias->count()>0) --}}
      {{-- @php($afrecuencias = $mactividad->afrecuencias) --}}
      {{-- @foreach($afrecuencias as $afrecuencia) --}}
        {{-- @if($afrecuencia->aestado->count()>0) --}}
          {{-- @include('poa.mactividads.aestados.show.aestados') --}}
        {{-- @endif --}}
      {{-- @endforeach --}}
    {{-- @endif --}}
  </div>

  <div class="tab-pane fade pt-2" id="mproductos" role="tabpanel" aria-labelledby="mproductos-tab">
    @if($mactividad->mproducto->count()>0)
      @php($mproducto = $mactividad->mproducto)
      @include('poa.mproductos.mproductos.show.producto')
    @endif
  </div>

  <div class="tab-pane fade pt-2" id="objetivo" role="tabpanel" aria-labelledby="objetivo-tab">
    @if($mactividad->mproducto->mobjetivo->count()>0)
      @php($mobjetivo = $mactividad->mproducto->mobjetivo)
      {{-- @foreach($mobjetivos as $mobjetivo) --}}
        @include('poa.mobjetivos.mobjetivos.show.mobjetivo')
      {{-- @endforeach --}}
    @endif
  </div>

  <div class="tab-pane fade pt-2" id="problema" role="tabpanel" aria-labelledby="problema-tab">
    @if($mactividad->mproducto->mobjetivo->mproblema->count()>0)
      @php($mproblema = $mactividad->mproducto->mobjetivo->mproblema)
      {{-- @foreach($mobjetivos as $mobjetivo) --}}
        @include('poa.mproblemas.mproblemas.show.mproblema')
      {{-- @endforeach --}}
    @endif
  </div>

  <div class="tab-pane fade pt-2" id="poa" role="tabpanel" aria-labelledby="poa-tab">
    @if($mactividad->mproducto->mobjetivo->mproblema->poa->count()>0)
      @php($poa = $mactividad->mproducto->mobjetivo->mproblema->poa)
      @include('poa.poas.show.poa')
    @endif
  </div>

  <div class="tab-pane fade pt-2" id="ltime" role="tabpanel" aria-labelledby="ltime-tab">
      @include('elements.widgets.tline')
  </div>

</div>

