<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">General</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" id="pdeterminantes-tab" data-toggle="tab" href="#pdeterminantes" role="tab" aria-controls="pdeterminantes" aria-selected="false">Determinantes</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" id="mobjetivos-tab" data-toggle="tab" href="#mobjetivos" role="tab" aria-controls="mobjetivos" aria-selected="false">Objetivos</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" id="mproductos-tab" data-toggle="tab" href="#mproductos" role="tab" aria-controls="mproductos" aria-selected="false">Producto</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" id="poa-tab" data-toggle="tab" href="#poa" role="tab" aria-controls="poa" aria-selected="false">POA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="direccions-tab" data-toggle="tab" href="#direccions" role="direccions" aria-controls="direccions" aria-selected="false">Dirección</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="ltime-tab" data-toggle="tab" href="#ltime" role="ltime" aria-controls="ltime" aria-selected="false">Línea de Tiempo</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">

  <div class="tab-pane fade show active pt-2" id="home" role="tabpanel" aria-labelledby="home-tab">
      @include('poa.mproblemas.mproblemas.show.mproblema')
  </div>

  <div class="tab-pane fade pt-2" id="pdeterminantes" role="tabpanel" aria-labelledby="pdeterminantes-tab">
    @if($mproblema->pdeterminantes->count()>0)
      @php($pdeterminantes = $mproblema->pdeterminantes)
      @include('poa.mproblemas.pdeterminantes.show.pdeterminantes')
    @else
      <div class="btn-group float-right border border-white rounded">
        <a class="btn btn-primary" href="{{ route('mproblemas.createWithid',$mproblema->id) }}" role="button">
          <i class="{{ $icon_menus['create'] or ''}}"></i>
        </a>
      </div>
    @endif
  </div>

  <div class="tab-pane fade pt-2" id="mobjetivos" role="tabpanel" aria-labelledby="mobjetivos-tab">
    @if($mproblema->mobjetivos->count()>0)
      @php($mobjetivos = $mproblema->mobjetivos)
      @include('poa.mobjetivos.mobjetivos.show.mobjetivos')
    @else
      <div class="btn-group float-right border border-white rounded">
        <a class="btn btn-primary" href="{{ route('mproblemas.createWithid',$mproblema->id) }}" role="button">
          <i class="{{ $icon_menus['create'] or ''}}"></i>
        </a>
      </div>
    @endif
  </div>

  <div class="tab-pane fade pt-2" id="mproductos" role="tabpanel" aria-labelledby="mproductos-tab">
    @if($mproblema->poa->count()>0)
      @php($poa = $mproblema->poa)
      @include('poa.poas.show.poa')
    @endif
  </div>



  <div class="tab-pane fade pt-2" id="poa" role="tabpanel" aria-labelledby="poa-tab">
    @if($mproblema->poa->count()>0)
      @php($poa = $mproblema->poa)
      @include('poa.poas.show.poa')
    @endif
  </div>

  <div class="tab-pane fade pt-2" id="direccions" role="tabpanel" aria-labelledby="direccions-tab">
    @if($mproblema->direccion->count()>0)
      @php($direccion = $mproblema->direccion)
      @include('poa.direccions.show.direccion')
    @endif
  </div>

  <div class="tab-pane fade pt-2" id="ltime" role="tabpanel" aria-labelledby="ltime-tab">
      @include('elements.widgets.tline')
  </div>

</div>

