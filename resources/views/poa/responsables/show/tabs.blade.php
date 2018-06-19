<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">General</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="institucion-tab" data-toggle="tab" href="#institucion" role="tab" aria-controls="institucion" aria-selected="false">Institución</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="direccions-tab" data-toggle="tab" href="#direcciones" role="direcciones" aria-controls="direcciones" aria-selected="false">Dirección</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="poa-tab" data-toggle="tab" href="#poa" role="tab" aria-controls="poa" aria-selected="false">POA'S</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">

  <div class="tab-pane fade show active pt-2" id="home" role="tabpanel" aria-labelledby="home-tab">
      @include('poa.responsables.show.responsable')
  </div>

  <div class="tab-pane fade pt-2" id="institucion" role="tabpanel" aria-labelledby="institucion-tab">
    @if($responsable->direccion->institucion->count()>0)
      @php($institucion = $responsable->direccion->institucion)
      @include('poa.institucions.show.institucion')
    @endif
  </div>

  <div class="tab-pane fade pt-2" id="direcciones" role="tabpanel" aria-labelledby="direcciones-tab">
    @if($responsable->direccion->count()>0)
      @php($direccion = $responsable->direccion)
      @include('poa.direccions.show.direccion')
    @endif
  </div>

  <div class="tab-pane fade pt-2" id="poa" role="tabpanel" aria-labelledby="poa-tab">
     @if($responsable->direccion->institucion->poas->count()>0)
      @php($poas = $responsable->direccion->institucion->poas)
      @include('poa.poas.show.list')
    @endif
  </div>

</div>