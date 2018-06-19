<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">General</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="poa-tab" data-toggle="tab" href="#poa" role="tab" aria-controls="poa" aria-selected="false">POA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="direccions-tab" data-toggle="tab" href="#direccions" role="direccions" aria-controls="direccions" aria-selected="false">Dirección</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">

  <div class="tab-pane fade show active pt-2" id="home" role="tabpanel" aria-labelledby="home-tab">
      @include('poa.mproblemas.mproblemas.show.mproblema')
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

</div>