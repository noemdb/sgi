<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">General</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="producto-tab" data-toggle="tab" href="#producto" role="tab" aria-controls="producto" aria-selected="false">Producto</a>
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
</ul>
<div class="tab-content" id="myTabContent">

  <div class="tab-pane fade show active pt-2" id="home" role="tabpanel" aria-labelledby="home-tab">
      @include('poa.mproductos.psupuestos.show.psupuesto')
  </div>

  <div class="tab-pane fade pt-2" id="producto" role="tabpanel" aria-labelledby="producto-tab">
    @if($psupuesto->mproducto->count()>0)
      @php($mproducto = $psupuesto->mproducto)
      @include('poa.mproductos.mproductos.show.producto')
    @endif
  </div>

  <div class="tab-pane fade pt-2" id="objetivo" role="tabpanel" aria-labelledby="objetivo-tab">
    @if($psupuesto->mproducto->mobjetivo->count()>0)
      @php($mobjetivo = $psupuesto->mproducto->mobjetivo)
      @include('poa.mobjetivos.mobjetivos.show.mobjetivo')
    @endif
  </div>

  <div class="tab-pane fade pt-2" id="problema" role="tabpanel" aria-labelledby="problema-tab">
    @if($psupuesto->mproducto->mobjetivo->mproblema->count()>0)
      @php($mproblema = $psupuesto->mproducto->mobjetivo->mproblema)
      @include('poa.mproblemas.mproblemas.show.mproblema')
    @endif
  </div>

  <div class="tab-pane fade pt-2" id="poa" role="tabpanel" aria-labelledby="poa-tab">
    @if($psupuesto->mproducto->mobjetivo->mproblema->poa->count()>0)
      @php($poa = $psupuesto->mproducto->mobjetivo->mproblema->poa)
      @include('poa.poas.show.poa')
    @endif
  </div>

</div>

