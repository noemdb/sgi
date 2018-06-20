<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">General</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="objetivo-tab" data-toggle="tab" href="#objetivo" role="tab" aria-controls="objetivo" aria-selected="false">Objetivos</a>
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
      @include('poa.mproductos.mproductos.show.producto')
  </div>

  <div class="tab-pane fade pt-2" id="objetivo" role="tabpanel" aria-labelledby="objetivo-tab">
    @if($mproducto->mobjetivo->count()>0)
      @php($mobjetivo = $mproducto->mobjetivo)
      @include('poa.mobjetivos.mobjetivos.show.mobjetivo')
    @endif
  </div>

  <div class="tab-pane fade pt-2" id="problema" role="tabpanel" aria-labelledby="problema-tab">
    @if($mproducto->mobjetivo->mproblema->count()>0)
      @php($mproblema = $mproducto->mobjetivo->mproblema)
      @include('poa.mproblemas.mproblemas.show.mproblema')
    @endif
  </div>

  <div class="tab-pane fade pt-2" id="poa" role="tabpanel" aria-labelledby="poa-tab">
    @if($mproducto->mobjetivo->mproblema->poa->count()>0)
      @php($poa = $mproducto->mobjetivo->mproblema->poa)
      @include('poa.poas.show.poa')
    @endif
  </div>

  <div class="tab-pane fade pt-2" id="ltime" role="tabpanel" aria-labelledby="ltime-tab">
      @include('elements.widgets.tline')
  </div>

  {{-- <div class="tab-pane fade pt-2" id="mproductos" role="tabpanel" aria-labelledby="mproductos-tab"> --}}

    {{-- @if($mobjetivo->mproductos->count()>0) --}}
      {{-- @php($mproductos = $mobjetivo->mproductos) --}}
      {{-- @foreach($mproductos as $mproducto) --}}
        {{-- <span class="pt-2"><strong>{{ $loop->iteration or '' }}</strong></span> --}}
        {{-- @include('poa.mproductos.mproductos.show.producto') --}}
        {{-- <div class="dropdown-divider"></div> --}}
      {{-- @endforeach --}}
   {{-- @endif  --}}

  {{-- </div> --}}

</div>

