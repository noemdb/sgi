<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">General</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="direccions-tab" data-toggle="tab" href="#direcciones" role="direcciones" aria-controls="direcciones" aria-selected="false">Direcciones</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="responsables-tab" data-toggle="tab" href="#responsables" role="responsables" aria-controls="responsables" aria-selected="false">Responsables</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="poa-tab" data-toggle="tab" href="#poa" role="tab" aria-controls="poa" aria-selected="false">POA'S</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">

  <div class="tab-pane fade show active pt-2" id="home" role="tabpanel" aria-labelledby="home-tab">
      @include('poa.institucions.show.institucion')
  </div>

  <div class="tab-pane fade pt-2" id="direcciones" role="tabpanel" aria-labelledby="direcciones-tab">
    @if($institucion->direccions->count()>0)
      @php($direccions = $institucion->direccions)
      @include('poa.direccions.show.list')
    @endisset
  </div>

  <div class="tab-pane fade pt-2" id="responsables" role="tabpanel" aria-labelledby="responsables-tab">
    @if($institucion->direccions->count()>0)
      @php($direccions = $institucion->direccions)
      @php ($n=0)
      @foreach($direccions as $direccion)
        @if($direccion->responsables->count()>0)
          @php($responsables =$direccion->responsables)
          @include('poa.responsables.show.list')
        @endif
      @endforeach
    @endisset
  </div>

  <div class="tab-pane fade pt-2" id="poa" role="tabpanel" aria-labelledby="poa-tab">
    @if($institucion->poas->count()>0)
      @php($poas = $institucion->poas)
      @include('poa.poas.show.list')
    @endisset
  </div>

</div>